

**********************************************

             content-page.php

**********************************************



<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package One Page Theme
 */
?>
<?php
	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>
<section id="<?php echo $post->post_name; ?>" class="row section--pages row" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
	
	<header class="section--header">
		<?php the_title( '<h1 class="section--title">', '</h1>' ); ?>
	</header>

	<div class="section--content row">
	
		<div class="col-md-6">
			<?php the_content(); ?>
		</div>


		<div class="col-md-6"><?php //the_post_thumbnail(); ?></div>

	</div>

	<footer class="section--footer">
		<p>footer</p>
		<?php edit_post_link('Redigera sektion', '<span class="edit-link">', '</span>', get_the_ID()); ?>
	</footer>
</section>













/************************************************************************

start-landing-page (Loop)

/************************************************************************/


/*
    $pages_to_load = ['pagename=om-oss', 'pagename=hitta-oss','pagename=oppetider', 'pagename=galleri'];

    foreach($pages_to_load as $page){
        // query for the about page
        $page_query= new WP_Query( $page );
        // "loop" through query (even though it's just one page) 
        while ( $page_query->have_posts() ) : $page_query->the_post();
            get_template_part( 'content', 'page' ); 

        endwhile;
        // reset post data (important!)
        wp_reset_postdata();
    }*/

/*
          $your_query = new WP_Query( 'pagename=oppetider' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        get_template_part( 'content', 'page' ); 

    endwhile;
    // reset post data (important!)
    wp_reset_postdata();*/





/************************************************************************

page.event.php

/************************************************************************/


<?php
/**
 * The template used for displaying page "Event" content
 *
 * @package Brunnsäng Pizzeria
 */

get_header();

if(have_posts()) {

	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>
	<main id="<?php echo $post->post_name; ?>" class="main--event-page container-fluid" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
	<?php 
		while(have_posts()) {
			the_post();

			$event_arg = array(
				'post_type' => 'event',
				'posts_per_page' => 10
			);

			$event = new WP_Query($event_arg);
?>	
			<section class="section--event container">
				<section class="section--event-header">
					<header class="section--header">
						<?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
					</header>
				</section>
<?php 
					while($event->have_posts()) {
						$event->the_post();
						$content = get_post_meta(get_the_ID(), 'media_insert');
						$datepicker = get_post_meta(get_the_ID(), 'datepicker');
						add_filter('the_content', 'wpautop');
?>
						<article class="article--event row">
							<h1 class="text-center"><?php the_title(); ?> </h1>
							
							<div class="col-md-6 event--content">
								<?php echo wpautop($content[0]); ?>
								<p class="datepicker"><span>Datum:</span> <?php echo $datepicker[0] ? $datepicker[0]: ''; ?></p>
							</div>

							<div class="col-md-6 event--thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
						</article>
<?php  
					} // while
?>
			</section> <!-- .section-event -->
<?php
		} // while
?>
	</main>
<?php
} // if
get_footer();









*************************************

home.php

************************************


<?php get_header(); 

if( get_option( 'page_for_posts' ) ) {
	echo get_the_post_thumbnail( get_option( 'page_for_posts' ) );
}  


?>

<h2>home.php</h2>

    <main class="container main">

        <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'post_per_page' => '2',
                'paged' => 1
            );
        
            $my_posts = new WP_Query( $args );
        
            if ( $my_posts->have_posts() ) {
?>
                <div class="my-posts">
                    <?php while ( $my_posts->have_posts() ) {
                    $my_posts->the_post();   
?>
                    <h2><?php the_title(); ?></h2>
<?php 
                    the_post_thumbnail();
                    the_content(); 

                    }  
?>
                </div>
<?php                                                       
            }
?>
    </main>

<?php
get_footer(); 











***************************************

page.php

*************************************

<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row row-offcanvas row-offcanvas-right">

	    	<div class="col-md-8">
				<p class="pull-right visible-xs">
            		<button type="button" class="btn btn-primary btn-xs offcanvas-control" data-toggle="offcanvas">Sidebar <span class="glyphicon glyphicon-resize-horizontal"></span></button>
          		</p>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				    <div class="page-header">	
				    	<h1><?php the_title(); ?></h1>
						<h2>page.php</h2>
				    </div>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

	    	</div>



	    </div>

    </div>

<?php get_footer(); ?>








 ******* 
   2
*********


<?php
/**
 * Template page.php - fallback for start-page
 *
 * @package Brunnsäng Pizzeria
 */

get_header();

if(have_posts()) {
?>
	<h2>page.php</h2>
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

		$page_query = new WP_Query( 'pagename=oppetider' );
		while ( $page_query->have_posts() ) { 
			$page_query->the_post();
			get_template_part( 'content', 'oppetider' ); 
		}
		wp_reset_postdata();

		$page_query = new WP_Query( 'pagename=hitta-oss' );
		while ( $page_query->have_posts() ) { 
			$page_query->the_post();
			get_template_part( 'content', 'hittaoss' ); 
		}
		wp_reset_postdata();

		$page_query = new WP_Query( 'pagename=galleri' );
		while ( $page_query->have_posts() ) { 
			$page_query->the_post();
			get_template_part( 'content', 'galleri' ); 
		}
		wp_reset_postdata();		
?>
	</main>
<?php 
} // if

get_footer();













*************************************

page-event.php

************************************



<?php
/**
 * The template used for displaying page "Event" content
 *
 * @package Brunnsäng Pizzeria
 */

get_header();

if(have_posts()) {

	global $post;
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$thumb_url = $thumb_url_array[0];
?>
	<main id="<?php echo $post->post_name; ?>" class="main--event-page container-fluid" <?php echo ' style="background-image: url(' . $thumb_url . ');"'; ?>>
	<?php 
		while(have_posts()) {
			the_post();

			$event_arg = array(
				'post_type' => 'event',
				'posts_per_page' => 10
			);

			$event = new WP_Query($event_arg);
?>	
			<section class="section--event container">
				<section class="section--event-header">
					<header class="section--header">
						<?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
					</header>
				</section>
<?php 
					while($event->have_posts()) {
						$event->the_post();
						$content = get_post_meta(get_the_ID(), 'media_insert');
						$datepicker = get_post_meta(get_the_ID(), 'datepicker');
						add_filter('the_content', 'wpautop');
?>
						<article class="article--event row">
							<h1 class="text-center"><?php the_title(); ?> </h1>
							
							<div class="col-md-6 event--content">
								<?php echo wpautop($content[0]); ?>
								<p class="datepicker"><span>Datum:</span> <?php echo $datepicker[0] ? $datepicker[0]: ''; ?></p>
							</div>

							<div class="col-md-6 event--thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
						</article>
<?php  
					} // while
?>
			</section> <!-- .section-event -->
<?php
		} // while
?>
	</main>
<?php
} // if
get_footer();