<?php

class PlotsAdmin
{
    function __construct()
    {
        add_action('init', array($this, 'redirectToValidPlotsPage'));
        add_action('rest_api_init', array($this, 'addAdminPlotsApiRoute'));
        add_action('admin_head', array($this, 'addBackToPlotsLink'));
    }

    public function redirectToValidPlotsPage()
    {
        global $pagenow;

        if ($pagenow === 'edit.php' && isset($_GET) && isset($_GET['post_type']) && $_GET['post_type'] === 'plots') {
            wp_redirect(admin_url('/admin.php?page=plots'));
            exit();
        }
    }

    public function addAdminPlotsApiRoute()
    {
        // TODO add security to this endpoints

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

        register_rest_route('funktional-plots/v1', '/remove-plot', array(
            'methods' => 'DELETE',
            'callback' => array($this, 'removePlot'),
        ));

        register_rest_route('funktional-plots/v1', '/set-plot-status', array(
            'methods' => 'POST',
            'callback' => array($this, 'setPlotStatus'),
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

        $sql = "SELECT pm.meta_key as name, pm.meta_value as value 
                FROM " . $wpdb->prefix . "postmeta pm
                INNER JOIN " . $wpdb->prefix . "posts p ON p.ID = pm.post_id
                WHERE p.post_status = 'publish' AND pm.meta_key IN (" . implode(',', $fieldsNames) . ")";

        $filtersValues = $wpdb->get_results($sql);
        $groupedFiltersValues = array();

        foreach ($filtersValues as $value) {
            if (!isset($groupedFiltersValues[$value->name])) {
                $groupedFiltersValues[$value->name] = array();
            }

            if (!in_array($value->value, $groupedFiltersValues[$value->name])) {
                array_push($groupedFiltersValues[$value->name], $value->value);
            }
        }

        foreach ($groupedFiltersValues as $name => &$values) {
            if (in_array($name, $numberFields)) {
                $min = 0;
                $max = 0;

                foreach ($values as $numberValue) {
                    if ((int)$numberValue > $max) {
                        $max = (int)$numberValue;
                    }

                    if ((int)$numberValue < $min) {
                        $min = (int)$numberValue;
                    }
                }

                $values = array('min' => $min, 'max' => $max);
            } else {
                foreach ($plotsAcfArray['fields'] as $field) {
                    if ($field['name'] === $name) {
                        foreach ($values as $index => $value) {
                            $values[$index] = array('name' => $field['choices'][$value], 'value' => $value);
                        }
                    }
                }
            }
        }

        $filterData = array();

        foreach ($groupedFiltersValues as $name => $value) {
            array_push($filterData, array('name' => $name, 'value' => $value));
        }

        echo json_encode($filterData);
        exit();
    }

    public function getPlots($data)
    {
        $meta_query = $this->getMetaQueryByFilters($data['filters']);

        $plotsPosts = get_posts(array(
            'post_type' => 'plots',
            'posts_per_page' => -1,
            'post_status' => array('publish', 'private'),
            'meta_query' => $meta_query,
            'orderby' => in_array($data['sort']['sortBy'], array('plotNr', 'discount', 'priceNetto', 'area')) ? 'meta_value_num' : 'meta_value',
            'meta_key' => $data['sort']['sortBy'],
            'order' => strtoupper($data['sort']['sort'])
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

    public function addBackToPlotsLink()
    {
        echo '<script>
                (function($) {
                  $(document).ready(function () {
                      if ($(".acf-postbox .postbox-header > h2").length && $(".acf-postbox .postbox-header > h2").text() === "Działka") {
                         jQuery("h1.wp-heading-inline + .page-title-action").after("<a href=\\"' . admin_url('/admin.php?page=plots') . '\\" class=\\"page-title-action\\">Powrót do listy działek</a>")
                      }
                  })
                })(jQuery);
        </script>';
    }

    private function getPlotsObjectFromPosts($plotsPosts)
    {
        require(__DIR__ . '/../model/plots-acf-fields.php');

        $plotsData = array();

        foreach ($plotsPosts as $index => $plotPost) {
            $plotsData[$index] = array('postId' => $plotPost->ID);

            $plotsData[$index]['postStatus'] = $plotPost->post_status === 'publish';

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

            if (is_array($filter['value']) && isset($filter['value']['min']) && isset($filter['value']['max'])) {
                $meta_query[] = array(
                    'key' => $filter['name'],
                    'value' => array((int)$filter['value']['min'], (int)$filter['value']['max']),
                    'compare' => 'BETWEEN',
                    'type' => 'NUMERIC'
                );
            } else if (!empty($filter['value'])) {
                $meta_query[] = array(
                    'key' => $filter['name'],
                    'value' => is_array($filter['value']) ? $filter['value'] : array($filter['value'] === 'empty' ? '' : $filter['value']),
                    'compare' => 'IN'
                );
            }
        }

        return $meta_query;
    }

    public function removePlot($data)
    {
        if (!wp_delete_post((int)$data['plotId'])) {
            echo false;
        } else {
            echo true;
        }
        exit();
    }

    public function setPlotStatus($data)
    {
        if (!wp_update_post(array(
            'ID' => (int)$data['plotId'],
            'post_status' => $data['status'] === 'true' ? 'publish' : 'private'
        ))) {
            echo false;
        } else {
            echo true;
        }
        exit();
    }
}

$plotsAdmin = new PlotsAdmin();

?>