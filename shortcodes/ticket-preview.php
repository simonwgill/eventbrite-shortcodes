<?php
/**
 * Shortcode to bring Eventbrite Ticket Preview into a page
 *
 * Generates html to provide http://developer.eventbrite.com/doc/widgets/#ticket
 *
 * @package eventbrite-shortcodes
 * @author Simon Gill <simon@patternwebsolutions.com>
 * @copyright 2012 Pattern Web Solutions
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @version 0.1
 * @since 0.1
 */

/**
 * Handles the eventbrite-tickets shortcode.
 *
 * @param array $atts Associative array that should contain a string named "eid" (the eventbrite event id) and optionally strings named "height" and "width".
 * @version 0.1.1
 * @since 0.1
 * @example [eventbrite-tickets event_id="1122334455"]
 */
function eventbrite_tickets( $atts ) {
    ob_start();
    extract( shortcode_atts( array(
        'eid' => '',
        'width' => '100%',
        'height' => '256'
    ), $atts ) );
    if (!is_null($eid) && $eid != "") {
        ?>
            <iframe src="http://www.eventbrite.com/tickets-external?eid=<?php echo urlencode_deep($eid) ?>&ref=etckt" frameborder="0" height="<?php echo $height ?>" width="<?php echo $width ?>" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
        <?php
    } else {
        ?>
            <aside class="error">
                <h1>No Event ID</h1>
                <p>Can't show tickets without the eventid.</p>
            </aside>
        <?php
    }

    return ob_get_clean();
}

add_shortcode( 'eventbrite-tickets', 'eventbrite_tickets');