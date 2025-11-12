<?php get_header(); ?>


<!-- キービジュアル -->
<section class="kv">
  <div class="kv-wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/contact_title-pc.jpg" alt="お問い合わせ-1トップ画像">
    <div class="page-ttl">
      <h3>News</h3>
      <p>お知らせ一覧</p>
    </div>
  </div>
</section>




<section class="news-archive">
  <div class="inner-1000">
    <!-- 一覧 -->
    <ul class="news-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li data-aos="fade-up" data-aos-duration="800">
            <span class="date"><?php the_time('Y/m/d'); ?></span>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              <span class="arrow"></span>
            </a>
          </li>
        <?php endwhile;
      else : ?>
        <li>現在お知らせはありません。</li>
      <?php endif; ?>
    </ul>

    <!-- ページネーション -->
    <div class="pagination">
      <?php
      $pagination = get_the_posts_pagination(array(
        'mid_size' => 1,
        'prev_text' => '« 前へ',
        'next_text' => '次へ »',
      ));

      if ($pagination) {
        echo $pagination;
      } else {
        // 投稿が1ページしかない時にダミー出力
        echo '<ul class="page-numbers">
            <li><span class="page-numbers current">1</span></li>
          </ul>';
      }
      ?>
    </div>


  </div>
</section>

<?php get_footer(); ?>