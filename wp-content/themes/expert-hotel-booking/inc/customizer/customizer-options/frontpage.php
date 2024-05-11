<?php
function expert_hotel_booking_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
			'expert_hotel_booking_frontpage_sections', array(
				'priority' => 32,
				'title' => esc_html__( 'Frontpage Sections', 'expert-hotel-booking' ),
			)
		);
	
	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'expert-hotel-booking' ),
			'priority' => 13,
			'panel' => 'expert_hotel_booking_frontpage_sections',
		)
	);

	// Slider Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_slider_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_slider_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-hotel-booking' ),
			'section'     => 'slider_setting',
			'settings'    => 'expert_hotel_booking_slider_setting',
			'type'        => 'checkbox'
		) 
	);

	// Slider Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_slider_button_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_slider_button_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Button', 'expert-hotel-booking' ),
			'section'     => 'slider_setting',
			'settings'    => 'expert_hotel_booking_slider_button_setting',
			'type'        => 'checkbox'
		) 
	);

	// Slider Search Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_slider_search_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_slider_search_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Search', 'expert-hotel-booking' ),
			'section'     => 'slider_setting',
			'settings'    => 'expert_hotel_booking_slider_search_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','expert-hotel-booking'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','expert-hotel-booking'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','expert-hotel-booking'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	/*=========================================
	Hotel Booking Section
	=========================================*/

	$wp_customize->add_section(
		'booking_section', array(
			'title' => esc_html__( 'Hotel Booking Section', 'expert-hotel-booking' ),
			'priority' => 14,
			'panel' => 'expert_hotel_booking_frontpage_sections',
		)
	);

	// Hotel Booking Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_tourist_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_tourist_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-hotel-booking' ),
			'section'     => 'booking_section',
			'settings'    => 'expert_hotel_booking_tourist_setting',
			'type'        => 'checkbox'
		) 
	);

	// Button Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_tourist_button_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_tourist_button_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Button', 'expert-hotel-booking' ),
			'section'     => 'booking_section',
			'settings'    => 'expert_hotel_booking_tourist_button_setting',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting(
    	'expert_hotel_booking_section_title',
    	array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);	
	$wp_customize->add_control( 
		'expert_hotel_booking_section_title',
		array(
		    'label'   		=> __('Title','expert-hotel-booking'),
		    'section'		=> 'booking_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	$wp_customize->add_setting(
    	'expert_hotel_booking_section_text',
    	array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);	
	$wp_customize->add_control( 
		'expert_hotel_booking_section_text',
		array(
		    'label'   		=> __('Section Text','expert-hotel-booking'),
		    'section'		=> 'booking_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);


	$expert_hotel_booking_args = array('numberposts' => -1);
	$post_list = get_posts($expert_hotel_booking_args);
	$s = 0;
	$pst_sls[]= __('Select','expert-hotel-booking');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $s = 1; $s <= 6; $s++ ) {
		$wp_customize->add_setting(
			'expert_hotel_booking_section_settigs'.$s,
			array(
				'sanitize_callback' => 'expert_hotel_booking_sanitize_choices',
			)
		);

		$wp_customize->add_control(
			'expert_hotel_booking_section_settigs'.$s,
			array(
				'type'    => 'select',
				'choices' => $pst_sls,
				'label' => __('Select post','expert-hotel-booking'),
				'section' => 'booking_section',
			)
		);
	}
	wp_reset_postdata();
}

add_action( 'customize_register', 'expert_hotel_booking_blog_setting' );

// service selective refresh
function expert_hotel_booking_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'expert_hotel_booking_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'expert_hotel_booking_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'expert_hotel_booking_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'expert_hotel_booking_blog_section_partials' );

// blog_title
function expert_hotel_booking_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function expert_hotel_booking_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function expert_hotel_booking_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}