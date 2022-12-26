<?php
/**
 * Header
 *
 * @package ctwp
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>

</head>
<body <?php body_class('truyenfull') ?>>
<?php wp_body_open(); ?>
<div id="wrapper">

    <?php do_action('ctwp_before_header'); ?>

    <header id="header" class="header <?php ctwp_header_classes(); ?>">
        <div class="header-wrapper">
            <?php get_template_part('template-parts/header/header', 'wrapper'); ?>
        </div>
    </header>

    <?php do_action('ctwp_after_header'); ?>

    <main id="main" class="<?php ctwp_main_classes(); ?>">
