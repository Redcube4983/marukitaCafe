<footer>
    <div id="ornament_slide">
        <ul class="slideshow">
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
        </ul>
    </div>
    <div id="footer_info">
      <div class="footer_wrap">
        <div class="contact_wrap">
          <h2>お問い合わせ</h2>
          <div class="button">
            <p>お問い合わせはこちら</p>
            <img src="<?php echo get_template_directory_uri(); ?>/common/images/mail_icon.svg" alt="">
          </div>
        </div>
        <div class="open_wrap">
          <img src="/images/shop_img.jpg" alt="">
          <div class="text_wrap">
            <h4>営業時間</h4>
            <p>8:00-21:00［LO 20:30］土日祝日休<br>LUNCH 11:30~13:30</p>
          </div>
        </div>
        <div class="sitemap">
          <ul>
            <li><a href="<?php echo get_template_directory_uri(); ?>">全国の銘茶</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>">特製和菓子</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>">お茶漬け</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>">ご自宅・贈り物に</a></li>
          </ul>
        </div>
      </div>
    </div>
    <p class="copyright">© <?php echo date_i18n('Y'); ?> MARUKITA CAFE All rights reserved.</p>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
<script>
$(window).on('load resize', function() {  
const setFillHeight = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}

let vw = window.innerWidth;

window.addEventListener('resize', () => {
  if (vw === window.innerWidth) {
   // 画面の横幅にサイズ変動がないので処理を終える
    return;
  }

  // 画面の横幅のサイズ変動があった時のみ高さを再計算する
  vw = window.innerWidth;
  setFillHeight();
});



// 初期化
setFillHeight();
});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/swiper-bundle.min.js"></script>
</body>
</html>