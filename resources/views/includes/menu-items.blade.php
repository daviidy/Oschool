<!-- hamburger icon -->
<li class="nav-item dropdown d-md-none">
  <a class="nav-link dropdown-toggle" href="#" id="navbarmenu" data-toggle="dropdown">
    <i class="fas fa-bars hamburger"></i>
  </a>
  <div class="dropdown-menu" style="left: 0;">
    @if($school->user->type1 == 'admin')
    <a class="dropdown-item" href="/schools">Nos écoles</a>
    <a class="dropdown-item" href="/corporate">Business</a>
    @endif
    @auth
    @if(Auth::user()->createSchools->contains($school->id) || Auth::user()->adminSchools->contains($school->id))
      <a class="dropdown-item" href="{{ route('website.subdomain', ['school' => $school->id, 'subdomain' => $school->slug]) }}">
          Admin
      </a>
    @endif
    @if(Auth::user()->isOwner() && Auth::user()->createSchools->contains($school->id))
      <a class="dropdown-item" href="{{ route('website.subdomain.previewIn', ['school' => $school->id, 'subdomain' => $school->slug]) }}">
          Aperçu inscrit
      </a>
      <a class="dropdown-item" href="{{ route('website.subdomain.previewOut', ['school' => $school->id, 'subdomain' => $school->slug]) }}">
          Aperçu visiteur
      </a>
    @elseif(Auth::user()->isAdmin() && Auth::user()->createSchools->contains($school->id))
      <a class="dropdown-item" href="{{url('schoolAdmin', $school)}}">
          Aperçu inscrit
      </a>
      <a class="dropdown-item" href="{{url('schoolAdmin', $school)}}">
          Aperçu visiteur
      </a>
    @endif
    @endauth
      <a class="dropdown-item" href="/schools/{{$school->id}}/courses">
          Tous les cours
      </a>
  </div>

</li>
<!-- end hamburger icon -->

<li class="nav-item ml-3">
  @if($school->user->type3 == 'owner')
   @if($school->logo == 'image.jpg')
  <a href="{{ route('website.subdomain.home', ['subdomain' => $school->slug]) }}">
    {{$school->name}}
  </a>
  @else
  <a href="{{ route('website.subdomain.home', ['subdomain' => $school->slug]) }}">
      <img class="img-fluid" style="width: {{$school->color->logo_width}}%;" src="/images/schools/logos/{{$school->logo}}" alt="{{$school->name}}">
  </a>
  @endif
  @else
    @include('includes.logo')
  @endif

</li>
@auth
@if(Auth::user()->createSchools->contains($school->id) || Auth::user()->adminSchools->contains($school->id))
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="{{ route('website.subdomain', ['school' => $school->id, 'subdomain' => $school->slug]) }}" class="nav-link">
    Admin
</a>
</li>
@endif
@if(Auth::user()->isOwner() && Auth::user()->createSchools->contains($school->id))
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="{{ route('website.subdomain.previewIn', ['school' => $school->id, 'subdomain' => $school->slug]) }}" class="nav-link">
    Aperçu inscrit
</a>
</li>
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="{{ route('website.subdomain.previewOut', ['school' => $school->id, 'subdomain' => $school->slug]) }}" class="nav-link">
    Aperçu visiteur
</a>
</li>
@elseif(Auth::user()->isAdmin() && Auth::user()->createSchools->contains($school->id))
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="{{url('schoolAdmin', $school)}}" class="nav-link">
    Aperçu inscrit
</a>
</li>
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="{{url('schoolAdmin', $school)}}" class="nav-link">
    Aperçu visiteur
</a>
</li>
@endif
@endauth
@if($school->user->type1 == 'admin')
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="/schools" class="nav-link">Nos écoles</a>
</li>
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="/corporate" class="nav-link">Business</a>
</li>
@endif
<li class="d-none d-md-block nav-item mr-3 ml-3">
<a href="/schools/{{$school->id}}/courses" class="nav-link">
    Tous les cours
</a>
</li>
