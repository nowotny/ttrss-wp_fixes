# ttrss-wp_fixes
Tiny Tiny RSS plugin for users of [Tiny Tiny RSS WP8 Client](http://www.windowsphone.com/de-de/store/app/tiny-tiny-rss-reader/155a2587-ea59-4142-b6bd-db2e98ec2303) that fixes some problems with content rendering. The default built-in IE web control that the Tiny Tiny RSS WP8 Client for showing article content has some quirks that can cause the content not to render correctly. This plugin attempts to fix those articles so they are rendered correctly in the Tiny Tiny RSS WP8 Client.

## Installation
* Download the plugin to your Tiny Tiny RSS server
* Unzip it to a temporary folder
* Copy/move the `wp_fixes` folder to the `plugins` directory of your Tiny Tiny RSS installation
* Enable the `wp_fixes` plugin in Tiny Tiny RSS's `Preferences`

## How it works?
After enabling the plugin it'll take each new article that Tiny Tiny RSS downloads, scan it and fix it's contents' underlying HTML code so it's shown correctly by the Tiny Tiny RSS WP8 Client.

## What does it fix exaclty?
Some feeds' HTML code is not formatted in the most correct way and currently the plugin fixes the following issues:
* When the `iframe` tag is not closed properly (eg. `<iframe.../>` instead of `<iframe...></iframe>`) everything after the `<iframe.../>` tag disappears, so this plugin searches for the `<iframe.../>` self-closed tag and replaces it with the correct `<iframe...></iframe>` tags.
* Aparently the IE web control in WP does not support urls that don't specify the protocol - like these: `<iframe src="//youtube.com/...">`


## Compatibility
Right now the plugin is designed to fix issues that appear in Windows Phone 8.1 IE web control, and is known to work with Tiny Tiny RSS WP8 Client. 

