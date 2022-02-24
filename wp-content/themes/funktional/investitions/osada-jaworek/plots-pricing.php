<?php
/**
 * Template Name: Ceny działek
 * Template Post Type: osada-jaworek
 */

get_template_part('investitions/osada-jaworek/header');
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

        <div class="plotModal-discount d-none" data-plot-info-show-if="discount">
            <div>TANIEJ O <span data-plot-info-param="discount"></span> ZŁ</div>
        </div>
        <div class="row">
            <figure class="plotModal-img">
                <img data-plot-info-image src="">
            </figure>
            <div class="plotModal-info">
                <div class="row">
                    <div class="plotModal-top">
                        <div class="plotModal-top__nr">
                            <p data-plot-info-param="sector|plotNr">=</p>
                        </div>
                        <div class="plotModal-top__status">
                            <div data-plot-info-show-if="status=wolna">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Wolna</p>
                            </div>
                            <div data-plot-info-show-if="status=sprzedana">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Sprzedana</p>
                            </div>
                            <div data-plot-info-show-if="status=zarezerwowana">
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
                        <p class="plotModal-left__price" data-plot-info-show-if="status=wolna">Cena brutto:</p>
                        <p class="plotModal-left__rate" data-plot-info-show-if="status=wolna">lub miesięcznie:</p>
                    </div>
                    <div class="plotModal-right">
                        <p class="plotModal-right__type" data-plot-info-param="plot_type">Budowlana</p>
                        <p class="plotModal-right__surface"><span data-plot-info-param="area"></span>m<sup>2</sup></p>
                        <div class="plotModal-right__price" data-plot-info-show-if="status=wolna">
                            <p><span data-plot-info-param="priceBrutto"></span> zł</p>
                        </div>
                        <div class="plotModal-right__rate" data-plot-info-show-if="status=wolna">
                            <p data-plot-info-show-if="!rate">brak możliwości zakupu na raty</p>
                            <p data-plot-info-show-if="rate"><span data-plot-info-param="rate"></span></p>
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
                       class="btn-pdf" target="_blank" data-plot-info-image-pdf-card>
                        Pobierz kartę
                    </a>
                    <a href="#"
                       class="btn-message" target="_blank" data-plot-info-image-send-message>
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

<section plots-collected-info>
    <div class="container">
        <div class="row">
            <div class="col">Sektor</div>
            <div class="col">A</div>
            <div class="col">B</div>
            <div class="col">C</div>
        </div>
        <div class="row">
            <div class="col">Liczba działek</div>
            <div class="col"><span plots-collected-count-by-sector="A"></span></div>
            <div class="col"><span plots-collected-count-by-sector="B"></span></div>
            <div class="col"><span plots-collected-count-by-sector="C"></span></div>
        </div>
        <div class="row">
            <div class="col">Wolne</div>
            <div class="col"><span plots-collected-available-count-by-sector="A"></span></div>
            <div class="col"><span plots-collected-available-count-by-sector="B"></span></div>
            <div class="col"><span plots-collected-available-count-by-sector="C"></span></div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12">
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
                    <div class="plot-status">
                        <div class="plot-status__header">Działka</div>
                        <div class="plot-status__number" data-plot-info-param="sector|plotNr"></div>
                        <div class="plot-status__status">
                            <div data-plot-info-show-if="status=wolna">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Wolna</p>
                            </div>
                            <div data-plot-info-show-if="status=sprzedana">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Sprzedana</p>
                            </div>
                            <div data-plot-info-show-if="status=zarezerwowana">
                                <img class="status-ico"
                                     src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Zarezerwowana</p>
                            </div>
                        </div>
                    </div>
                    <div class="plot-img">
                        <img src="" alt="" data-plot-info-image>
                    </div>
                    <div class="plot-info">
                        <div class="plot-info__text">
                            <div class="plot-text__type">Typ działki:</div>
                            <div class="plot-text__surface">Powierzchnia:</div>
                        </div>
                        <div class="plot-info__desc">
                            <div class="typ-dzialki" data-plot-info-param="plot_type"></div>
                            <div class="powierzchnia"><span data-plot-info-param="area"></span>m<sup>2</sup></div>
                        </div>
                    </div>
                    <div class="plot-link"></div>
                    <div class="plot-quality">
                        <img class="quality-ico quality-ico__one"
                             src="https://osadadziwnowek.pl/1/wp-content/themes/osada/assets/img/ico_dz1.png">
                        <img class="quality-ico quality-ico__two"
                             src="https://osadadziwnowek.pl/1/wp-content/themes/osada/assets/img/ico_dz2.png">
                        <img class="quality-ico quality-ico__three"
                             src="https://osadadziwnowek.pl/1/wp-content/themes/osada/assets/img/ico_dz3.png">
                    </div>
                </div>

                <div data-plot-list-baner-template>
                    <br>
                    =================================================================================================================
                    <br>
                    TODO BANER TODO
                    <br>
                    =================================================================================================================
                    <br>
                </div>

                <div data-plot-list-container></div>

                <div data-plot-list-pagination></div>
            </section>
        </div>
    </div>
</div>

<?php
get_template_part('investitions/osada-jaworek/footer');
?>
