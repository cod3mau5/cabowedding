<?php get_header(); ?>
	<script>
		console.log('###########___ESTE ES EL PAGE.PHP___###########')
	</script>
	<main role="main">


		
			<h1 class="<?php if(is_page('contact')): ?>contact<?php endif; ?>"><?php the_title(); ?></h1>
		
			<?php if(is_page('contact')): ?>
				<section class="contact-container">

						<div class="row">
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							
							
										<?php  $ubication=the_field('shortcode'); ?>
										<?php  $ubication ?>                 
									<div class="ubicacion">
										<!-- article -->
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

											<?php the_content(); ?>

											<?php # comments_template( '', true ); // Remove if you don't want comments ?>

											<!-- <br class="clear"> -->

											<?php # edit_post_link(); ?>

										</article>
										<!-- /article -->
									</div>             
									
							<?php endwhile; ?>
						</div>
						<!-- /row -->


					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'cabowedding' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</section>
				<!-- /section -->
			<?php endif; ?>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
