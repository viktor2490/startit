<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title>Carrby - Agency Template</title>

        <!-- Favicon and Touch Icons -->
        <link href="<?php echo bloginfo(template_url); ?>/assets/images/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Lead Style -->
        <link href="<?php bloginfo(template_url); ?>/style.css" rel="stylesheet" type="text/css">

    <?php wp_head(); ?>
    </head>

    <body>
        
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <ul class="main-menu">
                                <li class="menu-item"><a class="active" href="index.html#slider">Home</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#about">About Us</a></li>
                                <li class="menu-item"><a href="index.html#works">Portfolio</a></li>
                                <li class="menu-item"><a href="index.html#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.html#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        
        <section id="slider" class="slider_1" style="background-image:url(<?php echo bloginfo('template_url'); ?>/assets/images/slider/slider-bg1.jpg)">
            <div class="slider">
                <div class="container">
                    <div class="slide-content">
                        <h6 class="sub_heading">Creative Agency Template</h6>
                        <div class="typing_content">
                            <h2 class="heading">
                                We Are <span class="typed-element">Carrby</span>
                            </h2>
                            <div class="typed-strings">
                                <p>Agency</p>
                                <p>Company</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll_btn"><a href="index.html#about"><i class="fa fa-angle-down"></i></a></div>
                <div class="section-shape">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/shape1.png" alt="shape image">
                </div>
            </div>
        </section>