// Adiciona os modulos instalados
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

// Funçao para compilar o SASS e adicionar os prefixos
function compilaSass() {
  return gulp
  .src('assets/css/scss/**/**/*.scss')
  .pipe(sass({
    outputStyle: 'compressed'
  }))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(gulp.dest('assets/css/'))
  .pipe(browserSync.stream());
}

exports.compilaSass = compilaSass;

// Função para juntar o JS
function gulpJS() {
  return gulp
  .src('assets/js/main/*.js')
  .pipe(concat('main.js'))
  .pipe(babel({
    presets: ['env']
  }))
  .pipe(uglify())
  .pipe(gulp.dest('assets/js/'))
  .pipe(browserSync.stream())
}

// gulp.task('mainjs', gulpJS);
exports.gulpJS = gulpJS;


// JS Plugins
function pluginJS() {
  return gulp
  .src([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/swiper/swiper-bundle.min.js',
    'node_modules/moment/moment.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    'node_modules/country-select-js/src/js/countrySelect.js',

    // 'assets/js/plugins/*.js'
  ])
  .pipe(concat('plugins.js'))
  .pipe(gulp.dest('assets/js/'))
  .pipe(browserSync.stream())
}
exports.pluginJS = pluginJS;


// Função para iniciar o browser
function browser() {
  browserSync.init({
    server: {
      // baseDir: "C:/xampp/htdocs/journeys",
      proxy: 'localhost/journeys/'
    }
  });
}

// Tarefa para iniciar o browser-sync
exports.browser = browser;

// Função de watch do Gulp
function watch() {
  gulp.watch('assets/css/scss/**/*.scss', compilaSass);
  gulp.watch('assets/js/main/*.js', gulpJS);
//   gulp.watch('js/plugins/*.js', pluginJS);
  gulp.watch(['*.html']).on('change', browserSync.reload);
}

// Inicia a tarefa de watch
exports.watch = watch;

// Tarefa padrão do Gulp, que inicia o watch e o browser-sync
exports.default = gulp.parallel(watch, browser, compilaSass, gulpJS, pluginJS)