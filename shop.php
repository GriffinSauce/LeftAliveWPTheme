<?php
/*
Template Name: Shop
*/
?>

<?php get_header(); ?>

		<style>
			#myShop .CustomHtml.header {
				display: none;
			}
			#myShop #footer {
				display: none;
			}
			#myShop #sprd-main {
				overflow: visible;
			}
			article>p {
				font-style: italic;
				text-align: center;
			}
			.header {
				margin: 40px auto;
			    padding-right: 200px !important;
				padding-left: 200px !important;
			}
			.header h1 {
				font-size: 35px;
			}
			.no-scroll .header {
				display: none;
			}
			.no-scroll .page>p {
				display: none;
			}
			.no-scroll .footer {
				display:none
			}
			@media(max-width:768px) {
				.header {
					margin: 20px auto
				}
				.header h1 {
					font-size: 1em;
				}
			}
		</style>

		<div class="container_10 clearfix">

			<main role="main" class="grid_12">
				<!-- section -->
				<section>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

					</div>
					<!-- /article -->

				<?php endwhile; ?>
				
					<article>
						<p>All orders are handled by Spreadshirt, because we're better at making music than running webshops!</p>
					</article>

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

		</div>
	

<?php get_footer(); ?>
