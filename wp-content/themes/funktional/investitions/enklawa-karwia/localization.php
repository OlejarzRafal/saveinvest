<?php

/**
 * Template Name: Lokalizacja
 * Template Post Type: enklawa-karwia
 */

get_template_part('investitions/enklawa-karwia/header');
?>
<div class="ek-localization">

    <section class="header">
    </section>
    <section class="sec1-info-map">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec1-info-map__box">
                        <?php if ($title_sec1_localization_karwia = get_field('title_sec1_localization_karwia')) : ?>
                            <h3 class="f-h3 f-h3--white"> <?php echo $title_sec1_localization_karwia; ?></h3>
                        <?php endif; ?>
                        <?php if ($text_sec1_localization_karwia = get_field('text_sec1_localization_karwia')) : ?>
                            <div class="box-text">
                                <p class="text-main text-main--white">
                                    <?php echo $text_sec1_localization_karwia; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <div class="sec1-info-map__box__table-location">
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white text-main--fw600"></p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white text-main--fw600">
                                        Czas
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white text-main--fw600">
                                        Odległość
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Plaża
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        30 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        2500 m
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Paintball
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        7 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        5 km
                                    </p>
                                </div>
                            </div>

                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Rezerwat Przyrody Zielone
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        7 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        6 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Rezerwat przyrody Źródliska Czarnej Wody
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        9 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        8 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Sowi Jar
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        19 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        19 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Jazdy Konne “Rumak”
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        25 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        21 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Tor motocrossowy Krokowa
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        25 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        21 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Dworek w Żarnowcu
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        25 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        21 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Muzeum techniki Militarnej
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        25 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        21 km
                                    </p>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="row-table__title">
                                    <p class="text-main text-main--white">
                                        Zamek i park zamkowy Krokowa
                                    </p>
                                </div>
                                <div class="row-table__time">
                                    <p class="text-main text-main--white">
                                        25 min
                                    </p>
                                </div>
                                <div class="row-table__distance">
                                    <p class="text-main text-main--white">
                                        21 km
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6">
                    <div class="sec1-info-map__map">
                        <img class="logo-karwia" src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/localization/logo-top-map.svg" alt="mapa Polski" />
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/localization/mapa-polski.png" alt="mapa Polski" />
                    </div>
                </div>
            </div>
        </div>

    </section>


    S
</div>


<?php
get_template_part('investitions/enklawa-karwia/footer');
?>