<?php
/**
 * Ctwp Structure.
 *
 * Header Structure.
 *
 * @package Ctwp\Structures
 */

/**
 * HTML after header.
 *
 * @return void
 */
if (!function_exists('ctwp_html_before_header')) {
    function ctwp_html_before_header()
    {
        echo '';
    }

    add_action('ctwp_before_header', 'ctwp_html_before_header', 1);
}

/**
 * HTML after header.
 *
 * @return void
 */
if (!function_exists('ctwp_html_after_header')) {
    function ctwp_html_after_header()
    {
        echo '';
    }

    add_action('ctwp_after_header', 'ctwp_html_after_header', 1);
}

/**
 * Ctwp header classes.
 *
 * @return void
 */
if (!function_exists('ctwp_header_classes')) {
    function ctwp_header_classes()
    {
        // Add / remove hooked classes.
        echo implode(' ', apply_filters('ctwp_header_class', array()));
    }
}

/**
 * Ctwp custom header classes.
 *
 * @param array $classes Current classes.
 *
 * @return array $classes
 */
if (!function_exists('ctwp_custom_headers')) {
    function ctwp_custom_headers($classes)
    {
        $classes[] = 'header-primary';
        return $classes;
    }

    add_filter('ctwp_header_class', 'ctwp_custom_headers', 11);
}

/**
 * Ctwp main classes.
 *
 * @return void
 */
if (!function_exists('ctwp_main_classes')) {
    function ctwp_main_classes()
    {
        // Add / remove hooked classes.
        echo implode(' ', apply_filters('ctwp_main_class', array()));
    }
}

/**
 * Ctwp add main classes.
 *
 * @param array $classes Current classes.
 *
 * @return array $classes
 */
if (!function_exists('ctwp_add_main_classes')) {
    function ctwp_add_main_classes($classes)
    {
        return $classes;
    }

    add_filter('ctwp_main_class', 'ctwp_add_main_classes', 10);
}

/**
 * Checks if top bar has elements for desktop and/or mobile.
 *
 * @return array $screens
 */
if (!function_exists('ctwp_has_top_bar')) {
    function ctwp_has_top_bar()
    {
        $screens = array(
            'large' => false,
            'mobile' => false,
        );
        $screens['large_or_mobile'] = $screens['large'] || $screens['mobile'];
        $screens['mobile_only'] = !$screens['large'] && $screens['mobile'];

        return $screens;
    }
}

/**
 * Page Header inner classes.
 *
 * @param string $position Menu position.
 *
 * @return void
 */
if (!function_exists('header_inner_class')) {
    function header_inner_class($position)
    {
        $classes = null;

        // Header main.
        if ($position == 'main') {
            $classes[] = '';
        }

        // Header top.
        if ($position == 'top') {
            $classes[] = '';
        }

        // Header bottom.
        if ($position == 'bottom') {
            $classes[] = '';
        }

        if (!$classes) $classes[] = '';

        echo implode(' ', $classes);
    }
}

/**
 * Checks if bottom bar has elements for desktop and/or mobile.
 *
 * @return array $screens
 */
if (!function_exists('ctwp_has_bottom_bar')) {
    function ctwp_has_bottom_bar()
    {
        $screens = array(
            'large' => false,
            'mobile' => false,
        );
        $screens['large_or_mobile'] = $screens['large'] || $screens['mobile'];
        $screens['mobile_only'] = !$screens['large'] && $screens['mobile'];

        return $screens;
    }
}

/**
 * Page Header inner classes.
 *
 * @param string $position Menu position.
 *
 * @return void
 */
if (!function_exists('header_inner_style')) {
    function header_inner_style()
    {
        $bg_properties = 'background-color:';
        $properties = 'color:';
        $bg_color = '#14425d';
        $color = '#f2f2f2';

        $style[] = $bg_properties . $bg_color;
        $style[] = $properties . $color;
        echo implode(';', $style);
    }
}

/**
 * Navigation Builder.
 *
 * @param string $location Theme location.
 * @param string $class Theme class.
 *
 * @return void
 */
if (!function_exists('ctwp_header_elements')) {
    function ctwp_header_elements($location = 'primary', $class = '')
    {
        $menu = wp_nav_menu(array(
            'theme_location' => $location,
            'menu_class' => $class,
            'container' => '',
            'link_before' => '',
            'link_after' => '',
        ));
        return $menu;
    }
}

/**
 * List Category Builder.
 *
 */
if (!function_exists('ctwp_header_category_elements')) {
    function ctwp_header_category_elements()
    {
        $categories = ctwp_get_list_categories();
        $html = '';

        if ($categories && is_array($categories)) {
            foreach ($categories as $cat) {
                $html .= '<li class="cat-item cat-item-' . $cat['cat_ID'] . '"><a href="' . $cat['link'] . '">' . $cat['name'] . '</a></li>';
            }
        }
        return $html;
    }
}

/**
 * Display Setting  Builder.
 *
 */
if (!function_exists('ctwp_header_setting_elements')) {
    function ctwp_header_setting_elements()
    {
        $option_background = CTWP_DISPLAY_SETTING_BACKGROUND;
        $option_font = CTWP_DISPLAY_SETTING_FONT;
        $option_size = CTWP_DISPLAY_SETTING_SIZE;
        $option_line_height = CTWP_DISPLAY_SETTING_LINE_HEIGHT;
        $html = '';

        if ($option_background && is_array($option_background)) {
            $html .= '<li class="setting-item">';
            $html .= '<div class="setting-label">Màu nền</div>';
            $html .= '<div class="setting-select"><select>';
            foreach ($option_background as $index => $item) {
                $html .= '<option value="' . $index . '">' . $item . '</option>';
            }
            $html .= '</select></div></li>';
        }
        if ($option_font && is_array($option_font)) {
            $html .= '<li class="setting-item">';
            $html .= '<div class="setting-label">Font chữ</div>';
            $html .= '<div class="setting-select"><select>';
            foreach ($option_font as $index => $item) {
                $html .= '<option value="' . $index . '">' . $item . '</option>';
            }
            $html .= '</select></div></li>';
        }
        if ($option_size && is_array($option_size)) {
            $html .= '<li class="setting-item">';
            $html .= '<div class="setting-label">Size chữ</div>';
            $html .= '<div class="setting-select"><select>';
            foreach ($option_size as $item) {
                $html .= '<option value="' . $item . '">' . $item . '</option>';
            }
            $html .= '</select></div></li>';
        }
        if ($option_line_height && is_array($option_line_height)) {
            $html .= '<li class="setting-item">';
            $html .= '<div class="setting-label">Chiều cao dòng</div>';
            $html .= '<div class="setting-select"><select>';
            foreach ($option_line_height as $item) {
                $html .= '<option value="' . $item . '">' . $item . '%</option>';
            }
            $html .= '</select></div></li>';
        }

        $html .= '<li class="setting-item">';
        $html .= '<div class="setting-label">Full khung</div>';
        $html .= '<div class="setting-radio">';
        $html .= '<label class="radio-inline" for="fluid-yes"><input type="radio" name="fluid-switch" id="fluid-yes" value="yes"> Có</label>';
        $html .= '<label class="radio-inline" for="fluid-no"><input type="radio" name="fluid-switch" id="fluid-no" value="no" checked> Không</label>';
        $html .= '</div></li>';

        $html .= '<li class="setting-item">';
        $html .= '<div class="setting-label">Không cách đoạn</div>';
        $html .= '<div class="setting-radio">';
        $html .= '<label class="radio-inline" for="onebreak-yes"><input type="radio" name="onebreak-switch" id="onebreak-yes" value="yes"> Có</label>';
        $html .= '<label class="radio-inline" for="onebreak-no"><input type="radio" name="onebreak-switch" id="onebreak-no" value="no" checked> Không</label>';
        $html .= '</div></li>';

        return $html;
    }
}

/**
 * Get Breadcrumb
 *
 */
if (!function_exists('ctwp_breadcrumb')) {
    function ctwp_breadcrumb()
    {
        $text = 'Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục.';
        $html = '';
        $html .= '<div>' . $text . '</div>';

        return $html;
    }
}

?>


