





$('#changeStatus').on('click', function() {

        $.ajax({
            type: 'post',
            url: '/updateSchoolStatus',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#schoolId").val(),
                'status': $('#status').val(),

            },
            success: function(data) {
                if (data.status == 'active') {

                    $('#changeStatus').css("background-color", "#FF6621")
                    .html("Mettre mon école hors ligne");

                    $('#status').val('inactive');


                }
                else {

                    $('#changeStatus').css("background-color", "#1EA69A")
                    .html("Mettre mon école en ligne");

                    $('#status').val('active');

                }

	        $.amaran({'message':"Statut de l'école mis à jour!"});

            },
            error: function(){
                alert('erreur');
            }
        });
    });


        $('#deleteSchool').on('click', function() {

                $.ajax({
                    type: 'post',
                    url: '/deleteSchool',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#schoolId").val(),
                        'status': $('#status').val(),

                    },
                    success: function() {
                        window.location = '/home';

                    },
                    error: function(){
                        alert('erreur');
                    }
                });
            });



            $('#addAuthor').on('click', function() {
                    $('#addAuthorZone').toggleClass("add");

                });
