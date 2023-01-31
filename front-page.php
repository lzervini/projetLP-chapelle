<?php get_header(); ?>
	<h1>Actualités</h1>
	<?php
	   $args = array(
		 'post_type' => 'actualites',
		 'posts_per_page' => 3,
	   );
	   ?>
	   <div class="card_all">
		   <?php query_posts( $args );
		 if ( have_posts() ) :
			while ( have_posts() ) : the_post();?>
	
			<article class="card">
					<img class="card-image" src="<?php echo catch_that_image()?>"></img>
				<div class="card-text">
				<?php the_title( '<h4>', '</h4>' );?>
				<p><?php echo get_the_excerpt(); ?></p>
					<a class="card-link" href="<?php the_permalink(); ?>"> En savoir plus</a>
				</div>
			</article>
			<div>

		<?php 
		if( have_rows( 'services' ) ): ?>
			<div class="services">
  		<?php while(have_rows('services')): the_row(); 
			$img_services = get_sub_field('img_services');
			$text_services = get_field('text_services');?>
			<div class="cardService">
  				<img src="<?php echo $img_services['url']; ?>"></img>  
				<p> <?php echo $text_services; ?></p>
			</div>
		<?php

		endwhile;
		endif;
?>
		</div>


	<?php	endwhile;
	endif;
 ?>

</div>
<?php 

	if( have_rows( 'services' ) ): ?>
		<div class="services">
  			<?php while(have_rows('services')): the_row(); 
$icone    = get_sub_field('img_services');
$text    = get_sub_field('text_services');?>
		<div class="cardService">
  			<img src="<?php echo $icone['url']; ?>"></img>  
			<h2> <?php echo $title; ?></h2>
				<p> <?php echo $text; ?></p>
		</div>
	<?php
			endwhile;
	endif;
?>


<?php get_footer(); ?>