<?php
$page_title = 'クリニック紹介';
$page_description = '初めての通院は、どんな場所か分からず少し緊張しますよね。受付や待合室、診察室の雰囲気から、訪問看護・介護と連携した関連施設のご案内まで、写真を交えてクリニックの様子を詳しくご紹介しています。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; クリニック紹介
</div>

<section class="page-header">
  <div class="container">
    <h1>クリニック紹介</h1>
    <p class="page-lead">
      平成3年の開設以来、地域のみなさまのかかりつけ医として診療を続けています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2>院内のご案内</h2>
    <div class="card-grid">
      <div class="img-placeholder">受付・待合室の写真<br>（準備中）</div>
      <div class="img-placeholder">診察室の写真<br>（準備中）</div>
      <?php site_image('/assets/images/clinic_exterior_night.jpg', '山本内科クリニック外観（夜間）', 'clinic-photo'); ?>
    </div>
    <p>
      院内には空気清浄装置を導入し、清潔な環境づくりに努めています。
      どなたでも安心してご来院いただけるよう、スタッフ一同対応いたします。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2>沿革</h2>
    <table class="info-table">
      <tr><th>平成3年</th><td>山本内科クリニック 開設</td></tr>
      <tr><th>平成12年</th><td>たんぽぽ訪問看護ステーション 開設</td></tr>
      <tr><th>平成17年</th><td>ヘルパーチームえがお 開設</td></tr>
    </table>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2>関連施設</h2>
    <p>
      当院は、訪問看護ステーション・ヘルパーチームと連携し、外来診療から在宅療養まで
      一体的にサポートできる体制を整えています。
    </p>
    <div class="card-grid">
      <a class="card shinryo-card" href="/tanpopo.php">
        <h3>たんぽぽ訪問看護ステーション</h3>
        <p>ご自宅で療養される方への訪問看護を行っています。</p>
      </a>
      <a class="card shinryo-card" href="/egao.php">
        <h3>ヘルパーチームえがお</h3>
        <p>日常生活のサポートを行う訪問介護サービスです。</p>
      </a>
    </div>
  </div>
</section>

<div class="container">
  <div class="cta-box">
    <h2>ご予約・お問い合わせ</h2>
    <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
    <a href="/access.php" class="btn btn-primary">アクセス</a>
  </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
