<?php 

/**
 * Template Name: Full Width Post
 */

get_header(); ?>


<!-- CONTENT BELOW -->
<div class="container">


    <div class="row">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="blog-post">
                <h1 class="blog-post-title"><?php the_title(); ?></h1>
                <p class="blog-post-meta"><?php echo get_the_date(); ?> <?php _e( 'by', 'illyaking' );?> <a href="#"><?php the_author(); ?></a><br>
                    <?php 
                       if ( comments_open() ) {
                      echo '<p class="postmetadata">';
                      comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
                      echo '</p>';
                       }
                    ?><br>
                    <?php _e('Posted in:','illyaking'); ?> <?php the_category(', ');?></p>

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
                <p class="blog-post-meta"><?php the_tags();?></p>

            </article><!-- /article-post -->

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'illyaking' ); ?></p>
            <?php endif; ?>

            <nav>
                <ul class="pagination">
                    <li><span class="pagination"><?php previous_post_link('%link', '&larr; Previous post in category', TRUE); ?></span></li>
                    <li><span class="pagination"><?php next_post_link( '%link', 'Next post in category &rarr;', TRUE); ?></span></li>
                </ul>
            </nav>

            <?php comments_template(); ?>

    </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
