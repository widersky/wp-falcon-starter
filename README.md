# 🦅 WP Falcon Starter

This is the WordPress starter theme developed to improve themes development process. The main reason to do this theme was make ability to start not from scratch but from that point of the project, what really matters. It's not necessary to invent the wheel every time. 

Just start from the right things! 🎉

## 📦 What's inside?

* This theme uses WebPack as their bundler (with live reload and browsersync enabled)
* SCSS
* Vanilla JavaScript (Babel inside)

## ⛔ What's **not** inside?

* jQuery, use damn modern pure JS instead 😉

## 🕵️‍♂️ What's in functions.php?

* Support for posts thumbnails
* Stupidly simple function to view PHP objects nicely
* Disabled Gutenberg and everything related to it `(not everyone needs it)`
* For safety there is WP version and errors on login page disabled
* Disabled whole wp-head crap (Emojis, Gutenberg blocks CSS, REST APIs etc.)
* Custom thumbnail sizes (most popular sizes included)
* Enabled possibility to upload SVG files to media library
* Custom function to easly display img with srcset attribute for better website loading times (especially for mobile, still testing)
* Disabled `wp-embed.js`

Of course, feel free to re-enable needed things in `functions.php` file.

## 💻 How to develop?

First, it's possible you would like to remove things that's not necessary for you. This includes:

* CSS demo styling - comment / remove `@import './01-vendors/vendors.demo';` line in `./src/main.scss`
* Demo content - remove HTML markup from `index.php`

Then, create `.env` file with content:
```
URL=http://virtualdomain.test/
```
\
Start: `npm install` \
Develop: `npm run start` - fires files watching and compilling on live server \
Build: `npm run build` - files created by `npm run start` command will be overwritten

> You need to run `npm run build` or `npm run start` task to make theme usable in browser (there are two `./*/dist/` folders disabled from repository)

## 🗨 Questions? Suggestions?

Feel free to 📨 me!
