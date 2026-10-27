<?php
/**
 * Title: Home: introduction with portrait
 * Slug: randall-hartman/home-hero
 * Categories: randall-hartman, banner
 * Description: Randall's portrait beside his name, roles, the book's subtitle, a short intro and the free excerpt button.
 * Viewport Width: 1400
 *
 * @package randall-hartman
 */

?>
<!-- wp:columns {"align":"full","className":"rh-hero","backgroundColor":"paper"} -->
<div class="wp-block-columns alignfull rh-hero has-paper-background-color has-background"><!-- wp:column {"width":"55%","className":"rh-photo-col"} -->
<div class="wp-block-column rh-photo-col" style="flex-basis:55%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rh-fill"} -->
<figure class="wp-block-image size-full rh-fill"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="Randall Hartman in white-framed glasses, looking at the camera, black and white"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"rh-hero-copy"} -->
<div class="wp-block-column is-vertically-aligned-center rh-hero-copy" style="flex-basis:45%"><!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-huge-font-size">Randall Hartman</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rh-roles","style":{"typography":{"fontSize":"clamp(17px, 1.4vw, 20px)"}}} -->
<p class="rh-roles" style="font-size:clamp(17px, 1.4vw, 20px)">Writer <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">·</mark> Author <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">·</mark> Former Pastor</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontSize":"clamp(28px, 2.8vw, 40px)","lineHeight":"1.15"}}} -->
<p style="font-size:clamp(28px, 2.8vw, 40px);font-style:italic;line-height:1.15">“The God I feared wasn’t the God I found.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">I spent nearly forty years as a pastor, carrying questions I was often afraid to ask. Today I write about faith, doubt, the cost of changing my mind, and discovering a God who looks more like love than fear.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"rh-book-note","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group rh-book-note"><!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">That line is the subtitle of my memoir, <em>A God Awful God</em>, out December 8. The opening scene is free.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://randall-hartman-kao4zj.subscribepage.io" target="_blank" rel="noreferrer noopener">Get the free excerpt</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/articles/">Explore all writing</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
