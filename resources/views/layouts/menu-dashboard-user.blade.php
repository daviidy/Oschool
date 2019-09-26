<html>

<head>
    <title>@yield('title') | Oschool</title>

    <link rel="stylesheet" href="/css/dashboard-user/menu.css">
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="ildpJPED1QZAA6S9PlLQu8LcX5Nhm1HCzRtimwNod32RzV1uu8EjrhmTwF2Q0i/FqGTOdZ35d2f4wJXvM7/gFQ==">
    <link rel="stylesheet" type="text/css" href="chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/css/emoji.css">
<meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
    <script
      src="https://www.googleadservices.com/pagead/conversion/959285871/?random=1564082424761&amp;cv=9&amp;fst=1564082424761&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=3&amp;u_tz=0&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;sendb=1&amp;frm=0&amp;url=https%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile&amp;tiba=myTeachable&amp;async=1&amp;rfmt=3&amp;fmt=4">
    </script>
    <script
      src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/959285871/?random=1564082424770&amp;cv=9&amp;fst=1564082424770&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=3&amp;u_tz=0&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;sendb=1&amp;data=location%3Dhttps%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile%3Bpath%3D%2Fsecure%2Fteachable_accounts%2Fprofile%3Bname%3DmyTeachable%3Breferrer%3D%3Bsearch%3D%3Btitle%3DmyTeachable%3Burl%3Dhttps%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile&amp;frm=0&amp;url=https%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile&amp;tiba=myTeachable&amp;async=1&amp;rfmt=3&amp;fmt=4">
    </script>
    <script
      src="https://www.googleadservices.com/pagead/conversion/959285871/?random=1564082424774&amp;cv=9&amp;fst=1564082424774&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=3&amp;u_tz=0&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;sendb=1&amp;frm=0&amp;url=https%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile&amp;tiba=myTeachable&amp;async=1&amp;rfmt=3&amp;fmt=4">
    </script>
    <script
      src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/959285871/?random=1564082424779&amp;cv=9&amp;fst=1564082424779&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=3&amp;u_tz=0&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;sendb=1&amp;data=path%3D%2Fsecure%2Fteachable_accounts%2Fprofile%3Breferrer%3D%3Bsearch%3D%3Btitle%3DmyTeachable%3Burl%3Dhttps%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile&amp;frm=0&amp;url=https%3A%2F%2Fsso.teachable.com%2Fsecure%2Fteachable_accounts%2Fprofile&amp;tiba=myTeachable&amp;async=1&amp;rfmt=3&amp;fmt=4">
    </script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


</head>

<body class="my-teachable-layout" cz-shortcut-listen="true">
    <div class="container-fluid">
        @if (session('status'))
        <div class="alert-header">
            <div class="center-container green bolded">
                <center>{{session('status')}}</center>
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
                        <ul class="nav navbar-nav">
                            <li class="nav-item-profile selected">
                                <a href="{{route('schools.index')}}">Mes écoles</a>
                            </li>
                            <li class="nav-item-create">
                                <a href="{{route('schools.create')}}">Créer une nouvelle école</a>
                            </li>
                            <li class="nav-item-settings">
                                <a href="http://sso.teachable.com/secure/teachable_accounts/profile/edit">Mes paramètres</a>
                            </li>
                            <li class="nav-item-billing">
                                <a href="http://sso.teachable.com/secure/teachable_accounts/billing">Facturation</a>
                            </li>
                            <li class="nav-item-help">
                                <a id="my_teachable_help_form" href="http://sso.teachable.com/secure/teachable_accounts/tickets/new">Aidez-moi</a>
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
                    <a class="mobile-settings" href="http://sso.teachable.com/secure/teachable_accounts/profile/edit"><img src="https://assets.teachablecdn.com/icons/icon-settings-white.svg" alt="Icon settings white"></a>
                    <a class="logo-wrapper" href="/"><img class="logo" src="/images/schools/logos/oschool_2.png" alt="Oschool badge"></a>
                    <div class="user-info">
                        <a href="http://sso.teachable.com/secure/teachable_accounts/profile/edit"><img width="100" height="100" class="avatar" src="https://s.gravatar.com/avatar/9c275cba24f7c939201cda28f832f8e0?d=mm"
                              alt="9c275cba24f7c939201cda28f832f8e0?d=mm"></a>
                        <h2>David Yao</h2>
                        <p>yaodavidarmel@gmail.com</p>
                        <a class="mobile-logout" href="http://sso.teachable.com/secure/teachable_accounts/sign_out">Log Out</a>
                    </div>
                </div>
                <!--laptop menu view-->
                <ul class="nav nav-sidebar">
                    <li class="nav-item-profile selected">
                        <a href="/home">Mes écoles</a>
                    </li>
                    @if(Auth::user()->isAdmin() || Auth::user()->isOwner())
                    <li class="nav-item-create">
                        <a href="{{route('schools.create')}}">Créer une nouvelle école</a>
                    </li>
                    @endif
                    <li class="nav-item-settings">
                        <a href="http://sso.teachable.com/secure/teachable_accounts/profile/edit">Mes paramètres</a>
                    </li>
                    <li class="nav-item-billing">
                        <a href="http://sso.teachable.com/secure/teachable_accounts/billing">Facturation</a>
                    </li>
                    <li class="nav-item-help">
                        <a id="my_teachable_help_form" href="http://sso.teachable.com/secure/teachable_accounts/tickets/new">Aidez-moi</a>
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
