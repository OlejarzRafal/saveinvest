<?php
/*
Template Name: Ekspert radzi (wpis)
Template Post Type: ekspert_cpt
*/

get_header();  ?>


<?php while (have_posts()) : the_post();
    $user_id = get_the_author_meta('ID');
    $author_image =  get_field('zdjecie_autora', 'user_' .  $user_id);
    $author_name = get_the_author_meta('display_name');
    $author_url = get_author_posts_url($user_id);
    $author_position = get_field('stanowisko_autora', 'user_' . $user_id);
    $author_description = get_field('opis_autora', 'user_' . $user_id); ?>
    <div class="page-blog">
        <div class="singlePost">
            <div class="container">
                <div class="blog-sec-nav">
                    <a href="<?php echo get_home_url(); ?>/ekspert-saveinvest-radzi" class="blog-sec-nav__back">
                        WRÓĆ DO EKSPERT SAVEINVEST
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
                            $terms = get_the_terms($post->ID, 'subjects');
                            foreach ($terms as $term) : ?>
                                <div class="singlePost-terms__item"><?php echo $term->name ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="singlePost-hero__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/blog/post-photo.jpg" alt="saveinvest">
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

                <div class="singlePost-newsletter">
                    <div class="singlePost-newsletter__header">
                        <h3><?php the_field('naglowek_newslleter_blog', '423'); ?></h3>
                        <span><?php the_field('tekst_newsletter_blog', '423'); ?></span>
                    </div>
                    <div class="singlePost-newsletter-form">
                        <?php echo do_shortcode('[contact-form-7 id="308" title="Newsletter"]'); ?>
                    </div>
                </div>
                <div class="singlePost-nav">
                    <?php previous_post_link('%link', '<div class="btn">POPRZEDNIA RADA</div>'); ?>
                    <?php next_post_link('%link', '<div class="btn">NASTĘPNA RADA</div>'); ?>
                </div>
                <!-- SLIDER EKSPERT RADZI -->
                <div class="slider-expert slider-blog">

                    <div class="slider-expert__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/blog/ekspert-ico.png" alt="ekspert-ico">
                    </div>
                    <h2 class="slider-expert__header">Przeczytaj także</h2>
                    <div class="slider-expert-loop swiper">
                        <div class="swiper-wrapper">
                            <?php
                            $postid = get_the_ID();
                            $ekspertRadzi_Filtrations_args = array(
                                'post_type' => 'ekspert_cpt',
                                'posts_per_page' => 8,
                                'orderby' => 'date',
                                'post__not_in' => array(241, $postid),
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
                                        $author_id =  get_the_author_meta('ID');
                                        $author_name = get_author_name($author_id);
                                        $author_image = get_field('zdjecie_autora', 'user_' .  $author_id);
                                        ?>
                                        <div class="slider-expert-loop__authors">
                                            <div class="slider-expert-loop__authorimg">
                                                <img src="<?php echo esc_url($author_image['url']); ?>" alt="<?php echo esc_attr($author_image['alt']); ?>" />
                                            </div>

                                            <div class="slider-expert-loop__author">
                                                <?php echo $author_name; ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile;
                            ?>
                        </div>
                        <div class="slider-blog__nav">
                            <div class="swiper-pagination"></div>
                            <a href="#" class="btn">ZOBACZ WSZYSTKIE PORADY</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php
get_footer(); ?>
<?php
get_footer(); ?>