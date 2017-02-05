<?php
/**
 * Events List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is needed.
 *
 * This view contains the filters required to create an effective events list widget view.
 *
 * You can recreate an ENTIRELY new events list widget view by doing a template override,
 * and placing a list-widget.php file in a tribe-events/widgets/ directory
 * within your theme directory, which will override the /views/widgets/list-widget.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @return string
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


$events_label_plural = tribe_get_event_label_plural();

$posts = tribe_get_list_widget_events();

// Check if any event posts are found.
if ( $posts ) : ?>

	<ol class="hfeed vcalendar">
		<?php
		// Setup the post data for each event.
		foreach ( $posts as $post ) :
			setup_postdata( $post );
			?>
			<li class="custom-list-widget-events">

				<?php
					$link = tribe_get_event_website_url( $event );
					if (empty($link) ) {
						$link = esc_url( tribe_get_event_link() );
					}
					$cost = tribe_get_cost( null, true );
					if (empty($cost) ) {
						$cost = "FREE";
					}
				?>

				<a href="<?php echo $link ?>" rel="bookmark" target="_blank">
					<div class="date-time">
						<div class="date"><?php echo tribe_get_start_date( $event, false, "j F" ); ?></div>
						<div class="time"><?php echo tribe_events_event_start_time(); ?></div>
					</div>
					<div class="location">
						<h4 class="title"><?php the_title(); ?></h4>
						<div><?php echo tribe_get_city( $event );?></div>
					</div>
					<div class="cta">
						<div class="cost"><?php echo $cost; ?></div>
						<div class="going">I'm going!</div>
					</div>
				</a>

			</li>
		<?php
		endforeach;
		?>
	</ol><!-- .hfeed -->

	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf('View All Shows'); ?></a>
	</p>

<?php
// No events were found.
else : ?>
	<p>No shows planned, book us!</p>
	<p>Phone: <a href="tel:0031630336052">06-30336052</a></p>
	<p>Email: <a href="mailto:mail@leftalive.nl">mail@leftalive.nl</a></p>
<?php
endif;
