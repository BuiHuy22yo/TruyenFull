<?php
/**
 * Ctwp Structure.
 *
 * Header Structure.
 *
 * @package Ctwp\Structures
 */

/**
 * HTML after header.
 *
 * @return void
 */
if (!function_exists('ctwp_html_before_header')) {
    function ctwp_html_before_header()
    {
        echo '';
    }

    add_action('ctwp_before_header', 'ctwp_html_before_header', 1);
}

/**
 * HTML after header.
 *
 * @return void
 */
if (!function_exists('ctwp_html_after_header')) {
    function ctwp_html_after_header()
    {
        echo '';
    }

    add_action('ctwp_after_header', 'ctwp_html_after_header', 1);
}

/**
 * Ctwp header classes.
 *
 * @return void
 */
if (!function_exists('ctwp_header_classes')) {
    function ctwp_header_classes()
    {
        // Add / remove hooked classes.
        echo implode(' ', apply_filters('ctwp_header_class', array()));
    }
}

/**
 * Ctwp custom header classes.
 *
 * @param array $classes Current classes.
 *
 * @return array $classes
 */
if (!function_exists('ctwp_custom_headers')) {
    function ctwp_custom_headers($classes)
    {
        $classes[] = 'header-primary';
        return $classes;
    }

    add_filter('ctwp_header_class', 'ctwp_custom_headers', 11);
}

/**
 * Ctwp main classes.
 *
 * @return void
 */
if (!function_exists('ctwp_main_classes')) {
    function ctwp_main_classes()
    {
        // Add / remove hooked classes.
        echo implode(' ', apply_filters('ctwp_main_class', array()));
    }
}

/**
 * Ctwp add main classes.
 *
 * @param array $classes Current classes.
 *
 * @return array $classes
 */
if (!function_exists('ctwp_add_main_classes')) {
    function ctwp_add_main_classes($classes)
    {
        return $classes;
    }

    add_filter('ctwp_main_class', 'ctwp_add_main_classes', 10);
}

/**
 * Checks if top bar has elements for desktop and/or mobile.
 *
 * @return array $screens
 */
if (!function_exists('ctwp_has_top_bar')) {
    function ctwp_has_top_bar()
    {
        $screens = array(
            'large' => false,
            'mobile' => false,
        );
        $screens['large_or_mobile'] = $screens['large'] || $screens['mobile'];
        $screens['mobile_only'] = !$screens['large'] && $screens['mobile'];

        return $screens;
    }
}

/**
 * Page Header inner classes.
 *
 * @param string $position Menu position.
 *
 * @return void
 */
if (!function_exists('header_inner_class')) {
    function header_inner_class($position)
    {
        $classes = null;

        // Header main.
        if ($position == 'main') {
            $classes[] = '';
        }

        // Header top.
        if ($position == 'top') {
            $classes[] = '';
        }

        // Header bottom.
        if ($position == 'bottom') {
            $classes[] = '';
        }

        if (!$classes) $classes[] = '';

        echo implode(' ', $classes);
    }
}

/**
 * Checks if bottom bar has elements for desktop and/or mobile.
 *
 * @return array $screens
 */
if (!function_exists('ctwp_has_bottom_bar')) {
    function ctwp_has_bottom_bar()
    {
        $screens = array(
            'large' => false,
            'mobile' => false,
        );
        $screens['large_or_mobile'] = $screens['large'] || $screens['mobile'];
        $screens['mobile_only'] = !$screens['large'] && $screens['mobile'];

        return $screens;
    }
}

/**
 * Page Header inner classes.
 *
 * @param string $position Menu position.
 *
 * @return void
 */
if (!function_exists('header_inner_style')) {
    function header_inner_style()
    {
        $properties = 'background-color:';
        $color = '#14425d';

        $style = $properties.$color;

        echo $style;
    }
}
