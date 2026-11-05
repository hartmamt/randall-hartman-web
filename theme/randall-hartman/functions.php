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

/**
 * MailerLite embedded signup form (account 2515608, form uSJAmM).
 * The universal script loads once per page; the MailerLite plugin adds the same
 * script when it is active, so ours steps aside if window.ml already exists.
 */
function randall_hartman_mailerlite_embed() {
	return '<div class="rh-ml-form"><div class="ml-embedded" data-form="uSJAmM"></div></div>';
}

add_action( 'wp_head', 'randall_hartman_mailerlite_universal', 20 );
function randall_hartman_mailerlite_universal() {
	if ( ! is_singular( 'post' ) ) {
		return;
	}
	?>
<!-- MailerLite Universal -->
<script>
if ( ! window.ml ) {
	(function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
	.push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
	n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
	(window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
	ml('account', '2515608');
}
</script>
<!-- End MailerLite Universal -->
	<?php
}

/**
 * Old posts say "join my email list below" and end with [mailerlite_form …]
 * from the old theme. Show the MailerLite form there instead, whether or not
 * the MailerLite plugin is active.
 */
add_action( 'init', 'randall_hartman_mailerlite_shortcode', 99 );
function randall_hartman_mailerlite_shortcode() {
	remove_shortcode( 'mailerlite_form' );
	add_shortcode( 'mailerlite_form', 'randall_hartman_mailerlite_embed' );
}

/**
 * Every piece of writing ends with the MailerLite form, once: posts that
 * already carry the old shortcode get it there instead.
 */
add_filter( 'the_content', 'randall_hartman_append_signup', 20 );
function randall_hartman_append_signup( $content ) {
	if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() ) {
		return $content;
	}
	if ( false !== strpos( $content, 'ml-embedded' ) || has_shortcode( get_post()->post_content, 'mailerlite_form' ) ) {
		return $content;
	}
	return $content . randall_hartman_mailerlite_embed();
}
