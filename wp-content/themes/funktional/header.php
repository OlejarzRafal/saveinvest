<?php

/**
 * @package Murami
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <!-- <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg' type='image/x-icon' /> -->
    <?php wp_head(); ?>
</head>
<style>
    @media(max-width:991px) {
        .page-blog {
            padding-top: 80px;
        }

        .news-post__content {
            margin-left: 10px;
        }
    }

    @media(max-width:767px) {

        .news-post__content {
            margin-left: 0;
        }
    }
</style>

<body <?php body_class(); ?>>
    <?php if (is_front_page()) : ?>
        <!-- Preload -->
     <div class="fullpage-loader">
            <div class="fullpage-loader__logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-layer1.svg" alt="saveinvest">
            </div>
        </div>
        <!-- end preload -->
    <?php endif; ?>

    <header class=" header <?php if (is_front_page()) : ?> header__front-page <?php else : ?> header__subpage <?php endif; ?>">
        <!-- HEADER FRONT PAGE -->
        <?php if (is_front_page()) : ?>

            <!-- DESKTOP -->
            <video autoplay playsinline muted loop id="myVideo" class="video-home-page video-home-page--desktop">
                <source src="<?php bloginfo('template_url'); ?>/assets/video/saveinvest-new-optimize.mp4" type="video/mp4">
            </video>
            <!-- MOBILE -->
            <video autoplay playsinline muted loop id="myVideomobile" class="video-home-page video-home-page--mobile">
                <source src="<?php bloginfo('template_url'); ?>/assets/video/saveinvest-new-optimize-mobile.mp4" type="video/mp4">
            </video>
            <nav class="nav notsticky">
                <div class="nav__logo">
                    <a href="<?php get_home_url(); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/saveinvest-logo.svg" alt="saveinvest">
                    </a>

                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul>
                        <li><a href="#sec1">POZNAJ NAS</a></li>
                        <li><a href="#team-specialist">ZESPÓŁ SPECJALISTÓW</a></li>
                        <li><a href="#plots">DZIAŁKI</a></li>
                        <li><a href="#sec6-profit">GRUNT TO ZYSK</a></li>
                        <li><a href="#sec-contact">KONTAKT</a></li>
                    </ul>
                </div>
                <div class="nav__menu-blog">
                    <!-- <ul>
                        <li><a href="<?php echo get_home_url(); ?>/blog">BLOG SAVEINVEST</a></li>
                    </ul> -->
                </div>
                <div id="hamburger" class="hamburger">
                    <span class="hamburger__bar"></span>
                    <span class="hamburger__bar"></span>
                    <span class="hamburger__bar"></span>
                </div>
            </nav>
            <div class="container">
                <div class="header-content">
                    <div class="header-content__header1">
                        <span><?php if ($naglowek_1__zloty_hero = get_field('naglowek_1__zloty_hero', 10)) : ?>
                                <?php echo $naglowek_1__zloty_hero; ?>
                            <?php endif; ?></span> <?php if ($naglowek_2__bialy_hero = get_field('naglowek_2__bialy_hero', 10)) : ?>
                            <?php echo $naglowek_2__bialy_hero; ?>
                        <?php endif; ?>
                    </div>
                    <h1><?php if ($tekst_bialy_hero = get_field('tekst_bialy_hero', 10)) : ?>
                            <?php echo $tekst_bialy_hero; ?>
                        <?php endif; ?></h1>
                    <div class="header-content__header2"><?php if ($tekst_zloty_hero = get_field('tekst_zloty_hero', 10)) : ?>
                            <?php echo $tekst_zloty_hero; ?>
                        <?php endif; ?></div>
                    <div class="header-content__header3"><?php if ($tekst_bialy_mini_hero = get_field('tekst_bialy_mini_hero', 10)) : ?>
                            <?php echo $tekst_bialy_mini_hero; ?>
                        <?php endif; ?></div>
                    <a href="#sec1" class="header-content__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-back-top.svg" alt="back to top">
                    </a>
                    <div class="header-content__linedown"></div>
                    <div class="header-content__logos">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-ico11.png">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-ico22.png">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-ico33.png">
                    </div>
                </div>
            </div>
        <?php else : ?>
            <!-- HEADER  BLOG CPT -->
            <nav class="nav notsticky nav-blog">
                <div class="nav__logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img class="nav__logo--black" src="<?php bloginfo('template_url'); ?>/assets/img/blog/logo-black.svg" alt="saveinvest">
                        <img class="nav__logo--white" src="<?php bloginfo('template_url'); ?>/assets/img/blog/logo-white.svg" alt="saveinvest">
                    </a>

                </div>
                <div class="nav__menu  nav-blog__menu" id="nav-menu">
                    <ul>
                        <li><a class="<?php if (strpos($_SERVER['REQUEST_URI'], "/blog") !== false) {; ?> nav-blog__menu--active  <?php }; ?>" href="<?php echo get_home_url(); ?>/blog">BLOG SAVEINVST</a></li>
                        <li><a class="<?php if (strpos($_SERVER['REQUEST_URI'], "/aktualnosci-z-terenow") !== false) {; ?> nav-blog__menu--active <?php }; ?>" href="<?php echo get_home_url(); ?>/aktualnosci-z-terenow">AKTUALNOŚCI Z TERENÓW</a></li>
                        <li><a class="<?php if (strpos($_SERVER['REQUEST_URI'], "/ekspert-saveinvest-radzi") !== false) {; ?> nav-blog__menu--active  <?php }; ?>" href="<?php echo get_home_url(); ?>/ekspert-saveinvest-radzi">EXPERT SAVEINVEST</a></li>
                        <li><a class="<?php if (strpos($_SERVER['REQUEST_URI'], "/pytania-klientow") !== false) {; ?> nav-blog__menu--active  <?php }; ?>" href="<?php echo get_home_url(); ?>/pytania-klientow">PYTANIA KLIENTÓW</a></li>
                        <li class="nav-blog__menu--itemMobile"><a href="<?php echo get_home_url(); ?>">WRÓĆ DA SAVEINVEST</a></li>
                    </ul>
                </div>
                <div id="hamburger" class="hamburger">
                    <span class="hamburger__bar"></span>
                    <span class="hamburger__bar"></span>
                    <span class="hamburger__bar"></span>
                </div>
            </nav>
        <?php endif; ?>

    </header>