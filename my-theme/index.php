<?php get_header(); ?>
<main class="ai-card-main">
  <!-- 投稿一覧をカード型で表示するメインセクション -->
  <!-- ※重要：フロントページでは記事の抜粋（excerpt）のみを表示し、全文は表示しないこと -->
  <section class="card-section">
    <div class="card-grid">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="ai-card">
          <div class="ai-card-image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('large'); ?>
            <?php else: ?>
              <!-- アイキャッチ画像がない場合はダミー画像を表示 -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample1.jpg" alt="No Image">
            <?php endif; ?>
          </div>
          <div class="ai-card-content">
            <!-- 投稿タイトル -->
            <h2 class="ai-card-title"><?php the_title(); ?></h2>
            <!-- 投稿抜粋（30語まで）を表示（※全文は表示しないこと） -->
            <p class="ai-card-desc"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
            <!-- 詳細ページへのリンク -->
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