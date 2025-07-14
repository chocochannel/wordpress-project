<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header" style="background:rgba(36,40,56,0.95);padding:24px 0 12px 0;text-align:center;box-shadow:0 2px 12px rgba(0,0,0,0.08);">
  <h1 style="margin:0;font-size:2.2rem;letter-spacing:0.08em;color:#3be8b0;font-weight:900;">
    <a href="<?php echo home_url(); ?>" style="color:#3be8b0;text-decoration:none;">My Modern Cool Theme</a>
  </h1>
  <p style="color:#eebf3f;font-size:1.1rem;margin:8px 0 0 0;">モダンで複雑・かっこいいWordPressテーマ</p>
</header> 