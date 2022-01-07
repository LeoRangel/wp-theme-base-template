<?php get_header(); ?>

<main>
    <!-- Header Archive -->
    <?php get_template_part('templates/headers/archive-header'); ?>

    <section>
        <?php if( have_posts() ): ?>

            <div>
                <?php while( have_posts() ): the_post(); ?>

                    <!-- Posts cards -->

                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <div class="pagination">
                <?php pagination_posts($query); ?>
            </div>

        <?php else: ?>
            <div>
                <span>Nothing found.</span>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>