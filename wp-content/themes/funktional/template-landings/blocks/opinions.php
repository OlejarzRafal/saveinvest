<section class="landingPageOpinions">
    <div class="landingPageOpinions__bg">
        <img src="<?php the_field('lpo_bg');?>">
    </div>
    <div class="container">
        <div class="row">
            <?php if ( $lpo_bg_title = get_field( 'lpo_bg_title' ) ) : ?>
                <div class="col-12"><h2 class="landingPageOpinions__sectionTitle font font--<?php the_field('lpo_bg_title_font');?>" style="color: <?php the_field('lpo_bg_title_color');?>"><?php echo $lpo_bg_title; ?></h2></div>
            <?php endif; ?>
            <div class="col-12 pageLandingOpinions__box opinionBox" data-quotecolor="<?php the_field('lpo_icon_color');?>" data-arrowscolor="<?php the_field('lpo_arrows_color');?>" data-activecolor="<?php the_field('lpo_arrows_active_color');?>" data-textcolor="<?php the_field('lpo_opinion_color');?>" data-opinionbgcolor="<?php the_field('lpo_opinion_bg_color');?>" data-opinionbgtransparency="<?php the_field('lpo_opinion_bg_transparency');?>">
                <div class="opinionBox__bg">
                    <div class="opinionBox__inner swiper">
                        <div class="opinionBox__quote">
                            <?php 
                                $quote = get_field('lpo_icon');
                                echo file_get_contents($quote); 
                            ?>
                        </div>
                        <?php if ( have_rows( 'lpo_opinions' ) ) : ?>
                            <div class="opinionBox__pagNav">
                                <div class="opinionBox__pag swiper-pagination"></div>
                                <div class="opinionBox__nav">
                                    <div class="swiper-button-prev"><?php echo file_get_contents(get_template_directory_uri() . '/assets/img/landing/arrowLeft.svg'); ?></div>
                                    <div class="swiper-button-next"><?php echo file_get_contents(get_template_directory_uri() . '/assets/img/landing/arrowLeft.svg'); ?></div>
                                </div>
                            </div>
                            <div class="opinionBox__opinions swiper-wrapper">
                                <?php while ( have_rows( 'lpo_opinions' ) ) : the_row(); ?>
                                    <div class="opinionBox__opinion swiper-slide">
                                        <p class="font font--<?php the_sub_field('opinion_font');?>"><?php the_sub_field('content');?></p>
                                        <div class="opinionBox__lineUnder"></div>
                                        <div class="opinionBox__authorBox">
                                            <h5 class="font font--<?php the_sub_field('author_font');?>"><?php the_sub_field('author');?></h5>
                                            <span class="font font--<?php the_sub_field('company_font');?>"><?php the_sub_field('company');?></span>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>