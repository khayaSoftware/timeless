<?php

$wp_customize->add_section(
	'blooms_subfooter',
	array(
		'title' => esc_html__( 'Sub-Footer', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'subfooter',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'subfooter',
		array(
			'type'     => 'switch',
			'section'  => 'blooms_subfooter',
			'settings' => 'subfooter',
			'label'    => esc_html__( 'Display Sub-Footer?', 'blooms' ),
			'default'  => 1,
		)
	)
);

$wp_customize->add_setting(
	'copyright_text',
	array(
		'default' => wp_kses_post( '© 2021 Fuel Themes' ),
	)
);
$wp_customize->add_control(
	new THB_TinyMCE_Custom_Control(
		$wp_customize,
		'copyright_text',
		array(
			'type'              => 'text',
			'section'           => 'blooms_subfooter',
			'settings'          => 'copyright_text',
			'label'             => esc_html__( 'Copyright Text', 'blooms' ),
			'default'           => wp_kses_post( '© 2021 Fuel Themes' ),
			'sanitize_callback' => 'wp_kses_post',
		)
	)
);

$wp_customize->add_setting(
	'subfooter_text',
	array(
		'default' => wp_kses_post( '© 2021 Fuel Themes' ),
	)
);
$wp_customize->add_control(
	new THB_TinyMCE_Custom_Control(
		$wp_customize,
		'subfooter_text',
		array(
			'type'              => 'text',
			'section'           => 'blooms_subfooter',
			'settings'          => 'subfooter_text',
			'label'             => esc_html__( 'Sub-Footer Text', 'blooms' ),
			'default'           => wp_kses_post( 'Made by Fuel Themes' ),
			'sanitize_callback' => 'wp_kses_post',
		)
	)
);
