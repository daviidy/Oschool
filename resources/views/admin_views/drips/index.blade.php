@extends('layouts.admin_views.menu-school-icon')
@section('title', 'Planification du contenu')
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
a{color:#4d90cc;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#6aace6;text-decoration:none;}
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

<!--pour la liste-->
<style media="screen">
/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-1b0d91e1718d5ff771ed.css ; media=screen */
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner{border:0;padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-angle-left:before{content:"\F104";}
.fa-angle-right:before{content:"\F105";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-sm-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-12{float:left;}
.col-sm-12{width:100%;}
}
.pull-right{float:right!important;}
[disabled]{cursor:default!important;pointer-events:none;}
.tch-page-nav{margin-bottom:30px;height:30px;}
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
.tch-course-list{position:relative;}
.course-list__header{display:grid;grid-template-columns:152px 4fr repeat(2, 1fr);border-bottom:1px solid var(--subtle);}
.course-list__header-item{padding:4px 16px;}
.tch-course-listing{margin:0 16px;border-bottom:1px solid var(--subtle);}
@media screen and (min-width: 1100px) and (max-width: 1500px){
.tch-course-listing .tch-course-listing-image{max-height:208px;}
}
@media screen and (min-width: 0px) and (max-width: 1100px){
.tch-course-listing .tch-course-listing-image{max-height:208px;}
}
.tch-course-listing-wrapper{display:grid;grid-template-columns:152px 4fr repeat(2, 1fr);-webkit-box-align:center;-ms-flex-align:center;align-items:center;background-color:var(--clinical);padding:0px;cursor:pointer;}
.tch-course-listing-wrapper:hover{background-color:var(--cloud);}
.tch-course-listing-image{width:120px;height:70px;background-position:center;background-size:cover;border-radius:5px;margin:16px;border:1px solid rgba(0, 0, 0, .04);}
.tch-course-listing-title{padding:16px;color:var(--squid-ink);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.tch-course-listing-sales-total{margin-right:3px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-box-wrapper{background:#fff;padding:20px;border-radius:5px;border:1px solid #eeeeee;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);}
.space::before{content:'\A0';}
}
/*! CSS Used from: Embedded */
*,:after,:before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
._2kIOe,._22oLp{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
._22oLp{font-size:var(--fs-3);line-height:var(--lh-3);text-transform:uppercase;}
._22oLp{font-weight:600;}
._2kIOe{font-weight:400;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
._22oLp,._2kIOe{font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI',     'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans',     'Helvetica Neue', sans-serif;}
._22oLp{font-size:var(--fs-3);line-height:var(--lh-3);text-transform:uppercase;font-weight:600;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);font-weight:400;}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
._2kIOe,._22oLp{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
._22oLp{font-size:var(--fs-3);line-height:var(--lh-3);text-transform:uppercase;}
._22oLp{font-weight:600;}
._2kIOe{font-weight:400;}
._2kIOe{font-size:var(--fs-2);line-height:var(--lh-2);}

.choices span:hover {
    text-decoration: underline;
  text-decoration-color: red;
}
.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px 0;
	overflow: hidden;
	width: 100%;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
  line-height: normal;
  font-size: 20px;
}

.course-preview {
	background-color: #4d90cc;
	color: #fff;
	padding: 30px;
	max-width: 250px;
  display: none;
}


.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}


.btn {
	background-color: #4d90cc;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: relative;
	bottom: -15px;
	right: 30px;
  float: right;
	letter-spacing: 1px;
  border: 2px solid #fff;
}
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
                    <!---->Planification du contenu
                    <div class="tch-btn-header-icon-2">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="40"viewBox="0 0 172 172"style=" fill:#000000;position: relative;bottom: 8px;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#3498db"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path><path d="M0,172v-172h172v172z" fill="none"></path><path d="M3.44,168.56v-165.12h165.12v165.12z" fill="none"></path></g></g></svg>
                    </div>
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons"></div>
            </div>
            <!---->
        </div>
    </div>
    @include('includes.status')
    <!--CARD PLAN PLANIFICATION COURSE-->
   <div class="courses-container">
       <div class="course">

           <div class="course-info">
               <h2>Mettez à niveau votre plan pour pouvoir planifier vos cours.</h2>
               <button class="btn">
                   <a  style="color: #fff;" target="_blank" href="/corporate/#price_offer">
                   Mise à niveau
                   </a>
               </button>
           </div>
       </div>
   </div>
   <!--END CARD PLAN PLANIFICATION COURSE-->
    <div ng-if="courses.length > 0">
    <div class="tch-box-wrapper" ui-sortable-save="courses" sortable-options="sortableOptions" list="filteredCourses" course-stats="courseStats" enable-reordering="enableReordering">
        <div class="course-list__header">
            <span class="course-list__header-item"></span>
            <span class="course-list__header-item _22oLp">Sections</span>
            <span class="course-list__header-item _22oLp"></span>
            <span
              class="course-list__header-item _22oLp"></span>
        </div>
        <!---->
        <!---->
        @if(count($course->sections) > 0)
        @foreach($course->sections->sortBy('position') as $section)
        <div ng-if="!enableReordering" ng-show="list.length > 0" class="row tch-course-list">
            <!---->
            <div what="course" which="Techniques de vente" ng-repeat="course in list" ng-class="::{ 'tch-course-listing-unpublished': course.is_published == false }" class="tch-course-listing">

                    <div class="tch-course-listing-wrapper" what="course-card" course="course" course-stats="courseStats">
                        <div style="background-image: url(/images/courses/logos/{{$course->logo}})" class="tch-course-listing-image"></div>
                        <div what="course name" ng-bind="::course.name" class="tch-course-listing-title _2kIOe">
                            {{$section->title}} <br>
                            @if(!$section->drip)
                            <p class="choices" style="color: black; cursor: default;">Publier <span id="{{$section->id}}" class="show-date-section" style="cursor: pointer;"> <strong>à une date spécifique</strong> </span> ou <span id="{{$section->id}}" class="show-days-section" style="cursor: pointer;"> <strong>à un nombre de jours après l'inscription</strong> </span>  </p>
                            @elseif($section->drip->date !== null)
                            <p style="color: black; cursor: default;">Cette section sera publiée le<span> <strong>{{Carbon\Carbon::parse($section->drip->date)->format('d-m-Y')}}</strong> </span>  </p>
                            @elseif($section->drip->days !== null)
                            <p style="color: black; cursor: default;">Cette section sera publiée<span> <strong>{{$section->drip->days}}</strong> jours après inscription au cours </span>  </p>
                            @endif
                        </div>
                        <div class="date-days tch-course-listing-title _2kIOe">

                        </div>
                        @if($section->drip)
                        <div class="tch-course-listing-title _2kIOe">
                            <form action="{{ route('drips.destroy', $section->drip) }}" method="post" style="margin-bottom: inherit;">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                            <!----><button style="min-width: 100px;" class="tch-btn-header-primary fastclickable">Supprimer</button>
                            </form>
                            @if($section->drip->date !== null)
                            <span id="{{$section->id}}" class="edit-date-section" style="cursor: pointer;color: blue;">Modifier</span>
                            @elseif($section->drip->days !== null)
                            <span id="{{$section->id}}" class="edit-days-section" style="cursor: pointer;color: blue;">Modifier</span>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            <!---->
        </div>
        <!---->
        @endforeach
        @endif
    </div><br>
    {{--
    <div ng-show="ctrl.meta.number_of_pages > 1" class="col-sm-12 tch-page-nav ng-hide" meta="meta">
        <!---->
        <div class="pull-right"> <span class="tch-page-nav-page-number">Page 1 of 1</span><span class="space"></span> <button ng-click="ctrl.previousPage()" ng-disabled="ctrl.meta.page == 1" class="tch-page-nav-btn tch-back-button fastclickable"
              disabled="disabled"> <i class="fa fa-angle-left"></i> </button> <button ng-click="ctrl.nextPage()" ng-disabled="ctrl.meta.number_of_pages == ctrl.meta.page" class="tch-page-nav-btn tch-next-button fastclickable" disabled="disabled"> <i
                  class="fa fa-angle-right"></i> </button> </div>
    </div><br><br>
--}}
</div>


    @include('includes.information')
</div>
<script type="text/javascript" src="/js/admin_views/curriculum.js"></script>


@endsection
