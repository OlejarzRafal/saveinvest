<?php if ( get_field( 'lpswl_style' ) == 0 ) : 
    $bc = get_field('lpswl_borderColor');
    $borderBg = 'border: 20px solid'.$bc;
else : 
    $bg = get_field('lpswl_bgColor');
    $borderBg = 'border: 20px solid transparent; background-color:'.$bg;
endif; ?>

<section class="landingNumbers landingNumbers--<?php the_field( 'lpswl_style' ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="landingNumbers__border" style="<?php echo $borderBg; ?>">
                    <?php if ( get_field( 'lpswl_style' ) == 1 ) : 
                        echo '<div class="landingNumbers__leftIco">'. file_get_contents(get_field('lpswl_leftsvg')) . '</div>';
                        echo '<div class="landingNumbers__rightIco">'. file_get_contents(get_field('lpswl_rightsvg')) . '</div>';
                    endif; ?>
                    <h2 class="font font--<?php the_field('lpswl_title_font');?>" style="color: <?php the_field('lpswl_title_color');?>"><?php the_field('lpswl_title');?></h2>
                    <div class="landingNumbers__boxes">
                    <?php if ( have_rows( 'lpswl_numbers' ) ) : ?>
                        <?php while ( have_rows( 'lpswl_numbers' ) ) : the_row(); ?>
                            <div class="landingNumbers__box">
                                    <div class="landingNumbers__inner">
                                    <h3 class="font font--<?php the_sub_field('title_font');?>" style="color: <?php the_sub_field('title_color');?>"><?php the_sub_field('title');?></h3>
                                    <div class="landingNumbers__line" style="background: <?php the_field('lpswl_lineColor');?>"></div>
                                    <p class="font font--<?php the_sub_field('desc_font');?>" style="color: <?php the_sub_field('desc_color');?>"><?php the_sub_field('desc');?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>