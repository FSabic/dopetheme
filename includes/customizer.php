<?php
	function doptheme_customize_register($wp_customize){
		// Hero Section
  		$wp_customize->add_section('hero', array(
			'title'          => __('Hero', 'doptheme'),
			'description'    => sprintf( __('Options for hero area', 'doptheme')
			),
			'priority'       => 140,
		));

		// Image Setting
		  $wp_customize->add_setting('hero_image', array(
		    'default' => get_bloginfo('template_directory') . '/img/slide-2.jpg',
		    'type'    => 'theme_mod'

		 ));

		 // Image Control
		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
		     'label'    => __('Background Image', 'doptheme'),
		     'section'  => 'hero',
		     'settings' => 'hero_image',
		     'priority' => 1,
		 )));

		 // Height Setting
		$wp_customize->add_setting( 'hero_height', array(
			'default'              => _x(700, 'doptheme'),
			'type'                 => 'theme_mod'
		));

		// Height Control
		$wp_customize->add_control( 'hero_height', array(
			'label'    => __('Hero Height', 'doptheme'),
			'section'  => 'hero',
			'priority' => 2,
		));

		// Heading Setting
		$wp_customize->add_setting( 'hero_heading', array(
			'default'              => _x('doptheme Theme', 'doptheme'),
			'type'                 => 'theme_mod'
		));

		// Heading Control
		$wp_customize->add_control( 'hero_heading', array(
			'label'    => __('Heading', 'doptheme'),
			'section'  => 'hero',
			'priority' => 3,
		));

		// Text Setting
		$wp_customize->add_setting( 'hero_text', array(
			'default'              => _x('Custom Wordpress Theme By You', 'doptheme'),
			'type'                 => 'theme_mod'
		));

		// Text Control
		$wp_customize->add_control( 'hero_text', array(
			'label'    => __('Text', 'doptheme'),
			'section'  => 'hero',
			'priority' => 4,
		)); 

		// Topbar Section
		$wp_customize->add_section('topbar', array(
			'title'          => __('Topbar', 'doptheme'),
			'description'    => sprintf( __('Email and Phone', 'doptheme')
			),
			'priority'       =>120,
		));

		// Topbar Email Setting
		$wp_customize->add_setting( 'topbar_email', array(
			'default'              => _x('Exsample@dd.com', 'doptheme'),
			'type'                 => 'theme_mod'
		));

		// Topbar Email Control
		$wp_customize->add_control( 'topbar_email', array(
			'label'    => __('Topabar Email', 'doptheme'),
			'section'  => 'topbar',
			'priority' => 1,
		));

		// Topbar Phone Setting
		$wp_customize->add_setting( 'topbar_phone', array(
			'default'              => _x('+385 98 0586 011', 'doptheme'),
			'type'                 => 'theme_mod'
		));

		
		// Topbar Phone Control
		$wp_customize->add_control( 'topbar_phone', array(
			'label'    => __('Topbar Phone', 'doptheme'),
			'section'  => 'topbar',
			'priority' => 2,
		));


		// Social Section
		 $wp_customize->add_section('social', array(
		     'title'          => __('Social', 'doptheme'),
		     'description'    => sprintf( __('Social media urls', 'doptheme')
		     ),
		     'priority'       =>130,
		 ));

		 	// Twitter URL Setting
		$wp_customize->add_setting('twitter_url', array(
			'default'              => _x('http://www.twitter.com', 'doptheme'),
			'type'                 => 'theme_mod'
			));
	
			// Twitter URL Control
			$wp_customize->add_control( 'twitter_url', array(
			'label'    => __('Twitter URL', 'doptheme'),
			'section'  => 'social',
			'priority' =>1,
			));
	

		 // Facebook URL Setting
		 $wp_customize->add_setting('facebook_url', array(
		   'default'              => _x('http://www.facebook.com', 'doptheme'),
		   'type'                 => 'theme_mod'
		 ));

		 // Facebook URL Control
		 $wp_customize->add_control( 'facebook_url', array(
		   'label'    => __('Facebook URL', 'doptheme'),
		   'section'  => 'social',
		   'priority' => 2,
		 ));

		 // Instagram URL Setting
		 $wp_customize->add_setting('instagram_url', array(
			'default'              => _x('http://www.instagram.com', 'doptheme'),
			'type'                 => 'theme_mod'
		  ));
 
		  // Instagram URL Control
		  $wp_customize->add_control( 'instagram_url', array(
			'label'    => __('Instagram URL', 'doptheme'),
			'section'  => 'social',
			'priority' => 3,
		  ));
 
		// Linkedin URL Setting
		 $wp_customize->add_setting('linkedin_url', array(
		   'default'              => _x('http://www.linkedin.com', 'doptheme'),
		   'type'                 => 'theme_mod'
		 ));

		 // Linkedin URL Control
		 $wp_customize->add_control( 'linkedin_url', array(
		   'label'    => __('LinkedIn URL', 'doptheme'),
		   'section'  => 'social',
		   'priority' =>4,
		 ));
        }
	add_action('customize_register','doptheme_customize_register');