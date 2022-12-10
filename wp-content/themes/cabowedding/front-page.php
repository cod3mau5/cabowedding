<script>
    console.log('###########___ESTE ES EL FRONT-PAGE.PHP___###########')
</script>
<?php get_header('front');?>

    <main role="main">

        <div style="padding:44.79% 0 0 0;position:relative;">
            <iframe src="https://player.vimeo.com/video/409924928?h=0c3a18336e&autoplay=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" width="100%" height="500px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
            </iframe>
        </div>


        <section class="welcome-text">
            <div class="home-container">
                <h3 class="good-vibes text-center fs-4">Live the wedding you dream of, be the bride you deserve to be!</h3>
            </div>
        </section>

		<!-- /section -->

		<section class="presentation">
            <div class="home-container">                
                <h1><?php echo esc_attr(get_field('presentation')['title']); ?></h1>
                <h2><?php echo esc_attr(get_field('presentation')['subtitle']); ?></h2>
                <?php  esc_attr(the_field('presentation')['description']); ?>
            </div>
		</section>

		<!-- /section -->

        <!-- <section class="page-content">

            <div class="home-container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <h1 <?php post_class(); ?>>
                        <?php the_content(); ?>
                    </h1>
                <?php endwhile; ?>

                <?php else: ?>
                    <h2><?php _e( 'Sorry, nothing to display.', 'cabowedding' ); ?></h2>
                <?php endif; ?>
            </div>

        </section> -->
		<section class="our-services">

            <h1 class="text-center">Our services</h1>

            <div class="home-container">
                <div class="cards-wrapper">
                    <div class="card">
                        <h2>Weddings</h2>
                        <div class="card-container" style="background-image: url('https://theyesgirls.com/wp-content/uploads/2021/05/Chris-Victoria-Proposal-0752-1-683x1024.jpg');">
                        </div>
                    </div>                 
                    <div class="card">
                        <h2>Marriage Proposals</h2>
                        <div class="card-container" style="background-image: url('https://theyesgirls.com/wp-content/uploads/2021/05/Chris-Victoria-Proposal-0752-1-683x1024.jpg');">
                        </div>
                    </div>   
                    <div class="card">
                        <h2>Social Events</h2>
                        <div class="card-container" style="background-image: url('https://theyesgirls.com/wp-content/uploads/2021/05/Chris-Victoria-Proposal-0752-1-683x1024.jpg');">
                        </div>
                    </div>   
                    <div class="card">
                        <h2>Birthday Celerations</h2>
                        <div class="card-container" style="background-image: url('https://theyesgirls.com/wp-content/uploads/2021/05/Chris-Victoria-Proposal-0752-1-683x1024.jpg');">
                        </div>
                    </div>  
                </div>
            </div>
            
		</section>

	</main>


    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
         let iframe = document.querySelector('iframe');
        let player = new Vimeo.Player(iframe);
        let playing = true;
        let simulationTime = 0;

        window.setInterval(function() {
            player.play();
        },900);

        player.setVolume(0);

        player.on('play', function(e) {
            playing = true;
        });

        player.on('pause', function(e) {
            playing = false;
        });

        /**
         * Event fired when user want to fast forward
         */
        player.on('seeked', function(e) {
            if (e.seconds > simulationTime) {
                player.setCurrentTime(simulationTime).then(function(seconds) {
                }).catch(function(error) {
                    switch (error.name) {
                        case 'RangeError':
                            // The time is less than 0 or greater than the video's duration
                            break;
                        default:
                            // Some other error occurred
                            break;
                    }
                });
            }
            else {
                simulationTime = data.seconds;
            }
        });

        /**
         * Keep time going
         */
        window.setInterval(function() {
            if (playing) {
                simulationTime++;
            }
        }, 1000);
    </script>


<?php get_footer('front'); ?>