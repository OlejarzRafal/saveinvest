<?php

/**
 * Template Name: Home dziwnówek
 * Template Post Type: osada-dziwnowek
 */

get_template_part('investitions/osada-dziwnowek/header');
?>

<main class="front-page-dz">
    <div class="hero">
        <img class="hero__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/invest-dziwnowek/logo.svg" alt="Osada dziwnówek">
        <div class="hero__slider dziwnowek-swiper swiper">
            <div class="swiper-wrapper">
                <?php
                if (have_rows('hero-slider', 1283)) :
                    while (have_rows('hero-slider', 1283)) : the_row(); ?>
                        <div class="hero__slide swiper-slide">
                            <img class="hero__img" src="<?php echo get_sub_field('hero-slider-img'); ?>" alt="Osada">
                            <div class="container">
                                <div class="hero__text">
                                    <?php echo get_sub_field('hero-slider-text'); ?>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>
            </div>
        </div>
        <div id="scroll-down-btn" class="hero__scroll"></div>

        <div class="dziwnowek-swiper-pagination">
                    <div class="swiper-pagination"></div>
                </div>
                <div class="dziwnowek-swiper-content-swiper">
                    <span>

                        <div class="swiper-button-prev"></div>
                    </span>
                    <div class="swiper-button-next"></div>
                </div>
    </div>

    <?php
    if (have_rows('section-1', 1283)) :
        while (have_rows('section-1', 1283)) : the_row(); ?>
            <section class="sec1">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="sec1__frame-box">
                                <?php
                                if (get_sub_field('typ_video') == 'standard_video') :
                                ?>
                                    <a data-fancybox href="<?php echo get_sub_field('video'); ?>">
                                        <img class="sec1__frame" src="<?php echo get_sub_field('frame'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                                    </a>
                                <?php
                                endif;
                                ?>
                                <?php
                                if (get_sub_field('typ_video') == 'yt_video') :
                                    $ytLinkUrl = get_sub_field('yt_video');
                                    $ytLinkThubnail = parse_url($ytLinkUrl);
                                    parse_str($ytLinkThubnail['query'], $query);
                                ?>
                                    <a class="sec1__frame-box__yt-video" style="background-image:url(https://i.ytimg.com/vi/<?= $query['v'] ?>/hqdefault.jpg)" data-fancybox href="<?= $ytLinkUrl ?>">
                                    </a>
                                <?php
                                endif;
                                ?>

                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="sec1__content">
                                <img class="sec1__icon" src="<?php echo get_sub_field('icon'); ?>">
                                <h2 class="sec1__title"><?php echo get_sub_field('title'); ?></h2>
                                <div class="sec1__text">
                                    <?php echo get_sub_field('text'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php endwhile;
    endif;
    ?>

    <?php
    if (have_rows('section-2', 1283)) :
        while (have_rows('section-2', 1283)) : the_row(); ?>
            <section class="sec2">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="sec2__text-box">
                                <div class="sec2__text">
                                    <?php echo get_sub_field('text'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="sec2__person">
                                <img class="sec2__img" src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('name'); ?>">
                                <div class="sec2__name">
                                    <?php echo get_sub_field('name'); ?>
                                </div>
                                <div class="sec2__position">
                                    <?php echo get_sub_field('position'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php endwhile;
    endif;
    ?>

    <?php
    if (have_rows('section-icons', 1283)) :
        while (have_rows('section-icons', 1283)) : the_row(); ?>
            <section class="secicons secicons--front" style="background-image: url('<?php echo get_sub_field('background'); ?>');">
                <div class="container">
                    <div class="secicons__box">
                        <h2 class="secicons__title" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="100">
                            <?php echo get_sub_field('title'); ?></h2>
                        <div class="secicons__adventages" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="300">
                            <?php
                            if (have_rows('advantages')) :
                                while (have_rows('advantages')) : the_row(); ?>
                                    <div class="secicons__item">
                                        <img class="secicons__icon" src="<?php echo get_sub_field('icon'); ?>">
                                        <div class="secicons__advantage">
                                            <?php echo get_sub_field('advantage'); ?>
                                        </div>
                                        <?php if (get_sub_field('sub-text')) { ?>
                                            <div class="secicons__sub-text">
                                                <?php echo get_sub_field('sub-text'); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                            <?php endwhile;
                            endif;
                            ?>
                        </div>
                        <a class="more-btn" href="<?php echo get_sub_field('page'); ?>"><?php echo get_sub_field('btn-title'); ?></a>
                    </div>
                </div>
            </section>
    <?php endwhile;
    endif;
    ?>

    <div class="repating-sections-bg">
        <div class="container">

            <?php
            if (have_rows('section-4', 1283)) :
                while (have_rows('section-4', 1283)) : the_row(); ?>
                    <section class="secrepeat">
                        <div class="row">
                            <div class="secrepeat__content-box col-12 col-lg-7 col-xl-6">
                                <div class="secrepeat__content">
                                    <img class="secrepeat__icon" src="<?php echo get_sub_field('icon'); ?>">
                                    <h3 class="secrepeat__title"><?php echo get_sub_field('title'); ?></h3>
                                    <div class="secrepeat__text">
                                        <?php echo get_sub_field('text'); ?>
                                    </div>
                                    <a class="more-btn more-btn--repeat" href="<?php echo get_sub_field('page'); ?>"><?php echo get_sub_field('btn-title'); ?></a>
                                </div>
                            </div>
                            <div data-aos="fade-left" data-aos-duration="1800" data-aos-delay="100" class="secrepeat__img-box col-12 col-lg-5 col-xl-6">
                                <img class="secrepeat__img" src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                            </div>
                        </div>
                    </section>
            <?php endwhile;
            endif;
            ?>

            <?php
            if (have_rows('section-5', 1283)) :
                while (have_rows('section-5', 1283)) : the_row(); ?>
                    <section class="secrepeat secrepeat--right">
                        <div class="row">
                            <div class="secrepeat__content-box col-12 col-lg-6">
                                <div class="secrepeat__content">
                                    <img class="secrepeat__icon" src="<?php echo get_sub_field('icon'); ?>">
                                    <h3 class="secrepeat__title"><?php echo get_sub_field('title'); ?></h3>
                                    <div class="secrepeat__text">
                                        <?php echo get_sub_field('text'); ?>
                                    </div>
                                    <a class="more-btn more-btn--repeat" target="blank" href="<?php echo get_sub_field('page'); ?>"><?php echo get_sub_field('btn-title'); ?></a>
                                </div>
                            </div>
                            <div data-aos="fade-right" data-aos-duration="1800" data-aos-delay="100" class="secrepeat__img-box col-12 col-lg-6">
                                <img class="secrepeat__img" src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                            </div>
                        </div>
                    </section>
            <?php endwhile;
            endif;
            ?>
        </div>
    </div>


    <section class="sneakmenu">
        <a class="sneakmenu__item sneakmenu__item--1" href="<?php the_permalink('10'); ?>">
            <span class="sneakmenu__name">Lokalizacja</span>
            <span class="sneakmenu__text">Zobacz gdzie dokładnie znajduje się osada.</span>
        </a>
        <a class="sneakmenu__item sneakmenu__item--2" href="<?php the_permalink('12'); ?>">
            <span class="sneakmenu__name">Ceny działek</span>
            <span class="sneakmenu__text">Sprawdź jak korzystne są ceny działek.</span>
        </a>
        <a class="sneakmenu__item sneakmenu__item--3" href="<?php the_permalink('14'); ?>">
            <span class="sneakmenu__name">Zyskaj</span>
            <span class="sneakmenu__text">Dowiedz się dlaczego ta inwestycja się opłaca.</span>
        </a>
    </section>

    <?php
    if (have_rows('section-7', 1283)) :
        while (have_rows('section-7', 1283)) : the_row(); ?>
            <section class="sec7">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="sec7__opinion-container">



                                <div id="opinions-carousel-home" class="sec7__opinions swiper">
                                    <div class="swiper-wrapper">

                                        <?php
                                        if (have_rows('opinions')) :
                                            while (have_rows('opinions')) : the_row(); ?>
                                                <div class="sec7__opinion-box swiper-slide">
                                                    <div class="sec7__opinion"><?php echo get_sub_field('opinion'); ?></div>
                                                    <div class="sec7__author"><?php echo get_sub_field('client'); ?></div>
                                                </div>
                                        <?php endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="sec7__about">
                                <img class="sec7__logo" src="<?php echo get_sub_field('logo'); ?>" alt="SAVEINVEST">
                                <h3 class="sec7__title"><?php echo get_sub_field('title'); ?></h3>
                                <div class="sec7__text">
                                    <?php echo get_sub_field('text'); ?>
                                </div>
                                <div class="sec7__badges">
                                    <?php
                                    if (have_rows('badges')) :
                                        while (have_rows('badges')) : the_row(); ?>
                                            <div class="sec7__badge">
                                                <img class="sec7__img" src="<?php echo get_sub_field('badge'); ?>">
                                            </div>
                                    <?php endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php endwhile;
    endif;
    ?>

    <?php
    if (have_rows('section-last', 1283)) :
        while (have_rows('section-last', 1283)) : the_row(); ?>
            <section class="seclast">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="seclast__box">
                                <h3 class="seclast__text"><?php echo get_sub_field('text'); ?></h3>
                                <a class="more-btn" href="<?php echo get_sub_field('page'); ?>"><?php echo get_sub_field('btn-title'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php endwhile;
    endif;
    ?>
</main>

<?php
get_template_part('investitions/osada-dziwnowek/footer');
?>