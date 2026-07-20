<?php
$page_title = '医師紹介';
$page_description = 'どんな医師が診てくれるのか、受診前に知っておきたいですよね。院長・副院長をはじめ、消化器・循環器・糖尿病・呼吸器・訪問診療など各分野を担当する医師のプロフィールを、写真付きで一人ずつ丁寧にご紹介しています。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 医師紹介
</div>

<section class="page-header">
  <div class="container">
    <h1>医師紹介</h1>
    <p class="page-lead">
      地域のみなさまが安心して受診いただけるよう、院長・副院長をはじめ、
      各分野の医師が診療にあたっています。
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
          内科全般の診療に加え、消化器の専門知識を活かし、内視鏡検査やピロリ菌検査など
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

    <h2>その他の医師</h2>
    <p style="text-align:center;">
      院長・副院長のほか、各分野を担当する医師が診療にあたっています。
      曜日ごとの担当医は<a href="/shinryo/index.php">診療案内の担当医表</a>をご確認ください。
    </p>
    <div class="card-grid">
      <div class="card">
        <p class="doctor-role">総合内科</p>
        <h3>仁多美 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">循環器</p>
        <h3>吉井 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">消化器</p>
        <h3>二本松 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">消化器</p>
        <h3>鈴木 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">糖尿病</p>
        <h3>野田 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">糖尿病</p>
        <h3>唐沢 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">呼吸器</p>
        <h3>仁多寅 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">脳神経・救急</p>
        <h3>橘田 先生</h3>
      </div>
      <div class="card">
        <p class="doctor-role">訪問診療</p>
        <h3>池田 先生</h3>
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
