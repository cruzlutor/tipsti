var gulp = require('gulp'),
    watch = require('gulp-watch'),
    stylus = require('gulp-stylus'),
    connect = require('gulp-connect'),
    minifyCss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

/* COMMON */
gulp.task('css', function(cb){
    gulp.src([ '../assets/css/dev/*.styl', '../assets/css/dev/*.css'])
    .pipe(stylus())
    .pipe(concat('all.css'))
    .pipe(gulp.dest('../assets/css/'))
    .pipe(connect.reload());

    setTimeout(cb, 200);

});

gulp.task('js', function (cb) {
    gulp.src(['../assets/js/dev/**/*.js'])
    .pipe(concat('all.js'))
    .pipe(gulp.dest('../assets/js/'))
    .pipe(connect.reload());

    setTimeout(cb, 200);

});

/* DEV */
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
    gulp.watch('../assets/css/dev/*.styl', ['css']);
    gulp.watch('../assets/js/**/*.js', ['js']);
    gulp.watch('../**/*.php', ['php']);
});


/* PROD */
gulp.task('minify', ['css'], function() {
  return gulp.src('../assets/css/all.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('../assets/css/'));
});

gulp.task('uglify', ['js'], function() {
    gulp.src('../assets/js/all.js')
    .pipe(uglify())
    .pipe(gulp.dest('../assets/js/'));
});

gulp.task('dev', ['css', 'js', 'watch', 'connect']);
gulp.task('prod', ['css', 'minify', 'js', 'uglify']);