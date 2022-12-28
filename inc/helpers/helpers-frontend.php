<?php

/**
 * Get List Categories
 *
 * @return array
 */
if (!function_exists('ctwp_get_list_categories')) {
    function ctwp_get_list_categories()
    {
        $data = [];
        $args = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 0,
            'exclude' => [1]
        );
        $categories = get_categories($args);
        if ($categories && is_array($categories)) {
            foreach ($categories as $cat) {
                $item = [
                    'cat_ID' => $cat->cat_ID,
                    'name' => $cat->name,
                    'link' => get_category_link($cat->cat_ID),
                ];
                array_push($data,$item);
            }
        }
        return $data;
    }
}

