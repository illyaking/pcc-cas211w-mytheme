<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

    <header>

        <nav class="navbar navbar-expand-md navbar-light bg-light">

            <?php if( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
            <?php else : ?>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
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


