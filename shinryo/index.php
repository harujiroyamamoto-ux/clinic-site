<?php
$page_title = '診療案内';
$page_description = '山本内科クリニックの診療案内。一般内科、消化器外来、内視鏡検査、糖尿病、生活習慣病、訪問診療、各種健診・ワクチンに対応しています。';
$page_css = 'page.css';
include __DIR__ . '/../partials/head.php';

$shinryo = include __DIR__ . '/../data/shinryo.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 診療案内
</div>

<section class="page-header">
  <div class="container">
    <h1>診療案内</h1>
    <p class="page-lead">
      当院では、一般内科・消化器外来・内視鏡検査・糖尿病・生活習慣病の診療から、
      各種健診・ワクチン、通院が難しい方への訪問診療まで、幅広く対応しています。
    </p>
  </div>
</section>

<section>
  <div class="container">
    <div class="card-grid card-grid-vertical">
      <?php foreach ($shinryo as $item): ?>
        <a class="card shinryo-card <?= htmlspecialchars($item['color'] ?? '') ?>" href="<?= htmlspecialchars($item['url']) ?>">
          <h3><?= htmlspecialchars($item['title']) ?></h3>
          <p><?= htmlspecialchars($item['summary']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>

    <h2>担当医表</h2>
    <p class="page-lead" style="max-width:none; text-align:center;">
      外来診療の担当医と診療時間のご案内です。担当医は都合により変更になる場合がございます。
    </p>
    <img src="/assets/images/tantoi_hyou.png" alt="担当医表。外来診療・在宅診療（訪問診療）の曜日別の担当医と、各種検査（超音波検査・胃内視鏡検査）の実施日をご案内しています。詳しくは受付・お電話にてお問い合わせください。" class="tantoi-hyou-image">

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
