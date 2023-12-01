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
            <div class="fv_slide_link_wrap">
                <a href="#">
                <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_slide01_sp.jpg">
                    <source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_slide01_tab.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fv_left_slide01.jpg" alt="トップ画像">
                </picture>
                </a>
            </div>

        </div>
    </div>
    <div class="fv_sub_wrap">
        <div class="img_group">
            <div class="sub_link_wrap sub_link_wrap01">
                <a class="fv_sub01_link_wrap" href="#">
                <picture class="slide_img_wrap">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_img04_sp.jpg">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_img04_tab.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fv_right_01.jpg" alt="トップ画像">
                </picture>
                </a>
            </div>
            <div class="sub_link_wrap sub_link_wrap02">
                <a class="fv_sub01_link_wrap" href="#">
                <picture class="slide_img_wrap">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_img05_sp.jpg">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_img05_tab.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fv_right_02.jpg" alt="トップ画像">
                </picture>
                </a>
            </div>
        </div>
        <div class="sub_link_wrap sub_link_wrap03">
            <a class="fv_sub01_link_wrap" href="#">
            <picture class="slide_img_wrap">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_img06_sp.jpg">
                <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv_img06_tab.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fv_right_03.jpg" alt="トップ画像">
            </picture>
            </a>
        </div>
    </div>
    </section>
    <section id="contact">
        <h2>ご予約・お問い合わせ</h2> 
        <p class="mail"><a href="<?php echo esc_url( home_url( '/contact/') ); ?>">メールはこちらから</a></p>
    </section>
</main>
<?php get_footer(); ?>