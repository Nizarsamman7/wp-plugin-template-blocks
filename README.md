# Studio Blocks

WordPress block plugin template. One block folder per screen, shared React chrome, and a blank page template so the theme chrome stays out of the way.

## Scripts

```bash
npm install
npm start
npm run build
npm run plugin-zip
```

`build/` is gitignored. Run `npm run build` before you activate the plugin on a site. The plugin shows an admin notice until `build/blocks-manifest.php` exists.

## Add a block

1. Duplicate `src/studio-hero-block`.
2. Change `name` in `block.json`, the mount selector, and the view script.
3. Point `view.js` at a new page component.
4. Rebuild.

Copy in `src/shared/data/siteData.js` is placeholder text. Replace it per client. Do not commit customer secrets.
