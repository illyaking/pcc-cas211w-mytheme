<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- POSTS SECTION -->
<article>
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
</article>

<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.', 'illyaking' ); ?></p>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
