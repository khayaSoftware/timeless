<?php

$wp_customize->add_section(
	'blooms_mobilemenu',
	array(
		'title' => esc_html__( 'Mobile Menu', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'mobile_menu_footer'
);
$wp_customize->add_control(
	new THB_TinyMCE_Custom_Control(
		$wp_customize,
		'frame',
		array(
			'type'              => 'editor',
			'section'           => 'blooms_mobilemenu',
			'settings'          => 'mobile_menu_footer',
			'label'             => esc_html__( 'Mobile Menu Footer Content', 'blooms' ),
			'sanitize_callback' => 'wp_kses_post',
		)
	)
);
