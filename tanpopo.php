<?php
$page_title = 'たんぽぽ訪問看護ステーション｜本牧の訪問診療';
$page_description = '退院後や在宅療養中のご自宅での生活を、看護の面から支えます。山本内科クリニックの訪問診療と連携し、看護師による療養上のお世話や医療処置を行う、たんぽぽ訪問看護ステーションをご紹介しています。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="/clinic.php">クリニック紹介</a> &raquo; たんぽぽ訪問看護ステーション
</div>

<section class="page-header">
  <div class="container">
    <h1>たんぽぽ訪問看護ステーション</h1>
    <p class="page-lead">
      平成12年開設。山本内科クリニックと連携し、ご自宅で療養される方への訪問看護を行っています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <?php site_image('/assets/images/tanpopo_224.jpg', 'たんぽぽ訪問看護ステーション・ヘルパーチームえがお 入口', 'clinic-photo related-photo'); ?>

    <h2>サービス内容</h2>
    <p>
      看護師がご自宅へ伺い、療養上のお世話や病状の観察、医師の指示に基づく医療処置などを行います。
      山本内科クリニックの訪問診療とあわせて、ご自宅での療養を支えます。
    </p>

    <div class="notice-box">
      <p>
        ご利用に関するご相談は、山本内科クリニックまでお電話ください。
      </p>
    </div>

    <div class="cta-box">
      <h2>お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/shinryo/homon.php" class="btn btn-primary">訪問診療について</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
