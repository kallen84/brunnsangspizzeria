<?php
/**
 * The template used for displaying page "Sallad & Pastasallad" content on Meny-page
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
		<section id="<?php echo $post->post_name; ?>" class="section--sallad section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
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
							<div class="col-md-6 col-md-offset-3 sallad"> <!-- .sallad -->
								<table class="table">
									<thead> 
										<tr>
											<th>Prisklass</th>
<?php                     
												if(get_field('sallad_pris')) {
													echo '<th>' . get_field('sallad_pris') . '</th>';
												}        
?>                    
										</tr>     
									</thead>                        
									<tbody>
<?php
										if(get_field('sallad_kebabsallad')) {
											echo '<tr><th><strong>' . get_field('sallad_kebabsallad') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('sallad_kebabsallad_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('sallad_kycklingsallad') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('sallad_kycklingsallad_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('sallad_ost_&_skinksallad') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('sallad_ost_&_skinksallad_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('sallad_tonfisksallad') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('sallad_tonfisksallad_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('sallad_skink_&_raksallad') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('sallad_skink_&_raksallad_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('sallad_grekisksallad') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('sallad_grekisksallad_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('sallad_gyrossallad') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('sallad_gyrossallad_innehall') . '</i></td></tr>';                              
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .sallad -->
						</div>
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
