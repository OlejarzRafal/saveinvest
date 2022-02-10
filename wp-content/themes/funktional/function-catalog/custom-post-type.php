<?php
//disable default posts
function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');


//register custom post types
function funktional_custom_post_type()
{
    // Add admin page to the menu
    function add_admin_page()
    {
        add_menu_page(
            'Blog', //Page Title
            'Blog', //Menu Title
            'manage_options', //Capability
            'aktualnosci_cpt', //Page slug
            'admin_page_html', //Callback to print html
            'dashicons-welcome-write-blog', // icon_url
            5   // position
        );
    }
    add_action('admin_menu', 'add_admin_page');


    //Aktualnosci z terenów
    $aktualnosci = array(
        'name'                => _x('Aktualności z terenów', 'Post Type General Name'),
        'singular_name'       => _x('Aktualności z terenów', 'Post Type Singular Name'),
        'menu_name'           => __('Aktualności '),
        'all_items'           => __('Aktualności '),
        'view_item'           => __('Zobacz'),
        'add_new_item'        => __('Dodaj'),
        'add_new'             => __('Dodaj nowy'),
        'edit_item'           => __('Edytuj'),
        'search_items'        => __('Szukaj'),
    );
    $aktualnosci_args = array(
        'label'               => __('aktualnosci'),
        'labels'              => $aktualnosci,
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes','excerpt','author'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'menu_position'       => 1,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'show_in_menu' => 'aktualnosci_cpt',
        // 'rewrite' => array('slug' => 'blog/', 'with_front' => false),
    );
    register_post_type('aktualnosci_cpt', $aktualnosci_args);

    //Ekspert Saveinvest
    $ekspert = array(
        'name'                => _x('Ekspert Saveinvest', 'Post Type General Name'),
        'singular_name'       => _x('Ekspert Saveinvest', 'Post Type Singular Name'),
        'menu_name'           => __('Ekspert Saveinvest '),
        'all_items'           => __('Ekspert Saveinvest'),
        'view_item'           => __('Zobacz'),
        'add_new_item'        => __('Dodaj'),
        'add_new'             => __('Dodaj nowy'),
        'edit_item'           => __('Edytuj'),
        'search_items'        => __('Szukaj'),
    );
    $ekspert_args = array(
        'label'               => __('ekspert'),
        'labels'              => $ekspert,
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes','excerpt','author'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'menu_position'       => 1,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'show_in_menu' => 'aktualnosci_cpt',
        'rewrite' => array('slug' => 'blog/ekspert', 'with_front' => false),
    );
    register_post_type('ekspert_cpt', $ekspert_args);

    //Pytania klientów
    $pytania = array(
        'name'                => _x('Pytania klientów', 'Post Type General Name'),
        'singular_name'       => _x('Pytania klientów', 'Post Type Singular Name'),
        'menu_name'           => __('Pytania klientów'),
        'all_items'           => __('Pytania klientów'),
        'view_item'           => __('Zobacz'),
        'add_new_item'        => __('Dodaj'),
        'add_new'             => __('Dodaj nowy'),
        'edit_item'           => __('Edytuj'),
        'search_items'        => __('Szukaj'),
    );
    $pytania_args = array(
        'label'               => __('pytania'),
        'labels'              => $pytania,
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes','excerpt','author'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'menu_position'       => 1,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'show_in_menu' => 'aktualnosci_cpt',
        'rewrite' => array('slug' => 'blog', 'with_front' => false),
    );
    register_post_type('pytania_cpt', $pytania_args);
}
add_action('init', 'funktional_custom_post_type', 0);



//register taxonomies
function funktional_register_taxonomy()
{
    //Lokalizacacje taxonomy - localization
    $localization = array(
        'name' => _x('Lokalizacje', 'taxonomy general name'),
        'singular_name' => _x('Lokalizacje', 'taxonomy singular name'),
        'menu_name' => __('Lokalizacje'),
    );
    register_taxonomy('localization', array('aktualnosci_cpt'), array(
        'hierarchical' => true,
        'labels' => $localization,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ));

    //Tematy taxonomy - subjects
    $subjects = array(
        'name' => _x('Tematy', 'taxonomy general name'),
        'singular_name' => _x('Tematy', 'taxonomy singular name'),
        'menu_name' => __('Tematy'),
    );
    register_taxonomy('subjects', array('ekspert_cpt'), array(
        'hierarchical' => true,
        'labels' => $subjects,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ));

    //Eksperci taxonomy - expert
    $expert = array(
        'name' => _x('Eksperci', 'taxonomy general name'),
        'singular_name' => _x('Eksperci', 'taxonomy singular name'),
        'menu_name' => __('Eksperci'),
    );
    register_taxonomy('expert', array('ekspert_cpt'), array(
        'hierarchical' => true,
        'labels' => $expert,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ));

    //Tematy pytania taxonomy - subjects_questions
    $subjects_questions = array(
        'name' => _x('Tematy', 'taxonomy general name'),
        'singular_name' => _x('Tematy', 'taxonomy singular name'),
        'menu_name' => __('Tematy'),
    );
    register_taxonomy('subjects_questions', array('pytania_cpt'), array(
        'hierarchical' => true,
        'labels' => $subjects_questions,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'funktional_register_taxonomy');



//show edit taxonomies buttons
function funktional_custom_admin_archive_link()
{
    //aktualnosci
    function funktional_custom_admin_archive_link_news()
    {
        echo '<div class="wrap" style="margin-top: 15px"><a href="' . get_site_url() . '/wp-admin/edit-tags.php?taxonomy=localization&post_type=aktualnosci_cpt" class="page-title-action">Edytuj lokalizację</a></div>';
    }
    add_filter('views_edit-aktualnosci_cpt', 'funktional_custom_admin_archive_link_news');


    //eskpert radzi
    function funktional_custom_admin_archive_link_ekspert()
    {
        echo '<div class="wrap" style="margin-top: 15px"><a href="' . get_site_url() . '/wp-admin/edit-tags.php?taxonomy=subjects&post_type=ekspert_cpt" class="page-title-action">Edytuj tematy</a></div>';
    }
    add_filter('views_edit-ekspert_cpt', 'funktional_custom_admin_archive_link_ekspert');

    // Pytania klientów
    function funktional_custom_admin_archive_link_subjects()
    {
        echo '<div class="wrap" style="margin-top: 15px"><a href="' . get_site_url() . '/wp-admin/edit-tags.php?taxonomy=subjects_questions&post_type=pytania_cpt" class="page-title-action">Edytuj tematy</a></div>';
    }
    add_filter('views_edit-pytania_cpt', 'funktional_custom_admin_archive_link_subjects');
}
add_action('init', 'funktional_custom_admin_archive_link');

