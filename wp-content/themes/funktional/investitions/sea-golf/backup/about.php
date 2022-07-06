<?php

/**
 * Template Name: O resorcie sea-golf
 * Template Post Type: sea-golf
 */

get_template_part('investitions/sea-golf/header');
?>

<div class="sg-about">

    <section class="header">
    </section>
    <section class="sec1-about">
        <div class="container">
            <div class="row row-circle">
                <div class="col-xxl-6">
                    <div class="sec1-about__content">
                        <img class="sec1-about__content__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/about/sec-1-icon.svg" alt="ikona" />
                        <div class="sec1-about__content__info">
                            <?php if ($sec1_sg_about_title = get_field('sec1_sg_about_title')) : ?>
                                <h2 class="f-h2 f-h2--f80 f-h2--gold-medium f-h2--fw600-italic"><?php echo $sec1_sg_about_title; ?></h2>
                            <?php endif; ?>
                            <?php if ($sec1_sg_about_text = get_field('sec1_sg_about_text')) : ?>
                                <p class="text-main text-main--white"> <?php echo $sec1_sg_about_text; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6">
                    <div class="sec1-about__photo">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/about/sec-1-background.jpg" alt="zdjęcie" />
                    </div>
                </div>
            </div>
        </div>
        <?php if ($sec1_sg_about_text_bottom = get_field('sec1_sg_about_text_bottom')) : ?>
            <div class="sec1-about__text">
                <h3 class="f-h3 f-h3--gold-medium f-h3--fw500"><?php echo $sec1_sg_about_text_bottom; ?></h3>
            </div>
        <?php endif; ?>
    </section>
    <section class="sec2-info">
        <div class="sec2-info__letter-s letter-right"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="sec2-info__photo">
                        <?php
                        $sec2_sg_about_photo = get_field('sec2_sg_about_photo');
                        if ($sec2_sg_about_photo) : ?>
                            <img src="<?php echo esc_url($sec2_sg_about_photo['url']); ?>" alt="<?php echo esc_attr($sec2_sg_about_photo['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="sec2-info__box">
                        <?php if ($sec2_sg_about_title = get_field('sec2_sg_about_title')) : ?>
                            <h3 class="f-h3 f-h3--black-dark"><?php echo $sec2_sg_about_title; ?></h3>
                        <?php endif; ?>
                        <div class="sec2-info__box__content">
                            <?php if ($sec2_sg_about_text = get_field('sec2_sg_about_text')) : ?>
                                <p class="text-main"> <?php echo $sec2_sg_about_text; ?>
                                </p>
                            <?php endif; ?>
                            <?php
                            $link = get_field('sec2_sg_about_button');
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
    <section class="sec3-info">
        <div class="sec3-info__letter-g letter-left"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec3-info__box">
                        <?php if ($sec3_sg_about_title = get_field('sec3_sg_about_title')) : ?>
                            <h3 class="f-h3 f-h3--black-dark"> <?php echo $sec3_sg_about_title; ?></h3>
                        <?php endif; ?>
                        <div class="sec3-info__box__content">
                            <?php if ($sec3_sg_about_text = get_field('sec3_sg_about_text')) : ?>
                                <p class="text-main"> <?php echo $sec3_sg_about_text; ?></p>
                            <?php endif; ?>
                            <?php
                            $link = get_field('sec3_sg_about_button');
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
                <div class="col-xl-7">
                    <div class="sec3-info__photo">
                        <?php
                        $sec3_sg_about_photo = get_field('sec3_sg_about_photo');
                        if ($sec3_sg_about_photo) : ?>
                            <img src="<?php echo esc_url($sec3_sg_about_photo['url']); ?>" alt="<?php echo esc_attr($sec3_sg_about_photo['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec4-slider">
        <div class="sec4-slider__ball parallax"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec4-slider__slider swiper">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('sec4_sg_info_box')) : ?>
                                <?php while (have_rows('sec4_sg_info_box')) :
                                    the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide__items">
                                            <?php
                                            $sec4_sg_info_box_icon = get_sub_field('sec4_sg_info_box_icon');
                                            if ($sec4_sg_info_box_icon) : ?>
                                                <img class="swiper-slide__items__icon" src="<?php echo esc_url($sec4_sg_info_box_icon['url']); ?>" alt="<?php echo esc_attr($sec4_sg_info_box_icon['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php if ($sec4_sg_info_box_text = get_sub_field('sec4_sg_info_box_text')) : ?>
                                                <h6 class="f-h6"> <?php echo $sec4_sg_info_box_text; ?></h6>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="sec4-slider__slider-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="sec4-slider__box">
                        <div class="sec4-slider__box__content">
                            <?php if ($sec4_sg_info_text_bottom = get_field('sec4_sg_info_text_bottom')) : ?>
                                <div class="sec4-slider__box__content__text">
                                    <h4 class="f-h4"> <?php echo $sec4_sg_info_text_bottom; ?></h4>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="sec5-info">
        <div class="sec5-info__letter-s letter-right-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="sec5-info__photo">
                        <?php
                        $sec5_sg_about_photo = get_field('sec5_sg_about_photo');
                        if ($sec5_sg_about_photo) : ?>
                            <img src="<?php echo esc_url($sec5_sg_about_photo['url']); ?>" alt="<?php echo esc_attr($sec5_sg_about_photo['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="sec5-info__box">
                        <?php if ($sec5_sg_about_title = get_field('sec5_sg_about_title')) : ?>
                            <h3 class="f-h3 f-h3--black-dark"><?php echo $sec5_sg_about_title; ?></h3>
                        <?php endif; ?>
                        <div class="sec5-info__box__content">
                            <?php if ($sec5_sg_about_text = get_field('sec5_sg_about_text')) : ?>
                                <p class="text-main"><?php echo $sec5_sg_about_text; ?>
                                </p>
                            <?php endif; ?>
                            <?php
                            $link = get_field('sec5_sg_about_button');
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
    <section class="sec6-info">
        <div class="sec6-info__letter-g letter-left-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec6-info__box"><?php if ($sec6_sg_about_title = get_field('sec6_sg_about_title')) : ?>
                            <h3 class="f-h3 f-h3--black-dark"> <?php echo $sec6_sg_about_title; ?></h3>
                        <?php endif; ?>
                        <div class="sec6-info__box__content">
                            <?php if ($sec6_sg_about_text = get_field('sec6_sg_about_text')) : ?>
                                <p class="text-main"><?php echo $sec6_sg_about_text; ?></p>
                            <?php endif; ?>
                            <?php
                            $link = get_field('sec6_sg_about_button');
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
                <div class="col-xl-7">
                    <div class="sec6-info__photo">
                        <?php
                        $sec6_sg_about_photo = get_field('sec6_sg_about_photo');
                        if ($sec6_sg_about_photo) : ?>
                            <img src="<?php echo esc_url($sec6_sg_about_photo['url']); ?>" alt="<?php echo esc_attr($sec6_sg_about_photo['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<?php
get_template_part('investitions/sea-golf/footer');
?>