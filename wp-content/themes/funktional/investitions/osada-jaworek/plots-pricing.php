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
            <button data-plots-info-prev class="plotModal-arrows__prev"></button>
            <button data-plots-info-next class="plotModal-arrows__next"></button>
        </div>
        <button data-plots-info-on-selected
                data-plots-info-close class="plotModal-close"></button>

        <div class="plotModal-discount d-none" data-plots-info-show-if="discount">
            <div>TANIEJ O <span data-plots-info-param="discount"></span> ZŁ</div>
        </div>
        <div class="row">
            <figure class="plotModal-img">
                <img data-plots-info-image src="">
            </figure>
            <div class="plotModal-info">
                <div class="row">
                    <div class="plotModal-top">
                        <div class="plotModal-top__nr">
                            <p data-plots-info-param="sector|plotNr">=</p>
                        </div>
                        <div class="plotModal-top__status">
                            <div data-plots-info-show-if="status=wolna">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Wolna</p>
                            </div>
                            <div data-plots-info-show-if="status=sprzedana">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Sprzedana</p>
                            </div>
                            <div data-plots-info-show-if="status=zarezerwowana">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Zarezerwowana</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="plotModal-left">
                        <p class="plotModal-left__type">Typ działki:</p>
                        <p class="plotModal-left__surface">Powierzchnia:</p>
                        <p class="plotModal-left__price" data-plots-info-show-if="status=wolna">Cena brutto:</p>
                        <p class="plotModal-left__rate" data-plots-info-show-if="status=wolna">lub miesięcznie:</p>
                    </div>
                    <div class="plotModal-right">
                        <p class="plotModal-right__type" data-plots-info-param="plot_type">Budowlana</p>
                        <p class="plotModal-right__surface"><span data-plots-info-param="area"></span>m<sup>2</sup></p>
                        <div class="plotModal-right__price" data-plots-info-show-if="status=wolna">
                            <p><span data-plots-info-param="priceBrutto"></span> zł</p>
                        </div>
                        <div class="plotModal-right__rate" data-plots-info-show-if="status=wolna">
                            <p data-plots-info-show-if="!rate">brak możliwości zakupu na raty</p>
                            <p data-plots-info-show-if="rate"><span data-plots-info-param="rate"></span></p>
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

<section class="plots-list" data-plot-list>
    <h2>Lista działek</h2>

    <select data-plot-list-filter="sector"></select>

    <div class="plot-list__sorting">
        <div class="plot-list__sorting__item">
            <span>Numer działki</span>
            <div class="plot-list__sorting__item__direction">
                <button class="asc" data-plot-list-sort="plotNr|asc"></button>
                <button class="desc" data-plot-list-sort="plotNr|desc"></button>
            </div>
        </div>
        <div class="plot-list__sorting__item">
            <span>Cena</span>
            <div class="plot-list__sorting__item__direction">
                <button class="asc" data-plot-list-sort="priceNetto|asc"></button>
                <button class="desc" data-plot-list-sort="priceNetto|desc"></button>
            </div>
        </div>
        <div class="plot-list__sorting__item">
            <span>Powierzchnia</span>
            <div class="plot-list__sorting__item__direction">
                <button class="asc" data-plot-list-sort="area|asc"></button>
                <button class="desc" data-plot-list-sort="area|desc"></button>
            </div>
        </div>
        <div class="plot-list__sorting__item">
            <span>Typ działki</span>
            <div class="plot-list__sorting__item__direction">
                <button class="asc" data-plot-list-sort="plot_type|asc"></button>
                <button class="desc" data-plot-list-sort="plot_type|desc"></button>
            </div>
        </div>
    </div>

    <div data-plot-list-plot-template>

    </div>

    <div data-plot-list-baner-template>

    </div>

    <div data-plot-list-container></div>
</section>

<?php
wp_footer();
?>
