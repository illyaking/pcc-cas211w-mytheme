<?php
/**
 * illyaking Register Sidebars
 *
 * @file           register_sidebars.php
 * @author         Illya King
 */

// Register Sidebars
function illyaking_sidebars() {

	$args = array(
		'id'            => 'mainsidebar',
		'class'         => 'sidebarone',
		'name'          => __( 'Main Sidebar', 'illyaking' ),
		'description'   => __( 'for left sidebar pages', 'illyaking' ),
		'before_widget' => '<div id="%1$s" class="sidebar-module sidebar-module-border %2$s">',
		'after_widget'  => '</div>',
		'before-title'  => '<h4>',
		'after-title'   => '</h4>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'topleftsidebar',
		'class'         => 'sidebartwo',
		'name'          => __( 'Top Left Section', 'illyaking' ),
		'description'   => __( 'Top Left Section for Two Page Header Pages', 'illyaking' ),
		'before_widget' => '<div id="%1$s" class="sidebar-module sidebar-module-border %2$s">',
		'after_widget'  => '</div>',
		'before-title'  => '<h4>',
		'after-title'   => '</h4>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'toprightsidebar',
		'class'         => 'sidebarthree',
		'name'          => __( 'Top Right Section', 'illyaking' ),
		'description'   => __( 'Top Right Section for Two Page Header Pages', 'illyaking' ),
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
		'before-title'  => '<h4>',
		'after-title'   => '</h4>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'leftsidebar',
		'class'         => 'sidebarfour',
		'name'          => __( 'Left Sidebar', 'illyaking' ),
		'description'   => __( 'for left sidebar pages', 'illyaking' ),
		'before_widget' => '<div id="%1$s" class="sidebar-module sidebar-module-border %2$s">',
		'after_widget'  => '</div>',
		'before-title'  => '<h4>',
		'after-title'   => '</h4>'
	);
	register_sidebar( $args );
	$args = array(
    	'id'            => 'footersidebar',
    	'class'         => 'footersidebars',
		'name'          => __( 'Footer Section', 'illyaking' ),
		'description'   => __( 'for the footer widgets', 'illyaking' ),
    	'before_widget' => '<div id="%1$s" class="col-md-4 footerBox %2$s">',
    	'after_widget'  => '</div>',
    	'before-title'  => '<h4>',
    	'after-title'   => '</h4>'
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'illyaking_sidebars' );