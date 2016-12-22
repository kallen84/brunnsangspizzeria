<?php
/**
 * The template used for displaying page "Pizza" content on Meny-page
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
		<section id="<?php echo $post->post_name; ?>" class="section--pizza section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
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
							<div class="col-lg-4 col-md-6 prisklass-1"> <!-- .prisklass-1 -->
								<table class="table">
									<thead> 
										<tr>
											<th>Prisklass 1</th>
<?php                     
												if(get_field('prisklass_1_pris')) {
													echo '<th>' . get_field('prisklass_1_pris') . '</th>';
												}        
?>                    
										</tr>     
									</thead>
									<tbody>
<?php
										if(get_field('pizza_1')) {
											echo '<tr><th><strong>' . get_field('pizza_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_2_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_3_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_4_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_5') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_5_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_6') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_6_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_7') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_7_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_8') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_8_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_9') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_9_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_10') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_10_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_11') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_11_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('pizza_12') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_12_innehall') . '</i></td></tr>';                                
											
											echo '<tr><th><strong>' . get_field('pizza_13') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_13_innehall') . '</i></td></tr>';                                

											echo '<tr><th><strong>' . get_field('pizza_14') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('pizza_14_innehall') . '</i></td></tr>';                                
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .prisklass-1 -->

							<div class="col-lg-4 col-md-6 prisklass-2"> <!-- .prisklass-2 -->
								<table class="table">
									<thead> 
										<tr>
											<th>Prisklass 2</th>
<?php                     
												if(get_field('prisklass_2_pris')) {
													echo '<th>' . get_field('prisklass_2_pris') . '</th>';
												}        
?>                    
										</tr>     
									</thead>
									<tbody>
<?php
										if(get_field('prisklass_2_pizza_1')) {
											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_2_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_3_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_4_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_5') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_5_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_6') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_6_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_7') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_7_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_8') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_8_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_9') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_9_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_10') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_10_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_11') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_11_innehall') . '</i></td></tr>';                                
											
											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_12') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_12_innehall') . '</i></td></tr>';                               

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_13') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_13_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_14') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_14_innehall') . '</i></td></tr>'; 

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_15') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_15_innehall') . '</i></td></tr>'; 

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_16') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_16_innehall') . '</i></td></tr>'; 

											echo '<tr><th><strong>' . get_field('prisklass_2_pizza_17') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_2_pizza_17_innehall') . '</i></td></tr>';                                                                                                                                                                
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .prisklass-2 -->

							<div class="col-lg-4 col-md-12 prisklass-3"> <!-- .prisklass-3 -->
								<table class="table">
									<thead> 
										<tr>
											<th>Prisklass 3</th>
<?php                     
												if(get_field('prisklass_3_pris')) {
													echo '<th>' . get_field('prisklass_3_pris') . '</th>';
												}        
?>                    
										</tr>     
									</thead>
									<tbody>
<?php
										if(get_field('prisklass_3_pizza_1')) {
											echo '<tr><th><strong>' . get_field('prisklass_3_pizza_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_3_pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_3_pizza_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_3_pizza_2_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_3_pizza_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_3_pizza_3_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_3_pizza_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_3_pizza_4_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_3_pizza_5') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_3_pizza_5_innehall') . '</i></td></tr>';                                              
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .prisklass-3 -->  
					</div> <!-- .row1 -->

						<div class="row"> <!-- .row2 -->
							<div class="col-lg-4 col-md-6 prisklass-4"> <!-- .prisklass-4 -->
								<table class="table">
									<thead> 
										<tr>
											<th>Prisklass 4</th>
<?php                     
												if(get_field('prisklass_4_pris')) {
													echo '<th>' . get_field('prisklass_4_pris') . '</th>';
												}        
?>                    
										</tr>     
									</thead>
									<tbody>
<?php
										if(get_field('prisklass_4_pizza_1')) {
											echo '<tr><th><strong>' . get_field('prisklass_4_pizza_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_4_pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_4_pizza_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_4_pizza_2_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_4_pizza_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_4_pizza_3_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_4_pizza_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_4_pizza_4_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_4_pizza_5') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_4_pizza_5_innehall') . '</i></td></tr>';   

											echo '<tr><th><strong>' . get_field('prisklass_4_pizza_6') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_4_pizza_6_innehall') . '</i></td></tr>';                                                                            
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .prisklass-4 -->    

							<div class="col-lg-4 col-md-6 prisklass-5"> <!-- .prisklass-5 -->
								<table class="table">
									<thead> 
										<tr>
											<th>Prisklass 5</th>
<?php                     
												if(get_field('prisklass_5_pris')) {
													echo '<th>' . get_field('prisklass_5_pris') . '</th>';
												}        
?>                    
										</tr>     
										<tr>
											<th style="padding: 0 0 20px 20px;font-size: 1.2em;"><i>(MOZARELLA)</i></th>
										</tr>
									</thead>
									<tbody>
<?php
										if(get_field('prisklass_5_pizza_1')) {
											echo '<tr><th><strong>' . get_field('prisklass_5_pizza_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_5_pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_5_pizza_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_5_pizza_2_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_5_pizza_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_5_pizza_3_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_5_pizza_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_5_pizza_4_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('prisklass_5_pizza_5') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_5_pizza_5_innehall') . '</i></td></tr>';    

											echo '<tr><th><strong>' . get_field('prisklass_5_pizza_6') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('prisklass_5_pizza_6_innehall') . '</i></td></tr>';                                                                                                          
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .prisklass-5 -->   

							<div class="col-lg-4 col-md-12 mexikanska"> <!-- .mexikanska -->
								<table class="table">
									<thead> 
										<tr>
											<th>Mexikanska</th>          
										</tr>     
									</thead>
									<tbody>
<?php 
										if(get_field('mexikanska_pizza_1')) {
											echo '<tr><th><strong>' . get_field('mexikanska_pizza_1') . '</strong></th><th><strong>' . get_field('mexikanska_pris_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('mexikanska_pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('mexikanska_pizza_2') . '</strong></th><th><strong>' . get_field('mexikanska_pris_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('mexikanska_pizza_2_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('mexikanska_pizza_3') . '</strong></th><th><strong>' . get_field('mexikanska_pris_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('mexikanska_pizza_3_innehall') . '</i></td></tr>';    

											echo '<tr><th><strong>' . get_field('mexikanska_pizza_4') . '</strong></th><th><strong>' . get_field('mexikanska_pris_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('mexikanska_pizza_4_innehall') . '</i></td></tr>';                                                                                             
																					
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .mexikanska -->                   
						</div><!-- .row2 -->    

						<div class="row"> <!-- .row3 -->
						<div class="col-lg-4 col-md-6 fetaost"> <!-- .fetaost -->
								<table class="table">
									<thead> 
										<tr>
											<th>Fetaost</th>
<?php                     
												if(get_field('fetaost_pris')) {
													echo '<th>' . get_field('fetaost_pris') . '</th>';
												}        
?>                    
										</tr>     
									</thead>
									<tbody>
<?php
										if(get_field('fetaost_pizza_1')) {
											echo '<tr><th><strong>' . get_field('fetaost_pizza_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('fetaost_pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('fetaost_pizza_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('fetaost_pizza_3_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('fetaost_pizza_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('fetaost_pizza_3_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('fetaost_pizza_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('fetaost_pizza_4_innehall') . '</i></td></tr>';                                                                            
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .fetaost --> 

							<div class="col-lg-4 col-md-6 inbakade"> <!-- .inbakade -->
								<table class="table">
									<thead> 
										<tr>
											<th>Inbakade</th>          
										</tr>     
									</thead>
									<tbody>
<?php 
										if(get_field('inbakade_pizza_1')) {
											echo '<tr><th><strong>' . get_field('inbakade_pizza_1') . '</strong></th><th><strong>' . get_field('inbakade_pris_1') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('inbakade_pizza_1_innehall') . '</i></td></tr>';

											echo '<tr><th><strong>' . get_field('inbakade_pizza_2') . '</strong></th><th><strong>' . get_field('inbakade_pris_2') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('inbakade_pizza_2_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('inbakade_pizza_3') . '</strong></th><th><strong>' . get_field('inbakade_pris_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('inbakade_pizza_3_innehall') . '</i></td></tr>';    

											echo '<tr><th><strong>' . get_field('inbakade_pizza_4') . '</strong></th><th><strong>' . get_field('inbakade_pris_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('inbakade_pizza_4_innehall') . '</i></td></tr>';  

											echo '<tr><th><strong>' . get_field('inbakade_pizza_5') . '</strong></th><th><strong>' . get_field('inbakade_pris_3') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('inbakade_pizza_5_innehall') . '</i></td></tr>';    

											echo '<tr><th><strong>' . get_field('inbakade_pizza_6') . '</strong></th><th><strong>' . get_field('inbakade_pris_4') . '</strong></th></tr>';
											echo '<tr><td><i>' . get_field('inbakade_pizza_6_innehall') . '</i></td></tr>';                                                                                                                                                          
										}  
?>
									</tbody>
								</table> 
							</div> <!-- .inbakade -->      

							<div class="col-lg-4 col-md-12 dubbelbotten"> <!-- .dubbelbotten -->
								<table  class="table">
									<thead> 
										<tr>
											<th>Dubbelbotten</th>
<?php                     
												if(get_field('dubbelbotten_pris')) {
													echo '<th>' . get_field('dubbelbotten_pris') . '</th>';
												}        
?>                    
										</tr>     
									</thead>
									<tbody>
<?php 
										if(get_field('valfria_ingredienser')) {
											echo '<tr><th><strong>' . get_field('valfria_ingredienser') . '</strong></th></tr>';
																					
										}  
?>
									</tbody>
								</table> 
									
							</div> <!-- .dubbelbotten -->                                

						</div> <!-- .row3 -->

						<div class="row"> <!-- .row4 -->
							<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 extra">
								<table class="table extra-tillbehor">
									<thead> 
										<tr>
											<th>Extra Tillbehör</th>                
										</tr>     
									</thead>
									<tbody>
<?php 
										if(get_field('extra_vitlokssas')) {
											echo '<tr><th><strong>' . get_field('extra_oxfile') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_4') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_kebab') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_gyros') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_kyckling') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_skinka') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_rakor') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_salami') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_tonfisk') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_kottfars') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_musslor') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_sardeller') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_bacon') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_gorgonzola') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_mozzarella') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_fetaost') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_tillbehor_ovrigt') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_1') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_vitlokssas') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_kebabsas') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_bearnaisesas') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_tzatziki') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_3') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_tomatsas') . '</strong></th><th><strong>' . get_field('extra_tillbehor_pris_2') . '</strong></th></tr>';
											echo '<tr><th><strong>' . get_field('extra_pizzasallad') . '</strong></th><th><strong>' . get_field('extra_tillbehor_ingar') . '</strong></th></tr>';                                                                
										}  
?>
									</tbody>
								</table>    
							</div> <!-- .col extra -->
						</div> <!-- .row4 -->
						
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
