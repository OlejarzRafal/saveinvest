<?php

/**
 * Template Name: Home sea-golf
 * Template Post Type: sea-golf
 */

get_template_part('investitions/sea-golf/header');
?>
<div class="sg-frontpage">
    <section class="header">
        <video autoplay="" playsinline="" muted="" loop="" class="video-home-page video-home-page--desktop">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/invest-karwia/video/Enklawa-Karwia_Video_AdaptiveLowBitrate.mp4" type="video/mp4">
        </video>
        <div class="header__text">
            <h1 class="f-h1 ">W pobliżu morza</h1>
            <h1 class="f-h1 f-h1--fw600-italic">w sąsiedztwie pola golfowego,<br>jeziora i przystani</h1>
        </div>
        <div class="header__scroller">
            <div class="header__scroller__center"></div>
        </div>
    </section>
    <section class="header-text-gold">
        <h5 class="f-h5 f-h5--gold-dark f-h5--fw500-italic">Odkryj działki budowlane usytuowane 2500 m do morza i plaży. Zamieszkaj na osiedlu z jacuzzi, sauną, prywatnym basenem i brodzikiem dla dzieci, w sąsiedztwie pola golfowego, jeziora i przystani.
        </h5>
    </section>
    <section class="sec1-video">
        <div class="container">
            <div class="row row-backgorund">
                <div class="offset-xl-2 col-xl-8 offset-xl-2">
                    <div class="sec1-video__title">
                        <h2 class="f-h2 f-h2--black-dark f-h2--f80">Odkryj </h2>
                        <h2 class="f-h2 f-h2--black-dark  f-h2--f80 f-h2--fw600-italic">nasze działki</h2>
                    </div>
                </div>
                <div class="offset-xl-2 col-xl-8 offset-xl-2">
                    <p class="text-main">
                        Sea & Golf Resort Wolin to miejsce, w którym walory nadmorskiej natury spotykają się z troską o Twój komfort. Na tym osiedlu wypoczniesz, korzystając z jacuzzi, sauny, lub pływając w dużym basenie. W Twoim sąsiedztwie znajduje się pole golfowe, a jedynie spacer dzieli Cię od przystani nad jeziorem. Na piaszczystą plażę i nad szemrzący Bałtyk wybierzesz się pieszo albo rowerem, by cieszyć się kąpielą w morzu lub godzinami spacerować po ciepłym piasku…
                    </p>
                </div>
                <div class="offset-xl-2 col-xl-8">
                    <div class="sec1-video__movie">
                        <a class="sec1-video__movie__sea-golf" data-fancybox="gallery" href="https://www.youtube.com/watch?v=8PTAqhCVC00">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/movie-photo.jpg" alt="zdjęcie plaży" />
                        </a>
                        <div class="sec1-video__movie__icon-play"></div>
                    </div>
                </div>
                <div class="sec1-video__letter-s .letter-down"></div>
                <div class="sec1-video__letter-g"></div>
            </div>
        </div>
    </section>
    <section class="sec2-info">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10">
                    <div class="sec2-info__content">
                        <div class="sec2-info__content__line"></div>
                        <div class="sec2-info__content__icon">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/icon-sec2.svg" alt="ikona" />
                        </div>
                        <div class="sec2-info__content__texts">
                            <div class="sec2-info__content__texts__text">
                                <div class="text-main text-main--white text-main--fw400-italic">Blisko plaży i morza, w sąsiedztwie pola golfowego i przystani nad jeziorem – w przepięknej, nadmorskiej lokalizacji, stworzyliśmy Sea & Golf Resort Wolin – osiedle, na którym Ty, Twoja rodzina i goście odpoczną i zaznają odrobiny zasłużonego luksusu. </div>
                            </div>
                            <div class="sec2-info__content__texts__name">
                                <h5 class="f-h5 f-h5--f35 f-h5--gold-medium">Robert Tomaszewski</h5>
                            </div>
                            <div class="sec2-info__content__texts__position">
                                <h5 class="f-h5 f-h5--f20 f-h5--gold-medium f-h5--ls2">PREZES SAVEINVEST
                                </h5>
                            </div>
                        </div>
                        <div class="sec2-info__content__photo">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sea-golf/home-page/photo-sec2.jpg" alt="zdjęcie" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="sec2-info__schadow"></div> -->
        <div class="sec2-info__box">
            <div class="sec2-info__box__content">
                <div class="sec2-info__box__content__text">
                    <h4 class="f-h4">W połączeniu z naturą </h4>
                    <h4 class="f-h4 f-h4 f-h4--fw600-italic">dajemy Ci to, co najlepsze</h4>
                </div>
            </div>
        </div>

    </section>
</div>
<?php
get_template_part('investitions/sea-golf/footer');
?>