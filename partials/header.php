<header class="site-header">
  <div class="container">
    <a href="/" class="site-logo">
      <?php site_image('/assets/images/logo.png', '医療法人社団 山本内科クリニック', '', ['loading' => 'eager']); ?>
    </a>
    <p class="header-address">〒231-0806 神奈川県横浜市中区本牧町2-364</p>
    <div class="header-contact">
      <a href="tel:0456223331" class="tel-link">
        <span class="tel-caption">お電話</span> 045-622-3331
      </a>
      <button class="nav-toggle" aria-label="メニューを開く" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
  <nav class="global-nav">
    <div class="container">
      <ul>
        <li><a href="/">ホーム</a></li>
        <li class="has-dropdown">
          <a href="/shinryo/index.php">診療案内</a>
          <button class="nav-dropdown-toggle" aria-label="診療案内のサブメニュー" aria-expanded="false">+</button>
          <ul class="nav-dropdown">
            <li><a href="/shinryo/naika.php">一般内科</a></li>
            <li><a href="/shinryo/shokaki.php">消化器外来</a></li>
            <li><a href="/shinryo/naishikyo.php">内視鏡検査</a></li>
            <li><a href="/shinryo/junkanki.php">循環器外来</a></li>
            <li><a href="/shinryo/tonyobyo.php">糖尿病外来</a></li>
            <li><a href="/shinryo/homon.php">訪問診療</a></li>
            <li><a href="/shinryo/kenshin.php">各種健診・ワクチン</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="/shinryo/naishikyo.php">胃・大腸カメラ</a>
          <button class="nav-dropdown-toggle" aria-label="胃・大腸カメラのサブメニュー" aria-expanded="false">+</button>
          <ul class="nav-dropdown">
            <li><a href="/shinryo/ikamera.php">胃カメラ</a></li>
            <li><a href="/shinryo/daichokamera.php">大腸カメラ</a></li>
            <li><a href="/shinryo/ikamera-evening.php">イブニング胃カメラ</a></li>
            <li><a href="/shinryo/naishikyo-dojitsu.php">胃・大腸同日検査</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="/shojo.php">症状を探す</a>
          <button class="nav-dropdown-toggle" aria-label="症状を探すのサブメニュー" aria-expanded="false">+</button>
          <ul class="nav-dropdown">
            <li><a href="/shojo.php#kaze">かぜ症状</a></li>
            <li><a href="/shojo.php#ishokudo">食道・胃</a></li>
            <li><a href="/shojo.php#daicho">大腸</a></li>
            <li><a href="/shojo.php#junkanki">循環器</a></li>
            <li><a href="/shojo.php#seikatsu">糖尿病・内分泌</a></li>
            <li><a href="/shojo.php#kokyuki">呼吸器</a></li>
            <li><a href="/shojo.php#houmon">訪問診療</a></li>
            <li><a href="/shojo.php#sonota">その他</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="/byomei.php">病名を探す</a>
          <button class="nav-dropdown-toggle" aria-label="病名を探すのサブメニュー" aria-expanded="false">+</button>
          <ul class="nav-dropdown">
            <li><a href="/byomei.php#kaze">かぜ症状</a></li>
            <li><a href="/byomei.php#ishokudo">食道・胃</a></li>
            <li><a href="/byomei.php#daicho">大腸</a></li>
            <li><a href="/byomei.php#junkanki">循環器</a></li>
            <li><a href="/byomei.php#seikatsu">糖尿病・内分泌</a></li>
            <li><a href="/byomei.php#kokyuki">呼吸器</a></li>
            <li><a href="/byomei.php#houmon">訪問診療</a></li>
            <li><a href="/byomei.php#sonota">その他</a></li>
          </ul>
        </li>
        <li><a href="/shinryo/homon.php">訪問診療</a></li>
        <li><a href="/doctor.php">医師紹介</a></li>
        <li><a href="/visit.php">初診の方へ</a></li>
        <li><a href="/column/">コラム</a></li>
        <li><a href="/access.php">アクセス</a></li>
      </ul>
    </div>
  </nav>
</header>
