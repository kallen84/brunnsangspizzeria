'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	rename = require('gulp-rename'),
	concat = require('gulp-concat'),
	order = require("gulp-order"),
	concatCss = require('gulp-concat-css'),
	cleanCSS = require('gulp-clean-css'),
	uglify = require('gulp-uglify'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload;

gulp.task('sass', function () {

	// All files in .assets/scss folders to master.min.css in build/css folder minified.
	gulp.src('./assets/scss/**/*.scss')
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(concatCss("./master.min.css"))
		.pipe(cleanCSS({compatibility: 'ie9'}))
		.pipe(gulp.dest('./build/css/'))
		.pipe(reload({stream: true}));

	gulp.src('./build/css/master.css')
		.pipe(cleanCSS({compatibility: 'ie9'}))
		.pipe(gulp.dest('./build/css/'));
});

gulp.task('js', function () {

	// Loop all files in assets/js/inc folder first,
	// minify and save files concated together with init.js as script.min.js in build/js folder.
	return gulp.src('./assets/js/**/*.js')
		.pipe(uglify({mangle: true}))
		.pipe(order([
			'assets/js/inc/**/*.js',
			'assets/js/init.js'
		]))
		.pipe(concat({path: 'script.min.js'}))
		.pipe(gulp.dest('./build/js'))
		.pipe(reload({stream: true}));
});

gulp.task('browser-sync', function () {
	//watch files
	var files = [
		'./build/css/master.min.css',
		'./build/js/script.min.js',
		'./*.php',
		'./templates/*.php',
		'./functions/admin/*.php',
		'./functions/*.php'
	];

	//initialize browsersync
	browserSync.init(files, {
		ui: {
			port: 8888
		},
		proxy: "http://localhost:8888/brunnsang_pizzeria/wordpress/",
		notify: false
	});
});

gulp.task('default', ['sass', 'js', 'browser-sync'], function () {
	gulp.watch('./assets/scss/**/*.scss', ['sass']);
	gulp.watch(['./assets/js/**/*.js'], ['js']);
});
