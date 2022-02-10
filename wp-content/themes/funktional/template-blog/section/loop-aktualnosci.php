<!-- <?php if (!get_field('wyrozniony_wpis_na_stronie_zbiorczej_blog')) : ?>
    <a href="<?php echo get_permalink(); ?>" class="slider-aktualnosci-loop__item swiper-slide">
        <div class="slider-aktualnosci-loop__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>">
        </div>

        <div class="slider-aktualnosci-loop__content">
            <div class="slider-aktualnosci-loop__terms">
                <?php
                $terms = get_the_terms($post->ID, 'localization');
                foreach ($terms as $term) : ?>
                    <div><?php echo $term->name ?></div><span></span>
                <?php endforeach; ?>
            </div>

            <h3 class="slider-aktualnosci-loop__header">
                <?php the_title(); ?>
            </h3>
            <div class="slider-aktualnosci-loop__excerpt">
                <?php the_excerpt(); ?>
            </div>
            <div class="slider-aktualnosci-loop__info">
                <?php
                // Get the author ID    
                $author_id = get_the_author_meta('ID');
                $authorName = get_author_name($author_id);
                ?>
                <div class="slider-aktualnosci-loop__author">
                    <?php echo $authorName; ?>
                </div>
                <div class="slider-aktualnosci-loop__data">
                    <?php echo get_the_date('F j Y'); ?>
                </div>
            </div>
        </div>
    </a>
<?php endif; ?>  -->