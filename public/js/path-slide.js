$(document).ready(function() {
  //toggle the component with class accordion_body
/*  $(".js-accordion-title").click(function() {
    if ($('.myg-accordion__panel').is('myg-accordion__item--active')) {
      $(".js-accordion-item-panel").removeClass("show");
    }
    if ($(this).next(".myg-accordion__panel").is('myg-accordion__item--active')) {
      $(this).next(".js-accordion-item-panel").addClass("show");
    } else {
      $(this).next(".js-accordion-item-panel").addClass("show");
    }
  });*/


  $(".js-accordion-title").click(function(){
      $(".js-accordion-title").each(function(){
        $(this).parent().removeClass("myg-accordion__item--active");
        $(this).removeClass("myg-accordion__item--active");

      });
      $(this).parent().addClass("myg-accordion__item--active");
      $(this).addClass("myg-accordion__item--active");
      $(".js-accordion-item-panel").addClass("show");
  });

  $(".js-accordion-title").click(function(){
      $(".js-accordion-title").each(function(){
        if ($(".js-accordion-title")is("myg-accordion__item--active")) {
          $(".js-accordion-item-panel").addClass("show");
        } else {
          $(".js-accordion-item-panel").removeClass("show");

        }

      });
  });

});
