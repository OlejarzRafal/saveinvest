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
    <div data-plots-info class="plotModal">
        <div class="plotModal-arrows" data-plots-info-on-selected>
            <button data-plots-info-prev class="plotModal-arrows__prev active"></button>
            <button data-plots-info-next class="plotModal-arrows__next active"></button>
        </div>
        <button data-plots-info-on-selected
                data-plots-info-close class="plotModal-close active"></button>

        <div class="plotModal-discount d-none" data-plots-info-show-if="discount">
            <div>TANIEJ O <span data-plots-info-param="discount"></span> ZŁ
            </div>
        </div>
        <div class="row">
            <figure class="plotModal-img">
                <img data-plots-info-image src="">
            </figure>
            <div class="plotModal-info">
                <div class="row">
                    <div class="plotModal-top">
                        <div class="plotModal-top__nr">
                            <p data-plots-info-param="sector|plotNr">D3</p>
                        </div>
                        <div class="plotModal-top__status">
                            <img class="status-ico" data-plots-info-show-if="status=wolna"
                                 src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                            <p data-plots-info-param="status">wolna</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="plotModal-left">
                        <div>Typ działki:</div>
                        <div>Powierzchnia:</div>
                        <div class="plotModal-left__price" data-plots-info-show-if="status=wolna">Cena
                            <span>brutto</span>:
                        </div>
                        <div class="plotModal-left__rate" data-plots-info-show-if="status=wolna">
                            <span>lub miesięcznie:</span></div>
                    </div>
                    <div class="plotModal-right">
                        <p class="plot-type" data-plots-info-param="plot_type">Budowlana</p>
                        <p class="plotModal-right__surface" data-plots-info-param="area">1046 m<sup>2</sup></p>
                        <div class="plotModal-right__price" data-plots-info-show-if="status=wolna">
                            <p data-plots-info-param="area">167360 zł</p>
                            <span class="plot-priceBeforeSales-JS d-none">167360 zł</span>
                        </div>
                        <div class="plotModal-right__rate" data-plots-info-show-if="status=wolna">
                            <p class="plot-rate-JS">brak możliwości zakupu na raty</p>
                            <span class="plot-rateBeforeSales-JS d-none"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="plotModal-bottom">
                <div class="plotModal-bottom__empty">KLIKNIJ DZIAŁKĘ</div>
                <div class="plotModal-buttons" data-plots-info-on-selected>
                    <a href="https://osadajaworek.pl/1/PlotsFiles/D/karty/D-3.pdf"
                       class="btn-pdf" target="_blank">
                        Pobierz kartę
                    </a>
                    <a href="#"
                       class="btn-message" target="_blank">
                        Wiadomość
                    </a>
                </div>
            </div>
        </div>
    </div>

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
