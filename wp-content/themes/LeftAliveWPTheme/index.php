<?php get_header(); ?>

	<div class="columnsWrapper">

		<aside>
			<?php dynamic_sidebar( 'widget-area-1' ); ?>
		</aside>

		<main role="main">
			<!-- section -->
			<section>

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>

		<aside>
			<?php dynamic_sidebar( 'widget-area-2' ); ?>
		</aside>

	</div>

<?php get_footer(); ?>
