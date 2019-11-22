<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') | Oschool</title>
    <meta name="og:image" content="@yield('image')"/>
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="/css/school_homepage.css">
    <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script type="text/javascript" src="/js/cookie.js" charset="utf-8"></script>
    <script type="text/javascript" src="/js/index.js"></script>
    <script type="text/javascript" src="/js/slider.js"></script>
    <script> "use strict"; !function() { var t = window.driftt = window.drift = window.driftt || []; if (!t.init) { if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice.")); t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n = Array.prototype.slice.call(arguments); return n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) { t[e] = t.factory(e); }), t.load = function(t) { var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(o, i); }; } }(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('2uy6g3spxi59');
    </script>
  </head>

  <body class="body-public  " cz-shortcut-listen="true">
    <div class="modal-background"></div>

    <!--div class="exit-intent-modal-container modal-container vertically-align-contents">
      <div class="exit-intent-modal">
        <button type="button" class="close close-modal-button">
          ×
        </button>
        <div class="row">
          <div class="hidden-xs hidden-sm col-md-4">
            <img src="https://teachable.com/assets/modals/ebook-cover-mockup-894ef52e921f90e1357f4acef975a1f7e472dd9750295803df50dbc2e8654a46.png">
          </div>
          <div class="col-xs-12 col-md-8">
            <h1>Get Our Course Creation Book</h1>
            <p>Learn how to create content for videos, slides, interviews &amp; more to build your own online course!</p>
            <input type="text" placeholder="Email Address">
            <button class="download-button" type="button" name="button">Download now</button>
          </div>
        </div>
      </div>
    </div-->

    <div class="notifications">
      <div class="hidden message-1">
        Thank you! We're prepping your download and will send it to your inbox in the next 5 minutes.
      </div>
      <div class="hidden message-3">
        Welcome Ecommerce-Platform.com Visitors!
      </div>
    </div>

    <div class="cookie-banner vertically-align-contents hidden ">
      <p>Ce site utilise des cookies et d'autres outils de suivi pour vous fournir la meilleure expérience. En utilisant notre site, vous reconnaissez que vous comprenez cela et êtes prêt à vous conformer aux termes de notre <a
          href="https://teachable.com/privacy-policy">politique de confidentialité</a>.</p>
      <button class="my-close-button"><img src="https://teachable.com/assets/modal-x-c7f43ce3b8f64f3d597ce12e57caa7ddbf0778d3f163dc92b4a768067ddd2c3f.svg"></button>
    </div>

    <section class="_1568 clearfix transparent nav-menu">
      <style>
        ._1568 {
          margin-bottom: 0px;
        }

        @media (max-width: 991px) {
          ._1568 {
            margin-bottom: 0px;
          }
        }

        @media (max-width: 767px) {
          ._1568 {
            margin-bottom: 0px;
          }
        }
      </style>
      <div class="container">
        <div class="row">
          <a class="create-course" href="{{route('login')}}">Salle de classe</a>
          <a class="teachable-logo" href="/" title="Teachable - Create a Course"><img src="/images/schools/logos/logo_oschool_blanc.png" alt="" style="width: 130px;"></a>
          <!--a class="log-in" href="/login?src=nav">Entreprises</a-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-collapse collapse">
            <ul>
              <li class="dropdown-only"><a href="{{route('login')}}">Salle de classe</a></li>
              <!--li class="dropdown-only"><a href="/login?src=nav">Entreprises</a></li-->
              <li><a href="{{url('schools')}}">Nos écoles</a></li>
              <li><a href="/event">Evénements</a></li>
              <li><a href="/corporate">Entreprises</a></li>
              <!--li><a href="/blog/resources">Blog</a></li-->
            </ul>
          </div>
        </div>
      </div>
    </section>
    <script>
    $('.navbar-toggle').click(function(e){
  e.preventDefault();
  $('.navbar-collapse').slideToggle();
  $(this).toggleClass('active');
});
    </script>
    @yield('content')

    <footer>
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
            <a target="_blank" rel="noopener noreferrer" href="https://blog.oschoolelearning.com/?page_id=4302">Devenez formateur</a>
          </li>
          <li>
            <a target="_blank" rel="noopener noreferrer" href="https://blog.oschoolelearning.com/?page_id=4404">FAQ</a>
          </li>
          <li>
            <a target="_blank" rel="noopener noreferrer" href="">Qui sommes nous?</a>
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
            <a href="https://blog.oschoolelearning.com/condition/" target="_blank">Conditions</a>
          </li>
          <li>
            <a href="https://blog.oschoolelearning.com/confidentialite/" target="_blank">Confidentialité</a>
          </li>
          <li>
            <a href="https://blog.oschoolelearning.com/?page_id=4300" target="_blank">Contactez-nous</a>
          </li>
          <li>
            <a href="https://blog.oschoolelearning.com" target="_blank">Blog</a>
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

<script type="text/javascript">

$(document).ready(function() {

$('#tabs li a:not(:first)').addClass('inactive');
$('.nav-partial').hide();
$('.nav-partial:first').show();

$('#tabs li a').click(function(){
    var t = $(this).attr('id');
  if($(this).hasClass('inactive')){ //this is the start of our condition
    $('#tabs li a').addClass('inactive');
    $(this).removeClass('inactive');

    $('.nav-partial').hide();
    $('#'+ t + 'C').fadeIn('slow');
 }
});

});

</script>


</body>



</html>
