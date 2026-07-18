<?php
// 各ページの<head>と、htmlの開始〜ヘッダーまでをまとめた部品。
// 呼び出す前に $page_title（ページ名）, $page_description, $page_css（任意）を設定しておく。
$title_tag = !empty($page_title)
  ? $page_title . '｜山本内科クリニック'
  : '山本内科クリニック｜横浜市中区本牧町の内科・訪問診療';
$description_tag = $page_description ?? '横浜市中区本牧町の山本内科クリニック。一般内科・生活習慣病・内視鏡検査・訪問診療に対応しています。';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title_tag) ?></title>
<meta name="description" content="<?= htmlspecialchars($description_tag) ?>">
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
