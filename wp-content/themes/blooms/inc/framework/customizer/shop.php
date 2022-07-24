<?php

$wp_customize->add_section(
	'blooms_shop',
	array(
		'title' => esc_html__( 'Shop', 'blooms' ),
		'panel' => 'blooms',
	)
);

$wp_customize->add_setting(
	'shop_header_bg',
	array(
		'sanitize_callback' => 'esc_html',
	)
);
$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'shop_header_bg',
		array(
			'label'     => esc_html__( 'Shop Header Background', 'blooms' ),
			'mime_type' => 'image',
			'section'   => 'blooms_shop',
			'settings'  => 'shop_header_bg',
		)
	)
);

$wp_customize->add_setting(
	'shop_products_per_page',
	array(
		'default' => 14,
	)
);
$wp_customize->add_control(
	'shop_products_per_page',
	array(
		'type'        => 'number',
		'section'     => 'blooms_shop',
		'settings'    => 'shop_products_per_page',
		'label'       => esc_html__( 'Products Per Page', 'blooms' ),
		'description' => esc_html__( 'Set number of products per page.', 'blooms' ),
		'default'     => 14,
		'choices'     => array(
			'min'  => 1,
			'max'  => 99,
			'step' => 1,
		),
	)
);

$wp_customize->add_setting(
	'shop_bottom_text',
	array(
		'default' => '',
	)
);
$wp_customize->add_control(
	'shop_bottom_text',
	array(
		'type'              => 'textarea',
		'section'           => 'blooms_shop',
		'settings'          => 'shop_bottom_text',
		'label'             => esc_html__( 'Shop Bottom Text', 'blooms' ),
		'description'       => esc_html__( 'Displays on the bottom of the main shop page.', 'blooms' ),
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_setting(
	'shop_product_category',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'shop_product_category',
		array(
			'type'        => 'switch',
			'section'     => 'blooms_shop',
			'settings'    => 'shop_product_category',
			'label'       => esc_html__( 'Display Product Categories?', 'blooms' ),
			'description' => esc_html__( 'When enabled, product categories will be display over the product title.', 'blooms' ),
			'default'     => 1,
		)
	)
);

$wp_customize->add_setting(
	'shop_product_category_single',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'shop_product_category_single',
		array(
			'type'        => 'switch',
			'section'     => 'blooms_shop',
			'settings'    => 'shop_product_category_single',
			'label'       => esc_html__( 'Display Only 1 Product Category?', 'blooms' ),
			'description' => esc_html__( 'When enabled, only the first product category will be shown.', 'blooms' ),
			'default'     => 1,
		)
	)
);
$wp_customize->add_setting(
	'shop_product_add_to_cart',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'shop_product_add_to_cart',
		array(
			'type'        => 'switch',
			'section'     => 'blooms_shop',
			'settings'    => 'shop_product_add_to_cart',
			'label'       => esc_html__( 'Display Add to Cart button?', 'blooms' ),
			'description' => esc_html__( 'When enabled, the add to cart button will be displayed', 'blooms' ),
			'default'     => 1,
		)
	)
);
$wp_customize->add_setting(
	'single_product_ajax',
	array(
		'default' => 1,
	)
);
$wp_customize->add_control(
	new THB_Toggle_Switch_Custom_Control(
		$wp_customize,
		'single_product_ajax',
		array(
			'type'        => 'switch',
			'section'     => 'blooms_shop',
			'settings'    => 'single_product_ajax',
			'label'       => esc_html__( 'Single Product Ajax', 'blooms' ),
			'description' => esc_html__( 'When enabled, add to cart functionality will use AJAX on single product pages.', 'blooms' ),
			'default'     => 1,
		)
	)
);
