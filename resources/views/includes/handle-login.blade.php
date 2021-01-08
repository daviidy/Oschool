@guest
<li class="nav-item">
  <div class="p-2 bg-oschool text-white rounded text-center w-100 div-login">
    <a href="#" class="login" data-toggle="modal" data-target="#loginModal">
      Connectez-vous
    </a>
  </div>
</li>
@endguest
@auth
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
    <img class="rounded-circle img-fluid user-avatar" src="/images/users/default/{{Auth::user()->image}}" alt="{{Auth::user()->name}}">
  </a>
  <div class="dropdown-menu">
    <a class="dropdown-item pl-3" href="/home">
        <i style="font-size: 13px;" class="fas fa-house-user"></i>
        Tableau de bord
    </a>
    <a class="dropdow-item pl-3" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i style="font-size: 13px;" class="fas fa-sign-out-alt"></i>
                  Se déconnecter
              </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
  </div>
</li>
@endauth

<style media="screen">
    @media screen and (max-width: 600px){
        .navbar .navbar-nav:nth-child(1) {
            width: 55%;
        }
    }
</style>
@include('includes.auths.register')
