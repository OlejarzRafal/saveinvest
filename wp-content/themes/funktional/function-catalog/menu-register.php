<?php 
function register_menus()
{
  register_nav_menus(array(
    'main' => esc_html__('Primary')
  ));
}
add_action('init', 'register_menus');