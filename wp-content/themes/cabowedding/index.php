<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section id="blog-section">

        <!-- <h1><?php _e( 'Our Posts', 'cabowedding' ); ?></h1> -->

        <div class="grid-container">  <!-- Div envolvente añadido aquí -->
            <?php get_template_part('loop'); ?>
        </div>

        <?php get_template_part('pagination'); ?>

    </section>
    <!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<script>
    console.log("Hola desde index.php")
</script>

