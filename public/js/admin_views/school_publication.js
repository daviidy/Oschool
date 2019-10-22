

$('#changeState').on('click', function() {

    $.ajax({
        type: 'post',
        url: '/updateCourseState',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#courseId").val(),
            'state': $('#state').val(),

        },
        success: function(data) {
            if (data.state == 'active') {

                $('#changeState').css("background-color", "#FF6621")
                .html("Mettre le cours hors ligne");

                $('#state').val('inactive');


            }
            else {

                $('#changeState').css("background-color", "#94fc13")
                .html("Mettre le cours en ligne");

                $('#state').val('active');

            }

        $.amaran({'message':"Statut du cours mis à jour!"});

        },
        error: function(){
            alert('erreur');
        }
    });
});