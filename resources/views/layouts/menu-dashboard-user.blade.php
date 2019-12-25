<html>

<head>
    <title>@yield('title') | Oschool</title>
    <meta name="og:image" content="/images/divers/user.jpg"/>
    <link rel="icon" href="/images/schools/logos/image-profil.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="/css/dashboard-user/menu.css">
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="ildpJPED1QZAA6S9PlLQu8LcX5Nhm1HCzRtimwNod32RzV1uu8EjrhmTwF2Q0i/FqGTOdZ35d2f4wJXvM7/gFQ==">
    <link rel="stylesheet" type="text/css" href="chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/css/emoji.css">


    <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script> "use strict"; !function() { var t = window.driftt = window.drift = window.driftt || []; if (!t.init) { if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice.")); t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n = Array.prototype.slice.call(arguments); return n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) { t[e] = t.factory(e); }), t.load = function(t) { var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(o, i); }; } }(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('2uy6g3spxi59');
</script>

</head>

<body style="overflow-x: hidden;" class="my-teachable-layout" cz-shortcut-listen="true">
    <div class="container-fluid">
        @if (session('status'))
        <div class="alert-header">
            <div class="center-container green bolded">
                <center>{{session('status') == "Your password has been reset!" ? "Votre mot de passe a été réinitialisé!" : session('status')}}</center>
            </div>
        </div>
        @endif



        <div class="row">
            <div class="sidebar">
                <div class="profile-card">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="mobile-navbar navbar-collapse collapse">
                        <!--menu for smartphone view-->
                        <ul class="nav navbar-nav">
                            @if(Auth::user()->isAdmin())
                            <li class="nav-item-dashboard">
                                <a href="/user/admin">Tableau de bord admin</a>
                            </li>
                            @endif
                            <li class="nav-item-profile selected">
                                <a href="/home">Mes écoles</a>
                            </li>
                            @if(Auth::user()->isAdmin() || Auth::user()->isOwner())
                            <li class="nav-item-create">
                                <a href="{{route('schools.create')}}">Créer une nouvelle école / classe</a>
                            </li>
                            @endif
                            <li class="nav-item-settings">
                                <a href="/users/settings">Mes paramètres</a>
                            </li>
                            <li class="nav-item-billing">
                                <a href="/users/billings">Facturation</a>
                            </li>
                            <li class="nav-item-help">
                                <a id="my_teachable_help_form" href="https://support.oschoolelearning.com/">Aidez-moi</a>
                            </li>
                            <li class="nav-item-logout">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Se déconnecter</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </li>

                        </ul>
                    </div>
                    <a class="mobile-settings" href="/users/settings">
                        <img src="https://assets.teachablecdn.com/icons/icon-settings-white.svg" alt="Icon settings white"></a>
                    <a class="logo-wrapper" href="/"><img class="logo" src="/images/schools/logos/oschool_2.png" alt="Oschool logo"></a>
                    <div class="user-info">
                        <a href="/users/settings"><img width="100" height="100" class="avatar" src="/images/users/default/{{Auth::user()->image}}"
                              alt="9c275cba24f7c939201cda28f832f8e0?d=mm"></a>
                        <h2>{{ucfirst(Auth::user()->name)}}</h2>
                        <p>{{Auth::user()->email}}</p>
                        <a class="mobile-logout"
                            href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Se déconnecter</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                </div>
                <!--laptop menu view-->
                <ul class="nav nav-sidebar">
                    @if(Auth::user()->isAdmin())
                    <li class="nav-item-dashboard">
                        <a href="/user/admin">Tableau de bord admin</a>
                    </li>
                    @endif
                    <li class="nav-item-profile selected">
                        <a href="/home">Mes écoles</a>
                    </li>
                    @if(Auth::user()->isAdmin() || Auth::user()->isOwner())
                    <li class="nav-item-create">
                        <a href="{{route('schools.create')}}">Créer une nouvelle école / classe</a>
                    </li>
                    @endif
                    <li class="nav-item-settings selected">
                        <a href="/users/settings">Mes paramètres</a>
                    </li>
                    <li class="nav-item-billing selected">
                        <a href="/users/billings">Facturation</a>
                    </li>
                    <li class="nav-item-help selected">
                        <a id="my_teachable_help_form" href="https://support.oschoolelearning.com">Aidez-moi</a>
                    </li>
                    <li class="nav-item-logout selected">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Se déconnecter</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>

                </ul>
            </div>

            <script>
            $('.navbar-toggle').click(function(e){
                e.preventDefault();
                $('.navbar-collapse').slideToggle();
                $(this).toggleClass('active');
              });
            </script>

            @yield('content')

        </div>





    </div>
    <div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.6925791266627341"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.18137547485626215" width="0" height="0" alt=""
          src="https://bat.bing.com/action/0?ti=5153227&amp;Ver=2&amp;mid=0a40becb-cc7e-0355-705c-c02f217c5d44&amp;pi=1200101525&amp;lg=fr-CI&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=myTeachable&amp;p=https%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile&amp;r=&amp;lt=2029&amp;evt=pageLoad&amp;msclkid=N&amp;rn=441011">
    </div>
</body>

</html>
