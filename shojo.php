<?php
$page_title = '症状から探す';
$page_description = 'かぜ症状・消化器系・循環器系・糖尿病や脂質異常・呼吸器系・訪問診療など、カテゴリ別に症状から山本内科クリニックの診療案内ページを探せます。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';

$glossary = include __DIR__ . '/data/glossary.php';

$category_labels = [
  'kaze' => 'かぜ症状',
  'shokaki' => '消化器系',
  'junkanki' => '循環器系',
  'seikatsu' => '糖尿病・脂質異常系',
  'kokyuki' => '呼吸器系',
  'houmon' => '訪問診療系',
];

$grouped = [];
foreach ($glossary as $item) {
  if ($item['type'] !== 'symptom') continue;
  $grouped[$item['category']][] = $item;
}
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 症状から探す
</div>

<section class="page-header">
  <div class="container">
    <h1>症状から探す</h1>
    <p class="page-lead">
      気になる症状のカテゴリから、解説ページと関連する診療案内をご覧いただけます。
      正確な診断には受診が必要です。気になる症状がある場合はご相談ください。
    </p>
  </div>
</section>

<section>
  <div class="container">
    <?php foreach ($category_labels as $cat_key => $cat_label): ?>
      <div class="symptom-category">
        <h2><?= htmlspecialchars($cat_label) ?></h2>
        <div class="symptom-tags">
          <?php foreach ($grouped[$cat_key] ?? [] as $item): ?>
            <a class="symptom-tag" href="/shojo/<?= htmlspecialchars($item['key']) ?>.php"><?= htmlspecialchars($item['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <div class="cta-box">
      <h2>ご予約・お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/byomei.php" class="btn btn-primary">病名から探す</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
