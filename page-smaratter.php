<?php
/**
 * The template used for displaying page "Smårätter" content on Meny-page
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
		<section id="<?php echo $post->post_name; ?>" class="section--smaratter section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
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
							<div class="col-md-6 col-md-offset-3 smaratter"> <!-- .smaratter -->
								<table class="table">
									<thead> 
										<tr>
											<th>Prisklass</th>
<?php                     
												if(get_field('smaratter_pris_')) {
													echo '<th>' . get_field('smaratter_pris_') . '</th>';
												}        
?>                    
										</tr>     
									</thead>                        
									<tbody>
<?php
										if(get_field('smaratter_stekt_falukorv')) {
											echo '<tr><th><strong>' . get_field('smaratter_stekt_falukorv') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('smaratter_stekt_falukorv_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('smaratter_lovbit') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('smaratter_lovbit_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('smaratter_bacon') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('smaratter_bacon_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('smaratter_pytt_i_panna') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('smaratter_pytt_i_panna_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('smaratter_omelette') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('smaratter_omelette_innehall') . '</i></td></tr>';    

											echo '<tr><th><strong>' . get_field('smaratter_vegetarisk') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('smaratter_vegetarisk_innehall') . '</i></td></tr>';                                                      
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .smaratter -->
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
