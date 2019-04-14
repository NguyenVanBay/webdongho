// load thư viện trong thư mục node_modules.
var gulp = require("gulp");
var sass = require("gulp-sass");

// connect server.
var connect = require('gulp-connect-php');

// autoloadding.
var browserSync = require("browser-sync");

// thư viện minyfy.
var postcss = require("gulp-postcss");
var  autoprefixer = require("autoprefixer");
var cssnano = require("cssnano");
var sourcemaps = require("gulp-sourcemaps");

// Put this after including our dependencies
var paths = {
  styles: {
    // đường dẫn file.
    srcweb: "bootstrap/web/sass/**/*.scss",
    srcadmin: "bootstrap/admin/sass/**/*.scss",
    destweb: "bootstrap/web/css",
    destadmin: "bootstrap/admin/css"
  }
};


// định nghĩa 1 task.
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

    // minify.
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write())


    // What is the destination for the compiled file?
    .pipe(gulp.dest(paths.styles.destweb))
    // Add browsersync stream pipe after compilation
    .pipe(browserSync.stream())
  );
}

function styleAdmin() {
  return (
    gulp
    .src(paths.styles.srcadmin)
    .pipe(sass())
    .on("error", sass.logError)
    .pipe(gulp.dest(paths.styles.destadmin))
    .pipe(browserSync.stream())
  );
}

// A simple task to reload the page
function reload() {
  browserSync.reload();
}

function watch() {
  connect.server({}, function () {
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