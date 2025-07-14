<?php
// テーマのCSSとJSを読み込む
function my_theme_enqueue_scripts() {
    // メインテーマCSS
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/styles/theme.css', array(), '1.0');
    // ベースCSS
    wp_enqueue_style('my-theme-base', get_template_directory_uri() . '/styles/base.css', array(), '1.0');
    // カード用CSS
    wp_enqueue_style('my-theme-card', get_template_directory_uri() . '/styles/card.css', array(), '1.0');
    // カード用JS
    wp_enqueue_script('my-theme-card-js', get_template_directory_uri() . '/scripts/card.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts'); 