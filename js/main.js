var $ = require('jquery');

window.$ = $;

require('bootstrap');

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
