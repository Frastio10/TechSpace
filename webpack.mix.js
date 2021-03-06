const mix = require('laravel-mix');

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
mix.disableNotifications();
mix.disableSuccessNotifications();
mix.js('resources/js/app.js', 'public/js')
	
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/news.scss', 'public/css')
    .options({ 
	 processCssUrls: false, 
	 postCss: [
	    require('autoprefixer')({
	    cascade: false,
	    flexbox: 'no-2009'
	    })
	  ]
});
  