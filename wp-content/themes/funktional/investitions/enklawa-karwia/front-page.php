<?php

/**
 * Template Name: Strona główna
 * Template Post Type: enklawa-karwia
 */

get_template_part('investitions/enklawa-karwia/header');
?>
<div class="ek-frontpage">
    
    <section class="header">
        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/home-page/photo-header.jpg" alt="ikona" />
        <div class="rotate-item-1"></div>
    </section>

    <section class="sec1-video">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec1-video__movie">
                        <?php if ($move_sec1_hp_karwia = get_field('move_sec1_hp_karwia')) : ?>
                            <a class="reveal-karwia" data-fancybox="gallery" href="<?php echo $move_sec1_hp_karwia; ?>">
                                <?php
                                $photo_move_sec1_hp_karwia = get_field('photo_move_sec1_hp_karwia');
                                if ($photo_move_sec1_hp_karwia) : ?>
                                    <img src="<?php echo esc_url($photo_move_sec1_hp_karwia['url']); ?>" alt="<?php echo esc_attr($photo_move_sec1_hp_karwia['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5">
                    <div class="sec1-video__content">
                        <?php if ($title_sec1_hp_karwia = get_field('title_sec1_hp_karwia')) : ?>
                            <div class="sec1-video__content__title">
                                <h3 class="f-h3 ek-fadein-karwia">
                                    <?php echo ($title_sec1_hp_karwia); ?>
                                </h3>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec1_hp_karwia = get_field('text_sec1_hp_karwia')) : ?>
                            <div class="sec1-video__content__text ">
                                <p class="text-main ek-fadein-karwia">
                                    <?php echo $text_sec1_hp_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec2-info">
        <div class="sec2-info__top">
            <div class="container">
            <div class="bottom-item-move"></div>
                <div class="row">
                    <div class="offset-xxl-1 col-xxl-11 col-xl-12">
                        <div class="sec2-info__top__content">
                            <div class="content-icon">
                                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/home-page/icon1.svg" alt="ikona" />
                            </div>
                            <div class="content-info">
                                <?php if ($text_sec2_hp_karwia = get_field('text_sec2_hp_karwia')) : ?>
                                    <div class="content-info__test ">
                                        <p class="f-special ek-fadein-karwia">
                                            <?php echo $text_sec2_hp_karwia; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($name_sec2_hp_karwia = get_field('name_sec2_hp_karwia')) : ?>
                                    <div class="content-info__name ">
                                        <h5 class="f-h5 f-h5--white ek-fadein-karwia">
                                            <?php echo ($name_sec2_hp_karwia); ?>
                                        </h5>
                                    </div>
                                <?php endif; ?>

                                <?php if ($positon_sec2_hp_karwia = get_field('positon_sec2_hp_karwia')) : ?>
                                    <div class="content-info__position ">
                                        <h6 class="f-h6 f-h6--white f-h6--f20 f-h6--white f-h6--ls2 ek-fadein-karwia">
                                            <?php echo ($positon_sec2_hp_karwia); ?>
                                        </h6>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php
                            $photo_person_sec2_hp_karwia = get_field('photo_person_sec2_hp_karwia');
                            if ($photo_person_sec2_hp_karwia) : ?>
                                <div class="content-photo ">
                                    <img src="<?php echo esc_url($photo_person_sec2_hp_karwia['url']); ?>" alt="<?php echo esc_attr($photo_person_sec2_hp_karwia['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec2-info__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <?php if ($title_icon_sec2_hp_karwia = get_field('title_icon_sec2_hp_karwia')) : ?>
                            <div class="sec2-info__bottom__title ">
                                <h5 class="f-h5 f-h5--sand-dark ek-fadein-karwia">
                                    <?php echo $title_icon_sec2_hp_karwia; ?>
                                </h5>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-12">
                        <div class="sec2-info__bottom__content">
                            <?php if (have_rows('row_icon_sec2_hp_karwia')) : ?>
                                <?php while (have_rows('row_icon_sec2_hp_karwia')) :
                                    the_row(); ?>
                                    <div class="content-boxs ">
                                        <?php if (have_rows('box_row_icon_sec2_hp_karwia')) : ?>
                                            <?php while (have_rows('box_row_icon_sec2_hp_karwia')) :
                                                the_row(); ?>
                                                <div class="content-box">
                                                    <?php
                                                    $icon_box_row_icon_sec2_hp_karwia = get_sub_field('icon_box_row_icon_sec2_hp_karwia');
                                                    if ($icon_box_row_icon_sec2_hp_karwia) : ?>
                                                        <img src="<?php echo esc_url($icon_box_row_icon_sec2_hp_karwia['url']); ?>" alt="<?php echo esc_attr($icon_box_row_icon_sec2_hp_karwia['alt']); ?>" />
                                                    <?php endif; ?>
                                                    <?php if ($text_box_row_icon_sec2_hp_karwia = get_sub_field('text_box_row_icon_sec2_hp_karwia')) : ?>
                                                        <p class="text-main text-main--f20 text-main--sand-dark ek-fadein-karwia">
                                                            <?php echo $text_box_row_icon_sec2_hp_karwia; ?>
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
        </div>
    </section>

    <section class="sec3-prestige">
        <div class="container">
            <!-- <div class="rotate-item-5"></div> -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="sec3-prestige__box1">
                        <?php
                        $left_photo_sec3_hp_karwia = get_field('left_photo_sec3_hp_karwia');
                        if ($left_photo_sec3_hp_karwia) : ?>
                            <div class="sec3-prestige__box1__photo">
                                <div class="photo-box1">
                                    <img src="<?php echo esc_url($left_photo_sec3_hp_karwia['url']); ?>" alt="<?php echo esc_attr($left_photo_sec3_hp_karwia['alt']); ?>" />
                                    <div class="bottom-item-1"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="sec3-prestige__box1__content">
                            <?php if ($left_title_sec3_hp_karwia = get_field('left_title_sec3_hp_karwia')) : ?>
                                <div class="content-title">
                                    <h3 class="f-h3 ek-fadein-karwia"><?php echo $left_title_sec3_hp_karwia; ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if ($left_text_sec3_hp_karwia = get_field('left_text_sec3_hp_karwia')) : ?>
                                <div class="content-text">
                                    <p class="text-main ek-fadein-karwia">
                                        <?php echo $left_text_sec3_hp_karwia; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php
                            $link = get_field('left_button_sec3_hp_karwia');
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
                    <div class="sec3-prestige__box2">
                        <?php
                        $right_photo_sec3_hp_karwia_kopia = get_field('right_photo_sec3_hp_karwia_kopia');
                        if ($right_photo_sec3_hp_karwia_kopia) : ?>
                            <div class="sec3-prestige__box2__photo">
                                <div class="photo-box2">
                                    <img src="<?php echo esc_url($right_photo_sec3_hp_karwia_kopia['url']); ?>" alt="<?php echo esc_attr($right_photo_sec3_hp_karwia_kopia['alt']); ?>" />
                                    <div class="rotate-item-2"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="sec3-prestige__box2__content">
                            <?php if ($right_title_sec3_hp_karwia = get_field('right_title_sec3_hp_karwia')) : ?>
                                <div class="content-title">
                                    <h3 class="f-h3 ek-fadein-karwia"><?php echo $right_title_sec3_hp_karwia; ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if ($right_text_sec3_hp_karwia = get_field('right_text_sec3_hp_karwia')) : ?>
                                <div class="content-text">
                                    <p class="text-main ek-fadein-karwia">
                                        <?php echo $right_text_sec3_hp_karwia; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php
                            $link = get_field('right_button_sec3_hp_karwia');
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

    <section class="sec4-links">
        <?php if (have_rows('box_sec4_hp_karwia')) : ?>
            <?php while (have_rows('box_sec4_hp_karwia')) :
                the_row(); ?>
                <?php if ($link_box_sec4_hp_karwia = get_sub_field('link_box_sec4_hp_karwia')) : ?>
                    <a href="<?php echo $link_box_sec4_hp_karwia; ?>" class="sec4-links__box">
                        <?php if ($title_box_sec4_hp_karwia = get_sub_field('title_box_sec4_hp_karwia')) : ?>
                            <div class="sec4-links__box__title">
                                <h2 class="f-h2 f-h2--white ">
                                    <?php echo  $title_box_sec4_hp_karwia; ?>
                                </h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_box_sec4_hp_karwia = get_sub_field('text_box_sec4_hp_karwia')) : ?>
                            <div class="sec4-links__box__text">
                                <p class="text-main text-main--white text-main--fw600">
                                    <?php echo $text_box_sec4_hp_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_btn_box_sec4_hp_karwia = get_sub_field('text_btn_box_sec4_hp_karwia')) : ?>
                            <div class="btn"><?php echo $text_btn_box_sec4_hp_karwia; ?></div>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="sec5-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec5-testimonial__content ek-left-karwia">
                        <div class="sec5-testimonial__content__box">
                            <div class="f-testimonial">Opinie</div>
                            <div class="f-testimonial f-testimonial--f112">klientów</div>
                        </div>
                        <div class="sec5-testimonial__content__entry swiper">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('opinion_sec5_hp_karwia')) : ?>
                                    <?php while (have_rows('opinion_sec5_hp_karwia')) :
                                        the_row(); ?>
                                        <div class="swiper-slide">

                                            <?php if ($text_opinion_sec5_hp_karwia = get_sub_field('text_opinion_sec5_hp_karwia')) : ?>
                                                <div class="testimonial-text">
                                                    <p class="text-main"><?php echo $text_opinion_sec5_hp_karwia; ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($name_opinion_sec5_hp_karwia = get_sub_field('name_opinion_sec5_hp_karwia')) : ?>
                                                <div class="testimonial-name">
                                                    <p class="text-main text-main--fw700"><?php echo $name_opinion_sec5_hp_karwia; ?></p>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="sec5-testimonial__content__nav">
                            <div class="swiper-pagination swiper-pagination-height"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec6-about-saveinwest">
        <div class="container">
            <div class="row row-background">
            <div class="bottom-item-move-2"></div>
                <div class="col-xl-6">
                    <div class="sec6-about-saveinwest__content">
                        <div class="sec6-about-saveinwest__content__top-left">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/home-karwia-company-logo.png" alt="logo saveinvest" />
                            <h3 class="f-h3 ek-fadein-karwia">O firmie</h3>
                        </div>
                        <?php if ($text_left_sec6_hp_karwia = get_field('text_left_sec6_hp_karwia')) : ?>
                            <div class="sec6-about-saveinwest__content__bottom">
                                <p class="text-main text-main--f20 ek-fadein-karwia"><?php echo $text_left_sec6_hp_karwia; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sec6-about-saveinwest__content">
                        <div class="sec6-about-saveinwest__content__top-right ek-fadein-karwia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/1000-about-karwia.svg" alt="logo 1000 zadowolonych klientów" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/20-about-karwia.svg" alt="logo 20 lat doświadczenia" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/100-about-karwia.svg" alt="100% sprawdzonych gtuntów" />
                        </div>
                        <?php if ($text_right_sec6_hp_karwia = get_field('text_right_sec6_hp_karwia')) : ?>
                            <div class="sec6-about-saveinwest__content__bottom">
                                <p class="text-main ek-fadein-karwia"><?php echo $text_right_sec6_hp_karwia; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
get_template_part('investitions/enklawa-karwia/footer');
?>