<?php
/**
 * msa Theme Customizer
 *
 * @package msa
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function msa_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'msa_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'msa_customize_partial_blogdescription',
			)
		);
	}
    $wp_customize->remove_control('background_color');
    $wp_customize->remove_control('header_textcolor');

    //custom setting starts

    //add setting
    $wp_customize->add_setting( 'msa_highlighted_color', array(
        'default' => '#4082C1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting( 'msa_secondary_color', array(
        'default' => '#92D8FC',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting( 'msa_tertiary_color', array(
        'default' => '#5EB8E6',
        'transport' => 'postMessage'
    ));
    // add Controls
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'msa_highlighted_color', array(
        'label' => 'Primary Color',
        'section' => 'colors',
        'settings' => 'msa_highlighted_color'
    )));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'msa_secondary_color', array(
        'label' => 'Secondary Color',
        'section' => 'colors',
        'settings' => 'msa_secondary_color'
    )));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'msa_tertiary_color', array(
        'label' => 'Tertiary Color',
        'section' => 'colors',
        'settings' => 'msa_tertiary_color'
    )));
}
add_action( 'customize_register', 'msa_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function msa_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function msa_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function msa_customize_preview_js() {
	wp_enqueue_script( 'msa-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'msa_customize_preview_js' );
