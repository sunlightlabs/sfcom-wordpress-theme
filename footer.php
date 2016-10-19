</div>
		<div id="footerWrapper">
			<footer role="contentinfo">
				<div id="signupRibbon">
					<span class="textReplace">Become a part of the open government community and stay up to date with what's going on by signing up</span>
					<form action="/join/" method="post" id="signup-form">
						<input type='hidden' name='csrfmiddlewaretoken' value='EvptIhlJ5pkIojBg2sEilQYQj3e7cgFN' />
						<input type="text" name="email" placeholder="your email address">
						<input type="text" name="zipcode" placeholder="your zip code">
						<button type="submit" class="btn">Sign up</button>
					</form>
					<div class="signup-thanks">
						Thanks! <a href="" style="color: #f4f2f0; text-decoration: underline;">Care to tell us more about you?</a>
					</div>
				</div>
				<div id="bottomFooter">
					<div id="contactInfo">
						<h4>Contact Us</h4>
						<address class="vcard clearfix">
							<span class="adr">
								<span class="street-address">1818 N Street NW</span>
								<span class="extended-address">Suite 300</span>
								<span class="locality">Washington</span>,
								<span class="region" title="District of Columbia">DC</span>
								<span class="postal-code">20036</span>
							</span>
							<span class="tel"><a href="tel:+12027421520">202-742-1520</a></span>
							<a href="callto:+12027421520" class="tel-skype textReplace">Call with Skype</a>
						</address>
						<nav>
							<ul class="nav clearfix">
								<li class="contact"><a href="/contact/">Contact</a></li>
								<li class="about"><a href="/about/">About</a></li>
								<li class="jobs"><a href="/jobs/">Jobs</a></li>
							</ul>
						</nav>
						<div id="follow-buttons">
							<a rel="me" href="https://www.facebook.com/sunlightfoundation"><span class="sficon-facebook"></span></a>
							<a rel="me" href="https://twitter.com/sunfoundation"><span class="sficon-twitter"></span></a>
							<a rel="me" href="https://www.flickr.com/photos/sunlightfoundation"><span class="sficon-flickr"></span></a>
							<a rel="me" href="https://github.com/sunlightlabs"><span class="sficon-github"></span></a>
							<a rel="me" href="http://instagram.com/sunfoundation"><span class="sficon-instagram"></span></a>
							<a rel="me" href="http://sunfoundation.tumblr.com/"><span class="sficon-tumblr"></span></a>
							<a rel="me" href="https://www.youtube.com/user/SunlightFoundation"><span class="sficon-youtube"></span></a>
						</div>
					</div>
					<div id="privacy">
						<p>Our <a href="/legal/privacy/">privacy policy</a> details how personally identifiable information that is collected on our web sites is handled. Read our <a href="/legal/terms/">terms of service</a>.</p>
						<p>This work by Sunlight Foundation, unless otherwise noted, is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</p>
						<p><a href="/donate/" >Donate</a> to the Sunlight Foundation</p>
					</div>
					<div class="clear"></div>
					<div class="affiliated">
						<div class="cfc">
							<a href="http://www.cfctoday.org/"><img src="https://ds5jihom238dx.cloudfront.net/static/img/cfc_logo.aee19847d59a.png" alt="CFC (Combined Federal Campaign) Today" /></a>
							<p class="cfc-number">59063</p>
						</div>
						<a href="http://www.charitynavigator.org/index.cfm?bay=search.summary&orgid=13197#.UmqVsZTXSG0"><img class="charity-navigator" src="https://ds5jihom238dx.cloudfront.net/static/img/charity_navigator.497e10f11f60.png" alt="Charity Navigator" /></a>
					</div>
				</div>
			</footer>
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