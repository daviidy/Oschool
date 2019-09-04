$(document).ready(function(){

$('.tab a').on('click', function (event) {
    event.preventDefault();

    $('.active').removeClass('active');
    $(this).parent().addClass('active');
    $('ui-view.tab-container').hide();
    $($(this).attr('href')).show();
});

$('#category-tabs a:first').trigger('click'); // Default

});


$('#createLecture').on('click', function() {


    $.ajax({
        type: 'post',
        url: '/addAuthor',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#schoolId").val(),
            'full_name': $('#author-name').val(),

        },
        success: function(data) {
            $("#selectAuthor").show();
            $("#listAuthor option:selected").removeAttr("selected");
            $('#listAuthor').append("<option selected value='"+ data.id +"'>"+ data.full_name +"</option>")
            $('#inputCreateAuthor').hide();
            $("#createAuthor").hide();
      $.amaran({'message':"Auteur bien ajouté!"});

        },
        error: function(){
            alert('erreur');
        }
    });
});
