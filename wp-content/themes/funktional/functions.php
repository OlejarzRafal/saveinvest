<?php

/*****************************************************************************************************/
/* INCLUDE SCRIP & ASSETS */
get_template_part('function-catalog/include-script-styles');

/*****************************************************************************************************/
/* MENU REGISTER */
get_template_part('function-catalog/menu-register');

/*****************************************************************************************************/
/* STYLE ACF WP */
get_template_part('function-catalog/style-acf-wp');

/*****************************************************************************************************/
/* CUSTOM POST TYPE & TAXONOMIES */
get_template_part('function-catalog/custom-post-type');  

/*****************************************************************************************************/
/* AJAX FUNCTIONS */
get_template_part('template-blog-cpt/aktualnosc-glownaFunctions');  
get_template_part('template-blog-cpt/pytania-klientow-glownaFunctions');  
get_template_part('template-blog-cpt/ekspert-radzi-glownaFunctions');  
get_template_part('searchFunctions');  

// ACF Theme setting page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

  // Register options page.
  $option_page = acf_add_options_page(array(
    'page_title'   => 'Stopka',
    'menu_title'  => 'Stopka',
    'menu_slug'   => 'stopka',
    'capability'  => 'edit_posts',
    'redirect'    => false

  ));
}
add_theme_support( 'post-thumbnails' );