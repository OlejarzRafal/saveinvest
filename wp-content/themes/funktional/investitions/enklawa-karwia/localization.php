<?php

/**
 * Template Name: Lokalizacja
 * Template Post Type: enklawa-karwia
 */

get_template_part('investitions/enklawa-karwia/header');
?>
<div class="ek-localization">

    <section class="header">
    </section>

    <section class="sec1-info-map">
        <div class="container">
        <div class="bottom-item-4"></div>
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec1-info-map__box ek-right-karwia">
                        <?php if ($title_sec1_localization_karwia = get_field('title_sec1_localization_karwia')) : ?>
                            <h3 class="f-h3 f-h3--white"> <?php echo $title_sec1_localization_karwia; ?></h3>
                        <?php endif; ?>
                        <?php if ($text_sec1_localization_karwia = get_field('text_sec1_localization_karwia')) : ?>
                            <div class="box-text">
                                <p class="text-main text-main--white">
                                    <?php echo $text_sec1_localization_karwia; ?>
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
                                        Czas
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white text-main--fw600">
                                        Odległość
                                    </p>
                                </div>
                            </div>
                            <?php if (have_rows('repeter_sec1_localization_karwia')) : ?>
                                <?php while (have_rows('repeter_sec1_localization_karwia')) :
                                    the_row(); ?>
                                    <div class="row-table">
                                        <?php if ($title_repeter_sec1_localization_karwia = get_sub_field('title_repeter_sec1_localization_karwia')) : ?>
                                            <div class="row-table__title">
                                                <p class="text-main text-main--white">
                                                    <?php echo $title_repeter_sec1_localization_karwia; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($time_repeter_sec1_localization_karwia = get_sub_field('time_repeter_sec1_localization_karwia')) : ?>
                                            <div class="row-table__time">
                                                <p class="text-main text-main--white">
                                                    <?php echo $time_repeter_sec1_localization_karwia; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($distance_repeter_sec1_localization_karwia = get_sub_field('distance_repeter_sec1_localization_karwia')) : ?>
                                            <div class="row-table__distance">
                                                <p class="text-main text-main--white">
                                                    <?php echo $distance_repeter_sec1_localization_karwia; ?>
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
                    <div class="sec1-info-map__map ek-left-karwia">
                        <img class="logo-karwia" src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/localization/logo-top-map.svg" alt="mapa Polski" />
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/localization/mapa-polski.png" alt="mapa Polski" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec2-icons">
        <div class="container">
            <div class="row row-background">
                <div class="col-xl-12">
                    <div class="sec2-icons__content">
                        <?php if (have_rows('row_sec2_icons_localisation_karwia')) : ?>
                            <?php while (have_rows('row_sec2_icons_localisation_karwia')) :
                                the_row(); ?>
                                <div class="content-boxs el-fadein-karwia">
                                    <?php if (have_rows('box_row_sec2_icons_localisation_karwia')) : ?>
                                        <?php while (have_rows('box_row_sec2_icons_localisation_karwia')) :
                                            the_row(); ?>
                                            <div class="content-box">
                                                <?php
                                                $icon_icons_localisation_karwia = get_sub_field('icon_icons_localisation_karwia');
                                                if ($icon_icons_localisation_karwia) : ?>
                                                    <img src="<?php echo esc_url($icon_icons_localisation_karwia['url']); ?>" alt="<?php echo esc_attr($icon_box_row_icon_sec2_hp_karwia['alt']); ?>" />
                                                <?php endif; ?>
                                                <?php if ($text_icons_localisation_karwia = get_sub_field('text_icons_localisation_karwia')) : ?>
                                                    <p class="text-main text-main--f20 text-main--sand-dark ek-fadein-karwia">
                                                        <?php echo $text_icons_localisation_karwia; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3-map">
        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/localization/backgound-map.png" alt="ikona" />
    </section>

</div>

<?php
get_template_part('investitions/enklawa-karwia/footer');
?>