=== Jace ===
Contributors: Carolina Nymark
Tested up to: 6.0
Requires at least: 6.0
Requires PHP: 7.4
Version: 1.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Copyright: Carolina Nymark

The main purpose of this theme is to showcase the features of full site editing.

== Changelog ==

1.0.6
Fixes:
A layout issue on the 404 page.
There was a bug with the social sharing pattern, and only the Facebook link worked.
The sharing links now use the home link, not the post link. Unfortunately this is the best I can
do without creating custom blocks (The technical explaination is that patterns are
created on 'init' and do not have access to the global scope where the post link is available).
Design changes:
Removed the animation from the support forum call to action.
Page: Increased spacing below page title.
Removed padding and shadow around the sticky footer on the cart page.
Accessibility: Increased color contrast for captions. This is a temporary solution until captions can be styled through block styles or theme.json.

1.0.5
Bug fix with block pattern slug

1.0.4
Minimum required WordPress version increased to 6.0.
Moved the CSS files into separate folders for the source and the minified files.
Removed the "No space between images" block style since Gutenberg have added support for block spacing to the gallery block.
Added a new cleaner button style for the footer buttons and navigation block.
Removed the circular cover block since it was difficult to make it look good on mobiles.
Added new header and footer parts.
Added multiple new block patterns and renamed the patterns folder to block-patterns.
Added new templates for WooCommerce, a blank template and a template with a sidebar.
Updated the sticky header. There are now options for making the entire header sticky, or only the menu button.
Fixed a bug with the separator block overlapping the sticky header.
Removed jace_enqueue_block_styles() in favor of wp_enqueue_block_style(), used in jace_setup().

1.0.3
Bug fix: Removed border.

1.0.2
Updated the default and responsive heights of the circular cover block.
Moved the CSS for the responsive font sizes to forms-and-buttons.css
so that it is applied to both the editor and front.
Added the default template for template editing.

1.0.1
Corrected some typos.
Corrected the title of the circular cover block pattern.
Simplified the "split header with featured image" block pattern.
Added more block patterns and styles.
Removed an unnecesary folder and moved register-block-styles.php to the inc/ folder.
Replaced a duotone color that was duplicated by mistake.
Reduced the largest font size on smaller screens.
Added serif and monospace system fonts.
Updated screenshot.

1.0.0 Initial release

== Known issues ==
- The search and go to top icons in the footer are not displaying
correctly in the editor.
- The search modal navigation block pattern do not display correctly in the editor.

== Licence ==
Jace is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources used to build this theme ==

* Twenty Twenty-Two WordPress theme (C) WordPress.org
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Q WordPress theme (C) Ari Stathopoulos
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Underscores https://underscores.me/, (C) Automattic, Inc.
License: GNU General Public License v2 or later
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
https://pxhere.com/sv/photo/1604357 -woman with headphones 2

Product images from WooCommerce:
Copyright: WooThemes and the contributors.
License: GPLv3

Arrow and search icons from Gutenberg, sourced for use in the site footer.
Copyright WordPress contributors
License: GPLv2 or later and Mozilla Public License, Version 2.0
https://github.com/WordPress/gutenberg/blob/trunk/LICENSE.md
https://wordpress.github.io/gutenberg/?path=/story/icons-icon--library

Fonts:
Caveat by Pablo Impallari.
Copyright: The Caveat Project Authors
Licence: Open Font License. https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL

Lora by Olga Karpushina
Copyright: The Lora Project Authors
Licence: Open Font License. https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL

Montserrat by Julieta Ulanovsky
Copyright: The Montserrat Project Authors
Licence: Open Font License. https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL

Oswald by Vernon Adams
Copyright: The Oswald Project Authors
Licence: Open Font License. https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL

Playfair Display bt Claus Eggers Sørensen
Copyright: The Playfair Project Authors
Licence: Open Font License. https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL
