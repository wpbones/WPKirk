const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const less = require('gulp-less');
const typescript = require('gulp-typescript');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');

// Task for minifying CSS files
gulp.task('minify-css', function () {
    return gulp.src('resources/assets/css/*.css')
        .pipe(cleanCSS())
        .pipe(gulp.dest('public/css'));
});

// Task for compiling Sass
gulp.task('sass', function () {
    return gulp.src('resources/assets/css/*.scss')
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(gulp.dest('public/css'));
});

// Task for compiling Less
gulp.task('less', function () {
    return gulp.src('resources/assets/css/*.less')
        .pipe(less())
        .pipe(cleanCSS())
        .pipe(gulp.dest('public/css'));
});

// Task for minifying JavaScript files
gulp.task('minify-js', function () {
    return gulp.src('resources/assets/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

// Task for compiling TypeScript
gulp.task('typescript', function () {
    return gulp.src('resources/assets/js/*.ts')
        .pipe(typescript())
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

// Task for compiling React JSX
gulp.task('react', function () {
    return gulp.src('resources/assets/js/*.jsx')
        .pipe(babel())
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

// Default task to run all tasks
gulp.task('default', gulp.parallel('sass', 'less', 'typescript', 'react', 'minify-css', 'minify-js'));
