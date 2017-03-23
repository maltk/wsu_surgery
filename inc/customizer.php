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

	//Kevins Additions
	//var_dump($wp_customize->settings());

	$wp_customize->get_section( 'title_tagline' )->title = __('Site Identiy & Header/Footer', 'wsu_surgery');

	// Underscore.me Default
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';





	//KEIVNS ADDITIONS

	//Set header top title
	$wp_customize->add_setting('hd_t_dept_title', array(
		'default' => get_bloginfo('name'),
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hd_t_dept_title',
				array(
					'label'          => __( 'Set Department Name', 'wsu_surgery' ),
					'section'        => 'title_tagline',
					'settings'       => 'hd_t_dept_title',
					'description' => 'This will be shown at the top of the page in the green bar on the left.'
				)
			)
	);

	//Upload Logo
	$wp_customize->add_setting('dept_logo', array(
		'default' => get_template_directory_uri() . '/img/wsu-logo.png'
	));
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Header Logo', 'wsu_surgery' ),
               'section'    => 'title_tagline',
               'settings'   => 'dept_logo',
			   'description' => 'Upload your department logo here.',
               'context'    => 'dept-custom-logo' 
           )
       )
   );

   //Footer: Department Title
   $wp_customize->add_setting('ft_dept_title', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ft_dept_title',
				array(
					'label'          => __( 'Footer Department Title', 'wsu_surgery' ),
					'section'        => 'title_tagline',
					'settings'       => 'ft_dept_title',
					'description' => 'The department title and description will be shown at the bottom of the page on the left.'
				)
			)
	);
   //Footer: Description
   $wp_customize->add_setting('ft_dept_desc', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ft_dept_desc',
				array(
					'label'          => __( 'Footer Department Description', 'wsu_surgery' ),
					'section'        => 'title_tagline',
					'settings'       => 'ft_dept_desc',
					'type'           => 'textarea',
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
