<?php
$page_title = '病名から探す｜本牧の内科・消化器内科';
$page_description = '健診で指摘された、または気になる病名はありませんか。萎縮性胃炎から高血圧、糖尿病、大腸ポリープまで、考えられる原因や検査方法、当院での治療の流れやセルフケアを病名ごとに一つずつわかりやすく解説しています。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';

$glossary = include __DIR__ . '/data/glossary.php';

$category_labels = [
  'kaze' => 'かぜ症状',
  'ishokudo' => '食道・胃',
  'daicho' => '大腸',
  'junkanki' => '循環器',
  'seikatsu' => '糖尿病・脂質異常',
  'kokyuki' => '呼吸器',
  'houmon' => '訪問診療',
];

$category_colors = [
  'kaze' => 'accent-blue',
  'ishokudo' => 'accent-rose',
  'daicho' => 'accent-teal',
  'junkanki' => 'accent-coral',
  'seikatsu' => 'accent-amber',
  'kokyuki' => 'accent-sky',
  'houmon' => 'accent-indigo',
];

$grouped = [];
foreach ($glossary as $item) {
  if ($item['type'] !== 'disease') continue;
  $grouped[$item['category']][] = $item;
}
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 病名から探す
</div>

<section class="page-header">
  <div class="container">
    <h1>病名から探す</h1>
    <p class="page-lead">
      気になる病名のカテゴリから、解説ページと関連する診療案内をご覧いただけます。
      正確な診断には受診が必要です。気になる症状がある場合はご相談ください。
    </p>
  </div>
</section>

<section>
  <div class="container">
    <?php foreach ($category_labels as $cat_key => $cat_label): ?>
      <div class="symptom-category <?= htmlspecialchars($category_colors[$cat_key] ?? '') ?>">
        <h2><?= htmlspecialchars($cat_label) ?></h2>
        <div class="symptom-tags">
          <?php foreach ($grouped[$cat_key] ?? [] as $item): ?>
            <a class="symptom-tag" href="/byomei/<?= htmlspecialchars($item['key']) ?>.php"><?= htmlspecialchars($item['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <div class="cta-box">
      <h2>ご予約・お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/shojo.php" class="btn btn-primary">症状から探す</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
