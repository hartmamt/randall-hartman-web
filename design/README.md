# Design: homepage mockup (Oct 2026)

Mockup canvas (Claude Design): https://claude.ai/artifact/YGVFgo4djC1bzcr8f9VTRG
Artboards: Homepage, Single essay, Design tokens.

- `theme.json` is a draft of the settings/styles the block theme will start from. It mirrors the tokens artboard.
- `assets/`: `cover.jpg` is the final cover (from the Jul 31 2026 comps PDF, last page). `collage_*` are torn-paper backgrounds generated with gpt-image-2.5 to extend the cover art; `desk`, `lightning` are generated mood images; `portrait_*` and `photo_tree` are Randall's own photos.
- Palette and type are sampled from the final cover: teal-black and slate torn paper, orange/amber rays, pale-gold glow, white Garamond title. Fonts: EB Garamond + Inter.
- Layout follows brianmclaren.net (Randall's favorite): announcement bar, theme-led headline, credibility strip, "Start where you are" doorways, writing list with dates, newsletter band.
- Scroll micro-animations are pure CSS (`animation-timeline: view()`), gated by `@supports` and `prefers-reduced-motion`.

Open items: Oord/Gushee endorsement wording and credentials, retailer links, sign-off on draft copy (hero intro, From Randall note).
