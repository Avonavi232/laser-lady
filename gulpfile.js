'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    rimraf = require('rimraf'),
    babel = require("gulp-babel"),
    rename = require("gulp-rename");

var path = {
    build: {
        js: 'wp-content/themes/laserlady/public/js/',
        js_modules: 'wp-content/themes/laserlady/modules/',
        style_libs: 'wp-content/themes/laserlady/public/css/',
        style: 'wp-content/themes/laserlady/'
    },
    src: {
        js: 'wp-content/themes/laserlady/src/js/main.js',
        js_libs: 'wp-content/themes/laserlady/src/js/libs.js',
        js_specific: 'wp-content/themes/laserlady/src/js/specific/*.js',
        js_modules: 'wp-content/themes/laserlady/modules/**/src/*.js',
        style: 'wp-content/themes/laserlady/src/style/style.sass',
        style_libs: 'wp-content/themes/laserlady/src/style/libs.sass'
    },
    watch: {
        js: 'wp-content/themes/laserlady/src/js/partials/*.js',
        js_libs: 'wp-content/themes/laserlady/src/js/libs.js',
        js_specific: 'wp-content/themes/laserlady/src/js/specific/*.js',
        js_modules: 'wp-content/themes/laserlady/modules/**/src/*.js',
        style: 'wp-content/themes/laserlady/src/style/partials/*.sass',
        style_libs: 'wp-content/themes/laserlady/src/style/libs.sass',
        style_css: 'wp-content/themes/laserlady/src/style/**/*.css'
    },
    clean: './wp-content/themes/laserlady/public'
};


gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest(path.build.js))
});

gulp.task('style:build', function () {
    gulp.src(path.src.style)
        .pipe(sass().on('error', sass.logError))
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(gulp.dest(path.build.style))
});

gulp.task('build', [
    'js:build',
    'style:build'
]);

gulp.task('watch', function(){
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });

    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
});


gulp.task('default', ['build' , 'watch']);