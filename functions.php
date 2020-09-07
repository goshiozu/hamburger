<?php
add_theme_support( 'post-thumbnails' ); //アイキャッチサムネイルを有効化

function register_my_menu(){
  register_nav_menu('header-menu',__(header_menu));
}//ヘッダーメニューをダッシュボードで編集可能にする

function hamburger_script() {
  wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'hamburger_script');


// function wpbeg_script() {
//   wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0' );
//   wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
// }
// add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

?>