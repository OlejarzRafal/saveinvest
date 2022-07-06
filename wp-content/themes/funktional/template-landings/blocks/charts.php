<?php 
    if ( get_field( 'lpw_position' ) == 0 ) : 
        $position = 0;
    else:
        $position = 1;
endif; ?>
<section class="pageLandingCharts pageLandingCharts--position-<?php echo $position; ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 pageLandingCharts__chartsBox">
                <?php if ( have_rows( 'lpw_charts' ) ) : ?>
                    <div class="pageLandingCharts__charts">
                        <?php while ( have_rows( 'lpw_charts' ) ) : the_row(); ?>
                        <?php $chart = get_sub_field( 'chart' );
                            if ( $chart ) : ?>
                                <img src="<?php echo $chart['url']; ?>" alt="<?php echo $chart['alt'] ; ?>" />
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
               
            </div>
            <div class="col-12 col-lg-6 pageLandingCharts__content">
                <div class="pageLandingCharts__contentAfter" style="background-color: <?php the_field('lpw_content_bg');?>"></div>
                <div class="pageLandingCharts__inner" style="background-color: <?php the_field('lpw_content_bg');?>">
                    <h2 class="font font--<?php the_field('lpw_content_title_font');?>" style="color: <?php the_field('lpw_content_title_color');?>"><?php the_field('lpw_content_title');?></h2>
                    <p class="font font--<?php the_field('lpw_content_desc_font');?>" style="color: <?php the_field('lpw_content_desc_color');?>"><?php the_field('lpw_content_desc');?></p>
                    <?php if ( have_rows( 'lpw_content_list' ) ) : ?>
                        <ul data-markercolor="<?php the_field('lpw_content_marker_color');?>">
                            <?php while ( have_rows( 'lpw_content_list' ) ) : the_row(); ?>
                                <li class="font font--<?php the_sub_field('lpw_content_list_font');?>" style="color: <?php the_sub_field('lpw_content_list_color');?>"><?php echo file_get_contents(get_template_directory_uri() . '/assets/img/landing/marker.svg'); ?><?php the_sub_field('text');?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>