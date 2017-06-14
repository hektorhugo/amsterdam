/*npm install --save-dev imagemin-webpack-plugin copy-webpack-plugin imagemin-mozjpeg*/
/*npm install bootstrap-styl*/
/*npm install font-awesome*/
const { mix } = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
/*const paths = {
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
}*/
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

mix.js('resources/assets/js/app.js', 'public/js')
  .stylus('resources/assets/stylus/social.styl', 'public/css')
  .stylus('resources/assets/stylus/principal.styl', 'public/css')
  .sass('resources/assets/sass/app.scss', 'public/css')
   .options({
         processCssUrls: false
      });
      mix.webpackConfig({
          plugins: [
              new CopyWebpackPlugin([{
                  from: 'resources/assets/image',
                  to: 'image', // Laravel mix will place this in 'public/img'
              }]),
              new ImageminPlugin({
                  test: /\.(jpe?g|png|gif|svg)$/i,
                  plugins: [
                      imageminMozjpeg({
                          quality: 80,
                      })
                  ]
              })
          ]
      });
      mix.copy('node_modules/font-awesome/fonts', 'public/fonts')
      mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');
      mix.styles([
        'public/css/social.css',
        'public/css/app.css',
        'public/css/principal.css'
     ], 'public/css/principal.css');
      mix.minify(['public/css/principal.css', 'public/principal.js']);
