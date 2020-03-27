<?php get_header(); ?>


<!-- CONTENT BELOW -->
<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="row product-archive">

                <?php
                    $args = array(
                        'post_type' => 'illya_product',
                        'posts_per_page' => 6,
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );
                    $product_query = new WP_Query( $args );
                if ( $product_query->have_posts () ) :
                ?>
                <?php while ($product_query->have_posts()) : $product_query->the_post(); ?>
                <div class="col-sm-4">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <!--/col -->
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <div class="col-xs-12">
                    <p><?php _e( 'No products have been created yet.<br>Add that category and create post.<br>Be sure to give each product a featured image.', 'illyaking' ); ?></p>
                </div>
                <!--/col-->
                <?php endif; ?>

            </div><!-- /.row blog-post -->

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
