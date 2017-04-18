<?php
  //Required resources
	define('LP_TEMPLATE_DIR_URI',get_template_directory_uri());
	define('LP_TEMPLATE_DIR',get_template_directory());
	define('LP_THEME_FUNCTIONS_PATH',LP_TEMPLATE_DIR.'/functions');
	require( LP_THEME_FUNCTIONS_PATH . '/wp_bootstrap_navwalker.php');

	//Custom content
	require( LP_THEME_FUNCTIONS_PATH . '/title-widget.php');
  require( LP_THEME_FUNCTIONS_PATH . '/recent-post-widget.php');
  require( LP_THEME_FUNCTIONS_PATH . '/comment-options.php');
  require_once( LP_THEME_FUNCTIONS_PATH . '/customizer/theme-data.php');
	require( LP_THEME_FUNCTIONS_PATH . '/customizer/customizer-photo.php');


  //Activating featured images and setting new size
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'thumb-single', 350, 350, true );
  //set_post_thumbnail_size($width = 350, $height = 350, $crop = true);

  //Setting a primary menu
  function creaMenu() {
    register_nav_menu("Header","Main Navigation");
  }

  add_action("init","creaMenu");

  //Setting style and script loaders
  function caricaScripts(){
    wp_register_style(
      'bootstrapCSS',
      LP_TEMPLATE_DIR_URI . '/css/bootstrap.css',
      false,
      '3.3.7',
      'all'
    );

    wp_register_style(
      "fontawesomeCSS",
      LP_TEMPLATE_DIR_URI . '/css/font-awesome.min.css',
      false,
      '4.7.0',
      'all'
    );

		wp_deregister_script("jquery");

		wp_register_script(
			'jquery',
			LP_TEMPLATE_DIR_URI . "/js/jquery-2.2.4.min.js",
			false,
			'2.2.4',
			true
		);

    wp_register_script(
      "bootstrapJS",
      LP_TEMPLATE_DIR_URI . "/js/bootstrap.min.js",
      array("jquery"),
      "3.3.7",
      true
    );

    wp_register_script(
      "fancyJS",
      LP_TEMPLATE_DIR_URI . "/fancybox/jquery.fancybox.pack.js",
      array("jquery"),
      "2.0.0",
      true
    );

    wp_register_style(
      "fancyCSS",
      LP_TEMPLATE_DIR_URI . '/fancybox/jquery.fancybox.css',
      false,
      '2.1.5',
      'all'
    );

    wp_register_script(
      "galleryJS",
      LP_TEMPLATE_DIR_URI . "/js/gallery.js",
      array("jquery","fancyJS","bootstrapJS"),  //le dipendenza vanno richiamate con il nome assegnato
      "1.0.0",
      true
    );

    //Coda di caricamento
    wp_enqueue_style("bootstrapCSS");
    wp_enqueue_style("fontawesomeCSS");
    wp_enqueue_style("fancyCSS");
    wp_enqueue_style('style',get_stylesheet_uri(),array("bootstrapCSS"));
		wp_enqueue_script("jquery");
		wp_enqueue_script("fancyJS");
    wp_enqueue_script("bootstrapJS");
    wp_enqueue_script("galleryJS");
  }

  add_action("wp_enqueue_scripts", "caricaScripts");


  /* --------Registering Widget Areas-------- */
  function creaWidget() {
      //registro un'area per i widget
      register_sidebar(array(
          "name" => "Header",
          "description" => "Allows you to add content to header section. Use to customize event details with Title Widget.",
          "before_widget" => '',
          "after_widget" => "",
          "before_title" => "<h4>",
          "after_title" => "</h4>"
      ));
      register_sidebar(array(
          "name" => "Footer",
          "description" => "Allows you to add content to footer section. Widgets will be organized in three columns.",
          "before_widget" => '<div class="col-md-4">',
          "after_widget" => "</div>",
          "before_title" => "<h3>",
          "after_title" => "</h3>"
      ));
  }

  add_action("widgets_init","creaWidget");
?>
