<?php

/**
 * Template Name: Ceny działek sea-golf
 * Template Post Type: sea-golf
 */

get_template_part('investitions/sea-golf/header');
global $PlotsFront;

$PlotsFront->getScriptsAndStyles('Resort Sea&golf');
?>

<section class="plots-map" data-plots-map>
    <!-- MODAL -->
    <div data-plots-info class="plotModal">
        <div class="plotModal__item" data-plot-class-param="status">
            <!-- ARROWS -->
            <div class="plotModal-arrows" data-plots-info-on-selected>
                <div data-plots-info-prev class="plotModal-arrows__prev"></div>
                <div data-plots-info-next class="plotModal-arrows__next"></div>
            </div>
            <!-- CLOSE -->
            <div data-plots-info-on-selected data-plots-info-close class="plotModal-close">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/ico/close.png" alt="close">
            </div>
            <!-- DIFFERENCE -->
            <div class="plotModal-difference" data-plot-info-show-if="discount">
                <p>TANIEJ O <span data-plot-info-param="difference"></span> zł</p>
            </div>
            <!-- CONTENT -->
            <div class="plotModal-content">
                <figure class="plotModal-content__img">
                    <img data-plot-info-image src="">
                </figure>
                <div class="plotModal-content__desc">

                    <div class="plotModal-status">
                        <div class="plotModal-status__number" data-plot-info-param="sector|plotNr"></div>
                        <div class="plotModal-status__status">
                            <div data-plot-info-show-if="status=wolna">
                                <img class="status-ico" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/check.png') ?>">
                                <span>wolna</span>
                            </div>
                            <div data-plot-info-show-if="status=sprzedana">
                                <img class="status-ico" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/x-circle.png') ?>">
                                <span>sprzedana</span>
                            </div>
                            <div data-plot-info-show-if="status=zarezerwowana">
                                <img class="status-ico" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/lock.png') ?>">
                                <span>zarezerwowana</sp>
                            </div>
                        </div>
                    </div>

                    <div class="plotModal-info">
                        <div class="plotModal-info__text">
                            <div class="plot-text__type">Typ działki:</div>
                            <div class="plot-text__surface">Powierzchnia:</div>
                            <div class="plot-text__price" data-plot-info-show-if="status!=sprzedana">Cena netto:</div>
                            <div class="plot-text__priceMonth" data-plot-info-show-if="status!=sprzedana">Lub miesięcznie:</div>
                        </div>
                        <div class="plotModal-info__desc ">
                            <div class="plot-desc__type" data-plot-info-param="plot_type"></div>
                            <div class="plot-desc__sufrace"><span data-plot-info-param="area"></span> m<sup>2</sup></div>
                            <div class="plot-desc__price" data-plot-info-show-if="status!=sprzedana">
                                <!-- if discount -->
                                <p class="plot-desc__price__afterDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="priceAfterDiscount"></span> zł</p>
                                <p class="plot-desc__price__beforeDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="priceBeforeDiscount"></span> zł</p>
                                <!-- if not discount -->
                                <p class="" data-plot-info-show-if="!discount"><span data-plot-info-param="priceBeforeDiscount"></span> zł</p>
                            </div>
                            <div class="plot-desc__rate" data-plot-info-show-if="status!=sprzedana">
                                <!-- <p data-plot-info-show-if="!rateAfterSalesCount">brak możliwości zakupu na raty</p> -->
                                <!-- if discount -->
                                <p class="plot-desc__rate__afterDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="rateAfterDiscount"></span> zł</p>
                                <p class="plot-desc__rate__beforeDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="rateBeforeDiscount"></span> zł</p>
                                <!-- if not discount -->
                                <p class="" data-plot-info-show-if="!discount"><span data-plot-info-param="rateBeforeDiscount"></span> zł</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- BUTTONS -->
            <div class="plotModal-btn">
                <div class="plotModal-btn__clickplot">KLIKNIJ DZIAŁKĘ</div>
                <div class="plotModal-btn__buttons" data-plots-info-on-selected>
                    <a href="#" class="plotModal-btn__buttons__btn plotModal-btn__buttons__btn--gold" target="_blank" data-plot-info-image-send-message>
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/invest-kladno/mail.svg'); ?><span>WIADOMOŚĆ</span>
                    </a>
                    <a href="#" class="plotModal-btn__buttons__btn" target="_blank" data-plot-info-image-pdf-card>
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/invest-kladno/download.svg'); ?><span>POBIERZ KARTĘ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <!-- FOR SECTORS -->
    <div class="plot-sectors">
        <!-- ALL -->
        <div class="plot-sectors__all">
            <div data-plots-sectors>
                <div class="plot-sectors__desktop"><?php if ($sg_pricing_header_text = get_field('sg_pricing_header_text')) : ?>
                        <div class="plot-sectors__desktop__apla">
                            <div class="text-main text-main--white"><?php echo $sg_pricing_header_text; ?></div>
                        </div>
                    <?php endif; ?>
                    <img class="plot-sectors__img" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/sectors/desktop/All-desktop.jpg') ?>">
                    <?= file_get_contents(get_theme_file_path('/investitions/sea-golf/assets/sectors/desktop/All-desktop.svg')) ?>
                </div>
                <div class="plot-sectors__mobile  plot-sectors__all__mobile">
                    <img class="plot-sectors__img" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/sectors/mobile/All-mobile.png') ?>">
                    <?= file_get_contents(get_theme_file_path('/investitions/sea-golf/assets/sectors/mobile/All-mobile.svg')) ?>
                </div>
            </div>
        </div>
        <!-- SINGLE -->
        <div class="plot-sector__single">
            <div data-plots-sector="A">
                <div class="plot-sectors__desktop">
                    <img class="plot-sectors__img " src="<?= get_theme_file_uri('/investitions/sea-golf/assets/sectors/desktop/A-desktop.jpg') ?>">
                    <?= file_get_contents(get_theme_file_path('/investitions/sea-golf/assets/sectors/desktop/A-desktop.svg')) ?>
                </div>
                <div class="plot-sectors__mobile plot-sectors__single__mobile">
                    <img class="plot-sectors__img" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/sectors/mobile/A-mobile.png') ?>">
                    <?= file_get_contents(get_theme_file_path('/investitions/sea-golf/assets/sectors/mobile/A-mobile.svg')) ?>
                </div>

                <div class="plot-sectors__backMainMap">
                    <div data-plots-back-to-sectors>
                        <p>WRÓĆ DO MAPY SEKTORÓW</p>
                    </div>
                </div>
                <div class="plot-sectors__name">
                    <div class="container">
                        <!-- <h2 class="f-h2">Sektor A</h2> -->
                    </div>
                </div>

            </div>
        </div>
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
                        <div class="col-xl-10 col-lg-12">
                            <div class="plots-list__header__desc">
                                <?php if ($sg_pricing_title = get_field('sg_pricing_title')) : ?>
                                    <h2 class="f-h2 f-h2--black-dark"> <?php echo $sg_pricing_title; ?></h2>
                                <?php endif; ?>
                                <?php if ($sg_pricing_text = get_field('sg_pricing_text')) : ?>
                                    <div class="text-main"><?php echo $sg_pricing_text; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-0">
                            <div class="plots-list__header__img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-karwia/price/image2big.svg" alt="gwarancja najwyższej jakości">
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
                                    <img class="status-ico" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/check.png') ?>">
                                    <span>wolna</span>
                                </div>
                                <div data-plot-info-show-if="status=sprzedana">
                                    <img class="status-ico" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/x-circle.png') ?>">
                                    <span>sprzedana</span>
                                </div>
                                <div data-plot-info-show-if="status=zarezerwowana">
                                    <img class="status-ico" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/lock.png') ?>">
                                    <span>zarezerwowana</sp>
                                </div>
                            </div>
                        </div>
                        <div class="plot-img">
                            <img src="" alt="" data-plot-info-image>
                        </div>
                        <div class="plot-info ">
                            <div class="plot-info__text">
                                <div class="plot-text__type">Typ działki:</div>
                                <div class="plot-text__surface">Powierzchnia:</div>
                                <div class="plot-text__price" data-plot-info-show-if="status!=sprzedana">Cena netto:</div>
                                <div class="plot-text__priceMonth" data-plot-info-show-if="status!=sprzedana">Lub miesięcznie:</div>
                            </div>
                            <div class="plot-info__desc ">
                                <div class="plot-desc__type" data-plot-info-param="plot_type"></div>
                                <div class="plot-desc__sufrace"><span data-plot-info-param="area"></span> m<sup>2</sup></div>
                                <div class="plot-desc__price" data-plot-info-show-if="status!=sprzedana">
                                    <!-- if discount -->
                                    <p class="plot-desc__price__afterDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="priceAfterDiscount"></span> zł</p>
                                    <p class="plot-desc__price__beforeDiscount" data-plot-info-show-if="discount"><span data-plot-info-param="priceBeforeDiscount"></span> zł</p>
                                    <!-- if not discount -->
                                    <p class="" data-plot-info-show-if="!discount"><span data-plot-info-param="priceBeforeDiscount"></span> zł</p>
                                </div>
                                <div class="plot-desc__rate" data-plot-info-show-if="status!=sprzedana">
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
                            <a href="#" class="plot-contact__btn plot-contact__btn--gold" target="_blank" data-plot-info-image-send-message data-plot-info-show-if="status!=sprzedana">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/invest-kladno/mail.svg'); ?><span>WIADOMOŚĆ</span>
                            </a>
                            <a href="" class="plot-contact__btn" target="_blank" data-plot-info-image-pdf-card data-plot-info-show-if="status!=sprzedana">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/invest-kladno/download.svg'); ?><span>POBIERZ KARTĘ</span>
                            </a>
                        </div>
                        <div class="plot-quality">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo-new/image3.svg" alt="1000 zadowolonych klientów">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo-new/image2small.svg" alt="gwarancja najwyższej jakości">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo-new/image1.svg" alt="20 lat doświadczenia">
                        </div>
                        <div class="plot-difference" data-plot-info-show-if="discount">
                            <p>TANIEJ O <span data-plot-info-param="difference"></span> zł</p>
                        </div>
                    </div>
                </div>

                <div data-plot-list-baner-template>
                    <div class="plot-baner">
                        <img class="status-ico" src="<?= get_theme_file_uri('/investitions/sea-golf/assets/baner.jpg') ?>">

                        <div class="plot-baner__content">
                            <h4>Kup działkę na raty</h4>
                            <a href="<?php the_permalink(1129); ?>" class="btn btn__line">DOWIEDZ SIĘ WIĘCEJ </a>
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
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo-new/image3.svg" alt="1000 zadowolonych klientów">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo-new/image2small.svg" alt="gwarancja najwyższej jakości">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/prices-qaulity-logo-new/image1.svg" alt="20 lat doświadczenia">
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>

<div class="form-plots form-main">
    <?php echo do_shortcode('[contact-form-7 id="1525" title="Formularz działki Sea&golf"]'); ?>
</div>

<?php
get_template_part('investitions/sea-golf/footer');
?>