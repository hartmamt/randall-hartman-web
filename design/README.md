# Design: homepage mockup (Oct 2026)

Mockup canvas (Claude Design): https://claude.ai/artifact/YGVFgo4djC1bzcr8f9VTRG
Clickable prototype (shareable with Randall): https://claude.ai/artifact/TD4E6SaRy6u7TeMP8ZFxX7 (source: `prototype/index.html`, images from `assets/`)
Artboards: Homepage, Single essay, Design tokens.

- `theme.json` is a draft of the settings/styles the block theme will start from. It mirrors the tokens artboard.
- `assets/`: `cover.jpg` is the final cover (from the Jul 31 2026 comps PDF, last page). `collage_*` are torn-paper backgrounds generated with gpt-image-2.5 to extend the cover art; `desk`, `lightning` are generated mood images; `portrait_*` and `photo_tree` are Randall's own photos.
- Palette and type are sampled from the final cover: teal-black and slate torn paper, orange/amber rays, pale-gold glow, white Garamond title. Fonts: EB Garamond + Inter.
- Layout follows brianmclaren.net (Randall's favorite): announcement bar, theme-led headline, credibility strip, "Start where you are" doorways, writing list with dates, newsletter band.
- Scroll micro-animations are pure CSS (`animation-timeline: view()`), gated by `@supports` and `prefers-reduced-motion`.

Open items: Oord/Gushee endorsement wording and credentials, retailer links, sign-off on draft copy (hero intro, From Randall note).

## Alternate directions (Oct 24)
- **B · The Torn Page** (wild): https://claude.ai/artifact/DTJEpHf3WhU4FFG3PcVpbA. Layered torn-paper parallax hero (transparent gpt-image layers), Fraunces variable type animated on scroll, word-by-word quote reveal, horizontal-scroll essays, view transitions, cursor light, 3D cover tilt.
- **C · Questions Welcome** (edgier): https://claude.ai/artifact/3NM87XUbmNKpucgUdzfoNy. Riso/xerox zine: Archivo variable width stretched by scroll, strike-through manifesto, cursor-preview essay index, sticky stacked cards, halftone portrait made from Randall's real photo, CSS `@property` read-percentage counter.
Shared images live in `assets/`; each prototype folder holds only its own extra textures.
