<?php while(have_posts()): the_post(); ?>

    <h1 class="text-center texto-primario"><?php the_title(); ?></h1>
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

    <?php if(get_post_type() === 'clases'): $horario=get_field('hora_inicio') . ' a ' . get_field('hora_fin');  ?>
        <p class="informacion-clase"><?php the_field('dias_clase'); ?> - <?php echo $horario ?></p>
    <?php endif; ?>

    <p><?php the_content(); ?></p>

<?php endwhile; ?>
