<?php
$page_title = '症状から探す';
$page_description = '発熱・腹痛・血便・だるさなど、気になる症状から山本内科クリニックの診療案内ページを探せます。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';

$shojo = [
  [
    'title' => '発熱・せき・のどの痛み',
    'url' => '/shinryo/naika.php',
    'summary' => 'かぜ症状など、急な体調不良に対応します。',
  ],
  [
    'title' => '腹痛・胸やけ・胃の不快感',
    'url' => '/shinryo/naishikyo.php',
    'summary' => '胃カメラによる検査で原因を確認できます。',
  ],
  [
    'title' => '血便・便通の変化(下痢・便秘)',
    'url' => '/shinryo/naishikyo.php',
    'summary' => '大腸カメラによる検査に対応しています。',
  ],
  [
    'title' => 'だるさ・めまい・むくみ',
    'url' => '/shinryo/naika.php',
    'summary' => '内科診療で原因を確認し、必要な検査・治療を行います。',
  ],
  [
    'title' => '健診で数値を指摘された',
    'url' => '/shinryo/kenshin.php',
    'summary' => '特定健診・がん検診で、体の状態を確認できます。',
  ],
  [
    'title' => '腰・背中の痛み、身長が縮んだ気がする',
    'url' => '/shinryo/kosso.php',
    'summary' => '骨密度検査で骨粗しょう症の可能性を確認できます。',
  ],
  [
    'title' => '通院が難しい・在宅療養を考えている',
    'url' => '/shinryo/homon.php',
    'summary' => 'ご自宅への訪問診療についてご相談いただけます。',
  ],
];
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 症状から探す
</div>

<section class="page-header">
  <div class="container">
    <h1>症状から探す</h1>
    <p class="page-lead">
      気になる症状から、関連する診療案内ページをご覧いただけます。
      正確な診断には受診が必要です。気になる症状がある場合はご相談ください。
    </p>
  </div>
</section>

<section>
  <div class="container">
    <div class="card-grid">
      <?php foreach ($shojo as $item): ?>
        <a class="card shinryo-card" href="<?= htmlspecialchars($item['url']) ?>">
          <h3><?= htmlspecialchars($item['title']) ?></h3>
          <p><?= htmlspecialchars($item['summary']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="cta-box">
      <h2>ご予約・お問い合わせ</h2>
      <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
      <a href="/byomei.php" class="btn btn-primary">病名から探す</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
