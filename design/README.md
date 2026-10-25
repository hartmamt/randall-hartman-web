# Design: homepage mockup (Oct 2026)

Mockup canvas (Claude Design): https://claude.ai/artifact/YGVFgo4djC1bzcr8f9VTRG
Clickable prototype (shareable with Randall): https://claude.ai/artifact/TD4E6SaRy6u7TeMP8ZFxX7 (source: `prototype/index.html`, images from `assets/`)
Artboards: Homepage, Single essay, Design tokens.

- `theme.json` is a draft of the settings/styles the block theme will start from. It mirrors the tokens artboard.
- `assets/`: `cover.jpg` is the final cover (from the Jul 31 2026 comps PDF, page 3: painted storm with a glowing doorway). `collage_*` are torn-paper backgrounds generated with gpt-image-2.5, re-graded to the cover's gold and slate; `desk`, `lightning` are generated mood images; `portrait_*` and `photo_tree` are Randall's own photos.
- Palette and type are sampled from the final cover: night-black and teal-slate brushstrokes, doorway gold #F6B90E (buttons), subtitle gold #F5CA4B, road amber #C47413, bronze #8A5A10 links, white Garamond title. Never use Randall's middle initial. Fonts: EB Garamond + Inter.
- Layout follows brianmclaren.net (Randall's favorite): announcement bar, theme-led headline, credibility strip, "Start where you are" doorways, writing list with dates, newsletter band.
- Scroll micro-animations are pure CSS (`animation-timeline: view()`), gated by `@supports` and `prefers-reduced-motion`.

Open items: Oord/Gushee endorsement wording and credentials, retailer links, sign-off on draft copy (hero intro, From Randall note).

## Alternate directions (Oct 24)
- **B · The Torn Page** (wild): https://claude.ai/artifact/DTJEpHf3WhU4FFG3PcVpbA. Layered torn-paper parallax hero (transparent gpt-image layers), Fraunces variable type animated on scroll, word-by-word quote reveal, horizontal-scroll essays, view transitions, cursor light, 3D cover tilt.
- **C · Questions Welcome** (edgier): https://claude.ai/artifact/3NM87XUbmNKpucgUdzfoNy. Riso/xerox zine: Archivo variable width stretched by scroll, strike-through manifesto, cursor-preview essay index, sticky stacked cards, halftone portrait made from Randall's real photo, CSS `@property` read-percentage counter.
- **D · Sunbeam** (designed by a fluffy tabby): https://claude.ai/artifact/JVLsoWWG5S9dqMC7gopjYX. Warm cream and ginger, Fraunces SOFT/WONK, gpt-image gouache cats (napping on the cover, peeking over the newsletter, paw dangling from the top), yarn thread that unspools with scroll, paw-print cursor trail, scroll-swept sunbeams, “Nap mode” animation toggle. Source in `prototype-d-tabby/`.
Shared images live in `assets/`; each prototype folder holds only its own extra textures.

## Version E (Oct 25)
https://claude.ai/artifact/CM4PvsXsAsX3y7RSLwNSV7 · source in `prototype-e/`. Builds on A, made to look less generated and less like brianmclaren.net, using the taste-skill (Leonxlnx/taste-skill) as design guidance.
- Imagery is only Randall's own photos, all in one black-and-white treatment: the white-glasses portrait (from his site, 2022/10/IMG_0965), the fog tree, and the Queen Anne's lace shot (2021/05/2driedup, cropped to remove the signature that has the middle initial). The generated collages, desk and lightning images are gone.
- Type: EB Garamond plus Archivo condensed (replaces Inter). Archivo carries the name, dates and struck lines (Version C's boldness, used in a few places).
- Colours: fog ground (a tint of the cover's pale strokes), night and storm bands, doorway gold as one full field (Speaking), path orange only on buttons and strike marks. No italic accent words, eyebrows, glass header or gradients.
- "Show WordPress blocks" in the bottom ribbon labels each section with the block pattern / template it becomes.
