<?php
/**
 * DesignAndWordPress functions and definitions
 *
 * @package dsgnndwp
 */

define( 'DSGNNDWP_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'DSGNNDWP_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

if ( ! function_exists( 'dsgnndwp_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function dsgnndwp_styles() {
		wp_register_style(
			'dsgnndwp_styles',
			get_template_directory_uri() . '/style.css',
			array(),
			filectime( DSGNNDWP_PATH . '/style.css' )
		);
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dsgnndwp_styles' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'dsgnndwp_styles' );
add_action( 'admin_enqueue_scripts', 'dsgnndwp_styles' );

// if ( ! function_exists( 'dsgnndwp_editor_styles' ) ) :
// 	/**
// 	 * Enqueue editor styles.
// 	 *
// 	 * @return void
// 	 */
// 	function dsgnndwp_editor_styles() {
// 		add_theme_support( 'editor-styles' );
// 		add_editor_style(
// 			get_template_directory_uri() . '/style.css'
// 		);
// 	}
// endif;
// add_action( 'after_setup_theme', 'dsgnndwp_editor_styles', 10);

if ( ! function_exists( 'dsgnndwp_scripts' ) ) :
	/**
	 * Enqueue scripts.
	 *
	 * @return void
	 */
	function dsgnndwp_scripts() {
		// Tailwind CSS のCDNで読み込む
		wp_register_script(
			'dsgnndwp_scripts',
			'https://cdn.tailwindcss.com',
			array(),
			''
		);
		// Enqueue theme script.
		wp_enqueue_script( 'dsgnndwp_scripts' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'dsgnndwp_scripts' );
add_action( 'admin_enqueue_scripts', 'dsgnndwp_scripts' );

add_action('wp_enqueue_scripts', function () {
    $dsgnndwp_google_fonts = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Zen+Kaku+Gothic+Antique:wght@700&display=swap';
    wp_enqueue_style('google-fonts', $dsgnndwp_google_fonts, array(), null);
});

function dsgnndwp_set_preconnect_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'dsgnndwp_set_preconnect_google_fonts', 'set_preconnect_google_fonts' );