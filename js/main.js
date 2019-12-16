var $ = require('jquery');

window.$ = $;

var bs4 = require('bootstrap');

// change body padding-top if wp admin bar is present #wpadminbar

function adminBarPadding() {
  const wpAdminBar = document.getElementById('wpadminbar');
  const bodyElement = document.getElementById('body-element');
  const navBar = document.getElementById('header-navbar');
  if (wpAdminBar != null) {
    // bodyElement.classList.toggle('p-top-85');
    navBar.style.top = "30px";
  }
}

// add bs4 classes to input button on form
function addInputClasses () {
  const subBtn = document.querySelector('input[type=submit]');
  subBtn.classList.add('btn');
  subBtn.classList.add('btn-dark');
}