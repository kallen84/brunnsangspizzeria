<?php
/**
 * The template used for displaying page "Hamburgare" content in start-landing-page.php
 *
 * @package Brunnsäng Pizzeria
 */
?>
<?php
	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>

<section id="<?php echo $post->post_name; ?>" class="section--hamburgare section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
    <article class="article--dishes">
        <header class="section--header">
            <?php the_title( '<h2 class="section--title text-center"><span>', '</span></h2>' ); ?>
            <?php the_content(); ?>
        </header>

        <section class="section--content">
            <div class="row"> <!-- .row1 -->
                <div class="col-md-6 col-md-offset-3 hamburgare"> <!-- .hamburgare -->
                    <table class="table">
                        <tbody>
<?php 
                            if(get_field('hamburgare_90g')) {
                                echo '<tr><th><strong>' . get_field('hamburgare_90g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_1') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgare_90g_innehall') . '</i></td></tr>';

                                echo '<tr><th><strong>' . get_field('hamburgare_150g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_2') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgare_150_innehall') . '</i></td></tr>';  

                                echo '<tr><th><strong>' . get_field('hamburgare_200g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_3') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgare_200g_innehall') . '</i></td></tr>';    

                                echo '<tr><th><strong>' . get_field('hamburgare_400g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_7') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgare_400g_innehall') . '</i></td></tr>';                                

                                echo '<tr><th><strong>' . get_field('hamburgertallrik_90g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_4') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgertallrik_90g_innehall') . '</i></td></tr>';     

                                echo '<tr><th><strong>' . get_field('hamburgertallrik_150g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_5') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgertallrik_150g_innehall') . '</i></td></tr>';   

                                echo '<tr><th><strong>' . get_field('hamburgertallrik_200g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_6') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgertallrik_200g_innehall') . '</i></td></tr>';   

                                echo '<tr><th><strong>' . get_field('hamburgertallrik_400g') . '</strong></th><th><strong>' . get_field('hamburgare_pris_8') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('hamburgertallrik_400g_innehall') . '</i></td></tr>';                                                                       
                            }  
?>
                            <tr>
                                <th class="title--hamburger-extra">Extra tillbehör</th>       
                            </tr> 
<?php 
                            if(get_field('hamburgare_tillbehor_ost')) {
                                echo '<tr><th><strong>' . get_field('hamburgare_tillbehor_jalapeno') . '</strong></th><th><strong>' . get_field('hamburgare_tillbehor_pris_1') . '</strong></th></tr>';

                                echo '<tr><th><strong>' . get_field('hamburgare_tillbehor_ost') . '</strong></th><th><strong>' . get_field('hamburgare_tillbehor_pris_1') . '</strong></th></tr>';                                                                       

                                echo '<tr><th><strong>' . get_field('hamburgare_tillbehor_bacon') . '</strong></th><th><strong>' . get_field('hamburgare_tillbehor_pris_2') . '</strong></th></tr>';                                                                       

                                echo '<tr><th><strong>' . get_field('hamburgare_tillbehor_ägg') . '</strong></th><th><strong>' . get_field('hamburgare_tillbehor_pris_2') . '</strong></th></tr>';                                                                       
                            }  
?>                            
                        </tbody>                                           
                    </table> 
                </div> <!-- .hamburgare -->
            </div> <!-- .row -->  
        </section> <!-- .section-content -->
    </article> <!-- .article-dishes -->
</section>

