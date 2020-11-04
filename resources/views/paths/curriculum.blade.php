<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lecture</title>
  <link rel="icon" href="">
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
  <link rel="stylesheet" href="/css/path_curriculum.css">

</head>

<body class="bg-code-signal">
  <header>
    <nav class="navbar navbar-expand-sm bg-white border-bottom fixed-top">
      <ul class="navbar-nav flex-row align-items-center">
          <li class="nav-item ml-3">
            <img class="logo-short img-fluid" src="/images/schools/logos/logo_os_noir.png" alt="Oschool">
            <img class="logo img-fluid" src="/images/schools/logos/logo_oschool_noir.png" alt="Oschool">
          </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            <img class="rounded-circle img-fluid user-avatar" src="https://secure.gravatar.com/avatar/9c275cba24f7c939201cda28f832f8e0?s=80" alt="User">
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

  <main class="container text-white">
    <div class="row">
      <!--main content-->
      <div class="col-md-12 main-content">
        <div class="row mt-3">
          <div class="col-12 text-center mt-3">
            <h1>{{$course->name}}</h1>
          </div>
        </div>

        <div class="row mt-3 text-center">
          <div class="col-12">
            <p>{{$course->subtitle}}</h1>
          </div>

        </div>

        <div class="progression row mt-5 mb-5">
          <div class="col-6">
            <span class="">
              75% completed, meet the criteria and claim your course certificate!
            </span>
            <div class="progress blue-oschool mt-3" style="height:10px">
              <div class="progress-bar bg-oschool" style="width:40%;height:10px"></div>
            </div>
          </div>
          <div class="col-6 text-center text-md-right">
            <a href="#" class="p-2 bg-oschool text-white rounded ">
              Certificat
            </a>
          </div>
        </div>

        <div class="path-map">
          @if(count($course->resources) > 0)
          @foreach($course->resources->sortBy('position') as $resource)
          <div class="row mt-5 rounded-top">
            <div class="col-12 resource-image text-center" style="background-image: url({{$resource->type == 'course' ? '/images/courses/logos/'.$resource->link->logo : '/images/projects/images/'.$resource->project->image}});">
              <h2 class="text-dark bg-white pr-3 pl-3 path-title w-50 ml-auto mr-auto">
                {{$resource->type == 'course' ? $resource->link->name : $resource->project->title}}
                <i class="fas fa-check-circle green ml-3"></i>
              </h2>
            </div>
            <div class="col-12 bg-white text-center p-3 rounded-bottom">
             @if($resource->type == 'course')
              <a href="#" class="p-2 bg-oschool text-white rounded">
                Accéder au cours
              </a>
             @endif
             @if($resource->type == 'project')
              <a href="#" class="p-2 bg-oschool text-white rounded">
                Accéder au projet
              </a>
             @endif
            </div>
          </div>
          @endforeach
          @endif
        </div>

      </div>
      <!--end main content-->
      <div id="overlay"></div>
    </div>
  </main>


</body>

</html>
