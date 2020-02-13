@extends('layouts.admin_views.menu-school-icon')
@section('title', 'Liste des étudiants')
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
.fa-question-circle:before{content:"\F059"; display: none;}
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
.alert-info{color:#3498db;background-color:#d9edf7;border-color:#bce8f1;}
.pull-right{float:right!important;}
tr.border-bottom td{border-bottom:1pt solid #4D90DC;}
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
.tch-btn-content-danger{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#fff;border:1px solid #d4604b;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#6aace6;color:#6aace6;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-danger:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-danger:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus{color:white;background-color:#dedede;border-color:#6aace6;}
.tch-btn-content-danger:active{background-image:none;}
.tch-btn-content-danger:active,.tch-btn-content-danger:hover,.tch-btn-content-danger:focus{background:#fff;border-color:#6aace6;color:#d4604b;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus,.tch-btn-content-danger:hover:hover,.tch-btn-content-danger:hover:focus,.tch-btn-content-danger:focus:hover,.tch-btn-content-danger:focus:focus{background:#fff;border-color:#4d90cc;color:#4d90cc;}
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
.tch-btn-tooltip{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;padding:4px 5px!important;color:#4D90DC;}
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
.tch-page-header .tch-btn-header-icon-2{
    left: 207px;
    position: unset;
    bottom: 74px;
    z-index: 10000;
    float: right;
    margin-left: 5px;
    display: none;
}
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
.tch-inline-form div.btn-attached{padding-top:13px;font-weight:bold;-webkit-box-shadow:none!important;box-shadow:none!important;color:#4D90CC;height:49px;border-top-left-radius:4px;border-top-right-radius:4px;font-size:13px!important;-webkit-transition:0.1s all ease-in;transition:0.1s all ease-in;}
.tch-inline-form div.btn-attached:hover{color:#6aace6;}
.tch-inline-form div.btn-attached:focus,.tch-inline-form div.btn-attached:active{outline:none;}
.tch-inline-form .inline-form-wrapper{padding-left:50px;padding-right:50px;}
.tch-inline-form-select{padding-bottom:70px;padding-top:40px;}
.tch-inline-form-select .inline-form-option{text-align:center;color:#ff7f45;}
.tch-inline-form-select .inline-form-option img{width:100px;height:100px;}
.tch-inline-form-select .inline-form-option:hover{cursor:pointer;}
.tch-inline-form-select .inline-form-option:hover .inline-form-option-name{color:#4D90CC;}
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


</style>


<!--style formulmaire de recherche-->
<style media="screen">
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-025a34669541e2e808f4.css ; media=screen */
@media screen{
section{display:block;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
input{color:inherit;font:inherit;margin:0;}
input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-chevron-down:before{content:"\F078";}
section{display:block;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
input{color:inherit;font:inherit;margin:0;}
input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
ul{margin-top:0;margin-bottom:11px;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-12{float:left;}
.col-sm-12{width:100%;}
}
@media (min-width: 992px){
.col-md-12{float:left;}
.col-md-12{width:100%;}
}
@media (min-width: 1200px){
.col-lg-12{float:left;}
.col-lg-12{width:100%;}
}
.form-control{display:block;width:100%;height:41px;padding:6px 12px;font-size:13px;line-height:1.72222;color:#95a5a6;background-color:white;background-image:none;border:1px solid #ccc;border-radius:5px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;-webkit-transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
.dropdown{position:relative;}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:13px;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0, 0, 0, .15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0, 0, 0, .175);box-shadow:0 6px 12px rgba(0, 0, 0, .175);}
.dropdown-menu > li > a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.72222;color:#333333;white-space:nowrap;}
.dropdown-menu > li > a:hover,.dropdown-menu > li > a:focus{color:#262626;text-decoration:none;background-color:#f5f5f5;}
.dropdown-menu-left{right:auto;left:0;}
.btn-group{position:relative;display:inline-block;vertical-align:middle;}
.tch-dropdown-group{float:left;}
.tch-dropdown-group .dropdown-link{-webkit-box-shadow:none!important;box-shadow:none!important;}
.tch-dropdown-group a.dropdown-link{padding:0 20px;display:block;cursor:pointer;}
.tch-dropdown-group a.dropdown-link i.fa{font-size:9px;vertical-align:1px;margin-left:3px;}
.dropdown-menu{-webkit-box-shadow:2px 2px 9px 2px rgba(0, 0, 0, .05);box-shadow:2px 2px 9px 2px rgba(0, 0, 0, .05);border:1px solid #dcdcdc;border-radius:5px;position:absolute;display:block;z-index:1000;background:#fff;opacity:0;pointer-events:none;-webkit-transform:scale(0);transform:scale(0);margin-top:10px;-webkit-transition:opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);-webkit-transform-origin:0% 0%;transform-origin:0% 0%;max-height:400px;overflow:auto;overflow-x:hidden;min-width:300px;}
.dropdown-menu li a{padding:8px 14px 8px!important;-webkit-transition:none;transition:none;color:var(--nebulous);cursor:pointer;display:inline-block;width:100%;text-transform:none;}
.dropdown-menu li > a:hover,.dropdown-menu li > a:active,.dropdown-menu li > a:focus{border-radius:0px;background:#fbfbfb!important;color:#ff7f45!important;}
.dropdown-menu li:first-child > a,.dropdown-menu li:first-child > a:active,.dropdown-menu li:first-child > a:focus{border-top:0;padding-bottom:7px;padding-top:9px;}
.dropdown-menu li:first-child > a,.dropdown-menu li:last-child > a:hover,.dropdown-menu li:last-child > a:active,.dropdown-menu li:last-child > a:focus{border-bottom:0;padding-bottom:8px;}
.dropdown-menu.dropdown-menu-left{-webkit-transform-origin:0% 0%;transform-origin:0% 0%;}
.btn-group{vertical-align:0px;}
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Droid Sans, Helvetica Neue, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:auto;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
ul{margin-top:0;margin-bottom:11px;}
.input-search-icon{background:url("//assets.teachablecdn.com/admin/assets/images/search-icon.png") 9px 12px no-repeat #fff;padding-left:33px!important;background-size:17px;}
.filter-wrapper{width:100%;}
.filter-wrapper:first-child{width:100%;}
.tch-filters{padding-top:0;background:#ffffff;position:relative;border-radius:5px;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);border:1px solid #e7eaed;display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:10px;z-index:100;}
.tch-filters a{color:#809196;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.tch-filters a:hover,.tch-filters a:active,.tch-filters a:focus{color:#ff7f45;}
.tch-filters a.dropdown-link{padding:0 20px;display:block;cursor:pointer;color:#0f8d82;}
.tch-filters a.dropdown-link:hover{color:#ff7f45;}
.tch-filters a.dropdown-link i.fa{font-size:9px;vertical-align:1px;margin-left:3px;}
.tch-filters .filter-add{border-right:1px solid #e7eaed;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;min-height:48px;}
.tch-filters .filter-reset{text-align:right;position:relative;font-weight:600;cursor:pointer;}
.tch-filters .filter-ui-select{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;position:relative;}
.tch-filters .filter-ui-select .form-control{border-radius:5px;border:0px;min-height:48px;background-position:14px 15px;}
.tch-filters .filter-ui-select .form-control:focus{border-left:none!important;border-right:none!important;border-top:none!important;border-bottom:none!important;}
.tch-filters .filter-ui-select .input-search-icon{padding-left:39px!important;margin-right:-39px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
 .filters-wrapper{display:inline-block;position:relative;width:100%;z-index:999;}
.space::before{content:'\A0';}
}
/*! CSS Used from: Embedded */
*,:after,:before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
._2kIOe{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
._2kIOe{font-weight:400;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
._2kIOe{font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI',     'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans',     'Helvetica Neue', sans-serif;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);font-weight:400;}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
._2kIOe{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
._2kIOe{font-weight:400;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);}

</style>


<!--style pour le tableau-->
<style media="screen">
/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-025a34669541e2e808f4.css ; media=screen */
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
table{border-collapse:collapse;border-spacing:0;}
td,th{padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.pull-left{float:left;}
.fa-envelope-o:before{content:"\F003";}
.fa-angle-left:before{content:"\F104";}
.fa-angle-right:before{content:"\F105";}
.fa-angle-up:before{content:"\F106";}
.fa-angle-down:before{content:"\F107";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
table{border-collapse:collapse;border-spacing:0;}
td,th{padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="javascript:"]:after{content:"";}
tr,img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
.img-circle{border-radius:50%;}
table{background-color:transparent;}
th{text-align:left;}
.tch-table-wrapper{min-height:.01%;overflow-x:auto;}
@media screen and (max-width: 767px){
.tch-table-wrapper{width:100%;margin-bottom:16.5px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #eef0f0;}
}
input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal;}
input[type="checkbox"]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.pull-right{float:right!important;}
.pull-left{float:left!important;}
tr.border-bottom td{border-bottom:1pt solid #f3f3f3;}
[disabled]{cursor:default!important;pointer-events:none;}
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
.tch-btn-icon{padding:6px 9px!important;font-size:11px;line-height:1.083;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;height:37px;width:37px;padding-top:8px!important;}
.tch-btn-icon:focus{outline:0!important;}
.tch-btn-icon .fa{font-size:16px;height:20px;width:15px;}
.tch-table{width:100%;max-width:100%;margin-bottom:24px;}
.tch-table > tbody > tr > th,.tch-table > tbody > tr > td{padding:12px 25px;border-top:0;border-top:0;}
.tch-table > tbody > tr > td .tch-btn-content-secondary,.tch-table > tbody > tr > td .tch-btn-icon{margin-left:3px;margin-bottom:5px;}
.tch-table > tbody > tr > th{border-bottom:1px solid #eef0f0;color:#47505e;cursor:pointer;}
.tch-table > tbody > tr > th i{margin-left:5px;vertical-align:1px;font-size:13px;opacity:0.5;}
.tch-table input[type='checkbox'],.tch-table .checkbox-placeholder{margin-right:20px;position:relative;z-index:10;}
.tch-table .checkbox-placeholder{height:15px;width:15px;}
.tch-table img{vertical-align:middle;}
.tch-table-wrapper{-webkit-overflow-scrolling:touch;}
.tch-table > tbody > tr:nth-child(even){background-color:transparent;}
.tch-table > tbody > tr:hover{background:#f5f6f7;}
.tch-btn-tooltip{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;padding:4px 5px!important;color:#ff7f45;}
.tch-btn-tooltip:focus{outline:0!important;}
.tch-btn-tooltip:hover,.tch-btn-tooltip:active,.tch-btn-tooltip:focus{color:#ff631c;-webkit-box-shadow:none;box-shadow:none;}
@media screen and (max-width: 1000px){
.tch-btn-tooltip{display:none;}
}
.tch-page-nav{margin-bottom:30px;height:30px;}
.tch-page-nav-count{float:left;font-weight:bold;font-size:15px;color:#20272d;}
.tch-page-nav-page-number{font-size:13px;color:#818181;margin-right:10px;display:block;float:left;margin-top:11px;}
.tch-page-nav-btn{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#1ea69a;border:1px solid #1ea69a;padding:5px 20px 4px 20px!important;font-size:23px;font-weight:200;padding-top:2px;line-height:25px;}
.tch-page-nav-btn:focus{outline:0!important;}
.tch-page-nav-btn:focus{outline:0!important;}
.tch-page-nav-btn:focus{color:white;background-color:#19887e;border-color:#177f76;}
.tch-page-nav-btn:hover{color:white;background-color:#19887e;border-color:#177f76;}
.tch-page-nav-btn:active{color:white;background-color:#19887e;border-color:#177f76;}
.tch-page-nav-btn:active:hover,.tch-page-nav-btn:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
.tch-page-nav-btn:active{background-image:none;}
.tch-page-nav-btn[disabled],.tch-page-nav-btn[disabled]:hover,.tch-page-nav-btn[disabled]:focus,.tch-page-nav-btn[disabled]:active{filter:alpha(opacity=65);opacity:0.65;background-color:#1ea69a;border-color:#1ea69a;cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;}
.user-label{margin-right:10px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-content{padding-top:0;background:#fff;display:block;margin-top:-1px;margin-bottom:20px;padding:30px 35px;border-radius:5px;border:1px solid #e7eaed;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);-webkit-transition:0.2s all ease-in;transition:0.2s all ease-in;}
 .student-count{text-transform:capitalize;}
 .student-table th{cursor:pointer;}
 .student-table td{cursor:pointer;padding:7px 13px!important;}
 .student-table td:hover{cursor:pointer;}
 .student-table .users-table-header{padding:7px 13px;}
 .student-table .user-info-wrapper{position:relative;}
 .student-table .primary-owner-badge{background-color:#0f8d82;border-radius:50%;height:15px;margin-left:31px;margin-top:17px;pointer-events:none;position:absolute;text-align:center;width:15px;font-size:10px;}
 .student-table .primary-owner-badge span{color:var(--clinical);position:relative;top:-1px;}
 .student-table .user-name-container{min-width:200px;}
 .student-table .user-label{display:inline-block;line-height:29px;width:calc(100% - 90px);}
 .user-avatar{margin-right:20px;width:25px;}
.space::before{content:'\A0';}
.myteachable-icon-overlay{position:absolute;margin-top:17px;background-image:url("//assets.teachablecdn.com/icons/teachable-icon.png");width:15px;height:15px;background-size:15px;display:block;margin-left:49px;}
}
/*! CSS Used from: Embedded */
*,:after,:before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
._2JQIJ,._2kIOe,._22oLp{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
._22oLp{font-size:11px;line-height:var(--lh-3);text-transform:uppercase;}
._2JQIJ,._22oLp{font-weight:700;}
._2JQIJ{font-size:var(--fs0);line-height:var(--lh0);}
._2kIOe{font-weight:400;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
._22oLp,._2JQIJ,._2kIOe{font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI',     'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans',     'Helvetica Neue', sans-serif;}
._22oLp{font-size:11px;line-height:var(--lh-3);text-transform:uppercase;font-weight:bold;}
._2JQIJ{font-size:var(--fs0);line-height:var(--lh0);font-weight:bold;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);font-weight:400;}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
._2JQIJ,._2kIOe,._22oLp{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
._22oLp{font-size:11px;line-height:var(--lh-3);text-transform:uppercase;}
._2JQIJ,._22oLp{font-weight:700;}
._2JQIJ{font-size:var(--fs0);line-height:var(--lh0);}
._2kIOe{font-weight:400;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);}
/*! CSS Used fontfaces */

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
                    <!---->Liste des étudiants à ce cours
                    <div class="tch-btn-header-icon-2">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="40"viewBox="0 0 172 172"style=" fill:#000000;position: relative;bottom: 8px;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#3498db"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path><path d="M0,172v-172h172v172z" fill="none"></path><path d="M3.44,168.56v-165.12h165.12v165.12z" fill="none"></path></g></g></svg>
                    </div>
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons">
                    <div ng-hide="::(role == 'custom' &amp;&amp; !permissions.can('manage_custom_roles'))" class=""><span class="space"></span>
                        <!----><a id="download-csv-button" ng-if="permissions.can('view_students') &amp;&amp; permissions.can('export_csv_data')" what="email csv button" ng-click="csvProcess()" ng-autodisable="" class="tch-btn-header-secondary fastclickable">
                        Exporter en fichier CSV</a>
                        <!----><span class="space"></span>
                        <!----><span class="space"></span><a id="import-students" what="import students" ng-click="openImportModal()" ng-show="::canImportUsers" class="tch-btn-header-primary fastclickable">Ajouter des étudiants</a>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>

    <!--formulaire de recherche-->
    <div name="searchForm" ng-show="showUsers()" class="ng-form ng-pristine ng-valid ng-valid-minlength">
        <div ng-class="{'custom-filters' : permissions.can('manage_user_search_filters')}" class="filters-wrapper">
            <div role="role" filters="search.filters" update="reloadUsers" user="user">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form name="searchForm" class="form-horizontal ng-pristine ng-valid ng-valid-minlength">
                            <section>
                                <!---->
                                <div ng-repeat="(filterType, filter) in ctrl.filters track by $index" ng-style="{'z-index': 100, 'position': 'relative'}" class="filter-wrapper" style="z-index: 100; position: relative;">
                                    <div what="filter" which="name_or_email_cont" data-type="text" ng-class="{ 'filter-secondary': ctrl.option.attribute != 'name_or_email_cont' }" class="tch-filters" attribute="filterType" filters="ctrl.filters"
                                      option="ctrl.filterForKey(filterType)" filter-options="ctrl.filterOptions" add-field="ctrl.addField" reset-search="ctrl.resetSearch" role="ctrl.role">
                                        <!---->
                                        <!---->
                                        <div ng-if="ctrl.option.attribute == 'name_or_email_cont'" class="filter-add">
                                            <div dropdown="" class="btn-group tch-dropdown-group dropdown"><a dropdown-toggle="" type="button" what="select filter dropdown" ng-click="ctrl.toggleDropDown()" class="dropdown-link _2kIOe"
                                                  aria-haspopup="true" aria-expanded="false"><span>Add Filter</span><span class="space"></span><i class="fa fa-chevron-down"></i></a>
                                                <div class="dropdown-menu-arrow"></div>
                                                <ul role="menu" class="dropdown-menu dropdown-menu-left">
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="not_name_or_email_cont" class="fastclickable">Name or Email Doesn't Contain</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="joined_at_lte" class="fastclickable">Signed Up Before</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="joined_at_gt" class="fastclickable">Signed Up After</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="current_sign_in_at_lte" class="fastclickable">Last Login Before</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="current_sign_in_at_gt" class="fastclickable">Last Login After</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="sign_in_count_gt" class="fastclickable">Login Count Greater Than</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="from_country" class="fastclickable">From Country Code</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="src_cont" class="fastclickable">SRC Contains</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="signed_up_affiliate_code_cont" class="fastclickable">Signed Up With Affiliate Code</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="enrolled_in_specific[]" class="fastclickable">Enrolled In Specific Course(s)</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="not_enrolled_in_specific[]" class="fastclickable">Not Enrolled In Specific Course(s)</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="enrolled_in_after" class="fastclickable">Enrolled In Course(s) After</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="enrolled_in_before" class="fastclickable">Enrolled In Course(s) Before</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="enrolled_in_any" class="fastclickable">Enrolled In Any Course</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="refunded_at_lte" class="fastclickable">Refunded Before</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="refunded_at_gt" class="fastclickable">Refunded After</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="purchased_products[]" class="fastclickable">Purchased Pricing Plan</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="completed_course_in_any[]" class="fastclickable">Completed Course</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="not_completed_course_in_any[]" class="fastclickable">Hasn't Completed Course</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="transactions_gross_gt" class="fastclickable">Purchases Greater Than</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="transactions_gross_lte" class="fastclickable">Purchases Less Than or Equal To</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="transactions_count_gt" class="fastclickable">Payment Count Over</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="transactions_count_lte" class="fastclickable">Payment Count Less Than or Equal To</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="used_coupon_code_cont" class="fastclickable">Used Coupon</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="not_used_coupon_code_cont" class="fastclickable">Not Used Coupon</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="sales_with_affiliate" class="fastclickable">Sales with Affiliate Code</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="is_author" class="fastclickable">Is an Author</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="is_affiliate" class="fastclickable">Is an Affiliate</a></li>
                                                    <!---->
                                                    <li ng-repeat="option in ctrl.availableOptions() | filter: { label: $select.search, visible: true }" class="_2kIOe"><a ng-bind-html="option.label" ng-click="ctrl.addField(option)"
                                                          data-attribute="is_owner" class="fastclickable">Is an Owner</a></li>
                                                    <!---->
                                                </ul>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="filter-ui-select">
                                            <!---->
                                            <div ng-if="ctrl.option.type == 'text'"><input what="input" name="value" type="text" ng-minlength="2" ng-model="filters[option.attribute]" placeholder="Search for a user by name or email"
                                                  ui-event="ctrl.uiEvent" ng-keypress="ctrl.keypressEvent($event)" ng-model-options="ctrl.modelOptions" autocomplete="off" class="form-control input-search-icon _2kIOe ng-touched" style=""></div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <!---->
                                        <!---->
                                        <div ng-if="ctrl.option.attribute == 'name_or_email_cont'" class="filter-reset">
                                            <!---->
                                            <!----><span ng-if="::!ctrl.permissions.can('manage_user_search_filters')">
                                                <!---->
                                                <!----></span>
                                            <!---->
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                                <!---->
                            </section>
                        </form>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
        </div>
    </div>

    <!--tableau-->
      <div class="tch-section-content">
      <!---->
          <ng-include ng-show="showUsers() &amp;&amp; users.length" src="'users/common/table.html'" class="">
              <div class="tch-page-nav">
                  <div ng-show="ctrl.meta.number_of_pages > 1" class="pull-right tch-page-nav ng-hide" meta="meta">
                      <!---->
                      <div class="pull-right"><span class="tch-page-nav-page-number">Page 1 of 1</span><span class="space"></span><button ng-click="ctrl.previousPage()" ng-disabled="ctrl.meta.page == 1"
                            class="tch-page-nav-btn tch-back-button fastclickable" disabled="disabled"><i class="fa fa-angle-left"></i></button><button ng-click="ctrl.nextPage()" ng-disabled="ctrl.meta.number_of_pages == ctrl.meta.page"
                            class="tch-page-nav-btn tch-next-button fastclickable" disabled="disabled"><i class="fa fa-angle-right"></i></button></div>
                  </div>
                  <div class="tch-page-nav-count _2JQIJ">Affichage de<span ng-bind="' ' + (meta.from) + '  -  ' + meta.to + ' '" what="student count"> 1 - 2 </span> of<span what="student count" ng-bind="' ' + (meta.total >= 10000 ? '10,000+' : meta.total)">
                          2</span><span class="student-count"> Etudiants</span><span class="space"></span><span class="space"></span>
                      <!---->
                      <!---->
                  </div>
              </div>
              <div class="tch-table-wrapper">
                  <table class="tch-table student-table">
                      <tbody>
                          <tr>
                              <th what="name column header" class="users-table-header _22oLp"><input what="select all users checkbox" type="checkbox" ng-model="bulk.selectAllOnPage" ng-change="highlightAllUsers()" ng-checked="bulk.selectAllOnPage"
                                    class="pull-left ng-pristine ng-untouched ng-valid ng-empty">
                                  <!---->
                                  <ng-include ng-show="selectedCount > 0" src="'users/common/bulk-actions.html'" class="ng-hide">
                                      <!---->
                                  </ng-include><span class="space"></span><span class="space"></span>
                                  <!----><span ng-if="selectedCount === 0" ng-click="toggleSort('name')" class="fastclickable">Nom</span>
                                  <!----><span class="space"></span><i ng-show="stateParams.sort_key === 'name' &amp;&amp; stateParams.sort_direction === 'ASC' &amp;&amp; selectedCount === 0" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="stateParams.sort_key === 'name' &amp;&amp; stateParams.sort_direction === 'DESC' &amp;&amp; selectedCount === 0" class="fa fa-angle-down ng-hide"></i>
                              </th>
                              <th what="email column header" ng-click="toggleSort('email')" class="users-table-header _22oLp">Email<span class="space"></span><i ng-show="stateParams.sort_key === 'email' &amp;&amp; stateParams.sort_direction === 'ASC'"
                                    class="fa fa-angle-up ng-hide"></i><i ng-show="(stateParams.sort_key === 'email' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th what="unsubscribe code column header" ng-click="toggleSort('unsubscribe_from_marketing_emails')" ng-show="showColumn(title, 'unsubscribe')" class="users-table-header _22oLp">Total achats<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'unsubscribe_from_marketing_emails' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'unsubscribe_from_marketing_emails' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>

                              <th what="joined column header" ng-click="toggleSort('joined_at')" class="users-table-header _22oLp">Offre choisie<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th what="joined column header" ng-click="toggleSort('joined_at')" class="users-table-header _22oLp">A jour ?<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th what="joined column header" ng-click="toggleSort('joined_at')" class="users-table-header _22oLp">Prochaine date de paiement<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th what="joined column header" ng-click="toggleSort('joined_at')" class="users-table-header _22oLp">Reste à payer<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'joined_at' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>

                              <th what="custom role column header" ng-click="toggleSort('custom_roles.name')" ng-show="showColumn(title, 'role')" class="users-table-header _22oLp ng-hide">Role<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'custom_role' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'custom_role' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th what="purchases gross column header" ng-click="toggleSort('transactions_gross')" ng-show="showColumn(title, 'purchases')" class="users-table-header _22oLp">Progression de l'étudiant<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'transactions_gross' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'transactions_gross' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th what="revenue share gross column header" ng-click="toggleSort('revenue_share')" ng-show="showColumn(title, 'revenue share')" class="users-table-header _22oLp ng-hide">Commission<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'revenue_share' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'revenue_share' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th what="affiliate code column header" ng-click="toggleSort('affiliate_code')" ng-show="showColumn(title, 'affiliate code')" class="users-table-header _22oLp ng-hide">Affiliate Code<span class="space"></span><i
                                    ng-show="stateParams.sort_key === 'affiliate_code' &amp;&amp; stateParams.sort_direction === 'ASC'" class="fa fa-angle-up ng-hide"></i><i
                                    ng-show="(stateParams.sort_key === 'affiliate_code' &amp;&amp; stateParams.sort_direction === 'DESC') || stateParams.sort_direction === null" class="fa fa-angle-down ng-hide"></i></th>
                              <th></th>
                          </tr>
                          <!---->
                          @foreach($course->users as $user)
                          @if(count($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)) > 0)
                          <tr what="user" which="davidyfreelance@gmail.com" ng-repeat="user in users" class="border-bottom">
                              <td class="user-name-container"><input what="select user checkbox" type="checkbox" ng-model="user.userSelected" ng-change="updateSelectedUsers(user)" ng-checked="user.userSelected" ng-hide="(user.id === currentUser._id)"
                                    class="pull-left ng-pristine ng-untouched ng-valid ng-empty {{$user->isAdmin() || $user->isOwner() ? 'ng-hide' : ''}}">
                                  <div ng-show="(user.id === currentUser._id)" class="pull-left checkbox-placeholder ng-hide"></div>
                                  <div what="user info wrapper" ui-sref="admin.users.user.information({ id: user.id })" class="user-info-wrapper" href="/admin/users/32429890/information">
                                      <img gravatar-src-once="user.email" align="left" gravatar-size="50"
                                        class="user-avatar img-circle" src="/images/users/default/{{$user->image}}">
                                      <!---->
                                      <!---
                                      <div ng-if="user.is_teachable_account" class="myteachable-icon-overlay">&nbsp;</div>
                                      <div ng-if="parseRole(user).indexOf('Primary Owner') > -1" class="primary-owner-badge"><span>P</span></div>
                                  -->
                                      <!----><span what="name" ng-bind="user.name" ui-sref="admin.users.user.information({ id: user.id })" class="user-label _2kIOe" href="/admin/users/32429890/information">{{$user->name}}</span><br></div>
                              </td>
                              <td ui-sref="admin.users.user.information({ id: user.id })" class="_2kIOe" href="/admin/users/32429890/information"><span what="email" ng-bind="user.email">{{$user->email}}</span></td>
                              @php
                              $total = 0;
                              @endphp
                              @if(count($user->purchases) > 0)
                              @foreach($user->purchases->where('status', 'Validé') as $purchase)
                              @php
                              $total += $purchase->pricing->price;
                              @endphp
                              @endforeach
                              @endif
                              <td ui-sref="admin.users.user.information({ id: user.id })" ng-show="showColumn(title, 'unsubscribe')" class="_2kIOe" href="/admin/users/32429890/information"><span ng-bind="getUnsubscribeFromMarketingEmails(user)">{{$total}}</span>
                              </td>

                              <td ui-sref="admin.users.user.information({ id: user.id })" class="_2kIOe" href="/admin/users/32429890/information"><span am-time-ago="user.created_at">{{$user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type}}</span></td>
                              <td ui-sref="admin.users.user.information({ id: user.id })" class="_2kIOe" href="/admin/users/32429890/information"><span am-time-ago="user.created_at">
                                @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Abonnement" || $user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Plan de paiement")
                                @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->times - count($course->purchases->where('user_id', $user->id)->where('status','Validé')) == 0)
                                Oui
                                @else
                                Non
                                @endif
                                @else
                                Paiement en une seule fois
                                @endif
                                </span>
                              </td>
                              <td ui-sref="admin.users.user.information({ id: user.id })" class="_2kIOe" href="/admin/users/32429890/information"><span am-time-ago="user.created_at">
                                @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Abonnement" || $user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Plan de paiement")
                                @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->times - count($course->purchases->where('user_id', $user->id)->where('status','Validé')) == 0)
                                Aucune
                                @else
                                {{Carbon\Carbon::parse($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->last()->date)->addDays(30)}}
                                @endif
                                @else
                                Aucune
                                @endif
                                </span>
                              </td>
                              <td ui-sref="admin.users.user.information({ id: user.id })" class="_2kIOe" href="/admin/users/32429890/information"><span am-time-ago="user.created_at">
                                @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Abonnement" || $user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Plan de paiement")
                                 @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->times - count($course->purchases->where('user_id', $user->id)->where('status','Validé')) == 0)
                                 Il ne reste plus rien à payer
                                 @else
                                 Il reste à payer
                                 {{$user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->price}} FCFA
                                 <span>
                                     <strong>
                                         {{$user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->times - count($course->purchases->where('user_id', $user->id)->where('status','Validé'))}} fois
                                     </strong>
                                 </span>
                                 @endif
                                 @else
                                 Il ne reste plus rien à payer
                                 @endif
                                </span>
                              </td>
                              <td ui-sref="admin.users.user.information({ id: user.id })" ng-show="showColumn(title, 'purchases')" class="_2kIOe" href="/admin/users/32429890/information"><span
                                    ng-bind="(user.transactions_gross / 100) | currency">
                                    @if($course->type == 'mooc')
                                     {{number_format((count($user->lessons->where('course_id', $course->id)) / count($course->lessons)) * 100)}}%
                                     @else
                                     {{number_format((count($user->deliverables->where('course_id', $course->id)->where('status', '1')) / count($course->projects)) * 100)}}
                                     @endif
                                    </span></td>
                              <td ui-sref="admin.users.user.information({ id: user.id })" class="_2kIOe" href="/admin/users/32429890/information"><span am-time-ago="user.created_at">
                                <div ng-if="product.is_published" class="pull-right">
                                    <a target="_blank" href="{{url('users', $user)}}">
                                        <button what="edit button" ng-click="showEditProductModal(product)" class="tch-btn-content-primary tch-btn-icon fastclickable"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <form action="/unsubscribe" method="post">
                                        {{ csrf_field() }}
                                        <input hidden type="text" name="course_id" value="{{$course->id}}">
                                        <input hidden type="text" name="user_id" value="{{$user->id}}">
                                        <button
                                          id="test-id-unpublish-btn"
                                          class="tch-btn-content-danger tch-btn-icon fastclickable"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                    @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Abonnement" || $user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->type == "Plan de paiement")
                                    @if($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->pricing->times - count($course->purchases->where('user_id', $user->id)->where('status','Validé')) == 0)
                                    Il ne reste plus rien à payer
                                    @else
                                    <a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/students/{{$user->id}}/subscribe">

                                        Ajouter un achat
                                    </a>
                                    @endif
                                    @else
                                    @endif

                                </div>

                                </span>
                              </td>
                          </tr>
                          @endif
                          @endforeach
                          <!---->

                          <!---->
                      </tbody>
                  </table>
              </div>
              <div ng-show="ctrl.meta.number_of_pages > 1" class="tch-page-nav ng-hide" meta="meta">
                  <!---->
                  <div class="pull-right"><span class="tch-page-nav-page-number">Page 1 of 1</span><span class="space"></span><button ng-click="ctrl.previousPage()" ng-disabled="ctrl.meta.page == 1" class="tch-page-nav-btn tch-back-button fastclickable"
                        disabled="disabled"><i class="fa fa-angle-left"></i></button><button ng-click="ctrl.nextPage()" ng-disabled="ctrl.meta.number_of_pages == ctrl.meta.page" class="tch-page-nav-btn tch-next-button fastclickable" disabled="disabled"><i
                            class="fa fa-angle-right"></i></button></div>
              </div>
          </ng-include>
          <!---->
      </div>


    @include('includes.information')
</div>
<script type="text/javascript" src="/js/admin_views/curriculum.js"></script>


@endsection
