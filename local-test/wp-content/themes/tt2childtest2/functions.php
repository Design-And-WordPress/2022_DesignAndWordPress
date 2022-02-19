<?php
/**
 * Child theme test
 *
 * @package tt2childtest
 */

add_action('wp_enqueue_scripts', function () {
    $tt2childtest_google_fonts = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Zen+Kaku+Gothic+Antique:wght@700&display=swap';
    wp_enqueue_style('google-fonts', $tt2childtest_google_fonts, array(), null);
});

function tt2childtest_set_preconnect_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'tt2childtest_set_preconnect_google_fonts', 'set_preconnect_google_fonts' );
