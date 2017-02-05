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

		<?php

		if (is_page_template('video.php')) {
			echo 	'<meta property="og:site_name" content="LeftAlive">' .
					'<meta property="og:title" content="Wordt een ster in onze video!">' .
					'<meta property="og:description" content="Doe mee aan onze video en ervaar de eeuwige roem!">' .
					'<meta property="og:url" content="http://www.leftalive.com/video">' .
					'<meta property="og:image" content="http://www.leftalive.nl/wp-content/themes/LeftAliveWPTheme/img/videopage-image.jpg">' .
					'<meta name="twitter:card" content="player">' .
					'<meta name="twitter:site" content="@leftaliveband">' .
					'<meta name="twitter:url" content="http://www.leftalive.com/video">' .
					'<meta name="twitter:title" content="Wordt een ster in onze video!">' .
					'<meta name="twitter:description" content="Doe mee aan onze video en ervaar de eeuwige roem!">' .
					'<meta name="twitter:image" content="http://www.leftalive.nl/wp-content/themes/LeftAliveWPTheme/img/videopage-image.jpg">';
		} else {
			echo 	'<meta property="og:title" content="Left Alive - Punkrock from the heart" />' .
					'<meta property="og:url" content="http://www.leftalive.nl/" />' .
					'<meta property="og:image" content="http://www.leftalive.nl/wp-content/uploads/2015/05/bandimage1.png" />' .
					'<meta property="og:description" content="We Are Left Alive! Punkrock from The Hague with a positive look at a negative world and lots of drive and energy. Come check us out at one of our gigs!" />' .
					'<meta property="og:site_name" content="Left Alive" />';
		}
		?>


		<!-- Ze Gewgle Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
		</script>

		<!-- WORDPRESS SUCKS -->
		<script async src='http://localhost:3000/browser-sync/browser-sync-client.js?v=2.18.7'></script>
	</head>
	<body <?php body_class(); ?>>


		<!-- wrapper -->
		<div class="header-wrapper">
			<div class="container">

				<!-- header -->
				<header class="header col-xs-12" role="banner">
					<a href="/">
						<img id="headerimg" src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="Left Alive" />
						<h1>PUNKROCK FROM THE HEART</h1>
					</a>
				</header>
				<!-- /header -->

			</div>
		</div>

