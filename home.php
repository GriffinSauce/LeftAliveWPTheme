<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="hero-image"></div>

<div class="container content-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="row">

			<div class="col-xs-12 col-sm-10 col-sm-push-1">
				<section>
					<h2 class="page-title"><?php the_title(); ?></h2>
					<?php the_content(); // Dynamic Content ?>
					<div>
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					<?php endif; ?>
					</div>
				</section>

				<section class="links">
					<div class="row">
						<div class="col-sm-6 column">
	                        <a class="button button-spotify" href="https://open.spotify.com/artist/128KZvfmYDa6R9uuma8u1A" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-spotify-white.png" />
	                            <div>Listen on Spotify</div>
	                        </a>
	                        <div class="row releases">
								<div class="col-xs-6">
									<a href="https://open.spotify.com/album/56uLvj0p9a24aUwFvPUBrQ" target="_blank">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/img/empty-ep.jpg">
		                            </a>
		                        </div>
								<div class="col-xs-6">
									<a href="#" target="_blank">
		                            	<img src="<?php echo get_template_directory_uri(); ?>/img/leaveit-comingsoon.jpg">
		                            </a>
		                        </div>
		                    </div>
		                    <div>We're also on Soundcloud, Apple Music, Tidal, Google Play, Amazon and more!</div>
	                    </div>
	                    <div class="col-sm-6 column">
	                        <a class="button button-fb" href="https://facebook.com/leftaliveband" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-fb-white.png" />
	                            <div>Like us on Facebook</div>
	                        </a>
	                        <div class="facebook-after">
	                            Like us to get the latest news on shows and other adventures!

	                            <!-- posts -->
								<div class="facebook-feed">
									<?php dynamic_sidebar( 'widget-area-3' ); ?>
								</div>
	                        </div>
	                    </div>
	                </div>
				</section>

				<!-- gigs -->
				<section>
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</section>

				<div class="row videos">
					<div class="col-sm-6 column">
						<div class="video-responsive">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/1NOkjNYO58g?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6 column">
						<div class="video-responsive">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/USlvhOWlQ7c?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>

				<!-- Newsletter form -->
				<div class="newsletter">
					<?php dynamic_sidebar( 'widget-area-2' ); ?>
				</div>

				<div class="contact">
					<h3>Contact</h3>
					<p>Phone: <a href="tel:0031630336052">06-30336052</a></p>
					<p>Email: <a href="mailto:mail@leftalive.nl">mail@leftalive.nl</a></p>
				</div>

				<!-- Insta feed -->
				<div class="instagram-feed">
					<!-- LightWidget WIDGET -->
					<script src="//lightwidget.com/widgets/lightwidget.js"></script>
					<iframe src="//lightwidget.com/widgets/ae07819c0793503091da7e9e9da2a715.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
					<p>Follow us on instagram: <a href="https://www.instagram.com/leftaliveband/" target="_blank">@leftaliveband</a></p>
				</div>
			</div>

			<div class="clearfix"></div>

		</div>

	<?php endwhile; else: ?>
		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
	<?php endif; ?>

</div>
<?php get_footer(); ?>
