/**
 * File main.js.
 *
 * Basic Javascript to make the theme works.
 */

// Toggleable Sidebar
function ToggleSidebar() {
  var show_sidebar = document.getElementById("site-sidebar").classList.contains("show-sidebar");
  if (show_sidebar == false) {
    document.getElementById("site-wrapper").classList.add("push-away");
    document.getElementById("site-sidebar").classList.add("show-sidebar");
  } else {
    document.getElementById("site-wrapper").classList.remove("push-away");
    document.getElementById("site-sidebar").classList.remove("show-sidebar");
  }
}

// Show Search Suggestions (Use WP REST API)

/*
  In development.
*/
