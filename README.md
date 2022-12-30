# Facebook Like box for Statamic
<!-- statamic:hide -->
![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeroenpeters1986/statamic-likebox.svg?style=for-the-badge)](https://packagist.org/packages/jeroenpeters1986/statamic-likebox)
<!-- /statamic:hide -->

## Features

 * Simply display a Facebook Like box on your website (using a Tag)
 * Comfortable configurable
 * Support for the PEAK pagebuilder (so you can just add it from the Control Panel)

## How to Install

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

``` bash
composer require jeroenpeters1986/statamic-likebox
```

## How to Use

This add-on provides a configurable tag to display a Facebook Like box on their website.
You can place the tag in the templates yourself if you are using a 'vanilla' Statamic
installation. If you use the Peak package with the Pagebuilder, the Like box can be
added with just a click from the Control Panel!

### The Tag

The most simple version of the tag, which only takes the page as an argument, looks like this (in Antlers):

`{{ likebox page='statamic'}}`
 
This will display a simple 240px wide widget with the avatar/profile picture of the page, 
a button to like the page and a fan-count.

### The options 

 * `page` The fanpage, if the URL of the page is https://facebook.com/quoteshirts, only use 'quoteshirts'
 * `width` The width in pixels of the widget
 * `height` The height in pixels of the widget (we recommend not to set it, the widget will automatically adjust this)
 * `lang` The language the Like box is displayed in. Default is `en_US`, but you can set it to almost anything like `nl_NL`, `en_GB`, `de_DE` or `en_UD` (upside down, ¡ʎllɐǝɹ)
 * `compact_header` Whether to make it compact, by adding the Like button directly below the pagetitle. Can be `true` or `false`, default `false`
 * `hide_header_cover` Whether to choose a neutral background instead of the uploaded page cover image. Can be `true` or `false`, default `true`
 * `content_tabs` If this is provided, the box will grow and can show tabs with events, timeline and messages. These can be combined into a single, comma separated string like `timeline,events,messages`, or just `timeline`. You can choose the order and the amount of tabs to show. By default, this is off.

## Requirements
- PHP 7.4 or 8.0
- Laravel 7 or 8
- Statamic 3

# Support
I love to share with the community. Nevertheless, coding/learning/updating takes a lot of work, time and effort.

If you like my software, feel free to [buy me a coffee or two with Ko-Fi](https://ko-fi.com/jeroenpeters) 

# License
This plugin is published under the MIT license.

# Disclaimer
This add-on is not affiliated, associated, authorized, endorsed by, or in any way officially connected with 
Facebook / Meta, or any of its subsidiaries or its affiliates. This add-on merely enables users to easily implement
a Facebook widget on their website. The official Facebook website can be found at https://facebook.com
