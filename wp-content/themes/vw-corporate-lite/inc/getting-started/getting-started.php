<?php
//about theme info
add_action( 'admin_menu', 'vw_corporate_lite_gettingstarted' );
function vw_corporate_lite_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Corporate Theme', 'vw-corporate-lite'), esc_html__('About VW Corporate Theme', 'vw-corporate-lite'), 'edit_theme_options', 'vw_corporate_lite_guide', 'vw_corporate_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_corporate_lite_admin_theme_style() {
   wp_enqueue_style('vw-corporate-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
   wp_enqueue_script('vw-corporate-lite-tabs', esc_url(get_template_directory_uri()) . '/inc/getting-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_corporate_lite_admin_theme_style');

//guidline for about theme
function vw_corporate_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-corporate-lite' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Corporate Theme', 'vw-corporate-lite' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-corporate-lite'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Corporate at 20% Discount','vw-corporate-lite'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-corporate-lite'); ?> ( <span><?php esc_html_e('vwpro20','vw-corporate-lite'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url( VW_CORPORATE_LITE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-corporate-lite' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
		  <button class="tablinks" onclick="vw_corporate_lite_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-corporate-lite' ); ?></button>	
		  <button class="tablinks" onclick="vw_corporate_lite_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-corporate-lite' ); ?></button>
		  <button class="tablinks" onclick="vw_corporate_lite_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-corporate-lite' ); ?></button>		  
		  <button class="tablinks" onclick="vw_corporate_lite_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'vw-corporate-lite' ); ?></button>
		  <button class="tablinks" onclick="vw_corporate_lite_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-corporate-lite' ); ?></button>
		</div>

		<!-- Tab content -->
		<?php
			$vw_corporate_lite_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_corporate_lite_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Corporate_Lite_Plugin_Activation_Settings::get_instance();
				$vw_corporate_lite_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-corporate-lite-recommended-plugins">
				    <div class="vw-corporate-lite-action-list">
				    	<div class="vw-corporate-lite-activation-note">
							<?php esc_html_e('Your filesystem not have write permission, please give writable access to your filesystem','vw-corporate-lite'); ?>
						</div>
				        <?php if ($vw_corporate_lite_actions): foreach ($vw_corporate_lite_actions as $key => $vw_corporate_lite_actionValue): ?>
				                <div class="vw-corporate-lite-action" id="<?php echo esc_attr($vw_corporate_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_corporate_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_corporate_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_corporate_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-corporate-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_corporate_lite_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-corporate-lite' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Corporate Lite is a unique and optimized multipurpose corporate WordPress theme with simple and a beautiful, professional design and well-structured information. It is an amazingly conceptualized corporate theme. It is a Free Corporate WordPress theme, with an uncomplicated yet beautiful professional design. Anybody can use this theme to build powerful websites for startups and medium sized companies, marketing, promoting your business online, corporate business, business websites, business agencies, creative agencies, digital agencies, corporate houses and other creative websites such as construction, travel, restaurant, hotel, digital agency, real estate, photography, spa, gym, architecture, magazine, art, design, health, portfolio, product showcase, organizations, e-commerce and other types of websites. Also, it can be used by individuals such as shop owners, business owners, bloggers, travelers, etc. to make event, gallery, lifestyle, listing, yoga, wedding, school, university, sports, and other websites. It is a completely mobile friendly and SEO friendly theme with secure and clean code that engages more clients. It is compatible with multiple browsers. Its features are highly user-friendly that helps you make professional websites very easily. Some of its features are It is compatible with woocommerce, testimonial section, Call to Action Button (CTA), integration of social media, etc. Built upon Bootstrap, this theme makes strong websites along with utilizing all the personalization options and optimized codes. You get faster page load time with it. The available short-codes are add-ons to customize the pages and posts. The team, banner, search bar, sponsors, services are some of the sections on its homepage. You can begin developing stunning websites with this beautiful, multipurpose and highly interactive business WordPress theme.','vw-corporate-lite'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-corporate-lite' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-corporate-lite' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CORPORATE_LITE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-corporate-lite' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-corporate-lite'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-corporate-lite'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-corporate-lite'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-corporate-lite'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-corporate-lite'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CORPORATE_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-corporate-lite'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-corporate-lite'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-corporate-lite'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CORPORATE_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-corporate-lite'); ?></a>
					</div>
			  	  	<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-corporate-lite' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-image"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-corporate-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=vw_corporate_lite_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','vw-corporate-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-images-alt"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_corporate_lite_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-corporate-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_corporate_lite_our_services') ); ?>" target="_blank"><?php esc_html_e('Our Services','vw-corporate-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-corporate-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-aligncenter"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-corporate-lite'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-images-alt"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_corporate_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-corporate-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_corporate_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-corporate-lite'); ?></a>
								</div> 
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_corporate_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-corporate-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_corporate_lite_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-corporate-lite'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-corporate-lite'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-corporate-lite'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-corporate-lite'); ?></span><?php esc_html_e(' Go to ','vw-corporate-lite'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-corporate-lite'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-corporate-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-corporate-lite'); ?></span><?php esc_html_e(' Go to ','vw-corporate-lite'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-corporate-lite'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-corporate-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-corporate-lite'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-corporate-lite/" target="_blank"><?php esc_html_e('Documentation','vw-corporate-lite'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>	

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Corporate_Lite_Plugin_Activation_Settings::get_instance();
			$vw_corporate_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-corporate-lite-recommended-plugins">
				    <div class="vw-corporate-lite-action-list">
				    	<div class="vw-corporate-lite-activation-note">
							<?php esc_html_e('Your filesystem not have write permission, please give writable access to your filesystem','vw-corporate-lite'); ?>
						</div>
				        <?php if ($vw_corporate_lite_actions): foreach ($vw_corporate_lite_actions as $key => $vw_corporate_lite_actionValue): ?>
				                <div class="vw-corporate-lite-action" id="<?php echo esc_attr($vw_corporate_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_corporate_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_corporate_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_corporate_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-corporate-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_corporate_lite_plugin_custom_css); ?>">
			  	<h3><?php esc_html_e( 'Block Patterns', 'vw-corporate-lite' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-corporate-lite'); ?></p>
              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','vw-corporate-lite'); ?></span></b></p>
              	<div class="vw-corporate-lite-pattern-page">
			    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-corporate-lite'); ?></a>
			    </div>
              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/block-pattern.png" alt="" />				
	        </div>
		</div>
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Corporate_Lite_Plugin_Activation_Settings::get_instance();
			$vw_corporate_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-corporate-lite-recommended-plugins">
				    <div class="vw-corporate-lite-action-list">
				    	<div class="vw-corporate-lite-activation-note">
							<?php esc_html_e('Your filesystem not have write permission, please give writable access to your filesystem','vw-corporate-lite'); ?>
						</div>
				        <?php if ($vw_corporate_lite_actions): foreach ($vw_corporate_lite_actions as $key => $vw_corporate_lite_actionValue): ?>
				                <div class="vw-corporate-lite-action" id="<?php echo esc_attr($vw_corporate_lite_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_corporate_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_corporate_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_corporate_lite_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-corporate-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-corporate-lite-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-corporate-lite'); ?></a>
			    </div>
			<?php } ?>
		</div>

		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-corporate-lite' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Our premium corporate WordPress theme is a combo of elegance and professional design. Corporate sector hires the best, so why settle for anything lesser than the best corporate WP theme? We know how the corporate sector works, in there, performers they stay and slackers are weeded out. So it becomes important to be at our optimal best at all times. Our multipurpose corporate WordPress theme is that best performing theme, which you just cant afford to miss out on. The content is indeed the king and promoting it ensures the users extended stay at your website, which leads to increased sales.','vw-corporate-lite'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_CORPORATE_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-corporate-lite'); ?></a>
					<a href="<?php echo esc_url( VW_CORPORATE_LITE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'vw-corporate-lite'); ?></a>
					<a href="<?php echo esc_url( VW_CORPORATE_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-corporate-lite'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/vw-corporate-theme.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-corporate-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-corporate-lite'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-corporate-lite'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-corporate-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-corporate-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-corporate-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('9', 'vw-corporate-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-corporate-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-corporate-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-corporate-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-corporate-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-corporate-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-corporate-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-corporate-lite'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_CORPORATE_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-corporate-lite'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-corporate-lite'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-corporate-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CORPORATE_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-corporate-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-corporate-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-corporate-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CORPORATE_LITE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-corporate-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-corporate-lite'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-corporate-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CORPORATE_LITE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-corporate-lite'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-corporate-lite'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-corporate-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CORPORATE_LITE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-corporate-lite'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-corporate-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-corporate-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CORPORATE_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-corporate-lite'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>