<?php
/**
 * Template Name: Ceny działek
 * Template Post Type: osada-jaworek
 */

wp_head();
global $PlotsFront;

$PlotsFront->getScriptsAndStyles('Osada Jaworek');
?>

<section class="plots-map" data-plots-map>
    <div data-plots-sectors>
        <img class="plots-map__img" src="<?= get_theme_file_uri('/investitions/osada-jaworek/assets/main-map.png') ?>">
        <?= file_get_contents(get_theme_file_path('/investitions/osada-jaworek/assets/main-map-sectors.svg')) ?>
    </div>

    <div data-plots-sector="A">
        <div class="plots-map__back-btn">
            <div class="container">
                <div class="row">
                    <button data-plots-back-to-sectors>WRÓĆ DO MAPY SEKTORÓW</button>
                </div>
            </div>
        </div>

        <img class="plots-map__img" src="<?= get_theme_file_uri('/investitions/osada-jaworek/assets/sectorA.jpg') ?>">
        <?= file_get_contents(get_theme_file_path('/investitions/osada-jaworek/assets/sector-a-plots.svg')) ?>
    </div>
</section>

<?php
wp_footer();
?>
