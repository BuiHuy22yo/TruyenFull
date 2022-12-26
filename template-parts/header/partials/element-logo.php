<?php
/**
 * Logo
 *
 * @package ctwp
 */
?>

<?php
$logoDefault = get_field('logo_default', 'option') ? get_field('logo_default', 'option') : '';
$logoOptional = get_field('logo_optional', 'option');
$logoMobile = get_field('logo_mobile', 'option');
$logo_link = site_url();
$site_title = esc_attr(get_bloginfo('name', 'display'));
$site_logo_link = wp_get_attachment_url($logoDefault);
$width = 196;
$height = 36;
?>

<!-- Header logo -->
<div class="header-logo">
    <div class="header-logo-inner">
        <a href="<?php echo esc_url($logo_link) ?>">
            <div class="logo">
                <?php if ($site_logo_link): ?>
                    <img width="<?php echo $width ?>" height="<?php echo $height ?>"
                         src="<?php echo esc_url($site_logo_link) ?>" alt="<?php echo $site_title ?>">
                <?php endif ?>
            </div>
            <h1 class="d-none title"><?php echo $site_title ?></h1>
        </a>
    </div>
</div>
