<?php
wp_footer();
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/logo_save_invest.png" class="img-fluid" alt="logo">
                <ul>
                    <?php if (have_rows('enkl_dziwnow_footer_first_info', 'options')) : ?>
                        <?php while (have_rows('enkl_dziwnow_footer_first_info', 'options')) :
                            the_row(); ?>
                            <?php if ($enkl_dziwnow_footer_first_info_tekst = get_sub_field('enkl_dziwnow_footer_first_info_tekst', 'options')) : ?>
                                <li><?php echo $enkl_dziwnow_footer_first_info_tekst; ?></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <ul>
                    <?php if ($enkl_dziwnow_footer_first_court = get_field('enkl_dziwnow_footer_first_court', 'options')) : ?>
                        <?php echo $enkl_dziwnow_footer_first_court; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-3">
                <?php if (have_rows('enkl_dziwnow_footer_info_office', 'options')) : ?>
                    <?php while (have_rows('enkl_dziwnow_footer_info_office', 'options')) :
                        the_row(); ?>
                        <ul>
                            <?php if ($enkl_dziwnow_footer_info_office_title = get_sub_field('enkl_dziwnow_footer_info_office_title', 'options')) : ?>
                                <li><?php echo $enkl_dziwnow_footer_info_office_title; ?></li>
                            <?php endif; ?>
                            <?php if ($enkl_dziwnow_footer_info_office_tel_mobile = get_sub_field('enkl_dziwnow_footer_info_office_tel_mobile', 'options')) : ?>
                                <li> <a class="footer-style" href="tel:<?php echo $enkl_dziwnow_footer_info_office_tel_mobile; ?>">tel.: <?php echo $enkl_dziwnow_footer_info_office_tel_mobile; ?></a></li>
                            <?php endif; ?>

                            <?php if ($enkl_dziwnow_footer_info_office_tel = get_sub_field('enkl_dziwnow_footer_info_office_tel', 'options')) : ?>
                                <li><a class="footer-style" href="tel:<?php echo $enkl_dziwnow_footer_info_office_tel; ?>">tel.: <?php echo $enkl_dziwnow_footer_info_office_tel; ?></a></li>
                            <?php endif; ?>
                            <?php if ($enkl_dziwnow_footer_info_office_email = get_sub_field('enkl_dziwnow_footer_info_office_email', 'options')) : ?>
                                <li><a class="footer-style" href="mailto:<?php echo $enkl_dziwnow_footer_info_office_email; ?>"><?php echo $enkl_dziwnow_footer_info_office_email; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('enkl_dziwnow_footer_info_person', 'options')) : ?>
                    <?php while (have_rows('enkl_dziwnow_footer_info_person', 'options')) :
                        the_row(); ?>
                        <ul>
                            <?php if ($enkl_dziwnow_footer_info_person_name = get_sub_field('enkl_dziwnow_footer_info_person_name', 'options')) : ?>
                                <li><?php echo $enkl_dziwnow_footer_info_person_name; ?></li>
                            <?php endif; ?>
                            <?php if ($enkl_dziwnow_footer_info_person_position = get_sub_field('enkl_dziwnow_footer_info_person_position', 'options')) : ?>
                                <li><?php echo $enkl_dziwnow_footer_info_person_position; ?></li>
                            <?php endif; ?>
                            <?php if ($enkl_dziwnow_footer_info_person_tel_mobile = get_sub_field('enkl_dziwnow_footer_info_person_tel_mobile', 'options')) : ?>
                                <li><a class="footer-style" href="tel:<?php echo $enkl_dziwnow_footer_info_person_tel_mobile; ?>">tel.: <?php echo $enkl_dziwnow_footer_info_person_tel_mobile; ?></a></li>
                            <?php endif; ?>
                            <?php if ($enkl_dziwnow_footer_info_person_email = get_sub_field('enkl_dziwnow_footer_info_person_email', 'options')) : ?>
                                <li><a class="footer-style" href="mailto:<?php echo $enkl_dziwnow_footer_info_person_email; ?>"><?php echo $enkl_dziwnow_footer_info_person_email; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <ul>
                    <?php if (have_rows('enkl_dziwnow_footer_info_place', 'options')) : ?>
                        <?php while (have_rows('enkl_dziwnow_footer_info_place', 'options')) :
                            the_row(); ?>
                            <?php if ($enkl_dziwnow_footer_info_place_info = get_sub_field('enkl_dziwnow_footer_info_place_info', 'options')) : ?>
                                <li> <?php echo $enkl_dziwnow_footer_info_place_info; ?></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <ul>
                    <?php if ($enkl_dziwnow_footer_info_bank = get_field('enkl_dziwnow_footer_info_bank', 'options')) : ?>
                        <li>
                            <?php echo $enkl_dziwnow_footer_info_bank; ?>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-3">
                <ul> <?php if (have_rows('enkl_dziwnow_footer_info_nav', 'options')) : ?>
                        <?php while (have_rows('enkl_dziwnow_footer_info_nav', 'options')) :
                                the_row(); ?>
                            <li>
                                <?php if ($enkl_dziwnow_footer_info_nav_link = get_sub_field('enkl_dziwnow_footer_info_nav_link', 'options')) : ?>
                                    <a href="<?php echo $enkl_dziwnow_footer_info_nav_link; ?>">
                                        <?php if ($enkl_dziwnow_footer_info_nav_title = get_sub_field('enkl_dziwnow_footer_info_nav_title', 'options')) : ?>
                                            <?php echo esc_html($enkl_dziwnow_footer_info_nav_title); ?>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id="site_url" style="display:none;"><?php echo get_template_directory_uri() ?></div>
<div id="site_url_home" style="display:none;"><?php echo esc_url(home_url('')); ?></div>
<?php wp_footer(); ?>

</body>
<!-- <script>
    $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
    });
    document.addEventListener('contextmenu', event => event.preventDefault());
</script> -->

</html>

<!-- POPUP -->
<?php get_template_part('template-popup/popup'); ?>