<?php
/**
 * Widget to bring Eventbrite Event Calender into a widget area
 *
 * Generates html to provide http://developer.eventbrite.com/doc/widgets/#calender
 *
 * @package eventbrite-shortcodes
 * @author Simon Gill <simon@patternwebsolutions.com>
 * @copyright 2012 Pattern Web Solutions
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @version 0.2
 * @since 0.2
 */

/**
 * Adds a widget for Eventbrite Widget Calender.
 *
 * @since 0.1
 */
class Event_Calender_Widget extends WP_Widget {


    const WIDGET_ID = "event_calander_widget";
    const WIDGET_NAME = "Eventbrite Event Calendar";

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            Event_Calender_Widget::WIDGET_ID,
            Event_Calender_Widget::WIDGET_NAME,
            array('description' => __('Shows the calender for an Eventbrite event.','eventbrite-shortcodes'))
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $eid = $instance['eid'];

        echo $before_widget;
        if ( ! empty( $title ) )
            echo $before_title . $title . $after_title;

        if ( ! empty( $eid ) )
            ?>
                <iframe  src="http://www.eventbrite.co.uk/calendar-widget?eid=<?php echo urlencode($eid) ?>" frameborder="0" height="521" width="195" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe>
            <?php

        echo $after_widget;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['eid'] = strip_tags($new_instance['eid']);

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'text_domain' );
        }
        if ( isset( $instance[ 'eid' ] ) ) {
            $eid = $instance[ 'eid' ];
        }
        else {
            $eid = "";
        }
        ?>
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'eid' ); ?>"><?php _e( 'Event ID:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'eid' ); ?>" name="<?php echo $this->get_field_name( 'eid' ); ?>" type="text" value="<?php echo esc_attr( $eid ); ?>" />
    </p>
    <?php
    }

}

// register widget
add_action( 'widgets_init', create_function( '', 'register_widget( "event_calender_widget" );' ) );