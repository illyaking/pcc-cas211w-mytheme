<?php 

/**
 * Template Name: Full Width Page (no sidebar)
 */

if ( is_page( 'About' ) ) :
        get_header( 'alt' );
      else:
        get_header();
      endif;  
?>

<!-- CONTENT BELOW -->
<div class="container-fluid">

    <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="blog-post">
            <h1 class="blog-post-title"><?php the_title(); ?></h1>

            <?php the_content(); ?>
                <?php
                    $defaults = array(
                         'before'           => '<p class="pagination">',
                         'after'            => '</p>',
                         'link_before'      => '<span>',
                         'link_after'       => '</span>',
                         'next_or_number'   => 'number',
                         'separator'        => ' &nbsp;&nbsp;',
                         'nextpagelink'     => __( 'Next page' ),
                         'previouspagelink' => __( 'Previous page' ),
                         'pagelink'         => '%',
                         'echo'             => 1
                    );
                    wp_link_pages( $defaults );
                ?>
        </div><!-- /.blog-post -->

        <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'illyaking' ); ?></p>
        <?php endif; ?>


    </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
