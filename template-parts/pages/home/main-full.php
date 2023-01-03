<?php
$array = array(
    'posts_per_page' => 12,
    'meta_key' => 'isfull',
    'meta_value' => 1,
);
$data = ctwp_get_list_story($array);
$icon = CTWP_ICON_RIGHT;
$url = home_url('truyen-full')
?>
<div class="main-inner main-full">
    <div class="row">
        <div class="col-12">
            <div class="inner">
                <div class="title d-flex align-items-center">
                    <a href="<?php echo $url ?>">
                        <h2><?php echo esc_html__('Truyên Đã Hoàn thanh', CTWP_DOMAIN) ?></h2>
                    </a>
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
</div>
