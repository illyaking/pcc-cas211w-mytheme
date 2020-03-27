<?php 

/**
 * Template Name: Blog Post Highlights
 */

if ( is_page( 'About' ) ) :
        get_header( 'alt' );
      else:
        get_header();
      endif;  
?>

<!-- CONTENT BELOW -->
<div class="container">

    <div class="row">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="blog-post">
            <h1 class="blog-post-title"><?php the_title(); ?></h1>

            <?php the_content(); ?>

        </div><!-- /.blog-post -->

        <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'illyaking' ); ?></p>
        <?php endif; ?>


    </div><!-- /.row -->

    <div class="row services">
        <?php
                $args = array(
                   'orderby' => 'rand',
                   'posts_per_page' => 3
                );
                $recent_posts = new WP_Query( $args );
            ?>
        <?php if ( $recent_posts->have_posts() ) : ?>
        <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
        <div class="col-sm-4 centerGuy">
            <a href="<?php the_permalink() ?>">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                    }
               else {
                   echo '<img src="' . get_template_directory_uri() . '/img/image-place-icon.jpg" alt="placeholder image">' ;
               }  //Create feature image, but when it doesn't exist, it will use a place holder image. 
                ?>
            </a>
            
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        </div><!-- /.cols -->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <div class="col-xs-12 news-section">
            <p><?php _e( 'No posts have been created yet.<br>
                    Add post and be sure to give each post a featured image.', 'illyaking'); ?></p>
        </div><!-- /.col -->
        <?php endif; ?>
    </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
