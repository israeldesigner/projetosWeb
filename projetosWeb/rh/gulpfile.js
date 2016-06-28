var gulp = require('gulp'),
    minifycss = require('gulp-minify-css'),
    less = require('gulp-less'),
    sass  = require('gulp-sass'),
    //refresh   = require('gulp-livereload'),
    server    = require('tiny-lr')();

    //livereload({ start: true })

gulp.task('sass', function() {
  gulp.src('sass/*.scss')
  .pipe(sass())
  .pipe(minifycss())
  .pipe(gulp.dest('css'))
  //.pipe(refresh(server));

})

gulp.task('less', function () {
  gulp.src('less/*.less')
  .pipe(less())
  .pipe(minifycss())
  .pipe(gulp.dest('css'))
})

gulp.task('watch',function(){
  //refresh.listen();
  gulp.watch('less/*.less',['less']);
  gulp.watch('sass/*.scss',['sass']);

});

gulp.task('default',['less','sass','watch']);

/*gulp.task('sass:watch', function(){
    gulp.watch('sass/*.sass',['sass']);
})*/
