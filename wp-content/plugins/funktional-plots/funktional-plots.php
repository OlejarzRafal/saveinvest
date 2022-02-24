<?php
/*
Plugin Name: Oferty działek
Description: Wtyczka dedykowana dla SAVEINVEST SP. Z O. O., która umożliwia zarządzanie ofertami działek na stronie
Author: Funktional sp. z o.o., ul. Karmelicka 52/9, 31-128 Kraków.
Author URI: https://www.funktional.pl/
Text Domain: funktional-plots
Version: 1.0.0
*/

require_once(__DIR__ . '/includes/plots-admin.php');
require_once(__DIR__ . '/includes/plots-front.php');

class FunktionalPlots
{
    public function __construct()
    {
        $this->addAcfFields();
        add_action('admin_menu', array($this, 'addInwestitionsMenuItem'));
        add_action('init', array($this, 'registerInwestitionsCpt'));
        add_action('wp_head', array($this, 'setFunktionalJsGlobals'));
        add_action('admin_head', array($this, 'setFunktionalJsGlobals'));
        // add_action('admin_init', array($this, 'removePlotCptTitleField'));
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

        $this->registerInvestitionPagesCpt('osada-jaworek', 'Osada Jaworek');
        $this->registerInvestitionPagesCpt('ostoja-kladno', 'Ostoja Kładno');
    }

    // public function removePlotCptTitleField() {
    //     global $pagenow;

    //     if ($pagenow === 'post-new.php' && isset($_GET) && isset($_GET['post_type']) && $_GET['post_type'] === 'plots') {
    //         echo '<style> #post-body-content #titlediv { display: none !important; } </style>';
    //     }
    // }

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
                require_once(__DIR__ . '/src/admin/templates/plots.php');
            },
            0
        );
    }

    public function getInvestitionTemplates($post_templates, $theme, $post, $post_type)
    {
        $files = (array)FunktionalPlots::scandir(get_stylesheet_directory(), 3);

        foreach ($files as $index => $file) {
            if (!preg_match('|Template Name:(.*)$|mi', file_get_contents($file), $header)) {
                continue;
            }

            if (empty($header) || !preg_match('|Template Post Type:(.*)' . $post_type . '(.*)$|mi', file_get_contents($file))) {
                continue;
            }

            $templateName = str_replace('Template Name:', '', $header[0]);
            $templateFile = str_replace(get_theme_file_path(), '', $file);

            $post_templates[$post_type][$templateFile] = $templateName;
        }

        return $post_templates[$post_type];
    }

    public function setFunktionalJsGlobals() {
        echo '<script>
                window.FunktionalGlobals = {
                    homeUrl: "'. home_url('/') .'",
                    adminUrl: "'. admin_url('/') .'"
                };
            </script>';
    }

    private function addAcfFields()
    {
        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        require(__DIR__ . '/model/plots-acf-fields.php');
        acf_add_local_field_group($plotsAcfArray);
    }

    private function registerInvestitionPagesCpt($postType, $name)
    {
        register_post_type($postType,
            array(
                'labels' => array(
                    'name' => $name,
                    'singular_name' => 'Strona (' . $name . ')'
                ),
                'public' => true,
                'has_archive' => true,
                'show_in_menu' => 'investitions',
                'capability_type' => 'page',
                'supports' => array('custom-fields', 'page-attributes','title'),
                'rewrite' => array('slug' => 'oferta/' . $postType)
            )
        );

        add_filter('theme_' . $postType . '_templates', array($this, 'getInvestitionTemplates'), 1, 4);
    }

    private static function scandir($path, $depth = 0)
    {
        if (!is_dir($path)) {
            return false;
        }

        $results = scandir($path);
        $files = array();

        foreach ($results as $result) {
            if ('.' === $result[0]) {
                continue;
            }

            if (is_dir($path . '/' . $result)) {
                if (!$depth) {
                    continue;
                }

                $files = array_merge_recursive($files, self::scandir($path . '/' . $result, $depth - 1));
            } else {
                $fileParts = explode('.', $result);

                if (array_pop($fileParts) !== 'php') {
                    continue;
                }

                $files[] = $path . '/' . $result;
            }
        }

        return $files;
    }
}

$funktionalPlots = new FunktionalPlots();


