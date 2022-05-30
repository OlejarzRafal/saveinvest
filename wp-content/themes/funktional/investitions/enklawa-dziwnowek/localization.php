<?php

/**
 * Template Name: Lokalizacja enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>

<!-- <div class="sg-localisation">
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
        <?php if ($text_sec2_localization_seagolf = get_field('text_sec2_localization_seagolf')) : ?>
            <h3 class="f-h3 f-h3--gold-medium f-h3--fw500"><?php echo $text_sec2_localization_seagolf; ?></h3>
        <?php endif; ?>
    </section>

    <section class="sec3-info">
        <div class="container">
            <div class="row row-text-rotate">
                <div class="col-xl-12">
                    <div class="sec3-info__box">
                        <div class="sec3-info__box__content">
                            <?php if (have_rows('info_sec2_localization_seagolf')) : ?>
                                <?php while (have_rows('info_sec2_localization_seagolf')) :
                                    the_row(); ?>
                                    <div class="sec3-info__box__content__items">
                                        <?php
                                        $info_sec2_localization_seagolf_icon = get_sub_field('info_sec2_localization_seagolf_icon');
                                        if ($info_sec2_localization_seagolf_icon) : ?>
                                            <img class="sec3-info__box__items__icon" src="<?php echo esc_url($info_sec2_localization_seagolf_icon['url']); ?>" alt="<?php echo esc_attr($info_sec2_localization_seagolf_icon['alt']); ?>" />
                                        <?php endif; ?>
                                        <?php if ($info_sec2_localization_seagolf_text = get_sub_field('info_sec2_localization_seagolf_text')) : ?>
                                            <h6 class="f-h6"><?php echo $info_sec2_localization_seagolf_text; ?></h6>
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
    </section>

    <section class="sec4-map">
        <div class="sec4-map__photo">
            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/localisation/sec4-mapa.jpg" alt="mapa" />

        </div>
        <div class="sec4-map__scroller">
            <div class="sec4-map__scroller__center"></div>
        </div>
    </section>
</div> -->

<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>