 <?php
  get_header();
  ?>


 <!-- メインビジュアル -->
 <section class="mv">
   <div class="mv-wrap">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_img-pc.jpg" alt="トップ画像">
     <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/mv_txt.png" alt="日本の海をつなぐ
エネルギーを運ぶ"></h2>
   </div>
 </section>

 <main id="main">
   <section class="news">
     <div class="inner-1000">
       <div class="table-wrapper">
         <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
           <h3>News</h3>
           <p>お知らせ</p>
         </div>

         <ul class="news-list">
           <li>
             <span class="date">2025/06/24</span>
             <a href="#">
               求人（船員）のご案内
               <span class="arrow"></span>
             </a>
           </li>
           <li>
             <span class="date">2020/05/11</span>
             <a href="#">
               弊社事務所を移転いたしました
               <span class="arrow"></span>
             </a>
           </li>
           <li>
             <span class="date">2020/06/11</span>
             <a href="#">
               弊社事務所を移転いたしました
               <span class="arrow"></span>
             </a>
           </li>
         </ul>

       </div>
       <!-- 一覧ボタン -->
       <div class="btn-box">
         <a href="<?php echo esc_url(home_url('/news/')); ?>" class="btn-arrow btn-arrow--primary" data-aos="fade-up" data-aos-duration="1200"><span class="arrow"></span>
           お知らせを一覧で見る
         </a>
       </div>
     </div>
   </section>

   <section class="company">
     <div class="inner-1000">
       <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
         <h3>Company overview</h3>
       </div>
     </div>
     <div class="w-95">
       <div class="flex-1">
         <div class="img-box hover-scale">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/company_img_1.jpg" alt="会社概要のイメージ">
         </div>
         <div class="text-box">
           <div class="text-box--in">
             <h4 class="box-ttl">会社概要</h4>
             <p>私たちは、国内の港と港を結んで産業基礎資材である石油製品を運んでいます。<br>
               常に安全と環境保全を考え人にやさしく地球にやさしく大切なエネルギーを大切に運び続けます。</p>
             <div class="btn-box">
               <a href="company.html" class="btn-arrow btn-arrow--secondary" data-aos="fade-up" data-aos-duration="1200"><span class="arrow"></span>
                 会社概要を見る
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <section class="business">
     <div class="inner-1000">
        <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
         <h3>Business description</h3>
       </div>
     </div>
     </div>
     <div class="w-95">
       <div class="flex-1">
         <div class="text-box">
           <div class="text-box--in">
             <h4 class="box-ttl primary">事業内容</h4>
             <p>当社のメイン業務は、石油製品、ケミカル製品のタンカー船による海上輸送です。<br>
               当社では、常に時代にマッチした船種・船型の運航により、高度な品質管理と安全で効率の高い輸送を実現しています。</p>
             <div class="btn-box">
               <a href="business.html" class="btn-arrow btn-arrow--primary" data-aos="fade-up" data-aos-duration="1200"><span class="arrow"></span>
                 事業内容を見る
               </a>
             </div>
           </div>
         </div>
         <div class="img-box hover-scale">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/business_img_1.jpg" alt="事業内容のイメージ">
         </div>
       </div>
     </div>
   </section>
   <section class="tanker">
     <div class="inner-1000">
        <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
         <h3>Tanker ship specification</h3>
       </div>
     </div>
     <div class="w-95">
       <div class="flex-1">
         <div class="img-box hover-scale">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/tanker_img_1.jpg" alt="船舶情報のイメージ">
         </div>
         <div class="text-box">
           <div class="text-box--in">
             <h4 class="box-ttl">船舶情報</h4>
             <p></p>
             <div class="btn-box" data-aos="fade-up" data-aos-duration="1200">
               <a href="tanker.html" class="btn-arrow btn-arrow--secondary"><span class="arrow"></span>
                 船舶情報を見る
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <section class="recruit">
     <div class="inner-1000">
       <div class="img-box">
          <div class="section-ttl" data-aos="fade-up" data-aos-duration="1200">
           <h3>Recruit crew member</h3>
         </div>
         <p class="img-ttl">船員募集</p>
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/recruit_img_4.png" alt="船員募集のイメージ">
         <p class="line">将来を見据えた強い組織をつくる上で<br class="sp-only">必要不可欠な人材を募集します。</p>
       </div>
       <div class="btn-box">
         <a href="recruit.html" class="btn-arrow btn-arrow--accent" data-aos="fade-up" data-aos-duration="1200"><span class="arrow"></span>
           船員募集を見る
         </a>
       </div>
   </section>
 </main>

 <?php
  get_footer();
  ?>