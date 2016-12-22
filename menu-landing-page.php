<?php
/**
 * Template Name: Menu Landing Page
 */

get_header();

if(have_posts()) {

    global $post;
    $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    $thumb_url = $thumb_url_array[0];
?>
    <main id="<?php echo $post->post_name; ?>" class="main--menu-page container-fluid" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>

        <div class="wrapper--menu-page">
            <section class="section--menu-page">
                <header class="header--menu">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header>
            </section>

            <section class="section--lunch">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3"> <!-- .col -->
<?php                     
                            if(get_field('lunch_rubrik')) {
                                echo '<div class="outer-wrapper"><div class="border-wrapper"><h2>' . get_field('lunch_rubrik') . '<span>' . get_field('lunch_pris') . '</span></h2></div></div>';
                                echo '<p><i>' . get_field('lunch_innehall') . '</i></p>';
                                echo '<p>' . get_field('lunch_lunchtid') . '</p>';                        
                            }  
?>
                            <a href="tel:0855036200"><p><i class="fa fa-phone-square icon-phone hvr-buzz-out" aria-hidden="true"></i></p></a>
                    </div> <!-- .col -->
                </div> <!-- .row -->
            </section> <!-- .section-lunch -->
<?php
            // query for the about page
            $page_query = new WP_Query( 'pagename=pizza' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'pizza' ); 
            }
            // reset post data (important!)
            wp_reset_postdata();      

            $page_query = new WP_Query( 'pagename=kebab' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'kebab' ); 
            }
            wp_reset_postdata();          

            $page_query = new WP_Query( 'pagename=sallad-pastasallad' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'sallad' ); 
            }
            wp_reset_postdata();    

            $page_query = new WP_Query( 'pagename=hamburgare' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'hamburgare' ); 
            }
            wp_reset_postdata();    

            $page_query = new WP_Query( 'pagename=kottratter' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'kottratter' ); 
            }
            wp_reset_postdata();    

            $page_query = new WP_Query( 'pagename=pasta' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'pasta' ); 
            }
            wp_reset_postdata();    

            $page_query = new WP_Query( 'pagename=fisk' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'fisk' ); 
            }
            wp_reset_postdata();    
            
            $page_query = new WP_Query( 'pagename=smaratter' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'smaratter' ); 
            }
            wp_reset_postdata();    

            $page_query = new WP_Query( 'pagename=barn-meny' );
            while ( $page_query->have_posts() ) { 
                $page_query->the_post();
                get_template_part( 'content', 'barn-meny' ); 
            }
            wp_reset_postdata();                  
?>
        </div> <!-- .wrapper-menu-page -->
    </main>

    <!-- <a href="http://localhost:3000/brunnsang_pizzeria/wordpress/meny/" class="scroll-to-top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>--> <!-- local link -->
    <a href="http://www.brunnsangspizzeria.se/meny/" class="scroll-to-top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a> <!-- live link -->

<?php 
} // if
get_footer();

