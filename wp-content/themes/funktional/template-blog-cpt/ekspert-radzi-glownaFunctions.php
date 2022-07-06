<?php
function funktional_ajax_filtration_ekspertRadzi(){
    function funktional_ajax_filtration_ekspertRadzi_scripts() { 
        // register our main script but do not enqueue it yet
        wp_register_script( 'funktional_ekspertRadzi_Filtration', get_template_directory_uri() . '/assets/ajax/ekspertRadziAjax.js', array('jquery') );
        wp_localize_script( 'funktional_ekspertRadzi_Filtration', 'funktional_ekspertRadzi_Filtration_params', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        ) );
    
        wp_enqueue_script( 'funktional_ekspertRadzi_Filtration' );
    }
    add_action( 'wp_enqueue_scripts', 'funktional_ajax_filtration_ekspertRadzi_scripts' );

    function funktional_ekspertRadzi_Filtration_ajax_handler(){

        $subjects = get_terms( 'subjects', array( 'hide_empty' => true ) ) ; 
        $subjectGet = $_GET['subject'];
        $subjectGetAll = wp_list_pluck($subjects, 'slug'); 

        $expertGet = $_GET['expert'];

        
        if ( $subjectGet != 'all' ) :
            $subjectTaxQuery = array(
                'taxonomy' => 'subjects',
                'field' => 'slug',
                'terms' => $subjectGet,
            );
        else :
            $subjectTaxQuery = array(
                'taxonomy' => 'subjects',
                'field' => 'slug',
                'terms' => $subjectGetAll,
            );
        endif;

        if ( $expertGet != 'all' ) :
            $expertTaxQuery = $expertGet;
        else :
            $expertTaxQuery = '';
        endif;

        $ekspertRadzi_Filtrations_args = array(
            'post_type' => 'ekspert_cpt',
            'posts_per_page' => 10,
            'orderby' => 'date', 
            'order' => 'DESC',
            'paged' => $_GET['page'],
            'author'  => $expertTaxQuery,
            'tax_query' =>  array(
                $subjectTaxQuery
            ),              
        );
        $loop = new WP_Query( $ekspertRadzi_Filtrations_args ); 
        while ( $loop->have_posts() ) : $loop->the_post();  
            echo get_template_part('template-blog-cpt/ekspert-radzi-glownaLoop');  
        endwhile;
        echo '<input type="hidden" id="max_page_number" value="' . $loop->max_num_pages . '">';
        echo '<input type="hidden" id="resoultCount" value="' . $loop->found_posts . '">';
        die; // here we exit the script and even no wp_reset_query() required!
    }
    add_action('wp_ajax_ekspertRadzi_Filtration', 'funktional_ekspertRadzi_Filtration_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_ekspertRadzi_Filtration', 'funktional_ekspertRadzi_Filtration_ajax_handler'); // wp_ajax_nopriv_{action}
    }
add_action( 'init', 'funktional_ajax_filtration_ekspertRadzi');
