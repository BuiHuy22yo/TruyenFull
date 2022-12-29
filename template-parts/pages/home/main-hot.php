<?php
$array = array(
    'posts_per_page' => 16,
    'meta_key' => 'ishot',
    'meta_value' => 1,
);
$data = ctwp_get_list_story($array);
?>
<div class="row main-inner main-hot">
    <div class="col-12">
        <div class="inner">
            <div class="title">Truyện Hot</div>
            <div class="filter-cat">

            </div>
        </div>
    </div>
    <?php if ($data && is_array($data)) {
        foreach ($data as $item) { ?>
            <div class="col-3"></div>
        <?php }
    } ?>
</div>
