<?php
/**
 * The template used for displaying page "Hitta oss" content on Start-page
 *
 * @package Brunnsäng Pizzeria
 */
?>

<?php 
get_header();

if(have_posts()) {

	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>
	<main class="main container-fluid start-page">
		<section id="<?php echo $post->post_name; ?>" class="row section--hittaoss" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
<?php
			while(have_posts()) {
				the_post();
?>
				<article class="article--hittaoss">
					<header id="section--header" class="col-md-12 section--header">
						<?php the_title( '<h1 class="section--title text-center">', '</h1>' ); ?>
					</header>

					<section class="section--content row">
						<div class="col-md-12" id="map">
							<?php the_content(); ?>
						</div>
					</section>
				</article>
<?php
			} // while
?>
		</section>
	</main>
<?php
} // if
get_footer();
