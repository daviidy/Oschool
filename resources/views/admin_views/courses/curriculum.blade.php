@extends('layouts.admin_views.menu-school-icon')
@section('content')

<style media="screen">

/*curriculum pages*/


/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-8126fa277249c04e853f.css ; media=screen */
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-pencil:before{content:"\F040";}
.fa-check-square-o:before{content:"\F046";}
.fa-eye:before{content:"\F06E";}
.fa-bars:before{content:"\F0C9";}
.fa-cloud-download:before{content:"\F0ED";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
.label{border:1px solid #000;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
ol{margin-top:0;margin-bottom:11px;}
ol ol{margin-bottom:0;}
.list-unstyled{padding-left:0;list-style:none;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-md-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-md-12{float:left;}
.col-md-12{width:100%;}
}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal;}
input[type="checkbox"]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn-group{position:relative;display:inline-block;vertical-align:middle;}
.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em;}
.label:empty{display:none;}
.label-default{background-color:#e9e9ea;}
.alert{padding:15px;margin-bottom:22px;border:1px solid transparent;border-radius:4px;}
.alert-info{color:#4D90CC;background-color:#d9edf7;border-color:#bce8f1;}
.pull-right{float:right!important;}
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
.tch-btn-header-secondary{min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;color:white;background-color:#fff;border:1px solid #a9a9a9;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#e1e3e4;color:#4D90CC;}
.tch-btn-header-secondary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-secondary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-secondary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-secondary:active:hover,.tch-btn-header-secondary:active:focus{color:white;background-color:#dedede;border-color:#838383;}
.tch-btn-header-secondary:active{background-image:none;}
.tch-btn-header-secondary:active,.tch-btn-header-secondary:hover,.tch-btn-header-secondary:focus{background:#fff;border-color:#1ea69a;color:#1ea69a;}
.tch-btn-header-secondary:active:hover,.tch-btn-header-secondary:active:focus,.tch-btn-header-secondary:hover:hover,.tch-btn-header-secondary:hover:focus,.tch-btn-header-secondary:focus:hover,.tch-btn-header-secondary:focus:focus{background:#fff;border-color:#4D90CC;color:#4D90CC;}
.tch-btn-header-secondary:focus{outline:0!important;}
.tch-btn-header-secondary:focus{outline:0!important;}
.tch-btn-header-secondary:focus{outline:0!important;}
.tch-btn-header-secondary:focus{outline:0!important;}
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
.tch-btn-content-secondary:focus{color:white;background-color:#ededed;border-color:#e8e8e8;}
.tch-btn-content-secondary:hover{color:white;background-color:#ededed;border-color:#929292;}
.tch-btn-content-secondary:active{color:white;background-color:#ededed;border-color:#929292;}
.tch-btn-content-secondary:active:hover,.tch-btn-content-secondary:active:focus{color:white;background-color:#dedede;border-color:#838383;}
.tch-btn-content-secondary:active{background-image:none;}
.tch-btn-content-secondary:active,.tch-btn-content-secondary:hover,.tch-btn-content-secondary:focus{background:#fff;border-color:#1ea69a;color:#1ea69a;}
.tch-btn-content-secondary:active:hover,.tch-btn-content-secondary:active:focus,.tch-btn-content-secondary:hover:hover,.tch-btn-content-secondary:hover:focus,.tch-btn-content-secondary:focus:hover,.tch-btn-content-secondary:focus:focus{background:#fff;border-color:#1ea69a;color:#1ea69a;}
.tch-btn-content-secondary:focus{outline:0!important;}
.tch-btn-content-secondary:focus{outline:0!important;}
.tch-btn-sm-block{min-width:107px;}
.tch-btn-icon-fa{background:none;border:0px;font-size:16px;vertical-align:-1px;line-height:20px;}
.tch-btn-icon-fa.tch-btn-content-secondary,.tch-btn-icon-fa.tch-btn-content-secondary:hover,.tch-btn-icon-fa.tch-btn-content-secondary:focus{background:none;color:#ccc!important;padding:7px 20px 3px 20px;}
.tch-btn-icon-fa.icon-gray{color:#ccc;}
.tch-btn-icon-fa.icon-gray:hover{color:#b3b3b3;}
.btn-group{vertical-align:0px;}
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
ol{margin-top:0;margin-bottom:11px;}
ol ol{margin-bottom:0;}
.list-unstyled{padding-left:0;list-style:none;}
.label{font-size:9px;font-weight:800;letter-spacing:1px;padding:5px 9px;border-radius:2px!important;vertical-align:1px;}
.label-default{background:#9a9ea2;}
.tch-page-header .tch-btn-hamburger{margin-right:9px!important;float:left;margin-top:-6px!important;padding:5px 1px;margin-top:3px;text-align:center;}
.tch-page-header .tch-btn-hamburger .tch-btn-header-icon{padding:0!important;border:0;color:#a9a9a9;}
.tch-page-header .tch-btn-hamburger i{margin-right:0px;}
.tch-page-header .tch-btn-header-icon-2{
    left: 207px;
    position: unset;
    bottom: 74px;
    z-index: 10000;
    float: right;
    margin-left: 15px;
    display: none;
}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .tch-btn-header-icon{padding:10px 15px;}
.tch-ui-tree-curriculum > ol > li{margin-bottom:30px;border:1px solid #dedede;-webkit-box-shadow:1px 2px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 2px 1px 0px rgba(0, 0, 0, .04);}
.tch-ui-tree-curriculum > ol > li .section-heading{background:#fff;}
.tch-ui-tree-curriculum > ol > li .section-heading .title{cursor:default;color:#373f48;font-size:14px;}
.tch-ui-tree-curriculum > ol > li .section-heading .title .lecture-section-name{max-width:calc(100% - 22px);display:block;float:left;overflow:hidden;text-overflow:ellipsis;}
.tch-ui-tree-curriculum > ol > li > ol > li{cursor:pointer;font-size:14px;font-weight:400;background:rgba(253, 253, 253, .84);border-radius:0!important;}
.tch-ui-tree-curriculum > ol > li > ol > li .lecture-name{max-width:calc(100% - 22px);display:block;float:left;overflow:hidden;text-overflow:ellipsis;}
.tch-drag-handle-bars{float:left;margin-top:13px;margin-left:14px;color:#ccc;left:-4px;cursor:move;}
.cssFade{-webkit-transition:0.3s linear all;transition:0.3s linear all;opacity:1;}
.cssFade.ng-hide{opacity:0;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box{display:none;padding-top:0;background:#fff;position:relative;z-index:5;border-radius:2px;-webkit-box-shadow:1px 2px 3px 0px #e6e9ec;box-shadow:1px 2px 3px 0px #e6e9ec;margin-bottom:20px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title{color:#20272d;font-size:16px;letter-spacing:0.57px;font-weight:600;line-height:20px;overflow:hidden;opacity:0;-webkit-transition-duration:0.1s;transition-duration:0.1s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);-webkit-transform:translateY(-10px);transform:translateY(-10px);line-height:24px;max-height:0px;float:left;margin:20px 15px 14px 25px;position:absolute;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title i{font-size:15px;vertical-align:0px;margin-right:8px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons{overflow:hidden;opacity:0;max-height:0px;position:absolute;top:10px;right:48px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-btn-header-primary,.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-btn-header-secondary{-webkit-transition:none!important;transition:none!important;}
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
.angular-ui-tree-wrapper{-webkit-box-sizing:border-box;box-sizing:border-box;background:#ededed;}
.angular-ui-tree-nodes .angular-ui-tree-nodes{padding:0!important;margin:0;}
li.angular-ui-tree-wrapper{background-color:rgba(255, 255, 255, .84);z-index:0;color:#2b9b8b;text-decoration:none;font-weight:200;}
.angular-ui-tree-wrapper{padding:7px 15px 16px 5px;z-index:5;position:relative;margin-top:0;margin-left:0;letter-spacing:0px;font-size:15px;font-weight:bold;height:57px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background:#fff;margin-bottom:1px;border-radius:1px;-webkit-box-shadow:1px 1px 0px 0px rgba(0, 0, 0, .05);box-shadow:1px 1px 0px 0px rgba(0, 0, 0, .05);border-left:2px solid transparent;}
.angular-ui-tree-wrapper.draft{background:#f1f1f1!important;}
.angular-ui-tree-wrapper:hover{background:#fffdfb;border-left:2px solid #4D90CC;}
.angular-ui-tree-wrapper .pull-right{margin-top:5px;}
.angular-ui-tree-wrapper button:focus{outline:0;}
.angular-ui-tree-wrapper .title{line-height:42px;margin-left:9px;width:calc(100% - 450px);display:block;float:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.angular-ui-tree-wrapper:last-child{border-bottom-right-radius:4px;border-bottom-left-radius:4px;}
.state-admin-courses-course-curriculum .bulk-actions{background:#09a59a;font-weight:bold;margin-left:15px;margin-right:15px;padding:8px 20px;position:fixed;text-align:center;top:56px;z-index:1000;}
.state-admin-courses-course-curriculum .bulk-actions .title{color:#fff;font-size:14px;margin-right:5px;}
.state-admin-courses-course-curriculum .bulk-actions .tch-btn-content-secondary{color:rgba(255, 255, 255, .8)!important;}
.state-admin-courses-course-curriculum .bulk-actions .tch-btn-content-secondary:hover{color:#fff!important;}
.state-admin-courses-course-curriculum .checkbox-container{float:left;width:50px;text-align:center;padding-top:13px;padding-left:14px;padding-bottom:16px;margin-right:7px;margin-top:-3px;}
.space::before{content:'\A0';}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
</style>

<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
    <div what="curriculum page title page header" class="tch-section-nav tch-page-header" icon="icon icon-list3" text="Curriculum">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger"><button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable"><i class="fa fa-bars"></i></button></div>
                    <!---->
                    <!---->Programme du cours
                    <div class="tch-btn-header-icon-2">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="40"viewBox="0 0 172 172"style=" fill:#000000;position: relative;bottom: 8px;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#3498db"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path><path d="M0,172v-172h172v172z" fill="none"></path><path d="M3.44,168.56v-165.12h165.12v165.12z" fill="none"></path></g></g></svg>
                    </div>
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons">
                    <a target="_blank" class="tch-btn-header-secondary"
                      href="/course/enrolled/{{$course->slug}}">Aperçu</a><span class="space"></span>
                    <span class="space"></span>
                    <a what="new section btn" ui-sref="admin.courses.course.curriculum.new_section" class="tch-btn-header-primary"
                      href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum/new-section">Nouvelle section</a>
                      <!--
                      <a style="background-color: #4D90CC;border: 1px solid #4D90CC;" what="new section btn" ui-sref="admin.courses.course.curriculum.new_section" class="tch-btn-header-primary"
                        href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum/new-section">Ajouter quiz</a>
                    -->
                </div>
            </div>
            <!---->
        </div>
    </div>
    <div class="row">
        <!---->
        <div ng-show="selectedLectures.length == 0 &amp;&amp; selectedLectureSections.length > 0" class="bulk-actions cssFade ng-animate ng-hide"><span class="title">Bulk actions:</span>
            <!----><button what="delete" ng-click="deleteLectures(selectedLectures)" confirm="Are you sure you want to delete 0 lecture sections?" tooltip="Delete selected sections" tooltip-placement="bottom" tooltip-trigger="mouseenter"
              tooltip-append-to-body="true" ng-if="lectureSections.length > 1" class="tch-btn-icon-fa tch-btn-content-secondary fastclickable" style=""><i class="fa fa-trash-o"></i></button>
            <!----><button ng-click="togglePublishLectureSection()" tooltip="Toggle published setting" tooltip-placement="bottom" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
              class="tch-btn-icon-fa tch-btn-content-secondary fastclickable"><i class="fa fa-check-square-o"></i></button></div>
    </div>
    <div class="row">
        <div ui-tree="options" class="col-md-12 tch-ui-tree-curriculum angular-ui-tree">
            <ol ui-tree-nodes="" data-type="lectureSection" class="list-unstyled section-list ng-pristine ng-untouched ng-valid angular-ui-tree-nodes ng-not-empty" style="">
                <!---->
                @if($course->sections)
                @foreach($course->sections->sortBy('position') as $section)
                <li data-index="{{$section->id}}" data-position="{{$section->position}}" class="section-item angular-ui-tree-node" collapsed="false" style="">
                    <div what="section" class="section-heading angular-ui-tree-wrapper"><i ui-tree-handle=""
                          class="fa fa-bars tch-drag-handle-bars angular-ui-tree-handle"></i>
                          <span data-nodrag="" class="checkbox-container">
                              <!--
                              <input what="checkbox" type="checkbox" ng-model="lectureSection.allSelected"
                              ng-change="selectLectureSection(lectureSection)" class="ng-pristine ng-untouched ng-valid ng-empty">
                          -->
                          </span><span class="title"><span what="section name" ng-bind="lectureSection.name" editable-text="lectureSection.name"
                              e-form="lectureSectionNameEditForm" onbeforesave="$event.stopPropagation(); updateLectureSection(lectureSection, { name: $data })" class="lecture-section-name editable">{{$section->title}}</span><button
                              what="edit section name" ng-click="$event.stopPropagation(); lectureSectionNameEditForm.$show()" ng-hide="lectureSectionNameEditForm.$visible" class="tch-btn-icon-fa icon-gray fastclickable"><i
                                  class="fa fa-pencil"></i></button>
                            <!----></span>
                        <div class="pull-right"><a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum/{{$section->id}}/new-lecture" id="test-id-new-lecture-btn" class="tch-btn-content-primary tch-btn-sm tch-btn-sm-block fastclickable">Nouvelle leçon</a></div>
                    </div>
                    <ol ui-tree-nodes="" ng-model="lectureSection.lectures" data-type="lecture" class="list-unstyled lecture-list ng-pristine ng-untouched ng-valid angular-ui-tree-nodes ng-not-empty">
                        <!---->
                        @if($section->lessons)
                        @foreach($section->lessons->sortBy('position') as $lesson)
                        <li data-index="{{$lesson->id}}" data-position="{{$lesson->position}}"
                           class="{{$lesson->status == 'inactive' ? 'draft' : ''}} lecture-item angular-ui-tree-wrapper angular-ui-tree-node fastclickable" collapsed="false" style="">
                          <i ui-tree-handle=""
                              class="fa fa-bars tch-drag-handle-bars angular-ui-tree-handle fastclickable"></i>
                              <span data-nodrag="" ng-click="$event.stopPropagation();" class="checkbox-container fastclickable">
                                  <!--
                                  <input type="checkbox"
                                  class="ng-pristine ng-untouched ng-valid ng-empty">
                              -->
                              </span>
                              <a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum/{{$section->id}}/lessons/{{$lesson->id}}/edit">
                                  <span class="title">
                                      <span  editable-text="lecture.name"
                                  class="lecture-name editable">
                                  {{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}
                              </span>
                              <button
                                  class="tch-btn-icon-fa icon-gray fastclickable">
                                  <i class="fa fa-pencil"></i>
                              </button>

                                  @if($lesson->status == 'inactive')
                                  <label ng-if="!lecture.is_published" class="label label-default">Brouillon</label>
                                  @endif
                                <!----></span>
                                </a>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <!--
                                  <button
                                      class="tch-btn-icon-fa fastclickable tch-btn-content-secondary"><i class="fa fa-eye"></i>
                                  </button>
                              -->
                              <form action="{{ route('lessons.destroy', $lesson) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                                  <button style="background:#de4f0e;"
                                      class="tch-btn-icon-fa fastclickable tch-btn-content-primary"><i class="fa fa-trash"></i>
                                  </button>
                              </form>
                              </div>
                            </div>
                        </li>
                        @endforeach
                        @endif
                        <!---->

                        <!---->
                    </ol>
                </li>
                @endforeach
                @endif
                <!---->

                <!---->
            </ol>
        </div>
    </div><br>
    @include('includes.information')
</div>





<script type="text/javascript" src="/js/admin_views/curriculum.js"></script>

@endsection
