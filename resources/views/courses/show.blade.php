@extends('layouts.menu-course')

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
button.button-link{color:#2972d1;text-decoration:none;cursor:pointer;}
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
.Box_120drhm-o_O-centerJustify_1nezfbd-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc{
  
  justify-content:center;align-items:center;display:-moz-box;display:-ms-flexbox;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-justify-content:center;-webkit-align-items:center;-ms-flex-pack:center;-webkit-box-pack:center;-ms-flex-align:center;-webkit-box-align:center;}
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
    background-color: #2A73CC;
    border: 1px solid #2A73CC;
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
    margin-bottom: 500px;
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


<style>

section.pricing {
  /* background: #007bff; */
  /* background: linear-gradient(to right, #0062E6, #33AEFF); */
}

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
</style>

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}



<div class="blocks-page blocks-page-course_sales_page " id="blocks-page-164508">

  <div class="course-block block hero odd-stripe" id="block-183303">
    <div class="course-top-row has-hero-image" style="background:url(&quot;/images/courses/logos/{{$course->logo}}&quot;) no-repeat center fixed;">
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
              <button id="enroll-button-top" data-course-id="7169" class="btn btn-hg btn-primary btn-header-enroll" type="submit">
                <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;
                S'inscrire au cours
                {{-- <span class="default-product-price product_7141">$52</span> --}}
                <span class="coupon-price product_7141"></span>
              </button>
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
                  <i class="fa fa-lock"></i>&nbsp;
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
                  <a class="item" href="/courses/the-foundations-of-card-magic/lectures/124869">
                    <span class="lecture-icon">
                      <i class="fa fa-youtube-play"></i>
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
            Frequently Asked Questions
          </h2>
          <br>
          <div class="faq-question">
            When does the course start and finish?
          </div>
          <div class="faq-answer">
            The course starts now and never ends! It is a completely self-paced online course - you decide when you start and when you finish.
          </div>
          <div class="faq-question">
            How long do I have access to the course?
          </div>
          <div class="faq-answer">
            How does lifetime access sound? After enrolling, you have unlimited access to this course for as long as you like - across any and all devices you own.
          </div>
          <div class="faq-question">
            What's the difference between this and the 52Kards YouTube channel?
          </div>
          <div class="faq-answer">
            This course includes exclusive material that I do not teach on YouTube and provides a structured way to learn card magic most effectively and track your progress. Enrolling in the course also helps support the free content that I
            create for YouTube.
          </div>
          <div class="faq-question">
            Any more questions?
          </div>
          <div class="faq-answer">
            <p>
              Feel free to contact me at 52Kards@gmail.com if you have any other questions about this course.
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
              Testimonials
            </h2>
          <hr>
          <p>
            <i>"Hi Asad - I'm a serious magic hobbyist (and by day a director/writer/actor of movies and TV shows) and I've scoured many sources and your style of teaching is by far my favorite ... I'm wanting to put some time (and money) into
              taking my skills to the next level, and I want you to be my teacher!" </i>- David Wain
            </p>
            <p>
              <br>
            </p>
            <p>
              <i>"I'm a 44 year old family doctor who has always loved sleight of hand but have never had the time to invest in learning…only watching. Now I'm learning. It's a great and inexpensive hobby and it's even become a great way to spend
              time with my 4 children. Of all the sources I've used so far, I've enjoyed yours the most. Concise yet thorough. Keep up the great work. I really appreciate your help." - </i>Mike
            </p>
            <p>
              <br>
            </p>
            <p>
              <i>"I am such a huge fan of your content because it is so much different than every other teacher I've seen online. I've been doing card magic for about 6 or 7 years now and I felt like I hit a wall in my progression. I'm in college
                so I don't have a lot of time to study techniques shown in a book. Your videos were so instrumental in progressing my skills and expanding my arsenal in an extremely speedy fashion. Your explanations are also very clear and concise
                and I love you always focus on the nitty gritty, considering that's where a lot of card instructors lack in their explanations."</i> - Chris Wheatley<br>
              </p>
            </div>
      </div>
    </div>
  </div>

  <div>
    <div><div class="EnrollSectionSCDP" >
      <div class="EnrollSection p-t-5 p-b-2">
        <div class="Container_jd01j4-o_O-container_17wca8l">
          <div class="Row_nvwp6p">
            <div class="Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c p-y-1">
              <h2 class="m-x-0 m-b-1s"><span>Commencez à apprendre dès aujourd'hui&nbsp;!</span></h2>
              <h4 class="H4_1k76nzj-o_O-weightLighter_1qi0fkl-o_O-fontHeadline_1uu0gyz">
                <span style="font-size: 0.875rem; color: rgb(42, 115, 204); font-weight: bold;">
                  <div class="rc-FinaidLink reset"><p class="caption-text">
                    <button id="finaid_button" data-track="true" data-track-app="xdp_v1" data-track-page="xdp" data-track-action="click" data-track-component="finaid" class="button-link finaid-link">Aide financière disponible</button></p>

                  </div>
                </span></h4><div class="p-y-1s"><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc">
                  <svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Checkffee34fe-27e2-4131-c219-78ecc248c277 Checkffee34fe-27e2-4131-c219-78ecc248c277Desc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Checkffee34fe-27e2-4131-c219-78ecc248c277">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Ce cours plus la Spécialisation complète</span></div><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Checka74c4708-63e0-496b-c178-c76157356839 Checka74c4708-63e0-496b-c178-c76157356839Desc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Checka74c4708-63e0-496b-c178-c76157356839">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Certificats partageables</span></div><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Check62d17183-60ef-4cc2-c7f5-cb8b1499a650 Check62d17183-60ef-4cc2-c7f5-cb8b1499a650Desc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Check62d17183-60ef-4cc2-c7f5-cb8b1499a650">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Option d'apprentissage à votre rythme</span></div><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Checka2d79c60-e7cd-4746-9bec-e5484260ac56 Checka2d79c60-e7cd-4746-9bec-e5484260ac56Desc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Checka2d79c60-e7cd-4746-9bec-e5484260ac56">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Vidéos et lectures du cours</span></div><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Check018f7a24-721d-48c8-9f37-964bac044908 Check018f7a24-721d-48c8-9f37-964bac044908Desc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Check018f7a24-721d-48c8-9f37-964bac044908">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Quiz pour s'exercer</span></div><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Check50d0bcbf-4dd5-4e9f-fcb2-10a8f027a1a4 Check50d0bcbf-4dd5-4e9f-fcb2-10a8f027a1a4Desc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Check50d0bcbf-4dd5-4e9f-fcb2-10a8f027a1a4">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Devoirs notés commentés par les pairs</span></div><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Check8b824a3b-15e5-40e4-cc95-011040e9ec5f Check8b824a3b-15e5-40e4-cc95-011040e9ec5fDesc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Check8b824a3b-15e5-40e4-cc95-011040e9ec5f">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Quiz notés avec commentaires</span></div><div class="Box_120drhm-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><svg class="SvgIcon_8wfvj4" viewBox="0 0 48 48" role="img" aria-labelledby="Check9f7ef0ab-ee64-4f9d-cf2d-426b9d617985 Check9f7ef0ab-ee64-4f9d-cf2d-426b9d617985Desc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(42, 115, 204); height: 30px; width: 30px; min-width: 30px;"><title id="Check9f7ef0ab-ee64-4f9d-cf2d-426b9d617985">Check</title><polygon points="17.4333333 31.6416667 8.85833333 23.0666667 6 25.925 17.4333333 37.3583333 41.9333333 12.8583333 39.075 10" role="presentation"></polygon></svg><span class="m-x-1 font-md text-primary">Exercices de programmation notés</span></div></div><div class="p-t-2"><div class="EnrollButton m-r-2"><div class="d-inline-block"><button target="_blank" rel="nofollow" style="color: rgb(255, 255, 255); font-weight: bold; border-color: transparent;" class="Button_1w8tm98-o_O-primary_cv02ee-o_O-md_1jvotax button_8xjif7" style="color: rgb(255, 255, 255); font-weight: bold; border-color: transparent;"><span class="Box_120drhm-o_O-centerJustify_1nezfbd-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><div><!-- react-text: 1585 -->S'inscrire gratuitement<!-- /react-text --><div id="start-date-string" class="startdate m-t-1s rc-StartDateString font-xs"><span>Commence le sept. 27</span></div></div></span></button></div></div><div class="m-t-1"><div class="rc-ProductMetrics"><div class="enrolledLargeFont_16g5ucx" style="color: rgb(31, 31, 31);"><span><strong><span>64 801</span></strong><!-- react-text: 1593 -->&nbsp;déjà inscrits&nbsp;!<!-- /react-text --></span></div></div></div></div></div><div class="Col_i9j08c-o_O-xsCol12_1m1ceo5-o_O-mdCol6_1rbv01c p-y-1"><div class="p-b-1"><span class="font-md text-primary" style="vertical-align: bottom;">Partageable sur</span><img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera_assets/growth/xdp/linkedin-logo.svg?auto=format%2Ccompress&amp;dpr=1&amp;w=&amp;h=30" srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera_assets/growth/xdp/linkedin-logo.svg?auto=format%2Ccompress&amp;dpr=2&amp;w=&amp;h=30 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera_assets/growth/xdp/linkedin-logo.svg?auto=format%2Ccompress&amp;dpr=3&amp;w=&amp;h=30 3x" class="p-l-1s" alt="LinkedIn" style="max-height: 30px; position: relative; height: 30px; width: auto;"></div><div style="background-image: url(&quot;https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera_assets/growth/xdp/cert_enroll_section_cdp.png?auto=format%2Ccompress&amp;dpr=1&amp;w=300&quot;); background-size: contain; height: 340px; width: auto; background-repeat: no-repeat;"><span style="position: relative; top: 30px; left: 70px; max-width: 200px; display: block;">Ruby on Rails: An Introduction</span>
                  </div>
                <div class="p-y-1"><div class="Box_120drhm-o_O-displayflex_poyjc" style="align-items: center;">
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

        Get started now!
      </h2>
    </div>
    <div class="container" id="pricing-options">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <form action="/purchase" class="new_sale" id="new_sale" method="get">
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
                <button id="enroll-button" data-course-id="7169" class="btn btn-hg btn-primary btn-enroll" name="commit" type="submit" value="Enroll in Course for $52">
                  <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;
                  Inscrit toi au cours pour
                  <span class="default-product-price product_7141">$52</span>
                  <span class="coupon-price product_7141"></span>
                </button>
                <br>
              </center>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <section class="pricing py-5">
    <div class="container">
      <div class="row">
        <!-- Free Tier -->
        @foreach($course->pricings as $pricing)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{$pricing->name}}</h5>
              <h6 class="card-price text-center">{{$pricing->price}} FCFA <span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Un seul utilisateur</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Mentoring</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Test</li>
                {{-- <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li> --}}
                {{-- <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li> --}}
              </ul>
              <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <br>
</div>


@endsection
