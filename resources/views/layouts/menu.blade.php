<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title | Oschool')</title>
    <link rel="stylesheet" href="/css/school_homepage.css">
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  </head>

  <body class="body-public  " cz-shortcut-listen="true">
    <div class="modal-background"></div>

    <div class="exit-intent-modal-container modal-container vertically-align-contents">
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
    </div>

    <div class="notifications">
      <div class="hidden message-1">
        Thank you! We're prepping your download and will send it to your inbox in the next 5 minutes.
      </div>
      <div class="hidden message-3">
        Welcome Ecommerce-Platform.com Visitors!
      </div>
    </div>

    <div class="cookie-banner vertically-align-contents hidden">
      <p>This website uses cookies and other tracking tools to provide you with the best experience. By using our site, you acknowledge that you understand this and are willing to comply with the terms in our <a
          href="https://teachable.com/privacy-policy">privacy policy</a>.</p>
      <button><img src="https://teachable.com/assets/modal-x-c7f43ce3b8f64f3d597ce12e57caa7ddbf0778d3f163dc92b4a768067ddd2c3f.svg"></button>
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
          <a class="teachable-logo" href="/" title="Teachable - Create a Course"><img src="/images/schools/logos/oschool.png" alt="" style="width: 130px;"></a>
          <a class="log-in" href="/login?src=nav">Entreprises</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-collapse collapse">
            <ul>
              <li class="dropdown-only"><a href="{{route('login')}}">Salle de classe</a></li>
              <li class="dropdown-only"><a href="/login?src=nav">Entreprises</a></li>
              <li><a href="/features">Nos écoles</a></li>
              <li><a href="/pricing">Nos offres de formations</a></li>
              <li><a href="/examples">Emplois</a></li>
              <li><a href="/blog">Evernements</a></li>
              <li><a href="/blog/resources">Blog</a></li>
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



<div>
  <script src="https://unpkg.com/@teachable/iris@1.5.1/dist/iris.umd.min.js"></script>
  <script type="text/javascript" src="//cdn.embed.ly/player-0.0.11.min.js"></script>
  <script src="/javascripts/public-bundle-5ce9d056668cca67a144.js"></script>
  <script src="https://teachable.com/assets/application-67c274dbd61b20404456f6ae8195303d0a920e4a67ef0e97ef764ed3fa0a2585.js"></script>


  <!-- SENTRY RAVEN -->
  <script src="https://cdn.ravenjs.com/3.26.4/raven.min.js" crossorigin="anonymous"></script>
  <!-- RightMessage (Pendo 2.0) -->
  <script type="text/javascript">
    (function(p, a, n, d, o, b, c) {
      o = n.createElement('script');
      o.type = 'text/javascript';
      o.async = true;
      o.src = 'https://tag.rightmessage.com/' + p + '.js';
      b = n.getElementsByTagName('script')[0];
      d = function(h, u, i) {
        var c = n.createElement('style');
        c.id = 'rmcloak' + i;
        c.type = 'text/css';
        c.appendChild(n.createTextNode('.rmcloak' + h + '{visibility:hidden}.rmcloak' + u + '{display:none}'));
        b.parentNode.insertBefore(c, b);
        return c;
      };
      c = d('', '-hidden', '');
      d('-stay-invisible', '-stay-hidden', '-stay');
      setTimeout(o.onerror = function() {
        c.parentNode && c.parentNode.removeChild(c);
      }, a);
      b.parentNode.insertBefore(o, b);
    })('561285057', 20000, document);
  </script>
  <!-- SEGMENT -->
  <script>
    window.analytics = window.analytics || [], window.analytics.methods = ["identify", "group", "track", "page", "pageview", "alias", "ready", "on", "once", "off", "trackLink", "trackForm", "trackClick", "trackSubmit"], window.analytics.factory =
      function(t) {
        return function() {
          var a = Array.prototype.slice.call(arguments);
          return a.unshift(t), window.analytics.push(a), window.analytics
        }
      };
    for (var i = 0; i < window.analytics.methods.length; i++) {
      var key = window.analytics.methods[i];
      window.analytics[key] = window.analytics.factory(key)
    }
    window.analytics.load = function(t) {
        if (!document.getElementById("analytics-js")) {
          var a = document.createElement("script");
          a.type = "text/javascript", a.id = "analytics-js", a.async = !0, a.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.io/analytics.js/v1/" + t + "/analytics.min.js";
          var n = document.getElementsByTagName("script")[0];
          n.parentNode.insertBefore(a, n)
        }
      }, window.analytics.SNIPPET_VERSION = "2.0.9",
      window.analytics.load("tnh8fhmjpo");
  </script>
  <!-- RETENTION by PROFITWELL (for dunning) -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['ProfitWellObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m);
    })(window, document, 'script', 'https://dna8twue3dlxq.cloudfront.net/js/profitwell.js', 'profitwell');
    profitwell('auth_token', 'c73a37dec4e02a585a09bd1997ebfa57');
  </script>
  <!-- STRIPE -->
  <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
</div>

<iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeMetricsController0" allowpaymentrequest="true"
  src="https://js.stripe.com/v2/m/outer.html#url=https%3A%2F%2Fteachable.com%2Fexamples&amp;title=Teachable%20%7C%20Examples%20of%20Online%20Courses%20Built%20Using%20Teachable&amp;referrer=https%3A%2F%2Fteachable.com%2F&amp;muid=546ca813-0cf0-4c94-812d-1b919c197c3e&amp;sid=dd947be9-53c1-4eb9-91e2-3b0bf02d44a3&amp;preview=false"
  aria-hidden="true" tabindex="-1"
  style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.23648245185608752"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.12266700385399676" width="0" height="0" alt=""
    src="https://bat.bing.com/action/0?ti=5153227&amp;Ver=2&amp;mid=989549a4-44d9-f260-aade-dd03e1ed4b01&amp;pi=1200101525&amp;lg=fr-CI&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Teachable%20%7C%20Examples%20of%20Online%20Courses%20Built%20Using%20Teachable&amp;p=https%3A%2F%2Fteachable.com%2Fexamples&amp;r=https%3A%2F%2Fteachable.com%2F&amp;lt=4075&amp;evt=pageLoad&amp;msclkid=N&amp;rn=663690">
</div>
</body>



</html>
