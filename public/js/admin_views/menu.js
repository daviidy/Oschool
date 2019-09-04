$(document).ready(function(){




$('#addAuthor').on('click', function() {


                  $('#inputCreateAuthor').show();
                  $('#createAuthor').show();
                  $("#selectAuthor").hide();
});


$('#createAuthor').on('click', function() {


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






});
