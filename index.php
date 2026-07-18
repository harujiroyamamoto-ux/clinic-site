<?php
$page_title = '';
$page_description = '横浜市中区本牧町の山本内科クリニック。一般内科・生活習慣病・内視鏡検査・訪問診療に対応。外来での予防・治療・検査から、総合病院と連携した在宅医療まで、地域のかかりつけ医として診療しています。';
$page_css = 'index.css';
include __DIR__ . '/partials/head.php';

$news = include __DIR__ . '/data/news.php';
$shinryo = include __DIR__ . '/data/shinryo.php';
?>

<section class="hero">
  <div class="container hero-grid">
    <div class="hero-text">
      <p class="hero-eyebrow">平成3年開院　横浜市中区本牧町</p>
      <h1>地域のホームドクターとして<br>35年以上、皆さまの健康を支えています</h1>
      <p class="hero-lead">
        外来では予防・治療・検査を行い、総合病院と連携しながら、
        訪問診療でご自宅での療養を支えています。
      </p>
      <div class="hero-actions">
        <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
        <a href="/access.php" class="btn btn-primary">アクセスを見る</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="/assets/images/clinic_exterior_day.jpg" alt="山本内科クリニック外観">
    </div>
  </div>
</section>

<section class="news-section">
  <div class="container">
    <h2>お知らせ</h2>
    <ul class="news-list">
      <?php foreach (array_slice($news, 0, 3) as $item): ?>
        <li>
          <span class="news-date"><?= htmlspecialchars($item['date']) ?></span>
          <span class="news-title"><?= htmlspecialchars($item['title']) ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
    <a href="/news.php" class="news-more">お知らせ一覧を見る &raquo;</a>
  </div>
</section>

<section class="shinryo-section">
  <div class="container">
    <h2>診療案内</h2>
    <div class="card-grid">
      <?php foreach ($shinryo as $item): ?>
        <a class="card shinryo-card" href="<?= htmlspecialchars($item['url']) ?>">
          <h3><?= htmlspecialchars($item['title']) ?></h3>
          <p><?= htmlspecialchars($item['summary']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hours-section">
  <div class="container">
    <h2>診療時間</h2>
    <table class="info-table">
      <tr>
        <th>診療時間</th>
        <td>9:00〜12:00　／　15:00〜18:00</td>
      </tr>
      <tr>
        <th>休診日</th>
        <td>土曜午後・日曜・祝日（土曜は午前のみ診療）</td>
      </tr>
      <tr>
        <th>ご予約について</th>
        <td>受付にて承っております。午前20名・午後20名までとなります。</td>
      </tr>
    </table>
  </div>
</section>

<section class="access-section">
  <div class="container access-grid">
    <div>
      <h2>アクセス</h2>
      <p>
        〒231-0806<br>
        神奈川県横浜市中区本牧町2-364<br>
        バス停「小港前」より徒歩圏内<br>
        駐車場あり
      </p>
      <a href="/access.php" class="btn btn-primary">地図・詳しいアクセス方法</a>
    </div>
    <div class="img-placeholder">クリニック外観の写真（準備中）</div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
