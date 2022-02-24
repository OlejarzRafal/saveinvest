<!-- SLIDER EKSPERT RADZI -->
<div class="slider-expert slider-blog">
    <div class="container">
        <div class="slider-expert__ico">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/blog/ekspert-ico.png" alt="ekspert-ico">
        </div>
        <h2 class="slider-expert__header"><span>Ekspert </span>Saveinvest radzi</h2>
        <div class="slider-expert-loop swiper">
            <div class="swiper-wrapper">
                <?php
                $ekspertRadzi_Filtrations_args = array(
                    'post_type' => 'ekspert_cpt',
                    'posts_per_page' => 8,
                    'orderby' => 'date',
                    'post__not_in' => array(241),
                    'order' => 'DESC',
                );
                $loop = new WP_Query($ekspertRadzi_Filtrations_args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php if (!get_field('wyrozniony_wpis_na_stronie_zbiorczej_blog')) : ?>
                        <a href="<?php echo get_permalink(); ?>" class="slider-expert-loop__item swiper-slide">
                            <div class="slider-expert-loop__terms post-terms">
                                <?php
                                $subterms = get_the_terms($post->ID, 'subjects');
                                foreach ($subterms as $term) : ?>
                                    <div><?php echo $term->name ?></div><span></span>
                                <?php endforeach; ?>
                            </div>

                            <h3 class="slider-expert-loop__header">
                                <?php the_title(); ?>
                            </h3>
                            <div class="slider-expert-loop__excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php
                            $user_id = get_the_author_meta('ID');
                            $user_name = get_author_name($user_id);
                            $user_image = get_field('zdjecie_autora', 'user_' .  $user_id);
                            ?>
                            <div class="slider-expert-loop__authors">
                                <div class="slider-expert-loop__authorimg">
                                    <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($user_image['alt']); ?>" />
                                </div>

                                <div class="slider-expert-loop__author">
                                    <?php echo $user_name; ?>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endwhile;
                ?>
            </div>
            <div class="slider-blog__nav">
                <div class="swiper-pagination"></div>
                <a href="<?php echo get_home_url(); ?>/ekspert-saveinvest-radzi" class="btn">ZOBACZ WSZYSTKIE PORADY</a>
            </div>
        </div>
    </div>
</div>