<?php get_header(); ?>
		

<!-- Page demarche -->
	<?php if (is_page('Liste des démarches')){
		?>
		<section class="borderDermarche marginWidth">
		<h2> <?php the_title(); ?></h2>
		<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : 
			the_post();?>
			<?php the_content('');

		 endwhile;
 	endif;?>
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

	endwhile;?>
	</div>
</section>
<?php endif;
  get_footer(); 
} ?>


<!-- Page Urbanisme -->
<?php if (is_page('Urbanisme')){
		?>
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
	} ?>

<!-- Page Elections -->
<?php if (is_page('Elections')){
		?>
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

<!-- Page Etat civil -->
<?php if (is_page('Etat-civil')){
		?>
		<?php
	   $argsTest = array(
		 'post_type' => 'etat_civil',
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

<!-- Page Autorisations -->
<?php if (is_page('Autorisations')){
		?>
		<?php
	   $argsTest = array(
		 'post_type' => 'declaration',
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

<!-- Page Papiers d'identité -->
<?php if (is_page('Papiers d\'identité')){
		?>
		<?php
	   $argsTest = array(
		 'post_type' => 'papiers_id',
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

<!-- Page Démarches à distance -->
<?php if (is_page('Démarches à distance')){
		?>
	<section >
		<div class="marginWidth">
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
		
} ?>

<!-- Page CCAS -->
<?php if (is_page('CCAS')){
		?>
	<section >
		<div class="marginWidth">
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
		
} ?>

<!-- Page CCAS -->
<?php if (is_page('Services de l\'état sur le Territoire de Belfort (90)')){
		?>
	<section >
		<div class="marginWidth">
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
		
} ?>

<!-- Page Conseils municipal -->
<?php if (is_page('Le conseil municipal')){
		?>
	<section >
		<div class="marginWidth">
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
		
} ?>

<!-- SMITCOM -->
<?php if (is_page('SMITCOM')){
		?>
	<section >
		<div class="marginWidth">
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
		
} ?>

<!-- Informations -->
<?php if (is_page('Informations')){
		?>
	<section >
		<div class="marginWidth">
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
		
} ?>

<!-- Page Restauration -->
<?php if (is_page('Restauration')){
		?>
	<section >
		<div class="marginWidth">
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
		
} ?>

 
 <?php get_footer(); 