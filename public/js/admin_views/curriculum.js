
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

// AVANTAGES OSCHOOL tab
//AVANTAGES tab desktop
$('.tabs a').on('click', function (event) {
    event.preventDefault();
    $('.active').removeClass('active');
    $(this).parent().addClass('active');
    $('.tab-panel .ng-star-inserted').hide();
    $($(this).attr('href')).show();
});

$('.steps-nav a:first .next-step').trigger('click'); // Default

//Avantage tab MOBILE

$('.tab--bar a').on('click', function (event) {
    event.preventDefault();
    var active_tab_selector = $('.tab--bar.active > a').attr('href');
    var actived_nav = $('.tab--bar a');
		actived_nav.removeClass('active');
    $(this).parent().addClass('inactive');
    $(active_tab_selector).removeClass('inactive');
		$(active_tab_selector).addClass('inactive');
    $('.tab-panel').hide();
    $($(this).attr('href')).show();
});
$('.tab--bar a:second').trigger('click'); // Default
