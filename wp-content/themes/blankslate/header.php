<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <!--Import scripts-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/wp-content/themes/blankslate/js/scripts.js"></script>

  <!--Import Materialize-->
  <script type="text/javascript" src="/wp-content/themes/blankslate/js/materialize.min.js"></script>
  <link type="text/css" rel="stylesheet" href="/wp-content/themes/blankslate/css/materialize.min.css"  media="screen,projection"/>

  <!--Import fonts-->
  <link href="https://fonts.googleapis.com/css?family=Overpass:400,400i,800,800i" rel="stylesheet">

  <!--Import icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

  <!--Import styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!--HEADER-->
  <div class="header">
    <div class="row max-width">
        <div class="col s3">
          <a href="/"><img src="/wp-content/themes/blankslate/img/txt-logo.png" class="txt-logo" /></a>
        </div>
        <div class="col s9">
          <div class="nav">
            <a href="/advertisers/" routerLinkActive="active">Advertisers</a>
            <a href="/publishers/" routerLinkActive="active">Publishers</a>
            <a href="/how-it-works/" routerLinkActive="active">How it Works</a>
            <a href="/about/" routerLinkActive="active">About</a>
            <div class="top-nav"><a href="">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">Sign Up</a></div>
          </div>
        </div>
    </div>
  </div>

  <div class="page-container">
