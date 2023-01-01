<?php
$array = array(
    'posts_per_page' => 12,
    'meta_key' => 'isfull',
    'meta_value' => 1,
);
$data = ctwp_get_list_story($array);
$icon = CTWP_ICON_RIGHT
?>
<div class="row main-inner main-full">
    <div class="col-12">
        <div class="inner">
            <div class="title d-flex align-items-center">
                <h2><?php echo esc_html__('Truyên Đã Hoàn thanh', CTWP_DOMAIN ) ?></h2>
                <span><?php echo $icon ?></span>
            </div>
        </div>
    </div>
    <?php if ($data && is_array($data)) {
        foreach ($data as $item) { ?>
            <div class="col-4"></div>
        <?php }
    } ?>
</div>
