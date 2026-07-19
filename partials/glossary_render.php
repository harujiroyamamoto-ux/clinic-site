<?php
// 症状・病名の解説ページ共通テンプレート。
// 呼び出し側（/shojo/*.php, /byomei/*.php）で $item_key を設定してから include する。

$glossary = include __DIR__ . '/../data/glossary.php';
$item = null;
foreach ($glossary as $g) {
  if ($g['key'] === $item_key) {
    $item = $g;
    break;
  }
}
if ($item === null) {
  http_response_code(404);
  die('ページが見つかりません');
}

$related_pages = [
  'naika' => ['url' => '/shinryo/naika.php', 'label' => '一般内科'],
  'shokaki' => ['url' => '/shinryo/shokaki.php', 'label' => '消化器外来'],
  'ikamera' => ['url' => '/shinryo/ikamera.php', 'label' => '胃カメラ検査'],
  'daichokamera' => ['url' => '/shinryo/daichokamera.php', 'label' => '大腸カメラ検査'],
  'tonyobyo' => ['url' => '/shinryo/tonyobyo.php', 'label' => '糖尿病'],
  'seikatsu' => ['url' => '/shinryo/seikatsu.php', 'label' => '生活習慣病'],
  'homon' => ['url' => '/shinryo/homon.php', 'label' => '訪問診療(往診)'],
  'kenshin' => ['url' => '/shinryo/kenshin.php', 'label' => '各種健診・ワクチン'],
];
$related = $related_pages[$item['related']];

$is_symptom = $item['type'] === 'symptom';
$index_url = $is_symptom ? '/shojo.php' : '/byomei.php';
$index_label = $is_symptom ? '症状から探す' : '病名から探す';
$points_heading = $is_symptom ? '考えられる原因' : '主な原因・特徴';
$advice_heading = $is_symptom ? '受診の目安' : '当院での対応';

$page_title = $item['label'];
$page_description = $item['lead'];
$page_css = 'page.css';
include __DIR__ . '/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="<?= htmlspecialchars($index_url) ?>"><?= htmlspecialchars($index_label) ?></a> &raquo; <?= htmlspecialchars($item['label']) ?>
</div>

<section class="page-header">
  <div class="container">
    <h1><?= htmlspecialchars($item['label']) ?></h1>
    <p class="page-lead"><?= htmlspecialchars($item['lead']) ?></p>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <h2><?= htmlspecialchars($points_heading) ?></h2>
    <ul class="glossary-points">
      <?php foreach ($item['points'] as $point): ?>
        <li><?= htmlspecialchars($point) ?></li>
      <?php endforeach; ?>
    </ul>

    <h2><?= htmlspecialchars($advice_heading) ?></h2>
    <p><?= htmlspecialchars($item['advice']) ?></p>

    <div class="notice-box">
      <p>
        この内容は一般的な情報であり、診断を行うものではありません。正確な診断には受診が必要です。
      </p>
    </div>

    <div class="cta-box">
      <h2>関連する診療案内</h2>
      <a href="<?= htmlspecialchars($related['url']) ?>" class="btn btn-primary"><?= htmlspecialchars($related['label']) ?>を見る</a>
      <a href="<?= htmlspecialchars($index_url) ?>" class="btn btn-accent"><?= htmlspecialchars($index_label) ?>に戻る</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/booking_banner.php'; ?>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
