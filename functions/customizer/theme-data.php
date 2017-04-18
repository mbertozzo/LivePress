<?php
function theme_data_setup()
{

	/* To make images preview available in customize panel, change path in customizer-photo.php too */
	$service_image1 = LP_TEMPLATE_DIR_URI . "/img/post/red_b.jpg";
	$service_image2 = LP_TEMPLATE_DIR_URI . "/img/post/red_c.jpg";
	$service_image3 = LP_TEMPLATE_DIR_URI . "/img/post/red_d.jpg";
	$service_image4 = LP_TEMPLATE_DIR_URI . "/img/post/red_e.jpg";
	$service_image5 = LP_TEMPLATE_DIR_URI . "/img/post/red_f.jpg";
	$service_image6 = LP_TEMPLATE_DIR_URI . "/img/post/red.jpg";

	return $theme_options=array(
		// service
		'footer_stripe_enabled' => true,

		'stripe_image_one' => $service_image1,
		'stripe_image_two' => $service_image2,
		'stripe_image_three' => $service_image3,
		'stripe_image_four' => $service_image4,
		'stripe_image_five' => $service_image5,
		'stripe_image_six' => $service_image6
  );
}
?>
