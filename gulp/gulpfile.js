var gulp = require('gulp'),
    watch = require('gulp-watch'),
    stylus = require('gulp-stylus'),
    connect = require('gulp-connect'),
    minifyCss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

gulp.task('style', function(){
    gulp.src([ '../assets/css/dev/*.styl', '../assets/css/dev/*.css'])
    .pipe(stylus())
    .pipe(concat('all.css'))
    .pipe(gulp.dest('../assets/css/'))
    .pipe(connect.reload());
});

gulp.task('js', function () {
    gulp.src('../assets/js/dev/**/*.js')
    .pipe(concat('all.js'))
    .pipe(gulp.dest('../assets/js/'))
    .pipe(connect.reload());
});

gulp.task('php', function () {
    gulp.src('../**/*.php')
    .pipe(connect.reload());
});

gulp.task('connect', function() {
    connect.server({
        root: '../',
        livereload: true
    });
});

gulp.task('watch', function(){
    gulp.watch('../assets/css/dev/*.styl', ['style']);
    gulp.watch('../assets/js/**/*.js', ['js']);
    gulp.watch('../**/*.php', ['php']);
});


/* PROD */
gulp.task('minify', function() {
  return gulp.src('../assets/css/all.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('../assets/css/'));
});

gulp.task('uglify', function() {
  return gulp.src('../assets/js/all.js')
    .pipe(uglify())
    .pipe(gulp.dest('../assets/js/'));
});


gulp.task('dev', ['watch', 'connect']);
gulp.task('prod', ['minify', 'uglify']);