<?php
/**
 * The template used for displaying page "Barn meny" content on Meny-page
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
	<main id="<?php echo $post->post_name; ?>" class="main--menu-page container-fluid" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
		<section id="<?php echo $post->post_name; ?>" class="section--barnmeny section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
<?php
			while(have_posts()) {
				the_post();
?>
				<article class="article--dishes">
					<header class="section--header">
						<?php the_title( '<h2 class="section--title text-center"><span>', '</span></h2>' ); ?>
						<?php the_content(); ?>
					</header>
					
					<section class="section--content">
						<div class="row"> <!-- .row1 -->
							<div class="col-md-6 col-md-offset-3 barnmeny"> <!-- .fisk -->
								<table class="table">
									<tbody>
<?php 
										if(get_field('barnmeny_pannkakor')) {
											echo '<tr><th><strong>' . get_field('barnmeny_grillkorv') . '</strong></th><th><strong>' . get_field('barnmeny_pris_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('barnmeny_grillkorv_innehall') . '</i></td></tr>'; 

											echo '<tr><th><strong>' . get_field('barnmeny_pannkakor') . '</strong></th><th><strong>' . get_field('barnmeny_pris_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('barnmeny_pannkakor_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('barnmeny_pannkakor_special') . '</strong></th><th><strong>' . get_field('barnmeny_pris_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('barnmeny_pannkakor_special_innehall') . '</i></td></tr>';                                                                                                            
										}  
?>
									</tbody>                                               
								</table> 
							</div> <!-- .barnmeny -->
						</div> <!-- .row -->  
					</section> <!-- .section-content -->
				</article> <!-- .article-dishes -->
<?php
			} // while
?>
		</section>
	</main>
<?php
} // if
get_footer();
