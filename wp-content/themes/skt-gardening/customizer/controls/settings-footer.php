<?php


//============================FOOTER SECTION=================================

//Scroll To Top Button
$wp_customize->add_setting('complete[totop_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'totop_id', array(
				'label' => __('Scroll To Top Button','complete'),
				'description' => __( 'Turn On/Off The button that appears on bottom right when you scroll down to pages.', 'complete' ),
				'section' => 'footercolors_section',
				'settings' => 'complete[totop_id]',
			)) );


// Footer Background Color
$wp_customize->add_setting( 'complete[footer_color_id]', array(
	'type' => 'option',
	'default' => '#202020',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color_id', array(
				'label' => __('Footer Background Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_color_id]',
			) ) );

// Footer Background Image
	$wp_customize->add_setting( 'complete[footer_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_bg_image',array(
			'label'       => __( 'Footer Background Image', 'complete' ),
			'section'     => 'footercolors_section',
			'settings'    => 'complete[footer_bg_image]'
				)
			)
	);

//FOOTER Widget Text Color
$wp_customize->add_setting( 'complete[footwdgtxt_color_id]', array(
	'type' => 'option',
	'default' => '#cecece',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footwdgtxt_color_id', array(
				'label' => __('Footer Text Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footwdgtxt_color_id]',
			) ) );

//FOOTER Widget Title Color
$wp_customize->add_setting( 'complete[footer_title_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_title_color', array(
				'label' => __('Footer Title Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_title_color]',
			) ) );

//FOOTER Widget Title Border Color
$wp_customize->add_setting( 'complete[footer_title_border_color]', array(
	'type' => 'option',
	'default' => '#9cc026',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_title_border_color', array(
				'label' => __('Footer Title Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_title_border_color]',
			) ) );

$wp_customize->add_setting( 'complete[footer_menu_color]', array(
	'type' => 'option',
	'default' => '#a6a6a6',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_color', array(
				'label' => __('Footer Menu Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_menu_color]',
			) ) );
			
$wp_customize->add_setting( 'complete[footer_menu_hover_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_hover_color', array(
				'label' => __('Footer Menu Hover Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_menu_hover_color]',
			) ) );
			
//FOOTER LAYOUT SELECT
$wp_customize->add_setting('complete[foot_layout_id]', array(
		'type' => 'option',
        'default' => '4',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
 
			$wp_customize->add_control( new complete_Control_Radio_Image( $wp_customize, 'foot_layout_id', array(
					'type' => 'radio-image',
					'label' => __('Footer Layout','complete'),
					'section' => 'footercolors_section',
					'settings' => 'complete[foot_layout_id]',
					'choices' => array(
						'1' => array( 'url' => get_template_directory_uri().'/assets/images/foot-1-col.jpg', 'label' => 'Layout 1' ),
						'2' => array( 'url' => get_template_directory_uri().'/assets/images/foot-2-col.jpg', 'label' => 'Layout 2' ),
						'3' => array( 'url' => get_template_directory_uri().'/assets/images/foot-3-col.jpg', 'label' => 'Layout 3' ),
						'4' => array( 'url' => get_template_directory_uri().'/assets/images/foot-4-col.jpg', 'label' => 'Layout 4' ),
						'5' => array( 'url' => get_template_directory_uri().'/assets/images/foot-no-col.jpg', 'label' => 'No Columns' ),
					),
			) ));			
			
//----------------------Footer Columns 1----------------------------------
	$wp_customize->add_setting('complete[foot_cols1_title]', array(
		'type' => 'option',
		'default'	=> __('ABOUT US','skt-gardening'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols1_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 1 Title','skt-gardening'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols1_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols1_content]', array(
	'type' => 'option',
	'default' => '<p>Sed suscipit mauris nec mauris vulputate, a posuere libero congue. Nam laoreet elit eu erat pulvinar, et efficitur nibh euismod. Proin venenatis orci sit amet nisl finibus vehicula</p><p>Nam metus lorem, hendrerit quis ante eget, lobortis elementum neque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet. Cras in convallis ipsum. Phasellus tortor turpis.</p>',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols1_content', array( 
				'type' => 'editor',
				'label' => __('Columns 1 Content','skt-gardening'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols1_content]',
			)) );	
 	 
//----------------------Footer Columns 1----------------------------------		

//----------------------Footer Columns 2----------------------------------
	$wp_customize->add_setting('complete[foot_cols2_title]', array(
		'type' => 'option',
		'default'	=> __('OUR SERVCIES','skt-gardening'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols2_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 2 Title','skt-gardening'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols2_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols2_content]', array(
	'type' => 'option',
	'default' => '[footermenu menu="services"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols2_content', array( 
				'type' => 'editor',
				'label' => __('Columns 2 Content','skt-gardening'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols2_content]',
			)) );	
 	 
//----------------------Footer Columns 2----------------------------------	

//----------------------Footer Columns 3----------------------------------
	$wp_customize->add_setting('complete[foot_cols3_title]', array(
		'type' => 'option',
		'default'	=> __('CONTACT US','skt-gardening'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols3_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 3 Title','skt-gardening'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols3_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols3_content]', array(
	'type' => 'option',
	'default' => '<p><i class="fa fa-map-marker" aria-hidden="true"></i>
 Best Avenue 16-2, CA 23653, USA</p><p><i class="fa fa-phone" aria-hidden="true"></i>
 +1 998 71 150 30 20</p><p><i class="fa fa-fax" aria-hidden="true"></i>
 +1 998 71 150 30 20</p><p><i class="fa fa-envelope-o" aria-hidden="true"></i>
 <a href="mailto:info@sitename.com">info@sitename.com</a></p>',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols3_content', array( 
				'type' => 'editor',
				'label' => __('Columns 3 Content','skt-gardening'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols3_content]',
			)) );	
 	 
//----------------------Footer Columns 3----------------------------------	

//----------------------Footer Columns 4----------------------------------
	$wp_customize->add_setting('complete[foot_cols4_title]', array(
		'type' => 'option',
		'default'	=> __('WORKING HOURS','skt-gardening'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols4_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 4 Title','skt-gardening'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols4_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols4_content]', array(
	'type' => 'option',
	'default' => '[timing day="Monday" hours="10 AM to 7pm"][timing day="Tuesday" hours="10 AM to 7pm"][timing day="Wednesday" hours="10 AM to 7pm"][timing day="Thursday" hours="10 AM to 7pm"][timing day="Friday" hours="10 AM to 7pm"][timing day="Saturday" hours="Closed" highlight="yes"][timing day="Sunday" hours="Closed" highlight="yes"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols4_content', array( 
				'type' => 'editor',
				'label' => __('Columns 4 Content','skt-gardening'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols4_content]',
			)) );	
 	 
//----------------------Footer Columns 4----------------------------------	


//----------------------Footer Info Box ----------------------------------
	$wp_customize->add_setting( 'complete[footer_logo_id][url]',array( 
	'type' => 'option',
	'default' => ''.get_template_directory_uri().'/images/logo.png',
	'sanitize_callback' => 'esc_url_raw',
	) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_id',array(
				'label'       => __( 'Footer Logo Image', 'complete' ),
				'section'     => 'footer_infobox_section',
				'settings'    => 'complete[footer_logo_id][url]',
				//'description' => __('This image will replace the text logo.','complete'),
					)
				)
		);
	
//Footer Social Icon
$wp_customize->add_setting('complete[footer_social_icon]', array(
	'type' => 'option',
	'default' => __('[social_area][social icon="facebook" link="#"][social icon="twitter" link="#"][social icon="google-plus" link="#"][social icon="linkedin" link="#"][social icon="pinterest" link="#"][/social_area]','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Editor_Control( $wp_customize, 'footer_social_icon', array( 
				'type' => 'editor',
				'label' => __('Footer Social Icons','complete'),
				'section' => 'footer_infobox_section',
				'settings' => 'complete[footer_social_icon]',
			)) );
			

// Hide Section
	$wp_customize->add_setting('complete[hide_foot_infobox]',array(
			'type' => 'option',
			'default' => '1',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_foot_infobox', array(
		'label' => __('Hide This Section','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[hide_foot_infobox]',
	)) );	



//----------------------------COPYRIGHT SECTION------------------------------

//Footer Copyright Text
$wp_customize->add_setting('complete[footer_text_id]', array(
	'type' => 'option',
	'default' => __('Copyright 2019 SKT Themes | All Rights Reserved | Powered by <a href="#">SKT Themes</a>','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Editor_Control( $wp_customize, 'footer_text_id', array( 
				'type' => 'editor',
				'label' => __('Footer Copyright Text','complete'),
				'section' => 'copyright_section',
				'settings' => 'complete[footer_text_id]',
			)) );


//Copyright Area Background
$wp_customize->add_setting( 'complete[copyright_bg_color]', array(
	'type' => 'option',
	'default' => '#98bc24',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_bg_color', array(
				'label' => __('Copyright Area Background','complete'),
				'section' => 'copyright_section',
				'settings' => 'complete[copyright_bg_color]',
			) ) );

//Copyright Text Color
$wp_customize->add_setting( 'complete[copyright_txt_color]', array(
	'type' => 'option',
	'default' => '#fff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_txt_color', array(
				'label' => __('Copyright Text Color','complete'),
				'section' => 'copyright_section',
				'settings' => 'complete[copyright_txt_color]',
			) ) );