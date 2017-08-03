var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var clean = require('gulp-clean');
var concat = require('gulp-concat');
var htmlReplace = require('gulp-html-replace');
var uglyfly = require('gulp-uglyfly');
var usemin = require('gulp-usemin');
var cssmin = require('gulp-cssmin');
var browserSync = require('browser-sync');
// var jshint = require('gulp-jshint');

gulp.task('default',['copy'], function(){
  gulp.start('build-img','usemin');
})

gulp.task('copy', ['clean'], function(){
   return gulp.src('src/**/*', {
     base:'src'
   })
  .pipe(gulp.dest('dist'));
});

gulp.task('clean', function(){
    return gulp.src('dist')
    .pipe(clean());
})

gulp.task('build-img', function() {
  gulp.src('dist/img/**/*')
      .pipe(imagemin())
      .pipe(gulp.dest('dist/img'));
})

gulp.task('usemin', function(){
  gulp.src('dist/**/*.html')
   .pipe(usemin({
     'js':[uglyfly],
     'css':[cssmin]
   }))
   .pipe(gulp.dest('dist'));
})

// gulp.task('server', function(){
//   browserSync.init({
//     server:{
//       baseDir:'src'
//     }
//   })
//   gulp.watch('src/js/*.js').on('change', function(event){
//     console.log(event.path);
//     gulp.src(event.path)
//     .pipe(jshint())
//     .pipe(jshint.reporter());
//   })
//   gulp.watch('src/**/*').on('change', browserSync.reload)
// })
//
// gulp.task('build-js', function(){
//   gulp.src(['dist/js/jquery-3.2.0.min.js',
//   'dist/js/modernizr.custom.79639.js',
//   'dist/js/script.js',
//   'dist/js/bootstrap.min.js',
//   'dist/js/menuzord.js',
//   'dist/js/jquery.ba-cond.min.js',
//   'dist/js/jquery.slitslider.js',
//   'dist/js/jquery-scrolltofixed-min.js',
//   'dist/js/jquery.fancybox.pack.js',
//   'dist/js/jquery.mask.js'
// ])
//   .pipe(concat('all.js'))
//   .pipe(uglyfly())
//   .pipe(gulp.dest('dist/js'));
// })
//
// gulp.task('build-html', function(){
//   gulp.src('dist/**/*.html')
//   .pipe(htmlReplace({
//     js:'http://localhost:8080/clientes/gastronorth/dist/js/all.js'
//   }))
//   .pipe(gulp.dest('dist'));
//
// })
