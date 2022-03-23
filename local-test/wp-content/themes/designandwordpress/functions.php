<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 */

 if ( ! function_exists( 'wpad_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function wpad_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'wpad_styles',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'wpad_styles' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wpad_styles' );