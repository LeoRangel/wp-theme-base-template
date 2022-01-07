<?php get_header(); ?>

<main>
    <!-- Header Página -->
    <?php get_template_part('templates/headers/page-header'); ?>

    <section>
        <div>
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>