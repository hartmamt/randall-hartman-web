<?php
/**
 * Title: Latest writing
 * Slug: randall-hartman/latest-writing
 * Categories: randall-hartman, query
 * Description: The four newest pieces, updated automatically, with a button to the full archive.
 * Viewport Width: 1400
 *
 * @package randall-hartman
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading -->
<h2 class="wp-block-heading">Latest writing</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":11,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"rh-posts rh-lead","style":{"spacing":{"margin":{"top":"40px"}}}} -->
<div class="wp-block-query rh-posts rh-lead" style="margin-top:40px"><!-- wp:post-template -->
<!-- wp:group {"className":"rh-post","layout":{"type":"default"}} -->
<div class="wp-block-group rh-post"><!-- wp:group {"className":"rh-post-date","layout":{"type":"default"}} -->
<div class="wp-block-group rh-post-date"><!-- wp:post-date {"format":"M j"} /-->

<!-- wp:post-date {"format":"Y"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"12px 28px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:40px"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"night","textColor":"paper"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-paper-color has-night-background-color has-text-color has-background wp-element-button" href="/articles/">Explore all writing</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"rh-small","textColor":"ink-soft"} -->
<p class="rh-small has-ink-soft-color has-text-color">Every piece, back to 2014, with search.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
