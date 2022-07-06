<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <!-- <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg' type='image/x-icon' /> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class=" header header--landingPage">
        <?php echo file_get_contents(get_template_directory_uri() . '/assets/img/landing/arrowLeft.svg'); ?>
        <a href="https://saveinvest.pl">Przejdź na Saveinvest.pl</a>
    </header>