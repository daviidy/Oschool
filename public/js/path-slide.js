$(document).ready(function() {

  $(".js-accordion-title").click(function(){
      $(".js-accordion-title ").each(function(){
        $(this).parent().removeClass("myg-accordion__item--active");
        $(this).removeClass("myg-accordion__item--active");

      });
      $(this).parent().addClass("myg-accordion__item--active");
      $(this).addClass("myg-accordion__item--active");
  });


});
