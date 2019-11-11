$(document).ready(function() {
  $('carousel__nav__link carousel__nav__link--next').click(function(){
    $("#carousel").css("transform","translateX("+$(this).index() * -450+"px)");
  });
});
