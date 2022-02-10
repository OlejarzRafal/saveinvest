<?php
/*
Template Name: Pytania klientów  ( główna)
Template Post Type: pytania_cpt
*/

get_header();  ?>

<div class="page-blog">
    <div class="customerQuestions">
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
            <div class="customerQuestions-header">
                <!-- HEADER -->
                <h1 class="page-blog__header"><?Php the_field('naglowek_pytania_klientow_blog','423');?></h1>
                <!-- FEATURED -->
                <div class="customerQuestions-header__desc">
                    <div class="customerQuestions-header__desc--line1">
                        <?Php the_field('tekst_pod_naglowkiem_1_blog','423');?>
                    </div>
                    <div class="customerQuestions-header__desc--line2">
                        <?Php the_field('tekst_pod_naglowkiem_2_blog','423');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="customerQuestions__posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- LISTA WPISÓW -->
                        <div class="customerQuestions__postList"></div>
                        <div class="sticky-anchor-stop"></div>
                        <div class="customerQuestions__loadMore btn ">ZOABCZ STARSZE</div>
                        <div class="customerQuestions__noPosts">Brak wpisów z danymi kryteriami</div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <!-- TUTAJ FILTRACJA -->
                        <div class="sticky-anchor"></div>
                        <div class="news-filter">
                            <h4 class="news-filter__header">TEMATY</h4>
                            <ul class="news-filter__list customerQuestions__termList">
                                <li id="questions--all" class="news-filter__item customerQuestions__questionsTerm" data-question="all">
                                    Wszystkie
                                </li>
                                <?php
                                $questions = get_terms(array(
                                    'taxonomy' => 'subjects_questions',
                                    'hide_empty' => false,
                                ));
                                foreach ($questions as $question) : ?>
                                    <li id="questions--<?php echo $question->term_id; ?>" class="news-filter__item customerQuestions__questionsTerm" data-question="<?php echo $question->slug; ?>">
                                        <div class="news-filter__itemName">
                                            <?php echo $question->name; ?>
                                        </div>
                                        <span class="news-filter__itemSeparator"></span>
                                        <div class="news-filter__itemCount">
                                            <?php echo $question->count; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php
                        $questionGet = $_GET['question'];
                        if (!empty($questionGet)) :
                            echo '<input type="hidden" id="questionCheck" value="' . $questionGet . '">';
                        else :
                            echo '<input type="hidden" id="questionCheck" value="all">';
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
                                <h4 class="blog-bottom-info__header">Nie znalazłeś <span>odpowiedzi na swoje pytanie?</span></h4>
                                <div class="blog-bottom-info__text">Napisz do nas, chętnie odpowiemy na wszystkie Twoje pytania!</div>
                            </div>
                            <div class="blog-bottom-info__btn">
                                <a href="https://saveinvest.pl/#sec-contact" class="btn">SKONTAKTUJ SIĘ Z NAMI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider aktualnosci -->
        <?php get_template_part('template-blog/slider/slider-aktualnosci'); ?>
    </div>
</div>
<?php
get_footer(); ?>