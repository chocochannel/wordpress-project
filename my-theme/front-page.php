<?php get_header(); ?>
<main class="ai-card-main">
  <!-- 固定ページ本文（リード文やお知らせなど） -->
  <section class="frontpage-content" style="max-width:800px;margin:0 auto 40px auto;padding:32px 20px 16px 20px;background:#fffdfa;border-radius:16px;box-shadow:0 2px 12px rgba(232,93,4,0.06);">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </section>

  <!-- 投稿一覧をカード型で表示するセクション -->
  <section class="card-section">
    <div class="card-grid">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'post_status' => 'publish'
      );
      $front_query = new WP_Query($args);
      if ( $front_query->have_posts() ) :
        while ( $front_query->have_posts() ) : $front_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="ai-card" style="text-decoration:none; color:inherit; display:block;">
            <div class="ai-card-image">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample1.jpg" alt="No Image">
              <?php endif; ?>
            </div>
            <div class="ai-card-content">
              <h2 class="ai-card-title"><?php the_title(); ?></h2>
              <p class="ai-card-desc"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
              <span class="ai-card-btn">詳細を見る</span>
            </div>
          </a>
      <?php endwhile; wp_reset_postdata(); else: ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?> 