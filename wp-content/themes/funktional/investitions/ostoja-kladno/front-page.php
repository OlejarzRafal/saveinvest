<?php

/**
 * Template Name: Strona główna
 * Template Post Type: ostoja-kladno
 */

get_template_part('investitions/ostoja-kladno/header');
?>

<div class="ik-frontpage">

    <section class="front-slider swiper">
        <div class="swiper-wrapper">
            <?php if (have_rows('slider_hp_kladno')) : ?>
                <?php while (have_rows('slider_hp_kladno')) :
                    the_row(); ?>
                    <div class="swiper-slide">
                        <?php
                        $photo_slider_hp_kladno = get_sub_field('photo_slider_hp_kladno');
                        if ($photo_slider_hp_kladno) : ?>
                            <div class="front-slider-photo">
                                <img src="<?php echo esc_url($photo_slider_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_slider_hp_kladno['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="front-slider-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/home-header-slider-photo-logo.png " alt="home-video">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="front-slider-content">

                                        <?php if ($text_slider_hp_kladno = get_sub_field('text_slider_hp_kladno')) : ?>
                                            <div class="front-slider-content__text">
                                                <h5 class="f-h5"><?php echo $text_slider_hp_kladno; ?></h5>
                                            </div>
                                        <?php endif; ?>

                                        <div class="front-slider-pagination">
                                            <div class="swiper-pagination"></div>
                                        </div>
                                        <div class="front-slider-content-swiper">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="scroll-bottom">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/chevrons-down.png" alt="ikona" />
    </section>

    <section class="around-video">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7">
                    <div class="around-video__movie">
                        <?php if ($move_sec1_hp_kladno = get_field('move_sec1_hp_kladno')) : ?>
                            <a data-fancybox="gallery" href="<?php echo $move_sec1_hp_kladno; ?>">
                                <?php
                                $photo_move_sec1_hp_kladno = get_field('photo_move_sec1_hp_kladno');
                                if ($photo_move_sec1_hp_kladno) : ?>
                                    <img src="<?php echo esc_url($photo_move_sec1_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_move_sec1_hp_kladno['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-4">
                    <div class="around-video__content">

                        <?php if ($title_sec1_hp_kladno = get_field('title_sec1_hp_kladno')) : ?>
                            <div class="content-title">
                                <h2 class="f-h2"><?php echo ($title_sec1_hp_kladno); ?></h2>
                            </div>
                        <?php endif; ?>

                        <?php if ($text_sec1_hp_kladno = get_field('text_sec1_hp_kladno')) : ?>
                            <div class="contnet-text">
                                <p class="text-main">
                                    <?php echo $text_sec1_hp_kladno; ?>
                                </p>
                            </div>
                        <?php endif; ?>

                        <!-- <a href="#" class="btn btn__line">O OSTOI</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="kladno-background">

        <section class="information-ostoja">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-xl-10">
                        <div class="information-ostoja__content">
                            <div class="content-info">
                                <?php if ($text_sec2_hp_kladno = get_field('text_sec2_hp_kladno')) : ?>
                                    <div class="content-info__test">
                                        <p class="text-main text-main--white text-main--italic">
                                            <?php echo $text_sec2_hp_kladno; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($name_sec2_hp_kladno = get_field('name_sec2_hp_kladno')) : ?>
                                    <div class="content-info__name">
                                        <h6 class="f-h6 f-h6--white f-h6--fw600">
                                            <?php echo ($name_sec2_hp_kladno); ?>
                                        </h6>
                                    </div>
                                <?php endif; ?>
                                <?php if ($positon_sec2_hp_kladno = get_field('positon_sec2_hp_kladno')) : ?>
                                    <div class="content-info__position">
                                        <h6 class="f-h6 f-h6--white">
                                            <?php echo ($positon_sec2_hp_kladno); ?>
                                        </h6>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php
                            $photo_person_sec2_hp_kladno = get_field('photo_person_sec2_hp_kladno');
                            if ($photo_person_sec2_hp_kladno) : ?>
                                <div class="content-photo">
                                    <img src="<?php echo esc_url($photo_person_sec2_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_person_sec2_hp_kladno['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="we-offer-ostoja">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <?php if ($title_icon_sec2_hp_kladno = get_field('title_icon_sec2_hp_kladno')) : ?>
                            <div class="we-offer-ostoja__title">
                                <h5 class="f-h5 f-h5--white">
                                    <?php echo $title_icon_sec2_hp_kladno; ?>
                                </h5>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="offset-xl-1 col-xl-10">
                        <div class="we-offer-ostoja__content">
                            <div class="content-boxs">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-1-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon1_sec2_hp_kladno = get_field('text_icon1_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon1_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-2-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon2_sec2_hp_kladno = get_field('text_icon2_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon2_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-3-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon3_sec2_hp_kladno = get_field('text_icon3_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon3_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-4-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon4_sec2_hp_kladno = get_field('text_icon4_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon4_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="content-boxs">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-5-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon5_sec2_hp_kladno = get_field('text_icon5_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon5_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-6-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon6_sec2_hp_kladno = get_field('text_icon6_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon6_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-7-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon7_sec2_hp_kladno = get_field('text_icon7_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon7_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/icon-8-big-view.png" alt="okona morza" />
                                    <?php if ($text_icon8_sec2_hp_kladno = get_field('text_icon8_sec2_hp_kladno')) : ?>
                                        <p class="text-main text-main--f20 text-main--white">
                                            <?php echo $text_icon8_sec2_hp_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <section class="about-ostoja-home">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <?php
                    $photo_sec3_hp_kladno = get_field('photo_sec3_hp_kladno');
                    if ($photo_sec3_hp_kladno) : ?>
                        <div class="about-ostoja-home__photo">
                            <img src="<?php echo esc_url($photo_sec3_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_sec3_hp_kladno['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                </div>
                <div class="offset-xl-1 col-xl-5">
                    <div class="about-ostoja-home__content">
                        <?php if ($title_sec3_hp_kladno = get_field('title_sec3_hp_kladno')) : ?>
                            <div class="content-title">
                                <h2 class="f-h2">
                                    <?php echo $title_sec3_hp_kladno; ?>
                                </h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec3_hp_kladno = get_field('text_sec3_hp_kladno')) : ?>
                            <div class="contnet-text">
                                <p class="text-main">
                                    <?php echo $text_sec3_hp_kladno; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if ($btn_text_sec3_hp_kladno = get_field('btn_text_sec3_hp_kladno')) : ?>
                            <a href="<?php the_permalink(615); ?>" class="btn btn__line"><?php echo $btn_text_sec3_hp_kladno; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recreational-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="recreational-area__content">
                        <?php if ($title_sec4_hp_kladno = get_field('title_sec4_hp_kladno')) : ?>
                            <div class="content-title">
                                <h2 class="f-h2">
                                    <?php echo $title_sec4_hp_kladno; ?>
                                </h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec4_hp_kladno = get_field('text_sec4_hp_kladno')) : ?>
                            <div class="contnet-text">
                                <p class="text-main">
                                    <?php echo $text_sec4_hp_kladno; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <!-- <?php if ($btn_text_sec4_hp_kladno = get_field('btn_text_sec4_hp_kladno')) : ?>
                            <a href="<?php the_permalink(617); ?>" class="btn btn__line"><?php echo $btn_text_sec4_hp_kladno; ?></a>
                        <?php endif; ?> -->
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6">
                    <?php
                    $photo_sec4_hp_kladno = get_field('photo_sec4_hp_kladno');
                    if ($photo_sec4_hp_kladno) : ?>
                        <div class="recreational-area__photo">
                            <img src="<?php echo esc_url($photo_sec4_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_sec4_hp_kladno['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="choice">
        <a class="choice__location" href="<?php the_permalink(616); ?>">
            <?php
            $photo_localisation_sec5_hp_kladno = get_field('photo_localisation_sec5_hp_kladno');
            if ($photo_localisation_sec5_hp_kladno) : ?>
                <div class="choice-photo">
                    <img src="<?php echo esc_url($photo_localisation_sec5_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_localisation_sec5_hp_kladno['alt']); ?>" />
                </div>
            <?php endif; ?>
            <div class="choice-hover"></div>
            <?php if ($title_localisation_sec5_hp_kladno = get_field('title_localisation_sec5_hp_kladno')) : ?>
                <div class="choice-title">
                    <h2 class="f-h2 f-h2--white f-h2--fw600">
                        <?php echo $title_localisation_sec5_hp_kladno; ?>
                    </h2>
                </div>
            <?php endif; ?>

            <?php if ($text_localisation_sec5_hp_kladno = get_field('text_localisation_sec5_hp_kladno')) : ?>
                <div class="choice-text">
                    <p class="text-main text-main--white">
                        <?php echo ($text_localisation_sec5_hp_kladno); ?>
                    </p>
                </div>
            <?php endif; ?>
        </a>
        <a class="choice__price" href="<?php the_permalink(617); ?>">
            <?php
            $photo_price_sec5_hp_kladno = get_field('photo_price_sec5_hp_kladno');
            if ($photo_price_sec5_hp_kladno) : ?>
                <div class="choice-photo">
                    <img src="<?php echo esc_url($photo_price_sec5_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_price_sec5_hp_kladno['alt']); ?>" />
                </div>
            <?php endif; ?>
            <div class="choice-hover"></div>
            <?php if ($title_price_sec5_hp_kladno = get_field('title_price_sec5_hp_kladno')) : ?>
                <div class="choice-title">
                    <h2 class="f-h2 f-h2--white f-h2--fw600"><?php echo $title_price_sec5_hp_kladno; ?></h2>
                </div>
            <?php endif; ?>
            <?php if ($text_price_sec5_hp_kladno = get_field('text_price_sec5_hp_kladno')) : ?>
                <div class="choice-text">
                    <p class="text-main text-main--white">
                        <?php echo $text_price_sec5_hp_kladno; ?>
                    </p>
                </div>
            <?php endif; ?>
        </a>
        <a class="choice__financing" href="#" style="pointer-events: none">
            <?php
            $photo_financing_sec5_hp_kladno = get_field('photo_financing_sec5_hp_kladno');
            if ($photo_financing_sec5_hp_kladno) : ?>
                <div class="choice-photo">
                    <img src="<?php echo esc_url($photo_financing_sec5_hp_kladno['url']); ?>" alt="<?php echo esc_attr($photo_financing_sec5_hp_kladno['alt']); ?>" />
                </div>
            <?php endif; ?>
            <div class="choice-hover"></div>
            <?php if ($title_financing_sec5_hp_kladno = get_field('title_financing_sec5_hp_kladno')) : ?>
                <div class="choice-title">
                    <h2 class="f-h2 f-h2--white f-h2--fw600"><?php echo $title_financing_sec5_hp_kladno; ?></h2>
                </div>
            <?php endif; ?>
            <?php if ($text_financing_sec5_hp_kladno = get_field('text_financing_sec5_hp_kladno')) : ?>
                <div class="choice-text">
                    <p class="text-main text-main--white">
                        <?php echo $text_financing_sec5_hp_kladno; ?>
                    </p>
                </div>
            <?php endif; ?>
        </a>
    </section>

    <section class="testimonial-kladno">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <?php if ($title_testimomnial_sec6_hp_kladno = get_field('title_testimomnial_sec6_hp_kladno')) : ?>
                        <div class="testimonial-kladno__title">
                            <h5 class="f-h5 f-h5--white"><?php echo $title_testimomnial_sec6_hp_kladno; ?></h5>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-12">
                    <div class="testimonial-kladno__container">
                        <div class="box swiper">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('testimomnial_sec6_hp_kladno')) : ?>
                                    <?php while (have_rows('testimomnial_sec6_hp_kladno')) :
                                        the_row(); ?>
                                        <div class="swiper-slide">
                                            <div class="testimonial-kladno-box">
                                                <?php if ($text_testimomnial_sec6_hp_kladno = get_sub_field('text_testimomnial_sec6_hp_kladno')) : ?>
                                                    <div class="testimonial-kladno-box__text">
                                                        <p class="text-main text-main--white"><?php echo $text_testimomnial_sec6_hp_kladno; ?>
                                                        </p>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($name_testimomnial_sec6_hp_kladno = get_sub_field('name_testimomnial_sec6_hp_kladno')) : ?>
                                                    <div class="testimonial-kladno-box__name">
                                                        <p class="text-main text-main--fw700 text-main--white"><?php echo esc_html($name_testimomnial_sec6_hp_kladno); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <!-- <div class="swiper-slide">
                                    <div class="testimonial-kladno-box">
                                        <div class="testimonial-kladno-box__text">
                                            <p class="text-main text-main--white">" Od firmy Saveinvest sp. z o.o. z Krakowa zakupiłem działkę w Jaworku, blisko gór. Otrzymałem świetna ofertę cenową, a w pakiecie również ułatwienia w postaci zajęcia się formalnościami przez firmę — idealna opcja dla wszystkich, którzy nie mają wiedzy lub czasu!"<br>
                                                " Saveinvest przekształca samodzielnie moją działkę na budowlaną, a całym procesem zajmują się jej specjaliści. Dlatego też polecam kontakt z nimi — w przyjazny i fachowy sposób przeprowadzają klienta aż do podpisania aktu notarialnego."<br>
                                                " Polecam i zachęcam do wyboru firmy Saveinvest! "
                                            </p>
                                        </div>
                                        <div class="testimonial-kladno-box__name">
                                            <p class="text-main text-main--fw700 text-main--white">Andrzej Biela</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-kladno-box">
                                        <div class="testimonial-kladno-box__text">
                                            <p class="text-main text-main--white">" Saveinvest zajął się wydzieleniem działki oraz przekształceniem na działkę budowlaną. Zleciłam im odsprzedaż działki i nowego nabywcę znaleźli w ciągu 3 miesięcy. Działka została sprzedana ze sporym zyskiem dzięki temu, że została przekształcona na budowlaną i firma zajęła się doprowadzeniem infrastruktury. Dla mnie inwestycja była bezobsługowa. "</p>
                                        </div>
                                        <div class="testimonial-kladno-box__name">
                                            <p class="text-main text-main--fw700 text-main--white">Elwira Redlarska</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-kladno-box">
                                        <div class="testimonial-kladno-box__text">
                                            <p class="text-main text-main--white">" W dzisiejszych, pełnych oszustw czasach, oferta firmy Saveinvest wydaje się zbyt piękna by była prawdziwa. Ja sprawdziłem i mogę z całą pewnością polecić. Biznes bez ściemy. "</p>
                                        </div>
                                        <div class="testimonial-kladno-box__name">
                                            <p class="text-main text-main--fw700 text-main--white">Radosław Wronski</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-kladno-box">
                                        <div class="testimonial-kladno-box__text">
                                            <p class="text-main text-main--white">" Profesjonaliści, którzy nie tylko doradzą, ale także zajmą się każdym szczegółem, dbają o stały kontakt z klientem i dobre relacje! "</p>
                                        </div>
                                        <div class="testimonial-kladno-box__name">
                                            <p class="text-main text-main--fw700 text-main--white">Agnieszka Herezy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-kladno-box">
                                        <div class="testimonial-kladno-box__text">
                                            <p class="text-main text-main--white">" Mogę z przyjemnością potwierdzić wszystkie pozytywne referencje i opinie o firmie Saveinvest sp. z o.o. z Krakowa. Jako nowy nabywca działki z oferty tej firmy mogę tylko napisać, że zachęcam wszystkich szukających działek do kontaktu z jej specjalistami. Miły, profesjonalny i fachowy kontakt, bardzo dobra oferta i brak formalności — wszystkie leżą po stronie Saveinvest. "</p>
                                        </div>
                                        <div class="testimonial-kladno-box__name">
                                            <p class="text-main text-main--fw700 text-main--white">Robert Dziki</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="triangle"></div>
                        </div>

                    </div>
                    <div class="swiper-contenet-testimonial">
                        <div class="swiper-button-prev"></div>

                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-contenet-pagination">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-company">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-5">
                    <div class="about-company__content">

                        <?php if ($title_sec7_hp_kladno = get_field('title_sec7_hp_kladno')) : ?>
                            <div class="content-title">
                                <h2 class="f-h2 f-h2--fw600"><?php echo $title_sec7_hp_kladno; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec7_hp_kladno = get_field('text_sec7_hp_kladno')) : ?>
                            <div class="content-text">
                                <p class="text-main">
                                    <?php echo $text_sec7_hp_kladno; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-company__graphics">
                        <div class="company-logo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/home-about-company-logo.png" alt="logo saveinvest" />
                        </div>
                        <div class="company-awards">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/home-about-company-700.png" alt="ikona 700 zadowolonych klientów" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/home-about-company-guarantee.png" alt="ikona gwarancji najwyższej jakości" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/home-page/home-about-company-17-year.png" alt="ikona 17 lat doświadczenia" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_template_part('investitions/ostoja-kladno/footer');
?>