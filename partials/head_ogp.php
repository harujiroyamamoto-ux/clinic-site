<?php
// SNSでシェアされたときの見え方（OGP）。
// head.php で作られた $title_tag, $description_tag, $canonical_url をそのまま使う。
?>
<meta property="og:type" content="website">
<meta property="og:site_name" content="山本内科クリニック">
<meta property="og:locale" content="ja_JP">
<meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
<meta property="og:title" content="<?= htmlspecialchars($title_tag) ?>">
<meta property="og:description" content="<?= htmlspecialchars($description_tag) ?>">
<!-- アイキャッチ画像。ロゴ入りのカード画像（1200x630）。外観写真が用意できたら差し替え可 -->
<meta property="og:image" content="<?= htmlspecialchars(SITE_BASE_URL) ?>/assets/images/ogp.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
