<?php

function my_scripts() {
  wp_enqueue_style( 'style-name' get_template_directory_uri() . 'style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style-name' get_template_directory_uri() . 'assets/css/responsive.css.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_filter('widget_text', 'do_shortcode' );


function add_jquery_files() {
 // WordPress本体のjquery.jsを読み込まない
 wp_deregister_script('jquery');
 // jQueryをキューにセット
 wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js' );
 // jQueryの読み込み
 wp_enqueue_script( 'jquery');
}
add_action( 'wp_enqueue_scripts', 'add_jquery_files');



function webst8_setup() {
   //ここに関数の中身を記述します。
   add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
}
add_action( 'after_setup_theme', 'webst8_setup' );
//after_setup_themeアクションフック※に登録します。



?>