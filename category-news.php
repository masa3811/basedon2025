<?php get_header(); ?>


 <section class="mv">
   <div class="mv-wrap">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_img-pc.jpg" alt="トップ画像">
     <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_txt.png" alt="日本の海をつなぐ
エネルギーを運ぶ"></h2>
   </div>
 </section>



<section class="news-archive">
  <div class="inner-1000">

    <!-- 見出し -->
    <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
      <h3>News</h3>
      <p>お知らせ一覧</p>
    </div>

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
      <?php endwhile; else : ?>
        <li>現在お知らせはありません。</li>
      <?php endif; ?>
    </ul>

    <!-- ページネーション -->
    <div class="pagination">
      <?php
      the_posts_pagination(array(
        'mid_size' => 1,
        'prev_text' => '« 前へ',
        'next_text' => '次へ »',
      ));
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
