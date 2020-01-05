
$('#addAuthor').on('click', function() {


                  $('#inputCreateAuthor').show();
                  $('#createAuthor').show();
                  $("#selectAuthor").hide();
});


$('#createAuthor').on('click', function() {

$("#createAuthor").hide();
    $.ajax({
        type: 'post',
        url: '/addAuthor',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#schoolId").val(),
            'full_name': $('#author-name').val(),

        },
        cache:false,
        success: function(data) {
            $("#selectAuthor").show();
            $("#listAuthor option:selected").removeAttr("selected");
            $('#listAuthor').append("<option selected value='"+ data.id +"'>"+ data.full_name +"</option>");
            $('#inputCreateAuthor').hide();

      $.amaran({'message':"Auteur bien ajouté!"});

        },
        error: function(){
            alert('erreur');
        }
    });
});




//responsive menu admin

$(".tch-btn-header-icon").click(function() {
  $(".navs").toggleClass("active");
  $(".admin-sidebar").css({ "-webkit-transform":"translate3d(0px, 0, 0)","transform":"translate3d(0px, 0, 0)"});
  $(".tch-btn-header-icon").css("display","none");
  $(".tch-btn-hamburger-2").css("display","block");

});

$(".tch-btn-hamburger-2").click(function() {
  $(".admin-sidebar").css({ "-webkit-transform":"translate3d(-226px, 0, 0)","transform":"translate3d(-226px, 0, 0)"});
  $(".tch-btn-hamburger-2").css("display","none");
  $(".tch-btn-header-icon").css("display","block");
});
//////responsive menu admin2
$(".tch-btn-header-icon").click(function() {
  $(".navs").toggleClass("active");
  $(".admin-sidebar").css({ "-webkit-transform":"translate3d(0px, 0, 0)","transform":"translate3d(0px, 0, 0)"});
  $(".tch-btn-header-icon").css("display","none");
  $(".tch-btn-header-icon-2").css("display","block");

});

$(".tch-btn-header-icon-2").click(function() {
  $(".admin-sidebar").css({ "-webkit-transform":"translate3d(-226px, 0, 0)","transform":"translate3d(-226px, 0, 0)"});
  $(".tch-btn-header-icon-2").css("display","none");
  $(".tch-btn-header-icon").css("display","block");
});
//


//dROPDOWS MENU ADMIN

function show() {
   var element = document.getElementById("drop");
   element.classList.toggle("show");
}

function show2() {
   var element = document.getElementById("drop1");
   element.classList.toggle("show");
}
// dropdown parge course
function show3() {
   var element = document.getElementById("drop_2");
   element.classList.toggle("show");
}
//
