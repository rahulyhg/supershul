=== Heroic Knowledge Base ===
Contributors: herothemes
Tags: knowledge base, knowledge plugin, faq, widget
Requires at least: 4.3
Tested up to: 4.4.
Stable tag: 2.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

Add a Knowledge Base to WordPress


== Installation ==

It's easy to get started

1. Upload `ht-knowledge-base` unzipped file to the `/wp-content/plugins/` directory or goto Plugins>Add New and upload the `ht-knowledge-base` zip file.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. If upgrading, ensure you deactivate and re-activate the plugin to ensure any upgrade routines are run correctly.



== Frequently Asked Questions ==

= Q. I have a question! =

A. Please consult the Heroic Knowledge Base Documentation accompanying this plugin or see http://herothemes.com/hkbdocs/

= Q. Category thumbnails are too big =

A. You need to use the `Regenerate Thumbnails` plugin to re-generate the thumbnails to the correct size.



== Screenshots ==



== Changelog ==

= 2.5.1 =

Hotfixes for breadcrumbs
Rebasing as 2.5.x

= 2.5.0 =

Minor Bug fixes
WPML search box fix
Adding additional filters
Subcategory display inconsistency fix
Responsive bugs in HKB archive fix


= 2.4.0 =

Added filters for option helpers
Added filters for option sections
Added filter and action hook for options
Fixing responsive bugs
Adding InstaAnswers compability


= 2.3.4 =

Hotfix for titles in Knowledge Base archive
Hotfix for z-index in live-search

= 2.3.3 =

Hotfix for titles in Knowledge Base archive

= 2.3.2 =

Hotfix for WordPress nav menus

= 2.3.1 =

Hotfix for page titles
Hotfix for knowledgebase styles

= 2.3.0 =

Upgraded database functionality, rewrote controllers and additional underpinning for analytics
Added database version check, upgrades performed as required
New metabox for article stats - views, feedback, attachments
Added filters to stop custom content (stop_ht_knowledge_base_custom_content)
Fix for WP REST API
Fix for 404 error when previewing a published article
Fix for sub category depth display
Fix for custom article ordering when order previously set to descending
Fix for category permalink prefixed with blog slug
Fix for sort by article views
Fix for comment template, disqus compatibility
Improvements for network activate

= 2.2.0 =

Fixed issue with breadcrumbs link
Reordered admin menu
Change voting to post request and removed link
Fixed article count of sub-subcategories
Fixed issue with category icon when creating new category
Improved table of content widget (beta)

= 2.1.0 =

Rebased versioning for new Hero Themes Version Control (HTVC)
Change textdomain hook
Added TOC widget
Fix for breadcrumbs in deep categories

= 2.0.8 =

Improved article and category ordering UI
Fixed bugs in demo installer

= 2.0.7 =

Added analytics core
Added article sorting

= 2.0.6 =

Display subcategories in parent category when option to hide in home/archive selected
Removed some legacy code

= 2.0.5 =

Category listing hotfix

= 2.0.4 =

Textdomain fix

= 2.0.3 =

Removed advanced validation for slugs to allow for more flexible permalink structure

= 2.0.2 =

Fixed issue with CMB2 activation resulting in invalid header error


= 2.0.1 =

Packaged voting module

= 2.0 =

Introduced new templating structure
Added search widget
Numerous bug fixes and coding enhancements
New helper functions
New styling options

= 1.4 =

Separated voting logic from knowledge base
Added welcome page
Added demo installer
Added auto updater functionality
Fixes and improvements for php and security issues
Updated Redux framework
Improved styling for theme compatibility
Improved title and SEO functionality
Improved general theme compatibility
Refined options UI
Various bug fixes and tweaks

= 1.3 =

Voting option improvements
Adding WPML support for knowledge base homepage
Fix for search placeholder when used with WPML
Updated translation strings
Added namespacing to some common namespacing functions
Fixed issue with kb as homepage not displaying posts in correct order
Updated namespacing on show all tag
Removed vote this comment text
Improved view count upgrade functionality
Fixed bug with subcategory article markup being displayed when there are no articles to display
Updated options wording
Added data attribute for category description
Updated HTML
Updating widget descriptions - make more consistent

= 1.2 =

Added HT Knowledge Base Archive dummy page
Article views visible in Knowledge Base post lists on backend
Added ability to set view count and usefulness manually
Added reset votes option
Article tag support
Added custom field support
Improved option to display number of articles in category or tag
Improved title output text
Added link to display remaining articles in category
Fixed voting option on individual articles
Fixed homepage option inconsistencies
Updated some translation texts to improve i18n support
Fixed display comments option for Heroic Knowledgebase


= 1.1 =

Removed ht_kb_homepage requirement (implementing themes must implement by default and declare support with ht_knowledge_base_templates)
Added loads of options for sorting and categorizing articles
Added rating indicator at various locations
Centralized display logic for plugin and supporting themes
Enhanced search and live search
Fixed breadcrumbs
Fixed page titles
Added options for archive display
Fixed where meta displays
Added support for video and standard post formats
Various other bug fixes, tweaks and enhancements

= 1.0 =

Initial release.

== Upgrade Notice ==

= 2.3.0 =

As always, please ensure you backup your configuration and database before upgrading
View counts are converted after upgrade


== Developer Notes ==

For using theme templates, add support for ht_knowledge_base_templates
For category icon support add support for ht_kb_category_icons
For category color support add support for ht_kb_category_colors
