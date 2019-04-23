const gulp = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const minifyImg = require('gulp-imagemin');
const minifyJS = require('gulp-uglify');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const del = require('del');
const runSequence = require('run-sequence');

gulp.task('css', () => {
    return gulp.src('resources/assets/css/**/*.css')
        .pipe(sass({
            outputStyle: 'nested',
            precision: 10,
            includePaths: ['.']
        }).on('error', sass.logError))
        .pipe(minifyCSS())
        .pipe(autoprefixer())
        .pipe(concat('app.min.css'))
        .pipe(gulp.dest('public/css'))
});

gulp.task('js', () => {
    return gulp.src('resources/assets/js/**/*.js')
        .pipe(concat('app.min.js'))
        .pipe(minifyJS())
        .pipe(gulp.dest('public/js'))
});

gulp.task('img', () => {
    gulp.src('resources/assets/img/**/*')
        .pipe(minifyImg())
        .pipe(gulp.dest('public/img'));
});

gulp.task('delete', () => del(['public/css', 'public/js', 'public/img']));

gulp.task('watch', () => {
    gulp.watch("resources/assets/css/**/*.css", ['css']);
    gulp.watch("resources/assets/js/**/*.js", ['js']);
    gulp.watch("resources/assets/img/**/*", ['img']);
});

gulp.task('default', () => {
    runSequence(
        'delete',
        'css',
        'js',
        'img',
        'watch'
    );
});