<?php get_header(); ?>
<?php
   $args = array(
     'post_type' => 'actualites',
     'posts_per_page' => 3,
   );
 query_posts( $args );
 	if ( have_posts() ) :
		while ( have_posts() ) : the_post();?>
		<article class="">
		<img class="img-card" src="<?php echo catch_that_image()?>"></img>
			<div class="card_text">
			<?php the_title( '<h2>', '</h2>' );?>
			<p><?php echo get_the_excerpt(); ?></p>
			<div class="">
					<a class="" href="<?php the_permalink(); ?>"> En savoir plus</a>
				</div>
			</div>
		</article>

	<?php	endwhile;
	endif;
 ?>

<?php get_footer(); ?>