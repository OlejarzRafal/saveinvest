<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <title>Osada dziwnówek</title> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg' type='image/x-icon' />
    <!-- dodane -->
    <!-- Facebook -->
    <meta property="og:title" content="Osada Dziwnówek">
    <meta property="og:site_name" content="Osada Dziwnówek">
    <meta property="og:url" content="<?php echo get_home_url(); ?>">
    <meta property="og:description" content="Zainwestuj w działkę budowlaną nad morzemi korzystaj z basenu, placu zabaw, zieleni...">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/caba-og.jpg">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_home_url(); ?>">
    <meta property="twitter:title" content="Osada Dziwnówek">
    <meta property="twitter:description" content="Zainwestuj w działkę budowlaną nad morzemi korzystaj z basenu, placu zabaw, zieleni...">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/caba-og.jpg">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


    <?php
    wp_enqueue_script("jquery");
    wp_head();
    ?>

</head>

<body <?php body_class(); ?>>
    <?php global $post; ?>
    <nav class="dziwnowek-nav <?php if ($post->ID == 1283) : ?> dziwnowek-nav__home <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="dziwnowek-nav__container">
                        <div class="dziwnowek-nav__container__box">
                            <ul class="nav-sticky">
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/o-osadzie/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/o-osadzie/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white href-style">
                                        O OSADZIE
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/lokalizacja/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/lokalizacja/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white href-style">
                                        LOKALIZACJA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/ceny-dzialek/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/ceny-dzialek/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white href-style">
                                        CENY DZIAŁEK
                                    </a>
                                </li>
                                <li class="btn-nav logo-others <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/strona-glowna/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a class="main-logo-href" href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/strona-glowna/">
                                    </a>
                                </li>

                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/inwestycje/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/inwestycje/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white href-style">
                                        INWESTYCJE
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/galeria/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/galeria/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white href-style">
                                        GALERIA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/kontakt/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/kontakt/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white href-style">
                                        KONTAKT
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-dziwnowek<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/strona-glowna/") !== false) {; ?> logo-dziwnowek--active  <?php }; ?>">
                            <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/strona-glowna/">
                            </a>
                        </div>
                        <div class="logo-dziwnowek-sec<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/strona-glowna/") !== false) {; ?> logo-dziwnowek--active  <?php }; ?>">
                            <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/strona-glowna/">
                            </a>
                        </div>
                        <div class="mobile-logo-href <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/strona-glowna/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                            <a class="mobile-main-logo-href" href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/strona-glowna/">
                            </a>
                        </div>
                        <div class="dziwnowek-nav__container__burger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="dziwnowek-nav__container__mobile">
                            <ul class="nav-sticky klasa">
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/o-osadzie/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/o-osadzie/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        O OSADZIE
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/lokalizacja/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/lokalizacja/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        LOKALIZACJA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/ceny-dzialek/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/ceny-dzialek/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        CENY DZIAŁEK
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/galeria/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/galeria/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        GALERIA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadadziwnowek/kontakt/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadadziwnowek/kontakt/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        KONTAKT
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>