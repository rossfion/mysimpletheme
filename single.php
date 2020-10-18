<?php get_header(); ?>

<div class="container">
    
    <div class="main">
        
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ): the_post(); ?>
        
                <article>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <div class="meta">
                        Created by <?php the_author(); ?> on <?php the_date( 'F j, Y g:i a' ); ?>
                    </div><!-- .meta -->
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div><!-- .post-thumbnail -->
                    <?php endif; ?>
                    <?php the_content(); ?>

                </article>
        
            <?php endwhile; ?>

        <?php else : ?>
            <?php echo wpautop('Sorry, not posts were found'); ?>
        <?php endif; ?>

        <?php comments_template(); ?>

    </div><!-- .main -->
    
    <?php get_sidebar(); ?>
    
</div><!-- .container -->

<?php get_footer(); ?>