<?php

get_header();  ?>

<?php while (have_posts()) : the_post();
    $user_id = get_the_author_meta('ID');
    $author_image = get_field('zdjecie_autora', 'user_' .  $user_id);
    $author_name = get_the_author_meta('display_name');
    $author_url = get_author_posts_url($user_id);
    $author_position = get_field('stanowisko_autora', 'user_' . $user_id);
    $author_description = get_field('opis_autora', 'user_' . $user_id); ?>
    <div class="page-blog">
        <div class="singlePost">
            <div class="container">
                <div class="blog-sec-nav">
                    <a href="<?php echo get_home_url(); ?>/pytania-klientow" class="blog-sec-nav__back">
                        WRÓĆ DO PYTANIA KLIENTÓW
                    </a>
                </div>
            </div>
            <div class="container">
                <!-- hero -->
                <div class="singlePost-hero">
                    <h1 class="singlePost-hero__header"><?php the_title(); ?></h1>
                    <div class="singlePost-info">
                        <div class="singlePost-datainfo">
                            <div class="singlePost-datainfo__author">
                                <div class="singlePost-datainfo__authorImg">
                                    <img src="<?php echo esc_url($author_image['url']); ?>" alt="<?php echo esc_attr($author_image['alt']); ?>" />
                                </div>
                                <div class="singlePost-datainfo__authorName">
                                    <a href="<?php echo  $author_url  ?>">
                                        <?php echo $author_name; ?>
                                    </a>
                                </div>
                            </div>
                            <span class="singlePost-datainfo__sep"></span>
                            <div class="singlePost-datainfo__data">
                                <?php echo get_the_date('F j Y'); ?>
                            </div>
                        </div>
                        <div class="singlePost-terms">
                            <?php
                            $terms = get_the_terms($post->ID, 'subjects_questions');
                            foreach ($terms as $term) : ?>
                                <div class="singlePost-terms__item"><?php echo $term->name ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php
                    $zdjecie_hero_post = get_field('zdjecie_hero_post'); ?>
                    <div class="singlePost-hero__img <?php if (!$zdjecie_hero_post) : ?> singlePost-hero__img--no-image <?php endif; ?>">
                        <?php if ($zdjecie_hero_post) : ?>
                            <img src="<?php echo esc_url($zdjecie_hero_post['url']); ?>" alt="<?php echo esc_attr($zdjecie_hero_post['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <!-- content -->
                <div class="singlePost-wrap">
                    <div class="row">
                        <div class="col-lg-10">
                            <!-- CONTENT -->
                            <div class="singlePost-content">
                                <?php the_content(); ?>
                            </div>
                            <!-- author -->
                            <div class="singlePost-authorFull">
                                <div class="singlePost-authorFull__img">
                                    <img src="<?php echo esc_url($author_image['url']); ?>" alt="<?php echo esc_attr($author_image['alt']); ?>" />
                                </div>
                                <div class="singlePost-authorFull__content">
                                    <h2 class="singlePost-authorFull__name"> <a href="<?php echo  $author_url  ?>"><?php echo $author_name; ?></a></h2>
                                    <h3 class="singlePost-authorFull__position"> <?php echo $author_position; ?></h3>
                                    <div class="singlePost-authorFull__desc"><?php echo $author_description; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 offset-lg-1">
                            <!-- SOCIAL -->
                            <?php $url = urlencode(get_permalink()); ?>
                            <div class="share-wrap">
                                <ul class="share">
                                    <li class="share__item share__item--fb">
                                        <a href="https://www.facebook.com/sharer.php?u='<?php echo $url; ?>'" target="_blank">
                                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/blog/ico-fb.svg'); ?>
                                        </a>
                                    </li>

                                    <li class="share__item share__item--tw">
                                        <a href="https://twitter.com/share?&text='<?php the_title(); ?>'&url='<?php echo $url; ?>'" target="_blank">
                                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/blog/ico-tw.svg'); ?>
                                        </a>
                                    </li>
                                    <li class="share__item share__item--in">
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url='<?php echo $url; ?>'" target="_blank">
                                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/blog/ico-in.svg'); ?>
                                        </a>
                                    </li>
                                </ul>
                                <div class="share-wrap__text">
                                    <span>Udostępnij!</span>
                                    <span>Spodobał Ci się artykuł?</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SLIDER PYTANIA KLIENTÓW-->
                <div class="slider-pytania slider-blog">
                    <div class="container">
                        <h2 class="slider-blog__header">Przeczytaj także</h2>
                        <div class="slider-pytania-loop swiper">
                            <div class="swiper-wrapper">
                                <?php
                                $postid = get_the_ID();
                                $questionFiltrations_args = array(
                                    'post_type' => 'pytania_cpt',
                                    'posts_per_page' => 8,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post__not_in' => array(250, $postid),
                                );
                                $loop = new WP_Query($questionFiltrations_args);
                                while ($loop->have_posts()) : $loop->the_post(); ?>
                                    <?php if (!get_field('wyrozniony_wpis_na_stronie_zbiorczej_blog')) : ?>
                                        <a href="<?php echo get_permalink(); ?>" class="slider-pytania-loop__item swiper-slide">
                                            <div class="slider-pytania-loop__img">
                                                <span>CZYTAJ CALOŚĆ</span>
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>">
                                            </div>

                                            <div class="slider-pytania-loop__content">
                                                <div class="slider-pytania-loop__terms post-terms">
                                                    <?php
                                                    $terms = get_the_terms($post->ID, 'subjects_questions');
                                                    foreach ($terms as $term) : ?>
                                                        <div><?php echo $term->name ?></div><span></span>
                                                    <?php endforeach; ?>
                                                </div>

                                                <h3 class="slider-pytania-loop__header">
                                                    <?php the_title(); ?>
                                                </h3>
                                                <!-- <div class="slider-pytania-loop__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div> -->
                                                <!-- <div class="slider-pytania-loop__info post-info">
                                        <?php
                                        // Get the author ID    
                                        $author_id = get_the_author_meta('ID');
                                        $authorName = get_author_name($author_id);
                                        ?>
                                        <div class="slider-pytania-loop__author">
                                            <?php echo $authorName; ?>
                                        </div>
                                        <span></span>
                                        <div class="slider-pytania-loop__data">
                                            <?php echo get_the_date('F j Y'); ?>
                                        </div>
                                    </div> -->
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile;
                                ?>
                            </div>
                            <div class="slider-blog__nav">
                                <div class="swiper-pagination"></div>
                                <a href="#" class="btn">ZOBACZ WSZYSTKIE PYTANIA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php
get_footer(); ?>