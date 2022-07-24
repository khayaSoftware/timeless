<?php
$wp_customize->add_section(
	'blooms_headersecondary',
	array(
		'title' => esc_html__( 'Header - Secondary Area', 'blooms' ),
		'panel' => 'blooms',
	)
);
$wp_customize->add_setting(
	'header_search',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'header_search',
		array(
			'type'     => 'switch',
			'section'  => 'blooms_headersecondary',
			'settings' => 'header_search',
			'label'    => esc_html__( 'Display Search?', 'blooms' ),
			'default'  => 1,
		)
	)
);
