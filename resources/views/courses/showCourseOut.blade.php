@extends('layouts.menu-school')

@section('title', $course->name)
@section('description', $course->subtitle)
@section('image', $course->logo)
@section('content')

<style>
/*! CSS Used from: https://d3njjcbhbojbot.cloudfront.net/webapps/r2-builds/xdp/allStyles.870c38e859677686c8f1.css */
.rc-StartDateString{text-align:center;}
img{border:0;}
button{color:inherit;}
button{overflow:visible;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}

@media print{

*{text-shadow:none!important;color:#000!important;background:transparent!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
*,:after,:before{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;}
.caption-text{font-size:12px;line-height:18px;font-family:'TeachableSans-Regular';}
.rc-FinaidLink .caption-text{font-size:12px;}
.rc-FinaidLink.reset .caption-text{font-size:inherit;font-weight:inherit;margin-bottom:0;}
.rc-FinaidLink.reset .finaid-link{color:inherit;}
::-webkit-input-placeholder{color:#666;}
:-moz-placeholder,::-moz-placeholder{color:#666;opacity:1;}
:-ms-input-placeholder,::-ms-input-placeholder{color:#666;}
::placeholder{color:#666;}
@media print{
*{overflow:visible!important;}
}
.text-primary{color:#363b42;}

.d-inline-block{display:inline-block!important;}
.m-x-0{margin-left:0!important;}
.m-x-0{margin-right:0!important;}
.m-t-1s{margin-top:.5rem!important;}
.m-b-1s{margin-bottom:.5rem!important;}
.m-y-1s{margin-top:.5rem!important;margin-bottom:.5rem!important;}
.m-t-1{margin-top:1rem!important;}
.m-x-1{margin-left:1rem!important;}
.m-x-1{margin-right:1rem!important;}
.m-r-2{margin-right:1.5rem!important;}
.p-l-1s{padding-left:.5rem!important;}
.p-y-1s{padding-top:.5rem!important;padding-bottom:.5rem!important;}
.p-b-1{padding-bottom:1rem!important;}
.p-y-1{padding-top:1rem!important;padding-bottom:1rem!important;}
.p-t-2{padding-top:1.5rem!important;}
.p-b-2{padding-bottom:1.5rem!important;}
.p-t-5{padding-top:5rem!important;}
.text-xs-left{text-align:left!important;}
button.button-link{background:transparent none repeat 0 0 scroll;color:rgba(0,0,0,.87);border:0;font-size:1em;margin:0;padding:0;text-align:left;text-decoration:none;text-indent:0;min-width:0;}
button.button-link:disabled{background:transparent none repeat 0 0 scroll;color:rgba(0,0,0,.26);}
button.button-link{color:#4d90cc!important;text-decoration:none;cursor:pointer;}
button.button-link:hover{text-decoration:underline;}
::-webkit-input-placeholder{color:hsla(0,0%,47%,.75);}
::-moz-placeholder{color:hsla(0,0%,47%,.75);}
:-ms-input-placeholder{color:hsla(0,0%,47%,.75);}
img{border-style:none;}
svg:not(:root){overflow:hidden;}
button{font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;}
button::-moz-focus-inner{border-style:none;padding:0;}
button:-moz-focusring{outline:1px dotted ButtonText;}
::-webkit-input-placeholder{color:inherit;opacity:.54;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=54)";filter:alpha(opacity=54);}
*,:after,:before{box-sizing:inherit;}
img{vertical-align:middle;}
button{-ms-touch-action:manipulation;touch-action:manipulation;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{line-height:inherit;}
*{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
/*! CSS Used from: Embedded */
.SvgIcon_8wfvj4{display:inline-block;vertical-align:middle;color:#363B42;transition:all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;user-select:none;-webkit-transition:all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;}
.Container_jd01j4-o_O-container_17wca8l{margin-left:auto;margin-right:auto;padding-left:12px;padding-right:12px;}
.Container_jd01j4-o_O-container_17wca8l:after{display:table;clear:both;}
@media (min-width: 608px){
.Container_jd01j4-o_O-container_17wca8l{width:576px;}
/* .EnrollSectionSCDP{
    margin-bottom: 300px;
  } */

}
@media (min-width: 824px){
.Container_jd01j4-o_O-container_17wca8l{width:792px;}
/* .EnrollSectionSCDP{
    margin-bottom: 300px;
  } */


}

.EnrollSectionSCDP{
    margin-bottom: 10px;
  }

@media (min-width: 1040px){
.Container_jd01j4-o_O-container_17wca8l{width:1008px;}
}
@media (min-width: 1184px){
.Container_jd01j4-o_O-container_17wca8l{width:1152px;}
.EnrollSectionSCDP{
    margin-bottom: 20px;
  }
}
@media (min-width: 1472px){
.Container_jd01j4-o_O-container_17wca8l{width:1440px;}
}
.Row_nvwp6p{display:-moz-box;display:-ms-flexbox;display:-webkit-box;display:-webkit-flex;display:flex;flex-wrap:wrap;margin-left:-12px;margin-right:-12px;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;-webkit-box-lines:multiple;}
.Row_nvwp6p:after{display:table;clear:both;}
.Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc{align-items:center;display:-moz-box;display:-ms-flexbox;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-align-items:center;-ms-flex-align:center;-webkit-box-align:center;}
.Box_120drhm-o_O-displayflex_poyjc{display:-moz-box;display:-ms-flexbox;display:-webkit-box;display:-webkit-flex;display:flex;}
.Box_120drhm-o_O-centerJustify_1nezfbd-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc{ justify-content:center;align-items:center;display:-moz-box;display:-ms-flexbox;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-justify-content:center;-webkit-align-items:center;-ms-flex-pack:center;-webkit-box-pack:center;-ms-flex-align:center;-webkit-box-align:center;}

  .Button_1w8tm98-o_O-primary_cv02ee-o_O-md_1jvotax {
    border-radius: 2px;
    border-width: 1px;
    border-style: solid;
    border-color: transparent;
    transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;
    line-height: 1rem;
    user-select: none;
    position: relative;
    text-align: center;
    display: inline-block;
    vertical-align: middle;
    white-space: nowrap;
    background-image: none;
    cursor: pointer;
    filter: none;
    text-decoration: none;
    font-weight: 600;
    color: #FFF;
    background-color: #4d90cc!important;
    border: 1px solid #4d90cc!important;
    padding: 1.9rem 2rem;
    font-size: 1.7rem;
    min-height: 48px;
    -webkit-transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -webkit-filter: none;
}



  .enrolledLargeFont_16g5ucx{font-size:30px;}
.Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c{font-size:19px;position:relative;min-height:1px;width:100%;padding-left:12px;padding-right:12px;}
.Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c:after{display:table;clear:both;}
@media (min-width: 320px){
  .EnrollSectionSCDP{
    /* margin-bottom: 500px; */
  }

.Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c{width:100%;}
}
@media (min-width: 824px){
  .EnrollSectionSCDP{
    margin-bottom: 70px;
  }


.Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c{width:50%;}
}
.button_8xjif7:hover{opacity:0.7;}
.button_8xjif7:disabled{opacity:0.7;}
.Button_1w8tm98-o_O-primary_cv02ee-o_O-md_1jvotax{border-radius:2px;border-width:1px;border-style:solid;border-color:transparent;transition:all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;line-height:1rem;user-select:none;position:relative;text-align:center;display:inline-block;vertical-align:middle;white-space:nowrap;background-image:none;cursor:pointer;filter:none;text-decoration:none;font-weight:600;color:#FFF;background-color:#2A73CC;border:1px solid #2A73CC;padding:0.9rem 2rem;font-size:1rem;min-height:48px;-webkit-transition:all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-webkit-filter:none;}
.Button_1w8tm98-o_O-primary_cv02ee-o_O-md_1jvotax:hover{text-decoration:none!important;background-color:#0156B8;}
.Button_1w8tm98-o_O-primary_cv02ee-o_O-md_1jvotax:focus{outline:auto 2px rgb(0, 105, 217);text-decoration:none!important;}
/*! CSS Used fontfaces */
@font-face{font-family:'OpenSans';src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.eot?#iefix) format('embedded-opentype'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.woff2) format('woff2'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.woff) format('woff'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.ttf) format('truetype'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.svg#OpenSans-Regular) format('svg');font-weight:normal;font-style:normal;}
@font-face{font-family:'OpenSans';src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot?#iefix) format('embedded-opentype'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff2) format('woff2'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff) format('woff'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.ttf) format('truetype'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.svg#OpenSans-Bold) format('svg');font-weight:bold;font-style:normal;}
@font-face{font-family:OpenSans;font-style:normal;font-weight:300;src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot#iefix) format("embedded-opentype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff2) format("woff2"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff) format("woff"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.ttf) format("truetype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.svg#OpenSans-Light) format("svg");}
@font-face{font-family:OpenSans;font-style:normal;font-weight:400;src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.eot#iefix) format("embedded-opentype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.woff2) format("woff2"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.woff) format("woff"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.ttf) format("truetype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.svg#OpenSans-Regular) format("svg");}
@font-face{font-family:OpenSans;font-style:normal;font-weight:600;src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.eot#iefix) format("embedded-opentype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.woff2) format("woff2"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.woff) format("woff"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.ttf) format("truetype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.svg#OpenSans-Semibold) format("svg");}
@font-face{font-family:OpenSans;font-style:normal;font-weight:700;src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot#iefix) format("embedded-opentype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff2) format("woff2"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff) format("woff"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.ttf) format("truetype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.svg#OpenSans-Bold) format("svg");}
@font-face{font-family:'OpenSans-Light';src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot?#iefix) format('embedded-opentype'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff2) format('woff2'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff) format('woff'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.ttf) format('truetype'),        url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.svg#OpenSans-Light) format('svg');font-weight:normal;font-style:normal;}
@font-face{font-family:OpenSans-Light;src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot#iefix) format("embedded-opentype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff2) format("woff2"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff) format("woff"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.ttf) format("truetype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.svg#OpenSans-Light) format("svg");font-weight:400;font-style:normal;}
@font-face{font-family:OpenSans-Bold;font-weight:700;src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot);src:url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot#iefix) format("embedded-opentype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff2) format("woff2"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff) format("woff"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.ttf) format("truetype"),url(https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.svg#OpenSans-Bold) format("svg");}
</style>



<!--style educative.io-->
<style media="screen">
/*! CSS Used from: Embedded */
.MuiButtonBase-root{color:inherit;border:0;cursor:pointer;margin:0;display:inline-flex;outline:0;padding:0;position:relative;align-items:center;user-select:none;border-radius:0;vertical-align:middle;-moz-appearance:none;justify-content:center;text-decoration:none;background-color:transparent;-webkit-appearance:none;-webkit-tap-highlight-color:transparent;}
.MuiButtonBase-root::-moz-focus-inner{border-style:none;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body1{margin:4px;font-size:1.125rem;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.5;letter-spacing:0.00938em;}
@media (min-width:600px){
.MuiTypography-body1{font-size:1.1667rem;}
}
@media (min-width:800px){
.MuiTypography-body1{font-size:1.1667rem;}
}
@media (min-width:1025px){
.MuiTypography-body1{font-size:1.3333rem;}
}
.MuiTypography-h1{margin:16px;font-size:3.1875rem;text-align:center;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.167;letter-spacing:-0.01562em;}
@media (min-width:600px){
.MuiTypography-h1{font-size:4.4987rem;}
}
@media (min-width:800px){
.MuiTypography-h1{font-size:4.9272rem;}
}
@media (min-width:1025px){
.MuiTypography-h1{font-size:5.3556rem;}
}
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
.MuiTypography-h5{margin:4px;font-size:1.25rem;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.334;letter-spacing:0em;}
@media (min-width:600px){
.MuiTypography-h5{font-size:1.3118rem;}
}
@media (min-width:800px){
.MuiTypography-h5{font-size:1.4993rem;}
}
@media (min-width:1025px){
.MuiTypography-h5{font-size:1.4993rem;}
}
.MuiTypography-alignLeft{text-align:left;}
/*! CSS Used from: Embedded */
.MuiPaper-root{color:rgba(0, 0, 0, 0.87);transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;background-color:#fff;}
.MuiPaper-rounded{border-radius:4px;}
.MuiPaper-elevation1{box-shadow:0px 2px 1px -1px rgba(0,0,0,0.2),0px 1px 1px 0px rgba(0,0,0,0.14),0px 1px 3px 0px rgba(0,0,0,0.12);}
/*! CSS Used from: Embedded */
.MuiCard-root{overflow:hidden;}
/*! CSS Used from: Embedded */
.jss773{max-width:500px;box-shadow:0px 0px 8px rgba(0, 0, 0, 0.2);transition:0.4s;}
.jss773:hover{transform:translateY(-5px);box-shadow:0px 16px 40px rgba(0, 0, 0, 0.2);}
/*! CSS Used from: Embedded */
.MuiCardActionArea-root{width:100%;height:100%;display:block;box-shadow:0 0 10px rgba(0, 0, 0, .03);text-align:inherit;}
.MuiCardActionArea-root:hover .MuiCardActionArea-focusHighlight{opacity:0.04;}
.MuiCardActionArea-focusHighlight{top:0;left:0;right:0;bottom:0;opacity:0!important;overflow:hidden;position:absolute;transition:opacity 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;border-radius:inherit;pointer-events:none;background-color:currentcolor;}
/*! CSS Used from: Embedded */
.MuiCardContent-root{padding:8px;}
/*! CSS Used from: Embedded */
.MuiCardMedia-root{display:block;background-size:cover;background-repeat:no-repeat;background-position:center;}
.MuiCardMedia-media{width:100%;}
.MuiCardMedia-img{object-fit:cover;}
/*! CSS Used from: Embedded */
.jss771{display:flex;flex-direction:column;}
/*! CSS Used from: https://www.educative.io/static/css/92.3705e7dd.chunk.css */
menu{display:block;}
a{background-color:initial;}
a:active,a:hover{outline:0;}
b{font-weight:700;}
h1{font-size:2em;margin:.67em 0;}
img{border:0;}
svg:not(:root){overflow:hidden;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*,:after,:before{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h1,h4,h5{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h1{margin-top:20px;margin-bottom:10px;}
h4,h5{margin-top:10px;margin-bottom:10px;}
h1{font-size:36px;}
h4{font-size:18px;}
h5{font-size:14px;}
p{margin:0 0 10px;}
ul{margin-top:0;margin-bottom:10px;}
.fade{opacity:0;transition:opacity .15s linear;}
.fade.in{opacity:1;}
.nav{padding-left:0;margin-bottom:0;list-style:none;}
.nav>li,.nav>li>a{position:relative;display:block;}
.nav>li>a{padding:10px 15px;}
.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee;}
.nav-tabs{border-bottom:1px solid #ddd;}
.nav-tabs>li{float:left;margin-bottom:-1px;}
.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0;}
.nav-tabs>li>a:hover{border-color:#eee #eee #ddd;}
.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid;border-color:#ddd #ddd transparent;}
.tab-content>.tab-pane{display:none;}
.tab-content>.active{display:block;}
.nav:after,.nav:before{display:table;content:" ";}
.nav:after{clear:both;}
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
img{max-width:100%;}
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.gAnVwf{margin:0px;}
.kXMduL{font-weight:600;margin-bottom:8px;}
.cHTJga{display:flex;height:150px;width:300px;overflow:hidden;-webkit-box-align:center;align-items:center;border-radius:4px;}
@media (max-width: 780px){
.cHTJga{height:180px;width:360px;}
}
.iRWUUv{width:100%;height:100%;object-fit:cover;}
.jFlLHK{display:flex;flex:1 1 0%;max-width:300px;min-height:150px;-webkit-box-align:center;align-items:center;border:1px solid rgb(210, 210, 214);border-radius:4px;margin-right:20px;transition:all 0.3s ease 0s;}
@media (max-width: 780px) and (min-width: 660px){
.jFlLHK{margin-bottom:20px;max-width:360px;min-height:180px;}
}
@media (max-width: 660px){
.jFlLHK{margin-bottom:20px;align-self:center;margin-right:0px;min-height:180px;}
}
.cnHwwa{display:inline-flex;vertical-align:middle;cursor:pointer;transition:all 0.2s ease 0s;color:rgb(0, 0, 0);margin:0px;transform:rotate(-180deg) scale(1);}
.cnHwwa:hover{color:#{{$school->color->buttons_links}};}
.cnHwwa:hover svg{stroke:#{{$school->color->buttons_links}};}
.cnHwwa:hover{transform:rotate(0deg) scale(1.2);}
.cnHwwa:hover{transform:rotate(-180deg) scale(1.3);}
.gdutop{overflow:hidden;display:inline-block;border-radius:100%;transition:all 0.2s ease 0s;width:28px;height:28px;}
.gdutop img{object-fit:cover;vertical-align:inherit;}
.gdutop img{width:28px;height:28px;}
.ixzirH{display:flex;flex-direction:row;}
.cSrPUe{color:rgb(0, 0, 0);font-weight:700;font-size:30px;}
.hjxntX{color:rgb(0, 0, 0);font-size:14px;font-weight:700;align-self:flex-end;margin-bottom:7px;}
.krbfLT{display:flex;flex-direction:column;}
.lfqEYp{display:flex;-webkit-box-pack:center;justify-content:center;align-self:flex-start;width:100%;}
@media (max-width: 660px){
.lfqEYp{align-self:center;-webkit-box-align:center;align-items:center;flex-direction:column;}
}
.kWrPey{font-weight:600;margin:0px 32px 16px 0px;font-size:30px;}
@media (max-width: 660px){
.kWrPey{margin-right:0px;text-align:center;}
}
.izXbvw{font-size:14px;color:rgb(0, 0, 0);margin:1px 0px 0px 10px;}
.izXbvw:hover{color:#{{$school->color->buttons_links}};}
.auHjp{border-radius:100%;height:27px;width:28px;transition:all 0.2s ease 0s;}
.iIHdSa{text-align:center;}
.kLpAau{display:flex;flex-flow:row wrap;-webkit-box-pack:justify;justify-content:space-between;font-size:12px;color:rgb(0, 0, 0);border:1px solid rgb(210, 210, 214);border-radius:4px;margin-top:20px;}
@media (max-width: 660px){
.kLpAau{-webkit-box-pack:center;justify-content:center;}
}
@media (min-width: 660px){
.kLpAau{max-height:60px;overflow:hidden;}
}
.ivAKiS{display:flex;flex-direction:column;-webkit-box-align:center;align-items:center;margin:10px 20px;}
.liQwTV{display:flex;flex-direction:column;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;background-color:rgb(255, 255, 255);width:40px;height:20px;font-size:20px;font-weight:700;padding-top:3px;}
.liQwTV svg{margin-top:-4px;}
.dopxaT{display:flex;flex-direction:column;-webkit-box-pack:start;justify-content:flex-start;-webkit-box-align:center;align-items:center;min-width:230px;margin-top:8px;position:fixed;}
@media (max-width: 660px){
.dopxaT{margin-top:15px;}
}
.iHyzSJ{display:flex;flex-direction:column;width:100%;}
@media (max-width: 780px){
.iHyzSJ{flex-direction:row;}
}
.dcNcwD{position:relative;min-width:264px;margin-left:20px;}
@media (max-width: 1023px){
.dcNcwD{display:none;}
}
.csoTuR{position:absolute;min-width:264px;padding:0px 20px;clip:rect(0px, auto, auto, 0px);height:100%;}
.bxqCze{display:flex;width:100%;}
@media (max-width: 780px){
.bxqCze{-webkit-box-pack:center;justify-content:center;width:auto;}
}
.imbVAc{display:flex;flex-flow:column wrap;width:100%;margin-top:8px;}
@media (max-width: 480px){
.imbVAc{-webkit-box-pack:center;justify-content:center;}
}
.bvboTZ{color:#{{$school->color->buttons_links}};}
.iAdXyW{margin-top:30px;flex:1 1 0%;white-space:pre-line;font-size:16px;}
@media (max-width: 780px){
.iAdXyW{margin:30px 0px 0px;padding-right:0px;}
}
.ivfIYc{display:flex;flex-direction:row;}
@media (max-width: 480px){
.ivfIYc{flex-direction:column;-webkit-box-pack:center;justify-content:center;}
}
.eyJePy{display:flex;flex-direction:row;-webkit-box-align:center;align-items:center;min-width:110px;margin:0px 10px 10px 0px;}
@media (max-width: 480px){
.eyJePy{min-width:unset;width:auto;margin-left:5px;margin-right:5px;}
}
.bVDUT{display:flex;flex-direction:row;-webkit-box-pack:justify;justify-content:space-between;}
@media (max-width: 660px){
.bVDUT{flex-direction:column;}
}
.hxzHfa{display:flex;flex-direction:column;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;border-radius:4px;width:232px;box-shadow:rgb(229, 229, 229) 0px 0px 0.9em;padding:16px;transition:all 0.2s ease 0s;position:relative;background:rgb(250, 250, 250);}
.hJcWvf{display:flex;flex-direction:column;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;border-radius:4px;width:232px;box-shadow:rgb(229, 229, 229) 0px 0px 0.9em;padding:16px;margin-bottom:16px;transition:all 0.2s ease 0s;position:relative;background:rgb(250, 250, 250);}
.giBnMy{text-align:center;display:flex;-webkit-box-align:center;align-items:center;font-weight:600;font-size:18px;line-height:24px;margin:0px 8px;}
.fyajbG{margin:8px 0px;border-bottom:2px solid rgb(210, 210, 214);width:232px;}
.KbAGY{display:flex;-webkit-box-align:center;align-items:center;}
.iNULlR{text-decoration-color:rgb(212, 33, 84);text-decoration-line:line-through;margin-right:8px;font-size:16px;}
.bBebQP{margin:16px 0px;font-weight:700;font-size:16px;color:rgb(210, 210, 214);user-select:none;}
.iBetAy{color:rgb(0, 0, 0);}
.kEuSpu{border-radius:4px;border-top:1px solid #{{$school->color->buttons_links}};border-right:1px solid #{{$school->color->buttons_links}};border-left:1px solid #{{$school->color->buttons_links}};border-image:initial;text-align:center;transition:all 0.2s ease 0s;background:#{{$school->color->buttons_links}};color:rgb(255, 255, 255);margin-top:16px;padding:12px 10px;width:100%;text-transform:capitalize;font-size:16px;font-weight:700;letter-spacing:0.05rem;border-bottom:1px!important;}
.kEuSpu:hover,.kEuSpu:focus{background:#{{$school->color->buttons_links}};color:rgb(255, 255, 255);outline:none;}
.kEuSpu:hover,.kEuSpu:focus{border-color:#{{$school->color->buttons_links}};background:#{{$school->color->buttons_links}};}
.kEuSpu:hover{border-bottom:1px solid #{{$school->color->buttons_links}};}
.WFPUG{border-radius:4px;color:#{{$school->color->buttons_links}};background-color:rgb(255, 255, 255);border:1px solid rgb(210, 210, 214);text-align:center;padding:10px 12px;transition:all 0.2s ease 0s;width:100%;margin-top:12px;text-transform:capitalize;font-size:16px;font-weight:700;letter-spacing:0.05rem;}
.WFPUG:hover,.WFPUG:focus{background:#{{$school->color->buttons_links}};color:rgb(255, 255, 255);outline:none;}
.WFPUG:hover{border-color:#{{$school->color->buttons_links}};}
.elHFLP{display:flex;flex-direction:column;width:100%;}
.csllSC{align-self:center;width:100%;max-width:1100px;margin:20px auto;}
.csllSC .my-masonry-grid{display:flex;-webkit-box-pack:center;justify-content:center;max-width:1026px;margin:auto;}
.csllSC .my-masonry-grid_column{width:auto!important;}
@media (max-width: 780px){
.csllSC .my-masonry-grid_column{margin:auto;}
}
@media (max-width: 480px){
.csllSC .my-masonry-grid_column{width:100%!important;}
}
.cRKhcH{font-size:10px;font-weight:400;line-height:10px;color:#{{$school->color->buttons_links}};border:1px solid #{{$school->color->buttons_links}};border-radius:4px;padding:2px 7px;margin:-10px 0px auto 10px;transition:all 0.2s ease 0s;cursor:pointer;}
@media (max-width: 480px){
.cRKhcH{margin-left:50px;}
}
.cRKhcH:hover,.cRKhcH:focus{color:rgb(255, 255, 255);text-decoration:none;background:#{{$school->color->buttons_links}}!important;border:1px solid #{{$school->color->buttons_links}}!important;}
.kQyDxi{display:flex;flex:1 1 0%;flex-direction:column;z-index:0;}
.kQyDxi .nav.nav-tabs{display:flex;flex:1 1 0%;flex-flow:row wrap;border-bottom:none;margin-bottom:30px;}
@media (max-width: 660px){
.kQyDxi .nav.nav-tabs{-webkit-box-pack:center;justify-content:center;}
}
.kQyDxi .nav-tabs > li.active > a{font-size:16px;font-weight:700;text-align:center;transition:all 0.2s ease 0s;padding:8px 23px;outline:none;border-bottom:3px solid #{{$school->color->buttons_links}};}
@media (max-width: 660px){
.kQyDxi .nav-tabs > li.active > a{margin-bottom:15px;}
}
.kQyDxi .nav-tabs > li.active > a:hover,.kQyDxi .nav-tabs > li.active > a:focus{border-top:none;border-right:none;border-left:none;border-image:initial;border-bottom:3px solid #{{$school->color->buttons_links}};background-color:rgb(250, 250, 250);}
.kQyDxi .nav-tabs > li > a{font-size:16px;font-weight:700;text-align:center;transition:all 0.2s ease 0s;padding:8px 23px;outline:none;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255);border-top:none;border-right:none;border-left:none;border-image:initial;border-bottom:3px solid rgb(255, 255, 255);}
@media (max-width: 660px){
.kQyDxi .nav-tabs > li > a{margin-bottom:15px;}
}
.kQyDxi .nav-tabs > li > a:hover,.kQyDxi .nav-tabs > li > a:focus{color:rgb(0, 0, 0);border-bottom:3px solid rgb(250, 250, 250);background-color:rgb(250, 250, 250);}
.kQyDxi .nav-tabs > li:first-child{margin-left:0px;}
.bDBfQP{display:flex;flex-direction:column;margin-top:40px;}
.kLyHws{background:rgb(250, 250, 250);padding-top:20px;padding-left:0px;margin:0px 0px 16px;border-radius:4px;}
.eaRgqA{display:flex;flex-flow:row nowrap;-webkit-box-pack:justify;justify-content:space-between;-webkit-box-align:center;align-items:center;border:1px solid rgb(210, 210, 214);border-radius:4px;padding:10px;margin-bottom:8px;}
.eaRgqA svg{transition:all 0.2s ease 0s;}
.eaRgqA svg:hover{cursor:pointer;stroke:#{{$school->color->buttons_links}};}
.gICKXJ{display:flex;font-weight:700;color:rgb(0, 0, 0);font-size:20px;flex-wrap:wrap;-webkit-box-align:center;align-items:center;margin-right:10px;padding-top:3px;max-width:80%;}
.gICKXJ:hover{cursor:pointer;}
@media (max-width: 660px){
.gICKXJ{max-width:65%;}
}
.dOuavu{margin-left:40px;margin-right:16px;display:flex;flex-wrap:nowrap;-webkit-box-pack:start;justify-content:flex-start;align-items:flex-start;padding:12px 0px;overflow:visible;border-left:1px solid rgb(0, 0, 0);}
.dOuavu:last-child{border-color:transparent;}
.jCoIim{margin-left:40px;margin-right:16px;display:flex;flex-wrap:nowrap;-webkit-box-pack:start;justify-content:flex-start;align-items:flex-start;padding:12px 0px;overflow:visible;border-left:1px solid transparent;border-top-color:transparent;border-right-color:transparent;border-bottom-color:transparent;}
.jCoIim:last-child{border-color:transparent;}
.dtZtrV{flex:0 0 auto;margin:-13px 0px 0px -8px;width:14px;}
.hAmEuV{flex:0 1 auto;font-weight:400;color:rgb(0, 0, 0);margin:-13px 4px auto 18px;text-decoration:none;overflow:hidden;transition:all 0.2s ease 0s;}
.hAmEuV:hover,.hAmEuV:focus{text-decoration:none;}
@media (max-width: 480px){
.hAmEuV{min-height:48px;min-width:48px;}
}
.iugKVx{font-weight:600;margin:0px;}
.dlynXT{font-weight:600;margin-top:16px;align-self:center;}

</style>



<style>

.row{
  padding: 20px 0;
}
.card-body{
  padding: 30px 30px;
}


.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {

}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 100%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}

.fa-ul li{
  font-size: 1.5rem;
}

.title-price{
  text-align: center;
}

.centre{
    display: flex!important;
    justify-content: center;
    flex-wrap: wrap;
    margin: 0 auto;

}
</style>

<style media="screen">
    .btn-primary, .btn-primary:active, .btn-primary:focus{
        background: #{{$school->color->buttons_links}};
        border: 1px solid #{{$school->color->buttons_links}};
    }

    .btn-primary:hover, .btn-primary:active:hover, .btn-primary:focus:hover {
    outline: none !important;
    text-decoration: none;
    background: #{{$school->color->buttons_links}};
    border: 1px solid #{{$school->color->buttons_links}};
    color: #fff;
}
</style>

<style>

.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:2.25rem;}
.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem;}
.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
}
</style>




<div class="blocks-page blocks-page-course_sales_page " id="blocks-page-164508">

@if(session('status'))
<div style="margin-top: 10rem;" class="card-body">

    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>

</div>
@endif

    <div class="PageSummary__Head-sc-19qsvz4-21 bVDUT" style="margin-top: 5rem;min-height: 800px;padding: 12rem;">
    <div class="PageSummary__TopLeft-sc-19qsvz4-40 elHFLP">
        <div class="AuthorAndTitle-v6znyq-0 krbfLT">
            <h1 class="MuiTypography-root Typography-ngwq8z-0 Title-sc-1kew2f7-0 kWrPey MuiTypography-h1 MuiTypography-alignLeft" m="0,4,2,0">{{$course->name}}</h1>
            <div class="TitleAndTags-sc-9axq2r-0 lfqEYp">
                <div class="CoverImage__Wrap-sc-7i1uwk-2 jFlLHK">
                    <div class="CoverImage-sc-7i1uwk-0 cHTJga">
                        <img src="/images/courses/logos/{{$course->logo}}" alt="{{$course->name}}"
                          class="CoverImage__Image-sc-7i1uwk-1 iRWUUv">
                      </div>
                </div>
                <div class="PageSummary__AuthorsContainer-sc-19qsvz4-6 bxqCze">
                    <p class="MuiTypography-root Typography-ngwq8z-0 dVSKBO MuiTypography-body1" style="margin-top: 13px; margin-right: 8px;">Par:</p>
                    <div class="PageSummary__Authors-sc-19qsvz4-1 iHyzSJ">
                        <div class="PageSummary__AuthorList-sc-19qsvz4-7 imbVAc">
                            <div id="author-pic" class="PageSummary__Author-sc-19qsvz4-20 eyJePy"><a class="UserPic-oj7r19-0 auHjp" href="/profile/view/4728896371032064">
                                    <div size="28" class="UserPic-iyi4aa-0 gdutop" overflow="hidden">
                                        <div class=" sb-avatar sb-avatar--src" style="display: inline-block; vertical-align: middle; width: 28px; height: 28px; border-radius: 100%; font-family: Helvetica, Arial, sans-serif;">
                                            <img
                                              class=" sb-avatar__image" width="28px" height="28px" src="/images/users/authors/{{$course->author->image}}"
                                              alt="{{$course->author->full_name}}" title="Eberhard Wolff" style="max-width: 100%; width: 28px; height: 28px; border-radius: 100%;">
                                          </div>
                                    </div>
                                </a>
                                <a class="AuthorName-sc-76j66q-0 izXbvw" href="/authors/{{$course->author->id}}/show">
                                    @if($course->author->full_name)
                                    {{ucfirst($course->author->full_name)}}
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><span class="StatsContainer-sc-1xa1xrl-0 kLpAau">

            <div class="StatContainer-sc-14kfqpa-0 ivAKiS">
                <div class="StatCount-sc-4edfhu-0 liQwTV">
                    <img src="https://demo.goodlayers.com/clevercourse/wp-content/plugins/goodlayers-lms/images/course-info/online-course.png" alt="">
                </div>
                <div class="StatName-asb5y5-0 iIHdSa">Cours en ligne</div>
            </div>
            <div class="StatContainer-sc-14kfqpa-0 ivAKiS">
                <div class="StatCount-sc-4edfhu-0 liQwTV">{{count($course->lessons)}}</div>
                <div class="StatName-asb5y5-0 iIHdSa">Leçon(s)</div>
            </div>
            <div class="StatContainer-sc-14kfqpa-0 ivAKiS">
                <div class="StatCount-sc-4edfhu-0 liQwTV">{{count($course->quizzes)}}</div>
                <div class="StatName-asb5y5-0 iIHdSa">Quiz</div>
            </div>
            <div class="StatContainer-sc-14kfqpa-0 ivAKiS">
                <div class="StatCount-sc-4edfhu-0 liQwTV">
                    <img src="https://demo.goodlayers.com/clevercourse/wp-content/plugins/goodlayers-lms/images/course-info/certificate.png" alt="">
                </div>
                <div class="StatName-asb5y5-0 iIHdSa">Certificats de formation</div>
            </div>
            <div class="StatContainer-sc-14kfqpa-0 ivAKiS">
                <div class="StatCount-sc-4edfhu-0 liQwTV">{{count($course->users)}}</div>
                <div class="StatName-asb5y5-0 iIHdSa">Inscrit(s)</div>
            </div>
        </span>
        <div style="padding: 3rem;" class="">
            {!!$course->description!!}
        </div>


        <div class="CollectionTabs__Container-sc-1c3sbsw-2 bDBfQP">
            <div id="collection-tabs" class="CollectionTabs-sc-1c3sbsw-0 kQyDxi">
                <ul role="tablist" class="nav nav-tabs">
                    <li role="presentation" class="tab active"><a id="collection-tabs-tab-1" role="tab" aria-controls="collection-tabs-pane-1" aria-selected="true" href="#collection-tabs-pane-1">Programme</a></li>
                    <li role="presentation" class="tab"><a id="collection-tabs-tab-2" role="tab" aria-controls="collection-tabs-pane-2" aria-selected="false" href="#collection-tabs-pane-2" tabindex="-1">FAQ</a></li>
                    {{--
                    <li role="presentation" class="tab"><a id="collection-tabs-tab-3" role="tab" aria-controls="collection-tabs-pane-3" aria-selected="false" href="#collection-tabs-pane-3" tabindex="-1">Details</a></li>
                    <li role="presentation" class="tab"><a id="collection-tabs-tab-Learning Tracks" role="tab" aria-controls="collection-tabs-pane-Learning Tracks" aria-selected="false" href="#collection-tabs-pane-4" tabindex="-1">Learning Tracks</a></li>
                    --}}
                </ul>
                <div class="tab-content">
                    <div id="collection-tabs-pane-1" aria-labelledby="collection-tabs-tab-1" role="tabpanel" aria-hidden="false" class="fade tab-pane active in">
                        @if($course->sections)
                        @foreach($course->sections->sortBy('position') as $section)

                        <div>
                            <div class="CollectionTabs__CatWrapper-sc-1c3sbsw-5 eaRgqA">
                                <div class="CollectionTabs__Title-sc-1c3sbsw-6 gICKXJ">{{$section->title}}</div>
                                <!--
                                <div rotate="1" color="#000" size="25" display="inline-flex" name="icon-button" class="styles__IconButton-sc-12pjl04-0 cnHwwa"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            -->
                            </div>
                            <menu class="CollectionTabs__Menu-sc-1c3sbsw-3 kLyHws">
                                @if($section->lessons)
                                @foreach($section->lessons->sortBy('position') as $lesson)
                                @if($lesson->status == 'active')
                                <div class="LessonWrapper-sc-1rohc5d-0 dOuavu">
                                    <div class="LessonIcon-ectsmd-0 dtZtrV"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7" cy="7" r="6.5" fill="#F5F5F5" stroke="#202033"></circle>
                                        </svg>
                                    </div>
                                        @auth
                                        <a class="CollectionSidebarCategory__LessonTitle-ae4dxd-1 CollectionSidebarLessonTitle hAmEuV" {{Auth::user()->courses->contains($course->id) ? "href=/course/".$lesson->section->course->slug."/lessons/".$lesson->slug : ''}}>
                                            {{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}
                                        </a>
                                        @if($lesson->free_lesson == 'yes' && !Auth::user()->courses->contains($course->id))
                                        <a
                                      name="preview-button" class="PreviewButton-sc-1cmaf-0 cRKhcH" href="/course/{{$lesson->section->course->slug}}/lessons/{{$lesson->slug}}">
                                      Aperçu
                                        </a>
                                        @endif
                                        @endauth
                                        @guest
                                        <a class="CollectionSidebarCategory__LessonTitle-ae4dxd-1 CollectionSidebarLessonTitle hAmEuV" href="/courses/introduction-microservice-principles-concepts/RMGPJE4W3jR">
                                            {{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}
                                        </a>
                                        @if($lesson->free_lesson == 'yes')
                                        <a
                                      name="preview-button" class="PreviewButton-sc-1cmaf-0 cRKhcH" href="/course/{{$lesson->section->course->slug}}/lessons/{{$lesson->slug}}">
                                      Aperçu
                                        </a>
                                        @endif
                                        @endguest
                                </div>
                                @endif
                                @endforeach
                                @endif

                            </menu>
                        </div>
                        @endforeach
                        @endif

                    </div>
                    <div id="collection-tabs-pane-2" aria-labelledby="collection-tabs-tab-2" role="tabpanel" aria-hidden="true" class="fade tab-pane">
                        <div>
                            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                              <h2>
                                <i class="fa fa-question-circle"></i>
                                FAQ {{ucfirst($school->name)}}
                              </h2>

                              <div class="faq-question">
                                A quoi ressemble un cours ?
                              </div>
                              <div class="faq-answer">
                                Cela dépend du cours ! Vous ne pourrez pas apprendre le Developpement web comme vous suivez un cours de BTP. Nous nous efforçons donc de toujours proposer les supports de cours les plus adaptés à la formation suivie. Les cours sont principalement composés de vidéos, schémas, textes descriptifs, explicatifs, quizz, afin de vérifier vos connaissances, et d’être sûr qu’elles ont été bien assimilées.
                              </div>
                              <div class="faq-question">
                                Je suis un vrai débutant. Que dois-je savoir avant de commencer ?
                              </div>
                              <div class="faq-answer">
                                Nos cours sont complets et s’adressent autant aux débutants (ils commencent généralement par les bases) qu’aux initiés. Ainsi, il n’y a aucun pré-requis!

                              </div>
                              <div class="faq-question">
                                Pendant combien de temps mes formations sont-elles accessibles/visionnables ?
                              </div>
                              <div class="faq-answer">
                                Cela dépend tout simplement du type de formation que vous aurez choisi : si vous avez choisi un cours sans mentor, vous aurez accès à ce cours à vie. Par contre s’il s’agit d’un parcours en ligne. Celui ci est payable mensuellement, votre abonnement vous donne doit à 30 jours renouvelables.
                              </div>
                              <div class="faq-question">
                                En quoi consiste l'abonnement mensuel à un parcours ?
                              </div>
                              <div class="faq-answer">
                                L'abonnement mensuel à un parcours vous permet de bénéficier d’un accompagnement groupé de la part d’un expert de la thématique étudiée. Cet abonnement se veut totalement libre : chaque mois vous êtes prélevé du montant de votre abonnement mais vous pouvez décider de continuer ou d'arrêter à tout moment.
                              </div>
                              <div class="faq-question">
                                Suis-je engagé(e) lorsque je choisis l'abonnement mensuel à un parcours ?
                              </div>
                              <div class="faq-answer">
                                Non, l'abonnement illimité ne présente aucun engagement.
                              </div>
                              <div class="faq-question">
                                Mes cours sont-ils disponibles intégralement en ligne ou faut-il que je me déplace pour les suivre ?
                              </div>
                              <div class="faq-answer">
                                Tout dépend du type de formation que vous aurez choisi.
                              </div>
                              <div class="faq-question">
                                Y’a-t il des contraintes horaires pour suivre les cours ?
                              </div>
                              <div class="faq-answer">
                                Non, vous pouvez suivre les formations 24h/24 et 7j/7. Il n’y a que le mentorat en mode parcours qui nécessite un horaire étudié entre le formateur et l’apprenant.

                              </div>
                              <div class="faq-question">
                                Une fois le cours terminé, vais-je recevoir un certificat ?
                              </div>
                              <div class="faq-answer">
                                Un certificat est délivré à la fin de la formation ! Sa délivrance et les modalités sont précisées sur la page du cours.
                              </div>
                              <div class="faq-question">
                                Puis-je télécharger les cours ?
                              </div>
                              <div class="faq-answer">
                                Vous n’avez pas besoin de vous embêter à télécharger les cours et à les reclasser. Tous les cours sont consultables dans votre espace e-learning, avec une simple connexion Internet.
                                De plus, certaines fonctionnalités de notre plateforme vous permettent de savoir quels chapitres vous avez déjà suivis.
                              </div>
                              <div class="faq-question">
                                Je ne souhaite plus recevoir de mail de votre part. Comment faire ?
                              </div>
                              <div class="faq-answer">
                                Pour cela, vous pouvez tout simplement vous désinscrire de notre Newsletter et vous ne recevrez plus de mail de notre part (hormis de confirmation de commande). Allez dans votre boîte mail, puis sur un mail que vous avez reçu de notre part et tout en bas vous pouvez cliquer sur le bouton "se désinscrire". Vous serez alors supprimé de notre liste d'envoi.
                              </div>
                              <div class="faq-question">
                                J’ai oublié mon mot de passe – que puis-je faire ?
                              </div>
                              <div class="faq-answer">
                                Lors de votre connexion à l’espace membre, cliquez sur “Mot de passe oublié ?”. Ensuite, saisissez l’adresse email correspondant à votre compte puis cliquez sur “Récupérer”. Vous recevrez un mail indiquant la marche à suivre.
                              </div>
                              <div class="faq-question">
                                Quel est le matériel informatique nécessaire pour suivre les formations ?
                              </div>
                              <div class="faq-answer">
                                Vous avez besoin d’un accès à Internet. Le mieux est d’avoir un navigateur à jour cependant : )
                                Vous pouvez suivre les formations depuis un ordinateur, une tablette ou bien encore un smartphone.

                                Si vous avez un problème sur un navigateur, essayez sur un autre. Les navigateurs connus sont : Google Chrome, Mozilla Firefox, Safari et Internet Explorer.
                              </div>
                              <div class="faq-question">
                                J’ai un problème technique (la vidéo ne se lance pas, la vidéo est saccadée, une icône de chargement qui tourne indéfiniment…), que puis-je faire ?
                              </div>
                              <div class="faq-answer">
                                Déconnectez-vous, reconnectez-vous et retournez sur votre vidéo.
                                Essayer de lire la vidéo sur un autre navigateur (Internet Explorer, Firefox, Chrome, Safari)
                                Mettez la vidéo sur pause un petit moment puis appuyez de nouveau sur lecture. En fonction de la qualité du débit de votre connexion internet, il se peut que vous deviez attendre que la vidéo se charge.

                                Si le problème persiste, contactez-nous, en fournissant le maximum de détails:

                                Votre navigateur
                                Mac (+ version) ou PC
                                La référence, le titre ou le lien de la vidéo qui pose un souci
                                L'erreur spécifique la concernant
                              </div>



                            </div>
                        </div>
                    </div>
                    {{--
                    <div id="collection-tabs-pane-3" aria-labelledby="collection-tabs-tab-3" role="tabpanel" aria-hidden="true" class="fade tab-pane">
                        <div>
                            <p>Practical Microservices</p>
                        </div>
                    </div>
                    <div id="collection-tabs-pane-4" aria-labelledby="collection-tabs-tab-Learning Tracks" role="tabpanel" aria-hidden="true" class="fade tab-pane">
                        <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__Title-sc-1dpw3ft-1 iugKVx MuiTypography-h4" m="0">Got a Bigger Goal in mind?</h4>
                        <h5 class="MuiTypography-root Typography-ngwq8z-0 styles__TagLine-sc-1dpw3ft-2 dlynXT MuiTypography-h5" mt="2"><b>An Introduction to Microservice Principles and Concepts</b> is part of the following learning tracks:</h5>
                        <div id="featured" class="DashboardGrid-sc-72u9wt-0 csllSC">
                            <div class="my-masonry-grid">
                                <div class="my-masonry-grid_column" style="width: 50%;">
                                    <div class="MuiPaper-root MuiCard-root jss775 jss776 jss773 MuiPaper-elevation1 MuiPaper-rounded"><a href="/track/scalability-system-design-for-developers"><button class="MuiButtonBase-root MuiCardActionArea-root"
                                              tabindex="0" type="button"><img class="MuiCardMedia-root MuiCardMedia-media MuiCardMedia-img"
                                                  src="https://lh3.googleusercontent.com/6rZ_x2FQ-OclXCMyO6p08pXsI56XAPgYRZywgX2r5aPF33RiZoM-zbjZ-gVoRMDHtYXR27E6tKSjatPvZocAiGnpHwpM-A" alt="Track cover image"
                                                  title="Scalability &amp; System Design for Developers track cover image" height="230">
                                                <div class="MuiCardContent-root jss771">
                                                    <h4 class="MuiTypography-root Typography-ngwq8z-0 kXMduL MuiTypography-h4" mb="1" style="font-weight: bold;">Scalability &amp; System Design for Developers</h4>
                                                    <div class="MuiBox-root jss817">
                                                        <p class="MuiTypography-root Typography-ngwq8z-0 dVSKBO MuiTypography-body1">Learn to make better architecture and design decisions for systems that scale. Make yourself a more in-demand
                                                            developer.</p>
                                                    </div>
                                                </div><span class="MuiCardActionArea-focusHighlight"></span>
                                            </button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>
    <div class="PageSummary__TopRightContainer-sc-19qsvz4-2 dcNcwD">
        <div class="PageSummary__TopRightClipContainer-sc-19qsvz4-3 csoTuR">
            <div class="TopRight-sc-150qnhb-0 dopxaT">
                <div class="PageSummary__Pricing-sc-19qsvz4-24 hxzHfa">
                    <div class="PageSummary__Pricing_InfoSection-sc-19qsvz4-25 giBnMy">
                        N'attendez plus !
                    </div>
                    @auth
                    <div class="PageSummary__Pricing_Line-sc-19qsvz4-26 fyajbG"></div>
                    <a class="Button-ktk5iw-0 LinkButton-ynpbre-0 PageSummary__SubscriptionButton-sc-19qsvz4-31 kEuSpu" href="{{Auth::user()->courses->contains($course->id) ? '/course/enrolled/'.$course->slug : '#price'}}">
                    @if(Auth::user()->courses->contains($course->id))
                        Commencez le cours
                    @else
                        Inscrivez-vous
                    @endif
                    </a>
                    @endauth
                    @guest
                    <div class="PageSummary__Pricing_Line-sc-19qsvz4-26 fyajbG"></div>
                    <a class="Button-ktk5iw-0 LinkButton-ynpbre-0 PageSummary__SubscriptionButton-sc-19qsvz4-31 kEuSpu" href="#price">
                        Inscrivez-vous
                    </a>
                    @endguest
                </div>

            </div>
        </div>
    </div>
</div>





<!--

  <div class="course-block block closing_letter even-stripe" id="block-183311">

    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <h2 style="text-align: center;">
              Témoignages
            </h2>
          <hr>
          <p>
            <i>“Mon passage à Oschool a été très sincèrement fructueux pour moi car cela m’a donné de l'assurance et une carrure de Pro. J'ai également eu grâce à Oschool de la maturité dans le domaine du marketing sur les réseaux sociaux, tout cela par la qualité des enseignements.”</i>-Jean Philippe Touye Bi
            </p>
            <p>
              <br>
            </p>
            <p>
              <i>“Très bonne plateforme d'apprentissage pour les adultes…”- </i>Souleymane Coulibaly
            </p>
            <p>
              <br>
            </p>
            <p>

              </p>
            </div>
      </div>
    </div>
  </div>
-->

@auth
@if(!Auth::user()->courses->contains($course->id))
@include('includes.pricing')
@endauth
@endif

@guest
@include('includes.pricing')
@endguest

  <br>


  <div class="course-block block checkout odd-stripe" id="block-183312">
    <div class="checkout-cta">
      <h2>

        Commencez maintenant !
      </h2>
    </div>
    <div class="container" id="pricing-options">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <form action="purchase" class="new_sale" id="new_sale" method="get">
            <input type="hidden" name="utf8" value="✓">
            <input type="hidden" name="course_id" value="7169" id="course_id">
            <input type="hidden" name="coupon_code" value="" id="coupon_code">
            <input type="hidden" name="referring_page_id" value="164508" id="referring_page_id">
            <input type="hidden" name="user_src" value="teachable-examples" id="user_src">
            <div class="col-sm-12 product-list hidden" data-toggle="buttons">
              <label class="btn checkout-button-group product_7141 active">
                <div class="col-sm-1 product-radio"><input type="radio" name="product_id" id="product_id_7141" value="7141" checked="">
                  <div class="custom-radio">
                    <div class="selected">&nbsp;</div>
                  </div>
                </div>
                <div class="col-sm-9 product-details">
                  <h3 class="product-name">
                    Basic Enrollement
                    <span class="discount product_7141 hidden">
                      <span class="coupon-percent"></span>
                      Coupon Discount
                    </span>
                  </h3>
                  <p class="description">
                    Lifetime access to The Foundations of Card Magic course
                    <br>
                  </p>
                  <div class="detailed-description">
                    <p>
                      Over 60 bite sized lessons and 4.5 hours of clear video instruction. Instantly access the course on any of your devices.
                    </p>
                  </div>
                </div>
                <div class="col-sm-2 product-price">
                  <span class="default-product-price product_7141">$52</span>&nbsp;
                  <span class="coupon-price product_7141"></span>
                  <br>
                </div>
              </label>
            </div>
            <div class="row">
              <center style="
              margin: 0 auto;">
                <br>
                @auth
                <a id="enroll-button" data-course-id="7169" class="btn btn-hg btn-primary btn-enroll" name="commit" href="{{Auth::user()->courses->contains($course->id) ? '/course/enrolled/'.$course->slug : '#price'}}">
                  @if(!Auth::user()->courses->contains($course->id))
                  <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;
                  @endif
                  @if(Auth::user()->courses->contains($course->id))
                  Commencez le cours
                  @else
                  S'inscrire au cours
                  @endif
                  <span class="coupon-price product_7141"></span>
                </a>
                @endauth
                @guest
                <a id="enroll-button" data-course-id="7169" class="btn btn-hg btn-primary btn-enroll" name="commit" href="#price">
                  <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;

                  S'inscrire au cours
                  <span class="coupon-price product_7141"></span>
                </a>
                @endguest
                <br>
              </center>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>


  <br>
</div>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


<script type="text/javascript">

$('.tab a').on('click', function (event) {
    event.preventDefault();

    $('.nav-tabs .active').removeClass('active');
    $(this).parent().addClass('active');
    $('.tab-content .active').removeClass('active').removeClass('in');
    $($(this).attr('href')).addClass('active');
    $($(this).attr('href')).addClass('in');
});

</script>

@endsection
