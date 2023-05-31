			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="bottom-footer">
					<div class="container">
						<div class="row align-items-center">
							<!-- social links area -->
							<div class="col-lg-4">
								<div class="social-profile">
									<ul class="social-group">
										<li><a href="https://www.facebook.com/profile.php?id=100070421835557&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook"></i></a></li>
										<li><a href="https://instagram.com/cabo.weddingfilms?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i class="fab fa-instagram"></i></a></li>
										<li><a href="https://vimeo.com/user8647462" target="_blank"><i class="fab fa-youtube"></i></a></li>
										<li><a href="https://g.co/kgs/9KLJEz" target="_blank"><i class="fab fa-google"></i></a></li>
									</ul>
								</div>
							</div> <!-- social links area -->
							<div class="col-lg-8">
								<div class="footer-desc-wrap">
									<div class="site-info">
										Copyright © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
										<?php _e('Powered by', 'cabowedding'); ?>	
										<a href="//codemau5.com" target="_blank" title="codemau5">codemau5</a>.
									</div><!-- .site-info -->									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- copyright -->
				<!-- <p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'cabowedding'); ?>
					<a href="//codemau5.com" target="_blank" title="codemau5">codemau5</a>.
				</p> -->
				<!-- /copyright -->

			</footer>
			<!-- /footer -->



		<?php if(is_page('contact')): ?>
                <script>
                    const lat = parseFloat(document.querySelector('#lat').value),
                        lng = parseFloat(document.querySelector('#lng').value),
                        zoom = parseInt(document.querySelector('#zoom').value),
                        calle = document.querySelector('#calle').value;
                if(lat && lng){
                    function initMap() {
                        var uluru = {lat: lat, lng: lng};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: zoom,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                            title: calle
                        });
                    }
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl3QdpavEMHbNxiU9AqmO577Hir0EZ_Ho&callback=initMap"
            async defer></script>
        <?php endif; ?>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
