<?php get_header(); ?>
<main class="single-post-main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="single-post">
      <!-- 記事タイトル -->
      <h1 class="single-post-title"><?php the_title(); ?></h1>
      
      <!-- 記事メタ情報（日付、カテゴリなど） -->
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
      
      <!-- ※重要：個別記事ページでは必ず記事の全文（the_content）を表示すること -->
      <div class="single-post-content">
        <?php the_content(); ?>
      </div>
      
      <!-- 前後の記事へのナビゲーション -->
      <div class="single-post-navigation">
        <div class="nav-previous"><?php previous_post_link('%link', '← 前の記事'); ?></div>
        <div class="nav-next"><?php next_post_link('%link', '次の記事 →'); ?></div>
      </div>
    </article>
  <?php endwhile; else: ?>
    <p>記事が見つかりません。</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?> 