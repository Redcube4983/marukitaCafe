<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>

<main>
    <section id="first-view">
    <div id="top-text">
        <p class="top-text">毎日の茶カテキンで、より美しく、より若く</p>
        <h2 class="top-title">全国の銘茶&和菓子のカフェが、<br class="sp">11/1(水) OPEN !</h2>
    </div>
    <picture class="">
			<source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/lp/lp-main-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/lp/lp-main-sp.jpg 2x">
            <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/images/lp/lp-main-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/lp/lp-main-pc.jpg 2x">
			<img class="lp-main" src="<?php echo get_template_directory_uri(); ?>/images/lp/lp-main.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/lp/lp-main.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/lp/lp-main.jpg 2x" alt="丸北カフェ MARUKITA CAFE" width="750" height="1000">
	</picture>
    <div class="first-view-wrap">
    <div class="first-view-2nd">
    <div class="first-view-2nd-text">
    <p class="second-text">目の前で職人さんがつくった繊細で<br>
        美しい老舗店の特性上生菓子と、<br>
        丁寧に淹れた全国の銘茶で特別なティータイムを<br>
        お楽しみください。</p>
    <p class="second-price">TEA set  ¥600~<small>（税込）</small></p>
    </div>
    <div class="first-view-2nd-photo">
    <img class="wagashi-image" src="<?php echo get_template_directory_uri(); ?>/images/lp/wagashi-image.png" alt="和菓子イメージ">
    </div>
    </div>
    <div class="first-view-3rd">
        <div class="first-view-3rd-photo">
        <picture class="">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/lp/uchida-fukidashi.png 1x,<?php echo get_template_directory_uri(); ?>/images/lp/uchida-fukidashi.png 2x">
        <img class="uchida-fukidashi" src="<?php echo get_template_directory_uri(); ?>/images/lp/uchida-fukidashi-pc.png" alt="老舗名店『巖邑堂』
5代目当主が実演！"></picture><img class="uchida-photo" src="<?php echo get_template_directory_uri(); ?>/images/lp/uchida-phpto.png" alt="内田 弘守イメージ">
        </div>
        <div class="first-view-3rd-text">
        <h3>巌邑堂 五代目当主</h3>
        <h4>内田 弘守</h4>
        <p>江戸時代から150年以上続く和菓子の老舗 巖邑堂の5代目当主。「日本の文化である和菓子を海外へ」との想いから、2012年より海外出店やデモンストレーション活動を展開し、シンガポール・ニューヨーク・パリ・ロンドンなどで好評を得ている。静岡の本店の他に、日本橋高島屋・六本木ヒルズにも店舗展開している。 </p>
        </div>
    </div>
    </div>
    </section>
    <section>
        <h2>全国の銘茶と特製和菓子で、心安らぐひと時を</h2>
        <p>当店は丸の内北口ビル1階の丸北ラウンジにオープンする<br class="sp">オフィスワーカー専用カフェです。<br>
            全国から取り寄せた香り豊かな日本茶と、<br class="sp">老舗名店・巖邑堂の和菓子。<br>
            本格的な“和”の味わいを気軽にお楽しみいただけます。<br class="sp">是非お立ち寄りください。<br>
            <small>※店内のご利用は、丸の内北口ビルの入居者の方のみとなります。</small><br>
            <small>※商品のテイクアウトは、一般のお客様もご利用いただけます。</small>
        </p>
    <ul id="menu">
        <li class="menu-list">
            <div class="menu-text">
                <h3>全国の銘茶＆特製和菓子</h3>
                <p>TEA set ￥600～(税込)</p>
            </div>
            <div class="menu-image">
            <img class="menu-images" src="<?php echo get_template_directory_uri(); ?>/images/lp/wagashi.jpg" alt="特性和菓子">
            </div>
        </li>
        <li class="menu-list">
            <div class="menu-text">
                <h3>緑茶×玄米 絶品茶漬け</h3>
                <p>LUNCH menu ￥800～(税込)</p>
            </div>
            <div class="menu-image">
            <img class="menu-images" src="<?php echo get_template_directory_uri(); ?>/images/lp/ochazuke.jpg" alt="お茶漬け">
            </div>
        </li>
    </ul>
    </section>
    <section>
        <h2>心とカラダに良い、お茶の3大成分！</h2> 
        <ul id="column">
            <li class="column-list"><img class="column-image" src="<?php echo get_template_directory_uri(); ?>/images/lp/katekin.jpg" alt="カテキン"></li>
            <li class="column-list"><img class="column-image" src="<?php echo get_template_directory_uri(); ?>/images/lp/teanin.jpg" alt="テアニン"></li>
            <li class="column-list"><img class="column-image" src="<?php echo get_template_directory_uri(); ?>/images/lp/cafein.jpg" alt="カフェイン"></li>
        </ul>
    </section>
    <section id="contact">
        <h2>ご予約・お問い合わせ</h2> 
        <p class="mail"><a href="<?php echo esc_url( home_url( '/contact/') ); ?>">メールはこちらから</a></p>
    </section>
</main>
<?php get_footer(); ?>