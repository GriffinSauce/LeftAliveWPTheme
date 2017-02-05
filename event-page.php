<?php /* Template Name: Customized single event page */ ?>

<?php get_header(); ?>

<div class="hero-image"></div>

<div class="container content-container">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="row">

            <article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-10 col-sm-push-1">
                <section>
                    <?php the_content(); // Dynamic Content ?>
                </section>
            </article>

        </div>

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>


    </div>

<?php get_footer(); ?>
