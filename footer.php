<!-- FOOTER SECTION -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <?php get_sidebar( 'footer' ); ?>
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
            <p>© <?php echo get_bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
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
