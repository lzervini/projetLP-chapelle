<?php get_header(); ?>
<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : 
			the_post();?>
			<?php the_content('');

		 endwhile;
 	endif;?>
		

<!-- Page demarche -->
	<?php if (is_page('Liste des démarches')){
		?><h1> <?php the_title(); ?></h1>
 	<?php if ( have_posts() ) :
 		while ( have_posts() ) : 
			the_post();?>
			<?php the_content('');
			
		endwhile;
 	endif; ?> 
		<div class="borderDermarche">
		<?php if( have_rows( 'demarche')): ?>
		<div class="demarches">
	  <?php while(have_rows('demarche')): the_row(); 
		$img_demarche = get_sub_field('logo_demarche');
		$text_demarche = get_sub_field('titre_demarche');
		$url_demarche = get_sub_field('lien_demarche')?>
		<a href="<?php echo $url_demarche?>">
		<div class="demarche-card">
			  <img class ="img-demarche" src="<?php echo $img_demarche['url']; ?>"></img>  
			 <p><?php echo $text_demarche; ?></p>
		</div>
	</a>
	<?php

	endwhile;
endif;
} ?>
</div>


<!-- Page Urbanisme -->
<?php if (is_page('Urbanisme')){
		?>
		<h1> <?php the_title(); ?></h1>
		<?php
	   $args = array(
		 'post_type' => 'urbanisme',
		 'posts_per_page' => 4,
	   );
	   ?>
	   <div class="card_sujets">
		   <?php query_posts( $args );
		 if ( have_posts() ) :
			while ( have_posts() ) : the_post();?>
			<div class="cardSeule">
		<div class="">
		<?php the_title( '<h4>', '</h4>' );?>
		<p><?php echo get_the_excerpt(); ?></p>
			<a class="card-link" href="<?php the_permalink(); ?>"> En savoir plus</a>
		</div>
		 </div>
		 <hr class="littleGreen">

<?php
		endwhile;
	endif;
	}?>

<!-- Page Etat civil -->
<?php if (is_page('Election')){
		?>
		<h1> <?php the_title(); ?></h1>
		<?php
	   $argsTest = array(
		 'post_type' => 'election',
		 'posts_per_page' => '3',
	   );
	   ?>
	   <div class="card_sujets">
		   <?php query_posts( $argsTest );
		 if ( have_posts() ) :
			while ( have_posts() ) : the_post();?>
			<div class="cardSeule">
		<div class="">
		<?php the_title( '<h4>', '</h4>' );?>
		<p><?php echo get_the_excerpt(); ?></p>
			<a class="card-link" href="<?php the_permalink(); ?>"> En savoir plus</a>
		</div>
		 </div>
		 <hr class="littleGreen">

<?php
		endwhile;
	endif;
	}?>

<!-- Page démarche à distance -->
<?php if (is_page('Démarches à distances')){
		?>
		<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : 
			the_post();?>
			<?php the_content('');

		 endwhile;
 	endif;
		
} ?>
</div>
 
 <?php get_footer(); ?>