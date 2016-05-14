<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width" charset="UTF-8">
<title>Atlas of Design</title>
<script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css' rel='stylesheet' />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='<?php bloginfo('template_url'); ?>/blocks.css' rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>

<div id="main">
  
  <nav id="nav" class="cf">
    <div class="container cf">
      <a href="<?php echo home_url(); ?>">
        <div id="logo"><img src="<?php bloginfo('template_directory'); ?>/img/chevron.svg"></div>
      </a>
      <?php wp_nav_menu( array('container' => '', 'theme_location' => 'primary') ); ?>
    </div>
    <button id="nav-button"><i class="fa fa-bars"></i></button>
  </nav>

  <?php
  $options = get_option('aod_theme_options');
  $notification = $options['noti'];
  if($notification) {
    $notification_text = $options['noti_text'];
    echo '<div id="notification"><p><i class="fa fa-exclamation-circle"></i> '.$notification_text.'</p></div>';
  }
  ?>