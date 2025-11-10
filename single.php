<?php get_header(); ?>



<section class="mv">
    <div class="mv-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_img-pc.jpg" alt="トップ画像">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_txt.png" alt="日本の海をつなぐ
エネルギーを運ぶ"></h2>
    </div>
</section>

<main class="single">
    <div class="inner-800">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article <?php post_class('single-article'); ?>>
                    <!-- タイトル -->
                    <h1 class="single-title"><?php the_title(); ?></h1>

                    <!-- 投稿日時 -->
                    <p class="single-date"><?php the_time('Y/m/d'); ?></p>

                    <!-- カテゴリー表示 -->
                    <div class="single-category">
                        <?php the_category(', '); ?>
                    </div>

                    <!-- アイキャッチ画像 -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="single-thumb">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- 本文 -->
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- ナビゲーション -->
                    <div class="post-navigation">
                        <div class="prev-post"><?php previous_post_link('%link', '« 前の記事'); ?></div>
                        <div class="next-post"><?php next_post_link('%link', '次の記事 »'); ?></div>
                    </div>

                    <!-- 一覧へ戻るリンク（お知らせ用） -->
                    <?php
                    $category = get_category_by_slug('news'); // ← スラッグ指定で取得
                    if ($category) :
                        $cat_link = get_category_link($category->term_id);
                    ?>
                        <div class="back-link">
                            <a href="<?php echo esc_url($cat_link); ?>">← お知らせ一覧へ戻る</a>
                        </div>
                    <?php endif; ?>
                </article>

        <?php endwhile;
        endif; ?>
    </div>
</main>

<?php get_footer(); ?>