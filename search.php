<?php get_header(); ?>


<!-- CONTENT BELOW -->
<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

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
                    ?> <h2 class="blog-post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </h2>
                            <p class="blog-post-meta"><?php echo get_the_date(); ?> <?php _e( 'by', 'illyaking' );?> <a href="#"><?php the_author(); ?></a> <?php _e('Posted in:','illyaking'); ?> <?php the_category(', ');?><br>
                                From: <?php the_category (' , ');?><br>
                                <?php get_template_part( 'content', 'comments' ); ?>
                            </p>
                            <?php the_excerpt(); ?>
                            <ul class="pager">
                                <li><a href="<?php echo get_permalink(); ?>">Read More</a></li>
                            </ul>
                    </div><!-- /.row -->
            </article>

            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts included the words you typed in the search.', 'illyaking' ); ?></p>
                <p><?php _e( 'Try the search form again, or try checking in one of these categories:' , 'illyaking' ); ?></p>
                <ul class="searchcatlist">
                    <?php wp_list_categories(array(
                        'title_li' => __( '' ),
                        'orderby' => 'title',
                        'order' => 'ASC',
                      ))
                    ?>
                </ul>
            <?php endif; ?>

            <nav>
                <ul class="pagination">
                    <li><span class="pagination"><?php next_posts_link('&larr; Older Posts'); ?></span></li>
                    <li><span class="pagination"><?php previous_posts_link('Newer Posts &rarr;'); ?></span></li>
                </ul>
            </nav>

        </div>
        <!--/.col .blog-main -->

        <!-- SIDEBAR SECTION -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

            <?php get_sidebar(); ?>

        </div><!-- /.blog-sidebar -->

    </div><!-- /.row-->


</div><!-- /.container -->

<?php get_footer(); ?>
