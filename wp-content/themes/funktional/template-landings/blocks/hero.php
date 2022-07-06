<section class="pageLandingHero" style="background-image: url(<?php the_field('lph_bg');?>);">
    <div class="container">
        <div class="row">
            <div class="col-12 pageLandingHero__logo">
            <?php $lph_logo = get_field( 'lph_logo' );
                if ( $lph_logo ) : ?>
                    <img src="<?php echo $lph_logo['url']; ?>" alt="<?php echo $lph_logo['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6 col-xxxl-5 pageLandingHero__formBox formBox">
                <div class="formBox__inner">
                    <div class="formBox__top">
                        <h2 class="font font--<?php the_field('lph_form_title_font');?>" style="color: <?php the_field('lph_form_title_font_color');?>;"><?php the_field('lph_form_title');?></h2>
                        <p class="font font--<?php the_field('lph_form_desc_font');?>" style="color: <?php the_field('lph_form_desc_font_color');?>;"><?php the_field('lph_form_desc');?></p>
                    </div>
                    <?php
                    $buttonbgcolor = 'data-buttonbgcolor="'.get_field('lph_form_button_bg').'"';
                    $buttoncolor = 'data-buttoncolor="'.get_field('lph_form_button_color').'"';
                    $buttonstyle = 'data-buttonstyle="'.get_field('lph_form_button_style').'"';
                    $color = 'data-color="'.get_field('lph_form_text_color').'"';
                    $font = 'data-font="'.get_field('lph_form_main_font').'"';
                    $tabcolor = get_field('lph_form_tab_color');
                    $tabbg = get_field('lph_form_tab_bg');
                    $tabsecbg = get_field('lph_form_tab_sec_bg');
                    ?>
                    <div class="formBox__form" <?php echo $buttonbgcolor.' '.$buttoncolor.' '.$iconcolor.' '.$buttonstyle.' '.$color.' '.$font; ?> >
                        <?php $form = get_field('lph_form_shortcode');
                        echo do_shortcode($form);?>
                    </div>
                    <div class="formBox__tab tab" style="background: <?php echo $tabbg; ?>">
                        <div class="tab__pre"><svg width="23" height="80" viewBox="0 0 23 80" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_805_6884)"><path d="M0 0H210V80H0L23 40L0 0Z" fill="<?php echo $tabbg;?>"/></g><defs><clipPath id="clip0_805_6884"><rect width="23" height="80" fill="white"/></clipPath></defs></svg></div>
                        <div class="tab__post"><svg width="37" height="19" viewBox="0 0 37 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0H37L0 19V0Z" fill="<?php echo $tabsecbg; ?>"/></svg></div>
                        <p style="color: <?php echo $tabcolor; ?>"><?php the_field('lph_form_tab');?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pageLandingHero__titleBox">
                <h1 class="font font--<?php the_field('lph_title_font');?>" style="color:<?php the_field('lph_title_font_color');?>;"><?php the_field('lph_title');?></h1>
                <p class="font font--<?php the_field('lph_desc_font');?>" style="color:<?php the_field('lph_desc_font_color');?>;"><?php the_field('lph_desc');?> </p>
            </div>
        </div>
    </div>
    <a class="pageLandingHero__showMore" href="/#showMore">
        <span><?php _e('Zobacz więcej','Funktional');?></span>
        <div class="pageLandingHero__showMoreArrow">
            <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/landing/doubleArrow.svg'); ?>
        </div>
    </a>
</section>
<div id="showMore"></div>