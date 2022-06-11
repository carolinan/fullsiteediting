const gulp = require('gulp'),
	clean = require('gulp-clean'),
	concatCss = require('gulp-concat-css'),
	cssnano = require('gulp-cssnano'),
	rename = require('gulp-rename');

gulp.task('watch', function () {
	gulp.watch(['assets/css/src/**/*.css']).on(
		'change',
		gulp.series(
			'clean-shared',
			'clean-blocks',
			'minify-shared',
			'minify-blocks'
		)
	);
});

gulp.task('clean-shared', function () {
	return gulp.src('assets/css/min/style-shared.min.css', {
			read: false,
			allowEmpty: true,
		})
		.pipe(clean());
});

gulp.task('clean-blocks', function () {
	return gulp.src('assets/css/min/blocks/*.min.css', {
			read: false,
			allowEmpty: true,
		})
		.pipe(clean());
});

gulp.task('minify-shared', function () {
	return gulp.src('assets/css/src/*.css')
		.pipe(concatCss('style-shared.min.css'))
		.pipe(cssnano())
		.pipe(gulp.dest('assets/css/min/'));
});

gulp.task('minify-blocks', function () {
	return gulp.src('assets/css/src/blocks/*.css')
		.pipe(cssnano())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('assets/css/min/blocks/'));
});

gulp.task(
	'default',
	gulp.series(
		'clean-shared',
		'clean-blocks',
		'minify-shared',
		'minify-blocks'
	)
);
