<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <?php if( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
            <?php else : ?>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php
                        wp_nav_menu( array(
                           'menu'              => 'primary',
                           'theme_location'    => 'primary',
                           'depth'             => 2,
                           'container'         => true,
                           'menu_class'        => 'navbar-nav nav-item nav-link',
                           'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                           'walker'            => new WP_Bootstrap_Navwalker())
                        );
                    ?>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                    <div>
                        <input class="form-control mr-sm-2"  type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </form>
            </div> <!-- /.container -->
        </nav> <!-- /nav -->

        <div class="container">
        <div class="row feature">
            <?php if (is_archive() ) : ?>
            <div class="page-heading col-xs-10 col-xs-offset-1">

                <h1>
                    <?php
                            if(is_tag()) {
                           single_tag_title('Tag: ');
                         }
                        elseif (is_category( 'news' )) {
                            _e( 'Latest News' , 'illyaking' );
                        }
                        elseif (is_category( 'services' )) {
                            _e( 'Services We Offer' , 'illyaking' );
                        }
                        elseif(is_archive()) {
                           single_term_title('Category: '); 
                            if( is_month() ) {
                              _e( 'Posts from ' , 'illyaking' );
                              single_month_title(' ');
                            }
                          }
                      ?>
                </h1>
            </div><!-- /page-heading -->
            <?php endif; ?>
        </div><!-- /row feature-->
    </div>
    <!--/container-fluid-->
        
    </header><!-- /HEADER SECTION -->


