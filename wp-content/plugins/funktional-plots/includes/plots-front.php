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
                $plotData['area'] = (int)$plotData['area'];
                $plotData['price'] = (int)$plotData['priceNetto'];
                $plotData['discount'] = (int)$plotData['discount'];
                $plotData['type']  = (int)$plotData['plot_type'];

                // RABAT 
                if ($plotData['discount'] > 0) {
                    $plotData['priceAfterDiscount'] = ($plotData['priceNetto'] - (($plotData['priceNetto'] * $plotData['discount']) / 100));
                    $plotData['differenceCount'] = ($plotData['price'] - $plotData['priceAfterDiscount']);
                    $plotData['difference'] = round($plotData['differenceCount']);
                }
                else{
                    $plotData['difference'] = "";

                }

                // BUDOWLANA
                // nie działa ten if
                if ($plotData['type'] === 'budowlana') {

                    // w sumie tu trzeba zrobić tak że jak nie ma rabatu żeby tam się wogóle element nie pokazywał choć chyba można to tuaj ogarnąc na jednej zmiennje?( lista działek)
                    
                    // Cena przed rabatem 
                    $plotData['priceBeforeDiscount'] = $plotData['price'];
                    // Cena po rabacie 
                    $plotData['priceAfterDiscount'] = $plotData['priceAfterDiscount'] . ' zł';
                
                    // Rata przed rabatem


                    // RATA po rabacie

                }



                // $plotData['priceBrutto'] = $plotData['priceNetto'] * 1.23;
                // $plotData['priceRate'] = $plotData['priceBrutto'] / 24;
                // $plotData['priceByM2'] = $plotData['priceBrutto'] / $plotData['area'];
                break;
        }

        return $plotData;
    }
}

global $PlotsFront;

$PlotsFront = new PlotsFront();
