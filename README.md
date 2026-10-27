# randallhartman.com

The WordPress block theme for randallhartman.com, and the design work behind it.

| Folder | What it is |
| --- | --- |
| `theme/randall-hartman/` | The theme. Zip this folder (or run `tools/build-zip.sh`) and upload it under Appearance > Themes > Add New > Upload Theme. |
| `playground/` | A WordPress Playground blueprint and a snapshot of Randall's public posts and pages, for previewing the theme in a browser with no hosting. |
| `tools/` | Scripts to fetch the live content, import it into a test site, apply the launch settings, and build the zip. |
| `extras/` | An optional must-use plugin that keeps old posts readable if WPBakery or other old plugins are switched off later. |
| `design/` | Design notes and earlier prototypes. |

## Preview it in your browser

Open the Playground link in the pull request (or load `playground/blueprint.json` at
<https://playground.wordpress.net/>). It installs the theme from this branch, imports a
snapshot of the live posts and pages, and applies the same settings as staging. Nothing is
saved, and the live site is never touched. The admin login is automatic.

## How the theme is built

Core blocks only. No page builder, no custom blocks, no required plugins.

- `theme.json`: colours from the book cover, EB Garamond and Archivo (self-hosted), type scale, spacing, widths.
- `templates/`: front page, Writing archive (`home`), archive, search, single piece, page, full-width page (`page-canvas`), 404.
- `parts/`: announcement bar, header, footer.
- `patterns/`: every homepage section, the book band, endorsements, newsletter signup, end-of-piece signup, a compact book promo, speaking, and whole About and Book page layouts. Randall finds them in the editor under Patterns > Randall Hartman.
- `assets/css/theme.css` and `assets/js/theme.js`: the rays, the crossed-out lines, the cover tilt and the footer name. The site works without the script.

## Going live (staging first)

1. Upload and activate the theme. The homepage changes at once; nothing else is needed for it.
2. Settings > Reading: "A static page". Homepage: any page (for example a new "Home"). Posts page: the existing **Articles** page, renamed "Writing". This keeps `/articles/` as the archive address.
3. Edit the existing **About me** page: choose the "Full width, no title" template and insert the "About page" pattern. Do the same on **A God Awful God** with the "Book page" pattern. Both keep their current addresses.
4. Publish a privacy policy page at `/privacy-policy/`.
5. Check the menus under Appearance > Editor > Navigation.

`tools/setup-test-site.php` does steps 2 to 4 automatically on a test site.

## Testing locally

```sh
tools/fetch-live-content.sh playground/content     # refresh the snapshot (optional)
wp theme activate randall-hartman
wp eval-file tools/import-live-content.php playground/content
wp eval-file tools/setup-test-site.php
```
