<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="og:image" content="@yield('image')"/>
    <meta name="description" content="@yield('title')">

    <meta name="title" content="@yield('title')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">

    <!-- Twitter -->
    <meta property="twitter:card" content="@yield('image')">
    <meta property="twitter:url" content="{{Request::url()}}">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description" content="@yield('description')">
    <meta property="twitter:image" content="@yield('image')">
    <title>@yield('title') | Oschool</title>

    <!--link rel="icon" href="#"-->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/homePage.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d86848cfe0.js"></script>


    <script> "use strict"; !function() { var t = window.driftt = window.drift = window.driftt || []; if (!t.init) { if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice.")); t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n = Array.prototype.slice.call(arguments); return n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) { t[e] = t.factory(e); }), t.load = function(t) { var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(o, i); }; } }(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('2uy6g3spxi59');
    </script>
  </head>
  <body>
    <div class="main-content">
      <section class="container-fluid hero pb-md-5 pb-3">
        <header>
          <nav class="navbar navbar-expand-sm bg-transparent">
            <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item dropdown d-md-none">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarmenu" data-toggle="dropdown">
                    <i class="fas fa-bars hamburger"></i>
                  </a>
                  <div class="dropdown-menu" style="left: 0;">
                    <a class="dropdown-item" href="/schools">Nos écoles</a>
                    <a class="dropdown-item" href="/corporate">Business</a>
                  </div>

                </li>
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
                  <img class="rounded-circle img-fluid user-avatar" src="/images/users/default/{{Auth::user()->image}}" alt="{{Auth::user()->name}}">
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
