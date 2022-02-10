<?php

get_header(); ?>

<div class="page-searchResult page-blog">

    <div class="page-searchResult-top">
        <!-- SECTION NAV -->
        <div class="container">
            <div class="blog-sec-nav">
                <a href="<?php echo get_home_url(); ?>" class="blog-sec-nav__back">
                    WRÓĆ DO SAVEINVEST
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
            <div class="page-searchResult__header">
                <div class="row">
                    <div class="col-12">
                        <h1 class="page-blog__header">Blog - dzielimy <br> się <span>więdzą</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="searchResults">
        <div class="container">

            <div class="searchResults__header">
                <h4><?php echo 'Wynik wyszukiwania dla: <span>' . get_query_var('s') . '</span>';  ?></h4>
            </div>

            <div class="searchResults__postList"></div>

            <?php echo '<div class="searchResults__noPosts"><h4>' . 'Brak wyników wyszukiwania </h4></div>'; ?>

            <div class="btn searchResults__loadMore">Zobacz wiecej</div>
            <input id="checkSearchVal" type="hidden" value="<?php echo $_GET['s']; ?>">
            <!-- make first page of posts always on load -->
            <input type="hidden" id="pageCheck" value="1">
        </div>
    </section>


    <!-- slider aktualnosci -->
    <?php get_template_part('template-blog/slider/slider-aktualnosci'); ?>

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
</div>
<?php get_footer(); ?>