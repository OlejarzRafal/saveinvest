<?php
wp_footer();
?>

<footer>
    <section class="footer-top">
        <div class="footer-top__content">
            <?php if ($title_sec1_footer_karwia = get_field('title_sec1_footer_karwia', 'options')) : ?>
                <h2 class="f-h2 f-h2--white">
                    <?php echo $title_sec1_footer_karwia; ?>
                </h2>
            <?php endif; ?>
            <?php
            $link = get_field('button_sec1_footer_karwia', 'options');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>

            <div class="footer-top__content__box-photo">
                <?php if (have_rows('photo_box_sec1_footer_karwia', 'options')) : ?>
                    <?php while (have_rows('photo_box_sec1_footer_karwia', 'options')) :
                        the_row(); ?>
                        <?php
                        $photo_sec1_footer_karwia = get_sub_field('photo_sec1_footer_karwia', 'options');
                        if ($photo_sec1_footer_karwia) : ?>
                            <img src="<?php echo esc_url($photo_sec1_footer_karwia['url']); ?>" alt="<?php echo esc_attr($photo_sec1_footer_karwia['alt']); ?>" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="rotete-item-footer"></div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer__logo">
                        <a href="<?php the_permalink(614); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/home-enklawa-company-logo.png" alt="logo saveinvest" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <?php if ($title_sec2_footer_karwia = get_field('title_sec2_footer_karwia', 'options')) : ?>
                            <div class="footer-box__title">
                                <p class="text-main text-main--f14 text-main--fw600 text-main--sand-light text-main--ls4">
                                    <?php echo $title_sec2_footer_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec2_footer_karwia = get_field('text_sec2_footer_karwia', 'options')) : ?>
                            <div class="footer-box__info">
                                <p class="text-main text-main--f14 text-main--opacity7 text-main--white">
                                    <?php echo $text_sec2_footer_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <div class="footer-box__title">
                            <p class="text-main text-main--f14 text-main--fw600 text-main--sand-light text-main--ls4"></p>
                        </div>
                        <?php if ($data_sec2_footer_karwia = get_field('data_sec2_footer_karwia', 'options')) : ?>
                            <div class="footer-box__info">
                                <p class="text-main text-main--f14 text-main--opacity7 text-main--white">
                                    <?php echo $data_sec2_footer_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <?php if ($title_sec3_footer_karwia = get_field('title_sec3_footer_karwia', 'options')) : ?>
                            <div class="footer-box__title">
                                <p class="text-main text-main--f14 text-main--fw600 text-main--sand-light text-main--ls4">
                                    <?php echo $title_sec3_footer_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <div class="footer-box__info footer-box__office">
                            <?php if ($tel_mobile_sec3_footer_karwia = get_field('tel_mobile_sec3_footer_karwia', 'options')) : ?>
                                <a class="text-main text-main--f14 text-main--opacity7 text-main--white" href="tel:<?php echo $tel_mobile_sec3_footer_karwia; ?>">tel.: <?php echo $tel_mobile_sec3_footer_karwia; ?></a>
                            <?php endif; ?>
                            <?php if ($tel_sec3_footer_karwia = get_field('tel_sec3_footer_karwia', 'options')) : ?>
                                <a class="text-main text-main--f14 text-main--opacity7 text-main--white" href="tel:<?php echo $tel_sec3_footer_karwia; ?>">tel.: <?php echo $tel_sec3_footer_karwia; ?></a>
                            <?php endif; ?>
                            <?php if ($mail_sec3_footer_karwia = get_field('mail_sec3_footer_karwia', 'options')) : ?>
                                <a class="text-main text-main--f14 text-main--opacity7 text-main--white" href="mailto:<?php echo $mail_sec3_footer_karwia; ?>"><?php echo $mail_sec3_footer_karwia; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <?php if ($name_sec4_footer_karwia = get_field('name_sec4_footer_karwia', 'options')) : ?>
                            <div class="footer-box__title">
                                <p class="text-main text-main--f14 text-main--fw600 text-main--sand-light text-main--ls4">
                                    <?php echo $name_sec4_footer_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if ($info_sec4_footer_karwia = get_field('info_sec4_footer_karwia', 'options')) : ?>
                            <div class="footer-box__info">
                                <p class="text-main text-main--f14 text-main--opacity7 text-main--white">
                                    <?php echo $info_sec4_footer_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <div class="footer-box__title">
                            <p class="text-main text-main--f14 text-main--fw600 text-main--sand-light text-main--ls4">
                                MAPA STRONY
                            </p>
                        </div>
                        <div class="footer-box__info footer-box__map">
                            <a class="text-main text-main--f12 text-main--fw600 text-main--white text-main--ls4" href="<?php the_permalink(617); ?>">CENY DZIAŁEK
                            </a>
                            <a class="text-main text-main--f12 text-main--fw600 text-main--white text-main--ls4" href="<?php the_permalink(614); ?>">STRONA GŁÓWNA
                            </a>
                            <a class="text-main text-main--f12 text-main--fw600 text-main--white text-main--ls4" href="<?php the_permalink(619); ?>">GALERIA
                            </a>
                            <a class="text-main text-main--f12 text-main--fw600 text-main--white text-main--ls4" href="<?php the_permalink(616); ?>">LOKALIZACJA
                            </a>
                            <a class="text-main text-main--f12 text-main--fw600 text-main--white text-main--ls4" href="<?php the_permalink(618); ?>">KONTAKT
                            </a>
                            <!-- <a class="text-main text-main--f12 text-main--fw600 text-main--white text-main--ls4" href="<?php the_permalink(); ?>">POLITYKA PRYWATNOŚCI
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <?php if ($text_sec5_footer_karwia = get_field('text_sec5_footer_karwia', 'options')) : ?>
                        <div class="footer__text-bottom">
                            <p class="text-main text-main--f11 text-main--opacity5 text-main--white">
                                <?php echo $text_sec5_footer_karwia; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-12">
                    <div class="footer__text-created">
                        <?php if ($text2_sec5_footer_karwia = get_field('text2_sec5_footer_karwia', 'options')) : ?>
                            <p class="text-main text-main--f14 text-main--white">
                                <?php echo $text2_sec5_footer_karwia; ?>
                            <div class="dot-footer"></div>
                            <a href="https://www.funktional.pl/" target="_blank" class="text-main text-main--f14 text-main--white">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/logo-funktional-footer.png" alt="logo saveinvest" />

                            </a>
                            <p class="text-main text-main--f14 text-main--white text-main--ls4"> creation</p>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

</body>