<?php
/*
Template Name: Ekspert radzi ( główna)
Template Post Type: ekspert_cpt
*/

get_header();  ?>
<div class="page-blog">
    <div class="ekspertRadzi">
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
        <div class="container">
            <div class="ekspertRadzi-header">
                <h1 class="page-blog__header"><?php the_field('naglowek_ekspert_radzi_blog','423');?></h1>
            </div>
        </div>
        <?php if ($numer_wpisu_ekspert_radzi = get_field('numer_wpisu_ekspert_radzi')) : ?>
            <?php echo esc_html($numer_wpisu_ekspert_radzi); ?>
        <?php endif; ?>
        <div class="ekspertRadzi__posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- TUTAJ LISTA WPISÓW -->
                        <div class="ekspertRadzi__postList"></div>
                        <!-- <div class="sticky-anchor-stop"></div> -->
                        <div class="ekspertRadzi__loadMore btn">ZOBACZ WIĘCEJ</div>
                        <div class="ekspertRadzi__noPosts">Brak wpisów z danymi kryteriami</div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <!-- TUTAJ FILTRACJA -->
                        <!-- <div class="sticky-anchor"></div> -->
                        <div class="news-filter">
                            <h4 class="news-filter__header">TEMATY</h4>
                            <ul class="news-filter__list ekspertRadzi__termList">
                                <li id="subjects--all" class="news-filter__item ekspertRadzi__subjectsTerm" data-subject="all">
                                    Wszystkie
                                </li>
                                <?php
                                $subjects = get_terms(array(
                                    'taxonomy' => 'subjects',
                                    'hide_empty' => false,
                                ));
                                foreach ($subjects as $subject) : ?>
                                    <li id="subjects--<?php echo $subject->term_id; ?>" class="news-filter__item  ekspertRadzi__subjectsTerm" data-subject="<?php echo $subject->slug; ?>">
                                        <div class="news-filter__itemName">
                                            <?php echo $subject->name; ?>
                                        </div>
                                        <span class="news-filter__itemSeparator"></span>
                                        <div class="news-filter__itemCount">
                                            <?php echo $subject->count; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <h4 class="news-filter__header news-filter__header--2">NASI EKSPERCI</h4>
                            <ul class="news-filter__list ekspertRadzi__termList">
                                <li id="experts--all" class="news-filter__item ekspertRadzi__expertsTerm" data-expert="all">
                                    Wszyscy
                                </li>
                                <?php
                                $dont_include = array(1, 2, 6, 7, 9, 10, 11 );   // IDs not to include
                                $args = array(
                                    'exclude'      => $dont_include,
                                    'orderby'      => 'login',
                                    'order'        => 'DESC',
                                    'fields'       => 'all',
                                );
                                $expert = get_users($args);
                                // $expert = get_users();
                                foreach ($expert as $expert) : ?>
                                    <?php
                                    $expert_id =  $expert->ID;
                                    $expert_image = get_field('zdjecie_autora', 'user_' .  $expert_id); ?>
                                    <li id="experts--<?php echo $expert->display_name; ?>" class="news-filter__item news-filter__item--expert ekspertRadzi__expertsTerm" data-expert="<?php echo $expert_id; ?>">
                                        <div class="news-filter__itemImg">
                                            <img src="<?php echo esc_url($expert_image['url']); ?>" alt="<?php echo esc_attr($expert_image['alt']); ?>" />
                                        </div>
                                        <div class="news-filter__itemName">
                                            <?php echo $expert->display_name; ?>
                                        </div>
                                        <!-- <span class="news-filter__itemSeparator"></span> -->
                                        <!-- <div class="news-filter__itemCount">
                                            <?php echo $expert->count; ?>
                                        </div> -->
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>


                        <?php
                        $subjectGet = $_GET['subject'];
                        if (!empty($subjectGet)) :
                            echo '<input type="hidden" id="subjectCheck" value="' . $subjectGet . '">';
                        else :
                            echo '<input type="hidden" id="subjectCheck" value="all">';
                        endif;

                        $expertGet = $_GET['expert'];
                        if (!empty($expertGet)) :
                            echo '<input type="hidden" id="expertCheck" value="' . $expertGet . '">';
                        else :
                            echo '<input type="hidden" id="expertCheck" value="all">';
                        endif;

                        //make first page of posts always on load
                        echo '<input type="hidden" id="pageCheck" value="1">';
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="blog-bottom-info">
                            <div class="blog-bottom-info__desc">
                                <h4 class="blog-bottom-info__header"><?php the_field('naglowek_blok_kontaktowy_blog','423');?></span></h4>
                                <div class="blog-bottom-info__text"><?php the_field('tekst_blok_kontaktowy_blog','423');?></div>
                            </div>
                            <div class="blog-bottom-info__btn">
                                <a href="https://saveinvest.pl/#sec-contact" class="btn">SKONTAKTUJ SIĘ Z NAMI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider aktualnosci -->
            <?php get_template_part('template-blog/slider/slider-pytania'); ?>
        </div>
    </div>
</div>
<?php
get_footer(); ?>