<?php
$page_title = '症状から探す';
$page_description = 'かぜ症状・消化器系・循環器系・糖尿病や脂質異常・呼吸器系・訪問診療など、カテゴリ別に症状から山本内科クリニックの診療案内ページを探せます。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';

$categories = [
  [
    'title' => 'かぜ症状',
    'items' => [
      ['label' => '発熱', 'url' => '/shinryo/naika.php'],
      ['label' => 'のどの痛み', 'url' => '/shinryo/naika.php'],
      ['label' => 'せき・たん', 'url' => '/shinryo/naika.php'],
      ['label' => '鼻水・鼻づまり', 'url' => '/shinryo/naika.php'],
      ['label' => '頭痛', 'url' => '/shinryo/naika.php'],
      ['label' => '倦怠感', 'url' => '/shinryo/naika.php'],
      ['label' => '悪寒・寒気', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '消化器系',
    'items' => [
      ['label' => '腹痛', 'url' => '/shinryo/naika.php'],
      ['label' => '胃もたれ・胸やけ', 'url' => '/shinryo/ikamera.php'],
      ['label' => '吐き気・嘔吐', 'url' => '/shinryo/ikamera.php'],
      ['label' => '下痢', 'url' => '/shinryo/naika.php'],
      ['label' => '便秘', 'url' => '/shinryo/naika.php'],
      ['label' => '血便', 'url' => '/shinryo/daichokamera.php'],
      ['label' => '便が細くなった', 'url' => '/shinryo/daichokamera.php'],
      ['label' => 'ピロリ菌感染が心配', 'url' => '/shinryo/pylori.php'],
    ],
  ],
  [
    'title' => '循環器系',
    'items' => [
      ['label' => '動悸', 'url' => '/shinryo/naika.php'],
      ['label' => '息切れ', 'url' => '/shinryo/naika.php'],
      ['label' => 'むくみ', 'url' => '/shinryo/naika.php'],
      ['label' => '胸の痛み・圧迫感', 'url' => '/shinryo/naika.php'],
      ['label' => 'めまい・立ちくらみ', 'url' => '/shinryo/naika.php'],
      ['label' => '高血圧を指摘された', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '糖尿病・脂質異常系',
    'items' => [
      ['label' => 'のどが渇く・水をよく飲む', 'url' => '/shinryo/naika.php'],
      ['label' => '尿の回数が多い', 'url' => '/shinryo/naika.php'],
      ['label' => '健診で血糖値を指摘された', 'url' => '/shinryo/naika.php'],
      ['label' => '健診でコレステロール値を指摘された', 'url' => '/shinryo/naika.php'],
      ['label' => '手足のしびれ・傷が治りにくい', 'url' => '/shinryo/naika.php'],
      ['label' => '疲れやすい', 'url' => '/shinryo/naika.php'],
      ['label' => '体重の急な増減', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '呼吸器系',
    'items' => [
      ['label' => 'せきが長引く', 'url' => '/shinryo/naika.php'],
      ['label' => '息苦しさ', 'url' => '/shinryo/naika.php'],
      ['label' => '痰がからむ', 'url' => '/shinryo/naika.php'],
      ['label' => '喘鳴(ぜーぜーする)', 'url' => '/shinryo/naika.php'],
      ['label' => '胸の違和感', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '訪問診療系',
    'items' => [
      ['label' => '通院が難しい', 'url' => '/shinryo/homon.php'],
      ['label' => '寝たきり・要介護状態', 'url' => '/shinryo/homon.php'],
      ['label' => '在宅での療養を考えている', 'url' => '/shinryo/homon.php'],
      ['label' => '定期的な健康管理を自宅で受けたい', 'url' => '/shinryo/homon.php'],
      ['label' => '退院後の在宅療養が不安', 'url' => '/shinryo/homon.php'],
      ['label' => '看取りについて相談したい', 'url' => '/shinryo/homon.php'],
    ],
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
      気になる症状のカテゴリから、関連する診療案内ページをご覧いただけます。
      正確な診断には受診が必要です。気になる症状がある場合はご相談ください。
    </p>
  </div>
</section>

<section>
  <div class="container">
    <?php foreach ($categories as $category): ?>
      <div class="symptom-category">
        <h2><?= htmlspecialchars($category['title']) ?></h2>
        <div class="symptom-tags">
          <?php foreach ($category['items'] as $item): ?>
            <a class="symptom-tag" href="<?= htmlspecialchars($item['url']) ?>"><?= htmlspecialchars($item['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

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
