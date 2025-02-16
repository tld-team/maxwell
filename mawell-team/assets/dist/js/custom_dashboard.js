/******/ (() => { // webpackBootstrap
/*!*******************************************!*\
  !*** ./assets/src/js/custom_dashboard.js ***!
  \*******************************************/
document.addEventListener("DOMContentLoaded", function () {
  function initPrelineAccordion() {
    if (window.HSAccordion) {
      window.HSAccordion.autoInit();
      console.log("Preline Accordion Initialized");
    } else {
      console.warn("Preline UI nije učitan!");
    }
  }

  // Prati promene u Gutenberg editoru
  var observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
      if (mutation.addedNodes.length) {
        initPrelineAccordion();
      }
    });
  });
  observer.observe(document.body, {
    childList: true,
    subtree: true
  });

  // Pokreni inicijalizaciju odmah nakon učitavanja stranice
  setTimeout(initPrelineAccordion, 500);
});
/******/ })()
;