<?php
/**
 * The template used for displaying page "Öppetider" content on Start-page
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
		<section id="<?php echo $post->post_name; ?>" class="row section--oppetider" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
<?php
			while(have_posts()) {
				the_post();
?>
				<article class="article--oppetider container">
					<header id="section--header" class="section--header">
						<?php the_title( '<h1 class="section--title text-center">', '</h1>' ); ?>
					</header>
					
					<section class="section--content row">
						<div class="col-md-6 col-sm-6 left-col">
<?php
						if(get_field('rubrik_vardagar')) {
							echo '<h2>' . get_field('rubrik_vardagar') . '</h2>';
							echo '<h3>' . get_field('tider_vardagar_oppnar') . '</h3>';
							echo '<h3>' . get_field('tider_vardagar_stanger') . '</h3>';
						} 
?>
						</div>
						<hr/>
						<div class="col-md-6 col-sm-6 right-col">
<?php
						if(get_field('rubrik_helgdagar')) {
							echo '<h2>' . get_field('rubrik_helgdagar') . '</h2>';
							echo '<h3>' . get_field('tider_helgdagar_oppnar') . '</h3>';
							echo '<h3>' . get_field('tider_helgdagar_stanger') . '</h3>';
						} 
?>
						</div>
					</section>

					<footer class="section--footer right-col">
<?php
						if(get_field('lunch_tider')) {
							// Link to menu page (Local)
							//echo '<a href="/brunnsang_pizzeria/wordpress?p=20"><p class="text-center"><i>' . get_field('lunch_tider') . '</i><span class="icon-pizza"></span></p></a>';
							// Link to menu page (online)
							echo '<a href="http://www.brunnsangspizzeria.se?p=16"><p class="text-center"><i>' . get_field('lunch_tider') . '</i><span class="icon-pizza"></span></p></a>';
						} 
?>
					</footer>
				</article>
<?php
			} // while
?>
		</section>
	</main>
<?php
} // if
get_footer();
