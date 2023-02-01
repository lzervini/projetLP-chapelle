<?php
/**
 * Template Name: 
 * Template Post Type: urbanismes
 */
get_header();?>

get_header();?>

<section >
	<div class="marginWidth">
		<div class="breadcrumbs"typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>
		<h2> <?php the_title(); ?></h2>
		<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : 
			the_post();?>
			<?php the_content('');?>
		</div>
	</section>

		 <?php endwhile;
 	endif;

get_footer();