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
});

$(function() {
  $('.tabs nav a').on('click', function() {
    show_content($(this).index());
  });

  show_content(0);

  function show_content(index) {
    // Make the content visible
    $('.tabs .content.visible').removeClass('visible');
    $('.tabs .content:nth-of-type(' + (index + 1) + ')').addClass('visible');

    // Set the tab to selected
    $('.tabs nav a.selected').removeClass('selected');
    $('.tabs nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
  }
});
