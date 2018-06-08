/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

//Завдання 1
var schoolBoy = 28;
var pupilsSport;
var sport = 75;
var rezult;

rezult = sport / 100 * schoolBoy;

document.getElementById('zavd_1').innerHTML = 'Всього навчаються учнів в класі - ' + schoolBoy + ';<br>' + 'Кількість учнів котрі займаються спортом - ' + rezult + ';';

//Завдання 2
function filter(s) {
    var r, re;
    var s = 'This server has 386 GB RAM and 5000 GB storage';
    re = /\D+/ig;
    r = s.replace(re, ',');
    return r;
}
// завдання 3
document.getElementById('zavd_2').innerHTML = filter();

var mas = [2, 3, 56, 65, 56, 44, 34, 45, 3, 5, 35, 345, 3, 5];

document.getElementById('zavd_3').innerHTML = 'Перший елемент масиву - ' + mas[0];

// завдання 4
ost = 10 % 3;

document.getElementById('zavd_4').innerHTML = 'залишок при ділені 10/3 - ' + ost;

// завдання 5 
var a = [1, 2, 3, 4, 5];
var b = 'Hello world';
b += a.join();
a = b.split(',');

c = a.join();
b = a + b;

console.log(a, b, c);

for (var i = 0; i < 10; i++) {
    setTimeout(function () {
        console.log(i);
    }, 100);
}

/***/ })

/******/ });