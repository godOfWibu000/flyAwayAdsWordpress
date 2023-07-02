<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/shotcut.png"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/child.css">

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9806fd3724.js" crossorigin="anonymous"></script>

    <title>FlyAwayAds-Quảng cáo Facebook</title>
    
    <!-- <script src="js/main.js"></script> -->
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <!-- Navbar -->
            <nav>
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Logo FlyAway Ads" height="50px"></a>
                </div>

                <!-- Menu -->
                <?php wp_nav_menu( 
                  array( 
                      'theme_location' => 'menu1', 
                      'container' => 'false', 
                      'menu_id' => 'nav-bar', 
                      'menu_class' => 'nav-bar'
                   ) 
                ); ?>
                <!-- Toggle menu -->
                <div id="toggle">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </header>
        <!-- Banner -->
        <div class="banner">
            <div class="banner-items">
                <!-- Slogan -->
                <div class="slogan">
                    <h1>Quảng cáo Facebook với FlyAwayAds</h1>
                    <p>Giúp nhiều người biết đến doanh nghiệp của bạn, từ đó tăng đơn hàng, tạo cơ hội phát triển doanh nghiệp.</p>
                    <a href="https://zalo.me/0941927604" target="_blank"><button>Đăng ký</button></a>
                </div>

                <!-- Banner-icon -->
                <div class="banner-icon">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/banner.png" alt="banner" height="360px" width="100%">
                </div>
            </div>
        </div>