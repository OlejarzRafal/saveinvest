<?php
wp_footer();
?>

<footer>
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img class="footer__logo" src="<?php the_field('footer-logo', 'option'); ?>" alt="SAVEINVEST">
                    <div class="footer__company">
                        <?php the_field('footer-company-details', 'option'); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <?php if (have_rows('sales', 'option')) : ?>
                        <?php while (have_rows('sales', 'option')) : the_row(); ?>
                            <div class="footer__sales">
                                <div class="footer__name">
                                    <?php the_sub_field('name'); ?>
                                </div>
                                <div class="footer__position">
                                    <?php the_sub_field('position'); ?>
                                </div>
                                <a class="footer__phone" href="tel:<?php the_sub_field('phone'); ?>">
                                    <?php the_sub_field('phone'); ?>
                                </a><br />
                                <a class="footer__mail" href="mailto:<?php the_sub_field('e-mail'); ?>">
                                    <?php the_sub_field('e-mail'); ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('footer-office', 'option')) : ?>
                        <?php while (have_rows('footer-office', 'option')) : the_row(); ?>
                            <div class="footer__office">
                                <div class="footer__title">
                                    Biuro
                                </div>
                                <a class="footer__phone" href="tel:<?php the_sub_field('phone-1'); ?>">
                                    <?php the_sub_field('phone-1'); ?>
                                </a><br />
                                <a class="footer__phone" href="tel:<?php the_sub_field('phone-2'); ?>">
                                    <?php the_sub_field('phone-2'); ?>
                                </a><br />
                                <a class="footer__mail" href="mailto:<?php the_sub_field('e-mail'); ?>">
                                    <?php the_sub_field('e-mail'); ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer__president">
                        <?php the_field('footer-president', 'option'); ?>
                    </div>
                </div>
                <div class="footer__menu-box col-3 order-4">
                    <nav id="footer-menu" class="footer__menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container' => 'ul'
                        ));
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
<style>
    .form-showhide input {
        margin-bottom: 0;
    }

    .form-showhide__p {
        font-size: 11px;
        line-height: normal;
    }

    .form-showhide__p--info {
        margin-top: 20px !important;
    }

    .form-showhide__p--display {
        margin-top: 2px !important;
    }

    .form-showhide__p--obligatory,
    .form-showhide__obligatory {
        color: red;
    }

    .form-showhide .rodo {
        margin-top: 0 !important;
    }

    .form-showhide__btn {
        font-weight: 700;
        text-decoration: underline;
        cursor: pointer;
    }

    .form-showhide__information {
        margin-top: 10px !important;
        display: none;
    }

    .form-showhide__information--active {
        margin-top: 10px;
        display: block;
    }

    .wpcf7-acceptance label {
        margin-top: 20px !important;
        margin-bottom: 0 !important;
    }

    .wpcf7-list-item-label {
        position: relative;
        top: 3px;
    }
</style>
<script>
    // $(".form-showhide__btn").click(function(e) {
    //     e.preventDefault();
    //     $(this).parent().parent().find(".form-showhide__information").slideToggle();
    // });
    // $('body').bind('cut copy paste', function(e) {
    //     e.preventDefault();
    // });
    // document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</html>