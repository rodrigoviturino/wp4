const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const cssmin = require('gulp-cssmin');
const jsmin = require('gulp-jsmin');
const browserSync = require('browser-sync').create();

// Compile SASS files on the folder css/scss and concat for and save on css/style.css
gulp.task('sass', function () {
    return gulp.src(['./assets/scss/*.scss'])
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(cssmin())
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});

// Compile JS files on the folder /assets/js* and concat and save on /assets/js
gulp.task('javascript', function () {
    return gulp.src([
        // './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        './assets/js/main.js'])
        .pipe(concat('all.js'))
        //.pipe(jsmin())
        .pipe(gulp.dest('./assets/js'))
        .pipe(browserSync.stream());
});

// Initialize the project on server proxy for watching changes and execute automatic reloading
gulp.task('serve', function () {
    browserSync.init({
        proxy: "http://localhost/wp4_teste/"
    });
    gulp.watch('./*.php', browserSync.reload);
    gulp.watch('./assets/scss/*.scss', ['sass'], browserSync.reload);
    gulp.watch('./assets/scss/*/*.scss', ['sass'], browserSync.reload);
    gulp.watch('./assets/js/main.js', ['javascript'], browserSync.reload);
});

gulp.task('default', ['sass','javascript','serve']);