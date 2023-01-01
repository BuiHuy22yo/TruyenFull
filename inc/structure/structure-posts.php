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
if (!function_exists('ctwp_pagination')) {
    function ctwp_pagination($current_page = 1, $max_page = 1, $classes = '')
    {
        $html = '';
        $icon_right = CTWP_ICON_RIGHT;
        $icon_ellipsis = CTWP_ICON_ELLIPSIS;
        $icon_left = CTWP_ICON_LEFT;
        $pages = ctwp_get_list_number_pagination($current_page, $max_page);
        $disable_prev = $current_page == 1 ? 'pagination-item-disable' : '';
        $disable_next = $current_page == $max_page ? 'pagination-item-disable' : '';


        $html .= '<div class="pagination '.$classes.'"><ul class="pagination-wrapper d-flex">';
        $html .= '<li class="pagination-item pagination-item-prev '.$disable_prev.'"><span>' . $icon_left . '</span></li>';
        if ($pages && is_array($pages)) {
            foreach ($pages as $page) {
                if ($page['page'] == 0) {
                    $html .= '<li class="pagination-item pagination-item-ellipsis"><span>' . $icon_ellipsis . '</span></li>';
                } else {
                    $html .= '<li class="pagination-item pagination-item-number '.$page['class'].'"><span>' . $page['page'] . '</span></li>';
                }
            }
        }
        $html .= '<li class="pagination-item pagination-item-next '.$disable_next.'"><span>' . $icon_right . '</span></li>';
        $html .= '<li class="pagination-option"><div class="pagination-options-quick-jumper">Đến<input class="input input-quick-jumper" type="text"></div></span></li>';
        $html .= '</ul></div>';


        return $html;
    }
}
/**
 * Single
 *
 */

/**
 * Create title post
 */
if (!function_exists('ctwp_post_title')) {
    function ctwp_post_title($id, $link = true)
    {
        $html = '';
        $html .= '<h3 class="post-title text-capitalize">';
        if ($link) {
            $html .= '<a href="'.esc_url(get_the_permalink($id)) . '">';
        }
        $html .= get_post_meta($id, 'name', true);
        if ($link) {
            $html .= '</a>';
        }
        $html .= '</h3>';
        return $html;
    }
}

/**
 * Create thumbnail post
 */
if (!function_exists('ctwp_post_thumbnail')) {
    function ctwp_post_thumbnail($id)
    {
        $image_id = get_post_meta($id, 'image', true);
        $url = $image_id ? wp_get_attachment_url($image_id) : '';

        $html = '';
        $html .= '<div class="post-thumbnail">';
        $html .= '<img class="w-100" src="'.$url.'">';

        $html .= '</div>';

        return $html;
    }
}
?>
