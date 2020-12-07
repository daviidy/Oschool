<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDKHLDR');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <title>@yield('title') | Oschool</title>
    <meta name="og:image" content="@yield('image')"/>
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
    <meta name="description" content="@yield('description')">
    <link rel="icon" href="/images/schools/logos/image-profil.png" type="image/png" sizes="16x16">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/94491a0993.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script type="text/javascript" src="/js/cookie.js" charset="utf-8"></script>
    <script type="text/javascript" src="/js/index.js"></script>
    <script type="text/javascript" src="/js/slider.js"></script>
    <script> "use strict"; !function() { var t = window.driftt = window.drift = window.driftt || []; if (!t.init) { if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice.")); t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n = Array.prototype.slice.call(arguments); return n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) { t[e] = t.factory(e); }), t.load = function(t) { var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(o, i); }; } }(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('2uy6g3spxi59');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--link rel="icon" href="#"-->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/d86848cfe0.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/homepage.css">
  </head>
  <body>
    <div class="main-content">
      <section class="container-fluid hero pb-md-5 pb-3">
        <header>
          <nav class="navbar navbar-expand-sm bg-transparent">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item ml-3">
                <img class="logo-short img-fluid" src="./assets/images/logo-os-noir.png" alt="Logo">
                <img class="logo img-fluid" src="./assets/images/logo-oschool-noir.png" alt="">
              </li>
              <li class="d-none d-md-block nav-item mr-3 ml-3">
                <a href="{{url('schools')}}" class="nav-link">Nos écoles</a>
              </li>
              <li class="d-none d-md-block nav-item mr-3 ml-3">
                <a href="/corporate" class="nav-link">Business</a>
              </li>

            </ul>
              @guest
                <div class="ml-auto">
                  <a href="{{route('login')}}" class="text-decoration-none p-3 bg-oschool text-white rounded-pill text-center">
                    Connectez-vous
                  </a>

                </div>
              @endguest
            @auth
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">
                  <img class="rounded-circle img-fluid user-avatar" src="/images/users/default/image.jpg" alt="Arsene">
                </a>
                <div class="dropdown-menu p-4">
                  <a class="dropdown-item pl-3 pb-3" href="/home">
                      <i style="font-size: 13px;" class="pr-2 fas fa-house-user" aria-hidden="true"></i>
                      Tableau de bord
                  </a>
                  <a class="dropdow-item pl-3 text-decoration-none" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i style="font-size: 13px;" class="pr-2 fas fa-sign-out-alt" aria-hidden="true"></i>
                                Se déconnecter
                            </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                      </div>
                    </li>

                    <style media="screen">
                        @media  screen and (max-width: 600px){
                            .navbar .navbar-nav:nth-child(1) {
                                width: 55%;
                            }
                        }
                    </style>
              </ul>
              @endauth

          </nav>
        </header>
        @yield('content')
        @include('includes.footer')
