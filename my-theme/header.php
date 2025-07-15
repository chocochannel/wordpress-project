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
  <h1 style="margin:0;font-size:2.2rem;letter-spacing:0.08em;color:#e85d04;font-weight:900;">
    <a href="<?php echo home_url(); ?>" style="color:#e85d04;text-decoration:none;"><?php bloginfo('name'); ?></a>
  </h1>
  <p style="color:#f48c06;font-size:1.1rem;margin:8px 0 0 0;"><?php bloginfo('description'); ?></p>
</header> 