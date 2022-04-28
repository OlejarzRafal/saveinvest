<?php

/**
 * Template Name: Lokalizacja sea-golf
 * Template Post Type: sea-golf
 */

get_template_part('investitions/sea-golf/header');
?>

<div class="sg-localisation">
    <section class="header">
    </section>
    <section class="sec1-info-map">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec1-info-map__box">
                        <?php if ($title_sec1_localization_seagolf = get_field('title_sec1_localization_seagolf')) : ?>
                            <h3 class="f-h3 f-h3--white"> <?php echo $title_sec1_localization_seagolf; ?></h3>
                        <?php endif; ?>
                        <?php if ($text_sec1_localization_seagolf = get_field('text_sec1_localization_seagolf')) : ?>
                            <div class="box-text">
                                <p class="text-main text-main--white">
                                    <?php echo $text_sec1_localization_seagolf; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <div class="sec1-info-map__box__table-location">
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw600"></p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white text-main--fw600">
                                        Odległość
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white text-main--fw600">
                                        Czas
                                    </p>
                                </div>
                            </div>
                            <?php if (have_rows('repeter_sec1_localization_seagolf')) : ?>
                                <?php while (have_rows('repeter_sec1_localization_seagolf')) :
                                    the_row(); ?>
                                    <div class="row-table">
                                        <?php if ($title_repeter_sec1_localization_seagolf = get_sub_field('title_repeter_sec1_localization_seagolf')) : ?>
                                            <div class="row-table__title">
                                                <p class="text-main text-main--white">
                                                    <?php echo $title_repeter_sec1_localization_seagolf; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($time_repeter_sec1_localization_seagolf = get_sub_field('time_repeter_sec1_localization_seagolf')) : ?>
                                            <div class="row-table__time">
                                                <p class="text-main text-main--white">
                                                    <?php echo $time_repeter_sec1_localization_seagolf; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($distance_repeter_sec1_localization_seagolf = get_sub_field('distance_repeter_sec1_localization_seagolf')) : ?>
                                            <div class="row-table__distance">
                                                <p class="text-main text-main--white">
                                                    <?php echo $distance_repeter_sec1_localization_seagolf; ?>
                                                    <?php
                                                    $icon_repeter_sec1_localization_seagolf = get_sub_field('icon_repeter_sec1_localization_seagolf');
                                                    if ($icon_repeter_sec1_localization_seagolf) : ?>
                                                        <img class="icon-bicycle" src="<?php echo esc_url($icon_repeter_sec1_localization_seagolf['url']); ?>" alt="<?php echo esc_attr($icon_repeter_sec1_localization_seagolf['alt']); ?>" />
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6">
                    <div class="sec1-info-map__map">
                        <img class="logo-sea-golf" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/localisation/logo-header.svg" alt="logo sea-golf" />
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/localisation/mapa-polski.png" alt="mapa Polski" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec2-info">
        <h3 class="f-h3 f-h3--gold-medium f-h3--fw500">Szerokie spektrum możliwości</h3>
        <h3 class="f-h3 f-h3--gold-medium f-h3--fw600-italic"> Twoje wymarzone miejsce</h3>
    </section>

    <section class="sec3-info">
        <div class="container">
            <div class="row row-text-rotate">
                <div class="col-xl-12">
                    <div class="sec3-info__box">
                        <div class="sec3-info__box__content">
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-1.png" alt="ikona" />
                                <h6 class="f-h6">Tylko 2500 m do morza i piaszczystej plaży</h6>
                            </div>
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-2.png" alt="ikona" />
                                <h6 class="f-h6">Działki budowlane z warunkami zabudowy</h6>
                            </div>
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-3.png" alt="ikona" />
                                <h6 class="f-h6">Cicha, spokojna, zielona okolica</h6>
                            </div>
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-4.png" alt="ikona" />
                                <h6 class="f-h6">Utwardzona<br>droga wewnętrzna</h6>
                            </div>
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-5.png" alt="ikona" />
                                <h6 class="f-h6">Ogrodzony teren<br>z wjazdem</h6>
                            </div>
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-6.png" alt="ikona" />
                                <h6 class="f-h6">Duży basen, sauna, jacuzzi oraz brodzik dla dzieci</h6>
                            </div>
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-7.png" alt="ikona" />
                                <h6 class="f-h6">Profesjonalne pole golfowe w okolicy</h6>
                            </div>
                            <div class="sec3-info__box__content__items">
                                <img class="sec3-info__box__items__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-8.png" alt="ikona" />
                                <h6 class="f-h6">Bliskość atrakcji turystycznych</h6>
                            </div>
                        </div>
                        <div class="sec3-info__box__background">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/Golf-Ball_Black.png" alt="zdjęcie piłki golfowej" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec4-map">
        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/localisation/sec4-mapa.jpg" alt="mapa" />
    </section>
</div>

<?php
get_template_part('investitions/sea-golf/footer');
?>