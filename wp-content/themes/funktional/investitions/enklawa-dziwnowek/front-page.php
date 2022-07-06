<?php

/**
 * Template Name: Home enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>

<div class="mainSection">

    <?php get_template_part('investitions/enklawa-dziwnowek/nav-head'); ?>
    <?php get_template_part('investitions/enklawa-dziwnowek/nav-home'); ?>

    <header class="logo ">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/logo.svg" class="img-fluid parallax" alt="Logo" />
    </header>

    <div class="hello_box">
        <div class="container">
            <div class="col-sm-12">
                <h1>
                    <?php echo get_field('home_headline'); ?>
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="quoteSection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="content">
                    <div class="quote ek-fadein-dziwnowek">
                        <?php echo get_field('quote'); ?>
                    </div>

                    <div class="name ek-fadein-dziwnowek">
                        <?php echo get_field('quote_author'); ?>
                        <div class="position ek-fadein-dziwnowek">
                            <?php echo get_field('quote_position'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="picture ek-fadein-dziwnowek">
                    <?php
                    $quote_author_picture = get_field('quote_author_picture');
                    if ($quote_author_picture) : ?>
                        <img src="<?php echo esc_url($quote_author_picture['url']); ?>" alt="<?php echo esc_attr($quote_author_picture['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="videoSection">
    <div class="container-fluid">
        <div class="row">
            <div class=" offset-xl-1 col-xl-3">
                <?php echo get_field('video_text'); ?>
                </p>
            </div>
            <div class="offset-xl-1 col-xl-6">
                <iframe src="<?php echo get_field('video_link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="listSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title ek-fadein-dziwnowek">
                    <?php echo get_field('list_header'); ?>
                </div>

                <?php if (have_rows('list')) : ?>
                    <?php while (have_rows('list')) :
                        the_row(); ?>
                        <div>
                            <?php if (have_rows('slide')) : ?>
                                <?php while (have_rows('slide')) :
                                    the_row(); ?>
                                    <div class="box ek-fadein-dziwnowek">
                                        <?php
                                        $icon = get_sub_field('icon');
                                        if ($icon) : ?>
                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                                        <?php endif; ?>
                                        <?php if ($name = get_sub_field('name')) : ?>
                                            <div class="name">
                                                <?php echo $name; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="col-sm-12">
                    <div class=" aboutInvest">
                        <a href="<?php echo get_field('list_link'); ?>" class="btn">
                            <?php echo get_field('list_link_name'); ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="infoSection">
    <div class="title ek-fadein-dziwnowek">
        <?php echo get_field('info_title'); ?>
    </div>
    <div class="text ek-fadein-dziwnowek">
        <?php echo get_field('info_description'); ?>
    </div>
</div>

<div class="infoBgSection">
    <div class="box">
        <div class="title ek-fadein-dziwnowek">
            <?php echo get_field('about_title'); ?>
        </div>
        <div class="description ek-fadein-dziwnowek">
            <?php echo get_field('about_description'); ?>
        </div>
        <a href="<?php echo get_field('about_link'); ?>" class="btn">
            <?php echo get_field('about_link_name'); ?>
        </a>
    </div>
</div>

<div class="infoBgSection right">
    <div class="box">
        <div class="title ek-fadein-dziwnowek">
            <?php echo get_field('about_2_title'); ?>
        </div>
        <div class="description ek-fadein-dziwnowek">
            <?php echo get_field('about_2_description'); ?>
        </div>
    </div>
</div>

<div class="chooseSection">
    <?php if (have_rows('enkl_dziwnow_first_box')) : ?>
        <?php while (have_rows('enkl_dziwnow_first_box')) :
            the_row(); ?>
            <?php if ($enkl_dziwnow_first_box_link = get_sub_field('enkl_dziwnow_first_box_link')) : ?>
                <a href=" <?php echo esc_html($enkl_dziwnow_first_box_link); ?>">
                    <div class="box" style="background: url(<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/location.jpg) center center no-repeat;
                     background-size:cover;">
                        <?php if ($enkl_dziwnow_first_box_title = get_sub_field('enkl_dziwnow_first_box_title')) : ?>
                            <div class="title">
                                <?php echo $enkl_dziwnow_first_box_title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($enkl_dziwnow_first_box_text = get_sub_field('enkl_dziwnow_first_box_text')) : ?>
                            <div class="description">
                                <?php echo $enkl_dziwnow_first_box_text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if (have_rows('enkl_dziwnow_second_box')) : ?>
        <?php while (have_rows('enkl_dziwnow_second_box')) :
            the_row(); ?>
            <?php if ($enkl_dziwnow_second_box_link = get_sub_field('enkl_dziwnow_second_box_link')) : ?>
                <a href="<?php echo esc_html($enkl_dziwnow_second_box_link); ?>">
                    <div class="box" style="background: url(<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/prices.jpg) center center no-repeat;
                     background-size:cover;">
                        <?php if ($enkl_dziwnow_second_box_title = get_sub_field('enkl_dziwnow_second_box_title')) : ?>
                            <div class="title">
                                <?php echo $enkl_dziwnow_second_box_title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($enkl_dziwnow_second_box_text = get_sub_field('enkl_dziwnow_second_box_text')) : ?>
                            <div class="description">
                                <?php echo $enkl_dziwnow_second_box_text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('enkl_dziwnow_thrid_box')) : ?>
        <?php while (have_rows('enkl_dziwnow_thrid_box')) :
            the_row(); ?>
            <?php if ($enkl_dziwnow_thrid_box_link = get_sub_field('enkl_dziwnow_thrid_box_link')) : ?>
                <a href="<?php echo esc_html($enkl_dziwnow_thrid_box_link); ?>">
                    <div class="box" style="background: url(<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/earning.jpg) center center no-repeat;
                     background-size:cover;">
                        <?php if ($enkl_dziwnow_thrid_box_title = get_sub_field('enkl_dziwnow_thrid_box_title')) : ?>
                            <div class="title">
                                <?php echo $enkl_dziwnow_thrid_box_title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($enkl_dziwnow_thrid_box_text = get_sub_field('enkl_dziwnow_thrid_box_text')) : ?>
                            <div class="description">
                                <?php echo $enkl_dziwnow_thrid_box_text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="aboutSection">
    <div class="box">
        <div class="row">
            <div class="col-xl-6">
                <?php if ($enkl_dziwnow_sec_ref_title = get_field('enkl_dziwnow_sec_ref_title')) : ?>
                    <div class="title ek-fadein-dziwnowek">
                        <?php echo $enkl_dziwnow_sec_ref_title; ?>
                    </div>
                <?php endif; ?>
                <?php if ($enkl_dziwnow_sec_ref_text = get_field('enkl_dziwnow_sec_ref_text')) : ?>
                    <div class="description ek-fadein-dziwnowek">
                        <?php echo $enkl_dziwnow_sec_ref_text; ?>
                    </div>
                <?php endif; ?>
                <div class="awards ek-fadein-dziwnowek">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_2.svg" alt="adw" />
                        </li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_1.svg" alt="adw" />
                        </li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_3.png" alt="adw" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="carousel-opinion swiper">
                    <div class="swiper-wrapper">
                        <?php if (get_field('reference', 'option')) : ?>
                            <?php while (has_sub_field('reference', 'option')) : ?>
                                <div class="opinion swiper-slide">
                                    <?php echo get_sub_field('reference'); ?>
                                    <div class="name">
                                        <?php echo get_sub_field('author'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="nextPageBox">
        <a href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/o-enklawie/">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/preview_about.jpg" class="img-fluid" alt="" />
            <div class="button">O Enklawie</div>
        </a>
    </div>
</div>

<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>