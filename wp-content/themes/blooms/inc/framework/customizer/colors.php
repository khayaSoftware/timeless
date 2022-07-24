<?php

$wp_customize->add_section(
	'blooms_colors',
	array(
		'title' => esc_html__( 'Color', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'accent_color',
	array(
		'default' => '',
	)
);
$wp_customize->add_control(
	new THB_Customize_Alpha_Color_Control(
		$wp_customize,
		'accent_color',
		array(
			'type'         => 'color',
			'section'      => 'blooms_colors',
			'settings'     => 'accent_color',
			'label'        => esc_html__( 'Accent Color', 'blooms' ),
			'show_opacity' => false,
		)
	)
);

$wp_customize->add_setting(
	'secondary_color',
	array(
		'default' => '',
	)
);
$wp_customize->add_control(
	new THB_Customize_Alpha_Color_Control(
		$wp_customize,
		'secondary_color',
		array(
			'type'         => 'color',
			'section'      => 'blooms_colors',
			'settings'     => 'secondary_color',
			'label'        => esc_html__( 'Secondary Color', 'blooms' ),
			'show_opacity' => false,
		)
	)
);

$wp_customize->add_setting(
	'tertiary_color',
	array(
		'default' => '',
	)
);
$wp_customize->add_control(
	new THB_Customize_Alpha_Color_Control(
		$wp_customize,
		'tertiary_color',
		array(
			'type'         => 'color',
			'section'      => 'blooms_colors',
			'settings'     => 'tertiary_color',
			'label'        => esc_html__( 'Tertiary Color', 'blooms' ),
			'show_opacity' => false,
		)
	)
);
