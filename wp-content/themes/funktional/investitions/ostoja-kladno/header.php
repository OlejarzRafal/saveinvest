<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <title>Ostoja Kladno</title> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Preload -->
    <div class="kladno-loader">
        <?php require_once(__DIR__ . '/preloader.php'); ?>
    </div>
    <!-- end preload -->
    <?php global $post; ?>

    <nav class="kladno-nav <?php if ($post->ID == 614) : ?> kladno-nav__home <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="kladno-nav-container">
                    <div class="kladno-nav-container__logo">
                        <a href="<?php the_permalink(614); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/nav/nav-logo-kladno.svg" alt="logo SaveInvest" />
                        </a>
                    </div>
                    <div class="kladno-nav-container__box">
                        <ul>
                            <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/o-ostoi/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                <a href="<?php echo get_home_url(); ?>/dzialki/ostojakladno/o-ostoi" class="text-main text-main--fw500 text-main--f18">
                                    O OSTOI
                                </a>
                            </li>
                            <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/lokalizacja") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                <a href="<?php echo get_home_url(); ?>/dzialki/ostojakladno/lokalizacja" class="text-main text-main--fw500 text-main--f18">
                                    LOKALIZACJA
                                </a>
                            </li>
                            <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/ceny-dzialek") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                <a href="<?php echo get_home_url(); ?>/dzialki/ostojakladno/ceny-dzialek" class="text-main text-main--fw500 text-main--f18">
                                    CENY DZIAŁEK
                                </a>
                            </li>
                            <!-- <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/finansowanie") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                <a href="<?php echo get_home_url(); ?>/oferta/ostoja-kladno/finansowanie" class="text-main text-main--fw500 text-main--f18">
                                    FINANSOWANIE
                                </a>
                            </li> -->
                            <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/galeria") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                <a href="<?php echo get_home_url(); ?>/dzialki/ostojakladno/galeria" class="text-main text-main--fw500 text-main--f18">
                                    GALERIA
                                </a>
                            </li>
                            <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/kontakt") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                <a href="<?php echo get_home_url(); ?>/dzialki/ostojakladno/kontakt" class="text-main text-main--fw500 text-main--f18">
                                    KONTAKT
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="kladno-nav-container__burger">
                        <span></span>
                        <span></span>
                        <!-- <span></span> -->
                        <span></span>
                    </div>
                </div>
            </div>
    </nav>