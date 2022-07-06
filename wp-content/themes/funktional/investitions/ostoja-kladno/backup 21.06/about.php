<?php

/**
 * Template Name: O ostoi
 * Template Post Type: ostoja-kladno
 */

get_template_part('investitions/ostoja-kladno/header');
?>

<div class="ik-about">
    <section class="hero1-about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="hero1-about__box">
                        <?php if ($title_sec1_about_kladno = get_field('title_sec1_about_kladno')) : ?>
                            <h2 class="f-h2  el-fadein-kladno"><?php echo $title_sec1_about_kladno; ?></h2>
                        <?php endif; ?>
                        <?php if ($text_sec1_about_kladno = get_field('text_sec1_about_kladno')) : ?>
                            <p class="text-main  el-fadein-kladno">
                                <?php echo $text_sec1_about_kladno; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="scroll-bottom el-fadein-kladno">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/chevrons-down.png" alt="ikona" />
    </section>

    <div class="about-background">
        <img class="about-background-photo" src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/background.png" alt="ikona" />
        <section class="icon-ostoja">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="icon-ostoja__content">
                            <div class="content-boxs el-fadein-kladno">
                                <div class="content-box ">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon1.png" alt="ikona" />
                                    <?php if ($bolt_text1_sec2_about_kladno = get_field('bolt_text1_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600">
                                            <?php echo $bolt_text1_sec2_about_kladno; ?>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($text1_sec2_about_kladno = get_field('text1_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text1_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon2.png" alt="ikona" />
                                    <?php if ($bolt_text2_sec2_about_kladno = get_field('bolt_text2_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600"><?php echo $bolt_text2_sec2_about_kladno; ?></h6>
                                    <?php endif; ?>
                                    <?php if ($text2_sec2_about_kladno = get_field('text2_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text2_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon3.png" alt="ikona" />
                                    <?php if ($bolt_text3_sec2_about_kladno = get_field('bolt_text3_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600"><?php echo $bolt_text3_sec2_about_kladno; ?></h6>
                                    <?php endif; ?>
                                    <?php if ($text3_sec2_about_kladno = get_field('text3_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text3_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon4.png" alt="ikona" />
                                    <?php if ($bolt_text4_sec2_about_kladno = get_field('bolt_text4_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600">
                                            <?php echo $bolt_text4_sec2_about_kladno; ?>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($text4_sec2_about_kladno = get_field('text4_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text4_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="content-boxs el-fadein-kladno">
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon5.png" alt="ikona" />
                                    <?php if ($bolt_text5_sec2_about_kladno = get_field('bolt_text5_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600">
                                            <?php echo $bolt_text5_sec2_about_kladno; ?>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($text5_sec2_about_kladno = get_field('text5_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text5_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon6.png" alt="ikona" />
                                    <?php if ($bolt_text6_sec2_about_kladno = get_field('bolt_text6_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600">
                                            <?php echo $bolt_text6_sec2_about_kladno; ?>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($text6_sec2_about_kladno = get_field('text6_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text6_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon7.png" alt="ikona" />
                                    <?php if ($bolt_text7_sec2_about_kladno = get_field('bolt_text7_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600">
                                            <?php echo $bolt_text7_sec2_about_kladno; ?>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($text7_sec2_about_kladno = get_field('text7_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text7_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="content-box">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/invest-kladno/about/about-icon8.png" alt="ikona" />
                                    <?php if ($bolt_text8_sec2_about_kladno = get_field('bolt_text8_sec2_about_kladno')) : ?>
                                        <h6 class="f-h6 f-h6--fw600">
                                            <?php echo $bolt_text8_sec2_about_kladno; ?>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($text8_sec2_about_kladno = get_field('text8_sec2_about_kladno')) : ?>
                                        <p class="text-main text-main--f20">
                                            <?php echo $text8_sec2_about_kladno; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="financing-ostoja">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6">
                        <div class="financing-ostoja__content">
                            <?php if ($title_sec3_about_kladno = get_field('title_sec3_about_kladno')) : ?>
                                <h2 class="f-h2 f-h2--white  el-fadein-kladno">
                                    <?php echo $title_sec3_about_kladno; ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($text_sec3_about_kladno = get_field('text_sec3_about_kladno')) : ?>
                                <p class="text-main text-main--white  el-fadein-kladno">
                                    <?php echo $text_sec3_about_kladno; ?>
                                </p>
                            <?php endif; ?>
                            <a href="#" class="btn btn__line-yellow btn--yellow">FINANSOWANIE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <section class="location-ostoja">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="location-ostoja__content">
                        <?php if ($title_sec4_about_kladno = get_field('title_sec4_about_kladno')) : ?>
                            <div class="content-title  el-fadein-kladno">
                                <h2 class="f-h2"><?php echo $title_sec4_about_kladno; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_sec4_about_kladno = get_field('text_sec4_about_kladno')) : ?>
                            <div class="contnet-text  el-fadein-kladno">
                                <p class="text-main">
                                    <?php echo $text_sec4_about_kladno; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if ($btn_text_sec4_about_kladno = get_field('btn_text_sec4_about_kladno')) : ?>
                            <a href="<?php the_permalink(616); ?>" class="btn btn__line el-fadein-kladno"> <?php echo  $btn_text_sec4_about_kladno; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6">
                    <?php
                    $photo_sec4_about_kladno = get_field('photo_sec4_about_kladno');
                    if ($photo_sec4_about_kladno) : ?>
                        <div class="location-ostoja__photo reveal-kladno">
                            <img src="<?php echo esc_url($photo_sec4_about_kladno['url']); ?>" alt="<?php echo esc_attr($photo_sec4_about_kladno['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
get_template_part('investitions/ostoja-kladno/footer');
?>