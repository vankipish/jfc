<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_corporate_lite_first_color = get_theme_mod('vw_corporate_lite_first_color');

	$vw_corporate_lite_custom_css = '';

	if($vw_corporate_lite_first_color != false){
		$vw_corporate_lite_custom_css .='.header .header-top, .hvr-sweep-to-right:before, .footersec, .copyright-wrapper, .scrollup i, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .sidebar input[type="submit"], .sidebar h3, .woocommerce span.onsale, .pagination span, .pagination a, .sidebar .tagcloud a:hover, .main-navigation a:hover, .widget .woocommerce-product-search button[type="submit"], .sidebar a.custom_read_more, .footersec input[type="submit"], .footersec a.custom_read_more, .footersec .custom-social-icons i, .sidebar .custom-social-icons i:hover, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a{';
			$vw_corporate_lite_custom_css .='background-color: '.esc_attr($vw_corporate_lite_first_color).';';
		$vw_corporate_lite_custom_css .='}';
	}
	if($vw_corporate_lite_first_color != false){
		$vw_corporate_lite_custom_css .='#comments input[type="submit"].submit{';
			$vw_corporate_lite_custom_css .='background-color: '.esc_attr($vw_corporate_lite_first_color).'!important;';
		$vw_corporate_lite_custom_css .='}';
	}
	if($vw_corporate_lite_first_color != false){
		$vw_corporate_lite_custom_css .='a:hover, .custom-social-icons i:hover, .slider .more-btn a:hover, section h3, #our-services .subtitle, #our-services .box-content p, a.r_button, p, .sidebar .custom-social-icons a, h3.section-title a, .metabox, .date-box, .cat-box, .cat-box i, .metabox a, .single-post h1, .header .logo a, .header .logo p, .main-navigation ul.sub-menu a:hover, .main-navigation a, h2.section-title a, #our-services .innerlightbox h2, .logo h1 a, .logo p.site-title a, .footersec .custom-social-icons i:hover{';
			$vw_corporate_lite_custom_css .='color: '.esc_attr($vw_corporate_lite_first_color).';';
		$vw_corporate_lite_custom_css .='}';
	}
	if($vw_corporate_lite_first_color != false){
		$vw_corporate_lite_custom_css .='a.r_button{';
			$vw_corporate_lite_custom_css .='border-color: '.esc_attr($vw_corporate_lite_first_color).'!important;';
		$vw_corporate_lite_custom_css .='}';
	}
	if($vw_corporate_lite_first_color != false){
		$vw_corporate_lite_custom_css .='.main-navigation ul ul{';
			$vw_corporate_lite_custom_css .='border-top-color: '.esc_attr($vw_corporate_lite_first_color).';';
		$vw_corporate_lite_custom_css .='}';
	}
	if($vw_corporate_lite_first_color != false){
		$vw_corporate_lite_custom_css .='.menu-sec, .main-navigation ul ul{';
			$vw_corporate_lite_custom_css .='border-bottom-color: '.esc_attr($vw_corporate_lite_first_color).';';
		$vw_corporate_lite_custom_css .='}';
	}
	if($vw_corporate_lite_first_color != false){
		$vw_corporate_lite_custom_css .='h3.section-title a{';
			$vw_corporate_lite_custom_css .='border-left-color: '.esc_attr($vw_corporate_lite_first_color).';';
		$vw_corporate_lite_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_corporate_lite_theme_lay = get_theme_mod( 'vw_corporate_lite_width_option','Full Width');
    if($vw_corporate_lite_theme_lay == 'Boxed'){
		$vw_corporate_lite_custom_css .='body{';
			$vw_corporate_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$vw_corporate_lite_custom_css .='}';
	}else if($vw_corporate_lite_theme_lay == 'Wide Width'){
		$vw_corporate_lite_custom_css .='body{';
			$vw_corporate_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_corporate_lite_custom_css .='}';
	}else if($vw_corporate_lite_theme_lay == 'Full Width'){
		$vw_corporate_lite_custom_css .='body{';
			$vw_corporate_lite_custom_css .='max-width: 100%;';
		$vw_corporate_lite_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_corporate_lite_theme_lay = get_theme_mod( 'vw_corporate_lite_slider_opacity_color','0.5');
	if($vw_corporate_lite_theme_lay == '0'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.1'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.1';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.2'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.2';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.3'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.3';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.4'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.4';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.5'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.5';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.6'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.6';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.7'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.7';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.8'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.8';
		$vw_corporate_lite_custom_css .='}';
		}else if($vw_corporate_lite_theme_lay == '0.9'){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='opacity:0.9';
		$vw_corporate_lite_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_corporate_lite_theme_lay = get_theme_mod( 'vw_corporate_lite_slider_content_option','Left');
    if($vw_corporate_lite_theme_lay == 'Left'){
		$vw_corporate_lite_custom_css .='.slider .carousel-caption, .slider .inner_carousel{';
			$vw_corporate_lite_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_corporate_lite_custom_css .='}';
	}else if($vw_corporate_lite_theme_lay == 'Center'){
		$vw_corporate_lite_custom_css .='.slider .carousel-caption, .slider .inner_carousel{';
			$vw_corporate_lite_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_corporate_lite_custom_css .='}';
	}else if($vw_corporate_lite_theme_lay == 'Right'){
		$vw_corporate_lite_custom_css .='.slider .carousel-caption, .slider .inner_carousel{';
			$vw_corporate_lite_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_corporate_lite_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_corporate_lite_slider_height = get_theme_mod('vw_corporate_lite_slider_height');
	if($vw_corporate_lite_slider_height != false){
		$vw_corporate_lite_custom_css .='.slider img{';
			$vw_corporate_lite_custom_css .='height: '.esc_attr($vw_corporate_lite_slider_height).';';
		$vw_corporate_lite_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_corporate_lite_theme_lay = get_theme_mod( 'vw_corporate_lite_blog_layout_option','Default');
    if($vw_corporate_lite_theme_lay == 'Default'){
		$vw_corporate_lite_custom_css .='.services-box{';
			$vw_corporate_lite_custom_css .='';
		$vw_corporate_lite_custom_css .='}';
	}else if($vw_corporate_lite_theme_lay == 'Center'){
		$vw_corporate_lite_custom_css .='.services-box, .services-box h2, .services-box .metabox, .page-box p{';
			$vw_corporate_lite_custom_css .='text-align:center;';
		$vw_corporate_lite_custom_css .='}';
		$vw_corporate_lite_custom_css .='h2.section-title{';
			$vw_corporate_lite_custom_css .='display: block;';
		$vw_corporate_lite_custom_css .='}';
	}else if($vw_corporate_lite_theme_lay == 'Left'){
		$vw_corporate_lite_custom_css .='.services-box, .services-box h2, .services-box .metabox, .page-box p{';
			$vw_corporate_lite_custom_css .='text-align:Left;';
		$vw_corporate_lite_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_corporate_lite_resp_topbar = get_theme_mod( 'vw_corporate_lite_resp_topbar_hide_show',false);
    if($vw_corporate_lite_resp_topbar == true){
    	$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.header .header-top{';
			$vw_corporate_lite_custom_css .='display:block;';
		$vw_corporate_lite_custom_css .='} }';
	}else if($vw_corporate_lite_resp_topbar == false){
		$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.header .header-top{';
			$vw_corporate_lite_custom_css .='display:none;';
		$vw_corporate_lite_custom_css .='} }';
	}

	$vw_corporate_lite_resp_stickyheader = get_theme_mod( 'vw_corporate_lite_stickyheader_hide_show',false);
    if($vw_corporate_lite_resp_stickyheader == true){
    	$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.header-fixed{';
			$vw_corporate_lite_custom_css .='display:block;';
		$vw_corporate_lite_custom_css .='} }';
	}else if($vw_corporate_lite_resp_stickyheader == false){
		$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.header-fixed{';
			$vw_corporate_lite_custom_css .='display:none;';
		$vw_corporate_lite_custom_css .='} }';
	}

	$vw_corporate_lite_resp_slider = get_theme_mod( 'vw_corporate_lite_resp_slider_hide_show',false);
    if($vw_corporate_lite_resp_slider == true){
    	$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.slider{';
			$vw_corporate_lite_custom_css .='display:block;';
		$vw_corporate_lite_custom_css .='} }';
	}else if($vw_corporate_lite_resp_slider == false){
		$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.slider{';
			$vw_corporate_lite_custom_css .='display:none;';
		$vw_corporate_lite_custom_css .='} }';
	}

	$vw_corporate_lite_resp_metabox = get_theme_mod( 'vw_corporate_lite_metabox_hide_show',true);
    if($vw_corporate_lite_resp_metabox == true){
    	$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.metabox{';
			$vw_corporate_lite_custom_css .='display:block;';
		$vw_corporate_lite_custom_css .='} }';
	}else if($vw_corporate_lite_resp_metabox == false){
		$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.metabox{';
			$vw_corporate_lite_custom_css .='display:none;';
		$vw_corporate_lite_custom_css .='} }';
	}

	$vw_corporate_lite_resp_sidebar = get_theme_mod( 'vw_corporate_lite_sidebar_hide_show',true);
    if($vw_corporate_lite_resp_sidebar == true){
    	$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.sidebar{';
			$vw_corporate_lite_custom_css .='display:block;';
		$vw_corporate_lite_custom_css .='} }';
	}else if($vw_corporate_lite_resp_sidebar == false){
		$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.sidebar{';
			$vw_corporate_lite_custom_css .='display:none;';
		$vw_corporate_lite_custom_css .='} }';
	}

	$vw_corporate_lite_resp_scroll_top = get_theme_mod( 'vw_corporate_lite_resp_scroll_top_hide_show',true);
    if($vw_corporate_lite_resp_scroll_top == true){
    	$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.scrollup i{';
			$vw_corporate_lite_custom_css .='display:block;';
		$vw_corporate_lite_custom_css .='} }';
	}else if($vw_corporate_lite_resp_scroll_top == false){
		$vw_corporate_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_lite_custom_css .='.scrollup i{';
			$vw_corporate_lite_custom_css .='display:none !important;';
		$vw_corporate_lite_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_corporate_lite_topbar_padding_top_bottom = get_theme_mod('vw_corporate_lite_topbar_padding_top_bottom');
	if($vw_corporate_lite_topbar_padding_top_bottom != false){
		$vw_corporate_lite_custom_css .='.header .header-top{';
			$vw_corporate_lite_custom_css .='padding-top: '.esc_attr($vw_corporate_lite_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_corporate_lite_topbar_padding_top_bottom).';';
		$vw_corporate_lite_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_corporate_lite_sticky_header_padding = get_theme_mod('vw_corporate_lite_sticky_header_padding');
	if($vw_corporate_lite_sticky_header_padding != false){
		$vw_corporate_lite_custom_css .='.header-fixed{';
			$vw_corporate_lite_custom_css .='padding: '.esc_attr($vw_corporate_lite_sticky_header_padding).';';
		$vw_corporate_lite_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_corporate_lite_single_blog_post_navigation_show_hide = get_theme_mod('vw_corporate_lite_single_blog_post_navigation_show_hide',true);
	if($vw_corporate_lite_single_blog_post_navigation_show_hide != true){
		$vw_corporate_lite_custom_css .='.post-navigation{';
			$vw_corporate_lite_custom_css .='display: none;';
		$vw_corporate_lite_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_corporate_lite_copyright_alingment = get_theme_mod('vw_corporate_lite_copyright_alingment');
	if($vw_corporate_lite_copyright_alingment != false){
		$vw_corporate_lite_custom_css .='.copyright p{';
			$vw_corporate_lite_custom_css .='text-align: '.esc_attr($vw_corporate_lite_copyright_alingment).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_copyright_padding_top_bottom = get_theme_mod('vw_corporate_lite_copyright_padding_top_bottom');
	if($vw_corporate_lite_copyright_padding_top_bottom != false){
		$vw_corporate_lite_custom_css .='.copyright-wrapper{';
			$vw_corporate_lite_custom_css .='padding-top: '.esc_attr($vw_corporate_lite_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_corporate_lite_copyright_padding_top_bottom).';';
		$vw_corporate_lite_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_corporate_lite_scroll_to_top_font_size = get_theme_mod('vw_corporate_lite_scroll_to_top_font_size');
	if($vw_corporate_lite_scroll_to_top_font_size != false){
		$vw_corporate_lite_custom_css .='.scrollup i{';
			$vw_corporate_lite_custom_css .='font-size: '.esc_attr($vw_corporate_lite_scroll_to_top_font_size).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_scroll_to_top_padding = get_theme_mod('vw_corporate_lite_scroll_to_top_padding');
	$vw_corporate_lite_scroll_to_top_padding = get_theme_mod('vw_corporate_lite_scroll_to_top_padding');
	if($vw_corporate_lite_scroll_to_top_padding != false){
		$vw_corporate_lite_custom_css .='.scrollup i{';
			$vw_corporate_lite_custom_css .='padding-top: '.esc_attr($vw_corporate_lite_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_corporate_lite_scroll_to_top_padding).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_scroll_to_top_width = get_theme_mod('vw_corporate_lite_scroll_to_top_width');
	if($vw_corporate_lite_scroll_to_top_width != false){
		$vw_corporate_lite_custom_css .='.scrollup i{';
			$vw_corporate_lite_custom_css .='width: '.esc_attr($vw_corporate_lite_scroll_to_top_width).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_scroll_to_top_height = get_theme_mod('vw_corporate_lite_scroll_to_top_height');
	if($vw_corporate_lite_scroll_to_top_height != false){
		$vw_corporate_lite_custom_css .='.scrollup i{';
			$vw_corporate_lite_custom_css .='height: '.esc_attr($vw_corporate_lite_scroll_to_top_height).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_scroll_to_top_border_radius = get_theme_mod('vw_corporate_lite_scroll_to_top_border_radius');
	if($vw_corporate_lite_scroll_to_top_border_radius != false){
		$vw_corporate_lite_custom_css .='.scrollup i{';
			$vw_corporate_lite_custom_css .='border-radius: '.esc_attr($vw_corporate_lite_scroll_to_top_border_radius).'px;';
		$vw_corporate_lite_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_corporate_lite_social_icon_font_size = get_theme_mod('vw_corporate_lite_social_icon_font_size');
	if($vw_corporate_lite_social_icon_font_size != false){
		$vw_corporate_lite_custom_css .='.sidebar .custom-social-icons i, .footersec .custom-social-icons i, .custom-social-icons i{';
			$vw_corporate_lite_custom_css .='font-size: '.esc_attr($vw_corporate_lite_social_icon_font_size).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_social_icon_padding = get_theme_mod('vw_corporate_lite_social_icon_padding');
	if($vw_corporate_lite_social_icon_padding != false){
		$vw_corporate_lite_custom_css .='.sidebar .custom-social-icons i, .footersec .custom-social-icons i{';
			$vw_corporate_lite_custom_css .='padding: '.esc_attr($vw_corporate_lite_social_icon_padding).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_social_icon_width = get_theme_mod('vw_corporate_lite_social_icon_width');
	if($vw_corporate_lite_social_icon_width != false){
		$vw_corporate_lite_custom_css .='.sidebar .custom-social-icons i, .footersec .custom-social-icons i{';
			$vw_corporate_lite_custom_css .='width: '.esc_attr($vw_corporate_lite_social_icon_width).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_social_icon_height = get_theme_mod('vw_corporate_lite_social_icon_height');
	if($vw_corporate_lite_social_icon_height != false){
		$vw_corporate_lite_custom_css .='.sidebar .custom-social-icons i, .footersec .custom-social-icons i{';
			$vw_corporate_lite_custom_css .='height: '.esc_attr($vw_corporate_lite_social_icon_height).';';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_social_icon_border_radius = get_theme_mod('vw_corporate_lite_social_icon_border_radius');
	if($vw_corporate_lite_social_icon_border_radius != false){
		$vw_corporate_lite_custom_css .='.sidebar .custom-social-icons i, .footersec .custom-social-icons i{';
			$vw_corporate_lite_custom_css .='border-radius: '.esc_attr($vw_corporate_lite_social_icon_border_radius).'px;';
		$vw_corporate_lite_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_corporate_lite_products_padding_top_bottom = get_theme_mod('vw_corporate_lite_products_padding_top_bottom');
	if($vw_corporate_lite_products_padding_top_bottom != false){
		$vw_corporate_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_corporate_lite_custom_css .='padding-top: '.esc_attr($vw_corporate_lite_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_corporate_lite_products_padding_top_bottom).'!important;';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_products_padding_left_right = get_theme_mod('vw_corporate_lite_products_padding_left_right');
	if($vw_corporate_lite_products_padding_left_right != false){
		$vw_corporate_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_corporate_lite_custom_css .='padding-left: '.esc_attr($vw_corporate_lite_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_corporate_lite_products_padding_left_right).'!important;';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_products_box_shadow = get_theme_mod('vw_corporate_lite_products_box_shadow');
	if($vw_corporate_lite_products_box_shadow != false){
		$vw_corporate_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_corporate_lite_custom_css .='box-shadow: '.esc_attr($vw_corporate_lite_products_box_shadow).'px '.esc_attr($vw_corporate_lite_products_box_shadow).'px '.esc_attr($vw_corporate_lite_products_box_shadow).'px #ddd;';
		$vw_corporate_lite_custom_css .='}';
	}

	$vw_corporate_lite_products_border_radius = get_theme_mod('vw_corporate_lite_products_border_radius');
	if($vw_corporate_lite_products_border_radius != false){
		$vw_corporate_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_corporate_lite_custom_css .='border-radius: '.esc_attr($vw_corporate_lite_products_border_radius).'px;';
		$vw_corporate_lite_custom_css .='}';
	}