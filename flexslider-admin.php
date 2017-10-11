<?php
/**
 * Plugin Name: Flexslider Admin
 * Plugin URI: https://github.com/emrikol/Flexslider-Admin
 * Description: A wp-admin interface to manage slides for Flexslider.  Does not include a frontend function.  It will need to be coded manually, please see docs, once they're created.
 * Version: 1.0.0
 * Text Domain: flexslider-admin
 * Author: Derrick Tennant
 * Author URI: https://emrikol.com/
 * GitHub Plugin URI: https://github.com/emrikol/Flexslider-Admin
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package WordPress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( dirname( __FILE__ ) . '/inc/class-flexslider-admin.php' );

Flexslider_Admin::get_instance();