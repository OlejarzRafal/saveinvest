<?php

/**
 * Template Name: Blog
 */
get_header(); ?>
<div class="page-blog">

    <!-- SECTION NAV -->
    <div class="container">
        <div class="blog-sec-nav">
            <a href="<?php echo get_home_url(); ?>" class="blog-sec-nav__back">
                WRÓĆ DO SAVEINVEST<span style="color:red"></span>
            </a>
            <div class="blog-sec-nav__search">
                <form action="<?php echo get_home_url(); ?>" method="get">
                    <input placeholder="Wyszukaj na blogu" type="text" name="s" value="<?php the_search_query(); ?>" />
                    <input type="hidden" name="page" value="1">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- SEC 1 -->
        <div class="blog-sec-1">
            <div class="row">
                <div class="col-xl-6">
                    <h1 class="blog-sec-1__header page-blog__header"><?php the_field('naglowek_blog_main_blog','423');?></h1>
                </div>
            </div>
        </div>
        <!-- FEATURED -->
        <?php get_template_part('template-blog/section/blog-featured'); ?>
    </div>
    <!-- slider expert -->
    <?php get_template_part('template-blog/slider/slider-expert-radzi'); ?>
    <!-- slider aktualnosci -->
    <?php get_template_part('template-blog/slider/slider-aktualnosci'); ?>
    <!-- slider pytania -->
    <?php get_template_part('template-blog/slider/slider-pytania'); ?>
    <!-- SLIDER AUTHORS -->
    <div class="slider-authors">
        <div class="container">
            <h2 class="slider-blog__header">Autorzy</h2>
            <div class="slider-authors-loop swiper">
                <div class="swiper-wrapper">
                    <?php get_template_part('template-blog/slider/slider-autorzy'); ?>
                </div>
                <div class="slider-blog__nav">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</div>