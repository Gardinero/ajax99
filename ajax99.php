<?php
/**
 * Plugin Name: Ajax Test 99
 * Plugin URI: http://www.googl.de
 * Description: Simple Ajax Test
 * Version: 1.0.0
 * Author: LSG
 * Author URI: http://www.google.de
 * License: GPL2
 */

/*  Copyright 2016  Lars Gärtner  (email : lars.gaertner@lsgit.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


global $wpdb;
//global $ajax99_prefix = "{$wpdb->prefix}mpbs";

define('PLUGIN_DIR_URLx', plugin_dir_url(__FILE__));
define('PLUGIN_DIR_PATHx', plugin_dir_path(__FILE__));





require_once( PLUGIN_DIR_PATHx.'functions.php');

register_activation_hook( __FILE__, 'ajax99_enable_function' );
register_deactivation_hook( __FILE__, 'ajax99_disable_function' );

add_action( 'admin_menu', 'ajax99_settings_menu' );
// add_action( 'admin_init', 'ajax99_settings_init' );
add_action( 'wp_enqueue_scripts', 'ajax99_enqueue_scripts' );

?>
