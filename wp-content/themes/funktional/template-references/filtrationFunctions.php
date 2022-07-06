<?php
function funktional_ajax_references_filtration()
{
    function funktional_references_filtration_scripts()
    {
        // register our main script but do not enqueue it yet
        wp_register_script('funktional_references_filtration', get_template_directory_uri() . '/template-references/filtration.js', array('jquery'));
        wp_localize_script('funktional_references_filtration', 'funktional_materials_filtraiton_params', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        ));

        wp_enqueue_script('funktional_references_filtration');
    }
    add_action('wp_enqueue_scripts', 'funktional_references_filtration_scripts');

    function funktional_references_filtration_ajax_handler()
    {
        $postTypeGet = $_GET['type'];
        if ( $postTypeGet == 'all') : 
            $postType = array('stories_cpt', 'referencesPost_cpt', 'charitySupport_cpt');
        else :
            $postType = $postTypeGet;
        endif;
        $referencesFilter_args = array(
            'post_type' => $postType,
            'orderby' => 'date',
            'order' => $_GET['sortby'],
            'paged' => $_GET['page'],
            'posts_per_page' => 20,
            'post__not_in' => array( $_GET['exclude'] ),

        );
        $loopReferencesFilter = new WP_Query($referencesFilter_args);
        while ($loopReferencesFilter->have_posts()) : $loopReferencesFilter->the_post();
            echo get_template_part('template-references/filtrationPosts');
        endwhile;
        echo '<input type="hidden" id="max_page_number" value="' . $loopReferencesFilter->max_num_pages . '">';
        die; // here we exit the script and even no wp_reset_query() required!

    }
    add_action('wp_ajax_references_filtration', 'funktional_references_filtration_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_references_filtration', 'funktional_references_filtration_ajax_handler'); // wp_ajax_nopriv_{action}
}
add_action('init', 'funktional_ajax_references_filtration');
