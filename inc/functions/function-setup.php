<?php

/**
 * Setup Ctwp.
 */
if (!function_exists('ctwp_setup')) {
    function ctwp_setup()
    {
        global $content_width;

        if (!isset($content_width)) {
            $content_width = 1170;
        }

        /* add woocommerce support */
        add_theme_support( 'woocommerce' );

        /* add title tag support */
        add_theme_support( 'title-tag' );

        /* Add support for post thumbnails */
        add_theme_support( 'post-thumbnails' );

        /*  Register menus. */
        register_nav_menus(array(
            'primary' => __('Main Menu', CTWP_DOMAIN),
            'primary_mobile' => __('Main Menu - Mobile', CTWP_DOMAIN),
            'footer' => __('Footer Menu', CTWP_DOMAIN),
        ));

        /* Add support for HTML5 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'widgets',
        ) );
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

/**
 * Setup Theme Widgets
 */
if (!function_exists('ctwp_widgets_init')) {
    function ctwp_widgets_init()
    {

        $title_before = '';
        $title_class = '';
        $title_after = '<div class="is-divider small"></div>';

        register_sidebar(array(
            'name' => __('Sidebar', CTWP_DOMAIN),
            'id' => 'sidebar-main',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => $title_before . '<span class="widget-title ' . $title_class . '"><span>',
            'after_title' => '</span></span>' . $title_after,
        ));


        register_sidebar(array(
            'name' => __('Footer 1', CTWP_DOMAIN),
            'id' => 'sidebar-footer-1',
            'before_widget' => '<div id="%1$s" class="col pb-0 widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<span class="widget-title">',
            'after_title' => '</span><div class="is-divider small"></div>',
        ));


        register_sidebar(array(
            'name' => __('Footer 2', CTWP_DOMAIN),
            'id' => 'sidebar-footer-2',
            'before_widget' => '<div id="%1$s" class="col pb-0 widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<span class="widget-title">',
            'after_title' => '</span><div class="is-divider small"></div>',
        ));
    }

    add_action('widgets_init', 'ctwp_widgets_init');
}
