<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <title>Osada dziwnówek</title> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg'
        type='image/x-icon' />
    <!-- dodane -->
    <!-- Facebook -->
    <meta property="og:title" content="Osada Dziwnówek">
    <meta property="og:site_name" content="Osada Dziwnówek">
    <meta property="og:url" content="<?php echo get_home_url(); ?>">
    <meta property="og:description"
        content="Zainwestuj w działkę budowlaną nad morzemi korzystaj z basenu, placu zabaw, zieleni...">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/caba-og.jpg">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_home_url(); ?>">
    <meta property="twitter:title" content="Osada Dziwnówek">
    <meta property="twitter:description"
        content="Zainwestuj w działkę budowlaną nad morzemi korzystaj z basenu, placu zabaw, zieleni...">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/caba-og.jpg">
    <!-- CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">


    <?php 
    wp_enqueue_script("jquery");
    wp_head(); 
    ?>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M9RX3HF');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
    <?php global $post; ?>

    <nav>

    </nav>