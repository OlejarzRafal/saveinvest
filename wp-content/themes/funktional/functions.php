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
/* INCLUDE SCRIP & ASSETS */
get_template_part('function-catalog/acf-blocks');

/*****************************************************************************************************/
/* AJAX FUNCTIONS */
get_template_part('template-blog-cpt/aktualnosc-glownaFunctions');  
get_template_part('template-blog-cpt/pytania-klientow-glownaFunctions');  
get_template_part('template-blog-cpt/ekspert-radzi-glownaFunctions');  
get_template_part('searchFunctions');  
get_template_part('template-references/filtrationFunctions');


add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//allow svg
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml'; 
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types'); 

//wordpress 5.9.2 breaking acf media fix
function acf_filter_rest_api_preload_paths( $preload_paths ) {
	global $post;
	$rest_path    = rest_get_route_for_post( $post );
	$remove_paths = array(
		add_query_arg( 'context', 'edit', $rest_path ),
		sprintf( '%s/autosaves?context=edit', $rest_path ),
	);

	return array_filter(
		$preload_paths,
		function( $url ) use ( $remove_paths ) {
			return ! in_array( $url, $remove_paths, true );
		}
	);
}
add_filter( 'block_editor_rest_api_preload_paths', 'acf_filter_rest_api_preload_paths', 10, 1 );