<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="gallery"></div>

<div class="container_12 clearfix">

		<aside class="grid_4 prefix_1 gigs">
			<?php dynamic_sidebar( 'widget-area-1' ); ?>
		</aside>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="grid_3 desc">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); // Dynamic Content ?>
			</div>
			<div class="grid_5 suffix_1 pic">
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
			</div>

		<?php endwhile; ?>

		<?php else: ?>
			<div class="grid_9 suffix_1">
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</div>
		<?php endif; ?>

</div>
<div class="container_12 clearfix">

		<main role="main" class="grid_7 prefix_1 posts">
			<!-- section -->
			<?php query_posts(array('post_type' => 'post'));?>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
			<!-- /section -->


		</main>

		<aside class="grid_5 suffix_1 media">
			<?php dynamic_sidebar( 'widget-area-2' ); ?>
		</aside>

</div>

<?php get_footer(); ?>
