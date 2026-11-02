<?php
/**
 * After the import, apply the settings the launch plan calls for, so a test site
 * behaves like staging will after the theme is switched on.
 *
 * Run with WP-CLI:  wp eval-file tools/setup-test-site.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );
update_option( 'blogname', 'Randall Hartman' );
update_option( 'blogdescription', 'Writer · Author · Former Pastor' );

// Drop the sample content a fresh install comes with.
foreach ( array( 'hello-world' => 'post', 'sample-page' => 'page' ) as $slug => $type ) {
	$sample = get_page_by_path( $slug, OBJECT, $type );
	if ( $sample ) {
		wp_delete_post( $sample->ID, true );
	}
}

// Static home page, and the Writing archive at the existing /articles/ address.
$home = get_page_by_path( 'home' );
$home_id = $home ? $home->ID : wp_insert_post( array( 'post_type' => 'page', 'post_status' => 'publish', 'post_title' => 'Home', 'post_name' => 'home' ) );
$articles = get_page_by_path( 'articles' );
if ( $articles ) {
	wp_update_post( array( 'ID' => $articles->ID, 'post_title' => 'Writing' ) );
	update_option( 'page_for_posts', $articles->ID );
}
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $home_id );

// About and Book pages built from the theme's page patterns.
$patterns = WP_Block_Patterns_Registry::get_instance();
foreach ( array( 'about-me' => 'page-about', 'a-god-awful-god' => 'page-book' ) as $slug => $pattern ) {
	$page = get_page_by_path( $slug );
	$p    = $patterns->get_registered( 'randall-hartman/' . $pattern );
	if ( $page && $p ) {
		wp_update_post(
			array(
				'ID'           => $page->ID,
				'post_title'   => 'about-me' === $slug ? 'About' : $page->post_title,
				'post_content' => $p['content'],
			)
		);
		update_post_meta( $page->ID, '_wp_page_template', 'page-canvas' );
	}
}

// A privacy page for the footer and signup links (wording still to be written with Randall).
$privacy_id = (int) get_option( 'wp_page_for_privacy_policy' );
if ( $privacy_id && get_post( $privacy_id ) ) {
	wp_update_post( array( 'ID' => $privacy_id, 'post_status' => 'publish', 'post_name' => 'privacy-policy' ) );
}

flush_rewrite_rules( false );
if ( class_exists( 'WP_CLI' ) ) {
	WP_CLI::success( 'Test site ready.' );
}
