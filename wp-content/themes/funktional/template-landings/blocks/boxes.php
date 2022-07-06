<section class="pageLandingBoxes" style="background-color: <?php the_field('lpb_section_bg');?>">

    <div class="container">
        <div class="row">

            <div class="col-12 pageLandingBoxes__top">
                <h2 class="font font--<?php the_field('lpb_title_font');?>" style="color: <?php the_field('lpb_title_color');?>"><?php the_field('lpb_title');?></h2>
                <p class="font font--<?php the_field('lpb_desc_font');?>" style="color: <?php the_field('lpb_desc_color');?>"><?php the_field('lpb_desc');?></p>
            </div>
            <?php if ( have_rows( 'lpb_boxes' ) ) : ?>
                <?php while ( have_rows( 'lpb_boxes' ) ) : the_row(); ?>

                    <div class="col-6 col-xl-3 pageLandingBoxes__box landingBox" data-bordercolor="<?php the_sub_field('lpb_box_outline_color');?>" data-iconcolor="<?php the_sub_field('lpb_box_icon_color');?>" data-pluscolor="<?php the_sub_field('lpb_box_plus_color');?>">
                        <?php 
                        $lpb_box_background = get_sub_field( 'lpb_box_background' );
                        if ( $lpb_box_background ) : ?>
                            <div class="landingBox__bg">
                                <img src="<?php echo esc_url( $lpb_box_background['url'] ); ?>" alt="<?php echo esc_attr( $lpb_box_background['alt'] ); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="landingBox__outner">
                            <div class="landingBox__inner">
                                <div class="landingBox__icon landingBox__icon--<?php the_sub_field('lpb_box_icon_position');?>" style="background-color: <?php the_field('lpb_section_bg');?>">
                                    <?php 
                                    $svg = get_sub_field('lpb_box_icon');
                                    echo file_get_contents($svg); ?>
                                </div>
                                <div class="landingBox__title font font--<?php the_sub_field('lpb_box_title_font');?>" style="color: <?php the_sub_field('lpb_box_title_color');?>"><?php the_sub_field('lpb_box_title');?></div>
                                <div class="landingBox__desc font font--<?php the_sub_field('lpb_box_desc_font');?>" style="color: <?php the_sub_field('lpb_box_desc_color');?>"><?php the_sub_field('lpb_box_desc');?></div>
                                <div class="landingBox__plus">
                                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/plus.svg'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php $lpb_section_bgImg = get_field( 'lpb_section_bgImg' );
        if ( $lpb_section_bgImg ) : ?>
            <div class="pageLandingBoxes__bgImg">
                <img src="<?php echo  $lpb_section_bgImg['url']; ?>" alt="<?php echo $lpb_section_bgImg['alt']; ?>" />
            </div>
        <?php endif; ?>
</section>