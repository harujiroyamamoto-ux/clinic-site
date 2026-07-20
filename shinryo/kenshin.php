<?php
$page_title = '各種健診・ワクチン';
$page_description = '病気は早期発見が何より大切です。特定健康診査や胃・大腸がん検診などの各種がん検診、季節ごとの予防接種を通じて、日頃からの健康管理と病気の予防をしっかりサポートしています。';
$page_css = 'page.css';
include __DIR__ . '/../partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="/shinryo/index.php">診療案内</a> &raquo; 各種健診・ワクチン
</div>

<section class="page-header">
  <div class="container">
    <h1>各種健診・ワクチン</h1>
    <p class="page-lead">
      生活習慣病や病気の早期発見・予防のため、特定健康診査・各種がん検診・予防接種を実施しています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2>健診・検診について</h2>
    <p>
      当院では、自治体の特定健康診査や各種がん検診に対応しています。
      対象となる検診の種類やご負担額は、年齢やお住まいの自治体によって異なります。
      詳しくは受付までお問い合わせください。
    </p>

    <h2>こんな方におすすめします</h2>
    <ul>
      <li>1年以上健診を受けていない</li>
      <li>血圧・血糖値・脂質などの数値が気になる</li>
      <li>ご家族にがんや生活習慣病の既往がある</li>
      <li>体の変化を早めに確認しておきたい</li>
    </ul>

    <h2>予防接種(ワクチン)について</h2>
    <p>
      当院では各種予防接種に対応しています。ワクチンの種類・料金・接種可能時期については、
      在庫状況により異なりますので、お電話でご確認ください。
    </p>

    <div class="notice-box">
      <p>
        検診・予防接種の種類・料金・持ち物は、お電話でご案内しています。お気軽にお問い合わせください。
      </p>
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
