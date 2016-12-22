<?php
/**
 * @package One Page Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="container">
            <header id="section--header" class="section--header">
                <?php the_title( '<h1 class="section--title text-center">', '</h1>' ); ?>
            </header>

			<section class="section--content">
				<div class="row"> 
					<div class="col-md-12"> 
						<?php the_content(); ?>
					</div>	
				</div> 
			</section> 

			<footer class=" section--footer text-center">
			</footer>

		</div> <!-- .container -->
	</div> <!-- .row -->
</article>
