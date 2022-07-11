<?php
require_once("./../../../../wp-load.php");

date_default_timezone_set("Europe/Warsaw");

$REPORT_MAIL_LIST = array(
    'testdevtom7@gmail.com'
);

// $date_utc = (int) (time() - date("Z"));
$date_utc = (int) time();
echo 'data aktualna: ' . $date_utc . '<br>';

$meta_query = array(
    array(
        'key' => 'discount_date',
        'compare' => 'EXISTS',
    ),
    array(
        'key' => 'discount_date',
        'compare' => '!=',
        'value' => ''
    )
);

// plots with discount date
$plotsPosts = get_posts(array(
    'post_type' => 'plots',
    'posts_per_page' => -1,
    'post_status' => array('publish', 'private'),
    'meta_query' => $meta_query
));

$plotsWithOutdatedPromotion = array();

foreach ($plotsPosts as $plotsPost) {
    echo 'data ustawiona w wp: ' . (int) get_field('discount_date', $plotsPost->ID) . '<br><br>';
    $promotionIsOutdated = (int) get_field('discount_date', $plotsPost->ID) < $date_utc;
    if ($promotionIsOutdated) {
        echo 'po promocji!!! <br><br>';

        update_field('discount_date', '', $plotsPost->ID);
        update_field('discount', '', $plotsPost->ID);

        array_push($plotsWithOutdatedPromotion, array(
            'investition' => get_field('investition', $plotsPost->ID),
            'sector' => get_field('sector', $plotsPost->ID),
            'plotNr' => get_field('plotNr', $plotsPost->ID),
            'discount_date' => get_field('discount_date', $plotsPost->ID),
            'discount' => get_field('discount', $plotsPost->ID),
        ));
    }
}


$plotsWithOutdatedPromotionHtml = '<h4>Skończył się rabat dla: </h4><ul>';
foreach ($plotsWithOutdatedPromotion as $plot) {
    $plotsWithOutdatedPromotionHtml .= '<li>' . $plot['investition']['label'] . ' ' . $plot['sector']['label'] . $plot['plotNr'] . ' (' . $plot['discount'] . '% do ' . date('H:i d-m-Y', $plot['discount_date']) . ')' . '</li>';
}
$plotsWithOutdatedPromotionHtml .= '</ul>';

echo 'true';

foreach ($REPORT_MAIL_LIST as $mailTo) {
    wp_mail($mailTo, 'Skończył się rabat', $plotsWithOutdatedPromotionHtml);
}
