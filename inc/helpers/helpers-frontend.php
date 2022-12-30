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
    function ctwp_get_list_story($array = array(), $is_pagination = false)
    {
        $data = [];
        if (!$array) {
            return $data;
        }
        $args = [
            'post_type' => 'story',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => $array['posts_per_page'],
        ];
        if ($array['meta_key'] && $array['meta_value']) {
            $args['meta_key'] = $array['meta_key'];
            $args['meta_value'] = $array['meta_value'];
            $args['meta_compare'] = '=';
        }

        $query = new WP_Query($args);
        $total = $query->found_posts;
        $max_page = $query->max_num_pages;
        if ($query->have_posts()) {
            $data['data'] = $query->posts;
            if ($is_pagination) {
                $data['total'] = $total;
                $data['max_page'] = $max_page;
                $data['current_page'] = $args['paged'];
                $data['posts_per_page'] = $args['posts_per_page'];
            }
            wp_reset_postdata();
        }
        return $data;

    }
}

/**
 * Get List Chapter By Id Story
 *
 * @return array
 */
if (!function_exists('ctwp_get_list_chapter')) {
    function ctwp_get_list_chapter($id)
    {
        $data = [];
        if (!$id) {
            return $data;
        }
        $args = [
            'post_type' => 'chapter',
            'post_status' => 'publish',
            'orderby' => 'ID',
            'order' => 'ASC',
            'posts_per_page' => $array['posts_per_page'],
            'meta_key' => 'select_story',
            'meta_value' => $id,
            'meta_compare' => '=',
        ];

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

/**
 * Get List Number Pagination
 *
 * @return array
 */
if (!function_exists('ctwp_get_list_number_pagination')) {
    function ctwp_get_list_number_pagination($current_page = 1, $max_page = 1)
    {
        $data = [];
        $flag = false;
        $minus = $current_page > $max_page - 2 ? $max_page - 4 : $current_page - 2;
        $plus = $current_page <= 2 ? 5 : $current_page + 2;

        for ($page = 1; $page <= $max_page; $page++) {
            $item = [
                'page' => 0,
                'class' => ''
            ];
            if ($page != 1 && $page < $minus || $page != $max_page && $page > $plus) {
                if(!$flag){
                    array_push($data,$item);
                }
                $flag = true;
            }
            else {
                $flag = false;
                $item['page'] = $page;
                if ($current_page == $page ) {
                    $item['class'] = 'pagination-item-active';
                }
                array_push($data,$item);
            }
        }

        return $data;

    }
}

