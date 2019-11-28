@extends('layouts.admin_views.menu-school-icon')
@section('title', 'Paramètres du cours')
@section('content')
<style media="screen">

/*! CSS Used from: Embedded */
.ng-hide:not(.ng-hide-animate){display:none!important;}
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
.ui-select-bootstrap > .ui-select-choices{width:100%;height:auto;max-height:200px;overflow-x:hidden;margin-top:-1px;}
.ui-select-multiple.ui-select-bootstrap{height:auto;padding:3px 3px 0 3px;}
.ui-select-multiple.ui-select-bootstrap input.ui-select-search{background-color:transparent!important;border:none;outline:none;height:1.666666em;margin-bottom:3px;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
strong{font-weight:bold;}
small{font-size:80%;}
img{border:0;}
button,input,select,textarea{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
textarea{overflow:auto;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-trash-o:before{content:"\F014";}
.fa-lock:before{content:"\F023";}
.fa-image:before{content:"\F03E";}
.fa-question-circle:before{content:"\F059"; display: none!important;}
.fa-external-link:before{content:"\F08E";}
.fa-bars:before{content:"\F0C9";}
.fa-angle-down:before{content:"\F107";}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
strong{font-weight:bold;}
small{font-size:80%;}
img{border:0;}
button,input,select,textarea{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
textarea{overflow:auto;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after,a[href^="javascript:"]:after{content:"";}
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
.img-responsive{display:block;max-width:100%;height:auto;}
[role="button"]{cursor:pointer;}
h2{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h2 .small{font-weight:400;line-height:1;color:#e4e5e6;}
h2{margin-top:22px;margin-bottom:11px;}
h2 .small{font-size:65%;}
h2{font-size:38px;}
p{margin:0 0 11px;}
small,.small{font-size:92%;}
.text-center{text-align:center;}
ul{margin-top:0;margin-bottom:11px;}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-lg-3,.col-md-4,.col-xs-5,.col-sm-5,.col-md-5,.col-sm-7,.col-md-8,.col-lg-9,.col-lg-10,.col-xs-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
.col-xs-5,.col-xs-12{float:left;}
.col-xs-5{width:41.66667%;}
.col-xs-12{width:100%;}
@media (min-width: 768px){
.col-sm-5,.col-sm-7{float:left;}
.col-sm-5{width:41.66667%;}
.col-sm-7{width:58.33333%;}
}
@media (min-width: 992px){
.col-md-4,.col-md-5,.col-md-8,.col-md-12{float:left;}
.col-md-4{width:33.33333%;}
.col-md-5{width:41.66667%;}
.col-md-8{width:66.66667%;}
.col-md-12{width:100%;}
}
@media (min-width: 1200px){
.col-lg-3,.col-lg-9,.col-lg-10,.col-lg-12{float:left;}
.col-lg-3{width:25%;}
.col-lg-9{width:75%;}
.col-lg-10{width:83.33333%;}
.col-lg-12{width:100%;}
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
.btn-block + .btn-block{margin-top:5px;}
.dropdown{position:relative;}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:13px;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0, 0, 0, .15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0, 0, 0, .175);box-shadow:0 6px 12px rgba(0, 0, 0, .175);}
.dropdown-menu .divider{height:1px;margin:10px 0;overflow:hidden;background-color:#e5e5e5;}
.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.72222;color:#9a9ea2;white-space:nowrap;}
.input-group{position:relative;display:table;border-collapse:separate;}
.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0;}
.input-group .form-control:focus{z-index:3;}
.input-group-addon,.input-group .form-control{display:table-cell;}
.input-group .form-control:not(:first-child):not(:last-child){border-radius:0;}
.input-group-addon{width:1%;white-space:nowrap;vertical-align:middle;}
.input-group-addon{padding:6px 12px;font-size:13px;font-weight:400;line-height:1;color:#95a5a6;text-align:center;background-color:#eeeeee;border:1px solid #ccc;border-radius:5px;}
.input-group-addon:first-child{border-top-right-radius:0;border-bottom-right-radius:0;}
.input-group-addon:first-child{border-right:0;}
.input-group-addon:last-child{border-top-left-radius:0;border-bottom-left-radius:0;}
.input-group-addon:last-child{border-left:0;}
.alert{padding:15px;margin-bottom:22px;border:1px solid transparent;border-radius:4px;}
.alert-info{color:#3498db;background-color:#d9edf7;border-color:#bce8f1;}
[disabled]{cursor:default!important;pointer-events:none;}
.tch-btn-header-primary{color:white;background-color:#6aace6;border:1px solid #6aace6;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
.tch-btn-header-primary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#6aace6;border-color:#6aace6;}
.tch-btn-header-primary:active{background-image:none;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary:focus{outline:0!important;}
.tch-btn-header-primary-block{color:white;background-color:#6aace6;border:1px solid #6aace6;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;display:block;width:100%;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;max-width:100%;line-height:30px;}
.tch-btn-header-primary-block:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-header-primary-block:active:hover,.tch-btn-header-primary-block:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
.tch-btn-header-primary-block:active{background-image:none;}
.tch-btn-header-primary-block:focus{outline:0!important;}
.tch-btn-header-primary-block:focus{outline:0!important;}
.tch-btn-header-primary-block:focus{outline:0!important;}
.tch-btn-header-secondary{min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;color:white;background-color:#fff;border:1px solid #6aace6;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#6aace6;color:#6aace6;}
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
.tch-btn-header-danger{min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;color:white;background-color:#fff;border:1px solid #4D90CC;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#64aff3;color:#4D90CC;}
.tch-btn-header-danger:focus{color:white;background-color:#ededed;border-color:#64aff3;}
.tch-btn-header-danger:hover{color:white;background-color:#ededed;border-color:#64aff3;}
.tch-btn-header-danger:active{color:white;background-color:#ededed;border-color:#64aff3;}
.tch-btn-header-danger:active:hover,.tch-btn-header-danger:active:focus{color:white;background-color:#64aff3;border-color:#64aff3;}
.tch-btn-header-danger:active{background-image:none;}
.tch-btn-header-danger:active,.tch-btn-header-danger:hover,.tch-btn-header-danger:focus{background:#fff;border-color:#64aff3;color:#64aff3;}
.tch-btn-header-danger:active:hover,.tch-btn-header-danger:active:focus,.tch-btn-header-danger:hover:hover,.tch-btn-header-danger:hover:focus,.tch-btn-header-danger:focus:hover,.tch-btn-header-danger:focus:focus{background:#fff;border-color:#64aff3;color:#64aff3;}
.tch-btn-header-danger:focus{outline:0!important;}
.tch-btn-header-danger:focus{outline:0!important;}
.tch-btn-header-danger:focus{outline:0!important;}
.tch-btn-header-danger:focus{outline:0!important;}
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
.tch-btn-content-danger{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#fff;border:1px solid #6aace6;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;border-color:#6aace6;color:#6aace6;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-danger:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-danger:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
.tch-btn-content-danger:active{background-image:none;}
.tch-btn-content-danger:active,.tch-btn-content-danger:hover,.tch-btn-content-danger:focus{background:#fff;border-color:#4D90CC;color:#4D90CC;}
.tch-btn-content-danger:active:hover,.tch-btn-content-danger:active:focus,.tch-btn-content-danger:hover:hover,.tch-btn-content-danger:hover:focus,.tch-btn-content-danger:focus:hover,.tch-btn-content-danger:focus:focus{background:#fff;border-color:#4D90CC;color:#4D90CC;}
.tch-btn-content-danger:focus{outline:0!important;}
.tch-btn-content-danger:focus{outline:0!important;}
.dropdown-menu{-webkit-box-shadow:2px 2px 9px 2px rgba(0, 0, 0, .05);box-shadow:2px 2px 9px 2px rgba(0, 0, 0, .05);border:1px solid #dcdcdc;border-radius:5px;position:absolute;display:block;z-index:1000;background:#fff;opacity:0;pointer-events:none;-webkit-transform:scale(0);transform:scale(0);margin-top:10px;-webkit-transition:opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);transition:transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), opacity 0.3s cubic-bezier(0.23, 1.5, 0.32, 1), -webkit-transform 0.3s cubic-bezier(0.23, 1.5, 0.32, 1);-webkit-transform-origin:0% 0%;transform-origin:0% 0%;max-height:400px;overflow:auto;overflow-x:hidden;min-width:300px;}
.tch-btn-tooltip{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;padding:4px 5px!important;color:#4D90CC;}
.tch-btn-tooltip:focus{outline:0!important;}
.tch-btn-tooltip:hover,.tch-btn-tooltip:active,.tch-btn-tooltip:focus{color:#4D90CC;-webkit-box-shadow:none;box-shadow:none;}
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
h2{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h2 .small{font-weight:normal;line-height:1;color:#8d939a;}
h2.tch-subheading{font-weight:600;font-size:15px;letter-spacing:0.1px;margin-bottom:20px;color:#545665;}
h2.tch-subheading .small{line-height:19px;margin-top:13px;color:rgba(71, 80, 94, .55);font-size:12px;font-weight:500;letter-spacing:0.5px;font-family:"TeachableSans";}
h2{margin-top:22px;margin-bottom:11px;}
h2 .small{font-size:65%;}
h2{font-size:38px;}
p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
small,.small{font-size:92%;}
.text-center{text-align:center;}
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
    margin-left: 86px;
    display: none;
}
.tch-page-header i{margin-right:10px;}
.tch-page-header button i{margin-right:0;}
.tch-page-header .tch-btn-header-icon{padding:10px 15px;}
.input-group-addon{padding:10px 12px;font-size:13px;color:white;text-align:center;background-color:#9a9ea2;border:1px solid #9a9ea2;border-radius:6px;-webkit-transition:"border .25s linear, color .25s linear, background-color .25s linear";transition:"border .25s linear, color .25s linear, background-color .25s linear";}
.control-label{font-size:14px;}
.tch-inline-form{margin-right:-15px;margin-left:-15px;margin:0;margin-bottom:2px!important;background:#fff;border:1px solid #dbdbdb;border-radius:30px;position:relative;}
.tch-inline-form:before,.tch-inline-form:after{display:table;content:" ";}
.tch-inline-form:after{clear:both;}
.tch-inline-form div.btn-attached{padding-top:13px;font-weight:bold;-webkit-box-shadow:none!important;box-shadow:none!important;color:#4D90CC;height:49px;border-top-left-radius:4px;border-top-right-radius:4px;font-size:13px!important;-webkit-transition:0.1s all ease-in;transition:0.1s all ease-in;}
.tch-inline-form div.btn-attached:hover{color:#6aace6;}
.tch-inline-form div.btn-attached:focus,.tch-inline-form div.btn-attached:active{outline:none;}
.input-group-addon{background:#f9f9f9;padding:1px;color:#34495e;padding:0 10px;font-weight:200;font-size:13px;border:1px solid #dbdbdb;}
.tch-inline-form .author-form .row{margin-left:auto!important;margin-right:auto!important;}
.tch-inline-form .author-form .inline-form-container{width:360px;margin:0 auto;padding-top:20px;padding-bottom:40px;}
.tch-thumbnail-link-wrapper{margin-right:20px;max-width:220px;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link{display:block;line-height:16px;color:#47505e;font-size:12px;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link strong{font-weight:600;letter-spacing:0.8px;color:#4D90CC;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link i.fa{font-size:20px;left:75%;opacity:0;position:absolute;top:12%;background:#fff;padding:0px 3px;border-radius:3px;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link:hover{color:#6aace6;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link:hover strong{color:#4D90CC;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link:hover i.fa{opacity:1;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link img{margin-bottom:15px;width:100%;}
.tch-thumbnail-link-wrapper .tch-thumbnail-link .muted{color:#ababab;font-size:12px;line-height:24px;font-family:"TeachableSans";}
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
.tch-section-heading h2.tch-subheading{margin-top:10px;padding-right:10px;color:#555765;}
.tch-section-heading a{color:#809196;text-decoration:underline;font-weight:600;}
.tch-section-heading a:hover{color:#67777c;}
.tch-section-heading ul.section-tabs{padding-left:0;list-style:none;margin-top:20px;}
.tch-section-heading ul.section-tabs li{display:inline-block;margin-left:10px;}
.tch-section-heading ul.section-tabs li a{text-decoration:none;font-size:12px;cursor:pointer;margin-right:10px;}
.tch-section-heading ul.section-tabs li a img{margin-right:6px;}
.tch-section-heading ul.section-tabs li:first-child{margin-left:0;}
.tch-section-heading ul.section-tabs li.faded-out{opacity:0.5;}
.tch-section-heading ul.section-tabs li.faded-out:hover{opacity:1;}
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
.ui-select-bootstrap > .ui-select-choices{width:100%;height:auto;max-height:180px!important;overflow-x:hidden;margin-top:2px!important;border-radius:5px!important;z-index:10000;}
.ui-select-multiple.ui-select-bootstrap{height:auto;padding:8px 2px 5px 10px!important;}
@media screen and (max-width: 991px){
.state-admin-courses-course .course-image{width:100%;}
}
.state-admin-courses-course-information .admin-content .redactor-toolbar .re-orderedlist,.state-admin-courses-course-information .admin-content .redactor-toolbar .re-unorderedlist{display:none;}
.state-admin-courses-course-information .course-compliance-form .control-label{margin-bottom:16px;}
.state-admin-courses-course-information .course-compliance-form .row:last-child .control-label{margin-bottom:20px;}
.state-admin-courses-course-information .course-compliance-form .cc-checkbox{float:left;margin-left:15px;margin-right:32px;}
@media (min-width: 1200px){
.state-admin-courses-course-information .course-compliance-form .cc-checkbox{margin-right:16px;}
}
@media screen and (max-width: 991px){
.state-admin-courses-course-information .course-image{width:100%;}
}
.slide-hide{overflow:hidden;max-height:0;padding-top:0;padding-bottom:0;margin-top:0;margin-bottom:0;-webkit-transition-duration:0.3s;transition-duration:0.3s;-webkit-transition-timing-function:cubic-bezier(0, 1, 0.5, 1);transition-timing-function:cubic-bezier(0, 1, 0.5, 1);}
.half-opaque{opacity:0.5;}
.faded-out{opacity:0.1;}
.add-top-margin{margin-top:15px;}
.redactor-editor{max-height:300px;}
.grey-italics{color:#a9a9a9;line-height:21px;display:block;margin-bottom:4px;font-family:"TeachableSans";font-weight:300;}
.icon-arrow-down{margin-left:5px;vertical-align:-1px;color:#ccc;}
.space::before{content:'\A0';}
.gravatar{margin-top:10px;border-radius:50% 50%;width:48px;height:48px;margin-left:auto;margin-right:auto;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
.btn{font-family:'TeachableSans', sans-serif;}
}



</style>


<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
    <div ng-intro-options="introJSOptions" ng-intro-method="introJSTrigger" ng-intro-autostart="introJSShouldAutoStart"></div>
    <div what="page header" class="tch-section-nav tch-page-header" text="Information" fixed-nav="true" has-beta-banner="$ctrl.permissions.can('view_in_beta_course_compliance')" beta-banner-text="Course Compliance is now in Beta."
      beta-banner-url="#course_compliance" hide-feedback-button="true">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger"><button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable"><i class="fa fa-bars"></i></button></div>
                    <!---->
                    <!---->Information

                    <div class="tch-btn-header-icon-2">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="40"viewBox="0 0 172 172"style=" fill:#000000;position: relative;bottom: 8px;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#3498db"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path><path d="M0,172v-172h172v172z" fill="none"></path><path d="M3.44,168.56v-165.12h165.12v165.12z" fill="none"></path></g></g></svg>
                    </div>

                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons"></div>
            </div>
            <!---->
        </div>
        <script type="text/javascript" src="/js/admin_views/menu.js"></script>

    </div>
    <!---->
    <!---->
    <!---->
    <!---->
    <ng-include src="'courses/course/information/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-publish">
        <div ng-show="!section.if || section.if()" id="section-publish" class="row tch-section-wrapper" section="section">
            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                <!---->
                <!---->
                <h2 ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Publier</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="small">Publiez ou annulez la publication de votre cours.</p>
                    <!---->
                    <!---->
                </h2>
                <!---->
            </div>
            <form ng-submit="save()" name="settingsLaunchModeForm" api-form="savePromise" class="ng-pristine ng-valid">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
            {{-- {{dd($course->state)}} --}}
            <input style="display: none;" id="courseId" type="text" name="id" value="{{$course->id}}">

                    @if ($course->state == "inactive")
                    <!---->
                    <div id="changeState" class="tch-btn-header-danger disable-animations fastclickable">Publier le cours</div>
                    <input style="display: none;" id="state" type="text" name="state" value="active">
                @else
                    <!---->
                    <div id="changeState" class="tch-btn-header-danger disable-animations fastclickable">Annuler la publication du cours</div>
                    <input style="display: none;" id="state" type="text" name="state" value="inactive">

                @endif
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
    <!---->
    <ng-include src="'courses/course/information/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-preview">
        <div class="row tch-section-wrapper">
            <div class="tch-section-heading col-md-12 col-lg-3">
                <h2 class="tch-subheading">Aperçu<br>
                    <p class="small">Voyez à quoi ressemble votre cours pour les visiteurs ou les étudiants inscrits.</p>
                </h2>
            </div>
            <div class="tch-section-content tch-thumbnail-link-wrapper col-lg-3 col-md-5 col-sm-5 col-xs-5">
              @if($course->type == 'course')
              <a ng-click="cancel()" href="{{ route('course.slug', $course->slug) }}" target="_blank" id="test-id-preview-sales-page"
                  class="tch-thumbnail-link text-center fastclickable"><img src="/images/courses/preview-as-visitor.jpg"><i class="fa fa-external-link"></i><br><strong>Page de vente&nbsp;</strong>
                    <div class="muted">en tant que visiteur</div>
                </a>
                @endif
                @if($course->type == 'path' || $course->type == 'bootcamp')
                <a ng-click="cancel()" href="{{ route('path.slug', $course->slug) }}" target="_blank" id="test-id-preview-sales-page"
                    class="tch-thumbnail-link text-center fastclickable"><img src="/images/courses/preview-as-visitor.jpg"><i class="fa fa-external-link"></i><br><strong>Page de vente&nbsp;</strong>
                      <div class="muted">en tant que visiteur</div>
                  </a>
                    @endif
            </div>
            @if($course->type == 'course')
            <div class="tch-section-content tch-thumbnail-link-wrapper col-lg-3 col-md-5 col-sm-5 col-xs-5 shift-right">
              <a ng-click="cancel()" href="/course/enrolled/{{$course->slug}}" target="_blank" id="test-id-preview-curriculum-btn"
                  class="tch-thumbnail-link text-center fastclickable"><img src="/images/courses/preview-as-enrolled-student.jpg"><i class="fa fa-external-link"></i>
                  <br><strong>Programme de cours&nbsp;</strong>
                    <div class="muted">en tant qu'étudiant inscrit</div>
                </a>
            </div>
            @endif
        </div>
    </ng-include>
    <!---->
    <!---->
    <ng-include id="section-details">
        <form method="post" action="{{url('courses', $course)}}" class="ng-pristine ng-valid ng-valid-required ng-valid-api-validate ng-valid-maxlength ng-valid-minlength">
            <div ng-show="!section.if || section.if()" id="section-details" class="row tch-section-wrapper" section="section" save="true" form="courseDetailsForm">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                    <!---->
                    <!---->
                    <h2 ng-if="section.name" class="tch-subheading">
                        <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Détails</span>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><br ng-if="!removeDescriptionLineBreak">
                        <!---->
                        <p ng-bind-html="section.description" what="section-description" class="small">Changer les informations sur votre cours.</p>
                        <!---->
                        <!---->
                    </h2>
                    <!---->
                </div>
                <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                    <div ng-transclude="">
                        <div form="courseDetailsForm" label="Name" for="name">
                            <!---->
                            <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="name" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Nom</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude=""><input name="name" value="{{$course->name}}" type="text" placeholder="e.g. 'Advanced Photoshop Techniques' or 'Watercolors for Dummies'"  required="" api-validate=""
                                      class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-api-validate"></div>
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
                                    <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="name" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
                            <!---->
                        </div>
                        <div label="Bio" for="author_bio_id" skip-validation="true" form="">
                            <!---->
                            <!---->
                            <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="author_bio_id" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Auteur</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                    @if($school->authors)
                                    <select name="author_id" id="author_select"
                                      class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-api-validate">
                                        <option value="" selected="" disabled="">Choisissez un auteur pour ce cours</option>
                                        @foreach($school->authors as $author)
                                        @if($author->id == $course->author_id)
                                        <option label="" value="{{$author->id}}" selected="selected">{{$author->full_name}}</option>
                                        @else
                                        <option label="" value="{{$author->id}}">{{$author->full_name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @endif
                                    <br>
                                    <div class="tch-inline-form">
                                        <div id="addAuthor" class="btn btn-block btn-attached fastclickable">
                                            Nouveau auteur
                                            <i class="fa fa-angle-down icon-arrow-down"></i>
                                        </div>
                                        <div id="addAuthorZone" class="slide-hide">
                                            <!---->
                                            <ng-include src="'common/new-author/new-author-form.html'">
                                                <nested-form id="author-form" what="author form" class="author-form">
                                                    <form id="formNewAuthor" class="" action="index.html" method="post">
                                                        <div ng-controller="Fedora.Admin.NewAuthorFormController">
                                                            @csrf
                                                            <div class="inline-form-container">
                                                                <div class="row">
                                                                    <div class="col-sm-5 text-center"><img width="100" height="52" class="course-image gravatar" src="/images/users/avatar_final.png">
                                                                        <div
                                                                           class="tch-btn-content-secondary fastclickable">
                                                                           <input id="imageAuthor" type="file" name="image" value="">
                                                                       </div>
                                                                    </div>
                                                                    <div class="col-sm-7 form-boxes-right">
                                                                        <div class="row">
                                                                            <input id="nameAuthor" name="full_name" minlength="1" maxlength="50" placeholder="Nom complet"
                                                                              class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-minlength ng-valid-maxlength"></div>
                                                                        <div class="row add-top-margin">
                                                                            <input id="headlineAuthor"
                                                                            name="headline" maxlength="50" placeholder="Titre"
                                                                              class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row add-top-margin">
                                                                    <input style="display: none;"  type="text" name="bio" value="">
                                                                    <input style="display: none;" id="schoolDescription" type="text" name="id" value="{{$school->id}}">
                                                                        <div id="site-description">

                                                                            @if($course->author)
                                                                            {!!$course->author->bio!!}
                                                                            @endif

                                                                         </div>

                                                                </div>
                                                                <div class="row add-top-margin"><button id="submitNewAuthor" type="button" class="tch-btn-header-primary-block fastclickable">Ajouter auteur</button></div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </nested-form>
                                            </ng-include>
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
                                    <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="author_bio_id" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
                        </div>
                        <div label="Subtitle" for="subtitle" tooltip-text="Appears below your course name on your sales page header.">
                            <!---->
                            <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="subtitle" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Description courte</span>
                                        <!----></label>
                                    <!---->
                                    <!----><a href="javascript:void(0)" ng-if="tooltipText" tooltip="Appears below your course name on your sales page header." tooltip-placement="bottom" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                      class="btn tch-btn-tooltip"><i class="fa fa-question-circle"></i></a>
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                  <input type="text" name="subtitle" value="{{$course->subtitle}}" placeholder="e.g. 'Tout ce que vous devez savoir le montage vidéo'" api-validate=""
                                      class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-maxlength ng-valid-api-validate"></div>
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
                                    <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="subtitle" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
                            <!---->
                        </div>
                        <!---->
                        <div label="Categories" for="categories" form="" tooltip-text="Add these to your course so students can sort by category in your school's course directory.">
                            <!---->
                            <!---->
                            <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="categories" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Catégorie</span>
                                        <!----></label>
                                    <!---->
                                    <!----><a href="javascript:void(0)" ng-if="tooltipText" tooltip="Add these to your course so students can sort by category in your school's course directory." tooltip-placement="bottom" tooltip-trigger="mouseenter"
                                      tooltip-append-to-body="true" class="btn tch-btn-tooltip"><i class="fa fa-question-circle"></i></a>
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                    @if($course->category)
                                    <select name="category_id"
                                      class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-api-validate">
                                        <option value="" selected="" disabled="">Catégorie du cours</option>
                                        @foreach($categories as $category)
                                        @if($category->id == $course->category_id)
                                        <option label="" value="{{$category->id}}" selected="selected">{{$category->name}}</option>
                                        @else
                                        <option label="" value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @endif
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
                                    <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="categories" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
                        </div>
                        <div label="Categories" for="categories" form="" tooltip-text="Add these to your course so students can sort by category in your school's course directory.">
                            <!---->
                            <!---->
                            <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                <label-block required-label="requiredLabel">
                                    <!---->
                                    <!----><label for="categories" ng-if="label" class="control-label">
                                        <!----><span ng-bind="label">Type du cours</span>
                                        <!----></label>
                                    <!---->
                                    <!----><a href="javascript:void(0)" ng-if="tooltipText" tooltip="Add these to your course so students can sort by category in your school's course directory." tooltip-placement="bottom" tooltip-trigger="mouseenter"
                                      tooltip-append-to-body="true" class="btn tch-btn-tooltip"><i class="fa fa-question-circle"></i></a>
                                    <!---->
                                    <!---->
                                </label-block>
                                <div ng-transclude="">
                                    <select name="type"
                                      class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-api-validate">
                                        <option {{$course->type == 'course' ? 'selected' : ''}} value="course" selected>Cours</option>
                                        <option {{$course->type == 'path' ? 'selected' : ''}} label="" value="path">Parcours</option>
                                        <option {{$course->type == 'bootcamp' ? 'selected' : ''}} label="" value="bootcamp">Bootcamp</option>
                                    </select>
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
                                    <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="categories" class="help-block ng-hide"></div>
                                </help-block>
                            </div>
                            <!---->
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

        {{-- Description longue  --}}

    <ng-include src="'settings/general/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-school">
        <form id="formId" method="post" enctype="multipart/form-data" action="{{url('courses', $course)}}" name="settingsCourseForm" class="ng-pristine ng-valid ng-valid-required ng-valid-maxlength">
            <div ng-show="!section.if || section.if()" id="section-school" class="row tch-section-wrapper" section="section" save="true">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                    <!---->
                    <!---->
                    <h2 ng-if="section.name" class="tch-subheading">
                        <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Description du cours</span>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><br ng-if="!removeDescriptionLineBreak">
                        <!---->
                        <p ng-bind-html="section.description" what="section-description" class="small">Présentez votre cours comme il se doit ;)</p>
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
                                        <!----><span ng-bind="label">Description du cours</span>
                                        <!----></label>
                                    <!---->
                                    <!---->
                                    <!---->
                                </label-block>
                                <input name="description" type="hidden">
                                <input style="display: none;" id="courseDescription" type="text" name="id" value="{{$course->id}}">
                                <div class="editor-container">

                                    <div id="course-description">

                                        @if($course->description)
                                        {!!$course->description!!}
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
                        <!----><button id="save-course-basic-infos"  type="submit" class="tch-btn-header-primary">Enregistrer</button>
                        <!---->
                    </div>
                </div>
            </div>
        </form>
    </ng-include>


 {{-- Fin de la description longue --}}



    <ng-include src="'courses/course/information/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-branding">
        <div ng-show="!section.if || section.if()" id="section-branding" class="row tch-section-wrapper" section="section">
            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                <!---->
                <!---->
                <h2 ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">l'image de marque</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="small">Marquez votre parcours en définissant un logo miniature personnalisé, un arrière-plan et / ou une vidéo promotionnelle. Vous pouvez définir différentes images à utiliser sur l'application iOS (différentes dimensions étant recommandées).</p>
                    <!---->
                    <ul ng-if="section.sectionTabs &amp;&amp; section.sectionTabs.length > 0" class="section-tabs">
                        <!---->
                        <li ng-repeat="tab in section.sectionTabs" id="section-tab-desktop" ng-class="{'faded-out': (section.selectedTab.value != tab.value)}"><a ng-click="setTab(tab)" what="section tab desktop" class="fastclickable"><img
                                  ng-src="/images/courses/logos/web-os.png" src="/images/courses/logos/web-os.png" width="30">
                                <space></space>Web
                            </a></li>
                        <!---->
                        <li ng-repeat="tab in section.sectionTabs" id="section-tab-mobile" ng-class="{'faded-out': (section.selectedTab.value != tab.value)}" class="faded-out"><a ng-click="setTab(tab)" what="section tab mobile"
                              class="fastclickable"><img ng-src="/images/courses/logos/images.png" src="/images/courses/logos/images.png" width="30">
                                <space></space>iOS
                            </a></li>
                        <!----><span class="space"></span>
                    </ul>
                    <!---->
                    <!---->
                </h2>
                <!---->
            </div>
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude="">
                    <form action="{{url('courses', $course)}}" method="post" enctype="multipart/form-data" class="ng-pristine ng-valid">
                      {{ csrf_field() }}
                      {{ method_field('patch') }}
                        <!---->
                        <div ng-if="section.sectionTabs.length == 0 || section.selectedTab.value == 'desktop'">
                            <div label="Thumbnail" tooltip-text="The thumbnail is a small image used to represent your course across your school." for="thumbnails" form="">
                                <!---->
                                <!---->
                                <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                                    <label-block required-label="requiredLabel">
                                        <!---->
                                        <!----><label for="thumbnails" ng-if="label" class="control-label">
                                            <!----><span ng-bind="label">Image du cours</span>
                                            <!----></label>
                                        <!---->
                                        <!----><a href="javascript:void(0)" ng-if="tooltipText" tooltip="The thumbnail is a small image used to represent your course across your school." tooltip-placement="bottom" tooltip-trigger="mouseenter"
                                          tooltip-append-to-body="true" class="btn tch-btn-tooltip"><i class="fa fa-question-circle"></i></a>
                                        <!---->
                                        <!---->
                                    </label-block>
                                    <div ng-transclude="">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8 col-xs-12">
                                                <div ng-show="form.image_url" class="ng-hide"><img ng-src="" width="480" what="thumbnail-image" class="course-image img-responsive"></div>
                                                <div ng-hide="form.image_url" class=""><img src="/images/courses/logos/{{$course->logo}}" width="480" class="course-image img-responsive"></div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-xs-12">
                                                <div
                                                  class="tch-btn-content-primary btn-block fastclickable">
                                                  <span ng-hide="form.image_url"
                                                      class="">Ajouter image</span>
                                                      <input type="file" name="logo" value="">
                                                    </div>

                                                <div class="half-opaque"><small><span translate="COURSES.RECOMMENDED_FORMAT">Recommended format</span>
                                                        <ul>
                                                            <li>JPG, PNG</li>
                                                            <li>960x540px</li>
                                                        </ul>
                                                    </small></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!---->
                            </div>
                            <!---->


                        </div>
                        <!---->
                        <!---->
                        <div ng-show="showButtonsBar" class="tab-bottom">
                            <!---->
                            <!---->
                            <!----><button id="test-id-save-btn" ng-if="save" type="submit" ng-disabled="form.$invalid || form.$pending || disableSave" ng-bind="saveLabel || 'Save'" class="tch-btn-header-primary">Enregistrer</button>
                            <!---->
                        </div>
                    </form>
                </div>
                <div ng-show="showButtonsBar" class="tab-bottom ng-hide">
                    <!---->
                    <!---->
                    <!---->
                </div>
            </div>
        </div>
    </ng-include>
    <!---->
    <!---->


    <ng-include src="'courses/course/information/sections/' + section.name + '.html'" ng-repeat="section in sections" id="section-delete">
        <div ng-show="!section.if || section.if()" id="section-delete" class="row tch-section-wrapper" section="section">
            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                <!---->
                <!---->
                <h2 ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Supprimer</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="small">Supprimer définitivement tout le contenu du cours, y compris les enregistrements d'inscription des étudiants.</p>
                    <!---->
                    <!---->
                </h2>
                <!---->
            </div>
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude=""><a ng-click="deleteCourse()" confirm="Are you really, really sure you want to delete this course? This action is irreversible." id="delete" class="tch-btn-content-danger fastclickable"><i
                          class="fa fa-trash-o"></i><span class="space"></span><span class="space"></span>Supprimer le cours définitivement</a></div>
                <div ng-show="showButtonsBar" class="tab-bottom ng-hide">
                    <!---->
                    <!---->
                    <!---->
                </div>
            </div>
        </div>
    </ng-include>
    <!---->
    <!---->

    @include('includes.information')
</div>

<!--popup-->
<div style="display: none;" id="popup-background" class="modal-backdrop fade in" modal-animation-class="fade" modal-in-class="in" modal-backdrop="modal-backdrop" modal-animation="true" style="z-index: 1040;"></div>

<div id="popup" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
  index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
    <div class="modal-dialog" ng-class="size ? 'modal-' + size : ''">
        <div class="modal-content" modal-transclude="">
            <div what="confirm modal" class="confirm-modal" style="text-align: center;">
              <!--  <div class="modal-body angular-confirm-text">

                    <h4 ng-if="data.title" ng-bind="::data.title" class="angular-confirm-title" trackid="1804" style="">Confirmer</h4>
                    <!----
                    <p what="text" ng-bind="::data.text" class="angular-confirm-copy" trackid="1805">Êtes-vous vraiment sûr de vouloir supprimer ce cours? Cette action est irréversible.</p>
                </div>
                <div class="modal-footer center angular-confirm-footer" trackid="1787">
                    <!----<button what="cancel button" ng-if="data.cancel" ng-click="cancel()" ng-bind="::data.cancel || 'Cancel'" class="tch-btn-header-secondary fastclickable" trackid="1806" style="">Annuler</button>
                    <!----<button what="ok button" ng-click="ok()" ng-bind="::data.ok || 'OK'" class="tch-btn-header-primary fastclickable" trackid="1789">OK</button></div>
                    -->
                    <h4 ng-if="data.title" ng-bind="::data.title" class="angular-confirm-title" style="">Confirmer</h4>
                    <!---->
                    <p what="text" ng-bind="::data.text" class="angular-confirm-copy">Êtes-vous vraiment sûr de vouloir supprimer ce cours? Cette action est irréversible.</p>
                </div>
                <div class="modal-footer center angular-confirm-footer">
                    <!----><button id="cancel" what="cancel button" ng-if="data.cancel" ng-click="cancel()" ng-bind="::data.cancel || 'Cancel'" class="tch-btn-header-secondary fastclickable" style="">Annuler</button>
                    <form action="{{ route('courses.destroy', $course) }}" method="post" style="margin-bottom: inherit;">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    <!----><button what="ok button" ng-click="ok()" ng-bind="::data.ok || 'OK'" class="tch-btn-header-primary fastclickable">OK</button>
                </form>
                </div>

            </div>
        </div>
    </div>
</div>









@endsection
