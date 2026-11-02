<?php
/**
 * Randall Hartman theme functions.
 *
 * Almost everything lives in theme.json, templates, parts and patterns.
 * This file only loads the small stylesheet and script, registers the
 * block styles Randall can pick in the editor, and keeps old posts tidy.
 *
 * @package randall-hartman
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'RANDALL_HARTMAN_VERSION', wp_get_theme( get_template() )->get( 'Version' ) );

/**
 * The MailerLite page every signup button points to.
 */
function randall_hartman_signup_url() {
	return 'https://randall-hartman-kao4zj.subscribepage.io';
}

add_action( 'after_setup_theme', 'randall_hartman_setup' );
function randall_hartman_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
}

add_action( 'wp_enqueue_scripts', 'randall_hartman_assets' );
function randall_hartman_assets() {
	wp_enqueue_style(
		'randall-hartman',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		RANDALL_HARTMAN_VERSION
	);
	wp_enqueue_script(
		'randall-hartman',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		RANDALL_HARTMAN_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}

/**
 * Preload the two fonts the first screen uses, so the name and intro
 * do not reflow after load.
 */
add_action( 'wp_head', 'randall_hartman_preload_fonts', 1 );
function randall_hartman_preload_fonts() {
	foreach ( array( 'eb-garamond-variable.woff2', 'archivo-variable.woff2' ) as $font ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( get_theme_file_uri( 'assets/fonts/' . $font ) )
		);
	}
}

add_action( 'init', 'randall_hartman_block_styles' );
function randall_hartman_block_styles() {
	register_block_style(
		'core/list',
		array(
			'name'  => 'struck',
			'label' => __( 'Crossed out', 'randall-hartman' ),
		)
	);
	register_block_style(
		'core/quote',
		array(
			'name'  => 'notebook',
			'label' => __( 'Notebook (large gold)', 'randall-hartman' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'text-link',
			'label' => __( 'Underlined link', 'randall-hartman' ),
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'  => 'poster',
			'label' => __( 'Poster (tall capitals)', 'randall-hartman' ),
		)
	);
}

add_action( 'init', 'randall_hartman_pattern_categories' );
function randall_hartman_pattern_categories() {
	register_block_pattern_category(
		'randall-hartman',
		array(
			'label'       => __( 'Randall Hartman', 'randall-hartman' ),
			'description' => __( 'Sections from the randallhartman.com design.', 'randall-hartman' ),
		)
	);
	register_block_pattern_category(
		'randall-hartman-pages',
		array(
			'label'       => __( 'Randall Hartman: whole pages', 'randall-hartman' ),
			'description' => __( 'Starting layouts for full pages.', 'randall-hartman' ),
		)
	);
}

/**
 * Excerpts end with a plain ellipsis rather than "[…]".
 */
add_filter( 'excerpt_more', 'randall_hartman_excerpt_more' );
function randall_hartman_excerpt_more() {
	return '…';
}
