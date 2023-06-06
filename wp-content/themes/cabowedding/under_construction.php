<?php # get_header(); ?>
<style>
    :root {
    --primary-color: #45689e;
    --secondary-color: #ffb703;
    }

    html {
    font-size: 100%;
    }

    body {
    margin: 0;
    }

    body::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 20px;
    z-index: 10;
    background-image: repeating-linear-gradient(-45deg,
        var(--primary-color),
        var(--primary-color) 50px,
        var(--secondary-color) 50px,
        var(--secondary-color) 100px);
    }

    .board {
    --deg: 5deg;
    font-size: 3rem;
    padding: 0.5em 1em;
    background: var(--secondary-color);
    border-radius: 5px;
    color: #fff;
    font-family: 'Helvetica Neue', Arial, sans-serif;
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%) rotate(calc(-1 * var(--deg)));
    }

    @media screen and (min-width: 480px) {
    .board {
        font-size: 4rem;
    }
    }

    .board::before {
    content: '';
    position: absolute;
    top: -50vh;
    height: 50vh;
    display: block;
    left: 30px;
    right: 30px;
    transform: skew(calc(-1 * var(--deg)));
    border: dotted var(--primary-color);
    border-width: 0 8px;
    transform-origin: bottom left;
    padding-bottom: 30px;
    }

    .board h1 {
    margin: 0;
    font-size: inherit;
    }

    .board h1::before,
    .board h1::after {
        content: '';
        position: absolute;
        top: 16px;
        width: 20px;
        height: 20px;
        background-color: #fff;
        border-radius: 50%;
        box-shadow: inset 2px 2px 2px rgba(0, 0, 0, 0.4);
        z-index: -1;
    }

    .board h1:before {
    left: 24px;
    }

    .board h1:after {
    right: 24px;
    }
</style>
<main role="main">

<div class="board">
  <h1>Under construction</h1>
</div>
    <!-- section -->
    <!-- <section id="blog-section">

        <!-- <h1><?php # _e( 'Our Posts', 'cabowedding' ); ?></h1> -->

        <div class="grid-container">  <!-- Div envolvente añadido aquí -->
            <?php # get_template_part('loop'); ?>
        </div>

        <?php # get_template_part('pagination'); ?>

    </section> -->
    <!-- /section -->
</main>

<?php # get_sidebar(); ?>

<?php # get_footer(); ?>

<script>
    console.log("Hola desde index.php")
</script>

