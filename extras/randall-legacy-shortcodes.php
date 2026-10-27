<?php
/**
 * Plugin Name: Randall Hartman: legacy shortcode cleanup
 * Description: Keeps old posts readable after WPBakery, OptinMonster or the cart plugin is switched off. Drop into wp-content/mu-plugins/ only when one of them is retired.
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Old posts and pages were written with plugins that may be switched off
 * after launch (WPBakery, OptinMonster, a shopping cart). If one of them is
 * gone, its shortcodes would print as raw [brackets]. These fallbacks keep the
 * words and drop the brackets. They do nothing while the plugin is active.
 */
add_action( 'init', 'randall_legacy_register_shortcodes', 99 );
function randall_legacy_register_shortcodes() {
	$keep_content = array( 'vc_row', 'vc_row_inner', 'vc_column', 'vc_column_inner', 'vc_column_text', 'vc_section' );
	$drop         = array( 'optin-monster-shortcode', 'wp_cart_button', 'show_wp_shopping_cart', 'vc_separator', 'vc_empty_space' );

	foreach ( $keep_content as $tag ) {
		if ( ! shortcode_exists( $tag ) ) {
			add_shortcode( $tag, 'randall_legacy_shortcode_passthrough' );
		}
	}
	foreach ( $drop as $tag ) {
		if ( ! shortcode_exists( $tag ) ) {
			add_shortcode( $tag, '__return_empty_string' );
		}
	}
}

function randall_legacy_shortcode_passthrough( $atts, $content = '' ) {
	return do_shortcode( (string) $content );
}
