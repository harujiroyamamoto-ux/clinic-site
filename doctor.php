<?php
$page_title = '医師紹介';
$page_description = '山本内科クリニックの院長・副院長をご紹介します。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/index.php">ホーム</a> &raquo; 医師紹介
</div>

<section class="page-header">
  <div class="container">
    <h1>医師紹介</h1>
    <p class="page-lead">
      地域のみなさまが安心して受診いただけるよう、院長・副院長が診療にあたっています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">

    <div class="doctor-block">
      <div class="img-placeholder">院長の写真<br>（準備中）</div>
      <div>
        <p class="doctor-role">院長</p>
        <h2>山本 光一郎</h2>
        <ul>
          <li>内科認定医</li>
          <li>消化器病専門医</li>
        </ul>
        <!-- 出身大学・勤務歴など、公開可能な経歴が決まりましたらここに追記します -->
        <p>
          内科全般の診療に加え、消化器の専門知識を活かし、内視鏡検査やピロリ菌外来など
          消化器疾患の診療にも力を入れています。
          患者さんお一人おひとりの話に丁寧に耳を傾け、納得いただける診療を心がけています。
        </p>
      </div>
    </div>

    <div class="doctor-block">
      <div class="img-placeholder">副院長の写真<br>（準備中）</div>
      <div>
        <p class="doctor-role">副院長</p>
        <h2>山本 晴二郎</h2>
        <ul>
          <li>内科専門医（内科・消化器内科）</li>
        </ul>
        <!-- 出身大学・勤務歴など、公開可能な経歴が決まりましたらここに追記します -->
        <p>
          内科・消化器内科を専門とし、一般内科診療から生活習慣病の管理まで幅広く対応しています。
          訪問診療にも携わり、通院が難しい患者さんのご自宅でも安心して療養いただけるよう努めています。
        </p>
      </div>
    </div>

    <div class="cta-box">
      <h2>ご予約・お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/visit.php" class="btn btn-primary">ご来院の方へ</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
