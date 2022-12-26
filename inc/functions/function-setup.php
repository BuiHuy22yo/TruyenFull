<?php

/**
 * Setup Ctwp.
 */
if (!function_exists('ctwp_setup')) {
    function ctwp_setup()
    {
        /*  Register menus. */
        register_nav_menus(array(
            'primary' => __('Main Menu', CTWP_DOMAIN),
            'primary_mobile' => __('Main Menu - Mobile', CTWP_DOMAIN),
            'footer' => __('Footer Menu', CTWP_DOMAIN),
        ));
    }
    add_action('after_setup_theme', 'ctwp_setup');
}

/**
 * Setup Ctwp Styles
 */
if (!function_exists('register_styles')) {
    function register_styles()
    {
        // CTWP_LIBRARY
        wp_enqueue_style('bootstrap-style', CTWP_LIBRARY . '/bootstrap-5/bootstrap.min.css', array(), '5.0.2');
        wp_enqueue_style('fontawesome-style', CTWP_LIBRARY . '/fontawesome-611/css/all.css', array(), '6.1.1', "all");
        // CTWP_STYLE
        wp_enqueue_style('main-style', CTWP_BUILD_URI . '/css/main.css', array(), false, 'all');
    }

    add_action('wp_enqueue_scripts', 'register_styles');
}

/**
 * Setup Ctwp Scripts
 */
if (!function_exists('register_scripts')) {
    function register_scripts()
    {
        // CTWP_LIBRARY
        wp_enqueue_style('bootstrap-script', CTWP_LIBRARY . '/bootstrap/bootstrap.min.js', array(), '5.0.2');
        // CTWP_SCRIPT
        wp_enqueue_script('main-script', CTWP_BUILD_URI . '/js/main.js', array('jquery'), false, true);
        wp_localize_script('main-script', 'ctwp_script', array(
            'ajax_url' => admin_url('admin-ajax.php'),
        ));

    }

    add_action('wp_enqueue_scripts', 'register_scripts');
}
