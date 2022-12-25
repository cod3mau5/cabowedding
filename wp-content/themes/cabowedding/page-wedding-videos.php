<script>
    console.log('###########___ESTE ES EL PAGE-$SLUG.PHP___###########')
</script>
<?php get_header();?>

    <main class="contenedor pagina seccion no-sidebar">
        
        <div class="contenido-principal text-center">
            <?php get_template_part('template-parts/loop-paginas'); ?>
        </div>

    </main>



<?php get_footer();?> 