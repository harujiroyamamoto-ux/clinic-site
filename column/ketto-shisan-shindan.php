<?php
$page_title = '健診で血糖値・HbA1cを指摘されたら：糖尿病の初期サインと次にすべきこと';
$page_description = '健診で「血糖値が高い」「HbA1c 要注意」と書かれていたら何をすればよいのか。糖尿病の診断基準、初期症状がない理由、放置するリスク、受診後の流れを副院長がわかりやすく解説します。';
$page_css = 'page.css';
$column_date     = '2026-07-21';
$column_category = '生活習慣病';
$column_author   = '山本晴二郎（副院長）';
include __DIR__ . '/../partials/head.php';
?>

<div class="breadcrumb container">
  <a href="/">ホーム</a> &raquo; <a href="/column/">医療コラム</a> &raquo; 健診で血糖値を指摘されたら
</div>

<section class="page-header">
  <div class="container">
    <div class="column-meta">
      <span class="column-category-badge"><?= htmlspecialchars($column_category) ?></span>
      <span class="column-date"><?= date('Y年n月j日', strtotime($column_date)) ?></span>
      <span class="column-author"><?= htmlspecialchars($column_author) ?></span>
    </div>
    <h1>健診で血糖値・HbA1cを指摘されたら<br>糖尿病の初期サインと次にすべきこと</h1>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <div class="column-body">

      <p>
        「健診で血糖値が高かったけど、体は別に何ともないし…」と受診を後回しにしていませんか。
        糖尿病は初期にほとんど自覚症状がなく、気づかないまま進行することが多い病気です。
        早期に対応するほど治療の選択肢が広がり、合併症を防ぎやすくなります。
      </p>

      <h2>健診の「血糖値」と「HbA1c」は何を測っている？</h2>
      <p>
        健診でよく測定される血糖値は、採血した時点の血液中のブドウ糖の量です。
        食後の時間によって大きく変動するため、健診では多くの場合「空腹時血糖」を測ります。
      </p>
      <p>
        <strong>HbA1c（ヘモグロビンエーワンシー）</strong>は、過去1〜2カ月の血糖の平均的な状態を
        反映する指標です。食事の影響を受けにくく、血糖コントロールの状況をより安定して把握できます。
      </p>
      <p>一般的な基準の目安は以下のとおりです（正確な診断は医療機関での複数回の検査が必要です）。</p>
      <ul>
        <li>空腹時血糖：正常域 99 mg/dL 以下、境界域 100〜125 mg/dL、糖尿病域 126 mg/dL 以上</li>
        <li>HbA1c：正常域 5.5% 未満、境界域 5.6〜6.4%、糖尿病域 6.5% 以上</li>
      </ul>
      <div class="notice-box">
        <p>
          上記はあくまで目安です。1回の数値だけで診断はできません。
          「境界型」や「要注意」の指摘を受けた場合も、専門医での精査をおすすめします。
        </p>
      </div>

      <h2>なぜ自覚症状がないのか</h2>
      <p>
        血糖値が高い状態が続いても、初期のうちは体が何となく「慣れて」しまい、
        のどの渇き・頻尿・倦怠感といった典型的な症状が出にくいことがあります。
        症状が出るのは、血糖値がかなり高くなった段階や、合併症が進んできた段階であることが多く、
        「何ともないから大丈夫」は危険なサインを見逃すことになりかねません。
      </p>

      <h2>放置するとどうなるか：合併症のリスク</h2>
      <p>
        高血糖の状態が続くと、全身の血管や神経がダメージを受け、以下のような合併症が起きやすくなります。
      </p>
      <ul>
        <li><strong>糖尿病性神経障害：</strong>手足のしびれ・痛み・感覚鈍麻（初期から起きやすい）</li>
        <li><strong>糖尿病性腎症：</strong>腎機能の低下。進行すると透析が必要になることも</li>
        <li><strong>糖尿病性網膜症：</strong>視力低下・最悪の場合は失明</li>
        <li><strong>動脈硬化の促進：</strong>心筋梗塞・脳卒中のリスクが高まる</li>
      </ul>
      <p>
        これらの合併症は一度起きると元に戻すことが難しく、進行を遅らせることが目標になります。
        合併症が出る前の段階で治療を始めることが、最も重要です。
      </p>

      <h2>受診すると何をするか</h2>
      <p>
        初めて受診された場合、まず詳しい血液検査（血糖値・HbA1c・腎機能・脂質など）と
        尿検査を行い、糖尿病かどうか、どの程度進んでいるかを確認します。
        診断がついた場合、まず食事・運動などの生活指導を行い、必要に応じて薬物療法を始めます。
      </p>
      <p>
        「薬を飲み始めたら一生飲み続けなければいけない」と心配される方も多いですが、
        初期に生活習慣を改善できた場合、薬なしで数値が安定するケースもあります。
        当院では、患者さんの生活スタイルに合わせた無理のない指導を心がけています。
      </p>

      <div class="column-summary-box">
        <h3>まとめ</h3>
        <ul>
          <li>健診で血糖値・HbA1cを指摘されたら、自覚症状がなくても受診を</li>
          <li>初期は症状がなく、気づかないまま進行するのが糖尿病の特徴</li>
          <li>合併症（神経・腎臓・目・心臓）は早期対応で予防できる</li>
          <li>まず血液検査で現状を把握し、生活指導から始める</li>
        </ul>
      </div>

      <p>
        「健診で引っかかったが、どこに相談すればよいかわからない」という方も、
        まずはお電話でご相談ください。
        当院では糖尿病認定医が継続的なサポートを行っています。
      </p>

      <div class="cta-box">
        <h2>血糖値・HbA1cのご相談はこちら</h2>
        <p class="cta-box-lead">健診の結果票をお持ちいただくとスムーズです。</p>
        <a href="tel:0456223331" class="btn btn-accent">📞 045-622-3331</a>
        <a href="/shinryo/tonyobyo.php" class="btn btn-primary">糖尿病外来について</a>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/author_profile.php'; ?>

<?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
