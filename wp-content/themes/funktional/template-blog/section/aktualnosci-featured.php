<?php $allargs = array(
    'post_type' => 'aktualnosci_cpt',
    'posts_per_page' => -1,
    'orderby' => 'type',
    'order' => 'ASC',
);
// The Query
$alloop = new WP_Query($allargs);
while ($alloop->have_posts()) : $alloop->the_post(); ?>
    <?php if (get_field('wyrozniony_post_aktualności')) : ?>
        <div class="blog-featured">
            <div class="row">
                <div class="col-lg-6">
                    <a href="<?php the_permalink(); ?>" class="blog-featured__img">
                        <span>CZYTAJ CAŁOŚĆ</span>
                        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                        <img src="<?php echo $url ?>" />
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="blog-featured__desc">
                        <div class="blog-featured__tags">
                            <div class="blog-featured__tags-parent">
                                <?php
                                echo get_the_title($post->post_parent);
                                ?>
                            </div>
                            <div class="blog-featured__line"></div>
                            <div class="blog-featured__tags-taxonomy">
                                <?php
                                $subterms = get_the_terms($post->ID, 'localization');
                                foreach ($subterms as $term) : ?>
                                    <div><?php echo $term->name ?></div><span></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <h3 class="blog-featured__name"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="blog-featured__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="blog-featured__info">
                            <div class="blog-datename-info">
                                <?php
                                // Get the author ID    
                                $user_id = get_the_author_meta('ID');
                                $user_url =  get_author_posts_url($user_id);
                                $user_image = get_field('zdjecie_autora', 'user_' .  $user_id);
                                $user_name = get_author_name($user_id);
                                ?>
                                <a href="<?php echo get_author_posts_url($user_id); ?>" class="blog-datename-info-author">
                                    <div class="blog-datename-info-author__img">
                                        <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($user_image['alt']); ?>" />
                                    </div>
                                    <div class="blog-datename-info-author__name">
                                        <?php echo $user_name; ?>
                                    </div>
                                </a>
                                <div class="blog-datename-info__data"><?php echo get_the_date('F j Y'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>