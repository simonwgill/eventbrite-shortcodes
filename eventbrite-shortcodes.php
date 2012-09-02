<?php
/**
 * Plugin Name: Eventbrite Shortcodes for WordPress
 * Plugin URI: http://wordpress.org/extend/plugins/eventbrite-shortcodes/
 * Description: Display Eventbrite Widgets on your site.
 * Author: Simon Gill
 * Version: 0.1
 * Author URI: http://www.patternwebsolutions.com/
 *
 * @package eventbrite-shortcodes
 * @author Simon Gill <simon@patternwebsolutions.com>
 * @copyright 2012 Pattern Web Solutions
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @version 0.1
 * @since 0.1
 */

define( 'EBS_VERSION', '0.1' );
define( 'EBS_ROOT', dirname( __FILE__ ) );
define( 'EBS_WEB_ROOT', WP_PLUGIN_URL . '/' . basename( EBS_ROOT ) );

require_once EBS_ROOT . '/shortcodes/ticket-preview.php';
require_once EBS_ROOT . '/widgets/event-countdown.php';