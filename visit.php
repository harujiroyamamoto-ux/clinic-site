<?php
$page_title = 'ご来院の方へ';
$page_description = '初めて受診される方へ、受診の流れ・持ち物・ご予約についてご案内します。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; ご来院の方へ
</div>

<section class="page-header">
  <div class="container">
    <h1>ご来院の方へ</h1>
    <p class="page-lead">
      初めて受診される方にも安心してお越しいただけるよう、受診の流れをご案内します。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2>ご予約について</h2>
    <p>
      当院は予約制です。ご予約はお電話（受付）のみで承っております。
      1日の受付人数は<strong>午前20名・午後20名まで</strong>となっております。定員に達し次第、受付を終了させていただきます。
    </p>
    <div class="notice-box">
      <p>
        Web予約は行っておりません。ご来院前に、必ず受付までお電話ください。<br>
        <a href="tel:0456223331" class="tel-link">📞 045-622-3331</a>
      </p>
    </div>

    <h2>受診の流れ（初診の方）</h2>
    <ol>
      <li>お電話でご予約</li>
      <li>受付にて保険証などをご提示</li>
      <li>問診票のご記入</li>
      <li>診察・必要に応じて検査</li>
      <li>会計・お薬の説明</li>
    </ol>

    <h2>ご来院時の持ち物</h2>
    <ul>
      <li>健康保険証</li>
      <li>各種医療証（お持ちの方）</li>
      <li>お薬手帳</li>
      <li>紹介状（他院から紹介を受けている場合）</li>
    </ul>

    <h2>診療時間</h2>
    <table class="info-table">
      <tr>
        <th>平日</th>
        <td>9:00〜12:00　／　15:00〜18:00</td>
      </tr>
      <tr>
        <th>土曜</th>
        <td>9:00〜12:00（午前のみ）</td>
      </tr>
      <tr>
        <th>休診日</th>
        <td class="closed">土曜午後・日曜・祝日</td>
      </tr>
    </table>

    <div class="cta-box">
      <h2>ご予約・お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/access.php" class="btn btn-primary">アクセス・地図はこちら</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
