<footer>
    <div id="footer-info">
    <a href="<?php echo esc_url( home_url( '/') ); ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png"></a>
    <h3>営業時間</h3>
    <p>8:00-21:00［LO 20:30］土日祝日休</p>
    <p>LUNCH 11:30~13:30</p>
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
</body>
</html>