<?php 
function add_theme_assets()
{
  //styles
  wp_enqueue_style('swipercss', get_template_directory_uri() . '/assets/vendors/swiper.min.css', false, 1, 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css?ver2', false, 1, 'all');

  //script
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/vendors/jquery351.js', array(), null, true);
  wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/assets/vendors/swiper.js', array(), null, true);
  // wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/assets/vendors/jquery.fancybox.min.js', array(), null, true);
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js', array(), '1.0.0', true);
  wp_enqueue_script('scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js', array(), '1.0.0', true);
  // wp_enqueue_script('matchHeight', get_stylesheet_directory_uri() . '/assets/vendors/jquery.matchHeight.js', array(), '1.0.0', true);
  wp_enqueue_script('matchheight', get_template_directory_uri() . '/assets/vendors/jquery.matchHeight.js', array('jquery'), 1, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js?ver2', array('jquery'), 1, true);
}
add_action('wp_enqueue_scripts', 'add_theme_assets');