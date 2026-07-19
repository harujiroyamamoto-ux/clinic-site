<?php
$page_title = '病名から探す';
$page_description = 'かぜ症状・消化器・循環器・糖尿病や脂質異常・呼吸器・訪問診療など、カテゴリ別に病名から山本内科クリニックの診療案内ページを探せます。';
$page_css = 'page.css';
include __DIR__ . '/partials/head.php';

$categories = [
  [
    'title' => 'かぜ症状',
    'items' => [
      ['label' => 'かぜ症候群(急性上気道炎)', 'url' => '/shinryo/naika.php'],
      ['label' => 'インフルエンザ', 'url' => '/shinryo/naika.php'],
      ['label' => '扁桃炎', 'url' => '/shinryo/naika.php'],
      ['label' => '副鼻腔炎', 'url' => '/shinryo/naika.php'],
      ['label' => '咽頭炎・喉頭炎', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '消化器',
    'items' => [
      ['label' => '胃炎', 'url' => '/shinryo/ikamera.php'],
      ['label' => '胃潰瘍・十二指腸潰瘍', 'url' => '/shinryo/ikamera.php'],
      ['label' => '逆流性食道炎', 'url' => '/shinryo/ikamera.php'],
      ['label' => '大腸ポリープ', 'url' => '/shinryo/daichokamera.php'],
      ['label' => '過敏性腸症候群', 'url' => '/shinryo/naika.php'],
      ['label' => 'ピロリ菌感染症', 'url' => '/shinryo/pylori.php'],
      ['label' => '便秘症', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '循環器',
    'items' => [
      ['label' => '高血圧症', 'url' => '/shinryo/naika.php'],
      ['label' => '不整脈', 'url' => '/shinryo/naika.php'],
      ['label' => '動脈硬化', 'url' => '/shinryo/naika.php'],
      ['label' => 'むくみ(浮腫)', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '糖尿病・脂質異常',
    'items' => [
      ['label' => '糖尿病(2型糖尿病)', 'url' => '/shinryo/naika.php'],
      ['label' => '脂質異常症(高コレステロール血症)', 'url' => '/shinryo/naika.php'],
      ['label' => '高尿酸血症・痛風', 'url' => '/shinryo/naika.php'],
      ['label' => 'メタボリックシンドローム', 'url' => '/shinryo/naika.php'],
      ['label' => '骨粗しょう症', 'url' => '/shinryo/kosso.php'],
    ],
  ],
  [
    'title' => '呼吸器',
    'items' => [
      ['label' => '気管支炎', 'url' => '/shinryo/naika.php'],
      ['label' => '気管支喘息', 'url' => '/shinryo/naika.php'],
      ['label' => 'COPD(慢性閉塞性肺疾患)', 'url' => '/shinryo/naika.php'],
      ['label' => '咳喘息', 'url' => '/shinryo/naika.php'],
    ],
  ],
  [
    'title' => '訪問診療',
    'items' => [
      ['label' => '慢性疾患の在宅療養', 'url' => '/shinryo/homon.php'],
      ['label' => '認知症', 'url' => '/shinryo/homon.php'],
      ['label' => '寝たきり状態', 'url' => '/shinryo/homon.php'],
      ['label' => 'がん末期(緩和ケア・看取り)', 'url' => '/shinryo/homon.php'],
    ],
  ],
];
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; 病名から探す
</div>

<section class="page-header">
  <div class="container">
    <h1>病名から探す</h1>
    <p class="page-lead">
      気になる病名のカテゴリから、関連する診療案内ページをご覧いただけます。
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
      <a href="/shojo.php" class="btn btn-primary">症状から探す</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
