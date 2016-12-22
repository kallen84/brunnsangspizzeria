<?php
/**
 * The template used for displaying page "Event" content
 *
 * @package Brunnsäng Pizzeria
 */

get_header();

if(have_posts()) {

	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
	// Get featured image alt text
    $thumbnail_id = get_post_thumbnail_id( $post->ID );
    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>
	<main id="<?php echo $post->post_name; ?>" class="main--event-page container-fluid" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?> alt="<?php echo $alt ?>">
	<?php 
		while(have_posts()) {
			the_post();

			$event_arg = array(
				'post_type' => 'event',
				'posts_per_page' => 10
			);

			$event = new WP_Query($event_arg);
?>	
			<section class="section--event container">
				<section class="section--event-header">
					<header class="section--header">
						<?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
					</header>
				</section>
<?php 
					while($event->have_posts()) {
						$event->the_post();
						$content = get_post_meta(get_the_ID(), 'media_insert');
						$datepicker = get_post_meta(get_the_ID(), 'datepicker');
						add_filter('the_content', 'wpautop');
?>
						<article class="article--event row">
							<h1 class="text-center"><?php the_title(); ?> </h1>
							
							<div class="col-md-6 event--content">
								<?php echo wpautop($content[0]); ?>
								<p class="datepicker"><span>Datum:</span> <?php echo $datepicker[0] ? $datepicker[0]: ''; ?></p>
							</div>

							<div class="col-md-6 event--thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
						</article>
<?php  
					} // while
?>
			</section> <!-- .section-event -->
<?php
		} // while
?>
	</main>
<?php
} // if
get_footer();
