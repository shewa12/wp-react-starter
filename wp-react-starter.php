<?php
/**
 * Plugin Name: WP React Starter
 * Version:     1.0.0
 * Plugin URI:  https://github.com/shewa12/wp-react-starter
 * Description: Kick off plugin development with react ready app
 * Author:      Shewa
 * Author URI:  https://shewazone.com
 * Text Domain: wp-react-starter
 * Domain Path: /languages/
 * License:     GPL v3
 *
 * @package WPReactStater
 */

define( 'WP_REACT_STARTER_VERSION', '1.0.0' );
define( 'WP_REACT_STARTER_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_REACT_STARTER_PATH', plugin_dir_path( __FILE__ ) );

add_action( 'admin_menu', 'wp_react_starter_admin_menu' );
add_action( 'admin_enqueue_scripts', 'wp_react_starter_enqueue_scripts' );

if ( ! function_exists( 'wp_react_starter_admin_menu' ) ) {
	/**
	 * Register admin menu
	 *
	 * @return void
	 */
	function wp_react_starter_admin_menu() {
		add_menu_page(
			'WP React Starter',
			'WP React Starter',
			'manage_options',
			'wp-react-starter',
			'wp_react_starter_menu_view'
		);
	}
}

if ( ! function_exists( 'wp_react_starter_menu_view' ) ) {
	/**
	 * Admin page view
	 *
	 * @return void
	 */
	function wp_react_starter_menu_view() {
?>
		<div id="app"></div>
		<?
	}
}

if ( ! function_exists( 'wp_react_starter_enqueue_scripts' ) ) {
	/**
	 * Enqueue scripts & styles
	 *
	 * @param string $page Page slug.
	 *
	 * @return void
	 */
	function wp_react_starter_enqueue_scripts( $page ) {
		$inc = require_once WP_REACT_STARTER_PATH . 'build/index.asset.php';

		if ( "toplevel_page_wp-react-starter" === $page ) {
			wp_enqueue_script(
				'wp-react-starter',
				WP_REACT_STARTER_URL . 'build/index.js',
				$inc['dependencies'],
				$inc['version'],
				true
			);
			wp_enqueue_style(
				'wp-react-starter',
				WP_REACT_STARTER_URL . 'build/style-index.css'
			);
		}
	}
}
