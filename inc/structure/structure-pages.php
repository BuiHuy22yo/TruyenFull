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
    function ctwp_html_categories($select = true )
    {
        $html = '';
        $categories = ctwp_get_list_categories();
        if($select) {
            $all[] =  [
                'cat_ID' => 1,
                'name' => 'Tất cả',
                'link' => '',
            ];
            array_splice($categories, 0, 0, $all);
        }
        if ($categories && is_array($categories)) {
            if ($select) {
                $html .= '<div class="categories-select"><select>';
            } else {
                $html .= '<div class="categories"><ul>';
            }
            foreach ($categories as $cat) {


                if ($select) {
                    $html .= '<option value="' . $cat['cat_ID'] . '">' . $cat['name'] . '</option>';
                } else {
                    $html .= '<li class="py-1 cat-' . $cat['cat_ID'] . '"><a href="'.$cat['link'].'" class="FS16R">' . $cat['name'] . '</a></li>';
                }
            }
            if ($select) {
                $html .= '</select></div>';
            } else {
                $html .= '</ul></div>';
            }

        }

        return $html;
    }
}
