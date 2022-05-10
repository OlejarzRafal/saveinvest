<?php
wp_footer();
?>

<footer>
    <section class="footer-top">
        <div class="footer-top__parallax">
            <img class="footer-top__parallax__box" src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/footer/paralax-footer.jpg" alt="zdjęcie plaża z lasem" />
        </div>
        <div class="footer-top__box">
            <div class="footer-top__box__content">
                <div class="footer-top__box__content__text ">
                    <?php if ($italic_sec1_footer_top_seagolf = get_field('italic_sec1_footer_top_seagolf', 'options')) : ?>
                        <h4 class="f-h4 f-h4 f-h4--fw600-italic"><?php echo $italic_sec1_footer_top_seagolf; ?></h4>
                    <?php endif; ?>
                    <?php if ($text_sec1_footer_top_seagolf = get_field('text_sec1_footer_top_seagolf', 'options')) : ?>
                        <h4 class="f-h4 "><?php echo $text_sec1_footer_top_seagolf; ?></h4>
                    <?php endif; ?>
                </div>
                <?php
                $link = get_field('przycisk', 'options');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer__logo">
                        <a href="<?php the_permalink(1392); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/home-page/home-enklawa-company-logo.png" alt="logo saveinvest" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <?php if ($title_sec1_footer_bottom_seagolf = get_field('title_sec1_footer_bottom_seagolf', 'options')) : ?>
                            <div class="footer-box__title footer-box__title-name-firm">
                                <h6 class="f-h6 f-h6--f28 f-h6--gold-medium f-h6--ls4">
                                    <?php echo $title_sec1_footer_bottom_seagolf; ?>
                                </h6>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec1_footer_bottom_seagolf = get_field('text_sec1_footer_bottom_seagolf', 'options')) : ?>
                            <div class="footer-box__info">
                                <p class="text-main text-main--opacity7 text-main--white text-main--f14">
                                    <?php echo $text_sec1_footer_bottom_seagolf; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <div class="footer-box__title">
                            <h6 class="f-h6 f-h6--f28 f-h6--gold-medium f-h6--ls4"></h6>
                        </div>
                        <?php if ($data_sec1_footer_bottom_seagolf = get_field('data_sec1_footer_bottom_seagolf', 'options')) : ?>
                            <div class="footer-box__info">
                                <p class="text-main text-main--opacity7 text-main--white text-main--f14">
                                    <?php echo $data_sec1_footer_bottom_seagolf; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <?php if ($title_sec2_footer_bottom_seagolf = get_field('title_sec2_footer_bottom_seagolf', 'options')) : ?>
                            <div class="footer-box__title">
                                <h6 class="f-h6 f-h6--f28 f-h6--gold-medium f-h6--ls4">
                                    <?php echo $title_sec2_footer_bottom_seagolf; ?>
                                </h6>
                            </div>
                        <?php endif; ?>
                        <div class="footer-box__info footer-box__office">
                            <?php if ($tel_mobile_sec2_footer_bottom_seagolf = get_field('tel_mobile_sec2_footer_bottom_seagolf', 'options')) : ?>
                                <a class="text-main text-main--opacity7 text-main--white text-main--f14" href="tel:<?php echo $tel_mobile_sec2_footer_bottom_seagolf; ?>">tel.: <?php echo $tel_mobile_sec2_footer_bottom_seagolf; ?></a>
                            <?php endif; ?>
                            <?php if ($tel_sec2_footer_bottom_seagolf = get_field('tel_sec2_footer_bottom_seagolf', 'options')) : ?>
                                <a class="text-main text-main--opacity7 text-main--white text-main--f14" href="tel:<?php echo $tel_sec2_footer_bottom_seagolf; ?>">tel.: <?php echo $tel_sec2_footer_bottom_seagolf; ?></a>
                            <?php endif; ?>
                            <?php if ($mail_sec2_footer_bottom_seagolf = get_field('mail_sec2_footer_bottom_seagolf', 'options')) : ?>
                                <a class="text-main text-main--opacity7 text-main--white text-main--f14" href="mailto:<?php echo $mail_sec2_footer_bottom_seagolf; ?>"><?php echo $mail_sec2_footer_bottom_seagolf; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <?php if ($name_sec3_footer_bottom_seagolf = get_field('name_sec3_footer_bottom_seagolf', 'options')) : ?>
                            <div class="footer-box__title">
                                <h6 class="f-h6 f-h6--f28 f-h6--gold-medium f-h6--ls4">
                                    <?php echo $name_sec3_footer_bottom_seagolf; ?>
                                </h6>
                            </div>
                        <?php endif; ?>
                        <?php if ($info_sec3_footer_bottom_seagolf = get_field('info_sec3_footer_bottom_seagolf', 'options')) : ?>
                            <div class="footer-box__info">
                                <p class="text-main text-main--opacity7 text-main--white text-main--f14">
                                    <?php echo $info_sec3_footer_bottom_seagolf; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="footer-box">
                        <div class="footer-box__title">
                            <h6 class="f-h6 f-h6--f28 f-h6--gold-medium f-h6--ls4">
                                Mapa strony
                            </h6>
                        </div>
                        <div class="footer-box__info footer-box__map">
                            <a class="text-main text-main--white text-main--fw500 text-main--f12 text-main--ls4" href="<?php the_permalink(1392); ?>">STRONA GŁÓWNA
                            </a>
                            <a class="text-main text-main--white text-main--fw500 text-main--f12 text-main--ls4" href="<?php the_permalink(1393); ?>">CENY DZIAŁEK
                            </a>
                            <a class="text-main text-main--white text-main--fw500 text-main--f12 text-main--ls4" href="<?php the_permalink(1407); ?>">O RESORCIE
                            </a>
                            <a class="text-main text-main--white text-main--fw500 text-main--f12 text-main--ls4" href="<?php the_permalink(1405); ?>">LOKALIZACJA
                            </a>
                            <a class="text-main text-main--white text-main--fw500 text-main--f12 text-main--ls4" href="<?php the_permalink(1406); ?>">GALERIA
                            </a>
                            <a class="ttext-main text-main--white text-main--fw500 text-main--f12 text-main--ls4" href="<?php the_permalink(1404); ?>">KONTAKT
                            </a>
                            <!-- <a class="text-main text-main--f12 text-main--fw600 text-main--white text-main--ls4" href="<?php the_permalink(); ?>">POLITYKA PRYWATNOŚCI
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <?php if ($text_bottom_sec4_footer_bottom_seagolf = get_field('text_bottom_sec4_footer_bottom_seagolf', 'options')) : ?>
                        <div class="footer__text-bottom">
                            <p class="text-main text-main--f11 text-main--opacity5 text-main--white">
                                <?php echo $text_bottom_sec4_footer_bottom_seagolf; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-12">
                    <div class="footer__text-created">
                        <?php if ($text_sec4_footer_bottom_seagolf = get_field('text_sec4_footer_bottom_seagolf', 'options')) : ?>
                            <p class="text-main text-main--f14 text-main--white">
                                <?php echo $text_sec4_footer_bottom_seagolf; ?>
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