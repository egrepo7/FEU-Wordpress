<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- FONTAWESOME -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fontawesome/css/fontawesome.css">

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css">

<!-- FONT-AWESOME -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Homenaje" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">


<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- [if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<header class="site-header">
    
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container">
                    <a href="/" class="navbar-brand">
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/feu-international-logo.png" alt="navbar brand logo" width="75px"> FEU-NRMF
                    </a><!-- end navbar brand -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myTogglerNav" aria-controls="myTogglerNav" aria-expanded="false" aria-label="Toggle Navigation">
                            <i class="fas fa-bars fa-lg"></i>
					</button>
					
					<?php

						wp_nav_menu( array( 
							'theme_location'	=> 'primary',
							'depth'				=> '2',
							'container'			=> 'div',
							'container_class'	=> 'navbar-collapse collapse',
							'container_id'		=> 'myTogglerNav',
							'menu_class'		=> 'navbar-nav ml-auto',
							'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
							'walker'			=> new wp_bootstrap_navwalker(),
						) );
						
					?>


            </div><!-- end container -->
        </nav><!-- end nav -->
    </header><!-- endHeader -->

	<div id="content" class="site-content">
