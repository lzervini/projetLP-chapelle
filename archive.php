<?php get_header(); ?>

<?php
	   $args = array(
		   'post_type' => 'actualites',
		   'posts_per_page' => 3,
		);
		?>
		<section>
			<div class="marginWidth">
				<h2>Actualités</h2>
				<div class="card_all">
				<?php query_posts( $args );
					  if ( have_posts() ) :
						 while ( have_posts() ) : the_post();?>
		 
							 <article class="card">
								 <img class="card-image" src="<?php echo catch_that_image()?>"></img>
								 <div class="card-text">
									 <?php the_title( '<h4>', '</h4>' );?>
									 <p><?php echo get_the_excerpt(); ?></p>
									 <a class="button-card-link" href="<?php the_permalink(); ?>"> En savoir plus</a>
								 </div>
							 </article>
				 <?php
	 
			 endwhile;
			 endif;
			 wp_reset_query( );
	 ?>
			  </div>
			</div>
		</section>

<?php get_footer(); ?>