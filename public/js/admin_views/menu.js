/*
$('#save-school-basic-infos').on('click', function() {

        $.ajax({
            type: 'post',
            url: '/updateSchool',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#site-id").val(),
                'name': $('#site-name').val(),
                'heading': $('#heading').val(),
                'description': $('#description').val(),
            },
            success: function(data) {
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        });
    });

*/
