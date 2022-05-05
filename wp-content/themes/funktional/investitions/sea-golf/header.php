<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <title>Resort Sea&Golf</title> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/favicon.svg' type='image/x-icon' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Preload -->
    <div class="seagolf-loader">
        <?php require_once(__DIR__ . '/preloader.php'); ?>
    </div>
    <!-- end preload -->
    <?php global $post; ?>

    <nav class="seagolf-nav <?php if ($post->ID == 1220) : ?> seagolf-nav__home <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="seagolf-nav__container">
                        <div class="seagolf-nav__container__box">
                            <ul class="nav-sticky">
                                <div class="btn-box">
                                    <li class="btn-nav<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/o-osadzie/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/o-osadzie/" class="text-main text-main--fw700 text-main--f13 text-main--ls5 text-main--white">
                                            RESORT
                                        </a>
                                    </li>
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/lokalizacja/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/lokalizacja/" class="text-main text-main--fw700 text-main--f13 text-main--ls5 text-main--white">
                                            LOKALIZACJA
                                        </a>
                                    </li>
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/ceny-dzialek/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/ceny-dzialek/" class="text-main text-main--fw700 text-main--f13 text-main--ls5 text-main--white">
                                            CENY DZIAŁEK
                                        </a>
                                    </li>
                                </div>
                                <div class="logo-seagolf<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/strona-glowna/") !== false) {; ?> logo-seagolf--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/strona-glowna/">
                                    </a>
                                </div>
                                <div class="logo-seagolf-sticky<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/strona-glowna/") !== false) {; ?> logo-seagolf-sticky--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/strona-glowna/">
                                    </a>
                                </div>
                                <div class="btn-box">
                                    <li class="btn-nav btn-nav--visibility<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/finansowanie") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/oferta/ostoja-kladno/finansowanie" class="text-main text-main--fw700 text-main--f13 text-main--ls5 text-main--white">
                                            FINANSOWANIE
                                        </a>
                                    </li>
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/galeria/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/galeria/" class="text-main text-main--fw700 text-main--f13 text-main--ls5 text-main--white">
                                            GALERIA
                                        </a>
                                    </li>
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/kontakt/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/kontakt/" class="text-main text-main--fw700 text-main--f13 text-main--ls5 text-main--white">
                                            KONTAKT
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="seagolf-nav__container__burger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="seagolf-nav__container__mobile">
                            <ul class="nav-sticky">
                                <li class="logo-seagolf<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/strona-glowna/") !== false) {; ?> logo-seagolf--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/strona-glowna/">
                                    </a>

                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/o-osadzie/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/o-osadzie/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        RESORT
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/lokalizacja/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/lokalizacja/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        LOKALIZACJA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/ceny-dzialek/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/ceny-dzialek/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        CENY DZIAŁEK
                                    </a>
                                </li>
                                <li class="btn-nav btn-nav--visibility<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/finansowanie") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/oferta/ostoja-kladno/finansowanie" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        FINANSOWANIE
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/galeria/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/galeria/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        GALERIA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/osadaseagolf/kontakt/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/osadaseagolf/kontakt/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
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