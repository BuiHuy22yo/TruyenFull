<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ctwp
 */
?>
<div id="sidebar" class="sidebar-wrapper">
    <div class="title-list">
        <div class="inner">
            <div class="title">
                <h2><?php echo esc_html__('Thể Loại Truyện', CTWP_DOMAIN) ?></h2>
            </div>
        </div>
    </div>
    <div class="list-category">
        <?php echo ctwp_html_categories(false) ?>
    </div>
</div>
