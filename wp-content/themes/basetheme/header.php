<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo(name); ?></title>
  <!-- Icons -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="icon/x-icon" />
  <link rel="apple-touch-icon" href="assets/icon/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon-180x180.png" />
  <!-- Settings -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="<?php bloginfo(description); ?>" />
  <meta name="keywords" content="blog, derecho, legal, unversidad anahuac, universidad, anahuac" />
  <meta name="author" content="Digimundo Technologies" />
  <?php wp_head(); ?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css" />
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url); ?>">
</head>
<body>
  <div id="banner">
    <img src="<?php bloginfo(template_url); ?>/assets/images/derecho.jpg" alt="Backgorund image">
    <h1>derecho</h1>
    <div class="separator">
      <span></span>
    </div>
    <h4>Investigación jurídica y actualidad</h4>
    <div id="bannerMenu">
      <span class="logo">
        Blog Derecho
      </span>
      <nav class="mainMenu"> <!-- Burger menu -->
        <div id="nav-icon1">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
      <nav id="mobileMenu" class="active"> <!-- Mobile menu -->
        <ul class="links"> 
          <li><a href="">home</a></li>
          <li><a href="">home</a></li>
          <li><a href="">home</a></li>
          <li><a href="">home</a></li>
          <li><a href="">home</a></li>
        </ul>
      </nav>
      <nav id="largeMenu"> <!-- Mobile menu -->
        <li><a href="">home</a></li>
        <li><a href="">home</a></li>
        <li><a href="">home</a></li>
        <li><a href="">home</a></li>
        <li><a href="">home</a></li>
      </nav>
    </div>
  </div>