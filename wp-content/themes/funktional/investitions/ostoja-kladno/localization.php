<?php

/**
 * Template Name: Lokalizacja
 * Template Post Type: ostoja-kladno
 */

get_template_part('investitions/ostoja-kladno/header');
?>

<div class="ik-lokalizations">
    <section class="scroll-bottom">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/chevrons-down-white.png" alt="ikona" />
    </section>
    <section class="hero1-location">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="hero1-location__box">
                        <?php if ($title_sec1_localization_kladno = get_field('title_sec1_localization_kladno')) : ?>
                            <h2 class="f-h2 f-h2--white"> <?php echo $title_sec1_localization_kladno; ?></h2>
                        <?php endif; ?>
                        <?php if ($text_sec1_localization_kladno = get_field('text_sec1_localization_kladno')) : ?>
                            <div class="box-text">
                                <p class="text-main text-main--white">
                                    <?php echo $text_sec1_localization_kladno; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <div class="table-location">
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw700"></p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        Czas
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        Odległość
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw700">
                                        Plaża
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        30 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        2500 m
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw700">
                                        Latarnia morska Gąski
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        7 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        5 km
                                    </p>
                                </div>
                            </div>

                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw700">
                                        Autostrada S6
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        7 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        6 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw700">
                                        Ustronie Morskie Promenada
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        9 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        8 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw700">
                                        Kołobrzeg
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        19 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        19 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw700">
                                        Mielno
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        25 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        21 km
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="hero1-location__map">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/localization/location-map.png" alt="mapa" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="icon-localization">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="icon-localization__content swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content-box ">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon1.png" alt="ikona" />
                                    <?php if ($text_icon1_sec2_localization_kladno = get_field('text_icon1_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon1_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon2.png" alt="ikona" />
                                    <?php if ($text_icon2_sec2_localization_kladno = get_field('text_icon2_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon2_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon3.png" alt="ikona" />
                                    <?php if ($text_icon3_sec2_localization_kladno = get_field('text_icon3_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon3_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon4.png" alt="ikona" />
                                    <?php if ($text_icon4_sec2_localization_kladno = get_field('text_icon4_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon4_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon5.png" alt="ikona" />
                                    <?php if ($text_icon5_sec2_localization_kladno = get_field('text_icon5_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon5_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon6.png" alt="ikona" />
                                    <?php if ($text_icon6_sec2_localization_kladno = get_field('text_icon6_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon6_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon7.png" alt="ikona" />
                                    <?php if ($text_icon7_sec2_localization_kladno = get_field('text_icon7_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon7_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon8.png" alt="ikona" />
                                    <?php if ($text_icon8_sec2_localization_kladno = get_field('text_icon8_sec2_localization_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text_icon8_sec2_localization_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-contenet-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-location">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/localization/map-sea.jpg" alt="mapa Polski część nad morska" />
    </section>
</div>

<?php
get_template_part('investitions/ostoja-kladno/footer');
?>