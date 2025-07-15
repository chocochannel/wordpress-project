<?php get_header(); ?>
<main class="ai-card-main">
  <!-- おつまみ画像表示エリア（ここから追加） -->
  <section class="otsumami-image-section" style="text-align:center; margin-bottom:40px;">
    <?php
    // 表示したい画像の順番をここで指定
    $image_order = ['image3.png', 'image1.png', 'image2.png'];
    foreach ($image_order as $img_name) {
        $img_file = get_template_directory() . "/assets/images/" . $img_name;
        if (file_exists($img_file)) {
            $img_url = get_template_directory_uri() . "/assets/images/" . $img_name;
            echo '<img class="otsumami-img" src="' . $img_url . '" alt="' . $img_name . '" style="margin:0 12px 16px 12px;max-width:160px;vertical-align:middle;">';
        }
    }
    ?>
  </section>
  <!-- おつまみ画像表示エリア（ここまで追加） -->
  <!-- 投稿一覧をカード型で表示するメインセクション -->
  <!-- ※重要：フロントページでは記事の抜粋（excerpt）のみを表示し、全文は表示しないこと -->
  <!-- ※AI変更時注意：HTML構造とWordPress関数（the_title、the_excerpt、the_permalink）は変更しないでください -->
  <section class="card-section">
    <div class="card-grid">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="ai-card" style="text-decoration:none; color:inherit; display:block;">
          <div class="ai-card-image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('large'); ?>
            <?php else: ?>
              <!-- アイキャッチ画像がない場合はダミー画像を表示 -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample1.jpg" alt="No Image">
            <?php endif; ?>
          </div>
          <div class="ai-card-content">
            <!-- 投稿タイトル（※このWordPress関数は変更しないでください） -->
            <h2 class="ai-card-title"><?php the_title(); ?></h2>
            <!-- 投稿抜粋（30語まで）を表示（※全文は表示しないこと、このWordPress関数は変更しないでください） -->
            <p class="ai-card-desc"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
            <span class="ai-card-btn">詳細を見る</span>
          </div>
        </a>
      <?php endwhile; else: ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?> 