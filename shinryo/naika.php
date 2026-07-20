<?php
$page_title = '一般内科';
$page_description = 'かぜや発熱、体のちょっとした不調も、まずはお気軽にご相談ください。急な体調不良への対応から、生活習慣病の管理や健康診断後のフォローなど、日常的な健康維持まで幅広く対応する一般内科のご案内です。';
$page_css = 'page.css';
include __DIR__ . '/../partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="/shinryo/index.php">診療案内</a> &raquo; 一般内科
</div>

<section class="page-header">
  <div class="container">
    <h1>一般内科</h1>
    <p class="page-lead">
      かぜや発熱などの急な体調不良から、日々の体調管理まで、
      地域のかかりつけ医として幅広く診療しています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2>こんな症状のときにご相談ください</h2>
    <ul>
      <li>発熱、せき、のどの痛みなどのかぜ症状</li>
      <li>頭痛、めまい、倦怠感</li>
      <li>むくみ、動悸など気になる症状がある</li>
      <li>体調不良が続いている、原因がはっきりしない</li>
    </ul>

    <p>
      消化器の症状は<a href="/shinryo/shokaki.php">消化器外来</a>、
      糖尿病は<a href="/shinryo/tonyobyo.php">糖尿病</a>、
      高血圧・脂質異常症などは<a href="/shinryo/seikatsu.php">生活習慣病</a>のページもあわせてご覧ください。
    </p>

    <div class="notice-box">
      <p>
        当院は予約制です。受診をご希望の方は、事前に受付までお電話ください。
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
