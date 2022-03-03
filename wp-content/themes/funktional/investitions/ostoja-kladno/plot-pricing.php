<?php

/**
 * Template Name: Ceny działek
 * Template Post Type: ostoja-kladno
 */

get_template_part('investitions/ostoja-kladno/header');
global $PlotsFront;

$PlotsFront->getScriptsAndStyles('Ostoja Kładno');
?>



<section class="plots-map" data-plots-map>

    <div data-plots-info class="plotModal">
        <div class="plotModal-arrows" data-plots-info-on-selected>
            <div data-plots-info-prev class="plotModal-arrows__prev"></div>
            <div data-plots-info-next class="plotModal-arrows__next"></div>
        </div>
        <div data-plots-info-on-selected data-plots-info-close class="plotModal-close">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/ico/close.png');?>" alt="close">
        </div>
        <div class="plot-difference" data-plot-info-show-if="discount">
                <p>TANIEJ O <span data-plot-info-param="difference"></span> zł</p>
        </div>
        <div class="plotModal-content">

        
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
                                <img class="status-ico" src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Wolna</p>
                            </div>
                            <div data-plot-info-show-if="status=sprzedana">
                                <img class="status-ico" src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
                                <p>Sprzedana</p>
                            </div>
                            <div data-plot-info-show-if="status=zarezerwowana">
                                <img class="status-ico" src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/status-wolna.png">
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
                        <p class="plotModal-right__type" data-plot-info-param="plot_type"></p>
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
        
        <!-- <div class="plotModal-btn">
            
                <div class="plotModal-bottom__empty">KLIKNIJ DZIAŁKĘ</div>
                <div class="plotModal-buttons" data-plots-info-on-selected>
                    <a href="https://osadajaworek.pl/1/PlotsFiles/D/karty/D-3.pdf" class="btn-pdf" target="_blank" data-plot-info-image-pdf-card>
                        Pobierz kartę
                    </a>
                    <a href="#" class="btn-message" target="_blank" data-plot-info-image-send-message>
                        Wiadomość
                    </a>
                </div>
        
        </div> -->
    </div>

    <div data-plots-sectors>
        <img class="plots-map__img" src="<?= get_theme_file_uri('/investitions/ostoja-kladno/assets/main-map.png') ?>">
        <?= file_get_contents(get_theme_file_path('/investitions/ostoja-kladno/assets/main-map-sectors.svg')) ?>
    </div>

    <div data-plots-sector="A">
        <div class="plots-map__back-btn">
            <div class="container">
                <div class="row">
                    <button data-plots-back-to-sectors>WRÓĆ DO MAPY SEKTORÓW</button>
                </div>
            </div>
        </div>

        <img class="plots-map__img" src="<?= get_theme_file_uri('/investitions/ostoja-kladno/assets/sectorA.jpg') ?>">
        <?= file_get_contents(get_theme_file_path('/investitions/ostoja-kladno/assets/sector-a-plots.svg')) ?>
    </div>
</section>

<!-- ****************************** -->
<!-- ****************************** -->
<!-- INFO O DOSTĘPNOŚCI-->
<!-- ****************************** -->
<!-- ****************************** -->
<!-- <section plots-collected-info>
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
</section> -->

<!-- ****************************** -->
<!-- ****************************** -->
<!-- LISTA DZIAŁEK -->
<!-- ****************************** -->
<!-- ****************************** -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <section class="plots-list" data-plot-list>

                <div class="plots-list__header">
                    <div class="row">
                        <div class="col-10">
                            <div class="plots-list__header__desc">
                                <h2 class="f-h2">Lista działek</h2>
                                <div class="text-main">
                                    Do ceny netto należy doliczyć 23% podatku VAT. Przedsiębiorca otrzymuje zwrot podatku VAT w ciągu 30 lub 60 dni od wystąpienia o zwrot do urzędu skarbowego. Nakłady inwestycyjne związane z budową basenu i części rekreacyjnej oraz utwardzeniem drogi wewnętrznej zostaną podzielone na wszystkich właścicieli działek.
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="plots-list__header__img">
                                <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image1.svg') ?>" alt="17 lat doświadczenia"> -->
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image2big.svg') ?>" alt="gwarancja najwyższej jakości">
                                <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image3.svg') ?>" alt="700 zadowolonych klientów"> -->
                                <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image2small.svg') ?>" alt="gwarancja najwyższej jakości"> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <select data-plot-list-filter="sector"></select> -->

                <div class="plots-list__sorting">
                    <div class="plots-list__sorting__list">
                        <div>
                            <span class="plots-list__sorting__header">Sortuj po:</span>
                        </div>
                        <div class="plots-list__sorting__item">
                            <span>Numer działki</span>
                            <div class="plots-list__sorting__item__direction">
                                <button class="asc" data-plot-list-sort="plotNr|asc"></button>
                                <button class="desc" data-plot-list-sort="plotNr|desc"></button>
                            </div>
                        </div>
                        <div class="plots-list__sorting__item">
                            <span>Cena</span>
                            <div class="plots-list__sorting__item__direction">
                                <button class="asc" data-plot-list-sort="priceNetto|asc"></button>
                                <button class="desc" data-plot-list-sort="priceNetto|desc"></button>
                            </div>
                        </div>
                        <div class="plots-list__sorting__item">
                            <span>Powierzchnia</span>
                            <div class="plots-list__sorting__item__direction">
                                <button class="asc" data-plot-list-sort="area|asc"></button>
                                <button class="desc" data-plot-list-sort="area|desc"></button>
                            </div>
                        </div>
                        <div class="plots-list__sorting__item">
                            <span>Typ działki</span>
                            <div class="plots-list__sorting__item__direction">
                                <button class="asc" data-plot-list-sort="plot_type|asc"></button>
                                <button class="desc" data-plot-list-sort="plot_type|desc"></button>
                            </div>
                        </div>
                    </div>
                    <div class="plots-list__sorting__hideEmpty">
                        <label class="sold-wrap">
                            <input type="checkbox" class="input-sold" name="sold" data-plot-list-hide-sold>
                            <span class="checkmark"></span>
                            Ukryj sprzedane działki
                        </label>
                    </div>
                </div>

                <div data-plot-list-plot-template>
                    <div class="plot-item" data-plot-class-param="status">
                        <div class="plot-status">
                            <div class="plot-status__header">Działka</div>
                            <div class="plot-status__number" data-plot-info-param="sector|plotNr"></div>
                            <div class="plot-status__status">
                                <div data-plot-info-show-if="status=wolna">
                                    <img class="status-ico" src="<?= get_theme_file_uri('/investitions/ostoja-kladno/assets/check.png') ?>">
                                    <span>wolna</span>
                                </div>
                                <div data-plot-info-show-if="status=sprzedana">
                                    <img class="status-ico" src="<?= get_theme_file_uri('/investitions/ostoja-kladno/assets/x-circle.png') ?>">
                                    <span>sprzedana</span>
                                </div>
                                <div data-plot-info-show-if="status=zarezerwowana">
                                    <img class="status-ico" src="<?= get_theme_file_uri('/investitions/ostoja-kladno/assets/lock.png') ?>">
                                    <span>zarezerwowana</sp>
                                </div>
                            </div>
                        </div>
                        <div class="plot-img">
                            <img class="status-ico" src="<?= get_theme_file_uri('/investitions/ostoja-kladno/assets/plot-demo.png') ?>">
                            <!-- <img src="" alt="" data-plot-info-image> -->
                        </div>
                        <div class="plot-info ">
                            <div class="plot-info__text">
                                <div class="plot-text__type">Typ działki:</div>
                                <div class="plot-text__surface">Powierzchnia:</div>
                                <div class="plot-text__price" data-plot-info-show-if="status=wolna">Cena netto:</div>
                                <div class="plot-text__priceMonth" data-plot-info-show-if="status=wolna">Lub miesięcznie:</div>
                            </div>
                            <div class="plot-info__desc ">
                                <div class="plot-desc__type" data-plot-info-param="plot_type"></div>
                                <div class="plot-desc__sufrace"><span data-plot-info-param="area"></span> m<sup>2</sup></div>
                                <div class="plot-desc__price" data-plot-info-show-if="status=wolna">
                                    <!-- if discount -->
                                    <p class="plot-desc__price__afterDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="priceAfterDiscount"></span> zł</p>
                                    <p class="plot-desc__price__beforeDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="priceBeforeDiscount"></span> zł</p>
                                    <!-- if not discount -->
                                    <p class="" data-plot-info-show-if="!discount"><span data-plot-info-param="priceBeforeDiscount"></span> zł</p>
                                </div>
                                <div class="plot-desc__rate" data-plot-info-show-if="status=wolna">
                                    <!-- <p data-plot-info-show-if="!rateAfterSalesCount">brak możliwości zakupu na raty</p> -->
                                    <!-- if discount -->
                                    <p class="plot-desc__rate__afterDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="rateAfterDiscount"></span> zł</p>
                                    <p class="plot-desc__rate__beforeDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="rateBeforeDiscount"></span> zł</p>
                                    <!-- if not discount -->
                                    <p class="" data-plot-info-show-if="!discount"><span data-plot-info-param="rateBeforeDiscount"></span> zł</p>
                                </div>

                            </div>
                        </div>
                        <div class="plot-contact" data-plots-info-on-selected>
                            <a href="#" class="plot-contact__btn plot-contact__btn--gold" target="_blank" data-plot-info-image-send-message>
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/invest-kladno/mail.svg'); ?><span>WIADOMOŚĆ</span>
                            </a>
                            <a href="#" class="plot-contact__btn" target="_blank" data-plot-info-image-pdf-card>
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/invest-kladno/download.svg'); ?><span>POBIERZ KARTĘ</span>
                            </a>
                        </div>
                        <div class="plot-quality">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image1.svg') ?>" alt="17 lat doświadczenia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image3.svg') ?>" alt="700 zadowolonych klientów">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image2small.svg') ?>" alt="gwarancja najwyższej jakości">
                        </div>
                        <div class="plot-difference" data-plot-info-show-if="discount">
                            <p>TANIEJ O <span data-plot-info-param="difference"></span> zł</p>
                        </div>
                    </div>
                </div>

                <div data-plot-list-baner-template>
                    <div class="plot-baner">
                        <img class="status-ico" src="<?= get_theme_file_uri('/investitions/ostoja-kladno/assets/baner.png') ?>">

                        <div class="plot-baner__content">
                            <h4>Kup działkę na raty</h4>
                            <a href="<?php the_permalink(369); ?>" class="btn btn__line">DOWIEDZ SIĘ WIĘCEJ </a>
                        </div>
                    </div>
                </div>


                <div class="plots-all" data-plot-list-container></div>


                <!-- Paginacja -->
                <div data-plot-list-pagination></div>


                <div class="plots-bottom-info">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 col-12">
                            <div class="plots-bottom-info__desc text-main">
                                Do ceny netto należy doliczyć 23% podatku VAT. Przedsiębiorca otrzymuje zwrot podatku VAT w ciągu 30 lub 60 dni od wystąpienia o zwrot do urzędu skarbowego. Nakłady inwestycyjne związane z budową basenu i części rekreacyjnej oraz utwardzeniem drogi wewnętrznej zostaną podzielone na wszystkich właścicieli działek.
                            </div>
                            <div class="plots-bottom-info__logos">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image3.svg') ?>" alt="700 zadowolonych klientów">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image2small.svg') ?>" alt="gwarancja najwyższej jakości">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo/image1.svg') ?>" alt="17 lat doświadczenia">
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>

<?php
get_template_part('investitions/ostoja-kladno/footer');
?>