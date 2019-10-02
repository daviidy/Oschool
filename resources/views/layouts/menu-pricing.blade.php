<html class=" video no-videoautoplay">

<head>

  <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">


  <meta charset="UTF-8">



  <title>@yield('title') | Oschool</title>
  <meta name="description" content="@yield('description')">


  <style media="screen">
  /*! CSS Used from: https://fedora.teachablecdn.com/assets/bootstrap-31ff648fd5e6158c77c31e785844877b6666554feab422e57ca5a96aa5587b9e.css ; media=screen */
@media screen{
header{display:block;}
a{background:0 0;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
.navbar{display:none;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
a{color:#428bca;text-decoration:none;}
a:hover,a:focus{color:#2a6496;text-decoration:underline;}
a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
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
.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent;}
@media (min-width: 768px){
.navbar{border-radius:4px;}
}
@media (min-width: 768px){
.navbar-header{float:left;}
}
.container>.navbar-header{margin-right:-15px;margin-left:-15px;}
@media (min-width: 768px){
.container>.navbar-header{margin-right:0;margin-left:0;}
}
.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);}
@media (min-width: 768px){
.navbar-fixed-top{border-radius:0;}
}
.navbar-fixed-top{top:0;border-width:0 0 1px;}
.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px;}
.navbar-brand:hover,.navbar-brand:focus{text-decoration:none;}
@media (min-width: 768px){
.navbar>.container .navbar-brand{margin-left:-15px;}
}
.container:before,.container:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after{display:table;content:" ";}
.container:after,.navbar:after,.navbar-header:after{clear:both;}
}
/*! CSS Used from: https://themes2.teachablecdn.com/themecss/production/base.css?_=0e34779b46fb&brand_course_heading=%23ffffff&brand_heading=%232b3636&brand_homepage_heading=%23ffffff&brand_navbar_fixed_text=%23ffffff&brand_navbar_text=%23ffffff&brand_primary=%23000000&brand_secondary=%2339719a&brand_text=%232b3636&logged_out_homepage_background_image_overlay=0.84&logged_out_homepage_background_image_url=https%3A%2F%2Fd2vvqscadf4c1f.cloudfront.net%2Fb7yh7DKMSKeGh9UPYbDI_CardSpring.jpg */
a{color:#39719a;}
a:hover,a:active{color:#1d3a50;}
a,a:active,a:hover,a:focus{text-decoration:none;}
.navbar-fedora{background-color:#000;position:absolute;margin-bottom:0px;top:0px;transition:none;}
.navbar-fedora .navbar-header{height:60px;width:100%;}
.navbar-fedora .navbar-brand{font-weight:normal;color:#fff;font-size:30px;line-height:30px;height:60px;}
.navbar-fedora .navbar-brand.header-logo{max-width:250px;padding-top:0px;padding-bottom:0px;}
.navbar-fedora .navbar-brand.header-logo img{height:100%;}
@media screen and (max-width: 767px){
.navbar-fedora .navbar-brand{font-size:18px;}
}
@media screen and (max-width: 480px){
.navbar-fedora{min-height:60px;}
}
  </style>




  <style media="screen">
  /*! CSS Used from: http://localhost:8000/css/school_homepage.css */
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
body.body-public :hover{-webkit-transition:all 0.2s ease-in-out;-moz-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
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
body.body-public :hover{-webkit-transition:all 0.2s ease-in-out;-moz-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
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
/*! CSS Used fontfaces */
@font-face{font-family:'TeachableSans-Regular';src:url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.eot");src:url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.eot?#iefix") format("embedded-opentype"),url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.woff") format("woff"),url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Regular.ttf") format("truetype");}
@font-face{font-family:'TeachableSans-Bold';src:url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.eot");src:url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.eot?#iefix") format("embedded-opentype"),url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.woff") format("woff"),url("//d2oz8i5n9se8ej.cloudfront.net/fonts/teachable-sans/TeachableSans-Bold.ttf") format("truetype");}
  </style>








</head>

<body style="padding-bottom: 131px;">

    <header class="">
    <!-- Navbar -->
    <div class="navbar navbar-fedora navbar-fixed-top is-at-top bs-docs-nav is-not-signed-in" id="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- Site logo -->

                <a class="navbar-brand header-logo" href="https://courses.52kards.com">
                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:60/https://d2vvqscadf4c1f.cloudfront.net/itO9a193QaqY32nDydWc_Transparent%20Logo.png" alt="52Kards"
                      srcset="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:120/https://d2vvqscadf4c1f.cloudfront.net/itO9a193QaqY32nDydWc_Transparent%20Logo.png 2x">
                </a>

            </div>
        </div>
    </div>
</header>



  <div role="main" class="view-school">

  @yield('content')


  </div>


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
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://teachable.zendesk.com/hc/en-us">Carrières</a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://teachable.com/blog">Devenez formateur</a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://teachable.com/podcast/everything-is-teachable">FAQ</a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://teachable.com/podcast/everything-is-teachable">La communauté</a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://teachable.com/podcast/everything-is-teachable">Témoignages</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2 third-section">
          <ul class="new-homepage-footer-links">
            <h4>Plus</h4>
            <li>
              <a href="/careers">Conditions</a>
            </li>
            <li>
              <a href="/experts">Confidentialité</a>
            </li>
            <li>
              <a href="/affiliates">Contactez-nous</a>
            </li>
            <li>
              <a href="/affiliates">Blog</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3">
          <ul class="new-homepage-footer-links">
            <h4>Réseaux sociaux</h4>
            <li>
              <a href="/privacy-policy">Facebook</a>
            </li>
            <li>
              <a href="/terms-of-use">Twiter Linkedin</a>
            </li>
            <li>
              <a href="/terms-of-use">Linkedin</a>
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




  <iframe name="filepicker_comm_iframe" id="filepicker_comm_iframe" src="https://dialog.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe><iframe name="fpapi_comm_iframe" id="fpapi_comm_iframe"
    src="https://www.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe>
</body>

</html>
