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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/openpay.errors.js":
/*!****************************************!*\
  !*** ./resources/js/openpay.errors.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var errors = [{
  code: 1000,
  description: "Ocurri?? un error interno en el servidor de Openpay"
}, {
  code: 1001,
  description: "El formato de la petici??n no es JSON, los campos no tienen el formato correcto, o la petici??n no tiene campos que son requeridos."
}, {
  code: 1002,
  description: "La llamada no esta autenticada o la autenticaci??n es incorrecta."
}, {
  code: 1003,
  description: "La operaci??n no se pudo completar por que el valor de uno o m??s de los parametros no es correcto."
}, {
  code: 1004,
  description: "Un servicio necesario para el procesamiento de la transacci??n no se encuentra disponible."
}, {
  code: 1005,
  description: "Uno de los recursos requeridos no existe."
}, {
  code: 1006,
  description: "Ya existe una transacci??n con el mismo ID de orden."
}, {
  code: 1007,
  description: "La transferencia de fondos entre una cuenta de banco o tarjeta y la cuenta de Openpay no fue aceptada."
}, {
  code: 1008,
  description: "Una de las cuentas requeridas en la petici??n se encuentra desactivada."
}, {
  code: 1009,
  description: "El cuerpo de la petici??n es demasiado grande."
}, {
  code: 1010,
  description: "Se esta utilizando la llave p??blica para hacer una llamada que requiere la llave privada, o bien, se esta usando la llave privada desde JavaScript."
}, {
  code: 1011,
  description: "Se solicita un recurso que esta marcado como eliminado."
}, {
  code: 1012,
  description: "El monto transacci??n esta fuera de los limites permitidos."
}, {
  code: 1013,
  description: "La operaci??n no esta permitida para el recurso."
}, {
  code: 1014,
  description: "La cuenta esta inactiva."
}, {
  code: 1015,
  description: "No se ha obtenido respuesta de la solicitud realizada al servicio."
}, {
  code: 1016,
  description: "El mail del comercio ya ha sido procesada."
}, {
  code: 1017,
  description: "El gateway no se encuentra disponible en ese momento."
}, {
  code: 1018,
  description: "	El n??mero de intentos de cargo es mayor al permitido."
}, {
  code: 1020,
  description: "El n??mero de d??gitos decimales es inv??lido para esta moneda"
}, {
  code: 2001,
  description: "La cuenta de banco con esta CLABE ya se encuentra registrada en el cliente."
}, {
  code: 2002,
  description: "La tarjeta con este n??mero ya se encuentra registrada en el cliente."
}, {
  code: 2003,
  description: "El cliente con este identificador externo (External ID) ya existe."
}, {
  code: 2004,
  description: "El d??gito verificador del n??mero de tarjeta es inv??lido de acuerdo al algoritmo Luhn."
}, {
  code: 2005,
  description: "La fecha de expiraci??n de la tarjeta es anterior a la fecha actual."
}, {
  code: 2006,
  description: "El c??digo de seguridad de la tarjeta (CVV2) no fue proporcionado."
}, {
  code: 2007,
  description: "El n??mero de tarjeta es de prueba, solamente puede usarse en Sandbox."
}, {
  code: 2008,
  description: "La tarjeta no es valida para puntos Santander."
}, {
  code: 2009,
  description: "El c??digo de seguridad de la tarjeta (CVV2) es inv??lido."
}, {
  code: 2010,
  description: "Autenticaci??n 3D Secure fallida."
}, {
  code: 2011,
  description: "Tipo de tarjeta no soportada"
}, {
  code: 3001,
  description: "La tarjeta fue declinada."
}, {
  code: 3002,
  description: "La tarjeta ha expirado."
}, {
  code: 3003,
  description: "La tarjeta no tiene fondos suficientes."
}, {
  code: 3004,
  description: "La tarjeta ha sido identificada como una tarjeta robada."
}, {
  code: 3005,
  description: "La tarjeta ha sido rechazada por el sistema antifraudes."
}, {
  code: 3006,
  description: "La operaci??n no esta permitida para este cliente o esta transacci??n."
}, {
  code: 3007,
  description: "Deprecado. La tarjeta fue declinada."
}, {
  code: 3008,
  description: "La tarjeta no es soportada en transacciones en l??nea."
}, {
  code: 3009,
  description: "La tarjeta fue reportada como perdida."
}, {
  code: 3010,
  description: "El banco ha restringido la tarjeta."
}, {
  code: 3011,
  description: "El banco ha solicitado que la tarjeta sea retenida. Contacte al banco."
}, {
  code: 3012,
  description: "Se requiere solicitar al banco autorizaci??n para realizar este pago."
}, {
  code: 4001,
  description: "La cuenta de Openpay no tiene fondos suficientes."
}, {
  code: 4002,
  description: "La operaci??n no puede ser completada hasta que sean pagadas las comisiones pendientes."
}, {
  code: 5001,
  description: "La orden con este identificador externo (external_order_id) ya existe."
}, {
  code: 6001,
  description: "La orden con este identificador externo (external_order_id) ya existe."
}, {
  code: 6002,
  description: "No se ha podido conectar con el servicio de webhook."
}, {
  code: 6003,
  description: "El servicio respondio con errores."
}];

$.getSpanishError = function ($code) {
  var spanishError = errors.find(function (error) {
    return error.code === $code;
  });
  return spanishError.description;
};

/***/ }),

/***/ 8:
/*!**********************************************!*\
  !*** multi ./resources/js/openpay.errors.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/baby_passport/resources/js/openpay.errors.js */"./resources/js/openpay.errors.js");


/***/ })

/******/ });