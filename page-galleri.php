<?php
/**
 * The template used for displaying page "Galleri" content on Start-page
 *
 * @package Brunnsäng Pizzeria
 */
?>

<?php 
get_header();

if(have_posts()) {
?>
	<main class="main container-fluid start-page">
		<section id="<?php echo $post->post_name; ?>" class="section--galleri">
<?php
			while(have_posts()) {
				the_post();
?>
				<div class="row">
					<div class="container">
						<header id="section--header" class="section--header">
							<?php the_title( '<h1 class="section--title text-center">', '</h1>' ); ?>
						</header>

						<figure class="figure--galleri">
							<div class="col-md-6">
								<div class="img-wrapper">
<?php
								$image = get_field('bild_1');

								if( !empty($image) ) { 
?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php 
								} 
?>   
								</div> <!-- .img-wrapper -->
							</div> <!-- .col-md-6 -->    
							<div class="col-md-6">
								<div class="img-wrapper">
<?php
								$image = get_field('bild_2');

								if( !empty($image) ) { 
?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php 
								} 
?>   
								</div> <!-- .img-wrapper -->
							</div> <!-- .col-md-6 -->     
							<div class="col-md-6">
								<div class="img-wrapper">
<?php
								$image = get_field('bild_3');

								if( !empty($image) ) { 
?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php 
								} 
?>   
								</div> <!-- .img-wrapper -->
							</div> <!-- .col-md-6 -->    
							<div class="col-md-6">
								<div class="img-wrapper">
<?php
								$image = get_field('bild_4');

								if( !empty($image) ) { 
?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php 
								} 
?>   
								</div> <!-- .img-wrapper -->
							</div> <!-- .col-md-6 -->           
						</figure>
					</div> <!-- .container -->
				</div> <!-- .row -->
<?php
			} // while
?>
		</section>
	</main>
<?php
} // if
get_footer();
