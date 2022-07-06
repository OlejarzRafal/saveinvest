<section class="weAreForU">
    <div class="container">
        <div class="row weAreForU__row">
            <div class="col-12 weAreForU__header">
                <h2 class="font font--<?php the_field('lpjtdc_title_font');?>" style="color: <?php the_field('lpjtdc_title_color');?>"> <?php the_field('lpjtdc_title');?></h2>
                <p class="font font--<?php the_field('lpjtdc_desc_font');?>" style="color: <?php the_field('lpjtdc_desc_color');?>"> <?php the_field('lpjtdc_desc');?></p>
            </div>
            <div class="col-12 col-lg-6 col-xxxl-5 offset-xxxl-1 weAreForU__img">
            <?php
                $lpjtdc_img = get_field( 'lpjtdc_img' );
                if ( $lpjtdc_img ) : ?>
                    <img src="<?php echo $lpjtdc_img['url']; ?>" alt="<?php echo $lpjtdc_img['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>