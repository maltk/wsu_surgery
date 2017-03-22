<?php
/**
 * WSU Surgery Theme Customizer
 *
 * @package WSU_Surgery
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wsu_surgery_customize_register( $wp_customize ) {
	//var_dump($wp_customize->settings());

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//Kevins edit

	//Upload Logo
	$wp_customize->add_section('custom_logo', array(
		'title' => __('Upload Logo', 'wsu_surgery'),
		'description' => __('Add logo here'),
		'priority' => 130
	));
	$wp_customize->add_setting('dept_logo', array(
		'default' => get_template_directory_uri() . '/img/wsu-logo.png'
	));
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Upload a logo', 'wsu_surgery' ),
               'section'    => 'custom_logo',
               'settings'   => 'dept_logo',
               'context'    => 'dept-custom-logo' 
           )
       )
   );

   



}
add_action( 'customize_register', 'wsu_surgery_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wsu_surgery_customize_preview_js() {
	wp_enqueue_script( 'wsu_surgery_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wsu_surgery_customize_preview_js' );
