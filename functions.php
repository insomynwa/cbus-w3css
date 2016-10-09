<?php

// Load CBUS w3Css scripts (header.php)
function cbusw3css_header_scripts() {
	if( $GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('cbusw3cssscipts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('cbusw3cssscipts'); // Enqueue it!

	}
}

// Load CBUSW3CSS theme-customizer
function cbusw3css_customizer_live_preview() {
	wp_enqueue_script(
		'cbusw3css-theme-customizer',
		get_template_directory_uri() . '/js/theme-customizer.js',
		array( 'jquery', 'customize-preview' ),
		'0.3.0',
		true
		);
}
// Load CBUS w3css styles
function cbusw3css_styles()
{

    //wp_register_style('w3css', 'http://www.w3schools.com/lib/w3.css', array(), '1.0', 'all');
    wp_register_style('w3css', get_template_directory_uri() . '/css/w3.css', array(), '1.0', 'all');
    wp_enqueue_style('w3css'); // Enqueue it!

    wp_register_style('w3css-theme', 'http://www.w3schools.com/lib/w3-theme-orange.css', array(), '', 'all');
    wp_enqueue_style('w3css-theme'); // Enqueue it!

    wp_register_style('font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', array(), '', 'all');
    wp_enqueue_style('font-awesome'); // Enqueue it!

    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('cbusw3css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('cbusw3css'); // Enqueue it!
}

// Add Actions
add_action('init', 'cbusw3css_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'cbusw3css_styles'); // Add Theme Stylesheet
add_action('customize_preview_init', 'cbusw3css_customizer_live_preview');

// HTML5 Blank navigation
function cbusw3css_nav()
{
	wp_nav_menu(
	array(
		//'theme_location'  => 'header-menu',
		'menu'            => 'Main Menu',
		'container'       => 'false',
		//'container_class' => 'menu-{menu slug}-container',
		//'container_id'    => 'cbusnavi',
		'menu_class'      => 'w3-navbar w3-theme-d2 w3-left-align w3-large',
		// 'menu_id'         => '',
		// 'echo'            => true,
		// 'fallback_cb'     => 'wp_page_menu',
		// 'before'          => '',
		// 'after'           => '',
		// 'link_before'     => '',
		// 'link_after'      => '',
		// 'items_wrap'      => '<ul>%3$s</ul>',
		// 'depth'           => 0,
		'walker'          => new CSS_Menu_Walker()
		)
	);
}

/*function cbusw3cssslug_customize_register( $wp_customize) {

	$wp_customize->add_setting( 'cbusw3css_theme_options[slideshow_image]',
		array(
			'default'		=> '',
			'type'			=> 'option',
			'transport'		=> 'postMessage',
			'capability'	=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'cbusw3css_slideshow_image1',
		array(
			'label'			=> __('Slideshow1', 'cbusw3css'),
			'section'		=> 'cbusw3css_slideshow_image',
			'settings'		=> 'cbusw3css_theme_options[slideshow_image]',
			)
		)
		);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'cbusw3css_slideshow_image2',
		array(
			'label'			=> __('Slideshow2', 'cbusw3css'),
			'section'		=> 'cbusw3css_slideshow_image',
			'settings'		=> 'cbusw3css_theme_options[slideshow_image]',
			)
		)
		);

	$wp_customize->add_section( 'cbusw3css_color_scheme',
		array(
			'title'		=> __( 'Color Scheme', 'cbusw3css'),
			'priority'	=> 35,
			)
		);

	$wp_customize->add_setting( 'cbusw3css_theme_options[color_scheme]',
		array(
			'default'		=> 'w3-theme-black',
			'type'			=> 'option',
			'capability'	=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control( 'cbusw3css_color_scheme',
		array(
			'label'			=> __('Color Scheme', 'cbusw3css'),
			'section'		=> 'cbusw3css_color_scheme',
			'settings'		=> 'cbusw3css_theme_options[color_scheme]',
			'type'			=> 'radio',
			'choices'		=> array(
				'value1'	=> 'Choice 1',
				'value2'	=> 'Choice 2',
				'value3'	=> 'Choice 3',
				),
			)
		);
}
add_action( 'customize_register', 'cbusw3cssslug_customize_register');*/

function cbus_service() {
	if(!class_exists(CBUS_Service_Model)) echo "DAAAAAAAAAAAAAMN";
}

require_once get_template_directory().'/inc/CSS_Menu_Walker.php';
require get_stylesheet_directory() . '/inc/cbusw3css_customizer.php';

new CBUSw3css_customizer();

?>