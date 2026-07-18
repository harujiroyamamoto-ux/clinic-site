<?php
$page_title = '診療案内';
$page_description = '山本内科クリニックの診療案内。一般内科・生活習慣病、内視鏡検査、特定健診・がん検診、ピロリ菌外来、骨粗しょう症診療、訪問診療に対応しています。';
$page_css = 'page.css';
include __DIR__ . '/../partials/head.php';

$shinryo = include __DIR__ . '/../data/shinryo.php';
?>

<div class="breadcrumb container">
  <a href="/index.php">ホーム</a> &raquo; 診療案内
</div>

<section class="page-header">
  <div class="container">
    <h1>診療案内</h1>
    <p class="page-lead">
      当院では、外来での一般内科診療・生活習慣病管理・内視鏡検査・各種健診に加え、
      通院が難しい方への訪問診療まで、幅広く対応しています。
    </p>
  </div>
</section>

<section>
  <div class="container">
    <div class="card-grid">
      <?php foreach ($shinryo as $item): ?>
        <a class="card shinryo-card" href="<?= htmlspecialchars($item['url']) ?>">
          <h3><?= htmlspecialchars($item['title']) ?></h3>
          <p><?= htmlspecialchars($item['summary']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="cta-box">
      <h2>受診について</h2>
      <p>当院は予約制です。ご来院前に受付までお電話ください（午前20名・午後20名まで）。</p>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/visit.php" class="btn btn-primary">ご来院の方へ</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
