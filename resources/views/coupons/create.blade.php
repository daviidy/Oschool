@extends('layouts.admin_views.menu_coupon')
@section('content')

<style media="screen">
/*course create form*/


/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-8126fa277249c04e853f.css ; media=screen */
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input,select{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-question-circle:before{content:"\F059";}
.fa-bars:before{content:"\F0C9";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input,select{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="javascript:"]:after{content:"";}
p,h2{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button,select{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h2{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h2 .small{font-weight:400;line-height:1;color:#e4e5e6;}
h2{margin-top:22px;margin-bottom:11px;}
h2 .small{font-size:65%;}
h2{font-size:38px;}
p{margin:0 0 11px;}
.small{font-size:92%;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-lg-3,.col-lg-9,.col-md-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-md-12{float:left;}
.col-md-12{width:66%;}
}
@media (min-width: 1200px){
.col-lg-3,.col-lg-9{float:left;}
.col-lg-3{width:25%;}
.col-lg-9{width:75%;}
}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
.form-control{display:block;width:100%;height:41px;padding:6px 12px;font-size:13px;line-height:1.72222;color:#95a5a6;background-color:white;background-image:none;border:1px solid #ccc;border-radius:5px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;-webkit-transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-group{margin-bottom:15px;}
.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#556878;}
.btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;padding:6px 12px;font-size:13px;line-height:1.72222;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.btn:focus,.btn:active:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:white;text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);}
.alert{padding:15px;margin-bottom:22px;border:1px solid transparent;border-radius:4px;}
.alert-info{color:#3498db;background-color:#d9edf7;border-color:#bce8f1;}
[disabled]{cursor:default!important;pointer-events:none;}
.tch-btn-header-primary{color:white;background-color:#6aace6;border:1px solid #6aace6;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
.tch-btn-header-primary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active{background-image:none;}
.tch-btn-header-primary[disabled],.tch-btn-header-primary[disabled]:hover,.tch-btn-header-primary[disabled]:focus,.tch-btn-header-primary[disabled]:active{filter:alpha(opacity=65);opacity:0.65;background-color:#4D90CC;border-color:#4D90CC;cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;}
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
.tch-btn-tooltip{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;padding:4px 5px!important;color:#ff7f45;}
.tch-btn-tooltip:focus{outline:0!important;}
.tch-btn-tooltip:hover,.tch-btn-tooltip:active,.tch-btn-tooltip:focus{color:#ff631c;-webkit-box-shadow:none;box-shadow:none;}
@media screen and (max-width: 1000px){
.tch-btn-tooltip{display:none;}
}
.alert{background:none;color:#20272d;padding:14px 25px 14px 25px;text-shadow:none;border-radius:3px;font-family:"TeachableSans";line-height:21px;letter-spacing:0.2px;margin-bottom:26px;font-weight:400;font-size:11px;font-weight:500;display:-webkit-box;display:-ms-flexbox;display:flex;position:relative;-webkit-box-align:center;-ms-flex-align:center;align-items:center;letter-spacing:0.5px;font-size:12px;}
.alert a{color:#f1c40f;font-weight:bold;}
.alert a:hover{text-decoration:underline;}
.alert{padding:14px 25px 14px 47px;background:none;border:1px solid #e0e0e0;color:#6f6c6c;}
.alert:before{font-family:FontAwesome;position:absolute;margin-left:-30px;display:block;top:calc(50% - 15px);padding:5px;font-size:20px;color:#809196;opacity:0.9;}
.alert a{text-decoration:underline;font-weight:600;}
.alert-info{background:#4d90cc3b;border:1px solid #4d90cc3b;color:#4D90CC;}
.alert-info:before{content:'\F059';color:#4D90CC;}
.alert-info a,.alert-info a:hover,.alert-info a:active,.alert-info a:focus{font-weight:300;color:#4D90CC;text-decoration:underline;}
.tch-learn-more{text-align:center;}
.tch-learn-more .alert{display:inline-block;margin:auto;}
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
h2{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h2 .small{font-weight:normal;line-height:1;color:#8d939a;}
h2.tch-subheading{font-weight:600;font-size:15px;letter-spacing:0.1px;margin-bottom:20px;color:#545665;}
h2.tch-subheading .small{line-height:19px;margin-top:13px;color:rgba(71, 80, 94, .55);font-size:12px;font-weight:500;letter-spacing:0.5px;font-family:"TeachableSans";}
h2{margin-top:22px;margin-bottom:11px;}
h2 .small{font-size:65%;}
h2{font-size:38px;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
.small{font-size:92%;}
.tch-page-header .tch-btn-hamburger{margin-right:9px!important;float:left;margin-top:-6px!important;padding:5px 1px;margin-top:3px;text-align:center;}
.tch-page-header .tch-btn-hamburger .tch-btn-header-icon{padding:0!important;border:0;color:#a9a9a9;}
.tch-page-header .tch-btn-hamburger i{margin-right:0px;}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .tch-btn-header-icon{padding:10px 15px;}
.control-label{font-size:14px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-heading h2.tch-subheading{margin-top:10px;padding-right:10px;color:#555765;}
.tch-section-wrapper{display:block;height:auto;padding-bottom:20px;margin-left:0px;margin-right:0px;margin-bottom:35px;position:relative;border-bottom:1px solid #dbdbdb;}
.tch-section-wrapper:target .tch-section-content{-webkit-animation:highlight 1s ease-out;animation:highlight 1s ease-out;}
.tch-section-content{padding-top:0;background:#fff;display:block;margin-top:-1px;margin-bottom:20px;padding:30px 35px;border-radius:5px;border:1px solid #e7eaed;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);-webkit-transition:0.2s all ease-in;transition:0.2s all ease-in;}
.tch-section-content .tab-bottom{background:#fefefe;margin-top:30px;height:85px;margin-bottom:-30px;line-height:85px;margin-left:-35px;margin-right:-35px;border-top:1px solid #eeeeee;text-align:right;padding-right:30px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box{display:none;padding-top:0;background:#fff;position:relative;z-index:5;border-radius:2px;-webkit-box-shadow:1px 2px 3px 0px #e6e9ec;box-shadow:1px 2px 3px 0px #e6e9ec;margin-bottom:20px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title{color:#20272d;font-size:16px;letter-spacing:0.57px;font-weight:600;line-height:20px;overflow:hidden;opacity:0;-webkit-transition-duration:0.1s;transition-duration:0.1s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);-webkit-transform:translateY(-10px);transform:translateY(-10px);line-height:24px;max-height:0px;float:left;margin:20px 15px 14px 25px;position:absolute;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title i{font-size:15px;vertical-align:0px;margin-right:8px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons{overflow:hidden;opacity:0;max-height:0px;position:absolute;top:10px;right:48px;}
.state-admin.state-hello-bar .tch-section-nav .tch-section-nav-box{top:50px!important;}
.state-admin.state-hello-bar .admin-content{padding:80px 40px 30px 40px;}
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
.space::before{content:'\A0';}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
.btn{font-family:'TeachableSans', sans-serif;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
</style>


<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
    <div what="page header" class="tch-section-nav tch-page-header" icon="" text="New Course">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger">
                      <button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable">
                        <i class="fa fa-bars"></i>
                      </button>
                    </div>
                    <!---->
                    <!---->Nouveau coupon
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons"></div>
            </div>
            <!---->
        </div>
    </div>
    <!---->
    <form method="post" enctype="multipart/form-data" action="/coupons" name="courseNewForm">
        <div id="section-information" class="row tch-section-wrapper">
            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                <!---->
                <!---->
                <h2 ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Information</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="small">Ajoutez des informations de base sur le cours et le nom de l'auteur.<br><br>Pour ajouter un titre d'auteur, une image et une biographie, visitez le site bios</p>
                    <!---->
                    <!---->
                </h2>
                <!---->
            </div>
            @csrf
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude="" id="authorBlock">
                    <div form="courseNewForm" label="Course Title" for="name">
                        <!---->
                        <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                            <label-block required-label="requiredLabel">
                                <!---->
                                <!----><label for="name" ng-if="label" class="control-label">
                                    <!----><span ng-bind="label">Code du coupon</span>
                                    <!----></label>
                                <!---->
                                <!---->
                                <!---->
                            </label-block>
                            <div ng-transclude="">
                              <input id="coupon_code" what="name" ng-model="coupon.code" type="text" name="code" maxlength="100" placeholder="ge_89f9rDN4rt'" autofocus="true"
                                  required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength">
                            </div>
                            <help-block>
                                <ng-messages for="form[for].$error" role="alert" class="ng-active">
                                    <!---->
                                    <!---->
                                    <ng-message when="required" class="help-block">Required field</ng-message>
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
                                <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="name" class="help-block ng-hide"></div>
                            </help-block>
                        </div>
                        <!---->
                        <!---->
                    </div>
                    <div form="courseNewForm" label="Course Subtitle" for="heading">
                        <!---->
                        <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                            <label-block required-label="requiredLabel">
                                <!---->
                                <!----><label for="heading" ng-if="label" class="control-label">
                                    <!----><span ng-bind="label">Valeur</span>
                                    <!----></label>
                                <!---->
                                <!---->
                                <!---->
                            </label-block>
                            <div ng-transclude="">
                              <input id="course-heading" type="text" name="value" maxlength="160" value="" placeholder="e.g. 'exemple 5000'"
                                  class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"><label ng-show="state.errors.heading" ng-bind="state.errors.heading" for="#course-heading" class="control-label ng-hide"></label>
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
                                <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="heading" class="help-block ng-hide"></div>
                            </help-block>
                        </div>
                        <!---->
                        <!---->
                    </div>
                    <div style="display: none;" ng-transclude="">
                        <input name="school_id" id="schoolId" type="text" maxlength="160" value="" placeholder="e.g. 'Tout ce que vous avez besoin de savir sur le montage vidéo'"
                          class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength">
                    </div>


                    <div form="courseNewForm" label="Course Subtitle" for="heading">
                        <!---->
                        <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                            <label-block required-label="requiredLabel">
                                <!---->
                                <!----><label for="heading" ng-if="label" class="control-label">
                                    <!----><span ng-bind="label">Date d'expiration</span>
                                    <!----></label>
                                <!---->
                                <!---->
                                <!---->
                            </label-block>
                            <div ng-transclude=""><input id="course-heading" type="date" name="expiration_date" maxlength="160" value="" placeholder="e.g. 'exemple -50%'"
                                  class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"><label ng-show="state.errors.heading" ng-bind="state.errors.heading" for="#course-heading" class="control-label ng-hide"></label>
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
                                <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="heading" class="help-block ng-hide"></div>
                            </help-block>
                        </div>
                        <!---->
                        <!---->
                    </div>

                </div>
                <div ng-show="showButtonsBar" class="tab-bottom">
                    <!---->
                    <!---->
                    <button id="test-id-save-btn" ng-if="save" type="submit" ng-disabled="form.$invalid || form.$pending || disableSave" ng-bind="saveLabel || 'Save'" class="tch-btn-header-primary">Créer le coupon</button>                    <!---->
                </div>
            </div>
        </div>
    </form>
    <div class="tch-learn-more" text="about creating a course in the Teachable Knowledge Base" label="admin.courses.new">
        <div class="alert alert-info">
            <!---->
            <div ng-transclude="" ng-class="{ 'border-left': title }" class="alert-text-wrapper"><a ng-href="https://support.teachable.com/hc/en-us/articles/220340327-Create-and-Set-Up-Your-Course-?src=admin"
                  href="https://support.teachable.com/hc/en-us/articles/220340327-Create-and-Set-Up-Your-Course-?src=admin" target="_blank">En savoir plus sur</a><span class="space"></span><span ng-bind="text"> la création d'un cours dans la base de connaissances</span></div>
        </div>
    </div><br><br>
</div>

@endsection
