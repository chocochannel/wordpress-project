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

// SEOに配慮したテーマ機能の有効化
function my_theme_setup() {
    // 1. アイキャッチ画像
    add_theme_support('post-thumbnails');
    // 2. タイトルタグ自動出力
    add_theme_support('title-tag');
    // 3. HTML5マークアップ
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    // 4. カスタムロゴ
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    // 5. RSSフィードリンク自動挿入
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'my_theme_setup');

// SEO: meta description, og:image の自動出力
function my_theme_seo_meta_tags() {
    if (is_singular()) {
        global $post;
        $description = get_the_excerpt($post);
        $description = esc_attr(strip_tags($description));
        $image = '';
        if (has_post_thumbnail($post->ID)) {
            $image = get_the_post_thumbnail_url($post->ID, 'large');
        } else {
            $image = get_template_directory_uri() . '/assets/images/sample1.jpg';
        }
        echo '<meta name="description" content="' . $description . '">' . "\n";
        echo '<meta property="og:description" content="' . $description . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    } else {
        // トップページやアーカイブ用のdescription
        $site_desc = get_bloginfo('description');
        echo '<meta name="description" content="' . esc_attr($site_desc) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($site_desc) . '">' . "\n";
        // og:imageはデフォルト画像
        $default_image = get_template_directory_uri() . '/assets/images/sample1.jpg';
        echo '<meta property="og:image" content="' . esc_url($default_image) . '">' . "\n";
    }
}
add_action('wp_head', 'my_theme_seo_meta_tags', 1); 