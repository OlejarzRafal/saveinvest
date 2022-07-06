<?php

/**
 * Template Name: Lokalizacja enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>
<div class="mainSection aboutPage locationPage">

    <?php get_template_part('investitions/enklawa-dziwnowek/nav-head'); ?>
    <?php get_template_part('investitions/enklawa-dziwnowek/nav-subpages'); ?>

    <div class="hello_box">
        <div class="container">
            <?php if ($location_enkl_dziwnow_sec1_header_text = get_field('location_enkl_dziwnow_sec1_header_text')) : ?>
                <h1 class="ek-fadein-dziwnowek">
                    <?php echo $location_enkl_dziwnow_sec1_header_text; ?>
                </h1>
            <?php endif; ?>
            <?php if ($location_enkl_dziwnow_sec1_header_title = get_field('location_enkl_dziwnow_sec1_header_title')) : ?>
                <h2 class="ek-fadein-dziwnowek">
                    <?php echo $location_enkl_dziwnow_sec1_header_title; ?>
                </h2>
            <?php endif; ?>
        </div>
    </div>
    <div class="distancesSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php if ($location_enkl_dziwnow_sec2_title = get_field('location_enkl_dziwnow_sec2_title')) : ?>
                        <div class="title ek-fadein-dziwnowek">
                            <?php echo $location_enkl_dziwnow_sec2_title; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($location_enkl_dziwnow_sec2_text = get_field('location_enkl_dziwnow_sec2_text')) : ?>
                        <div class="description ek-fadein-dziwnowek">
                            <?php echo $location_enkl_dziwnow_sec2_text; ?>
                        </div>
                    <?php endif; ?>
                    <div class="list table-responsive">
                        <table class="table">
                            <?php if (have_rows('location_enkl_dziwnow_sec2_row_box')) : ?>
                                <?php while (have_rows('location_enkl_dziwnow_sec2_row_box')) :
                                    the_row(); ?>
                                    <tr>
                                        <?php if ($location_enkl_dziwnow_sec2_row_box_location = get_sub_field('location_enkl_dziwnow_sec2_row_box_location')) : ?>
                                            <td class="ek-fadein-dziwnowek-small"> <?php echo $location_enkl_dziwnow_sec2_row_box_location; ?>
                                                <?php
                                                $location_enkl_dziwnow_sec2_row_box_picture = get_sub_field('location_enkl_dziwnow_sec2_row_box_picture');
                                                if ($location_enkl_dziwnow_sec2_row_box_picture) : ?>
                                                    <img src="<?php echo esc_url($location_enkl_dziwnow_sec2_row_box_picture['url']); ?>" alt="<?php echo esc_attr($location_enkl_dziwnow_sec2_row_box_picture['alt']); ?>" />
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                        <?php if ($location_enkl_dziwnow_sec2_row_box_time = get_sub_field('location_enkl_dziwnow_sec2_row_box_time')) : ?>
                                            <td class="ek-fadein-dziwnowek-small"><?php echo $location_enkl_dziwnow_sec2_row_box_time; ?></td>
                                        <?php endif; ?>
                                        <?php if ($location_enkl_dziwnow_sec2_row_box_space = get_sub_field('location_enkl_dziwnow_sec2_row_box_space')) : ?>
                                            <td class="ek-fadein-dziwnowek-small"><?php echo $location_enkl_dziwnow_sec2_row_box_space; ?></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/map_highway.svg" class="img-fluid parallax-bottom-map" alt="Mapa odległości" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="listSection locationPage">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="row swiper ek-fadein-dziwnowek">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('location_enkl_dziwnow_sec3_slider_box')) : ?>
                            <?php while (have_rows('location_enkl_dziwnow_sec3_slider_box')) :
                                the_row(); ?>
                                <div class="box swiper-slide">
                                    <?php
                                    $location_enkl_dziwnow_sec3_slider_box_picture = get_sub_field('location_enkl_dziwnow_sec3_slider_box_picture');
                                    if ($location_enkl_dziwnow_sec3_slider_box_picture) : ?>
                                        <img src="<?php echo esc_url($location_enkl_dziwnow_sec3_slider_box_picture['url']); ?>" alt="<?php echo esc_attr($location_enkl_dziwnow_sec3_slider_box_picture['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="name">
                                        <?php if ($location_enkl_dziwnow_sec3_slider_box_text_first = get_sub_field('location_enkl_dziwnow_sec3_slider_box_text_first')) : ?>
                                            <?php echo $location_enkl_dziwnow_sec3_slider_box_text_first; ?>
                                        <?php endif; ?>
                                        <?php if ($location_enkl_dziwnow_sec3_slider_box_text_second = get_sub_field('location_enkl_dziwnow_sec3_slider_box_text_second')) : ?>
                                            <p>
                                                <?php echo $location_enkl_dziwnow_sec3_slider_box_text_second; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="container-fluid-slider-nav">
                        <div class="slick-prev"></div>
                        <div class="slick-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mapSection">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/map_location.jpg" alt="Mapa" />
</div>
<div class="nextPageBox">
    <a href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/ceny-dzialek">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/preview_prices.jpg" class="img-fluid" alt="Ceny działek" />
        <div class="button">Ceny działek</div>
    </a>
</div>

<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>