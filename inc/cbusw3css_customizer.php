<?php

class CBUSw3css_customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customizer_sections' ) );
	}

	public function register_customizer_sections( $wp_customize ) {

		// Slideshow section
		$wp_customize->add_section( 'cbusw3css_slideshow',
		array(
			'title'			=> __('Slideshow','cbusw3css'),
			'description'	=> 'Main Slideshow. Picture Height: min. 350px, max. 600px',
			'priority'		=> 200,
			)
		);

		$this->cbusw3css_slideshow_image_section( $wp_customize );
	}

	private function cbusw3css_slideshow_image_section( $wp_customize ) {

		/* SLIDESHOW */
		$wp_customize->add_setting( 'cbusw3css_theme_option[main_slideshow1]',
		array(
			'default'		=> '',
			'type'			=> 'option',
			'transport'		=> 'postMessage',
			// 'capability'	=> 'edit_theme_options',
			)
		);

		$wp_customize->add_control( 
			new WP_Customize_Image_Control(
				$wp_customize,
				'cbusw3css_main_slideshow1',
				array(
					'label'			=> __('Slideshow 1', 'cbusw3css'),
					'section'		=> 'cbusw3css_slideshow',
					'settings'		=> 'cbusw3css_theme_option[main_slideshow1]',
					)
				)
		);

		$wp_customize->add_setting( 'cbusw3css_theme_option[main_slideshow2]',
		array(
			'default'		=> '',
			'type'			=> 'option',
			'transport'		=> 'postMessage',
			'capability'	=> 'edit_theme_options',
			)
		);

		$wp_customize->add_control( 
			new WP_Customize_Image_Control(
				$wp_customize,
				'cbusw3css_main_slideshow2',
				array(
					'label'			=> __('Slideshow 2', 'cbusw3css'),
					'section'		=> 'cbusw3css_slideshow',
					'settings'		=> 'cbusw3css_theme_option[main_slideshow2]',
					)
				)
		);

		$wp_customize->add_setting( 'cbusw3css_theme_option[main_slideshow3]',
		array(
			'default'		=> "http://localhost:81/CBUS/wp-content/uploads/2016/09/Foto-Foto-Yumi-Sugimoto-16.jpg",
			'type'			=> 'option',
			'transport'		=> 'postMessage',
			// 'capability'	=> 'edit_theme_options',
			)
		);

		$wp_customize->add_control( 
			new WP_Customize_Image_Control(
				$wp_customize,
				'cbusw3css_main_slideshow3',
				array(
					'label'			=> __('Slideshow 3', 'cbusw3css'),
					'section'		=> 'cbusw3css_slideshow',
					'settings'		=> 'cbusw3css_theme_option[main_slideshow3]',
					)
				)
		);
		/* =================================================================== */
	}

	public function sanitize_callback( $input ) {
		return ($input === true ) ? true : false;
	}

}