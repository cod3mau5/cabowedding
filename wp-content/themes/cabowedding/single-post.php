<style>
    /* Single post styles */

    .single-post-main {
        padding: 2.3% 0 4% 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
    }
    
    .single-post-container {
        width: 90%;
        max-width: 1020px;
        color: var(--bg-grey);
        font-family: var(--mainText);
        padding: 2em;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        transition: box-shadow 0.5s ease;
        background-size:cover;
        background-image: url(<?php echo get_template_directory_uri() ?>/img/paper.jpg);
        
    }
    @media only screen and (min-width: 1440px) {
        .single-post-container {
            padding: 1em;
            width: 66%;
        }
    }

    .single-post-container:hover {
        box-shadow: 0 0 20px rgba(0,0,0,0.5);
    }

    .post-thumbnail{
        text-align: center;
    }
    .single-post-container .post-thumbnail img {
        width: auto;
        max-height: 450px;
        margin-bottom: 1em;
        margin-left: auto;
        margin-right: auto;
    }

    .single-post-container .post-info {
        padding: 2em;
    }

    .single-post-container .post-title {
        font-family: var(--secondText);
        color: #fdc921;
        font-size: 3em;
        text-align: center;
        padding: 2.5rem  1.5rem 2rem 2rem;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.77);
    }

    .single-post-container .post-details {
        font-size: 1em;
        color: var(--bg-grey);
        margin-bottom: 3em;
        text-align: center;
    }

    .single-post-container .post-content {
        line-height: 1.6em;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.44);
        font-size: 1.377rem;
    }

    /* CSS para mobile */


</style>

<?php get_header(); ?>

<main role="main" class="single-post-main">
    <!-- section -->
    <section class="single-post-container">

        <?php while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- post title -->
                <h1 class="post-title">
                    <?php the_title(); ?>
                </h1>
                <!-- /post title -->
                <!-- post details -->
                <div class="post-details">
                    <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                    <span class="author"><?php _e( 'Published by', 'cabowedding' ); ?> <?php the_author_posts_link(); ?></span>
                </div>
                <!-- /post details -->
                
                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <!-- /post thumbnail -->

                <div class="post-info">




                    <!-- post content -->
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <!-- /post content -->

                    <?php edit_post_link(); ?>

                </div>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

    </section>
    <!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<script>
    console.log("hola desde single-post.php");
</script>