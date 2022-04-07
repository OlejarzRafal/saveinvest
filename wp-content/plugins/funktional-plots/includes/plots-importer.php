<?php

class PlotsImporter
{
    function __construct()
    {
        add_action('admin_menu', array($this, 'addPlotsImporterMenuItem'), 100);
        add_action('rest_api_init', array($this, 'addImporterApiRoutes'));
    }

    public function addPlotsImporterMenuItem()
    {
        add_submenu_page(
            'investitions',
            'Importuj działki',
            'Importuj działki',
            'manage_options',
            'import-plots',
            function () {
                require_once(__DIR__ . '/../src/admin/templates/importer.php');
            },
            100
        );
    }

    public function addImporterApiRoutes()
    {
        register_rest_route('funktional-plots/v1', '/add-plot', array(
            'methods' => 'POST',
            'callback' => array($this, 'addPlot'),
        ));
    }

    public function addPlot()
    {
        if (!isset($_POST) || !isset($_POST['plotData'])) {
            echo 'false';
            exit();
        }

        $plotAcfData = array();
        require(__DIR__ . '/../model/plots-acf-fields.php');

        // create acf data (object meta_key -> meta_name) from csv data
        foreach ($_POST['plotData'] as $keyName => $keyValue) {
            $acfName = null;
            $acfValue = null;

            foreach ($plotsAcfArray['fields'] as $field) {
                if ($field['label'] === $keyName) {
                    $acfName = $field['name'];

                    if (isset($field['choices']) && !empty($field['choices'])) {
                        foreach ($field['choices'] as $choiceName => $choiceLabel) {
                            if ($choiceLabel === $keyValue) {
                                $acfValue = $choiceName;
                                break;
                            }
                        }
                    }

                    break;
                }
            }

            if (!$acfName && !$acfValue) {
                continue;
            } else if ($acfName && !$acfValue) {
                $acfValue = $keyValue;
            }

            $plotAcfData[$acfName] = $acfValue;
        }

        $newPlotPost = $this->getPlotPostId($plotAcfData);

        if (!$newPlotPost) {
            echo 'false';
            exit();
        }

        // update plot post meta data from created object
        foreach ($plotAcfData as $acfName => $acfValue) {
            update_field($acfName, $acfValue, $newPlotPost);
        }

        echo 'true';
        exit();
    }

    private function getPlotPostId($plotAcfData)
    {
        $plotsPosts = get_posts(array(
            'post_type' => 'plots',
            'posts_per_page' => 28,
            'orderby' => 'meta_value',
            'post_status' => 'publish',
            'meta_query' => array(
                array(
                    'key' => 'investition',
                    'value' => array($plotAcfData['investition']),
                    'compare' => 'IN'
                ),
                array(
                    'key' => 'plotNr',
                    'value' => array($plotAcfData['plotNr']),
                    'compare' => 'IN'
                )
            )
        ));

        if ($plotsPosts && is_array($plotsPosts) && !empty($plotsPosts)) {
            return $plotsPosts[0]->ID;
        }

        return wp_insert_post(array(
            'post_title' => 'Działka Nr ' . $plotAcfData['plotNr'],
            'post_status' => 'publish',
            'post_date' => date('Y-m-d H:i:s'),
            'post_author' => 1,
            'post_type' => 'plots'
        ));
    }
}

$plotsImporter = new PlotsImporter();

?>