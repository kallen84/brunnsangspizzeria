<?php
get_header();
if(have_posts()) {
	while(have_posts()) {
		the_post();
		?>
		<section class="section">
			<div class="row">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
<?php
	}
}
get_footer();