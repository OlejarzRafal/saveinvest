<?php
function funktional_ajax_filtration_pytania(){
    function funktional_ajax_filtration_pytania_scripts() { 
        // register our main script but do not enqueue it yet
        wp_register_script( 'funktional_questionFiltration', get_template_directory_uri() . '/assets/ajax/pytaniaAjax.js', array('jquery') );
        wp_localize_script( 'funktional_questionFiltration', 'funktional_questionFiltration_params', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        ) );
    
        wp_enqueue_script( 'funktional_questionFiltration' );
    }
    add_action( 'wp_enqueue_scripts', 'funktional_ajax_filtration_pytania_scripts' );

    function funktional_questionFiltration_ajax_handler(){

        $questions = get_terms( 'subjects_questions', array( 'hide_empty' => true ) ) ; 
        $questionGet = $_GET['question'];
        $questionGetAll = wp_list_pluck($questions, 'slug'); 

        
        if ( $questionGet != 'all' ) :
            $questionTaxQuery = array(
                'taxonomy' => 'subjects_questions',
                'field' => 'slug',
                'terms' => $questionGet,
            );
        else :
            $questionTaxQuery = array(
                'taxonomy' => 'subjects_questions',
                'field' => 'slug',
                'terms' => $questionGetAll,
            );
        endif;

        $questionFiltrations_args = array(
            'post_type' => 'pytania_cpt',
            'posts_per_page' => 10,
            'orderby' => 'date', 
            'order' => 'DESC',
            'paged' => $_GET['page'],
            'post__not_in' => array(468),
            'tax_query' =>  array(
                $questionTaxQuery,
            ),           
        );
        $loop = new WP_Query( $questionFiltrations_args ); 
        while ( $loop->have_posts() ) : $loop->the_post();  
            echo get_template_part('template-blog-cpt/pytania-klientow-glownaLoop');  
        endwhile;
        echo '<input type="hidden" id="max_page_number" value="' . $loop->max_num_pages . '">';
        echo '<input type="hidden" id="resoultCount" value="' . $loop->found_posts . '">';
        die; // here we exit the script and even no wp_reset_query() required!
    }
    add_action('wp_ajax_questionFiltration', 'funktional_questionFiltration_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_questionFiltration', 'funktional_questionFiltration_ajax_handler'); // wp_ajax_nopriv_{action}
    }
add_action( 'init', 'funktional_ajax_filtration_pytania');
?>