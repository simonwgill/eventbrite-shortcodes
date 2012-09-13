=== Eventbrite for WordPress ===
Contributors: simonwgill
Tags: events, eventbrite
Requires at least: WordPress 3.0
Tested up to: WordPress 3.4.1
Stable tag: 0.1.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.txt

Shortcodes and widgets to use on a Wordpress site to show Eventbrite widgets.

== Description ==

This plugin allows you to show the following [Eventbrite widgets](http://developer.eventbrite.com/doc/widgets/) on your site

= Ticket Preview =

To show the ticket preview for http://www.eventbrite.co.uk/event/4262294638, add [eventbrite-tickets eid="4262294638"] to the content.

You can change the height and width (which default to 100% and 256 pixels respectively) too. For example [eventbrite-tickets eid="4262294638" height="100%" width="256"]. You can use percentages or numbers of pixels.

= Event Countdown =

Add the widget to the appropriate sidebar and set the event id of the event you want to appear.

== Installation ==

Please follow the [standard installation procedure for WordPress plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

== Frequently Asked Questions ==

== Changelog ==

= 0.1.1 =
* Added output buffering to put the output of ticket preview shortcode in the correct place.

= 0.1 =
* First stable release.
* Ticket Preview Shortcode
* Event Countdown Widget