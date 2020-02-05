<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#00869d">

		<meta property="og:title" content="Left Alive - Pop punk from the heart" />
		<meta property="og:url" content="http://www.leftalive.nl/" />
		<meta property="og:image" content="http://www.leftalive.nl/wp-content/themes/LeftAliveWPTheme/img/leftalive.jpg" />
		<meta property="og:description" content="Danceable, fast-paced and super energetic: Left Alive play pop punk from the heart!" />
		<meta property="og:site_name" content="Left Alive" />

		<!-- Ze Gewgle Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<!-- Le TypeKit Fonts -->
		<link rel="stylesheet" href="https://use.typekit.net/fue2pbb.css">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
		</script>
	</head>
	<body <?php body_class(); ?>>

		<div class="navigation-wrapper">
			<div class="container">
				<nav class="col-xs-12 col-sm-10 col-sm-push-1">
					<ul class="navigation">
						<li>
							<a href="<?php echo site_url('/#') ?>">Home</a>
						</li>
						<li>
							<a href="<?php echo site_url('/#music') ?>">Music</a>
						</li>
						<li>
							<a href="<?php echo site_url('/#socials') ?>">Social</a>
						</li>
						<li>
							<a href="<?php echo site_url('/events') ?>">Shows</a>
						</li>
						<li>
							<a href="https://www.epicmerchstore.com/collection/left-alive/" target="_blank">Merch</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="header-wrapper">
			<div class="container">
				<header class="header col-xs-12" role="banner">
					<a href="/">
						<img alt="POP PUNK FROM THE HEART" id="headerimg" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="Left Alive" />
					</a>
				</header>
			</div>
		</div>

