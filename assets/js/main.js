(function($) {

  $("#sidebar-toggler button").click(function() {
    $(this).toggleClass('hide show').find('i').toggleClass('fa-eye fa-eye-slash');
    
    if ($(this).hasClass('show')){
        $("#ct-viewport-container").css("margin-left", "0");
        $("#ct-viewport-container").css("width", "100%");
        $("#oxygen-sidebar, .oxygen-add-section-library-flyout-panel").css(
          "display",
          "none"
        );
    }
    else {
        $("#ct-viewport-container").css("margin-left", "300px");
        $("#ct-viewport-container").css("width", "calc(100% - 300px)");
        $("#oxygen-sidebar, .oxygen-add-section-library-flyout-panel").css(
        "display",
        "block"
        );
    }
  });

})(jQuery);
