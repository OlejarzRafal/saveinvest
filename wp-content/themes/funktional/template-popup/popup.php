<?php if (get_field('popup_active')) : ?>
    <div class="popup-wrap" data-time="<?php the_field('widget_time'); ?>">
        <!-- ------------------->
        <!-- VERSION 1 -->
        <!-- ------------------->
        <?php if (get_field('popup_change_v') == 1) : ?>
            <?php if (have_rows('popup_v1')) : ?>
                <?php while (have_rows('popup_v1')) :
                    the_row(); ?>
                    <div class="popup popup--v1">
                        <div class="popup__close">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/popup/x.png" alt="close">
                        </div>
                        <h4 class="popup__header1"><?php the_sub_field('header1'); ?></h4>
                        <h5 class="popup__header2"><?php the_sub_field('header2'); ?></h5>
                        <div class="popup-form">
                            <?php echo do_shortcode(get_sub_field('form')); ?>
                            <!-- <?php echo do_shortcode('[contact-form-7 id="2961" title="Popup v1"]'); ?> -->
                            
                        </div>
                    </div>
                    <div class="popup-widget">
                        <div class="popup-widget__ico">
                            <?php echo file_get_contents(get_template_directory() . '/assets/img/popup/widget-popup.svg'); ?>
                        </div>
                        <span class="popup-widget__text">
                            <?php the_sub_field('widget_text'); ?>
                        </span>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php elseif (get_field('popup_change_v') == 2) : ?>
            <!-- ------------------->
            <!-- VERSION 2 -->
            <!-- ------------------->
            <?php if (have_rows('popup_v2')) : ?>
                <?php while (have_rows('popup_v2')) :
                    the_row(); ?>
                    <div class="popup popup--v2">
                        <div class="popup__close">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/popup/x.png" alt="close">
                        </div>
                        <h4 class="popup__header1"><?php the_sub_field('header1'); ?></h4>
                        <h5 class="popup__header2"><?php the_sub_field('header2'); ?></h5>
                        <div class="popup-form">
                            <?php echo do_shortcode(get_sub_field('form')); ?>
                            <!-- <?php echo do_shortcode('[contact-form-7 id="2962" title="Popup v2"]'); ?> -->
                        </div>
                    </div>
                    <div class="popup-widget">
                        <div class="popup-widget__ico">
                            <?php echo file_get_contents(get_template_directory() . '/assets/img/popup/widget-popup.svg'); ?>
                        </div>
                        <span class="popup-widget__text">
                            <?php the_sub_field('widget_text'); ?>
                        </span>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php elseif (get_field('popup_change_v') == 3) : ?>
            <!-- ------------------->
            <!-- VERSION 3 -->
            <!-- ------------------->
            <?php if (have_rows('popup_v3')) : ?>
                <?php while (have_rows('popup_v3')) :
                    the_row(); ?>
                    <div class="popup popup--v3">
                        <div class="popup__close">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/popup/x.png" alt="close">
                        </div>
                        <div class="popup__left popup__img">
                            <?php
                            $photo = get_sub_field('photo');
                            if ($photo) : ?>
                                <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="popup__right">
                            <h4 class="popup__header1"><?php the_sub_field('header1'); ?></h4>
                            <h5 class="popup__header2"><?php the_sub_field('header2'); ?></h5>
                            <div class="popup-form">
                                <?php echo do_shortcode(get_sub_field('form')); ?>
                                <!-- <?php echo do_shortcode('[contact-form-7 id="2963" title="Popup v3"]'); ?> -->
                            </div>
                        </div>
                    </div>
                    <div class="popup-widget">
                        <div class="popup-widget__ico">
                            <?php echo file_get_contents(get_template_directory() . '/assets/img/popup/widget-popup.svg'); ?>
                        </div>
                        <span class="popup-widget__text">
                            <?php the_sub_field('widget_text'); ?>
                        </span>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>