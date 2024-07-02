<?php 

/**
 * Template Name: Two Widget Area Top
 */

if ( is_page( 'About' ) ) :
        get_header( 'alt' );
      else:
        get_header();
      endif; 
?>

<!-- CONTENT BELOW -->
<div class="container-fluid">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="row">
        <h1 class="blog-post-title"><?php the_title(); ?></h1>
    </div> <!-- /.row -->

    <div class="row">
        <!-- SIDEBAR SECTION -->

        <div class="col-sm-4 address well">

            <?php get_sidebar('top-left'); ?>

        </div><!-- /.blog-sidebar -->

        <div class="col-sm-7 col-sm-offest-1 address-maps">

            <?php get_sidebar('top-right'); ?>

        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

    <div class="row well">


            <?php the_content(); ?>


    </div><!-- /.row -->
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'illyaking' ); ?></p>
    <?php endif; ?>

</div><!-- /.container -->

<?php get_footer(); ?>
