'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
 
sass.compiler = require('node-sass');
 
function dist() {
	console.log('building CSS');
	return gulp.src('./library/scss/**/*.scss')
		.pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(gulp.dest('./library/css'));
}
 
function watch() {
	dist();
	gulp.watch('./library/scss/**/*.scss', gulp.series(dist));
}

exports.dist = dist;
exports.default = watch;