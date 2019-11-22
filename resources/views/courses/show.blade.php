@extends('layouts.menu-course')

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
.caption-text{font-size:12px;line-height:18px;font-family:OpenSans,Arial,sans-serif;}
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





<div class="blocks-page blocks-page-course_sales_page " id="blocks-page-164508">

  <div class="course-block block hero odd-stripe" id="block-183303">
    <div class="course-top-row has-hero-image" style="background:url(&quot;/images/courses/logos/{{$course->logo == 'image.jpg' ? 'dark_background.jpg' : $course->logo}}&quot;) no-repeat center fixed;">
      <div class="black-overlay" style="opacity: 0.52;">&nbsp;</div>
      <div class="container">
        <div class="row">

          <div class="col-md-5 course-splash-media">
            <div class="img-rounded">
              <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://d2vvqscadf4c1f.cloudfront.net/0M5IR4vQQwFZONzqXdAS_The%20Foundations%20of%20Card%20Magic%20Course%20Thumbnail.png"
                alt="0m5ir4vqqwfzonzqxdas the%20foundations%20of%20card%20magic%20course%20thumbnail">
            </div>
          </div>
          <div class="col-md-6 course-header-container">
            <h1 class="course-title">
              {{$course->name}}
            </h1>
            <h2 class="course-subtitle">
              {{$course->subtitle}}
            </h2>

            <form accept-charset="UTF-8" action="/signin" class="sale_default" id="sale_default2" method="get">
              <input type="hidden" name="authenticity_token" value="pVRA1TV9i6aJ3KRPnzs+luQeNZAmaLfgTnC8167/bBu2+9ydKOjVrpatv+3GdUGcIcbLBN9bGoYhH1XLXmjKYg==">
              <input type="hidden" name="utf8" value="✓">
              <input type="hidden" name="course_id" value="7169" id="course_id">
              <input type="hidden" name="coupon_code" value="" id="coupon_code">
              <input type="hidden" name="school_domain" value="https://courses.52kards.com" id="school_domain">
              <input type="hidden" name="product_id" value="7141" id="product_id">
              <input type="hidden" name="user_src" value="teachable-examples" id="user_src">
              <a id="enroll-button-top" data-course-id="7169" class="btn btn-hg btn-primary btn-header-enroll" href="#price">
                <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;
                S'inscrire au cours
                {{-- <span class="default-product-price product_7141">$52</span> --}}
                <span class="coupon-price product_7141"></span>
              </a>
            </form>
          </div>
        </div>

      </div>
    </div>

  </div>

  <div class="course-block block coupon_banner " id="block-183304">
    <div class="coupon-code-applied hidden">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">

            <div class="coupon-percent-text">
              <span class="coupon-percent"></span>
              off original price!<br>
            </div>
            <div class="coupon-invalid-text hidden">
              The coupon code you entered is expired or invalid, but the course is still available!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block description_with_share_icons even-stripe" id="block-183305">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs" style="">
        </div>
        <div class="col-xs-1 visible-xs"></div>
        <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-1 col-xs-10 course-description">
          <p>

          </p>
          <h2 style="text-align: center;"></h2>
          <h2 style="text-align: center;">Apropos du cours<br>
          </h2>
          <hr>
          <p style="text-align: center;">
            <span style="font-size: 18px;">
                {!!$course->description!!}
          </p>
          <p style="text-align: center;">
            <br>
          </p>
          <hr>
          <p></p>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block bio odd-stripe" id="block-183306">
    <div class="container">
      <div class="row">
        <div class="col-xs-1 visible-xs"></div>
        <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          <h2>
            L'instructeur
          </h2>
          <br>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 text-center">

            <img class="large-img-rounded img-responsive" src="/images/authors/{{$course->author->image}}" alt="{{$course->author->full_name}}">
              <div class="author-name">
                {{$course->author->full_name}}
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8">
              <p>
                {{$course->author->description}}
              </p>
              <p>
                <br>
              </p>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block curriculum even-stripe" id="block-183307">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <h2>
            Programme du cours
          </h2>
          <br>
          @if($course->sections)
          @foreach($course->sections->sortBy('position') as $section)
          <div class="row">
            <div class="col-sm-12 course-section">
              <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="7169">
                <span class="section-lock">
                  <ion-icon name="play-circle"></ion-icon>&nbsp;
                </span>
                {{$section->title}}
                <div class="section-days-to-drip">
                  <div class="section-days-logged-in">
                    Available in
                    <span class="section-days-to-drip-number"></span>
                    days
                  </div>
                  <div class="section-days-logged-out">
                    <span class="section-days-to-drip-number"></span>
                    days
                    after you enroll
                  </div>
                </div>
              </div>
              <ul class="section-list">
                  @if($section->lessons)
                  @foreach($section->lessons->sortBy('position') as $lesson)
                <li class="section-item">
                <a class="item" href="/course/{{$lesson->section->course->slug}}/lessons/{{$lesson->slug}}">
                    <span class="lecture-icon">
                      <img src="https://img.icons8.com/color/48/000000/circled-play--v1.png" width="20">
                    </span>
                    <div class="btn-primary btn-sm pull-right lecture-start">
                      Start
                    </div>
                    {{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}
                  </a>
                </li>
                @endforeach
                @endif

              </ul>
            </div>
          </div>
          @endforeach
          @endif
          <br>
        </div>
      </div>
    </div>
  </div>


  <div class="course-block block faq odd-stripe" id="block-183309">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <h2>
            <i class="fa fa-question-circle"></i>
            FAQ OSCHOOL
          </h2>
          <br>
          <div class="faq-question">
            C’est quoi Oschool ?
          </div>
          <div class="faq-answer">
            Nous sommes une plateforme de cours en ligne ! Notre idée principale ? Rassembler des experts dans leurs domaines respectifs, afin que vous trouviez sur notre site les meilleurs cours en ligne sur des thèmes très variés.
          </div>
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
            Tout dépend du type de formation que vous aurez choisi. A ce jour il n’existe qu’une formation en présentiel:<a href="https://code.oschool.ci/formation/formation-en-salle-developpeur-web"> Formation en salle Développeur Web</a>. Toutes les formations sont en lignes.
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
            Puis-je télécharger les cours Oschool ?
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
            Quel est le matériel informatique nécessaire pour suivre les formations Oschool ?
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
          <h2> PROFESSIONNELS</h2><br>

          <div class="faq-question">
            Avez-vous un programme d’affiliation ?
          </div>
          <div class="faq-answer">
            Oui. Pour plus d'informations, n’hésitez pas à nous contacter via le +225 48459868 / +225 57414401 / +225 21371277.
          </div>
          <div class="faq-question">
            Que dois-je faire pour devenir instructeur/formateur ?
          </div>
          <div class="faq-answer">
            Vous avez des formations de qualité ou êtes vous-mêmes formateurs/expert dans un domaine, nous serions ravis d'en discuter avec vous !

            Pour nous contacter,<a href="https://oschool.ci/devenez-formateur/"> CLIQUEZ ICI.</a>

            Nous n’attendons que vous !
          </div>
          <div class="faq-question">
            Je souhaite suggérer un tuto
          </div>
          <div class="faq-answer">
            <p>
              Vous avez une recommandation à nous faire, une formation que vous souhaiteriez suivre mais qui n'est pas encore sur le site. Vous aimeriez apprendre la magie, faire de la guitare et savoir chanter comme Sinatra ?

              Même méthode : contactez-nous sur la rubrique contact et sélectionnez « Recommandations ».
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="course-block block coupon_banner " id="block-183310">
    <div class="coupon-code-applied hidden">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">

            <div class="coupon-percent-text">
              <span class="coupon-percent"></span>
              off original price!<br>
            </div>
            <div class="coupon-invalid-text hidden">
              The coupon code you entered is expired or invalid, but the course is still available!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="course-block block closing_letter even-stripe" id="block-183311">

    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <h2 style="text-align: center;">
              Témoignages
            </h2>
          <hr>
          <p>
            <i>“Mon passage à Oschool a été très sincèrement fructueux pour moi car cela m’a donné de l'assurance, une carrure de Pro, également j'ai eu grâce à Oschool de la maturité dans le domaine du marketing sur les réseaux sociaux, tout cela par la qualité des enseignements.”</i>-Jean Philippe Touye Bi
            </p>
            <p>
              <br>
            </p>
            <p>
              <i>“ très bonne plateforme d'apprentissage pour les adultes…”- </i>Souleymane Coulibaly
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

  <div>
     <div>
         <div class="EnrollSectionSCDP">
             <div class="EnrollSection p-t-5 p-b-2">
                 <div class="Container_jd01j4-o_O-container_17wca8l">
                     <div class="Row_nvwp6p">
                         <div class="Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c p-y-1">
                             <h2 class="m-x-0 m-b-1s"><span>Commencez à apprendre dès aujourd'hui&nbsp;!</span></h2>
                             <h4 class="H4_1k76nzj-o_O-weightLighter_1qi0fkl-o_O-fontHeadline_1uu0gyz">
                                 <span style="font-size: 0.875rem; color: rgb(42, 115, 204); font-weight: bold;">
                                     <div class="rc-FinaidLink reset">
                                         <p class="caption-text">
                                             <button id="finaid_button" data-track="true" data-track-app="xdp_v1" data-track-page="xdp" data-track-action="click" data-track-component="finaid" class="button-link finaid-link">Aide financière
                                                 disponible</button></p>

                                     </div>
                                 </span></h4>
                             <div class="p-y-1s">
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc">
                                     <svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Checkffee34fe-27e2-4131-c219-78ecc248c277 Checkffee34fe-27e2-4131-c219-78ecc248c277Desc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill:#4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Checkffee34fe-27e2-4131-c219-78ecc248c277">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Ce cours plus la Spécialisation complète</span></div>
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img"
                                       aria-labelledby="Checka74c4708-63e0-496b-c178-c76157356839 Checka74c4708-63e0-496b-c178-c76157356839Desc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill: #4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Checka74c4708-63e0-496b-c178-c76157356839">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Certificats partageables</span></div>
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img"
                                       aria-labelledby="Check62d17183-60ef-4cc2-c7f5-cb8b1499a650 Check62d17183-60ef-4cc2-c7f5-cb8b1499a650Desc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill: #4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Check62d17183-60ef-4cc2-c7f5-cb8b1499a650">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Option d'apprentissage à votre rythme</span></div>
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img"
                                       aria-labelledby="Checka2d79c60-e7cd-4746-9bec-e5484260ac56 Checka2d79c60-e7cd-4746-9bec-e5484260ac56Desc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill: #4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Checka2d79c60-e7cd-4746-9bec-e5484260ac56">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Vidéos et lectures du cours</span></div>
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img"
                                       aria-labelledby="Check018f7a24-721d-48c8-9f37-964bac044908 Check018f7a24-721d-48c8-9f37-964bac044908Desc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill: #4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Check018f7a24-721d-48c8-9f37-964bac044908">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Quiz pour s'exercer</span></div>
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img"
                                       aria-labelledby="Check50d0bcbf-4dd5-4e9f-fcb2-10a8f027a1a4 Check50d0bcbf-4dd5-4e9f-fcb2-10a8f027a1a4Desc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill: #4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Check50d0bcbf-4dd5-4e9f-fcb2-10a8f027a1a4">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Devoirs notés commentés par les pairs</span></div>
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img"
                                       aria-labelledby="Check8b824a3b-15e5-40e4-cc95-011040e9ec5f Check8b824a3b-15e5-40e4-cc95-011040e9ec5fDesc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill: #4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Check8b824a3b-15e5-40e4-cc95-011040e9ec5f">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Quiz notés avec commentaires</span></div>
                                 <div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img"
                                       aria-labelledby="Check9f7ef0ab-ee64-4f9d-cf2d-426b9d617985 Check9f7ef0ab-ee64-4f9d-cf2d-426b9d617985Desc" xmlns="http://www.w3.org/2000/svg"
                                       style="fill: #4d90cc; height: 30px; width: 30px; min-width: 30px;">
                                         <title id="Check9f7ef0ab-ee64-4f9d-cf2d-426b9d617985">Check</title>
                                         <polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon>
                                     </svg><span class="m-x-1 font-md text-primary">Exercices de programmation notés</span></div>
                             </div>
                             <div class="p-t-2">
                                 <div class="EnrollButton m-r-2">
                                     <div class="d-inline-block"><button target="_blank" rel="nofollow" style="color: rgb(255, 255, 255); font-weight: bold; border-color: transparent;"
                                           class="Button_1w8tm98-o_O-primary_cv02ee-o_O-md_1jvotax button_8xjif7" style="color: rgb(255, 255, 255); font-weight: bold; border-color: transparent;"><span
                                               class="Box_120drhm-o_O-centerJustify_1nezfbd-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc">
                                                 <div>
                                                     <!-- react-text: 1585 -->S'inscrire gratuitement
                                                     <!-- /react-text -->
                                                     <div id="start-date-string" class="startdate m-t-1s rc-StartDateString font-xs"><span>Commence le sept. 27</span></div>
                                                 </div>
                                             </span></button></div>
                                 </div>
                                 <div class="m-t-1">
                                     <div class="rc-ProductMetrics">
                                         <div class="enrolledLargeFont_16g5ucx" style="color: rgb(31, 31, 31);"><span><strong><span>64 801</span></strong><!-- react-text: 1593 -->&nbsp;déjà inscrits&nbsp;!
                                                 <!-- /react-text --></span></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c p-y-1">
                             <div class="p-b-1"><span class="font-md text-primary" style="vertical-align: bottom;">Partageable sur</span><img
                                   src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera_assets/growth/xdp/linkedin-logo.svg?auto=format%2Ccompress&amp;dpr=1&amp;w=&amp;h=30"
                                   srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera_assets/growth/xdp/linkedin-logo.svg?auto=format%2Ccompress&amp;dpr=2&amp;w=&amp;h=30 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera_assets/growth/xdp/linkedin-logo.svg?auto=format%2Ccompress&amp;dpr=3&amp;w=&amp;h=30 3x"
                                   class="p-l-1s" alt="LinkedIn" style="max-height: 30px; position: relative; height: 30px; width: auto;"></div>
                             <div
                               style="background-image: url(/images/courses/certificate.png);background-size: contain;height: 340px;width: auto;background-repeat: no-repeat;border: 2px solid black;border-radius: 8px;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.2);">
                                 <span style="position: relative; top: 30px; left: 70px; max-width: 200px; display: block;">{{$course->name}}</span>
                             </div>
                             <div class="p-y-1">
                                 <div class="Box_120drhm-o_O-displayflex_poyjc" style="align-items: center;">
                                     <span class="m-y-1s font-sm text-xs-left text-primary" style="max-width: 430px;">
                                         Vous pouvez partager vos Les Certificats de Cours dans
                                         la section Certifications de votre profil LinkedIn, sur des CV imprimés, ou d'autres documents.</span>
                                 </div>


                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

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
              margin: 0 auto;
          ">
                <br>
                <a id="enroll-button" data-course-id="7169" class="btn btn-hg btn-primary btn-enroll" name="commit" href="#price"value="Enroll in Course for $52">
                  <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;
                  S'inscrire au cours
                  <span class="coupon-price product_7141"></span>
                </a>
                <br>
              </center>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <section class="pricing py-5" id="price">
    <div class="container">
      <h1 class="title-price">Nos offres de prix</h1>
      <div class="row centre">
        <!-- Free Tier -->
        @foreach($course->pricings as $pricing)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{$pricing->name}}</h5>
            <h6 class="card-price text-center">{{$pricing->type == 'Free' ? '0' : $pricing->price}} FCFA <span class="period">/ {{$pricing->per == 'month' ? 'Mois' : ''}}</span></h6>
              <hr>
              <!--
              <ul class="fa-ul">
                <li><span class="fa-li"><img src="https://img.icons8.com/color/48/000000/checked-2.png" width="20"></span>Un seul utilisateur</li>
                <li><span class="fa-li"><img src="https://img.icons8.com/color/48/000000/checked-2.png" width="20"></span>Mentoring</li>
                <li><span class="fa-li"><img src="https://img.icons8.com/color/48/000000/checked-2.png" width="20"></span>Test</li>
                {{-- <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li> --}}
                {{-- <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li> --}}
              </ul>
          -->
              <a href="/course/{{$course->slug}}/checkout/{{$pricing->id}}" class="btn btn-block btn-primary text-uppercase">S'inscrire</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <br>
</div>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


@endsection
