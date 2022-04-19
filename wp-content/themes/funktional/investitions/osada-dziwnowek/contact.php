<?php

/**
 * Template Name: Kontakt dziwnówek
 * Template Post Type: osada-dziwnowek
 */

get_template_part('investitions/osada-dziwnowek/header');
?>

<h1 class="invisible-page-header"><?php the_title(); ?></h1>
<main class="contact-page">
    <div class="sections-bg">

        <div class="container">
            <div class="first-sections row justify-content-around">
                <div class="col-12 col-lg-6 col-xl-5">
                    <?php
            if( have_rows('section-1') ):
              while ( have_rows('section-1') ) : the_row();?>
                    <section class="sec1">
                        <h2 class="sec1__title"><?php echo get_sub_field('title'); ?></h2>
                        <div class="sec1__text"><?php echo get_sub_field('text'); ?></div>
                        <div class="sec1__form"><?php echo do_shortcode( get_sub_field('form') ); ?></div>
                    </section>
                    <?php endwhile;
            endif;
          ?>
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <?php
            if( have_rows('section-2') ):
              while ( have_rows('section-2') ) : the_row();?>
                    <section class="sec2">
                        <h2 class="sec2__title"><?php echo get_sub_field('title'); ?></h2>
                        <div class="sec2__text"><?php echo get_sub_field('text'); ?></div>
                        <?php
                    if( have_rows('sales', 'option') ):
                      while ( have_rows('sales', 'option') ) : the_row();?>
                        <div class="person">
                            <div class="person__img-box">
                                <img class="person__img" src="<?php echo get_sub_field('photo'); ?>"
                                    alt="<?php echo get_sub_field('name'); ?>">
                            </div>
                            <div class="person__details">
                                <div class="person__name"><?php echo get_sub_field('name'); ?></div>
                                <div class="person__position"><?php echo get_sub_field('position'); ?></div>
                                <div class="person__mail"><a
                                        href="mailto:<?php echo get_sub_field('e-mail'); ?>"><?php echo get_sub_field('e-mail'); ?></a>
                                </div>
                                <div class="person__phone"><a
                                        href="tel:<?php echo get_sub_field('phone'); ?>"><?php echo get_sub_field('phone'); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                    endif;
                  ?>
                    </section>
                    <?php endwhile;
            endif;
          ?>
                </div>
            </div>
            <?php
        if( have_rows('section-3') ):
          while ( have_rows('section-3') ) : the_row();?>
            <section class="sec3">
                <div class="row">
                    <div class="sec3__img-container col-12 col-lg-6">
                        <div class="sec3__img-box">
                            <img class="sec3__img" src="<?php echo get_sub_field('img'); ?>"
                                alt="<?php echo get_sub_field('title'); ?>">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="sec3__content">
                            <h2 class="sec3__title"><?php echo get_sub_field('title'); ?></h2>
                            <div class="sec3__text"><?php echo get_sub_field('text'); ?></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endwhile;
        endif;
      ?>
        </div>
    </div>

    <?php
    if( have_rows('section-icons') ):
      while ( have_rows('section-icons') ) : the_row();?>
    <section class="secicons secicons--number"
        style="background-image: linear-gradient(rgba(20, 28, 9, 0.8), rgba(20, 28, 9, 0.8)), url('<?php echo get_sub_field('background'); ?>');">
        <div class="container">
            <div class="secicons__box">
                <div class="secicons__adventages">
                    <?php
                  if( have_rows('advantages') ):
                    while ( have_rows('advantages') ) : the_row();?>
                    <div class="secicons__item">
                        <div class="secicons__value">
                            <?php echo get_sub_field('value'); ?>
                        </div>
                        <div class="secicons__advantage">
                            <?php echo get_sub_field('advantage'); ?>
                        </div>
                    </div>
                    <?php endwhile;
                  endif;
                ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;
    endif;
  ?>

    <?php
    if( have_rows('section-5') ):
      while ( have_rows('section-5') ) : the_row();?>
    <section class="sec5">
        <div class="container">
            <div class="row">
                <div class="sec5__title-box col-12 col-lg-3">
                    <h2 class="sec5__title"><?php echo get_sub_field('title'); ?></h2>
                </div>
                <div class="col-12 col-lg-9">
                    <div id="opinions-carousel" class="sec5__opinions owl-carousel">
                        <?php
                    if( have_rows('opinions') ):
                      while ( have_rows('opinions') ) : the_row();?>
                        <div class="sec5__opinion-box">
                            <div class="sec5__opinion"><?php echo get_sub_field('opinion'); ?></div>
                            <div class="sec5__client"><?php echo get_sub_field('client'); ?></div>
                        </div>
                        <?php endwhile;
                    endif;
                  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;
    endif;
  ?>

    <?php
    if( have_rows('section-6') ):
      while ( have_rows('section-6') ) : the_row();?>
    <section class="sec6">
        <div class="row">
            <div class="sec6__map-box col-12 col-lg-6">
                <?php echo get_sub_field('map'); ?>
            </div>
            <div class="sec6__content col-12 col-lg-6">
                <img class="sec6__img" src="<?php echo get_sub_field('img'); ?>" alt="Saveinvest">
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-5">
                        <div class="sec6__details">
                            <?php echo get_sub_field('company'); ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-5">
                        <div class="sec6__details">
                            <?php echo get_sub_field('president'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;
    endif;
  ?>

    <?php
    if( have_rows('section-last') ):
      while ( have_rows('section-last') ) : the_row();?>
    <section class="seclast">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="seclast__box">
                        <h3 class="seclast__text"><?php echo get_sub_field('text'); ?></h3>
                        <a class="more-btn"
                            href="<?php echo get_sub_field('page'); ?>"><?php echo get_sub_field('btn-title'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;
    endif;
  ?>
</main>

<?php
get_template_part('investitions/osada-dziwnowek/footer');
?>