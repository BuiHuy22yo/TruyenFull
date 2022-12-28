<div id="header-main" class="header-main <?php header_inner_class('main'); ?>" style="<?php header_inner_style() ?>">
    <div class="header-inner container d-flex align-items-center justify-content-between" role="navigation">
        <!-- Logo -->
        <div id="logo" class="flex-col logo">
            <?php get_template_part('template-parts/header/partials/element', 'logo'); ?>
        </div>
        <div class="flex-col nav">
            <?php get_template_part('template-parts/header/partials/element', 'nav'); ?>
        </div>
        <div class="flex-col search ms-auto">
            <?php get_template_part('template-parts/header/partials/element', 'search'); ?>
        </div>
    </div>
</div>
