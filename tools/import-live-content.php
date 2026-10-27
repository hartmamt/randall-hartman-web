<?php
/**
 * Import Randall's public posts and pages into a local WordPress, for testing the theme.
 *
 * Reads the JSON that tools/fetch-live-content.sh saved from the live site's public
 * REST API, and recreates the posts and pages with the same IDs, slugs, dates,
 * categories and tags, so every URL matches the live site.
 *
 * Run with WP-CLI:  wp eval-file tools/import-live-content.php <json-dir>
 *
 * Content is the rendered HTML (the raw editor source needs a login), so images
 * still load from www.randallhartman.com. Nothing is written back to the live site.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$dir = isset( $args[0] ) ? rtrim( $args[0], '/' ) : '';
if ( ! $dir || ! is_dir( $dir ) ) {
	WP_CLI::error( 'Pass the folder that holds the fetched JSON.' );
}

function rh_read_json( $file ) {
	return file_exists( $file ) ? json_decode( file_get_contents( $file ), true ) : array();
}

// Terms keep their live IDs through a map.
$term_map = array();
foreach ( array( 'category' => 'categories.json', 'post_tag' => 'tags.json' ) as $tax => $file ) {
	foreach ( rh_read_json( "$dir/$file" ) as $t ) {
		$existing = get_term_by( 'slug', $t['slug'], $tax );
		if ( $existing ) {
			$term_map[ $tax ][ $t['id'] ] = (int) $existing->term_id;
			continue;
		}
		$made = wp_insert_term( html_entity_decode( $t['name'] ), $tax, array( 'slug' => $t['slug'] ) );
		if ( ! is_wp_error( $made ) ) {
			$term_map[ $tax ][ $t['id'] ] = (int) $made['term_id'];
		}
	}
}

$count = 0;
foreach ( array( 'post' => 'posts.json', 'page' => 'pages.json' ) as $type => $file ) {
	$items = rh_read_json( "$dir/$file" );
	// Parents first, so child pages can point at them.
	usort( $items, function ( $a, $b ) {
		return ( $a['parent'] ?? 0 ) <=> ( $b['parent'] ?? 0 );
	} );
	foreach ( $items as $item ) {
		if ( get_post( $item['id'] ) ) {
			continue;
		}
		$id = wp_insert_post(
			array(
				'import_id'     => $item['id'],
				'post_type'     => $type,
				'post_status'   => 'publish',
				'post_title'    => html_entity_decode( $item['title']['rendered'], ENT_QUOTES ),
				'post_name'     => $item['slug'],
				'post_content'  => $item['content']['rendered'],
				'post_date'     => str_replace( 'T', ' ', $item['date'] ),
				'post_date_gmt' => str_replace( 'T', ' ', $item['date_gmt'] ),
				'post_parent'   => $item['parent'] ?? 0,
				'menu_order'    => $item['menu_order'] ?? 0,
				'post_author'   => 1,
			),
			true
		);
		if ( is_wp_error( $id ) ) {
			WP_CLI::warning( $item['slug'] . ': ' . $id->get_error_message() );
			continue;
		}
		if ( 'post' === $type ) {
			$cats = array_filter( array_map( function ( $c ) use ( $term_map ) {
				return $term_map['category'][ $c ] ?? 0;
			}, $item['categories'] ) );
			$tags = array_filter( array_map( function ( $t ) use ( $term_map ) {
				return $term_map['post_tag'][ $t ] ?? 0;
			}, $item['tags'] ) );
			wp_set_post_terms( $id, $cats, 'category' );
			wp_set_post_terms( $id, $tags, 'post_tag' );
		}
		$count++;
	}
}

WP_CLI::success( "Imported $count posts and pages." );
