<?php

	// Intégration du fichier avec les appels add_action().
	require_once get_template_directory() . '/inc/actions.php';
	
	// Intégration du fichier avec les fonctions de template.
	require_once get_template_directory() . '/inc/template-functions.php';


	//Intégration de la éème image d'un article dans les archives 
	function catch_that_image() {
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches[1] [0];
		
		if(empty($first_img)){ //Defines a default image
		$first_img = "/images/default.jpg";
		}
		return $first_img;
		}
		
