<?php

/**
 * Template Name: Home sea-golf
 * Template Post Type: sea-golf
 */

get_template_part('investitions/sea-golf/header');
?>
<div class="sg-frontpage">
    <section class="header">
        <video autoplay="" playsinline="" muted="" loop="" class="video-home-page video-home-page--desktop">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/video/Enklawa-Karwia_Video_AdaptiveLowBitrate.mp4" type="video/mp4">
        </video>
        <?php if ($seagolf_sec1_title = get_field('seagolf_sec1_title')) : ?>
            <div class="header__text">
                <h1 class="f-h1 "><?php echo $seagolf_sec1_title; ?></h1>
                <!-- <h1 class="f-h1 f-h1--fw600-italic">w sąsiedztwie pola golfowego,<br>jeziora i przystani</h1> -->
            </div>
        <?php endif; ?>
        <div class="header__scroller">
            <div class="header__scroller__center"></div>
        </div>
    </section>
    <section class="header-text-gold">
        <?php if ($seagolf_sec1_text = get_field('seagolf_sec1_text')) : ?>
            <h5 class="f-h5 f-h5--gold-dark f-h5--fw500-italic"><?php echo $seagolf_sec1_text; ?>
            </h5>
        <?php endif; ?>
    </section>
    <section class="sec1-video">
        <div class="container">
            <div class="row row-backgorund">
                <div class="offset-xl-2 col-xl-8 offset-xl-2">
                    <?php if ($seagolf_sec2_title = get_field('seagolf_sec2_title')) : ?>
                        <div class="sec1-video__title">
                            <h2 class="f-h2 f-h2--black-dark f-h2--f80"><?php echo $seagolf_sec2_title; ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="offset-xl-2 col-xl-8 offset-xl-2">
                    <?php if ($seagolf_sec2_text = get_field('seagolf_sec2_text')) : ?>
                        <p class="text-main">
                            <?php echo $seagolf_sec2_text; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="offset-xl-2 col-xl-8">
                    <div class="sec1-video__movie">
                        <?php if ($seagolf_sec2_link = get_field('seagolf_sec2_link')) : ?>
                            <a class="sec1-video__movie__sea-golf" data-fancybox="gallery" href="<?php echo $seagolf_sec2_link; ?>">
                                <?php
                                $seagolf_sec2_photo = get_field('seagolf_sec2_photo');
                                if ($seagolf_sec2_photo) : ?>
                                    <img src="<?php echo esc_url($seagolf_sec2_photo['url']); ?>" alt="<?php echo esc_attr($seagolf_sec2_photo['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                            <div class="sec1-video__movie__icon-play"></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="sec1-video__letter-s letter-down"></div>
                <div class="sec1-video__letter-g letter-up"></div>
            </div>
        </div>
    </section>
    <section class="sec2-info">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10">
                    <div class="sec2-info__content">
                        <div class="sec2-info__content__line"></div>
                        <div class="sec2-info__content__icon">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-sec2.svg" alt="ikona" />
                        </div>
                        <div class="sec2-info__content__texts">
                            <?php if ($seagolf_sec3_text = get_field('seagolf_sec3_text')) : ?>
                                <div class="sec2-info__content__texts__text">
                                    <div class="text-main text-main--white text-main--fw400-italic"><?php echo $seagolf_sec3_text; ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if ($seagolf_sec3_name = get_field('seagolf_sec3_name')) : ?>
                                <div class="sec2-info__content__texts__name">
                                    <h5 class="f-h5 f-h5--f35 f-h5--gold-medium"> <?php echo $seagolf_sec3_name; ?></h5>
                                </div>
                            <?php endif; ?>
                            <?php if ($seagolf_sec3_position = get_field('seagolf_sec3_position')) : ?>
                                <div class="sec2-info__content__texts__position">
                                    <h5 class="f-h5 f-h5--f20 f-h5--gold-medium f-h5--ls2"> <?php echo $seagolf_sec3_position; ?>
                                    </h5>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="sec2-info__content__photo">
                            <?php
                            $seagolf_sec3_photo = get_field('seagolf_sec3_photo');
                            if ($seagolf_sec3_photo) : ?>
                                <img src="<?php echo esc_url($seagolf_sec3_photo['url']); ?>" alt="<?php echo esc_attr($seagolf_sec3_photo['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec2-info__box">
            <div class="sec2-info__box__content">
                <?php if ($seagolf_sec3_text_box = get_field('seagolf_sec3_text_box')) : ?>
                    <div class="sec2-info__box__content__text">
                        <h4 class="f-h4"> <?php echo $seagolf_sec3_text_box; ?></h4>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </section>
    <section class="sec3-info">
        <div class="container">
            <div class="row row-text-rotate">
                <div class="col-xl-12">
                    <div class="sec3-info__box">
                        <div class="sec3-info__box__content">
                            <?php if (have_rows('seagolf_sec4_info_box')) : ?>
                                <?php while (have_rows('seagolf_sec4_info_box')) :
                                    the_row(); ?>
                                    <div class="sec3-info__box__content__items">
                                        <?php
                                        $seagolf_sec4_info_box_icon = get_sub_field('seagolf_sec4_info_box_icon');
                                        if ($seagolf_sec4_info_box_icon) : ?>
                                            <img class="sec3-info__box__items__icon" src="<?php echo esc_url($seagolf_sec4_info_box_icon['url']); ?>" alt="<?php echo esc_attr($seagolf_sec4_info_box_icon['alt']); ?>" />
                                        <?php endif; ?>
                                        <?php if ($seagolf_sec4_info_box_text = get_sub_field('seagolf_sec4_info_box_text')) : ?>
                                            <h6 class="f-h6"> <?php echo $seagolf_sec4_info_box_text; ?></h6>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="sec3-info__box__background">
                            <img class="parallax" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/Golf-Ball_Black.png" alt="zdjęcie piłki golfowej" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec3-info__text">
            <?php if ($seagolf_sec4_info_text = get_field('seagolf_sec4_info_text')) : ?>
                <h5 class="f-h5 f-h5--gold-medium f-h5--fw500-italic"> <?php echo $seagolf_sec4_info_text; ?>
                </h5>
            <?php endif; ?>
        </div>
    </section>
    <section class="sec4-about">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="sec4-about__photo">
                        <?php
                        $seagolf_sec5_photo = get_field('seagolf_sec5_photo');
                        if ($seagolf_sec5_photo) : ?>
                            <img src="<?php echo esc_url($seagolf_sec5_photo['url']); ?>" alt="<?php echo esc_attr($seagolf_sec5_photo['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sec4-about__box">
                        <?php if ($seagolf_sec5_title = get_field('seagolf_sec5_title')) : ?>
                            <h3 class="f-h3 f-h3--black-dark"> <?php echo $seagolf_sec5_title; ?></h3>
                        <?php endif; ?>
                        <div class="sec4-about__box__content">
                            <?php if ($seagolf_sec5_text = get_field('seagolf_sec5_text')) : ?>
                                <p class="text-main"> <?php echo $seagolf_sec5_text; ?></p>
                            <?php endif; ?>

                            <?php
                            $link = get_field('seagolf_sec5_link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5-localization">
        <div class="container">
            <div class="row">
                <div class="offset-xxxl-1 col-xl-5">
                    <div class="sec5-localization__box">
                        <?php if ($seagolf_sec6_title = get_field('seagolf_sec6_title')) : ?>
                            <h3 class="f-h3 f-h3--black-dark"> <?php echo $seagolf_sec6_title; ?></h3>
                        <?php endif; ?>
                        <div class="sec5-localization__box__content">
                            <?php if ($seagolf_sec6_text = get_field('seagolf_sec6_text')) : ?>
                                <p class="text-main"><?php echo $seagolf_sec6_text; ?>
                                </p>
                            <?php endif; ?>
                            <?php
                            $link = get_field('seagolf_sec6_link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sec5-localization__photo">
                        <?php
                        $seagolf_sec6_photo = get_field('seagolf_sec6_photo');
                        if ($seagolf_sec6_photo) : ?>
                            <img src="<?php echo esc_url($seagolf_sec6_photo['url']); ?>" alt="<?php echo esc_attr($seagolf_sec6_photo['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec6-price">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="sec6-price__photo">
                        <?php
                        $seagolf_sec7_photo = get_field('seagolf_sec7_photo');
                        if ($seagolf_sec7_photo) : ?>
                            <img src="<?php echo esc_url($seagolf_sec7_photo['url']); ?>" alt="<?php echo esc_attr($seagolf_sec7_photo['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sec6-price__box">
                        <?php if ($seagolf_sec7_title = get_field('seagolf_sec7_title')) : ?>
                            <h3 class="f-h3 f-h3--black-dark"><?php echo $seagolf_sec7_title; ?></h3>
                        <?php endif; ?>
                        <div class="sec6-price__box__content">
                            <?php if ($seagolf_sec7_text = get_field('seagolf_sec7_text')) : ?>
                                <p class="text-main"> <?php echo $seagolf_sec7_text; ?>
                                </p><?php endif; ?>
                            <?php
                            $link = get_field('seagolf_sec7_link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec7-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-5">
                    <h5 class="f-h5 f-h5--gold-dark f-h5--fw500-italic">
                        Pływasz w basenie, leżysz w jacuzzi, relaksujesz się w saunie lub obserwujesz, jak Twoje dzieci spędzają beztrosko czas w brodziku…
                    </h5>
                </div>
                <div class="col-xl-5">
                    <p class="text-main">Poczuj się błogo i spełniaj swoje marzenia w Sea & Golf Resort Wolin. Tu w każdej chwili możesz wybrać się na pobliskie pole golfowe lub wyruszyć na rowerową przygodę, biegnącą tuż przy osiedlu ścieżką. Spacerem dotrzesz nad morze, by cieszyć się słońcem, ciepłym piaskiem i morską bryzą, która przyjemnie Cię orzeźwi.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8-links">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec8-links__box">
                        <div class="sec8-links__box__video-link">
                            <a href="<?php echo $first_link_box_sec4_hp_karwia; ?>" class="sec8-links__box__video-link__item video-first-link">
                                <video playsinline="" muted="" loop="" preload="true" class="sec8-links__box__video-link__item__hover">
                                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/video/Karwia_Video_Lokalizacja.mp4" type="video/mp4">
                                </video>
                                <div class="sec8-links__box__video-link__item__container">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-sec8-item-1.svg" alt="ikona" />
                                    <h3 class="f-h3 f-h3--gold-medium ">Lokalizacja</h3>
                                    <p class="text-main text-main--white text-main--fw600">Sprawdź, gdzie znajduje się Sea & Golf Resort</p>
                                    <div class="btn">ZOBACZ</div>
                                </div>

                            </a>
                        </div>
                        <div class="sec8-links__box__video-link">
                            <a href="<?php echo $first_link_box_sec4_hp_karwia; ?>" class="sec8-links__box__video-link__item video-second-link">
                                <video playsinline="" muted="" loop="" preload="true" class="sec8-links__box__video-link__item__hover">
                                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/video/Karwia_Video_Ceny-dzialek.mp4" type="video/mp4">
                                </video>
                                <div class="sec8-links__box__video-link__item__container">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-sec8-item-2.svg" alt="ikona" />
                                    <h3 class="f-h3 f-h3--gold-medium ">Ceny działek</h3>
                                    <p class="text-main text-main--white text-main--fw600">Znajdź dla siebie najkorzystniejszą ofertę </p>
                                    <div class="btn">ZOBACZ</div>
                                </div>
                            </a>
                        </div>
                        <div class="sec8-links__box__video-link">
                            <a href="<?php echo $first_link_box_sec4_hp_karwia; ?>" class="sec8-links__box__video-link__item video-last-link">
                                <video playsinline="" muted="" loop="" preload="true" class="sec8-links__box__video-link__item__hover">
                                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/video/Karwia_Video_Finansowanie.mp4" type="video/mp4">
                                </video>
                                <div class="sec8-links__box__video-link__item__container">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-sec8-item-3.svg" alt="ikona" />
                                    <h3 class="f-h3 f-h3--gold-medium ">Finansowanie</h3>
                                    <p class="text-main text-main--white text-main--fw600">Dowiedz się,<br> dlaczego to się opłaca</p>
                                    <div class="btn">ZOBACZ</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec9-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="sec9-testimonial__box">
                        <h3 class="f-h3 f-h3--black-dark">Opinie</h3>
                        <h4 class="f-h4 f-h4--f80 f-h4--black-dark">klientów</h4>
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-text text-main"><b>Jestem zadowolony z obsługi, jaką oferuje firma Saveinvest. Specjaliści bardzo sprawnie, szybko i terminowo zgromadzili wymagane dokumenty i uzyskali dla mojej działki warunki zabudowy.</b><br><br>Nie martwiłem się, w jaki sposób zdobyć dokumenty oraz dopełnić wszelkich formalności, ponieważ pracownicy Saveinvest wszystkim się zajęli. Kompetencja, rzetelność i doświadczenie – te trzy słowa najlepiej oddają jakość usług świadczonych przez firmę! </div>
                                    <div class="swiper-name text-main text-main--fw700">Sebastian, Kijowice
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-text text-main"><b>2 Jestem zadowolony z obsługi, jaką oferuje firma Saveinvest. Specjaliści bardzo sprawnie, szybko i terminowo zgromadzili wymagane dokumenty i uzyskali dla mojej działki warunki zabudowy.</b><br>Nie martwiłem się, w jaki sposób zdobyć dokumenty oraz dopełnić wszelkic formalności, ponieważ pracownicy formalności, ponieważ pracownicy Saveinvest formalności, ponieważ pracownicy Saveinvestszystkim się zajęl trzy słowa najlepiej oddają jakość usług świadczonych przez firmę! </div>
                                    <div class="swiper-name text-main text-main--fw700">Sebastian, Kijowice
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-text text-main"><b>3 Jestem zadowolony z obsługi, jaką oferuje firma Saveinvest. Specjaliści bardzo sprawnie, szybko i terminowo zgromadzili wymagane dokumenty i uzyskali dla mojej działki warunki zabudowy.</b><br>Nie martwiłem się, w jaki sposób zdobyć dokumenty oraz dopełnić wszelkich formalności, ponieważ pracownicy Saveinvest wszystkim się zajęli. Kompetencja, rzetelność i doświadczenie – te trzy słowa najlepiej oddają jakość usług świadczonych przez firmę! </div>
                                    <div class="swiper-name text-main text-main--fw700">Sebastian, Kijowice
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-text text-main"><b>4 Jestem zadowolony z obsługi, jaką oferuje firma Saveinvest. Specjaliści bardzo sprawnie, szybko i terminowo zgromadzili wymagane dokumenty i uzyskali dla mojej działki warunki zabudowy.</b><br>Nie martwiłem się, w jaki sposób zdobyć dokumenty oraz dopełnić wszelkich formalności, ponieważ pracownicy Saveinvest wszystkim się zajęli. Kompetencja, rzetelność i doświadczenie – te trzy słowa najlepiej oddają jakość usług świadczonych przez firmę! </div>
                                    <div class="swiper-name text-main text-main--fw700">Sebastian, Kijowice
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-text text-main"><b>5 Jestem zadowolony z obsługi, jaką oferuje firma Saveinvest. Specjaliści bardzo sprawnie, szybko i terminowo zgromadzili wymagane dokumenty i uzyskali dla mojej działki warunki zabudowy.</b><br>Nie martwiłem się, w jaki sposób zdobyć dokumenty oraz dopełnić wszelkich formalności, ponieważ pracownicy Saveinvest wszystkim się zajęli. Kompetencja, rzetelność i doświadczenie – te trzy słowa najlepiej oddają jakość usług świadczonych przez firmę! </div>
                                    <div class="swiper-name text-main text-main--fw700">Sebastian, Kijowice
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-text text-main"><b>6 Jestem zadowolony z obsługi, jaką oferuje firma Saveinvest. Specjaliści bardzo sprawnie, szybko i terminowo zgromadzili wymagane dokumenty i uzyskali dla mojej działki warunki zabudowy.</b><br>Nie martwiłem się, w jaki sposób zdobyć dokumenty oraz dopełnić wszelkich formalności, ponieważ pracownicy Saveinvest wszystkim się zajęli. Kompetencja, rzetelność i doświadczenie – te trzy słowa najlepiej oddają jakość usług świadczonych przez firmę! </div>
                                    <div class="swiper-name text-main text-main--fw700">Sebastian, Kijowice
                                    </div>
                                </div>
                            </div>
                            <div class="sec9-testimonial__box__nav">
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                        <img class="sec9-testimonial__box__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/testimonial-bottom.svg" alt="ikona" />
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sec9-testimonial__company">
                        <img class="sec9-testimonial__company__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/logo_home-page.png" alt="logo" />
                        <h4 class="f-h4 f-h4--f80 f-h4--black-dark">O firmie</h4>
                        <div class="text-main"><b>Saveinvest to polska firma z 20-letnim doświadczeniem, której zaufało już ponad 1000 Klientów.</b><br><br>
                            Firma jest właścicielem wszystkich oferowanych działek, których zakup finansowany jest z własnego kapitału.<br><br>
                            Saveinvest tworzą eksperci rynku nieruchomości i koordynatorzy projektów inwestycyjnych, których publikacje można znaleźć na łamach wszystkich branżowych czasopism i portali.</div>
                        <div class="sec9-testimonial__company__icon-content">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/sec9-20year.png" alt="ikona" />
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/sec9-1000.png" alt="ikona" />
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/sec9-quality.png" alt="ikona" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php
get_template_part('investitions/sea-golf/footer');
?>