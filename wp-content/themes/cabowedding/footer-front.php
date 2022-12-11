			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="bottom-footer">
					<div class="container">
						<div class="row align-items-center">
							<!-- social links area -->
							<div class="col-lg-4">
								<div class="social-profile">
									<ul class="social-group">
										<li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
										<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
										<li><a href="#" target="_blank"><i class="fab fa-google"></i></a></li>
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

		</div>
		<!-- /wrapper -->

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
