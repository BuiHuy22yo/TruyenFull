<?php
/**
 * Nav
 *
 * @package ctwp
 */
?>

<?php
$before_icon = '<i class="fa-solid fa-list"></i>';
$after_icon = '<i class="fa-solid fa-caret-down"></i>';
$before_icon_setting = '<i class="fa-solid fa-gear"></i>';
?>

<!-- Header nav -->
<div class="header-nav-main">
    <ul class="nav header-nav-inner mx-3">
        <li class="dropdown px-3">
            <div class="button">
                <span class="before-icon"><?php echo $before_icon ?></span>
                <span class="text">Danh sách</span>
                <span class="after-icon"><?php echo $after_icon ?></span>
            </div>
            <?php ctwp_header_elements('primary', 'dropdown-inner dropdown-nav'); ?>
        </li>
        <li class="dropdown px-3">
            <div class="button">
                <span class="before-icon"><?php echo $before_icon ?></span>
                <span class="text">Thể Loại</span>
                <span class="after-icon"><?php echo $after_icon ?></span>
            </div>
            <ul class="dropdown-inner dropdown-category">
                <?php echo ctwp_header_category_elements(); ?>
            </ul>
        </li>
        <li class="dropdown px-3">
            <div class="button">
                <span class="before-icon"><?php echo $before_icon_setting ?></span>
                <span class="text">Tùy chỉnh</span>
                <span class="after-icon"><?php echo $after_icon ?></span>
            </div>
            <ul class="dropdown-inner dropdown-custom-display"></ul>
        </li>
    </ul>
</div>
