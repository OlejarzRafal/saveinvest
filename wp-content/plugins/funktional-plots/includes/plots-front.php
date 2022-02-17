<?php

class PlotsFront
{
    public function getPlotsForInvestition($investitionName)
    {
        $plotsPosts = get_posts(array(
            'post_type' => 'plots',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_query' => array(
                array(
                    'key' => 'investition',
                    'value' => array($investitionName),
                    'compare' => 'IN'
                )
            )
        ));

        return $this->getPlotsObjectFromPosts($plotsPosts);
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

            $plotsData[$index]['priceBrutto'] = $this->calculatePlotPriceBrutto($plotsData[$index]);
        }

        return $plotsData;
    }

    private function calculatePlotPriceBrutto($plotData)
    {
        $priceBrutto = 0;
        $investition = $plotData['investition']['value'];

        switch ($investition) {
            case 'Osada Jaworek':
                $priceBrutto = (int) $plotData['priceNetto'] * 1.23;
                break;
        }

        return $priceBrutto;
    }
}

global $PlotsFront;

$PlotsFront = new PlotsFront();
