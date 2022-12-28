<?php
/**
 * Ctwp Engine Room.
 * This is where all Theme Functions runs.
 *
 * @package ctwp
 */

/**
 * Setup.
 * Enqueue styles, register widget regions, etc.
 */
require CTWP_DIR_PATH . '/inc/functions/function-setup.php';

/**
 * Helper functions
 */
require CTWP_DIR_PATH . '/inc/helpers/acf-config.php';
require CTWP_DIR_PATH . '/inc/helpers/helpers-ajax.php';
require CTWP_DIR_PATH . '/inc/helpers/helpers-frontend.php';

/**
 * Structure.
 * Template functions used throughout the theme.
 */
require CTWP_DIR_PATH . '/inc/structure/structure-footer.php';
require CTWP_DIR_PATH . '/inc/structure/structure-header.php';
require CTWP_DIR_PATH . '/inc/structure/structure-pages.php';
require CTWP_DIR_PATH . '/inc/structure/structure-posts.php';

/**
 * Custom Theme Post Types
 */
require CTWP_DIR_PATH . '/inc/post-types/post-type.php';

