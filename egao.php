<?php
$page_title = 'ヘルパーチームえがお｜本牧の訪問診療';
$page_description = '食事や掃除、入浴の介助など、日常生活のちょっとしたお手伝いも、地域の専門スタッフにお任せください。山本内科クリニックと連携する訪問介護、ヘルパーチームえがおの取り組みを詳しくご紹介します。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="/clinic.php">クリニック紹介</a> &raquo; ヘルパーチームえがお
</div>

<section class="page-header">
  <div class="container">
    <h1>ヘルパーチームえがお</h1>
    <p class="page-lead">
      平成17年開設。ご自宅での日常生活をサポートする訪問介護サービスです。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <?php site_image('/assets/images/egao_224.jpg', 'ヘルパーチームえがお マスコット', 'related-mascot'); ?>

    <h2>サービス内容</h2>
    <p>
      ホームヘルパーがご自宅へ伺い、食事・入浴・排せつなどの介助や、掃除・買い物などの生活援助を行います。
      山本内科クリニック・たんぽぽ訪問看護ステーションと連携し、医療・看護・介護の面から在宅生活を支えます。
    </p>

    <div class="notice-box">
      <p>
        ご利用に関するご相談は、山本内科クリニックまでお電話ください。
      </p>
    </div>

    <div class="cta-box">
      <h2>お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/clinic.php" class="btn btn-primary">クリニック紹介へ戻る</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
