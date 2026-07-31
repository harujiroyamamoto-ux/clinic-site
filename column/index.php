<?php
$page_title = '医療コラム｜本牧の内科・消化器内科';
$page_description = '山本内科クリニックの医師が、胃腸の健康・生活習慣病・内視鏡検査・訪問診療などに関するコラムを定期発信しています。「気になるけど病院に行くほどでもない」と感じる症状や疑問のヒントにしてください。';
$page_css = 'page.css';
include __DIR__ . '/../partials/head.php';

$columns = include __DIR__ . '/../data/columns.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 医療コラム
</div>

<section class="page-header">
  <div class="container">
    <h1>医療コラム</h1>
    <p class="page-lead">
      当院の医師が、日常診療でよく受ける質問や気になる健康トピックをわかりやすく解説します。
      週に1回を目安に更新しています。
    </p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <div class="column-card-list">
      <?php foreach ($columns as $col): ?>
        <a href="/column/<?= htmlspecialchars($col['slug']) ?>.php" class="column-card">
          <div class="column-card-meta">
            <span class="column-category-badge"><?= htmlspecialchars($col['category']) ?></span>
            <span class="column-date"><?= htmlspecialchars(date('Y年n月j日', strtotime($col['date']))) ?></span>
          </div>
          <p class="column-card-title"><?= htmlspecialchars($col['title']) ?></p>
          <p class="column-card-lead"><?= htmlspecialchars($col['lead']) ?></p>
          <span class="column-read-more">続きを読む &rsaquo;</span>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="cta-box">
      <h2>ご相談・ご予約はお電話で</h2>
      <p class="cta-box-lead">コラムの内容についてご不明な点や、受診のご相談はお気軽にどうぞ。</p>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/visit.php" class="btn btn-primary">初めての方へ</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
