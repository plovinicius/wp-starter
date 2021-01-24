const { parallel, series, src, dest, watch } = require('gulp');
const clean = require('gulp-clean');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const dist_path = __dirname + '/dist/';
const src_path = __dirname + '/src/';
const node_modules = __dirname + '/node_modules';
const babel_config = {
  presets: ['@babel/env'],
};

// Clear dist folder
function clear(done) {
  src(dist_path + '*', {
    read: false,
  }).pipe(clean());

  done();
}

// Scripts vendor task
function vendorScripts(done) {
  src([node_modules + ''])
    .pipe(concat('vendor.js'))
    .pipe(babel(babel_config))
    .pipe(uglify())
    .pipe(dest(dist_path + 'js/'));

  return done();
}

// Styls vendor task
function vendorStyles(done) {
  src([node_modules + ''])
    .pipe(concat('vendor.css'))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(dest(dist_path + 'css/'));

  return done();
}

// Scripts task
function scriptsTask(done) {
  src(src_path + 'js/*.js')
    .pipe(babel(babel_config))
    .pipe(uglify())
    .pipe(dest(dist_path + 'js/'));

  return done();
}

// Styles task
function stylesTask(done) {
  src(src_path + 'scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(dest(dist_path + 'css/'));

  return done();
}

// Watch assets/src .js/.scss files
function watchTask(done) {
  watch(src_path + 'js/*.js', { queue: false }, series(clean, scriptsTask));
  watch(src_path + 'scss/*.scss', { queue: false }, series(clean, stylesTask));

  return done();
}

// Exports tasks
exports.default = series(clear, parallel(vendorScripts, vendorStyles, scriptsTask, stylesTask));
exports.watch = watchTask;
