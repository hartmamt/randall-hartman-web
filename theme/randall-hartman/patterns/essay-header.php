<?php
/**
 * Title: Piece of writing: title and byline
 * Slug: randall-hartman/essay-header
 * Categories: randall-hartman
 * Inserter: no
 *
 * @package randall-hartman
 */

?>
<!-- wp:group {"className":"rh-essay-head","layout":{"type":"constrained"}} -->
<div class="wp-block-group rh-essay-head"><!-- wp:post-time-to-read {"style":{"typography":{"fontStretch":"85%"}}} /-->

<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(40px, 5.2vw, 68px)","lineHeight":"1.04"},"spacing":{"margin":{"top":"16px"}}}} /-->

<!-- wp:group {"className":"rh-byline","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group rh-byline" style="margin-top:28px"><!-- wp:image {"width":"52px","height":"52px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="" style="width:52px;height:52px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Randall Hartman</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
