<?php
$array = array(
    'posts_per_page' => 12,
    'meta_key' => 'isfull',
    'meta_value' => 1,
);
$data = ctwp_get_list_story($array)
?>
<div class="row main-inner main-full">
    <div class="col-12">
        <div class="inner">
            <div class="title">Truyên Đã Hoàn thanh</div>
        </div>
    </div>
    <?php if ($data && is_array($data)) {
        foreach ($data as $item) { ?>
            <div class="col-4"></div>
        <?php }
    } ?>
</div>
