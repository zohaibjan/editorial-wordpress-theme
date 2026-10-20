# Editorial WordPress Theme

A standalone custom WordPress theme with PHP page templates,
responsive styles, navigation, blog and case-study layouts, structured metadata and an AJAX contact form.

This is a theme-only public edition. WordPress core, its database, uploads, private management tools,
agent notes, SEO exports, deployment files, the experimental frontend and dependency folders are excluded.
Photography is replaced by an original placeholder SVG. Blog and case-study listings use your installed
WordPress content rather than bundled project records.

## Install

1. Use a development WordPress installation with PHP 8.1+.
2. Copy this repository's theme files into `wp-content/themes/editorial-wordpress-theme/`.
3. Activate **Editorial WordPress Theme** under Appearance → Themes.
4. Create Home, About, Services, Case Studies, Blog and Contact pages; set a static front page under Settings → Reading.
5. Configure menus, site title, content, branding and contact details for your own site.
6. Verify the site's administrator email. The contact form uses WordPress `wp_mail` and sends to the configured administrator, not a bundled email destination.

The theme retains example copy and styling; customise it before reuse. No live website
is deployed or modified by installing this source copy. Google Fonts is requested by the stylesheet.
The original theme's GPL-2.0-or-later declaration is retained in `style.css`.

## Structure

- `functions.php`: theme setup, assets, navigation, contact handling, custom post type and metadata.
- `front-page.php`, `page-*.php`: page layouts.
- `single.php`, `single-case_study.php`: content layouts.
- `style.css`, `assets/js/main.js`: responsive styling and browser interactions.

## Validation

14 PHP templates pass parser-based syntax checks; JavaScript passes `node --check`. A PHP/WordPress
runtime and mail delivery were not available for end-to-end testing. Test forms, permalinks, pagination,
metadata and mobile layouts on your staging WordPress site before production use. Add spam/rate
protection appropriate to your site. The public theme does not force-enable application passwords.

## Public edition

This is a separately prepared portfolio edition with fresh history. Private deployment settings,
credentials, operational records, uploads, backups and organisation-specific assets are excluded.
See [PUBLIC_EDITION.md](PUBLIC_EDITION.md). No deployment workflows are included.

## Automated checks

GitHub Actions checks PHP 8.3 and JavaScript syntax on pushes and pull requests. It does not deploy a website or exercise WordPress, mail delivery or browser behavior.

The public theme uses neutral Editorial Studio branding. Edit the Contact page in WordPress to supply your own contact details; no third-party email, address or social profile is bundled.
