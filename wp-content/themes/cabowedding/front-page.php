<script>
    console.log('###########___ESTE ES EL FRONT-PAGE.PHP___###########')
</script>
<?php get_header('front');?>

    <main role="main">

        <!-- main video -->
        <div style="padding:44.79% 0 0 0;position:relative;">
            <iframe src="https://player.vimeo.com/video/409924928?h=0c3a18336e&autoplay=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" width="100%" height="500px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
            </iframe>
        </div>

        <!-- text hero -->
        <section class="welcome-text">
            <div class="home-container">
                <h3 class="main-text text-center fs-3">Live the wedding you dream of , be the bride you deserve to be!</h3>
            </div>
        </section>
		<!-- /section -->

        <!-- presentation -->
		<section class="presentation">
            <?php 
                $title=esc_attr(get_field('presentation')['title']);
                $subtitle=esc_attr(get_field('presentation')["subtitle"]); 
                $description=get_field('presentation')["description"]; 
            ?>

            <div class="home-container text-center">                
                <h1 class="main-text-3"><?php echo $title ?></h1>
                <h2 class="main-text-2"><?php echo $subtitle ?></h2>
                <?php echo $description ?>

                <!-- <h2 class="second-text"><?php  esc_attr(the_field('presentation')['subtitle']); ?></h2> -->
              
            </div>
		</section>
		<!-- /section -->

        <!-- 
        <section class="page-content">
            <div class="home-container">
            <?php # if (have_posts()): while (have_posts()) : the_post(); ?>
                    <h1 <?php # post_class(); ?>>
                        <?php # the_content(); ?>
                    </h1>
                <?php # endwhile; ?>

                <?php # else: ?>
                    <h2><?php # _e( 'Sorry, nothing to display.', 'cabowedding' ); ?></h2>
                <?php # endif; ?>
            </div>
        </section> 
        -->

        <hr class="main-text" data-content="Our Services" />
		<section class="our-services">
            
            <div class="home-container">
                <div class="cards-wrapper">
                    <div class="card">
                        <h2 class="title">Weddings</h2>
                        <div class="card-container" style="background-image: url('https://www.caboweddingservices.com/blog/wp-content/uploads/2018/06/Cabo-Wedding-Services-03-1.jpg');">
                        <div class="polarized"></div>
                        </div>
                    </div>                 
                    <div class="card">
                        <h2 class="title">Marriage Proposals</h2>
                        <div class="card-container" style="background-image: url('https://theyesgirls.com/wp-content/uploads/2021/05/Chris-Victoria-Proposal-0752-1-683x1024.jpg');">
                        <div class="polarized"></div>
                        </div>
                    </div>   
                    <div class="card">
                        <h2 class="title">Social Events</h2>
                        <div class="card-container" style="background-image: url('https://media.istockphoto.com/id/1133362469/photo/im-having-the-best-time-with-you-guys.jpg?s=612x612&w=0&k=20&c=YyxE1HC7u9CipD6JZuyoIGAuY4cXvUNVATP2605zVDE=');">
                        <div class="polarized"></div>
                        </div>
                    </div>   
                    <div class="card">
                        <h2 class="title">Birthday Celebrations</h2>
                        <div class="card-container" style="background-image: url('https://st.depositphotos.com/1002111/2556/i/600/depositphotos_25562713-stock-photo-birthday.jpg');">
                        <div class="polarized"></div>
                        </div>
                    </div>  
                </div>
            </div>
            
		</section>

        <hr data-content="About Our Work" />
        <section class="long-presentation">
            <?php 
                $title=esc_attr(get_field('long-presentation')['title']);
                $description=get_field('long-presentation')["description"]; 
            ?>

            <div class="home-container"> 
                <div class="row">
                    <div class="column bg-img" style="background-image: url('https://static.wixstatic.com/media/11062b_98db497e028f4de2960e0f1eaa8c484a~mv2.jpeg/v1/fill/w_633,h_740,fp_0.50_0.50,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_98db497e028f4de2960e0f1eaa8c484a~mv2.jpeg');"></div>                    
                    <div class="column">
                        <p class="main-text">
                            I make the most important occasions in my clients' lives unforgettable and as enjoyable as possible. Through strategic partnerships formed over the years, I have learned to be flexible and adapt to each client's unique needs and preferences. Are you ready for us to start planning your next event? Leave all your stress and worries to me, and focus on enjoying your next celebration.
                        </p>
                    </div>             
                </div>
              
            </div>
		</section>

        <hr data-content="Wedding Videos" />
        <section class="wedding-videos">
            
            <div class="home-container">
                <div class="cards-wrapper">

                <?php  $videos= new WP_Query(['post_type' => 'wedding-video']);?>

                    <?php while($videos->have_posts()): $videos->the_post();?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <div class="card-container">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="polarized"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                                        <polygon class="play-btn__svg" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69"/>
                                        <path class="play-btn__svg" d="M26,13A13,13,0,1,1,13,0,13,13,0,0,1,26,13ZM13,2.18A10.89,10.89,0,1,0,23.84,13.06,10.89,10.89,0,0,0,13,2.18Z"/>
                                    </svg> 
                                </div>
                                <h2 class="title"><?php the_title(); ?></h2>
                                <p class="main-text">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata();?>
                </div>
            </div>
            
		</section>

        <hr data-content="Ready?" />
        <section class="call-to-action" 
                style="
                    background-image: linear-gradient(to bottom, #eee, rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0.01), rgba(0, 0, 0, 0)), url('https://images.squarespace-cdn.com/content/v1/5e5a89dc2b74f201b6b58434/b1fabdfa-d797-456b-9a7d-bb328c2ca470/DSC05422+2.jpg?format=2500w');
                    width: 100%;
                    height: 633px;
                    background-size: cover;
                ">
            <h2 class="text-center">Contact me about your wedding or couple session so we can start dreaming about it together!</h2>
            <a href="contact/">
                <button>LET'S DO THIS!</button>
            </a>
        </section>

        <hr data-content="Our Location" />
        <section class="map front-page">
            <?php 
                $ubication=esc_attr(get_field('shortcode'));
            ?>
            <?php echo $ubication ?>
        </section>

	</main>


    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
        let iframe = document.querySelector('iframe');
        let player = new Vimeo.Player(iframe);

        window.setInterval(function() {
            player.play();
        },900);

        player.setVolume(0);
    </script>


<?php get_footer('front'); ?>