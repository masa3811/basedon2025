<?php
$des = ""; ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <meta name="description" content="<?php echo $des; ?>">
    <meta name="keywords" content="">
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="<?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?> | <?php echo $des; ?>">
    <meta property="og:description" content="<?php echo $des; ?>">
    <meta property="og:site_name"
        content="<?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?> | <?php echo $des; ?>">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:image"
        content="<?php echo get_template_directory_uri(); ?>/assets/img/fb.jpg">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="<?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?> | <?php echo $des; ?>">
    <meta name="twitter:description" content="<?php echo $des; ?>">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo date_i18n("YmdHis") ?>">
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?php echo date_i18n("YmdHis") ?>">
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- AOS CSS -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3FK4WH5F3L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3FK4WH5F3L');
    </script>
</head>
<?php wp_head(); ?>

<body>
    <!-- ヘッダー -->
    <header id="header">
        <div class="container">
            <h1 class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/logo.png" alt="ロゴマーク">
                </a>
            </h1>

            <nav id="menubar">
                <ul>
                    <li>
                        <a href="<?php echo home_url(); ?>" class="<?php if (is_front_page()) echo 'is-active'; ?>">TOP</a>
                    </li>

                    <li>
                        <a href="<?php echo home_url('/company/'); ?>" class="<?php if (is_page('company')) echo 'is-active'; ?>">会社案内</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/business/'); ?>" class="<?php if (is_page('business')) echo 'is-active'; ?>">事業内容</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/tanker/'); ?>" class="<?php if (is_page('tanker')) echo 'is-active'; ?>">船舶情報</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/recruit/'); ?>" class="<?php if (is_page('recruit')) echo 'is-active'; ?>">船員募集</a>
                    </li>
                </ul>
                <div class="header-contact">
                    <a href="<?php echo home_url('/contact-1/'); ?>"
                        class="btn-arrow btn-arrow--primary btn-arrow--small <?php if (is_page('contact')) echo 'is-active'; ?>">
                        <span class="arrow"></span>お問い合わせ
                    </a>
                </div>

            </nav>
        </div>
        <div class="hamburger">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <nav class="sp-menu">
                <ul>
                    <li>
                        <a href="<?php echo home_url(); ?>" class="<?php if (is_front_page()) echo 'is-active'; ?>">TOP</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/company/'); ?>" class="<?php if (is_page('company')) echo 'is-active'; ?>">会社案内</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/business/'); ?>" class="<?php if (is_page('business')) echo 'is-active'; ?>">事業内容</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/tanker/'); ?>" class="<?php if (is_page('tanker')) echo 'is-active'; ?>">船舶情報</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/recruit/'); ?>" class="<?php if (is_page('recruit')) echo 'is-active'; ?>">船員募集</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/contact/'); ?>" class="<?php if (is_page('contact')) echo 'is-active'; ?>">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>
        </div>
    </header>