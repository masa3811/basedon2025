<!--   ここから共通 -->
<div class="wave-up">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/wave_img_up.png" alt="波のデザイン">
</div>

<section class="contact">
    <div class="inner-1000">
        <div class="flex-1">
             <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
                <h3>Contact</h3>
                <p>お問い合わせ</p>
            </div>
            <div class="text-box">
                <div class="flex-2" data-aos="fade-up" data-aos-duration="1200">
                    <h3>TEL 083-267-6660</h3>
                    <h3>FAX 083-267-6664</h3>
                </div>
                <div class="btn-box" data-aos="fade-up" data-aos-duration="1200">
                    <a href="<?php echo esc_url(home_url('/contact-1/')); ?>" class="btn-arrow btn-arrow--secondary">
                        <span class="arrow"></span> お問い合わせ
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="wave-down">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/wave_img_down.png" alt="波のデザイン">
</div>





<!-- フッター -->
<footer id="footer">
    <div class="link-section">
        <div class="link-content">
            <div class="inner-1200">
                <h4 class="box-ttl primary" data-aos="fade-up" data-aos-duration="1200">関連リンク</h4>
                <div class="link-box">
                    <div class="flex-1">
                        <a href="http://www.mlit.go.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/link_img_1.png" alt="">
                            <h4>国土交通省</h4>
                        </a>
                    </div>
                    <div class="flex-1">
                        <a href="https://www.city.shimonoseki.lg.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/link_img_2.png" alt="">
                            <h4>下関市</h4>
                        </a>
                    </div>
                    <div class="flex-1">
                        <a href="https://www.naiko-kaiun.or.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/link_img_3.png" alt="">
                            <h4>日本内航海運組合総連合会</h4>
                        </a>
                    </div>
                    <div class="flex-1">
                        <a href="http://naitan.or.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/link_img_4.png" alt="">
                            <h4>全国内航タンカー海運組合</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wave-line">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/footer-line.png" alt="ラインのデザイン">
    </div>


    <div class="footer-logo" data-aos="fade-up" data-aos-duration="1200">
        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/logo.png" alt="ロゴマーク"></a>
    </div>

    <div class="footer-in">
        <div class="footer-nav">
            <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
            <a href="<?php echo esc_url(home_url('/category/news/')); ?>">お知らせ</a>
            <a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a>
            <a href="<?php echo esc_url(home_url('/business/')); ?>">事業内容</a>
            <a href="<?php echo esc_url(home_url('/tanker/')); ?>">船舶情報</a>
            <a href="<?php echo esc_url(home_url('/recruit/')); ?>">船員募集</a>
            <a href="<?php echo esc_url(home_url('/contact-1/')); ?>">お問い合わせ</a>
        </div>

        <div class="footer-info">
            <a href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
            <a href="<?php echo esc_url(home_url('/disclaimer/')); ?>">免責事項</a>
            <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">プライバシーポリシー</a>
            <a href="<?php echo esc_url(home_url('/access/')); ?>">アクセスマップ</a>
        </div>

    </div>
    <small>&copy;2025 SETOUCHI CHUO KISEN CO .,LTD. <br class="sp-only">All Rights Reserved.</small>

    <div class="copy-right">瀬戸内中央汽船株式会社 <br class="sp-only">山口県下関市大和町1丁目16番1号 <br class="sp-only">下関漁港ビル211号</div>

    <!-- トップに戻るボタン -->
    <button id="to-top"></button>
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<!-- AOS JS -->
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<?php wp_footer(); ?>
</body>

</html>