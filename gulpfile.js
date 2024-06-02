'use strict'

// Load plugins
const autoprefixer = require('autoprefixer')
const cssnano = require('cssnano')
const gulp = require('gulp')
const plumber = require('gulp-plumber')
const postcss = require('gulp-postcss')
const rename = require('gulp-rename')
const less = require('gulp-less') // LESS

// paths
const srcPath = './resources/assets/'
const destPath = './public/assets/'

// CSS task
function css() {
    return (
        gulp
            .src(srcPath + 'less/styles.less') // LESS
            .pipe(plumber())
            .pipe(less()) // LESS
            // .pipe(gulp.dest(destPath + 'css/'))
            .pipe(rename({ suffix: '.min' }))
            .pipe(postcss([autoprefixer(), cssnano()]))
            .pipe(gulp.dest(destPath + 'css/'))
    )
}

// Watch files
function watchFiles() {
    gulp.watch(srcPath + 'less/**/*', css) // LESS
}

// define complex tasks
const build = gulp.series(gulp.parallel(css))
const watch = gulp.parallel(watchFiles)

// export tasks
exports.css = css
exports.build = build
exports.watch = watch
exports.default = build
