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

/* CUSTOM POST TYPE & TAXONOMIES */
get_template_part('function-catalog/acf-options-page');  

/*****************************************************************************************************/
/* AJAX FUNCTIONS */
get_template_part('template-blog-cpt/aktualnosc-glownaFunctions');  
get_template_part('template-blog-cpt/pytania-klientow-glownaFunctions');  
get_template_part('template-blog-cpt/ekspert-radzi-glownaFunctions');  
get_template_part('searchFunctions');  

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );