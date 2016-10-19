<!DOCTYPE html>
<html <?php language_attributes(); ?> class="bb_wrapper">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="google-site-verification" content="NlacukJ732mOgu29HDKLFLpfIailVIsd4YsnFMyAcd4" />
		<meta name="readability-verification" content="9jx4vULkHqF9P2QvTEyg5HEqMEFtXSFEaGsCZ8b8" />
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<!-- open graph tags -->
		<meta property="og:site_name" content="Sunlight Foundation" />
		<meta property="og:title" content="Sunlight Foundation" />
		<meta property="og:description" content="Making government transparent and accountable." />
		<meta property="og:type" content="non_profit" />
		<meta property="og:url" content="http://sunlightfoundation.com/" />
		<meta property="og:email" content="contact@sunlightfoundation.com" />
		<meta property="og:phone_number" content="202-742-1520" />
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/sflogox180-2012.jpg" />
		<meta property="fb:page_id" content="6921874941" />
		<meta property="og:locale" content="en_US">
		<meta property="fb:admins" content="7812952">
		<!-- end open graph elements -->
		<meta name="viewport" content="width=device-width" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon" />
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed" />
		<link rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
		<link rel="mission" href="http://sunlightfoundation.com/about/" />
		<link rel="bitcoin" href="bitcoin:1Nt6CD1SHcvA2sfugx1gqbQQ25gQRA5fBm" title="Bitcoin donation address" />
		<link rel="payment" href="bitcoin:1Nt6CD1SHcvA2sfugx1gqbQQ25gQRA5fBm" title="Bitcoin donation address" />
		<link rel="payment" href="https://sunlightfoundation.com/donate/" title="Donate to the Sunlight Foundation" type="text/html" />
		<link href="//www.google-analytics.com" rel="dns-prefetch" />
		<!-- rss feeds -->
		<link rel="alternate" type="application/rss+xml" title="Sunlight Foundation Blog Feed" href="http://sunlightfoundation.com/blog/rss/" />
		<!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static/css/main.css" />

		<script src="<?php echo get_template_directory_uri(); ?>/highlight.min.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
		<!-- HTML5 shiv for IE versions < 9 -->
		<!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="//use.typekit.com/blp6kvr.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static/css/brandingbar.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static/css/sf-icons.css" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="container">
			<header id="mainHeader" class="container">
				<div class="row">
					<div class="span4">
						<h1><a href="<?php echo home_url(); ?>">Sunlight Foundation</a></h1>
					</div>
					<div class="span8">
						<div class="clearfix"></div>

							<div class="loginlinks">
								<ul>


										<li><a href="/logout/">Log Out</a></li>

								</ul>
							</div>
							<div id="follow-buttons">
								<h4>Follow Us</h4>
								<a href="https://www.facebook.com/sunlightfoundation"><span class="sficon-facebook"></span></a>
								<a href="https://twitter.com/sunfoundation"><span class="sficon-twitter"></span></a>
								<a href="https://github.com/sunlightlabs"><span class="sficon-github"></span></a>
								<a href="http://sunfoundation.tumblr.com/"><span class="sficon-tumblr"></span></a>
							</div>
							<form action="/search/" method="get" id="mainsearch" class="searchform globalsearch">
								<input class="transparent" type="search" name="q" id="id_q" placeholder="search the site">
								<button class="textReplace" type="submit">
									 <span>Search</span>
								</button>
							</form>

					</div>
				</div>
				<div class="row">
					<div class="span12">
					<!--
						<nav class="primary-nav clearfix">

								<ul class="nav nav-pills clearfix">
									<li class="blog"><a href="/blog/">Blog</a></li>
									<li class="projects"><a href="/tools/">Tools</a></li>
									<li class="api"><a href="/api/">APIs</a></li>
									<li class="policy"><a href="/policy/">Policy</a></li>
									<li class="issues"><a href="/issues/">Issues</a></li>
									<li class="press"><a href="/press/">Press</a></li>
									<li class="about"><a href="/about/">About</a></li>
									<li class="contact"><a href="/contact/">Contact</a></li>
									<li class="join"><a href="/join/">join</a></li>
									<li class="donate"><a href="/donate/" rel="payment" title="Donate to the Sunlight Foundation">donate</a></li>
								</ul>

						</nav> -->
					<!-- nav -->
					<nav class="primary-navbar clearfix" role="navigation">
						<?php wp_nav_menu(array("menu_class" => "nav nav-pills clearfix")); ?>
					</nav>
					<!-- /nav -->

					</div>
				</div>
			</header>
			<div class="container">