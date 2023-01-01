<?php
$array = array(
    'posts_per_page' => 30,
    'meta_key' => '',
    'meta_value' => '',
);
$data = ctwp_get_list_story($array);
$icon = CTWP_ICON_RIGHT
?>
<div class="row main-inner main-new-update">
    <div class="col-12">
        <div class="inner d-flex align-items-center justify-content-between">
            <div class="title d-flex align-items-center">
                <h2><?php echo esc_html__('Truyên Mới Cập Nhật', CTWP_DOMAIN) ?></h2>
                <span><?php echo $icon ?></span>
            </div>
            <div class="filter-cat">
                <?php echo ctwp_html_categories() ?>
            </div>
        </div>
    </div>
    <div class="col-8"></div>
    <div class="col-4">
        <?php get_sidebar(); ?>
    </div>
</div>
