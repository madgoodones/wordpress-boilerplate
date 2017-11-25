var gulp = require('gulp'),
stylus = require('gulp-stylus'),
clean = require('gulp-clean'),
cssnano = require('cssnano'),
plumber = require('gulp-plumber'),
uglify = require('gulp-uglify'),
concat = require('gulp-concat'),
jeet = require('jeet'),
rupture = require('rupture'),
postcss = require('gulp-postcss'),
koutoSwiss = require('kouto-swiss'),
autoprefixer = require('autoprefixer'),
flexibility = require('postcss-flexibility'),
livereload = require('gulp-livereload'),
sourcemaps = require('gulp-sourcemaps'),
compress_images = require('compress-images');

// Copiar todos os arquivos
gulp.task('copy', function() {
    return gulp.src(['./{fonts,vendor}/**/*'])
        .pipe(gulp.dest('../assets/'));
});

// Apaga os arquivos
gulp.task('clean', function() {
    return gulp.src(['../assets/**/*'])
        .pipe(clean({force: true}));
});

// Compilar Stylus para CSS
gulp.task('stylus', function(){
    gulp.src('stylus/main.styl')
    .pipe(plumber())
    .pipe(stylus({
        use:[koutoSwiss(), jeet(), rupture()],
        'resolve url': true,
        //'include css': true,
        define: {
            url: require('stylus').resolver()
        }
    }))
    .pipe(gulp.dest('css/'))
});

// BundleJS
var scripts = [
    './vendor/flexibility/flexibility.js',
    './vendor/zepto/zepto.min.js',
    './vendor/slick-carousel/slick/slick.js',
    './vendor/izimodal/js/iziModal.min.js',
    './js/*.js'
];
gulp.task('uglify', function(){
    return gulp.src(scripts)
        .pipe(plumber())
        .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(concat('bundle.js'))
            .pipe(uglify())
        .pipe(sourcemaps.write('./'))
        .pipe(livereload())
        .pipe(gulp.dest('../assets/js/'));
});

// Minificar CSS
gulp.task('minify-css', function() {
    var plugins = [
        flexibility(),
        autoprefixer({grid: false}),
        cssnano()
    ];
  return gulp.src('css/*.css')
    .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(postcss(plugins))
    .pipe(sourcemaps.write('./'))
    .pipe(livereload())
    .pipe(gulp.dest('../assets/css/'));
});

// Otimizar Imagens
gulp.task('imagemin', function() {
    compress_images('img/**/*.{jpg,JPG,jpeg,JPEG,png,svg,gif}', '../assets/img/', {compress_force: true, statistic: true, autoupdate: true}, false,
        {jpg: {engine: 'mozjpeg', command: ['-quality', '70']}},
        {png: {engine: 'pngquant', command: ['--quality=0-20']}},
        {svg: {engine: 'svgo', command: '--multipass'}},
        {gif: {engine: 'gifsicle', command: ['--colors', '64', '--use-col=web']}}, function(){
    });
});

/* Alias */
gulp.task('default', ['imagemin', 'stylus', 'minify-css', 'uglify', 'copy', 'watch']);
gulp.task('watch', function(){
    livereload.listen(35729);
    gulp.watch('**/*.php').on('change', function(file) {
      livereload.changed(file.path);
    });
    gulp.watch('stylus/**/*.styl', ['stylus']);
    gulp.watch('css/*.css', ['minify-css']);
    gulp.watch('js/**/*.js', ['uglify']);
    gulp.watch('img/**/*.{jpg,JPG,jpeg,JPEG,png,svg,gif}', ['imagemin']);
});