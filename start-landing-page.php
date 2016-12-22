<?php
/**
 * Template Name: Start Landing Page
 */

get_header();

if(have_posts()) {
?>
    <main class="main container-fluid start-page">
<?php
        // query for the about page
        $page_query = new WP_Query( 'pagename=om-oss' );
        while ( $page_query->have_posts() ) { 
            $page_query->the_post();
            get_template_part( 'content', 'omoss' ); 
        }
        // reset post data (important!)
        wp_reset_postdata();

            // query for the about page
        $page_query = new WP_Query( 'pagename=oppetider' );
        while ( $page_query->have_posts() ) { 
            $page_query->the_post();
            get_template_part( 'content', 'oppetider' ); 
        }
        // reset post data (important!)
        wp_reset_postdata();

        $page_query = new WP_Query( 'pagename=hitta-oss' );
        // "loop" through query (even though it's just one page) 
        while ( $page_query->have_posts() ) : $page_query->the_post();
            get_template_part( 'content', 'hittaoss' ); 

        endwhile;
        // reset post data (important!)
        wp_reset_postdata();

        $page_query = new WP_Query( 'pagename=galleri' );
        // "loop" through query (even though it's just one page) 
        while ( $page_query->have_posts() ) : $page_query->the_post();
            get_template_part( 'content', 'galleri' ); 

        endwhile;
        // reset post data (important!)
        wp_reset_postdata();
?>
    </main>
<?php 
} // if
get_footer();
