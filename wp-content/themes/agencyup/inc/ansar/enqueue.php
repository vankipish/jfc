<?php function agencyup_scripts() {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style( 'agencyup-style', get_stylesheet_uri() );
	
	wp_enqueue_style('agencyup-default', get_template_directory_uri() . '/css/colors/default.css');
	
	wp_enqueue_style('smartmenus',get_template_directory_uri().'/css/jquery.smartmenus.bootstrap.css');	

	wp_enqueue_style('font-awesome-css',get_template_directory_uri().'/css/all.css');

	/* Js script */

	wp_enqueue_script( 'agencyup-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'));

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));

	wp_enqueue_script('smartmenus-js', get_template_directory_uri() . '/js/jquery.smartmenus.js' , array('jquery'));

	wp_enqueue_script('bootstrap-smartmenus-js', get_template_directory_uri() . '/js/bootstrap-smartmenus.js' , array('jquery'));
	
	wp_enqueue_script('agencyup-main-js', get_template_directory_uri() . '/js/main.js' , array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'agencyup_scripts');

/**
 	* Added skip link focus
 	*/
	function agencyup_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
	}
add_action( 'wp_print_footer_scripts', 'agencyup_skip_link_focus_fix' );

function agencyup_customizer_selective_preview() {
	wp_enqueue_script(
		'agencyup-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array(
			'jquery',
			'customize-preview',
		), 999, true
	);
}

add_action( 'customize_preview_init', 'agencyup_customizer_selective_preview' );


if ( ! function_exists( 'agencyup_admin_scripts' ) ) :
function agencyup_admin_scripts() {
    wp_enqueue_script( 'agencyup-admin-script', get_template_directory_uri() . '/js/agencyup-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'agencyup-admin-script', 'agencyup_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    wp_enqueue_style('agencyup-admin-style-css', get_template_directory_uri() . '/css/customizer-controls.css');
}
endif;
add_action( 'admin_enqueue_scripts', 'agencyup_admin_scripts' );


if ( ! function_exists( 'agencyup_header_color' ) ) :

function agencyup_header_color() {
    $agencyup_logo_text_color = get_header_textcolor();

    ?>
    <style type="text/css">
    <?php
        if ( ! display_header_text() ) :
    ?>
        .site-title,
        .site-description {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
        }
    <?php
        else :
    ?>
        body .site-title a,
        body .site-description {
            color: #<?php echo esc_attr( $agencyup_logo_text_color ); ?>;
        }
    <?php endif; ?>
    </style>
    <?php
}
endif;