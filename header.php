<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <script src="https://unpkg.com/scrollreveal"></script>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <?php wp_head(); ?>
  
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/utilities.min.css" rel="stylesheet">

  <script>
  window.is_home = <?= is_home() ? 'true' : 'false'; ?>
  </script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  </head>

  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <div id="app">

  <!-- N A V B A R -->
  <header style="height: 45px;" class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar
  <?php 
  // Fix menu overlap
  if ( is_admin_bar_showing()) echo ' mt-8'; else echo ' mb-8 ';
  
  // if (is_home()) echo ' hidden ';
?>
  ">
    <button class="navbar-toggler -mt-2" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon ion-md-menu"></span>
    </button>
    <img height="58px" src="<?= get_option('logo'); ?>" class="nav-logo-mobile" alt="Company Logo">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <div class="container"  style="height: 45px;">
        <a href="/">
          <img height="40px" src="<?= get_option('logo'); ?>" class="nav-logo-desktop" alt="Company Logo">
        </a>
        <ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
          <!-- <li class="nav-item nav-custom-link">
            <a class="nav-link" href="index.html">Home <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li> -->
          <li class="nav-item nav-custom-link">
            <a class="nav-link text-lg" href="/#marketing">Projects <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link text-lg" href="/#teams">Teams <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link text-lg" href="/blogs">Blogs <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <!-- <li class="nav-item nav-custom-link">
            <a class="nav-link" href="#pricing">Pricing <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li> -->
          <!-- <li class="nav-item nav-custom-link btn btn-demo-small">
            <a class="nav-link" href="#">Try for Free <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li> -->
        </ul>
      </div>
    </div>
  </header>