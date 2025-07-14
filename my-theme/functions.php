<?php
// テーマのCSSとJSを読み込む
function my_theme_enqueue_scripts() {
    // メインテーマCSS
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/styles/theme.css', array(), filemtime(get_template_directory() . '/styles/theme.css'));
    // ベースCSS
    wp_enqueue_style('my-theme-base', get_template_directory_uri() . '/styles/base.css', array(), filemtime(get_template_directory() . '/styles/base.css'));
    // カード用CSS
    wp_enqueue_style('my-theme-card', get_template_directory_uri() . '/styles/card.css', array(), filemtime(get_template_directory() . '/styles/card.css'));
    // カード用JS
    wp_enqueue_script('my-theme-card-js', get_template_directory_uri() . '/scripts/card.js', array('jquery'), filemtime(get_template_directory() . '/scripts/card.js'), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts'); 