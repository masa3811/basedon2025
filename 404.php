<?php get_header(); ?>

<main id="main" class="site-main">
  <section class="error-404 not-found">
    <div class="inner-1000">
      <h1 class="page-title">お探しのページが見つかりませんでした</h1>
      <p>申し訳ありません。指定されたURLのページは存在しないか、移動した可能性があります。</p>
      
      <div class="error-btns">
        <a href="<?php echo home_url('/'); ?>" class="btn">トップページへ戻る</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
