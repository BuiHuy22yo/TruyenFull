<?php
$data = ctwp_get_list_story_read()
?>
<?php if ($data && is_array($data)) { ?>
    <div class="row main-inner main-read">
        <div class="col-12">
            <div class="inner">
                <div class="title">
                    <h2><?php echo esc_html__('Truyện Đã Đọc', CTWP_DOMAIN) ?></h2>
                </div>
            </div>
        </div>
        <div class="col-12">
            <?php foreach ($data as $item) { ?>
                <div></div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
