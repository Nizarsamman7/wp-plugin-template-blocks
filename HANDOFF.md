# Handoff

Status: Gutenberg block plugin starter. `build/` is not committed.

Stack: `@wordpress/scripts`, block.json per screen, React mount on the front, blank page template in `templates/studio-blank.php`.

Pattern source: full-page blocks (hero/contact), shared `src/shared`, PHP bootstrap that registers the manifest.

Next: `npm install && npm run build`, then rename text domain `studio-blocks` and the `studio-blocks/*` block names for the client.
