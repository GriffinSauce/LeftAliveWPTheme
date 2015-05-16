<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

		<aside class="grid_4 prefix_1">
			<?php dynamic_sidebar( 'widget-area-1' ); ?>
		</aside>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="grid_3">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); // Dynamic Content ?>
			</div>
			<div class="grid_5 suffix_1">
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

		<main role="main" class="grid_7 prefix_1">
			<!-- section -->
			<?php
			 global $post;
			 $myposts = get_posts('numberposts=5&category=1');
			 foreach($myposts as $post) :
			 ?>
			 <?php the_title(); ?>
			 <?php the_content(); ?>
			 <?php endforeach; ?>
			<!-- /section -->
		</main>

		<aside class="grid_5 suffix_1">
			<?php dynamic_sidebar( 'widget-area-2' ); ?>
		</aside>

<?php get_footer(); ?>
