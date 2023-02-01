<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
	  <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <?php wp_head(); ?>
	</head>
    <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header class="header headroom">
		<div class="header__start">
		    <?php 
	            if ( has_custom_logo() ) :
	              $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) );
	          ?>
		    <a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Logo de la mairie">
		        <img src="<?php echo $logo[0]; ?>" class="style-svg"/>
		    </a>
	          <?php endif; ?>
	    </div>
        <nav class="header__menu menu" id="mainNav" aria-label="Menu principal">
	    <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'depth' => 2,
                'menu_class' => 'menu__list',
              ));
            ?>
	    </nav>
    </header>
    <main>
       