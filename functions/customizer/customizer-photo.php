<?php
function footer_stripe_customizer( $wp_customize ) {
	//Footer image section
	$wp_customize->add_panel( 'footer_stripe_options', array(
		'priority' => 200,
		'capability' => 'edit_theme_options',
		'title' => 'Footer Images',
		));

	$wp_customize->add_section( 'footer_stripe_head' , array(
		'title' => 'Enable photo section',
		'panel' => 'footer_stripe_options',
		'priority' => 50,
   	));

	//Footer image section show/hide option
	$wp_customize->add_setting('lptheme_options[footer_stripe_enabled]',
    array(
    'default' => true,
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	);

	$wp_customize->add_control('lptheme_options[footer_stripe_enabled]',
    array(
    'label' => 'Enable photo section',
    'section' => 'footer_stripe_head',
    'type' => 'checkbox',
    ));

	//First image
	$wp_customize->add_section( 'footer_stripe_one' , array(
		'title' => 'Image one',
		'panel' => 'footer_stripe_options',
		'priority' => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	));

	$wp_customize->add_setting( 'lptheme_options[stripe_image_one]',array('default' => LP_TEMPLATE_DIR_URI . '/img/post/red_b.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'lptheme_options[stripe_image_one]',
			array(
				'label' => 'Image',
				'section' => 'example_section_one',
				'settings' =>'lptheme_options[stripe_image_one]',
				'section' => 'footer_stripe_one',
				'type' => 'upload',
			)
		)
	);

	//Second image
	$wp_customize->add_section( 'footer_stripe_two' , array(
		'title' => 'Image two',
		'panel' => 'footer_stripe_options',
		'priority' => 200,
   	));

	$wp_customize->add_setting( 'lptheme_options[stripe_image_two]',array('default' => LP_TEMPLATE_DIR_URI . '/img/post/red_c.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'lptheme_options[stripe_image_two]',
			array(
				'label' => 'Image',
				'section' => 'example_section_one',
				'settings' =>'lptheme_options[stripe_image_two]',
				'section' => 'footer_stripe_two',
				'type' => 'upload',
			)
		)
	);

	//Third Service section
	$wp_customize->add_section( 'footer_stripe_three' , array(
		'title' => 'Image three',
		'panel' => 'footer_stripe_options',
		'priority' => 300,
   	));

	$wp_customize->add_setting( 'lptheme_options[stripe_image_three]',array('default' => LP_TEMPLATE_DIR_URI . '/img/post/red_d.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'lptheme_options[stripe_image_three]',
			array(
				'label' => 'Image',
				'section' => 'example_section_one',
				'settings' =>'lptheme_options[stripe_image_three]',
				'section' => 'footer_stripe_three',
				'type' => 'upload',
			)
		)
	);

	//Fourth image
  $wp_customize->add_section( 'footer_stripe_four' , array(
  		'title' => 'Image four',
  		'panel' => 'footer_stripe_options',
  		'priority' => 400,
     	));

  $wp_customize->add_setting( 'lptheme_options[stripe_image_four]',array('default' => LP_TEMPLATE_DIR_URI . '/img/post/red_e.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
  		$wp_customize,
  			'lptheme_options[stripe_image_four]',
  			array(
  				'label' => 'Image',
  				'section' => 'example_section_one',
  				'settings' =>'lptheme_options[stripe_image_four]',
  				'section' => 'footer_stripe_four',
  				'type' => 'upload',
  			)
  		)
  	);

//Fifth Service section
  $wp_customize->add_section( 'footer_stripe_five' , array(
  		'title' => 'Image five',
  		'panel' => 'footer_stripe_options',
  		'priority' => 500,
     	));

  $wp_customize->add_setting( 'lptheme_options[stripe_image_five]',array('default' => LP_TEMPLATE_DIR_URI . '/img/post/red_f.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));

  	$wp_customize->add_control(
  		new WP_Customize_Image_Control(
  			$wp_customize,
  			'lptheme_options[stripe_image_five]',
  			array(
  				'label' => 'Image',
  				'section' => 'example_section_one',
  				'settings' =>'lptheme_options[stripe_image_five]',
  				'section' => 'footer_stripe_five',
  				'type' => 'upload',
  			)
  		)
  	);

	//Sixth image
  $wp_customize->add_section( 'footer_stripe_six' , array(
		'title' => 'Image six',
		'panel' => 'footer_stripe_options',
		'priority' => 600,
		));

  $wp_customize->add_setting( 'lptheme_options[stripe_image_six]',array('default' => LP_TEMPLATE_DIR_URI . '/img/post/red.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'lptheme_options[stripe_image_six]',
			array(
				'label' => 'Image',
				'section' => 'example_section_one',
				'settings' =>'lptheme_options[stripe_image_six]',
				'section' => 'footer_stripe_six',
				'type' => 'upload',
			)
		)
	);
}

add_action( 'customize_register', 'footer_stripe_customizer' );
?>
