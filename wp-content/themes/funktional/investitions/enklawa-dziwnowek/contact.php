<?php

/**
 * Template Name: Kontakt enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>


<div class="mainSection aboutPage contactPage">

    <?php get_template_part('investitions/enklawa-dziwnowek/nav-head'); ?>
    <?php get_template_part('investitions/enklawa-dziwnowek/nav-subpages'); ?>


    <div class="box">
        <div class="container">
            <div class="col-sm-12">
                <?php if ($enkl_dziwnow_contact_sec_1_title = get_field('enkl_dziwnow_contact_sec_1_title')) : ?>
                    <h1>
                        <?php echo $enkl_dziwnow_contact_sec_1_title; ?>
                    </h1>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="person parallax-bottom-contact">

                        <?php if (have_rows('enkl_dziwnow_contact_sec_1_percon_first')) : ?>
                            <?php while (have_rows('enkl_dziwnow_contact_sec_1_percon_first')) :
                                the_row(); ?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php
                                        $enkl_dziwnow_contact_sec_1_percon_first_photo = get_sub_field('enkl_dziwnow_contact_sec_1_percon_first_photo');
                                        if ($enkl_dziwnow_contact_sec_1_percon_first_photo) : ?>
                                            <img src="<?php echo esc_url($enkl_dziwnow_contact_sec_1_percon_first_photo['url']); ?>" alt="<?php echo esc_attr($enkl_dziwnow_contact_sec_1_percon_first_photo['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-6"><?php if ($enkl_dziwnow_contact_sec_1_percon_first_name = get_sub_field('enkl_dziwnow_contact_sec_1_percon_first_name')) : ?>
                                            <div class="name">
                                                <?php echo $enkl_dziwnow_contact_sec_1_percon_first_name; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($enkl_dziwnow_contact_sec_1_percon_first_position = get_sub_field('enkl_dziwnow_contact_sec_1_percon_first_position')) : ?>
                                            <div class="position">
                                                <?php echo $enkl_dziwnow_contact_sec_1_percon_first_position; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($enkl_dziwnow_contact_sec_1_percon_first_email = get_sub_field('enkl_dziwnow_contact_sec_1_percon_first_email')) : ?>
                                            <div class="email">
                                                <a href="mailto:<?php echo $enkl_dziwnow_contact_sec_1_percon_first_email; ?>"><?php echo $enkl_dziwnow_contact_sec_1_percon_first_email; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($enkl_dziwnow_contact_sec_1_percon_first_phone = get_sub_field('enkl_dziwnow_contact_sec_1_percon_first_phone')) : ?>
                                            <div class="phone">
                                                <a href="tel:<?php echo $enkl_dziwnow_contact_sec_1_percon_first_phone; ?>"><?php echo $enkl_dziwnow_contact_sec_1_percon_first_phone; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (have_rows('enkl_dziwnow_contact_sec_1_percon_second')) : ?>
                            <?php while (have_rows('enkl_dziwnow_contact_sec_1_percon_second')) :
                                the_row(); ?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php
                                        $enkl_dziwnow_contact_sec_1_percon_second_photo = get_sub_field('enkl_dziwnow_contact_sec_1_percon_second_photo');
                                        if ($enkl_dziwnow_contact_sec_1_percon_second_photo) : ?>
                                            <img src="<?php echo esc_url($enkl_dziwnow_contact_sec_1_percon_second_photo['url']); ?>" alt="<?php echo esc_attr($enkl_dziwnow_contact_sec_1_percon_second_photo['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php if ($enkl_dziwnow_contact_sec_1_percon_second_name = get_sub_field('enkl_dziwnow_contact_sec_1_percon_second_name')) : ?>
                                            <div class="name">
                                                <?php echo $enkl_dziwnow_contact_sec_1_percon_second_name; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($enkl_dziwnow_contact_sec_1_percon_second_position = get_sub_field('enkl_dziwnow_contact_sec_1_percon_second_position')) : ?>
                                            <div class="position">
                                                <?php echo $enkl_dziwnow_contact_sec_1_percon_second_position; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($enkl_dziwnow_contact_sec_1_percon_second_email = get_sub_field('enkl_dziwnow_contact_sec_1_percon_second_email')) : ?>
                                            <div class="email">
                                                <a href="mailto:<?php echo $enkl_dziwnow_contact_sec_1_percon_second_email; ?>"><?php echo $enkl_dziwnow_contact_sec_1_percon_second_email; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($enkl_dziwnow_contact_sec_1_percon_second_phone = get_sub_field('enkl_dziwnow_contact_sec_1_percon_second_phone')) : ?>
                                            <div class="phone">
                                                <a href="tel:<?php echo $enkl_dziwnow_contact_sec_1_percon_second_phone; ?>"><?php echo $enkl_dziwnow_contact_sec_1_percon_second_phone; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <?php if ($enkl_dziwnow_contact_sec_1_form_title = get_field('enkl_dziwnow_contact_sec_1_form_title')) : ?>
                        <div class="title">
                            <?php echo $enkl_dziwnow_contact_sec_1_form_title; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($enkl_dziwnow_contact_sec_1_form_text = get_field('enkl_dziwnow_contact_sec_1_form_text')) : ?>
                        <div class="disclaimer">
                            <?php echo $enkl_dziwnow_contact_sec_1_form_text; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form">
                        <!-- <?php echo do_shortcode('[contact-form-7 id="47" title="Kontakt"]'); ?> -->
                        <?php echo do_shortcode('[contact-form-7 id="1723" title="Formularz kontaktowy Enklawa Dziwnówek"]'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mapData">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div id="map">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="details">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="logo logo-right">
                                <?php
                                $enkl_dziwnow_contact_sec_2_logo = get_field('enkl_dziwnow_contact_sec_2_logo');
                                if ($enkl_dziwnow_contact_sec_2_logo) : ?>
                                    <img src="<?php echo esc_url($enkl_dziwnow_contact_sec_2_logo['url']); ?>" alt="<?php echo esc_attr($enkl_dziwnow_contact_sec_2_logo['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="offset-sm-1 col-sm-4">
                            <address>
                                <ul>
                                    <?php if ($enkl_dziwnow_contact_sec_2_firm = get_field('enkl_dziwnow_contact_sec_2_firm')) : ?>
                                        <li class="important ek-fadein-dziwnowek"><?php echo $enkl_dziwnow_contact_sec_2_firm; ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (have_rows('enkl_dziwnow_contact_sec_2_location')) : ?>
                                        <?php while (have_rows('enkl_dziwnow_contact_sec_2_location')) :
                                            the_row(); ?>
                                            <li class="ek-fadein-dziwnowek"><?php if ($enkl_dziwnow_contact_sec_2_location_info = get_sub_field('enkl_dziwnow_contact_sec_2_location_info')) : ?>
                                                    <?php echo $enkl_dziwnow_contact_sec_2_location_info; ?>
                                                <?php endif; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <ul>
                                    <?php if ($enkl_dziwnow_contact_sec_2_court = get_field('enkl_dziwnow_contact_sec_2_court')) : ?>
                                        <li class="ek-fadein-dziwnowek">
                                            <?php echo $enkl_dziwnow_contact_sec_2_court; ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <ul><?php if (have_rows('enkl_dziwnow_contact_sec_2_nip_box')) : ?>
                                        <?php while (have_rows('enkl_dziwnow_contact_sec_2_nip_box')) :
                                            the_row(); ?>
                                            <?php if ($enkl_dziwnow_contact_sec_2_nip_box_dane = get_sub_field('enkl_dziwnow_contact_sec_2_nip_box_dane')) : ?>
                                                <li class="ek-fadein-dziwnowek"> <?php echo $enkl_dziwnow_contact_sec_2_nip_box_dane; ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </address>
                        </div>
                        <div class="offset-sm-2 col-sm-5">
                            <address>
                                <ul>
                                    <?php if ($enkl_dziwnow_contact_sec_2_name = get_field('enkl_dziwnow_contact_sec_2_name')) : ?>
                                        <li class="important ek-fadein-dziwnowek"> <?php echo $enkl_dziwnow_contact_sec_2_name; ?></li>
                                    <?php endif; ?>
                                    <?php if (have_rows('enkl_dziwnow_contact_sec_2_local_firm')) : ?>
                                        <?php while (have_rows('enkl_dziwnow_contact_sec_2_local_firm')) :
                                            the_row(); ?>
                                            <?php if ($enkl_dziwnow_contact_sec_2_local_firm_info = get_sub_field('enkl_dziwnow_contact_sec_2_local_firm_info')) : ?>
                                                <li class="ek-fadein-dziwnowek"><?php echo $enkl_dziwnow_contact_sec_2_local_firm_info; ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <ul><?php if ($enkl_dziwnow_contact_sec_2_local_bank = get_field('enkl_dziwnow_contact_sec_2_local_bank')) : ?>
                                        <li class="important ek-fadein-dziwnowek"><?php echo $enkl_dziwnow_contact_sec_2_local_bank; ?></li>
                                    <?php endif; ?>
                                    <?php if ($enkl_dziwnow_contact_sec_2_local_bank_nr = get_field('enkl_dziwnow_contact_sec_2_local_bank_nr')) : ?>
                                        <li class="ek-fadein-dziwnowek"> <?php echo $enkl_dziwnow_contact_sec_2_local_bank_nr; ?></li>
                                    <?php endif; ?>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="numbersSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($enkl_dziwnow_contact_sec_3_tytuł = get_field('enkl_dziwnow_contact_sec_3_tytuł')) : ?>


                    <div class="title parallax-top-contact">
                        <?php echo $enkl_dziwnow_contact_sec_3_tytuł; ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <?php if (have_rows('enkl_dziwnow_contact_sec_3_data')) : ?>
                        <?php while (have_rows('enkl_dziwnow_contact_sec_3_data')) :
                            the_row(); ?>
                            <div class="col-xl-4 col-md-6">
                                <?php if ($enkl_dziwnow_contact_sec_3_data_number = get_sub_field('enkl_dziwnow_contact_sec_3_data_number')) : ?>
                                    <div class="number ek-fadein-dziwnowek">
                                        <?php echo $enkl_dziwnow_contact_sec_3_data_number; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($enkl_dziwnow_contact_sec_3_data_text = get_sub_field('enkl_dziwnow_contact_sec_3_data_text')) : ?>
                                    <div class="name ek-fadein-dziwnowek">
                                        <?php echo $enkl_dziwnow_contact_sec_3_data_text; ?>
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

<div class="infoBgSection right contact" style="background:url(<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/bg_contact-section.jpg) center center no-repeat;
             background-size:cover;">
    <div class="box">
        <div class="description ek-fadein-dziwnowek">
            <?php if ($enkl_dziwnow_contact_sec_4_text = get_field('enkl_dziwnow_contact_sec_4_text')) : ?>
                <p>
                    <?php echo $enkl_dziwnow_contact_sec_4_text; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if ($enkl_dziwnow_contact_sec_4_header = get_field('enkl_dziwnow_contact_sec_4_header')) : ?>
    <div class="quote contact ek-fadein-dziwnowek ">
        <?php echo $enkl_dziwnow_contact_sec_4_header; ?>
    </div>
<?php endif; ?>

<div class="aboutSection contact ek-fadein-dziwnowek">
    <div class="box">
        <div class="row">
            <div class="col-xl-6">
                <?php if ($enkl_dziwnow_contact_sec_4_title = get_field('enkl_dziwnow_contact_sec_4_title')) : ?>
                    <div class="title ek-fadein-dziwnowek">
                        <?php echo $enkl_dziwnow_contact_sec_4_title; ?>
                    </div>
                <?php endif; ?>
                <?php if ($enkl_dziwnow_contact_sec_4_info = get_field('enkl_dziwnow_contact_sec_4_info')) : ?>
                    <div class="description ek-fadein-dziwnowek">
                        <?php echo $enkl_dziwnow_contact_sec_4_info; ?>
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
                <div class="slider">
                    <?php if (get_field('reference', 'option')) : ?>
                        <?php while (has_sub_field('reference', 'option')) : ?>
                            <div class="opinion">
                                <?php echo get_sub_field('reference'); ?>
                                <div class="name">
                                    <?php echo get_sub_field('author'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4VzrevtEEqUGR8mv97FOogtj2kb0RHbA"></script>



<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>