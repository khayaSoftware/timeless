<?php

$wp_customize->add_section(
	'blooms_footer',
	array(
		'title' => esc_html__( 'Footer', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'footer',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'footer',
		array(
			'type'     => 'switch',
			'section'  => 'blooms_footer',
			'settings' => 'footer',
			'label'    => esc_html__( 'Display Footer?', 'blooms' ),
			'default'  => 1,
		)
	)
);

$wp_customize->add_setting(
	'footer_columns',
	array(
		'default' => 'fourcolumns',
	)
);
$wp_customize->add_control(
	new THB_Image_Radio_Button_Custom_Control(
		$wp_customize,
		'footer_columns',
		array(
			'type'     => 'radio-image',
			'settings' => 'footer_columns',
			'label'    => esc_html__( 'Footer Columns', 'blooms' ),
			'section'  => 'blooms_footer',
			'default'  => 'fourcolumns',
			'priority' => 10,
			'choices'  => array(
				'onecolumns'               => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/one-columns.png',
					'name'  => esc_html__( 'One Column', 'blooms' ),
				),
				'twocolumns'               => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/two-columns.png',
					'name'  => esc_html__( 'Two Columns', 'blooms' ),
				),
				'threecolumns'             => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/three-columns.png',
					'name'  => esc_html__( 'Three Columns', 'blooms' ),
				),
				'fourcolumns'              => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/four-columns.png',
					'name'  => esc_html__( 'Four Columns', 'blooms' ),
				),
				'doubleleft'               => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/doubleleft-columns.png',
					'name'  => esc_html__( 'Double Left Columns', 'blooms' ),
				),
				'doubleright'              => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/doubleright-columns.png',
					'name'  => esc_html__( 'Double Right Columns', 'blooms' ),
				),
				'fourlargeleftcolumns'     => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/four-columns-large-left.png',
					'name'  => esc_html__( 'Large Left Columns', 'blooms' ),
				),
				'fourlargerightcolumns'    => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/four-columns-large-right.png',
					'name'  => esc_html__( 'Large Right Columns', 'blooms' ),
				),
				'fivecolumns'              => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/five-columns.png',
					'name'  => esc_html__( 'Five Columns', 'blooms' ),
				),
				'sixcolumns'               => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/six-columns.png',
					'name'  => esc_html__( 'Six Columns', 'blooms' ),
				),
				'fivelargerightcolumns'    => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/five-columns-large-right.png',
					'name'  => esc_html__( 'Five / Large Right Columns', 'blooms' ),
				),
				'fivelargeleftcolumns'     => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/five-columns-large-left.png',
					'name'  => esc_html__( 'Five / Large Left Columns', 'blooms' ),
				),
				'fivelargerightcolumnsalt' => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/five-columns-large-right2.png',
					'name'  => esc_html__( 'Five / Large 2 Right Columns', 'blooms' ),
				),
				'fivelargeleftcolumnsalt'  => array(
					'image' => get_template_directory_uri() . '/assets/img/admin/columns/five-columns-large-left2.png',
					'name'  => esc_html__( 'Five / Large 2 Left Columns', 'blooms' ),
				),
			),
		)
	)
);
