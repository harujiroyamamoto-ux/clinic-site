<?php
$page_title = 'お知らせ';
$page_description = '臨時休診のお知らせや診療体制の変更、院内からのご案内など、山本内科クリニックからの最新情報を随時こちらに掲載しています。受診の前に、ぜひ一度あわせてご確認いただくと安心です。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';

$news = include __DIR__ . '/data/news.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; お知らせ
</div>

<section class="page-header">
  <div class="container">
    <h1>お知らせ</h1>
    <p class="page-lead">臨時休診や当院からのお知らせを掲載します。</p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <ul class="news-list news-list-full">
      <?php foreach ($news as $item): ?>
        <li>
          <span class="news-date"><?= htmlspecialchars($item['date']) ?></span>
          <div>
            <p class="news-title"><?= htmlspecialchars($item['title']) ?></p>
            <?php if (!empty($item['body'])): ?>
              <p class="news-body"><?= htmlspecialchars($item['body']) ?></p>
            <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
