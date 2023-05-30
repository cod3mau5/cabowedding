<?php while(have_posts()): the_post(); ?>

    <?php if(get_post_type() === 'wedding-video'): ?>
        <style>
            iframe{
                width: 100%;
                box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, -3px 5px 14px -1px rgba(0,0,0,0);
                border-radius: 4px;
                margin-top: 2.5rem;
                margin-bottom: 2.5rem;
                height:25%;
            }
            @media(min-width:375px){
                .home-container iframe{
                    height:27%;
                }
            }
            @media(min-width:425px){
                .home-container iframe{
                    height:42%;
                }
            }
            @media(min-width:768px){
                .home-container iframe{
                    height:77%;
                }
            }
            @media(min-width:1024px){
                .home-container iframe{
                    height:84%;
                }
            }
            @media(min-width:1200px){
                .home-container iframe{
                    height:88%;
                }
            }

        </style>
    <?php endif; ?>

    <h1 class="text-center main-text-3 title" style="font-size:30px!important"><?php the_title(); ?></h1>
    
    <div class="home-container">
        <?php if(get_post_type() === 'wedding-video'): ?>
            <?php the_field('the_video') ?>
        <?php else: ?>
            <?php 
                if(has_post_thumbnail()):
                    has_post_thumbnail() ? the_post_thumbnail('blog',['class','large']) : ''; 
                    // TAMAÑOS DE IMAGEN:  'thumbnail','medium','large','full', 'square','portrait','cajas','mediano','blog'
                endif;
            ?>
        <?php endif; ?>

        <p><?php the_content(); ?></p>
    </div>

<?php endwhile; ?>
