<?php
function funktional_ajax_filtration_aktualnosci(){
    function funktional_ajax_filtration_aktualnosci_scripts() { 
        // register our main script but do not enqueue it yet
        wp_register_script( 'funktional_aktualnosciFiltration', get_template_directory_uri() . '/assets/ajax/aktualnosciAjax.js', array('jquery') );
        wp_localize_script( 'funktional_aktualnosciFiltration', 'funktional_aktualnosciFiltration_params', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        ) );
    
        wp_enqueue_script( 'funktional_aktualnosciFiltration' );
    }
    add_action( 'wp_enqueue_scripts', 'funktional_ajax_filtration_aktualnosci_scripts' );

    function funktional_aktualnosciFiltration_ajax_handler(){

        $locations = get_terms( 'localization', array( 'hide_empty' => true ) ) ; 
        $locationGet = $_GET['location'];
        $locationGetAll = wp_list_pluck($locations, 'slug'); 

        
        if ( $locationGet != 'all' ) :
            $locationTaxQuery = array(
                'taxonomy' => 'localization',
                'field' => 'slug',
                'terms' => $locationGet,
            );
        else :
            $locationTaxQuery = array(
                'taxonomy' => 'localization',
                'field' => 'slug',
                'terms' => $locationGetAll,
            );
        endif;

        $aktualnosciFiltrations_args = array(
            'post_type' => 'aktualnosci_cpt',
            'posts_per_page' => 10,
            'orderby' => 'date', 
            'order' => 'DESC',
            'paged' => $_GET['page'],
            'tax_query' =>  array(
                $locationTaxQuery,
            ),           
        );
        $loop = new WP_Query( $aktualnosciFiltrations_args ); 
        while ( $loop->have_posts() ) : $loop->the_post();  
            echo get_template_part('template-blog-cpt/aktualnosc-glownaLoop');  
        endwhile;
        echo '<input type="hidden" id="max_page_number" value="' . $loop->max_num_pages . '">';
        echo '<input type="hidden" id="resoultCount" value="' . $loop->found_posts . '">';
        die; // here we exit the script and even no wp_reset_query() required!
    }
    add_action('wp_ajax_aktualnosciFiltration', 'funktional_aktualnosciFiltration_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_aktualnosciFiltration', 'funktional_aktualnosciFiltration_ajax_handler'); // wp_ajax_nopriv_{action}
    }
add_action( 'init', 'funktional_ajax_filtration_aktualnosci');
?>