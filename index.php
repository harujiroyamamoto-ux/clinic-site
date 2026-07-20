<?php
$page_title = '';
$page_description = '本牧町で開院35年、地域に根ざした内科クリニックです。かぜや生活習慣病はもちろん、胃・大腸カメラや循環器、訪問診療まで幅広く対応。予防から治療、看取りまで、何でもまず相談できる街のかかりつけ医として、皆さまの健康を支えます。';
$page_css = 'index.css';
include __DIR__ . '/partials/head.php';

$news = include __DIR__ . '/data/news.php';
$shinryo = include __DIR__ . '/data/shinryo.php';
?>

<section class="hero-photo">
  <div class="hero-photo-slideshow">
    <img src="/assets/images/waiting_room.jpg" alt="山本内科クリニック待合室" class="hero-photo-img is-active">
    <img src="/assets/images/clinic_exterior_day.jpg" alt="山本内科クリニック外観" class="hero-photo-img">
  </div>
  <div class="hero-photo-overlay">
    <div class="container">
      <p class="hero-photo-eyebrow">平成3年開院　地域とともに35年</p>
      <h1 class="hero-photo-title">予防から看取りまで。<br>35年の信頼を礎に、生涯を支える医療を。</h1>
      <div class="hero-actions">
        <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
        <a href="/access.php" class="btn btn-primary">アクセスを見る</a>
      </div>
    </div>
  </div>
</section>

<section class="feature-section">
  <div class="container">
    <h2>山本内科クリニックの特色</h2>
    <div class="feature-row">
      <div class="feature-item feature-color-blue">
        <div class="feature-item-header">
          <span class="feature-item-badge"><span class="feature-item-badge-num">1</span></span>
          <h3>地域に密着して35年</h3>
        </div>
        <img src="/assets/images/feature_chiiki.png" alt="地域に密着した診療のイメージ" class="feature-item-photo">
        <p class="feature-item-caption">
          平成3年の開院以来、35年にわたり本牧の地で診療を続けてきました。
        </p>
      </div>
      <div class="feature-item feature-color-green">
        <div class="feature-item-header">
          <span class="feature-item-badge"><span class="feature-item-badge-num">2</span></span>
          <h3>生涯を支える医療</h3>
        </div>
        <img src="/assets/images/feature_shogai.png" alt="生涯を支える医療のイメージ" class="feature-item-photo">
        <p class="feature-item-caption">
          外来での予防・検査・治療から、通院が困難になった際には在宅医療を行います。
        </p>
      </div>
      <div class="feature-item feature-color-orange">
        <div class="feature-item-header">
          <span class="feature-item-badge"><span class="feature-item-badge-num">3</span></span>
          <h3>幅広い内科診療</h3>
        </div>
        <img src="/assets/images/feature_naika.png" alt="内科診療のイメージ" class="feature-item-photo">
        <p class="feature-item-caption">
          必要時に循環器や糖尿病といった専門外来受診のご案内を行います。
        </p>
      </div>
      <div class="feature-item feature-color-purple">
        <div class="feature-item-header">
          <span class="feature-item-badge"><span class="feature-item-badge-num">4</span></span>
          <h3>鎮静剤を使用した内視鏡に対応</h3>
        </div>
        <img src="/assets/images/feature_naishikyo.png" alt="内視鏡検査のイメージ" class="feature-item-photo">
        <p class="feature-item-caption">
          消化器内視鏡を専門とする医師による、苦痛を最小限にした胃カメラと大腸カメラが可能です。
        </p>
      </div>
    </div>
  </div>
</section>

<section class="greeting-section">
  <div class="container">
    <div class="img-placeholder greeting-photo">院長・副院長の写真<br>（準備中）</div>
    <div>
      <h2>ごあいさつ</h2>
      <p>
        閑静な住宅街にたたずむ開業30年以上のクリニック。風邪、生活習慣病、専門的な内視鏡検査や各種専門外来、訪問診療と幅広い診察を行っています。予防から看取りまで行えるホームドクターに最適なクリニックです。地域の長寿化と発展のため、信頼され頼りにされるクリニックをめざしています。
      </p>
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
    <p class="shinryo-department-list">内科｜消化器内科｜内視鏡(胃カメラ・大腸カメラ)｜循環器内科｜糖尿病内科｜訪問診療</p>
    <div class="card-grid">
      <?php foreach ($shinryo as $item): ?>
        <a class="card shinryo-card shinryo-card-compact <?= htmlspecialchars($item['color'] ?? '') ?>" href="<?= htmlspecialchars($item['url']) ?>">
          <?php if (!empty($item['logo'])): ?>
            <img src="<?= htmlspecialchars($item['logo']) ?>" alt="<?= htmlspecialchars($item['title']) ?>のロゴ" class="shinryo-card-logo">
          <?php else: ?>
            <span class="shinryo-card-logo img-placeholder">ロゴ<br>（準備中）</span>
          <?php endif; ?>
          <h3><?= htmlspecialchars($item['title']) ?></h3>
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
        <td>木曜・水曜午後・土曜午後・日曜・祝日（水曜・土曜は午前のみ診療）</td>
      </tr>
      <tr>
        <th>ご予約について</th>
        <td>受付にて承っております。午前20名・午後20名までとなります。</td>
      </tr>
    </table>

    <table class="week-schedule">
      <tr>
        <th></th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
        <th>日・祝</th>
      </tr>
      <tr>
        <th>午前</th>
        <td>○</td>
        <td>○</td>
        <td>○</td>
        <td class="closed">×</td>
        <td>○</td>
        <td>○</td>
        <td class="closed">×</td>
      </tr>
      <tr>
        <th>午後</th>
        <td>○</td>
        <td>○</td>
        <td class="closed">×</td>
        <td class="closed">×</td>
        <td>○</td>
        <td class="closed">×</td>
        <td class="closed">×</td>
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
    <img src="/assets/images/clinic_exterior_night.jpg" alt="山本内科クリニック外観（夜間）" class="clinic-photo">
  </div>
</section>

<section class="recruit-banner-section">
  <div class="container">
    <a href="/recruit.php" class="recruit-banner-link">
      <img src="/assets/images/recruit_banner.png" alt="私たちと一緒に働く仲間を募集しています！求人情報はこちら" class="recruit-banner-image">
    </a>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
