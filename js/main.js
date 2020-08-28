// check scroll is active or not
var $logo = $(".header_show");
$(document).scroll(function () {
  if ($(this).scrollTop() > 0) {
    $(".header_show").css("display", "block");
    $(".header_main").css("display", "none");
  } else {
    $(".header_show").css("display", "none");
    $(".header_main").css("display", "block");
  }
});
$(document).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $(".header_show_desktop").css("display", "block");
    $(".header_main_desktop").css("display", "none");
  } else {
    $(".header_show_desktop").css("display", "none");
    $(".header_main_desktop").css("display", "block");
  }
});
// overlay menu function
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
/* -------------- if specific item click than close navbar auto ------------- */
$(document).ready(function () {
  $("#mobile_home_button").click(function () {
    closeNav();
  });
  $("#mobile_tools_button").click(function () {
    closeNav();
  });
  $("#mobile_services_button").click(function () {
    closeNav();
  });
  $("#mobile_downloads_button").click(function () {
    closeNav();
  });
  $("#mobile_policy_button").click(function () {
    closeNav();
  });
  $("#mobile_contact_button").click(function () {
    closeNav();
  });
  $("#mobile_login_button").click(function () {
    closeNav();
  });
  $("#mobile_signup_button").click(function () {
    closeNav();
  });
});