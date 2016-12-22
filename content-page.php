<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package One Page Theme
 */
?>
<?php
	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>
<section id="<?php echo $post->post_name; ?>" class="section--pages" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
	
	<header class="section--header">
		<?php the_title( '<h1 class="section--title">', '</h1>' ); ?>
	</header>

	<div class="section--content row">
	
		<div class="col-md-6">
			<?php the_content(); ?>
		</div>


		<div class="col-md-6"><?php //the_post_thumbnail(); ?></div>

	</div>

	<footer class="section--footer">
		<p>footer</p>
	</footer>
</section>
