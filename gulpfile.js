// settings
var cssFiles = ['./assets/sass/*.scss','./assets/sass/pages/*.scss'];
var cssSrcPath = './assets/sass/init.scss';
var destDir = './assets/css';
var cssDestFile = 'all_styles.css';

// dependencies
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var sass = require('gulp-sass');

// functions
var rollupCSS = function() {
  return gulp.src(cssSrcPath)
    .pipe(sass()) // compile sass
    .pipe(autoprefixer({ // add vendor prefixes
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(concat(cssDestFile)) // concatenate
    .pipe(gulp.dest(destDir))
};

// tasks
gulp.task('build', function() {
  rollupCSS();
});
gulp.task('watch', function() {
  gulp.start('build');
  gulp.watch(cssFiles, ['build']);
});
