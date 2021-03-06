@extends('layouts.admin_views.menu-school-icon')
@section('content')

<style media="screen">

/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-79e90a8f89fd85fce9ba.css ; media=screen */
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
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label{border-bottom-left-radius:3px;border-top-left-radius:3px;}
.editable-wrap{display:inline-block;white-space:nowrap;margin:0;}
.editable-wrap .editable-controls,.editable-wrap .editable-error{margin-bottom:0;}
.editable-wrap .editable-controls>input{margin-bottom:0;}
.editable-wrap .editable-input{display:inline-block;}
.editable-buttons{display:inline-block;vertical-align:top;}
.editable-buttons button{margin-left:5px;}
.editable-input.editable-has-buttons{width:auto;}
.editable-hide{display:none!important;}
.editable-click,a.editable-click{text-decoration:none;color:#428bca;border-bottom:dashed 1px #428bca;}
.editable-click:hover,a.editable-click:hover{text-decoration:none;color:#2a6496;border-bottom-color:#2a6496;}
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
.fa-trash-o:before{content:"\F014";}
.fa-align-justify:before{content:"\F039";}
.fa-pencil:before{content:"\F040";}
.fa-edit:before{content:"\F044";}
.fa-comments:before{content:"\F086";}
.fa-bars:before{content:"\F0C9";}
.fa-angle-left:before{content:"\F104";}
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
p{orphans:3;widows:3;}
}
.glyphicon{position:relative;top:1px;display:inline-block;font-family:"Glyphicons Halflings";font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.glyphicon-ok:before{content:"\E013";}
.glyphicon-remove:before{content:"\E014";}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
p{margin:0 0 11px;}
ul{margin-top:0;margin-bottom:11px;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-md-2,.col-md-3,.col-md-6,.col-md-7{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-md-2,.col-md-3,.col-md-6,.col-md-7{float:left;}
.col-md-2{width:16.66667%;}
.col-md-3{width:25%;}
.col-md-6{width:50%;}
.col-md-7{width:58.33333%;}
}
input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal;}
input[type="checkbox"]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.form-control{display:block;width:100%;height:41px;padding:6px 12px;font-size:13px;line-height:1.72222;color:#95a5a6;background-color:white;background-image:none;border:1px solid #ccc;border-radius:5px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;-webkit-transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-group{margin-bottom:15px;}
.input-sm{height:35px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px;}
.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#556878;}
@media (min-width: 768px){
.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle;}
.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle;}
}
.btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;padding:6px 12px;font-size:13px;line-height:1.72222;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.btn:focus,.btn:active:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:white;text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);}
.btn-default{color:white;background-color:#9a9ea2;border-color:#ccc;}
.btn-default:focus{color:white;background-color:#7f858a;border-color:#8c8c8c;}
.btn-default:hover{color:white;background-color:#7f858a;border-color:#adadad;}
.btn-default:active{color:white;background-color:#7f858a;background-image:none;border-color:#adadad;}
.btn-default:active:hover,.btn-default:active:focus{color:white;background-color:#6e7377;border-color:#8c8c8c;}
.btn-primary{color:#fff;background-color:#20272d;border-color:#151a1e;}
.btn-primary:focus{color:#fff;background-color:#0b0d0f;border-color:black;}
.btn-primary:hover{color:#fff;background-color:#0b0d0f;border-color:black;}
.btn-primary:active{color:#fff;background-color:#0b0d0f;background-image:none;border-color:black;}
.btn-primary:active:hover,.btn-primary:active:focus{color:#fff;background-color:black;border-color:black;}
.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px;}
.btn-group{position:relative;display:inline-block;vertical-align:middle;}
.nav{padding-left:0;margin-bottom:0;list-style:none;}
.nav:before,.nav:after{display:table;content:" ";}
.nav:after{clear:both;}
.nav > li{position:relative;display:block;}
.nav > li > a{position:relative;display:block;padding:10px 15px;}
.nav > li > a:hover,.nav > li > a:focus{text-decoration:none;background-color:#eeeeee;}
.nav-tabs{border-bottom:1px solid #dedfe0;}
.nav-tabs > li{float:left;margin-bottom:-1px;}
.nav-tabs > li > a{margin-right:2px;line-height:1.72222;border:1px solid transparent;border-radius:4px 4px 0 0;}
.nav-tabs > li > a:hover{border-color:#eeeeee #eeeeee #dedfe0;}
.nav-tabs > li.active > a,.nav-tabs > li.active > a:hover,.nav-tabs > li.active > a:focus{color:#95a5a6;cursor:default;background-color:#f5f6f7;border:1px solid #ddd;border-bottom-color:transparent;}
.tab-content > .tab-pane{display:none;}
.tab-content > .active{display:block;}
.pull-right{float:right!important;}
.tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
.tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
.tch-btn-header-primary:active{background-image:none;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-secondary{min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;color:white;background-color:#fff;border:1px solid #a9a9a9;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#e1e3e4;color:#0f8d82;}
.tch-btn-header-secondary:focus{color:white;background-color:#ededed;border-color:#e8e8e8;}
.tch-btn-header-secondary:hover{color:white;background-color:#ededed;border-color:#929292;}
.tch-btn-header-secondary:active{color:white;background-color:#ededed;border-color:#929292;}
.tch-btn-header-secondary:active:hover,.tch-btn-header-secondary:active:focus{color:white;background-color:#dedede;border-color:#838383;}
.tch-btn-header-secondary:active{background-image:none;}
.tch-btn-header-secondary:active,.tch-btn-header-secondary:hover,.tch-btn-header-secondary:focus{background:#fff;border-color:#1ea69a;color:#1ea69a;}
.tch-btn-header-secondary:active:hover,.tch-btn-header-secondary:active:focus,.tch-btn-header-secondary:hover:hover,.tch-btn-header-secondary:hover:focus,.tch-btn-header-secondary:focus:hover,.tch-btn-header-secondary:focus:focus{background:#fff;border-color:#1ea69a;color:#1ea69a;}
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
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#1ea69a;border:1px solid #1ea69a;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:hover{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active:hover,.tch-btn-content-primary:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
.tch-btn-content-primary:active{background-image:none;}
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
.tch-btn-icon-fa{background:none;border:0px;font-size:16px;vertical-align:-1px;line-height:20px;}
.tch-btn-icon-fa.icon-gray{color:#ccc;}
.tch-btn-icon-fa.icon-gray:hover{color:#b3b3b3;}
.btn-group{vertical-align:0px;}
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:"TeachableSans", Helvetica, Arial, sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:44px;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
.help-block{color:inherit;padding:0px 0px;font-size:13px;-webkit-box-shadow:none;box-shadow:none;display:none;}
.form-group{position:relative;margin-bottom:28px;}
.nav-tabs{width:100%;z-index:1030;min-width:700px;margin:0;min-width:697px;min-width:697px;border-bottom:0;}
.nav-tabs > li{margin-top:0px;position:relative;}
.nav-tabs > li.active{z-index:2;}
.nav-tabs > li.active > a,.nav-tabs > li.active > a:hover,.nav-tabs > li.active > a:focus{border-radius:0;font-weight:bold;font-size:13px;padding:15px 25px;color:#809196;border-bottom:0;border-top:1px solid #ededea;border-right:1px solid #ededea;border-left:1px solid #ededea;background:#fff;-webkit-box-shadow:1px 0px 0px 0px rgba(0, 0, 0, .04);box-shadow:1px 0px 0px 0px rgba(0, 0, 0, .04);}
.nav-tabs > li > a{border-width:2px;font-size:13px;padding:14px 24px;font-size:13px;color:#73777b;border-radius:6px 6px 0 0;-webkit-transition:none;transition:none;}
.nav-tabs > li > a:hover,.nav-tabs > li > a:focus{background-color:transparent;border-color:transparent;border-bottom-color:transparent;outline:none;color:#ff7f45;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
ul{margin-top:0;margin-bottom:11px;}
.tch-page-header .tch-btn-hamburger{margin-right:9px!important;float:left;margin-top:-6px!important;padding:5px 1px;margin-top:3px;text-align:center;}
.tch-page-header .tch-btn-hamburger .tch-btn-header-icon{padding:0!important;border:0;color:#a9a9a9;}
.tch-page-header .tch-btn-hamburger i{margin-right:0px;}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .editable-click,.tch-page-header a.editable-click{color:#2b3636;border-bottom:dashed 1px #d8d8d8;font-size:24px;vertical-align:3px;}
.tch-page-header .editable-controls{padding-bottom:4px;}
.tch-page-header .editable-controls input{width:300px;height:44px;font-size:19px;}
.tch-page-header .tch-btn-header-icon{padding:10px 15px;}
.nav > li > a:focus{background:none;outline:0;}
.nav-tabs > li > a{line-height:1.428571429;}
.tch-editor-content{margin-top:50px;}
.tch-editor-content-block{padding:20px;cursor:move;margin-left:0;margin-right:0;margin-top:-1px;font-size:16px;background-color:#fff;-webkit-box-shadow:1px 1px 0px 0px rgba(0, 0, 0, .05);box-shadow:1px 1px 0px 0px rgba(0, 0, 0, .05);border-radius:3px;margin-bottom:6px;font-size:15px;}
.tch-editor-content-block:hover{-webkit-box-shadow:inset 0px -3px 0px 0px #ccd2d7!important;box-shadow:inset 0px -3px 0px 0px #ccd2d7!important;background:#fdfdfd;}
.tch-editor-content-block p{font-size:14px;}
.tch-editor-content-block .file-type{font-weight:500;color:#809196;font-size:13px;}
.tch-editor-content-block .file-type i.faded{margin-right:5px;}
.tch-editor-content-block .tch-btn-icon{vertical-align:top;}
.tch-drop-wrapper{margin-right:-15px;margin-left:-15px;text-align:center;bottom:0px;width:100%;z-index:500;margin:0!important;border:2px dashed #eee;}
.tch-drop-wrapper:before,.tch-drop-wrapper:after{display:table;content:" ";}
.tch-drop-wrapper:after{clear:both;}
.tch-drop-wrapper .drop-inner{display:block;margin-left:-67px;border:0;padding:0px;padding-top:63px!important;padding-bottom:61px;border-radius:11px;font-size:15px;width:100%;color:#ccc;border-radius:5px;}
.tch-drop-wrapper .drop-button{position:absolute;margin-top:-90px;margin-left:96px;}
.nav{cursor:pointer;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-box-wrapper{background:#fff;padding:20px;border-radius:5px;border:1px solid #eeeeee;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box{display:none;padding-top:0;background:#fff;position:relative;z-index:5;border-radius:2px;-webkit-box-shadow:1px 2px 3px 0px #e6e9ec;box-shadow:1px 2px 3px 0px #e6e9ec;margin-bottom:20px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title{color:#20272d;font-size:16px;letter-spacing:0.57px;font-weight:600;line-height:20px;overflow:hidden;opacity:0;-webkit-transition-duration:0.1s;transition-duration:0.1s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);-webkit-transform:translateY(-10px);transform:translateY(-10px);line-height:24px;max-height:0px;float:left;margin:20px 15px 14px 25px;position:absolute;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-title i{font-size:15px;vertical-align:0px;margin-right:8px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-back{-ms-flex-negative:0;flex-shrink:0;font-size:22px;color:#a9a9a9;cursor:pointer;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-back i{font-size:21px;vertical-align:2px;margin-right:8px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-back:hover{color:#809196;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons{overflow:hidden;opacity:0;max-height:0px;position:absolute;top:10px;right:48px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons.no-title{left:51px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-btn-header-primary,.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-btn-header-secondary{-webkit-transition:none!important;transition:none!important;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title{display:-webkit-box;display:-ms-flexbox;display:flex;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > *{overflow:hidden;height:50px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .title{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;height:50px;text-overflow:ellipsis;display:inline-block;overflow:hidden;white-space:nowrap;width:100%;margin-top:7px;color:#20272d;font-size:16px;letter-spacing:0.57px;font-weight:600;line-height:20px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .title .editable-text{max-width:calc(100% - 33px);display:block;overflow:auto;text-overflow:ellipsis;float:left;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .title .tch-btn-icon-fa{padding:0px 5px!important;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .title .tch-btn-icon-fa:focus{outline:0;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .editable-text{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .editable-text > .editable-controls{display:block;margin-right:120px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .editable-text > .editable-controls > .editable-input{width:100%;margin:1px 0 0 0;height:34px;font-size:13px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .editable-text > .editable-controls .editable-buttons button{margin-top:2px!important;height:32px;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .editable-text > .editable-controls .editable-buttons button.btn-default{background-color:#fff;border:2px solid #e0e0e0;color:#809196;}
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .buttons{-ms-flex-negative:0;flex-shrink:0;}
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
.editable-controls{height:42px;margin-right:7px;}
.editable-controls .editable-buttons{z-index:1000;position:relative;}
.editable-controls .editable-buttons button{margin-top:2px!important;height:36px;border-radius:30px;}
.editable-controls .editable-input{height:37px;width:400px;}
.editable-controls .editable-buttons .btn-primary{background-color:#1ea69a;border-color:#1ea69a;}
.editable-controls .editable-buttons .btn-default{border-width:2px;background:#fff;color:#809196;border-color:2px solid #e0e0e0;}
.editable-controls .editable-buttons .btn:focus{outline:0;}
.editable-controls.form-group{padding-left:0px;}
.edit-in-place{border:none!important;cursor:text;}
.bootstrap-switch{border-radius:20px;}
.bootstrap-switch:focus{outline:none;}
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
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label{border-bottom-left-radius:20px;border-top-left-radius:20px;}
.add-lecture-attachment-nav-tabs{margin-top:-20px;display:block;}
.tch-editor-content-block .attachment-html{cursor:text;max-height:200px;overflow:hidden;}
.add-lecture-attachment-nav-tabs .nav-tabs{position:inherit!important;margin-top:20px;}
.add-lecture-attachment-wrapper{margin-top:-1px;padding:50px;display:block;background:#fff;}
 .ui-sortable-handle{cursor:move;}
.space::before{content:'\A0';}
.unsortable{cursor:default!important;}
.not-sortable{cursor:default!important;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
.btn{font-family:'TeachableSans', sans-serif;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}

.add-btn-wrapper {
    padding-top: 10px;
    padding-bottom: 40px;
    max-width: 900px;
    margin: auto;
}


.tch-btn-header-primary-block {
    color: white;
    background-color: #ff7f45;
    border: 1px solid #ff7f45;
    padding: 10px 16px !important;
    font-size: 17px;
    line-height: 1.33333;
    border-radius: 3px;
    font-weight: 600 !important;
    display: inline-block;
    cursor: pointer;
    display: block;
    width: 100%;
    padding: 8px 20px 7px 20px !important;
    font-size: 12px;
    line-height: 1.72222;
    border-radius: 3px;
    font-weight: 600 !important;
    display: inline-block;
    cursor: pointer;
    font-weight: 600;
    border-radius: 30px !important;
    text-align: center;
    max-width: 100%;
    line-height: 30px;
}
.pull-right {
    float: right !important;
}


/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-79e90a8f89fd85fce9ba.css ; media=screen */
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button,input[type="submit"]{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-remove:before{content:"\F00D";}
.fa-question-circle:before{content:"\F059";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button,input[type="submit"]{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
p{margin:0 0 11px;}
.small{font-size:92%;}
ul{margin-top:0;margin-bottom:11px;}
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
.form-control{display:block;width:100%;height:41px;padding:6px 12px;font-size:13px;line-height:1.72222;color:#95a5a6;background-color:white;background-image:none;border:1px solid #ccc;border-radius:5px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;-webkit-transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;transition:border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
.checkbox{position:relative;display:block;margin-top:10px;margin-bottom:10px;}
.checkbox label{min-height:22px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer;}
.checkbox input[type="checkbox"]{position:absolute;margin-top:4px \9;margin-left:-20px;}
.input-group{position:relative;display:table;border-collapse:separate;}
.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0;}
.input-group .form-control:focus{z-index:3;}
.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell;}
.input-group .form-control:not(:first-child):not(:last-child){border-radius:0;}
.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle;}
.input-group-addon{padding:6px 12px;font-size:13px;font-weight:400;line-height:1;color:#95a5a6;text-align:center;background-color:#eeeeee;border:1px solid #ccc;border-radius:5px;}
.input-group-addon input[type="checkbox"]{margin-top:0;}
.input-group-addon:first-child{border-top-right-radius:0;border-bottom-right-radius:0;}
.input-group-addon:first-child{border-right:0;}
.input-group-btn{position:relative;font-size:0;white-space:nowrap;}
.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);}
.pull-right{float:right!important;}

label{font-weight:normal;line-height:2.4;font-size:16px;color:#808080;line-height:30px;font-weight:600;margin-bottom:12px;}
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:"TeachableSans", Helvetica, Arial, sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:44px;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
.checkbox label{min-height:29px;padding-left:6px;font-size:14px;margin-bottom:0;font-weight:normal;cursor:pointer;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
.small{font-size:92%;}
ul{margin-top:0;margin-bottom:11px;}
.list-unstyled{padding-left:0;list-style:none;}
.input-group-addon{padding:10px 12px;font-size:13px;color:white;text-align:center;background-color:#9a9ea2;border:1px solid #9a9ea2;border-radius:6px;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.well{min-height:20px;padding:10px 20px;margin-bottom:20px;background-color:#f9fafb;border:0px;border-radius:4px;-webkit-box-shadow:none;box-shadow:none;}
.input-group-addon{background:#f9f9f9;padding:1px;color:#34495e;padding:0 10px;font-weight:200;font-size:13px;border:1px solid #dbdbdb;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
p.small a{color:#809196;text-decoration:underline;font-weight:600;}
p.small a:hover{color:#67777c;}
.tch-box-wrapper{background:#fff;padding:20px;border-radius:5px;border:1px solid #eeeeee;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);}
 .input-group-addon{padding-right:35px;background-color:#ebf8f6;border-top:1px solid #dbdbdb;border-left:1px solid #dbdbdb;border-bottom:1px solid #dbdbdb;}
 .input-group-addon .checkbox{margin:0;padding:0;top:12px;position:absolute;left:35px;}
 #question-prompt{font-weight:bold;}
 .add-lecture-attachment-wrapper{margin-top:-1px;padding:50px;display:block;background:#fff;}
 .quiz-wrapper{max-width:900px;margin:auto;}
 .quiz-wrapper .tch-btn-header-primary-block{max-width:100%;}
 .quiz-wrapper .well{background:#fff;padding:0;margin:0;}
 ul.question-added-wrapper{padding:0px 11px;margin-top:30px;}
 .graded-tooltip{padding-top:3px;padding-left:2px;margin-top:-5px;}
 .checkbox-primary input[type='checkbox']:checked + label::before{background-color:#2b9b8b;border-color:#2b9b8b;}
.space::before{content:'\A0';}
.left-10{padding-left:10px!important;}
.checkbox label{line-height:18px;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}


/*! CSS Used from: http://localhost:8000/css/admin/menu-school.css */
.ng-hide:not(.ng-hide-animate){display:none!important;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
table{border-collapse:collapse;border-spacing:0;}
td{padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
table{border-collapse:collapse;border-spacing:0;}
td{padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
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
table{background-color:transparent;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.space::before{content:'\A0';}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
*,*:before,*:after{box-sizing:inherit;}
:disabled *{pointer-events:none;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css */
.ui-sortable-handle{-ms-touch-action:none;touch-action:none;}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
.ng-hide:not(.ng-hide-animate){display:none!important;}
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
.fa-angle-left:before{content:"\F104";}
.fa-angle-right:before{content:"\F105";}
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
table{background-color:transparent;}
th{text-align:left;}
.tch-table-wrapper{min-height:.01%;overflow-x:auto;}
@media screen and (max-width: 767px){
.tch-table-wrapper{width:100%;margin-bottom:16.5px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #eef0f0;}
}
.pull-right{float:right!important;}
tr.border-bottom td{border-bottom:1pt solid #f3f3f3;}
[disabled]{cursor:default!important;pointer-events:none;}
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#1ea69a;border:1px solid #1ea69a;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:hover{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active:hover,.tch-btn-content-primary:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
.tch-btn-content-primary:active{background-image:none;}
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
.tch-table > tbody > tr > td .tch-btn-content-primary,.tch-table > tbody > tr > td .tch-btn-icon{margin-left:3px;margin-bottom:5px;}
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
.draggable-products td:hover{cursor:move;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-content{padding-top:0;background:#fff;display:block;margin-top:-1px;margin-bottom:20px;padding:30px 35px;border-radius:5px;border:1px solid #e7eaed;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);-webkit-transition:0.2s all ease-in;transition:0.2s all ease-in;}
.no-padding{padding:0px!important;}
.gray-underline{color:#bfbfbf;text-decoration:underline;}
.space::before{content:'\A0';}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
}









/*! CSS Used from: http://localhost:8000/css/admin/menu-school.css */
.ng-hide:not(.ng-hide-animate){display:none!important;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-angle-down:before{content:"\F107";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
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
.col-md-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-md-12{float:left;}
.col-md-12{width:100%;}
}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
.btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;padding:6px 12px;font-size:13px;line-height:1.72222;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.btn:focus,.btn:active:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:white;text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);}
.tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
.tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
.tch-btn-header-primary:active{background-image:none;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
label{font-weight:normal;line-height:2.4;font-size:16px;color:#808080;line-height:30px;font-weight:600;margin-bottom:12px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
.btn{font-family:'TeachableSans', sans-serif;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
*,*:before,*:after{box-sizing:inherit;}
:disabled *{pointer-events:none;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
p{margin:0 0 11px;}
.tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
.tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
.tch-btn-header-primary:active{background-image:none;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: https://cdn.quilljs.com/1.3.6/quill.snow.css */
.ql-container{box-sizing:border-box;font-family:Helvetica, Arial, sans-serif;font-size:13px;height:100%;margin:0px;position:relative;}
.ql-clipboard{left:-100000px;height:1px;overflow-y:hidden;position:absolute;top:50%;}
.ql-editor{box-sizing:border-box;line-height:1.42;height:100%;outline:none;overflow-y:auto;padding:12px 15px;tab-size:4;-moz-tab-size:4;text-align:left;white-space:pre-wrap;word-wrap:break-word;}
.ql-editor > *{cursor:text;}
.ql-editor p{margin:0;padding:0;counter-reset:list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;}
.ql-editor.ql-blank::before{color:rgba(0,0,0,0.6);content:attr(data-placeholder);font-style:italic;left:15px;pointer-events:none;position:absolute;right:15px;}
.ql-snow.ql-toolbar:after{clear:both;content:'';display:table;}
.ql-snow.ql-toolbar button{background:none;border:none;cursor:pointer;display:inline-block;float:left;height:24px;padding:3px 5px;width:28px;}
.ql-snow.ql-toolbar button svg{float:left;height:100%;}
.ql-snow.ql-toolbar button:active:hover{outline:none;}
.ql-snow.ql-toolbar button:hover,.ql-snow.ql-toolbar button:focus,.ql-snow.ql-toolbar .ql-picker-label:hover,.ql-snow.ql-toolbar .ql-picker-item:hover,.ql-snow.ql-toolbar .ql-picker-item.ql-selected{color:#06c;}
.ql-snow.ql-toolbar button:hover .ql-fill,.ql-snow.ql-toolbar button:focus .ql-fill,.ql-snow.ql-toolbar button:hover .ql-stroke.ql-fill,.ql-snow.ql-toolbar button:focus .ql-stroke.ql-fill{fill:#06c;}
.ql-snow.ql-toolbar button:hover .ql-stroke,.ql-snow.ql-toolbar button:focus .ql-stroke,.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke{stroke:#06c;}
@media (pointer: coarse){
.ql-snow.ql-toolbar button:hover:not(.ql-active){color:#444;}
.ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-fill,.ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill{fill:#444;}
.ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke{stroke:#444;}
}
.ql-snow{box-sizing:border-box;}
.ql-snow *{box-sizing:border-box;}
.ql-snow .ql-hidden{display:none;}
.ql-snow .ql-tooltip{position:absolute;transform:translateY(10px);}
.ql-snow .ql-tooltip a{cursor:pointer;text-decoration:none;}
.ql-snow .ql-formats{display:inline-block;vertical-align:middle;}
.ql-snow .ql-formats:after{clear:both;content:'';display:table;}
.ql-snow .ql-stroke{fill:none;stroke:#444;stroke-linecap:round;stroke-linejoin:round;stroke-width:2;}
.ql-snow .ql-fill,.ql-snow .ql-stroke.ql-fill{fill:#444;}
.ql-snow .ql-even{fill-rule:evenodd;}
.ql-snow .ql-transparent{opacity:0.4;}
.ql-snow .ql-picker{color:#444;display:inline-block;float:left;font-size:14px;font-weight:500;height:24px;position:relative;vertical-align:middle;}
.ql-snow .ql-picker-label{cursor:pointer;display:inline-block;height:100%;padding-left:8px;padding-right:2px;position:relative;width:100%;}
.ql-snow .ql-picker-label::before{display:inline-block;line-height:22px;}
.ql-snow .ql-picker-options{background-color:#fff;display:none;min-width:100%;padding:4px 8px;position:absolute;white-space:nowrap;}
.ql-snow .ql-picker-options .ql-picker-item{cursor:pointer;display:block;padding-bottom:5px;padding-top:5px;}
.ql-snow .ql-picker:not(.ql-color-picker):not(.ql-icon-picker) svg{position:absolute;margin-top:-9px;right:0;top:50%;width:18px;}
.ql-snow .ql-picker.ql-header{width:98px;}
.ql-snow .ql-picker.ql-header .ql-picker-label::before,.ql-snow .ql-picker.ql-header .ql-picker-item::before{content:'Normal';}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="1"]::before{content:'Heading 1';}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="2"]::before{content:'Heading 2';}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="1"]::before{font-size:2em;}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="2"]::before{font-size:1.5em;}
.ql-toolbar.ql-snow{border:1px solid #ccc;box-sizing:border-box;font-family:'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;padding:8px;}
.ql-toolbar.ql-snow .ql-formats{margin-right:15px;}
.ql-toolbar.ql-snow .ql-picker-label{border:1px solid transparent;}
.ql-toolbar.ql-snow .ql-picker-options{border:1px solid transparent;box-shadow:rgba(0,0,0,0.2) 0 2px 8px;}
.ql-toolbar.ql-snow + .ql-container.ql-snow{border-top:0px;}
.ql-snow .ql-tooltip{background-color:#fff;border:1px solid #ccc;box-shadow:0px 0px 5px #ddd;color:#444;padding:5px 12px;white-space:nowrap;}
.ql-snow .ql-tooltip::before{content:"Visit URL:";line-height:26px;margin-right:8px;}
.ql-snow .ql-tooltip input[type=text]{display:none;border:1px solid #ccc;font-size:13px;height:26px;margin:0px;padding:3px 5px;width:170px;}
.ql-snow .ql-tooltip a.ql-preview{display:inline-block;max-width:200px;overflow-x:hidden;text-overflow:ellipsis;vertical-align:top;}
.ql-snow .ql-tooltip a.ql-action::after{border-right:1px solid #ccc;content:'Edit';margin-left:16px;padding-right:8px;}
.ql-snow .ql-tooltip a.ql-remove::before{content:'Remove';margin-left:8px;}
.ql-snow .ql-tooltip a{line-height:26px;}
.ql-snow a{color:#06c;}
.ql-container.ql-snow{border:1px solid #ccc;}
/*! CSS Used from: Embedded */
.ql-container{height:50%;}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
.ng-hide:not(.ng-hide-animate){display:none!important;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input,select{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-question-circle:before{content:"\F059";}
.fa-angle-down:before{content:"\F107";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
button,input,select{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="javascript:"]:after{content:"";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button,select{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
[role="button"]{cursor:pointer;}
p{margin:0 0 11px;}
.text-center{text-align:center;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-sm-5,.col-sm-7,.col-lg-9,.col-md-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-5,.col-sm-7{float:left;}
.col-sm-5{width:41.66667%;}
.col-sm-7{width:58.33333%;}
}
@media (min-width: 992px){
.col-md-12{float:left;}
.col-md-12{width:100%;}
}
@media (min-width: 1200px){
.col-lg-9{float:left;}
.col-lg-9{width:100%;}
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
.btn-block{display:block;width:100%;}
[disabled]{cursor:default!important;pointer-events:none;}
.tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
.tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
.tch-btn-header-primary:active{background-image:none;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary-block{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;display:block;width:100%;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;max-width:100%;line-height:30px;}
.tch-btn-header-primary-block:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary-block:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary-block:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
.tch-btn-header-primary-block:active:hover,.tch-btn-header-primary-block:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
.tch-btn-header-primary-block:active{background-image:none;}
.tch-btn-header-primary-block:focus{outline:0!important;}
.tch-btn-header-primary-block:focus{outline:0!important;}
.tch-btn-header-primary-block:focus{outline:0!important;}
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
.tch-btn-tooltip{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;padding:4px 5px!important;color:#ff7f45;}
.tch-btn-tooltip:focus{outline:0!important;}
.tch-btn-tooltip:hover,.tch-btn-tooltip:active,.tch-btn-tooltip:focus{color:#ff631c;-webkit-box-shadow:none;box-shadow:none;}
@media screen and (max-width: 1000px){
.tch-btn-tooltip{display:none;}
}
label{font-weight:normal;line-height:2.4;font-size:16px;color:#808080;line-height:30px;font-weight:600;margin-bottom:12px;}
.control-label{font-size:13px!important;margin-bottom:5px;color:#47505e!important;line-height:22px;font-weight:500;letter-spacing:0.5px;}
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:"TeachableSans", Helvetica, Arial, sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:44px;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
select.form-control{-moz-appearance:none;appearance:none;-webkit-appearance:none;background:url(//assets.teachablecdn.com/admin/assets/images/select-up-down.png) right 12px center #fff no-repeat;background-size:15px;font-size:13px;}
.help-block{color:inherit;padding:0px 0px;font-size:13px;-webkit-box-shadow:none;box-shadow:none;display:none;}
.form-group{position:relative;margin-bottom:28px;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
.text-center{text-align:center;}
.control-label{font-size:14px;}
.tch-inline-form{margin-right:-15px;margin-left:-15px;margin:0;margin-bottom:2px!important;background:#fff;border:1px solid #dbdbdb;border-radius:30px;position:relative;}
.tch-inline-form:before,.tch-inline-form:after{display:table;content:" ";}
.tch-inline-form:after{clear:both;}
.tch-inline-form div.btn-attached{padding-top:13px;font-weight:bold;-webkit-box-shadow:none!important;box-shadow:none!important;color:#0f8d82;height:49px;border-top-left-radius:4px;border-top-right-radius:4px;font-size:13px!important;-webkit-transition:0.1s all ease-in;transition:0.1s all ease-in;}
.tch-inline-form div.btn-attached:hover{color:#ff7f45;}
.tch-inline-form div.btn-attached:focus,.tch-inline-form div.btn-attached:active{outline:none;}
.tch-inline-form .author-form .row{margin-left:auto!important;margin-right:auto!important;}
.tch-inline-form .author-form .inline-form-container{width:360px;margin:0 auto;padding-top:20px;padding-bottom:40px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.tch-section-wrapper:target .tch-section-content{-webkit-animation:highlight 1s ease-out;animation:highlight 1s ease-out;}
.tch-section-content{padding-top:0;background:#fff;display:block;margin-top:-1px;margin-bottom:20px;padding:30px 35px;border-radius:5px;border:1px solid #e7eaed;-webkit-box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);box-shadow:1px 1px 1px 0px rgba(0, 0, 0, .04);-webkit-transition:0.2s all ease-in;transition:0.2s all ease-in;}
.tch-section-content .tab-bottom{background:#fefefe;margin-top:30px;height:85px;margin-bottom:-30px;line-height:85px;margin-left:-35px;margin-right:-35px;border-top:1px solid #eeeeee;text-align:right;padding-right:30px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;}
.slide-hide{overflow:hidden;max-height:0;padding-top:0;padding-bottom:0;margin-top:0;margin-bottom:0;-webkit-transition-duration:0.3s;transition-duration:0.3s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);}
.add-top-margin{margin-top:15px;}
.icon-arrow-down{margin-left:5px;vertical-align:-1px;color:#ccc;}
.gravatar{margin-top:10px;border-radius:50% 50%;width:48px;height:48px;margin-left:auto;margin-right:auto;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
.btn{font-family:'TeachableSans', sans-serif;}
}
}








/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
/*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-79e90a8f89fd85fce9ba.css ; media=screen */
@media screen{
strong{font-weight:bold;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-remove:before{content:"\F00D";}
.fa-trash-o:before{content:"\F014";}
.fa-edit:before{content:"\F044";}
.fa-check-square-o:before{content:"\F046";}
strong{font-weight:bold;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type='checkbox']{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
input,button{font-family:inherit;font-size:inherit;line-height:inherit;}
p{margin:0 0 11px;}
ul{margin-top:0;margin-bottom:11px;}
ul ul{margin-bottom:0;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-sm-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-12{float:left;}
.col-sm-12{width:100%;}
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
.checkbox{position:relative;display:block;margin-top:10px;margin-bottom:10px;}
.checkbox label{min-height:22px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer;}
.checkbox input[type="checkbox"]{position:absolute;margin-top:4px \9;margin-left:-20px;}
.input-group{position:relative;display:table;border-collapse:separate;}
.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0;}
.input-group .form-control:focus{z-index:3;}
.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell;}
.input-group .form-control:not(:first-child):not(:last-child){border-radius:0;}
.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle;}
.input-group-addon{padding:6px 12px;font-size:13px;font-weight:400;line-height:1;color:#95a5a6;text-align:center;background-color:#eeeeee;border:1px solid #ccc;border-radius:5px;}
.input-group-addon input[type="checkbox"]{margin-top:0;}
.input-group-addon:first-child{border-top-right-radius:0;border-bottom-right-radius:0;}
.input-group-addon:first-child{border-right:0;}
.input-group-btn{position:relative;font-size:0;white-space:nowrap;}
.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);}
.pull-right{float:right!important;}
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#1ea69a;border:1px solid #1ea69a;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:hover{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active{color:white;background-color:#19887e;border-color:#177f76;}
.tch-btn-content-primary:active:hover,.tch-btn-content-primary:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
.tch-btn-content-primary:active{background-image:none;}
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
label{font-weight:normal;line-height:2.4;font-size:16px;color:#808080;line-height:30px;font-weight:600;margin-bottom:12px;}
.form-control::-moz-placeholder{color:#97999b;opacity:1;}
.form-control:-ms-input-placeholder{color:#97999b;}
.form-control::-webkit-input-placeholder{color:#97999b;}
.form-control{border:1px solid #dbdbdb;color:#20272d;font-family:"TeachableSans", Helvetica, Arial, sans-serif;font-size:13px;line-height:1.467;padding:12px 14px;height:44px;border-radius:5px;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.form-control:focus{outline:0;border:1px solid rgba(0, 0, 0, .34)!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
.checkbox label{min-height:29px;padding-left:6px;font-size:14px;margin-bottom:0;font-weight:normal;cursor:pointer;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
ul{margin-top:0;margin-bottom:11px;}
ul ul{margin-bottom:0;}
.input-group-addon{padding:10px 12px;font-size:13px;color:white;text-align:center;background-color:#9a9ea2;border:1px solid #9a9ea2;border-radius:6px;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.well{min-height:20px;padding:10px 20px;margin-bottom:20px;background-color:#f9fafb;border:0px;border-radius:4px;-webkit-box-shadow:none;box-shadow:none;}
.input-group-addon{background:#f9f9f9;padding:1px;color:#34495e;padding:0 10px;font-weight:200;font-size:13px;border:1px solid #dbdbdb;}
ul.tch-arrow-list{list-style-type:none;margin-top:10px!important;padding-left:20px;text-align:left;}
ul.tch-arrow-list li{background:url("//assets.teachablecdn.com/admin/assets/images/tch-arrow.svg") no-repeat;background-position:0px 3px;font-size:13px;margin-bottom:10px;padding-left:31px;line-height:26px;background-size:17px;width:100%;font-weight:200;}
 .input-group-addon{padding-right:35px;background-color:#ebf8f6;border-top:1px solid #dbdbdb;border-left:1px solid #dbdbdb;border-bottom:1px solid #dbdbdb;}
 .input-group-addon .checkbox{margin:0;padding:0;top:12px;position:absolute;left:35px;}
 #question-prompt{font-weight:bold;}
 .quiz-wrapper .well{background:#fff;padding:0;margin:0;}
 ul.question-added-wrapper > li{background-color:#fff!important;border-radius:5px;border:1px solid #dfdfdf;margin:7px;padding-bottom:15px;padding-left:20px;padding:14px 18px 15px 19px!important;}
 ul.question-added-wrapper > li:hover{background:#fdfdfd;}
 ul.question-added-wrapper > li .correct-answer{color:#278c7d;font-weight:bold;}
 .question-answers{font-size:15px;}
 .question-answers .fa.fa-check-square-o{color:#278c7d;margin-left:3px;}
 .checkbox-primary input[type='checkbox']:checked + label::before{background-color:#2b9b8b;border-color:#2b9b8b;}
 .ui-sortable-handle{cursor:move;}
.space::before{content:'\A0';}
.left-10{padding-left:10px!important;}
.checkbox label{line-height:18px;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
.FocusFixer-module_usingMouse__1zr_y :focus{outline:none;}
/*! CSS Used fontfaces */





</style>


<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content">
    <div what="page header" class="disable-animations tch-section-nav tch-page-header" classes="" no-title="true">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger"><button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable"><i class="fa fa-bars"></i></button></div>
                    <!---->
                    <!---->
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons no-title">
                    <div class="tch-lecture-title">
                      <a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum" ng-click="backToSyllabus()" class="tch-section-back fastclickable"><i class="fa fa-angle-left"></i><span class="space"></span></a><a editable-text="lecture.name"
                           class="title edit-in-place editable editable-click editable-hide"><span ng-bind="lecture.name" class="editable-text">Titre leçon</span><button class="tch-btn-icon-fa icon-gray"><i
                                  class="fa fa-pencil"></i></button></a>
                        <form class="form-inline editable-wrap editable-text ng-pristine ng-valid fastclickable" role="form" ng-click="$event.stopPropagation();" editable-form="$form" blur="cancel">
                            @csrf
                            <div class="editable-controls form-group" ng-class="{'has-error': $error}">
                                <input value="{{$lesson->title}}" placeholder="Titre de la leçon" name="title" type="text" class="editable-has-buttons editable-input form-control input-sm ng-pristine ng-valid ng-not-empty ng-touched" ng-model="$data"
                                  style="">
                                  <input style="display: none;" type="text" name="school_id" value="{{$school->id}}">
                                  <input style="display: none;" type="text" name="course_id" value="{{$course->id}}">
                                  <input style="display: none;" type="text" name="section_id" value="{{$section->id}}">
                                  <input style="display: none;" type="text" name="lesson_id" value="{{$lesson->id}}">

                                <div class="editable-error help-block ng-hide" ng-show="$error" ng-bind="$error" style=""></div>
                            </div>
                        </form>
                        <div class="buttons pull-right">
                            <a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum/{{$section->id}}/new-lecture">
                            <button ng-disabled="!lecture.id" ng-click="createNewLectureInSectionAndRedirect()" class="tch-btn-header-secondary fastclickable">Nouvelle leçon</button>
                        </a>
                            <span class="space"></span>
                            <a
                              ng-href="/courses/vr-course/lectures/11599543?preview=logged_in" target="_blank" what="preview lecture" class="tch-btn-header-secondary" href="/courses/vr-course/lectures/11599543?preview=logged_in">Aperçu</a><span
                              class="space"></span>
                              <button id="updateLecture"
                              class="tch-btn-header-primary disable-animations fastclickable">Mettre à jour</button></div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
    <tabs data="tabs" type="tabs" class="add-lecture-attachment-nav-tabs">
        <div>
            <div class="tab-container" type="tabs" vertical="" justified="">
                <ul class="nav nav-tabs">


                    <li class="tab fastclickable active"  heading="Add Quiz" >
                        <a href="#quiz"  class="fastclickable">Modifier Question</a>
                    </li>

                    <!---->

                </ul>
                <div class="tab-content">
                    <!---->
                    <div class="tab-pane active"  ng-class="{active: tab.active}" tab-content-transclude="tab" style="">
                    </div>
                    <!---->
                    <div class="tab-pane"  ng-class="{active: tab.active}" tab-content-transclude="tab">
                    </div>
                    <!---->
                    <div class="tab-pane"  ng-class="{active: tab.active}" tab-content-transclude="tab" style="">
                    </div>
                    <!---->
                    <div class="tab-pane"  ng-class="{active: tab.active}" tab-content-transclude="tab">
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </tabs>
    <!---->


<ui-view id="quiz" class="tab-container add-lecture-attachment-wrapper tch-box-wrapper" style="">
    <div what="quiz wrapper" class="quiz-wrapper">
        <!---->
        <!---->
        <div ng-if="hasQuiz()" class="" style="">
            <form what="form" ng-model="newQuestion" ng-submit="addQuestion(newQuestion)" class="well quiz-question ng-untouched ng-valid ng-not-empty ng-dirty ng-valid-parse" style="">
                <!---->
                <!---->

                <!---->
                <div what="new question" class="quiz-question">
                    <div data-nodrag="" class="quiz-question-prompt">
                      <input id="question-text" ng-model="newQuestion.question" placeholder="Ecrivez votre question ici"
                          class="form-control ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" style=""></div>
                    <div id="bloc-question" class="multiple-choice">
                        <!---->
                        <br>
                        <p><a id="add-option" style="cursor: pointer;">Ajouter option de réponse</a></p>
                        <div class="reponses">


                            <div class="input-group">
                                <div id="checkbox-correct" tooltip="Correct Answer" tooltip-placement="bottom" tooltip-trigger="mouseenter" tooltip-append-to-body="true" class="input-group-addon">
                                    <div class="checkbox checkbox-primary">
                                      <input type="checkbox" name="correct"
                                          class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                          <label for="new-answer-0"></label></div>
                                </div>

                                <input  placeholder="Choix de réponse"
                                  name="text_question" class="text_question_quiz form-control multiple-choice-answer-input ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" style="">
                                <!---->
                                <div ng-if="newQuestion.answers.length > 1" class="input-group-btn left-10" style="">
                                    <button id="answer-remove" type="button" tabindex="-1"
                                      class="tch-btn-content-danger fastclickable"><i class="fa fa-remove"></i></button>
                                  </div>
                                <!---->
                            </div>

                            <p></p>
                        </div>

                        <!---->

                    </div>
                    <input id="add-question" value="Ajouter question" ng-disabled="!readyToAddQuestion(newQuestion)" class="tch-btn-header-primary-block">
                </div>
            </form>
            <div class="row">
              <div class="col-md-12">
                  <ul ui-sortable="sortableOptions" ng-model="questions" class="list-unstyled question-added-wrapper ng-pristine ng-untouched ng-valid ui-sortable ng-not-empty">



                      @foreach($quiz->questions as $question)
                      <li class="well ui-sortable-handle">
                        <div ng-show="!question.editing" class="pull-right">

                          </div>
                        <div what="edit box" ng-show="question.editing" ng-model="question" class="quiz-question ng-pristine ng-untouched ng-valid ng-not-empty ng-valid">
                            <div class="quiz-question">
                                <div data-nodrag="" class="quiz-question-prompt">
                                    <input value="{{$question->text}}" what="question text" id="question-prompt" ng-model="question.question" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty"></div>
                                <div class="multiple-choice">
                                    @foreach($question->options as $option)
                                    <div what="answer" ng-repeat="answer in question.answers track by $index">
                                        <p></p>
                                        <div class="input-group">
                                            <div tooltip="Correct Answer" tooltip-placement="bottom" tooltip-trigger="mouseenter" tooltip-append-to-body="true" class="input-group-addon">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="answer-0-0-correct" type="checkbox" name="answer-0-0-correct" ng-model="answer.correct" ng-value="true" class="ng-pristine ng-untouched ng-valid ng-not-empty"
                                                      value="{{$option->correct == 0 ? 'true' : 'false'}}" {{$option->correct == 0 ? 'checked' : ''}}><label for="answer-0-0-correct"></label></div>
                                            </div>
                                            <input value="{{$question->text}}" what="answer text" ng-model="answer.value" placeholder="Answer choice" ng-keydown="addMultipleChoiceAnswer(question, $event)"
                                              class="form-control multiple-choice-answer-input ng-pristine ng-untouched ng-valid ng-not-empty">
                                            <div ng-if="question.answers.length > 1" class="input-group-btn left-10"><button type="button" ng-click="removeAnswer(question, answer)" tabindex="-1" class="tch-btn-content-danger fastclickable"><i
                                                      class="fa fa-remove"></i></button></div>
                                        </div>
                                        <p></p>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div ng-show="question.editing" class="row ng-valid">
                            <div class="col-sm-12">
                                <div class="pull-right">
                                    <button id="test-id-save-btn" data-nodrag="" type="submit" ng-show="question.editing" ng-click="saveQuestion(question)"
                                      class="tch-btn-content-primary tch-btn-sm disable-animations fastclickable ng-valid">
                                      Save
                                  </button>
                                      <span class="space"></span>
                                      <form style="float: right;" action="{{ route('questions.destroy', $question) }}" method="post">
                                          {{ csrf_field() }}
                                          {{ method_field('delete') }}
                                          <button type="submit"
                                              class="tch-btn-content-danger tch-btn-icon disable-animations fastclickable">
                                              <i class="fa fa-trash-o"></i>
                                          </button>
                                      </form>
                                      </div>
                            </div>
                        </div>
                    </li>
                    @endforeach



                  </ul>
              </div>
            </div>
        </div>
        <!---->
    </div>
</ui-view>






<script type="text/javascript" src="/js/admin_views/lesson.js"></script>

@endsection
