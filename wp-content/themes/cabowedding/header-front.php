<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php echo wp_get_document_title(); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>
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
 