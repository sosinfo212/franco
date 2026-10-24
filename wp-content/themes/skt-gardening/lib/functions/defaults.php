<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'woo_shop_page_layout_id' => 'wooshop_layout3',
		'woo_single_product_layout_id' => 'woosingle_layout3',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout1',
		'center_width' => 83.50,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '0',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('Copyright 2019 SKT Themes | All Rights Reserved | Powered by <a href="#">SKT Themes</a>', 'complete'),
		'phntp_text_id' => __('<i class="fa fa-phone" aria-hidden="true"></i> 12 8888 6666', 'complete'),
		'emltp_text' => __('<i class="fa fa-envelope" aria-hidden="true"></i> info@sitename.com', 'complete'),
		'sintp_text' => __('', 'complete'),
		'suptp_text' => __('[social_area]
			[social icon="facebook" link="#"]
			[social icon="twitter" link="#"]
			[social icon="google-plus" link="#"]
			[social icon="linkedin" link="#"]
			[social icon="pinterest" link="#"]
		[/social_area][searchform]', 'complete'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'custom_slider' => '',
		
		'slider_type_id' => 'static',
		
		'slideefect' => 'fade',
		'slideanim' => '700',
		'slidepause' => '4000',
		'slidenav' => 'false',
		'slidepage' => 'true',
		
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',
		
		'slide_image1' => ''.get_template_directory_uri().'/images/slides/slider1.jpg',
        'slide_title1' => 'LAWN RENOVATION <br><span style="color:#303224;">FLOWER SCAPING OF YOUR GARDEN</span>',
        'slide_desc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu est vitae diam aliquam consectetur. In egestas odio et pellentesque ultricies. Etiam vitae sem scelerisque, volutpat arcu ac, iaculis erat. Integer auctor ipsum sed dictum rutrum. Nunc at ligula ultrices, aliquet velit eget, sodales tellus',
        'slide_link1' => '#',
        'slide_btn1' => 'Read More',
        
        'slide_image2' => ''.get_template_directory_uri().'/images/slides/slider2.jpg',
        'slide_title2' => 'LAWN RENOVATION <br><span style="color:#303224;">FLOWER SCAPING OF YOUR GARDEN</span>',
        'slide_desc2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu est vitae diam aliquam consectetur. In egestas odio et pellentesque ultricies. Etiam vitae sem scelerisque, volutpat arcu ac, iaculis erat. Integer auctor ipsum sed dictum rutrum. Nunc at ligula ultrices, aliquet velit eget, sodales tellus',
        'slide_link2' => '#',
        'slide_btn2' => 'Read More',
        
        'slide_image3' => ''.get_template_directory_uri().'/images/slides/slider3.jpg',
        'slide_title3' => 'LAWN RENOVATION <br><span style="color:#303224;">FLOWER SCAPING OF YOUR GARDEN</span>',
        'slide_desc3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu est vitae diam aliquam consectetur. In egestas odio et pellentesque ultricies. Etiam vitae sem scelerisque, volutpat arcu ac, iaculis erat. Integer auctor ipsum sed dictum rutrum. Nunc at ligula ultrices, aliquet velit eget, sodales tellus',
        'slide_link3' => '#',
        'slide_btn3' => 'Read More',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#98bc24',
		'pageheader_bg_image' => '',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#98bc24',
		'postheader_bg_image' => '',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#9cc026',
		'submnu_textcolor_id' => '#282828',
		'submnbg_color_id' => '#ffffff',
		'mnshvr_color_id' => '#282828',
		'mobbg_color_id' => '#282828',
		'mobbgtop_color_id' => '#9cc026',
		'mobmenutxt_color_id' => '#ffffff',
		'mobmenutxt_active_color_id' => '#9cc026',
		
		'mobtoggle_color_id' => '#9cc026',
		'mobtoggleinner_color_id' => '#ffffff',
		
		'sectxt_color_id' => '#ffffff',
		'content_font_id' =>  array('font-family' => 'Assistant', 'font-size' => '16px'),
		'primtxt_color_id' => '#2b2b2b',
		'logo_image_id' => array('url'=>''.get_template_directory_uri().'/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Assistant', 'font-size' => '40px'),
		'logo_color_id' => '#7f865c',
		
		'logo_image_height' => '28px;',
		'logo_image_width' => '207px;',
		'logo_margin_top' => '35px;',
		
		'tpbt_font_id' => array('font-family' => 'Assistant', 'font-size' => '16px'),
		'tpbt_color_id' => '#ffffff',
		'tpbt_hvcolor_id' => '#edecec',	
		
		'sldtitle_font_id' => array('font-family' => 'Montserrat', 'font-size' => '30px'),
		'slddesc_font_id' => array('font-family' => 'Roboto', 'font-size' => '14px'),
		'sldbtn_font_id' => array('font-family' => 'Montserrat', 'font-size' => '13px'),
		
		'slidetitle_color_id' => '#ffffff',	
		'slidetitle_bgcolor_id' => '#98bc24',
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#fff',
		'sldbtn_color_id' => '#fff',
		'sldbtn_hvtextcolor_id' => '#ffffff',
		'sldbtn_hvcolor_id' => '#98bc24',
		
		'slide_pager_color_id' => '#ffffff',	
		'slide_active_pager_color_id' => '#98bc24',
		'slider_wave_color' => '#ffffff',
			
		'global_link_color_id' => '#9cc026',
		'global_link_hvcolor_id' => '#685031',		
		
		'global_h1_color_id' => '#282828',
		'global_h1_hvcolor_id' => '#9cc026',	
		'global_h2_color_id' => '#282828',
		'global_h2_hvcolor_id' => '#9cc026',
		'global_h3_color_id' => '#282828',
		'global_h3_hvcolor_id' => '#9cc026',
		'global_h4_color_id' => '#282828',
		'global_h4_hvcolor_id' => '#9cc026',
		'global_h5_color_id' => '#282828',
		'global_h5_hvcolor_id' => '#9cc026',
		'global_h6_color_id' => '#282828',
		'global_h6_hvcolor_id' => '#9cc026',	
		
		'post_meta_color_id' => '#282828',
		'team_box_color_id' => '#f7f7f7',
		
		'product_title_color' => '#98bc24',		
		'product_title_hover_color' => '#98bc24',		
		'product_price_color' => '#98bc24',
		'product_img_hover_color' => '#98bc24',
		'product_button_color' => '#131e25',
		'product_button_background_color' => '#fff',
		'product_button_hover_color' => '#ffffff',
		'product_button_hover_background_color' => '#98bc24',
		
		'all_buttons_color' => '#fff',
		'all_buttons_background_color' => '#9cc026',
		'all_buttons_hover_color' => '#ffffff',
		'all_buttons_hover_background_color' => '#222',

		'social_text_color_id' => '#fff',
		'social_icon_color_id' => '#303224',
		'social_hover_icon_color_id' => '#9cc026',
		'testimonialbox_color_id' => '',		
		'testimonialbox_txt_color' => '#fff',
		'testimonial_pager_color_id' => '#fff',
		'testimonialbox_border_color' => '#e8e7e7',
		'testimonial_activepager_color_id' => '#222',
		'gallery_filtertxt_color_id' => '#909090',
		'gallery_activefiltertxt_color_id' => '#f1b500',
		'gallery_title_color_id' => '#fff',
		'gallery_title_bg_color_id' => '#98bc24',
		'skillsbar_bgcolor_id' => '#f8f8f8',
		'skillsbar_text_color_id' => '#ffffff',								
		'global_h1_font_id' => array('font-family' => 'Assistant', 'font-size' => '32px'),
		'global_h2_font_id' => array('font-family' => 'Playfair Display', 'font-size' => '28px'),
		'global_h3_font_id' => array('font-family' => 'Montserrat', 'font-size' => '20px'),
		'global_h4_font_id' => array('font-family' => 'Montserrat', 'font-size' => '13px'),
		'global_h5_font_id' => array('font-family' => 'Montserrat', 'font-size' => '11px'),
		'global_h6_font_id' => array('font-family' => 'Montserrat', 'font-size' => '9px'),
		
		'contact_title' => 'Contact Info',
		'contact_address' => 'Donec ultricies mattis nulla Australia',
		'contact_phone' => '0789 256 321',
		'contact_email' => 'info@companyname.com',
		'contact_company_url' => 'http://demo.com',
		'contact_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336003.6066860609!2d2.349634820486094!3d48.8576730786213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x040b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1433482358672',
		
		'head_bg_trans' => '0',
		'head_color_id' => '#303224',
		'head_info_color_id' => '#303224',
		'head_info_bg_trans' => '1',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#a5ac81',
		'menutxt_color_hover' => '#98bc24',
		'menutxt_color_active' => '#98bc24',
		'menu_size_id' => '15px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebarborder_color_id' => '#eeeff5',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'sidebarlink_color_id' => '#9cc026',
		'sidebarlink_hover_color_id' => '#999999',
		'flipbg_front_color_id' => '#ffffff',
		'flipbg_back_color_id' => '#f7f7f7',
		'flipborder_front_color_id' => '#e0e0e0',
		'flipborder_back_color_id' => '#000000',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '16px',
		'timebox_color_id' => '#ffffff',
		'timeboxborder_color_id' => '#dedede',
		'gridbox_color_id' => '#ffffff',
		'gridboxborder_color_id' => '#cccccc',
		
		'service_box_bg' => '#9cc026',
		'service_box_bg_hover' => '#685031',
		'box_color_text' => '#ffffff',
		'go_bg_color' => '#ffffff',
		'box_right_border' => '#30a0fd',
		
		'expand_bg_color' => '#9cc026',
		'expand_text_color' => '#000000',
		
		'h_seprator_color' => '#9cc026',
		'h_seprator_text_color' => '#000000',
		
		'square_bg_color' => '#ffffff',
		'square_bg_hover_color' => '#79ab9f',
		'square_title_color' => '#000000',
		
		'style3_bg_color' => '#ffffff',
		'style3_hover_bg_color' => '#9f9f9f',
		'style3_border_color' => '#eaeaea',
		
		'perfect_bg_color' => '#ffffff',
		'perfect_border_color' => '#eaeaea',
		'perfect_hover_border_color' => '#9cc026',
 
		'foot_layout_id' => '4',
		'footer_color_id' => '#202020',
		'footer_bg_image' => '',
		'footwdgtxt_color_id' => '#cecece',
		'footer_title_color' => '#ffffff',
		'footer_title_border_color' => '#9cc026',
		'ptitle_font_id' =>  array('font-family' => 'Montserrat', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Montserrat', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '',
		'mnutxt_upcase_id' => '0',
		'copyright_bg_color' => '#98bc24',
		'copyright_txt_color' => '#fff',
		
		//Footer Info Box
		'footer_infobox_border_color' => '#435f8e',
		
		'footer_menu_color' => '#a6a6a6',
		'footer_menu_hover_color' => '#ffffff',
		
		//Featured Box
		'featured_section_title' => __('Featured Boxes', 'complete'),
		'homeblock_bg_setting' => '',
		'ftd_bg_video' => '',
		'homeblock_title_color' => '#000000',
		'homeblock_color_id' => '#f2f2f2',
		'featured_image_height' => '70px;',
		'featured_image_width' => '70px;',
		'featured_excerpt' => '35',
		'featured_block_bg' => '#ffffff',
		'featured_block_button' => __('Read More', 'complete'),
		'recentpost_block_button' => __('Read More', 'complete'),
		
		'featured_block_button_bg' => '#9cc026',
		'featured_block_hover_button_bg' => '#393939',
		
		//Footer Column 1
		'foot_cols1_title' => __('ABOUT US', 'skt-gardening'),
		'foot_cols1_content' => '<p>Sed suscipit mauris nec mauris vulputate, a posuere libero congue. Nam laoreet elit eu erat pulvinar, et efficitur nibh euismod. Proin venenatis orci sit amet nisl finibus vehicula</p><p>Nam metus lorem, hendrerit quis ante eget, lobortis elementum neque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet. Cras in convallis ipsum. Phasellus tortor turpis.</p>',
		//Footer Column 1	
		
		//Footer Column 2
		'foot_cols2_title' => __('OUR SERVICES', 'skt-gardening'),
		'foot_cols2_content' => '[footermenu menu="services"]',
		//Footer Column 2	
		
		//Footer Column 3
		'foot_cols3_title' => __('CONTACT US', 'skt-gardening'),
		'foot_cols3_content' => '<p><i class="fa fa-map-marker" aria-hidden="true"></i>
 Best Avenue 16-2, CA 23653, USA</p><p><i class="fa fa-phone" aria-hidden="true"></i>
 +1 998 71 150 30 20</p><p><i class="fa fa-fax" aria-hidden="true"></i>
 +1 998 71 150 30 20</p><p><i class="fa fa-envelope-o" aria-hidden="true"></i>
 <a href="mailto:info@sitename.com">info@sitename.com</a></p>',
		//Footer Column 3
		
		//Footer Column 4
		'foot_cols4_title' => __('WORKING HOURS', 'skt-gardening'),
		'foot_cols4_content' => '[timing day="Monday" hours="10 AM to 7pm"][timing day="Tuesday" hours="10 AM to 7pm"][timing day="Wednesday" hours="10 AM to 7pm"][timing day="Thursday" hours="10 AM to 7pm"][timing day="Friday" hours="10 AM to 7pm"][timing day="Saturday" hours="Closed" highlight="yes"][timing day="Sunday" hours="Closed" highlight="yes"]',
		//Footer Column 4																
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',

		
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'footer_logo_id' =>array( 'url'=> ''.get_template_directory_uri().'/images/logo.png' ),
		'footer_social_icon' => __('[social_area][social icon="facebook" link="#"][social icon="twitter" link="#"][social icon="google-plus" link="#"][social icon="linkedin" link="#"][social icon="pinterest" link="#"][/social_area]','complete'),
		
		'hide_foot_infobox' => '1',

		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => '',
		
		'perfect_border_color' => '#ffffff',
		'features_text_hover_color' => '#d4d4d4',
		'features_ordernumber_color' => '#000000',
		'features_bottom_border_color' => '#30a0fd',
		'slideshadow_color_id' => '#ffffff',
		'features_text_color' => '#ffffff',

		
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>