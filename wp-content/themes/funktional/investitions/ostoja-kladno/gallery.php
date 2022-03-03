<?php

/**
 * Template Name: Galeria
 * Template Post Type: ostoja-kladno
 */

get_template_part('investitions/ostoja-kladno/header');
?>
<div class="ik-gallery">
    <section class="gallery-kladno">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery-kladno__title">
                        <h5 class="f-h5">
                            Czerp z natury, otaczającej Ostoję Kładno,
                            wybierz się nad morze lub spaceruj pośród drzew
                        </h5>
                    </div>
                    <ul class="gallery-nav">
                        <li class="gallery-nav__list">
                            <div class="button active" id="tab1-gallery-click">
                                <p class="text-main text-main--fw500 text-main--f18">
                                    WSZYSTKIE
                                </p>
                            </div>
                        </li>
                        <li class="gallery-nav__list">
                            <div class="button" id="tab2-gallery-click">
                                <p class="text-main text-main--fw500 text-main--f18">
                                    ZDJĘCIA I WIZUALIZACJE
                                </p>
                            </div>
                        </li>
                        <li class="gallery-nav__list">
                            <div class="button" id="tab3-gallery-click">
                                <p class="text-main text-main--fw500 text-main--f18">
                                    FILMY
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="gallery-kladno__all" id="tab1-gallery-all">
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo1.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item gallery-item-video">
                            <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=afZwpwTql94">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo3.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo3.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo2.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo4.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo5.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo6.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo7.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo8.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo9.png" alt="zdjęcie" /></a>
                        </div>
                        <div class="gallery-item">
                            <a id="single_image" href="/invest-kladno/kladno-photo/gallery/gallery-photo1big.jpg"><img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/gallery/gallery-photo10.png" alt="zdjęcie" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_template_part('investitions/ostoja-kladno/footer');
?>