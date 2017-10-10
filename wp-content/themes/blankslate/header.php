<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <!--Import scripts-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


  <!--Import Materialize-->
  <script type="text/javascript" src="/wp-content/themes/blankslate/js/materialize.min.js"></script>
  <link type="text/css" rel="stylesheet" href="/wp-content/themes/blankslate/css/materialize.min.css"  media="screen,projection"/>

<script type="text/javascript" src="/wp-content/themes/blankslate/js/scripts.js"></script>

  <!--Import fonts-->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Overpass:400,400i,800,800i" rel="stylesheet">

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
          <div class="mobile-nav" id="slide-out">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/advertisers/">Advertisers</a></li>
              <li><a href="/publishers/">Publishers</a></li>
              <li><a href="/how-it-works/">How it Works</a></li>
              <li><a href="/about/">About</a></li>
              <li><a href="/contact/">CONTACT US</a></li>
            </ul>
          </div>
          <div class="mobile-nav-button" data-activates="slide-out"><i class="fa fa-bars fa-4x" ></i></div>
          <div class="nav">
            <a href="/advertisers/">Advertisers</a>
            <a href="/publishers/">Publishers</a>
            <a href="/how-it-works/">How it Works</a>
            <a href="/about/">About</a>
            <div class="top-nav"><a href="/contact/">Contact Us</a></div>
          </div>

        </div>
    </div>
  </div>



  <div class="page-container">
<!-- <a href="javascript:void(0)" data-activates="slide-out" class="mobile-menu"><i class="material-icons">menu</i></a> -->
