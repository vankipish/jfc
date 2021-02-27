<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class VW_Corporate_Lite_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vw-corporate-lite' ),
				'family'      => esc_html__( 'Font Family', 'vw-corporate-lite' ),
				'size'        => esc_html__( 'Font Size',   'vw-corporate-lite' ),
				'weight'      => esc_html__( 'Font Weight', 'vw-corporate-lite' ),
				'style'       => esc_html__( 'Font Style',  'vw-corporate-lite' ),
				'line_height' => esc_html__( 'Line Height', 'vw-corporate-lite' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vw-corporate-lite' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vw-corporate-lite-ctypo-customize-controls' );
		wp_enqueue_style(  'vw-corporate-lite-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vw-corporate-lite' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-corporate-lite' ),
        'Acme' => __( 'Acme', 'vw-corporate-lite' ),
        'Anton' => __( 'Anton', 'vw-corporate-lite' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-corporate-lite' ),
        'Arimo' => __( 'Arimo', 'vw-corporate-lite' ),
        'Arsenal' => __( 'Arsenal', 'vw-corporate-lite' ),
        'Arvo' => __( 'Arvo', 'vw-corporate-lite' ),
        'Alegreya' => __( 'Alegreya', 'vw-corporate-lite' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-corporate-lite' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-corporate-lite' ),
        'Bangers' => __( 'Bangers', 'vw-corporate-lite' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-corporate-lite' ),
        'Bad Script' => __( 'Bad Script', 'vw-corporate-lite' ),
        'Bitter' => __( 'Bitter', 'vw-corporate-lite' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-corporate-lite' ),
        'BenchNine' => __( 'BenchNine', 'vw-corporate-lite' ),
        'Cabin' => __( 'Cabin', 'vw-corporate-lite' ),
        'Cardo' => __( 'Cardo', 'vw-corporate-lite' ),
        'Courgette' => __( 'Courgette', 'vw-corporate-lite' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-corporate-lite' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-corporate-lite' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-corporate-lite' ),
        'Cuprum' => __( 'Cuprum', 'vw-corporate-lite' ),
        'Cookie' => __( 'Cookie', 'vw-corporate-lite' ),
        'Chewy' => __( 'Chewy', 'vw-corporate-lite' ),
        'Days One' => __( 'Days One', 'vw-corporate-lite' ),
        'Dosis' => __( 'Dosis', 'vw-corporate-lite' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-corporate-lite' ),
        'Economica' => __( 'Economica', 'vw-corporate-lite' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-corporate-lite' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-corporate-lite' ),
        'Francois One' => __( 'Francois One', 'vw-corporate-lite' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-corporate-lite' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-corporate-lite' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-corporate-lite' ),
        'Handlee' => __( 'Handlee', 'vw-corporate-lite' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-corporate-lite' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-corporate-lite' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-corporate-lite' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-corporate-lite' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-corporate-lite' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-corporate-lite' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-corporate-lite' ),
        'Kanit' => __( 'Kanit', 'vw-corporate-lite' ),
        'Lobster' => __( 'Lobster', 'vw-corporate-lite' ),
        'Lato' => __( 'Lato', 'vw-corporate-lite' ),
        'Lora' => __( 'Lora', 'vw-corporate-lite' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-corporate-lite' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-corporate-lite' ),
        'Merriweather' => __( 'Merriweather', 'vw-corporate-lite' ),
        'Monda' => __( 'Monda', 'vw-corporate-lite' ),
        'Montserrat' => __( 'Montserrat', 'vw-corporate-lite' ),
        'Muli' => __( 'Muli', 'vw-corporate-lite' ),
        'Marck Script' => __( 'Marck Script', 'vw-corporate-lite' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-corporate-lite' ),
        'Open Sans' => __( 'Open Sans', 'vw-corporate-lite' ),
        'Overpass' => __( 'Overpass', 'vw-corporate-lite' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-corporate-lite' ),
        'Oxygen' => __( 'Oxygen', 'vw-corporate-lite' ),
        'Orbitron' => __( 'Orbitron', 'vw-corporate-lite' ),
        'Patua One' => __( 'Patua One', 'vw-corporate-lite' ),
        'Pacifico' => __( 'Pacifico', 'vw-corporate-lite' ),
        'Padauk' => __( 'Padauk', 'vw-corporate-lite' ),
        'Playball' => __( 'Playball', 'vw-corporate-lite' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-corporate-lite' ),
        'PT Sans' => __( 'PT Sans', 'vw-corporate-lite' ),
        'Philosopher' => __( 'Philosopher', 'vw-corporate-lite' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-corporate-lite' ),
        'Poiret One' => __( 'Poiret One', 'vw-corporate-lite' ),
        'Quicksand' => __( 'Quicksand', 'vw-corporate-lite' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-corporate-lite' ),
        'Raleway' => __( 'Raleway', 'vw-corporate-lite' ),
        'Rubik' => __( 'Rubik', 'vw-corporate-lite' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-corporate-lite' ),
        'Russo One' => __( 'Russo One', 'vw-corporate-lite' ),
        'Righteous' => __( 'Righteous', 'vw-corporate-lite' ),
        'Slabo' => __( 'Slabo', 'vw-corporate-lite' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-corporate-lite' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-corporate-lite'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-corporate-lite' ),
        'Sacramento' => __( 'Sacramento', 'vw-corporate-lite' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-corporate-lite' ),
        'Tangerine' => __( 'Tangerine', 'vw-corporate-lite' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-corporate-lite' ),
        'VT323' => __( 'VT323', 'vw-corporate-lite' ),
        'Varela Round' => __( 'Varela Round', 'vw-corporate-lite' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-corporate-lite' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-corporate-lite' ),
        'Volkhov' => __( 'Volkhov', 'vw-corporate-lite' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-corporate-lite' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'vw-corporate-lite' ),
			'100' => esc_html__( 'Thin',       'vw-corporate-lite' ),
			'300' => esc_html__( 'Light',      'vw-corporate-lite' ),
			'400' => esc_html__( 'Normal',     'vw-corporate-lite' ),
			'500' => esc_html__( 'Medium',     'vw-corporate-lite' ),
			'700' => esc_html__( 'Bold',       'vw-corporate-lite' ),
			'900' => esc_html__( 'Ultra Bold', 'vw-corporate-lite' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'normal'  => esc_html__( 'Normal', 'vw-corporate-lite' ),
			'italic'  => esc_html__( 'Italic', 'vw-corporate-lite' ),
			'oblique' => esc_html__( 'Oblique', 'vw-corporate-lite' )
		);
	}
}
