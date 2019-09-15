$(document).ready(function(){

    $('.tab a').on('click', function (event) {
        event.preventDefault();

        $('.active').removeClass('active');
        $(this).parent().addClass('active');
        $('ui-view.tab-container').hide();
        $($(this).attr('href')).show();
    });

    $('#category-tabs a:first').trigger('click'); // Default


//logique quiz

    $('#add-option').on('click', function(){
      $('#answer').clone().appendTo('.multiple-choice');
    });





});
