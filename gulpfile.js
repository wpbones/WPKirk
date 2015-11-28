var gulp      = require( 'gulp' ),
    less      = require( 'gulp-less' ),
    minifycss = require( 'gulp-minify-css' ),
    rename    = require( 'gulp-rename' ),
    path      = require( 'path' );

gulp.task( 'less', function()
{
  return gulp.src( './resources/assets/less/**/*.less' )
    .pipe( less( {
      paths : [ path.join( __dirname, 'less', 'includes' ) ]
    } ) )
    .pipe( gulp.dest( './public/css' ) )
    .pipe( rename( { suffix : '.min' } ) )
    .pipe( minifycss() )
    .pipe( gulp.dest( './public/css' ) )
} );


gulp.task( 'default', function()
{
  // place code for your default task here
  gulp.start( 'less' );
} );