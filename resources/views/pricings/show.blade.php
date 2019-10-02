@extends('layouts.menu-pricing')

@section('content')


<style media="screen">


/*! CSS Used from: https://fedora.teachablecdn.com/assets/bootstrap-31ff648fd5e6158c77c31e785844877b6666554feab422e57ca5a96aa5587b9e.css ; media=screen */
@media screen{
main,section{display:block;}
a{background:0 0;}
a:active,a:hover{outline:0;}
strong{font-weight:700;}
h1{margin:.67em 0;font-size:2em;}
img{border:0;}
svg:not(:root){overflow:hidden;}
button,input,select{margin:0;font:inherit;color:inherit;}
button{overflow:visible;}
button,select{text-transform:none;}
button,input[type=submit]{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0;}
input{line-height:normal;}
input[type=checkbox]{box-sizing:border-box;padding:0;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p,h2,h3{orphans:3;widows:3;}
h2,h3{page-break-after:avoid;}
select{background:#fff!important;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
input,button,select{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#428bca;text-decoration:none;}
a:hover,a:focus{color:#2a6496;text-decoration:underline;}
a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;}
h1,h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h1,h2,h3{margin-top:20px;margin-bottom:10px;}
h1{font-size:36px;}
h2{font-size:30px;}
h3{font-size:24px;}
p{margin:0 0 10px;}
.text-right{text-align:right;}
.text-center{text-align:center;}
.text-muted{color:#777;}
.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width: 768px){
.container{width:750px;}
}
@media (min-width: 992px){
.container{width:970px;}
}
@media (min-width: 1200px){
.container{width:1170px;}
}
.row{margin-right:-15px;margin-left:-15px;}
.col-sm-6,.col-xs-12,.col-sm-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
.col-xs-12{float:left;}
.col-xs-12{width:100%;}
@media (min-width: 768px){
.col-sm-6,.col-sm-12{float:left;}
.col-sm-12{width:100%;}
.col-sm-6{width:50%;}
}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
input[type=checkbox]{margin:4px 0 0;margin-top:1px \9;line-height:normal;}
input[type=checkbox]:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.form-group{margin-bottom:15px;}
@media (min-width: 768px){
.form-inline .control-label{margin-bottom:0;vertical-align:middle;}
}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
.btn:focus,.btn:active:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);}
.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd;}
.btn-primary:hover,.btn-primary:focus,.btn-primary:active{color:#fff;background-color:#3071a9;border-color:#285e8e;}
.btn-primary:active{background-image:none;}
.dropdown{position:relative;}
.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px;}
.alert>p{margin-bottom:0;}
.alert>p+p{margin-top:5px;}
.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc;}
.container:before,.container:after,.row:before,.row:after{display:table;content:" ";}
.container:after,.row:after{clear:both;}
.hidden{display:none!important;visibility:hidden!important;}
}
/*! CSS Used from: https://themes2.teachablecdn.com/themecss/production/base.css?_=0e34779b46fb&brand_course_heading=%23ffffff&brand_heading=%232b3636&brand_homepage_heading=%23ffffff&brand_navbar_fixed_text=%23ffffff&brand_navbar_text=%23ffffff&brand_primary=%23000000&brand_secondary=%2339719a&brand_text=%232b3636&logged_out_homepage_background_image_overlay=0.84&logged_out_homepage_background_image_url=https%3A%2F%2Fd2vvqscadf4c1f.cloudfront.net%2Fb7yh7DKMSKeGh9UPYbDI_CardSpring.jpg */
.btn-primary,.btn-primary:active,.btn-primary:focus{background:#39719a!important;border:1px solid #39719a!important;font-weight:600!important;outline:none!important;color:#fff;border-radius:20px;padding:3px 18px!important;}
.btn-primary:hover,.btn-primary:active:hover,.btn-primary:focus:hover{outline:none!important;text-decoration:none;background:#326387!important;border:1px solid #326387!important;color:#fff;}
@media screen and (max-width: 767px){
.btn-primary,.btn-primary:active,.btn-primary:focus{font-size:15px;}
}
.alert{font-weight:600;}
a{color:#39719a;}
a:hover,a:active{color:#1d3a50;}
a,a:active,a:hover,a:focus{text-decoration:none;}
p{font-size:18px;font-weight:200;line-height:28px;}
h1,h2,h3{color:#2b3636;}
h3{line-height:33px;}
.content-box{background:#fff;border-radius:6px;box-shadow:0 10px 21px #e7eeef;padding-left:0px;padding:30px 45px;position:relative;text-align:left;width:100%;margin-bottom:70px;}
.content-box .form-group{margin-bottom:20px;}
.content-box p{display:block;line-height:21px;font-size:12px;color:#909090;letter-spacing:0.45px;padding-bottom:12px;}
.content-box .alert{font-size:13px;font-weight:600;border-radius:4px;letter-spacing:0.1px;margin-bottom:30px;border:0px;padding-bottom:13px;}
.content-box .alert p{font-size:12px;font-weight:600;line-height:17px;margin-bottom:-10px;}
.content-box label{color:#47505e;font-size:13px;font-weight:500;line-height:29px;letter-spacing:0.61px;}
@media screen and (max-width: 767px){
.content-box{border:0;border-radius:0;box-shadow:none;width:calc(100% + 40px);margin:0 0 0 -20px;}
}
.spc{background:#f5f6f7;color:#363e48;font-weight:600;padding-bottom:220px;padding-top:0;transition:opacity 300ms ease;}
.spc__log-out{float:right;margin-top:3px;}
.spc__description{color:#b0b0b0;font-size:12px;margin-top:10px;text-align:center;}
.spc__check{background-image:url("//assets.teachablecdn.com/icons/icon-check-green.svg");background-size:cover;display:inline-block;height:25px;vertical-align:middle;width:25px;}
.spc__new-device .spc__new-device-header{margin-bottom:10px;}
.spc__new-device .spc__new-device-body:not(.meta){margin-left:35px;}
.spc__x{display:inline-block;height:25px;vertical-align:middle;width:25px;}
.spc__x svg{height:100%;width:100%;}
.spc__authenticated{font-size:13px;font-weight:400;margin-top:5px;}
.spc__authenticated .spc__check{margin-right:5px;}
.spc__authenticated [data-checkout-authentication-email]{font-weight:700;}
.spc__secure{margin-bottom:24px;margin-top:-4px;}
.spc__secure-text{opacity:0.5;font-size:12px;letter-spacing:1px;margin-left:6px;}
.spc .control-label{margin-bottom:10px;}
.spc__primary-submit{margin:0 auto 20px;position:relative;text-align:center;width:300px;}
.spc__primary-submit label{cursor:pointer;height:100%;display:block;left:0;position:absolute;top:0;width:100%;z-index:1;}
.spc__inner{padding-top:40px;}
.spc .section-hed{font-size:17px;font-weight:700;letter-spacing:0.65;margin-bottom:22px;margin-top:0;}
.spc--text-light{opacity:0.6;}
.spc__section{margin-bottom:50px;}
.spc__section--review .spc__box{padding-top:34px;}
.spc__section--review .spc__summary-item{margin-bottom:20px;}
.spc__section--review .spc__inline-form{margin-bottom:25px;}
.spc__section--review .spc__row{border-bottom:1px solid #f5f6f7;margin-bottom:25px;}
.spc__section--review .spc__row--total{border-bottom:0;margin-bottom:0;}
.spc__section--review .spc__row--total .spc__summary-item{margin:0;}
.spc__section--account p:not(.meta){margin:0;padding:0;}
.spc__section--account .spc__box{padding-bottom:35px;padding-top:25px;}
.spc__section--account .spc__inline-form{margin-bottom:16px;}
.spc__section--account .spc__inline-form-last{margin-top:16px;margin-bottom:0px;}
.spc__section--terms{margin-top:30px;}
.spc__section--terms label{font-size:13px;font-weight:500;}
.spc__primary-submit{display:block;}
.spc__primary-submit button{border-radius:30px;height:100%;padding:0 30px!important;position:relative;}
.spc__primary-submit button:active,.spc__primary-submit button:hover,.spc__primary-submit button:focus{padding:0 30px!important;}
.spc__primary-submit button::before{content:'';}
.spc__primary-submit button .loader{opacity:0;}
.spc__primary-submit button{display:block!important;margin:50px auto 0;}
.spc__box{margin-bottom:20px;margin-top:10px;padding-bottom:30px;padding-top:30px;}
.spc__row--total .spc__summary-item{margin-top:15px;text-transform:uppercase;width:100px!important;}
.spc__row--total .spc__summary-item.text-right{width:calc(100% - 100px)!important;}
.spc__row--total .spc__summary-item.text-right span{display:inline-block;vertical-align:middle;}
.spc__row--total .spc__summary-item.text-right [data-checkout-price]{font-size:30px;}
.spc__row--total .spc__summary-item.text-right .meta{opacity:0.7;padding-right:20px;}
.spc__update{border:1px solid #f26522;border-radius:3px;padding:30px;}
.spc__update,.spc__password{margin-left:calc(-3px);margin-right:calc(-3px);width:calc(100% + 6px);background-color:#fff5f1;margin-bottom:0!important;margin-top:20px;}
.spc__update .spc__update-subtitle,.spc__password .spc__password-subtitle{color:#f26522;}
.spc__password p.text-muted{font-weight:400;}
.spc__password form{margin:15px 0;width:calc(100% - 15px);}
.spc__password p{margin:5px 0!important;}
.spc__authentication-error{box-sizing:content-box;display:none!important;line-height:29px!important;min-height:29px!important;margin-bottom:-5px;margin-top:10px;opacity:0;padding-left:15px;padding-right:15px;padding-top:2px;padding-bottom:2px!important;pointer-events:none;transition:opacity 300ms ease;will-change:opacity;margin-left:calc(-3px);}
.spc__inline-form-inner{position:relative;}
.spc__inline-form-error{color:red;margin-bottom:-10px;padding:10px 0 0;}
.spc__inline-form-input{font-size:13px;font-weight:500;letter-spacing:0.6px;background:#fff;border:1px solid #cdd6df;border-radius:4px;color:black;height:40px;padding:0 17px;width:100%;margin-left:calc(-3px);margin-right:calc(-3px);width:calc(100% + 6px);}
.spc__inline-form-success{background-image:url("//assets.teachablecdn.com/icons/icon-check-green.svg");background-size:cover;height:20px;margin-top:-10px;opacity:0;pointer-events:none;position:absolute;right:5px;top:50%;width:20px;}
.spc__inline-form-button{height:100%;height:calc(100% + 1px);margin-right:-20px;position:absolute;right:0;top:0;transition:opacity 500ms ease;will-change:opacity;}
.spc__inline-form-button button{border-radius:30px;height:100%;padding:0 30px!important;position:relative;}
.spc__inline-form-button button:active,.spc__inline-form-button button:hover,.spc__inline-form-button button:focus{padding:0 30px!important;}
.spc__inline-form-button button::before{content:'';}
.spc__inline-form-button button .loader{opacity:0;}
.spc__inline-form-button.is-hidden{display:none;opacity:0;pointer-events:none;}
.spc__summary{align-items:center;display:flex;}
.spc__summary-item{vertical-align:middle;}
.spc__summary-item.mono{letter-spacing:0.65px;}
.spc__summary-item:nth-child(2){padding-left:20px;}
.spc__summary-item:nth-child(1)+.spc__summary-item:nth-last-child(2){width:calc(100% - 150px);}
.spc__summary-item:nth-child(1):nth-last-child(2){width:calc(100% - 100px);}
.spc__summary-item:nth-last-child(1){width:150px;}
.spc .payment-error-box{border-radius:4px;border:1px solid #ecbab1;color:#d4604b;font-size:12px;font-weight:600;line-height:20px;background-color:#fdf7f6;padding:16px;margin-bottom:24px;display:flex;}
.spc .payment-error-box i{padding-top:2px;font-size:16px;padding-right:16px;}
.spc__dropdown{color:#555;font-size:13px;font-weight:500;line-height:29px;letter-spacing:0.61px;border-radius:6px;padding:32px 45px;background:#fff;margin-bottom:-12px;position:relative;width:100%;z-index:1;}
@media (max-width: 767px){
.spc__dropdown{margin-left:-20px;margin-right:-20px;width:calc(100% + 40px);}
}
.spc__dropdown-view{display:none;}
.spc__dropdown-view.is-active{display:block;}
.spc__dropdown-view .content-box{margin-top:0;}
.spc__custom_dropdown .dropbtn{font-size:16px;cursor:pointer;border-radius:4px;}
.spc__custom_dropdown .option{height:50px;}
.spc__custom_dropdown .option-text{padding-left:10px;}
.spc__custom_dropdown .icon{width:20px;}
.spc__custom_dropdown .dropdown-content{display:none;position:absolute;background-color:#fff;min-width:160px;box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);z-index:1;width:100%;}
.spc__custom_dropdown .dropdown-content a{color:black;padding:12px 18px;text-decoration:none;display:block;}
.spc__custom_dropdown .dropdown-content a:hover{background-color:#f5f6f7;}
.spc__custom_dropdown button.minimal{border:1px solid #cdd6df;background-color:#fff;display:block;width:100%;height:40px;text-align:left;}
.spc__custom_dropdown button.minimal a{color:#000;font-size:13px;font-weight:500;line-height:29px;letter-spacing:0.61px;display:block;position:absolute;left:16px;top:7px;height:0px;}
.spc__custom_dropdown.arrow-down button{border:1px solid #cdd6df;background-color:#fff;background-image:linear-gradient(45deg, transparent 50%, gray 50%),linear-gradient(135deg, gray 50%, transparent 50%);background-position:calc(100% - 20px) calc(1em + 2px),calc(100% - 15px) calc(1em + 2px),calc(100% - 2.5em) 0.5em;background-size:5px 5px, 5px 5px, 1px 1.5em;background-repeat:no-repeat;}
.spc__button.is-disabled{cursor:not-allowed;opacity:0.5;pointer-events:none;}
.spc__price--button{border-left:1px solid rgba(255,255,255,0.3);display:inline-block;margin-left:20px;opacity:0.5;padding-bottom:12px;padding-left:20px;padding-top:12px;}
.spc__course-image{height:50px;overflow:hidden;width:50px;align-items:center;display:flex;justify-content:center;}
.spc__course-image img{max-height:100%;max-width:100%;}
.spc__confirm{padding-top:40px;}
.spc__checkbox input{display:inline-block;vertical-align:baseline;margin-right:8px;line-height:29px;}
.spc__checkbox span{display:inline-block;vertical-align:top;}
.spc__terms-text{text-align:center;font-weight:normal;width:100%;}
.spc__terms-text label{display:flex;justify-content:center;}
.spc__promotional-email-label{display:flex;}
.spc__mobile_pay p{color:#737c84;font-weight:400;margin-bottom:0;padding:0;}
.spc__mobile_pay .mobile-pay-authorized h3{color:#555;font-size:13px;margin:12px 0 14px 0;line-height:13px;}
.spc__mobile_pay .mobile-pay-authorized-method{margin-bottom:24px;color:#20272d;font-size:13px;font-weight:400;display:flex;}
.spc__mobile_pay .mobile-pay-authorized-method img{height:18px;margin-right:8px;}
.spc__mobile_pay .mobile-pay-btn{width:100%;height:40px;margin-bottom:16px;}
.spc__mobile_pay .google-pay-style{background-color:#000;background-image:url("https://www.gstatic.com/instantbuy/svg/dark_long_gpay.svg");background-origin:content-box;background-position:center;background-repeat:no-repeat;background-size:contain;border:0;border-radius:4px;box-shadow:0 1px 1px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.14);cursor:pointer;padding:11px 24px;}
.spc__mobile_pay .spc__box{padding-top:20px;}
.cc__back-to-existing{position:absolute;top:3px;right:0;}
.cc__back-to-existing button{background:none;border:none;font-weight:500;margin:0;padding:0!important;}
.cc__back-to-existing button:focus,.cc__back-to-existing button:hover{padding:0!important;}
.cc__back-to-existing button{font-weight:700;color:#a9a9a9;text-decoration:underline;}
.cc__learn_more_cc_save{color:#a9a9a9;font-weight:700;margin-left:10px;text-decoration:underline;}
.cc__label{display:block;}
.cc .form-group{margin-bottom:26px;position:relative;}
.cc__logos{height:25px;position:absolute;bottom:8px;right:8px;width:40px;}
.cc__logos img{left:0;max-height:100%;opacity:0;position:absolute;top:0;transition:opacity 300ms ease;}
.cc__input{align-items:center;position:relative;margin-bottom:7px;font-size:13px;font-weight:500;letter-spacing:0.6px;background:#fff;border:1px solid #cdd6df;border-radius:4px;color:black;height:40px;padding:0 17px;width:100%;}
.cc__input.StripeElement{opacity:0.6;transition:opacity 300ms ease;}
.cc__input>div{display:block;position:relative;top:50%;transform:translatey(-50%);}
.cc__cvc{height:25px;float:right;position:relative;}
.cc__cvc-icon{border:1px solid rgba(0,0,0,0.2);border-radius:50%;cursor:pointer;height:25px;position:relative;width:25px;}
.cc__cvc-icon::before{content:'?';color:rgba(0,0,0,0.5);font-family:sans-serif;font-size:14px;left:50%;position:absolute;top:50%;transform:translate3d(-50%, -50%, 0);}
.cc__cvc-dialog{background:#fff;bottom:100%;box-shadow:1px 1px 5px rgba(0,0,0,0.15);margin-bottom:15px;padding:15px;position:absolute;right:0;width:250px;z-index:2;opacity:0;pointer-events:none;transition:opacity 200ms ease, visibility 0ms 200ms ease;visibility:hidden;}
@media (min-width: 768px){
.cc__cvc-dialog{bottom:auto;left:100%;margin-bottom:0;margin-left:60px;right:auto;transform:translatey(-50%);top:50%;}
}
.cc__cvc-dialog img{max-width:100%;}
.cc__cvc-checkbox:checked ~ .cc__cvc-dialog{opacity:1;pointer-events:auto;transition:opacity 400ms ease;visibility:visible;}
.cc__cvc-card{margin-bottom:15px;}
.cc__cvc-card:last-of-type{margin-bottom:0;}
.loader{left:50%;height:20px;margin-left:-15px;margin-top:-10px;opacity:0;position:absolute;top:50%;width:30px;}
.loader-line{-webkit-animation:loaderLine 500ms linear infinite alternate;animation:loaderLine 500ms linear infinite alternate;background-color:white;height:100%;position:absolute;top:0;transform-origin:center center;width:2px;}
.loader-line:nth-child(2){-webkit-animation-delay:100ms;animation-delay:100ms;left:33.333%;}
.loader-line:nth-child(3){-webkit-animation-delay:200ms;animation-delay:200ms;left:66.666%;}
.loader-line:nth-child(4){-webkit-animation-delay:300ms;animation-delay:300ms;left:100%;}
.binary-toggle__label{background:transparent;border:0;color:#39719a;margin-bottom:25px;padding:0;}
@media (min-height: 900px){
.only-on-mobile{display:none!important;}
}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css */
.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-exclamation-circle:before{content:"\f06a";}
/*! CSS Used keyframes */
@-webkit-keyframes loaderLine{0%{transform:scale(0.5);}100%{transform:scale(1);}}
@keyframes loaderLine{0%{transform:scale(0.5);}100%{transform:scale(1);}}
/*! CSS Used fontfaces */
@font-face{font-family:'FontAwesome';src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.eot?v=4.1.0');src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.eot#iefix&v=4.1.0') format('embedded-opentype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.woff?v=4.1.0') format('woff'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.ttf?v=4.1.0') format('truetype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.svg?v=4.1.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal;}

</style>



<div class="spc" data-checkout="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic#" data-initialized="true">

  <main id="sr-main-content" tab-index="-1" class="container spc__inner">
    <h1 class="sr-only">Checkout</h1>
    <div class="col-sm-6">
      <section class="spc__section spc__section--review" data-checkout-main-order-summary="">
        <h2 class="section-hed">Order Summary</h2>

<section class="spc__box content-box">
  <div class="row">
    <div class="spc__box-inner col-xs-12">

      <div class="spc__row">
        <div class="spc__summary">
          <div class="spc__summary-item spc__course-image">
            <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://d2vvqscadf4c1f.cloudfront.net/0M5IR4vQQwFZONzqXdAS_The%20Foundations%20of%20Card%20Magic%20Course%20Thumbnail.png" style="max-width: 100%;">
          </div>

          <div class="spc__summary-item spc--text-light">
            Basic Enrollement — The Foundations of Card Magic
          </div>

          <div class="spc__summary-item text-right mono">
            $52
          </div>
        </div>
      </div>

      <div data-checkout-price-modifiers="">
        <div class="spc__row hidden" data-checkout-price-modifier-tax="">
          <div class="spc__summary" data-checkout-price-modifier-tax="">
            <div class="spc__summary-item spc--text-light" data-checkout-tax-label="">VAT - 0% (Côte d'Ivoire)</div>

            <div class="spc__summary-item text-right mono" data-checkout-price="tax">+ $0.00</div>
          </div>

          <div class="hidden" data-checkout-vat-id-form="">
            <div class="binary-toggle" data-binary-toggle="">
              <button class="binary-toggle__label" data-binary-toggle-label="" id="add_vat_id">
                Add VAT ID
              </button>

              <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                <form class="form-inline spc__inline-form" data-checkout-inline-form="tax" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                  <div class="spc__inline-form-inner">
                    <input type="text" name="vat_tax_id" id="vat_tax_id" autocomplete="off" class="spc__inline-form-input" placeholder="VAT ID" data-checkout-inline-input="">

                    <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                    <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                      <button class="is-hidden btn btn-primary" id="save_vat_id" name="save_vat_id">
                        <div class="loader">
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                        </div>

                        <div class="spc__inline-form-button-text">
                          Add VAT ID
                        </div>
                      </button>
                    </div>
                  </div>

                  <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                    Invalid VAT ID
                  </div>
</form>              </div>
            </div>
          </div>
        </div>

          <div class="spc__row">
            <div class="spc__summary hidden" data-checkout-price-modifier-coupon="">
              <div class="spc__summary-item spc--text-light">
                Coupon Discount
              </div>

              <div class="spc__summary-item text-right mono" data-checkout-price="coupon">- $0.00</div>
            </div>

            <div data-checkout-inline-form-coupon="">
              <div class="binary-toggle" data-binary-toggle="">
                <button class="binary-toggle__label" data-binary-toggle-label="" id="add_coupon">
                  Add Coupon
                </button>

                <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                  <form class="form-inline spc__inline-form" data-checkout-inline-form="coupon" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                    <div class="spc__inline-form-inner">
                      <input type="text" name="coupon_code" id="coupon_code" autocomplete="off" class="spc__inline-form-input" placeholder="Coupon code" data-checkout-inline-input="">

                      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                        <button id="verify-coupon-code" class="is-hidden btn btn-primary">
                          <div class="loader">
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                          </div>

                          <div class="spc__inline-form-button-text">
                            Apply
                          </div>
                        </button>
                      </div>
                    </div>

                    <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                      Invalid Coupon
                    </div>
</form>                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="spc__row spc__row--total">
        <div class="spc__summary">
          <div class="spc__summary-item">
            Total
          </div>

          <div class="spc__summary-item text-right">
            <span class="meta" data-checkout-currency="">
              USD
            </span>

            <span data-checkout-price="final">$52</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      </section>

      <section class="spc__section spc__section--account">
        <h2 class="section-hed">Account Information</h2>

<div class="content-box spc__box">
  <div data-checkout-device-message="" class="spc__new-device hidden">
    <div class="spc__new-device-header">
      <div class="spc__x">
        <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="emails" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="SPC-unrecognizeddevice" transform="translate(-290.000000, -711.000000)" fill="#D4604B" fill-rule="nonzero">
              <g id="Acct-info" transform="translate(248.000000, 627.000000)">
                <g id="Group-6" transform="translate(42.000000, 84.000000)">
                  <g id="exclamation-circle">
                    <path d="M18,9 C18,13.9716653 13.9702137,18 9,18 C4.02978629,18 0,13.9716653 0,9 C0,4.0312379 4.02978629,0 9,0 C13.9702137,0 18,4.0312379 18,9 Z M9,10.8145161 C8.07804435,10.8145161 7.33064516,11.5619153 7.33064516,12.483871 C7.33064516,13.4058266 8.07804435,14.1532258 9,14.1532258 C9.92195565,14.1532258 10.6693548,13.4058266 10.6693548,12.483871 C10.6693548,11.5619153 9.92195565,10.8145161 9,10.8145161 Z M7.41509274,4.81405645 L7.68429435,9.74954032 C7.6968871,9.98049194 7.88784677,10.1612903 8.119125,10.1612903 L9.880875,10.1612903 C10.1121532,10.1612903 10.3031129,9.98049194 10.3157056,9.74954032 L10.5849073,4.81405645 C10.5985161,4.56459677 10.3998992,4.35483871 10.1500766,4.35483871 L7.8498871,4.35483871 C7.60006452,4.35483871 7.40148387,4.56459677 7.41509274,4.81405645 Z" id="Shape"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>

      <h3 class="section-hed">We don't recognize this device.</h3>
    </div>

    <p class="spc__new-device-body">
      Check your email for instructions to authorize this device and complete your purchase.

      <a data-no-turbolink="" href="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic/sign-out">
        <strong>Reset</strong>
</a>    </p>
  </div>

  <div data-checkout-authentication-message="" class="spc__authenticated hidden">
    <p>
    </p><div class="spc__check"></div>

    You are logged in as <strong><span data-checkout-authentication-email=""></span></strong>.

    <a class="spc__log-out" data-no-turbolink="" href="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic/sign-out">
      <strong>Log Out</strong>
</a>    <p></p>
  </div>

    <div class="spc__unauthenticated">
      <form class="form-inline spc__inline-form" data-checkout-inline-form="email" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/identify" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <label class="control-label" for="email">Email Address</label>

  <div class="spc__inline-form-inner">
    <input type="email" name="email" id="email" autofocus="autofocus" class="spc__inline-form-input" data-checkout-email="" data-checkout-inline-input="" placeholder="name@example.com" required="required">

    <div class="spc__inline-form-success" data-checkout-inline-success=""></div>
  </div>

  <p class="spc__authentication-error meta" data-checkout-inline-error="" data-checkout-authentication-error="" data-authentication-error-default="The email you entered is invalid." data-authentication-error-misspelled-gmail="Did you mean &quot;gmail&quot;?" data-authentication-error-misspelled-com="Did you mean &quot;.com&quot;?" ,="" data-authentication-error-no-tld="Did you forget something? Most email addresses have a &quot;.&quot;, like in &quot;.com&quot;." data-authentication-error-dismiss="Dismiss"></p>

</form>
      <form class="form-inline spc__inline-form" data-checkout-metadata-form="username" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <label class="control-label" for="username">Name</label>

  <div class="spc__inline-form-inner">
    <input type="text" name="username" id="username" autofocus="autofocus" class="spc__inline-form-input" placeholder="John Doe" required="required">
  </div>
</form>
      <form class="form-inline spc__inline-form spc__inline-form-last" data-checkout-metadata-form="allow_instructor_emails" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <div class="boolean-checkbox spc__checkbox">
    <label class="spc__promotional-email-label">
      <input type="hidden" name="allow_instructor_emails" id="allow_instructor_emails" value="false">
      <input name="allow_instructor_emails" type="checkbox" value="true">
      <span>I agree to receive instructional and promotional emails</span>
    </label>
  </div>
</form>

      <div id="user-password-form">
        <div class="spc__password alert alert-warning hidden" data-checkout-alert="school">

  <p class="spc__password-subtitle">
      It looks like you already have a 52Kards account.
  </p>

  <form class="form-inline spc__inline-form" data-checkout-inline-form="login-school" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/login" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">

    <div class="spc__inline-form-inner">
      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

      <input type="password" name="password" id="password_school" value="" autocomplete="off" class="spc__inline-form-input" data-checkout-inline-input="" required="required" placeholder="Enter password">

      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
        <button class="btn btn-primary">
          <div class="loader">
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
          </div>

          <div class="spc__inline-form-button-text">
            Log In
          </div>
        </button>
      </div>
    </div>

    <div class="spc__inline-form-error hidden" data-checkout-inline-error="" data-checkout-inline-error-locked="Your account has been locked due to an excessive number of unsuccessful sign in attempts.">
      Invalid email or password
    </div>

</form>
  <p class="text-muted">If this is not you, please use a different email address.</p>
  <p class="text-muted">If you forgot your password, <a href="https://sso.teachable.com/secure/6419/users/password/new">click here to reset it</a>.</p>

</div>

      </div>

      <div id="teachable-account-password-form">
        <div class="spc__password alert alert-warning hidden" data-checkout-alert="myteachable">

  <p class="spc__password-subtitle">
      It looks like you already have a myTeachable account.
  </p>

  <form class="form-inline spc__inline-form" data-checkout-inline-form="login-teachable" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/login" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">

    <div class="spc__inline-form-inner">
      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

      <input type="password" name="password" id="password_myteachable" value="" autocomplete="off" class="spc__inline-form-input" data-checkout-inline-input="" required="required" placeholder="Enter password">

      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
        <button class="btn btn-primary">
          <div class="loader">
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
          </div>

          <div class="spc__inline-form-button-text">
            Log In
          </div>
        </button>
      </div>
    </div>

    <div class="spc__inline-form-error hidden" data-checkout-inline-error="" data-checkout-inline-error-locked="Your account has been locked due to an excessive number of unsuccessful sign in attempts.">
      Invalid email or password
    </div>

</form>
  <p class="text-muted">If this is not you, please use a different email address.</p>
  <p class="text-muted">If you forgot your password, <a href="https://sso.teachable.com/secure/teachable_accounts/password/new">click here to reset it</a>.</p>

</div>

      </div>
    </div>
</div>

      </section>

      <section class="spc__section spc__section--pay">
        <form data-checkout-form-payment="" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/confirm" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
            <div data-checkout-payment-methods="">
  <h2 class="section-hed">Payment Information</h2>

  <div class="spc__secure">
    <span class="spc__secure-icon">
      <img src="https://assets.teachablecdn.com/icons/checkout-lock.svg">
    </span>

    <span class="spc__secure-text">
      This is a secure 128-bit SSL encrypted payment
    </span>
  </div>

  <div class="payment-error-box hidden" data-checkout-credit-card-error="">
    <i class="fa fa-exclamation-circle"></i>
    <span data-checkout-credit-card-error-text=""></span>
  </div>

    <div class="spc__dropdown">
      <div>Payment Methods</div>
      <div data-checkout-dropdown="" class="spc__custom_dropdown dropdown arrow-down">
        <button type="button" class="dropbtn minimal"><a class="option" data-payment-method="credit_card">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Visa-d50cb55cfdca9495407f178cc8fe0a97.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Mastercard-4668949e37c23ba9b77aea7465e43dfd.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/American_Express-35105972356b780cbc2a9474a3b68f15.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Discover-1924c8c014c068e27abd643d54b4c8a5.png
          ">
          <span class="option-text">Credit Card</span>
          </a></button>
        <div id="option-container" class="dropdown-content">
        <a class="option" data-payment-method="credit_card">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Visa-d50cb55cfdca9495407f178cc8fe0a97.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Mastercard-4668949e37c23ba9b77aea7465e43dfd.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/American_Express-35105972356b780cbc2a9474a3b68f15.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Discover-1924c8c014c068e27abd643d54b4c8a5.png
          ">
          <span class="option-text">Credit Card</span>
          </a>

         <a class="option" data-payment-method="paypal">
            <img alt="Logo" class="icon" src="
              /packs/client/assets/Paypal-48a7344b1860c94e51f4f14575b8eeae.png
            ">
            <span class="option-text">Paypal</span>
          </a>


      </div>
      </div>
    </div>

    <meta id="sca-prompt-public-key" data-stripe-connect-public-key="pk_live_V1vXVI8egfxQBL3KJ7cIMERw">

    <div class="spc__stripe spc__dropdown-view is-active" data-checkout-stripe="">
      <div class="content-box cc spc__box" data-checkout-stripeelement="">

        <div data-checkout-credit-card-existing="" data-checkout-string-useanother="Use another card"></div>

        <div data-checkout-credit-card-new="">
          <div class="form-group">
            <label class="cc__label" for="credit_card_number">Card Number</label>

            <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-number="" id="credit_card_number"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame10" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=cardNumber&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>

            <div class="cc__back-to-existing">
              <button type="button" class="hidden" data-checkout-use-existing="">Use existing Credit Card</button>
            </div>

            <div class="cc__logos" data-checkout-credit-card-logos="">
              <img class="cc__logos--visa" src="https://fedora.teachablecdn.com/assets/credit-card-logos/visa-8f9efe7553852c98209ef41061ef9f73467e2e213fe940e07ae9ab43f636d283.svg">
              <img class="cc__logos--amex" src="https://fedora.teachablecdn.com/assets/credit-card-logos/american_express-c3395370155f68783beadd8f5a4104504a5a0a93e935d113b10003b1a47bc3eb.svg">
              <img class="cc__logos--mastercard" src="https://fedora.teachablecdn.com/assets/credit-card-logos/mastercard-2369162d32348b52e509e9711f30e7c7ace4ae32a446ca26c283facf08c36021.svg">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="cc__label" for="expiration">
                  Expiration Date
                </label>

                <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-expiry="" id="expiration"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame11" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=cardExpiry&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <div data-checkout-cvc-explainer="" class="cc__cvc">
                  <label class="cc__cvc-icon" for="cc__cvc-checkbox"></label>
                  <input class="cc__cvc-checkbox hidden" type="checkbox" id="cc__cvc-checkbox">
                  <div class="cc__cvc-dialog">
                    <div class="cc__cvc-card cc__cvc-card--visa cc__cvc-card--mastercard">
                      <img src="https://fedora.teachablecdn.com/assets/checkout/visa-mastercard-8b39b85f1137faa9c17db95c387f709a5c82f68630995d9e3e58bc67c8c423ab.png" alt="Visa mastercard">
                    </div>

                    <div class="cc__cvc-card cc__cvc-card--amex">
                      <img src="https://fedora.teachablecdn.com/assets/checkout/amex-08cb4b99f7d88a70ae70899a5703949aa4ff82b2af47e44b1db2617ce827ca91.png" alt="Amex">
                    </div>
                  </div>
                </div>

                <label for="cvc">
                  CVC Code
                </label>

                <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-cvc="" id="cvc"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame12" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=cardCvc&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="country_code_credit_card">Country</label>
                <select name="country_code" id="country_code_credit_card-cc" class="cc__input" data-checkout-country="" data-checkout-country-endpoint="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" data-checkout-country-authenticity="7JNAjuViICBKbskFZsVK/Hk8OvFtEVYWgg9t5dfujRHO1a8/VUFWkWy6BtwyOy4CkLyU3nJ2WaGoBRju7C3AXQ=="><option value="">Select your billing country</option><option selected="selected" value="CI">Côte d'Ivoire</option>
<option disabled="disabled" value="">———————————————</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestine, State of</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option></select>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label for="postal">Postal Code</label>
                <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-postal="" id="postal"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame13" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=postalCode&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
              </div>
            </div>
          </div>

            <div class="row" data-checkout-save-payment-details-container="">
              <div class="col-sm-12 form-group spc__checkbox">
                <input type="checkbox" id="save-payment-details" data-checkout-save-payment-details="" checked="">
                <label for="save-payment-details">Save my card for future purchases</label>
                <a class="cc__learn_more_cc_save" href="https://support.teachable.com/hc/en-us/articles/360004256491-Editing-Your-Profile-and-Billing-Information#myTeachableAccounts" target="_blank">Learn More</a>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="spc__paypal spc__dropdown-view" data-checkout-paypal="">
      <div class="content-box cc spc__box">
        <div class="form-group">
          <label for="country_code_paypal">Country</label>
          <select name="country_code" id="country_code_credit_card-paypal" class="cc__input" data-checkout-country="" data-checkout-country-endpoint="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" data-checkout-country-authenticity="vls2Cyun6Eciri0RyPYtdm3avMSVew7yr0Xy6fnkwLmcHdm6m4Se9gR64sicCEmIhFoS64ocAUWFT4fiwieN9Q=="><option value="">Select your billing country</option><option selected="selected" value="CI">Côte d'Ivoire</option>
<option disabled="disabled" value="">———————————————</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestine, State of</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option></select>
        </div>
      </div>
    </div>

    <div class="spc__mobile_pay spc__dropdown-view" data-checkout-mobile-pay="">
      <div class="content-box spc__box">
        <div data-checkout-mobile-form="">
          <button type="button" class="mobile-pay-btn google-pay-style" data-checkout-mobile-button="" aria-label="Buy with Google Pay"></button>
          <p class="text-center" data-checkout-mobile-message="">Securely connect to Google Pay to finish adding your payment method. You’ll be redirected back here when done. Additional taxes may apply.</p>
        </div>
        <div class="mobile-pay-authorized hidden" data-checkout-mobile-pay-authorized="">
          <h3>Payment Methods</h3>
          <div class="mobile-pay-authorized-method">
            <span data-mobile-pay-method-logo=""><img alt="Google Pay authorized" src="/packs/client/assets/Google_Pay_Mark-e23dc91f4c82c81d51650d5e44140d08.png"></span>
            <span data-mobile-pay-method-name="">Google Pay</span>
          </div>
          <p>Almost done! Complete your order by clicking the button below.</p>
        </div>
      </div>
    </div>

  <span data-checkout-card-logo-amex="https://fedora.teachablecdn.com/assets/credit-card-logos/american_express-c3395370155f68783beadd8f5a4104504a5a0a93e935d113b10003b1a47bc3eb.svg"></span>
  <span data-checkout-card-logo-diners-club="https://fedora.teachablecdn.com/assets/credit-card-logos/diners_club-be2bfa8220f9cea7d21bcc3c92eee23d4161807eab3957b99b51ad3285eb5717.svg"></span>
  <span data-checkout-card-logo-discover="https://fedora.teachablecdn.com/assets/credit-card-logos/discover-e5876af25e54f712a03550ed24ed12e51489e9859e5bed8dd68811c3ff38bb6a.svg"></span>
  <span data-checkout-card-logo-jcb="https://fedora.teachablecdn.com/assets/credit-card-logos/jcb-1b967cb007de51783d8c965af8d1f3fd6ee6c592e4a9b0168bfe82038123b550.svg"></span>
  <span data-checkout-card-logo-mastercard="https://fedora.teachablecdn.com/assets/credit-card-logos/mastercard-2369162d32348b52e509e9711f30e7c7ace4ae32a446ca26c283facf08c36021.svg"></span>
  <span data-checkout-card-logo-visa="https://fedora.teachablecdn.com/assets/credit-card-logos/visa-8f9efe7553852c98209ef41061ef9f73467e2e213fe940e07ae9ab43f636d283.svg"></span>
</div>


          <section class="spc__confirm hidden" data-checkout-confirm-location="">
            <h2 class="section-hed">Confirm Your Billing Location</h2>

            <div class="content-box spc__box" data-checkout-confirm-location-inner="">
              <div></div>
            </div>
          </section>

          <input type="submit" class="hidden" id="spc-primary-submit">
</form>      </section>

        <section class="spc__section spc__section--review hidden" data-checkout-mobile-order-summary="">
          <h2 class="section-hed">Order Summary</h2>

<section class="spc__box content-box">
  <div class="row">
    <div class="spc__box-inner col-xs-12">

      <div class="spc__row">
        <div class="spc__summary">
          <div class="spc__summary-item spc__course-image">
            <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://d2vvqscadf4c1f.cloudfront.net/0M5IR4vQQwFZONzqXdAS_The%20Foundations%20of%20Card%20Magic%20Course%20Thumbnail.png" style="max-width: 100%;">
          </div>

          <div class="spc__summary-item spc--text-light">
            Basic Enrollement — The Foundations of Card Magic
          </div>

          <div class="spc__summary-item text-right mono">
            $52
          </div>
        </div>
      </div>

      <div data-checkout-price-modifiers="">
        <div class="spc__row hidden" data-checkout-price-modifier-tax="">
          <div class="spc__summary" data-checkout-price-modifier-tax="">
            <div class="spc__summary-item spc--text-light" data-checkout-tax-label="">VAT - 0% (Côte d'Ivoire)</div>

            <div class="spc__summary-item text-right mono" data-checkout-price="tax">+ $0.00</div>
          </div>

          <div class="hidden" data-checkout-vat-id-form="">
            <div class="binary-toggle" data-binary-toggle="">
              <button class="binary-toggle__label" data-binary-toggle-label="" id="add_vat_id">
                Add VAT ID
              </button>

              <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                <form class="form-inline spc__inline-form" data-checkout-inline-form="tax" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                  <div class="spc__inline-form-inner">
                    <input type="text" name="vat_tax_id" id="vat_tax_id" autocomplete="off" class="spc__inline-form-input" placeholder="VAT ID" data-checkout-inline-input="">

                    <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                    <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                      <button class="is-hidden btn btn-primary" id="save_vat_id" name="save_vat_id">
                        <div class="loader">
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                        </div>

                        <div class="spc__inline-form-button-text">
                          Add VAT ID
                        </div>
                      </button>
                    </div>
                  </div>

                  <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                    Invalid VAT ID
                  </div>
</form>              </div>
            </div>
          </div>
        </div>

          <div class="spc__row">
            <div class="spc__summary hidden" data-checkout-price-modifier-coupon="">
              <div class="spc__summary-item spc--text-light">
                Coupon Discount
              </div>

              <div class="spc__summary-item text-right mono" data-checkout-price="coupon">- $0.00</div>
            </div>

            <div data-checkout-inline-form-coupon="">
              <div class="binary-toggle" data-binary-toggle="">
                <button class="binary-toggle__label" data-binary-toggle-label="" id="add_coupon">
                  Add Coupon
                </button>

                <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                  <form class="form-inline spc__inline-form" data-checkout-inline-form="coupon" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                    <div class="spc__inline-form-inner">
                      <input type="text" name="coupon_code" id="coupon_code" autocomplete="off" class="spc__inline-form-input" placeholder="Coupon code" data-checkout-inline-input="">

                      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                        <button id="verify-coupon-code" class="is-hidden btn btn-primary">
                          <div class="loader">
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                          </div>

                          <div class="spc__inline-form-button-text">
                            Apply
                          </div>
                        </button>
                      </div>
                    </div>

                    <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                      Invalid Coupon
                    </div>
</form>                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="spc__row spc__row--total">
        <div class="spc__summary">
          <div class="spc__summary-item">
            Total
          </div>

          <div class="spc__summary-item text-right">
            <span class="meta" data-checkout-currency="">
              USD
            </span>

            <span data-checkout-price="final">$52</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        </section>

      <div class="spc__update alert-warning hidden" data-checkout-tax-update="">
        <span class="spc__update-subtitle">
          The transaction total has been updated to reflect added tax based on your billing country. Please review the new total and confirm your payment.
        </span>
      </div>

      <div class="payment-error-box only-on-mobile hidden" data-checkout-credit-card-error="">
        <i class="fa fa-exclamation-circle"></i>
        <span data-checkout-credit-card-error-text=""></span>
      </div>

      <section class="spc__section spc__section--terms" data-checkout-agree-terms="">
        <form class="form-inline spc__inline-form" data-checkout-metadata-form="agreed_to_terms" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <div class="boolean-checkbox spc__checkbox spc__terms-text">
    <label>
      <input type="hidden" name="agreed_to_terms" id="agreed_to_terms" value="false">
      <input id="agreed_to_terms_checkbox" name="agreed_to_terms" type="checkbox" value="true">
      <span>
  I agree to the <a href="https://courses.52kards.com/p/terms" target="_blank">Terms of Use</a> &amp; <a href="https://courses.52kards.com/p/privacy" target="_blank">Privacy Policy</a>

</span>
    </label>
  </div>
</form>
      </section>

      <div class="spc__primary-submit" data-checkout-enroll="">
        <button id="confirm-purchase" type="button" class="btn btn-primary spc__button is-disabled">
          <div class="loader">
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
          </div>
          <span class="spc__button-text">Enroll in Course</span>
          <span class="spc__price--button" data-checkout-price="button">$52.00</span>
          <label for="spc-primary-submit"></label>
        </button>
      </div>

      <div class="spc__description hidden" data-checkout-price="description" data-checkout-price-string="for the first month then">$52</div>

    </div>

  </main>
</div>

@endsection
