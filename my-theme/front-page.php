<?php get_header(); ?>
<main class="ai-card-main">
  <!-- 固定ページ本文（リード文やお知らせなど） -->
  <section class="frontpage-content" style="max-width:800px;margin:0 auto 40px auto;padding:32px 20px 16px 20px;background:#fffdfa;border-radius:16px;box-shadow:0 2px 12px rgba(232,93,4,0.06);">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </section>

  <!-- 投稿一覧をカード型で表示するセクション -->
  <?php
  function my_theme_frontpage_posts($count = 10) {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => $count,
      'post_status' => 'publish'
    );
    $front_query = new WP_Query($args);
    if ( $front_query->have_posts() ) {
      echo '<section class="card-section"><div class="card-grid">';
      while ( $front_query->have_posts() ) : $front_query->the_post();
        echo '<a href="' . get_the_permalink() . '" class="ai-card" style="text-decoration:none; color:inherit; display:block;">';
        echo '<div class="ai-card-image">';
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('large');
        } else {
          echo '<img src="' . get_template_directory_uri() . '/assets/images/sample1.jpg" alt="No Image">';
        }
        echo '</div>';
        echo '<div class="ai-card-content">';
        echo '<h2 class="ai-card-title">' . get_the_title() . '</h2>';
        echo '<p class="ai-card-desc">' . wp_trim_words(get_the_excerpt(), 30, '...') . '</p>';
        echo '<span class="ai-card-btn">詳細を見る</span>';
        echo '</div></a>';
      endwhile;
      echo '</div></section>';
      wp_reset_postdata();
    } else {
      echo '<section class="card-section"><p>投稿がありません。</p></section>';
    }
  }
  my_theme_frontpage_posts(10);
  ?>
</main>
<?php get_footer(); ?> 