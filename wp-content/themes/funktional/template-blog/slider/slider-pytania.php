<!-- SLIDER PYTANIA KLIENTÓW-->
<div class="slider-pytania slider-blog">
        <div class="container">
            <h2 class="slider-blog__header">Pytania klientów</h2>
            <div class="slider-pytania-loop swiper">
                <div class="swiper-wrapper">
                    <?php
                    $questionFiltrations_args = array(
                        'post_type' => 'pytania_cpt',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post__not_in' => array(468),

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
                    <a href="<?php echo get_home_url(); ?>/pytania-klientow" class="btn">ZOBACZ WSZYSTKIE PYTANIA</a>
                </div>
            </div>
        </div>
    </div>
