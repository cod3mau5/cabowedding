<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


        <header class="site-header">
            <div class="container">
                
                <div class="barra-navegacion">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo sitio">
                    </div>

                    <div class="burguer-wrapper">
                        <div class="burguer-box">
                            <div class="burger" id="burger">
                                <div class="burger-line"></div>
                                <div class="burger-line"></div>
                                <div class="burger-line"></div>
                            </div>
                            <small>MENÚ</small>
                        </div>
                    </div>

                    <div class="menu" id="menu">
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'header-menu',
                                'container' => 'nav',
                                'container_class' => 'sub-menu',
                            ]);
                        ?>
                    </div>
                </div>
                <!-- ./barra-navegacion -->
            </div>
        </header>
 