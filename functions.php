<?php

//テーマに必要な機能を有効化する 13回目の講義3.functions.php によるテーマ設定
function custom_theme_support() {
  add_theme_support( 'html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
  ) );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'menus' );
  register_nav_menus( array(
  'footer_nav' => esc_html__( 'footer navigation', 'rtbread' ),
  'category_nav' => esc_html__( 'category navigation', 'rtbread' ), ) );
  }
  add_action( 'after_setup_theme', 'custom_theme_support' );//必要な機能を設定しafter_setup_themeのアクションフックで実行

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