<section class="landingMovie" style="background: <?php the_field('lpf_bg');?>">
    <div class="container">
        <div class="row">
            <div class="col-12 landingMovie__title">
                <h2 class="font font--<?php the_field('lpf_title_font');?>" style="color: <?php the_field('lpf_title_color');?>"><?php the_field('lpf_title');?></h2>
            </div>
            <div class="col-12 landingMovie__movie">
                <div class="embed-container">
                    <?php the_field( 'lpf_movie' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>