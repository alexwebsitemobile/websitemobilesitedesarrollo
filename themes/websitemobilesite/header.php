<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset') ?>" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="<?php bloginfo('description') ?>" />

        <?php wp_head() ?>

        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
        <!-- animate CSS -->
        <link href="<?php bloginfo('template_url'); ?>/assets/css/animate.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="<?php bloginfo('template_url'); ?>/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Flat Icon CSS -->
        <link href="<?php bloginfo('template_url'); ?>/assets/fonts/flaticon/flaticon.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="<?php bloginfo('template_url'); ?>/assets/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="<?php bloginfo('template_url'); ?>/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/assets/owl-carousel/owl.theme.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css" rel="stylesheet">
    </head>

    <body <?php body_class() ?> itemscope itemtype="http://schema.org/WebPage"  id="page-top">

        <?php
        do_action('before_main_content');
        get_template_part('components/bs-main-navbar');
        ?>
        <header>
            <?php get_template_part('templates/menu'); ?>
        </header>
