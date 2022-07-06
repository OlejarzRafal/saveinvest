<footer class="footer <?php if (is_front_page()) : ?> footer__home <?php endif;?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__header-main">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/saveinvest-logo.png" alt="saveinvest">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__1">
                    <?php if (have_rows('kontent_footer_col1', 'options')) : ?>
                        <?php while (have_rows('kontent_footer_col1', 'options')) :
                            the_row(); ?>
                            <div class="footer__content">
                                <h3 class="footer__header"><?php if ($naglowek = get_sub_field('naglowek', 'options')) : ?>
                                        <?php echo $naglowek; ?>
                                    <?php endif; ?></h3>
                                <div class="footer__desc">
                                    <?php if ($tekst = get_sub_field('tekst', 'options')) : ?>
                                        <?php echo $tekst; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer__2">
                    <?php if (have_rows('kontent_footer_col2', 'options')) : ?>
                        <?php while (have_rows('kontent_footer_col2', 'options')) :
                            the_row(); ?>
                            <div class="footer__content">
                                <h3 class="footer__header"><?php if ($naglowek = get_sub_field('naglowek_', 'options')) : ?>
                                        <?php echo $naglowek; ?>
                                    <?php endif; ?></h3>
                                <div class="footer__desc">
                                    <?php if ($tekst = get_sub_field('tekst', 'options')) : ?>
                                        <?php echo $tekst; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer__3">
                    <?php if (have_rows('kontent_footer_col3', 'options')) : ?>
                        <?php while (have_rows('kontent_footer_col3', 'options')) :
                            the_row(); ?>
                            <div class="footer__content">
                                <h3 class="footer__header"><?php if ($naglowek = get_sub_field('naglowek', 'options')) : ?>
                                        <?php echo $naglowek; ?>
                                    <?php endif; ?></h3>
                                <div class="footer__desc">
                                    <?php if ($tekst = get_sub_field('tekst', 'options')) : ?>
                                        <?php echo $tekst; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer__4">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/footer-ico1.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/footer-ico2.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/footer-ico3.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer__line"></div>
                <div class="footer__info">
                    <?php if ($tekst_na_dole_footer = get_field('tekst_na_dole_footer', 'options')) : ?>
                        <?php echo $tekst_na_dole_footer; ?>
                    <?php endif; ?>
                </div>
                <div class="footer__law">
                    <div class="footer__law--left">
                        SaveInvest © 2021. Wszystkie prawa zastrzeżone.
                    </div>
                    <div class="footer__law--funktional">
                        <a href="https://www.funktional.pl/" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/funktional-logo.png"><span>creation</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="backtotop " id="backtotop">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-back-top.svg" alt="back to top">
</div>
<!-- POPUP -->
<?php get_template_part('template-popup/popup'); ?>
<?php wp_footer(); ?>

</body>
</html>