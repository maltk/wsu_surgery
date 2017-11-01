<?php


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_598d3519564df',
	'title' => 'Sidebar',
	'fields' => array (
		array (
			'key' => 'field_598d3523cb8a0',
			'label' => 'Select Sidebar',
			'name' => 'select_a_sidebar',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'about-sidebar' => 'About Sidebar',
				'teachers-staff-sidebar' => 'Teachers and Staff Sidebar',
				'our-program-sidebar' => 'Our Program Sidebar',
				'infant-toddlers-sidebar' => 'Infant and Toddlers Sidebar',
				'enroll-sidebar' => 'Enroll Sidebar',
				'parent-resources-sidebar' => 'Parent Resources Sidebar',
				'sidebar-1' => 'Default Sidebar',
				'none' => 'No Sidebar',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'staff-member',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;