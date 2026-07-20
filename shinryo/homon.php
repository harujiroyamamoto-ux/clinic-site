<?php
$page_title = '訪問診療(往診)';
$page_description = '通院が難しくなってきた、住み慣れた自宅での療養を考えている、そんなときは訪問診療をご検討ください。総合病院とも連携しながら、日々の健康管理から看取りまで在宅での生活を支えます。';
$page_css = 'page.css';
include __DIR__ . '/../partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="/shinryo/index.php">診療案内</a> &raquo; 訪問診療(往診)
</div>

<section class="page-header">
  <div class="container">
    <h1>訪問診療(往診)</h1>
    <p class="page-lead">
      通院が難しい方のご自宅へ医師が伺う訪問診療を行っています。
      総合病院と連携しながら、ご自宅での療養を支えます。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2>訪問診療とは</h2>
    <p>
      定期的に医師がご自宅（または施設）へ伺い、計画的に診察・治療を行うものです。
      通院が難しくなった方や、住み慣れたご自宅で療養を続けたい方にご利用いただいています。
    </p>

    <h2>当院の訪問診療の特色</h2>
    <ul>
      <li>外来での診療・検査と同じ体制で、症状に応じたきめ細かな対応をいたします</li>
      <li>入院が必要な場合は、連携する総合病院をご紹介いたします</li>
      <li>たんぽぽ訪問看護ステーションと連携し、看護面からもサポートいたします</li>
      <li>ご本人・ご家族のご希望に応じて、ご自宅での療養を継続的に支えます</li>
    </ul>

    <h2>ご利用の流れ（目安）</h2>
    <ol>
      <li>お電話でのご相談</li>
      <li>ご自宅への訪問・診察、今後の方針についてのご相談</li>
      <li>定期的な訪問診療の開始</li>
      <li>必要に応じて訪問看護・総合病院とも連携</li>
    </ol>

    <div class="notice-box">
      <p>
        対応可能な地域やご利用条件は状況により異なりますので、まずはお電話でご相談ください。
        たんぽぽ訪問看護ステーションについては
        <a href="/tanpopo.php">こちら</a>をご覧ください。
      </p>
    </div>

    <div class="cta-box">
      <h2>ご相談・お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/visit.php" class="btn btn-primary">ご来院の方へ</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
