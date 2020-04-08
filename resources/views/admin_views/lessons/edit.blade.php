@extends('layouts.admin_views.menu-school-icon')
@section('title', 'Modifier une leçon')
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
.editable-click,a.editable-click{text-decoration:none;color:#4D90CC;border-bottom:dashed 1px #428bca;}
.editable-click:hover,a.editable-click:hover{text-decoration:none;color:#4D90CC;border-bottom-color:#2a6496;}
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
.pull-right1{float:right!important;display: flex!important;margin-top: -53px!important;margin-left: 215px!important;}
.pull-rights{float:right!important; display: flex!important;}
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
.tch-btn-header-secondary{min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;color:white;background-color:#fff;border:1px solid #a9a9a9;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#e1e3e4;color:#6aace6;}
.tch-btn-header-secondary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-secondary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-secondary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-secondary:active:hover,.tch-btn-header-secondary:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-secondary:active{background-image:none;}
.tch-btn-header-secondary:active,.tch-btn-header-secondary:hover,.tch-btn-header-secondary:focus{background:#fff;border-color:#4D90CC;color:#4D90CC;}
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
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#4D90CC;border:1px solid #4D90CC;}
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
.nav-tabs > li > a:hover,.nav-tabs > li > a:focus{background-color:transparent;border-color:transparent;border-bottom-color:transparent;outline:none;color:#4D90CC;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
ul{margin-top:0;margin-bottom:11px;}
.tch-page-header .tch-btn-hamburger{margin-right:9px!important;float:left;margin-top:-6px!important;padding:5px 1px;margin-top:3px;text-align:center;}
.tch-page-header .tch-btn-hamburger .tch-btn-header-icon{padding:0!important;border:0;color:#a9a9a9;}
.tch-page-header .tch-btn-hamburger i{margin-right:0px;}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .editable-click,.tch-page-header a.editable-click{color:#4D90CC;border-bottom:dashed 1px #d8d8d8;font-size:24px;vertical-align:3px;}
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
.tch-section-nav .tch-section-nav-wrapper .tch-section-nav-box .tch-section-nav-buttons .tch-lecture-title > .editable-text > .editable-controls .editable-buttons button.btn-default{background-color:#fff;border:2px solid #e0e0e0;color:#4D90CC;}
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
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#4D90CC;border:1px solid #4D90CC;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{color:white;background-color:#4D90CC;border-color:#177f76;}
.tch-btn-content-primary:hover{color:white;background-color:#4D90CC;border-color:#177f76;}
.tch-btn-content-primary:active{color:white;background-color:#4D90CC;border-color:#177f76;}
.tch-btn-content-primary:active:hover,.tch-btn-content-primary:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
.tch-btn-content-primary:active{background-image:none;}
.tch-btn-content-danger{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:red;background-color:#fff;border:1px solid #d4604b;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#e6c6b8;color:#d4604b;}
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
.tch-btn-header-primary-block{color:white;background-color:#6aace6;border:1px solid #6aace6;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;display:block;width:100%;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;max-width:100%;line-height:30px;}
.tch-btn-header-primary-block:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:active:hover,.tch-btn-header-primary-block:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
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
.tch-btn-content-primary{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#4D90CC;border:1px solid #4D90CC;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{outline:0!important;}
.tch-btn-content-primary:focus{color:white;background-color:#6aace6;border-color:#6aace6;}
.tch-btn-content-primary:hover{color:white;background-color:#6aace6;border-color:#6aace6;}
.tch-btn-content-primary:active{color:white;background-color:#6aace6;border-color:#6aace6;}
.tch-btn-content-primary:active:hover,.tch-btn-content-primary:active:focus{color:white;background-color:#146e66;border-color:#12655e;}
.tch-btn-content-primary:active{background-image:none;}
.tch-btn-content-danger{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#fff;border:1px solid #d4604b;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:red;color:red;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{color:white;background-color:red;border-color:red;}
.tch-btn-content-danger:hover{color:white;background-color:red;border-color:red;}
.tch-btn-content-danger:active{color:white;background-color:red;border-color:red;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus{color:white;background-color:red;border-color:red;}
.tch-btn-content-danger:active{background-image:none;}
.tch-btn-content-danger:active,.tch-btn-content-danger:hover,.tch-btn-content-danger:focus{background:#fff;border-color:red;color:red;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus,.tch-btn-content-danger:hover:hover,.tch-btn-content-danger:hover:focus,.tch-btn-content-danger:focus:hover,.tch-btn-content-danger:focus:focus{background:#fff;border-color:#4D90CC;color:#4D90CC;}
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
 ul.question-added-wrapper > li{background-color:#f9f9f9!important;border-radius:5px;border:1px solid #dfdfdf;margin:7px;padding-bottom:15px;padding-left:20px;padding:14px 18px 15px 19px!important;}
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

<style media="screen">
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-h4{margin:4px;font-size:1.5625rem;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.235;letter-spacing:0.00735em;}
@media (min-width:600px){
.MuiTypography-h4{font-size:1.8219rem;}
}
@media (min-width:800px){
.MuiTypography-h4{font-size:2.0243rem;}
}
@media (min-width:1025px){
.MuiTypography-h4{font-size:2.0243rem;}
}
.MuiTypography-alignCenter{text-align:center;}
/*! CSS Used from: https://www.educative.io/static/css/94.3705e7dd.chunk.css */
a{background-color:initial;}
a:active,a:hover{outline:0;}
svg:not(:root){overflow:hidden;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*,:after,:before{box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.hqqZXZ{display:flex;width:100%;height:100%;}
.fUQatb{display:flex;flex:1 1 0%;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;flex-direction:column;height:180px;margin:10px;border-radius:4px;box-shadow:rgba(0, 0, 0, 0.1) 0px 0px 7px;transition:all 0.4s ease 0s;cursor:pointer;}
.fUQatb:hover{box-shadow:rgba(0, 0, 0, 0.1) 1px 2px 12px;border-bottom:none;transform:translateY(-5px);}
@media (max-width: 480px){
.fUQatb{margin:5px;}
}
.eBqjAL{font-weight:600;margin:0px 16px;}
.fjEdZT{width:90px;height:90px;overflow:visible;}
.fjEdZT > svg{height:90px;width:90px;overflow:visible;}

</style>


@if($lesson->webinar_meeting !== null)

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

</style>


@endif


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
                              ng-href="/courses/vr-course/lectures/11599543?preview=logged_in" target="_blank" what="preview lecture" class="tch-btn-header-secondary" href="/course/{{$course->slug}}/lessons/{{$lesson->slug}}">Aperçu</a><span
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
                    <!---->
                    <li class="tab fastclickable active"  heading="Add File"  style="">
                        <a href="#image"  class="fastclickable">Image de la leçon</a>
                    </li>
                    <li class="tab fastclickable"  heading="Add File"  style="">
                        <a href="#resource"  class="fastclickable">Ressources téléchargeables</a>
                    </li>
                    <li class="tab fastclickable"  heading="Add File"  style="">
                        <a href="#video"  class="fastclickable">Vidéo pré-enregistrée ou Webinar</a>
                    </li>
                    <!---->
                    <li class="tab fastclickable"  heading="Add Text" >
                        <a href="#text"  class="fastclickable">Texte</a>
                    </li>

                    <li class="tab fastclickable"  heading="Add Quiz" >
                        <a href="#quiz"  class="fastclickable">Quiz</a>
                    </li>

                    <li class="tab fastclickable"  heading="Add Class" >
                        <a href="#class"  class="fastclickable">Classes</a>
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

    <ui-view id="image" class="tab-container add-lecture-attachment-wrapper tch-box-wrapper" style="">
        <div class="tch-drop-wrapper">
            <div filepicker-drag-drop="true" drag-over-class="drag-hover" on-upload-success="dropFilePickerSuccess" filepicker-multiple="true" filepicker-folder="true" target-type="attachment upload" class="drop-inner">
                Mettez une image pour cette leçon (facultatif)<span class="space"></span><span class="space"></span></div>
            <div data-ng-transclude="" data-filepicker-btn="" data-multiple="true" data-preview-on-upload="false" data-prevent-default="true" target-type="attachment upload" id="test-id-upload-button" ng-click="safariResize()"
              class="drop-button tch-btn-header-secondary pull-right pull-right1 fastclickable"> <input id="image_lesson" type="file" name="image" value=""> <span> Choisissez une image</span></div>
        </div>
        @if($lesson->image)
        <img width="150" src="/images/lessons/images/{{$lesson->image}}" alt="">
        @else
        <img width="150" src="/images/lessons/images/image.png" alt="">
        @endif
    </ui-view>

    <ui-view style="display: none;" id="resource" class="tab-container add-lecture-attachment-wrapper tch-box-wrapper" style="">
        <div class="tch-drop-wrapper">
            <div filepicker-drag-drop="true" drag-over-class="drag-hover" on-upload-success="dropFilePickerSuccess" filepicker-multiple="true" filepicker-folder="true" target-type="attachment upload" class="drop-inner">
                Mettez des ressources que les étudiants
                pourront télécharger pour cette leçon (facultatif) <br> <span class="space"></span><span class="space"></span></div><br>
            <div style="margin-left: -18%;" data-ng-transclude="" data-filepicker-btn="" data-multiple="true" data-preview-on-upload="false" data-prevent-default="true" target-type="attachment upload" id="test-id-upload-button" ng-click="safariResize()"
              class="drop-button tch-btn-header-secondary pull-right fastclickable"> <input id="downloadable_files" type="file" name="downloadable_files[]" multiple> <span> Choisir fichiers</span></div>
        </div>

        <div ng-show="products.length > 0 || deletedPlansCount > 0" class="tch-section-content">
        <div class="tch-table-wrapper">
            <!---->
            <table ng-if="products.length > 0" class="tch-table">
                <thead>
                    <tr>
                        <th>Nom du fichier</th>
                        <th>Lien</th>


                    </tr>
                </thead>
                <tbody ui-sortable="sortableOptions" ng-model="products" class="ng-pristine ng-untouched ng-valid ui-sortable ng-not-empty">
                    <!---->
                    @if($lesson->medias)
                    @foreach($lesson->medias as $media)
                                        <tr what="product" which="Free Course" ng-repeat="product in products" class="border-bottom ui-sortable-handle">
                        <td what="id"><span ng-bind="'#' + product.id">{{$media->name}}</span><span class="space"></span><span class="space"></span>
                            <!---->
                        </td>
                        <td what="type">
                            <!---->
                            <span ng-bind="'PRODUCT.free.name' | translate" ng-if="getPlanType(product) == 'free'">
                                <a download target="_blank" href="/images/lessons/resources/{{$media->name}}">
                                Téléchargez
                                </a>
                            </span>
                            <!---->
                        </td>

                        <td>
                            <!---->
                            <!---->
                            <div ng-if="product.is_published" class="pull-right">

                                <form action="http://localhost:8000/pricings/3" method="post">
                                    <input type="hidden" name="_token" value="8mWFYoWez7Nk7t5NGawvDBY5P0J7UeNK368ybAVm">
                                    <input type="hidden" name="_method" value="delete">
                                    <button id="test-id-unpublish-btn" class="tch-btn-content-danger tch-btn-icon fastclickable"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </div>
                            <!---->
                        </td>
                    </tr>
                    @endforeach
                    @endif


                    <!---->
                </tbody>
            </table>
            <!---->
        </div>
        <div ng-show="ctrl.meta.number_of_pages > 1" class="tch-page-nav ng-hide" meta="meta">
            <!---->
            <div class="pull-right"><span class="tch-page-nav-page-number">Page 1 of 1</span><span class="space"></span><button ng-click="ctrl.previousPage()" ng-disabled="ctrl.meta.page == 1" class="tch-page-nav-btn tch-back-button fastclickable" disabled="disabled"><i class="fa fa-angle-left"></i></button><button ng-click="ctrl.nextPage()" ng-disabled="ctrl.meta.number_of_pages == ctrl.meta.page" class="tch-page-nav-btn tch-next-button fastclickable" disabled="disabled"><i class="fa fa-angle-right"></i></button></div>
        </div>
        <!---->

        <!---->
    </div>



    </ui-view>


    <ui-view style="display: none;" id="text" class="tab-container add-lecture-attachment-wrapper tch-box-wrapper" style="">

    <!---->
    <!---->
        <div ng-if="hasNewTextEditor">
            <div id="site-description" class="">

                @if($lesson->full_text)
                {!!$lesson->full_text!!}
                @endif

            </div>
            <!--
            <div class="add-btn-wrapper"><button ng-click="addAttachment('text')" what="save text button" class="tch-btn-header-primary-block pull-right add-btn fastclickable">Enregistrer</button></div>
        -->
        </div>
        <!---->
    </ui-view>



<ui-view style="display: none;" id="video" class="tab-container add-lecture-attachment-wrapper tch-box-wrapper" style="">
<div what="quiz wrapper" class="quiz-wrapper">
    <!---->
    <!---->
    <div ng-if="hasQuiz()" class="" style="">
        <form class="well quiz-question ng-untouched ng-valid ng-not-empty ng-dirty ng-valid-parse" style="">

            <div class="quiz-question">
                <div data-nodrag="" class="quiz-question-prompt">
                    <input value="{{$lesson->video}}" type="text" name="video" what="question text" id="question-prompt" placeholder="Mettez le code d'intégration Viméo ou Youtube de votre vidéo (facultatif)"
                      class="form-control ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" style="">
                  </div><br><br>
                  <!--
                <input what="add question button" type="submit" value="Add Question" ng-disabled="!readyToAddQuestion(newQuestion)" class="tch-btn-header-primary-block">
            -->
            </div>
        </form>

    </div>
    <!---->
</div>
</ui-view>


<ui-view style="display: none;" id="quiz" class="tab-container add-lecture-attachment-wrapper tch-box-wrapper" style="">
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
                        <p><a class="add-option" style="cursor: pointer;">Ajouter option de réponse</a></p>
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
                                    <button type="button" tabindex="-1"
                                          class="answer-remove tch-btn-content-danger fastclickable">
                                          <i class="fa fa-remove"></i>
                                      </button>
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
                  <ul ui-sortable="sortableOptions" ng-model="questions" class="questions_list list-unstyled question-added-wrapper ng-pristine ng-untouched ng-valid ui-sortable ng-not-empty">
                      @if($lesson->quizzes)
                      @foreach($lesson->quizzes as $quiz)
                      <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
                      @foreach($quiz->questions->sortBy('position') as $question)

                      <li data-index="{{$question->id}}" data-position="{{$question->position}}" class="well ui-sortable-handle">
                        <div id="question-save-1" ng-show="!question.editing" class="pull-right pull-rights">
                            <a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum/{{$section->id}}/lessons/{{$lesson->id}}/quiz/{{$quiz->id}}/edit"></a>
                                <button type="button"
                                    class="edit_quiz tch-btn-content-primary tch-btn-icon disable-animations fastclickable"><i class="fa fa-edit"></i>
                                </button>


                              <span class="space"></span>
                              <form action="{{ route('questions.destroy', $question) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                                  <button type="submit"
                                          class="tch-btn-content-danger tch-btn-icon disable-animations fastclickable">
                                      <i class="fa fa-trash-o"></i>
                                  </button>
                              </form>
                          </div>
                        <div what="edit box" ng-show="question.editing" ng-model="question" class="quiz-question ng-pristine ng-untouched ng-valid ng-not-empty ng-hide">
                            <div class="quiz-question">
                                <div data-nodrag="" class="quiz-question-prompt">
                                    <input value="{{$question->text}}" id="question-text-edit" ng-model="question.question" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                                    <input type="hidden" value="{{$question->id}}" id="question-id" ng-model="question.question" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                                </div>
                                <div class="multiple-choice">
                                    <p><a class="edit-option" style="cursor: pointer;">Ajouter option de réponse</a></p>
                                    @foreach($question->options->sortBy('id') as $option)
                                    <div what="answer" ng-repeat="answer in question.answers track by $index">
                                        <p></p>
                                        <div class="input-group">
                                            <div tooltip="Correct Answer" tooltip-placement="bottom" tooltip-trigger="mouseenter" tooltip-append-to-body="true" class="input-group-addon">
                                                <div class="checkbox checkbox-primary">
                                                    <input name="correct" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-not-empty" {{$option->correct == 1 ? 'checked' : ''}}
                                                      value="{{$option->correct == 0 ? 'false' : 'true'}}"><label for="answer-0-0-correct"></label></div>
                                            </div>
                                            <input value="{{$option->text}}" placeholder="Answer choice"
                                              class="text_question_quiz_edit form-control multiple-choice-answer-input ng-pristine ng-untouched ng-valid ng-not-empty">
                                             <input type="hidden" name="option_id" value="{{$option->id ? $option->id : ''}}">
                                            <div ng-if="question.answers.length > 1" class="input-group-btn left-10">
                                                <button type="button" tabindex="-1" class="answer-remove-edit tch-btn-content-danger fastclickable"><i
                                                      class="fa fa-remove"></i>
                                                  </button>
                                              </div>
                                        </div>
                                        <p></p>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div what="display box" ng-hide="question.editing" class="question">
                          <strong what="question text" ng-bind-html="question.question">
                            {{$question->text}}
                          </strong>
                            <ul class="question-answers tch-arrow-list">
                              @foreach($question->options->sortBy('id') as $option)
                                <li what="answer" ng-repeat="answer in question.answers track by $index"  class="answers correct-answer">
                                  <span what="answer text"
                                      ng-bind-html="answer.value">
                                      {{$option->text}}
                                    </span>
                                    @if($option->correct === 1)
                                    <span class="space"></span><i what="answer correct" ng-show="answer.correct" class="fa fa-check-square-o"></i>
                                    @endif
                                </li>
                            @endforeach

                            </ul>
                        </div>
                        <div ng-show="question.editing" class="question-save-2 row ng-hide">
                            <div class="col-sm-12">
                                <div class="pull-right">

                                    <button id="test-id-save-btn" data-nodrag="" type="submit" ng-show="question.editing" ng-click="saveQuestion(question)"
                                      class="tch-btn-content-primary tch-btn-sm disable-animations fastclickable ng-hide">
                                      Enregistrez

                                  <button type="submit"
                                      class="question-edit edit-question tch-btn-content-primary tch-btn-sm disable-animations fastclickable ng-hide">
                                      Enregistrer
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
                      @endforeach

                      @endif


                  </ul>
              </div>
            </div>
        </div>
        <!---->
    </div>
</ui-view>

<ui-view style="display: none;" id="class" class="tab-container add-lecture-attachment-wrapper tch-box-wrapper" style="">

<!---->
<!---->
    <div class="styles__CategoryButtons-vgii8s-3 hqqZXZ">
        <a target="_blank" class="styles__CategoryButton-vgii8s-4 fUQatb" href="https://us04web.zoom.us/meeting/schedule">
            <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT"><svg width="161" height="147" viewBox="0 0 161 147" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M135.204 119.528H25.7964C23.7044 119.518 22.011 117.804 22 115.686V28.842C22.011 26.724 23.7044 25.01 25.7964 25H135.168C137.26 25.01 138.953 26.724 138.964 28.842V115.686C138.954 117.789 137.283 119.497 135.206 119.528H135.204ZM29.301 35.087H68.3656Z"
                      fill="#DAE1F2"></path>
                    <path
                      d="M22 44.559H139M29.301 35.087H68.3656M135.204 119.528H25.7964C23.7044 119.518 22.011 117.804 22 115.686V28.842C22.011 26.724 23.7044 25.01 25.7964 25H135.168C137.26 25.01 138.953 26.724 138.964 28.842V115.686C138.954 117.789 137.283 119.497 135.206 119.528H135.204Z"
                      stroke="#455A7F" stroke-width="2.93" stroke-linecap="round" stroke-linejoin="round"></path>
                    <rect x="23" y="46" width="115" height="73" fill="#455A7F"></rect>
                    <path d="M105.174 37.438C106.419 37.438 107.429 36.4172 107.429 35.158C107.429 33.8988 106.419 32.878 105.174 32.878C103.929 32.878 102.919 33.8988 102.919 35.158C102.919 36.4172 103.929 37.438 105.174 37.438Z" fill="#455A7F"></path>
                    <path d="M116.786 37.438C118.031 37.438 119.041 36.4172 119.041 35.158C119.041 33.8988 118.031 32.878 116.786 32.878C115.541 32.878 114.531 33.8988 114.531 35.158C114.531 36.4172 115.541 37.438 116.786 37.438Z" fill="#455A7F"></path>
                    <path d="M128.389 37.438C129.634 37.438 130.644 36.4172 130.644 35.158C130.644 33.8988 129.634 32.878 128.389 32.878C127.144 32.878 126.134 33.8988 126.134 35.158C126.134 36.4172 127.144 37.438 128.389 37.438Z" fill="#455A7F"></path>
                    <path d="M88.668 61.766L72.172 98.952M63.405 63.8L46.421 80.312L63.405 63.8ZM46.366 80.33L62.694 97.495L46.366 80.33ZM97.436 98.28L114.409 81.76L97.436 98.28ZM114.475 81.74L98.138 64.577L114.475 81.74Z" stroke="white"
                      stroke-width="2.93" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></div>
            <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Créer une classe</h4>
        </a>
    <a class="styles__CategoryButton-vgii8s-4 fUQatb" href="/listMeetings/{{$lesson->id}}/{{Auth::user()->id}}">
        <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT"><svg width="164" height="144" viewBox="0 0 164 144" fill="none">
                <rect x="20" y="82" width="135" height="36" rx="18" fill="#FFCDB2"></rect>
                <rect x="41" y="112" width="95" height="6" fill="#ED956E"></rect>
                <path d="M9 34L21 44.5L26.5 67.5L32.5 69.5H39.5L46.5 83L32.5 84L24 89.5L5 52L1 37L9 34Z" fill="#E3E3E3"></path>
                <path d="M68 31.5L81.5 35.5L76.5 50L90.5 53.5L84.5 68.5L98.5 72L94.5 82H76L57 44.5L45.5 21V13L49.5 7.5L63.5 1.5L59.5 13L73.5 16.5L68 31.5Z" fill="#E3E3E3"></path>
                <path d="M68 31.5L81.5 35.5L76.5 50L90.5 53.5L84.5 68.5L98.5 72L94.5 82H76L57 44.5L45.5 21V13L49.5 7.5L63.5 1.5L59.5 13L73.5 16.5L68 31.5Z" fill="#E3E3E3"></path>
                <path d="M63.0231 36.6552L85.5 82L78.9398 82.8654L57.633 39.2908L63.0231 36.6552Z" fill="#C7C7C7"></path>
                <path d="M141 25.5L141 82.5L121 82.5L120 45L123.5 36L132 28L141 25.5Z" fill="#C7C7C7"></path>
                <circle cx="156" cy="113" r="5" fill="#67C7CC"></circle>
                <path
                  d="M12.63 55.58L18.82 67.84M130.09 117.87V117.81H137.09C141.402 117.924 145.603 116.435 148.88 113.63C153.6 109.63 156.08 104.46 155.12 98.28C153.58 88.38 146.51 82.62 136.44 82.67C127.69 82.67 118.95 82.97 110.2 82.99C104.2 82.99 98.2 82.65 92.25 82.67C74.05 82.74 55.85 82.91 37.65 83.04H37.44C33.2054 83.3242 29.2421 85.2253 26.37 88.35C24.5826 90.3218 23.2617 92.6704 22.5053 95.222C21.7488 97.7736 21.5761 100.463 22 103.09C23.08 110.44 30.24 117.25 37.67 117.42C45.87 117.6 54.06 117.8 62.26 117.79C76.04 117.79 89.82 117.96 103.61 117.88C112.46 117.83 121.28 117.87 130.09 117.87ZM63.82 1.5C59.46 3.34 55.44 4.9 51.56 6.74C50.0282 7.37343 48.678 8.37767 47.6307 9.6624C46.5833 10.9471 45.8718 12.472 45.56 14.1C44.8169 17.5369 45.2684 21.1244 46.84 24.27C52.6146 36.1923 58.4146 48.1024 64.24 60C67.707 67.1 71.233 74.173 74.82 81.22C75.0107 81.5815 75.2791 81.8962 75.6059 82.1417C75.9327 82.3873 76.3097 82.5574 76.71 82.64C82.36 82.76 88.02 82.75 93.71 82.7C93.979 82.6933 94.2432 82.6271 94.4836 82.5061C94.7239 82.385 94.9344 82.2122 95.1 82C96.42 78.63 97.63 75.22 98.92 71.71L84.61 68.84L90.61 53.31L76.61 50.16C78.41 44.94 80.14 39.91 81.93 34.69L67.93 31.57C69.86 26.37 71.7 21.4 73.57 16.32L59.57 13.18C61 9.2 62.35 5.5 63.82 1.5ZM140.67 82.93V25.32C139.67 25.48 138.89 25.54 138.18 25.73C133.026 26.9934 128.452 29.9662 125.205 34.1632C121.958 38.3603 120.229 43.5339 120.3 48.84C120.3 57.78 120.53 66.72 120.64 75.66V82.93H140.67V82.93ZM38.51 68.05C32 71.3 26.91 69.64 25.16 63.47C23.6865 58.6306 22.5307 53.7001 21.7 48.71C21.5438 47.0202 21.034 45.3822 20.2036 43.9023C19.3732 42.4225 18.2408 41.1338 16.88 40.12C15.9258 39.3293 15.0176 38.4846 14.16 37.59C9.32998 33 9.32998 33 3.35998 35.89C2.98998 36.07 2.51998 36.17 2.27998 36.47C1.91998 36.92 1.39998 37.58 1.51998 38.01C2.73998 42.78 3.51998 47.78 5.51998 52.2C10.92 63.99 16.87 75.54 22.62 87.2C22.87 87.71 24.04 89.01 24.37 89.55C29.23 85.48 33.72 82.55 39.99 83.05C41.99 83.23 43.99 83.05 46.44 83.05C45.84 81.85 45.58 81.3 45.3 80.76L38.51 68.05V68.05ZM135.2 44.28V66.77V44.28Z"
                  stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                  d="M28.79 101.24C28.79 101.24 29.45 111.24 44.26 111.81H92.52M137.01 92.34V106.99M144.18 99.67H129.52M155.89 106.53C157.061 106.53 158.205 106.877 159.179 107.528C160.152 108.178 160.911 109.103 161.359 110.185C161.807 111.266 161.925 112.457 161.696 113.605C161.468 114.753 160.904 115.808 160.076 116.636C159.248 117.464 158.193 118.028 157.045 118.256C155.897 118.485 154.706 118.367 153.624 117.919C152.543 117.471 151.618 116.713 150.968 115.739C150.317 114.765 149.97 113.621 149.97 112.45L155.89 106.53Z"
                  stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg></div>
        <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Voir la liste des meetings</h4>
    </a><a class="styles__CategoryButton-vgii8s-4 fUQatb" href="/categories/prepare-for-interview">
        <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT"><svg width="162" height="145" viewBox="0 0 162 145" fill="none">
                <path d="M21 21L25.5 9L38.5 2H115L127 7L135.5 19V138L106 116H39.5L27 110.5L21 96.5V21Z" fill="#F8F8FF"></path>
                <path
                  d="M137.496 144.317L104.976 118.133H42.912C29.822 118.12 19.213 107.526 19.2 94.453V23.68C19.213 10.607 29.822 0.013 42.912 0H113.784C126.874 0.013 137.483 10.607 137.496 23.68V144.317V144.317ZM42.912 4.074C32.075 4.088 23.293 12.857 23.28 23.679V94.454C23.293 105.276 32.075 114.045 42.912 114.059H106.416L133.416 135.797V23.679C133.403 12.857 124.621 4.088 113.784 4.074H42.912V4.074Z"
                  fill="#455A7F"></path>
                <path
                  d="M69.216 28.437H47.016C46.6812 28.4041 46.3706 28.2478 46.1447 27.9986C45.9187 27.7493 45.7936 27.4249 45.7936 27.0885C45.7936 26.7521 45.9187 26.4277 46.1447 26.1784C46.3706 25.9292 46.6812 25.7729 47.016 25.74H69.216C69.4028 25.7239 69.5909 25.7468 69.7683 25.8072C69.9458 25.8676 70.1088 25.9643 70.2469 26.091C70.3851 26.2178 70.4954 26.3719 70.5708 26.5435C70.6463 26.7151 70.6852 26.9005 70.6852 27.088C70.6852 27.2755 70.6463 27.4609 70.5708 27.6325C70.4954 27.8041 70.3851 27.9582 70.2469 28.085C70.1088 28.2117 69.9458 28.3084 69.7683 28.3688C69.5909 28.4292 69.4028 28.4521 69.216 28.436V28.437ZM91.416 41.583H47.016C46.6812 41.5501 46.3706 41.3938 46.1447 41.1446C45.9187 40.8953 45.7936 40.5709 45.7936 40.2345C45.7936 39.8981 45.9187 39.5737 46.1447 39.3244C46.3706 39.0752 46.6812 38.9189 47.016 38.886H91.416C91.6028 38.8699 91.7909 38.8928 91.9683 38.9532C92.1458 39.0136 92.3088 39.1103 92.4469 39.237C92.5851 39.3638 92.6954 39.5179 92.7708 39.6895C92.8463 39.8611 92.8852 40.0465 92.8852 40.234C92.8852 40.4215 92.8463 40.6069 92.7708 40.7785C92.6954 40.9501 92.5851 41.1042 92.4469 41.231C92.3088 41.3577 92.1458 41.4544 91.9683 41.5148C91.7909 41.5752 91.6028 41.5981 91.416 41.582V41.583ZM108.072 28.437H85.86C85.5252 28.4041 85.2146 28.2478 84.9887 27.9986C84.7627 27.7493 84.6376 27.4249 84.6376 27.0885C84.6376 26.7521 84.7627 26.4277 84.9887 26.1784C85.2146 25.9292 85.5252 25.7729 85.86 25.74H108.072C108.407 25.7729 108.717 25.9292 108.943 26.1784C109.169 26.4277 109.294 26.7521 109.294 27.0885C109.294 27.4249 109.169 27.7493 108.943 27.9986C108.717 28.2478 108.407 28.4041 108.072 28.437V28.437ZM69.216 96.311H47.016C46.8354 96.318 46.6553 96.2884 46.4864 96.2241C46.3175 96.1598 46.1633 96.0621 46.033 95.9368C45.9028 95.8115 45.7992 95.6612 45.7284 95.4949C45.6577 95.3286 45.6212 95.1497 45.6212 94.969C45.6212 94.7883 45.6577 94.6094 45.7284 94.4431C45.7992 94.2768 45.9028 94.1265 46.033 94.0012C46.1633 93.8759 46.3175 93.7782 46.4864 93.7139C46.6553 93.6496 46.8354 93.62 47.016 93.627H69.216C69.3966 93.62 69.5767 93.6496 69.7456 93.7139C69.9145 93.7782 70.0687 93.8759 70.199 94.0012C70.3292 94.1265 70.4328 94.2768 70.5036 94.4431C70.5743 94.6094 70.6108 94.7883 70.6108 94.969C70.6108 95.1497 70.5743 95.3286 70.5036 95.4949C70.4328 95.6612 70.3292 95.8115 70.199 95.9368C70.0687 96.0621 69.9145 96.1598 69.7456 96.2241C69.5767 96.2884 69.3966 96.318 69.216 96.311V96.311ZM108.072 96.311H85.86C85.6794 96.318 85.4993 96.2884 85.3304 96.2241C85.1615 96.1598 85.0073 96.0621 84.877 95.9368C84.7468 95.8115 84.6432 95.6612 84.5724 95.4949C84.5017 95.3286 84.4652 95.1497 84.4652 94.969C84.4652 94.7883 84.5017 94.6094 84.5724 94.4431C84.6432 94.2768 84.7468 94.1265 84.877 94.0012C85.0073 93.8759 85.1615 93.7782 85.3304 93.7139C85.4993 93.6496 85.6794 93.62 85.86 93.627H108.072C108.253 93.62 108.433 93.6496 108.602 93.7139C108.771 93.7782 108.925 93.8759 109.055 94.0012C109.185 94.1265 109.289 94.2768 109.36 94.4431C109.43 94.6094 109.467 94.7883 109.467 94.969C109.467 95.1497 109.43 95.3286 109.36 95.4949C109.289 95.6612 109.185 95.8115 109.055 95.9368C108.925 96.0621 108.771 96.1598 108.602 96.2241C108.433 96.2884 108.253 96.318 108.072 96.311V96.311ZM108.072 41.583H100.092C99.7572 41.5501 99.4466 41.3938 99.2207 41.1446C98.9947 40.8953 98.8696 40.5709 98.8696 40.2345C98.8696 39.8981 98.9947 39.5737 99.2207 39.3244C99.4466 39.0752 99.7572 38.9189 100.092 38.886H108.072C108.407 38.9189 108.717 39.0752 108.943 39.3244C109.169 39.5737 109.294 39.8981 109.294 40.2345C109.294 40.5709 109.169 40.8953 108.943 41.1446C108.717 41.3938 108.407 41.5501 108.072 41.583V41.583ZM91.416 81.488H47.016C46.7804 81.4878 46.5489 81.4257 46.3449 81.3078C46.1408 81.19 45.9714 81.0205 45.8535 80.8165C45.7356 80.6125 45.6734 80.3811 45.6731 80.1455C45.6728 79.9098 45.7345 79.6783 45.852 79.474C46.092 79.059 46.536 78.804 47.016 78.804H91.416C91.6515 78.8043 91.8828 78.8665 92.0867 78.9843C92.2906 79.1021 92.46 79.2714 92.5778 79.4752C92.6957 79.6791 92.758 79.9103 92.7583 80.1458C92.7587 80.3813 92.6972 80.6128 92.58 80.817C92.34 81.232 91.896 81.487 91.416 81.487V81.488ZM108.072 81.488H100.092C99.9126 81.4929 99.7341 81.4618 99.5669 81.3965C99.3998 81.3313 99.2474 81.2332 99.1188 81.108C98.9902 80.9829 98.8879 80.8332 98.8181 80.6679C98.7483 80.5026 98.7124 80.3249 98.7124 80.1455C98.7124 79.9661 98.7483 79.7884 98.8181 79.6231C98.8879 79.4578 98.9902 79.3081 99.1188 79.183C99.2474 79.0578 99.3998 78.9597 99.5669 78.8945C99.7341 78.8292 99.9126 78.7981 100.092 78.803H108.072C108.308 78.8032 108.539 78.8653 108.743 78.9832C108.947 79.101 109.117 79.2705 109.235 79.4745C109.352 79.6785 109.415 79.9099 109.415 80.1455C109.415 80.3812 109.353 80.6127 109.236 80.817C108.996 81.232 108.552 81.487 108.072 81.487V81.488ZM108.072 54.729H85.86C85.5252 54.6961 85.2146 54.5398 84.9887 54.2906C84.7627 54.0413 84.6376 53.7169 84.6376 53.3805C84.6376 53.0441 84.7627 52.7197 84.9887 52.4704C85.2146 52.2212 85.5252 52.0649 85.86 52.032H108.072C108.407 52.0649 108.717 52.2212 108.943 52.4704C109.169 52.7197 109.294 53.0441 109.294 53.3805C109.294 53.7169 109.169 54.0413 108.943 54.2906C108.717 54.5398 108.407 54.6961 108.072 54.729V54.729ZM108.072 67.862H63.672C63.4914 67.869 63.3113 67.8394 63.1424 67.7751C62.9735 67.7108 62.8193 67.6131 62.689 67.4878C62.5588 67.3625 62.4552 67.2122 62.3844 67.0459C62.3137 66.8796 62.2772 66.7007 62.2772 66.52C62.2772 66.3393 62.3137 66.1604 62.3844 65.9941C62.4552 65.8278 62.5588 65.6775 62.689 65.5522C62.8193 65.4269 62.9735 65.3292 63.1424 65.2649C63.3113 65.2006 63.4914 65.171 63.672 65.178H108.072C108.253 65.171 108.433 65.2006 108.602 65.2649C108.771 65.3292 108.925 65.4269 109.055 65.5522C109.185 65.6775 109.289 65.8278 109.36 65.9941C109.43 66.1604 109.467 66.3393 109.467 66.52C109.467 66.7007 109.43 66.8796 109.36 67.0459C109.289 67.2122 109.185 67.3625 109.055 67.4878C108.925 67.6131 108.771 67.7108 108.602 67.7751C108.433 67.8394 108.253 67.869 108.072 67.862V67.862ZM69.216 54.729H47.016C46.6812 54.6961 46.3706 54.5398 46.1447 54.2906C45.9187 54.0413 45.7936 53.7169 45.7936 53.3805C45.7936 53.0441 45.9187 52.7197 46.1447 52.4704C46.3706 52.2212 46.6812 52.0649 47.016 52.032H69.216C69.4028 52.0159 69.5909 52.0388 69.7683 52.0992C69.9458 52.1596 70.1088 52.2563 70.2469 52.383C70.3851 52.5098 70.4954 52.6639 70.5708 52.8355C70.6463 53.0071 70.6852 53.1925 70.6852 53.38C70.6852 53.5675 70.6463 53.7529 70.5708 53.9245C70.4954 54.0961 70.3851 54.2502 70.2469 54.377C70.1088 54.5037 69.9458 54.6004 69.7683 54.6608C69.5909 54.7212 69.4028 54.7441 69.216 54.728V54.729ZM54.996 67.862H47.016C46.8354 67.869 46.6553 67.8394 46.4864 67.7751C46.3175 67.7108 46.1633 67.6131 46.033 67.4878C45.9028 67.3625 45.7992 67.2122 45.7284 67.0459C45.6577 66.8796 45.6212 66.7007 45.6212 66.52C45.6212 66.3393 45.6577 66.1604 45.7284 65.9941C45.7992 65.8278 45.9028 65.6775 46.033 65.5522C46.1633 65.4269 46.3175 65.3292 46.4864 65.2649C46.6553 65.2006 46.8354 65.171 47.016 65.178H54.996C55.1766 65.171 55.3567 65.2006 55.5256 65.2649C55.6945 65.3292 55.8487 65.4269 55.979 65.5522C56.1092 65.6775 56.2128 65.8278 56.2836 65.9941C56.3543 66.1604 56.3908 66.3393 56.3908 66.52C56.3908 66.7007 56.3543 66.8796 56.2836 67.0459C56.2128 67.2122 56.1092 67.3625 55.979 67.4878C55.8487 67.6131 55.6945 67.7108 55.5256 67.7751C55.3567 67.8394 55.1766 67.869 54.996 67.862V67.862Z"
                  fill="#21B1B9"></path>
            </svg></div>
        <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Voir un aperçu de cette leçon</h4>
    </a></div>



    @if($lesson->webinar_meeting !== null)
    <div ng-if="!enableReordering" ng-show="list.length > 0" class="row tch-course-list">
        <!---->
        <div what="course" which="Techniques de vente" ng-repeat="course in list" ng-class="::{ 'tch-course-listing-unpublished': course.is_published == false }" class="tch-course-listing">

                <div class="tch-course-listing-wrapper" what="course-card" course="course" course-stats="courseStats">
                    <div style="background-image: url(/images/lessons/images/{{$lesson->image}})" class="tch-course-listing-image"></div>
                    <div what="course name" ng-bind="::course.name" class="tch-course-listing-title _2kIOe">
                        ID de la conférence: {{$json['id']}} <br>
                        <p class="" style="color: black; cursor: default;">Sujet: <span style="cursor: pointer;"> <strong>{{$json['topic']}}</strong> </span></p><br>
                        <p>Lien de la réunion: <a href="{{$json['join_url']}}">{{$json['join_url']}}</a></p><br>
                        <p>Date et durée: {{$json['start_time']}} / {{$json['duration']}} </p><br>
                        <p>ID de l'hôte: {{$json['host_id']}}</p>

                        <a href="/associateMeeting/{{$lesson->id}}/{{$json['id']}}" id="test-id-new-lecture-btn" class="tch-btn-content-primary tch-btn-sm tch-btn-sm-block fastclickable">
                            Associer cette conférence à la leçon {{$lesson->title}}
                        </a>
                    </div>
                    <div class="date-days tch-course-listing-title _2kIOe">

                    </div>

                </div>
            </div>
        <!---->
    </div>
    <!---->
    @endif
    <!---->
</ui-view>





<div style="margin-top: 30px;" ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                    <div ng-transclude="">

                        <div label="Bio" for="author_bio_id" skip-validation="true" form="">
                            <!---->
                            <!---->
                            <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="status" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Statut de la leçon</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                    <select name="status" id="status" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-api-validate">
                                        @if($lesson->status == 'inactive')
                                        <option selected label="" value="inactive">Brouillon</option>
                                        <option label="" value="active">Public</option>
                                        @else
                                        <option label="" value="inactive">Brouillon</option>
                                        <option selected label="" value="active">Public</option>
                                        @endif
                                    </select>
                                    <br>

                                </div>

                            </div>
                            <!---->
                        </div>

                        <!---->
                        <div label="Type" for="free_lesson" form="" tooltip-text="Add these to your course so students can sort by category in your school's course directory.">
                            <!---->
                            <!---->
                            <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="categories" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Type</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                    <select id="free_lesson" name="free_lesson" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-api-validate">
                                        @if($lesson->free_lesson == 'no')
                                        <option selected label="" value="no">Pas gratuit</option>
                                        <option label="" value="yes">Aperçu gratuti</option>
                                        @else
                                        <option label="" value="no">Pas gratuti</option>
                                        <option selected label="" value="yes">Aperçu gratuit</option>
                                        @endif
                                    </select>
                                </div>


                                </help-block>
                            </div>
                            <!---->
                        </div>
                    </div>

                </div>



</div>

<script type="text/javascript" src="/js/admin_views/lesson.js"></script>
<script type="text/javascript" src="/js/admin_views/curriculum.js"></script>

@endsection
