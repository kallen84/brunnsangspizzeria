<?php
/**
 * The template used for displaying page "Om oss" content on Start-page
 *
 * @package Brunnsäng Pizzeria
 */
?>

<?php 
get_header();

if(have_posts()) {
?>
	<main class="main container-fluid start-page">
		<section id="<?php echo $post->post_name; ?>" class="container section--omoss">
<?php
			while(have_posts()) {
				the_post();
?>
				<article class="article--omoss">
					<div class="row center section--header">
						<header id="section--header" class="section--header">
							<?php the_title( '<h1 class="section--title text-center">', '</h1>' ); ?>
						</header>
					</div>

					<div class="section--content row">
						<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 text">
							<?php the_content(); ?>
							<footer class=" section--footer text-center">
								<p>
									<i>Ring oss </i>
									<a href="tel:0855036200"><span class="icon-phone"></span></a>
									<i> eller maila oss</i> 
									<a href="mailto:kontakt@brunnsangspizzeria.se"><span class="icon-mail"></span></a>
								</p>
							</footer>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 container--svg">
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-black.svg" alt="Picture of the companys black svg logo" />             
						</div>
					</div>
				</article>
<?php
			} // while
?>
		</section>
	</main>
<?php
} // if
get_footer();
