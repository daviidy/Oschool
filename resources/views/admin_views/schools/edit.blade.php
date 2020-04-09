@extends('layouts.admin_views.menu-school-icon')
@section('title', 'Paramètres de l\'école')
@section('content')

<style media="screen">
/*settings css*/

/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-8126fa277249c04e853f.css ; media=screen */
@media screen{
.bootstrap-switch{display:inline-block;direction:ltr;cursor:pointer;border-radius:4px;border:1px solid;border-color:#cccccc;position:relative;text-align:left;overflow:hidden;line-height:8px;z-index:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;vertical-align:middle;-webkit-transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;-webkit-transition:border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;}
.bootstrap-switch .bootstrap-switch-container{display:inline-block;top:0;border-radius:4px;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);}
.bootstrap-switch .bootstrap-switch-handle-on,.bootstrap-switch .bootstrap-switch-handle-off,.bootstrap-switch .bootstrap-switch-label{-webkit-box-sizing:border-box;box-sizing:border-box;cursor:pointer;display:inline-block!important;height:100%;padding:6px 12px;font-size:14px;line-height:20px;}
.bootstrap-switch .bootstrap-switch-handle-on,.bootstrap-switch .bootstrap-switch-handle-off{text-align:center;z-index:1;}
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary{color:#fff;background:#428bca;}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default{color:#000;background:#eeeeee;}
.bootstrap-switch .bootstrap-switch-label{text-align:center;margin-top:-1px;margin-bottom:-1px;z-index:100;color:#333333;background:#ffffff;}
.bootstrap-switch .bootstrap-switch-handle-on{border-bottom-left-radius:3px;border-top-left-radius:3px;}
.bootstrap-switch .bootstrap-switch-handle-off{border-bottom-right-radius:3px;border-top-right-radius:3px;}
.bootstrap-switch input[type='checkbox']{position:absolute!important;top:0;left:0;opacity:0;filter:alpha(opacity=0);z-index:-1;}
.bootstrap-switch input[type='checkbox'].form-control{height:auto;}
.bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container{-webkit-transition:margin-left 0.5s;transition:margin-left 0.5s;}
.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label{border-bottom-right-radius:3px;border-top-right-radius:3px;}
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label{border-bottom-left-radius:3px;border-top-left-radius:3px;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input,select,textarea{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
textarea{overflow:auto;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-bars:before{content:"\F0C9";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input,select,textarea{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
textarea{overflow:auto;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p,h2{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h2,h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h2 .small{font-weight:400;line-height:1;color:#e4e5e6;}
h2{margin-top:22px;margin-bottom:11px;}
h2 .small{font-size:65%;}
h4{margin-top:11px;margin-bottom:11px;}
h2{font-size:38px;}
h4{font-size:21px;}
p{margin:0 0 11px;}
.small{font-size:92%;}
.text-center{text-align:center;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-lg-3,.col-sm-4,.col-sm-6,.col-lg-9,.col-sm-12,.col-md-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-4,.col-sm-6,.col-sm-12{float:left;}
.col-sm-4{width:33.33333%;}
.col-sm-6{width:50%;}
.col-sm-12{width:100%;}
.col-sm-offset-1{margin-left:8.33333%;}
}
@media (min-width: 992px){
.col-md-12{float:left;}
.col-md-12{width:100%;}
}
@media (min-width: 1200px){
.col-lg-3,.col-lg-9{float:left;}
.col-lg-3{width:25%;}
.col-lg-9{width:75%;}
.col-lg-8{width:66.66%;}
}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal;}
input[type="checkbox"]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.form-control{display:block;width:100%;height:41px;padding:6px 12px;font-size:13px;line-height:1.72222;color:#95a5a6;background-color:white;background-image:none;border:1px solid #ccc;border-radius:5px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;-webkit-transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
textarea.form-control{height:auto;}
.form-group{margin-bottom:15px;}
.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#556878;}
.input-group{position:relative;display:table;border-collapse:separate;}
.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0;}
.input-group .form-control:focus{z-index:3;}
.input-group-addon,.input-group .form-control{display:table-cell;}
.input-group-addon{width:1%;white-space:nowrap;vertical-align:middle;}
.input-group-addon{padding:6px 12px;font-size:13px;font-weight:400;line-height:1;color:#95a5a6;text-align:center;background-color:#eeeeee;border:1px solid #ccc;border-radius:5px;}
.input-group .form-control:first-child{border-top-right-radius:0;border-bottom-right-radius:0;}
.input-group .form-control:last-child,.input-group-addon:last-child{border-top-left-radius:0;border-bottom-left-radius:0;}
.input-group-addon:last-child{border-left:0;}
.alert{padding:15px;margin-bottom:22px;border:1px solid transparent;border-radius:4px;}
.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6;}
.alert-info{color:#3498db;background-color:#d9edf7;border-color:#bce8f1;}
[disabled]{cursor:default!important;pointer-events:none;}
.tch-btn-header-primary{color:white;background-color:#6aace6;border:1px solid #6aace6;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
.tch-btn-header-primary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active{background-image:none;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-icon{color:white;background-color:#fff;border:1px solid #a9a9a9;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:#0f8d82;}
.tch-btn-header-icon:focus{color:white;background-color:#ededed;border-color:#e8e8e8;}
.tch-btn-header-icon:hover{color:white;background-color:#ededed;border-color:#929292;}
.tch-btn-header-icon:active{color:white;background-color:#ededed;border-color:#929292;}
.tch-btn-header-icon:active:hover,.tch-btn-header-icon:active:focus{color:white;background-color:#dedede;border-color:#838383;}
.tch-btn-header-icon:active{background-image:none;}
.tch-btn-header-icon:active,.tch-btn-header-icon:hover,.tch-btn-header-icon:focus{background:white;border-color:#ff7f45;color:#ff7f45;}
.tch-btn-header-icon:active:hover,.tch-btn-header-icon:active:focus,.tch-btn-header-icon:hover:hover,.tch-btn-header-icon:hover:focus,.tch-btn-header-icon:focus:hover,.tch-btn-header-icon:focus:focus{background:white;border-color:#ff7f45;color:#ff7f45;}
.tch-btn-header-icon:focus{outline:0!important;}
.tch-btn-header-icon:focus{outline:0!important;}
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#6aace6;border:1px solid #6aace6;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-primary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-primary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-primary:active:hover,.tch-btn-content-primary:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-primary:active{background-image:none;}
.tch-btn-content-secondary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#fff;border:1px solid #a9a9a9;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#e1e3e4;color:#0f8d82;}
.tch-btn-content-secondary:focus{outline:0!important;}
.tch-btn-content-secondary:focus{outline:0!important;}
.tch-btn-content-secondary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-secondary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-secondary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-secondary:active:hover,.tch-btn-content-secondary:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-secondary:active{background-image:none;}
.tch-btn-content-secondary:active,.tch-btn-content-secondary:hover,.tch-btn-content-secondary:focus{background:#fff;border-color:#1ea69a;color:#1ea69a;}
.tch-btn-content-secondary:active:hover,.tch-btn-content-secondary:active:focus,.tch-btn-content-secondary:hover:hover,.tch-btn-content-secondary:hover:focus,.tch-btn-content-secondary:focus:hover,.tch-btn-content-secondary:focus:focus{background:#fff;border-color:#1ea69a;color:#1ea69a;}
.tch-btn-content-secondary:focus{outline:0!important;}
.tch-btn-content-secondary:focus{outline:0!important;}
.tch-btn-content-danger{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#fff;border:1px solid #d4604b;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#6aace6;color:#6aace6;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{color:white;background-color:#ededed;border-color:#e8e8e8;}
.tch-btn-content-danger:hover{color:white;background-color:#ededed;border-color:#c3452e;}
.tch-btn-content-danger:active{color:white;background-color:#ededed;border-color:#c3452e;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus{color:white;background-color:#6aace6;border-color:#6aace6;}
.tch-btn-content-danger:active{background-image:none;}
.tch-btn-content-danger:active,.tch-btn-content-danger:hover,.tch-btn-content-danger:focus{background:#fff;border-color:#d4604b;color:#d4604b;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus,.tch-btn-content-danger:hover:hover,.tch-btn-content-danger:hover:focus,.tch-btn-content-danger:focus:hover,.tch-btn-content-danger:focus:focus{background:#fff;border-color:#4D90CC;color:#4D90CC;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.alert{background:none;color:#20272d;padding:14px 25px 14px 25px;text-shadow:none;border-radius:3px;font-family:"TeachableSans";line-height:21px;letter-spacing:0.2px;margin-bottom:26px;font-weight:400;font-size:11px;font-weight:500;display:-webkit-box;display:-ms-flexbox;display:flex;position:relative;-webkit-box-align:center;-ms-flex-align:center;align-items:center;letter-spacing:0.5px;font-size:12px;}
.alert a{color:#f1c40f;font-weight:bold;}
.alert a:hover{text-decoration:underline;}
.alert{padding:14px 25px 14px 47px;background:none;border:1px solid #e0e0e0;color:#6f6c6c;}
.alert:before{font-family:FontAwesome;position:absolute;margin-left:-30px;display:block;top:calc(50% - 15px);padding:5px;font-size:20px;color:#809196;opacity:0.9;}
.alert a{text-decoration:underline;font-weight:600;}
.alert-info{background:#4d90cc3b;border:1px solid #4d90cc3b;color:#4D90CC;}
.alert-info:before{content:'\F059';color:#4D90CC;}
.alert-info a,.alert-info a:hover,.alert-info a:active,.alert-info a:focus{font-weight:300;color:#4D90CC;text-decoration:underline;}
.alert-success{background-color:#54cc91;color:#fff;border:1px solid #54cc91;}
.alert-success:before{content:'';background-image:url("//assets.teachablecdn.com/admin/assets/images/icons/icon-check-green.svg");color:#fff;opacity:1;width:20px;background-position:0px 4px;height:26px;background-repeat:no-repeat;background-size:20px;border:none!important;}
.tch-learn-more{text-align:center;}
.tch-learn-more .alert{display:inline-block;margin:auto;}
textarea{font-size:14px;line-height:24px;padding:5px 11px;}
label{font-weight:normal;line-height:2.4;font-size:16px;color:#808080;line-height:30px;font-weight:600;margin-bottom:12px;}
.control-label{font-size:13px!important;margin-bottom:5px;color:#47505e!important;line-height:22px;font-weight:500;letter-spacing:0.5px;}
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:"TeachableSans", Helvetica, Arial, sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:44px;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
select.form-control{-moz-appearance:none;appearance:none;-webkit-appearance:none;background:url("//assets.teachablecdn.com/admin/assets/images/select-up-down.png") right 12px center #fff no-repeat;background-size:15px;font-size:13px;}
.help-block{color:inherit;padding:0px 0px;font-size:13px;-webkit-box-shadow:none;box-shadow:none;display:none;}
.form-group{position:relative;margin-bottom:28px;}
h2,h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h2 .small{font-weight:normal;line-height:1;color:#8d939a;}
h2.tch-subheading{font-weight:600;font-size:15px;letter-spacing:0.1px;margin-bottom:20px;color:#545665;}
h2.tch-subheading .small{line-height:19px;margin-top:13px;color:rgba(71, 80, 94, .55);font-size:12px;font-weight:500;letter-spacing:0.5px;font-family:"TeachableSans";}
h2{margin-top:22px;margin-bottom:11px;}
h2 .small{font-size:65%;}
h4{margin-top:11px;margin-bottom:11px;}
h2{font-size:38px;}
h4{font-size:21px;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
.small{font-size:92%;}
.text-center{text-align:center;}
.tch-page-header .tch-btn-hamburger{margin-right:9px!important;float:left;margin-top:-6px!important;padding:5px 1px;margin-top:3px;text-align:center;}
.tch-page-header .tch-btn-hamburger .tch-btn-header-icon{padding:0!important;border:0;color:#a9a9a9;}
.tch-page-header .tch-btn-hamburger i{margin-right:0px;}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .tch-btn-header-icon{padding:10px 15px;}
.input-group-addon{padding:10px 12px;font-size:13px;color:white;text-align:center;background-color:#9a9ea2;border:1px solid #9a9ea2;border-radius:6px;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.control-label{font-size:14px;}
.input-group-addon{background:#f9f9f9;padding:1px;color:#34495e;padding:0 10px;font-weight:200;font-size:13px;border:1px solid #dbdbdb;}
.tch-plan-upgrade-placeholder{position:absolute;z-index:500;top:220px;text-align:center;margin:auto;display:inline-block;width:100%;padding:30px;}
.tch-plan-upgrade-placeholder p{text-align:center;}
.tch-plan-upgrade-placeholder .tch-btn-header-primary{margin-bottom:20px;}
.tch-plan-upgrade-placeholder .image-icon-wrapper{border-radius:50%;width:180px;height:180px;margin:auto;padding:10px;background:white;margin-bottom:10px;}
.tch-plan-upgrade-placeholder .image-icon-wrapper img{width:100%;}
.tch-plan-upgrade-placeholder.in-tab{position:static;}
.tch-plan-upgrade-placeholder h4{color:#292c44;line-height:34px;margin-bottom:15px;margin-top:0px;text-transform:capitalize;}
.tch-plan-upgrade-placeholder i{font-size:93px;opacity:0.5;margin-bottom:40px;}
.tch-plan-upgrade-placeholder p{margin:auto;line-height:26px;font-size:15px;margin-bottom:27px;max-width:630px;font-weight:400;color:#676d73;letter-spacing:0.3px;font-family:"TeachableSans";}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-heading h2.tch-subheading{margin-top:10px;padding-right:10px;color:#555765;}
.tch-section-heading a,p.small a{color:#809196;text-decoration:underline;font-weight:600;}
.tch-section-heading a:hover,p.small a:hover{color:#67777c;}
.tch-section-wrapper{display:block;height:auto;padding-bottom:20px;margin-left:0px;margin-right:0px;margin-bottom:35px;position:relative;border-bottom:1px solid #dbdbdb;}
.tch-section-wrapper:target .tch-section-content{-webkit-animation:highlight 1s ease-out;animation:highlight 1s ease-out;}
.tch-section-content{padding-top:0;background:#fff;display:block;margin-top:-1px;margin-bottom:20px;padding:30px 35px;border-radius:5px;border:1px solid #e7eaed;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);-webkit-transition:0.2s all ease-in;transition:0.2s all ease-in;}
.tch-section-content .tab-bottom{background:#fefefe;margin-top:30px;height:85px;margin-bottom:-30px;line-height:85px;margin-left:-35px;margin-right:-35px;border-top:1px solid #eeeeee;text-align:right;padding-right:30px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box{display:none;padding-top:0;background:#fff;position:relative;z-index:5;border-radius:2px;-webkit-box-shadow:1px 2px 3px 0px #e6e9ec;box-shadow:1px 2px 3px 0px #e6e9ec;margin-bottom:20px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title{color:#20272d;font-size:16px;letter-spacing:0.57px;font-weight:600;line-height:20px;overflow:hidden;opacity:0;-webkit-transition-duration:0.1s;transition-duration:0.1s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);-webkit-transform:translateY(-10px);transform:translateY(-10px);line-height:24px;max-height:0px;float:left;margin:20px 15px 14px 25px;position:absolute;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title i{font-size:15px;vertical-align:0px;margin-right:8px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons{overflow:hidden;opacity:0;max-height:0px;position:absolute;top:10px;right:48px;}
.state-admin .admin-content{padding:30px 40px;position:relative;}
@media screen and (max-width: 1000px){
.state-admin .admin-content{margin-left:0;-webkit-transition:margin 150ms ease-in-out, -webkit-transform 150ms ease-in-out;transition:margin 150ms ease-in-out, -webkit-transform 150ms ease-in-out;transition:transform 150ms ease-in-out, margin 150ms ease-in-out;transition:transform 150ms ease-in-out, margin 150ms ease-in-out, -webkit-transform 150ms ease-in-out;}
.state-admin .tch-btn-hamburger{display:block;}
.state-admin .tch-btn-hamburger i{display:block;}
}
@media screen and (min-width: 0px){
.tch-section-nav .tch-section-nav-wrapper.affixed .tch-section-nav-placeholder{height:70px;}
.tch-section-nav .tch-section-nav-wrapper.affixed .tch-section-nav-box{display:-webkit-box;display:-ms-flexbox;display:flex;position:fixed;z-index:1000;top:0px;margin-left:-50px;padding-left:23px;padding-right:30px;min-height:57px;}
.tch-section-nav .tch-section-nav-wrapper.affixed .tch-section-nav-box.dynamic-width{position:absolute;width:calc(100% + 10px);}
.tch-section-nav .tch-section-nav-wrapper.affixed .tch-section-nav-box .tch-section-nav-title{-webkit-transition-duration:0.1s;transition-duration:0.1s;-webkit-transition-timing-function:ease-in;transition-timing-function:ease-in;opacity:1;overflow:hidden;-webkit-transform:translateY(0);transform:translateY(0);max-height:1000px;}
.tch-section-nav .tch-section-nav-wrapper.affixed .tch-section-nav-box .tch-section-nav-buttons{-webkit-transition-duration:0.1s;transition-duration:0.1s;-webkit-transition-timing-function:ease-in;transition-timing-function:ease-in;opacity:1;overflow:hidden;-webkit-transform:translateY(0);transform:translateY(0);max-height:1000px;}
}
@media screen and (min-width: 1000px){
.admin-content:not(.tch-sidebar-is-collapsed-by-default){-webkit-transform:none!important;transform:none!important;margin-left:225px!important;}
.admin-content:not(.tch-sidebar-is-collapsed-by-default) .tch-btn-hamburger{display:none!important;}
.admin-content:not(.tch-sidebar-is-collapsed-by-default) .tch-btn-hamburger i{display:none!important;}
}
.bootstrap-switch{border-radius:20px;}
.bootstrap-switch:focus{outline:none;}
.bootstrap-switch.bootstrap-switch-on{border-color:#1ea69a;}
.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-container{border-color:#1ea69a;background:#1ea69a!important;position:relative;}
.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-container:before{background:url(//assets.teachablecdn.com/icons/swifticons/outlined/Check.svg);position:absolute;width:20px;height:20px;left:5px;content:'';background-size:14px;background-position:5px;background-repeat:no-repeat;top:4px;}
.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label{border:1px solid #1ea69a;}
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-container{background:#eee!important;}
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-container:before{background:url(//assets.teachablecdn.com/icons/swifticons/outlined/Times.svg);position:absolute;width:20px;height:20px;left:5px;content:'';background-size:14px;background-position:5px;background-repeat:no-repeat;top:3px;left:56px;background-size:11px;background-position:7px;z-index:-1;}
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label{border:1px solid #ccc;}
.bootstrap-switch .bootstrap-switch-container{-webkit-transition:0.15s ease-out all!important;transition:0.15s ease-out all!important;height:28px;}
.bootstrap-switch .bootstrap-switch-label{border-radius:50%!important;width:28px!important;height:28px!important;margin-top:0px;background:white;background:-webkit-gradient(linear, left top, left bottom, from(white), to(#f1f1f2));background:linear-gradient(to bottom, white 0%, #f1f1f2 100%);-webkit-box-shadow:0 1px 1px #ffffff inset, 0 1px 1px rgba(150, 150, 150, .32);box-shadow:0 1px 1px #ffffff inset, 0 1px 1px rgba(150, 150, 150, .32);-webkit-transition:0.2s -webkit-box-shadow ease-in;transition:0.2s -webkit-box-shadow ease-in;transition:0.2s box-shadow ease-in;transition:0.2s box-shadow ease-in, 0.2s -webkit-box-shadow ease-in;}
.bootstrap-switch .bootstrap-switch-label:hover{background:white;background:-webkit-gradient(linear, left top, left bottom, from(white), to(#fafafa));background:linear-gradient(to bottom, white 0%, #fafafa 100%);-webkit-box-shadow:0px 1px 4px #ccc;box-shadow:0px 1px 4px #ccc;}
.bootstrap-switch .bootstrap-switch-handle-on{font-weight:bold;border-top-left-radius:20px!important;border-bottom-left-radius:20px!important;text-indent:-9999px;background:none!important;margin:0px;padding:0px!important;height:27px;width:28px!important;position:relative;vertical-align:7px;}
.bootstrap-switch .bootstrap-switch-handle-off{font-weight:bold;border-top-right-radius:20px!important;border-bottom-right-radius:20px!important;text-indent:-9999px;background:none!important;margin:0px;padding:0px!important;height:27px;width:28px!important;vertical-align:7px;}
.bootstrap-switch .bootstrap-switch-primary{background:none!important;}
:root .bootstrap-switch{-webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC);}
.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label{border-bottom-right-radius:20px;border-top-right-radius:20px;}
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label{border-bottom-left-radius:20px;border-top-left-radius:20px;}
.add-bottom-margin-25{margin-bottom:25px;}
.heavy-link{font-weight:bold;text-decoration:underline;}
.heavy-link:hover{text-decoration:underline;}
.grey-italics{color:#a9a9a9;line-height:21px;display:block;margin-bottom:4px;font-family:"TeachableSans";font-weight:300;}
.space::before{content:'\A0';}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used keyframes */
@-webkit-keyframes highlight{0%{border:1px solid #e97e0b;}100%{border:1px solid #e7eaed;}}
@keyframes highlight{0%{border:1px solid #e97e0b;}100%{border:1px solid #e7eaed;}}

</style>

<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
    <div what="page header" class="tch-section-nav tch-page-header" icon="icon icon-cog2" text="General">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger"><button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable"><i class="fa fa-bars"></i></button></div>
                    <!---->
                    <!---->Général
                </div>
                <!---->
                <div class="tch-section-nav-buttons">
                    @if(Auth::user()->isAdmin())
                    <a target="_blank" rel="noopener" class="tch-btn-header-secondary" href="{{url('schools', $school)}}">
                        Aperçu
                    </a>
                    @else
                    <a target="_blank" rel="noopener" class="tch-btn-header-secondary" href="{{ route('website.subdomain.previewOut', ['school' => $school->id, 'subdomain' => $school->slug]) }}">
                        Aperçu
                    </a>
                    @endif
                </div>
            </div>
            <!---->
        </div>
    </div>
    <!---->
    <!---->
    <!---->
    <ng-include src="'settings/general/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-school">
        <form method="post" enctype="multipart/form-data" action="{{url('schools', $school)}}" name="settingsSchoolForm" class="ng-pristine ng-valid ng-valid-required ng-valid-maxlength">
            <div ng-show="!section.if || section.if()" id="section-school" class="row tch-section-wrapper" section="section" save="true">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                    <!---->
                    <!---->
                    <h2 ng-if="section.name" class="tch-subheading">
                        <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Ecole</span>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><br ng-if="!removeDescriptionLineBreak">
                        <!---->
                        <p ng-bind-html="section.description" what="section-description" class="small">Renseignez les infos basiques à propos de votre école ici</p>
                        <!---->
                        <!---->
                    </h2>
                    <!---->
                </div>
                <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                    <div ng-transclude="">
                        <div ng-class="{ 'has-error': state.errors.name }" form="settingsSchoolForm" label="School Name" for="school_name">
                            <!---->
                            <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="school_name" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Nom de l'école</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                    <input value="{{$school->name}}" id="site-name" name="name" placeholder="Exemple: Académie Photoshop" type="text" maxlength="100" required=""
                                      class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-maxlength"></div>
                                <help-block>
                                    <ng-messages for="" role="alert" class="ng-inactive">

                                    </ng-messages>
                                    <div for="school_name" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
                            <!---->
                        </div>
                        <div ng-class="{ 'has-error': state.errors.heading }" form="settingsSchoolForm" label="Homepage Heading" for="homepage_heading">
                            <!---->
                            <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="homepage_heading" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Entête de la page d'accueil</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                    <input value="{{$school->heading}}" id="site-heading" name="heading" placeholder="Un slogan, exple. L'école en ligne pour les designers" maxlength="100"
                                      class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"></div>
                                <help-block>
                                    <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                    </ng-messages>
                                    <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="homepage_heading" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
                            <!---->
                        </div>





                    </div>
                    <div ng-show="showButtonsBar" class="tab-bottom">
                        <!---->
                        <!---->
                        <!----><button id="save-school-basic-infos" ng-if="save" type="submit" ng-disabled="form.$invalid || form.$pending || disableSave" ng-bind="saveLabel || 'Save'" class="tch-btn-header-primary">Enregistrer</button>
                        <!---->
                    </div>
                </div>
            </div>
        </form>
    </ng-include>


    <ng-include src="'settings/general/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-school">
        <form id="description" method="post" enctype="multipart/form-data" action="{{url('schools', $school)}}" name="settingsSchoolForm" class="ng-pristine ng-valid ng-valid-required ng-valid-maxlength">
            <div ng-show="!section.if || section.if()" id="section-school" class="row tch-section-wrapper" section="section" save="true">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                    <!---->
                    <!---->
                    <h2 ng-if="section.name" class="tch-subheading">
                        <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Description de l'école</span>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><br ng-if="!removeDescriptionLineBreak">
                        <!---->
                        <p ng-bind-html="section.description" what="section-description" class="small">Présentez votre école comme il se doit ;)</p>
                        <!---->
                        <!---->
                    </h2>
                    <!---->
                </div>
                <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                    <div ng-transclude="">

                        <div form="settingsSchoolForm" label="Homepage Description" for="homepage_description">
                            <!---->
                            <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="homepage_description" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Description de la page d'accueil</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <input name="description" type="hidden">
                                <input style="display: none;" id="schoolDescription" type="text" name="id" value="{{$school->id}}">
                                <div class="editor-container">

                                    <div id="site-description">

                                        @if($school->description)
                                        {!!$school->description!!}
                                        @endif

                                     </div>

                                </div>

                                <help-block>
                                    <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                    </ng-messages>
                                    <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="homepage_description" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
                            <!---->
                        </div>




                    </div>
                    <div ng-show="showButtonsBar" class="tab-bottom">
                        <!---->
                        <!---->
                        <!----><button id="save-school-basic-infos"  type="submit" class="tch-btn-header-primary">Enregistrer</button>
                        <!---->
                    </div>
                </div>
            </div>
        </form>
    </ng-include>
    <!---->
    <!---->
    <ng-include src="'settings/general/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-address">
        <form method="post" enctype="multipart/form-data" action="{{url('schools', $school)}}" ng-submit="saveAddress(settingsAddressForm)" name="settingsAddressForm" novalidate="" class="ng-pristine ng-valid ng-valid-required">
            <div ng-show="!section.if || section.if()" id="section-address" class="row tch-section-wrapper" section="section" save="true">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                    <!---->
                    <!---->
                    <h2 ng-if="section.name" class="tch-subheading">
                        <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Adresse de l'école</span>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><br ng-if="!removeDescriptionLineBreak">
                        <!---->
                        <p ng-bind-html="section.description" what="section-description" class="small">
                            Ajoutez l'adresse de votre école. Elle sera notamment ajoutée sur la facture des étudiants
                            <a href="https://support.teachable.com/hc/en-us/articles/223306588" target="_blank">
                                En savoir plus</a>.</p>
                        <!---->
                        <!---->
                    </h2>
                    <!---->
                </div>
                <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                    <div ng-transclude="">
                        <div class="row">
                            <div class="col-sm-12">
                                <div form="settingsAddressForm" label="Street Address" for="line_one">
                                    <!---->
                                    <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="line_one" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Quartier</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude=""><input id="street-address" what="address line_one" name="street" ng-model="address.line_one" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="line_one" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div form="settingsAddressForm" label="Apt, Suite, etc (Optional)" for="line_two">
                                    <!---->
                                    <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="line_two" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Commune</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude=""><input id="street-address" what="address line_two" name="state" ng-model="address.line_two" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="line_two" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div form="settingsAddressForm" label="Postal Code" for="postal_code">
                                    <!---->
                                    <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="postal_code" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Code Postal</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude=""><input id="zip-code" what="address postal_code" name="postal_code" ng-model="address.postal_code" ng-required="address.country === 'US'"
                                              class="form-control ng-pristine ng-untouched ng-empty ng-valid ng-valid-required"></div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="postal_code" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div form="settingsAddressForm" label="City" for="city">
                                    <!---->
                                    <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="city" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Ville</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude=""><input id="zip-code" what="address city" name="city" ng-model="address.city" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="city" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div ng-class="{ 'col-sm-6': address.country === 'US', 'col-sm-12': address.country !== 'US' }" class="col-sm-12">
                                <div form="settingsAddressForm" label="Country" for="country">
                                    <!---->
                                    <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="country" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Pays</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude=""><select id="country" what="address country" ng-model="address.country" ng-options="country['ISO3166-1-Alpha-2'] as country.name for country in countryOptions" name="country" required=""
                                              class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                                                <option value="" ng-bind="'Select...'" disabled="">Select...</option>
                                                <option label="Afghanistan" value="string:AF">Afghanistan</option>
                                                <option label="Albania" value="string:AL">Albania</option>
                                                <option label="Algeria" value="string:DZ">Algeria</option>
                                                <option label="American Samoa" value="string:AS">American Samoa</option>
                                                <option label="Andorra" value="string:AD">Andorra</option>
                                                <option label="Angola" value="string:AO">Angola</option>
                                                <option label="Anguilla" value="string:AI">Anguilla</option>
                                                <option label="Antarctica" value="string:AQ">Antarctica</option>
                                                <option label="Antigua and Barbuda" value="string:AG">Antigua and Barbuda</option>
                                                <option label="Argentina" value="string:AR">Argentina</option>
                                                <option label="Armenia" value="string:AM">Armenia</option>
                                                <option label="Aruba" value="string:AW">Aruba</option>
                                                <option label="Australia" value="string:AU">Australia</option>
                                                <option label="Austria" value="string:AT">Austria</option>
                                                <option label="Azerbaijan" value="string:AZ">Azerbaijan</option>
                                                <option label="Bahamas" value="string:BS">Bahamas</option>
                                                <option label="Bahrain" value="string:BH">Bahrain</option>
                                                <option label="Bangladesh" value="string:BD">Bangladesh</option>
                                                <option label="Barbados" value="string:BB">Barbados</option>
                                                <option label="Belarus" value="string:BY">Belarus</option>
                                                <option label="Belgium" value="string:BE">Belgium</option>
                                                <option label="Belize" value="string:BZ">Belize</option>
                                                <option label="Benin" value="string:BJ">Benin</option>
                                                <option label="Bermuda" value="string:BM">Bermuda</option>
                                                <option label="Bhutan" value="string:BT">Bhutan</option>
                                                <option label="Bolivia, Plurinational State of" value="string:BO">Bolivia, Plurinational State of</option>
                                                <option label="Bonaire, Sint Eustatius and Saba" value="string:BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option label="Bosnia and Herzegovina" value="string:BA">Bosnia and Herzegovina</option>
                                                <option label="Botswana" value="string:BW">Botswana</option>
                                                <option label="Bouvet Island" value="string:BV">Bouvet Island</option>
                                                <option label="Brazil" value="string:BR">Brazil</option>
                                                <option label="British Indian Ocean Territory" value="string:IO">British Indian Ocean Territory</option>
                                                <option label="Brunei Darussalam" value="string:BN">Brunei Darussalam</option>
                                                <option label="Bulgaria" value="string:BG">Bulgaria</option>
                                                <option label="Burkina Faso" value="string:BF">Burkina Faso</option>
                                                <option label="Burundi" value="string:BI">Burundi</option>
                                                <option label="Cambodia" value="string:KH">Cambodia</option>
                                                <option label="Cameroon" value="string:CM">Cameroon</option>
                                                <option label="Canada" value="string:CA">Canada</option>
                                                <option label="Cape Verde" value="string:CV">Cape Verde</option>
                                                <option label="Cayman Islands" value="string:KY">Cayman Islands</option>
                                                <option label="Central African Republic" value="string:CF">Central African Republic</option>
                                                <option label="Chad" value="string:TD">Chad</option>
                                                <option label="Chile" value="string:CL">Chile</option>
                                                <option label="China" value="string:CN">China</option>
                                                <option label="Christmas Island" value="string:CX">Christmas Island</option>
                                                <option label="Cocos (Keeling) Islands" value="string:CC">Cocos (Keeling) Islands</option>
                                                <option label="Colombia" value="string:CO">Colombia</option>
                                                <option label="Comoros" value="string:KM">Comoros</option>
                                                <option label="Congo" value="string:CG">Congo</option>
                                                <option label="Congo, the Democratic Republic of the" value="string:CD">Congo, the Democratic Republic of the</option>
                                                <option label="Cook Islands" value="string:CK">Cook Islands</option>
                                                <option label="Costa Rica" value="string:CR">Costa Rica</option>
                                                <option label="Croatia" value="string:HR">Croatia</option>
                                                <option label="Cuba" value="string:CU">Cuba</option>
                                                <option label="Curaçao" value="string:CW">Curaçao</option>
                                                <option label="Cyprus" value="string:CY">Cyprus</option>
                                                <option label="Czech Republic" value="string:CZ">Czech Republic</option>
                                                <option label="Côte d'Ivoire" value="string:CI" selected="selected">Côte d'Ivoire</option>
                                                <option label="Denmark" value="string:DK">Denmark</option>
                                                <option label="Djibouti" value="string:DJ">Djibouti</option>
                                                <option label="Dominica" value="string:DM">Dominica</option>
                                                <option label="Dominican Republic" value="string:DO">Dominican Republic</option>
                                                <option label="Ecuador" value="string:EC">Ecuador</option>
                                                <option label="Egypt" value="string:EG">Egypt</option>
                                                <option label="El Salvador" value="string:SV">El Salvador</option>
                                                <option label="Equatorial Guinea" value="string:GQ">Equatorial Guinea</option>
                                                <option label="Eritrea" value="string:ER">Eritrea</option>
                                                <option label="Estonia" value="string:EE">Estonia</option>
                                                <option label="Ethiopia" value="string:ET">Ethiopia</option>
                                                <option label="Falkland Islands (Malvinas)" value="string:FK">Falkland Islands (Malvinas)</option>
                                                <option label="Faroe Islands" value="string:FO">Faroe Islands</option>
                                                <option label="Fiji" value="string:FJ">Fiji</option>
                                                <option label="Finland" value="string:FI">Finland</option>
                                                <option label="France" value="string:FR">France</option>
                                                <option label="French Guiana" value="string:GF">French Guiana</option>
                                                <option label="French Polynesia" value="string:PF">French Polynesia</option>
                                                <option label="French Southern Territories" value="string:TF">French Southern Territories</option>
                                                <option label="Gabon" value="string:GA">Gabon</option>
                                                <option label="Gambia" value="string:GM">Gambia</option>
                                                <option label="Georgia" value="string:GE">Georgia</option>
                                                <option label="Germany" value="string:DE">Germany</option>
                                                <option label="Ghana" value="string:GH">Ghana</option>
                                                <option label="Gibraltar" value="string:GI">Gibraltar</option>
                                                <option label="Greece" value="string:GR">Greece</option>
                                                <option label="Greenland" value="string:GL">Greenland</option>
                                                <option label="Grenada" value="string:GD">Grenada</option>
                                                <option label="Guadeloupe" value="string:GP">Guadeloupe</option>
                                                <option label="Guam" value="string:GU">Guam</option>
                                                <option label="Guatemala" value="string:GT">Guatemala</option>
                                                <option label="Guernsey" value="string:GG">Guernsey</option>
                                                <option label="Guinea" value="string:GN">Guinea</option>
                                                <option label="Guinea-Bissau" value="string:GW">Guinea-Bissau</option>
                                                <option label="Guyana" value="string:GY">Guyana</option>
                                                <option label="Haiti" value="string:HT">Haiti</option>
                                                <option label="Heard Island and McDonald Islands" value="string:HM">Heard Island and McDonald Islands</option>
                                                <option label="Holy See (Vatican City State)" value="string:VA">Holy See (Vatican City State)</option>
                                                <option label="Honduras" value="string:HN">Honduras</option>
                                                <option label="Hong Kong" value="string:HK">Hong Kong</option>
                                                <option label="Hungary" value="string:HU">Hungary</option>
                                                <option label="Iceland" value="string:IS">Iceland</option>
                                                <option label="India" value="string:IN">India</option>
                                                <option label="Indonesia" value="string:ID">Indonesia</option>
                                                <option label="Iran, Islamic Republic of" value="string:IR">Iran, Islamic Republic of</option>
                                                <option label="Iraq" value="string:IQ">Iraq</option>
                                                <option label="Ireland" value="string:IE">Ireland</option>
                                                <option label="Isle of Man" value="string:IM">Isle of Man</option>
                                                <option label="Israel" value="string:IL">Israel</option>
                                                <option label="Italy" value="string:IT">Italy</option>
                                                <option label="Jamaica" value="string:JM">Jamaica</option>
                                                <option label="Japan" value="string:JP">Japan</option>
                                                <option label="Jersey" value="string:JE">Jersey</option>
                                                <option label="Jordan" value="string:JO">Jordan</option>
                                                <option label="Kazakhstan" value="string:KZ">Kazakhstan</option>
                                                <option label="Kenya" value="string:KE">Kenya</option>
                                                <option label="Kiribati" value="string:KI">Kiribati</option>
                                                <option label="Korea, Democratic People's Republic of" value="string:KP">Korea, Democratic People's Republic of</option>
                                                <option label="Korea, Republic of" value="string:KR">Korea, Republic of</option>
                                                <option label="Kuwait" value="string:KW">Kuwait</option>
                                                <option label="Kyrgyzstan" value="string:KG">Kyrgyzstan</option>
                                                <option label="Lao People's Democratic Republic" value="string:LA">Lao People's Democratic Republic</option>
                                                <option label="Latvia" value="string:LV">Latvia</option>
                                                <option label="Lebanon" value="string:LB">Lebanon</option>
                                                <option label="Lesotho" value="string:LS">Lesotho</option>
                                                <option label="Liberia" value="string:LR">Liberia</option>
                                                <option label="Libya" value="string:LY">Libya</option>
                                                <option label="Liechtenstein" value="string:LI">Liechtenstein</option>
                                                <option label="Lithuania" value="string:LT">Lithuania</option>
                                                <option label="Luxembourg" value="string:LU">Luxembourg</option>
                                                <option label="Macao" value="string:MO">Macao</option>
                                                <option label="Macedonia, the Former Yugoslav Republic of" value="string:MK">Macedonia, the Former Yugoslav Republic of</option>
                                                <option label="Madagascar" value="string:MG">Madagascar</option>
                                                <option label="Malawi" value="string:MW">Malawi</option>
                                                <option label="Malaysia" value="string:MY">Malaysia</option>
                                                <option label="Maldives" value="string:MV">Maldives</option>
                                                <option label="Mali" value="string:ML">Mali</option>
                                                <option label="Malta" value="string:MT">Malta</option>
                                                <option label="Marshall Islands" value="string:MH">Marshall Islands</option>
                                                <option label="Martinique" value="string:MQ">Martinique</option>
                                                <option label="Mauritania" value="string:MR">Mauritania</option>
                                                <option label="Mauritius" value="string:MU">Mauritius</option>
                                                <option label="Mayotte" value="string:YT">Mayotte</option>
                                                <option label="Mexico" value="string:MX">Mexico</option>
                                                <option label="Micronesia, Federated States of" value="string:FM">Micronesia, Federated States of</option>
                                                <option label="Moldova, Republic of" value="string:MD">Moldova, Republic of</option>
                                                <option label="Monaco" value="string:MC">Monaco</option>
                                                <option label="Mongolia" value="string:MN">Mongolia</option>
                                                <option label="Montenegro" value="string:ME">Montenegro</option>
                                                <option label="Montserrat" value="string:MS">Montserrat</option>
                                                <option label="Morocco" value="string:MA">Morocco</option>
                                                <option label="Mozambique" value="string:MZ">Mozambique</option>
                                                <option label="Myanmar" value="string:MM">Myanmar</option>
                                                <option label="Namibia" value="string:NA">Namibia</option>
                                                <option label="Nauru" value="string:NR">Nauru</option>
                                                <option label="Nepal" value="string:NP">Nepal</option>
                                                <option label="Netherlands" value="string:NL">Netherlands</option>
                                                <option label="New Caledonia" value="string:NC">New Caledonia</option>
                                                <option label="New Zealand" value="string:NZ">New Zealand</option>
                                                <option label="Nicaragua" value="string:NI">Nicaragua</option>
                                                <option label="Niger" value="string:NE">Niger</option>
                                                <option label="Nigeria" value="string:NG">Nigeria</option>
                                                <option label="Niue" value="string:NU">Niue</option>
                                                <option label="Norfolk Island" value="string:NF">Norfolk Island</option>
                                                <option label="Northern Mariana Islands" value="string:MP">Northern Mariana Islands</option>
                                                <option label="Norway" value="string:NO">Norway</option>
                                                <option label="Oman" value="string:OM">Oman</option>
                                                <option label="Pakistan" value="string:PK">Pakistan</option>
                                                <option label="Palau" value="string:PW">Palau</option>
                                                <option label="Palestine, State of" value="string:PS">Palestine, State of</option>
                                                <option label="Panama" value="string:PA">Panama</option>
                                                <option label="Papua New Guinea" value="string:PG">Papua New Guinea</option>
                                                <option label="Paraguay" value="string:PY">Paraguay</option>
                                                <option label="Peru" value="string:PE">Peru</option>
                                                <option label="Philippines" value="string:PH">Philippines</option>
                                                <option label="Pitcairn" value="string:PN">Pitcairn</option>
                                                <option label="Poland" value="string:PL">Poland</option>
                                                <option label="Portugal" value="string:PT">Portugal</option>
                                                <option label="Puerto Rico" value="string:PR">Puerto Rico</option>
                                                <option label="Qatar" value="string:QA">Qatar</option>
                                                <option label="Romania" value="string:RO">Romania</option>
                                                <option label="Russian Federation" value="string:RU">Russian Federation</option>
                                                <option label="Rwanda" value="string:RW">Rwanda</option>
                                                <option label="Réunion" value="string:RE">Réunion</option>
                                                <option label="Saint Barthélemy" value="string:BL">Saint Barthélemy</option>
                                                <option label="Saint Helena, Ascension and Tristan da Cunha" value="string:SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option label="Saint Kitts and Nevis" value="string:KN">Saint Kitts and Nevis</option>
                                                <option label="Saint Lucia" value="string:LC">Saint Lucia</option>
                                                <option label="Saint Martin (French part)" value="string:MF">Saint Martin (French part)</option>
                                                <option label="Saint Pierre and Miquelon" value="string:PM">Saint Pierre and Miquelon</option>
                                                <option label="Saint Vincent and the Grenadines" value="string:VC">Saint Vincent and the Grenadines</option>
                                                <option label="Samoa" value="string:WS">Samoa</option>
                                                <option label="San Marino" value="string:SM">San Marino</option>
                                                <option label="Sao Tome and Principe" value="string:ST">Sao Tome and Principe</option>
                                                <option label="Saudi Arabia" value="string:SA">Saudi Arabia</option>
                                                <option label="Senegal" value="string:SN">Senegal</option>
                                                <option label="Serbia" value="string:RS">Serbia</option>
                                                <option label="Seychelles" value="string:SC">Seychelles</option>
                                                <option label="Sierra Leone" value="string:SL">Sierra Leone</option>
                                                <option label="Singapore" value="string:SG">Singapore</option>
                                                <option label="Sint Maarten (Dutch part)" value="string:SX">Sint Maarten (Dutch part)</option>
                                                <option label="Slovakia" value="string:SK">Slovakia</option>
                                                <option label="Slovenia" value="string:SI">Slovenia</option>
                                                <option label="Solomon Islands" value="string:SB">Solomon Islands</option>
                                                <option label="Somalia" value="string:SO">Somalia</option>
                                                <option label="South Africa" value="string:ZA">South Africa</option>
                                                <option label="South Georgia and the South Sandwich Islands" value="string:GS">South Georgia and the South Sandwich Islands</option>
                                                <option label="South Sudan" value="string:SS">South Sudan</option>
                                                <option label="Spain" value="string:ES">Spain</option>
                                                <option label="Sri Lanka" value="string:LK">Sri Lanka</option>
                                                <option label="Sudan" value="string:SD">Sudan</option>
                                                <option label="Suriname" value="string:SR">Suriname</option>
                                                <option label="Svalbard and Jan Mayen" value="string:SJ">Svalbard and Jan Mayen</option>
                                                <option label="Swaziland" value="string:SZ">Swaziland</option>
                                                <option label="Sweden" value="string:SE">Sweden</option>
                                                <option label="Switzerland" value="string:CH">Switzerland</option>
                                                <option label="Syrian Arab Republic" value="string:SY">Syrian Arab Republic</option>
                                                <option label="Taiwan" value="string:TW">Taiwan</option>
                                                <option label="Tajikistan" value="string:TJ">Tajikistan</option>
                                                <option label="Tanzania, United Republic of" value="string:TZ">Tanzania, United Republic of</option>
                                                <option label="Thailand" value="string:TH">Thailand</option>
                                                <option label="Timor-Leste" value="string:TL">Timor-Leste</option>
                                                <option label="Togo" value="string:TG">Togo</option>
                                                <option label="Tokelau" value="string:TK">Tokelau</option>
                                                <option label="Tonga" value="string:TO">Tonga</option>
                                                <option label="Trinidad and Tobago" value="string:TT">Trinidad and Tobago</option>
                                                <option label="Tunisia" value="string:TN">Tunisia</option>
                                                <option label="Turkey" value="string:TR">Turkey</option>
                                                <option label="Turkmenistan" value="string:TM">Turkmenistan</option>
                                                <option label="Turks and Caicos Islands" value="string:TC">Turks and Caicos Islands</option>
                                                <option label="Tuvalu" value="string:TV">Tuvalu</option>
                                                <option label="Uganda" value="string:UG">Uganda</option>
                                                <option label="Ukraine" value="string:UA">Ukraine</option>
                                                <option label="United Arab Emirates" value="string:AE">United Arab Emirates</option>
                                                <option label="United Kingdom" value="string:GB">United Kingdom</option>
                                                <option label="United States" value="string:US">United States</option>
                                                <option label="United States Minor Outlying Islands" value="string:UM">United States Minor Outlying Islands</option>
                                                <option label="Uruguay" value="string:UY">Uruguay</option>
                                                <option label="Uzbekistan" value="string:UZ">Uzbekistan</option>
                                                <option label="Vanuatu" value="string:VU">Vanuatu</option>
                                                <option label="Venezuela, Bolivarian Republic of" value="string:VE">Venezuela, Bolivarian Republic of</option>
                                                <option label="Viet Nam" value="string:VN">Viet Nam</option>
                                                <option label="Virgin Islands, British" value="string:VG">Virgin Islands, British</option>
                                                <option label="Virgin Islands, U.S." value="string:VI">Virgin Islands, U.S.</option>
                                                <option label="Wallis and Futuna" value="string:WF">Wallis and Futuna</option>
                                                <option label="Western Sahara" value="string:EH">Western Sahara</option>
                                                <option label="Yemen" value="string:YE">Yemen</option>
                                                <option label="Zambia" value="string:ZM">Zambia</option>
                                                <option label="Zimbabwe" value="string:ZW">Zimbabwe</option>
                                                <option label="Åland Islands" value="string:AX">Åland Islands</option>
                                            </select></div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="country" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <div ng-show="address.country === 'US'" class="col-sm-6 ng-hide">
                                <div form="settingsAddressForm" label="State" for="state">
                                    <!---->
                                    <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="state" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">State</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude=""><select id="state" what="address state" ng-model="address.region" ng-options="state.code as state.name for state in stateOptions" name="state" ng-required="address.country === 'US'"
                                              class="form-control ng-pristine ng-untouched ng-empty ng-valid ng-valid-required">
                                                <option value="" ng-bind="'Select...'" disabled="" selected="selected">Select...</option>
                                                <option label="Alabama" value="string:AL">Alabama</option>
                                                <option label="Alaska" value="string:AK">Alaska</option>
                                                <option label="American Samoa" value="string:AS">American Samoa</option>
                                                <option label="Arizona" value="string:AZ">Arizona</option>
                                                <option label="Arkansas" value="string:AR">Arkansas</option>
                                                <option label="California" value="string:CA">California</option>
                                                <option label="Colorado" value="string:CO">Colorado</option>
                                                <option label="Connecticut" value="string:CT">Connecticut</option>
                                                <option label="Delaware" value="string:DE">Delaware</option>
                                                <option label="District Of Columbia" value="string:DC">District Of Columbia</option>
                                                <option label="Federated States Of Micronesia" value="string:FM">Federated States Of Micronesia</option>
                                                <option label="Florida" value="string:FL">Florida</option>
                                                <option label="Georgia" value="string:GA">Georgia</option>
                                                <option label="Guam" value="string:GU">Guam</option>
                                                <option label="Hawaii" value="string:HI">Hawaii</option>
                                                <option label="Idaho" value="string:ID">Idaho</option>
                                                <option label="Illinois" value="string:IL">Illinois</option>
                                                <option label="Indiana" value="string:IN">Indiana</option>
                                                <option label="Iowa" value="string:IA">Iowa</option>
                                                <option label="Kansas" value="string:KS">Kansas</option>
                                                <option label="Kentucky" value="string:KY">Kentucky</option>
                                                <option label="Louisiana" value="string:LA">Louisiana</option>
                                                <option label="Maine" value="string:ME">Maine</option>
                                                <option label="Marshall Islands" value="string:MH">Marshall Islands</option>
                                                <option label="Maryland" value="string:MD">Maryland</option>
                                                <option label="Massachusetts" value="string:MA">Massachusetts</option>
                                                <option label="Michigan" value="string:MI">Michigan</option>
                                                <option label="Minnesota" value="string:MN">Minnesota</option>
                                                <option label="Mississippi" value="string:MS">Mississippi</option>
                                                <option label="Missouri" value="string:MO">Missouri</option>
                                                <option label="Montana" value="string:MT">Montana</option>
                                                <option label="Nebraska" value="string:NE">Nebraska</option>
                                                <option label="Nevada" value="string:NV">Nevada</option>
                                                <option label="New Hampshire" value="string:NH">New Hampshire</option>
                                                <option label="New Jersey" value="string:NJ">New Jersey</option>
                                                <option label="New Mexico" value="string:NM">New Mexico</option>
                                                <option label="New York" value="string:NY">New York</option>
                                                <option label="North Carolina" value="string:NC">North Carolina</option>
                                                <option label="North Dakota" value="string:ND">North Dakota</option>
                                                <option label="Northern Mariana Islands" value="string:MP">Northern Mariana Islands</option>
                                                <option label="Ohio" value="string:OH">Ohio</option>
                                                <option label="Oklahoma" value="string:OK">Oklahoma</option>
                                                <option label="Oregon" value="string:OR">Oregon</option>
                                                <option label="Palau" value="string:PW">Palau</option>
                                                <option label="Pennsylvania" value="string:PA">Pennsylvania</option>
                                                <option label="Puerto Rico" value="string:PR">Puerto Rico</option>
                                                <option label="Rhode Island" value="string:RI">Rhode Island</option>
                                                <option label="South Carolina" value="string:SC">South Carolina</option>
                                                <option label="South Dakota" value="string:SD">South Dakota</option>
                                                <option label="Tennessee" value="string:TN">Tennessee</option>
                                                <option label="Texas" value="string:TX">Texas</option>
                                                <option label="U.S. Armed Forces – Americas" value="string:AA">U.S. Armed Forces – Americas</option>
                                                <option label="U.S. Armed Forces – Europe" value="string:AE">U.S. Armed Forces – Europe</option>
                                                <option label="U.S. Armed Forces – Pacific" value="string:AP">U.S. Armed Forces – Pacific</option>
                                                <option label="Utah" value="string:UT">Utah</option>
                                                <option label="Vermont" value="string:VT">Vermont</option>
                                                <option label="Virgin Islands" value="string:VI">Virgin Islands</option>
                                                <option label="Virginia" value="string:VA">Virginia</option>
                                                <option label="Washington" value="string:WA">Washington</option>
                                                <option label="West Virginia" value="string:WV">West Virginia</option>
                                                <option label="Wisconsin" value="string:WI">Wisconsin</option>
                                                <option label="Wyoming" value="string:WY">Wyoming</option>
                                            </select></div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="state" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-show="showButtonsBar" class="tab-bottom">
                        <!---->
                        <!---->
                        <!----><button id="test-id-save-btn" ng-if="save" type="submit" ng-disabled="form.$invalid || form.$pending || disableSave" ng-bind="saveLabel || 'Save'" class="tch-btn-header-primary">Enregistrer</button>
                        <!---->
                    </div>
                </div>
            </div>
        </form>
    </ng-include>
    <!---->
    <!---->

    <ng-include src="'settings/general/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-authors">
        <form ng-submit="save()" name="settingsAuthorsForm" api-form="savePromise" class="ng-pristine ng-valid">
            <div ng-show="!section.if || section.if()" id="section-authors" class="row tch-section-wrapper ng-hide" section="section" save="true">
                <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                    <!---->
                    <!---->
                    <h2 ng-if="section.name" class="tch-subheading">
                        <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Auteurs</span>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><br ng-if="!removeDescriptionLineBreak">
                        <!---->
                        <p ng-bind-html="section.description" what="section-description" class="small">Set course author permissions.</p>
                        <!---->
                        <!---->
                    </h2>
                    <!---->
                </div>
                <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                    <div ng-transclude="">
                        <div class="row">
                            <div class="col-sm-4">
                                <div form="" label="Let authors publish courses" for="author_publish_permissions">
                                    <!---->
                                    <!---->
                                    <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="author_publish_permissions" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Let authors publish courses</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude="">
                                            <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off" style="width: 58px;">
                                                <div class="bootstrap-switch-container" style="width: 84px; margin-left: -28px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 28px;">Yes</span><span
                                                      class="bootstrap-switch-label" style="width: 54px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 28px;">No</span><input bs-switch=""
                                                      type="checkbox" ng-model="settings.preferences.authors_can_publish_courses" switch-on-text="Yes" switch-off-text="No" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                            </div>
                                        </div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="author_publish_permissions" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div form="" label="Let authors email students" for="author_email_permissions">
                                    <!---->
                                    <!---->
                                    <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="author_email_permissions" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Let authors email students</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude="">
                                            <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off" style="width: 58px;">
                                                <div class="bootstrap-switch-container" style="width: 84px; margin-left: -28px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 28px;">Yes</span><span
                                                      class="bootstrap-switch-label" style="width: 54px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 28px;">No</span><input bs-switch=""
                                                      type="checkbox" ng-model="settings.preferences.authors_can_email_students" switch-on-text="Yes" switch-off-text="No" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                            </div>
                                        </div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="author_email_permissions" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div form="" label="Let authors set course prices" for="author_pricing_permissions">
                                    <!---->
                                    <!---->
                                    <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="author_pricing_permissions" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Let authors set course prices</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude="">
                                            <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off" style="width: 58px;">
                                                <div class="bootstrap-switch-container" style="width: 84px; margin-left: -28px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 28px;">Yes</span><span
                                                      class="bootstrap-switch-label" style="width: 54px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 28px;">No</span><input bs-switch=""
                                                      type="checkbox" ng-model="settings.preferences.authors_can_set_course_prices" switch-on-text="Yes" switch-off-text="No" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                            </div>
                                        </div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="author_pricing_permissions" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div form="" label="Let authors create coupons for their courses" for="author_coupon_permissions">
                                    <!---->
                                    <!---->
                                    <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="author_coupon_permissions" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Let authors create coupons for their courses</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude="">
                                            <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off" style="width: 58px;">
                                                <div class="bootstrap-switch-container" style="width: 84px; margin-left: -28px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 28px;">Yes</span><span
                                                      class="bootstrap-switch-label" style="width: 54px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 28px;">No</span><input bs-switch=""
                                                      type="checkbox" ng-model="settings.preferences.authors_can_manage_coupons" switch-on-text="Yes" switch-off-text="No" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                            </div>
                                        </div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="author_coupon_permissions" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <div class="col-sm-4">
                                <div form="" label="Let authors customize their course sales pages" for="author_course_pages">
                                    <!---->
                                    <!---->
                                    <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                        <label-block required-label="requiredLabel">
                                            <!---->
                                            <!----><label for="author_course_pages" ng-if="label" class="control-label">
                                                <!----><span ng-bind="label">Let authors customize their course sales pages</span>
                                                <!----></label>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </label-block>
                                        <div ng-transclude="">
                                            <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off" style="width: 58px;">
                                                <div class="bootstrap-switch-container" style="width: 84px; margin-left: -28px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 28px;">Yes</span><span
                                                      class="bootstrap-switch-label" style="width: 54px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 28px;">No</span><input bs-switch=""
                                                      type="checkbox" ng-model="settings.preferences.authors_can_manage_course_pages" switch-on-text="Yes" switch-off-text="No" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></div>
                                            </div>
                                        </div>
                                        <help-block>
                                            <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ng-messages>
                                            <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="author_course_pages" class="help-block ng-hide"></div>
                                        </help-block>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                        </div>
                    </div>
                    <div ng-show="showButtonsBar" class="tab-bottom">
                        <!---->
                        <!---->
                        <!----><button id="test-id-save-btn" ng-if="save" type="submit" ng-disabled="form.$invalid || form.$pending || disableSave" ng-bind="saveLabel || 'Save'" class="tch-btn-header-primary">Enregitrez</button>
                        <!---->
                    </div>
                </div>
            </div>
        </form>
    </ng-include>

    <ng-include src="'site/theme/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-logo_and_background">
    <form method="post" enctype="multipart/form-data" action="{{url('schools', $school)}}" ng-submit="save()" name="themeLogoAndBackgroundForm" api-form="savePromise" what="logo and background tab" class="ng-pristine ng-valid">
        <div ng-show="!section.if || section.if()" id="section-logo_and_background" class="row tch-section-wrapper" section="section" save="true" form="themeLogoAndBackgroundForm">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                <!---->
                <!---->
                <h2 ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Logo &amp; Arrière-plan</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="small">Ajouter un logo et une image de fond pour votre page d'accueil</p>
                    <!---->
                    <!---->
                </h2>
                <!---->
            </div>
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude="">

                    <div class="row">
                        <div class="col-sm-6">
                            <div what="site logo" label="Site Logo" for="site_logo" tooltip-text="Recommended format: 250x60px (JPG, PNG)">
                                <!---->
                                <!---->
                                <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="site_logo" ng-if="label" class="control-label">
                                            <!----><span ng-bind="label">.Logo de l'école</span><br>
                                            <p>Format recommandé:250x60px (JPG, PNG)</p>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block><br>

                                    <img width="75" src="/images/schools/logos/{{$school->logo}}" alt="">

                                    <div ng-transclude="">
                                        <div data-ng-transclude="" what="upload image button" ng-hide="customization.site_logo_url" type="button" data-filepicker-btn="" data-preview-on-upload="true" data-prevent-default="true"
                                          data-max-size="20971520" data-services="CUSTOMSOURCE, COMPUTER, IMAGE_SEARCH, URL, FTP, DROPBOX, GOOGLE_DRIVE, SKYDRIVE, CONVERT, IMGUR" ng-click="setImageUploadModel('site_logo_url')"
                                          class="upload-image-button tch-btn-content-primary disable-animations fastclickable">
                                          <span>
                                              <input type="file" name="logo" value="">
                                              Envoyer une image
                                          </span>
                                      </div>


                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="site_logo" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="logged out homepage background" label="Homepage Background" for="homepage_background" tooltip-text="Recommended format: 1440x780px (JPG, PNG)">
                                <!---->
                                <!---->
                                <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="homepage_background" ng-if="label" class="control-label">
                                            <!----><span ng-bind="label">Arrière plan de la page d'accueil</span><br>
                                            <p>Format recommandé:1440x780px (JPG, PNG)</p>
                                            <!----></label>
                                        <!---->

                                        <!---->
                                        <!---->
                                    </label-block><br>

                                    <img width="75" src="/images/schools/backgrounds/{{$school->background}}" alt="">
                                    <div ng-transclude="">
                                        <div data-ng-transclude="" what="upload image button" ng-hide="customization.logged_out_homepage_background_image_url" type="button" data-filepicker-btn="" data-preview-on-upload="true"
                                          data-prevent-default="true" data-max-size="20971520" data-services="CUSTOMSOURCE, COMPUTER, IMAGE_SEARCH, URL, FTP, DROPBOX, GOOGLE_DRIVE, SKYDRIVE, CONVERT, IMGUR"
                                          ng-click="setImageUploadModel('logged_out_homepage_background_image_url')" class="upload-image-button tch-btn-content-primary disable-animations fastclickable">
                                          <span>
                                              <input type="file" name="background" value="">
                                              Envoyer une image
                                          </span>
                                      </div>


                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">

                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="homepage_background" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <!---->
                    </div>

                </div>
                <div ng-show="showButtonsBar" class="tab-bottom">
                    <!---->
                    <!---->
                    <!----><button id="test-id-save-btn" ng-if="save" type="submit" ng-disabled="form.$invalid || form.$pending || disableSave" ng-bind="saveLabel || 'Save'" class="tch-btn-header-primary">Enregistrez</button>
                    <!---->
                </div>
            </div>
        </div>
    </form>
</ng-include>


@if($school->color)
<ng-include src="'site/theme/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-colors">
    <form method="post" enctype="multipart/form-data" action="{{url('colors', $school->color)}}" class="ng-pristine ng-valid ng-valid-required">
        <div ng-show="!section.if || section.if()" id="section-colors" class="row tch-section-wrapper" section="section" save="true" form="themeColorsForm">
            {{ csrf_field() }}
            {{method_field('patch')}}

            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading section-wrapper__heading col-lg-3">
                <!---->
                <!---->
                <div ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName" class="_2JQIJ">Couleurs</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="section-wrapper__description _3x1ps">Personnalisez les couleurs de votre école.</p>
                    <!---->
                    <!---->
                    <!---->
                </div>
                <!---->
            </div>
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude="ng-transclude">
                    <input hidden name="school_id" value="{{$school->id}}">

                    <div class="row">
                        <div class="col-sm-4">
                            <div what="brand primary" form="themeColorsForm" label="Nav Bar &amp; Footer Background" for="brand_primary" label-description="Fixed, scrolling &amp; email">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_primary" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Couleur de fond du menu de navigation &amp; le pied de page</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">Fixed, scrolling &amp; email</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="navbar_footer" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->navbar_footer}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_primary" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand navbar fixed text" form="themeColorsForm" label="Navigation Bar Links" for="brand_navbar_fixed_text" label-description="Links in transparent nav bar">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_navbar_fixed_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Liens dans le menu de navigation</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">Si menu transparent</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="navbar_links_transparent" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->navbar_links_transparent}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_navbar_fixed_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand navbar text" form="themeColorsForm" label="Navigation Bar Links" for="brand_navbar_text" label-description="Links in solid nav bar">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_navbar_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Liens dans le menu de navigation</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">Links in solid nav bar</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="navbar_links" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->navbar_links}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_navbar_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div what="brand navbar text" form="themeColorsForm" label="Buttons &amp; Links" for="brand_secondary" label-description="<a>, <button>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_secondary" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Boutons &amp; Liens</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">&lt;a&gt;, &lt;button&gt;</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="buttons_links" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->buttons_links}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_secondary" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand heading" form="themeColorsForm" label="Headings" for="brand_heading" label-description="<h2>, <h3>, <h4>, <h5>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_heading" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Entêtes</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">&lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="headings" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->headings}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_heading" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand homepage heading" form="themeColorsForm" label="Homepage Heading &amp; Subtitle" for="brand_homepage_heading" label-description="When a background is set">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_homepage_heading" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Entête page d'accueil &amp; Sous-titre</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">When a background is set</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="homepage_heading_subtitle" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->homepage_heading_subtitle}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_homepage_heading" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div what="brand course page heading" form="themeColorsForm" label="Course Page Heading &amp; Subtitle" for="brand_course_heading" label-description="When a background is set">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_course_heading" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Entête page de cours &amp; Sous-titre</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">When a background is set</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="course_page_heading" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->course_page_heading}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_course_heading" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand text" form="themeColorsForm" label="Body Text" for="brand_text" label-description="<body>, <p>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Texte du corps</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">&lt;body&gt;, &lt;p&gt;</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="body_text" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->body_text}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div what="brand text" form="themeColorsForm" label="Body Text" for="brand_text" label-description="<body>, <p>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Largeur du logo</span>
                                            <!----><span ng-if="labelDescription"><br>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="number" style="border-radius: 5px;" required name="logo_width" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="{{$school->color->logo_width}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>

                    </div>
                </div>
                <div ng-show="showButtonsBar" class="tab-bottom">
                    <!---->
                    <!---->
                    <!----><button id="test-id-save-btn" type="submit" class="tch-btn-header-primary _2po1U">Enregistrer</button>
                    <!---->
                </div>
            </div>
        </div>
    </form>
</ng-include>
@else
<ng-include src="'site/theme/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-colors">
    <form method="post" enctype="multipart/form-data" action="{{route('colors.store')}}" class="ng-pristine ng-valid ng-valid-required">
        <div ng-show="!section.if || section.if()" id="section-colors" class="row tch-section-wrapper" section="section" save="true" form="themeColorsForm">
            {{ csrf_field() }}

            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading section-wrapper__heading col-lg-3">
                <!---->
                <!---->
                <div ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName" class="_2JQIJ">Couleurs</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="section-wrapper__description _3x1ps">Personnalisez les couleurs de votre école.</p>
                    <!---->
                    <!---->
                    <!---->
                </div>
                <!---->
            </div>
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude="ng-transclude">
                    <input hidden name="school_id" value="{{$school->id}}">

                    <div class="row">
                        <div class="col-sm-4">
                            <div what="brand primary" form="themeColorsForm" label="Nav Bar &amp; Footer Background" for="brand_primary" label-description="Fixed, scrolling &amp; email">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_primary" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Couleur de fond du menu de navigation &amp; le pied de page</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">Fixed, scrolling &amp; email</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="navbar_footer" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_primary" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand navbar fixed text" form="themeColorsForm" label="Navigation Bar Links" for="brand_navbar_fixed_text" label-description="Links in transparent nav bar">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_navbar_fixed_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Liens dans le menu de navigation</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">Si menu transparent</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="navbar_links_transparent" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_navbar_fixed_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand navbar text" form="themeColorsForm" label="Navigation Bar Links" for="brand_navbar_text" label-description="Links in solid nav bar">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_navbar_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Liens dans le menu de navigation</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">Links in solid nav bar</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="navbar_links" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_navbar_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div what="brand navbar text" form="themeColorsForm" label="Buttons &amp; Links" for="brand_secondary" label-description="<a>, <button>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_secondary" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Boutons &amp; Liens</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">&lt;a&gt;, &lt;button&gt;</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="buttons_links" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_secondary" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand heading" form="themeColorsForm" label="Headings" for="brand_heading" label-description="<h2>, <h3>, <h4>, <h5>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_heading" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Entêtes</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">&lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="headings" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_heading" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand homepage heading" form="themeColorsForm" label="Homepage Heading &amp; Subtitle" for="brand_homepage_heading" label-description="When a background is set">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_homepage_heading" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Entête page d'accueil &amp; Sous-titre</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">When a background is set</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="homepage_heading_subtitle" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_homepage_heading" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div what="brand course page heading" form="themeColorsForm" label="Course Page Heading &amp; Subtitle" for="brand_course_heading" label-description="When a background is set">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_course_heading" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Entête page de cours &amp; Sous-titre</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">When a background is set</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="course_page_heading" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_course_heading" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div what="brand text" form="themeColorsForm" label="Body Text" for="brand_text" label-description="<body>, <p>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Texte du corps</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">&lt;body&gt;, &lt;p&gt;</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="body_text" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div what="brand text" form="themeColorsForm" label="Body Text" for="brand_text" label-description="<body>, <p>">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_text" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Largeur du logo</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">&lt;body&gt;, &lt;p&gt;</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="number" style="border-radius: 5px;" required name="logo_width" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_text" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        {{--
                        <div class="col-sm-4">
                            <div what="brand video player color" form="themeColorsForm" label="Video Player" for="brand_video_player_color" label-description="Color of the video player">
                                <!---->
                                <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="show-errors" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="brand_video_player_color" ng-if="label" class="control-label _2kIOe">
                                            <!----><span ng-bind="label">Video Player</span>
                                            <!----><span ng-if="labelDescription"><br>
                                                <div ng-bind="labelDescription" class="small grey-italics">Color of the video player</div>
                                            </span>
                                            <!----></label>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="ng-transclude">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input style="border-radius: 5px;" required name="color1" class="jscolor form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <help-block>
                                        <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </ng-messages>
                                        <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="brand_video_player_color" class="help-block ng-hide"></div>
                                    </help-block>
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        --}}
                    </div>
                </div>
                <div ng-show="showButtonsBar" class="tab-bottom">
                    <!---->
                    <!---->
                    <!----><button id="test-id-save-btn" type="submit" class="tch-btn-header-primary _2po1U">Enregistrer</button>
                    <!---->
                </div>
            </div>
        </div>
    </form>
</ng-include>
@endif

    <!---->
    <!---->
    {{--
    <ng-include src="'settings/general/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-blog">
        <!---->
        <!---->
        <div ng-show="!section.if || section.if()" id="section-blog" class="row tch-section-wrapper" ng-if="!isBlogEnabled" section="section">
            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                <!---->
                <!---->
                <h2 ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Blog</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="small">Vous pourrez écrire des articles directement sur le blog d'Oschool.
                        <a href="" target="_blank">
                            En savoir plus</a>.</p>
                    <!---->
                    <!---->
                </h2>
                <!---->
            </div>
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude="">
                    <disabled-feature-state what="blocked state" icon-image="https://fedora.teachablecdn.com/admin/assets/images/icons/icon-blog.svg" title="Add a Blog to Your School"
                      description="Once enabled, your blog will become active at oschool2.teachable.com/blog." custom="true" no-padding="true">
                        <div class=" tch-plan-upgrade-placeholder in-tab">
                            <div ng-show="($ctrl.custom &amp;&amp; $ctrl.custom != 'false')" class="">
                                <!---->
                                <!---->
                                <div ng-if="$ctrl.iconImage" class="image-icon-wrapper"><img ng-src="https://fedora.teachablecdn.com/admin/assets/images/icons/icon-blog.svg"
                                      src="https://fedora.teachablecdn.com/admin/assets/images/icons/icon-blog.svg"></div>
                                <!----><i ng-class="$ctrl.icon"></i>
                                <h4 ng-bind="$ctrl.heading">Notre équipe vous accordera les accès pour éditer des articles sur le blog Oschool</h4>
                                <!---->
                                <!---->
                                <p ng-if="$ctrl.description || $ctrl.learnMoreLink || $ctrl.addLabel"><span ng-bind-html="$ctrl.description">Une fois validé vous pourrez utiliser notre blog pour drainer plus de trafic vers votre école</span><span class="space"></span>
                                    <!---->
                                    <!---->
                                </p>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>

                    </disabled-feature-state>
                    <div class="text-center"><a ng-click="enableBlog()" what="enable blog link" class="tch-btn-content-primary add-bottom-margin-25 fastclickable">Faire une demande</a></div>
                </div>
                <div ng-show="showButtonsBar" class="tab-bottom ng-hide">
                    <!---->
                    <!---->
                    <!---->
                </div>
            </div>

        </div>
        <!---->
    </ng-include>
    --}}



    <!---->
    <!---->
    <ng-include src="'settings/general/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-status">
        <form ng-submit="save()" name="settingsLaunchModeForm" api-form="savePromise" class="ng-pristine ng-valid">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div ng-show="!section.if || section.if()" id="section-status" class="row tch-section-wrapper" section="section">
                <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                    <!---->
                    <!---->
                    <h2 ng-if="section.name" class="tch-subheading">
                        <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Statut de l'école</span>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><br ng-if="!removeDescriptionLineBreak">
                        <!---->
                        <p ng-bind-html="section.description" what="section-description" class="small">
                            Mettre votre école hors ligne la rend inaccessible aux visiteurs et étudiants, jusqu'à ce que vous la
                            remettiez en ligne (ce qui peut être fait à nimporte quel moment).
                            Supprimer votre école va définitivement écraser toutes les infos la concernant et les cours associés.
                            Les écoles supprimées sont irrécupérables.
                        </p>
                        <!---->
                        <!---->
                    </h2>
                    <!---->
                </div>
                <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                    <div ng-transclude="">
                        <input style="display: none;" id="schoolId" type="text" name="id" value="{{$school->id}}">
                      <!---->
                        <!---->
                        @if($school->status == "inactive")
                        <div id="changeStatus" class="tch-btn-content-primary fastclickable">Mettre mon école en ligne</div>
                        <input style="display: none;" id="status" type="text" name="status" value="active">

                        @else
                        <div id="changeStatus" style="background-color: #FF6621;"  class="tch-btn-content-primary fastclickable">Mettre mon école hors ligne</div>
                        <input style="display: none;" id="status" type="text" name="status" value="inactive">
                        @endif
                        <!----><span class="space"></span>

                        <!----><a id="deleteSchool" class="tch-btn-content-danger fastclickable">
                        Supprimer l'école définitivement</a>
                        <!---->
                    </div>
                    <div ng-show="showButtonsBar" class="tab-bottom ng-hide">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
        </form>
    </ng-include>


    <!---->
    @include('includes.information')
</div>


<script src="/js/jscolor.js"></script>

@endsection
