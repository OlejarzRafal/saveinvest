<?php get_header();


?>

<div class="page-author">
    <!-- SECTION NAV -->
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
    <div class="author-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Autorzy</h1>
                    <div class="author-header__wrapper">
                        <?php
                        $user_id = get_queried_object_id();
                        $user_data = get_userdata($user_id);
                        $user_name = $user_data->display_name;
                        $user_image = get_field('zdjecie_autora', 'user_' .  $user_id);
                        $user_position = get_field('stanowisko_autora', 'user_' . $user_id);
                        $user_description = get_field('opis_autora', 'user_' . $user_id); ?>

                        <div class="author-header__img">
                            <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($user_image['alt']); ?>" />
                        </div>
                        <div class="author-header-content">
                            <h2 class="author-header-content__name"><?php echo $user_name; ?></h2>
                            <h3 class="author-header-content__position"> <?php echo $user_position; ?></h3>
                            <div class="author-header-content__desc"><?php echo $user_description; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="author-posts">
        <div class="container">
            <h2 class="author-posts__header">Artykuły autora</h2>
            <div class="author-posts__postList">
                <?php
                $args = array(
                    'post_type' => array('pytania_cpt', 'ekspert_cpt', 'aktualnosci_cpt'),
                    'author__in' => get_the_author_meta('ID'),
                    's' => $_GET['s'],
                    'posts_per_page' => 10,
                    'orderby' => 'type',
                    'order' => 'ASC',
                    'paged' => $_GET['page'],
                );
                // The Query
                $search_query = new WP_Query($args);

                while ($search_query->have_posts()) : $search_query->the_post(); ?>
                    <div class="author-posts__post">
                        <div class="author-posts__postCpt"> <?php echo get_post_type_object(get_post_type())->label; ?></div>
                        <h4 class="author-posts__postName "> <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="author-posts__postExcerpt"><?php the_excerpt(); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <!-- SLIDER AUTHORS -->
    <div class="slider-authors">
        <div class="container">
            <h2 class="slider-blog__header">Zobacz innych autorów</h2>
            <div class="slider-authors-loop swiper">
                <div class="swiper-wrapper">
                    <?php get_template_part('template-blog/slider/slider-autorzy'); ?>
                </div>
                <div class="slider-blog__nav">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>