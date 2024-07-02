<?php if ( is_page( 'About' ) ) :
        get_header( 'alt' );
      else:
        get_header();
      endif; 
?>

<!-- CONTENT BELOW -->
<div class="container">


    <div class="row">

        <div class="col-md-12 blog-main">

            <h2>Page Not Found</h2>
            <p>We're sorry. You've apparently run into a missing page or bad link.</p>
            <p>Please use the menu items above or try a search in the form below.</p>
            <form class="form-inline mt-2 mt-md-0" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                <div>
                    <p></p><input class="form-control mr-sm-2" type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></p>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>

        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
