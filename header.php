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
<?php if( is_front_page() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
<?php elseif( is_page() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
  <?php if( is_page (array('contact','kakunin','error','thanks')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/page-contact.css">
    <?php if( is_page('kakunin') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/page-contact-kakunin.css">
    <?php elseif( is_page('error') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/page-contact-error.css">
    <?php endif; ?>
  <?php endif; ?>
<?php else: ?>
<?php endif; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q1GJEG20LZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q1GJEG20LZ');
</script>

</head>
<?php wp_head(); ?>
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
        <li><div class="sns_wrap"></div></li>

        
        <li>
          <div class="sns_icon_wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/" alt=""></div>
        </li>
        <li>
          <div class="sns_icon_wrap">
            <div class="head_icon01"><img src="/images/icon_insta.svg" alt="instagramアイコン"></div>
          </div>
        </li>
        <li>
          <div class="sns_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/imges/icon_insta.svg" alt="instagramアイコン">

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