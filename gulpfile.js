const { src, dest, watch, parallel } = require("gulp");

// CSS
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
const autoprefixer = require("autoprefixer"); // mejorea el performance en navegadores
const cssnano = require("cssnano"); // comprime css
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");

// IMG
const avif = require("gulp-avif");
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");

// JAVASCRIPT

const terser = require("gulp-terser-js");

function css(done) {
  src("src/scss/**/*.scss") // identificar css para compilar
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass()) // Compilar
    .pipe(postcss([autoprefixer(), cssnano]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/css")); // Almacenar en Disco Duro

  done();
}

function imagenes(done) {
  const options = {
    optimizationLevel: 3,
  };
  src("src/img/**/*.{png,jpg}")
    .pipe(cache(imagemin(options)))
    .pipe(dest("build/img"));
  done();
}
function versionWebp(done) {
  const options = {
    quality: 50,
  };
  src("src/img/**/*.{png,jpg}") //cuando sea más de un formato colocar {}
    .pipe(webp(options))
    .pipe(dest("build/img"));
  done();
}

function versionAvif(done) {
  const options = {
    quality: 50,
  };
  src("src/img/**/*.{png,jpg}") //cuando sea más de un formato colocar {}
    .pipe(avif(options))
    .pipe(dest("build/img"));
  done();
}
function javascript(done) {
  src("src/js/**/*.js")
    .pipe(sourcemaps.init())
    .pipe(terser())
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/js"));
  done();
}
function dev(done) {
  watch("src/scss/**/*.scss", css);
  watch("src/js/**/*.js", javascript);
  done();
}
exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionAvif;
exports.versionAvif = versionWebp;
exports.dev = parallel(versionAvif, imagenes, versionWebp, javascript, dev);
