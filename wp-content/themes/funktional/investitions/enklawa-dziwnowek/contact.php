<?php

/**
 * Template Name: Kontakt enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>
<!-- <div class="sg-contact">

    <section class="sec1-contact-sg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6">
                    <div class="sec1-contact-sg__form">
                        <div class="sec1-contact-sg__form__title">
                            <h2 class="f-h2 f-h2--gold-medium f-h2--fw500"><?php the_field('title_sec1_contact_sg'); ?></h2>
                        </div>
                        <div class="sec1-contact-sg__form__text">
                            <?php if ($text_sec1_contact_sg = get_field('text_sec1_contact_sg')) : ?>
                                <p class="text-main text-main--fw400 text-main--gold-medium">
                                    <?php echo $text_sec1_contact_sg; ?>
                                    <?php if ($tel_sec1_contact_sg = get_field('tel_sec1_contact_sg')) : ?>
                                        <a class="text-main text-main--fw400 text-main--gold-medium" href="tel:<?php echo $tel_sec1_contact_sg; ?>"><?php echo $tel_sec1_contact_sg; ?>.</a>
                                    <?php endif; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="form-main">
                            <?php echo do_shortcode('[contact-form-7 id="1633" title="Formularz kontaktowy Sea-Golf"]'); ?>
                        </div>
                        <div class="sec1-contact-sg__form__border"></div>
                    </div>
                </div>
                <div class="col-xxl-6">
                    <div class="sec1-contact-sg__sales-box">
                        <?php if ($title_sec2_contact_sg = get_field('title_sec2_contact_sg')) : ?>
                            <div class="sec1-contact-sg__sales-box__title">
                                <h2 class="f-h2 f-h2--black-dark f-h2--fw500"> <?php echo $title_sec2_contact_sg; ?></h2>
                            </div>
                        <?php endif; ?>
                        <div class="sec1-contact-sg__sales-box__text">
                            <p class="text-main text-main--black-dark text-main--fw400">
                                <?php the_field('text_sec2_contact_sg'); ?>
                            </p>
                        </div>
                        <?php if (have_rows('box_sales_sec2_contact_sg')) : ?>
                            <?php while (have_rows('box_sales_sec2_contact_sg')) :
                                the_row(); ?>
                                <div class="person-sales ek-fadein-sg">
                                    <?php
                                    $photo_box_sales_sec2_contact_sg = get_sub_field('photo_box_sales_sec2_contact_sg');
                                    if ($photo_box_sales_sec2_contact_sg) : ?>
                                        <div class="person-sales__photo">
                                            <img src="<?php echo esc_url($photo_box_sales_sec2_contact_sg['url']); ?>" alt="<?php echo esc_attr($photo_box_sales_sec2_contact_sg['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <div class="person-info">
                                        <?php if ($name_box_sales_sec2_contact_sg = get_sub_field('name_box_sales_sec2_contact_sg')) : ?>
                                            <div class="person-info__name">
                                                <h5 class="f-h5 f-h5--black-dark">
                                                    <?php echo $name_box_sales_sec2_contact_sg; ?>
                                                </h5>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($positions_box_sales_sec2_contact_sg = get_sub_field('positions_box_sales_sec2_contact_sg')) : ?>
                                            <div class="person-info__position">
                                                <p class="text-main text-main--grey text-main--fw400">
                                                    <?php echo $positions_box_sales_sec2_contact_sg; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($mail_box_sales_sec2_contact_sg = get_sub_field('mail_box_sales_sec2_contact_sg')) : ?>
                                            <div class="person-info__email">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/mail-icon.svg" alt=" ikona email" />
                                                <a class="text-main text-main--black-dark text-main--fw400" href="mailto:<?php echo $mail_box_sales_sec2_contact_sg; ?>"><?php echo $mail_box_sales_sec2_contact_sg; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($tel_box_sales_sec2_contact_sg = get_sub_field('tel_box_sales_sec2_contact_sg')) : ?>
                                            <div class="person-info__phone">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/phone-icon.svg" alt="ikona telefonu" />
                                                <a class="text-main text-main--black-dark text-main--fw400" href="tel:<?php echo $tel_box_sales_sec2_contact_sg; ?>"><?php echo $tel_box_sales_sec2_contact_sg; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-11">
                    <div class="sec1-contact-sg__service">
                        <?php if ($title_sec3_contact_sg = get_field('title_sec3_contact_sg')) : ?>
                            <div class="sec1-contact-sg__service__title">
                                <h2 class="f-h2 f-h2--black-dark f-h2--fw500"><?php echo $title_sec3_contact_sg; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec3_contact_sg = get_field('text_sec3_contact_sg')) : ?>
                            <div class="sec1-contact-sg__service__text">
                                <p class="text-main text-main--black-dark text-main--fw400"><?php echo $text_sec3_contact_sg; ?></p>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-5">
                    <?php if (have_rows('box1_service_sec3_contact_sg')) : ?>
                        <?php while (have_rows('box1_service_sec3_contact_sg')) :
                            the_row(); ?>
                            <div class="person-service ek-fadein-sg">
                                <?php
                                $photo_box1_service_sec3_contact_sg = get_sub_field('photo_box1_service_sec3_contact_sg');
                                if ($photo_box1_service_sec3_contact_sg) : ?>
                                    <div class="person-service__photo">
                                        <img src="<?php echo esc_url($photo_box1_service_sec3_contact_sg['url']); ?>" alt="<?php echo esc_attr($photo_box1_service_sec3_contact_sg['alt']); ?>" />
                                    </div>
                                <?php endif; ?>

                                <div class="person-info">
                                    <?php if ($name_box1_service_sec3_contact_sg = get_sub_field('name_box1_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__name">
                                            <h5 class="f-h5 f-h5--black-dark">
                                                <?php echo $name_box1_service_sec3_contact_sg; ?>
                                            </h5>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box1_service_sec3_contact_sg = get_sub_field('positions_box1_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey text-main--fw400">
                                                <?php echo $positions_box1_service_sec3_contact_sg; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box1_service_sec3_contact_sg = get_sub_field('mail_box1_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__email">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/mail-icon.svg" alt=" ikona email" />
                                            <a class="text-main text-main--black-dark text-main--fw400" href="mailto:<?php echo $mail_box1_service_sec3_contact_sg; ?>"><?php echo $mail_box1_service_sec3_contact_sg; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box1_service_sec3_contact_sg = get_sub_field('tel_box1_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/phone-icon.svg" alt="ikona telefonu" />
                                            <a class="text-main text-main--black-dark text-main--fw400" href="tel:<?php echo $tel_box1_service_sec3_contact_sg; ?>"><?php echo $tel_box1_service_sec3_contact_sg; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xxl-5">
                    <?php if (have_rows('box2_service_sec3_contact_sg')) : ?>
                        <?php while (have_rows('box2_service_sec3_contact_sg')) :
                            the_row(); ?>
                            <div class="person-service ek-fadein-sg">
                                <?php
                                $photo_box2_service_sec3_contact_sg = get_sub_field('photo_box2_service_sec3_contact_sg');
                                if ($photo_box2_service_sec3_contact_sg) : ?>
                                    <div class="person-service__photo">
                                        <img src="<?php echo esc_url($photo_box2_service_sec3_contact_sg['url']); ?>" alt="<?php echo esc_attr($photo_box2_service_sec3_contact_sg['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="person-info">
                                    <?php if ($name_box2_service_sec3_contact_sg = get_sub_field('name_box2_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__name">
                                            <h5 class="f-h5 f-h5--black-dark">
                                                <?php echo $name_box2_service_sec3_contact_sg; ?>
                                            </h5>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box2_service_sec3_contact_sg = get_sub_field('positions_box2_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey text-main--fw400">
                                                <?php echo $positions_box2_service_sec3_contact_sg; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box2_service_sec3_contact_sg = get_sub_field('mail_box2_service_sec3_contact_sg')) : ?>

                                        <div class="person-info__email">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/mail-icon.svg" alt=" ikona email" />
                                            <a class="text-main text-main--black-dark text-main--fw400" href="mailto:<?php echo $mail_box2_service_sec3_contact_sg; ?>"><?php echo $mail_box2_service_sec3_contact_sg; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box2_service_sec3_contact_sg = get_sub_field('tel_box2_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/phone-icon.svg" alt="ikona telefonu" />
                                            <a class="text-main text-main--black-dark text-main--fw400" href="tel:<?php echo $tel_box2_service_sec3_contact_sg; ?>"><?php echo $tel_box2_service_sec3_contact_sg; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="sec1-contact-sg__logo">
            <img class="sec9-testimonial__company__icon" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/logo_home-page.png" alt="logo" />
        </div>
    </section>
    <section class="sec2-info">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="sec2-info__about">
                        <?php if ($title_about_sec4_contact_seagolf = get_field('title_about_sec4_contact_seagolf')) : ?>
                            <h2 class="f-h2 f-h2--f80 f-h2--black-dark"> <?php echo $title_about_sec4_contact_seagolf; ?></h2>
                        <?php endif; ?>
                        <?php if ($text_about_sec4_contact_seagolf = get_field('text_about_sec4_contact_seagolf')) : ?>
                            <div class="text-main"> <?php echo $text_about_sec4_contact_seagolf; ?>
                            </div>
                        <?php endif; ?>
                        <div class="sec2-info__about__icons">
                            <?php if (have_rows('icons_about_sec4_contact_seagolf')) : ?>
                                <?php while (have_rows('icons_about_sec4_contact_seagolf')) :
                                    the_row(); ?>
                                    <?php
                                    $img_icons_about_sec4_contact_seagolf = get_sub_field('img_icons_about_sec4_contact_seagolf');
                                    if ($img_icons_about_sec4_contact_seagolf) : ?>
                                        <img src="<?php echo esc_url($img_icons_about_sec4_contact_seagolf['url']); ?>" alt="<?php echo esc_attr($img_icons_about_sec4_contact_seagolf['alt']); ?>" />
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sec2-info__numbers" id="counter">
                        <div class="sec2-info__numbers__box">
                            <div class="sec2-info__numbers__box__left">
                                <div class="box-row">
                                    <div class="box-row__number">
                                        <?php if ($number1_sec6_contact_seagolf = get_field('number1_sec6_contact_seagolf')) : ?>
                                            <h1 class="f-h1 f-h1--gold-medium count percent">
                                                <?php echo $number1_sec6_contact_seagolf; ?>
                                            </h1>&nbsp;
                                        <?php endif; ?>
                                        <?php if ($term1_sec6_contact_seagolf = get_field('term1_sec6_contact_seagolf')) : ?>
                                            <h4 class="f-h4 f-h4--gold-medium  f-h4--f42"><?php echo $term1_sec6_contact_seagolf; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($text1_sec6_contact_seagolf = get_field('text1_sec6_contact_seagolf')) : ?>
                                        <p class="text-main text-main--fw400 text-main--white"><?php echo $text1_sec6_contact_seagolf; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="sec2-info__numbers__box__right">
                                <div class="box-row">
                                    <div class="box-row__number">
                                        <?php if ($number2_sec6_contact_seagolf = get_field('number2_sec6_contact_seagolf')) : ?>
                                            <h1 class="f-h1 f-h1--gold-medium count percent">
                                                <?php echo $number2_sec6_contact_seagolf; ?>
                                            </h1>&nbsp;
                                        <?php endif; ?>
                                        <?php if ($term2_sec6_contact_seagolf = get_field('term2_sec6_contact_seagolf')) : ?>
                                            <h4 class="f-h4 f-h4--gold-medium  f-h4--f42"><?php echo $term2_sec6_contact_seagolf; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($text2_sec6_contact_seagolf = get_field('text2_sec6_contact_seagolf')) : ?>
                                        <p class="text-main text-main--fw400 text-main--white">
                                            <?php echo $text2_sec6_contact_seagolf; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="sec2-info__numbers__box">
                            <div class="sec2-info__numbers__box__left">
                                <div class="box-row">
                                    <div class="box-row__number">
                                        <?php if ($number3_sec6_contact_seagolf = get_field('number3_sec6_contact_seagolf')) : ?>
                                            <h1 class="f-h1 f-h1--gold-medium count percent">
                                                <?php echo $number3_sec6_contact_seagolf; ?>
                                            </h1>&nbsp;
                                        <?php endif; ?>
                                        <?php if ($term3_sec6_contact_seagolf = get_field('term3_sec6_contact_seagolf')) : ?>
                                            <h4 class="f-h4 f-h4--gold-medium  f-h4--f42"><?php echo $term3_sec6_contact_seagolf; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($text3_sec6_contact_seagolf = get_field('text3_sec6_contact_seagolf')) : ?>
                                        <p class="text-main text-main--fw400 text-main--white">
                                            <?php echo $text3_sec6_contact_seagolf; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="sec2-info__numbers__box__right">
                                <div class="box-row">
                                    <div class="box-row__number">
                                        <?php if ($number4_sec6_contact_seagolf = get_field('number4_sec6_contact_seagolf')) : ?>
                                            <h1 class="f-h1 f-h1--gold-medium count percent">
                                                <?php echo $number4_sec6_contact_seagolf; ?>
                                            </h1>&nbsp;
                                        <?php endif; ?>
                                        <?php if ($term4_sec6_contact_seagolf = get_field('term4_sec6_contact_seagolf')) : ?>
                                            <h4 class="f-h4 f-h4--gold-medium  f-h4--f42"><?php echo $term4_sec6_contact_seagolf; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($text4_sec6_contact_seagolf = get_field('text4_sec6_contact_seagolf')) : ?>
                                        <p class="text-main text-main--fw400 text-main--white">
                                            <?php echo $text4_sec6_contact_seagolf; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="sec2-info__numbers__box">
                            <div class="sec2-info__numbers__box__center">
                                <div class="box-row">
                                    <div class="box-row__number">
                                        <?php if ($number5_sec6_contact_seagolf = get_field('number5_sec6_contact_seagolf')) : ?>
                                            <h1 class="f-h1 f-h1--gold-medium count percent">
                                                <?php echo $number5_sec6_contact_seagolf; ?>
                                            </h1>&nbsp;
                                        <?php endif; ?>
                                        <?php if ($term5_sec6_contact_seagolf = get_field('term5_sec6_contact_seagolf')) : ?>
                                            <h4 class="f-h4 f-h4--gold-medium  f-h4--f42"><?php echo $term5_sec6_contact_seagolf; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($text5_sec6_contact_seagolf = get_field('text5_sec6_contact_seagolf')) : ?>
                                        <p class="text-main text-main--fw400 text-main--white">
                                            <?php echo $text5_sec6_contact_seagolf; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="sec2-info__numbers__box">
                            <div class="sec2-info__numbers__box__center">
                                <div class="box-row">
                                    <div class="box-row__number">
                                        <?php if ($number6_sec6_contact_seagolf = get_field('number6_sec6_contact_seagolf')) : ?>
                                            <h1 class="f-h1 f-h1--gold-medium count percent">
                                                <?php echo $number6_sec6_contact_seagolf; ?>
                                            </h1>&nbsp;
                                        <?php endif; ?>
                                        <?php if ($term6_sec6_contact_seagolf = get_field('term6_sec6_contact_seagolf')) : ?>
                                            <h4 class="f-h4 f-h4--gold-medium  f-h4--f42"><?php echo $term6_sec6_contact_seagolf; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($text6_sec6_contact_seagolf = get_field('text6_sec6_contact_seagolf')) : ?>
                                        <p class="text-main text-main--fw400 text-main--white">
                                            <?php echo $text6_sec6_contact_seagolf; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec3-photo">
    </section>

    <section class="sec4-testimonial">
        <div class="container">
            <div class="row">
                <div class="offset-xxxl-1 col-xl-1">
                    <img class="sec4-testimonial__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/testimonial-icon.svg" alt="ikona" />
                </div>
                <div class="col-xxxl-3 col-xl-4">
                    <div class="sec4-testimonial__box">
                        <h3 class="f-h3 f-h3--black-dark">Opinie</h3>
                        <h4 class="f-h4 f-h4--f80 f-h4--black-dark">klientów</h4>
                        <div class="sec4-testimonial__box__nav">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sec4-testimonial__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('testimonial_sec7_contact_seagolf')) : ?>
                                <?php while (have_rows('testimonial_sec7_contact_seagolf')) :
                                    the_row(); ?>
                                    <div class="swiper-slide">
                                        <?php if ($testimonial_sec7_contact_seagolf_text = get_sub_field('testimonial_sec7_contact_seagolf_text')) : ?>
                                            <div class="swiper-text text-main"><?php echo $testimonial_sec7_contact_seagolf_text; ?></div>
                                        <?php endif; ?>
                                        <?php if ($testimonial_sec7_contact_seagolf_name = get_sub_field('testimonial_sec7_contact_seagolf_name')) : ?>
                                            <div class="swiper-name text-main text-main--fw700"><?php echo $testimonial_sec7_contact_seagolf_name; ?>
                                            </div>
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
    <section class="sec5-location-seagolf">
        <div class="container">
            <div class="row">
                <div class="col-xxxl-6 col-xl-6">
                    <div class="sec5-location-seagolf__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5123.034396244537!2d19.925893201171686!3d50.057874985922346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716585e08e6c88b%3A0x4b0b9c983ed0d5a2!2sSaveinvest%20Sp.%20z%20o.%20o.!5e0!3m2!1spl!2spl!4v1645539936854!5m2!1spl!2spl" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5">
                    <div class="sec5-location-seagolf__content">
                        <div class="locat-logo">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/contact/logo-contact-sec5.png" alt="logo" />
                        </div>
                        <div class="locat-info">
                            <div class="locat-info__data-firm">
                                <?php if ($name_firm_sec5_contact_seagolf = get_field('name_firm_sec5_contact_seagolf')) : ?>
                                    <p class="text-main text-main--fw900 text-main--f14">
                                        <?php echo $name_firm_sec5_contact_seagolf; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($adres_firm_sec5_contact_seagolf = get_field('adres_firm_sec5_contact_seagolf')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $adres_firm_sec5_contact_seagolf; ?>
                                        <?php if ($tel_firm_sec5_contact_seagolf = get_field('tel_firm_sec5_contact_seagolf')) : ?>
                                            <a class="text-main text-main--fw400 text-main--f14" href="tel:	<?php echo $tel_firm_sec5_contact_seagolf; ?>">
                                                <br>tel.: <?php echo $tel_firm_sec5_contact_seagolf; ?></a>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($data_firm_sec5_contact_seagolf = get_field('data_firm_sec5_contact_seagolf')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $data_firm_sec5_contact_seagolf; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($nip_data_firm_sec5_contact_seagolf = get_field('nip_data_firm_sec5_contact_seagolf')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $nip_data_firm_sec5_contact_seagolf; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="locat-info__data-person">
                                <?php if ($name_person_sec5_contact_seagolf = get_field('name_person_sec5_contact_seagolf')) : ?>
                                    <p class="text-main text-main--fw900 text-main--f14">
                                        <?php echo $name_person_sec5_contact_seagolf; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($adres_person_sec5_contact_seagolf = get_field('adres_person_sec5_contact_seagolf')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $adres_person_sec5_contact_seagolf; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($bank_sec5_contact_seagolf = get_field('bank_sec5_contact_seagolf')) : ?>
                                    <p class="text-main text-main--fw400 text-main--f14">
                                        <?php echo $bank_sec5_contact_seagolf; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div> -->
<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>