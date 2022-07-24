<?php
$wp_customize->add_section(
	'blooms_subheader',
	array(
		'title' => esc_html__( 'Sub-Header', 'blooms' ),
		'panel' => 'blooms',
	)
);
$wp_customize->add_setting(
	'subheader',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'subheader',
		array(
			'type'     => 'switch',
			'section'  => 'blooms_subheader',
			'settings' => 'subheader',
			'label'    => esc_html__( 'Display Sub-Header?', 'blooms' ),
			'default'  => 1,
		)
	)
);
	$wp_customize->add_setting(
		'subheader_content'
	);
	$wp_customize->add_control(
		'subheader_content',
		array(
			'type'              => 'text',
			'section'           => 'blooms_subheader',
			'settings'          => 'subheader_content',
			'label'             => esc_html__( 'Sub-Header Text', 'blooms' ),
			'sanitize_callback' => 'wp_kses_post',
		)
	);
