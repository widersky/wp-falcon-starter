# 🛫 WP Starter Theme

This is the WordPress starter theme developed to improve themes development process. The main reason to do this theme was make ability to start not from scratch but from that point of the project, what really matters. It's not necessary to invent the wheel every time. 

Just start the right things! 🎉

## 📦 What's inside?

* This theme uses WebPack as their bundler (with live reload and browsersync enabled)
* SCSS `(with atomic-design oriented structure)`
* Simple SCSS Framework based on Flexbox model
* Vanilla JavaScript (Babel inside)

## ⛔ What's **not** inside?

* jQuery, use damn modern pure JS instead 😉

## 🕵️‍♂️ What's in functions.php?

* Support for posts thumbnails
* Stupidly simple function to view PHP objects nicely
* Disabled Gutenberg `(I think it's necessary until Gutenberg it's *really* stable)`
* For safety there is WP version and errors on login page removed
* Disabled whole wp-head crap (Emojis, Gutenberg blocks CSS, REST APIs etc.)
* Custom thumbnail sizes (most popular sizes included)
* Enabled possibility to upload SVG files to media library

## 💻 How to develop?

First, it's possible you would like to remove things that's not necessary for you. This includes:

* Default JavaScript slider lib (['Siema' by Paweł Grzybek](https://github.com/pawelgrzybek/siema)) - just remove import from source `main.js` file
* CSS demo styling - comment / remove `@import './01-vendors/vendors.demo';` line in `./src/main.scss`
* Demo content - remove HTML markup from `index.php`

Then, change `config.url` to proper in `webpack.config.js` \
\
Start: `npm install` \
Develop: `npm run start` - fires files watching and compilling on live server \
Build: `npm run build`

> You need to run `npm run build` or `npm run start` task to make theme usable in browser (there are two `./*/dist/` folders disabled from repository)

## 🗨 Questions? Suggestions?

Feel free to 📨 me!
