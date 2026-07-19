<?php
// 医療機関向け構造化データ（JSON-LD）。Googleに医院情報を正確に伝えるためのデータ。
// 情報は必ず実際の診療時間・住所・電話番号と一致させること（4-2 参照）。
$jsonld = [
  '@context' => 'https://schema.org',
  '@type' => 'MedicalClinic',
  'name' => '山本内科クリニック',
  'url' => SITE_BASE_URL . '/',
  'telephone' => '045-622-3331',
  'address' => [
    '@type' => 'PostalAddress',
    'postalCode' => '231-0806',
    'addressRegion' => '神奈川県',
    'addressLocality' => '横浜市中区',
    'streetAddress' => '本牧町2-364',
    'addressCountry' => 'JP',
  ],
  // 緯度・経度は、Googleビジネスプロフィール登録後（4-4）に確定させて追記する
  'openingHoursSpecification' => [
    [
      '@type' => 'OpeningHoursSpecification',
      'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
      'opens' => '09:00',
      'closes' => '12:00',
    ],
    [
      '@type' => 'OpeningHoursSpecification',
      'dayOfWeek' => ['Monday', 'Tuesday', 'Thursday', 'Friday'],
      'opens' => '15:00',
      'closes' => '18:00',
    ],
    [
      '@type' => 'OpeningHoursSpecification',
      'dayOfWeek' => ['Saturday'],
      'opens' => '09:00',
      'closes' => '12:00',
    ],
  ],
  'medicalSpecialty' => ['PrimaryCare', 'Gastroenterologic'],
  'description' => '横浜市中区本牧町の内科クリニック。一般内科・生活習慣病・内視鏡検査(胃カメラ・大腸カメラ)・特定健診・訪問診療に対応。総合病院と連携し、外来から在宅医療まで地域の診療を支えています。',
];
?>
<script type="application/ld+json">
<?= json_encode($jsonld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
