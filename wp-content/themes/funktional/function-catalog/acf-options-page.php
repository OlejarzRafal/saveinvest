<?php
// ACF Theme setting page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{


    // Footer tabs
    acf_add_options_page(array(
        'page_title'     => 'Stopki',
        'menu_title'    => 'Stopki',
        'menu_slug'     => 'footer-all',
    ));
    // Footer SaveInvest
    $option_page = acf_add_options_page(array(
        'page_title'   => 'SaveInvest',
        'menu_title'  => 'SaveInvest',
        'menu_slug'   => 'stopka',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false

    ));
    // Footer Ostoja
    $option_page = acf_add_options_page(array(
        'page_title'   => 'Ostoja Kladno',
        'menu_title'  => 'Ostoja Kladno',
        'menu_slug'   => 'stopka-kladno',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false
    ));
    // Footer Karwia
    $option_page = acf_add_options_page(array(
        'page_title'   => 'Osada Karwia',
        'menu_title'  => 'Osada Karwia',
        'menu_slug'   => 'stopka-karwia',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false
    ));

    // Footer Dziwnowek
    $option_page = acf_add_options_page(array(
        'page_title'   => 'Osada Dziwnowek',
        'menu_title'  => 'Osada Dziwnowek',
        'menu_slug'   => 'stopka-dziwnowek',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false
    ));
    // Footer Enklawa Dziwnowek
    $option_page = acf_add_options_page(array(
        'page_title'   => 'Enklawa Dziwnowek',
        'menu_title'  => 'Enklawa Dziwnowek',
        'menu_slug'   => 'stopka-enklawa-dziwnowek',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false
    ));
    // Register options page.
    $option_page = acf_add_options_page(array(
        'page_title'   => 'Sea Golf',
        'menu_title'  => 'Sea Golf',
        'menu_slug'   => 'sea-golf',
        'capability'  => 'edit_posts',
        'parent_slug'    => 'footer-all',
        'redirect'    => false
    ));
};
