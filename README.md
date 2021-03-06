# ttrss-wp_fixes
Tiny Tiny RSS plugin for users of [Tiny Tiny RSS WP8 Client](http://www.windowsphone.com/de-de/store/app/tiny-tiny-rss-reader/155a2587-ea59-4142-b6bd-db2e98ec2303) that fixes some problems with content rendering. The default built-in IE web control that the Tiny Tiny RSS WP8 Client uses for showing article content has some quirks that can cause the content not to render correctly. This plugin attempts to fix those articles so they are rendered correctly in the Tiny Tiny RSS WP8 Client.

## Installation
* [Download the plugin](https://github.com/nowotny/ttrss-wp_fixes/archive/master.zip) to your Tiny Tiny RSS server
* Unzip it to a temporary folder
* Copy/move the `wp_fixes` folder to the `plugins` directory of your Tiny Tiny RSS installation
* Enable the `wp_fixes` plugin in Tiny Tiny RSS's `Preferences`

## How it works?
After enabling the plugin it'll take each new article that Tiny Tiny RSS downloads, scan it and fix it's contents' underlying HTML code so it's shown correctly by the Tiny Tiny RSS WP8 Client.

## What does it fix exactly?
Some feeds' HTML code is not formatted in the most correct way and currently the plugin fixes the following issues:
* When the `iframe` tag is not closed properly (eg. `<iframe.../>` instead of `<iframe...></iframe>`) everything after the `<iframe.../>` tag disappears, so this plugin searches for the `<iframe.../>` self-closed tag and replaces it with the correct `<iframe...></iframe>` tags.
* Apparently the IE web control in WP does not support URLs that don't specify the protocol: eg. `<iframe src="//youtube.com/...">`, so this plugin adds the missing protocol string: `<iframe src="https://youtube.com/...">`

## Compatibility
Right now the plugin is designed to fix issues that appear in Windows Phone 8.1 IE web control, and is known to work with Tiny Tiny RSS WP8 Client. It may fix issues for other WP clients that use the same built-in IE web control. If it does, please notify me so I can add it to the list.

If you're using Windows Phone 8 or 7 and are noticing issues with your feeds please report them too.

## To do:
* Make the URL protocol fix not stupid ;) Right now it just sticks the `http` in there without checking if that URL is valid
* Apply the fixes to already downloaded articles.

## Changelog
v. 1.1
* Added a panel in preferences
* Added an option to apply the fixes to already downloaded articles.

v. 1.0
* Initial release
