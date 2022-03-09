<?php

/**
 * Template Name: Kontakt
 * Template Post Type: ostoja-kladno
 */

get_template_part('investitions/ostoja-kladno/header');
?>
<div class="ik-contanct">
    <section class="contact-kladno">
        <div class="container">
            <div class="row">
                <div class="offset-xxl-1 col-xxl-4">
                    <div class="contact-kladno__form">
                        <div class="title-form">
                            <h5 class="f-h5"><?php the_field('title_sec1_contact_kladno'); ?></h5>
                        </div>
                        <div class="text-form">
                            <?php if ($text_sec1_contact_kladno = get_field('text_sec1_contact_kladno')) : ?>
                                <p class="text-main">
                                    <?php echo $text_sec1_contact_kladno; ?>
                                </p>&nbsp
                            <?php endif; ?>
                            <?php if ($tel_sec1_contact_kladno = get_field('tel_sec1_contact_kladno')) : ?>


                                <a class="text-main" class="text-main text-main--fw500" href="tel:<?php echo $tel_sec1_contact_kladno; ?>"><?php echo $tel_sec1_contact_kladno; ?>.</a>
                            <?php endif; ?>
                        </div>
                        <div class="form-main">
                            <?php echo do_shortcode('[contact-form-7 id="370" title="Formularz kontaktowy Kładno"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-5">
                    <div class="contact-kladno__sales-box">
                        <?php if ($title_sec2_contact_kladno = get_field('title_sec2_contact_kladno')) : ?>
                            <div class="sales-title">
                                <h5 class="f-h5"> <?php echo $title_sec2_contact_kladno; ?></h5>
                            </div>
                        <?php endif; ?>
                        <div class="sales-text">
                            <p class="text-main">
                                <?php the_field('text_sec2_contact_kladno'); ?>
                            </p>
                        </div>
                        <?php if (have_rows('box_sales_sec2_contact_kladno')) : ?>
                            <?php while (have_rows('box_sales_sec2_contact_kladno')) :
                                the_row(); ?>
                                <div class="person-sales">
                                    <?php
                                    $photo_box_sales_sec2_contact_kladno = get_sub_field('photo_box_sales_sec2_contact_kladno');
                                    if ($photo_box_sales_sec2_contact_kladno) : ?>
                                        <div class="person-sales__photo">
                                            <img src="<?php echo esc_url($photo_box_sales_sec2_contact_kladno['url']); ?>" alt="<?php echo esc_attr($photo_box_sales_sec2_contact_kladno['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <div class="person-info">
                                        <?php if ($name_box_sales_sec2_contact_kladno = get_sub_field('name_box_sales_sec2_contact_kladno')) : ?>
                                            <div class="person-info__name">
                                                <h6 class="f-h6 f-h6-fw600">
                                                    <?php echo $name_box_sales_sec2_contact_kladno; ?>
                                                </h6>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($positions_box_sales_sec2_contact_kladno = get_sub_field('positions_box_sales_sec2_contact_kladno')) : ?>
                                            <div class="person-info__position">
                                                <p class="text-main text-main--grey">
                                                    <?php echo $positions_box_sales_sec2_contact_kladno; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($mail_box_sales_sec2_contact_kladno = get_sub_field('mail_box_sales_sec2_contact_kladno')) : ?>
                                            <div class="person-info__email">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/contact/icon-email.png" alt=" ikona email" />
                                                <a class="text-main text-main--fw500" href="mailto:<?php echo $mail_box_sales_sec2_contact_kladno; ?>"><?php echo $mail_box_sales_sec2_contact_kladno; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($tel_box_sales_sec2_contact_kladno = get_sub_field('tel_box_sales_sec2_contact_kladno')) : ?>
                                            <div class="person-info__phone">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/contact/icon-phone.png" alt="ikona telefonu" />
                                                <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box_sales_sec2_contact_kladno; ?>"><?php echo $tel_box_sales_sec2_contact_kladno; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-11">
                    <div class="contact-kladno__service">
                        <?php if ($title_sec3_contact_kladno = get_field('title_sec3_contact_kladno')) : ?>
                            <div class="service-title">
                                <h5 class="f-h5"><?php echo $title_sec3_contact_kladno; ?></h5>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec3_contact_kladno = get_field('text_sec3_contact_kladno')) : ?>
                            <div class="service-text">
                                <p class="text-main"><?php echo $text_sec3_contact_kladno; ?></p>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="offset-xxl-1 col-xxl-5">
                    <?php if (have_rows('box1_service_sec3_contact_kladno')) : ?>
                        <?php while (have_rows('box1_service_sec3_contact_kladno')) :
                            the_row(); ?>
                            <div class="person-service">
                                <?php
                                $photo_box1_service_sec3_contact_kladno = get_sub_field('photo_box1_service_sec3_contact_kladno');
                                if ($photo_box1_service_sec3_contact_kladno) : ?>
                                    <div class="person-service__photo">
                                        <img src="<?php echo esc_url($photo_box1_service_sec3_contact_kladno['url']); ?>" alt="<?php echo esc_attr($photo_box1_service_sec3_contact_kladno['alt']); ?>" />
                                    </div>
                                <?php endif; ?>

                                <div class="person-info">
                                    <?php if ($name_box1_service_sec3_contact_kladno = get_sub_field('name_box1_service_sec3_contact_kladno')) : ?>
                                        <div class="person-info__name">
                                            <h6 class="f-h6 f-h6-fw600">
                                                <?php echo $name_box1_service_sec3_contact_kladno; ?>
                                            </h6>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box1_service_sec3_contact_kladno = get_sub_field('positions_box1_service_sec3_contact_kladno')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey">
                                                <?php echo $positions_box1_service_sec3_contact_kladno; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box1_service_sec3_contact_kladno = get_sub_field('mail_box1_service_sec3_contact_kladno')) : ?>
                                        <div class="person-info__email">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/contact/icon-email.png" alt=" ikona email" />
                                            <a class="text-main text-main--fw500" href="<?php echo $mail_box1_service_sec3_contact_kladno; ?>"><?php echo $mail_box1_service_sec3_contact_kladno; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box1_service_sec3_contact_kladno = get_sub_field('tel_box1_service_sec3_contact_kladno')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/contact/icon-phone.png" alt="ikona telefonu" />
                                            <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box1_service_sec3_contact_kladno; ?>"><?php echo $tel_box1_service_sec3_contact_kladno; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xxl-5">
                    <?php if (have_rows('box2_service_sec3_contact_kladno')) : ?>
                        <?php while (have_rows('box2_service_sec3_contact_kladno')) :
                            the_row(); ?>
                            <div class="person-service">
                                <?php
                                $photo_box2_service_sec3_contact_kladno = get_sub_field('photo_box2_service_sec3_contact_kladno');
                                if ($photo_box2_service_sec3_contact_kladno) : ?>
                                    <div class="person-service__photo">
                                        <img src="<?php echo esc_url($photo_box2_service_sec3_contact_kladno['url']); ?>" alt="<?php echo esc_attr($photo_box2_service_sec3_contact_kladno['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="person-info">
                                    <?php if ($name_box2_service_sec3_contact_kladno = get_sub_field('name_box2_service_sec3_contact_kladno')) : ?>
                                        <div class="person-info__name">
                                            <h6 class="f-h6 f-h6-fw600">
                                                <?php echo $name_box2_service_sec3_contact_kladno; ?>
                                            </h6>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box2_service_sec3_contact_kladno = get_sub_field('positions_box2_service_sec3_contact_kladno')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey">
                                                <?php echo $positions_box2_service_sec3_contact_kladno; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box2_service_sec3_contact_kladno = get_sub_field('mail_box2_service_sec3_contact_kladno')) : ?>
                                        <?php echo $mail_box2_service_sec3_contact_kladno; ?>
                                        <div class="person-info__email">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/contact/icon-email.png" alt=" ikona email" />
                                            <a class="text-main text-main--fw500" href="<?php echo $mail_box2_service_sec3_contact_kladno; ?>"><?php echo $mail_box2_service_sec3_contact_kladno; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box2_service_sec3_contact_kladno = get_sub_field('tel_box2_service_sec3_contact_kladno')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/contact/icon-phone.png" alt="ikona telefonu" />
                                            <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box2_service_sec3_contact_kladno; ?>"><?php echo $tel_box2_service_sec3_contact_kladno; ?></a>
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

    <section class="about-company-contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-company-contact__logo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/contact/contact-logo.png" alt=" logo saveinvest" />
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-company-contact__content">

                        <?php if ($title_sec4_contact_kladno = get_field('title_sec4_contact_kladno')) : ?>
                            <div class="title-content">
                                <h5 class="f-h5"><?php echo $title_sec4_contact_kladno; ?></h5>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec4_contact_kladno = get_field('text_sec4_contact_kladno')) : ?>
                            <div class="text-content">
                                <p class="text-main">
                                    <?php echo $text_sec4_contact_kladno; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-number">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10">
                    <div class="contact-number__box">
                        <div class="box-row" id="counter">
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data1_sec5_contact_kladno = get_field('number_data1_sec5_contact_kladno')) : ?>
                                        <h4 class="f-special f-special--yellow count percent" data-count="<?php echo $number_data1_sec5_contact_kladno; ?>">
                                            0
                                        </h4>
                                    <?php endif; ?>
                                    <?php if ($value_data1_sec5_contact_kladno = get_field('value_data1_sec5_contact_kladno')) : ?>
                                        <h4 class="f-h4 f-h4--yellow"><?php echo $value_data1_sec5_contact_kladno; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data1_sec5_contact_kladno = get_field('text_data1_sec5_contact_kladno')) : ?>
                                    <p class="text-main text-main--white">
                                        <?php echo $text_data1_sec5_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data2_sec5_contact_kladno = get_field('number_data2_sec5_contact_kladno')) : ?>
                                        <h4 class="f-special f-special--yellow" data-count="<?php echo $number_data2_sec5_contact_kladno; ?>">
                                            0
                                        </h4>
                                    <?php endif; ?>
                                    <?php if ($value_data2_sec5_contact_kladno = get_field('value_data2_sec5_contact_kladno')) : ?>
                                        <h4 class="f-h4 f-h4--yellow"> <?php echo $value_data2_sec5_contact_kladno; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data2_sec5_contact_kladno = get_field('text_data2_sec5_contact_kladno')) : ?>
                                    <p class="text-main text-main--white">
                                        <?php echo $text_data2_sec5_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data3_sec5_contact_kladno = get_field('number_data3_sec5_contact_kladno')) : ?>
                                        <h4 class="f-special f-special--yellow" data-count="<?php echo $number_data3_sec5_contact_kladno; ?>">
                                            0
                                        </h4>
                                    <?php endif; ?>
                                    <?php if ($value_data3_sec5_contact_kladno = get_field('value_data3_sec5_contact_kladno')) : ?>
                                        <h4 class="f-h4 f-h4--yellow">
                                            <?php echo $value_data3_sec5_contact_kladno; ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data3_sec5_contact_kladno = get_field('text_data3_sec5_contact_kladno')) : ?>
                                    <p class="text-main text-main--white">
                                        <?php echo $text_data3_sec5_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-row">
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data4_sec5_contact_kladno = get_field('number_data4_sec5_contact_kladno')) : ?>
                                        <h4 class="f-special f-special--yellow" data-count="<?php echo $number_data4_sec5_contact_kladno; ?>">
                                            0
                                        </h4>
                                    <?php endif; ?>
                                    <?php if ($value_data4_sec5_contact_kladno = get_field('value_data4_sec5_contact_kladno')) : ?>
                                        <h4 class="f-h4 f-h4--yellow">
                                            <?php echo $value_data4_sec5_contact_kladno; ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data4_sec5_contact_kladno = get_field('text_data4_sec5_contact_kladno')) : ?>
                                    <p class="text-main text-main--white">
                                        <?php echo $text_data4_sec5_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data5_sec5_contact_kladno = get_field('number_data5_sec5_contact_kladno')) : ?>
                                        <h4 class="f-special f-special--yellow" data-count="<?php echo $number_data5_sec5_contact_kladno; ?>">
                                            0
                                        </h4>
                                    <?php endif; ?>
                                    <?php if ($value_data5_sec5_contact_kladno = get_field('value_data5_sec5_contact_kladno')) : ?>
                                        <h4 class="f-h4 f-h4--yellow"><?php echo $value_data5_sec5_contact_kladno; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data5_sec5_contact_kladno = get_field('text_data5_sec5_contact_kladno')) : ?>
                                    <p class="text-main text-main--white">
                                        <?php echo $text_data5_sec5_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="box-row__info">
                                <div class="numbers-info">
                                    <?php if ($number_data5_sec5_contact_kladno = get_field('number_data6_sec5_contact_kladno')) : ?>
                                        <h4 class="f-special f-special--yellow" data-count="<?php echo $number_data5_sec5_contact_kladno; ?>">
                                            0
                                        </h4>
                                    <?php endif; ?>
                                    <?php if ($value_data5_sec5_contact_kladno = get_field('value_data6_sec5_contact_kladno')) : ?>
                                        <h4 class="f-h4 f-h4--yellow"><?php echo $value_data5_sec5_contact_kladno; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text_data5_sec5_contact_kladno = get_field('text_data6_sec5_contact_kladno')) : ?>
                                    <p class="text-main text-main--white">
                                        <?php echo $text_data5_sec5_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-kladno">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <?php if ($title_testimonial_sec6_contact_kladno = get_field('title_testimonial_sec6_contact_kladno')) : ?>
                        <div class="testimonial-kladno__title">
                            <h5 class="f-h5 f-h5--white"><?php echo $title_testimonial_sec6_contact_kladno; ?></h5>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-12">
                    <div class="testimonial-kladno__container">
                        <div class="box swiper">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('testimonial_sec6_contact_kladno')) : ?>
                                    <?php while (have_rows('testimonial_sec6_contact_kladno')) :
                                        the_row(); ?>
                                        <div class="swiper-slide">
                                            <div class="testimonial-kladno-box">
                                                <?php if ($text_testimonial_sec6_contact_kladno = get_sub_field('text_testimonial_sec6_contact_kladno')) : ?>
                                                    <div class="testimonial-kladno-box__text">
                                                        <p class="text-main text-main--white"><?php echo $text_testimonial_sec6_contact_kladno; ?>
                                                        </p>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($name_testimonial_sec6_contact_kladno = get_sub_field('name_testimonial_sec6_contact_kladno')) : ?>
                                                    <div class="testimonial-kladno-box__name">
                                                        <p class="text-main text-main--fw700 text-main--white"><?php echo $name_testimonial_sec6_contact_kladno; ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                
                            </div>
                            <div class="triangle"></div>
                        </div>

                    </div>
                    <div class="swiper-contenet-testimonial">
                        <div class="swiper-button-prev"></div>

                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-contenet-pagination">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="location-klando">
        <div class="container">
            <div class="row">
                <div class="offset-xxxl-1 col-xxxl-5 col-xl-6">
                    <div class="location-klando__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5123.034396244537!2d19.925893201171686!3d50.057874985922346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716585e08e6c88b%3A0x4b0b9c983ed0d5a2!2sSaveinvest%20Sp.%20z%20o.%20o.!5e0!3m2!1spl!2spl!4v1645539936854!5m2!1spl!2spl" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5">
                    <div class="location-klando__content">
                        <div class="locat-logo">
                            <img src="/invest-kladno/kladno-photo/contact/contact-logo-smoll.png" alt="" />
                        </div>
                        <div class="locat-info">
                            <div class="locat-info__data-firm">
                                <?php if ($name_firm_sec7_contact_kladno = get_field('name_firm_sec7_contact_kladno')) : ?>
                                    <p class="text-main text-main--fw600 text-main--f14">
                                        <?php echo $name_firm_sec7_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($adres_firm_sec7_contact_kladno = get_field('adres_firm_sec7_contact_kladno')) : ?>
                                    <p class="text-main text-main--f14">
                                        <?php echo $adres_firm_sec7_contact_kladno; ?><br>
                                        <?php if ($tel_firm_sec7_contact_kladno = get_field('tel_firm_sec7_contact_kladno')) : ?>
                                            <a class="text-main text-main--f14" href="tel:	<?php echo $tel_firm_sec7_contact_kladno; ?>">
                                                tel.: <?php echo $tel_firm_sec7_contact_kladno; ?></a>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($data_firm_sec7_contact_kladno = get_field('data_firm_sec7_contact_kladno')) : ?>
                                    <p class="text-main text-main--f14">
                                        <?php echo $data_firm_sec7_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($nip_data_firm_sec7_contact_kladno = get_field('nip_data_firm_sec7_contact_kladno')) : ?>
                                    <p class="text-main text-main--f14">
                                        <?php echo $nip_data_firm_sec7_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="locat-info__data-person">
                                <?php if ($name_person_sec7_contact_kladno = get_field('name_person_sec7_contact_kladno')) : ?>
                                    <p class="text-main text-main--fw600 text-main--f14">
                                        <?php echo $name_person_sec7_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($adres_person_sec7_contact_kladno = get_field('adres_person_sec7_contact_kladno')) : ?>
                                    <p class="text-main text-main--f14">
                                        <?php echo $adres_person_sec7_contact_kladno; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($banc_sec7_contact_kladno = get_field('banc_sec7_contact_kladno')) : ?>
                                    <p class="text-main text-main--f14">
                                        <?php echo $banc_sec7_contact_kladno; ?>
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
get_template_part('investitions/ostoja-kladno/footer');
?>