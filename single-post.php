<?php get_header(); ?>

<main>
    <article id="singlePost">
        <!-- Header Single Post -->
        <?php get_template_part('templates/headers/post-header'); ?>
        
        <!-- Thumbnail -->
        <section>
            <?php if(has_post_thumbnail()): ?>
                <picture>
                    <img
                        src="<?php the_post_thumbnail_url() ?>"
                        alt="<?php the_post_thumbnail_caption() ?>"
                        loading="lazy"
                    >
                    <?php if(get_the_post_thumbnail_caption()): ?>
                        <figcaption><?php the_post_thumbnail_caption() ?></figcaption>
                    <?php endif; ?>
                </picture>
            <?php endif; ?>
        </section>

        <!-- Post content -->
        <section>
            <?php the_content(); ?>
        </section>
        
        <!-- Categories -->
        <section>
            <?php
                global $post;
                $categories = get_the_category( $post->ID );
                set_query_var( 'categories', $categories );
                if (!empty( $categories)): $countCat = 1;
            ?>
                <span>
                    <strong>Categories:</strong>

                    <?php foreach($categories as $category): ?>
                        <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                            <?php echo $category->name ?>
                        </a>
                    <?php
                        if($countCat < count($categories)): echo ","; endif;
                        $countCat++;
                        endforeach;
                    ?>
                </span>
            <?php endif; ?>
        </section>

        <!-- Tags -->
        <section>
            <?php 
                $posttags = get_the_tags();
                if ($posttags): $countTag = 1;
            ?>
                <span>
                    <strong>Tags:</strong>
                    
                    <?php foreach($posttags as $tag): ?>
                        <a href="<?php bloginfo('url'); ?>/tag/<?php echo $tag->slug; ?>">
                            <?php echo $tag->name; ?>
                        </a>
                    <?php
                        if($countTag < count($posttags)): echo ","; endif;
                        $countTag++;
                        endforeach;
                    ?>
                </span>
            <?php endif; ?>
        </section>

        <!-- Prev and Last posts -->
        <section>
            <div>
                <?php if(get_previous_post_link()): ?>
                    <p><b>Previous post: </b></p>
                    <?php previous_post_link(); ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if(get_next_post_link()): ?>
                    <p><b>Next post: </b></p>
                    <?php next_post_link(); ?>
                <?php endif; ?>
            </div>
        </section>

        <!-- Comments -->
        <section>
            <?php if ( comments_open() ): ?>
                <!-- Comments link -->
            <?php endif; ?>
        </section>

    </article>
</main>

<?php get_footer(); ?>