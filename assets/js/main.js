(function($) {

  $("#sidebar-toggler .hide").click(function() {
    $("#sidebar-toggler .show").removeClass("active");
    $(this).addClass("active");
    $("#ct-viewport-container").css("margin-left", "0");
    $("#ct-viewport-container").css("width", "100%");
    $("#oxygen-sidebar, .oxygen-add-section-library-flyout-panel").css(
      "display",
      "none"
    );
  });

  $("#sidebar-toggler .show").click(function() {
      $("#sidebar-toggler .hide").removeClass("active");
      $(this).addClass("active");
    $("#ct-viewport-container").css("margin-left", "300px");
      $("#ct-viewport-container").css("width", "calc(100% - 300px)");
    $("#oxygen-sidebar, .oxygen-add-section-library-flyout-panel").css(
      "display",
      "block"
    );
  });

})(jQuery);
