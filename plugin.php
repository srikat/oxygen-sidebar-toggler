<?php
/*
Plugin Name:	Oxygen Sidebar Toggler
Plugin URI:		https://wpdevdesign.com/oxygen-sidebar-toggler-plugin/
Description:	Adds Show, Hide buttons in the Oxygen editor. Hide button hides the left sidebar. Show button displays the controls.
Version:		1.0.1
Author:			Sridhar Katakam
Author URI:		https://sridharkatakam.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

// If Oxygen is not active, abort.
// Commenting this out for now as this seems to cause issues..
// if ( ! is_plugin_active( 'oxygen/functions.php' ) ) {
// 	die;
// }

add_action( 'oxygen_after_toolbar', 'ost_add_toggler' );
/**
 * Add #sidebar-toggler HTML.
 */
function ost_add_toggler() { ?>

	<div id="sidebar-toggler">
		<button class="hide" type="button"><i class="fa fa-eye-slash"></i></button>
	</div>

<?php }

add_action( 'oxygen_enqueue_ui_scripts', 'ost_enqueue_files' );
/**
 * Loads the plugin's CSS and JS files.
 */
function ost_enqueue_files() {

	wp_enqueue_style( 'oxygen-sidebar-toggler', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );

	wp_enqueue_script( 'oxygen-sidebar-toggler', plugin_dir_url( __FILE__ ) . 'assets/js/main.js', array( 'jquery' ), '1.0.0', true );

}
