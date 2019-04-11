// gulpfile.js
var gulp = require("gulp");
var sass = require("gulp-sass");
var connect = require('gulp-connect-php');
var browserSync = require("browser-sync");

// Put this after including our dependencies
var paths = {
  styles: {
    // By using styles/**/*.sass we're telling gulp to check all folders for any sass file
    srcweb: "bootstrap/web/sass/**/*.scss", 
    srcadmin: "bootstrap/admin/sass/**/*.scss", 
    // Compiled files will end up in whichever folder it's found in (partials are not compiled)
    destweb: "bootstrap/web/css",
    destadmin: "bootstrap/admin/css"
  }

  // Easily add additional paths
  // ,html: {
  //  src: '...',
  //  dest: '...'
  // }
};


// Define tasks after requiring dependencies
function styleWeb() {
  // Where should gulp look for the sass files?
  // My .sass files are stored in the styles folder
  // (If you want to use scss files, simply look for *.scss files instead)
  return (
    gulp
    .src(paths.styles.srcweb)

    // Use sass with the files found, and log any errors
    .pipe(sass())
    .on("error", sass.logError)

    // What is the destination for the compiled file?
    .pipe(gulp.dest(paths.styles.destweb))
    // Add browsersync stream pipe after compilation
    .pipe(browserSync.stream())
  );
}

// Define tasks after requiring dependencies
function styleAdmin() {
  // Where should gulp look for the sass files?
  // My .sass files are stored in the styles folder
  // (If you want to use scss files, simply look for *.scss files instead)
  return (
    gulp
    .src(paths.styles.srcadmin)

    // Use sass with the files found, and log any errors
    .pipe(sass())
    .on("error", sass.logError)

    // What is the destination for the compiled file?
    .pipe(gulp.dest(paths.styles.destadmin))
    // Add browsersync stream pipe after compilation
    .pipe(browserSync.stream())
  );
}

// A simple task to reload the page
function reload() {
  browserSync.reload();
}

function watch() {


  connect.server({}, function (){
    browserSync({
      proxy: 'localhost:8080/webdongho/'
    });
  });


  gulp.watch(paths.styles.srcweb, styleWeb);
  gulp.watch(paths.styles.srcadmin, styleAdmin);
  gulp.watch("**/*.php").on('change', browserSync.reload);
}

exports.watch = watch
exports.styleWeb = styleWeb;
exports.styleAdmin = styleAdmin;