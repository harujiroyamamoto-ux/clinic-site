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
  'junkanki' => ['url' => '/shinryo/junkanki.php', 'label' => '循環器外来'],
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
$advice_heading = $is_symptom ? '受診のタイミング' : '当院での対応';
$exam_heading = $is_symptom ? '検査・診断方法' : '検査方法';
$about_heading = $item['about_heading'] ?? ($item['label'] . 'とは');

$category_colors = [
  'kaze' => 'accent-blue',
  'ishokudo' => 'accent-rose',
  'daicho' => 'accent-teal',
  'junkanki' => 'accent-coral',
  'seikatsu' => 'accent-amber',
  'kokyuki' => 'accent-sky',
  'houmon' => 'accent-indigo',
];
$accent_class = $category_colors[$item['category']] ?? '';

// 関連する症状・病名（同カテゴリ内で、症状⇄病名を優先して最大6件）
$related_entries = [];
foreach ($glossary as $g) {
  if ($g['key'] === $item['key']) continue;
  if ($g['category'] !== $item['category']) continue;
  $related_entries[] = $g;
}
usort($related_entries, function ($a, $b) use ($item) {
  $a_priority = $a['type'] !== $item['type'] ? 0 : 1;
  $b_priority = $b['type'] !== $item['type'] ? 0 : 1;
  return $a_priority <=> $b_priority;
});
$related_entries = array_slice($related_entries, 0, 6);

// 検索で見つけてもらいやすいよう、ページ内容に合わせたタイトルを組み立てる。
// 括弧書き（例: 「バセドウ病(甲状腺機能亢進症)」の括弧部分）はタイトルでは使わずすっきりさせる。
// クセのある言い回しのラベル（例: 「高血圧を指摘された」）は、data/glossary.phpの'title'で個別に上書きする。
$title_base = preg_replace('/[(（].*/u', '', $item['label']);
if (!empty($item['title'])) {
  $page_title = $item['title'];
} elseif ($is_symptom) {
  $page_title = $title_base . 'の原因・受診の目安';
} else {
  $page_title = $title_base . 'の症状・原因・治療';
}
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

<section class="content-section <?= htmlspecialchars($accent_class) ?>">
  <div class="container">
    <?php if (!empty($item['about'])): ?>
      <h2><?= htmlspecialchars($about_heading) ?></h2>
      <p><?= htmlspecialchars($item['about']) ?></p>
    <?php endif; ?>

    <h2><?= htmlspecialchars($points_heading) ?></h2>
    <ul class="glossary-points">
      <?php foreach ($item['points'] as $point): ?>
        <li><?= htmlspecialchars($point) ?></li>
      <?php endforeach; ?>
    </ul>

    <?php if (!empty($item['diseases'])):
      $diseases_is_grouped = array_keys($item['diseases']) !== range(0, count($item['diseases']) - 1);
    ?>
      <h2>考えられる疾患</h2>
      <?php if ($diseases_is_grouped): ?>
        <?php foreach ($item['diseases'] as $group_name => $group_diseases): ?>
          <h3 class="diseases-group-heading"><?= htmlspecialchars($group_name) ?></h3>
          <ul class="glossary-points">
            <?php foreach ($group_diseases as $d): ?>
              <li>
                <?php if (!empty($d['key'])): ?>
                  <a href="/byomei/<?= htmlspecialchars($d['key']) ?>.php"><?= htmlspecialchars($d['label']) ?></a>
                <?php else: ?>
                  <?= htmlspecialchars($d['label']) ?>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endforeach; ?>
      <?php else: ?>
        <ul class="glossary-points">
          <?php foreach ($item['diseases'] as $d): ?>
            <li>
              <?php if (!empty($d['key'])): ?>
                <a href="/byomei/<?= htmlspecialchars($d['key']) ?>.php"><?= htmlspecialchars($d['label']) ?></a>
              <?php else: ?>
                <?= htmlspecialchars($d['label']) ?>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    <?php endif; ?>

    <?php if (!$is_symptom): ?>
      <h2><?= htmlspecialchars($advice_heading) ?></h2>
      <?php if (is_array($item['advice'])): ?>
        <ul class="glossary-points">
          <?php foreach ($item['advice'] as $a): ?><li><?= htmlspecialchars($a) ?></li><?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p><?= htmlspecialchars($item['advice']) ?></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($item['exam'])): ?>
      <h2><?= htmlspecialchars($exam_heading) ?></h2>
      <p><?= htmlspecialchars($item['exam']) ?></p>
    <?php endif; ?>

    <?php if ($is_symptom): ?>
      <h2><?= htmlspecialchars($advice_heading) ?></h2>
      <?php if (is_array($item['advice'])): ?>
        <ul class="glossary-points">
          <?php foreach ($item['advice'] as $a): ?><li><?= htmlspecialchars($a) ?></li><?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p><?= htmlspecialchars($item['advice']) ?></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($item['treatment'])): ?>
      <h2>治療の流れ</h2>
      <p><?= htmlspecialchars($item['treatment']) ?></p>
    <?php endif; ?>

    <?php if (!empty($item['selfcare'])): ?>
      <h2>セルフケア・予防</h2>
      <p><?= htmlspecialchars($item['selfcare']) ?></p>
    <?php endif; ?>

    <?php if (!empty($item['checklist'])): ?>
      <h2>こんな方はご相談を</h2>
      <ul class="consult-checklist">
        <?php foreach ($item['checklist'] as $c): ?>
          <li><?= htmlspecialchars($c) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="notice-box">
      <p>
        この内容は一般的な情報であり、診断を行うものではありません。正確な診断には受診が必要です。
      </p>
    </div>

    <?php if (!empty($related_entries)): ?>
      <h2>関連する症状・病名</h2>
      <div class="symptom-tags">
        <?php foreach ($related_entries as $rel): ?>
          <a class="symptom-tag" href="/<?= $rel['type'] === 'symptom' ? 'shojo' : 'byomei' ?>/<?= htmlspecialchars($rel['key']) ?>.php"><?= htmlspecialchars($rel['label']) ?></a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

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
