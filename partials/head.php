<?php
// 各ページの<head>と、htmlの開始〜ヘッダーまでをまとめた部品。
// 呼び出す前に $page_title（ページ名）, $page_description, $page_css（任意）を設定しておく。

// サイトの本番ドメイン。公開先が変わったらここだけ直せば全ページに反映される。
define('SITE_BASE_URL', 'https://www.yamamoto-naika.com');

// 画像をWebP対応・サイズ自動付与で表示するヘルパー(site_image関数)。全ページで使えるようにする。
require_once __DIR__ . '/image_helper.php';

// $page_title には「本牧の胃カメラ｜鎮静剤対応」のような、そのページ内容に合った
// 検索キーワードを含む文言を各ページ側で設定する(医院名は付けない。ここで自動的に付く)。
$title_tag = !empty($page_title)
  ? $page_title . '｜山本内科クリニック'
  : '山本内科クリニック｜本牧の内科・消化器内科・訪問診療';
$description_tag = $page_description ?? '横浜市中区本牧町の山本内科クリニック。一般内科・生活習慣病・内視鏡検査・訪問診療に対応しています。';

// canonical（正規URL）。クエリ文字列を除いた現在のパスから自動生成する。
// index.php は "/" 側に寄せて、同じページが2つのURLで重複しないようにする。
$request_path = strtok($_SERVER['REQUEST_URI'] ?? '/index.php', '?');
if (basename($request_path) === 'index.php') {
  $request_path = substr($request_path, 0, -strlen('index.php'));
}
$canonical_url = SITE_BASE_URL . $request_path;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title_tag) ?></title>
<meta name="description" content="<?= htmlspecialchars($description_tag) ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/common.css">
<?php if (!empty($page_css)): ?>
<link rel="stylesheet" href="/assets/css/<?= htmlspecialchars($page_css) ?>">
<?php endif; ?>
<?php include __DIR__ . '/head_favicon.php'; ?>
<?php include __DIR__ . '/head_ogp.php'; ?>
<?php include __DIR__ . '/head_jsonld.php'; ?>
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
