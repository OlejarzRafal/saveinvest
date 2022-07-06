<?php
/* REGISTER CATEGORY*/
function example_block_category($categories, $post){
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'landing',
                'title' => 'Landing'
            ),
        ),
        
    );
}
function funktional_acf_blocks_register(){
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Landing page - hero'),
            'render_template'   => 'template-landings/blocks/hero.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'hero'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'boxes',
            'title'             => __('Landing page - boksy'),
            'render_template'   => 'template-landings/blocks/boxes.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'boksy'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'logos',
            'title'             => __('Landing page - logotypy'),
            'render_template'   => 'template-landings/blocks/logos.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'logotypy'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'charts',
            'title'             => __('Landing page - wykresy'),
            'render_template'   => 'template-landings/blocks/charts.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'wykresy'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'opinions',
            'title'             => __('Landing page - opinie'),
            'render_template'   => 'template-landings/blocks/opinions.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'opinie'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'threeImages',
            'title'             => __('Landing page - 3 zdjęcia'),
            'render_template'   => 'template-landings/blocks/threeImages.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', '3 zdjęcia'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'numbers',
            'title'             => __('Landing page - Saveinvest w liczbach'),
            'render_template'   => 'template-landings/blocks/numbers.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'Saveinvest w liczbach'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'weAreForU',
            'title'             => __('Landing page - Jesteśmy tu dla Ciebie'),
            'render_template'   => 'template-landings/blocks/weAreForU.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'jesteśmy tu dla Ciebie'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'movie',
            'title'             => __('Landing page - Film'),
            'render_template'   => 'template-landings/blocks/movie.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'Film'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'twoColumns',
            'title'             => __('Landing page - Dwie kolumny'),
            'render_template'   => 'template-landings/blocks/twoColumns.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'dwie kolumny'),
            'mode'    => 'edit',
        ));
    }
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'landingFooter',
            'title'             => __('Landing page - Stopka'),
            'render_template'   => 'template-landings/blocks/landingFooter.php',
            'category'          => 'landing',
            'icon'              => 'schedule',
            'keywords'          => array('landing page', 'stopka'),
            'mode'    => 'edit',
        ));
    }
}
add_action('acf/init', 'funktional_acf_blocks_register');