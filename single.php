<?php
/**
 * The blog template file.
 *
 * @package ctwp
 */

get_header(); ?>

<div class="ctwp-page-wrapper ctwp-single-page single-page-story">
    <?php get_template_part('template-parts/posts/story/single', 'story'); ?>
</div>

<?php get_footer(); ?>

