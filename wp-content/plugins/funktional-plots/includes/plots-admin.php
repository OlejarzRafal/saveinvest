<?php

class PlotsAdmin
{
    function __construct()
    {
        add_action('rest_api_init', array($this, 'addAdminPlotsApiRoute'));
    }

    public function addAdminPlotsApiRoute()
    {
        register_rest_route('funktional-plots/v1', '/filters', array(
            'methods' => 'POST',
            'callback' => array($this, 'getFiltersValues'),
        ));

        register_rest_route('funktional-plots/v1', '/plots', array(
            'methods' => 'POST',
            'callback' => array($this, 'getPlots'),
        ));

        register_rest_route('funktional-plots/v1', '/update', array(
            'methods' => 'PUT',
            'callback' => array($this, 'updatePlot'),
        ));

        register_rest_route('funktional-plots/v1', '/update-multiple', array(
            'methods' => 'PUT',
            'callback' => array($this, 'updatePlots'),
        ));
    }

    public function getFiltersValues()
    {
        require(__DIR__ . '/../model/plots-acf-fields.php');

        global $wpdb;
        $fieldsNames = array();
        $numberFields = array();

        foreach ($plotsAcfArray['fields'] as $field) {
            $fieldsNames[] = "'" . $field['name'] . "' ";

            if ($field['type'] === 'number') {
                $numberFields[] = $field['name'];
            }
        }

        $sql = "SELECT meta_key as name, GROUP_CONCAT(meta_value) as value FROM " . $wpdb->prefix . "postmeta WHERE meta_key IN (" . implode(',', $fieldsNames) . ") GROUP BY meta_key";

        $filtersValues = $wpdb->get_results($sql);

        foreach ($filtersValues as &$value) {
            $value->value = explode(',', $value->value);

            if (in_array($value->name, $numberFields)) {
                $min = 0;
                $max = 0;

                foreach ($value->value as $numberValue) {
                    if ((int)$numberValue > $max) {
                        $max = (int)$numberValue;
                    }

                    if ((int)$numberValue < $min) {
                        $min = (int)$numberValue;
                    }
                }

                $value->value = array('min' => $min, 'max' => $max);
            } else {
                $uniqueValues = array();

                foreach ($value->value as $textValue) {
                    if (!in_array($textValue, $uniqueValues)) {
                        $uniqueValues[] = $textValue;
                    }
                }

                foreach ($uniqueValues as &$uniqueValue) {
                    foreach ($plotsAcfArray['fields'] as $field) {
                        if ($field['name'] === $value->name) {
                            foreach ($field['choices'] as $choice => $choiceName) {
                                if ($choice === $uniqueValue) {
                                    $uniqueValue = array('name' => $choiceName, 'value' => $uniqueValue);
                                }
                            }
                        }
                    }
                }

                $value->value = $uniqueValues;
            }
        }

        echo json_encode($filtersValues);
        exit();
    }

    public function getPlots($data)
    {
        $meta_query = $this->getMetaQueryByFilters($data['filters']);

        $plotsPosts = get_posts(array(
            'post_type' => 'plots',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_query' => $meta_query
        ));

        echo json_encode($this->getPlotsObjectFromPosts($plotsPosts));
        exit();
    }

    public function updatePlot($data, $echo = true)
    {
        $plotId = (int)$data['data']['plotId'];

        $plotPost = get_post($plotId);

        if (empty($plotPost)) {
            die(404);
        }

        foreach ($data['data']['fields'] as $name => $field) {
            update_post_meta($plotId, $name, $field);
        }

        if ($echo) {
            echo json_encode(array('status' => 'OK'));
        } else {
            return true;
        }
    }

    public function updatePlots($data)
    {
        foreach ($data['data'] as $plotData) {
            if (!$this->updatePlot(array('data' => $plotData), false)) {
                die(500);
            }
        }

        echo json_encode(array('status' => 'OK'));
    }

    private function getPlotsObjectFromPosts($plotsPosts)
    {
        require(__DIR__ . '/../model/plots-acf-fields.php');

        $plotsData = array();

        foreach ($plotsPosts as $index => $plotPost) {
            $plotsData[$index] = array('postId' => $plotPost->ID);

            foreach ($plotsAcfArray['fields'] as $field) {
                $plotsData[$index][$field['name']] = get_field($field['name'], $plotPost->ID);
            }
        }

        return $plotsData;
    }

    private function getMetaQueryByFilters($filters)
    {
        $meta_query = array();

        foreach ($filters as $filter) {
            if (!isset($filter['value'])) {
                continue;
            }

            if (is_array($filter['value'])) {
                $meta_query[] = array(
                    'key' => $filter['name'],
                    'value' => array((int)$filter['value']['min'], (int)$filter['value']['max']),
                    'compare' => 'BETWEEN',
                    'type' => 'NUMERIC'
                );
            } else if (!empty($filter['value'])) {
                $meta_query[] = array(
                    'key' => $filter['name'],
                    'value' => array($filter['value'] === 'empty' ? '' : $filter['value']),
                    'compare' => 'IN'
                );
            }
        }

        return $meta_query;
    }
}

$plotsAdmin = new PlotsAdmin();
?>