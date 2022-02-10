<?php

/**
 * Template Name: Strona glowna
 */
get_header(); ?>

<section class="sec1 third-section animated" id="sec1">
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header__content">
                        <span class="section-header__mini el-fadein"><?php the_field('mini_header_fsec1'); ?></span>
                        <h2 class="section-header__header el-fadein"><?php the_field('naglowek_fsec1'); ?></h2>
                        <div class="section-header__text el-fadein"><?php the_field('tekst_pod_naglowkiem_fsec1'); ?></div>
                    </div>
                    <div class="section-header-more">
                        <h3 class="header-content header-content--dark-blue el-fadein"><?php the_field('naglowek_2_fsec1'); ?></h3>
                        <div class="section-header-more__text  section-header-more__text--1 el-fadein">
                            <?php the_field('tekst_pod_naglowkiem_2_fsec1'); ?>
                        </div>
                        <div class="section-header-more__text  section-header-more__text--2 el-fadein">
                            <?php the_field('tekst_pod_naglowkiem_22_fsec1'); ?>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="section-header__img">
                        <div class="reveal">
                            <?php
                            $grafika_fsec1 = get_field('grafika_fsec1');
                            if ($grafika_fsec1) : ?>
                                <img src="<?php echo esc_url($grafika_fsec1['url']); ?>" alt="<?php echo esc_attr($grafika_fsec1['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-xl-9 offset-xl-2">
                <div class="sec1-opinion">
                    <div class="sec1-opinion__text text-main text-main--dark-blue el-fadein">
                        <?php the_field('tekst_fsec1_opinia'); ?>
                    </div>
                    <div class="sec1-opinion__line el-fadein"></div>
                    <div class="sec1-opinion__name el-fadein"><?php the_field('autor_fsec1_opinia'); ?></div>
                    <span class="sec1-opinion__position el-fadein"><?php the_field('stanowisko_fsec1_opinia'); ?></span>
                    <div class="sec1-opinion__photo ">
                        <div class="reveal">
                            <?php
                            $zdjecie_fsec1_opinia = get_field('zdjecie_fsec1_opinia');
                            if ($zdjecie_fsec1_opinia) : ?>
                                <img src="<?php echo esc_url($zdjecie_fsec1_opinia['url']); ?>" alt="<?php echo esc_attr($zdjecie_fsec1_opinia['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec2-wrap">
    <div class="sec2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="header-content el-fadein"><?php the_field('naglowek_fp_sec2'); ?></h3>
                </div>
            </div>
            <div class="sec2-boxs">
                <div class="row">
                    <?php if (have_rows('logotypy_fp_sec2')) : ?>
                        <?php while (have_rows('logotypy_fp_sec2')) :
                            the_row(); ?>
                            <div class="col-lg-4 el-fadein">
                                <div class="sec2-box">
                                    <div class="sec2-box__img">
                                        <?php
                                        $grafika = get_sub_field('grafika');
                                        if ($grafika) : ?>
                                            <img src="<?php echo esc_url($grafika['url']); ?>" alt="<?php echo esc_attr($grafika['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec2-box__header">
                                        <?php if ($zloty_naglowek = get_sub_field('zloty_naglowek')) : ?>
                                            <?php echo $zloty_naglowek; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec2-box__text">
                                        <?php if ($tekst = get_sub_field('tekst')) : ?>
                                            <?php echo $tekst; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="opinion-wrap sec2-opinion">
        <div class="container">
            <div class="opinion">
                <div class="opinion__content">
                    <img class="opinion__quote el-fadein" src="<?php bloginfo('template_url'); ?>/assets/img/quote.png" alt="opinia">
                    <div class="opinion__text el-fadein">
                        <?php if ($opina_tekst_fp_sec2 = get_field('opina_tekst_fp_sec2')) : ?>
                            <?php echo $opina_tekst_fp_sec2; ?>
                        <?php endif; ?>
                    </div>
                    <div class="opinion__line el-fadein"></div>
                    <div class="opinion__name el-fadein"><?php if ($opinia_autor_fp_sec2 = get_field('opinia_autor_fp_sec2')) : ?>
                            <?php echo $opinia_autor_fp_sec2; ?>
                        <?php endif; ?></div>
                    <span class="opinion__position el-fadein"><?php if ($opinia_stanowisko_fpsec2 = get_field('opinia_stanowisko_fpsec2')) : ?>
                            <?php echo $opinia_stanowisko_fpsec2; ?>
                        <?php endif; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sec3">
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header__img">
                        <div class="reveal">
                            <?php
                            $grafika_fp_sec3 = get_field('grafika_fp_sec3');
                            if ($grafika_fp_sec3) : ?>
                                <img src="<?php echo esc_url($grafika_fp_sec3['url']); ?>" alt="<?php echo esc_attr($grafika_fp_sec3['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-header__content">
                        <span class="section-header__mini el-fadein"><?php if ($mini_naglowek_fp_sec3 = get_field('mini_naglowek_fp_sec3')) : ?>
                                <?php echo $mini_naglowek_fp_sec3; ?>
                            <?php endif; ?></span>
                        <h2 class="section-header__header el-fadein"><?php if ($naglowek_fp_sec3 = get_field('naglowek_fp_sec3')) : ?>
                                <?php echo $naglowek_fp_sec3; ?>
                            <?php endif; ?></h2>
                        <div class="section-header__text el-fadein"><?php if ($tekst_pod_naglowkiem_fp_sec3 = get_field('tekst_pod_naglowkiem_fp_sec3')) : ?>
                                <?php echo $tekst_pod_naglowkiem_fp_sec3; ?>
                            <?php endif; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sec3-boxs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec3-boxs__header">
                        <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec4 = get_field('naglowek_fp_sec4')) : ?>
                                <?php echo $naglowek_fp_sec4; ?>
                            <?php endif; ?></h3>
                    </div>
                </div>
            </div>
            <div class="sec3-boxs__wrap el-fadein">
                <div class="row">
                    <?php if (have_rows('ikony_opisowe_fp_sec4')) : ?>
                        <?php while (have_rows('ikony_opisowe_fp_sec4')) :
                            the_row(); ?>
                            <div class="col-lg-4 el-fadein">
                                <div class="sec3-box">
                                    <div class="sec3-box__img">
                                        <?php
                                        $grafika = get_sub_field('grafika');
                                        if ($grafika) : ?>
                                            <img src="<?php echo esc_url($grafika['url']); ?>" alt="<?php echo esc_attr($grafika['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec3-box__header">
                                        <?php if ($zloty_naglowek = get_sub_field('zloty_naglowek')) : ?>
                                            <?php echo $zloty_naglowek; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec3-box__text">
                                        <?php if ($tekst = get_sub_field('tekst')) : ?>
                                            <?php echo $tekst; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="specialist" id="team-specialist">
        <div class="container">
            <div class="specialist__header">
                <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec5 = get_field('naglowek_fp_sec5')) : ?>
                        <?php echo $naglowek_fp_sec5; ?>
                    <?php endif; ?></h3>
            </div>
            <div class="swiper spec-slider">
                <div class="swiper-wrapper ">
                    <?php if (have_rows('specjalisci_carousel_fp_sec5')) : ?>
                        <?php while (have_rows('specjalisci_carousel_fp_sec5')) :
                            the_row(); ?>
                            <div class="swiper-slide">
                                <div class="spec-slider-box">
                                    <?php
                                    $grafika = get_sub_field('grafika');
                                    if ($grafika) : ?>
                                        <img src="<?php echo esc_url($grafika['url']); ?>" alt="<?php echo esc_attr($grafika['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="spec-slider-box__name">
                                        <?php if ($imie_i_nazwisko = get_sub_field('imie_i_nazwisko')) : ?>
                                            <?php echo $imie_i_nazwisko; ?>
                                        <?php endif; ?>
                                    </div>
                                    <span class="spec-slider-box__position"><?php if ($stanowisko = get_sub_field('stanowisko')) : ?>
                                            <?php echo $stanowisko; ?>
                                        <?php endif; ?></span>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="opinion-wrap sec3-opinion">
        <div class="container">
            <div class="opinion">
                <div class="opinion__content">
                    <img class="opinion__quote el-fadein" src="<?php bloginfo('template_url'); ?>/assets/img/quote.png" alt="opinia">
                    <div class="opinion__text el-fadein">
                        <?php if ($tekst_opini_fp_sec5 = get_field('tekst_opini_fp_sec5')) : ?>
                            <?php echo $tekst_opini_fp_sec5; ?>
                        <?php endif; ?>
                    </div>
                    <div class="opinion__line el-fadein"></div>
                    <div class="opinion__name el-fadein"><?php if ($autor_fp_sec5 = get_field('autor_fp_sec5')) : ?>
                            <?php echo  $autor_fp_sec5; ?>
                        <?php endif; ?></div>
                    <span class="opinion__position el-fadein"><?php if ($stanowiskonazwa_fp_sec5 = get_field('stanowiskonazwa_fp_sec5')) : ?>
                            <?php echo $stanowiskonazwa_fp_sec5; ?>
                        <?php endif; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec4">
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-header__content">
                        <span class="section-header__mini el-fadein"><?php if ($mini_naglowek_fp_sec6 = get_field('mini_naglowek_fp_sec6')) : ?>
                                <?php echo $mini_naglowek_fp_sec6; ?>
                            <?php endif; ?></span>
                        <h2 class="section-header__header el-fadein"><?php if ($naglowek_fp_sec6 = get_field('naglowek_fp_sec6')) : ?>
                                <?php echo $naglowek_fp_sec6; ?>
                            <?php endif; ?></h2>
                        <div class="section-header__text el-fadein"><?php if ($teskt_pod_naglowkiem_fp_sec6 = get_field('teskt_pod_naglowkiem_fp_sec6')) : ?>
                                <?php echo $teskt_pod_naglowkiem_fp_sec6; ?>
                            <?php endif; ?></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-header__img">
                        <div class="reveal">
                            <?php
                            $grafika_fp_sec6 = get_field('grafika_fp_sec6');
                            if ($grafika_fp_sec6) : ?>
                                <img src="<?php echo esc_url($grafika_fp_sec6['url']); ?>" alt="<?php echo esc_attr($grafika_fp_sec6['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec4-boxs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec4-boxs__header">
                        <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec7 = get_field('naglowek_fp_sec7')) : ?>
                                <?php echo $naglowek_fp_sec7; ?>
                            <?php endif; ?></h3>
                    </div>
                </div>
            </div>
            <div class="sec4-boxs__wrap">
                <div class="row">
                    <?php if (have_rows('ikony_opisowe_fp_sec7')) : ?>
                        <?php while (have_rows('ikony_opisowe_fp_sec7')) :
                            the_row(); ?>
                            <div class="col-lg-4 el-fadein">
                                <div class="sec4-box">
                                    <div class="sec4-box__img">
                                        <?php
                                        $grafika = get_sub_field('grafika');
                                        if ($grafika) : ?>
                                            <img src="<?php echo esc_url($grafika['url']); ?>" alt="<?php echo esc_attr($grafika['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec4-box__header">
                                        <?php if ($zloty_naglowek = get_sub_field('zloty_naglowek')) : ?>
                                            <?php echo $zloty_naglowek; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec4-box__text">
                                        <?php if ($tekst_pod_naglowkiem = get_sub_field('tekst_pod_naglowkiem')) : ?>
                                            <?php echo $tekst_pod_naglowkiem; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec5">
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-header__img">
                        <div class="reveal">
                            <?php
                            $grafika_fp_sec8 = get_field('grafika_fp_sec8');
                            if ($grafika_fp_sec8) : ?>
                                <img src="<?php echo esc_url($grafika_fp_sec8['url']); ?>" alt="<?php echo esc_attr($grafika_fp_sec8['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-header__content">
                        <span class="section-header__mini el-fadein"><?php if ($mini_naglowek_fp_sec8 = get_field('mini_naglowek_fp_sec8')) : ?>
                                <?php echo $mini_naglowek_fp_sec8; ?>
                            <?php endif; ?></span>
                        <h2 class="section-header__header el-fadein"><?php if ($naglowek_fp_sec8 = get_field('naglowek_fp_sec8')) : ?>
                                <?php echo $naglowek_fp_sec8; ?>
                            <?php endif; ?></h2>
                        <div class="section-header__text el-fadein"><?php if ($tekst_pod_naglowkiem_fp_sec8 = get_field('tekst_pod_naglowkiem_fp_sec8')) : ?>
                                <?php echo $tekst_pod_naglowkiem_fp_sec8; ?>
                            <?php endif; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="plots-wrap" id="plots">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="plots-wrap__header">
                        <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec9 = get_field('naglowek_fp_sec9')) : ?>
                                <?php echo $naglowek_fp_sec9; ?>
                            <?php endif; ?></h3>
                    </div>
                </div>
            </div>
            <div class="plots">
                <div class="row">
                    <?php if (have_rows('dzialka_fp_sec9')) : ?>

                        <?php while (have_rows('dzialka_fp_sec9')) :
                            the_row(); ?>
                            <div class="col-md-6 col-xl-4">
                                <a href="<?php if ($link_do_inwestycji = get_sub_field('link_do_inwestycji')) : ?><?php echo $link_do_inwestycji; ?><?php endif; ?>" class="plot <?php if (!get_sub_field('inwestycja_dostepna')) : ?> plot--empty  <?php endif; ?> " target="_blank">
                                    <div class="plot__img">
                                        <?php
                                        $grafika = get_sub_field('grafika');
                                        if ($grafika) : ?>
                                            <img src="<?php echo esc_url($grafika['url']); ?>" alt="<?php echo esc_attr($grafika['alt']); ?>" />
                                        <?php endif; ?>
                                        <div class="plot__hover-info">
                                            <span>ZOBACZ DZIAŁKI</span>
                                        </div>
                                        <div class="plot__logo">
                                            <?php
                                            $logotyp_na_grafice = get_sub_field('logotyp_na_grafice');
                                            if ($logotyp_na_grafice) : ?>
                                                <img src="<?php echo esc_url($logotyp_na_grafice['url']); ?>" alt="<?php echo esc_attr($logotyp_na_grafice['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <?php if (!get_sub_field('inwestycja_dostepna')) : ?>
                                            <div class="plot__img--empty">
                                               <?php if ($tekst_na_zdjeciu_dla_inwestycji_niedostepnej = get_sub_field('tekst_na_zdjeciu_dla_inwestycji_niedostepnej')) : ?>
                                                <span>  <?php echo esc_html($tekst_na_zdjeciu_dla_inwestycji_niedostepnej); ?> </span>
                                                    <?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    <div class="plot__content">
                                        <h4 class="plot__name"><?php if ($nazwa_inwestycji = get_sub_field('nazwa_inwestycji')) : ?>
                                                <?php echo esc_html($nazwa_inwestycji); ?>
                                            <?php endif; ?></h4>
                                        <?php if (get_sub_field('inwestycja_dostepna')) : ?>
                                            <div class="plot__desc">
                                                <div class="plot__tag-wrap">
                                                    <?php if (have_rows('flagi_informacyjne')) : ?>
                                                        <?php while (have_rows('flagi_informacyjne')) :
                                                            the_row(); ?>
                                                            <?php if ($tekst_flagi = get_sub_field('tekst_flagi')) : ?>
                                                                <span class="plot__tag">
                                                                    <?php echo esc_html($tekst_flagi); ?>
                                                                </span>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <span class="plot__price"><?php if ($informacja_o_cenach = get_sub_field('informacja_o_cenach')) : ?>
                                                        <?php echo $informacja_o_cenach; ?>
                                                    <?php endif; ?></span>
                                            </div>
                                        <?php else : ?>
                                            <div class="plot__desc">
                                                <div class="plot__empty-desc">
                                                    <?php the_sub_field('tekstopis_pod_inwestycja_niedostepna'); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="plots__se-more el-fadein">
                            <a href="#" class="btn">ZOBACZ WIĘCEJ DZIAŁEK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="sec6" id="sec6-profit">
    <div class="sec6-profit">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec6-profit__header">
                        <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec10 = get_field('naglowek_fp_sec10')) : ?>
                                <?php echo $naglowek_fp_sec10; ?>
                            <?php endif; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="profit-list">
                        <h4 class="profit-list__header el-fadein"><?php if ($lista_naglowek_fp_sec10 = get_field('lista_naglowek_fp_sec10')) : ?>
                                <?php echo $lista_naglowek_fp_sec10; ?>
                            <?php endif; ?></h4>
                        <div class="profit-list__header2 el-fadein">
                            <?php if ($lista_naglowek_2_fp_sec10 = get_field('lista_naglowek_2_fp_sec10')) : ?>
                                <?php echo $lista_naglowek_2_fp_sec10; ?>
                            <?php endif; ?>
                        </div>
                        <ul class="profit-list__list">
                            <?php if (have_rows('lista_fp_sec10')) : ?>
                                <?php while (have_rows('lista_fp_sec10')) :
                                    the_row(); ?>
                                    <li class="el-fadein">
                                        <?php if ($wiersz = get_sub_field('wiersz')) : ?>
                                            <?php echo $wiersz; ?>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec6-profit__img">
                        <div class="reveal">


                            <?php
                            $grafika_fp_sec10 = get_field('grafika_fp_sec10');
                            if ($grafika_fp_sec10) : ?>
                                <img src="<?php echo esc_url($grafika_fp_sec10['url']); ?>" alt="<?php echo esc_attr($grafika_fp_sec10['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec6-guarantee">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if ($naglowek_fp_sec11 = get_field('naglowek_fp_sec11')) : ?>
                        <div class="sec6-guarantee__header">
                            <h3 class="header-content header-content--dark-blue el-fadein">
                                <?php echo $naglowek_fp_sec11; ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ($tekst_pod_naglowkiem_fp_sec11 = get_field('tekst_pod_naglowkiem_fp_sec11')) : ?>
                        <div class="sec6-guarantee__text el-fadein">
                            <?php echo $tekst_pod_naglowkiem_fp_sec11; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="sec6-guarantee-boxs">
                <div class="row">
                    <?php if (have_rows('infowykresy_fp_sec11')) : ?>
                        <?php while (have_rows('infowykresy_fp_sec11')) :
                            the_row(); ?>
                            <div class="col-md-6 col-xl-4 el-fadein order order-<?php echo get_sub_field('numer_dla_mobile'); ?>">
                                <div class="sec6-guarantee-box">
                                    <div class="sec6-guarantee-box__logo">
                                        <?php
                                        $logotyp_inwestycji = get_sub_field('logotyp_inwestycji');
                                        if ($logotyp_inwestycji) : ?>
                                            <img src="<?php echo esc_url($logotyp_inwestycji['url']); ?>" alt="<?php echo esc_attr($logotyp_inwestycji['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec6-guarantee-box__chart">
                                        <?php
                                        $wykres_inwestycji = get_sub_field('wykres_inwestycji');
                                        if ($wykres_inwestycji) : ?>
                                            <img src="<?php echo esc_url($wykres_inwestycji['url']); ?>" alt="<?php echo esc_attr($wykres_inwestycji['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="sec6-guarantee-mobile swiper">
                <div class="swiper-wrapper">
                    <?php if (have_rows('infowykresy_fp_sec11')) : ?>
                        <?php while (have_rows('infowykresy_fp_sec11')) :
                            the_row(); ?>
                            <div class="swiper-slide">
                                <div class="order order-<?php echo get_sub_field('numer_dla_mobile'); ?>">
                                    <div class="sec6-guarantee-box">
                                        <div class="sec6-guarantee-box__logo">
                                            <?php
                                            $logotyp_inwestycji = get_sub_field('logotyp_inwestycji');
                                            if ($logotyp_inwestycji) : ?>
                                                <img src="<?php echo esc_url($logotyp_inwestycji['url']); ?>" alt="<?php echo esc_attr($logotyp_inwestycji['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sec6-guarantee-box__chart">
                                            <?php
                                            $wykres_inwestycji = get_sub_field('wykres_inwestycji');
                                            if ($wykres_inwestycji) : ?>
                                                <img src="<?php echo esc_url($wykres_inwestycji['url']); ?>" alt="<?php echo esc_attr($wykres_inwestycji['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>
    <div class="sec6-darkbg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec6-darkbg__content">
                        <h3 class="el-fadein"><?php if ($naglowek_fp_sec12 = get_field('naglowek_fp_sec12')) : ?>
                                <?php echo $naglowek_fp_sec12; ?>
                            <?php endif; ?></h3>
                        <p class="text-main el-fadein"><?php if ($tekst_pod_naglowkiem = get_field('tekst_pod_naglowkiem')) : ?>
                                <?php echo $tekst_pod_naglowkiem; ?>
                            <?php endif; ?></p>
                    </div>
                    <div class="sec6-darkbg__img">
                        <?php
                        $grafika_fp_sec12 = get_field('grafika_fp_sec12');
                        if ($grafika_fp_sec12) : ?>
                            <img src="<?php echo esc_url($grafika_fp_sec12['url']); ?>" alt="<?php echo esc_attr($grafika_fp_sec12['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OPINION -->
    <div class="opinion-wrap sec6-opinion">
        <div class="container">
            <div class="opinion">
                <div class="opinion__content">
                    <img class="opinion__quote el-fadein" src="<?php bloginfo('template_url'); ?>/assets/img/quote.png" alt="opinia">
                    <div class="opinion__text el-fadein">
                        <?php if ($opinia_tekst_fp_sec12 = get_field('opinia_tekst_fp_sec12')) : ?>
                            <?php echo $opinia_tekst_fp_sec12; ?>
                        <?php endif; ?>
                    </div>
                    <div class="opinion__line el-fadein"></div>
                    <div class="opinion__name el-fadein"><?php if ($opinia_autor_fp_sec12 = get_field('opinia_autor_fp_sec12')) : ?>
                            <?php echo $opinia_autor_fp_sec12; ?>
                        <?php endif; ?></div>
                    <span class="opinion__position el-fadein"><?php if ($opinia_stanowisko__nazwa_firmy_fp_sec12 = get_field('opinia_stanowisko__nazwa_firmy_fp_sec12')) : ?>
                            <?php echo $opinia_stanowisko__nazwa_firmy_fp_sec12; ?>
                        <?php endif; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec7-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec7">
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec13 = get_field('naglowek_fp_sec13')) : ?>
                                    <?php echo $naglowek_fp_sec13; ?>
                                <?php endif; ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <div class="sec7-content">
                                <div class="row">
                                    <?php if (have_rows('bloki_informacyjne_fp_sec13')) : ?>
                                        <?php while (have_rows('bloki_informacyjne_fp_sec13')) :
                                            the_row(); ?>
                                            <div class="col-md-4 el-fadein">
                                                <div class="sec7-content-box">
                                                    <div class="sec7-content-box__number" style="align-items: baseline;">
                                                        <?php if ($tekst_przed_liczba = get_sub_field('tekst_przed_liczba')) : ?>
                                                            <p><?php echo $tekst_przed_liczba; ?></p>
                                                        <?php endif; ?>
                                                        <span style="font-size:40px;"><?php if ($iczba = get_sub_field('iczba')) : ?>
                                                                <?php echo $iczba; ?>
                                                            <?php endif; ?></span>
                                                        <?php if ($tekst_po_liczbie = get_sub_field('tekst_po_liczbie')) : ?>
                                                            <p><?php echo $tekst_po_liczbie; ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="sec7-content-box__line"></div>
                                                    <div class="sec7-content-box__text">
                                                        <?php if ($tekst_w_dolnej_lini = get_sub_field('tekst_w_dolnej_lini')) : ?>
                                                            <?php echo $tekst_w_dolnej_lini; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec8__header">
                    <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec14 = get_field('naglowek_fp_sec14')) : ?>
                            <?php echo $naglowek_fp_sec14; ?>
                        <?php endif; ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="opinion">
            <div class="sec8-opinion swiper">
                <div class="swiper-wrapper">
                    <?php if (have_rows('opinie_karuzela_fp_sec14')) : ?>
                        <?php while (have_rows('opinie_karuzela_fp_sec14')) :
                            the_row(); ?>
                            <div class="swiper-slide">
                                <div class="opinion__content">
                                    <img class="opinion__quote el-fadein" src="<?php bloginfo('template_url'); ?>/assets/img/quote-dark.png" alt="opinia">
                                    <div class="opinion__text el-fadein">
                                        <?php if ($tekst_opini = get_sub_field('tekst_opini')) : ?>
                                            <?php echo $tekst_opini; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="opinion__line el-fadein"></div>
                                    <div class="opinion__name el-fadein"><?php if ($autor_opini = get_sub_field('autor_opini')) : ?>
                                            <?php echo $autor_opini; ?>
                                        <?php endif; ?></div>
                                    <span class="opinion__position  el-fadein"><?php if ($nazwa_firmy__stanowisko = get_sub_field('nazwa_firmy__stanowisko')) : ?>
                                            <?php echo $nazwa_firmy__stanowisko; ?>
                                        <?php endif; ?></span>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="opinion-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec9" id="sec-contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec9__header">
                    <h3 class="header-content header-content--dark-blue el-fadein"><?php if ($naglowek_fp_sec15 = get_field('naglowek_fp_sec15')) : ?>
                            <?php echo $naglowek_fp_sec15; ?>
                        <?php endif; ?></h3>
                </div>
                <div class="sec9__desc el-fadein">
                    <?php if ($tekst_pod_naglowkiem_fp_sec15 = get_field('tekst_pod_naglowkiem_fp_sec15')) : ?>
                        <?php echo $tekst_pod_naglowkiem_fp_sec15; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="sec9-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec9-contact__img">
                        <div class="reveal">
                            <?php
                            $grafika_fp_sec15 = get_field('grafika_fp_sec15');
                            if ($grafika_fp_sec15) : ?>
                                <img src="<?php echo esc_url($grafika_fp_sec15['url']); ?>" alt="<?php echo esc_attr($grafika_fp_sec15['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec9-form el-fadein">
                        <h3 class="sec9-form__header"><?php if ($tekst_z_numerem_telefonu_nad_formualrzem_fp_sec15 = get_field('tekst_z_numerem_telefonu_nad_formualrzem_fp_sec15')) : ?>
                                <?php echo $tekst_z_numerem_telefonu_nad_formualrzem_fp_sec15; ?>
                            <?php endif; ?></h3>
                        <div class="form">
                            <?php echo do_shortcode('[contact-form-7 id="6" title="Formularz kontaktowy"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>