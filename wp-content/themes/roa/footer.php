          <?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Sandbox
 * @since Sandbox 2.0
 */
?>

		<footer class="outer-wrapper">
			<section class="footer-inner inner-wrapper">
				
				<div class="left-content span_6">
					<div class="logo-container">
						<a href="/" title="ROA">
							<img src="<?php bloginfo(template_directory); ?>/images/footer-logo.jpg" alt="ROA" />
						</a>
					</div><!-- / end logo -->
					<div class="address">
						<span class="street">200 Bridge Street Suite 200</span>
						<span class="town">Salem, MA 01970</span>
					</div><!-- / end address -->
					<div class="social">
						<ul>
							<li class="facebook">
								<a href="#" class="fb" title="Facebook">
									<span class="icon-facebook"></span>
								</a>
							</li>
							<li class="twitter">
								<a href="#" class="twitter" title="Twitter">
									<span class="icon-twitter"></span>
								</a>
							</li>
							<li>
								<a href="#" class="linked-in" title="Linked In">
									<span class="icon-linkedin"></span>
								</a>
							</li>
						</ul>
					</div><!-- / end social media -->
				</div><!-- / end left content -->

				<div class="footer-nav-container span_6">
					<div class="nav">
						<?php wp_nav_menu('footer-nav'); ?>
					</div><!-- / end nav -->
					
					<div class="equation right">
						<span class="quality">Quality</span>
						<span class="process">x Quality Process</span>
						<span class="leads">Qualified Leads</span>
					</div><!-- / end equation -->
				</div><!-- / end footer nav container -->
				
			</section><!-- / end footer inner -->	
		</footer><!-- / end footer -->

		<script data-main="<?php bloginfo('template_url'); ?>/app/scripts/main.js" src="<?php bloginfo('template_url'); ?>/app/bower_components/requirejs/require.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/app/scripts/require.config.js"></script>


		<?php wp_footer(); ?>
	</section><!-- /end outer wrapper -->
</body>
</html>
