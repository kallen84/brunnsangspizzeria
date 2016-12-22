<?php
/**
 * The template used for displaying page "Fisk" content in start-landing-page.php
 *
 * @package Brunnsäng Pizzeria
 */
?>
<?php
	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>

<section id="<?php echo $post->post_name; ?>" class="section--fisk section--dishes" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
    <article class="article--dishes">
        <header class="section--header">
            <?php the_title( '<h2 class="section--title text-center"><span>', '</span></h2>' ); ?>
            <?php the_content(); ?>
        </header>
        
        <section class="section--content">
            <div class="row"> <!-- .row1 -->
                <div class="col-md-6 col-md-offset-3 fisk"> <!-- .fisk -->
                    <table class="table">
                        <tbody>
<?php 
                            if(get_field('fisk_laxplanka')) {
                                echo '<tr><th><strong>' . get_field('fisk_laxplanka') . '</strong></th><th><strong>' . get_field('fisk_pris_1') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('fisk_laxplanka_innehall') . '</i></td></tr>';

                                echo '<tr><th><strong>' . get_field('fisk_torskfileplanka') . '</strong></th><th><strong>' . get_field('fisk_pris_2') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('fisk_torskfileplanka_innehall') . '</i></td></tr>';  

                                echo '<tr><th><strong>' . get_field('fisk_rodspattafileplanka') . '</strong></th><th><strong>' . get_field('fisk_pris_2') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('fisk_rodspattafileplanka_innehall') . '</i></td></tr>';                                  

                                echo '<tr><th><strong>' . get_field('fisk_laxfile') . '</strong></th><th><strong>' . get_field('fisk_pris_3') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('fisk_laxfile_innehall') . '</i></td></tr>';     

                                echo '<tr><th><strong>' . get_field('fisk_rodspattafile') . '</strong></th><th><strong>' . get_field('fisk_pris_3') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('fisk_rodspattafile_innehall') . '</i></td></tr>';   

                                echo '<tr><th><strong>' . get_field('fisk_torskfile') . '</strong></th><th><strong>' . get_field('fisk_pris_3') . '</strong></th></tr>';
                                echo '<tr><td><i>' . get_field('fisk_torskfile_innehall') . '</i></td></tr>';                                                                                                                                         
                            }  
?>
                        </tbody>                                               
                    </table> 

                </div> <!-- .fisk -->
            </div> <!-- .row -->  
        </section> <!-- .section-content -->
    </article> <!-- .article-dishes -->
</section>

