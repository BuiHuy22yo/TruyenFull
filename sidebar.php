<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ctwp
 */
?>
<div id="secondary" class="widget-area <?php ctwp_sidebar_classes(); ?>" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-main' ) ) : ?>
	<?php endif; // end sidebar widget area ?>
</div>
