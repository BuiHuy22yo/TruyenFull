<div class="ctwp-page-wrapper ctwp-archive page-story">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="article-inner">

                </div>
            </article>

        <?php endwhile; ?>

        <?php flatsome_posts_pagination(); ?>

    <?php endif; ?>
</div>
