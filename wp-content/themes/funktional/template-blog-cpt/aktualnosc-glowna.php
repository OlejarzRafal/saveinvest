<?php
/*
Template Name: Aktualności z terenów (główna)
Template Post Type: aktualnosci_cpt
*/

get_header();  ?>

<div class="page-blog">
    <div class="news-main">
        <div class="container">
            <div class="blog-sec-nav">
                <a href="<?php echo get_home_url(); ?>/blog" class="blog-sec-nav__back">
                    WRÓĆ DO BLOGA
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
        <div class="news-main__header">
            <div class="container">
                <!-- HEADER -->
                <h1 class="page-blog__header"><?php the_field('naglowek_aktualnosci_blog','423');?></h1>
                <!-- FEATURED -->
                <?php get_template_part('template-blog/section/aktualnosci-featured'); ?>
            </div>
        </div>


        <div class="news-main__posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- LISTA WPISÓW -->
                        <div class="news-main__postList"></div>
                        <div class="sticky-anchor-stop"></div>
                        <div class="news-main__loadMore btn ">ZOABCZ STARSZE</div>
                        <div class="news-main__noPosts">Brak wpisów z danymi kryteriami</div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <!-- FILTRACJA -->
                        <div class="sticky-anchor"></div>
                        <div class="news-filter">
                            <h4 class="news-filter__header">LOKALIZACJE</h4>
                            <ul class="news-filter__list news-main__termList">
                                <li id="locations--all" class="news-main__locationsTerm news-filter__item" data-location="all">
                                    <div class="news-filter__itemName">
                                        Wszystkie
                                    </div>
                                </li>
                                <?php
                                $locations = get_terms(array(
                                    'taxonomy' => 'localization',
                                    'hide_empty' => false,
                                ));
                                foreach ($locations as $location) : ?>
                                    <li id="locations--<?php echo $location->term_id; ?>" class="news-main__locationsTerm news-filter__item" data-location="<?php echo $location->slug; ?>">
                                        <div class="news-filter__itemName">
                                            <?php echo $location->name; ?>
                                        </div>
                                        <span class="news-filter__itemSeparator"></span>
                                        <div class="news-filter__itemCount">
                                            <?php echo $location->count; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php
                        $locationGet = $_GET['location'];
                        if (!empty($locationGet)) :
                            echo '<input type="hidden" id="locationCheck" value="' . $locationGet . '">';
                        else :
                            echo '<input type="hidden" id="locationCheck" value="all">';
                        endif;
                        //make first page of posts always on load
                        echo '<input type="hidden" id="pageCheck" value="1">';

                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider expert -->
        <?php get_template_part('template-blog/slider/slider-expert-radzi'); ?>
    </div>
</div>

<?php
get_footer(); ?>