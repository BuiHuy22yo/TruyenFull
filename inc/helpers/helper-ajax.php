<?php
/**
 * Ajax Helper
 *
 * @package Ctwp
 */

// handle ajax FUNCTION_NAME
if (!function_exists('ctwp_ajax_FUNCTION_NAME')) {
    function ctwp_ajax_FUNCTION_NAME()
    {
    }

    add_action('wp_ajax_ctwp_ajax_FUNCTION_NAME', 'ctwp_ajax_FUNCTION_NAME');
    add_action('wp_ajax_nopriv_ctwp_ajax_FUNCTION_NAME', 'ctwp_ajax_FUNCTION_NAME');
}
