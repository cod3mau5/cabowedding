<script>
    console.log('###########___ESTE ES EL SINGLE-WEDDING-VIDEO.PHP___###########')
</script>
<?php get_header();?>

    <main class="contenedor pagina seccion con-sidebar">
        
        <div class="contenido-principal">
            <?php get_template_part('template/loop-paginas'); ?>
        </div>
        
        <?php get_sidebar('clases'); ?>

    </main>

<?php get_footer();?> 