<?php
/**
 * Title: Book cover
 * Slug: randall-hartman/book-cover
 * Categories: randall-hartman
 * Description: The cover of A God Awful God, tilted toward the pointer, with the release date note.
 *
 * @package randall-hartman
 */

?>
<!-- wp:group {"className":"rh-tilt","layout":{"type":"default"}} -->
<div class="wp-block-group rh-tilt"><!-- wp:image {"sizeSlug":"full","className":"rh-cover"} -->
<figure class="wp-block-image size-full rh-cover"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover.webp' ) ); ?>" alt="Cover of A God Awful God: The God I Feared Wasn’t the God I Found, a memoir by Randall Hartman. A lone figure walks a winding gold path toward a bright opening in a dark forest." width="800" height="1236"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"rh-note","backgroundColor":"gold","textColor":"night"} -->
<p class="rh-note has-night-color has-gold-background-color has-text-color has-background">Dec 8</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
