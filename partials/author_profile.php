<?php
// 記事末尾に表示する「執筆者兼監修者」プロフィール＋著者情報の構造化データ。
// 症状・病名ページ(glossary_render.php)、胃カメラ・大腸カメラのページから読み込む。
// $canonical_url, $title_tag, SITE_BASE_URL は head.php で定義済み。

// 監修者(Physician)。表示している資格・所属と内容を一致させること。
$author_person = [
  '@type' => 'Physician',
  'name' => '山本 晴二郎',
  'jobTitle' => '副院長',
  'worksFor' => [
    '@type' => 'MedicalClinic',
    'name' => '山本内科クリニック',
    'url' => SITE_BASE_URL . '/',
  ],
  'memberOf' => [
    ['@type' => 'MedicalOrganization', 'name' => '日本内科学会'],
    ['@type' => 'MedicalOrganization', 'name' => '日本消化器病学会'],
    ['@type' => 'MedicalOrganization', 'name' => '日本消化器内視鏡学会'],
    ['@type' => 'MedicalOrganization', 'name' => '日本糖尿病協会'],
    ['@type' => 'MedicalOrganization', 'name' => '日本肝臓学会'],
  ],
  'hasCredential' => [
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '内科専門医（日本内科学会）'],
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '消化器病専門医（日本消化器病学会）'],
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '消化器内視鏡専門医（日本消化器内視鏡学会）'],
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '上部消化管内視鏡スクリーニング認定医（日本消化器内視鏡学会）'],
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '下部消化管内視鏡スクリーニング認定医（日本消化器内視鏡学会）'],
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '糖尿病認定医（日本糖尿病協会）'],
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '身体障害者福祉法第15条指定医'],
    ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => '難病指定医'],
  ],
];

// この記事(ページ)が専門医によって執筆・監修されていることを示す構造化データ。
// lastReviewed は監修体制を整えた日付。内容を見直した際は更新する。
$author_article_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'MedicalWebPage',
  'url' => $canonical_url ?? (SITE_BASE_URL . '/'),
  'name' => $title_tag ?? '山本内科クリニック',
  'lastReviewed' => '2026-07-26',
  'reviewedBy' => $author_person,
  'author' => $author_person,
];
?>
<div class="author-profile-block">
  <div class="container">
    <div class="author-profile">
      <div class="author-profile-head">
        <span class="author-profile-role">執筆者兼監修者</span>
        <span class="author-profile-name">山本　晴二郎</span>
        <span class="author-profile-affil">山本内科クリニック　副院長</span>
      </div>
      <h3 class="author-profile-subhead">資格・所属</h3>
      <ul class="author-profile-list">
        <li>日本内科学会　内科専門医</li>
        <li>日本消化器病学会　消化器病専門医</li>
        <li>日本消化器内視鏡学会　消化器内視鏡専門医</li>
        <li>日本消化器内視鏡学会　上部消化管内視鏡スクリーニング認定医</li>
        <li>日本消化器内視鏡学会　下部消化管内視鏡スクリーニング認定医</li>
        <li>日本糖尿病協会　糖尿病認定医</li>
        <li>日本肝臓学会　所属</li>
        <li>身体障害者福祉法第15条指定医</li>
        <li>難病指定医</li>
      </ul>
      <p class="author-profile-note">
        ※本記事は一般的な医療情報であり、気になる症状がある場合は医療機関にご相談ください。
      </p>
    </div>
  </div>
</div>
<script type="application/ld+json">
<?= json_encode($author_article_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
