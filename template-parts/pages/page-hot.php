<?php
$array = array(
    'posts_per_page' => -1,
    'meta_key' => 'ishot',
    'meta_value' => 1,
);
$body = ctwp_get_list_story($array);
$data = !empty($body) && array_key_exists('data', $body) ? $body['data'] : [];

?>
<div id="content" class="content page-wrapper" role="main">
    <div class="container">
        <div class="list">
            <?php if ($data && is_array($data)) {
                foreach ($data as $item) { ?>
                    <div class="item">
                        <div class="inner-item d-flex align-items-center">
                            <div class="inner-left me-2">
                                <div class="item-image">
                                    <?php echo ctwp_post_thumbnail($item->ID) ?>
                                </div>
                            </div>
                            <div class="inner-right flex-grow-1">
                                <div class="item-title">
                                    <?php echo ctwp_post_title($item->ID) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
        <?php echo ctwp_pagination(1, 20, '') ?>
    </div>
</div>
