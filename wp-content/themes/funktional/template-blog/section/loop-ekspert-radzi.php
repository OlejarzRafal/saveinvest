<!-- <?php if (!get_field('wyrozniony_wpis_na_stronie_zbiorczej_blog')) : ?>
<a href="<?php echo get_permalink(); ?>" class="slider-expert-loop__item swiper-slide">
    <div class="slider-expert-loop__terms">
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

    <div class="slider-expert-loop__authors">
        <div class="slider-expert-loop__authorimg">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>">
        </div>

        <?php
        $expterms = get_the_terms($post->ID, 'expert');
        foreach ($expterms as $term) : ?>
            <span class="slider-expert-loop__authorname"><?php echo $term->name ?> </span>
            <?php break; ?>
        <?php endforeach; ?>
    </div>
</a>
<?php endif;?> -->