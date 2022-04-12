<?php

/**
 * Template Name: Kontakt
 * Template Post Type: osada-karwia
 */

get_template_part('investitions/osada-karwia/header');
?>
<div class="ek-contact">

    <section class="sec1-contact-karwia">
        <div class="container">
            <div class="row">
                <div class="offset-xxl-1 col-xxl-4">
                    <div class="sec1-contact-karwia__form">
                        <div class="title-form">
                            <h5 class="f-h5"><?php the_field('title_sec1_contact_karwia'); ?></h5>
                        </div>
                        <div class="text-form">
                            <?php if ($text_sec1_contact_karwia = get_field('text_sec1_contact_karwia')) : ?>
                                <p class="text-main">
                                    <?php echo $text_sec1_contact_karwia; ?>
                                </p>&nbsp
                            <?php endif; ?>
                            <?php if ($tel_sec1_contact_karwia = get_field('tel_sec1_contact_karwia')) : ?>
                                <a class="text-main" class="text-main text-main--fw500" href="tel:<?php echo $tel_sec1_contact_karwia; ?>"><?php echo $tel_sec1_contact_karwia; ?>.</a>
                            <?php endif; ?>
                        </div>
                        <div class="form-main">
                            <?php echo do_shortcode('[contact-form-7 id="1267" title="Formularz kontaktowy Karwia"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-5">
                    <div class="sec1-contact-karwia__sales-box">
                        <?php if ($title_sec2_contact_karwia = get_field('title_sec2_contact_karwia')) : ?>
                            <div class="sales-title">
                                <h5 class="f-h5"> <?php echo $title_sec2_contact_karwia; ?></h5>
                            </div>
                        <?php endif; ?>
                        <div class="sales-text">
                            <p class="text-main">
                                <?php the_field('text_sec2_contact_karwia'); ?>
                            </p>
                        </div>
                        <?php if (have_rows('box_sales_sec2_contact_karwia')) : ?>
                            <?php while (have_rows('box_sales_sec2_contact_karwia')) :
                                the_row(); ?>
                                <div class="person-sales ek-fadein-karwia">
                                    <?php
                                    $photo_box_sales_sec2_contact_karwia = get_sub_field('photo_box_sales_sec2_contact_karwia');
                                    if ($photo_box_sales_sec2_contact_karwia) : ?>
                                        <div class="person-sales__photo">
                                            <img src="<?php echo esc_url($photo_box_sales_sec2_contact_karwia['url']); ?>" alt="<?php echo esc_attr($photo_box_sales_sec2_contact_karwia['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <div class="person-info">
                                        <?php if ($name_box_sales_sec2_contact_karwia = get_sub_field('name_box_sales_sec2_contact_karwia')) : ?>
                                            <div class="person-info__name">
                                                <h6 class="f-h6 f-h6-fw600">
                                                    <?php echo $name_box_sales_sec2_contact_karwia; ?>
                                                </h6>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($positions_box_sales_sec2_contact_karwia = get_sub_field('positions_box_sales_sec2_contact_karwia')) : ?>
                                            <div class="person-info__position">
                                                <p class="text-main text-main--grey">
                                                    <?php echo $positions_box_sales_sec2_contact_karwia; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($mail_box_sales_sec2_contact_karwia = get_sub_field('mail_box_sales_sec2_contact_karwia')) : ?>
                                            <div class="person-info__email">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/contact/icon-mail-contact.svg" alt=" ikona email" />
                                                <a class="text-main text-main--fw500" href="mailto:<?php echo $mail_box_sales_sec2_contact_karwia; ?>"><?php echo $mail_box_sales_sec2_contact_karwia; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($tel_box_sales_sec2_contact_karwia = get_sub_field('tel_box_sales_sec2_contact_karwia')) : ?>
                                            <div class="person-info__phone">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/contact/icon-tel-contact.svg" alt="ikona telefonu" />
                                                <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box_sales_sec2_contact_karwia; ?>"><?php echo $tel_box_sales_sec2_contact_karwia; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-11">
                    <div class="sec1-contact-karwia__service">
                        <?php if ($title_sec3_contact_karwia = get_field('title_sec3_contact_karwia')) : ?>
                            <div class="service-title">
                                <h5 class="f-h5"><?php echo $title_sec3_contact_karwia; ?></h5>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec3_contact_karwia = get_field('text_sec3_contact_karwia')) : ?>
                            <div class="service-text">
                                <p class="text-main"><?php echo $text_sec3_contact_karwia; ?></p>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="offset-xxl-1 col-xxl-5">
                    <?php if (have_rows('box1_service_sec3_contact_karwia')) : ?>
                        <?php while (have_rows('box1_service_sec3_contact_karwia')) :
                            the_row(); ?>
                            <div class="person-service ek-fadein-karwia">
                                <?php
                                $photo_box1_service_sec3_contact_karwia = get_sub_field('photo_box1_service_sec3_contact_karwia');
                                if ($photo_box1_service_sec3_contact_karwia) : ?>
                                    <div class="person-service__photo">
                                        <img src="<?php echo esc_url($photo_box1_service_sec3_contact_karwia['url']); ?>" alt="<?php echo esc_attr($photo_box1_service_sec3_contact_karwia['alt']); ?>" />
                                    </div>
                                <?php endif; ?>

                                <div class="person-info">
                                    <?php if ($name_box1_service_sec3_contact_karwia = get_sub_field('name_box1_service_sec3_contact_karwia')) : ?>
                                        <div class="person-info__name">
                                            <h6 class="f-h6 f-h6-fw600">
                                                <?php echo $name_box1_service_sec3_contact_karwia; ?>
                                            </h6>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box1_service_sec3_contact_karwia = get_sub_field('positions_box1_service_sec3_contact_karwia')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey">
                                                <?php echo $positions_box1_service_sec3_contact_karwia; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box1_service_sec3_contact_karwia = get_sub_field('mail_box1_service_sec3_contact_karwia')) : ?>
                                        <div class="person-info__email">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/contact/icon-mail-contact.svg" alt=" ikona email" />
                                            <a class="text-main text-main--fw500" href="<?php echo $mail_box1_service_sec3_contact_karwia; ?>"><?php echo $mail_box1_service_sec3_contact_karwia; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box1_service_sec3_contact_karwia = get_sub_field('tel_box1_service_sec3_contact_karwia')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/contact/icon-tel-contact.svg" alt="ikona telefonu" />
                                            <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box1_service_sec3_contact_karwia; ?>"><?php echo $tel_box1_service_sec3_contact_karwia; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xxl-5">
                    <?php if (have_rows('box2_service_sec3_contact_karwia')) : ?>
                        <?php while (have_rows('box2_service_sec3_contact_karwia')) :
                            the_row(); ?>
                            <div class="person-service ek-fadein-karwia">
                                <?php
                                $photo_box2_service_sec3_contact_karwia = get_sub_field('photo_box2_service_sec3_contact_karwia');
                                if ($photo_box2_service_sec3_contact_karwia) : ?>
                                    <div class="person-service__photo">
                                        <img src="<?php echo esc_url($photo_box2_service_sec3_contact_karwia['url']); ?>" alt="<?php echo esc_attr($photo_box2_service_sec3_contact_karwia['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="person-info">
                                    <?php if ($name_box2_service_sec3_contact_karwia = get_sub_field('name_box2_service_sec3_contact_karwia')) : ?>
                                        <div class="person-info__name">
                                            <h6 class="f-h6 f-h6-fw600">
                                                <?php echo $name_box2_service_sec3_contact_karwia; ?>
                                            </h6>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box2_service_sec3_contact_karwia = get_sub_field('positions_box2_service_sec3_contact_karwia')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey">
                                                <?php echo $positions_box2_service_sec3_contact_karwia; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box2_service_sec3_contact_karwia = get_sub_field('mail_box2_service_sec3_contact_karwia')) : ?>

                                        <div class="person-info__email">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/contact/icon-mail-contact.svg" alt=" ikona email" />
                                            <a class="text-main text-main--fw500" href="<?php echo $mail_box2_service_sec3_contact_karwia; ?>"><?php echo $mail_box2_service_sec3_contact_karwia; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box2_service_sec3_contact_karwia = get_sub_field('tel_box2_service_sec3_contact_karwia')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/contact/icon-tel-contact.svg" alt="ikona telefonu" />
                                            <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box2_service_sec3_contact_karwia; ?>"><?php echo $tel_box2_service_sec3_contact_karwia; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <section class="sec2-about-company">
    <div class="ek-right-karwia"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="sec2-about-company__content">
                        <div class="sec2-about-company__content__top-left">
                            <img class="ek-fadein-karwia" src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/home-karwia-company-logo.png" alt="logo saveinvest" />
                            <h3 class="f-h3 ek-fadein-karwia">O firmie</h3>
                        </div>
                        <?php if ($text_left_sec2_contact_karwia = get_field('text_left_sec2_contact_karwia')) : ?>
                            <div class="sec2-about-company__content__bottom-left">
                                <p class="text-main text-main--f20 ek-fadein-karwia"><?php echo $text_left_sec2_contact_karwia; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sec2-about-company__content">
                        <div class="sec2-about-company__content__top-right ek-fadein-karwia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/1000-about-karwia.svg" alt="logo 1000 zadowolonych klientów" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/20-about-karwia.svg" alt="logo 20 lat doświadczenia" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/100-about-karwia.svg" alt="100% sprawdzonych gtuntów" />
                        </div>
                        <?php if ($text_right_sec2_contact_karwia = get_field('text_right_sec2_contact_karwia')) : ?>
                            <div class="sec2-about-company__content__bottom-right">
                                <p class="text-main ek-fadein-karwia"><?php echo $text_right_sec2_contact_karwia; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3-contact-number">
    <div class="left-rotate-item-1"></div> 
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10">
                    <div class="sec3-contact-number__box">
                        <div class="box-row" id="counter">
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data1_sec3_contact_karwia = get_field('number_data1_sec3_contact_karwia')) : ?>
                                        <h1 class="f-h1 f-h1--sand-medium count percent" data-count="<?php echo $number_data1_sec3_contact_karwia; ?>">
                                            0
                                        </h1>
                                    <?php endif; ?>
                                    <?php if ($value_data1_sec3_contact_karwia = get_field('value_data1_sec3_contact_karwia')) : ?>
                                        <h4 class="f-h4 f-h4--sand-medium "><?php echo $value_data1_sec3_contact_karwia; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data1_sec3_contact_karwia = get_field('text_data1_sec3_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400">
                                        <?php echo $text_data1_sec3_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data2_sec3_contact_karwia = get_field('number_data2_sec3_contact_karwia')) : ?>
                                        <h1 class="f-h1 f-h1--sand-medium count percent" data-count="<?php echo $number_data2_sec3_contact_karwia; ?>">
                                            0
                                        </h1>
                                    <?php endif; ?>
                                    <?php if ($value_data2_sec3_contact_karwia = get_field('value_data2_sec3_contact_karwia')) : ?>
                                        <h4 class="f-h4 f-h4--sand-medium "> <?php echo $value_data2_sec3_contact_karwia; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data2_sec3_contact_karwia = get_field('text_data2_sec3_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400">
                                        <?php echo $text_data2_sec3_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data3_sec3_contact_karwia = get_field('number_data3_sec3_contact_karwia')) : ?>
                                        <h1 class="f-h1 f-h1--sand-medium count percent" data-count="<?php echo $number_data3_sec3_contact_karwia; ?>">
                                            0
                                        </h1>
                                    <?php endif; ?>
                                    <?php if ($value_data3_sec3_contact_karwia = get_field('value_data3_sec3_contact_karwia')) : ?>
                                        <h4 class="f-h4 f-h4--sand-medium">
                                            <?php echo $value_data3_sec3_contact_karwia; ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data3_sec3_contact_karwia = get_field('text_data3_sec3_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400">
                                        <?php echo $text_data3_sec3_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-row" id="counter">
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data4_sec3_contact_karwia = get_field('number_data4_sec3_contact_karwia')) : ?>
                                        <h1 class="f-h1 f-h1--sand-medium count percent" data-count="<?php echo $number_data4_sec3_contact_karwia; ?>">
                                            0
                                        </h1>
                                    <?php endif; ?>
                                    <?php if ($value_data4_sec3_contact_karwia = get_field('value_data4_sec3_contact_karwia')) : ?>
                                        <h4 class="f-h4 f-h4--sand-medium">
                                            <?php echo $value_data4_sec3_contact_karwia; ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data4_sec3_contact_karwia = get_field('text_data4_sec3_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400">
                                        <?php echo $text_data4_sec3_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data5_sec3_contact_karwia = get_field('number_data5_sec3_contact_karwia')) : ?>
                                        <h1 class="f-h1 f-h1--sand-medium count percent" data-count="<?php echo $number_data5_sec3_contact_karwia; ?>">
                                            0
                                        </h1>
                                    <?php endif; ?>
                                    <?php if ($value_data5_sec3_contact_karwia = get_field('value_data5_sec3_contact_karwia')) : ?>
                                        <h4 class="f-h4 f-h4--sand-medium"><?php echo $value_data5_sec3_contact_karwia; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data5_sec3_contact_karwia = get_field('text_data5_sec3_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400">
                                        <?php echo $text_data5_sec3_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data6_sec3_contact_karwia = get_field('number_data6_sec3_contact_karwia')) : ?>
                                        <h1 class="f-h1 f-h1--sand-medium count percent" data-count="<?php echo $number_data6_sec3_contact_karwia; ?>">
                                            0
                                        </h1>
                                    <?php endif; ?>
                                    <?php if ($value_data6_sec3_contact_karwia = get_field('value_data6_sec3_contact_karwia')) : ?>
                                        <h4 class="f-h4 f-h4--sand-medium"><?php echo $value_data6_sec3_contact_karwia; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data6_sec3_contact_karwia = get_field('text_data6_sec3_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400">
                                        <?php echo $text_data6_sec3_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec4-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec4-testimonial__content ek-left-karwia">
                        <div class="sec4-testimonial__content__box">
                            <div class="f-testimonial">Opinie</div>
                            <div class="f-testimonial f-testimonial--f112">klientów</div>
                        </div>
                        <div class="sec4-testimonial__content__entry swiper">
                            <div class="swiper-wrapper">
                            <?php if (have_rows('opinion_sec5_hp_karwia',1220)) : ?>
                                    <?php while (have_rows('opinion_sec5_hp_karwia',1220)) :
                                        the_row(); ?>
                                        <div class="swiper-slide">

                                            <?php if ($text_opinion_sec5_contact_karwia = get_sub_field('text_opinion_sec5_hp_karwia')) : ?>
                                                <div class="testimonial-text">
                                                    <p class="text-main"><?php echo $text_opinion_sec5_contact_karwia; ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($name_opinion_sec5_contact_karwia = get_sub_field('name_opinion_sec5_hp_karwia')) : ?>
                                                <div class="testimonial-name">
                                                    <p class="text-main text-main--fw700"><?php echo $name_opinion_sec5_contact_karwia; ?></p>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="sec4-testimonial__content__nav">
                            <div class="swiper-pagination swiper-pagination-height"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec5-location-karwia">
        <div class="container">
            <div class="row">
                <div class="col-xxxl-6 col-xl-6">
                    <div class="sec5-location-karwia__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5123.034396244537!2d19.925893201171686!3d50.057874985922346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716585e08e6c88b%3A0x4b0b9c983ed0d5a2!2sSaveinvest%20Sp.%20z%20o.%20o.!5e0!3m2!1spl!2spl!4v1645539936854!5m2!1spl!2spl" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5">
                    <div class="sec5-location-karwia__content">
                        <div class="locat-logo">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/contact/logo-location.svg" alt="logo" />
                        </div>
                        <div class="locat-info">
                            <div class="locat-info__data-firm">
                                <?php if ($name_firm_sec5_contact_karwia = get_field('name_firm_sec5_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw600 text-main--f14">
                                        <?php echo $name_firm_sec5_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($adres_firm_sec5_contact_karwia = get_field('adres_firm_sec5_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $adres_firm_sec5_contact_karwia; ?>
                                        <?php if ($tel_firm_sec5_contact_karwia = get_field('tel_firm_sec5_contact_karwia')) : ?>
                                            <a class="text-main text-main--fw400 text-main--f14" href="tel:	<?php echo $tel_firm_sec5_contact_karwia; ?>">
                                            <br>tel.: <?php echo $tel_firm_sec5_contact_karwia; ?></a>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($data_firm_sec5_contact_karwia = get_field('data_firm_sec5_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $data_firm_sec5_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($nip_data_firm_sec5_contact_karwia = get_field('nip_data_firm_sec5_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $nip_data_firm_sec5_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="locat-info__data-person">
                                <?php if ($name_person_sec5_contact_karwia = get_field('name_person_sec5_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw600 text-main--f14">
                                        <?php echo $name_person_sec5_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($adres_person_sec5_contact_karwia = get_field('adres_person_sec5_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $adres_person_sec5_contact_karwia; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($bank_sec5_contact_karwia = get_field('bank_sec5_contact_karwia')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $bank_sec5_contact_karwia; ?>
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

<?php
get_template_part('investitions/osada-karwia/footer');
?>