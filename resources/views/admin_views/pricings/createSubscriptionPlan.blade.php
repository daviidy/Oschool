@extends('layouts.admin_views.menu-school-icon')
@section('title', 'Ajouter une offre d\'abonnement')
@section('content')

<style media="screen">

/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-79e90a8f89fd85fce9ba.css ; media=screen */
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner{border:0;padding:0;}
table{border-collapse:collapse;border-spacing:0;}
td,th{padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-trash-o:before{content:"\F014";}
.fa-edit:before{content:"\F044";}
.fa-question-circle:before{content:"\F059";}
.fa-bars:before{content:"\F0C9";}
.fa-angle-left:before{content:"\F104";}
.fa-angle-right:before{content:"\F105";}
.fa-angle-down:before{content:"\F107";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner{border:0;padding:0;}
table{border-collapse:collapse;border-spacing:0;}
td,th{padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
thead{display:table-header-group;}
tr,img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-sm-3,.col-sm-10,.col-xs-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
.col-xs-12{float:left;}
.col-xs-12{width:100%;}
@media (min-width: 768px){
.col-sm-3,.col-sm-10{float:left;}
.col-sm-3{width:25%;}
.col-sm-10{width:83.33333%;}
.col-sm-offset-1{margin-left:8.33333%;}
}
table{background-color:transparent;}
th{text-align:left;}
.tch-table-wrapper{min-height:.01%;overflow-x:auto;}
@media screen and (max-width: 767px){
.tch-table-wrapper{width:100%;margin-bottom:16.5px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #eef0f0;}
}
.btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;padding:6px 12px;font-size:13px;line-height:1.72222;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.btn:focus,.btn:active:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:white;text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);}
.btn-block{display:block;width:100%;}
.alert{padding:15px;margin-bottom:22px;border:1px solid transparent;border-radius:4px;}
.alert-info{color:#4D90CC;background-color:#4d90cc3b;border-color:#4d90cc3b;}
.pull-right{float:right!important;}
tr.border-bottom td{border-bottom:1pt solid #f3f3f3;}
[disabled]{cursor:default!important;pointer-events:none;}
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
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#1ea69a;border:1px solid #1ea69a;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:hover{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active:hover,.tch-btn-content-primary:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
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
.tch-btn-content-danger{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#fff;border:1px solid #d4604b;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#e6c6b8;color:#d4604b;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{color:white;background-color:#ededed;border-color:#e8e8e8;}
.tch-btn-content-danger:hover{color:white;background-color:#ededed;border-color:#c3452e;}
.tch-btn-content-danger:active{color:white;background-color:#ededed;border-color:#c3452e;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus{color:white;background-color:#dedede;border-color:#aa3c29;}
.tch-btn-content-danger:active{background-image:none;}
.tch-btn-content-danger:active,.tch-btn-content-danger:hover,.tch-btn-content-danger:focus{background:#fff;border-color:#d4604b;color:#d4604b;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus,.tch-btn-content-danger:hover:hover,.tch-btn-content-danger:hover:focus,.tch-btn-content-danger:focus:hover,.tch-btn-content-danger:focus:focus{background:#fff;border-color:#d4604b;color:#d4604b;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-icon{padding:6px 9px!important;font-size:11px;line-height:1.083;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;height:37px;width:37px;padding-top:8px!important;}
.tch-btn-icon:focus{outline:0!important;}
.tch-btn-icon .fa{font-size:16px;height:20px;width:15px;}
.tch-btn-icon .fa.fa-edit{height:16px;width:13px;}
.tch-table{width:100%;max-width:100%;margin-bottom:24px;}
.tch-table > thead > tr > th,.tch-table > tbody > tr > td{padding:12px 25px;line-height:1.5em;border-top:0;border-top:0;letter-spacing:0.5px;font-size:13px;}
.tch-table > tbody > tr > td .tch-btn-content-primary,.tch-table > tbody > tr > td .tch-btn-content-secondary,.tch-table > tbody > tr > td .tch-btn-icon{margin-left:3px;margin-bottom:5px;}
.tch-table > thead > tr > th{border-bottom:1px solid #eef0f0;color:#47505e;line-height:20px;text-transform:uppercase;font-size:11px;cursor:pointer;}
.tch-table > thead > tr > th i{margin-left:5px;vertical-align:1px;font-size:13px;opacity:0.5;}
.tch-table img{vertical-align:middle;}
.tch-table-wrapper{-webkit-overflow-scrolling:touch;}
.tch-table > tbody > tr:nth-child(even){background-color:transparent;}
.tch-table > tbody > tr:hover{background:#f5f6f7;}
.tch-table img.tch-table-thumb{width:22px;margin-right:10px;float:left;}
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
.tch-page-header .tch-btn-hamburger{margin-right:9px!important;float:left;margin-top:-6px!important;padding:5px 1px;margin-top:3px;text-align:center;}
.tch-page-header .tch-btn-hamburger .tch-btn-header-icon{padding:0!important;border:0;color:#a9a9a9;}
.tch-page-header .tch-btn-hamburger i{margin-right:0px;}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .tch-btn-header-icon{padding:10px 15px;}
.tch-page-nav{margin-bottom:30px;height:30px;}
.tch-page-nav-page-number{font-size:13px;color:#818181;margin-right:10px;display:block;float:left;letter-spacing:0.5px;margin-top:11px;}
.tch-page-nav-btn{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#1ea69a;border:1px solid #1ea69a;padding:5px 20px 4px 20px!important;font-size:23px;font-weight:200;padding-top:2px;line-height:25px;}
.tch-page-nav-btn:focus{outline:0!important;}
.tch-page-nav-btn:focus{outline:0!important;}
.tch-page-nav-btn:focus{color:white;background-color:#19887e;border-color:#177f76;}
.tch-page-nav-btn:hover{color:white;background-color:#19887e;border-color:#177f76;}
.tch-page-nav-btn:active{color:white;background-color:#19887e;border-color:#177f76;}
.tch-page-nav-btn:active:hover,.tch-page-nav-btn:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
.tch-page-nav-btn:active{background-image:none;}
.tch-page-nav-btn[disabled],.tch-page-nav-btn[disabled]:hover,.tch-page-nav-btn[disabled]:focus,.tch-page-nav-btn[disabled]:active{filter:alpha(opacity=65);opacity:0.65;background-color:#1ea69a;border-color:#1ea69a;cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;}
.tch-inline-form{margin-right:-15px;margin-left:-15px;margin:0;margin-bottom:2px!important;background:#fff;border:1px solid #dbdbdb;border-radius:30px;position:relative;}
.tch-inline-form:before,.tch-inline-form:after{display:table;content:" ";}
.tch-inline-form:after{clear:both;}
.tch-inline-form div.btn-attached{padding-top:13px;font-weight:bold;-webkit-box-shadow:none!important;box-shadow:none!important;color:#0f8d82;height:49px;border-top-left-radius:4px;border-top-right-radius:4px;font-size:13px!important;-webkit-transition:0.1s all ease-in;transition:0.1s all ease-in;}
.tch-inline-form div.btn-attached:hover{color:#ff7f45;}
.tch-inline-form div.btn-attached:focus,.tch-inline-form div.btn-attached:active{outline:none;}
.tch-inline-form .inline-form-wrapper{padding-left:50px;padding-right:50px;}
.tch-inline-form-select{padding-bottom:70px;padding-top:40px;}
.tch-inline-form-select .inline-form-option{text-align:center;color:#ff7f45;}
.tch-inline-form-select .inline-form-option img{width:100px;height:100px;}
.tch-inline-form-select .inline-form-option:hover{cursor:pointer;}
.tch-inline-form-select .inline-form-option:hover .inline-form-option-name{color:#1ea69a;}
.inline-form-option-name{color:#47505e;font-size:12px;font-weight:600;letter-spacing:0.8px;margin-top:10px;}
.tch-inline-form-select .inline-form-option .inline-form-option-subtitle{color:#ababab;font-size:12px;line-height:18px;margin-top:7px;font-family:"TeachableSans";}
@media screen and (max-width: 1000px){
.tch-inline-form-select{padding-bottom:40px!important;padding-top:0!important;}
.tch-inline-form-select .inline-form-option{width:100%;text-align:center;margin-top:20px;margin-bottom:40px;}
}
.draggable-products td:hover{cursor:move;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-content{padding-top:0;background:#fff;display:block;margin-top:-1px;margin-bottom:20px;padding:30px 35px;border-radius:5px;border:1px solid #e7eaed;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);-webkit-transition:0.2s all ease-in;transition:0.2s all ease-in;}
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
.state-admin-courses-course-pricing table > tbody > tr > td:first-child{width:20%;}
.state-admin-courses-course .ui-sortable-handle{cursor:move;}
.slide-hide{overflow:hidden;max-height:0;padding-top:0;padding-bottom:0;margin-top:0;margin-bottom:0;-webkit-transition-duration:0.3s;transition-duration:0.3s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);}
.no-padding{padding:0px!important;}
.icon-arrow-down{margin-left:5px;vertical-align:-1px;color:#ccc;}
.gray-underline{color:#bfbfbf;text-decoration:underline;}
.space::before{content:'\A0';}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
.btn{font-family:'TeachableSans', sans-serif;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}

/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-79e90a8f89fd85fce9ba.css ; media=screen */
@media screen{
.redactor-box{position:relative;overflow:visible;margin-bottom:24px;}
.redactor-box textarea{display:block;position:relative;margin:0;padding:0;width:100%;overflow:auto;outline:none;border:none;background-color:#111;-webkit-box-shadow:none;box-shadow:none;color:#ccc;font-size:13px;font-family:Menlo, Monaco, monospace, sans-serif!important;resize:none;}
.redactor-box textarea:focus{outline:none;}
.redactor-editor,.redactor-box{background:#fff;}
.redactor-editor,.redactor-box,.redactor-box textarea{z-index:auto;}
.redactor-toolbar{z-index:100;}
.redactor-editor{position:relative;overflow:auto;margin:0!important;padding:20px;min-height:80px;outline:none;white-space:normal;border:1px solid #eee;font-family:Arial, Helvetica, Verdana, Tahoma, sans-serif!important;font-size:14px;line-height:1.6em;}
.redactor-editor:focus{outline:none;}
.redactor-placeholder:after{position:absolute;top:20px;left:20px;content:attr(placeholder);display:block;color:#999!important;font-weight:normal!important;}
.redactor-toolbar{position:relative;top:0;left:0;margin:0!important;padding:0!important;list-style:none!important;font-size:14px!important;line-height:1!important;background:#fff;border:none;-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, .2);box-shadow:0 1px 2px rgba(0, 0, 0, .2);}
.redactor-toolbar:after{content:"";display:table;clear:both;}
.redactor-toolbar li{vertical-align:top;display:inline-block;margin:0!important;padding:0!important;outline:none;list-style:none!important;-webkit-box-sizing:content-box;box-sizing:content-box;}
.redactor-toolbar li a{display:block;color:#333;text-align:center;padding:9px 10px;outline:none;border:none;text-decoration:none;cursor:pointer;zoom:1;-webkit-box-sizing:content-box;box-sizing:content-box;}
.redactor-toolbar li a:hover{outline:none;background-color:#1f78d8;color:#fff;}
.redactor-toolbar li a:hover i:before{color:#fff;}
.redactor-toolbar li a:active{outline:none;background-color:#ccc;color:#444;}
.redactor-toolbar li a.redactor-btn-image{width:14px;height:14px;background-position:center center;background-repeat:no-repeat;}
.redactor-toolbar li a.fa-redactor-btn{display:inline-block;padding:9px 10px 8px 10px;line-height:1;}
.re-icon{font-family:'RedactorFont';speak:none;font-style:normal;font-weight:normal;-webkit-font-feature-settings:normal;font-feature-settings:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.re-icon i:before{position:relative;font-size:14px;}
.re-unorderedlist:before{content:"\E601";}
.re-underline:before{content:"\E603";}
.re-fontcolor:before{content:"\E605";}
.re-outdent:before{content:"\E609";}
.re-orderedlist:before{content:"\E60A";}
.re-link:before{content:"\E60B";}
.re-horizontalrule:before{content:"\E60C";}
.re-italic:before{content:"\E60D";}
.re-indent:before{content:"\E60E";}
.re-fullscreen:before{content:"\E610";}
.re-formatting:before{content:"\E612";}
.re-fontsize:before{content:"\E613";}
.re-fontfamily:before{content:"\E614";}
.re-html:before{content:"\E616";}
.re-bold:before{content:"\E618";}
.re-backcolor:before{content:"\E619";}
.re-alignment:before{content:"\E61C";}
.redactor-editor p{font-size:14px;line-height:1.6em;}
.redactor-editor p{margin:0;margin-bottom:15px;border:none;background:none;-webkit-box-shadow:none;box-shadow:none;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input,select,textarea{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
textarea{overflow:auto;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-image:before{content:"\F03E";}
.fa-chevron-left:before{content:"\F053";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input,select,textarea{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
textarea{overflow:auto;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
[role="button"]{cursor:pointer;}
p{margin:0 0 11px;}
.text-center{text-align:center;}
ul{margin-top:0;margin-bottom:11px;}
.col-sm-6,.col-sm-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-6,.col-sm-12{float:left;}
.col-sm-6{width:50%;}
.col-sm-12{width:100%;}
.col-sm-offset-3{margin-left:25%;}
}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
.form-control{display:block;width:100%;height:41px;padding:6px 12px;font-size:13px;line-height:1.72222;color:#95a5a6;background-color:white;background-image:none;border:1px solid #ccc;border-radius:5px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;-webkit-transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
.input-group{position:relative;display:table;border-collapse:separate;}
.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0;}
.input-group .form-control:focus{z-index:3;}
.input-group-addon,.input-group .form-control{display:table-cell;}
.input-group-addon{width:1%;white-space:nowrap;vertical-align:middle;}
.input-group-addon{padding:6px 12px;font-size:13px;font-weight:400;line-height:1;color:#95a5a6;text-align:center;background-color:#eeeeee;border:1px solid #ccc;border-radius:5px;}
.input-group .form-control:first-child{border-top-right-radius:0;border-bottom-right-radius:0;}
.input-group .form-control:last-child,.input-group-addon:last-child{border-top-left-radius:0;border-bottom-left-radius:0;}
.input-group-addon:last-child{border-left:0;}
[disabled]{cursor:default!important;pointer-events:none;}
.tch-btn-header-primary-block{color:white;background-color:#6aace6;border:1px solid #6aace6;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;display:block;width:100%;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;max-width:100%;line-height:30px;}
.tch-btn-header-primary-block:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:active:hover,.tch-btn-header-primary-block:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:active{background-image:none;}
.tch-btn-header-primary-block[disabled],.tch-btn-header-primary-block[disabled]:hover,.tch-btn-header-primary-block[disabled]:focus,.tch-btn-header-primary-block[disabled]:active{filter:alpha(opacity=65);opacity:0.65;background-color:#4D90CC;border-color:#ff7f45;cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;}
.tch-btn-header-primary-block:focus{outline:0!important;}
.tch-btn-header-primary-block:focus{outline:0!important;}
.tch-btn-header-primary-block:focus{outline:0!important;}
textarea{font-size:14px;line-height:24px;padding:5px 11px;}
label{font-weight:normal;line-height:2.4;font-size:16px;color:#808080;line-height:30px;font-weight:600;margin-bottom:12px;}
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:"TeachableSans", Helvetica, Arial, sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:44px;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
select.form-control{-moz-appearance:none;appearance:none;-webkit-appearance:none;background:url("//assets.teachablecdn.com/admin/assets/images/select-up-down.png") right 12px center #fff no-repeat;background-size:15px;font-size:13px;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
.text-center{text-align:center;}
ul{margin-top:0;margin-bottom:11px;}
.input-group-addon{padding:10px 12px;font-size:13px;color:white;text-align:center;background-color:#9a9ea2;border:1px solid #9a9ea2;border-radius:6px;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.tch-inline-form .inline-form-wrapper{padding-left:50px;padding-right:50px;}
.tch-inline-form .inline-form-wrapper .inline-form-container{padding-top:30px;padding-bottom:50px;margin-top:2px;}
.input-group-image{float:left;}
.input-group-image img{padding-right:15px;width:59px;}
.input-group-select{float:left;}
.input-group-select select.form-control{-webkit-appearance:none;border-right:0;border-top-right-radius:0;border-bottom-right-radius:0;border-top-left-radius:5px!important;border-bottom-left-radius:5px!important;background:#f9f9f9;border-right:1px solid #dbdbdb;font-weight:bold;background:url("//assets.teachablecdn.com/admin/assets/images/select-dropdown.png") no-repeat 88%;background-size:10px;cursor:pointer;padding-right:25px;}
.input-group-select select.form-control:focus{border-right:1px solid #1ea69a;}
.input-group-select-attached input.form-control{border-top-left-radius:0;border-bottom-left-radius:0;border-left:0;}
.input-group-select-attached input.form-control:focus{border-left:1px solid #1ea69a;}
.input-group-addon{background:#f9f9f9;padding:1px;color:#34495e;padding:0 10px;font-weight:200;font-size:13px;border:1px solid #dbdbdb;}
.tch-inline-form .inline-form-wrapper .inline-form-container label.for-checkbox{font-size:15px;color:#848484;margin-bottom:10px;}
.tch-inline-form .inline-form-wrapper .inline-form-container select.small-inline{width:100px;margin-left:5px;margin-top:7px;display:inline;font-size:13px;}
.tch-inline-form .inline-form-wrapper .inline-form-container .re-alignment,.tch-inline-form .inline-form-wrapper .inline-form-container .re-horizontalrule,.tch-inline-form .inline-form-wrapper .inline-form-container .re-fullscreen,.tch-inline-form .inline-form-wrapper .inline-form-container .re-fontfamily,.tch-inline-form .inline-form-wrapper .inline-form-container .re-fontsize,.tch-inline-form .inline-form-wrapper .inline-form-container .re-fontcolor,.tch-inline-form .inline-form-wrapper .inline-form-container .re-backcolor,.tch-inline-form .inline-form-wrapper .inline-form-container .re-outdent{display:none!important;}
.tch-inline-form .tch-inline-support-article{position:absolute;top:13px;right:20px;font-size:13px;text-decoration:underline;color:#bbb;}
.tch-inline-form .tch-inline-back{border-radius:50%;color:#a9a9a9;height:30px;left:15px;font-size:12px;line-height:30px;padding-right:2px;position:absolute;text-align:center;top:10px;width:30px;}
.tch-inline-form .tch-inline-back:hover{color:#394244;}
.redactor-box{margin-bottom:0;background:none!important;}
.redactor-box textarea{background-color:#111!important;}
.redactor-toolbar{-webkit-box-shadow:none;box-shadow:none;border-bottom-width:0;border-top-left-radius:6px;border-top-right-radius:6px;border:1px solid #dbdbdb;border-bottom:none;}
.redactor-toolbar li a{padding:12px 14px;}
.redactor-toolbar li a:hover{background-color:#1ea69a!important;}
.redactor-toolbar .fa{margin:0!important;}
.redactor-toolbar{z-index:0!important;}
.redactor-editor{border:1px solid #dbdbdb;border-bottom-left-radius:6px;border-bottom-right-radius:6px;cursor:text;}
.redactor-placeholder:after{color:#ccc!important;}
.re-fullscreen{display:none!important;}
.re-formatting{display:none!important;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.slide-show{-webkit-transition-duration:0.3s;transition-duration:0.3s;-webkit-transition-timing-function:ease-in;transition-timing-function:ease-in;max-height:1000px;overflow:hidden;}
.add-top-margin{margin-top:15px;}
.add-top-margin-25{margin-top:25px;}
.redactor-editor{max-height:300px;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}



</style>


<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
    <div what="page header" class="tch-section-nav tch-page-header" icon="icon icon-cash-dollar" text="Pricing">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger"><button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable"><i class="fa fa-bars"></i></button></div>
                    <!---->
                    <!---->Offres de prix du cours
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons"></div>
            </div>
            <!---->
        </div>
    </div>
    <div class="tch-inline-form">

        <div ng-class="{ 'slide-hide': !form.isShown, 'slide-show': form.isShown }" class="slide-show" style="">
    <!---->
    <ng-include src="'courses/course/pricing/new-pricing-inline-form.html'">
        <form method="post" action="{{route('pricings.store')}}" what="product form" name="inlinePricingForm" ng-submit="addPricingPlan()" class="inline-form-wrapper ng-pristine ng-valid-maxlength ng-invalid ng-invalid-required" style="" id="pricing_susplan-container" >
            <!---->
            <!---->
            <div ng-if="planType" class="" style=""><a ng-click="resetPlanType()" href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/pricing" class="tch-inline-back fastclickable"><i what="fa-chevron-left" class="fa fa-chevron-left"></i></a>
                <!----><a what="learn-more-about-subscriptions" ng-href="https://teachable.zendesk.com/hc/en-us/articles/219442088-Overview-of-Course-Pricing-Options" target="_blank" ng-if="planType == 'subscription'"
                  class="tch-inline-support-article" href="https://teachable.zendesk.com/hc/en-us/articles/219442088-Overview-of-Course-Pricing-Options"><span>En savoir plus sur les abonnements</span></a>
                <!---->
                <!---->
                <!---->
                @csrf
                <div class="inline-form-container col-sm-6 col-sm-offset-3">
                    <!---->
                    <!---->
                    <div ng-if="planType != 'free'" class="col-sm-12">
                        <div class="input-group input-group-image"><img ng-src="/images/divers/icon-pricing-subscription.svg" class="tch-table-thumb" src="/images/divers/icon-pricing-subscription.svg"></div>
                        <div class="input-group input-group-select">
                          <select what="currency" ng-disabled="product.id" ng-model="product.currency" ng-options="currency.iso as currency.iso for (key, currency) in currencies" required=""
                              class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                                <option label="FCFA" value="string:XOF" selected="selected">FCFA</option>
                          </select></div>
                        <div class="input-group input-group-select-attached">
                          <input name="price" id="amount" type="text" maxlength="15" placeholder="Entrer un prix" convert-currency="currencies[product.currency].ratio"
                              numeric="" required="" autofocus="true" class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-valid-maxlength ng-touched" style="">
                            <div what="input-group-addon" class="input-group-addon">
                                <!----><span ng-if="currencies[product.currency].ratio === 100" class="disable-animations">.00</span>
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    <!---->
                    <!---->
                    <div ng-if="planType == 'subscription'" class="col-sm-12 text-center add-top-margin"><label class="for-checkbox"><span ng-bind="'PRODUCT.per' | translate">per</span>
                      <select name="per" id="test-id-recurring"
                              ng-model="product.billing_interval" class="form-control small-inline disable-animations ng-pristine ng-untouched ng-valid ng-not-empty">
                                <option value="month" ng-bind="'PRODUCT.month' | translate">Mois</option>
                                <option value="year" ng-bind="'PRODUCT.year' | translate">Année</option>
                            </select></label>

                            <input style="display: none;" type="text" name="course_id" value="{{$course->id}}">
                            <input style="display: none;" type="text" name="type" value="Abonnement">
                            <input style="display: none;" type="text" name="recurring" value="Yes">
                    </div>
                    <!---->
                    <!---->
                    <div ng-show="products.length > 0" class="">
                        <div class="col-sm-12 add-top-margin-25"><input type="text" name="name" maxlength="100" placeholder="Nom de l'offre"
                              class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"></div>



                    </div>

                    <div class="col-sm-12">
                        <br>
                        <input type="hidden" name="description">
                        <div id="editor-susplan">

                        </div>
                    </div>

                    <br>
                          <div>
                            <label for="status">Status :</label>
                              <select name="status" id="status">
                                  <option value="0">Hors ligne</option>
                                  <option value="1">En ligne</option>
                              </select>
                          </div>
                    <div class="col-sm-12 add-top-margin"><button id="test-id-save-btn" type="submit" ng-disabled="!inlinePricingForm.$valid" class="tch-btn-header-primary-block">Ajouter offre</button></div>
                </div>
            </div>
            <!---->
        </form>
    </ng-include>
</div>

    </div><br>
    @include('includes.information')
</div>


<script>

        var form = document.getElementById('pricing_susplan-container');
        form.onsubmit = function() {
          // Populate hidden form on submit
          var description = document.querySelector('input[name=description]');
          description.value = quillSuscriptionPlan.root.innerHTML;

        //   console.log("Submitted", $(form).serialize(), $(form).serializeArray());

          // No back end to actually submit to!
        //   alert('Open the console to see the submit data!')
          return true;
        };

</script>

@endsection
