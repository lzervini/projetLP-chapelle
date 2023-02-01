<?php get_header(); ?>
<?php the_content('');?>
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
		 <section class="bgColor">
			<div class="marginWidth">
				<h2>Nos services</h2>
				<?php 
			   if( have_rows( 'services' ) ): ?>
				<div class="services ">
				 		<?php while(have_rows('services')): the_row(); ?>
					<a href="<?php echo $lien_services?>">
				   <?php $img_services = get_sub_field('img_services');
				   $text_services = get_sub_field('text_services');
				   $lien_services = get_sub_field('lien_services');?>
				   <div class="cardService">
						 <img src="<?php echo $img_services['url']; ?>"></img>  
					   <p> <?php echo $text_services; ?></p>
				</div>
			   </a>
				   
				   <?php	endwhile;
		   endif;
		   ?>
		   </div>
			</div>
		 </section>
		   <section>
			<div id="mapid"></div>
		   </section>
		   <script type="text/javascript">
  var map = L.map('mapid').setView([47.7055, 6.8202], 16);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  
</script>


 <?php get_footer(); ?>

