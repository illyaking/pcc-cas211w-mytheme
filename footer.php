<!-- FOOTER SECTION -->

<footer>
    <div class="container">
        <div class="row">
            <?php get_sidebar( 'footer' ); ?>
            
            <div class="col-sm-4 col-sm-offset-1 footerBox">
                <h2 class="social">Social</h2>
                <ul class="list-inline">
                    <?php if ( get_theme_mod( 'facebook_url' ) ) : ?>
                    <li><a href="<?php echo get_theme_mod('facebook_url'); ?>" target="_blank" class="btn-social btn-outline"><i class="fa fa-facebook-square"></i></a></li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'instagram_url' ) ) : ?>
                    <li><a href="<?php echo get_theme_mod('instagram_url'); ?>" target="_blank" class="btn-social btn-outline"><i class="fa fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'linkedin_url' ) ) : ?>
                    <li><a href="<?php echo get_theme_mod('linkedin_url'); ?>" target="_blank" class="btn-social btn-outline"><i class="fa fa-linkedin"></i></a></li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'tumblr_url' ) ) : ?>
                    <li><a href="<?php echo get_theme_mod('tumblr_url'); ?>" target="_blank" class="btn-social btn-outline"><i class="fa fa-tumblr-square"></i></a></li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'twitter_url' ) ) : ?>
                    <li><a href="<?php echo get_theme_mod('twitter_url'); ?>" target="_blank" class="btn-social btn-outline"><i class="fa fa-twitter-square"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div> <!-- /.row -->

        <nav class="col-sm-12 footerMenu">
            <ul>
                <?php
                    wp_nav_menu( array(
                       'menu'              => 'secondary',
                       'theme_location'    => 'secondary',
                       'depth'             => 2,
                       'container'         => 'nav',
                       'container_class'   => 'navbar-list',
                       'container_id'      => 'footer-navbar',
                       'menu_class'        => 'footerMenu')
                    );
                ?>
            </ul>
            <p>©<?php echo get_bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
        </nav><!-- /.footerMenu-->
    </div> <!-- /.container -->
</footer>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>
<?php wp_footer(); ?>
</body>

</html>
