$(document).ready(function() {
  //toggle the component with class accordion_body
  $(".myg-accordion__title").click(function() {
    if ($('.myg-accordion__panel').is(':visible')) {
      $(".myg-accordion__panel p").slideUp(300);
    }
    if ($(this).next(".myg-accordion__panel p").is(':visible')) {
      $(this).next(".myg-accordion__panel p").slideUp(300);
    } else {
      $(this).next(".myg-accordion__panel p").slideDown(300);
    }
  });


  $(".js-accordion-title").click(function(){
      $(".js-accordion-title").each(function(){
        $(this).parent().removeClass("myg-accordion__item--active");
        $(this).removeClass("myg-accordion__item--active");
        $(".js-accordion-item-panel").removeClass("show");
      });
      $(this).parent().addClass("myg-accordion__item--active");
      $(this).addClass("myg-accordion__item--active");
      $(".js-accordion-item-panel").addClass("show");
  });


});
