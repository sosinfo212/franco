<?php
//----------------------Featured Block Button----------------------------------

/*	$wp_customize->add_setting('complete[featured_block_button]', array(
		'type' => 'option',
		'default'	=> __('Read More','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'featured_block_button', array( 
		'type' => 'text',
		'label'	=> __('Featured Block Button Text','complete'),
		'section' => 'buttons_section',
		'settings' => 'complete[featured_block_button]',
	)) );	*/
	
//----------------------Recent Posts Block Button Text----------------------------

	$wp_customize->add_setting('complete[recentpost_block_button]', array(
		'type' => 'option',
		'default'	=> __('Read More','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'recentpost_block_button', array( 
		'type' => 'text',
		'label'	=> __('Recent Post Block Button Text','complete'),
		'section' => 'buttons_section',
		'settings' => 'complete[recentpost_block_button]',
	)) );	
 
// All Buttons Background Color
$wp_customize->add_setting( 'complete[featured_block_button_bg]', array(
	'type' => 'option',
	'default' => '#9cc026',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_block_button_bg', array(
	'label' => __('Button Background Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[featured_block_button_bg]',
) ) );
 
// All Buttons Hover Background Color
$wp_customize->add_setting( 'complete[featured_block_hover_button_bg]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_block_hover_button_bg', array(
	'label' => __('Button Hover Background Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[featured_block_hover_button_bg]',
) ) );


// All Buttons Color
$wp_customize->add_setting( 'complete[all_buttons_color]', array(
	'type' => 'option',
	'default' => '#fff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_buttons_color', array(
	'label' => __('All Buttons Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[all_buttons_color]',
) ) );

// All Buttons Background Color
$wp_customize->add_setting( 'complete[all_buttons_background_color]', array(
	'type' => 'option',
	'default' => '#9cc026',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_buttons_background_color', array(
	'label' => __('All Buttons Background Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[all_buttons_background_color]',
) ) );

// All Buttons Hover Color
$wp_customize->add_setting( 'complete[all_buttons_hover_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_buttons_hover_color', array(
	'label' => __('All Buttons Hover Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[all_buttons_hover_color]',
) ) );

// All Buttons Hover Background Color
$wp_customize->add_setting( 'complete[all_buttons_hover_background_color]', array(
	'type' => 'option',
	'default' => '#222',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_buttons_hover_background_color', array(
	'label' => __('All Buttons Hover Background Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[all_buttons_hover_background_color]',
) ) );