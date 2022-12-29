<?php
$array = array(
    'posts_per_page' => 30,
    'meta_key' => '',
    'meta_value' => '',
);
$data = ctwp_get_list_story($array)
?>
<div class="row main-inner main-new-update">
    <div class="col-12">
        <div class="inner">
            <div class="title">Truyên Mới Cập Nhật</div>
            <div class="filter-cat">

            </div>
        </div>
    </div>
    <div class="col-8"></div>
    <div class="col-4">
        <?php get_sidebar();?>
    </div>
</div>
