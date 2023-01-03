<?php
$array = array(
    'posts_per_page' => 12,
    'meta_key' => 'isfull',
    'meta_value' => 1,
);
$body = ctwp_get_list_story($array);
$data = !empty($body) && array_key_exists('data', $body) ? $body['data'] : [];
$icon = CTWP_ICON_RIGHT;
$url = home_url('truyen-full')
?>
<div class="main-inner main-full">
    <div class="title-list">
        <div class="inner">
            <div class="title d-flex align-items-center">
                <a href="<?php echo $url ?>">
                    <h2><?php echo esc_html__('Truyên Đã Hoàn thanh', CTWP_DOMAIN) ?></h2>
                </a>
                <span><?php echo $icon ?></span>
            </div>
        </div>
    </div>
    <?php if ($data && is_array($data)) { ?>
        <div class="list">
            <div class="row">
                <?php foreach ($data as $item) { ?>
                    <div class="col-4 col-lg-2 item">
                        <div class="inner-item">
                            <div class="item-image">
                                <?php echo ctwp_post_thumbnail($item->ID) ?>
                            </div>
                            <div class="item-title text-center">
                                <?php echo ctwp_post_title($item->ID) ?>
                            </div>
                            <div class="item-number_chapter text-center">
                                Full - 350 chương
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>

