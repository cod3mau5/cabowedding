<script>
    console.log('###########___ESTE ES EL TEMPLATE-WEDDING-VIDEOS.PHP___###########')
</script>
<?php 
	/* Template Name: Wedding Videos Template */ 
	get_header(); 
?>

	<main role="main" id="wedding-videos">
		<!-- section -->
		<section>
			<div class="title">
				<h1 style="">Our Wedding Films</h1>
				<small>please click thumbnails to view films</small>
			</div>

			<?php  $videos= new WP_Query(['post_type' => 'wedding-video']);?>
			<div class="wedding-videos-container">
				<div class="grid-videos">
					<?php while($videos->have_posts()): $videos->the_post();?>
			
						<a href="<?php the_permalink(); ?>">
							<div class="v-card">
								<div class="v-card-body">
									<?php the_post_thumbnail(); ?>
									<h3 class="text-shadow"><?php the_title(); ?></h3>
								</div>
							</div>
						</a>
						
					<?php endwhile; wp_reset_postdata();?>
				</div>
			</div>

					<!-- <p>Our team has personally worked with each of the vendors on this list, and we can confidently say that they will help make your wedding day a success. Check out the list below to learn more about each vendor and the services they offer:</p>
					<ul>
						<li>Flower arrangements: <a href="flower-arrangements.html">Flowers by Jane</a></li>
						<li>Photography: <a href="photography.html">Smith Photography</a></li>
						<li>Wedding planning: <a href="wedding-planning.html">Elegant Weddings</a></li>
					</ul> -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
