<?php

/**
 * Template Name: Referencje
 */
get_header(); ?>


<section class="references">
    <div class="container">
        <div class="row consultation">
            <div class="col-12 col-lg-6">
                <?php if ($header_topic_references = get_field('header_topic_references')) : ?>
                    <div class="consultation__header-topic">
                        <?php echo esc_html($header_topic_references); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6 consultation__right-col">
                <?php if ($header_button_name_references = get_field('header_button_name_references')) : ?>
                    <a class="consultation__header-button" href="<?php the_permalink();?>#references-form">
                        <?php echo esc_html($header_button_name_references); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <div class="container hero-history-container">
        <div class="row hero-history">
            <?php $future_args = array(
                'post_type' => array('stories_cpt','referencespost_cpt','charitysupport_cpt'),
                'post_status' => 'publish',
                'orderby' => 'date',
                'order'   => 'DESC',
                'posts_per_page' => 1,
            );
            $loop = new WP_Query($future_args);
            ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php
                $postType = get_post_type();
                $postTypeObj = get_post_type_object($postType);
                ?>
                <div class="col-12 col-lg-6">
                    <?php
                    $big_photo_history_reference = get_field('big_photo_history_reference');
                    if ($big_photo_history_reference) : ?>
                        <img src="<?php echo esc_url($big_photo_history_reference['url']); ?>" alt="<?php echo esc_attr($big_photo_history_reference['alt']); ?>" />
                    <?php endif; ?>
                     <?php if (get_the_post_thumbnail_url()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 hero-history__right-col">
                    <div class="hero-history__right-main">
                        <div class="text-mini"><?php echo $postTypeObj->labels->name; ?></div>
                        <div class="hero-history-header"><?php the_title(); ?></div>
                        <div class="hero-history-desc"><?php the_excerpt(); ?></div>
                        <div class="name-date">
                            <div class="hero-history-showup-name"><?php the_field('ra_name'); ?></div>
                            <div class="mini-hero-history-showup-name"> <?php if (get_field('ra_industryName')) : ?>
                                    <?php echo get_field('ra_industryName') . ','; ?>
                                    <?php endif; ?><?php echo get_the_date('Y-m-d'); ?></div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="newestPost" value="<?php echo get_the_ID();?>"> 
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>



</section>
<?php get_template_part('template-references/filtration'); ?>
<section class="free-consult">
    <div class="container">
        <div class="free-consult__main">
            <h3><?php if ($header_under_sort = get_field('header_under_sort')) : ?>
                    <?php echo $header_under_sort; ?>
                <?php endif; ?></h3>
            <div class="consult-desc">
                <?php if ($desc_under_sort = get_field('desc_under_sort')) : ?>
                    <?php echo $desc_under_sort; ?>
                <?php endif; ?>
            </div>
            <div class="consult-contact">
                <a href="<?php the_permalink();?>#references-form" class="contact-button"><?php if ($button_under_sort = get_field('button_under_sort')) : ?>
                        <?php echo esc_html($button_under_sort); ?>
                    <?php endif; ?></a>
                <span><?php if ($text_before_phone_sort = get_field('text_before_phone_sort')) : ?>
                        <?php echo esc_html($text_before_phone_sort); ?>
                    <?php endif; ?></span>
                <a class="contact-phone" href="tel:<?php if ($phone_under_sort = get_field('phone_under_sort')) : ?>
                <?php echo esc_html($phone_under_sort); ?>
                    <?php endif; ?>"><?php if ($phone_under_sort = get_field('phone_under_sort')) : ?>
                        <?php echo esc_html($phone_under_sort); ?>
                    <?php endif; ?></a>
            </div>
        </div>
    </div>
</section>

<div class="about-si">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-9">
                <div class="about-si__box">
                    <div class="about-si__box__photo">
                        <?php
                        $about_si_photo_cl = get_field('about_si_photo_cl');
                        if ($about_si_photo_cl) : ?>
                            <img src="<?php echo esc_url($about_si_photo_cl['url']); ?>" alt="<?php echo esc_attr($about_si_photo_cl['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="about-si__box__text"><?php if ($about_si_desc_cl = get_field('about_si_desc_cl')) : ?>
                            <?php echo $about_si_desc_cl; ?>
                        <?php endif; ?></div>
                    <div class="about-si__box__name"><?php if ($about_si_name_cl = get_field('about_si_name_cl')) : ?>
                            <?php echo esc_html($about_si_name_cl); ?>
                        <?php endif; ?>
                    </div>
                    <div class="about-si__box__position"><?php if ($about_si_position_cl = get_field('about_si_position_cl')) : ?>
                            <?php echo esc_html($about_si_position_cl); ?>
                        <?php endif; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="references-blog">
    <div class="slider-aktualnosci slider-blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog-si__top">
                        <div class="blog-si__top__title"><?php if ($blog_topic_cl = get_field('blog_topic_cl')) : ?>
                                <?php echo esc_html($blog_topic_cl); ?>
                            <?php endif; ?></div>
                            <a href="<?php echo get_home_url();?>/blog" class="blog-si__top__btn"><?php if ($blog_button_name_cl = get_field('blog_button_name_cl')) : ?>
                                <?php echo esc_html($blog_button_name_cl); ?>
                            <?php endif; ?></a>
                    </div>
                </div>
            </div>
            <div class="slider-aktualnosci-loop">
                <?php $future_args = array(
                    'post_type' => array('aktualnosci_cpt', 'ekspert_cpt', 'pytania_cpt'),
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order'   => 'DESC',
                    'posts_per_page' => 3,
                );
                $loop = new WP_Query($future_args);
                ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php
                    $postType = get_post_type();
                    $postTypeObj = get_post_type_object($postType);
                    ?>
                    <?php if (!get_field('wyrozniony_wpis_na_stronie_zbiorczej_blog')) : ?>
                        <a href="<?php echo get_permalink(); ?>" class="slider-aktualnosci-loop__item">
                            <div class="slider-aktualnosci-loop__content">
                                <div class="slider-aktualnosci-loop__terms post-terms">
                                    <?php echo $postTypeObj->labels->name; ?>
                                </div>
                                <div class="slider-aktualnosci-loop__excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="slider-aktualnosci-loop__info post-info post-refer">
                                    <?php
                                    $user_id = get_the_author_meta('ID');
                                    $user_name = get_author_name($user_id);
                                    $user_image = get_field('zdjecie_autora', 'user_' .  $user_id);
                                    ?>
                                    <div class="slider-aktualnosci-loop__authorimg post-refer__authorimg"><img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($user_image['alt']); ?>" /></div>
                                    <div class="slider-aktualnosci-loop__author post-refer__author">
                                        <?php echo $user_name; ?>
                                    </div>

                                    <div class="slider-aktualnosci-loop__data post-refer__date">
                                        <?php echo get_the_date('F'); ?>, <?php echo get_the_date('Y'); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>

<section class="references-form" id="references-form">
    <div class="form-si">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="form-si__title"><?php if ($title_ref_form_clk = get_field('title_ref_form_clk')) : ?>
                            <?php echo $title_ref_form_clk; ?>
                        <?php endif; ?></div>
                    <div class="form-si__text"><?php if ($under_title_desc_form_clk = get_field('under_title_desc_form_clk')) : ?>
                            <?php echo $under_title_desc_form_clk; ?>
                        <?php endif; ?></div>
                </div>
                <div class="col-xl-6">
                    <div class="form-si__photo"><?php
                            $form_ref_photo_clk = get_field('form_ref_photo_clk');
                            if ($form_ref_photo_clk) : ?>
                            <img src="<?php echo esc_url($form_ref_photo_clk['url']); ?>" alt="<?php echo esc_attr($form_ref_photo_clk['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-si__contact">
                        <div class="form-si__contact__text"><?php if ($desc_above_title_clk = get_field('desc_above_title_clk')) : ?>
                                <?php echo $desc_above_title_clk; ?>
                            <?php endif; ?></div>
                        <div class="form-main">
                            <?php echo do_shortcode('[contact-form-7 id="4199" title="Formularz referencje"]'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>