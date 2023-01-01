<?php
/**
 * Ctwp Structure
 *
 * Page Structure.
 *
 * @package  Ctwp\Structures
 */

// Get List Chapter By Id Story
if (!function_exists('ctwp_get_list_story_read')) {
    function ctwp_get_list_story_read()
    {
        $data = [];
        return $data;
    }
}

/**
 * HTML category.
 *
 * @return void
 */
if (!function_exists('ctwp_html_categories')) {
    function ctwp_html_categories()
    {
        $html = '';
        $categories = ctwp_get_list_categories();
        $all[] =  [
            'cat_ID' => 1,
            'name' => 'Tất cả',
            'link' => '',
        ];
        array_splice($categories, 0, 0, $all);
        if ($categories && is_array($categories)) {
            $html .= '<div class="categories-select"><select>';
            foreach ($categories as $cat) {
                $html .= '<option value="' . $cat['cat_ID'] . '">' . $cat['name'] . '</option>';
            }
            $html .= '</select></div>';
        }

        return $html;
    }
}
