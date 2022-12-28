<?php

define('CTWP_DIR_PATH', untrailingslashit(get_template_directory()));
define('CTWP_DIR_URI', untrailingslashit(get_template_directory_uri()));
define('CTWP_BUILD_PATH', untrailingslashit(get_template_directory()) . '/assets/build');
define('CTWP_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
define('CTWP_LIBRARY', untrailingslashit(get_template_directory_uri()) . '//assets/src/library');
define('CTWP_DOMAIN', 'truyenfull');

$background = [
    '#F4F4F4' => 'Xám nhạt',
    '#FFF' => 'Trắng',
    '#232323' => 'màu tối'
];
$font = [
    'Roboto, sans-serif' => 'Roboto',
    'Times New Roman, serif' => 'Times new Roman',
    'Arial, sans-serif' => 'Arial',
];
$size = [16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40];
$line_height = [100, 120, 140, 160, 180, 200];
define('CTWP_DISPLAY_SETTING_BACKGROUND', $background);
define('CTWP_DISPLAY_SETTING_SIZE', $size);
define('CTWP_DISPLAY_SETTING_FONT', $font);
define('CTWP_DISPLAY_SETTING_LINE_HEIGHT', $line_height);
