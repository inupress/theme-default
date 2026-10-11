# inupress/theme-default

The default theme of the Inupress CMS: a clean, small shell built on Tailwind CSS 4 and Alpine 3.

This package is developed in the `inupress/framework` monorepo (`packages/theme-default`). Report
issues and send changes there.

## Install

```bash
composer require inupress/theme-default
```

Nothing else to do: `INUPRESS_THEME` already defaults to `inupress/theme-default`, so the theme is
picked up on the next request and its CSS and JS are published to `public/vendor/` automatically.

## What it is

- `resources/views/components/layout.blade.php` — the shell every public page is wrapped in.
- `resources/views/home.blade.php` — the site home page.
- `dist/theme.css` — built Tailwind CSS. Committed on purpose: a site owner never runs npm.
- `dist/alpine.js` — Alpine 3, for the theme's own interactive markup.
- The component classes plugins style their markup with: `inupress-prose`, `inupress-card`,
  `inupress-container`, `inupress-btn`, … (see the table in `docs/themes.md`).

## Make your own instead

Do not edit this package: a child theme in `themes/<name>/` overrides it and survives updates.

```json
{
    "name": "My site",
    "parent": "inupress/theme-default",
    "styles": ["dist/theme.css"]
}
```

See `docs/themes.md` in the monorepo for the whole guide and [decision
0010](https://github.com/inupress/framework/blob/main/docs/decisions/0010-themes.md) for the design.

## Building the CSS

Only for people changing this package (Node 20+):

```bash
npm install
npm run build     # writes dist/theme.css
```

## Requirements

`inupress/core` 0.1, PHP 8.3 or newer. No PHP is executed from this package; it is views, a manifest
and assets.

## License

MIT
