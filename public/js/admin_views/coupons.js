$(document).ready(function(){

  $("#add_coupon").click(function(){
  $("#add_coupon").addClass("hidden");
  $("#add_coupons").removeClass("hidden");

});

// remplissage du champ
//puis afficher le bouton

$("input#coupon_code").keyup(function () {
       if ($(this).val()) {
          $(".spc__inline-form-button").removeClass("is-hidden");
       }
       else {
          $(".spc__inline-form-button").addClass("is-hidden");
       }
    });
    $("input#coupon_code").click(function () {
       $("input").val('');
       $(this).addClass("is-hidden");
    });

})
