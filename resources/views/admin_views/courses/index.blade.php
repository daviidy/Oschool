@extends('layouts.admin_views.menu-school')
@section('title', 'Liste des cours')
@section('content')

<style media="screen">

/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-8126fa277249c04e853f.css ; media=screen */
@media screen{
.clearfix{*zoom:1;}
.clearfix:before,.clearfix:after{display:table;content:"";line-height:0;}
.clearfix:after{clear:both;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-arrows:before{content:"\F047";}
.fa-chevron-down:before{content:"\F078";}
.fa-bars:before{content:"\F0C9";}
.fa-angle-left:before{content:"\F104";}
.fa-angle-right:before{content:"\F105";}
.fa-angle-down:before{content:"\F107";}
.fa-long-arrow-up:before{content:"\F176";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button[disabled]{cursor:default;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
ul{margin-top:0;margin-bottom:11px;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-lg-4,.col-xs-6,.col-md-6,.col-sm-12,.col-lg-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
.col-xs-6{float:left;}
.col-xs-6{width:50%;}
@media (min-width: 768px){
.col-sm-12{float:left;}
.col-sm-12{width:100%;}
}
@media (min-width: 992px){
.col-md-6{float:left;}
.col-md-6{width:50%;}
}
@media (min-width: 1200px){
.col-lg-4,.col-lg-12{float:left;}
.col-lg-4{width:33.33333%;}
.col-lg-12{width:100%;}
}
.form-control{display:block;width:100%;height:41px;padding:6px 12px;font-size:13px;line-height:1.72222;color:#95a5a6;background-color:white;background-image:none;border:1px solid #ccc;border-radius:5px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;-webkit-transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
.dropdown{position:relative;}
.dropdown-toggle:focus{outline:0;}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:13px;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0, 0, 0, .15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0, 0, 0, .175);box-shadow:0 6px 12px rgba(0, 0, 0, .175);}
.dropdown-menu > li > a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.72222;color:#333333;white-space:nowrap;}
.dropdown-menu > li > a:hover,.dropdown-menu > li > a:focus{color:#262626;text-decoration:none;background-color:#f5f5f5;}
.dropdown-menu-left{right:auto;left:0;}
.btn-group{position:relative;display:inline-block;vertical-align:middle;}
.btn-group .dropdown-toggle:active{outline:0;}
.alert{padding:15px;margin-bottom:22px;border:1px solid transparent;border-radius:4px;}
.alert-info{color:#4D90CC;background-color:#4d90cc3b;border-color:#4d90cc3b;}
.clearfix:before,.clearfix:after{display:table;content:" ";}
.clearfix:after{clear:both;}
.pull-right{float:right!important;}
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
.tch-dropdown-group{float:left;}
.tch-dropdown-group .dropdown-link{-webkit-box-shadow:none!important;box-shadow:none!important;}
.tch-dropdown-group a.dropdown-link{padding:0 20px;line-height:48px;display:block;font-weight:600;font-size:12px;cursor:pointer;}
.tch-dropdown-group a.dropdown-link i.fa{font-size:9px;vertical-align:1px;margin-left:3px;}
.dropdown-menu{-webkit-box-shadow:2px 2px 9px 2px rgba(0, 0, 0, .05);box-shadow:2px 2px 9px 2px rgba(0, 0, 0, .05);border:1px solid #dcdcdc;border-radius:5px;position:absolute;display:block;z-index:1000;background:#fff;opacity:0;pointer-events:none;-webkit-transform:scale(0);transform:scale(0);margin-top:10px;-webkit-transition:opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);-webkit-transform-origin:0% 0%;transform-origin:0% 0%;max-height:400px;overflow:auto;overflow-x:hidden;min-width:300px;}
.dropdown-menu li a{padding:8px 14px 8px!important;-webkit-transition:none;transition:none;font-size:12px;color:#80848e;font-weight:500;cursor:pointer;display:inline-block;width:100%;text-transform:none;}
.dropdown-menu li > a:hover,.dropdown-menu li > a:active,.dropdown-menu li > a:focus{border-radius:0px;background:#fbfbfb!important;color:#ff7f45!important;}
.dropdown-menu li:first-child > a,.dropdown-menu li:first-child > a:active,.dropdown-menu li:first-child > a:focus{border-top:0;padding-bottom:7px;padding-top:9px;}
.dropdown-menu li:first-child > a,.dropdown-menu li:last-child > a:hover,.dropdown-menu li:last-child > a:active,.dropdown-menu li:last-child > a:focus{border-bottom:0;padding-bottom:8px;}
.dropdown-menu.dropdown-menu-left{-webkit-transform-origin:0% 0%;transform-origin:0% 0%;}
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
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:"TeachableSans", Helvetica, Arial, sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:44px;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
ul{margin-top:0;margin-bottom:11px;}
.tch-page-header .tch-btn-hamburger{margin-right:9px!important;float:left;margin-top:-6px!important;padding:5px 1px;margin-top:3px;text-align:center;}
.tch-page-header .tch-btn-hamburger .tch-btn-header-icon{padding:0!important;border:0;color:#a9a9a9;}
.tch-page-header .tch-btn-hamburger i{margin-right:0px;}
.tch-page-header .tch-btn-header-icon-2{
    left: 207px;
    position: unset;
    bottom: 74px;
    z-index: 10000;
    float: right;
    margin-left: 95px;
    display: none;
}
.show {
  display: block!important;
  opacity: 1!important;
  pointer-events: visible!important;
  transform: scale(1)!important;
  -webkit-transform: scale(1)!important;
}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .tch-btn-header-icon{padding:10px 15px;}
.input-search-icon{background:url("//assets.teachablecdn.com/admin/assets/images/search-icon.png") 9px 12px no-repeat #fff;padding-left:33px!important;background-size:17px;}
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
.tch-course-list{position:relative;}
.tch-course-listing{padding:20px 17px;float:left;width:33.33%;max-width:500px;}
.tch-course-listing-unpublished{opacity:0.6;}
.tch-course-listing-unpublished .tch-course-listing-wrapper{color:#b3b3b3;}
.tch-course-listing-unpublished .tch-course-listing-title{color:#737577;}
@media screen and (min-width: 1500px){
.tch-course-listing{width:25%;}
}
@media screen and (min-width: 1100px) and (max-width: 1500px){
.tch-course-listing{width:33.33%;}
.tch-course-listing .tch-course-listing-image{max-height:208px;}
}
@media screen and (min-width: 0px) and (max-width: 1100px){
.tch-course-listing{width:50%;}
.tch-course-listing .tch-course-listing-image{max-height:208px;}
}
.tch-course-listing-wrapper{-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);border-radius:2px;background-color:#fff;padding:0px;cursor:pointer;}
.tch-course-listing-wrapper:hover{-webkit-box-shadow:0px 0px 0px 2px #4D90CC;box-shadow:0px 0px 0px 2px #4D90CC;}
.tch-course-listing-image{width:100%;height:192px;background-size:cover;background-position:center;background-repeat:no-repeat;border-top-left-radius:2px;border-top-right-radius:2px;}
.tch-course-listing-title{background-color:#fff;border-top:1px solid #eee;font-size:18px;font-weight:600;padding:20px;color:#20272d;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.tch-course-listing-footer-section{padding:0px 0px 15px 10px;float:left;margin-left:30px;float:left;font-size:18px;color:#728e8d;}
.tch-course-listing-footer-section > *{display:inline-block;}
.tch-course-listing-sales,.tch-course-listing-enrollment{text-align:center;}
.tch-course-listing-sales-total,.tch-course-listing-enrollment-total{font-size:19px;margin-right:3px;}
.tch-course-listing-sales-label,.tch-course-listing-enrollment-label{font-size:16px;text-transform:lowercase;vertical-align:0px;opacity:0.7;}
.tch-filters{padding-top:0;background:#ffffff;position:relative;border-radius:5px;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);border:1px solid #e7eaed;display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:10px;z-index:100;}
.tch-filters a{color:#4D90CC;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.tch-filters a:hover,.tch-filters a:active,.tch-filters a:focus{color:#4D90CC;}
.tch-filters a.dropdown-link{padding:0 20px;line-height:48px;display:block;font-weight:600;font-size:13px;cursor:pointer;color:#4D90CC;}
.tch-filters a.dropdown-link:hover{color:#4D90CC;}
.tch-filters a.dropdown-link i.fa{font-size:9px;vertical-align:1px;margin-left:3px;}
.tch-filters .filter-add{border-right:1px solid #e7eaed;}
.tch-filters .filter-search{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;position:relative;}
.tch-filters .filter-search .form-control{border-radius:5px;border:none!important;min-height:48px;background-position:14px 15px;padding-left:38px!important;}
.tch-filters .filter-search .form-control:focus{border-left:none!important;border-top:none!important;border-bottom:none!important;border-right:none!important;}
.tch-filters .filter-sort-by--label{line-height:48px;padding:0px 0px 0px 20px;font-size:13px;border-left:1px solid rgba(230, 216, 201, .87);font-weight:500;color:#a09688;}
.tch-filters .filter-sort-by--dropdown{float:none;}
.tch-filters .filter-sort-by--dropdown .dropdown-link{padding:0 20px 0 8px!important;}
.tch-filters .filter-sort-direction,.tch-filters .filter-reorder-mode{padding:14px 20px 10px 20px;border-left:1px solid rgba(230, 216, 201, .87);font-weight:600;font-size:12px;}
.tch-filters .filter-sort-direction i,.tch-filters .filter-reorder-mode i{font-size:11px;margin-right:5px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box{display:none;padding-top:0;background:#fff;position:relative;z-index:5;border-radius:2px;-webkit-box-shadow:1px 2px 3px 0px #e6e9ec;box-shadow:1px 2px 3px 0px #e6e9ec;margin-bottom:20px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title{color:#20272d;font-size:16px;letter-spacing:0.57px;font-weight:600;line-height:20px;overflow:hidden;opacity:0;-webkit-transition-duration:0.1s;transition-duration:0.1s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);-webkit-transform:translateY(-10px);transform:translateY(-10px);line-height:24px;max-height:0px;float:left;margin:20px 15px 14px 25px;position:absolute;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title i{font-size:15px;vertical-align:0px;margin-right:8px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons{overflow:hidden;opacity:0;max-height:0px;position:absolute;top:10px;right:48px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-btn-header-primary{-webkit-transition:none!important;transition:none!important;}
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
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}


</style>

<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
    <div what="page header" class="tch-section-nav tch-page-header" icon="icon icon-book2" text="Courses (2)">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger"><button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable"><i class="fa fa-bars"></i></button></div>
                    <!---->
                    <!---->Cours (<span id="total_records"></span>)

                    <div class="tch-btn-header-icon-2">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="40"viewBox="0 0 172 172"style=" fill:#000000;position: relative;bottom: 8px;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#3498db"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path><path d="M0,172v-172h172v172z" fill="none"></path><path d="M3.44,168.56v-165.12h165.12v165.12z" fill="none"></path></g></g></svg>
                    </div>
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons"><span class="space"></span><a what="new course header btn" ui-sref="admin.courses.new" class="tch-btn-header-primary"
                      href="/schoolAdmin/{{$school->id}}/courses/create">Nouveau cours</a></div>
            </div>
            <!---->
        </div>
    </div>
    <!---->
    <!---->
    <div ng-if="hasOne">
        <div options="options.filters" search="options.search" sort-keys="options.sortKeys" per-page="24" enable-reordering="permissions.can('reorder_courses')" default-sort-direction="ASC">
            <div class="tch-filters">
                <!--
                <div class="filter-add"><a href="#" what="filter-add" popover-placement="bottom" popover-animation="false" popover-template="'common/filter-section/add-filter-popover.html'" class="dropdown-link"><span>Ajouter un filtre</span><span
                          class="space"></span><i class="fa fa-chevron-down"></i></a>
                </div>
            -->
                <!---->
                <div ng-if="ctrl.search" class="filter-search">
                    <!----><input id="search" type="text" placeholder="Rechercher des cours par nom" class="form-control input-search-icon">
                    <!---->
                    <!---->
                    <!---->
                </div>
                <!----
                <div class="filter-sort-by--label"><span>Trier par</span></div>
                <div dropdown="" data-test="sort-by-drop-down" onclick="show3()" class="btn-group tch-dropdown-group filter-sort-by--dropdown dropdown"><a dropdown-toggle="" type="button" class="dropdown-link dropdown-toggle" aria-haspopup="true"
                      aria-expanded="false"><span ng-bind="ctrl.currentSortKey.label || ctrl.defaultSortKey.label">Commande de répertoire</span><span class="space"></span><i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu-arrow"></div>
                    <ul role="menu" class="dropdown-menu dropdown-menu-left" id="drop_2">
                        <li ng-repeat="sortKey in ctrl.sortKeys"><a href="#" ng-click="ctrl.setSortKey(sortKey)" data-test="sort-by-drop-down-item" ng-bind="sortKey.label" class="fastclickable">Commande de répertoire</a></li>
                        <li ng-repeat="sortKey in ctrl.sortKeys"><a href="#" ng-click="ctrl.setSortKey(sortKey)" data-test="sort-by-drop-down-item" ng-bind="sortKey.label" class="fastclickable">Nom</a></li>
                        <li ng-repeat="sortKey in ctrl.sortKeys"><a href="#" ng-click="ctrl.setSortKey(sortKey)" data-test="sort-by-drop-down-item" ng-bind="sortKey.label" class="fastclickable">Date de création</a></li>
                    </ul>
                </div>
                <a href="#" ng-click="ctrl.toggleSortDirection()" class="filter-sort-direction fastclickable"><i
                      ng-class="{ 'fa fa-long-arrow-up': !ctrl.currentSortDirection || ctrl.currentSortDirection == 'ASC', 'fa fa-long-arrow-down': ctrl.currentSortDirection == 'DESC' }" class="fa fa-long-arrow-up"></i><span ng-bind="ctrl.currentSortDirection"
                      what="ASC-DESC-btn">ASC</span>
                  </a>
                <a ng-if="ctrl.enableReordering" ng-click="ctrl.toggleReorderMode()" href="#" ng-class="{ selected: ctrl.reorderMode }" tooltip="Enable reordering" tooltip-placement="bottom" tooltip-trigger="mouseenter" what="enable-disable-reordering"
                  class="filter-reorder-mode fastclickable"><i class="fa fa-arrows"></i>
              </a>
          -->
                </div>
                </div>
        <script type="text/javascript" src="/js/admin_views/menu.js"></script>

        <!---->
        <div ng-if="courses.length > 0">
            <div ui-sortable-save="courses" sortable-options="sortableOptions" list="filteredCourses" course-stats="courseStats" enable-reordering="enableReordering">
                <!---->
                <!---->
                <div class="row tch-course-list">
                    <!---->
                    @foreach($school->courses as $course)
                    <div class="tch-course-listing col-lg-4 col-md-6 col-xs-6 ui-sortable-handle clearfix">
                        <a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/information">
                            <div class="tch-course-listing-wrapper">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div style="background-image: url(/images/courses/logos/{{$course->logo}});background-size: 100%;" class="tch-course-listing-image"></div>
                                        <div what="course name" ng-bind="::course.name" class="tch-course-listing-title">{{$course->name}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tch-course-listing-sales tch-course-listing-footer-section">FCFA<div ng-bind="(courseStats[course.id].total_sales > 0 ? (courseStats[course.id].total_sales/ 100) : 0)" what="course-total-sales"
                                          class="tch-course-listing-sales-total">0</div>
                                        <div class="tch-course-listing-sales-label">Ventes</div>
                                    </div>
                                    <div class="tch-course-listing-enrollment tch-course-listing-footer-section">
                                        <div ng-bind="::courseStats[course.id].enrolled" what="course-total-enrolled" class="tch-course-listing-enrollment-total">{{count($course->users)}}</div>
                                        <div class="tch-course-listing-enrollment-label">Inscrit(e)(s)</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                        @endforeach
                    <!---->
                    <div what="course" which="Deviens développeur web en partant de zéro" ng-repeat="course in list" ng-class="::{ 'tch-course-listing-unpublished': course.is_published == false }"
                      class="tch-course-listing col-lg-4 col-md-6 col-xs-6 ui-sortable-handle clearfix tch-course-listing-unpublished"><a ui-sref="admin.courses.course.information(::{id: course.id})" href="/admin/courses/640695/information">
                            <div class="tch-course-listing-wrapper" what="course-card" course="course" course-stats="courseStats">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div style="background-image: url(/admin/assets/images/icons/icon-course.svg);background-size: 40%;" class="tch-course-listing-image"></div>
                                        <div what="course name" ng-bind="::course.name" class="tch-course-listing-title">Deviens développeur web en partant de zéro</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tch-course-listing-sales tch-course-listing-footer-section">Fcfa<div ng-bind="(courseStats[course.id].total_sales > 0 ? (courseStats[course.id].total_sales/ 100) : 0)" what="course-total-sales"
                                          class="tch-course-listing-sales-total">0</div>
                                        <div class="tch-course-listing-sales-label">Ventes</div>
                                    </div>
                                    <div class="tch-course-listing-enrollment tch-course-listing-footer-section">
                                        <div ng-bind="::courseStats[course.id].enrolled" what="course-total-enrolled" class="tch-course-listing-enrollment-total">0</div>
                                        <div class="tch-course-listing-enrollment-label">Inscrit</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <!---->
                </div>
                <!---->
            </div><br>
            <div ng-show="ctrl.meta.number_of_pages > 1" class="col-sm-12 tch-page-nav ng-hide" meta="meta">
                <!---->
                <div class="pull-right"><span class="tch-page-nav-page-number">Page 1 of 1</span><span class="space"></span><button ng-click="ctrl.previousPage()" ng-disabled="ctrl.meta.page == 1"
                      class="tch-page-nav-btn tch-back-button fastclickable" disabled="disabled"><i class="fa fa-angle-left"></i></button><button ng-click="ctrl.nextPage()" ng-disabled="ctrl.meta.number_of_pages == ctrl.meta.page"
                      class="tch-page-nav-btn tch-next-button fastclickable" disabled="disabled"><i class="fa fa-angle-right"></i></button></div>
            </div><br><br>
        </div>
        <!---->
        <!---->
    </div>
    <!---->
    <!---->
    @include('includes.information')
</div>



<script>
$(document).ready(function(){

 fetch_customer_data('');

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"/ajax_course_search/{{$school->id}}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('.tch-course-list').html(data.table_data);
    $('#total_records').text(data.total_data);
    },
    error: function (xhr, msg) {
      console.log(msg + '\n' + xhr.responseText);
  }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>


@endsection
