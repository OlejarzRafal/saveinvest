<?php
/*
Plugin Name: Oferty działek
Description: Wtyczka dedykowana dla SAVEINVEST SP. Z O. O., która umożliwia zarządzanie ofertami działek na stronie
Author: Funktional sp. z o.o., ul. Karmelicka 52/9, 31-128 Kraków.
Author URI: https://www.funktional.pl/
Text Domain: funktional-plots
Version: 1.0.0
*/

require_once(__DIR__.'/includes/plots-admin.php');

class FunktionalPlots
{
    public function __construct()
    {
        $this->addAcfFields();
        add_action('admin_menu', array($this, 'addInwestitionsMenuItem'));
        add_action('init', array($this, 'registerInwestitionsCpt'));
    }

    public function registerInwestitionsCpt()
    {
        register_post_type('plots',
            array(
                'labels' => array(
                    'name' => 'Działki',
                    'singular_name' => 'Działka'
                ),
                'show_in_menu' => false,
                'public' => true,
                'has_archive' => true
            )
        );

        register_post_type('investition-jaworek',
            array(
                'labels' => array(
                    'name' => 'Osada Jaworek',
                    'singular_name' => 'Strona (Osada Jaworek)'
                ),
                'public' => true,
                'has_archive' => true,
                'show_in_menu' => 'investitions'
            )
        );
    }

    public function addInwestitionsMenuItem()
    {
        add_menu_page(
            'Inwestycje',
            'Inwestycje',
            'manage_options',
            'investitions',
            null,
            'dashicons-location-alt',
            10
        );

        add_submenu_page(
            'investitions',
            'Ceny działek',
            'Ceny działek',
            'manage_options',
            'plots',
            function () {
                require_once(__DIR__.'/src/admin/templates/plots.php');
            },
            0
        );
    }

    private function addAcfFields() {
        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        require(__DIR__.'/model/plots-acf-fields.php');
        acf_add_local_field_group($plotsAcfArray);
    }
}

$funktionalPlots = new FunktionalPlots();