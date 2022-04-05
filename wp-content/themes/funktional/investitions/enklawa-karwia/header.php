<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg' type='image/x-icon' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <nav class="karwia-nav <?php if ($post->ID == 614) : ?> kladno-nav__home <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="karwia-nav__container">
                        <div class="karwia-nav__container__box">
                            <ul class="nav-sticky">
                                <div class="btn-box">
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/o-inwestycji/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/o-inwestycji/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white">
                                            O OSADZIE
                                        </a>
                                    </li>
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/lokalizacja/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/lokalizacja/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white">
                                            LOKALIZACJA
                                        </a>
                                    </li>
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/ceny-dzialek/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/ceny-dzialek/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white">
                                            CENY DZIAŁEK
                                        </a>
                                    </li>
                                </div>
                                <div class="logo-karwia<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/strona-glowna/") !== false) {; ?> logo-karwia--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/strona-glowna/">
                                    </a>
                                </div>
                                <div class="logo-karwia-sticky<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/strona-glowna/") !== false) {; ?> logo-karwia-sticky--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/strona-glowna/">
                                    </a>
                                </div>
                                <div class="btn-box">
                                    <!-- <li class="btn-nav btn-nav--visibility<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/finansowanie") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/oferta/ostoja-kladno/finansowanie" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white">
                                            FINANSOWANIE
                                        </a>
                                    </li> -->
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/galeria/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/galeria/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white">
                                            GALERIA
                                        </a>
                                    </li>
                                    <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/kontakt/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                        <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/kontakt/" class="text-main text-main--fw500 text-main--f15 text-main--ls3 text-main--white">
                                            KONTAKT
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="karwia-nav__container__burger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="karwia-nav__container__mobile">
                            <ul class="nav-sticky">
                                <li class="logo-karwia<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/strona-glowna/") !== false) {; ?> logo-karwia--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/strona-glowna/">
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/o-inwestycji/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/o-inwestycji/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        O ENKLAWIE
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/lokalizacja/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/lokalizacja/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        LOKALIZACJA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/ceny-dzialek/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/ceny-dzialek/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        CENY DZIAŁEK
                                    </a>
                                </li>
                                <!-- <li class="btn-nav btn-nav--visibility<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/ostojakladno/finansowanie") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/oferta/ostoja-kladno/finansowanie" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        FINANSOWANIE
                                    </a>
                                </li> -->
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/galeria/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/galeria/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
                                        GALERIA
                                    </a>
                                </li>
                                <li class="btn-nav <?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawakarwia/kontakt/") !== false) {; ?> btn-nav--active  <?php }; ?>">
                                    <a href="<?php echo get_home_url(); ?>/dzialki/enklawakarwia/kontakt/" class="text-main text-main--fw500 text-main--f15 text-main--ls3">
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