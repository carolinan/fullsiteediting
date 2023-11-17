=== Full Site Editing ===
Contributors: poena
Tested up to: 6.4
Requires at least: 6.4
Requires PHP: 7.4
Version: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Copyright: Carolina Nymark

A full site editing theme. Advanced version.

== Guide ==

=== Folder structure ===

- Assets. Images, JavaScript, and CSS files.
- Inc. Filters, fonts, block variations, registered block styles.
- Parts. HTML template parts.
- Patterns. Block pattern examples.
- Styles. Global style variations.
- Templates. HTML block templates.

functions.php -Used to enqueue styles and add theme support.
index.php     -"Silence is golden"
style.css     -Required to activate the theme.
theme.json    -Settings and default styles.
license.txt   -GPL v2
readme.txt    -Information about the theme.
screenshot.png

==== CSS ====

This theme includes both readable and minified CSS files.
Since you have requested a version of the theme without build tools,
you will need to use another method to minify the files.

To add additional block styles:
1) Create a new CSS file inside the assets/css/blocks folder.
Use the slug of the block as the file name.
2) Next, open functions.php and add the slug to the $styled_blocks array inside the setup function.

== Changelog ==
1.0.0 Initial release

== Licence ==
Full Site Editing is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources used to build this theme ==

* Lora (font)
Copyright 2011 The Lora Project Authors
License: SIL Open Font License, 1.1
License URI: https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL

* Twenty Twenty-Two WordPress theme (C) WordPress.org
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Q WordPress theme (C) Ari Stathopoulos
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Full site editing starter theme by Carolina Nymark
https://fullsiteediting.com
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Images
Images from pxhere.com. Public domain:
https://pxhere.com/en/photo/927190 -woman with curly hair
https://pxhere.com/en/photo/1049910 -woman with t-shirt
https://pxhere.com/en/photo/1604358 -woman with headphones
