<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>丸北CAFE</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
<meta name="description" content="丸北カフェ -MARUKITA CAFE- 茶カテキンでアンチエイジング 全国の茶と特性和菓子を堪能出来ます。2023/11/1（水）1F丸北ラウンジにグランドオープン">
<meta name="keywords" content="丸北CAFE,茶カテキンでアンチエイジング,丸北,カフェ,MARUKITA,CAFE">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/common/images/favicon.png">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/swiper-bundle.min.css">
<!-- jquery 3.6.1 -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<?php wp_head(); ?>
<!-- fonts shippori -->
<script>
  (function(d) {
    var config = {
      kitId: 'ayf3oba',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>
<body>
<header>
    <div id="site-logo">
    <a href="<?php echo esc_url( home_url( '/') ); ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png"></a>
      <p class="header-text">1F丸北ラウンジ 8:00～21:00<br>
      LUNCH time 11:30～13:30</p>
    </div>
    <div id="header-right">
      <ul class="pc" id="sub-nav">
        <li class="pc"><a href="<?php echo esc_url( home_url( '/about/') ); ?>">運営会社</a></li>
        <li class="pc"><a href="<?php echo esc_url( home_url( '/privacy-policy/') ); ?>">プライバシーポリシー</a></li>
        <li class="pc"><a href="<?php echo esc_url( home_url( '/contact/') ); ?>">お問い合わせ</a></li>
      </ul>
      <ul id="global-nav">
        <li><a href="<?php echo esc_url( home_url( '/meicha/') ); ?>">全国の銘茶</a></li>
        <li><a href="<?php echo esc_url( home_url( '/wagashi') ); ?>">特製和菓子</a></li>
        <li><a href="<?php echo esc_url( home_url( '/ochazuke/') ); ?>">お茶漬け (ランチ)</a></li>
        <li><a href="<?php echo esc_url( home_url( 'gift/') ); ?>">ご自宅・贈り物に</a></li>
        <li class="sp-tab"><a href="<?php echo esc_url( home_url( '/about/') ); ?>">運営会社</a></li>
        <li class="sp-tab"><a href="<?php echo esc_url( home_url( '/privacy-policy/') ); ?>">プライバシーポリシー</a></li>
        <li class="sp-tab"><a href="<?php echo esc_url( home_url( '/contact/') ); ?>">お問い合わせ</a></li>
        <li class="sns_icon">
          <div class="sns_icon_wrap">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/icon_insta.svg" alt="Instagram_Icon インスタグラムアイコン"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/icon_X.svg" alt="X_Icon エックスアイコン"></a>
          </div>
        </li>
      </ul>

    </div>
    <div id="header-toggle">
      <div class="toggle-wrap">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
</header>