<?php
// アイキャッチを有効化
add_theme_support( 'post-thumbnails' );
/* 投稿内の画像を相対パスに */
function delete_domain_from_attachment_url( $url ) {
 if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
 $url = $match[2];
 }
 return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );
/* 投稿内の画像を相対パスに */
function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('template_directory') .'/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');
/* 投稿内のショートコード有効 */
function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
}
add_shortcode('php', 'my_php_Include');


add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
  global $post;
  $remove_filter = false;
 
  $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述 ＝固定ページ
  $post_type = get_post_type( $post->ID );
  if (in_array($post_type, $arr_types)){
                $remove_filter = true;
        }
 
  if ( $remove_filter ) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }
 
  return $content;
}

/* mwwpform エラーメッセージ変更 */
function my_error_message($error, $key, $rule){
  if($key === 'name01' && $rule === 'noempty'){
      return '姓が未入力です';
  }
  if($key === 'name02' && $rule === 'noempty'){
      return '名が未入力です';
  }
  if($key === 'kana01' && $rule === 'noempty'){
      return 'セイが未入力です';
  }
  if($key === 'kana02' && $rule === 'noempty'){
      return 'メイが未入力です';
  }
  if($key === 'mail' && $rule === 'noempty'){
      return 'メールアドレスが未入力です';
  }
  if($key === 'mail2' && $rule === 'noempty'){
      return 'メールアドレス確認用が未入力です';
  }
  if($key === 'telephone' && $rule === 'noempty'){
      return '電話番号が未入力です';
  }
  if($key === 'naiyou' && $rule === 'noempty'){
      return 'お問い合わせ内容が未入力です';
  }
  return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-35', 'my_error_message', 10, 3 );
?>