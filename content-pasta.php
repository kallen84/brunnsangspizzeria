<?php
/**
 * The template used for displaying page "Pasta" content in start-landing-page.php
 *
 * @package Brunnsäng Pizzeria
 */
?>
<?php
	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>

<section id="<?php echo $post->post_name; ?>" class="section--pasta section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
    <article class="article--dishes">
        <header class="section--header">
            <?php the_title( '<h2 class="section--title text-center"><span>', '</span></h2>' ); ?>
            <?php the_content(); ?>
        </header>
        
        <section class="section--content">
            <div class="row"> <!-- .row1 -->
                <div class="col-md-6 col-md-offset-3 pasta"> <!-- .pasta -->
                    <table class="table">
                        <tbody>
<?php 
                            if(get_field('pasta_oxfile_flask_pasta')) {
                                echo '<tr><th><strong>' . get_field('pasta_oxfile_flask_pasta') . '</strong></th><th><strong>' . get_field('pasta_pris_1') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('pasta_oxfile_flask_pasta_innehall') . '</i></td></tr>';

                                echo '<tr><th><strong>' . get_field('pasta_kyclingpasta') . '</strong></th><th><strong>' . get_field('pasta_pris_1') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('pasta_kycklingpasta_innehall') . '</i></td></tr>';  

                                echo '<tr><th><strong>' . get_field('pasta_skaldjurspasta') . '</strong></th><th><strong>' . get_field('pasta_pris_1') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('pasta_skaldjurspasta_innehall') . '</i></td></tr>';                                  

                                echo '<tr><th><strong>' . get_field('pasta_pasta_carbonara') . '</strong></th><th><strong>' . get_field('pasta_pris_1') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('pasta_pasta_carbonara_innehall') . '</i></td></tr>';    

                                echo '<tr><th><strong>' . get_field('pasta_pasta_bolognese') . '</strong></th><th><strong>' . get_field('pasta_pris_2') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('pasta_pasta_bolognese_innehall') . '</i></td></tr>';   

                                echo '<tr><th><strong>' . get_field('pasta_lasagne_al_forno') . '</strong></th><th><strong>' . get_field('pasta_pris_2') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('pasta_pasta_lasagne_al_forno_innehall') . '</i></td></tr>';                                                                          
                            }  
?>
                        </tbody>                                               
                    </table> 
                </div> <!-- .pasta -->
            </div> <!-- .row -->  
        </section> <!-- .section-content -->
    </article> <!-- .article-dishes -->
</section>

