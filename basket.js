'use strict';

(function() {
  var body = document.body;
  var burgerMenu = document.getElementsByClassName('a-menu')[0];
  var burgerContain = document.getElementsByClassName('a-container')[0];
  var burgerNav = document.getElementsByClassName('a-nav')[0];

  burgerMenu.addEventListener('click', function toggleClasses() {
    [body, burgerContain, burgerNav].forEach(function (el) {
      el.classList.toggle('open');
    });
  }, false);
})();
