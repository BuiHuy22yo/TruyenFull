<?php
$array = array(
    'posts_per_page' => 16,
    'meta_key' => 'ishot',
    'meta_value' => 1,
);
$body = ctwp_get_list_story($array);
$data = !empty($body) && array_key_exists('data', $body) ? $body['data'] : [];

$icon = '<i class="fa-brands fa-gripfire"></i>'
?>
<div class="main-inner main-hot">
    <div class="title-list">
        <div class="inner d-flex align-items-center justify-content-between">
            <div class="title d-flex align-items-center">
                <h2><?php echo esc_html__('Truyện Hot', CTWP_DOMAIN) ?></h2>
                <span><?php echo $icon ?></span>
            </div>
            <div class="filter-cat">
                <?php echo ctwp_html_categories() ?>
            </div>
        </div>
    </div>
    <div class="list">
        <div class="row">
            <?php if ($data && is_array($data)) {
                foreach ($data as $item) {?>
                    <div class="col-3 col-lg-2 item">
                        <div class="inner-item">
                            <div class="item-image">
                                <?php echo ctwp_post_thumbnail($item->ID) ?>
                            </div>
                            <div class="item-full-label"></div>
                            <div class="item-title">
                                <?php echo ctwp_post_title($item->ID)?>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>
