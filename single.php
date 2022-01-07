<?php get_header(); ?>

<main>
    <article>
        <!-- Header Single Post -->
        <?php get_template_part('templates/headers/post-header'); ?>
        
        <section>
            <?php the_content(); ?>
        </section>

    </article>
</main>

<?php get_footer(); ?>