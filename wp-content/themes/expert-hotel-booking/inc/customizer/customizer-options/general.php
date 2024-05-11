<?php
function expert_hotel_booking_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_hotel_booking_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'expert-hotel-booking' ),
		)
	);

	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'expert-hotel-booking' ),
			'priority' => 1,
			'panel' => 'expert_hotel_booking_general',
		)
	);
	
	// Settings 
	$wp_customize->add_setting(
		'breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','expert-hotel-booking'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-hotel-booking' ),
			'section'     => 'breadcrumb_setting',
			'settings'    => 'hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Preloader Section
	=========================================*/
	$wp_customize->add_section(
		'preloader_section_setting', array(
			'title' => esc_html__( 'Preloader', 'expert-hotel-booking' ),
			'priority' => 3,
			'panel' => 'expert_hotel_booking_general',
		)
	);

	// Preloader Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_preloader_setting' , 
			array(
			'default' => '',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_preloader_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Preloader', 'expert-hotel-booking' ),
			'section'     => 'preloader_section_setting',
			'settings'    => 'expert_hotel_booking_preloader_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Scroll To Top Section
	=========================================*/
	$wp_customize->add_section(
		'scroll_to_top_section_setting', array(
			'title' => esc_html__( 'Scroll To Top', 'expert-hotel-booking' ),
			'priority' => 3,
			'panel' => 'expert_hotel_booking_general',
		)
	);

	// Scroll To Top Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_scroll_top_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_scroll_top_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Scroll To Top', 'expert-hotel-booking' ),
			'section'     => 'scroll_to_top_section_setting',
			'settings'    => 'expert_hotel_booking_scroll_top_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Woocommerce Section
	=========================================*/
	$wp_customize->add_section(
		'woocommerce_section_setting', array(
			'title' => esc_html__( 'Woocommerce Settings', 'expert-hotel-booking' ),
			'priority' => 3,
			'panel' => 'expert_hotel_booking_general',
		)
	);

	// Add the setting for product columns
	$wp_customize->add_setting(
	    'expert_hotel_booking_custom_shop_per_columns',
	    array(
	        'default'           => '3',
	        'sanitize_callback' => 'expert_hotel_booking_sanitize_numeric_input',
	    )
	);

	// Add control for product columns
	$wp_customize->add_control( 
	    'expert_hotel_booking_custom_shop_per_columns',
	    array(
	        'label'     => __('Product Per Columns', 'expert-hotel-booking'),
	        'section'   => 'woocommerce_section_setting',
	        'type'      => 'number', // Change type to number
	        'input_attrs' => array(
	            'min'   => 1, // Optional: set minimum allowed value
	            'max'	=> 4,
	            'step'  => 1, // Optional: set step size
	        ),
	        'transport' => $selective_refresh,
	    )  
	);

	$wp_customize->add_setting(
    	'expert_hotel_booking_custom_shop_product_per_page',
    	array(
			'default' => '9',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_numeric_input',
		)
	);	
	$wp_customize->add_control( 
		'expert_hotel_booking_custom_shop_product_per_page',
		array(
		    'label'   		=> __('Product Per Page','expert-hotel-booking'),
		    'section'		=> 'woocommerce_section_setting',
			'type'      => 'number', // Change type to number
	        'input_attrs' => array(
	            'min'   => 1, // Optional: set minimum allowed value
	            'step'  => 1, // Optional: set step size
	        ),
	        'transport' => $selective_refresh,
		)  
	);

	// Woocommerce Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_wocommerce_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_wocommerce_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Woocommerce Sidebar', 'expert-hotel-booking' ),
			'section'     => 'woocommerce_section_setting',
			'settings'    => 'expert_hotel_booking_wocommerce_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Sticky Header Section
	=========================================*/
	$wp_customize->add_section(
		'sticky_header_section_setting', array(
			'title' => esc_html__( 'Sticky Header Settings', 'expert-hotel-booking' ),
			'priority' => 3,
			'panel' => 'expert_hotel_booking_general',
		)
	);

	// Sticky Header Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_sticky_header' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_sticky_header', 
		array(
			'label'	      => esc_html__( 'Hide / Show Sticky Header', 'expert-hotel-booking' ),
			'section'     => 'sticky_header_section_setting',
			'settings'    => 'expert_hotel_booking_sticky_header',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	404 Section
	=========================================*/
	$wp_customize->add_section(
		'expert_hotel_booking_404_section', array(
			'title' => esc_html__( '404 Section', 'expert-hotel-booking' ),
			'priority' => 1,
			'panel' => 'expert_hotel_booking_general',
		)
	);

	$wp_customize->add_setting(
    	'expert_hotel_booking_404_title',
    	array(
			'default' => '404',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'expert_hotel_booking_404_title',
		array(
		    'label'   		=> __('404 Heading','expert-hotel-booking'),
		    'section'		=> 'expert_hotel_booking_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_hotel_booking_404_Text',
    	array(
			'default' => 'Page Not Found',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'expert_hotel_booking_404_Text',
		array(
		    'label'   		=> __('404 Title','expert-hotel-booking'),
		    'section'		=> 'expert_hotel_booking_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_hotel_booking_404_content',
    	array(
			'default' => 'The page you were looking for could not be found.',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'expert_hotel_booking_404_content',
		array(
		    'label'   		=> __('404 Content','expert-hotel-booking'),
		    'section'		=> 'expert_hotel_booking_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);
}

add_action( 'customize_register', 'expert_hotel_booking_general_setting' );