<?php
/**
 * The template used for displaying page "Kötträtter" content on Meny-page
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
		<section id="<?php echo $post->post_name; ?>" class="section--kottratter section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
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
							<div class="col-md-6 col-md-offset-3 kottratter"> <!-- .kottratter -->
								<table class="table">
									<tbody>
<?php 
										if(get_field('kottratter_oxfile_planka')) {
											echo '<tr><th><strong>' . get_field('kottratter_oxfile_planka') . '</strong></th><th><strong>' . get_field('kottratter_pris_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_oxfile_planka_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('kottratter_oxfilemedaljong') . '</strong></th><th><strong>' . get_field('kottratter_pris_8') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_oxfilemedaljong_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('kottratter_filet') . '</strong></th><th><strong>' . get_field('kottratter_pris_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_filet_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('kottratter_biffplanka') . '</strong></th><th><strong>' . get_field('kottratter_pris_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_biffplanka_innehall') . '</i></td></tr>';                                    

											echo '<tr><th><strong>' . get_field('kottratter_flaskfileplanka') . '</strong></th><th><strong>' . get_field('kottratter_pris_9') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_flaskfileplanka_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('kottratter_flaskfile_oscar') . '</strong></th><th><strong>' . get_field('kottratter_pris_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_flaskfile_oscar_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('kottratter_biffstek') . '</strong></th><th><strong>' . get_field('kottratter_pris_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_biffstek_innehall') . '</i></td></tr>';   

											echo '<tr><th><strong>' . get_field('kottratter_grillbiff') . '</strong></th><th><strong>' . get_field('kottratter_pris_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_grillbiff_innehall') . '</i></td></tr>';    

											echo '<tr><th><strong>' . get_field('kottratter_schweizerschnitzel') . '</strong></th><th><strong>' . get_field('kottratter_pris_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_schweizerschnitzel_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('kottratter_flasknoisette') . '</strong></th><th><strong>' . get_field('kottratter_pris_5') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_flasknoisette_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('kottratter_panerad_schnitzel') . '</strong></th><th><strong>' . get_field('kottratter_pris_6') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_panerad_schnitzel_innehall') . '</i></td></tr>';    

											echo '<tr><th><strong>' . get_field('kottratter_kycklingfile') . '</strong></th><th><strong>' . get_field('kottratter_pris_6') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_kycklingfile_innehall') . '</i></td></tr>';     

											echo '<tr><th><strong>' . get_field('kottratter_flasknoisette_nobis') . '</strong></th><th><strong>' . get_field('kottratter_pris_7') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('kottratter_flasknoisette_nobis_innehall') . '</i></td></tr>';                                                                       
										}  
?>
									</tbody>                                               
								</table> 
							</div> <!-- .kottratter -->
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
