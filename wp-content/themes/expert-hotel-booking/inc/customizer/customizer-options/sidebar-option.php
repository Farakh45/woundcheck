<?php
function expert_hotel_booking_sidebar_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_hotel_booking_sidebar', array(
			'priority' => 31,
			'title' => esc_html__( 'Sidebar Option', 'expert-hotel-booking' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_hotel_booking_sidebar_settings', array(
			'title' => esc_html__( 'Sidebar Option', 'expert-hotel-booking' ),
			'priority' => 1,
			'panel' => 'expert_hotel_booking_sidebar',
		)
	);
	
	// Archive Post Settings 
	$wp_customize->add_setting(
		'archive_post_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'archive_post_settings',
		array(
			'type' => 'hidden',
			'label' => __('All Sidebar Setting','expert-hotel-booking'),
			'section' => 'expert_hotel_booking_sidebar_settings',
		)
	);
	

	// Archive Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_archive_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_archive_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Archive Sidebar', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_sidebar_settings',
			'settings'    => 'expert_hotel_booking_archive_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Index Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_index_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_index_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Index Sidebar', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_sidebar_settings',
			'settings'    => 'expert_hotel_booking_index_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Pages Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_paged_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_paged_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Pages Sidebar', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_sidebar_settings',
			'settings'    => 'expert_hotel_booking_paged_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Search Result Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_search_result_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_search_result_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Search Result Sidebar', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_sidebar_settings',
			'settings'    => 'expert_hotel_booking_search_result_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Single Post Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Single Post Sidebar', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_sidebar_settings',
			'settings'    => 'expert_hotel_booking_single_post_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Sidebar Page Sidebar Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_page_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_page_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Page Width Sidebar', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_sidebar_settings',
			'settings'    => 'expert_hotel_booking_single_page_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);
}

add_action( 'customize_register', 'expert_hotel_booking_sidebar_setting' );