# Design: homepage mockup (Oct 2026)

Mockup canvas (Claude Design): https://claude.ai/artifact/YGVFgo4djC1bzcr8f9VTRG
Artboards: Homepage, Single essay, Design tokens.

- `theme.json` is a draft of the settings/styles the block theme will start from. It mirrors the tokens artboard.
- `assets/` holds imagery generated with OpenAI gpt-image-2.5 for the mockup: `hero` (storm breaking), `desk`, `dawn`, `lightning`, and `cover` (a cover *concept* only, replace with the publisher's final art).
- Layout follows brianmclaren.net (Randall's favorite): announcement bar, theme-led headline, credibility strip, "Start where you are" doorways, writing list with dates, newsletter band.
- Scroll micro-animations are pure CSS (`animation-timeline: view()`), gated by `@supports` and `prefers-reduced-motion`.

Open items: Oord/Gushee endorsement wording and credentials, Randall's portrait, retailer links, final cover art, sign-off on draft copy (hero intro, From Randall note).
