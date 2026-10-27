<?php
/**
 * Title: About page
 * Slug: randall-hartman/page-about
 * Categories: randall-hartman-pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Portrait, the long version of Randall's story, a short timeline and the speaking invitation. Use with the "Full width, no title" template.
 * Viewport Width: 1400
 *
 * @package randall-hartman
 */

?>
<!-- wp:columns {"align":"full","className":"rh-hero","backgroundColor":"paper"} -->
<div class="wp-block-columns alignfull rh-hero has-paper-background-color has-background"><!-- wp:column {"width":"55%","className":"rh-photo-col"} -->
<div class="wp-block-column rh-photo-col" style="flex-basis:55%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rh-fill rh-top"} -->
<figure class="wp-block-image size-full rh-fill rh-top"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-corduroy.webp' ) ); ?>" alt="Randall Hartman in a corduroy jacket and bow tie, black and white"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"rh-hero-copy"} -->
<div class="wp-block-column is-vertically-aligned-center rh-hero-copy" style="flex-basis:45%"><!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-huge-font-size">About Randall</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"lineHeight":"1.3"}}} -->
<p class="has-x-large-font-size" style="line-height:1.3">Nearly five decades in ministry. These days he writes, speaks, and keeps asking the questions he was once told not to ask.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"clamp(40px, 7vw, 104px)","top":"48px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:heading -->
<h2 class="wp-block-heading">The long version</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">Randall served nearly forty years as a lead pastor in churches in Indiana, Ohio, and Michigan. Toward the end of his ministry he spent seven years as a professional interim pastor, helping people and churches in transition in Oregon, Arizona, Idaho, Indiana, New Jersey, Alaska, and Ohio.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">He has been a contributing writer for HuffPost and The Good Men Project, and a featured contributor at Sixty and Me.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">In 2021 he was put on a church trial for “teaching doctrine contrary to the Church of the Nazarene,” after writing about changing his mind on the full inclusion of LGBTQ+ people. The trial did not reach a guilty verdict, and he is still an ordained elder.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">He has been married for 51 years. They have a son and a daughter, both married, and seven grandchildren.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
<div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"night","textColor":"paper"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-paper-color has-night-background-color has-text-color has-background wp-element-button" href="/my-transition-story/">My transition story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Along the way</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"rh-timeline"} -->
<ul class="wp-block-list rh-timeline"><!-- wp:list-item -->
<li><strong>School</strong> B.S., Olivet Nazarene University · M.Div. <em>cum laude</em>, Nazarene Theological Seminary · D.Min., Grace Theological Seminary</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>~40 yrs</strong> Lead pastor in Indiana, Ohio, and Michigan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>7 yrs</strong> Interim pastor in seven states, from Oregon to Alaska</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>2021</strong> Church trial; no guilty verdict</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>2026</strong> <em>A God Awful God</em>, Seven Lanterns Press</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"randall-hartman/speaking"} /-->

<!-- wp:pattern {"slug":"randall-hartman/newsletter"} /-->
