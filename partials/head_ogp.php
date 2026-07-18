<?php
// SNSでシェアされたときの見え方（OGP）。第4部・集客編で内容を詰める。
// $page_title, $page_description, $page_url があれば使う。
$og_title = $page_title ?? '山本内科クリニック';
$og_description = $page_description ?? '横浜市中区本牧町の内科クリニック。一般内科・生活習慣病・内視鏡検査・訪問診療に対応しています。';
?>
<meta property="og:type" content="website">
<meta property="og:site_name" content="山本内科クリニック">
<meta property="og:title" content="<?= htmlspecialchars($og_title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($og_description) ?>">
<meta property="og:image" content="/assets/images/ogp.jpg">
