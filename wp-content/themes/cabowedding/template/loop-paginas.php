<?php while(have_posts()): the_post(); ?>
<style>
    iframe{
        width: 100%;
    }
</style>
    <h1 class="text-center texto-primario"><?php the_title(); ?></h1>
    <div class="home-container">
        <?php the_field('the_video') ?>
    </div>
    <?php 
        
        /*  la funcion the_post_thumbnail() acepta de parametro 
            los siguientes tamaños de imagen:
            'thumbnail','medium','large','full'
            nuevos tamaños agregados:
            'square','portrait','cajas','mediano','blog'
        */
        if(has_post_thumbnail()):
            has_post_thumbnail() ? the_post_thumbnail('blog',['class','imagen-destacada']) : ''; 
        endif;
        
    ?>

    <p><?php the_content(); ?></p>

<?php endwhile; ?>
