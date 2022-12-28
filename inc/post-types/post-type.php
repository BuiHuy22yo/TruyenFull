<?php
/**
 * Ctwp Post Type
 *
 * @package  Ctwp\Structures
 */

/**
 * Post type story
 */
if (!function_exists('ctwp_register_post_type_story')) {
    function ctwp_register_post_type_story()
    {
        $labels = array(
            'name' => esc_html__('Story', CTWP_DOMAIN),
            'singular_name' => esc_html__('Story', CTWP_DOMAIN),
            'menu_name' => esc_html__('Story', CTWP_DOMAIN),
            'add_new' => esc_html__('Add New', CTWP_DOMAIN),
            'add_new_item' => esc_html__('Add New', CTWP_DOMAIN),
            'edit_item' => esc_html__('Edit Story', CTWP_DOMAIN),
            'new_item' => esc_html__('Add New Story', CTWP_DOMAIN),
            'all_items' => esc_html__('All Story', CTWP_DOMAIN),
            'view_item' => esc_html__('View Story', CTWP_DOMAIN),
            'search_items' => esc_html__('Search Story', CTWP_DOMAIN),
            'not_found' => esc_html__('No items found', CTWP_DOMAIN),
            'not_found_in_trash' => esc_html__('No items found in trash', CTWP_DOMAIN),
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'supports' => array(
                'title'
            ),
            'rewrite' => array(
                'slug' => '/',
                'with_front' => true,
                'feeds' => true,
                'pages' => true,
            ),
            'menu_icon' => 'dashicons-portfolio',
            'capability_type' => 'post',
            'menu_position' => null,
            'hierarchical' => false,
            'taxonomies' => array('category'),
        );

        register_post_type('story', $args);
    }

    add_action('init', 'ctwp_register_post_type_story');
}

/**
 * Ctwp post type chapter
 */
if (!function_exists('ctwp_register_post_type_chapter')) {
    function ctwp_register_post_type_chapter()
    {
        $labels = array(
            'name' => esc_html__('Chapter', CTWP_DOMAIN),
            'singular_name' => esc_html__('Chapter', CTWP_DOMAIN),
            'menu_name' => esc_html__('Chapter', CTWP_DOMAIN),
            'add_new' => esc_html__('Add New', CTWP_DOMAIN),
            'add_new_item' => esc_html__('Add New', CTWP_DOMAIN),
            'edit_item' => esc_html__('Edit Chapter', CTWP_DOMAIN),
            'new_item' => esc_html__('Add New Chapter', CTWP_DOMAIN),
            'all_items' => esc_html__('All Chapter', CTWP_DOMAIN),
            'view_item' => esc_html__('View Chapter', CTWP_DOMAIN),
            'search_items' => esc_html__('Search Chapter', CTWP_DOMAIN),
            'not_found' => esc_html__('No items found', CTWP_DOMAIN),
            'not_found_in_trash' => esc_html__('No items found in trash', CTWP_DOMAIN),
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'supports' => array(
                'title'
            ),
            'rewrite' => array(
                'slug' => 'chapter',
                'with_front' => true,
                'feeds' => true,
                'pages' => true,
            ),
            'menu_icon' => 'dashicons-portfolio',
            'capability_type' => 'post',
            'menu_position' => null,
            'hierarchical' => false,

        );

        register_post_type('chapter', $args);
    }

    add_action('init', 'ctwp_register_post_type_chapter');
}
