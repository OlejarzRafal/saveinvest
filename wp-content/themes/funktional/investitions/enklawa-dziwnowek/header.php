<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <title>Enklawa dziwnówek</title> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/invest-enklawa-dziwnowek/favicon.png' type='image/x-icon' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Preload -->
        <?php require_once(__DIR__ . '/preloader.php'); ?>
    <!-- end preload -->
    <?php global $post; ?>