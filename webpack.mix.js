let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/assets/js/app.js", "public/js")
  .sass("resources/assets/sass/app.scss", "public/css")
  .extract(["lodash", "axios", "vue"]);

/**
 * Backend
 */

// mix.sass('resources/assets/sass/admin.scss', 'public/css');

/**
 * Development Server
 */

const domain = "laravel-cms.test";

mix.browserSync({
  host: domain,
  proxy: domain,
  open: 'external'
});

/**
 * Production Tasks
 */

if (mix.inProduction()) {
  mix.version();
}

if (process.env.DISABLE_NOTIFICATIONS) {
  mix.disableNotifications();
}
