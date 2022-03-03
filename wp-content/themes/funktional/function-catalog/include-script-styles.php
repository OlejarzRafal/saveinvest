<?php
function add_theme_assets()
{
    /////////////////
    //  VENDORS
    /////////////////
    // styles
    wp_enqueue_style('swipercss', get_template_directory_uri() . '/assets/vendors/swiper.min.css', false, 1, 'all');
    // scripts
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/vendors/jquery351.js', array(), null, true);
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/assets/vendors/swiper.js', array(), null, true);
    wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/assets/vendors/jquery.fancybox.min.js', array(), null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js', array(), '1.0.0', true);
    wp_enqueue_script('matchheight', get_template_directory_uri() . '/assets/vendors/jquery.matchHeight.js', array('jquery'), 1, true);

    /////////////////
    //  STYLES
    /////////////////
    // invest KLADNO
    if (get_post_type(get_queried_object_id()) === 'ostoja-kladno') {
        wp_enqueue_style('kladnocss', get_template_directory_uri() . '/assets/css/kladno.css', false, 1, 'all');
    } else {
        // to na pewno w else?
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', false, 1, 'all');
    }


    /////////////////
    // SCRIPTS
    /////////////////
    // invest KLADNO
    if (get_post_type(get_queried_object_id()) === 'ostoja-kladno') {
        wp_enqueue_script('kladnojs', get_stylesheet_directory_uri() . '/assets/js/kladno.js', array(), null, true);
    }

    // saveinvest page&blog
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1, true);
}

add_action('wp_enqueue_scripts', 'add_theme_assets');
