<?php
$wp_customize->add_section(
	'blooms_typography',
	array(
		'title' => esc_html__( 'Typography', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'primary_typography',
	array(
		'default' => '{"font":""}',
	)
);
$wp_customize->add_control(
	new THB_Google_Font_Select_Custom_Control(
		$wp_customize,
		'primary_typography',
		array(
			'type'        => 'typography',
			'section'     => 'blooms_typography',
			'settings'    => 'primary_typography',
			'label'       => esc_html__( 'Primary Font', 'blooms' ),
			'description' => esc_html__( 'Changes primarily heading tags', 'blooms' ),
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby'    => 'alpha',
			),
			'transport'   => 'auto',
		)
	)
);

$wp_customize->add_setting(
	'secondary_typography',
	array(
		'default' => '{"font":""}',
	)
);
$wp_customize->add_control(
	new THB_Google_Font_Select_Custom_Control(
		$wp_customize,
		'secondary_typography',
		array(
			'type'        => 'typography',
			'section'     => 'blooms_typography',
			'settings'    => 'secondary_typography',
			'label'       => esc_html__( 'Secondary Font', 'blooms' ),
			'description' => esc_html__( 'Changes primarily body text', 'blooms' ),
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby'    => 'alpha',
			),
			'transport'   => 'auto',
		)
	)
);
