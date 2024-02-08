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
                <a href="<?php echo esc_url( home_url( '/') ); ?>">
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
        <div class="sub_link_wrap sub_link_wrap01">
            <a class="fv_subLink_wrap" href="<?php echo esc_url( home_url( '/') ); ?>">
                <div class="img_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fv_content01.jpg" alt="今週のおすすめ">
                </div>
                <h3>今週のおすすめ</h3>
                <div class="under_box">
                    <span>掛川　深蒸し煎茶</span>
                    <div class="arrow"></div>
                </div>
            </a>
        </div>
        <div class="sub_link_wrap sub_link_wrap02">
            <a class="fv_subLink_wrap" href="<?php echo esc_url( home_url( '/') ); ?>">
                <div class="img_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fv_content02.jpg" alt="今月のイベント">
                </div>
                <h3>今月のイベント</h3>
            </a>
        </div>
        <div class="sub_link_wrap sub_link_wrap03">
            <a class="fv_subLink_wrap" href="<?php echo esc_url( home_url( '/') ); ?>">
                <div class="img_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fv_content03.jpg" alt="お持ち帰りメニュー">
                </div>
                <h3>お持ち帰りメニュー</h3>
                <div class="arrow"><span class="link">TAKE OUT MENU</span></div>
                </div>
            </a>
        </div>
    </div>
    </section>
    <section id="contents">
        <div class="lounge_wrap">
            <div class="sub_content_ttl">
                <h2 class="en">LOUNGE MENU / GOODS</h2>
                <h3 class="jp">商品情報</h3>
            </div>
            <div class="sub_contents_wrap">
                <div class="beverage">
                    <div class="tea">
                        <p>毎日の茶カテキンで、<br>より楽しく、より若く</p>
                        <div class="img_wrap">
                            <div class="img_box">
                                <picture class="">
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/loungeBox_01_sp.jpg">
                                    <source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/loungeBox_01_pc.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/loungeBox_01_pc.jpg" alt="">
                                </picture>
                            </div>
                            <h4 class="sub_head">全国の銘茶</h4>
                            <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">TEA TIME</a>
                        </div>
                    </div>
                    <div class="coffee">
                        <p>気分に合わせて<br>コーヒータイム</p>
                        <div class="img_wrap">
                            <div class="img_box">
                                <picture class="">
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/loungeBox_02_sp.jpg">
                                    <source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/loungeBox_02_pc.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/loungeBox_02_pc.jpg" alt="">
                                </picture>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">COFFEE MENU</a>
                        </div>
                    </div>
                </div>
                <div class="foods">
                    <div class="sweets">
                        <p>四季の風情と上品な甘みで<br>気分リフレッシュ</p>
                        <div class="img_wrap">
                            <div class="img_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/loungeBox_03_pc.jpg" alt="">
                            </div>
                            <h4 class="sub_head">特性和菓子</h4>
                            <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">SWEETS MENU</a>
                        </div>
                    </div>
                    <div class="foods">
                        <p>緑茶×玄米でさらりと<br>低カロリー健康チャージ</p>
                        <div class="img_wrap">
                            <div class="img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/loungeBox_04_pc.jpg" alt="">
                            </div>
                            <h4 class="sub_head">本格茶漬け・定食</h4>
                            <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">FOODS MENU</a>
                        </div>
                    </div>
                    <div class="goods">
                        <p>気分に合わせて<br>コーヒータイム</p>
                        <div class="img_wrap">
                            <div class="img_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/loungeBox_05_pc.jpg" alt="">
                            </div>
                            <h4 class="sub_head">ギフト・ご自宅用</h4>
                            <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">GOODS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="contents">
        <div class="service_wrap">
            <div class="sub_content_ttl">
                <h2 class="en">SERVICE</h2>
                <h3 class="jp">サービス</h3>
            </div>
            <div class="sub_contents_wrap">
                <div class="service">
                    <div class="stamp">
                        <p>通うほどに<br>健康＆お得に！！</p>
                        <div class="img_wrap">
                            <div class="img_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/serviceBox_01.jpg" alt="">
                            </div>
                            <h4 class="sub_head">スタンプカード</h4>
                            <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">STAMP CARD</a>
                        </div>
                    </div>
                    <div class="party">
                        <p>大切なお客様や<br>お仲間と！！</p>
                        <div class="img_wrap">
                            <div class="img_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/serviceBox_02.jpg" alt="">
                            </div>
                            <h4 class="sub_head">パーティープラン</h4>
                            <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">PARTY PLAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contents">
        <div class="column_wrap">
            <div class="sub_content_ttl">
                <h2 class="en">COLUMN</h2>
                <h3 class="jp">コラム</h3>
            </div>
            <div class="sub_contents_wrap">
                <div class="column">
                    <p>通うほどに<br>健康＆お得に！！</p>
                    <div class="img_wrap">
                        <div class="img_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/columnBox_01.jpg" alt="">
                        </div>
                        <h4 class="sub_head">コラム</h4>
                        <a href="<?php echo esc_url( home_url( '/') ); ?>" class="link">STAMP CARD</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</main>
<?php get_footer(); ?>