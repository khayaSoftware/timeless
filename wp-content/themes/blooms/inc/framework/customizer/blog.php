<?php

$wp_customize->add_section(
	'blooms_blog',
	array(
		'title' => esc_html__( 'Blog', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'blog_header_categories',
	array(
		'default' => array(),
	)
);

$wp_customize->add_control(
	new THB_Customize_Checkbox_Multiple_Control(
		$wp_customize,
		'blog_header_categories',
		array(
			'section' => 'blooms_blog',
			'label'   => esc_html__( 'Blog Categories', 'blooms' ),
			'choices' => thb_blog_categories(),
		)
	)
);

$wp_customize->add_setting(
	'post_meta_date',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'post_meta_date',
		array(
			'type'     => 'switch',
			'section'  => 'blooms_blog',
			'settings' => 'post_meta_date',
			'label'    => esc_html__( 'Post Date', 'blooms' ),
			'default'  => 1,
		)
	)
);

$wp_customize->add_setting(
	'post_meta_cat',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'post_meta_cat',
		array(
			'type'     => 'switch',
			'section'  => 'blooms_blog',
			'settings' => 'post_meta_cat',
			'label'    => esc_html__( 'Post Category', 'blooms' ),
			'default'  => 1,
		)
	)
);
