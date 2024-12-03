(()=>{function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(e,t){for(var r=0;r<t.length;r++){var a=t[r];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,o(a.key),a)}}function o(t){var o=function(t,o){if("object"!=e(t)||!t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var a=r.call(t,o||"default");if("object"!=e(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===o?String:Number)(t)}(t,"string");return"symbol"==e(o)?o:o+""}function r(e,t){if(t.has(e))throw new TypeError("Cannot initialize the same private elements twice on an object")}function a(e,t){return e.get(n(e,t))}function n(e,t,o){if("function"==typeof e?e===t:e.has(t))return arguments.length<3?t:o;throw new TypeError("Private element is not present on this object")}var c=new WeakMap,i=new WeakSet;function l(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];if("false"!==document.body.getAttribute("data-ea-dark-scheme-is-enabled")){var o="auto"===e?matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light":e;document.body.classList.remove("ea-light-scheme","ea-dark-scheme"),document.body.classList.add("light"===o?"ea-light-scheme":"ea-dark-scheme"),!0===t&&localStorage.setItem(a(c,this),e),document.body.style.colorScheme=o,document.body.setAttribute("data-bs-theme","light"===o?"light":"dark")}}var u=new(function(){"use strict";return e=function e(){var t,o;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),r(t=this,o=i),o.add(t),function(e,t,o){r(e,t),t.set(e,o)}(this,c,void 0),function(e,t,o){e.set(n(e,t),o)}(c,this,"ea/colorScheme")},(o=[{key:"updateColorScheme",value:function(){var e=document.body.getAttribute("data-ea-default-color-scheme"),t=localStorage.getItem(a(c,this))||e||"auto";n(i,this,l).call(this,t)}},{key:"createColorSchemeSelector",value:function(){var e=this;if(null!==document.querySelector(".dropdown-settings a[data-ea-color-scheme]")){var t=document.querySelectorAll(".dropdown-settings"),o=localStorage.getItem(a(c,this))||"auto";t.forEach((function(t){var r=t.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),a=t.querySelector('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(o,'"]'));r.forEach((function(e){e.classList.remove("active")})),a.classList.add("active"),r.forEach((function(t){t.addEventListener("click",(function(){var o=t.getAttribute("data-ea-color-scheme");n(i,e,l).call(e,o,!0);var r=document.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),a=document.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(o,'"]'));r.forEach((function(e){e.classList.remove("active")})),a.forEach((function(e){e.classList.add("active")}))}))}))}))}}}])&&t(e.prototype,o),u&&t(e,u),Object.defineProperty(e,"prototype",{writable:!1}),e;var e,o,u}());u.updateColorScheme(),window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change",(function(e){u.updateColorScheme()})),document.addEventListener("DOMContentLoaded",(function(){u.createColorSchemeSelector()}))})();