<?php
// ACF Theme setting page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{


    // Ustawienia globalne
    acf_add_options_page(array(
        'page_title'     => 'Stopki',
        'menu_title'    => 'Stopki',
        'menu_slug'     => 'footer-all',
    ));
    // Register options page.
    $option_page = acf_add_options_page(array(
        'page_title'   => 'SaveInvest',
        'menu_title'  => 'SaveInvest',
        'menu_slug'   => 'stopka',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false

    ));
    // Register options page.
    $option_page = acf_add_options_page(array(
        'page_title'   => 'Ostoja Kladno',
        'menu_title'  => 'Ostoja Kladno',
        'menu_slug'   => 'stopka-kladno',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false
    ));
    // Register options page.
    $option_page = acf_add_options_page(array(
        'page_title'   => 'Enklawa Karwia',
        'menu_title'  => 'Enklawa Karwia',
        'menu_slug'   => 'stopka-karwia',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false
    ));
};
