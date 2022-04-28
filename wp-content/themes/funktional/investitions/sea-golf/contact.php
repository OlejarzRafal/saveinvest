<?php

/**
 * Template Name: Kontakt sea-golf
 * Template Post Type: sea-golf
 */

get_template_part('investitions/sea-golf/header');
?>
<div class="sg-contact">

    <section class="sec1-contact-sg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6">
                    <div class="sec1-contact-sg__form">
                        
                        <div class="sec1-contact-sg__form__title">
                            <h5 class="f-h5"><?php the_field('title_sec1_contact_sg'); ?></h5>
                        </div>
                        <div class="sec1-contact-sg__form__text">
                            <?php if ($text_sec1_contact_sg = get_field('text_sec1_contact_sg')) : ?>
                                <p class="text-main">
                                    <?php echo $text_sec1_contact_sg; ?>
                                </p>&nbsp
                            <?php endif; ?>
                            <?php if ($tel_sec1_contact_sg = get_field('tel_sec1_contact_sg')) : ?>
                                <a class="text-main" class="text-main text-main--fw500" href="tel:<?php echo $tel_sec1_contact_sg; ?>"><?php echo $tel_sec1_contact_sg; ?>.</a>
                            <?php endif; ?>
                        </div>
                        <div class="form-main">
                            <?php echo do_shortcode('[contact-form-7 id="1327" title="Formularz kontaktowy Sea-Golf"]'); ?>
                        </div>
                        <div class="sec1-contact-sg__form__border"></div>
                    </div>
                </div>
                <div class="col-xxl-6">
                    <div class="sec1-contact-sg__sales-box">
                        <?php if ($title_sec2_contact_sg = get_field('title_sec2_contact_sg')) : ?>
                            <div class="sec1-contact-sg__sales-box__title">
                                <h5 class="f-h5"> <?php echo $title_sec2_contact_sg; ?></h5>
                            </div>
                        <?php endif; ?>
                        <div class="sec1-contact-sg__sales-box__text">
                            <p class="text-main">
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
                                                <h6 class="f-h6 f-h6-fw600">
                                                    <?php echo $name_box_sales_sec2_contact_sg; ?>
                                                </h6>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($positions_box_sales_sec2_contact_sg = get_sub_field('positions_box_sales_sec2_contact_sg')) : ?>
                                            <div class="person-info__position">
                                                <p class="text-main text-main--grey">
                                                    <?php echo $positions_box_sales_sec2_contact_sg; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($mail_box_sales_sec2_contact_sg = get_sub_field('mail_box_sales_sec2_contact_sg')) : ?>
                                            <div class="person-info__email">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-sg/contact/icon-mail-contact.svg" alt=" ikona email" />
                                                <a class="text-main text-main--fw500" href="mailto:<?php echo $mail_box_sales_sec2_contact_sg; ?>"><?php echo $mail_box_sales_sec2_contact_sg; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($tel_box_sales_sec2_contact_sg = get_sub_field('tel_box_sales_sec2_contact_sg')) : ?>
                                            <div class="person-info__phone">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-sg/contact/icon-tel-contact.svg" alt="ikona telefonu" />
                                                <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box_sales_sec2_contact_sg; ?>"><?php echo $tel_box_sales_sec2_contact_sg; ?></a>
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
                                <h5 class="f-h5"><?php echo $title_sec3_contact_sg; ?></h5>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec3_contact_sg = get_field('text_sec3_contact_sg')) : ?>
                            <div class="sec1-contact-sg__service__text">
                                <p class="text-main"><?php echo $text_sec3_contact_sg; ?></p>
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
                                            <h6 class="f-h6 f-h6-fw600">
                                                <?php echo $name_box1_service_sec3_contact_sg; ?>
                                            </h6>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box1_service_sec3_contact_sg = get_sub_field('positions_box1_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey">
                                                <?php echo $positions_box1_service_sec3_contact_sg; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box1_service_sec3_contact_sg = get_sub_field('mail_box1_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__email">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-sg/contact/icon-mail-contact.svg" alt=" ikona email" />
                                            <a class="text-main text-main--fw500" href="mailto:<?php echo $mail_box1_service_sec3_contact_sg; ?>"><?php echo $mail_box1_service_sec3_contact_sg; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box1_service_sec3_contact_sg = get_sub_field('tel_box1_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-sg/contact/icon-tel-contact.svg" alt="ikona telefonu" />
                                            <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box1_service_sec3_contact_sg; ?>"><?php echo $tel_box1_service_sec3_contact_sg; ?></a>
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
                                            <h6 class="f-h6 f-h6-fw600">
                                                <?php echo $name_box2_service_sec3_contact_sg; ?>
                                            </h6>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($positions_box2_service_sec3_contact_sg = get_sub_field('positions_box2_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__position">
                                            <p class="text-main text-main--grey">
                                                <?php echo $positions_box2_service_sec3_contact_sg; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($mail_box2_service_sec3_contact_sg = get_sub_field('mail_box2_service_sec3_contact_sg')) : ?>

                                        <div class="person-info__email">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-sg/contact/icon-mail-contact.svg" alt=" ikona email" />
                                            <a class="text-main text-main--fw500" href="mailto:<?php echo $mail_box2_service_sec3_contact_sg; ?>"><?php echo $mail_box2_service_sec3_contact_sg; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($tel_box2_service_sec3_contact_sg = get_sub_field('tel_box2_service_sec3_contact_sg')) : ?>
                                        <div class="person-info__phone">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-sg/contact/icon-tel-contact.svg" alt="ikona telefonu" />
                                            <a class="text-main text-main--fw500" href="tel:<?php echo $tel_box2_service_sec3_contact_sg; ?>"><?php echo $tel_box2_service_sec3_contact_sg; ?></a>
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
</div>
<?php
get_template_part('investitions/sea-golf/footer');
?>