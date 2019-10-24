

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

                $('#changeState')
                .html("Annuler la publication du cours");

                $('#state').val('inactive');


            }
            else {

                $('#changeState')
                .html("Publier le cours");

                $('#state').val('active');

            }

        $.amaran({'message':"Statut du cours mis à jour!"});

        },
        error: function(){
            alert('erreur');
        }
    });
});