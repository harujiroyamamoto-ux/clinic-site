<?php
$page_title = 'アクセス';
$page_description = '山本内科クリニックへのアクセス。神奈川県横浜市中区本牧町2-364、バス停「小港前」より徒歩圏内、駐車場もございます。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/index.php">ホーム</a> &raquo; アクセス
</div>

<section class="page-header">
  <div class="container">
    <h1>アクセス</h1>
    <p class="page-lead">
      バス停「小港前」より徒歩圏内。お車でお越しの方向けに駐車場もご用意しています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <table class="info-table">
      <tr>
        <th>住所</th>
        <td>〒231-0806　神奈川県横浜市中区本牧町2-364</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td><a href="tel:0456223331" class="tel-link">045-622-3331</a></td>
      </tr>
      <tr>
        <th>バス</th>
        <td>バス停「小港前」より徒歩圏内</td>
      </tr>
      <tr>
        <th>駐車場</th>
        <td>あり</td>
      </tr>
    </table>

    <h2>地図</h2>
    <iframe
      title="山本内科クリニック地図"
      src="https://www.google.com/maps?q=%E7%A5%9E%E5%A5%88%E5%B7%9D%E7%9C%8C%E6%A8%AA%E6%B5%9C%E5%B8%82%E4%B8%AD%E5%8C%BA%E6%9C%AC%E7%89%A7%E7%94%BA2-364&output=embed"
      width="100%"
      height="400"
      style="border:0; border-radius: var(--radius);"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>

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
