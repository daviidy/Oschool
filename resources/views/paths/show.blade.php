<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$course->name}}</title>
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
    <link rel="stylesheet" href="/css/path.css">
    <link rel="stylesheet" href="/css/atom-one-dark.min.css">

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm bg-white border-bottom fixed-top">
        <ul class="navbar-nav flex-row align-items-center">
          <li class="nav-item ml-3">
            <img class="logo-short img-fluid" src="/images/schools/logos/logo_os_noir.png" alt="Oschool">
            <img class="logo img-fluid" src="/images/schools/logos/logo_oschool_noir.png" alt="Oschool">
          </li>
          <li class="d-none d-md-block nav-item mr-3 ml-3">
            <a href="#" class="nav-link">Nos écoles</a>
          </li>
          <li class="d-none d-md-block nav-item mr-3 ml-3">
            <a href="#" class="nav-link">Business</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="d-none d-md-block nav-item">
            <div class="p-2 bg-oschool text-white rounded text-center w-100">
              <a href="#" class="cta">
                Connectez-vous
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-md-none">
            <a class="nav-link dropdown-toggle" href="#" id="navbarmenu" data-toggle="dropdown">
              <i class="fas fa-bars hamburger"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>

        </ul>
      </nav>
    </header>

    <main class="container">
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-12 main-content">
          <div class="row mt-3">
            <div class="col-12">
              <h1>{{$course->name}}</h1>
            </div>
            <div class="col-12 d-md-none mt-3">
                <img class="img-fluid rounded" src="/images/courses/logos/{{$course->logo}}" alt="Course">
             </div>
            <div class="col-12 mt-3 mb-3">
                <p>{{$course->subtitle}}</p>
            </div>
          </div>
          <div class="row mt-3 border-bottom pb-4">
            <div class="col-12">
              <p><i class="fas fa-medal blue-oschool mr-3"></i>Certificat de formation reconnu</h1>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12">
              <span class="text-uppercase">Auteur</span>
              <p class="mt-4">
                  <img class="rounded-circle img-fluid user-avatar mr-3" src="https://secure.gravatar.com/avatar/9c275cba24f7c939201cda28f832f8e0?s=80" alt="User">
                  <a target="_blank" href="/authors/{{$course->author->id}}/show">David YAO</a>
              </p>
            </div>
          </div>

          <div class="row mt-5 course-characteristics">
            <div class="col-12 d-md-flex d-block justify-content-between bg-light border rounded p-3">
              @if(count($course->resources->where('type', 'course')) > 0)
              <div class="text-center mt-3 mt-md-0">
                <span class="font-weight-bold blue-oschool">{{count($course->resources->where('type', 'course'))}}</span><br>
                <span>Cours</span>
              </div>
              @endif
              @if(count($course->resources->where('type', 'project')) > 0)
              <div class="text-center mt-3 mt-md-0">
                <span class="font-weight-bold blue-oschool">{{count($course->resources->where('type', 'project'))}}</span><br>
                <span>Projet(s)</span>
              </div>
              @endif
              <div class="text-center mt-3 mt-md-0">
                <span class="font-weight-bold"><i class="fas fa-clock blue-oschool"></i></span><br>
                <span>A votre rythme</span>
              </div>
              <div class="text-center mt-3 mt-md-0">
                <span class="font-weight-bold"><i class="fas fa-cog blue-oschool"></i></span><br>
                <span>100% pratique</span>
              </div>
              <div class="text-center mt-3 mt-md-0">
                <span class="font-weight-bold"><i class="fas fa-hands-helping blue-oschool"></i></span><br>
                <span>Accompagnement</span>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-12">
              <h1 class="section-title">A propos</h1>
            </div>
          </div>

          <div class="lecture-content row mt-5">
            <div class="col-12">
              {!!$course->description!!}
            </div>
          </div>

          <div class="row mt-3 d-md-none">
            <div class="col-12">
                @auth
                <div class="pointer p-2 bg-oschool text-white rounded text-center w-100" {{!Auth::user()->courses->contains($course->id) ? 'data-toggle="modal" data-target="#courseOffer"' : ''}}>
                  <a {{Auth::user()->courses->contains($course->id) ? "href=/path/enrolled/".$course->slug : ''}}>
                      @if(Auth::user()->courses->contains($course->id))
                          Continuez la formation
                      @else
                          Accédez à la formation
                      @endif
                  </a>
                </div>
                @endauth
                @guest
                <div class="pointer p-2 bg-oschool text-white rounded text-center w-100" data-toggle="modal" data-target="#courseOffer">
                  <a>
                      Accédez à la formation
                  </a>
                </div>
                @endguest
            </div>
          </div>
          @auth
          @if(Auth::user()->courses->contains($course->id))
          <div class="row mt-3 d-md-none">
            <div class="col-12">
              <div class="p-2 bg-light border rounded text-center w-100">
                <a href="#" class="">
                  Acheter le certificat
                </a>
              </div>
            </div>
          </div>
          @endif
          @endauth

          <div class="row mt-5">
            <div class="col-12">
              <h1 class="section-title">Programme</h1>
            </div>
          </div>

          <div class="course-curriculum mt-5">
            @if(count($course->resources) > 0)
            @foreach($course->resources->sortBy('position') as $resource)
            <div class="row mt-5">
              <div class="col-12">
                <p><i class="fas fa-atom blue-oschool mr-3"></i>Module {{$loop->index + 1}}</h1>
              </div>
            </div>
            <div class="pb-4 row mt-5 bg-white p-3 border rounded module pointer">
              <div class="col-12">
                <div class="row">
                  <div class="col-md-2 d-none d-md-block">
                    <img class="img-fluid" src="{{$resource->type == 'course' ? '/images/courses/logos/'.$resource->link->logo : '/images/projects/images/'.$resource->project->image}}" alt="{{$resource->type == 'course' ? $resource->link->name : $resource->project->title}}">
                  </div>
                  <div class="col-md-10 col-12">
                    <h2>{{$resource->type == 'course' ? $resource->link->name : $resource->project->title}}</h2>
                    @if($resource->type == 'course')
                    <p>
                        {{$resource->link->subtitle}}
                    </p>
                    @endif
                  </div>
                </div>
              </div>
              <div class="col-12 text-right mt-3">
                <a href="#" class="border p-2 font-weight-bold next-link rounded">
                  Voir
                  <i class="fas fa-arrow-right ml-4"></i>
                </a>
              </div>
            </div>
            @endforeach
            @endif
          </div>


        </div>
        <div class="col-md-3 d-none d-md-block price">
          <div class="row">
            <div class="col-12">
              <img class="img-fluid rounded" src="/images/courses/logos/{{$course->logo}}" alt="Course">
            </div>
          </div>
          <div class="sticky-top">
            <div class="row mt-3">
              <div class="col-12">
                  @auth
                  <div class="pointer p-2 bg-oschool text-white rounded text-center w-100" {{!Auth::user()->courses->contains($course->id) ? 'data-toggle="modal" data-target="#courseOffer"' : ''}}>
                    <a {{Auth::user()->courses->contains($course->id) ? "href=/path/enrolled/".$course->slug : ''}}>
                        @if(Auth::user()->courses->contains($course->id))
                            Continuez la formation
                        @else
                            Accédez à la formation
                        @endif
                    </a>
                  </div>
                  @endauth
                  @guest
                  <div class="pointer p-2 bg-oschool text-white rounded text-center w-100" data-toggle="modal" data-target="#courseOffer">
                    <a>
                        Accédez à la formation
                    </a>
                  </div>
                  @endguest
              </div>
            </div>
            @auth
            @if(Auth::user()->courses->contains($course->id))
            <div class="row mt-3">
              <div class="col-12">
                <div class="p-2 bg-light border rounded text-center w-100">
                  <a href="#" class="">
                    Acheter le certificat
                  </a>
                </div>
              </div>
            </div>
            @endif
            @endauth
          </div>
        </div>
        <!--end main content-->
        <div id="overlay"></div>
      </div>
    </main>

    @include('includes.pricing')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

  </body>
</html>
