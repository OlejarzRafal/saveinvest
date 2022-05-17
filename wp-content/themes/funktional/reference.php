<?php

/**
 * Template Name: Referencje
 */
get_header(); ?>

<!-- <section class="futureFairs">
        <div class="container">
            <div class="row futureFairs__title">
                <div class="col-12">
                    <h2><?php _e('Najbliższe wydarzenia', 'prosperplast'); ?></h2>
                </div>
            </div>
            <?php $future_args = array(
                'post_type' => array('clientStory', 'referentions', 'CharitySupport'),
                'post_status' => 'publish',
                'orderby' => 'date',
                'order'   => 'DESC',
                'posts_per_page' => 6,
            );
            $loop = new WP_Query($future_args);
            ?>
            <div class="row futureFairs__slider">
                <div class="swiper-wrapper">
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="swiper-slide futureFairs__slide d-flex">
                                <div class="col-12 col-lg-7 futureFairs__thumbbox">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </div>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <div class="col-12 col-lg-5 futureFairs__contentbox">
                                </div>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata(); ?>     
                </div>
            </div>
        </div>
    </section> -->
<section class="references">
    <div class="container">
        <div class="row consultation">
            <div class="col-12 col-lg-6">
                <div class="consultation__header-topic">
                    Referencje i historie naszych Klientów
                </div>
            </div>
            <div class="col-12 col-lg-6 consultation__right-col">
                <a class="consultation__header-button" href="">UMÓW SIĘ NA DARMOWĄ KONSULTACJĘ</a>
            </div>
        </div>
    </div>
    <div class="container hero-history-container">
        <div class="row hero-history">
            <div class="col-12 col-lg-6">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/zachod.png" />
            </div>
            <div class="col-12 col-lg-6 hero-history__right-col">
                <div class="hero-history__right-main">
                    <div class="text-mini">HISTORIE</div>
                    <div class="hero-history-header">Zachodniopomorskie: Velo Baltica coraz dłuższa</div>
                    <div class="hero-history-desc">Zakończyła się budowa kolejnych odcinków trasy rowerowej Velo Baltica. W czwartym etapie inwestycji powstały i zostały oznakowane drogi rowerowe w czterech gminach: Międzyzdroje, Dziwnów, Rewal i Trzebiatów.</div>
                    <div class="name-date">
                        <div class="hero-history-showup-name">Ewelina i Tomasz Mruk</div>
                        <div class="mini-hero-history-showup-name">Taldo Furniture, 2021-12-29</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="free-consult">
    <div class="container">
        <div class="free-consult__main">
            <h3>Nie wiesz od czego zacząć?<br>Szukasz czegoś wyjątkowego?</h3>
            <div class="consult-desc">
            Wypełnij formularz i umów się na rozmowę z doradcą inwestycyjnym
            <br>
            za <span>darmo.</span> Dowiedz się pierwszy o nowych działkach i wybierz 
            <br>najlepszą i kup nawet z 20% <span>rabatem.</span>
            </div>
            <div class="consult-contact">
                <a href="" class="contact-button">Zamów darmową konsultację</a>
                <span>lub zadzwon:</span>
                <a class="contact-phone" href="tel:+48888800800">+48 888 800 800</a>
            </div>
        </div>
    </div>
</section>



<div class="ref">
    <div class="reference2">
        <!-- <div class="grid"> -->
        <div class="item reference2__box">
            <div class="reference2__box__picture"></div>
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">1 Naszą misją jest zabezpieczenie przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">2 Naszą misją jest zabezpieczenie przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__text">3 Naszą misją jest zabezpieczenie przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">4 Naszą misją jest zabezpieczenie przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__picture"></div>
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">5 Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__picture"></div>
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__text">6 Naszą misją wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__picture"></div>
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">7 Naszą misją jest zabezpieczenie przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">8 Naszą misją jest zabezpieczenie przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__text">9 Naszą misją jest zabezpieczenie przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">10 o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__picture"></div>
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__text">11 Naszą misją jest zabezpieczenie przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">12 Naszą misją jest zabezpieczenie przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
        <div class="item reference2__box">
            <div class="reference2__box__picture"></div>
            <div class="reference2__box__type-entry">OPINIE</div>
            <div class="reference2__box__title">Zysk 200% na przestrzeni 5 lat dzięki działce w Mielnie Marina</div>
            <div class="reference2__box__text">13 finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
            <div class="reference2__box__bottom">
                <div class="reference2__box__bottom__info">
                    <div class="reference2__box__bottom__info__name">Ewelina i Tomasz Mruk</div>
                    <div class="reference2__box__bottom__info__date">Taldo Furniture, 2021-12-29</div>
                </div>
                <div class="reference2__box__bottom__btn">pobierz pdf</div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<div class="about-si">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-9">
                <div class="about-si__box">
                    <div class="about-si__box__photo">
                    </div>
                    <div class="about-si__box__text">Naszą misją jest zabezpieczenie przyszłości finansowej naszych Klientów i spełnianie ich marzeń o posiadaniu własnego kawałka Ziemi w wyjątkowej lokalizacji. Bezpieczeństwo inwestycji gwarantowane jest na każdym jej etapie, o czym przekonało się już ponad tysiąc naszych zadowolonych Klientów.</div>
                    <div class="about-si__box__name">Robert Tomaszewski
                    </div>
                    <div class="about-si__box__position">Prezes SaveInvest</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-si">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="blog-si__top">
                    <div class="blog-si__top__title">Blog</div>
                    <div class="blog-si__top__btn">Zobacz nasz blog</div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="blog-si__box">
                    <div class="blog-si__box__photo"></div>
                    <div class="blog-si__box__top">
                        <div class="blog-si__box__top__type-entry">Aktualności</div>
                        <div class="blog-si__box__top__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                    </div>
                    <div class="blog-si__box__bottom">
                        <div class="blog-si__box__bottom__img"></div>
                        <div class="blog-si__box__bottom__name">Aleksander Setlak</div>
                        <div class="blog-si__box__bottom__date">październik, 2021</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="blog-si__box">
                    <div class="blog-si__box__photo"></div>
                    <div class="blog-si__box__top">
                        <div class="blog-si__box__top__type-entry">Ekspert SaveInvest</div>
                        <div class="blog-si__box__top__text">Donec dui aliquam diam duis pellentesque ac mi, amet lectus.</div>
                    </div>
                    <div class="blog-si__box__bottom">
                        <div class="blog-si__box__bottom__img"></div>
                        <div class="blog-si__box__bottom__name">Bartosz Antos</div>
                        <div class="blog-si__box__bottom__date">październik, 2021</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="blog-si__box">
                    <div class="blog-si__box__photo"></div>
                    <div class="blog-si__box__top">
                        <div class="blog-si__box__top__type-entry">Pytania klientów</div>
                        <div class="blog-si__box__top__text">Pulvinar pellentesque id adipiscing donec faucibus sed... </div>
                    </div>
                    <div class="blog-si__box__bottom">
                        <div class="blog-si__box__bottom__img"></div>
                        <div class="blog-si__box__bottom__name">Bartłomiej Kuźniar</div>
                        <div class="blog-si__box__bottom__date">październik, 2021</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-si">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="form-si__title">Jesteśmy tu dla <span>Ciebie</span></div>
                <div class="form-si__text">Nie zwlekaj, skontaktuj się znami - rozpocznijmy współpracę!</div>
            </div>
            <div class="col-xl-6">
                <div class="form-si__photo">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="form-si__contact">
                    <div class="form-si__contact__text">Wypełnij formularz<br>
                        lub zadzwoń +48 394 390 290</div>
                    <div class="form-main">
                        <?php echo do_shortcode('[contact-form-7 id="1633" title="Formularz kontaktowy Sea-Golf"]'); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>