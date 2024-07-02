<?php get_header(); ?>


<!-- CONTENT BELOW -->
<div class="container-fluid">


    <div class="row">

        <div class="col-xs-12 blog-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
                <div class="row dividerBoi">

                    <?php if ( has_post_thumbnail() ) {
                            echo '<div class="col-sm-4">' . '<a href=' . get_permalink() . '>' . get_the_post_thumbnail() . '</a></div>';
                        }
                    ?>

                    <div <?php if ( has_post_thumbnail() ) {
                                echo 'class="col-sm-8" >';
                            }
                         else {
                             echo 'class="col-xs-12" >';
                         }
                    ?> 
                         <h2 class="blog-post-title">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </h2>
                            <p class="blog-post-meta"><?php echo get_the_date(); ?> <?php _e( 'by', 'illyaking' );?> <a href="#"><?php the_author(); ?></a><br>
                            <?php get_template_part( 'content', 'comments' ); ?>
                            </p>
                            <?php the_excerpt(); ?>
                            <ul class="pager">
                                <li><a href="<?php echo get_permalink(); ?>">Read More</a></li>
                            </ul>
                    </div><!-- /.col -->
                </div><!--/.row-->
            </article><!-- /.blog-post -->

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'illyaking' ); ?></p>
            <?php endif; ?>

            <nav>
                <ul class="pagination">
                    <li><span class="pagination"><?php next_posts_link('&larr; Older Posts'); ?></span></li>
                    <li><span class="pagination"><?php previous_posts_link('Newer Posts &rarr;'); ?></span></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->
        
    </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
