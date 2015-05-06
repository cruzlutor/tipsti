var gulp = require('gulp'),
    watch = require('gulp-watch'),
    stylus = require('gulp-stylus'),
    connect = require('gulp-connect'),
    concat = require('gulp-concat');

gulp.task('style', function(){
    gulp.src([ '../assets/css/stylus/*.styl', ])
    .pipe(stylus())
    .pipe(concat('all.css'))
    .pipe(gulp.dest('../assets/css/'))
    .pipe(connect.reload());
});

gulp.task('js', function () {
    gulp.src('../assets/js/**/*.js')
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
    gulp.watch('../assets/css/stylus/*.styl', ['style']);
    gulp.watch('../assets/js/**/*.js', ['js']);
    gulp.watch('../**/*.php', ['php']);
});

gulp.task('dev', ['watch', 'connect']);