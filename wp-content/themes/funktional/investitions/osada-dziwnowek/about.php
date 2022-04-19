<?php

/**
 * Template Name: O osadzie dziwnówek
 * Template Post Type: osada-dziwnowek
 */

get_template_part('investitions/osada-dziwnowek/header');
?>

<h1 class="invisible-page-header"><?php the_title(); ?></h1>
<main class="about-page">

    <?php
    if( have_rows('section-1') ):
      while ( have_rows('section-1') ) : the_row();?>
    <section class="sec1">
        <div class="sec1__img-box">
            <img class="sec1__img" src="<?php echo get_sub_field('img'); ?>"
                alt="<?php echo get_sub_field('title'); ?>">
        </div>
        <div class="sec1__content-box">
            <div class="sec1__content">
                <h2 class="sec1__title"><?php echo get_sub_field('title'); ?></h2>
                <div class="sec1__text">
                    <?php echo get_sub_field('text'); ?>
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
    <section class="secicons secicons--front"
        style="background-image: url('<?php echo get_sub_field('background'); ?>');">
        <div class="container">
            <div class="secicons__box">
                <h2 data-aos="fade-up" data-aos-duration="1800"  class="secicons__title"><?php echo get_sub_field('title'); ?></h2>
                <div data-aos="fade-up" data-aos-duration="1800" data-aos-delay="300" class="secicons__adventages">
                    <?php
                  if( have_rows('advantages') ):
                    while ( have_rows('advantages') ) : the_row();?>
                    <div  class="secicons__item">
                        <img  class="secicons__icon" src="<?php echo get_sub_field('icon'); ?>">
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
            </div>
        </div>
    </section>
    <?php endwhile;
    endif;
  ?>

    <div class="repating-section-1">
        <div class="container">

            <?php
      if( have_rows('section-3') ):
        while ( have_rows('section-3') ) : the_row();?>
            <section class="secrepeat">
                <div class="row">
                    <div class="secrepeat__content-box col-12 col-lg-6">
                        <div class="secrepeat__content">
                            <img class="secrepeat__icon" src="<?php echo get_sub_field('icon'); ?>">
                            <h3 class="secrepeat__title"><?php echo get_sub_field('title'); ?></h3>
                            <div class="secrepeat__text">
                                <?php echo get_sub_field('text'); ?>
                            </div>
                            <a class="more-btn more-btn--repeat"
                                target="_blank" href="<?php echo get_sub_field('page'); ?>"><?php echo get_sub_field('btn-title'); ?></a>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1800" data-aos-delay="100" class="secrepeat__img-box col-12 col-lg-6">
                        <img class="secrepeat__img" src="<?php echo get_sub_field('img'); ?>"
                            alt="<?php echo get_sub_field('title'); ?>">
                    </div>
                </div>
            </section>
            <?php endwhile;
      endif;
    ?>

        </div>
    </div>

    <div class="repating-section-2">
        <div class="container">

            
            <?php
      if( have_rows('section-4') ):
        while ( have_rows('section-4') ) : the_row();?>
        <h2 class="repating-section-2__title"><?php echo get_sub_field('tytul_sekcji'); ?></h2>
            <section class="secrepeat secrepeat--right">
                <div class="row">
                    <div class="secrepeat__content-box col-12 col-lg-7 col-xl-6">
                        <div class="secrepeat__content">
                            <img class="secrepeat__icon" src="<?php echo get_sub_field('icon'); ?>">
                            <h3 class="secrepeat__title"><?php echo get_sub_field('title'); ?></h3>
                            <div class="secrepeat__text">
                                <?php echo get_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-right" data-aos-duration="1800" data-aos-delay="100" class="secrepeat__img-box col-12 col-lg-5 col-xl-6">
                        <img class="secrepeat__img" src="<?php echo get_sub_field('img'); ?>"
                            alt="<?php echo get_sub_field('title'); ?>">
                    </div>
                </div>
            </section>
            <?php endwhile;
      endif;
    ?>

            <?php
      if( have_rows('section-5') ):
        while ( have_rows('section-5') ) : the_row();?>
            <section class="secrepeat">
                <div class="row">
                    <div class="secrepeat__content-box col-12 col-lg-7 col-xl-6">
                        <div class="secrepeat__content">
                            <img class="secrepeat__icon" src="<?php echo get_sub_field('icon'); ?>">
                            <h3 class="secrepeat__title"><?php echo get_sub_field('title'); ?></h3>
                            <div class="secrepeat__text">
                                <?php echo get_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1800" data-aos-delay="100" class="secrepeat__img-box col-12 col-lg-5 col-xl-6">
                        <img class="secrepeat__img" src="<?php echo get_sub_field('img'); ?>"
                            alt="<?php echo get_sub_field('title'); ?>">
                    </div>
                </div>
            </section>
            <?php endwhile;
      endif;
    ?>

        </div>
    </div>
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