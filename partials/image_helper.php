<?php
// 画像をWebP対応で表示するための共通ヘルパー。
//
// 【一言でいうと】 <img>タグを直接書く代わりにsite_image()を呼ぶだけで、
// (1) WebPに対応したブラウザには軽いWebP画像を、対応していないブラウザには
//     元のjpg/pngを自動で出し分け、
// (2) 画像の実際の縦横サイズを自動で読み取ってwidth/height属性を付ける
// という2つの処理を、ページ側は何も意識せずに済ませられる。
//
// 使い方: partials/head.php で自動的に読み込まれるので、各ページでは
//   site_image('/assets/images/foo.jpg', '説明文', 'css-class');
// をPHPタグの中で呼ぶだけでよい（htmlspecialchars等のエスケープも内部で行う）。

define('IMG_ASSET_DIR', __DIR__ . '/../assets/images');
define('IMG_WEBP_QUALITY', 82);

/**
 * WebP対応の<picture>タグ（またはフォールバックの<img>タグ）を画面に出力する。
 *
 * @param string $src   画像パス（サイトルートからの絶対パス。例: /assets/images/foo.jpg）
 * @param string $alt   代替テキスト
 * @param string $class imgタグに付けるclass属性（任意）
 * @param array  $attrs 追加で付けたいHTML属性（例: ['loading' => 'eager']）
 */
function site_image(string $src, string $alt, string $class = '', array $attrs = []): void {
  echo site_image_html($src, $alt, $class, $attrs);
}

/** site_image()のHTML文字列版（echoせず戻り値としてほしい場合に使う） */
function site_image_html(string $src, string $alt, string $class = '', array $attrs = []): string {
  $local_path = IMG_ASSET_DIR . '/' . basename($src);

  [$width, $height] = site_image_dimensions($src, $local_path);
  $webp_src = site_image_webp_url($src, $local_path);

  $default_attrs = ['loading' => 'lazy', 'decoding' => 'async'];
  $attrs = $attrs + $default_attrs;
  $attr_html = '';
  foreach ($attrs as $key => $value) {
    $attr_html .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars((string) $value) . '"';
  }

  $size_html = ($width && $height) ? sprintf(' width="%d" height="%d"', $width, $height) : '';
  $class_html = $class !== '' ? ' class="' . htmlspecialchars($class) . '"' : '';

  $img_tag = sprintf(
    '<img src="%s" alt="%s"%s%s%s>',
    htmlspecialchars($src),
    htmlspecialchars($alt),
    $size_html,
    $class_html,
    $attr_html
  );

  if ($webp_src === null) {
    return $img_tag;
  }

  return '<picture><source srcset="' . htmlspecialchars($webp_src) . '" type="image/webp">' . $img_tag . '</picture>';
}

/**
 * 画像の実寸(幅・高さ)を取得する。同じ画像を1回のリクエスト内で
 * 何度も呼んでも、ファイルを読み直さないようにキャッシュする。
 */
function site_image_dimensions(string $src, string $local_path): array {
  static $cache = [];
  if (isset($cache[$src])) {
    return $cache[$src];
  }
  $result = [null, null];
  if (is_file($local_path)) {
    $info = @getimagesize($local_path);
    if ($info) {
      $result = [$info[0], $info[1]];
    }
  }
  $cache[$src] = $result;
  return $result;
}

/**
 * 画像のWebP版のURLを返す。まだWebP版が無い場合や、元画像より古い場合は
 * その場で生成してから返す。生成できなければnull（＝元画像のみ表示）を返す。
 */
function site_image_webp_url(string $src, string $local_path): ?string {
  if (!is_file($local_path)) {
    return null;
  }
  $ext = strtolower(pathinfo($local_path, PATHINFO_EXTENSION));
  if (!in_array($ext, ['jpg', 'jpeg', 'png'], true)) {
    return null; // すでにwebp/svgなどはそのまま使う
  }

  $webp_local_path = preg_replace('/\.(jpe?g|png)$/i', '.webp', $local_path);
  $webp_src = preg_replace('/\.(jpe?g|png)$/i', '.webp', $src);

  $needs_generation = !is_file($webp_local_path)
    || filemtime($webp_local_path) < filemtime($local_path);

  if ($needs_generation && !site_image_generate_webp($local_path, $webp_local_path, $ext)) {
    return null;
  }

  return $webp_src;
}

/** GD拡張を使って、jpg/pngからWebP画像ファイルを生成する。 */
function site_image_generate_webp(string $source_path, string $dest_path, string $ext): bool {
  if (!function_exists('imagewebp')) {
    return false; // WebPに対応していないサーバー環境では諦めて元画像のみ表示
  }

  if ($ext === 'png') {
    $image = @imagecreatefrompng($source_path);
    if ($image) {
      imagepalettetotruecolor($image);
      imagealphablending($image, true);
      imagesavealpha($image, true);
    }
  } else {
    $image = @imagecreatefromjpeg($source_path);
  }

  if (!$image) {
    return false;
  }

  // サーバー側の書き込み権限が無い環境でも、警告を出さずに諦めて元画像表示にフォールバックする
  $ok = @imagewebp($image, $dest_path, IMG_WEBP_QUALITY);
  imagedestroy($image);
  return $ok;
}
