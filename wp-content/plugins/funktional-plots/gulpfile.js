const gulp = require('gulp'),
    del = require('del'),
    sourcemaps = require('gulp-sourcemaps'),
    plumber = require('gulp-plumber'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifyCss = require('gulp-clean-css'),
    babel = require('gulp-babel'),
    webpack = require('webpack-stream'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    browserSync = require('browser-sync').create(),
    dependents = require('gulp-dependents'),

    srcFolder = './src/',
    distFolder = './dist/';

gulp.task('clear', () => del([distFolder]));

gulp.task('front-sass', () => {
    return gulp.src([
        srcFolder + 'front/scss/**/*.scss'
    ], {since: gulp.lastRun('front-sass')})
        .pipe(sourcemaps.init({}))
        .pipe(plumber())
        .pipe(dependents())
        .pipe(sass({
            includePaths: ['./node_modules']
        }))
        .pipe(autoprefixer())
        .pipe(minifyCss())
        .pipe(concat('front.css'))
        .pipe(gulp.dest(distFolder + '/front/css'))
        .pipe(browserSync.stream());
});

gulp.task('admin-sass', () => {
    return gulp.src([
        srcFolder + 'admin/scss/**/*.scss'
    ], {since: gulp.lastRun('admin-sass')})
        .pipe(sourcemaps.init({}))
        .pipe(plumber())
        .pipe(dependents())
        .pipe(sass({
            includePaths: ['./node_modules']
        }))
        .pipe(autoprefixer())
        .pipe(minifyCss())
        .pipe(concat('admin.css'))
        .pipe(gulp.dest(distFolder + '/admin/css'))
        .pipe(browserSync.stream());
});

gulp.task('front-js', () => {
    return gulp.src([srcFolder + 'front/js/**/*.js'], {since: gulp.lastRun('front-js')})
        .pipe(plumber())
        .pipe(webpack({mode: 'production'}))
        .pipe(sourcemaps.init({}))
        .pipe(babel({presets: ['@babel/env']}))
        .pipe(concat('front.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write('.', {}))
        .pipe(gulp.dest(distFolder + '/front/js'))
        .pipe(browserSync.stream());
});

gulp.task('admin-js', () => {
    return gulp.src([srcFolder + 'admin/js/**/*.js'], {since: gulp.lastRun('admin-js')})
        .pipe(plumber())
        .pipe(webpack({mode: 'production'}))
        .pipe(sourcemaps.init({}))
        .pipe(babel({presets: ['@babel/env']}))
        .pipe(concat('admin.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write('.', {}))
        .pipe(gulp.dest(distFolder + '/admin/js'))
        .pipe(browserSync.stream());
});

gulp.task('build', gulp.series('clear', 'front-sass', 'admin-sass', 'front-js', 'admin-js'));

gulp.task('dev', gulp.series('front-sass', 'admin-sass', 'front-js', 'admin-js'));

gulp.task('serve', () => {
    return browserSync.init({
        host: 'saveinvest.local',
        proxy: 'saveinvest.local',
        port: 3000,
        open: false
    });
});

gulp.task('watch', () => {
    const watch = [
        srcFolder + 'admin/scss/**/*.scss',
        srcFolder + 'admin/js/**/*.js',
        srcFolder + 'admin/templates/**/*.php',
        srcFolder + 'front/scss/**/*.scss',
        srcFolder + 'front/js/**/*.js',
        srcFolder + 'admin/front/**/*.php',
    ];

    gulp.watch(watch, gulp.series('dev')).on('complete', browserSync.reload);
});

gulp.task('default', gulp.series('build', gulp.parallel('serve', 'watch')));