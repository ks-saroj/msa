<?php

if ( ! defined( 'KS_DEV_MODE' ) ) {
    //TODO:: Replace this to false on live
    //defining KS_DEV_MODE just to force new version on dev mode
    define( 'KS_DEV_MODE', true );
}
/**
 * Famous Kitchens functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Famous_Kitchens
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}


/**
 * Prints human-readable information about the variable
 *
 * @param $r PHP variable
 */
if ( ! function_exists( 'p' ) ) {
    function p($r)
    {
        echo '<pre>';
        print_r($r);
        echo '</pre>';
    }
}

/**
 * Prints human-readable information about the variable and exit
 *
 * @param $r PHP variable
 */
if ( ! function_exists( 'pe' ) ) {
    function pe($r)
    {
        echo '<pre>';
        print_r($r);
        echo '</pre>';
        exit();
    }
}

require get_template_directory() . '/inc/front/enqueue.php';
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

//additional
require get_template_directory() . '/inc/class/MSACustomPostTypes.php';
require get_template_directory() . '/inc/class/WP_Bootstrap_Navwalker.php';
require get_template_directory() . '/inc/custom-functions.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

