<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="gallery"><?php dynamic_sidebar( 'widget-area-4' ); ?></div>

<div class="container_10 clearfix">

		<aside class="grid_3 gigs">
			<?php dynamic_sidebar( 'widget-area-1' ); ?>
		</aside>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="grid_3 desc">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); // Dynamic Content ?>
				<a class="btn" href="https://www.facebook.com/leftaliveband" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-facebook.png" />
					<span><?php _e( 'Like', 'html5blank' ); ?></span>
				</a>
				<a class="btn" href="https://soundcloud.com/leftalive" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-soundcloud.png" />
					<span><?php _e( 'Listen', 'html5blank' ); ?></span>
				</a>
				<a class="btn" href="https://www.youtube.com/c/LeftAliveNLband" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-youtube.png" />
					<span><?php _e( 'Watch', 'html5blank' ); ?></span>
				</a>
			</div>
			<div class="grid_4 pic">
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
			</div>

		<?php endwhile; ?>

		<?php else: ?>
			<div class="grid_8">
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</div>
		<?php endif; ?>

</div>
<div class="container_10 clearfix">

		<main role="main" class="grid_6 posts">
			<!-- section -->


			<!-- /section -->

			<?php dynamic_sidebar( 'widget-area-3' ); ?>

		</main>

		<aside class="grid_4 media">
			<?php dynamic_sidebar( 'widget-area-2' ); ?>
		</aside>

</div>

<?php get_footer(); ?>
