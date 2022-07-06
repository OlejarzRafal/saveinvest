<div class="googleMaps">
    <div class="box">
        <div class="location">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-pointer.png" alt="Phone"/>
            <div class="text">
                <?php echo get_field('contact_location', 'option'); ?>
            </div>

        </div>

        <div class="phone">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-phone.png"
                 alt="Phone"/> <?php echo get_field('contact_phone', 'option'); ?>
        </div>

        <div class="email">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-email.png"
                 alt="Email"/> <?php echo get_field('contact_email', 'option'); ?>
        </div>
    </div>

    <div id="map">
    </div>
</div>
