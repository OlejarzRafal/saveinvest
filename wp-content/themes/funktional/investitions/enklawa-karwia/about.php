<?php

/**
 * Template Name: O enkalwie karwia
 * Template Post Type: enklawa-karwia
 */

get_template_part('investitions/enklawa-karwia/header');
?>

<div class="ek-about">

    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="header__content">
                        <?php if ($title_header_about_karwia = get_field('title_header_about_karwia')) : ?>
                            <h3 class="f-h3"><?php echo $title_header_about_karwia; ?></h3>
                        <?php endif; ?>
                        <?php if ($text_header_about_karwia = get_field('text_header_about_karwia')) : ?>
                            <p class="text-main"><?php echo $text_header_about_karwia; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec1-two-text">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="sec1-two-text__box1">
                        <?php
                        $left_photo_sec1_about_karwia = get_field('left_photo_sec1_about_karwia');
                        if ($left_photo_sec1_about_karwia) : ?>
                            <div class="sec1-two-text__box1__photo">
                                <div class="photo-box1">
                                    <img src="<?php echo esc_url($left_photo_sec1_about_karwia['url']); ?>" alt="<?php echo esc_attr($left_photo_sec1_about_karwia['alt']); ?>" />
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="sec1-two-text__box1__content">
                            <?php if ($left_title_sec1_about_karwia = get_field('left_title_sec1_about_karwia')) : ?>
                                <div class="content-title">
                                    <h3 class="f-h3"><?php echo $left_title_sec1_about_karwia; ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if ($left_text_sec1_about_karwia = get_field('left_text_sec1_about_karwia')) : ?>
                                <div class="content-text">
                                    <p class="text-main">
                                        <?php echo $left_text_sec1_about_karwia; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php
                            $link = get_field('left_button_sec1_about_karwia');
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
                    <div class="sec1-two-text__box2">
                        <?php
                        $right_photo_sec1_about_karwia = get_field('right_photo_sec1_about_karwia');
                        if ($right_photo_sec1_about_karwia) : ?>
                            <div class="sec1-two-text__box2__photo">
                                <div class="photo-box2">
                                    <img src="<?php echo esc_url($right_photo_sec1_about_karwia['url']); ?>" alt="<?php echo esc_attr($right_photo_sec1_about_karwia['alt']); ?>" />
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="sec1-two-text__box2__content">
                            <?php if ($right_title_sec1_about_karwia = get_field('right_title_sec1_about_karwia')) : ?>
                                <div class="content-title">
                                    <h3 class="f-h3"><?php echo $right_title_sec1_about_karwia; ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if ($right_text_sec1_about_karwia = get_field('right_text_sec1_about_karwia')) : ?>
                                <div class="content-text">
                                    <p class="text-main">
                                        <?php echo $right_text_sec1_about_karwia; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php
                            $link = get_field('right_button_sec1_about_karwia');
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

    <section class="sec2-comfort">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <?php if ($title_sec2_about_karwia = get_field('title_sec2_about_karwia')) : ?>
                        <div class="sec2-comfort__title">
                            <h3 class="f-h3 f-h3--white"><?php echo $title_sec2_about_karwia; ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-12">
                    <div class="sec2-comfort__slider swiper">
                        <div class="swiper-wrapper">

                            <?php if (have_rows('box_sec2_about_karwia')) : ?>
                                <?php while (have_rows('box_sec2_about_karwia')) :
                                    the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="slider-box">
                                            <?php
                                            $icon_box_sec2_about_karwia = get_sub_field('icon_box_sec2_about_karwia');
                                            if ($icon_box_sec2_about_karwia) : ?>
                                                <img src="<?php echo esc_url($icon_box_sec2_about_karwia['url']); ?>" alt="<?php echo esc_attr($icon_box_sec2_about_karwia['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php if ($text_box_sec2_about_karwia = get_sub_field('text_box_sec2_about_karwia')) : ?>
                                                <p class="text-main text-main--f20 text-main--blue-tint"><?php echo $text_box_sec2_about_karwia; ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <!-- <div class="swiper-slide">
                                <div class="slider-box">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/about/sec2-icon2.png" alt="ikona" />
                                    <p class="text-main text-main--f20 text-main--blue-tint">Działki budowlane z warunkami zabudowy</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-box">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/about/sec2-icon3.png" alt="ikona" />
                                    <p class="text-main text-main--f20 text-main--blue-tint">Lokalizacja bezpośrednio przy lesie</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-box">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/about/sec2-icon4.png" alt="ikona" />
                                    <p class="text-main text-main--f20 text-main--blue-tint">Utwardzona <br> droga wewnętrzna</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-box">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/about/sec2-icon1.png" alt="ikona" />
                                    <p class="text-main text-main--f20 text-main--blue-tint">3800 m od morza</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-box">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/about/sec2-icon2.png" alt="ikona" />
                                    <p class="text-main text-main--f20 text-main--blue-tint">Działki budowlane z warunkami zabudowy</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-box">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/about/sec2-icon3.png" alt="ikona" />
                                    <p class="text-main text-main--f20 text-main--blue-tint">Lokalizacja bezpośrednio przy lesie</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-box">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/about/sec2-icon4.png" alt="ikona" />
                                    <p class="text-main text-main--f20 text-main--blue-tint">Utwardzona <br> droga wewnętrzna</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="sec2-comfort__slider-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3-two-text">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="sec3-two-text__box1">
                        <?php
                        $left_photo_sec3_about_karwia = get_field('left_photo_sec3_about_karwia');
                        if ($left_photo_sec3_about_karwia) : ?>
                            <div class="sec3-two-text__box1__photo">
                                <div class="photo-box1">
                                    <img src="<?php echo esc_url($left_photo_sec3_about_karwia['url']); ?>" alt="<?php echo esc_attr($left_photo_sec3_about_karwia['alt']); ?>" />
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="sec3-two-text__box1__content">
                            <?php if ($left_title_sec3_about_karwia = get_field('left_title_sec3_about_karwia')) : ?>
                                <div class="content-title">
                                    <h3 class="f-h3"><?php echo $left_title_sec3_about_karwia; ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if ($left_text_sec3_about_karwia = get_field('left_text_sec3_about_karwia')) : ?>
                                <div class="content-text">
                                    <p class="text-main">
                                        <?php echo $left_text_sec3_about_karwia; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php
                            $link = get_field('left_button_sec3_about_karwia');
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
                    <div class="sec3-two-text__box2">
                        <?php
                        $right_photo_sec3_about_karwia = get_field('right_photo_sec3_about_karwia');
                        if ($right_photo_sec3_about_karwia) : ?>
                            <div class="sec3-two-text__box2__photo">
                                <div class="photo-box2">
                                    <img src="<?php echo esc_url($right_photo_sec3_about_karwia['url']); ?>" alt="<?php echo esc_attr($right_photo_sec3_about_karwia['alt']); ?>" />
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="sec3-two-text__box2__content">
                            <?php if ($right_title_sec3_about_karwia = get_field('right_title_sec3_about_karwia')) : ?>
                                <div class="content-title">
                                    <h3 class="f-h3"><?php echo $right_title_sec3_about_karwia; ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if ($right_text_sec3_about_karwia = get_field('right_text_sec3_about_karwia')) : ?>
                                <div class="content-text">
                                    <p class="text-main">
                                        <?php echo $right_text_sec3_about_karwia; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php
                            $link = get_field('right_button_sec3_about_karwia');
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

</div>



<?php
get_template_part('investitions/enklawa-karwia/footer');
?>