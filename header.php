<!doctype html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>FuoriMohole &bull; Tutti gli eventi della Mohole Design Week 2017</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <?php wp_head(); ?>

</head>
<body>
  <div class="container-fluid hero">
    <nav class="navbar navbar-default"> <!-- To change style search for navbar-default class -->
      <!--<div class="container-fluid">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo" class="logo_min480">
            <img src="<?php bloginfo('template_url'); ?>/img/logo_small.png" alt="Logo" class="logo_max480">
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php
          wp_nav_menu(array(
            "theme_location" => "Header",
            "depth" => 2,
            "container" => "div",
            "container_class" => "collapse navbar-collapse",
            "container_id" => "collapse-1",
            "menu_class" => "nav navbar-nav navbar-right",
            "fallback_cb" => "wp_bootstrap_navwalker::fallback",
            "walker" => new wp_bootstrap_navwalker()
          ));
        ?>
    </nav>

  <!-- /.container-fluid hero in content files -->
