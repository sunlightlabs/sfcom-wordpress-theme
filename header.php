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
		<?php /* <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed" /> */ ?>
		<link rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
		<link rel="mission" href="http://sunlightfoundation.com/about/" />
		<link rel="payment" href="https://sunlightfoundation.com/donate/" title="Donate to the Sunlight Foundation" type="text/html" />
		<link href="//www.google-analytics.com" rel="dns-prefetch" />
		<!-- rss feeds -->
		<link rel="alternate" type="application/rss+xml" title="Sunlight Foundation Blog Feed" href="http://sunlightfoundation.com/blog/rss/" />
		<!-- stylesheets -->

		<script src="<?php echo get_template_directory_uri(); ?>/highlight.min.js"></script>

		<script>hljs.initHighlightingOnLoad();</script>
		<!-- HTML5 shiv for IE versions < 9 -->
		<!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

		<script src="//use.typekit.com/blp6kvr.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static/css/brandingbar.css" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div>
			<header id="mainHeader" class="container">
					<div class="col-md-4">
						<h1><a href="<?php echo home_url(); ?>">Sunlight Foundation</a></h1>
					</div>
					<div class="col-md-8">
						<div id="follow-buttons">
							<h4>Follow Us</h4>
							<?php wp_nav_menu(
								array(
		              'theme_location' => 'social-menu',
		              'menu_class' => 'social-nav'
								)
							) ?>
						</div>
						<?php print str_replace('class="search"', 'class="searchForm"', get_search_form(false)); ?>
					</div>
					<div class="clearfix"></div>

				<!-- nav -->
				<nav class="primary-navbar" role="navigation">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbar-collapse">
					<?php wp_nav_menu(
						array(
              'theme_location' => 'header-menu',
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse',
              'menu_class' => 'nav navbar-nav',
							'walker' => new wp_bootstrap_navwalker()
						)
					) ?>
					</div>
				</nav>
				<!-- /nav -->
			</header>
			<div class="clearfix container">