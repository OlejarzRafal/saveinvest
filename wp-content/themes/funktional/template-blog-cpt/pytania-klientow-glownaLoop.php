<div class="customerQuestions__post news-post">
    <a href="<?php echo get_permalink(); ?>" class="news-post__img">
        <span>CZYTAJ CAŁOŚĆ</span>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </a>
    <div class="news-post__content">
        <div class="news-post__terms post-terms">
            <?php
            $terms = get_the_terms($post->ID, 'subjects_questions');
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
        <!-- <div class="news-post__info post-info">
            <?php  
            $author_id = get_the_author_meta('ID');
            $authorName = get_author_name($author_id);
            ?>
            <div class="post-info__author">
                <a href="<?php echo get_author_posts_url($author_id); ?>"><?php echo $authorName; ?></a>
            </div>
            <span></span>
            <div class="post-info__data">
                <?php echo get_the_date('F j Y'); ?>
            </div>
        </div> -->
    </div>
</div>