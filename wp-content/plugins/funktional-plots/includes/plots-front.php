<?php

class PlotsFront
{
    public function getScriptsAndStyles($investitionName)
    {
        echo '<script> window.FunktionalPlots = ' . json_encode($this->getPlotsForInvestition($investitionName)) . '</script>';
        echo '<link rel="stylesheet" href="' . home_url('/wp-content/plugins/funktional-plots/dist/front/css/front.css?') . filemtime(__DIR__ . '/../dist/front/css/front.css') . '">';
        echo '<script src="' . home_url('/wp-content/plugins/funktional-plots/dist/front/js/front.js?') . filemtime(__DIR__ . '/../dist/front/js/front.js') . '"></script>';
    }

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

                if ($field['type'] === 'number') {
                    $plotsData[$index][$field['name']] = (float)$plotsData[$index][$field['name']];
                }
            }

            $plotsData[$index] = $this->calculatePlotPrices($plotsData[$index]);
        }

        return $plotsData;
    }

    private function calculatePlotPrices($plotData)
    {
        $investition = $plotData['investition']['value'];

        switch ($investition) {
            case 'INVESTITION':
                // TODO do something special for some investitions!
                break;
            default:
                $plotData['area'] = (float)$plotData['area'];
                $plotData['price'] = (float)$plotData['priceNetto'];
                $plotData['discount'] = (float)$plotData['discount'];
                $plotData['type'] = $plotData['plot_type'];

                // RABAT 
                if ($plotData['discount'] > 0) {
                    // Cena 
                    $plotData['priceAfterDiscountCount'] = ($plotData['price'] - (($plotData['price'] * $plotData['discount']) / 100));
                    // Różnica
                    $plotData['differenceCount'] = ($plotData['price'] - $plotData['priceAfterDiscountCount']);
                    $plotData['difference'] = round($plotData['differenceCount']);
                } else {
                    // Różnica
                    $plotData['difference'] = "";
                }

                // Cena po rabacie 
                $plotData['priceAfterDiscount'] = round($plotData['priceAfterDiscountCount']);
                // Cena przed rabatem 
                $plotData['priceBeforeDiscount'] = round($plotData['price']);

                // RATA po rabacie
                $plotData['rateAfterDiscount'] =  round((($plotData['priceAfterDiscount'] - 12000) * 1.35 + 3690) / 84);
                // Rata przed rabatem
                $plotData['rateBeforeDiscount'] =  round((($plotData['price'] - 12000) * 1.35 + 3690) / 84);

                // BUDOWLANA
                // if ($plotData['type']['label'] === 'Budowlana') {
                //     $plotData['priceAfterDiscount'] = 100000000000000000;
                // }

                break;
        }
        return $plotData;
    }
}

global $PlotsFront;

$PlotsFront = new PlotsFront();
