<?php
/**
 * Ctwp Structure
 *
 * Post Structure.
 *
 * @package  Ctwp\Structures
 */


/**
 * Article
 *
 */
// Blog Article Classes
if (!function_exists('ctwp_blog_article_classes')) {
    function ctwp_blog_article_classes()
    {
        $classes = array();
        if (!empty($classes)) echo implode(' ', $classes);
    }
}
// Blog Article Pagination
if (!function_exists('ctwp_blog_article_pagination')) {
    function ctwp_blog_article_pagination()
    {
        $html = '';
        return $html;
    }
}
/**
 * Single
 *
 */
