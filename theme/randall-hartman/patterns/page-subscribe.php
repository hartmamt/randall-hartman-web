<?php
/**
 * Title: Subscribe page
 * Slug: randall-hartman/page-subscribe
 * Categories: randall-hartman-pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: The newsletter page the header Subscribe button opens: a short welcome and the MailerLite "Stay Informed" form. Use with the "Full width, no title" template.
 * Viewport Width: 1400
 *
 * @package randall-hartman
 */

?>
<!-- wp:group {"metadata":{"name":"Subscribe"},"align":"full","className":"rh-subscribe","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"paper","textColor":"night","layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull rh-subscribe has-night-color has-paper-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"className":"rh-eyebrow"} -->
<p class="rh-eyebrow">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"500"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size" style="font-weight:500">Stay in the <em class="rh-accent">conversation</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft","style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p class="has-ink-soft-color has-text-color" style="margin-top:24px">An occasional letter from Randall: each new piece of writing, news about <em>A God Awful God</em>, and notes not shared anywhere else. Unsubscribe any time.</p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[mailerlite_form]
<!-- /wp:shortcode --></div>
<!-- /wp:group -->
