<?php get_header(); ?>
<main class="single-post-main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="single-post">
      <!-- 記事タイトル -->
      <h1 class="single-post-title"><?php the_title(); ?></h1>
      
      <!-- 記事メタ情報（日付、カテゴリ） -->
      <div class="single-post-meta">
        <span class="post-date"><?php echo get_the_date(); ?></span>
        <?php if ( has_category() ) : ?>
          <span class="post-categories"><?php the_category(', '); ?></span>
        <?php endif; ?>
      </div>
      
      <!-- アイキャッチ画像 -->
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="single-post-image">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>
      
      <!-- 記事本文 -->
      <div class="single-post-content">
        <?php the_content(); ?>
      </div>
      
      <!-- 前後の記事ナビゲーション -->
      <?php
      function my_theme_post_navigation() {
        $prev_link = get_previous_post_link('%link', '← 前の記事');
        $next_link = get_next_post_link('%link', '次の記事 →');
        if ($prev_link || $next_link) {
          echo '<div class="single-post-navigation">';
          if ($prev_link) {
            echo '<div class="nav-previous">' . $prev_link . '</div>';
          }
          if ($next_link) {
            echo '<div class="nav-next">' . $next_link . '</div>';
          }
          echo '</div>';
        }
      }
      my_theme_post_navigation();
      ?>
    </article>
  <?php endwhile; else: ?>
    <p>記事が見つかりません。</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?> 