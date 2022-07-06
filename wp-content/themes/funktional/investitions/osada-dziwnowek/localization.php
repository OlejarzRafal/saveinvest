<?php

/**
 * Template Name: Lokalizacja dziwnówek
 * Template Post Type: osada-dziwnowek
 */

get_template_part('investitions/osada-dziwnowek/header');
?>

<h1 class="invisible-page-header"><?php the_title(); ?></h1>
<main class="location-page">

  <?php
    if( have_rows('section-1') ):
      while ( have_rows('section-1') ) : the_row();?>
        <section class="sec1 settlement-dziw" style="background-image: url('<?php echo get_sub_field('bg-img'); ?>')">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-6">
                <div class="sec1__content">
                  <h2 class="sec1__title"><?php echo get_sub_field('title'); ?></h2>
                  <div class="sec1__text">
                    <?php echo get_sub_field('text'); ?>
                  </div>
                  <?php
                    $i = 0;
                    if( have_rows('distances') ):?>
                    <table class="distances">
                      <?php while ( have_rows('distances') ) : the_row(); $i++; ?>
                        <tr class="distances__row">
                          <td class="distances__col distances__col--1">
                            <span class="distances__text"><?php echo get_sub_field('location'); ?></span>
                          </td>
                          <td class="distances__col distances__col--2">
                            <span class="distances__text <?php if($i==1) { echo "distances__text--walk"; };?>"><?php echo get_sub_field('time'); ?></span>
                          </td>
                          <td class="distances__col distances__col--3">
                            <span class="distances__text"><?php echo get_sub_field('distance'); ?></span>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    </table>
                  <?php endif; ?>
                </div>
              </div>
              <div class="sec1__img-container col-12 col-lg-6">
                <div class="sec1__img-box">
                    <img class="sec1__img"src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile;
    endif;
  ?>
  <?php
    if( have_rows('section-icons') ):
      while ( have_rows('section-icons') ) : the_row();?>
        <section class="secicons secicons--carousel" style="background-image: url('<?php echo get_sub_field('background'); ?>');">
          <div class="container">
            <div class="secicons__box">
              <div id="location-carousel" class="secicons__adventages localization-dziwnowek swiper">
              <div class="swiper-wrapper">
                <?php
                  if( have_rows('advantages') ):
                    while ( have_rows('advantages') ) : the_row();?>
                      <div class="secicons__locitem swiper-slide">
                        <img class="secicons__icon" src="<?php echo get_sub_field('icon'); ?>">
                        <div class="secicons__advantage">
                          <?php echo get_sub_field('advantage'); ?>
                        </div>
                        <?php if( get_sub_field('sub-text') ) { ?>
                          <div class="secicons__sub-text">
                            <?php echo get_sub_field('sub-text'); ?>
                          </div>
                        <?php } ?>
                      </div>
                    <?php endwhile;
                  endif;
                ?>
              </div>
              <div class="dziwnowek-localization-swiper">
                    <span>
                        <div class="swiper-button-prev"></div>
                    </span>
                    <div class="swiper-button-next"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile;
    endif;
  ?>

  <section class="zoom-map">
    <img class="zoom-map__img" src="<?php echo get_field('map'); ?>" alt="Mapa okolicy">
  </section>

  <?php
    if( have_rows('section-last') ):
      while ( have_rows('section-last') ) : the_row();?>
        <section class="seclast">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="seclast__box">
                  <h3 class="seclast__text"><?php echo get_sub_field('text'); ?></h3>
                  <a class="more-btn" href="<?php echo get_sub_field('page'); ?>"><?php echo get_sub_field('btn-title'); ?></a>
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