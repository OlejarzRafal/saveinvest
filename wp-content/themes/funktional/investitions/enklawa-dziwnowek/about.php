<?php

/**
 * Template Name: O resorcie enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>

<div class="mainSection aboutPage">

    <?php get_template_part('investitions/enklawa-dziwnowek/nav-head'); ?>
    <?php get_template_part('investitions/enklawa-dziwnowek/nav-subpages'); ?>

    <div class="hello_box parallax-top">
        <div class="container">
            <div class="col-sm-12">
                <?php if ($about_enkl_dziwnow_sec1_header = get_field('about_enkl_dziwnow_sec1_header')) : ?>
                    <h1>
                        <?php echo $about_enkl_dziwnow_sec1_header; ?>
                    </h1>
                <?php endif; ?>
                <?php if ($about_enkl_dziwnow_sec1_title = get_field('about_enkl_dziwnow_sec1_title')) : ?>
                    <h2>
                        <?php echo $about_enkl_dziwnow_sec1_title; ?>
                    </h2>
                <?php endif; ?>
                <?php if ($about_enkl_dziwnow_sec1_text_first = get_field('about_enkl_dziwnow_sec1_text_first')) : ?>
                    <p>
                        <?php echo $about_enkl_dziwnow_sec1_text_first; ?>
                    </p>
                <?php endif; ?>
                <?php if ($about_enkl_dziwnow_sec1_text_second = get_field('about_enkl_dziwnow_sec1_text_second')) : ?>
                    <p>
                        <?php echo $about_enkl_dziwnow_sec1_text_second; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="listSection aboutPage">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($about_enkl_dziwnow_sec2_title = get_field('about_enkl_dziwnow_sec2_title')) : ?>
                    <div class="title ek-fadein-dziwnowek">
                        <?php echo $about_enkl_dziwnow_sec2_title; ?>
                    </div>
                <?php endif; ?>

                <div class="row slider">
                    <div>
                        <?php if (have_rows('about_enkl_dziwnow_sec2_box_info')) : ?>
                            <?php while (have_rows('about_enkl_dziwnow_sec2_box_info')) :
                                the_row(); ?>
                                <div class="box ek-fadein-dziwnowek">
                                    <?php
                                    $about_enkl_dziwnow_sec2_box_info_first_picture = get_sub_field('about_enkl_dziwnow_sec2_box_info_first_picture');
                                    if ($about_enkl_dziwnow_sec2_box_info_first_picture) : ?>
                                        <img src="<?php echo esc_url($about_enkl_dziwnow_sec2_box_info_first_picture['url']); ?>" alt="<?php echo esc_attr($about_enkl_dziwnow_sec2_box_info_first_picture['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="name">
                                        <?php if ($about_enkl_dziwnow_sec2_box_info_first_text = get_sub_field('about_enkl_dziwnow_sec2_box_info_first_text')) : ?>
                                            <p>
                                                <?php echo $about_enkl_dziwnow_sec2_box_info_first_text; ?>
                                            </p>
                                        <?php endif; ?>
                                        <?php if ($about_enkl_dziwnow_sec2_box_info_second_text = get_sub_field('about_enkl_dziwnow_sec2_box_info_second_text')) : ?>
                                            <p>
                                                <?php echo $about_enkl_dziwnow_sec2_box_info_second_text; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <!-- <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_waves.svg" alt="Icon" />
                            <div class="name">
                                <p>
                                600 m <br> do morza
                                </p>
                               
                                <p>
                                    Od Twojej działki do piaszczystej plaży i szumu fal dzieli Cię tylko krótki
                                    spacer
                                </p>
                            </div>
                        </div>

                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_pool.svg" alt="Icon" />
                            <div class="name">
                                podgrzewany basen <br> zewnętrzny
                                <p>
                                    Spędzaj wolny czas aktywnie, pływając w basenie
                                </p>
                            </div>
                        </div>

                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_near-forest.svg" alt="Icon" />
                            <div class="name">
                                bezpośrednio <br> przy lesie
                                <p>
                                    Pozwól odpocząć swoim zmysłom wśród zacisza spokojnego i cichego lasu
                                </p>
                            </div>
                        </div>

                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_beach.svg" alt="Icon" />
                            <div class="name">
                                8 minut <br> do plaży
                                <p>
                                    Spacer na piękną, piaszczystą plażę zajmie Ci zaledwie 8 minut
                                </p>
                            </div>
                        </div>

                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_invest.svg" alt="Icon" />
                            <div class="name">
                                Inwestuj <br> i zarabiaj
                                <p>
                                    Unikalna lokalizacja sprawia, że inwestycja to bezpieczna i zyskowna lokata
                                    kapitału
                                </p>
                            </div>
                        </div>

                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_first-lane.svg" alt="Icon" />
                            <div class="name">
                                pierwsza linia zabudowy <br> od morza
                                <p>
                                    Cieszysz się zyskami z najmu, jeśli inwestujesz w biznes
                                </p>
                            </div>
                        </div>


                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_road.svg" alt="Icon" />
                            <div class="name">
                                dojazd drogą <br> asfaltową
                                <p>
                                    Dojeżdżasz wygodnymi, nowymi i bezpiecznymi drogami
                                </p>
                            </div>
                        </div>


                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_surface.svg" alt="Icon" />
                            <div class="name">
                                powierzchnie <br> od 321 m2
                                <p>
                                    Idealna wielkość działek do wypoczynku
                                </p>
                            </div>
                        </div>


                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_fence.svg" alt="Waves" />
                            <div class="name">
                                teren <br> ogrodzony
                                <p>
                                    Czujesz się bezpiecznie, wiedząc, że cały teren jest ogrodzony
                                </p>
                            </div>
                        </div>


                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_tourist-attractions.svg" alt="Icon" />
                            <div class="name">
                                blisko atrakcji <br> turystycznych
                                <p>
                                    Zatoka, marina i port - w takim sąsiedztwie nie sposób się nudzić
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 aboutInvest">
                        <?php if ($about_enkl_dziwnow_sec2_link_btn = get_field('about_enkl_dziwnow_sec2_link_btn')) : ?>
                            <a href="<?php echo esc_html($about_enkl_dziwnow_sec2_link_btn); ?>" class="btn">
                                <?php if ($about_enkl_dziwnow_sec2_text_btn = get_field('about_enkl_dziwnow_sec2_text_btn')) : ?>
                                    <?php echo esc_html($about_enkl_dziwnow_sec2_text_btn); ?>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="infoBgSection right disclaimer photoBgSec" style="background:url(<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/bg_about_page_2.jpg) center bottom no-repeat;
         background-size:auto;">
    <div class="box">
        <?php if ($about_enkl_dziwnow_sec3_title = get_field('about_enkl_dziwnow_sec3_title')) : ?>
            <div class="title ek-fadein-dziwnowek">
                <?php echo $about_enkl_dziwnow_sec3_title; ?>
            </div>
        <?php endif; ?>
        <div class="description ek-fadein-dziwnowek">
            <?php if ($about_enkl_dziwnow_sec3_text_first = get_field('about_enkl_dziwnow_sec3_text_first')) : ?>
                <p>
                    <?php echo $about_enkl_dziwnow_sec3_text_first; ?>
                </p>
            <?php endif; ?>
            <?php if ($about_enkl_dziwnow_sec3_text_second = get_field('about_enkl_dziwnow_sec3_text_second')) : ?>
                <p>
                    <?php echo $about_enkl_dziwnow_sec3_text_second; ?>
                </p>
            <?php endif; ?>
            <?php if ($about_enkl_dziwnow_sec3_text_third = get_field('about_enkl_dziwnow_sec3_text_third')) : ?>
                <p>
                    <?php echo $about_enkl_dziwnow_sec3_text_third; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if ($about_enkl_dziwnow_sec3_text = get_field('about_enkl_dziwnow_sec3_text')) : ?>
    <div class="disclaimer aboutPage">
        <?php echo $about_enkl_dziwnow_sec3_text; ?>
    </div>
<?php endif; ?>
<div class="infoSection parallax-bottom">
    <?php if ($about_enkl_dziwnow_sec4_header_text = get_field('about_enkl_dziwnow_sec4_header_text')) : ?>
        <div class="text">
            <?php echo $about_enkl_dziwnow_sec4_header_text; ?>
        </div>
    <?php endif; ?>
    <?php if ($about_enkl_dziwnow_sec4_header_title = get_field('about_enkl_dziwnow_sec4_header_title')) : ?>
        <div class="title">
            <?php echo $about_enkl_dziwnow_sec4_header_title; ?>
        </div>
    <?php endif; ?>
</div>
<div class="infoBgSection" style="background:url(<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/bg_about_page_3.jpg) center center no-repeat;
         background-size:cover;">
    <div class="box">
        <?php if ($about_enkl_dziwnow_sec4_title = get_field('about_enkl_dziwnow_sec4_title')) : ?>
            <div class="title ek-fadein-dziwnowek">
                <?php echo $about_enkl_dziwnow_sec4_title; ?>
            </div>
        <?php endif; ?>
        <?php if ($about_enkl_dziwnow_sec4_text = get_field('about_enkl_dziwnow_sec4_text')) : ?>
            <div class="description ek-fadein-dziwnowek">
                <?php echo $about_enkl_dziwnow_sec4_text; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="infoBgSection right" style="background:url(<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/bg_about_page_4.jpg) center center no-repeat;
         background-size:cover;">
    <div class="box">
        <?php if ($about_enkl_dziwnow_sec5_title = get_field('about_enkl_dziwnow_sec5_title')) : ?>
            <div class="title ek-fadein-dziwnowek">
                <?php echo $about_enkl_dziwnow_sec5_title; ?>
            </div>
        <?php endif; ?>
        <?php if ($about_enkl_dziwnow_sec5_text = get_field('about_enkl_dziwnow_sec5_text')) : ?>
            <div class="description ek-fadein-dziwnowek">
                <?php echo $about_enkl_dziwnow_sec5_text; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="nextPageBox">
    <a href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/lokalizacja">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/bgs/location_link.jpg" class="img-fluid" alt="" />
        <div class="button">Lokalizacja</div>
    </a>
</div>

<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>