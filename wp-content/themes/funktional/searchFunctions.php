<?php
function funktional_ajax_search_loadmore()
{
    function funktional_ajax_search_loadmore_scripts()
    {
        // register our main script but do not enqueue it yet
        wp_register_script('funktional_searchLoadmore', get_template_directory_uri() . '/assets/ajax/searchLoadmore.js', array('jquery'));
        wp_localize_script('funktional_searchLoadmore', 'funktional_searchLoadmore_params', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        ));

        wp_enqueue_script('funktional_searchLoadmore');
    }
    add_action('wp_enqueue_scripts', 'funktional_ajax_search_loadmore_scripts');

    function funktional_searchLoadmore_ajax_handler()
    {


        $args = array(
            'post_type' => array('pytania_cpt', 'ekspert_cpt', 'aktualnosci_cpt'),
            's' => $_GET['s'],
            'posts_per_page' => 10,
            'orderby' => 'type',
            'order' => 'ASC',
            'paged' => $_GET['page'],
        );
        // The Query
        $search_query = new WP_Query($args);

        while ($search_query->have_posts()) : $search_query->the_post();?>
            <div class="searchResults__post">
                <div class="searchResults__postCpt"> <?php echo get_post_type_object( get_post_type() )->label; ?></div>
                <h4 class="searchResults__postName"><a href="<?php echo get_permalink(); ?>" ><?php the_title(); ?></a></h4>
                <div class="searchResults__postExcerpt"><?php the_excerpt(); ?></div>
            </div>
<?php endwhile;
        echo '<input type="hidden" id="max_page_number" value="' . $search_query->max_num_pages . '">';


        die; // here we exit the script and even no wp_reset_query() required!
    }
    add_action('wp_ajax_searchLoadmore', 'funktional_searchLoadmore_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_searchLoadmore', 'funktional_searchLoadmore_ajax_handler'); // wp_ajax_nopriv_{action}
}
add_action('init', 'funktional_ajax_search_loadmore');
?>