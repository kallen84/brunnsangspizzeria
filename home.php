<?php 
get_header();

if(have_posts()) {
?>
	<main class="main container-fluid start-page">
		<h2>home.php</h2>
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


