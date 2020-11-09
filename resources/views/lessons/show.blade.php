<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
   <meta name="csrf-token" content="{!! csrf_token() !!}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lecture</title>
  <!--link rel="icon" href="#"-->
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
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/atom-one-dark.min.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm bg-white border-bottom fixed-top">
      <ul class="navbar-nav flex-row align-items-center">
        <li class="nav-item">
          <a href="#">
            <i class="fas fa-bars hamburger"></i>
          </a>
        </li>
        <li class="nav-item ml-3">
          <img class="logo-short img-fluid" src="/assets/images/logo-os-noir.png" alt="Logo">
          <img class="logo" src="/assets/images/logo-oschool-noir.png" alt="">
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

  <main class="container-fluid">
    <div class="row">
      <!--progression-->
      <div class="col-3 bg-light d-none side-menu d-md-block">
        <div class="back-home p-2 border-bottom">
          <h6>
            <a class="/course/{{$lesson->course->slug}}" href=""><i class="fas fa-arrow-left mr-3"></i>Retour à l'accueil du cours</a>
          </h6>
        </div>
        <h4 class="mt-3 mb-3">{{$lesson->course->name}}</h4>
        <span class="">
          {{number_format((count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100)}}% achevés
        </span>
        <div class="progress blue-oschool mt-3" style="height:10px">
          <div class="progress-bar bg-oschool" style="width:{{(count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100}}%;height:10px"></div>
        </div>
        <div class="curriculum mt-5">
          @if($lesson->course->sections)
          @foreach($lesson->course->sections->sortBy('position') as $section)
          <div class="pointer section d-flex mb-3 mt-5" data-toggle="collapse" data-target="#lessonsList{{$section->id}}">
            <h5>{{$section->title}}</h5>
            <i class="fas fa-angle-up ml-3"></i>
          </div>
          <div id="lessonsList{{$section->id}}">
             @if($section->lessons)
             @foreach($section->lessons->sortBy('position') as $section_lesson)
             @if($section_lesson->status == 'active')
            <div class="lessons d-flex pt-0 pb-0">
                @if($loop->first)
              <i class="{{Auth::user()->lessons->contains($section_lesson->id) ? 'fas' : 'far'}} fa-circle mr-2 {{Auth::user()->lessons->contains($section_lesson->id) ? 'green' : 'bg-light'}} position-absolute first"></i>
                @elseif($loop->last)
              <i class="{{Auth::user()->lessons->contains($section_lesson->id) ? 'fas' : 'far'}} fa-circle mr-2 {{Auth::user()->lessons->contains($section_lesson->id) ? 'green' : 'bg-light'}} position-absolute last"></i>
                @else
              <i class="{{Auth::user()->lessons->contains($section_lesson->id) ? 'fas' : 'far'}} fa-circle mr-2 {{Auth::user()->lessons->contains($section_lesson->id) ? 'green' : 'bg-light'}} position-absolute other"></i>
                @endif
              <div class="single-lesson pl-4">
                <a href="#">{{$section_lesson->title ? $section_lesson->title : 'Nouvelle leçon'}}</a>
              </div>
            </div>
            @endif
            @endforeach
            @endif

          </div>
          @endforeach
          @endif
          <!-- <div class="course-completion mt-5 mb-5 border p-2 rounded text-center">
            <a href="#" class="">
              Mark course as completed
            </a>
          </div> -->
        </div>

      </div>
      <!--end progression-->
      <!--main content-->
      <div class="col-md-9 main-content">
        @if(session('status'))
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success" role="alert">
              {{session('status')}}
            </div>
          </div>
        </div>
        @endif

        <div class="row mt-3">
          <div class="col-12">
            <h1>{{$lesson->title}}</h1>
          </div>
        </div>
        <div class="row mt-3">
          <!-- <div class="col-12">
            <p>An introduction to Nil, True and False objects.</p>
          </div> -->
          @if(count($lesson->section->course->school->communities) > 0)
          <div class="col-12 mt-4">
            <a href="{{$lesson->section->course->school->communities->first()->link}}" target="_blank" class="p-2 bg-oschool text-white rounded">
              Communauté
            </a>
          </div>
          @endif
        </div>
        <!-- <div class="row mt-3">
          <div class="col-12 col-md-10 summary">
            <h6 class="pointer bg-light border title-summary mb-0" data-toggle="collapse" data-target="#summaryCollapse">We'll cover the following <i class="fas fa-angle-down ml-3"></i></h6>
            <ul class="bg-light title-summary" id="summaryCollapse">
              <li class="list-summary">
                <a href="#">Nil</a>
              </li>
              <li class="list-summary">
                <a href="#">True and False</a>
                <ul class="pl-4">
                  <li class="list-summary">
                    <a href="#">They are classes</a>
                  </li>
                </ul>
              </li>
              <li class="list-summary">
                <a href="#">
                  Truthiness and Falsiness
                </a>
              </li>
            </ul>
          </div>
        </div> -->

        @if(count($lesson->medias) > 0)
        <!--Ressource téléchargeable-->
        <h2>Ressources à télécharger</h2>
        @foreach($lesson->medias as $media)
        <div class="row mt-3 p-3">
          <div class=" col-md-12">
            <!--Contenu Ressource téléchargeable-->
            <div class="row bg-dark rounded mt-3">
              <div class="col-md-2 d-md-block d-none">
                <div class="p-1 p-md-3">
                  <img src="/assets/images/resource_icon.png" alt="" class="mx-auto w-75 img-fluid">
                </div>
              </div>
              <div class="col-md-7 flex-grow p-md-3">
                <div class="p-1 p-md-3">
                  <p class="text-white font-bold m-3">{{$media->name}}</p>
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="p-1 p-md-3">
                  <a href="/images/lessons/resources/{{$media->name}}" download class="btn bg-oschool rounded-pill m-3 text-white">Télécharger</a>
                </div>
              </div>
            </div>
            <!--End Contenu Ressource téléchargeable-->
          </div>
        </div>
        <!--end Ressource téléchargeable-->
        @endforeach
        @endif

        @if($lesson->section->drip && $status == '0')
        <div class="row mt-3 p-3">
          <div class=" col-md-12 border rounded p-5 text-center">
            <img class="img-fluid mt-3 ml-auto mr-auto d-block" src="/assets/images/wait.png" alt="Wait">
            <p class="mt-3">
                @if($lesson->section->drip->date)
                Ce cours sera disponible le {{Carbon\Carbon::parse($lesson->section->drip->date)->format('d-m-Y')}}
                @elseif($lesson->section->drip->days)
                Ce cours sera disponible dans {{$days}} jours
                @endif
            </p>
            <p>Un peu de patience ;)</p>
          </div>
        </div>
        @elseif($lesson->free_lesson == 'no' && !Auth::user()->courses->contains($lesson->section->course->id) && !$lesson->section->course->school->user->isOwner() && !Auth::user()->isAdmin() && !Auth::user()->createSchools->contains($lesson->section->course->school->id))
        <div class="row mt-3 p-3">
          <div class=" col-md-12 border rounded p-5 text-center">
            <img class="img-fluid mt-3 ml-auto mr-auto d-block" src="/assets/images/wait.png" alt="Wait">
            <p class="mt-3">
                Veullez vous inscrire à ce cours pour suivre
                cette leçon
            </p>
          </div>
        </div>
        @else

        <div class="lecture-content row mt-5">
          <div class="col-12">
            {!!$lesson->video!!}

            @if($lesson->webinar_meeting !== null)
            <div class="row mt-3 mb-3">
              <div class="col-md-12">
                <a href="{{$lesson->zoom_url ? $lesson->zoom_url : $lesson->webinar_meeting}}" target="_blank" class="">
                  <div class="p-4 shadow os-hover">
                    <div class="text-center">
                      <span class="">
                        <svg width="5.5em" height="5.5em" viewBox="0 0 16 16" class="bi bi-chat-right-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M2 1h12a1 1 0 0 1 1 1v11.586l-2-2A2 2 0 0 0 11.586 11H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
                          <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                      </span>
                    </div>
                    <div class="p-2">
                      <p class="h4 p-3 text-center font-weight-bold">Une formation en téléprésentiel a été prévue pour cette leçon. Cliquez ici pour y participer</p>
                    </div>
                  </div>
                </a>

              </div>
            </div>
            @endif

            {!!$lesson->full_text!!}

            @if($lesson->quizzes)
            @include('includes.default.lessons_page.quiz')
            @endif


          </div>
        </div>

        @endif


        <div class="lecture-actions row mt-5">
          <div class="col-6">
            <a href="#" class="border p-2 font-weight-bold rounded">
              <i class="fas fa-arrow-left mr-4"></i>
              Back
            </a>
            <div class="previous">
              <span>Conditionals Return Values</span>
            </div>
          </div>
          <div class="col-6 text-right">
            <a href="#" class="border p-2 font-weight-bold next-link rounded">
              Next
              <i class="fas fa-arrow-right ml-4"></i>
            </a>
            <div class="next ml-auto">
              <span>Conditionals Return Values</span>
            </div>
          </div>
        </div>

        <div class="progression row mt-5 mb-5">
          <div class="col-8">
            <span class="">
              75% completed, meet the criteria and claim your course certificate!
            </span>
            <div class="progress blue-oschool mt-3" style="height:10px">
              <div class="progress-bar bg-oschool" style="width:40%;height:10px"></div>
            </div>
          </div>
          <div class="col-4 text-center text-md-right">
            <a href="/certificate/{{$lesson->course_id}}" class="p-2 bg-oschool text-white rounded ">
              Certificat
            </a>
          </div>
        </div>
      </div>
      <!--end main content-->
      <div id="overlay"></div>
    </div>
  </main>
  <footer class="container-fluid mt-3">
    <div class="row position-relative" style="top:55px">
      <div class="col-md-2 d-none d-md-block"></div>
      <div class=" col-md-8 col-12">
        <div class="p-5 d-flex rounded-lg bg-oschool row">
          <div class="d-flex col-md-4">
            <span class="p-3">
              <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-telephone-fill text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
              </svg>
            </span>
            <div class="p-2">
              <p class="pb-2 text-white">Contactez-nous</p>
              <p class="text-white font-weight-bold"> +225 89078025</p>
            </div>

          </div>
          <div class="d-flex col-md-4">
            <span class="p-3">
              <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-envelope-fill text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
              </svg>
            </span>
            <div class="p-2">
              <p class="pb-2 text-white">E-mail</p>
              <p class="text-white font-weight-bold">info@oschool.ci</p>
            </div>
          </div>
          <div class="d-flex col-md-4">
            <span class="p-3">
              <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg>
            </span>
            <div class="p-2">
              <p class="pb-2 text-white">Contactez-nous</p>
              <p class="text-white font-weight-bold"> +225 89078025</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row bg-oschool-footer py-4">
      <div class="col-md-12 mt-5 pt-3">
        <div class="row">
          <div class="col-md-2 d-non d-md-block"></div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-4">
                <div class="p-2">
                  <img src="/assets/images/logo-oschool-noir.png" width="150" alt="" class="img-fluid">
                  <p class="mb-3 text-justify">Oschool vous offre la possibilité de poursuivre des diplômes et certificats 100% en ligne, auprès des meilleures universités d’Afrique.</p>
                </div>
              </div>
              <div class="col-md-3">
                <h5 class="pl-4 pt-4 font-weight-bold">Oschool</h5>
                <div class="mt-4">
                  <ul class="list-group border-0">
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">Devenez formateur</a></li>
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">FAQ</a></li>
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">Qui sommes nous?</a></li>
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">La communauté</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <h5 class="pl-4 pt-4 font-weight-bold">Plus</h5>
                <div class="mt-4">
                  <ul class="list-group border-0">
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">Conditions</a></li>
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">Confidentialité</a></li>
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">Contactez-nous</a></li>
                    <li class="list-group-item border-0 bg-transparent font-weight-light"><a href="#">Blog</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2">
                <h5 class="pl-4 pt-4 font-weight-bold">Réseaux sociaux</h5>
                <div class="mt-4">
                  <ul class="list border-0">
                    <li class="list-group-item border-0 bg-transparent p-2 blue-oschool"><a href="https://www.facebook.com/Oschool.ci/"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-group-item border-0 bg-transparent p-2 blue-oschool"><a href="https://twitter.com/OschoolLearning"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-group-item border-0 bg-transparent p-2 blue-oschool"><a href="https://www.linkedin.com/school/11128322"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-group-item border-0 bg-transparent p-2 blue-oschool"><a href="https://www.instagram.com/oschool_e_learning/"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <hr class="border">
            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-light">© <span id="year">2010</span> OSCHOOL. TOUS DROITS RÉSERVÉS.</p>
              </div>
              <div class="col-md-6">

              </div>
            </div>
          </div>
          <div class="col-md-2 d-non d-md-block"></div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/highlight.min.js"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
  <!--COPYRIGTH SCRIPT-->
      <script type="text/javascript">
          var date = new Date();
          var annee = date.getFullYear();
          document.getElementById('year').innerHTML = annee;
      </script>

  <script>
    $('.hamburger').click(function() {
      if ($(window).width() < 600) {
        $('.side-menu').toggleClass('col-3');
        $('.side-menu').toggleClass('d-none');
        $('.side-menu').toggleClass('col-8');
        $('.side-menu').toggleClass('d-block');
        $('.main-content').toggleClass('d-none');
        $('#overlay').fadeToggle(300);
      } else {
        $('.side-menu').toggleClass('d-md-block');
        $('.main-content').toggleClass('col-md-9');
        $('.main-content').toggleClass('col-md-12');
        $('main').toggleClass('container-fluid');
        $('main').toggleClass('container');
      }
    });
  </script>
</body>

</html>
