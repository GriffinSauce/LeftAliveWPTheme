<?php
/*
Template Name: Video
*/
?>

<?php get_header(); ?>

        <style>
			.steps-header {
				margin: 6rem auto 0 auto;
				padding: 1em;
				text-align: center;
				font-size: 1.6em;
				color: #FFF;
				background-color: #00869d;
				border-top-left-radius: .5rem;
				border-top-right-radius: .5rem;
			}
            .number-container {
				margin: 0 0 6rem 0;
			}
            .number {
                display: flex;
				margin: 0em auto 0em auto;
				padding: 25px 30px;
				min-height: 190px;
				align-items: center;
				border-left: 1px solid #b7cbce;
				border-right: 1px solid #b7cbce;
            }
            .number:first-child {
				border-bottom: 1px solid #b7cbce;
			}
            .number:last-child {
				border-top: 1px solid #b7cbce;
				border-bottom: 1px solid #b7cbce;
				border-bottom-left-radius: .5rem;
				border-bottom-right-radius: .5rem;
			}
            .number > div {
                flex-grow: 1;
            }
            .number > div.icon {
                flex-grow: 0;
                flex-shrink: 0;
                margin: 0 2em 0 0;
                width: 6em;
                height: 6em;
                border-radius: 6em;
                background-color: #00869d;
                background-size: 30%;
                background-repeat: no-repeat;
                background-position: center;
            }
            .icon.icon-one {
                background-image: url(<?php echo get_template_directory_uri(); ?>/img/number-1.png);
            }
            .icon.icon-two {
                background-image: url(<?php echo get_template_directory_uri(); ?>/img/number-2.png);
            }
            .icon.icon-three {
                background-image: url(<?php echo get_template_directory_uri(); ?>/img/number-3.png);
            }
            .number .content {
                font-size: 1.2em;
				padding-right: 5em;
				width: calc(65% - 3em);
            }
            .number .action {
				width: calc(35% - 3em);
			}

			/* Clean up form */
			.form-container .easy-opt-in-widget,
			.form-container .fca_eoi_form_content,
			.form-container .fca_eoi_layout_content_wrapper,
			.form-container .fca_eoi_layout_inputs_wrapper {
				padding: 0 !important;
				margin: 0 !important;
			}
			.form-container .fca_eoi_layout_headline_copy_wrapper,
			.form-container .fca_eoi_layout_description_copy_wrapper,
			.form-container .fca_eoi_layout_privacy_copy_wrapper{
				display: none;
			}
			.form-container #easy-opt-in-widget-4 .fca_eoi_layout_submit_button_wrapper {
				padding-bottom: 0;
                border-radius: .2em;
			}
			.form-container #easy-opt-in-widget-4 .fca_eoi_form_button_element {
                padding: 0.8em 1.4em;
                border-radius: .2em;
			}

            .note {
                margin-top: 0.5em;
                font-size: 0.8em;
                color: #999;
            }
            .phone img {
                width: 100%;
                max-width: initial;
            }
            .button-container {
				text-align: center;
            }
            .button {
				display: inline-block;
                padding: 0.8em 1.8em;
                color: #FFF;
                background-color: #ff6000;
                border-radius: .2em;
				transition: background-color .5s ease;
                box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.2);
            }
            .button:hover {
                color: #FFF;
                background-color: #e85700;
            }

            .win {
                margin: auto;
                padding: 0 30px;
                max-width: 768px;
            }
            .win h2 {
                margin: 2em 0;
            }
            .win h2 a {
                color: #ff6000;
            }

            @media(max-width:768px) {
				.steps-header,
				.number-container {
					margin-left: 10px;
					margin-right: 10px;
				}
				.number {
					display: block;
					text-align: center;
				}
				.number > div.icon {
					margin: auto;
				    width: 3em;
					height: 3em;
					margin-bottom: 25px;
				}
				.number > div.content {
					width: 100%;
					padding: 0;
					margin-bottom: 25px;
				}
				.number > div.action {
					width: 100%;
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

					<div class="steps-header">3 stappen naar eeuwige roem</div>
                    <div class="number-container">
						<div class="number">
							<div class="icon icon-one"></div>
							<div class="content">Schrijf je in om jouw preview van Leave It te ontvangen</div>
							<div class="action form-container"><?php dynamic_sidebar( 'widget-area-5' ); ?></div>
						</div>
						<div class="number">
							<div class="icon icon-two"></div>
							<div class="content">
								<div>Film jezelf terwijl je een stuk van het nummer zingt, speelt, airguitart, whatever!</div>
								<div class="note">Doe wel effe landscape ok?</div>
							</div>
							<div class="action phone">
								<img src="<?php echo get_template_directory_uri(); ?>/img/landscape-phone.png">
							</div>
						</div>
						<div class="number">
							<div class="icon icon-three"></div>
							<div class="content">Stuur je filmpje naar ons!</div>
							<div class="action button-container">
								<a target="_blank" href="https://www.dropbox.com/request/O03Arb9SYwDUhA0s4A8R" class="button">Upload</a>
							</div>
						</div>
					</div>

                    <hr>

                    <div class="win">
                        <h2>Valt er nog wat te winnen? JA!</h2>
                        <p>Het gaafste filmpje, van degene die het hardst uit zijn dak gaat, wint een prijzenpakket met allerlei Left Alive gear!</p>
                        <p>
                            <ul>
                                <li>Een shirt (in jouw maat natuurlijk)</li>
                                <li>Een Dopper met het logo erop</li>
                                <li>Een USB stick met de uiteindelijke master en de video in ZIEK HOGE kwaliteit</li>
                                <li>En meer....</li>
                            </ul>
                        </p>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/winpakket.jpg">
                        </div>
                        <h2>Daag je vrienden uit om een nog vettere, dampende video op te nemen! <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.leftalive.nl/video/">Deel deze pagina met ze</a> en nodig ze uit om mee te doen. We hebben HEEL VEEL beelden nodig dus share je kapot!</h2>
                    </div>

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
