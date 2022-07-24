<?php
$wp_customize->add_section(
	'blooms_header',
	array(
		'title' => esc_html__( 'Header', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'logo_height',
	array(
		'default' => '40px',
	)
);
$wp_customize->add_control(
	'logo_height',
	array(
		'type'     => 'dimension',
		'section'  => 'blooms_header',
		'settings' => 'logo_height',
		'label'    => esc_html__( 'Logo Height', 'blooms' ),
		'default'  => '40px',
	)
);

$wp_customize->add_setting(
	'logo_height_mobile',
	array(
		'default' => '40px',
	)
);
$wp_customize->add_control(
	'logo_height_mobile',
	array(
		'type'     => 'dimension',
		'section'  => 'blooms_header',
		'settings' => 'logo_height_mobile',
		'label'    => esc_html__( 'Logo Height - Mobile', 'blooms' ),
		'default'  => '40px',
	)
);

$wp_customize->add_setting(
	'fixed_header_shadow',
	array(
		'default' => 'thb-fixed-shadow-style1',
	)
);
$wp_customize->add_control(
	'fixed_header_shadow',
	array(
		'type'     => 'select',
		'section'  => 'blooms_header',
		'settings' => 'fixed_header_shadow',
		'label'    => esc_html__( 'Fixed Header - Shadow', 'blooms' ),
		'default'  => 'thb-fixed-shadow-style1',
		'multiple' => 0,
		'choices'  => array(
			'thb-fixed-noshadow'      => 'None',
			'thb-fixed-shadow-style1' => 'Small',
			'thb-fixed-shadow-style2' => 'Medium',
			'thb-fixed-shadow-style3' => 'Large',
		),
	)
);
