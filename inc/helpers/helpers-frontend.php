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

/**
 * Get List Story
 *
 * @return array
 */
if (!function_exists('ctwp_get_list_story')) {
    function ctwp_get_list_story($args = array())
    {
        $data = [];
        $query = new WP_Query($args);
        $total = $query->found_posts;
        $max_page = $query->max_num_pages;
        if ($query->have_posts()) {
            $data['data'] = $query->posts;
            $data['total'] = $total;
            $data['max_page'] = $max_page;
            $data['current_page'] = $args['paged'];
            $data['posts_per_page'] = $args['posts_per_page'];
            wp_reset_postdata();
        }
        return $data;

    }
}

