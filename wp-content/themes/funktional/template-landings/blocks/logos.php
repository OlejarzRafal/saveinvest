<?php 
    if ( get_field( 'lplt_lines' ) == 1 ) : 
        $lines = 'pageLandingLogos--lines';
    else:
        $lines = '';
    endif; 
?>
<section class="pageLandingLogos <?php echo $lines;?>" style="background-color:<?php the_field('lplt_bg');?>">
    <div class="container">
        <div class="row">
            <div class="col-12 pageLandingLogos__logos" style="background-color:<?php the_field('lplt_bg');?>">
                <?php if ( have_rows( 'lplt_logos' ) ) : ?>
                    <?php while ( have_rows( 'lplt_logos' ) ) : the_row(); ?>
                    <?php $logo = get_sub_field( 'logo' );
                        if ( $logo ) : ?>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>