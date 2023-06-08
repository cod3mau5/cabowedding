<?php  get_header(); ?>

<main role="main">

    <!-- section -->
    <section id="blog-section">

        <div class="title">
            <h1>Our Blog</h1>
            <small>please click thumbnails to view post</small>
        </div>


        <div class="grid-container">  <!-- Div envolvente añadido aquí -->
            <?php  get_template_part('loop'); ?>
        </div>

        <?php  get_template_part('pagination'); ?>

    </section>
    <!-- /section -->
</main>

<?php  get_sidebar(); ?>

<?php  get_footer(); ?>

<script>
    console.log("Hola desde index.php")
</script>

