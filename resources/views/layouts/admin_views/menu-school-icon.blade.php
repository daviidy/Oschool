<html>

<head>

    <meta charset="utf-8">
    <title>@yield('title') | Oschool</title>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '363403814223522');
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1"
    src="https://www.facebook.com/tr?id=363403814223522&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <link rel="stylesheet" href="/css/admin/menu-school.css">
    <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
    <link rel="icon" href="/images/schools/logos/image-profil.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="/nProgress/nprogress.css">
      <link rel="stylesheet" type="text/css" href="/notifs/amaran/amaran.min.css" />

      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
      <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

        <!--highlight js-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>

        <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">
      <!--fin highlight js-->



    <style type="text/css">
        .Button-module_button__3Rp1B {
            color: green;
        }

        .Button-module_blue__2DKsN {
            color: blue;
        }

        .Button-module_light-gray__2YQYw {
            color: lightgrey;
        }
    </style>
    <style type="text/css">
        .FocusFixer-module_usingMouse__1zr_y :focus {
            outline: none;
        }
        .ql-container {
    height: 50%;
}
    </style>
    <style type="text/css">
        /* Single source of truth for variables to be used by JS if needed */
    </style>
    <!-- add initial data for bootstrapping admin app inline to minimize http requests -->


    <!--pour l'aperçu-->
    <style media="screen">
    /*! CSS Used from: https://fedora.teachablecdn.com/packs/legacy-025a34669541e2e808f4.css ; media=screen */
@media screen{
.tch-btn-content-transparent{padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;color:white;background-color:#fff;border:1px solid #939393;background:none;-webkit-box-shadow:inset 0px 0px 0px 1px rgba(255, 255, 255, .75);box-shadow:inset 0px 0px 0px 1px rgba(255, 255, 255, .75);color:rgba(255, 255, 255, .75);border:none;}
.tch-btn-content-transparent:focus{outline:0!important;}
.tch-btn-content-transparent:focus{outline:0!important;}
.tch-btn-content-transparent:focus{color:white;background-color:#ededed;border-color:#e8e8e8;}
.tch-btn-content-transparent:hover{color:white;background-color:#ededed;border-color:#7c7c7c;}
.tch-btn-content-transparent:active{color:white;background-color:#ededed;border-color:#7c7c7c;}
.tch-btn-content-transparent:active:hover,.tch-btn-content-transparent:active:focus{color:white;background-color:#dedede;border-color:#6d6d6d;}
.tch-btn-content-transparent:active{background-image:none;}
.tch-btn-content-transparent:focus{background:none;-webkit-box-shadow:inset 0px 0px 0px 1px #fff!important;box-shadow:inset 0px 0px 0px 1px #fff!important;color:#fff;}
.tch-btn-content-transparent:active,.tch-btn-content-transparent:hover{background:none;-webkit-box-shadow:inset 0px 0px 0px 1px #fff!important;box-shadow:inset 0px 0px 0px 1px #fff!important;color:#fff;}
.tch-course-card .course-image{position:relative;text-align:center;}
.tch-course-card .course-image .course-image-overlay{position:absolute;background-color:rgba(0, 0, 0, .4);width:100%;top:0;bottom:0;}
.tch-course-card .course-image .course-image-overlay .tch-btn-content-transparent{margin:35px auto;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
.admin-sidebar :-webkit-scrollbar,.admin-sidebar :-moz-scrollbar{display:none;}
.admin-sidebar .course-image{width:100%;height:94px;background-size:100%;background-repeat:no-repeat;background-position:center;}
@media screen and (max-width: 991px){
.state-admin-courses-course .course-image{width:100%;}
}
}
/*! CSS Used from: Embedded */
*,:after,:before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
/*! CSS Used from: Embedded */
._1zr_y :focus{outline:none;}
    </style>




    <!--pour le popup preview-->

    <style media="screen">
    /*! CSS Used from: http://localhost:8000/css/admin/menu-school.css */
    @media screen{
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
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
    .text-center{text-align:center;}
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
    .tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
    .tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
    .tch-btn-header-primary:active{background-image:block;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
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
    .modal.fade .modal-dialog{-webkit-transform:translate(0, -25%);transform:translate(0, -25%);-webkit-transition:-webkit-transform 0.3s ease-out;transition:-webkit-transform 0.3s ease-out;transition:transform 0.3s ease-out;transition:transform 0.3s ease-out, -webkit-transform 0.3s ease-out;}
    .modal.in .modal-dialog{-webkit-transform:translate(0, 0);transform:translate(0, 0);}
    .modal-dialog{position:relative;width:auto;margin:10px;}
    .modal-content{position:relative;background-color:#f7f7f7;background-clip:padding-box;border:1px solid #999;border:1px solid #e9e9ea;border-radius:6px;-webkit-box-shadow:0 3px 9px rgba(0, 0, 0, .5);box-shadow:0 3px 9px rgba(0, 0, 0, .5);outline:0;}
    .modal-body{position:relative;padding:15px;}
    .modal-footer{padding:15px;text-align:right;border-top:1px solid #e9e9ea;}
    .modal-footer:before,.modal-footer:after{display:table;content:" ";}
    .modal-footer:after{clear:both;}
    @media (min-width: 768px){
    .modal-dialog{width:624px;margin:30px auto;}
    .modal-content{-webkit-box-shadow:0 5px 15px rgba(0, 0, 0, .5);box-shadow:0 5px 15px rgba(0, 0, 0, .5);}
    }
    .tch-btn-header-primary{color:white;background-color:#4D90CC;border:1px solid #4D90CC;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
    .tch-btn-header-primary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active{background-image:none;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .modal-dialog{display:inline-block;text-align:left;vertical-align:middle;-webkit-animation:fadeIn 0.2s ease-out;animation:fadeIn 0.2s ease-out;-webkit-perspective:1000;perspective:1000;}
    .modal .tch-btn-header-primary{font-size:13px;}
    .modal-content{border-radius:7px;background-color:#fff!important;background-clip:padding-box;-webkit-box-shadow:0px 0px 10px -2px #2a2a2a;box-shadow:0px 0px 10px -2px #2a2a2a;border-radius:4px;padding:50px 50px;}
    .modal-body{padding:20px 45px 0px 45px;background:#fff;border-radius:5px;}
    .modal-footer{padding:20px 0px 40px;margin-top:0;background-color:#fff;border-top:none;border-radius:0 0 7px 7px;text-align:center;}
    .modal-footer .tch-btn-header-primary{margin:0px 5px;}
    @media (min-width: 768px){
    .modal-dialog{width:624px;margin:30px auto;}
    .modal-content{-webkit-box-shadow:0px 0px 10px -2px #2a2a2a;box-shadow:0px 0px 10px -2px #2a2a2a;}
    }
    @media (min-width: 0px) and (max-width: 767px){
    .modal-dialog{width:90%!important;}
    }
    .text-center{text-align:center;}
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
    .col-xs-5,.col-sm-5,.col-md-5{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
    .col-xs-5{float:left;}
    .col-xs-5{width:41.66667%;}
    @media (min-width: 768px){
    .col-sm-5{float:left;}
    .col-sm-5{width:41.66667%;}
    }
    @media (min-width: 992px){
    .col-md-5{float:left;}
    .col-md-5{width:41.66667%;}
    }
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
    p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
    .text-center{text-align:center;}
    .tch-thumbnail-link-wrapper{margin-right:20px;max-width:220px;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link{display:block;line-height:16px;color:#47505e;font-size:12px;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link strong{font-weight:600;letter-spacing:0.8px;color:#4D90CC;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link i.fa{font-size:20px;left:75%;opacity:0;position:absolute;top:12%;background:#fff;padding:0px 3px;border-radius:3px;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link:hover{color:#6aace6;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link:hover strong{color:#4D90CC;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link:hover i.fa{opacity:1;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link img{margin-bottom:15px;width:100%;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link .muted{color:#ababab;font-size:12px;line-height:24px;font-family:"TeachableSans";}
    }
    }
    </style>


<script> "use strict"; !function() { var t = window.driftt = window.drift = window.driftt || []; if (!t.init) { if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice.")); t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n = Array.prototype.slice.call(arguments); return n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) { t[e] = t.factory(e); }), t.load = function(t) { var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(o, i); }; } }(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('2uy6g3spxi59'); </script>

</head>



<body ng-class="bodyCssClasses" flow-prevent-drop="" class="state-admin state-admin-onboarding" style="" cz-shortcut-listen="true">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDKHLDR"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

    @if (session('status'))
    <div style="z-index: 10000;" class="w3-panel w3-red w3-display-container">
        {{ session('status') }}
    </div>
    @endif





    <!--[if lte IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <div growl="">
        <div class="growl">
            <!---->
        </div>
    </div>

    <!---->
    <!---->
    <div ui-view="" class="" style="">
        <script>
            _.contains = _.includes
        </script>
        <!---->
        <!---->
        <div ui-view="onboarding" ng-if="::!currentUser.show_custom_role_upgrade"></div>
        <!---->
        <!---->
        <search ng-if="::config.search &amp;&amp; !currentUser.show_custom_role_upgrade">
            <!---->
        </search>
        <!---->
        <!---->
        <section ng-if="::!currentUser.show_custom_role_upgrade">
            <!---->
            <div class="admin-sidebar ">
                <div class="school-link"><a ng-href="/" ng-bind="::school.name" target="_blank" class="school-link-name" href="/">{{$school->name}}</a>
                    <!----><a ng-if="::(config.search &amp;&amp; permissions.can('use_search'))" ng-click="showSearch()" class="search-icon fastclickable"><i class="fa fa-search"></i></a>
                    <!---->
                </div>
                <div class="navs">
                    <ul id="admin-nav" what="admin nav" class="nav primary-nav nav-stacked ng-animate-disabled">
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_dashboard')" text="Dashboard" icon="icon icon-speed-fast" sref="admin.dashboard" onboarding-tooltip-if="school.is_launched == false" onboarding-tooltip-text="Complete the onboarding steps to launch your school.">
                            <!----><a what="link" ui-sref="admin.dashboard" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Dashboard" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-speed-fast"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Complete the onboarding steps to launch your school." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                  class="tch-onboarding-sidebar-tooltip"></div>
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Tableau de bord</span>
                            </a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_students')" text="Users" icon="icon icon-users" sref="admin.users.students" include-active-state="admin.users" class="" style="">
                            <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/students">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Users" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-users"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">utilisateurs</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" ng-if="::permissions.can('view_site')"
                          text="Site" icon="icon icon-users" sref="admin.site" onboarding-tooltip-if="school.is_domain_confirmed == false &amp;&amp; school.is_customized == false"
                          onboarding-tooltip-text="Save a customization and confirm your domain to complete this step.">
                            <!----><a what="link" ui-sref="admin.site" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/authors">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Site" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-users"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Save a customization and confirm your domain to complete this step." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                  class="tch-onboarding-sidebar-tooltip"></div>
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Auteurs</span>
                            </a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_financial')" text="Sales" icon="icon icon-cash-dollar" sref="admin.transactions">
                            <!----><a what="link" ui-sref="admin.transactions" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/sales">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Sales" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-cash-dollar"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Sales</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active" style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('email_students') || permissions.can('view_gated_email')" text="Emails" icon="icon icon-envelope" sref="admin.emails">
                            <!----><a what="link" ui-sref="admin.emails" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/email">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Emails" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-envelope"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Emails</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-2': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_support')" text="Help" icon="icon icon-question-circle" sref="admin.help" pin-to-bottom="2" top-border="!(school.school_plan.name == 'free' &amp;&amp; permissions.can('view_plan'))"
                          class="pin-bottom-level-2 pin-bottom">
                            <!----><a what="link" ui-sref="admin.help" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/help">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Help" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-question-circle"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Help</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active" style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-1': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_gated_teachable_u') || permissions.can('access_teachable_u')" text="TeachableU" icon="fa fa-building-o" sref="admin.teachable-u" pin-to-bottom="1" class="pin-bottom-level-1 pin-bottom">
                            <!----><a what="link" ui-sref="admin.teachable-u" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/teachable-u">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="TeachableU" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="fa fa-building-o"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">TeachableU</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active" style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-3': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::(school.school_plan.name == 'free' &amp;&amp; permissions.can('view_plan'))" text="Plan" icon="icon icon-rocket" sref="admin.settings.plan" pin-to-bottom="3" never-highlight="true" label="UPGRADE" top-border="true"
                          class="pin-bottom-level-3 pin-bottom top-border">
                            <!----><a what="link" ui-sref="admin.settings.plan" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/plan" class="never-highlight">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Plan" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-rocket"></i>
                                <!---->
                                <!---->
                                <!----><label ng-if="::label" ng-bind="::label" class="label label-sidebar">UPGRADE</label>
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Plan</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_settings') &amp;&amp; !permissions.can('view_settings_notifications')" text="Settings" icon="icon icon-cog2" sref="admin.settings" class="active">
                            <!----><a what="link" ui-sref="admin.settings" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/settings/general">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Settings" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-cog2"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Paramètre</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <hr ng-if="::permissions.can('view_courses')">
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_settings') &amp;&amp; !permissions.can('view_settings_notifications')" text="Settings" icon="icon icon-cog2" sref="admin.settings" class="active">
                            <!----><a what="link" ui-sref="admin.settings" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/courses">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Settings" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-book2"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Settings</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->

                        <!---->
                        <!---->
                        <!---->
                    </ul>
                    @include('includes.admin_views.submenus.site-nav')

                    @include('includes.admin_views.submenus.users-nav')
                    @if(\Route::current()->getName() == 'schoolSettings')
                    @include('includes.admin_views.submenus.settings-nav')
                    @endif
                    @include('includes.admin_views.submenus.emails-nav')
                    @if(\Route::current()->getName() == 'course')
                      @include('includes.admin_views.submenus.course-nav')
                        @elseif(\Route::current()->getName() == 'deliverable')
                      @include('includes.admin_views.submenus.course-nav')
                        @elseif(\Route::current()->getName() == 'coupon')
                      @include('includes.admin_views.submenus.course-nav')
                    @endif


                </div>
                <div tooltip="David Yao" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="visible-xs" class="misc-buttons">
                    <div dropdown="" class="btn-group tch-dropdown-group dropup dropdown">
                        <!---->
                        <!----><a href="/users/settings" ng-if="::currentUser.is_teachable_account" target="_blank" class="tch-dropdown-group-selector"><img gravatar-src-once="user.email" align="left" gravatar-size="30" class="user-avatar"
                              src="/images/users/default/{{Auth::user()->image}}">
                            <div class="myteachable-icon-overlay">&nbsp;</div>
                            <div ng-bind="::user.name" class="user-name">{{Auth::user()->name}}</div>
                        </a>
                        <!----><a what="dropdown-toggle" onclick="show2()" dropdown-toggle="" type="button" href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-up"></i></a>
                        <ul role="menu" class="dropdown-menu dropdown-menu-left" id="drop1">
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://blog.oschoolelearning.com/" target="_blank" what="experts-marketplace">Blog Oschool</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://discord.gg/hhbzcHE" target="_blank" what="instructor-community">Communauté Oschool</a></li>
                            <!---->
                            <!---->
                            <!--li ng-if="::permissions.can('view_fedora_references')"><a href="https://teachable.zendesk.com/" target="_blank" what="knowledge-base">Connaissances de base</a></li-->
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')" role="presentation" class="divider"></li>
                            <!---->
                            <!---->
                            <li ng-if="::currentUser.is_teachable_account"><a href="/users/settings" target="_blank" translate="FOOTER.MYTEACHABLE_PROFILE">Mon profil Oschool</a></li>
                            <!---->
                            <!---->
                            <!---->
                            <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">Se déconnecter</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form></li>
                        </ul>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="/js/admin_views/menu.js"></script>
            @yield('content')


        </section>
        <!---->
        <!---->
        <div data-ng-show="filepickerModalOpen" data-ng-click="modalClose()" class="modal-backdrop in fastclickable ng-hide">
            <div id="filepicker-modal-container" data-ng-show="filepickerModalOpen" class="ng-hide"><a data-ng-click="filepickerModalClose()" class="fa fa-close fastclickable"></a><iframe id="filepicker-modal" name="filepicker-modal" frameborder="0"
                  marginwidth="0" marginheight="0" data-ng-show="filepickerModalOpen" class="ng-hide" __idm_frm__="10597"></iframe></div>
        </div>
        <modal></modal>
    </div>

    <script type="text/javascript" src="https://api.filepicker.io/v2/filepicker.js"></script>
    <div class="cfp-hotkeys-container fade" ng-class="{in: helpVisible}" style="display: none;">
        <div class="cfp-hotkeys">
            <!---->
            <h4 class="cfp-hotkeys-title" ng-if="!header">Keyboard Shortcuts:</h4>
            <!---->
            <!---->
            <table>
                <tbody>
                    <!---->
                    <tr ng-repeat="hotkey in hotkeys | filter:{ description: '!$$undefined$$' }">
                        <td class="cfp-hotkeys-keys">
                            <!----><span ng-repeat="key in hotkey.format() track by $index" class="cfp-hotkeys-key">?</span>
                            <!---->
                        </td>
                        <td class="cfp-hotkeys-text">Show / hide this help menu</td>
                    </tr>
                    <!---->
                    <tr ng-repeat="hotkey in hotkeys | filter:{ description: '!$$undefined$$' }" class="" style="">
                        <td class="cfp-hotkeys-keys">
                            <!----><span ng-repeat="key in hotkey.format() track by $index" class="cfp-hotkeys-key">f</span>
                            <!---->
                        </td>
                        <td class="cfp-hotkeys-text">Search your school</td>
                    </tr>
                    <!---->
                </tbody>
            </table>
            <!---->
            <div class="cfp-hotkeys-close fastclickable" ng-click="toggleCheatSheet()">×</div>
        </div>
    </div>





    <!--popup-->
    <div style="display: none;" id="popup-background" class="modal-backdrop fade in" modal-animation-class="fade" modal-in-class="in" modal-backdrop="modal-backdrop" modal-animation="true" style="z-index: 1040;"></div>

    <div id="popup-delete" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
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






    <div id="popup-preview" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
      size="md" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
        <div class="modal-dialog modal-md" ng-class="size ? 'modal-' + size : ''" style="">
            <div class="modal-content" modal-transclude="">
                <div class="modal-header text-center">
                    <h4><span ng-bind="modalTitle">Voir un aperçu du cours</span>
                        <!--
                        <button type="button" ng-click="cancel()" class="close fastclickable">×</button>
                    -->
                    </h4><br>
                    <p><strong ng-bind="modalDescription"></strong></p>
                </div>
                <div class="modal-body">
                    <center>
                        <div class="row">
                            <div class="tch-section-content tch-thumbnail-link-wrapper col-md-5 col-sm-5 col-xs-5 col-md-offset-1">
                                <a href="{{$course->type == 'mooc' ? route('course.slug', $course->slug) : route('path.slug', $course->slug)}}" target="_blank" rel="noopener"
                                  class="tch-thumbnail-link text-center fastclickable">
                                  <img src="https://david-yao-s-school.teachable.com/admin/assets/images/preview-as-visitor.svg" id="test-id-preview-sales-page"><i class="fa fa-external-link"></i><br><strong>Page de vente&nbsp;</strong>
                                    <div class="muted">en tant que visiteur</div>
                                </a></div>
                            <div class="tch-section-content tch-thumbnail-link-wrapper col-md-5 col-sm-5 col-xs-5 shift-right">
                                <a href="{{$course->type == 'mooc' ? route('enrolled.slug', $course->slug) : route('path.slug', $course->slug)}}" target="_blank" rel="noopener"
                                  class="tch-thumbnail-link text-center fastclickable"><img src="https://david-yao-s-school.teachable.com/admin/assets/images/preview-as-enrolled-student.svg"><i class="fa fa-external-link"></i><br><strong>Programme du cours&nbsp;</strong>
                                    <div class="muted">en tant qu'étudiant inscrit</div>
                                </a></div>
                        </div><br>
                    </center>
                </div>
                <div class="modal-footer"><button id="cancel-preview" ng-bind="modalButton" class="tch-btn-header-primary fastclickable">Annuler</button></div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

    $("#delete").on('click', function(){

        $('#popup-background').css('display', 'block');
        $('#popup-delete').css('display', 'block');

    });

    $("#cancel").on('click', function(){

        $('#popup-background').css('display', 'none');
        $('#popup-delete').css('display', 'none');

    });

    </script>


    <script type="text/javascript">

    $("#preview").on('click', function(){

        $('#popup-background').css('display', 'block');
        $('#popup-preview').css('display', 'block');

    });

    $("#cancel-preview").on('click', function(){

        $('#popup-background').css('display', 'none');
        $('#popup-preview').css('display', 'none');

    });

    </script>




    <script type="text/javascript" src="/notifs/amaran/jquery.amaran.js"></script>

    <!--youtube loading-->
    <script type="text/javascript" src="/nProgress/nprogress.js"></script>
    <script type="text/javascript">
    NProgress.configure({ showSpinner: false });
    NProgress.start();
    NProgress.done();
    </script>
    <!--fin youtube loading-->

    <script type="text/javascript" src="/js/admin_views/menu-icon.js"></script>
    <script type="text/javascript" src="/js/admin_views/school_publication.js"></script>


    <!--quill js-->

    <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="/js/quill/image-resize.min.js"></script>
  <script src="/js/quill/video-resize.min.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- Initialize Quill editor -->
  <script>
  //sauvegarde des données du quill editor

  //initialisation de l'editeur
  var options = {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['size', 'bold', 'italic', 'underline'],
      ['image', 'code-block', 'video', 'blockquote', 'code', 'align', 'link'],
      ['color'],
      [{ list: 'ordered' }, { list: 'bullet' }]
  ],
  imageResize: {
       modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
   },
   videoResize: {
          modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
      },
   syntax: true,
  },
  placeholder: 'Ecrivez ici...',
  theme: 'snow'  // or 'bubble'
  };
  var quill = new Quill('#site-description', options);
  var quill2 = new Quill('#course-description', options);
  var quillFreePlan = new Quill('#editor-pricing', options);
  var quillSuscriptionPlan = new Quill('#editor-susplan', options);
  var quillOnePlan = new Quill('#editor-oneplan', options);
  var quillAbonnementPlan = new Quill('#editor-abplan', options);


  //mise a jour description ecole

  //recuperation de la description ecole
  var form = document.getElementById("description");
  if (form) {

      form.onsubmit = function() {
      // Populate hidden form on submit
      var description = document.querySelector('input[name=description]');
      description.value = JSON.stringify(quill.getContents());


      $.ajax({
          type: 'post',
          url: '/updateSchool',
          data: {
              '_token': $('input[name=_token]').val(),
              'id': $("#schoolDescription").val(),
              'description': quill.root.innerHTML,

          },
          success: function(data) {
              $.amaran({'message':"Modifications enregistrées!"});

          },
          error: function(){
              alert('erreur');
          }
      });

      return false;
      };

  }


  //fin mise a jour description ecole




  //description longue course


  //recuperation de la description ecole
  var form_course = document.getElementById("formId");
  if (form_course) {

      form_course.onsubmit = function() {
      // Populate hidden form on submit



      $.ajax({
          type: 'post',
          url: '/updateCourseDescription',
          data: {
              '_token': '{{csrf_token()}}',
              'id': $("#courseDescription").val(),
              'description': quill2.root.innerHTML,

          },
          success: function(data) {
              $.amaran({'message':"Modifications enregistrées!"});

          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });

      return false;
      };

  }



//ajouter nouvel auteur

$('#submitNewAuthor').click(function(){

    var bio = document.querySelector('input[name=bio]');
    bio.value = JSON.stringify(quill.getContents());

    var dataImage = new FormData();
    dataImage.append('image', $('#imageAuthor')[0].files[0]);
    dataImage.append('_token', '{{csrf_token()}}');
    dataImage.append('school_id', $("#schoolDescription").val());
    dataImage.append('full_name', $("#nameAuthor").val());
    dataImage.append('headline', $("#headlineAuthor").val());
    dataImage.append('bio', quill.root.innerHTML);

//après on réinitialise tout
    $("#schoolDescription").val('');
    $("#nameAuthor").val('');
    $("#headlineAuthor").val('');
    $("#imageAuthor").val('');
    quill.setContents([]);

    $('#addAuthorZone').removeClass("add");

    $.ajax({
        type: 'post',
        url: '/addAuthor',
        contentType: false,
        processData: false,
        data: dataImage,

        success: function(data) {
            $("#author_select option:selected").removeAttr("selected");
            $('#author_select').append('<option label="" value="'+data.id+'" selected="selected">'+data.full_name+'</option>');
            $.amaran({'message':"Auteur ajouté avec succès"});

        },
        error: function(){
            alert('erreur');
        }
    });

    return false;

});



$('#createLecture').on('click', function() {
    var dataImage = new FormData();
    var files = $("#downloadable_files")[0].files;
    if ($("#image_lesson").val() !== '') {
        dataImage.append('image', $("#image_lesson")[0].files[0]);
    }
    dataImage.append('_token', '{{csrf_token()}}');
    dataImage.append('school_id', $("input[name=school_id]").val());
    dataImage.append('course_id', $("input[name=course_id]").val());
    dataImage.append('section_id', $("input[name=section_id]").val());
    dataImage.append('title', $("input[name=title]").val());
    dataImage.append('video', $("input[name=video]").val());
    if(files.length !== 0){
        for (var i = 0; i < files.length; i++)
            {
                dataImage.append('downloadable_files[]', files[i]);
            }
    }
    dataImage.append('full_text', quill.root.innerHTML);

    $.ajax({
        type: 'post',
        url: '/addLecture',
        contentType: false,
        processData: false,
        data: dataImage,
        success: function(data) {
            $.amaran({'message':"La leçon a bien été créée !"});
            window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+data.course_id+'/curriculum';



        },
        error: function(){
            alert('erreur');
        }
    });
});


//changer le titre d'une lecon automatiquement après modification de l'input
$("input[name=title]").on("change", function() {

var dataImage = new FormData();
dataImage.append('_token', '{{csrf_token()}}');
dataImage.append('school_id', $("input[name=school_id]").val());
dataImage.append('course_id', $("input[name=course_id]").val());
dataImage.append('section_id', $("input[name=section_id]").val());
dataImage.append('lesson_id', $("input[name=lesson_id]").val());
dataImage.append('title', $("input[name=title]").val());

$.ajax({
    type: 'post',
    url: '/updateLectureTitle',
    contentType: false,
    processData: false,
    data: dataImage,
    success: function(data) {
        $.amaran({'message':"Le titre de la leçon a bien été modifié !"});
    },
    error: function (xhr, msg) {
      console.log(msg + '\n' + xhr.responseText);
  }
});

});


//mettre à jour une lecon
$('#updateLecture').on('click', function() {
    var dataImage = new FormData();
    if ($("#image_lesson").val() !== '') {
        dataImage.append('image', $("#image_lesson")[0].files[0]);
    }
    var files = $("#downloadable_files")[0].files;



    dataImage.append('_token', '{{csrf_token()}}');
    dataImage.append('school_id', $("input[name=school_id]").val());
    dataImage.append('course_id', $("input[name=course_id]").val());
    dataImage.append('section_id', $("input[name=section_id]").val());
    dataImage.append('lesson_id', $("input[name=lesson_id]").val());
    dataImage.append('title', $("input[name=title]").val());
    dataImage.append('video', $("input[name=video]").val());
    dataImage.append('status', $("#status").children("option:selected").val());
    dataImage.append('free_lesson', $("#free_lesson").children("option:selected").val());
    if(files.length !== 0){
        for (var i = 0; i < files.length; i++)
            {
                dataImage.append('downloadable_files[]', files[i]);
            }
    }

    dataImage.append('full_text', quill.root.innerHTML);

    $.ajax({
        type: 'post',
        url: '/updateLecture',
        contentType: false,
        processData: false,
        data: dataImage,
        success: function(data) {
            $.amaran({'message':"La leçon a bien été mise à jour !"});
            window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+data.course_id+'/curriculum';



        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
});

//supprimer une lecon
$('#delete-lecture').on('click', function() {


    $.ajax({
        type: 'post',
        url: '/deleteLecture',
        dataType: "json",
        data: {
            '_token': '{{csrf_token()}}',
            'id': $(this).parents().eq(2).attr('data-index'),
        },
        success: function(data) {
            $.amaran({'message':"La leçon a bien été supprimée"});
        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
});


  </script>

  <script type="text/javascript">

  //changer position des lecons

  $(document).ready(function(){
      $('.lesson-list').sortable({
          update: function(event, ui){
              $(this).children().each(function(index){
                  if ($(this).attr('data-position') != (index+1)) {
                      $(this).attr('data-position', (index+1)).addClass('updated_lesson');
                  }
              });

              saveNewPositions();
          }
      });
  });

  function saveNewPositions(){
      var positions = [];
      $('.updated_lesson').each(function(){
          positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
          $(this).removeClass('updated_lesson');
      });
console.log(JSON.stringify(positions));
      $.ajax({
          type: 'post',
          url: '/saveNewPositions',
          dataType: "json",
          data: {
              '_token': '{{csrf_token()}}',
              'update': 1,
              'positions': positions,
          },
          success: function() {
              $.amaran({'message':"Programme enregistré"});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  }

  </script>



  <script type="text/javascript">

//changer position des questions
  $(document).ready(function(){
      $('.questions_list').sortable({
          update: function(event, ui){
              $(this).children().each(function(index){
                  if ($(this).attr('data-position') != (index+1)) {
                      $(this).attr('data-position', (index+1)).addClass('updated_question');
                  }
              });

              saveNewQuestionPositions();
          }
      });
  });

  function saveNewQuestionPositions(){
      var lessonPositions = [];
      $('.updated_question').each(function(){
          lessonPositions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
          $(this).removeClass('updated_question');
      });
      console.log(JSON.stringify(lessonPositions));
      $.ajax({
          type: 'post',
          url: '/saveNewQuestionPositions',
          dataType: "json",
          data: {
              '_token': '{{csrf_token()}}',
              'update': 1,
              'positions': lessonPositions,
          },
          success: function() {
              $.amaran({'message':"Ordre sauvegardé"});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  }

  </script>



  <script type="text/javascript">

  //changer position des tâches
    $(document).ready(function(){
        $('.tasks_list').sortable({
            update: function(event, ui){
                $(this).children().each(function(index){
                    if ($(this).attr('data-position') != (index+1)) {
                        $(this).attr('data-position', (index+1)).addClass('updated_task');
                    }
                });

                saveNewTaskPositions();
            }
        });
    });

    function saveNewTaskPositions(){
        var taskPositions = [];
        $('.updated_task').each(function(){
            taskPositions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated_task');
        });
        $.ajax({
            type: 'post',
            url: '/saveNewTaskPositions',
            dataType: "json",
            data: {
                '_token': '{{csrf_token()}}',
                'update': 1,
                'positions': taskPositions,
            },
            success: function() {
                $.amaran({'message':"Ordre sauvegardé"});
            },
            error: function (xhr, msg) {
              console.log(msg + '\n' + xhr.responseText);
          }
        });
    }

  </script>


  <script type="text/javascript">

  //changer position des ressources
    $(document).ready(function(){
        $('.resource-list').sortable({
            update: function(event, ui){
                $(this).children().each(function(index){
                    if ($(this).attr('data-position') != (index+1)) {
                        $(this).attr('data-position', (index+1)).addClass('updated_resource');
                    }
                });

                saveNewResourcePositions();
            }
        });
    });

    function saveNewResourcePositions(){
        var resourcePositions = [];
        $('.updated_resource').each(function(){
            resourcePositions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated_resource');
        });
        $.ajax({
            type: 'post',
            url: '/saveNewResourcePositions',
            dataType: "json",
            data: {
                '_token': '{{csrf_token()}}',
                'update': 1,
                'positions': resourcePositions,
            },
            success: function() {
                $.amaran({'message':"Ordre sauvegardé"});
            },
            error: function (xhr, msg) {
              console.log(msg + '\n' + xhr.responseText);
          }
        });
    }

  </script>



  <script type="text/javascript">

  //changer position des projets
    $(document).ready(function(){
        $('.project-list').sortable({
            update: function(event, ui){
                $(this).children().each(function(index){
                    if ($(this).attr('data-position') != (index+1)) {
                        $(this).attr('data-position', (index+1)).addClass('updated_project');
                    }
                });

                saveNewProjectPositions();
            }
        });
    });

    function saveNewProjectPositions(){
        var projectPositions = [];
        $('.updated_project').each(function(){
            projectPositions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated_project');
        });
        $.ajax({
            type: 'post',
            url: '/saveNewProjectPositions',
            dataType: "json",
            data: {
                '_token': '{{csrf_token()}}',
                'update': 1,
                'positions': projectPositions,
            },
            success: function() {
                $.amaran({'message':"Ordre sauvegardé"});
            },
            error: function (xhr, msg) {
              console.log(msg + '\n' + xhr.responseText);
          }
        });
    }

  </script>



  <script type="text/javascript">

  //changer position des sections

  $(document).ready(function(){
      $('.part-list').sortable({
          update: function(event, ui){
              $(this).children().each(function(index){
                  if ($(this).attr('data-position') != (index+1)) {
                      $(this).attr('data-position', (index+1)).addClass('updatedSections');
                  }
              });

              saveNewSectionPositions();
          }
      });
  });

  function saveNewSectionPositions(){
      var positions = [];
      $('.updatedSections').each(function(){
          positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
          $(this).removeClass('updatedSections');
      });
console.log(JSON.stringify(positions));
      $.ajax({
          type: 'post',
          url: '/saveNewSectionPositions',
          dataType: "json",
          data: {
              '_token': '{{csrf_token()}}',
              'update': 1,
              'positions': positions,
          },
          success: function() {
              $.amaran({'message':"Programme enregistré"});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  }


  </script>



<script type="text/javascript">

//ajouter une tache
  $('#add-task').on('click', function(event) {
      event.preventDefault();

      var dataImage = new FormData();
      var tab = [];

      var tasks = $('.text_question_quiz');
      console.log(tasks);
      $.each(tasks, function(){
          if ($(this).val() !== "") {

              console.log($(this).val());
              var obj = {
                  'task': $(this).val(),
              };
              tab.push(obj);

          }
      });
      console.log(tab);
      console.log(JSON.stringify(tab));


      dataImage.append('_token', '{{csrf_token()}}');
      dataImage.append('school_id', $('input[name=school_id]').val());
      dataImage.append('course_id', $('input[name=course_id]').val());
      dataImage.append('project_id', $('input[name=project_id]').val());
      dataImage.append('task', JSON.stringify(tab));

      $.ajax({
          type: 'post',
          url: '/addTask',
          contentType:false,
          cache: false,
          processData:false,
          data: dataImage,
          success: function(data) {
              $.amaran({'message':'La tâche a bien été ajoutée'});
              window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/paths/'+$("input[name=course_id]").val()+'/curriculum/projects/'+$("input[name=project_id]").val()+'/edit/';


          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });

  });

//modifier tache
  $('.task-edit').on('click', function(event) {
      event.preventDefault();

      var dataImage = new FormData();
      var tab = [];

      var task = $(this).parents(2).siblings('.quiz-question').find('.task-text-edit').val();
      var task_id = $(this).parents(2).siblings('.quiz-question').find('#task-id').val();




      dataImage.append('_token', '{{csrf_token()}}');
      dataImage.append('school_id', $('input[name=school_id]').val());
      dataImage.append('course_id', $('input[name=course_id]').val());
      dataImage.append('project_id', $('input[name=project_id]').val());
      dataImage.append('task', task);
      dataImage.append('task_id', task_id);

      $.ajax({
          type: 'post',
          url: '/editTask',
          contentType:false,
          cache: false,
          processData:false,
          data: dataImage,
          success: function(data) {
              $.amaran({'message':'La tâche a bien été modifiée'});
              window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/paths/'+$("input[name=course_id]").val()+'/curriculum/projects/'+$("input[name=project_id]").val()+'/edit/';


          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });

  });




  //ajouter une question au quiz
  $('#add-question').on('click', function(event) {
      event.preventDefault();
      var dataImage = new FormData();
      var tab = [];
      var question = $('#question-text').val();
      var options = $('.text_question_quiz');
      console.log(options);
      $.each(options, function(){
          if ($(this).val() !== "") {
              var correct = $(this).prev().find('input[name=correct]:checked').length > 0;
              console.log(correct);
              console.log($(this).val());
              var obj = {
                  'option': $(this).val(),
                  'correct': correct,
              };
              tab.push(obj);
          }
      });
      console.log(tab);
      console.log(question);
      console.log(JSON.stringify(tab));
      dataImage.append('_token', '{{csrf_token()}}');
      dataImage.append('school_id', $('input[name=school_id]').val());
      dataImage.append('course_id', $('input[name=course_id]').val());
      dataImage.append('lesson_id', $('input[name=lesson_id]').val());
      dataImage.append('question', question);
      dataImage.append('option', JSON.stringify(tab));
      $.ajax({
          type: 'post',
          url: '/addQuiz',
          contentType:false,
          cache: false,
          processData:false,
          data: dataImage,
          success: function(data) {

              $.amaran({'message':'La question du quiz a bien été ajoutée'});
              $("#bloc-question .reponses").remove();
              var question = $('#question-text').val('');

              /*
              window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+$("input[name=course_id]").val()+'/curriculum/'+$("input[name=section_id]").val()+'/lessons/'+$("input[name=lesson_id]").val()+'/edit/#quiz';
              */
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  });



//modifier question
  $('.question-edit').on('click', function(event) {
      event.preventDefault();

      var dataImage = new FormData();
      var tab = [];

      var question = $(this).parents(2).siblings('.quiz-question').find('#question-text-edit').val();
      var question_id = $(this).parents(2).siblings('.quiz-question').find('#question-id').val();
      var options = $(this).parents(2).siblings('.quiz-question').find('.text_question_quiz_edit');
      console.log(options);
      $.each(options, function(){
          if ($(this).val() !== "") {

              var correct = $(this).prev().find('input[name=correct]:checked').length > 0;
              console.log(correct);
              console.log($(this).val());
              var obj = {
                  'id': $(this).siblings('input[name=option_id]').val(),
                  'option': $(this).val(),
                  'correct': correct,
              };
              tab.push(obj);

          }
      });
      console.log(tab);
      console.log(question);
      console.log(JSON.stringify(tab));




      dataImage.append('_token', '{{csrf_token()}}');
      dataImage.append('school_id', $('input[name=school_id]').val());
      dataImage.append('course_id', $('input[name=course_id]').val());
      dataImage.append('lesson_id', $('input[name=lesson_id]').val());
      dataImage.append('quiz_id', $('input[name=quiz_id]').val());
      dataImage.append('question', question);
      dataImage.append('question_id', question_id);
      dataImage.append('option', JSON.stringify(tab));

      $.ajax({
          type: 'post',
          url: '/editQuiz',
          contentType:false,
          cache: false,
          processData:false,
          data: dataImage,
          success: function(data) {
              $.amaran({'message':'La question du quiz a bien été modifiée'});
              window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+$("input[name=course_id]").val()+'/curriculum/'+$("input[name=section_id]").val()+'/lessons/'+$("input[name=lesson_id]").val()+'/edit/';


          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });

  });




  //si on clique sur la croix
  //pour supprimer une option
  //pour le mode d'edition)

  $('.answer-remove-edit').on('click', function(){
      var option_id = $(this).parents().eq(1).find("input[name=option_id]").val();
      $(this).parents().eq(2).remove();

      $.ajax({
          type: 'post',
          url: '/deleteOption',

          data: {
              '_token': '{{csrf_token()}}',
              'id': option_id,
          },
          success: function() {
              $.amaran({'message':'L\'option a bien été supprimée'});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  });


  //suppression d'options qu'on vient
  //de rajouter

  $('.multiple-choice').on('click', '.answer-remove', function(e) {
    e.preventDefault();
      $(this).parents('.reponses').remove();
  });



  //changer le titre du projet automatiquement après modification de l'input
  $("#projectTitle").on("change", function() {

  var dataImage = new FormData();
  dataImage.append('_token', '{{csrf_token()}}');
  dataImage.append('school_id', $("input[name=school_id]").val());
  dataImage.append('course_id', $("input[name=course_id]").val());
  dataImage.append('project_id', $("input[name=project_id]").val());
  dataImage.append('title', $("input[name=title]").val());

  $.ajax({
      type: 'post',
      url: '/updateProjectTitle',
      contentType: false,
      processData: false,
      data: dataImage,
      success: function(data) {
          $.amaran({'message':"Le titre du projet a bien été modifié !"});
      },
      error: function (xhr, msg) {
        console.log(msg + '\n' + xhr.responseText);
    }
  });

  });



//mettre a jour un projet
  $('#updateProject').on('click', function() {
      var dataImage = new FormData();
      if ($("#image_lesson").val() !== '') {
          dataImage.append('image', $("#image_lesson")[0].files[0]);
      }


      dataImage.append('_token', '{{csrf_token()}}');
      dataImage.append('school_id', $("input[name=school_id]").val());
      dataImage.append('course_id', $("input[name=course_id]").val());
      dataImage.append('project_id', $("input[name=project_id]").val());
      dataImage.append('title', $("input[name=title]").val());
      dataImage.append('video', $("input[name=video]").val());


      dataImage.append('description', quill.root.innerHTML);

      $.ajax({
          type: 'post',
          url: '/updateProject',
          contentType: false,
          processData: false,
          data: dataImage,
          success: function(data) {
              $.amaran({'message':"Le projet a bien été mis à jour !"});
              window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+data.course_id+'/curriculum';

          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  });



</script>

  <!--fin quill js-->






</body>

</html>
