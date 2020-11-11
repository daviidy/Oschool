<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
      <meta charset="utf-8">
       <meta name="csrf-token" content="{!! csrf_token() !!}">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


      <title>@yield('title')</title>

      <!--link rel="icon" href="#"-->
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
      <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
      <script src="https://kit.fontawesome.com/d86848cfe0.js"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/path.css">
      <link rel="stylesheet" href="/css/atom-one-dark.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!-- Start of Async Drift Code -->
        <script>
        "use strict";

        !function() {
          var t = window.driftt = window.drift = window.driftt || [];
          if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
            t.factory = function(e) {
              return function() {
                var n = Array.prototype.slice.call(arguments);
                return n.unshift(e), t.push(n), t;
              };
            }, t.methods.forEach(function(e) {
              t[e] = t.factory(e);
            }), t.load = function(t) {
              var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
              o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
              var i = document.getElementsByTagName("script")[0];
              i.parentNode.insertBefore(o, i);
            };
          }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('2uy6g3spxi59');
        </script>
        <!-- End of Async Drift Code -->


  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm bg-white border-bottom fixed-top">
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
            <img class="logo-short img-fluid" src="/images/schools/logos/logo_os_noir.png" alt="Oschool">
            <img class="logo img-fluid" src="/images/schools/logos/logo_oschool_noir.png" alt="Oschool">
          </li>
          <li class="d-none d-md-block nav-item mr-3 ml-3">
            <a href="/schools" class="nav-link">Nos écoles</a>
          </li>
          <li class="d-none d-md-block nav-item mr-3 ml-3">
            <a href="/corporate" class="nav-link">Business</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          @include('includes.handle-login')
        </ul>
      </nav>
    </header>

    @yield('content')

    @include('includes.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

  </body>
</html>
