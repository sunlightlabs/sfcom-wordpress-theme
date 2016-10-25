</div>
		<div id="footerWrapper">
			<footer role="contentinfo" class="container footer">
				<div class="signup-container">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-signup')) ?>
				</div>

				<div id="bottomFooter" class="bottom-footer">
					<div id="contactInfo" class="contact-info">
						<div class="footer-contact-widget">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-contact')) ?>
						</div>
						<nav class="footer-nav">
						  <?php wp_nav_menu(
								array(
		              'theme_location' => 'footer-menu',
		              'menu_class' => 'footer-nav'
								)
							) ?>
						</nav>
						<div id="follow-buttons">
							<?php wp_nav_menu(
								array(
		              'theme_location' => 'footer-social-menu',
		              'menu_class' => 'social-nav'
								)
							) ?>
						</div>
					</div>
					<div class="blurb">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-blurb')) ?>
					</div>
				</div>
			</footer>
		</div>
		<div class="final-bottom">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-bottom')) ?>
		</div>

		<!-- primary javascript includes -->
		<script src="https://ds5jihom238dx.cloudfront.net/static/js/sfcom.8e2d0916d933.js"></script>

		<?php wp_footer(); ?>
		<!-- analytics includes -->
		<script>

			/* Google Analytics non-universal */
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-1265484-1']);
			_gaq.push(['_trackPageview']);
			(function(d) {
				var src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				loadasync('googleanalytics-js', src);
			})(document);

			/* Google Analytics Rollup */
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-48789618-1', 'sunlightfoundation.com');
			ga('send', 'pageview');

			/* ChartBeat */
			var _sf_async_config={
				uid: 980,
				domain: "sunlightfoundation.com"
			};
			$(document).ready(function() {
				window._sf_endpt=(new Date()).getTime();
				var src = (("https:" == document.location.protocol) ?
					"https://s3.amazonaws.com/" : "http://") +
					"static.chartbeat.com/js/chartbeat.js";
				loadasync('chartbeat-js', src);
			});

			/* Socialite */
			$(document).ready(function() {
				loadasync('socialite-js', '//s3.amazonaws.com/assets.sunlightfoundation.com/social/scripts/simple-socialite-pack.min.js');
			});

		</script>
	</body>
</html>