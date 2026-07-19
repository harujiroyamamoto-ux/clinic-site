<?php
$page_title = '病名から探す';
$page_description = '高血圧・糖尿病・胃炎・ピロリ菌感染症・骨粗しょう症など、病名から山本内科クリニックの診療案内ページを探せます。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';

$byomei = [
  [
    'title' => '高血圧・糖尿病・脂質異常症',
    'url' => '/shinryo/naika.php',
    'summary' => '生活習慣病として、定期的な検査と治療・生活指導を行います。',
  ],
  [
    'title' => 'かぜ症候群',
    'url' => '/shinryo/naika.php',
    'summary' => '発熱・せき・のどの痛みなど、急な体調不良に対応します。',
  ],
  [
    'title' => '胃炎・胃潰瘍・十二指腸潰瘍',
    'url' => '/shinryo/ikamera.php',
    'summary' => '胃カメラによる検査に対応しています。',
  ],
  [
    'title' => '大腸ポリープ',
    'url' => '/shinryo/daichokamera.php',
    'summary' => '大腸カメラによる検査に対応しています。',
  ],
  [
    'title' => 'ピロリ菌感染症',
    'url' => '/shinryo/pylori.php',
    'summary' => '検査・除菌治療に対応しています。',
  ],
  [
    'title' => '骨粗しょう症',
    'url' => '/shinryo/kosso.php',
    'summary' => '骨密度検査をもとに、予防・治療に取り組んでいます。',
  ],
];
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 病名から探す
</div>

<section class="page-header">
  <div class="container">
    <h1>病名から探す</h1>
    <p class="page-lead">
      気になる病名から、関連する診療案内ページをご覧いただけます。
      正確な診断には受診が必要です。気になる症状がある場合はご相談ください。
    </p>
  </div>
</section>

<section>
  <div class="container">
    <div class="card-grid">
      <?php foreach ($byomei as $item): ?>
        <a class="card shinryo-card" href="<?= htmlspecialchars($item['url']) ?>">
          <h3><?= htmlspecialchars($item['title']) ?></h3>
          <p><?= htmlspecialchars($item['summary']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>

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
