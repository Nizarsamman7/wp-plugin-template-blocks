=== Studio Blocks ===
Contributors: studio
Tags: block, gutenberg
Requires at least: 6.7
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Gutenberg starter: blank page template plus hero and contact blocks mounted with React.

== Description ==

Copy of the working pattern used for full-page block sites:

* `src/<block>/` with block.json, edit, save, render.php, and view.js
* Shared chrome and styles
* A plugin page template with no theme header or footer
* `wp-scripts build --blocks-manifest`

== Installation ==

1. `npm install`
2. `npm run build`
3. Activate the plugin.
4. Create a page, choose template **Studio — Blank**, and insert **Studio Hero**.

== Changelog ==

= 1.0.0 =
* Initial template.
