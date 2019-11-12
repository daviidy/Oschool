$(document).ready(function() {
  //toggle the component with class accordion_body
  /*$(".myg-accordion__title").click(function() {
    if ($('.myg-accordion__panel').is(':visible')) {
      $(".myg-accordion__panel p").slideUp(300);
    }
    if ($(this).next(".myg-accordion__panel p").is(':visible')) {
      $(this).next(".myg-accordion__panel p").slideUp(300);
    } else {
      $(this).next(".myg-accordion__panel p").slideDown(300);
    }
  });*/


  $(".myg-accordion__header").click(function(){
      $(".myg-accordion__header").each(function(){
        $(this).parent().removeClass("active");
        $(this).removeClass("active");
      });
      $(this).parent().addClass("active");
      $(this).addClass("active");
  });


});
