<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('blog_grid'); // Use 'full' to make the thumbnail span the full width ?>
				</a>
			</div>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<!-- <div class="post-details">
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'cabowedding' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'cabowedding' ), __( '1 Comment', 'cabowedding' ), __( '% Comments', 'cabowedding' )); ?></span>
		</div> -->
		<!-- /post details -->

		<?php the_excerpt(); // Build your custom callback length in functions.php ?>

		<!-- Read More link 
		<div class="read-more">
			<a href="<?php the_permalink(); ?>"><?php _e('Read More', 'cabowedding'); ?></a>
		</div>
		 /Read More link -->

		<!-- <?php edit_post_link(); ?> -->

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'cabowedding' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
