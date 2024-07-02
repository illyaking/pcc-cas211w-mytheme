<?php

// Add Theme Support Below

// Add Theme Support - Content Width

if (!isset($content_width)) {
    $content_width = 1600;
}

// Add Theme Support - Feed Link, Title Tags 

function illyaking_setup()
{

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // Register Custom Navigation Walker 
    require_once('wp-bootstrap-navwalker.php');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'illyaking'),
        'secondary' => __('Footer Menu', 'illyaking'),
    ));

    // Enabling Custom Headers 

    $args = array(
        'flex-width'    => 'true',
        'width'         => 1920,
        'flex-height'   => 'true',
        'height'        => 800,
        'default-image' => get_template_directory_uri() . '/img/purpleFloralPattern.jpg',
        'uploads'       => 'true',
        'priority'   => 30
    );
    add_theme_support('custom-header', $args);


    $args = array(
        'default-color'          => '#ffffff',
        'default-image'          => '',
        'default-repeat'         => 'repeat',
        'default-position-x'     => 'left',
        'default-position-y'     => 'top',
        'default-size'           => 'auto',
        'default-attachment'     => 'scroll',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support('custom-background', $args);

    // Enabling Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-width' => true,
    ));
}

add_action('after_setup_theme', 'illyaking_setup');

function illyaking_scripts()
{

    /* Stylesheets */
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('custome-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fontawesome/css/all.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');


    /* Scripts */
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true);

    /* Comment Reply Javascript Activation*/
    if ((!is_admin()) && is_singular() && comments_open() && get_option('thread_comments'))  wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts', 'illyaking_scripts');

//Read More characters changed

function custom_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//Change Excerpt Lenght in Search Results Page
function custom_excerpt_length($length)
{
    if (is_search()) {
        return 10;
    } else return 35;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


// Register Custom Post Type - Products
add_action('init', 'create_post_type');
add_post_type_support('illya_product', 'thumbnail');
function create_post_type()
{
    register_post_type(
        'illya_product',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

// Modifies Comment Form Default Input Fields
add_filter('comment_form_default_fields', 'bootstrap3_comment_form_fields');
function bootstrap3_comment_form_fields($fields)
{
    $commenter = wp_get_current_commenter();

    $req      = get_option('require_name_email');
    $aria_req = ($req ? " aria-required='true'" : '');
    $html5    = current_theme_supports('html5', 'comment-form') ? 1 : 0;

    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label class="sr-only" for="author">' . __('Name') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' .
            '<input class="form-control" id="author" name="author" type="text" placeholder="Name *" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label class="sr-only" for="email">' . __('Email') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' .
            '<input class="form-control" id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' placeholder="Email *"' . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></div>'
    );

    return $fields;
}

// Modifies Comment Form Textarea Field
add_filter('comment_form_defaults', 'bootstrap3_comment_form');
function bootstrap3_comment_form($args)
{
    $args['comment_field'] = '<div class="form-group comment-form-comment">
                <label class="sr-only" for="comment">' . _x('Comment', 'noun') . '</label> 
                <textarea class="form-control" id="comment" name="comment" cols="45" placeholder="Comment" rows="8" aria-required="true"></textarea>
                </div>';
    $args['class_submit'] = 'btn btn-default'; // since WP 4.1

    return $args;
}

// Moves the Comment textarea to the bottom of the group of Comment Fields
function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');

// Dynamic Feature Text function
function featuretext()
{
    if (is_front_page()) {
        echo get_bloginfo('name');
        _e('<br>');
        echo get_bloginfo('description');
    } elseif (is_page('About')) {
        _e('About Illya King Theme', 'illyaking');
    }
}

// Dashboard Footer Customization

function illyaking_footer_admin()
{

    echo '<p>Theme by <a href="https://www.illyaking.com" target="_blank">Illya King</a> | Designed by <a href="https://www.illyaking.com" target="_blank">Illya King</a></p>';
}
add_filter('admin_footer_text', 'illyaking_footer_admin');

// Include Sidebar Registration, Theme Widgets, and Theme Customizer functions

require_once(get_template_directory() . '/inc/register_sidebars.php');
require_once(get_template_directory() . '/inc/theme_widgets.php');
require_once(get_template_directory() . '/inc/customizer.php');


// Dashboard Enqueue Scripts

function load_custom_wp_admin_style()
{
    wp_register_style('custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0');
    wp_enqueue_style('custom_wp_admin_css');
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

function illyaking_customizer_style()
{
    wp_add_inline_style('customize-controls', '.wp-full-overlay-sidebar { background: #ffffff;}', '.description { color: #000000;}');
}
add_action('customize_controls_enqueue_scripts', 'illyaking_customizer_style');
