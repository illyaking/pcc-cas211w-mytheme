<?php
/**
 * illyaking Theme Customizer
 *
 * @file           customizer.php
 * @author         Illya King
 */

// Theme Customizer

function illyaking_customizer_register( $wp_customize ) {

// Theme Customizer -- Site Identity
    $wp_customize->get_control( 'display_header_text' )->label = __('Display Site Title', 'illyaking');   
    $wp_customize->get_control( 'blogdescription' )->label = __('Feature Text', 'illyaking');
    $wp_customize->get_control( 'site_icon' )->label = __( 'Site Icon aka favicon', 'illyaking' );
    $wp_customize->get_control( 'blogname' )->priority = 10;
    $wp_customize->get_control( 'display_header_text' )->priority = 20;
    $wp_customize->get_control( 'blogdescription' )->priority = 30;
    $wp_customize->get_control( 'site_icon' )->priority = 40;
    
// Theme Customizer -- Rename and Describe Header Image Section
    $wp_customize->add_section( 'header_image' , array(
      'title'      => __( 'Banner Image', 'illyaking' ),
      'description' => 'Change the large banner image that appears on the Home page, the About page (Single Use layout version) and a Blog page if you created one.',
      'priority' => 50,
      ) );    


// Theme Customizer -- Color Section

    // Header Background Color Setting
        $wp_customize->add_setting( 'header_bg_color', array(
            'default' => '#343a40'
        ) );

    // Header Background Color Control -- This is a color picker control
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', 
                array(
                    'label'    => __('Header Background Color', 'illyaking'),
                    'section'  => 'colors',
                    'settings' => 'header_bg_color',
                    'priority' => 10,
                        )
            ) );
    
    // Header Background Color Setting
        $wp_customize->get_setting( 'header_textcolor' )->default = '#eeeeee';
        $wp_customize->get_control( 'header_textcolor' )->label = __( 'Site Title Color', 'illyaking' );

    // Home Page Area Colors
        $wp_customize->add_setting('home_area_colors', array(
            'default'=> 'value1',
            'priority'   => 10,
            ));

        $wp_customize->add_control( 'home_area_colors', 
          array(
            'label'		 => __('Website Body Colors', 'illyaking' ),
            'section'    => 'colors',
            'settings'   => 'home_area_colors',
            'type'       => 'radio',
            'choices'    => array(
                'value1' => __( 'White - Default', 'illyaking' ),
                'value2' => __( 'Black', 'illyaking' ),
                ),
             )
        );

//Theme Customizer- Modify Home Page
    
    // Theme Customizer - Home Page Text
        $wp_customize->add_section( 'custom_home_section', array(
                'title'           => __( 'Home Page Updates', 'illyaking' ),
                'description'     => __( 'Add titles and text to each section of the Home Page.', 'illyaking' ),
                'priority'        => 80,
                'active_callback' => 'is_front_page',
        ) );   

    // Control/Setting for Welcome Section Title
        $wp_customize->add_setting( 'welcome_title', array(
                'default'           => __( 'Welcome to Our Business', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( 'welcome_title', array(
                'priority'    => 10,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a title for the Welcome Section', 'illyaking' ),
                'description' => '',
        ) );

    // Control/Setting for First Secton Title
        $wp_customize->add_setting( 'primary_title', array(
                'default'           => __( 'First featurette heading', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'primary_title', array(
                'priority'    => 10,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a title for the First Section', 'illyaking' ),
                'description' => '',
        ) );

    // Control/Setting for First Section Statement
        $wp_customize->add_setting( 'primary_statement', array(
                'default'           => __( 'Type Statement Here', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'primary_statement', array(
                'priority'    => 10,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input text for First Section Statement', 'illyaking' ),
                'type'        => 'textarea',
                'description' => '',
        ) );

    // Control/Setting for First Section Image
        $wp_customize->add_setting( 'primary_image', array(
            'height'        => 500,
            'default-image' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2ZGI0ODBlMGU1IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTZkYjQ4MGUwZTUiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==',
        ) );
        $wp_customize->add_control( 'primary_image', array(
                'priority'    => 10,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a URL for the Primary Image', 'illyaking' ),
                'description' => '',
            'supports' => array('thumbnail')
        ) );

    // Control/Setting for Second Section Title
        $wp_customize->add_setting( 'secondary_title', array(
                'default'           => __( 'Type Statement Here', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'secondary_title', array(
                'priority'    => 20,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a title for the Second Section', 'illyaking' ),
                'description' => '',
        ) );

    // Control/Setting for Second Section Statement
        $wp_customize->add_setting( 'secondary_statement', array(
                'default'           => __( 'Type Statement Here', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'secondary_statement', array(
                'priority'    => 20,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input text for Second Section Statement', 'illyaking' ),
                'type'        => 'textarea',
                'description' => '',
        ) );

    // Control/Setting for Second Section Image
        $wp_customize->add_setting( 'secondary_image', array(
            'height'        => 500,
            'default-image' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2ZGI0ODBlMGU1IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTZkYjQ4MGUwZTUiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==',
        ) );
        $wp_customize->add_control( 'secondary_image', array(
                'priority'    => 20,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a URL for the Secondary Image', 'illyaking' ),
                'description' => '',
            'supports' => array('thumbnail')
        ) );

    // Control/Setting for Third Secton Title
        $wp_customize->add_setting( 'triad_title', array(
                'default'           => __( 'Type Statement Here', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'triad_title', array(
                'priority'    => 30,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a title for the Third Section', 'illyaking' ),
                'description' => '',
        ) );

    // Control/Setting for Third Section Statement
        $wp_customize->add_setting( 'triad_statement', array(
                'default'           => __( 'Porta nibh venenatis cras sed felis eget velit aliquet. Velit scelerisque in dictum non consectetur a erat nam at. Accumsan sit amet nulla facilisi morbi tempus. Sem nulla pharetra diam sit amet. Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum.', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'triad_statement', array(
                'priority'    => 30,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input text for Third Section Statement', 'illyaking' ),
                'type'        => 'textarea',
                'description' => '',
        ) );
    
    // Control/Setting for Third Section Image
        $wp_customize->add_setting( 'triad_image', array(
            'height'        => 500,
            'default-image' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2ZGI0ODBlMGU1IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTZkYjQ4MGUwZTUiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==',
        ) );
        $wp_customize->add_control( 'triad_image', array(
                'priority'    => 30,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a URL for the Third Image', 'illyaking' ),
                'description' => '',
            'supports' => array('thumbnail')
        ) );
    
    // Control/Setting for Contact Form
        $wp_customize->add_setting( 'contact_form_area', array(
                'default'           => __( 'Type Shortcode Here', 'illyaking' ),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        
        $wp_customize->add_control( 'contact_form_area', array(
                'priority'    => 30,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input Shortcode', 'illyaking' ),
                'type'        => 'shortcode',
                'description' => '',
        ) );
    
    // Control/Setting for  Call to Action Button
        $wp_customize->add_setting( 'call_to_action_title', array(
                'default'           => __('Learn More>>', 'illyaking'),
                'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'call_to_action_title', array(
                'priority'    => 40,
                'section'     => 'custom_home_section',
                'label'       => __( 'Input a title for the Call to Action Button', 'illyaking' ),
                'description' => __( 'Call to Action Button defaults with "Visit Our Store"', 'illyaking' ),
        ) );

    // Control/Setting for  Call to Action Button Link
        $wp_customize->add_setting( 'call_to_action_link', array(
                'default'           => 'https://yourbusiness.com/shop/',
                'sanitize_callback' => 'esc_url',
        ) );
        $wp_customize->add_control( 'call_to_action_link', array(
                'type'        =>  'url',
                'priority'    => 40,
                'section'     => 'custom_home_section',
                'label'       => __( 'Link URL for the Call to Action Button', 'illyaking' ),
                'description' => '',
        ) );
        
}
add_action( 'customize_register', 'illyaking_customizer_register' );


// Add CSS from Theme Customizer to wp_head

function illyaking_customizer_css() {
?>
<style>
    /*=== Style from The Customizer Colors Section - Header Background Color ===*/
    .bg-dark {
        background-color: <?php echo get_theme_mod('header_bg_color');
        ?> !important;
    }

    .navbar-dark .navbar-brand {
        color: #<?php echo header_textcolor();
        ?>;
    }

    /*=== Style from The Customizer Welcome Section Color radio button choices ==*/

    <?php if(get_theme_mod('home_area_colors')=='value2') : //Black Scheme ?>

    body {
        background-color: #000000;
        color: #ffffff;
    }

    body a {
        color: #ffffff;
        font-weight: 600;
        text-decoration: none;
    }

    body a :hover {
        color: #4d148c;
    }

    .services h2 a {
        color: #ffffff;
    }

    h2,
    h3,
    .blog-post a,
    .blog-post-meta a,
    .sidebar-module a {
        color: #ffffff;
    }

    .sidebar-module-border {
        border-left: 2px solid #ffffff !important;
    }

    .dividerBoi {
        border-bottom: 2px solid #ffffff !important;
    }

    .well {
        background: #4d148c;
    }

    .buttonMasher {
        background-color: #cfc20f;
        color: #4d148c;
        border: 2px #2c4019 solid;
    }

    .buttonSlasher {
        background-color: #cfc20f;
        border: 2px #2c4019 solid;
        color: #4d148c;
    }

    #submit {
        background-color: #cfc20f;
        color: #4d148c;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 2px 3px 6px #000000;
    }

    #submit:hover {
        background-color: #4d148c;
        color: #ffffff;
    }

    /* Blog Posts */
    .pager li a,
    .pagination a span,
    .pagination li a {
        background-color: #cfc20f;
        color: #4d148c;
        border: 2px #2c4019 solid;
    }

    .pager a:hover,
    .pager li a:hover,
    .pagination a:hover span,
    .pagination li a:hover,
    .pagination .current {
        background-color: #4d148c;
        border: 2px #2c4019 solid;
        color: #ffffff;
        text-decoration: none;
    }

    /*==Global Mods ==*/


    .pagination .current {
        color: #ffffff !important;
    }

    .btn-lg.btn-primary {
        color: #4d148c;
        background-color: #cfc20f;
        border: 3px solid #2C0557;
    }

    .btn-lg.btn-primary:hover {
        color: #ffffff;
        background-color: #4d148c;
        border: 3px solid ##4d148c;
    }

    }

    a.list-group-item {
        color: #ffffff;
    }

    /*==== BLOG PAGE ====*/

    .blog-post a:hover,
    .blog-post-meta a:hover,
    .sidebar-module a:hover {
        color: #4d148c;
        text-decoration: none;
    }

    .sidebar-module-border {
        border-left: 2px solid #ffffff !important;
    }

    .sidebar-module .fa-lg {
        color: #ffffff;
    }

    .sidebar-module li {
        margin-left: -40px;
    }

    .fa {
        margin-right: 10px;
    }

    <?php endif;
    ?>

</style>

<?php
  }
add_action( 'wp_head', 'illyaking_customizer_css' );

add_filter('get_custom_logo', 'custom_logo_output', 10);
  function custom_logo_output( $html ){
  $html = str_replace( 'custom-logo-link', 'custom-logo-link navbar-brand', $html );
  return $html;
}