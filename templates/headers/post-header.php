<header id="postHeader">
    <h1><strong><?php the_title(); ?></strong></h1>
    <p><?php echo get_the_excerpt(); ?></p>
    <hr>

    <!-- Date -->
    <p>
        <small>
            <?php if (get_the_author()): ?>
                By: <?php the_author_posts_link(); ?>
            <?php endif; ?>
        </small>
    </p>

    <!-- Author -->
    <p>
        <small>
            <time datetime="<?php echo get_post_time( 'c', true ); ?>">
                <?php echo get_custom_post_date(); ?>
                <?php echo get_custom_post_modified_time(); ?>
            </time>
        </small>
    </p>
</header>