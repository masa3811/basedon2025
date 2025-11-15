 <?php
  get_header();
  ?>

  <div id="contact-2">
    <!-- キービジュアル -->
    <section class="kv">
      <div class="kv-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/contact_title-pc.jpg" alt="お問い合わせ-1トップ画像">
        <div class="page-ttl">
          <h3>Contact</h3>
          <p>お問い合わせ確認画面</p>
          <p style="color: #dc3232;font-size: 15px">※まだ送信は完了していません</p>
        </div>
      </div>
    </section>

    <main id="main">
      <section class="pages-contact">
        <div class="img-wrap">
          <div class="inner-300">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/contact-step2.png" alt="お問い合わせ-step1画像">
          </div>
        </div>

         <div class="inner-1000">
           <?php echo do_shortcode('[contact-form-7 id="f867fd4" title="お問い合わせ　確認"]'); ?>
         </div>

  </section>
  </main>
  </div>


   <?php
  get_footer();
  ?>