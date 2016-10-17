<?php

class CBUSw3css_customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customizer_sections' ) );

		add_action('wp_head', array( $this, 'cbusw3css_customizer_css' ) );
	}

	public function register_customizer_sections( $wp_customize ) {

		// SLOGAN
		$wp_customize->add_section( 'cbusw3css_slogan',
			array(
				'title'			=> __('Slogan', 'cbusw3css'),
				'description'	=> 'CBUS slogan',
				'priority'		=> 21,
				)
			);

		// Menu Color
		$wp_customize->add_section( 'cbusw3css_menu_color',
		array(
			'title'			=> __('Menu Color','cbusw3css'),
			'description'	=> 'menu color',
			'priority'		=> 101,
			)
		);

		// Slideshow section
		$wp_customize->add_section( 'cbusw3css_slideshow',
		array(
			'title'			=> __('Slideshow','cbusw3css'),
			'description'	=> 'Main Slideshow. Picture Height: min. 350px, max. 600px',
			'priority'		=> 200,
			)
		);

		$this->cbusw3css_slogan_section( $wp_customize );
		$this->cbusw3css_menu_color_section( $wp_customize );
		$this->cbusw3css_slideshow_image_section( $wp_customize );
	}

	private function cbusw3css_slogan_section( $wp_customize ) {
		//SLOGAN TEXT
		$wp_customize->add_setting( 'cbusw3css_theme_option[slogan_text]',
			array(
				'default'		=> 'CREATING BRIGHT UNSTOPPABLE SUCCESS',
				'type'			=> 'option',
				'transport'		=> 'refresh',
				'capability'	=> 'edit_theme_options',
				)
			);

		$wp_customize->add_control('cbusw3css_slogan_text',
			array(
				'settings'		=> 'cbusw3css_theme_option[slogan_text]',
				'label'			=> __('Slogan', 'cbusw3css'),
				'section'		=> 'cbusw3css_slogan',
				'type'			=> 'text'
				)
			);

		// SLOGAN BG COLOR
		$wp_customize->add_setting('cbusw3css_theme_option[slogan_background_color]',
			array(
				'default'	=> '#FF9800',
				'type'		=> 'option',
				'transport'	=> 'refresh',
				'capability'	=> 'edit_theme_options'
				)
			);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cbusw3css_slogan_background_color',
				array(
					'label'		=> __('Background', 'cbusw3css'),
					'section'	=> 'cbusw3css_slogan',
					'settings'	=> 'cbusw3css_theme_option[slogan_background_color]'
					)
				)
			);

		// SLOGAN TEXT COLOR
		$wp_customize->add_setting('cbusw3css_theme_option[slogan_text_color]',
			array(
				'default'	=> '#FFFFFF',
				'type'		=> 'option',
				'transport'	=> 'refresh',
				'capability'	=> 'edit_theme_options'
				)
			);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cbusw3css_slogan_text_color',
				array(
					'label'		=> __('Text Color', 'cbusw3css'),
					'section'	=> 'cbusw3css_slogan',
					'settings'	=> 'cbusw3css_theme_option[slogan_text_color]'
					)
				)
			);
	}

	private function cbusw3css_menu_color_section( $wp_customize ) {
		// MENU BG
		$wp_customize->add_setting(
			'cbusw3css_theme_option[menu_background_color]',
			array(
				'default'	=> '#000000',
				'type'		=> 'option',
				'transport'	=> 'refresh',
				'capability'	=> 'edit_theme_options',
				)
			);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cbusw3css_menu_background_color',
				array(
					'label'		=> __( 'Menu Background' , 'cbusw3css'),
					'section'	=> 'cbusw3css_menu_color',
					'settings'	=> 'cbusw3css_theme_option[menu_background_color]'
					)
				)
			);

		// MENU TEXT
		$wp_customize->add_setting(
			'cbusw3css_theme_option[menu_text_color]',
			array(
				'default'	=> '#ffffff',
				'type'		=> 'option',
				'transport'	=> 'refresh',
				'capability'	=> 'edit_theme_options',
				)
			);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cbusw3css_menu_text_color',
				array(
					'label'		=> __( 'Menu Text' , 'cbusw3css'),
					'section'	=> 'cbusw3css_menu_color',
					'settings'	=> 'cbusw3css_theme_option[menu_text_color]'
					)
				)
			);

		// MENU TEXT HOVER
		$wp_customize->add_setting(
			'cbusw3css_theme_option[menu_text_hover_color]',
			array(
				'default'	=> '#FFFFFF',
				'type'		=> 'option',
				'transport'	=> 'refresh',
				'capability'	=> 'edit_theme_options',
				)
			);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cbusw3css_menu_text_hover_color',
				array(
					'label'		=> __( 'Menu Text Hover' , 'cbusw3css'),
					'section'	=> 'cbusw3css_menu_color',
					'settings'	=> 'cbusw3css_theme_option[menu_text_hover_color]'
					)
				)
			);

		// MENU TEXT BG HOVER
		$wp_customize->add_setting(
			'cbusw3css_theme_option[menu_text_background_hover_color]',
			array(
				'default'	=> '#FF4500',
				'type'		=> 'option',
				'transport'	=> 'refresh',
				'capability'	=> 'edit_theme_options',
				)
			);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cbusw3css_menu_background_hover_color',
				array(
					'label'		=> __( 'Menu Text Background Hover' , 'cbusw3css'),
					'section'	=> 'cbusw3css_menu_color',
					'settings'	=> 'cbusw3css_theme_option[menu_text_background_hover_color]'
					)
				)
			);

		// MENU LOGO
		$wp_customize->add_setting(
			'cbusw3css_theme_option[menu_logo_background_color]',
			array(
				'default'	=> '#00ad14',
				'type'		=> 'option',
				'transport'	=> 'refresh',
				'capability'	=> 'edit_theme_options',
				)
			);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cbusw3css_menu_logo_background_color',
				array(
					'label'		=> __( 'Menu Logo Background' , 'cbusw3css'),
					'section'	=> 'cbusw3css_menu_color',
					'settings'	=> 'cbusw3css_theme_option[menu_logo_background_color]'
					)
				)
			);
	}

	private function cbusw3css_slideshow_image_section( $wp_customize ) {

		/* SLIDESHOW */
		$wp_customize->add_setting( 'cbusw3css_theme_option[main_slideshow1]',
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

		$wp_customize->add_setting(
			'cbusw3css_theme_option[main_slideshow3]',
			array(
				'default'		=> "http://localhost:81/CBUS/wp-content/uploads/2016/09/Foto-Foto-Yumi-Sugimoto-16.jpg",
				'type'			=> 'option',
				'transport'		=> 'postMessage',
				'capability'	=> 'edit_theme_options',
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
		$wp_customize->add_setting( 'cbusw3css_theme_option[main_slideshow4]',
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
				'cbusw3css_main_slideshow4',
				array(
					'label'			=> __('Slideshow 4', 'cbusw3css'),
					'section'		=> 'cbusw3css_slideshow',
					'settings'		=> 'cbusw3css_theme_option[main_slideshow4]',
					)
				)
		);
		$wp_customize->add_setting( 'cbusw3css_theme_option[main_slideshow5]',
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
				'cbusw3css_main_slideshow5',
				array(
					'label'			=> __('Slideshow 5', 'cbusw3css'),
					'section'		=> 'cbusw3css_slideshow',
					'settings'		=> 'cbusw3css_theme_option[main_slideshow5]',
					)
				)
		);
		$wp_customize->add_setting( 'cbusw3css_theme_option[main_slideshow6]',
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
				'cbusw3css_main_slideshow6',
				array(
					'label'			=> __('Slideshow 6', 'cbusw3css'),
					'section'		=> 'cbusw3css_slideshow',
					'settings'		=> 'cbusw3css_theme_option[main_slideshow6]',
					)
				)
		);
		/* =================================================================== */
	}

	public function cbusw3css_customizer_css() {
	?>
	<style type="text/css">
	#cbusnavi.navbar {
		background-color: <?php echo get_option('cbusw3css_theme_option')['menu_background_color']; ?>;
	}
		#cbusnavi.navbar li a, #cbusnavi.navbar .navbar-brand {
			color: <?php echo get_option('cbusw3css_theme_option')['menu_text_color']; ?> !important;
		}
	    #cbusnavi .w3-navbar li a.navilogo {
			background-color: <?php echo get_option('cbusw3css_theme_option')['menu_logo_background_color']; ?>;
		}
		#cbusnavi .navbar-nav li a:hover, #cbusnavi .navbar-nav li.active a {
	        background-color: <?php echo get_option('cbusw3css_theme_option')['menu_text_background_hover_color']; ?> !important;
	        color:  <?php echo get_option('cbusw3css_theme_option')['menu_text_hover_color']; ?> !important;
	    }
	#navDemo .w3-navbar {
		background-color: <?php echo get_option('cbusw3css_theme_option')['menu_background_color']; ?>;
	}
		#navDemo .w3-navbar li a {
			color: <?php echo get_option('cbusw3css_theme_option')['menu_text_color']; ?>;
		}
		#navDemo .w3-navbar li a:hover {
	        background-color: <?php echo get_option('cbusw3css_theme_option')['menu_text_background_hover_color']; ?>;
	        color:  <?php echo get_option('cbusw3css_theme_option')['menu_text_hover_color']; ?>;
	    }

	#cbusslogan {
		background-color: <?php echo get_option('cbusw3css_theme_option')['slogan_background_color']; ?>;
	}
		#cbusslogan p {
			color:<?php echo get_option('cbusw3css_theme_option')['slogan_text_color']; ?>;
		}
	</style>
	<?php
	}

}
?>