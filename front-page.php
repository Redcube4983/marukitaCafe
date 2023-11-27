<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>

<main>
    <section id="fv">
    <div class="swiper">
        <div class="swiper-wrapper">
        <picture class="swiper-slide">
			<source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_slide01_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/lp/lp-main-sp.jpg 2x">
            <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/images/lp/lp-main-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/lp/lp-main-pc.jpg 2x">
			<img class="lp-main" src="<?php echo get_template_directory_uri(); ?>/images/lp/lp-main.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/lp/lp-main.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/lp/lp-main.jpg 2x" alt="丸北カフェ MARUKITA CAFE" width="750" height="1000">
        </picture>
            <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/images/fv_slide01_sp.jpg" alt="Slide 1">
            <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/images/fv_slide02_sp.jpg" alt="Slide 2">
            <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/images/fv_slide03_sp.jpg" alt="Slide 3">
        </div>
    </div>
    <div class="fv_sub_wrap">
        
        <img src="<?php echo get_template_directory_uri(); ?>/images/fv_slide01_sp.jpg" alt="" class="fv_img">
    </div>
    </section>
    <section id="contact">
        <h2>ご予約・お問い合わせ</h2> 
        <p class="mail"><a href="<?php echo esc_url( home_url( '/contact/') ); ?>">メールはこちらから</a></p>
    </section>
</main>
<?php get_footer(); ?>