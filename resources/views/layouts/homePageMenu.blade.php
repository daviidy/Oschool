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
                <li class="nav-item dropdown d-md-none mobile-menu">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarmenu" data-toggle="dropdown">
                    <i class="fas fa-bars hamburger"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/schools">Nos écoles</a>
                    <a class="dropdown-item" href="/corporate">Business</a>
                  </div>

                </li>
              <li class="nav-item ml-3">
                <a href="/">
                  <img class="logo-short img-fluid" src="./assets/images/logo-os-noir.png" alt="Logo">
                  <img class="logo img-fluid" src="./assets/images/logo-oschool-noir.png" alt="">
                </a>
              </li>
              <li class="d-none d-md-block nav-item mr-3 ml-3">
                <a href="{{url('schools')}}" class="nav-link text-dark">Nos écoles</a>
              </li>
              <li class="d-none d-md-block nav-item mr-3 ml-3">
                <a href="/corporate" class="nav-link text-dark">Business</a>
              </li>

            </ul>
              @guest
                <div class="ml-auto d-flex">
                  <a href="{{route('login')}}" class="bg-danger text-decoration-none d-md-block d-none p-3 bg-oschool text-white rounded-pill text-center mr-2 mr-md-3" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">
                    Inscrivez-vous
                  </a>
                  <!--mobile-->
                  <a href="{{route('login')}}" class="bg-danger text-decoration-none d-md-none d-block p-2 bg-oschool text-white rounded-pill text-center mr-2 mr-md-3" data-toggle="modal" data-target="#registerModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                      <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                  </a>
                  <a href="{{route('login')}}" class="text-decoration-none d-md-none d-block p-2 bg-oschool text-white rounded-pill text-center mr-2 mr-md-3" data-toggle="modal" data-target="#loginModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                  </a>
                  <!--End mobile-->
                  <a href="#" class="text-decoration-none d-md-block d-none p-3 bg-oschool text-white rounded-pill text-center" data-toggle="modal" data-target="#loginModal">
                    Connectez-vous
                  </a>

                </div>
              @endguest
            @auth
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">
                  <img class="rounded-circle img-fluid user-avatar" src="/images/users/default/{{Auth::user()->image}}" alt="{{Auth::user()->name}}" style="height:30px !important">
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
        @include('includes.auths.login')
        @include('includes.auths.register')
        @include('includes.footer')
