import * as bootstrap from "bootstrap";
import $ from "jquery";

// remove loader
window.onload = function () {
  setInterval(function () {
    $(".late").css("display", "block");
    $(".load-holder").css("display", "none");
    $("#main-container").fadeOut("slow");
  }, 5500);
};
