 <?php
    get_header();
    ?>

 <div id="business">
     <!-- キービジュアル -->
     <section class="kv">
         <div class="kv-wrap">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/business_title-pc.jpg" alt="事業内容トップ画像">
             <div class="page-ttl">
                 <h3>Business description</h3>
                 <p>事業内容</p>
             </div>
         </div>
     </section>

     <main id="main">
         <section class="pages-business">
             <div class="img-wrap">
                 <div class="inner-900">
                     <img class="hover-scale " src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/business_navigation.jpg" alt="内航船航行イメージ">
                 </div>

             </div>
             <div class="inner-800">
                 <div class="flex-1" data-aos="fade-up" data-aos-duration="1200">
                     <p>一度に大量の貨物を長距離輸送する内航船は<br>
                         地球環境にやさしい運輸機関として<br>
                         今注目されています。</p>
                     <div class="img-box" data-aos="fade-up" data-aos-duration="1200">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/wave.png" alt="波のイメージ">
                     </div>

                 </div>
             </div>

             <div class="description">
                 <div class="inner-900">
                     <h4 class="box-ttl primary" data-aos="fade-up" data-aos-duration="1200">内航タンカー船による海上輸送</h4>
                     <div class="frame">
                         <p>当社のメイン業務は、石油製品、ケミカル製品の海上輸送です。国内で消費される石油・ケミカル製
                             品の約90％が、内航タンカーにより輸送されています。当社では、常に時代にマッチした船種・船型の
                             運航により、高度な品質管理と安全で効率の高い輸送を実現しています。</p>
                     </div>
                 </div>
             </div>
         </section>

 </main>
  </div>


 <?php
    get_footer();
    ?>