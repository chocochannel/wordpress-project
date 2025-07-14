<?php get_header(); ?>
<main class="ai-card-main">
  <section class="card-section">
    <div class="card-grid">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="ai-card">
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
            <a href="<?php the_permalink(); ?>" class="ai-card-btn">詳細を見る</a>
          </div>
        </div>
      <?php endwhile; else: ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?> 