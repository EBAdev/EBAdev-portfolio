/* eslint-disable no-undef */
const mix = require("laravel-mix");
const path = require("path");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/js/app.js", "public/js")
  .extract()
  .vue()
  .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
  .webpackConfig({
    resolve: {
      alias: {
        "@": path.resolve("resources/js"),
        "@components": path.resolve("resources/js/components"),
        "@homeComponents": path.resolve("resources/js/components/home"),
        "@pages": path.resolve("resources/js/Pages"),
        "@homepage": path.resolve("resources/js/Pages/HomePage"),
        "@layout": path.resolve("resources/js/components/layout"),
        "@ui": path.resolve("resources/js/components/ui"),
      },
    },
  })
  .version();
