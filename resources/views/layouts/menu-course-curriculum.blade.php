<html class=" video videoautoplay">

<head>
  <link rel="stylesheet" href="/css/course_curriculum.css">
  <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
  <style type="text/css">
    @charset "UTF-8";

    [ng\:cloak],
    [ng-cloak],
    [data-ng-cloak],
    [x-ng-cloak],
    .ng-cloak,
    .x-ng-cloak,
    .ng-hide:not(.ng-hide-animate) {
      display: none !important;
    }

    ng\:form {
      display: block;
    }

    .ng-animate-shim {
      visibility: hidden;
    }

    .ng-anchor {
      position: absolute;
    }
  </style>

  <link rel="stylesheet" media="screen" href="/css/fedora.css" data-turbolinks-track="true">

  <link href="/css/theme.css" rel="stylesheet" data-turbolinks-track="true">
  <title>{{$course->name}} | Oschool</title>

  <meta name="asset_host" content="https://fedora.teachablecdn.com">
  <script src="https://fedora.teachablecdn.com/assets/application-1373410a4fe18258bccdd558991a1b1ed4c62390e2116938378a10bc0ff046cf.js" data-turbolinks-track="true"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="https://fedora.teachablecdn.com/packs/student-d0390011b83863c240d7.js"></script>





  <link href="/blog/rss" rel="alternate" title="RSS Feed" type="application/rss+xml">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">




  <link rel="stylesheet" type="text/css" href="chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/css/emoji.css">

<script> "use strict"; !function() { var t = window.driftt = window.drift = window.driftt || []; if (!t.init) { if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice.")); t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n = Array.prototype.slice.call(arguments); return n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) { t[e] = t.factory(e); }), t.load = function(t) { var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(o, i); }; } }(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('2uy6g3spxi59');
</script>

</head>

<body class="body-content-view" cz-shortcut-listen="true">

  <!-- Lecture Header -->
  <header class="full-width half-height is-signed-in">
    <div class="navbar navbar-fedora">
      <div class="navbar-header">
        <div class="lecture-left">
        <a class="nav-icon-back" aria-label="Présentation de la leçon" href="/course/{{$course->slug}}">
            <i class="fa fa-angle-left" title="Présentation de la leçon"></i>
          </a>
        </div>
        <button class="navbar-toggle" data-target=".navbar-header-collapse" data-toggle="collapse" type="button">
          <span class="sr-only">
            Toggle navigation
          </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Header Menu -->
        <div class="collapse navbar-collapse navbar-header-collapse">
          <ul class="nav navbar-nav navbar-right">


            <div class="navbar-enrolled">
              <!-- Sidebar Nav -->

              <li class="selected">
                <a href="/courses/532534" class="sidebar-nav-link">
                  <span class="lecture-sidebar-icon">
                    <i class="fa fa-list-alt"></i>
                  </span>
                  Course Curriculum
                </a>
              </li>


              <li class="">
                <a href="/courses/532534/author_bio" class="sidebar-nav-link">
                  <span class="lecture-sidebar-icon">
                    <i class="fa fa-user"></i>
                  </span>
                  Votre instructeur
                </a>
              </li>
            </div>
            <li class="dropdown">
              <a aria-expanded="false" aria-haspopup="true" class="fedora-navbar-link navbar-link dropdown-toggle open-my-profile-dropdown" data-toggle="dropdown">
                <img class="gravatar" src="https://s.gravatar.com/avatar/9c275cba24f7c939201cda28f832f8e0?d=mm" alt="yaodavidarmel@gmail.com">
                <span class="navbar-current-user">{{Auth::user()->name}}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-profile">
                  <a href="/users/settings">
                    Modifier votre profil
                  </a>
                </li>
                <li>
                  <a href="/users/billings">
                  <a href="/curclass="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2"rent_user/subscriptions">
                    Gerer vos abonnements
                  </a>
                </li>
                <!--li>
                  <a href="/current_user/credit_card">
                    Ajouter / Echanger votre carte de credit
                  </a>
                </li>
                <li>
                  <a href="/current_user/contact">
                    Contactez nous
                  </a>
                </li-->
                <li class="user-signout">
                  <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Se déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
              </ul>

            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>


  @yield('content')


  <iframe name="filepicker_comm_iframe" id="filepicker_comm_iframe" src="https://dialog.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe><iframe name="fpapi_comm_iframe" id="fpapi_comm_iframe"
  src="https://www.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe>
</body>

</html>
