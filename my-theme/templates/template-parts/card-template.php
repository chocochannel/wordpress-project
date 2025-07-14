<section class="card-section">
  <div class="card-grid">
    <?php for ($i = 0; $i < 3; $i++): ?>
      <div class="ai-card">
        <div class="ai-card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample<?php echo $i+1; ?>.jpg" alt="AI Card Image <?php echo $i+1; ?>">
        </div>
        <div class="ai-card-content">
          <h2 class="ai-card-title">AIカードタイトル<?php echo $i+1; ?></h2>
          <p class="ai-card-desc">これはモダンで複雑なAIカードの説明文です。デザインや動きもかっこよく仕上げています。</p>
          <a href="#" class="ai-card-btn">詳細を見る</a>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</section> 