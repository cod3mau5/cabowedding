<?php get_header(); ?>
	<script>
		console.log('###########___ESTE ES EL PAGE.PHP___###########')
	</script>
	<main class="py-3" id="page">


		<h1 class="text-center main-text-3 title">
			<?php if(is_page('contact')): ?>
				contact 
				<?php else: ?>
					<?php the_title(); ?>
			<?php endif; ?>
		</h1>


		
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

					</section>
					<?php endif; ?>
				<!-- /section -->
				<?php else: ?>
					<div class="home-container main-text" style="margin-top: 3.5rem;">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								
							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_content(); ?>

								<?php # comments_template( '', true ); // Remove if you don't want comments ?>

								<!-- <br class="clear"> -->

								<?php # edit_post_link(); ?>

							</article>
							<!-- /article -->          
								
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if(is_page('about-us')): ?>
					<section class="testimoniales">
						<h2 class="text-center texto-blanco">Testimonials</h2>

						<div class="home-container contenedor-testimoniales">
								<ul class="listado-testimoniales">
										<?php 
											$args = array(
												'post_type' => 'testimoniales',
												'posts_per_page' => 10
											);
											$testimoniales = new WP_Query($args);
											while($testimoniales->have_posts()): $testimoniales->the_post();
										?>
										<li class="testimonial text-center">

											<svg xmlns="http://www.w3.org/2000/svg" width="95.332" height="79.615" viewBox="0 0 95.332 79.615">
												<g id="left-quote" transform="translate(0 -7.858)">
													<g id="Grupo_3" data-name="Grupo 3">
													<path id="Trazado_5" data-name="Trazado 5" d="M30.512,43.939a25.26,25.26,0,0,0-6.98-1.019,21.935,21.935,0,0,0-8.752,1.793c2.2-8.054,7.485-21.951,18.013-23.516a2.5,2.5,0,0,0,2.04-1.8l2.3-8.23a2.5,2.5,0,0,0-2.068-3.15,17.477,17.477,0,0,0-2.354-.16c-12.637,0-25.152,13.19-30.433,32.076-3.1,11.08-4.009,27.738,3.627,38.223,4.273,5.867,10.507,9,18.529,9.313l.1,0a22.179,22.179,0,0,0,5.979-43.533Z" fill="#d8c983"/>
													<path id="Trazado_6" data-name="Trazado 6" d="M92.471,54.413A22.231,22.231,0,0,0,79.137,43.939a25.258,25.258,0,0,0-6.979-1.019,21.94,21.94,0,0,0-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516a2.5,2.5,0,0,0,2.04-1.8l2.3-8.23a2.5,2.5,0,0,0-2.068-3.15,17.455,17.455,0,0,0-2.354-.16C68.7,7.858,56.186,21.048,50.9,39.934c-3.1,11.08-4.008,27.738,3.629,38.225,4.272,5.866,10.507,9,18.528,9.312l.1,0a22.179,22.179,0,0,0,19.311-33.06Z" fill="#d8c983"/>
													</g>
												</g>
											</svg>

											<blockquote>
												<?php the_content(); ?>
											</blockquote>

											<svg xmlns="http://www.w3.org/2000/svg" width="95.332" height="79.615" viewBox="0 0 95.332 79.615">
												<g id="left-quote" transform="translate(0 -7.858)">
													<g id="Grupo_3" data-name="Grupo 3">
													<path id="Trazado_5" data-name="Trazado 5" d="M30.512,43.939a25.26,25.26,0,0,0-6.98-1.019,21.935,21.935,0,0,0-8.752,1.793c2.2-8.054,7.485-21.951,18.013-23.516a2.5,2.5,0,0,0,2.04-1.8l2.3-8.23a2.5,2.5,0,0,0-2.068-3.15,17.477,17.477,0,0,0-2.354-.16c-12.637,0-25.152,13.19-30.433,32.076-3.1,11.08-4.009,27.738,3.627,38.223,4.273,5.867,10.507,9,18.529,9.313l.1,0a22.179,22.179,0,0,0,5.979-43.533Z" fill="#d8c983"/>
													<path id="Trazado_6" data-name="Trazado 6" d="M92.471,54.413A22.231,22.231,0,0,0,79.137,43.939a25.258,25.258,0,0,0-6.979-1.019,21.94,21.94,0,0,0-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516a2.5,2.5,0,0,0,2.04-1.8l2.3-8.23a2.5,2.5,0,0,0-2.068-3.15,17.455,17.455,0,0,0-2.354-.16C68.7,7.858,56.186,21.048,50.9,39.934c-3.1,11.08-4.008,27.738,3.629,38.225,4.272,5.866,10.507,9,18.528,9.312l.1,0a22.179,22.179,0,0,0,19.311-33.06Z" fill="#d8c983"/>
													</g>
												</g>
											</svg>

											<div class="testimonial-footer">
												<?php the_post_thumbnail('thumbnail'); ?>
												<p><?php the_title(); ?></p>
											</div>

										</li>
										<?php endwhile; wp_reset_postdata(); ?>
								</ul>
						</div>
					</section>
				<?php endif; ?>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
