<?php get_header(); ?>


<main>
    <!-- Header Author -->
    <?php get_template_part('templates/headers/header-author'); ?>
    
    <section>
        <?php
            $args = array(
                'post_type'=>'post',
                'author' => get_the_author_meta( 'ID' ),
                'posts_per_archive_page' => 10,
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
            );
            $query = new WP_Query( $args );
            if( $query->have_posts() ):
        ?>

            <div>
                <?php while( $query->have_posts() ): $query->the_post(); ?>

                    <!-- Posts cards -->

                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <div class="pagination">
                <?php pagination_posts($query); ?>
            </div>

        <?php else: ?>
            <div>
                <span>
                    Nothing found.
                </span>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>