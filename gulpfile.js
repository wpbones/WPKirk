/**
 * Ispired from https://markgoodyear.com/2014/01/getting-started-with-gulp/
 *
 */

const { src, dest, series, watch } = require('gulp');


var less      = require( 'gulp-less' ),
    minifycss = require( 'gulp-minify-css' ),
    uglify    = require( 'gulp-uglify' ),
    rename    = require( 'gulp-rename' ),
    path      = require( 'path' );


// LESS
function bones__less()
{
  return src( './resources/assets/less/**/*.less' )
    .pipe( less( {
      paths : [ path.join( __dirname, 'less', 'includes' ) ]
    } ) )
    .pipe( dest( './public/css' ) )
    .pipe( rename( { suffix : '.min' } ) )
    .pipe( minifycss() )
    .pipe( dest( './public/css' ) )
}

// Script
function bones__script()
{
  return src( './resources/assets/js/**/*.js' )
    .pipe( dest( './public/js' ) )
    .pipe( rename( { suffix : '.min' } ) )
    .pipe( uglify() )
    .pipe( dest( './public/js' ) );
}

// Watch
function bones__watch()
{

  // Watch .less files
  watch( './resources/assets/less/**/*.less', bones__less );
  watch( './resources/assets/js/**/*.js', bones__script );

}

exports.default = series(bones__watch);
exports.production = series(bones__less, bones__script);