<?php

/**
  * Template Name: Finansowanie enklawa-dziwnowek
 * Template Post Type: financing enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>
<style>
    .price-box__rolna{
        display: none;
    }
    .calc .left-box .result-box .divTable .divTableHeading .divTableHead__3{
        display: none;
    }
    .calc .divTableCell.divTableCell__3{
        display: none;
    }
    .divTableHead.divTableHead__2{
        display: none;
    }
    .calc .left-box .result-box{
        margin-top:50px;
    }
    .calc .left-box .result-box__header{
        margin-bottom:0;
    }
    .calc .left-box .result-box .divTable .divTableHeading .divTableHead{
        padding:0;
    }
</style>
<div class="mainSection page-installment">

    <?php get_template_part('investitions/enklawa-dziwnowek/nav-head'); ?>
    <?php get_template_part('investitions/enklawa-dziwnowek/nav-subpages'); ?>

  

    <!-- nav -->
    <!-- ODKOMENTOWAC JAK BEDZIE GOTOWE -->
    <!--     <div class="nav-subpage">
        <ul>
            <li>
                <a href="" class="nav-subpage-active">KUP GRUNT NA RATY</a>
            </li>
            <li>
                <a href="">GRUNT</a>
            </li>
            <li>
                <a href="">ZARABIAJ</a>
            </li>
        </ul>
    </div> -->
    <!-- enD dnav -->
    <section class="sec1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="pi-main-header"><?php the_field('header_sec1'); ?></h3>
                </div>
            </div>
            <div class="content-box">
                <div class="row">
                    <div class="col-xl-5 offset-xl-2 col-lg-6 image-after">
                        <div class="pi-text-box pi-text-box__left">
                            <?php the_field('tekst_lewa_strona'); ?>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="pi-text-box pi-text-box__right">
                            <?php the_field('tekst_prawa_strona'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="pi-main-header"><?php the_field('naglowek_sec2'); ?></h3>
                </div>
            </div>


            <div class="nav-number">
                <div class="row">
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="box-number box-number--1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/ico2_1.svg">
                            <div class="content-number">
                                <span class="content-number__nr">1.</span>
                                <h4 class="content-number__title"><?php the_field('etap_1_naglowek'); ?></h4>
                                <p class="content-number__text"><?php the_field('etap_1_tekst'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="box-number box-number--2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/ico2_2.svg">
                            <div class="content-number">
                                <span class="content-number__nr">2.</span>
                                <h4 class="content-number__title"><?php the_field('etap_2_naglowek'); ?></h4>
                                <p class="content-number__text"><?php the_field('etap_2_tekst'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mobile-reverse">
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="box-number box-number--4 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/ico2_3.svg">
                            <div class="content-number">
                                <span class="content-number__nr">4.</span>
                                <h4 class="content-number__title"><?php the_field('etap_4_naglowek'); ?></h4>
                                <p class="content-number__text"><?php the_field('etap_4_tekst'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="box-number box-number--3 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/ico2_4.svg">
                            <div class="content-number">
                                <span class="content-number__nr">3.</span>
                                <h4 class="content-number__title"><?php the_field('etap_3_naglowek'); ?></h4>
                                <p class="content-number__text"><?php the_field('etap_3_tekst'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 offset-xl-1  col-lg-6">
                        <div class="box-number box-number--5 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/ico2_5.svg">
                            <div class="content-number">
                                <span class="content-number__nr">5.</span>
                                <h4 class="content-number__title"><?php the_field('etap_5_naglowek'); ?></h4>
                                <p class="content-number__text"><?php the_field('etap_5_tekst'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="box-number box-number--3  box-number--6">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/ico2_6.svg">
                            <div class="content-number">
                                <span class="content-number__nr">6.</span>
                                <h4 class="content-number__title"><?php the_field('etap_6_naglowek'); ?></h4>
                                <p class="content-number__text"><?php the_field('etap_6_tekst_kopia'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-12">
                    <div class="pi-btn-wrap ">
                        <a href="http://enklawadziwnowek.pl/1/ceny-dzialek/" class="pi-btn">
                            Wybierz działkę
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="sec3">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="content-box">
                        <h5><?php the_field('naglowek1_maly'); ?></h5>
                        <h3 class="pi-main-header"><?php the_field('naglowek2_duzy'); ?></h3>
                        <p>
                            <?php the_field('tekst'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec4">
        <div class="container container__calc">
            <div class="calc">
                <div class="row">
                    <div class="col-12">
                        <div class="top-box-header">
                            <h4 class="pi-main-header--small">Oblicz wysokość raty</h4>
                            <p>Do ceny netto należy doliczyć 23% podatku VAT. </p>
                        </div>
                    </div>
                    <div class="col-xl-6 ">

                        <div class="left-box">
                            <!-- ***************************** -->
                            <!-- CALCULATOR -->
                            <!-- ***************************** -->
                            <div class="calculator">
                                <div class="range-box range-box--1">
                                    <h4 class="range-box__header">Wartość działki brutto (w tys. zł)</h4>
                                    <div class="range-box__slider">
                                        <div class="range-box__fill" id="range-fill-1"></div>

                                        <input class="range-box__input " id="range-input-1" type="range" min="<?php the_field('min_liczba'); ?>" value="300000" max="<?php the_field('max_liczba'); ?>" step="100">
                                        <ul>
                                            <li><?php the_field('min_tekst'); ?></li> <!--  60 tys. -->
                                            <li><?php the_field('max_tekst'); ?></li><!--  600 tys. -->
                                        </ul>
                                    </div>
                                    <div class="range-field">
                                        <div class="range-field__value" id="range-fieldtext-1"><span></span></div>
                                        <span class="range-field__currency">zł</span>
                                    </div>
                                    <!-- <div class="wrap-mobile-price">
                                            <input type="number" class="value-mobile" min="10000" value="150000" max="300000" step="500"></input><span>zł</span>
                                        </div> -->
                                </div>


                                <div class="range-box range-box--2">
                                    <h4 class="range-box__header">Pierwsza wpłata</h4>

                                    <div class="range-box__slider">
                                        <div class="range-box__fill" id="range-fill-2"></div>
                                        <input class="range-box__input " id="range-input-2" type="range" min="12000" value="30000" max="150000" step="100">
                                        <ul>
                                            <li id="range-2-minValue">12 tys.</li>
                                            <li id="range-2-maxValue">600 tys.</li>
                                        </ul>
                                    </div>

                                    <div class="range-field">
                                        <div class="range-field__value" id="range-fieldtext-2"><span></span></div>
                                        <span class="range-field__currency">zł</span>
                                    </div>
                                    <!-- <div class="wrap-mobile-price">
                                            <input type="number" class="value-mobile" min="10000" value="150000" max="300000" step="500"></input><span>zł</span>
                                        </div> -->
                                </div>


                                <div class="range-box range-box--3">
                                    <input type="checkbox" name="checkbox" id="range-checbox">
                                    <label for="range-checbox">Pierwsza wpłata pomiędzy 6-12 tys. zł</label>
                                </div>

                                <div class="price-box">
                                    <div class="price-box__rolna">
                                        <h5>Wysokość raty (działka rolna/rekreacyjna):</h5>
                                        <div class="price-content"><span id="info-rata-rolna"></span> zł / miesiąc
                                        </div>
                                    </div>
                                    <div class="price-box__budowlana">
                                        <h5>Wysokość raty:</h5>
                                        <div class="price-content"><span id="info-rata-budowlana"></span> zł / miesiąc
                                        </div>
                                    </div>
                                </div>
                                <div class="result-box">
                                    <div class="result-box__header">
                                        <h3 class="main-header main-header__medium main-header--brown"><span class="main-header__underline">Podsumowanie</span></h3>
                                    </div>
                                    <div class="divTable ">
                                        <div class="divTableHeading">
                                            <div class="divTableRow">
                                                <div class="divTableHead divTableHead__1">&nbsp;</div>
                                                <div class="divTableHead divTableHead__2">działka<br />budowlana</div>
                                                <div class="divTableHead divTableHead__3">działka<br />rolna/rekreacyjna</div>
                                            </div>
                                        </div>
                                        <div class="divTableBody">
                                            <div class="divTableRow">
                                                <div class="divTableCell divTableCell__1">Pierwsza wpłata</div>
                                                <div class="divTableCell divTableCell__2"><span id="budowlana-pierwsza-wplata">6 000</span> zł</div>
                                                <div class="divTableCell divTableCell__3"><span id="rolna-pierwsza-wplata">6 000</span> zł</div>
                                            </div>
                                            <div class="divTableRow divTableRow__1">
                                                <div class="divTableCell divTableCell__1">Rata miesięczna</div>
                                                <div class="divTableCell divTableCell__2"><span id="budowlana-rata"></span> zł</div>
                                                <div class="divTableCell divTableCell__3"><span id="rolna-rata"></span> zł</div>
                                            </div>
                                            <div class="divTableRow divTableRow__2">
                                                <div class="divTableCell divTableCell__1">Ilość rat</div>
                                                <div class="divTableCell divTableCell__2"><span id="budowlana-ilosc-rat">84</span></div>
                                                <div class="divTableCell divTableCell__3"><span id="rolna-ilosc-rat">84</span></div>
                                            </div>
                                            <div class="divTableRow divTableRow__3">
                                                <div class="divTableCell divTableCell__1">Całkowita cena działki</div>
                                                <div class="divTableCell divTableCell__2"><span id="budowlana-calkowita"></span> zł</div>
                                                <div class="divTableCell divTableCell__3"><span id="rolna-calkowita"></span> zł</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result-box__text text-main">
                                        Całkowita cena działki zawiera opłatę za obsługę rat w wysokości 5% ceny działki (pomniejszonej o pierwszą wpłatę) za każdy rok spłaty oraz jednorazową kwotę 3 000 zł lub <span class="price-color"> 4000 zł </span> (dla pierwszej wpłaty poniżej 12 000 zł) za uruchomienie rat.
                                    </div>
                                </div>
                            </div>
                            <!-- ***************************** -->
                            <!-- END CALCULATOR -->
                            <!-- ***************************** -->
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="right-box">
                            <div class="top-box">
                                <h4 class="pi-main-header--small">Zysk aż 755%</h4>
                                <span>W ciągu 16 lat nieruchomości ziemskie w Polsce zdrożały o 755%</span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/Group1286.png">
                            </div>
                            <div class="bottom-box">
                                <h5>Skontaktuj się z nami</h5>
                                <h4>Wypełnij formularz lub zadzwoń pod numer <a href="+48 888 800 800">+48 888 800 800</a>.</h4>
                                <div class="form-box">
                                    <div class="form">
                                        <?php echo do_shortcode('[contact-form-7 id="47" title="Kontakt"]'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="pi-main-header"><?php the_field('naglowek_sec5'); ?></h3>
                </div>
            </div>
            <div class="boxs-wrap">
                <div class="row">

                    <div class="col-xl-10 offset-xl-1">
                        <div class="row">
                            <?php if (have_rows('boxy')) : ?>
                                <?php while (have_rows('boxy')) : the_row();; ?>
                                    <div class="col-md-4">
                                        <div class="box">
                                            <span><?php the_sub_field('numer'); ?></span>
                                            <p><?php the_sub_field('tekst'); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <section class="sec6">
        <div class="container">
            <div class="sec6-wrap">
                <div class="link-box">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/images/enklawa_bottom.jpg">
                    <a href="http://enklawadziwnowek.pl/1/ceny-dzialek/" class="sec6-wrap__btn">
                        CENY DZIAŁEK
                    </a>
                </div>
            </div>
        </div>
    </section>
</div> <!-- end page-installment -->


</div>




<script>
    function changeRange() {
        var percent = document.getElementById('range-slider-input').value / 3000;
        document.getElementById('range-fill').style.width = percent + '%';
    }
    document.onload = changeRange();
</script>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!--     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script> -->
<script src="<?php echo get_template_directory_uri() ?>/assets_new/js/all.js"></script>
<!-- END SCRIPTS -->

<!--     <script>
         
         $('.mainSection.page-installment .navbar-toggler').click(function(){
            console.log('test');
            $('.mainSection.page-installment .navbar-toggler').toggleClass('collapsed');
            $('.navbar-collapse').toggleClass('show');
        });
    </script> -->
    <?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>