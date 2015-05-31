<?php get_header(); ?>

	<div class="container_10 clearfix">

		<main role="main" class="grid_7">
			<!-- section -->
			<section>

				<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
		</main>

		<aside class="grid_3">
			<?php dynamic_sidebar( 'widget-area-1' ); ?>
			<?php dynamic_sidebar( 'widget-area-2' ); ?>
		</aside>

	</div>

<?php get_footer(); ?>
