var gulp = require('gulp'),
stylus = require('gulp-stylus'),
clean = require('gulp-clean'),
cleanCSS = require('gulp-clean-css'),
plumber = require('gulp-plumber'),
imagemin = require('gulp-imagemin'),
uglify = require('gulp-uglify'),
concat = require('gulp-concat'),
jeet        = require('jeet'),
rupture     = require('rupture'),
koutoSwiss  = require('kouto-swiss'),
sourcemaps = require('gulp-sourcemaps');

// Copiar todos os arquivos
gulp.task('copy', function() {
    return gulp.src(['./{fonts,vendor}/**/*'])
        .pipe(gulp.dest('../assets/'));
});

// Apaga os arquivos
gulp.task('clean', function() {
    return gulp.src(['../assets/{font,img,js,css}/**/*'])
        .pipe(clean({force: true}));
});

// Compilar Stylus para CSS
gulp.task('stylus', function(){
    gulp.src('stylus/main.styl')
    .pipe(plumber())
    .pipe(stylus({
        use:[koutoSwiss(), prefixer(), jeet(), rupture()]
    }))
    .pipe(gulp.dest('css/'))
});

// Minificar JS
var scripts = [
    '../vendor/jquery/dist/jquery.js',
    '../vendor/bootstrap/dist/js/bootstrap.js',
    '../vendor/owl.carousel/dist/owl.carousel.js',
    '../vendor/jquery-validation/dist/jquery.validate.js',
    '../vendor/jquery-form/dist/jquery.form.min.js',
    '../vendor/fullpage.js/dist/jquery.fullpage.js',
    './js/*.js'
];
gulp.task('uglify', function(){
    return gulp.src(scripts)
        .pipe(plumber())
        .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(concat('bundle.js'))
            .pipe(uglify())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('../assets/js/'));
});

// Minificar CSS
gulp.task('minify-css', function() {
  return gulp.src('css/*.css')
    .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('../assets/css/'));
});

// Otimizar Imagens
gulp.task('imagemin', function() {
    return gulp.src('img/**/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(gulp.dest('../assets/img/'));
});

/* Alias */
gulp.task('default', ['imagemin', 'stylus', 'minify-css', 'uglify', 'copy', 'watch']);
gulp.task('watch', function(){
    gulp.watch('img/**/*', ['imagemin']);
    gulp.watch('stylus/**/*.styl', ['stylus']);
    gulp.watch('css/*.css', ['minify-css']);
    gulp.watch('js/**/*.js', ['uglify']);
});