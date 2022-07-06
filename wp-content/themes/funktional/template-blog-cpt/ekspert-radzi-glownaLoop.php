<div class="ekspertRadzi__post news-post">
    <!-- <div class="news-post__number">
        <?php if ($numer_wpisu_ekspert_radzi = get_field('numer_wpisu_ekspert_radzi')) : ?>
            <?php echo esc_html($numer_wpisu_ekspert_radzi); ?>
        <?php endif; ?>
    </div> -->
    <div class="news-post__content">
        <div class="news-post__terms post-terms">
            <?php
            $terms = get_the_terms($post->ID, 'subjects');
            foreach ($terms as $term) : ?>
                <div><?php echo $term->name ?></div><span></span>
            <?php endforeach; ?>
        </div>
        <a href="<?php echo get_permalink(); ?>" class="news-post__title">
            <h4><?php the_title(); ?></h4>
        </a>
        <div class="news-post__excerpt">
            <?php the_excerpt(); ?>
        </div>
        <?php
        $user_id = get_the_author_meta('ID');
        $user_name = get_author_name($user_id);
        $user_image = get_field('zdjecie_autora', 'user_' .  $user_id);
        ?>
        <a href="<?php echo get_author_posts_url($user_id); ?>" class="news-post__info post-info">

            <div class="post-info__img">
                <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($user_image['alt']); ?>" />
            </div>
            <div class="post-info__author">
                <?php echo $user_name; ?>
            </div>
        </a>
    </div>
</div>