
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


//tab oschool avantages

$('.tabs a').on('click', function (event) {
    event.preventDefault();

    $('.active').removeClass('active');
    $(this).parent().addClass('active');
    $('.tab-panel .ng-star-inserted').hide();
    $($(this).attr('href')).show();
});

$('.tabs a:first').trigger('click'); // Default

//mobile ONGLET

$('.tab--bar a').on('click', function (event) {
    event.preventDefault();
    var active_tab_selector = $('.tab--container > a').attr('href');
    var actived_nav = $('.tab--container');
		actived_nav.removeClass('active');
    actived_nav.addClass('inactive');
    $(this).parents('.tab--container').addClass('active');
    $(active_tab_selector).removeClass('active');
		$(active_tab_selector).addClass('inactive');
    $('.contain .tab-panel').hide();
    $($(this).attr('href')).show();
});

$('.tab--bar a:second').trigger('click'); // Default
