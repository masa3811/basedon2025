<?php get_header(); ?>


 <section class="mv">
   <div class="mv-wrap">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_img-pc.jpg" alt="トップ画像">
     <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_txt.png" alt="日本の海をつなぐ
エネルギーを運ぶ"></h2>
   </div>
 </section>


<section class="archive">
  <div class="inner-1000">

    <!-- タイトル部分 -->
    <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
      <h3>
        <?php
        if (is_category()) {
          single_cat_title(); // カテゴリー名
        } elseif (is_tag()) {
          single_tag_title(); // タグ名
        } elseif (is_day()) {
          echo get_the_date('Y年n月j日');
        } elseif (is_month()) {
          echo get_the_date('Y年n月');
        } elseif (is_year()) {
          echo get_the_date('Y年');
        } else {
          post_type_archive_title(); // 投稿タイプアーカイブ
        }
        ?>
      </h3>

      <p>
        <?php
        // カテゴリーなら日本語で補足
        if (is_category('news')) {
          echo 'お知らせ一覧';
        } elseif (is_category('blog')) {
          echo 'ブログ一覧';
        } else {
          echo '記事一覧';
        }
        ?>
      </p>
    </div>

    <!-- 投稿一覧 -->
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
        <li>現在記事はありません。</li>
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
