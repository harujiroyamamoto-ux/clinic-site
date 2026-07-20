<?php
$page_title = '内視鏡検査(胃カメラ・大腸カメラ)';
$page_description = '内視鏡検査と聞くと、つらいイメージはありませんか。鎮静剤・麻酔剤を使用した苦痛の少ない胃・大腸カメラを、平日夕方のイブニング検査や土曜日、同日検査にも対応してわかりやすくご案内しています。';
$page_css = 'page.css';
include __DIR__ . '/../partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="/shinryo/index.php">診療案内</a> &raquo; 内視鏡検査
</div>

<section class="page-header">
  <div class="container">
    <h1>内視鏡検査（胃カメラ・大腸カメラ）</h1>
    <p class="page-lead">
      胃や大腸の内視鏡検査に対応しています。検査時の負担が気になる方には、
      鎮静剤・麻酔剤を使用した検査にも対応しています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <div class="card-grid">
      <a class="card shinryo-card" href="/shinryo/ikamera.php">
        <div class="shinryo-card-header">
          <?php site_image('/assets/images/logo_ikamera.png', '胃カメラのロゴ', 'shinryo-card-logo'); ?>
          <h3>胃カメラ</h3>
        </div>
        <p>胃の痛み・胸やけ・吐き気など、上腹部の症状が気になる方はこちら。</p>
      </a>
      <a class="card shinryo-card" href="/shinryo/daichokamera.php">
        <div class="shinryo-card-header">
          <?php site_image('/assets/images/logo_daichokamera.png', '大腸カメラのロゴ', 'shinryo-card-logo'); ?>
          <h3>大腸カメラ</h3>
        </div>
        <p>血便・便通異常など、下腹部の症状が気になる方はこちら。</p>
      </a>
      <a class="card shinryo-card" href="/shinryo/ikamera-evening.php">
        <div class="shinryo-card-header">
          <?php site_image('/assets/images/logo_evening.png', 'イブニング胃カメラのロゴ', 'shinryo-card-logo'); ?>
          <h3>イブニング胃カメラ</h3>
        </div>
        <p>平日夕方の時間帯で胃カメラ検査を受けたい方はこちら。</p>
      </a>
      <a class="card shinryo-card" href="/shinryo/naishikyo-dojitsu.php">
        <div class="shinryo-card-header">
          <?php site_image('/assets/images/logo_dojitsu.png', '胃・大腸同日検査のロゴ', 'shinryo-card-logo'); ?>
          <h3>胃・大腸同日検査</h3>
        </div>
        <p>胃カメラと大腸カメラを同じ日にまとめて受けたい方はこちら。</p>
      </a>
    </div>

    <div class="cta-box">
      <h2>ご予約・お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/visit.php" class="btn btn-primary">ご来院の方へ</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
