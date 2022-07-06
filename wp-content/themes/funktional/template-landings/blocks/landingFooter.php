<?php if ( get_field( 'lpfooter_bg' ) == 0 ) : 
    $sStyle = 'background-color:'.get_field('fpfooter_bg_color');
elseif ( get_field( 'lpfooter_bg' ) == 1 ) : 
    $sStyle = 'background-image:url('.get_field('fpfooter_bg_img').')';
endif; ?>


<footer class="footer footer--landingPage landingFooter" style="<?php echo $sStyle; ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-11 offset-xl-1 landingFooter__logo">
                <?php $fpfooter_logo = get_field( 'fpfooter_logo' );
                if ( $fpfooter_logo ) : ?>
                    <img src="<?php echo $fpfooter_logo['url']; ?>" alt="<?php echo $fpfooter_logo['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-3 offset-xl-1 landingFooter__col landingFooter__col--1">
                <?php 
                    if ( $fpfooter_col1_header_1 = get_field( 'fpfooter_col1_header_1' ) ) : 
                        echo '<h5 class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col1_header_1.'</h5>';
                    endif; 
                    if ( $fpfooter_col1_text_1 = get_field( 'fpfooter_col1_text_1' ) ) : 
                        echo '<p class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col1_text_1.'</p>'; 
                    endif; 
                    if ( $fpfooter_col1_header_2 = get_field( 'fpfooter_col1_header_2' ) ) : 
                        echo '<h5 class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col1_header_2.'</h5>'; 
                    endif; 
                    if ( $fpfooter_col1_text_2 = get_field( 'fpfooter_col1_text_2' ) ) : 
                        echo '<p class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col1_text_2.'</p>'; 
                    endif; 
                ?>
            </div>
            <div class="col-12 col-lg-3 landingFooter__col landingFooter__col--2">
                <?php
                    if ( $fpfooter_col2_header_1 = get_field( 'fpfooter_col2_header_1' ) ) : 
                        echo '<h5 class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col2_header_1.'</h5>'; 
                    endif; 
                    if ( $fpfooter_col2_text_1 = get_field( 'fpfooter_col2_text_1' ) ) : 
                        echo '<p class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col2_text_1.'</p>'; 
                    endif; 

                    if ( $fpfooter_col2_header_2 = get_field( 'fpfooter_col2_header_2' ) ) : 
                        echo '<h5 class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col2_header_2.'</h5>'; 
                    endif; 
                    if ( $fpfooter_col2_text_2 = get_field( 'fpfooter_col2_text_2' ) ) : 
                        echo '<p class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col2_text_2.'</p>'; 
                    endif; 
                ?>
            </div>
            <div class="col-12 col-lg-3 landingFooter__col landingFooter__col--3">
                <?php
                    if ( $fpfooter_col3_header_1 = get_field( 'fpfooter_col3_header_1' ) ) : 
                        echo '<h5 class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col3_header_1.'</h5>'; 
                    endif; 
                    if ( $fpfooter_col3_text_1 = get_field( 'fpfooter_col3_text_1' ) ) : 
                        echo '<p class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col3_text_1.'</p>'; 
                    endif; 
                    if ( $fpfooter_col3_header_2 = get_field( 'fpfooter_col3_header_2' ) ) : 
                        echo '<h5 class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col3_header_2.'</h5>'; 
                    endif; 
                    if ( $fpfooter_col3_text_2 = get_field( 'fpfooter_col3_text_2' ) ) : 
                        echo '<p class="font font--'.get_field('fpfooter_font').'" style="color:'.get_field('fpfooter_color').'">'.$fpfooter_col3_text_2.'</p>'; 
                    endif; 
                ?>
            </div>
            <div class="col-12 col-lg-1 landingFooter__logos" data-svg="<?php the_field('fpfooter_col4_color');?>">
                <?php echo file_get_contents( get_field('fpfooter_col4_img_1') ); ?>
                <?php echo file_get_contents( get_field('fpfooter_col4_img_2') ); ?>
                <?php echo file_get_contents( get_field('fpfooter_col4_img_3') ); ?>
            </div>
        </div>
        <div class="row landingFooter__bot">
            <div class="col-12 col-xl-10 offset-xl-1 landingFooter__botCol landingFooter__botCol--1">
                <div class="inner">
                    <p class="font font--<?php the_field('fpfooter_font'); ?>" style="color: <?php the_field('fpfooter_color'); ?>"><?php the_field('fpfooter_undertext');?></p>
                </div>
            </div>
            <div class="col-12 col-xl-10 align-items-center offset-xl-1 d-flex justify-content-between landingFooter__botCol landingFooter__botCol--2">
                <span class="font font--<?php the_field('fpfooter_font'); ?>" style="color: <?php the_field('fpfooter_color'); ?>">SaveInvest © <?php echo get_the_date('Y');?>. Wszystkie prawa zastrzeżone. </span>
                <img src="<?php echo get_home_url();?>/wp-content/themes/funktional/assets/img/funktional-creation.png" >
            </div>
        </div>
      
    </div>
    <div class="landingFooter__under">
        <div class="container ">
            <div class="row ">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <span>© <?php echo get_the_date('Y');?> <?php the_title();?></span>
                </div>
            </div>
        </div>
    </div>
</footer>