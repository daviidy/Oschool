<html class="video no-videoautoplay">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PDKHLDR');</script>
  <!-- End Google Tag Manager -->

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
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>

    <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <link rel="icon" href="/images/schools/logos/image-profil.png" type="image/png" sizes="16x16">

    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="HeqVIhV2BIM+5L/O9hmz4Xe/NArfgYeexyUKDpkq1FZYRcRUOb+xHcp5LOYHoG6857NlE68F2NuyvWcJIrSe1Q==">
    <link rel="stylesheet" media="screen" href="https://fedora.teachablecdn.com/assets/bootstrap-31ff648fd5e6158c77c31e785844877b6666554feab422e57ca5a96aa5587b9e.css" data-turbolinks-track="true">
    <link
      href="/css/theme-school.css"
      rel="stylesheet" data-turbolinks-track="true">
    <title>@yield('title') | {{$school->user->isAdmin() ? 'Oschool' : $school->name}}</title>
    <meta property="og:title" content="Tous les cours de {{$school->name}} | Oschool">
    <meta property="og:image" content="/images/schools/logos/{{$school->logo}}">
    <meta name="brand_video_player_color" content="#4D90CC">



    <script src="/js/all_courses/fedora.js" data-turbolinks-track="true"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
      <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

    <!--pour le footer-->
    @if($school->user->isAdmin())

    <style media="screen">
    /*! CSS Used from: https://fedora.teachablecdn.com/assets/bootstrap-31ff648fd5e6158c77c31e785844877b6666554feab422e57ca5a96aa5587b9e.css ; media=screen */
@media screen{
footer{display:block;}
a{background:0 0;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
a{color:#428bca;text-decoration:none;}
a:hover,a:focus{color:#2a6496;text-decoration:underline;}
a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
p{margin:0 0 10px;}
ul{margin-top:0;margin-bottom:10px;}
.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width: 768px){
.container{width:750px;}
}
@media (min-width: 992px){
.container{width:970px;}
}
@media (min-width: 1200px){
.container{width:1170px;}
}
.row{margin-right:-15px;margin-left:-15px;}
.col-sm-2,.col-sm-3{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-2,.col-sm-3{float:left;}
.col-sm-3{width:25%;}
.col-sm-2{width:16.66666667%;}
}
.container:before,.container:after,.row:before,.row:after{display:table;content:" ";}
.container:after,.row:after{clear:both;}
}
/*! CSS Used from: https://themes2.teachablecdn.com/themecss/production/base.css?_=d5b075d37bf7&brand_course_heading=%23ffffff&brand_heading=%23134361&brand_homepage_heading=%23ffffff&brand_navbar_fixed_text=%23ffffff&brand_navbar_text=%23ffffff&brand_primary=%23134361&brand_secondary=%23ff3f20&brand_text=%234d4d4d&logged_out_homepage_background_image_overlay=0.5&logged_out_homepage_background_image_url=https%3A%2F%2Fwww.filepicker.io%2Fapi%2Ffile%2F5mHijVFBS4qf8vcfzak0 */
a{color:#4d90cc;}
a:hover,a:active{color:#b91a00;}
a,a:active,a:hover,a:focus{text-decoration:none;}
a:hover, a:active {
    color: #4d90cc;
}
p{font-size:18px;font-weight:200;line-height:28px;}
h4{color:#134361;}
footer{bottom:0;width:100%;background-color:#134361;position:absolute;color:#bac1c7;padding:39px 0 42px;}
footer a{color:inherit;}
footer a:hover,footer a:focus{color:#4d90cc;}
footer a{color:#bac1c7;}
footer a:hover,footer a:focus{color:#fff;text-decoration:none;}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
p{font-size:16px;}
footer{display:block;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
p{margin:0 0 10px;}
ul{margin-top:0;margin-bottom:10px;}
.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.container:before,.container:after{display:table;content:" ";}
.container:after{clear:both;}
@media (min-width: 768px){
.container{width:750px;}
}
@media (min-width: 992px){
.container{width:970px;}
}
@media (min-width: 1200px){
.container{width:1170px;}
}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-sm-2,.col-sm-3{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-2,.col-sm-3{float:left;}
.col-sm-2{width:16.6666666667%;}
.col-sm-3{width:25%;}
}
*:focus{outline:none;}
a,a:hover{color:inherit;text-decoration:inherit;}
a:focus{color:inherit;text-decoration:none;}
h4{margin:0;font-weight:normal;}
img{-webkit-user-drag:none;}
li{list-style:none;}
p{margin:0;}
ul{padding:0;margin:0;}
footer{padding:120px 0;background:#f8f3f0;font-family:'TeachableSans-Regular';font-size:14px;clear:both;}
@media (max-width: 991px){
footer{padding-top:60px;text-align:center;}
}
footer .container .row ul{list-style-type:none;}
@media (max-width: 991px){
footer .container .row ul{margin-bottom:30px;padding-left:0px;}
}
footer .container .row ul h4{font-family:'TeachableSans-Bold';font-size:16px;margin-bottom:20px;color:#2c2f33;}
@media (max-width: 991px){
footer .container .row ul h4{margin-bottom:10px;}
}
footer .container .row ul li{margin-bottom:10px;}
footer .container .row ul li a{line-height:1.5em;color:#2c2f33;}
footer .container .row ul li a:hover{text-decoration:underline;}
}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
img{border-style:none;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
@media print{
*,:after,:before{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:focus{outline:none;}
*,::after,::before{box-sizing:inherit;}
img{border-style:none;}
*,::after,::before{box-sizing:inherit;}
*,::after,::before{box-sizing:inherit;}
img{border-style:none;}
*,::after,::before{box-sizing:inherit;}
img{border-style:none;}
*,::after,::before{box-sizing:inherit;}
img{border:0;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
*,:after,:before{box-sizing:border-box;}
img{vertical-align:middle;}
ul{margin-top:0;margin-bottom:10px;}
@media screen{
div{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
body *{box-sizing:border-box;}
}
@media screen{
div{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
body *{box-sizing:border-box;}
}
@media all{
footer{display:block;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
p{margin:0 0 10px;}
ul{margin-top:0;margin-bottom:10px;}
.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.container:before,.container:after{display:table;content:" ";}
.container:after{clear:both;}
@media (min-width: 768px){
.container{width:750px;}
}
@media (min-width: 992px){
.container{width:970px;}
}
@media (min-width: 1200px){
.container{width:1170px;}
}
.row{margin-right:-15px;margin-left:-15px;}
.row:before,.row:after{display:table;content:" ";}
.row:after{clear:both;}
.col-sm-2,.col-sm-3{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 768px){
.col-sm-2,.col-sm-3{float:left;}
.col-sm-2{width:25%;}
.col-sm-3{width:25%;}
}
*:focus{outline:none;}
a,a:hover{color:inherit;text-decoration:inherit;}
a:focus{color:inherit;text-decoration:none;}
h4{margin:0;font-weight:normal;}
img{-webkit-user-drag:none;}
li{list-style:none;}
p{margin:0;}
ul{padding:0;margin:0;}
footer{padding:35px 0;background:#f3f9fa;font-family:'TeachableSans-Regular';font-size:14px;clear:both;}
@media (max-width: 991px){
footer{padding-top:60px;text-align:center;}
}
footer .container .row ul{list-style-type:none;}
@media (max-width: 991px){
footer .container .row ul{margin-bottom:30px;padding-left:0px;}
}
footer .container .row ul h4{font-family:'TeachableSans-Bold';font-size:16px;margin-bottom:20px;color:#2c2f33;}
@media (max-width: 991px){
footer .container .row ul h4{margin-bottom:10px;}
}
footer .container .row ul li{margin-bottom:10px;}
footer .container .row ul li a{line-height:1.5em;color:#2c2f33;}
footer .container .row ul li a:hover{text-decoration:underline;}
}
}
/*! CSS Used fontfaces */
@font-face{font-family:'TeachableSans-Regular';src:url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.eot);src:url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.eot?#iefix) format("embedded-opentype"),url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.woff) format("woff"),url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.ttf) format("truetype");}
@font-face{font-family:'TeachableSans-Bold';src:url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.eot);src:url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.eot?#iefix) format("embedded-opentype"),url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.woff) format("woff"),url(//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.ttf) format("truetype");}
    </style>

    @else
    <style media="screen">
    footer{
        position: relative;
    }
    /*! CSS Used from: https://fedora.teachablecdn.com/assets/pages-a388a8b392c084dae7e42369a8aeefcf045074993ddb806fe6bbd528c07e53c2.css ; media=screen */
@media screen{
div,span,a,img,ul,li,footer{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
footer{display:block;}
ul{list-style:none;}
.footer__wrapper,.footer__inner{width:100%;}
@media only screen and (min-width: 768px){
.footer__wrapper{max-width:var(--base-width-cutoff);display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;}
}
*,*:before,*:after{box-sizing:inherit;}
a{text-decoration:none;color:var(--brand_secondary);}
img{display:block;}
.using-mouse :focus{outline:none;}
.footer{padding:20px;background-color:var(--brand_primary);display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;}
.footer__inner{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;font-size:1.4rem;line-height:2rem;font-weight:400;text-align:center;}
.footer__list+.footer__list{margin-top:20px;}
.footer__inner a,.footer__inner{color:var(--brand_navbar_text);}
.footer__inner a:hover{text-decoration:underline;}
.footer__copyright{font-size:1.8rem;}
@media only screen and (min-width: 768px){
.footer__inner{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;text-align:left;}
.footer__list.legal-links{margin-top:0;}
.powered-by{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;}
}
.powered-by{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-top:20px;}
.powered-by-logo{height:15px;display:inline-block;}
}
    </style>

    @endif


    <!--pour le slider-->

    <style media="screen">

.css-9whsf3{max-width:100%;}
/*! CSS Used from: Embedded */
.css-1ncomx8{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:480px){
.css-1ncomx8{width:50%;}
}
/*! CSS Used from: Embedded */
.css-1ac5tn2{color:rgb(52,56,59);display:block;font-size:24px;font-weight:700;opacity:1;text-align:center;text-transform:none;line-height:32px;margin-bottom:24px;margin-top:48px;font-size:32px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;margin-bottom:32px;word-break:normal;margin-top:0;text-align:left;}
@media (max-width:480px){
.css-1ac5tn2{font-size:20px;line-height:28px;margin-bottom:20px;margin-top:44px;}
}
@media (max-width:919px){
.css-1ac5tn2{font-size:28px;margin-top:0;}
}
/*! CSS Used from: Embedded */
.css-1npclfr a{color:#2391d3;display:inline;font-size:16px;font-weight:300;opacity:1;text-align:left;text-transform:none;cursor:pointer;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:all 0.24s;transition:all 0.24s;}
.css-1npclfr a:hover{color:rgb(29,122,177);}
.css-1npclfr a:visited,.css-1npclfr a:link,.css-1npclfr a:active{color:#2391d3;}
.css-1npclfr p{margin-top:0;}
/*! CSS Used from: Embedded */
.css-9whsf3{max-width:100%;}
/*! CSS Used from: Embedded */
.css-gl013y{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:-32px;margin-bottom:64px;}
/*! CSS Used from: Embedded */
.css-1ncomx8{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:480px){
.css-1ncomx8{width:50%;}
}
/*! CSS Used from: Embedded */
.css-1ac5tn2{color:rgb(52,56,59);display:block;font-size:24px;font-weight:700;opacity:1;text-align:center;text-transform:none;line-height:32px;margin-bottom:24px;margin-top:48px;font-size:32px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;margin-bottom:32px;word-break:normal;margin-top:0;text-align:left;}
@media (max-width:480px){
.css-1ac5tn2{font-size:20px;line-height:28px;margin-bottom:20px;margin-top:44px;}
}
@media (max-width:919px){
.css-1ac5tn2{font-size:28px;margin-top:0;}
}
/*! CSS Used from: Embedded */
.css-1npclfr a{color:#2391d3;display:inline;font-size:16px;font-weight:300;opacity:1;text-align:left;text-transform:none;cursor:pointer;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:all 0.24s;transition:all 0.24s;}
.css-1npclfr a:hover{color:rgb(29,122,177);}
.css-1npclfr a:visited,.css-1npclfr a:link,.css-1npclfr a:active{color:#2391d3;}
.css-1npclfr p{margin-top:0;}
/*! CSS Used from: Embedded */
.css-3cg4xb{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:920px){
.css-3cg4xb{margin-left:-64px;margin-right:0;}
}
@media (min-width:480px){
.css-3cg4xb{width:50%;}
}
/*! CSS Used from: Embedded */
.css-9whsf3{max-width:100%;}
/*! CSS Used from: Embedded */
.css-1ncomx8{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:480px){
.css-1ncomx8{width:50%;}
}
/*! CSS Used from: Embedded */
.css-1ac5tn2{color:rgb(52,56,59);display:block;font-size:24px;font-weight:700;opacity:1;text-align:center;text-transform:none;line-height:32px;margin-bottom:24px;margin-top:48px;font-size:32px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;margin-bottom:32px;word-break:normal;margin-top:0;text-align:left;}
@media (max-width:480px){
.css-1ac5tn2{font-size:20px;line-height:28px;margin-bottom:20px;margin-top:44px;}
}
@media (max-width:919px){
.css-1ac5tn2{font-size:28px;margin-top:0;}
}
/*! CSS Used from: Embedded */
.css-1npclfr a{color:#2391d3;display:inline;font-size:16px;font-weight:300;opacity:1;text-align:left;text-transform:none;cursor:pointer;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:all 0.24s;transition:all 0.24s;}
.css-1npclfr a:hover{color:rgb(29,122,177);}
.css-1npclfr a:visited,.css-1npclfr a:link,.css-1npclfr a:active{color:#2391d3;}
.css-1npclfr p{margin-top:0;}
/*! CSS Used from: Embedded */
.css-9whsf3{max-width:100%;}
/*! CSS Used from: Embedded */
.css-gl013y{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:-32px;margin-bottom:64px;}
/*! CSS Used from: Embedded */
.css-1ncomx8{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:480px){
.css-1ncomx8{width:50%;}
}
/*! CSS Used from: Embedded */
.css-1ac5tn2{color:rgb(52,56,59);display:block;font-size:24px;font-weight:700;opacity:1;text-align:center;text-transform:none;line-height:32px;margin-bottom:24px;margin-top:48px;font-size:32px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;margin-bottom:32px;word-break:normal;margin-top:0;text-align:left;}
@media (max-width:480px){
.css-1ac5tn2{font-size:20px;line-height:28px;margin-bottom:20px;margin-top:44px;}
}
@media (max-width:919px){
.css-1ac5tn2{font-size:28px;margin-top:0;}
}
/*! CSS Used from: Embedded */
.css-1npclfr a{color:#2391d3;display:inline;font-size:16px;font-weight:300;opacity:1;text-align:left;text-transform:none;cursor:pointer;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:all 0.24s;transition:all 0.24s;}
.css-1npclfr a:hover{color:rgb(29,122,177);}
.css-1npclfr a:visited,.css-1npclfr a:link,.css-1npclfr a:active{color:#2391d3;}
.css-1npclfr p{margin-top:0;}
/*! CSS Used from: Embedded */
.css-3cg4xb{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:920px){
.css-3cg4xb{margin-left:-64px;margin-right:0;}
}
@media (min-width:480px){
.css-3cg4xb{width:50%;}
}
/*! CSS Used from: Embedded */
.css-9whsf3{max-width:100%;}
/*! CSS Used from: Embedded */
.css-1ncomx8{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:480px){
.css-1ncomx8{width:50%;}
}
/*! CSS Used from: Embedded */
.css-1ac5tn2{color:rgb(52,56,59);display:block;font-size:24px;font-weight:700;opacity:1;text-align:center;text-transform:none;line-height:32px;margin-bottom:24px;margin-top:48px;font-size:32px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;margin-bottom:32px;word-break:normal;margin-top:0;text-align:left;}
@media (max-width:480px){
.css-1ac5tn2{font-size:20px;line-height:28px;margin-bottom:20px;margin-top:44px;}
}
@media (max-width:919px){
.css-1ac5tn2{font-size:28px;margin-top:0;}
}
/*! CSS Used from: Embedded */
.css-1npclfr a{color:#2391d3;display:inline;font-size:16px;font-weight:300;opacity:1;text-align:left;text-transform:none;cursor:pointer;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:all 0.24s;transition:all 0.24s;}
.css-1npclfr a:hover{color:rgb(29,122,177);}
.css-1npclfr a:visited,.css-1npclfr a:link,.css-1npclfr a:active{color:#2391d3;}
.css-1npclfr p{margin-top:0;}
/*! CSS Used from: Embedded */
.css-9whsf3{max-width:100%;}
/*! CSS Used from: Embedded */
.css-gl013y{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:-32px;margin-bottom:64px;}
/*! CSS Used from: Embedded */
.css-1ncomx8{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:480px){
.css-1ncomx8{width:50%;}
}
/*! CSS Used from: Embedded */
.css-1ac5tn2{color:rgb(52,56,59);display:block;font-size:24px;font-weight:700;opacity:1;text-align:center;text-transform:none;line-height:32px;margin-bottom:24px;margin-top:48px;font-size:32px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;margin-bottom:32px;word-break:normal;margin-top:0;text-align:left;}
@media (max-width:480px){
.css-1ac5tn2{font-size:20px;line-height:28px;margin-bottom:20px;margin-top:44px;}
}
@media (max-width:919px){
.css-1ac5tn2{font-size:28px;margin-top:0;}
}
/*! CSS Used from: Embedded */
.css-1npclfr a{color:#2391d3;display:inline;font-size:16px;font-weight:300;opacity:1;text-align:left;text-transform:none;cursor:pointer;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:all 0.24s;transition:all 0.24s;}
.css-1npclfr a:hover{color:rgb(29,122,177);}
.css-1npclfr a:visited,.css-1npclfr a:link,.css-1npclfr a:active{color:#2391d3;}
.css-1npclfr p{margin-top:0;}
/*! CSS Used from: Embedded */
.css-3cg4xb{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:920px){
.css-3cg4xb{margin-left:-64px;margin-right:0;}
}
@media (min-width:480px){
.css-3cg4xb{width:50%;}
}
/*! CSS Used from: Embedded */
.css-9whsf3{max-width:100%;}
/*! CSS Used from: Embedded */
.css-1ncomx8{box-sizing:border-box;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;padding:32px;width:100%;}
@media (min-width:480px){
.css-1ncomx8{width:50%;}
}
/*! CSS Used from: Embedded */
.css-1ac5tn2{color:rgb(52,56,59);display:block;font-size:24px;font-weight:700;opacity:1;text-align:center;text-transform:none;line-height:32px;margin-bottom:24px;margin-top:48px;font-size:32px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;margin-bottom:32px;word-break:normal;margin-top:0;text-align:left;}
@media (max-width:480px){
.css-1ac5tn2{font-size:20px;line-height:28px;margin-bottom:20px;margin-top:44px;}
}
@media (max-width:919px){
.css-1ac5tn2{font-size:28px;margin-top:0;}
}
/*! CSS Used from: Embedded */
.css-1npclfr a{color:#2391d3;display:inline;font-size:16px;font-weight:300;opacity:1;text-align:left;text-transform:none;cursor:pointer;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:all 0.24s;transition:all 0.24s;}
.css-1npclfr a:hover{color:rgb(29,122,177);}
.css-1npclfr a:visited,.css-1npclfr a:link,.css-1npclfr a:active{color:#2391d3;}
.css-1npclfr p{margin-top:0;}
/*! CSS Used from: Embedded */
.css-9whsf3{max-width:100%;}

    </style>

    <!--pour le logo-->
    <style media="screen">
    .navbar__title {
        color: #fff;
        font-size: 4rem;
    }
    </style>

    <style media="screen">
    @media (min-width: 991px){
        .navbar-collapse {
            float: right;
            display: flex !important;
        }
    }

    .course-listing:hover .course-listing-title {
    color: #{{$school->color->buttons_links}} !important;
    transition: all linear 0.1s;
    }

    .course-listing:hover {
        box-shadow: 0px 0px 0px 1px #4d90cc !important;
        border: 1px solid #{{$school->color->buttons_links}} !important;
        transition: all linear 0.1s;
    }

    .navbar-fedora {
        background-color: black;
    }

    .btn-default.btn-lg.btn-course-filter.dropdown-toggle {
    color: #4d90cc !important;
  }

  a:hover, a:active {
    color: #{{$school->color->navbar_links}} !important;
}
    </style>

    <!--pour la fleche du menu-->
    <style media="screen">

.nav-icon-back{width:40px;font-size:29px;padding:20px;padding-left:15px;padding-right:15px;cursor:pointer;color:#eeeeee;line-height:66px;vertical-align:middle;opacity:0.9;}
.nav-icon-back:hover{opacity:1;}
.nav-icon-back i{background:#fff;width:40px;height:40px;padding:0px;text-align:center;font-size:26px;padding-top:6px;border-radius:25px;font-weight:200;color:#4d4d4d;}
.lecture-left{width:349px;height:46px!important;float:left;}
.lecture-left .nav-icon-back{width:50px!important;height:50px;padding:10px;line-height:20px;display:block;float:left;text-align:center;}
.lecture-left .nav-icon-back i{width:25px;height:25px;font-size:20px;padding-top:2px;}
.lecture-left .nav-icon-back:hover{text-decoration:none;}
@media screen and (min-width: 768px) and (max-width: 991px){
.lecture-left{width:300px;}
}
@media screen and (max-width: 767px){
.lecture-left{width:150px;}
}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css */
.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-angle-left:before{content:"\f104";}

.full-width {
    background-color: #4d4d4d;
    height: 46px;
    top: 0;
    position: fixed;
    width: 100%;
}

.full-width .navbar-fedora .navbar-header-collapse {
    float: right;
    padding-right: 0px!important;
}

    </style>


    <style media="screen">
    .fedora-navbar-link:hover {
            background-color: #{{$school->color->navbar_footer}} !important;
        }

        h1, h2, h3, h4, h5 {
            color: #{{$school->color->headings}} !important;
        }
        .nav.navbar-nav>li .fedora-navbar-link{
            color: #{{$school->color->navbar_links}};
        }
    </style>


</head>

<body cz-shortcut-listen="true" >
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDKHLDR"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

    <!-- HEADER -->
    <header class="full-width">
        @if(\Route::current()->getName() == 'website.subdomain.home_users')
        <div class="lecture-left">
            <a class="nav-icon-back" aria-label="Back to courses" href="/">
                <i class="fa fa-angle-left" title="Back to courses"></i>
            </a>
        </div>
        @else
        <!-- Navbar -->
        <div style="background: #{{$school->color->navbar_footer}};" class="navbar navbar-fedora navbar-fixed-top is-at-top bs-docs-nav is-signed-in" id="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header navbar-header-courses">
                    <button class="navbar-toggle" data-target=".navbar-header-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Site logo -->
                    @if($school->user->type3 == 'owner')
                     @if($school->logo == 'image.jpg')
                    <a class="navbar__title" href="{{ route('website.subdomain.home', ['subdomain' => $school->slug]) }}">
                      {{$school->name}}
                    </a>
                    @else
                    <a style="padding: 5px;" class="school-title navbar-brand" href="{{ route('website.subdomain.home', ['subdomain' => $school->slug]) }}">
                        <img width="50" src="/images/schools/logos/{{$school->logo}}" alt="logo" id="nhf">
                    </a>
                    @endif
                    @else
                    <a style="padding: 0px;" class="school-title navbar-brand" href="/">
                        <img src="/images/schools/logos/logo_oschool_blanc.png" alt="logo" id="nhf">
                    </a>
                    @endif


                    <!-- Header Menu -->
                    <div class="collapse navbar-collapse navbar-header-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            @auth
                            @if(Auth::user()->createSchools->contains($school->id))
                            <li>

                                <a class="fedora-navbar-link navbar-link" href="{{ route('website.subdomain', ['school' => $school->id, 'subdomain' => $school->slug]) }}" target="">
                                    Admin
                                </a>

                            </li>
                            @endif

                            @if(Auth::user()->isOwner() && Auth::user()->createSchools->contains($school->id))
                            <li>

                                <a class="fedora-navbar-link navbar-link" href="{{ route('website.subdomain.previewIn', ['school' => $school->id, 'subdomain' => $school->slug]) }}" target="">
                                    Aperçu inscrit
                                </a>

                            </li>
                            <li>

                                <a class="fedora-navbar-link navbar-link" href="{{ route('website.subdomain.previewOut', ['school' => $school->id, 'subdomain' => $school->slug]) }}" target="">
                                    Aperçu visiteur
                                </a>

                            </li>
                            @elseif(Auth::user()->isAdmin() && Auth::user()->createSchools->contains($school->id))
                            <li>

                                <a class="fedora-navbar-link navbar-link" href="{{url('schoolAdmin', $school)}}" target="">
                                    Aperçu inscrit
                                </a>

                            </li>
                            <li>

                                <a class="fedora-navbar-link navbar-link" href="{{url('schoolAdmin', $school)}}" target="">
                                    Aperçu visiteur
                                </a>

                            </li>
                            @endif


                            <li>

                                <a class="fedora-navbar-link navbar-link" href="/home" target="">
                                    Mes cours
                                </a>

                            </li>
                            @endauth

                            <li>

                                <a class="fedora-navbar-link navbar-link" href="/home" target="">
                                    Tous les cours
                                </a>

                            </li>

                            @if($school->user->type1 == 'admin')
                            <li>

                                <a class="fedora-navbar-link navbar-link current-page" href="/schools" target="">
                                    Nos écoles
                                </a>

                            </li>
                            @endif

                            @guest
                            <li>

                                <a class="fedora-navbar-link navbar-link current-page" href="/login" target="">
                                    Connexion
                                </a>

                            </li>
                            @endguest


                            <!-- If more than 5 links, collapse the rest in a dropdown -->


                            @auth
                            <!-- User Menu -->
                            <li class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="fedora-navbar-link navbar-link dropdown-toggle open-my-profile-dropdown" data-toggle="dropdown">
                                  <img class="gravatar" src="/images/users/default/{{Auth::user()->image}}" alt="{{Auth::user()->email}}">
                                  <span class="navbar-current-user">{{Auth::user()->name}}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-profile">
                                      <a href="/home">
                                        Tableau de bord
                                      </a>
                                    </li>
                                    <li class="user-profile">
                                      <a href="/users/settings">
                                        Modifier votre profil
                                      </a>
                                    </li>
                                    <li>

                                      <a href="/users/billings"col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2"rent_user/subscriptions">
                                        Gérer vos abonnements
                                      </a>
                                    </li>
                                    <li class="user-signout">
                                      <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Se déconnecter</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>

                            </li>
                            @endauth
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        @endif
    </header>

    @yield('content')


    @if($school->user->isAdmin())
    <footer style="bottom: 0 !important;position: relative;">
      <div class="container">
        <div class="row">
          <div class="col-sm-2 first-section">

              <h4> <img src="/images/schools/logos/oschool_2.png" alt="" style="width: 130px;"> </h4>
              <p> <br> Oschool vous offre la possibilité de poursuivre des diplômes et certificats 100% en ligne, auprès des meilleures universités d’Afrique.</p>
              <p>© 2019 OSCHOOL. TOUS DROITS RÉSERVÉS.</p>
          </div>
          <div class="col-sm-2 second-section">
            <ul class="new-homepage-footer-links">
              <h4>Oschool</h4>
              <!--li>
                <a target="_blank" rel="noopener noreferrer" href="https://teachable.zendesk.com/hc/en-us">Carrières</a>
              </li-->
              <li>
                <a target="_blank" rel="noopener noreferrer" href="https://blog.oschoolelearning.com/devenir-formateur/">Devenez formateur</a>
              </li>
              <li>
                <a target="_blank" rel="noopener noreferrer" href="https://blog.oschoolelearning.com/faq/">FAQ</a>
              </li>
              <li>
                <a target="_blank" rel="noopener noreferrer" href="https://support.oschoolelearning.com/qui-sommes-nous/">Qui sommes nous?</a>
              </li>
              <li>
                <a target="_blank" rel="noopener noreferrer" href="https://discord.gg/hhbzcHE">La communauté</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-2 third-section">
            <ul class="new-homepage-footer-links">
              <h4>Plus</h4>
              <li>
                <a href="https://blog.oschoolelearning.com/condition/">Conditions</a>
              </li>
              <li>
                <a href="https://blog.oschoolelearning.com/confidentialite/">Confidentialité</a>
              </li>
              <li>
                <a href="https://blog.oschoolelearning.com/contact/">Contactez-nous</a>
              </li>
              <li>
                <a href="https://blog.oschoolelearning.com">Blog</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul class="new-homepage-footer-links">
              <h4>Réseaux sociaux</h4>
              <li>
                <a href="https://www.facebook.com/Oschool.ci/" target="_blank">Facebook</a>
              </li>
              <li>
                <a href="https://twitter.com/OschoolLearning" target="_blank">Twiter</a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/oschool-ci-5823b8141/" target="_blank">Linkedin</a>
              </li>
              <li>
                <a href="https://www.instagram.com/oschool_e_learning/" target="_blank">instagram</a>
              </li>
            </ul>
          </div>
          <!--div class="col-sm-3">
            <ul class="new-homepage-footer-links">
              <h4>Get in touch</h4>
              <li>We're here if you need us:</li>
              <li>
                <a href="mailto:support@teachable.com">Contact us</a>
              </li>
              <li class="social-icons">
                <a target="_blank" rel="noopener noreferrer" class="social-icon" href="https://www.facebook.com/teachableHQ/">
                  <img src="https://teachable.com/assets/footer/facebook_icon-4123fb4aef6386d557ed654543029d5964d42775cc972ce186789292243d19e7.png" width="32px">
                </a>
                <a target="_blank" rel="noopener noreferrer" class="social-icon" href="https://twitter.com/teachable">
                  <img src="https://teachable.com/assets/footer/twitter_icon-dfcd749e19035479055f2de4729aa45470ce648b11f56aad4534a89d83947930.png" width="32px">
                </a>
                <a target="_blank" rel="noopener noreferrer" class="social-icon" href="https://www.pinterest.com/teachablehq/">
                  <img src="https://teachable.com/assets/footer/pinterest_icon-f81e2671629b0d1716cbdce81fd1500d598c50e9d65ee3c50950dcc89bfbe827.png" width="32px">
                </a>
                <a target="_blank" rel="noopener noreferrer" class="social-icon" href="https://www.instagram.com/teachable/">
                  <img src="https://teachable.com/assets/footer/instagram_icon-1e222076e9d388360f27a800afdd9571892dd5143ff480daea7bd879c84f8005.svg" width="32px">
                </a>
              </li>
            </ul>
          </div-->
        </div>
        <!--div class="row">
          <div class="col-sm-12 new-homepage-footer-logo padding">
            <a href="/">
              <img alt="" src="https://teachable.com/assets/teachable-logo-orange-3ece80f83dd5fdb472495dd41735abbb3e685c351b2e54a84aaee8c56e9f1283.svg" class="new-homepage-footer-logo">
            </a>
            <span>All rights reserved Teachable™ 2019</span>
          </div>
        </div-->
      </div>
    </footer>

    @else

    <footer style="background: #{{$school->color->navbar_footer}}; color: #{{$school->color->body_text}};" class="">
        <div class="footer">
            <div class="footer__wrapper">
                <div class="footer__inner">
                    <ul class="footer__list">
                        <li class="footer__copyright">
                            ©
                            {{$school->name}}
                            <span id="year"></span>
                        </li>

                    </ul>
                    <ul class="footer__list legal-links">
                        <!--
                        <li>
                            <a href="/p/terms">
                                Terms of Use
                            </a>
                        </li>
                        <li>
                            <a href="/p/privacy">
                                Privacy Policy
                            </a>
                        </li>
                    -->

                        <li>
                            <span class="powered-by-text">Créez votre plateforme de formation avec</span>
                            <a class="powered-by" href="https://oschoolelearning.com">
                                <img src="/images/schools/logos/logo_oschool_blanc.png" />
                            </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

    @endif






    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

      <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="/js/quill/image-resize.min.js"></script>
  <script src="/js/quill/video-resize.min.js"></script>




</body>

</html>
