
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
