<?php
$array = array(
    'posts_per_page' => 30,
    'meta_key' => '',
    'meta_value' => '',
);
$body = ctwp_get_list_story($array);
$data = !empty($body) && array_key_exists('data', $body) ? $body['data'] : [];
$icon = CTWP_ICON_RIGHT;
$url = home_url('truyen-moi')
?>
<div class="main-inner main-new-update">

    <div class="row">

        <div class="col-9">
            <div class="title-list">
                <div class="inner d-flex align-items-center justify-content-between">
                    <div class="title d-flex align-items-center">
                        <a href="<?php echo $url ?>">
                            <h2><?php echo esc_html__('Truyên Mới Cập Nhật', CTWP_DOMAIN) ?></h2>
                        </a>
                        <span><?php echo $icon ?></span>
                    </div>
                    <div class="filter-cat">
                        <?php echo ctwp_html_categories() ?>
                    </div>
                </div>
            </div>
            <?php if ($data && is_array($data)) { ?>
            <div class="list">
                <?php foreach ($data as $item) { ?>
                <div class="item">
                    <div class="item-title">
                        <?php echo ctwp_post_title($item->ID) ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <div class="col-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
