# 💻 WP Starter Theme

This is the WordPress starter theme developed to improve themes development process. The main reason to do this theme was make ability to start not from scratch but from that point of the project, what really matters. It's not necessary to invent the wheel every time. 

Just start the right things! 🎉

## What's inside?

* This theme uses ParcelJS as their bundler
* SCSS `(with atomic-design oriented structure)`
* Bootstrap v4 grid `(optional, you can disable it in ./src/css/01-vendors/_vendors.import.scss)`
* Vanilla JavaScript with ES6 enabled features (Babel inside) such as ... (complete)

## What's **not** inside?

* jQuery, use damn modern pure JS instead 😉

## What's in functions.php?

* Support for posts thumbnails
* Disabled Gutenberg `(I think it's necessary until Gutenberg it's *really* stable)`
* For safety there is WP version and errors on login page removed
* Custom thumbnail sizes
* Enabled possibility to upload SVG files to media library

## How to

🛫 Start: `npm install -g parcel-bundler` ➡ `npm install`

🛠 Develop: `npm run dev` \
👷‍ Build: `npm run build`

> You need to run `npm run build` or `npm run dev` task to make theme usable in browser (there is `dist/` folder disabled from repository)

(WIP)