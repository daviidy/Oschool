<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/css/dashboard-user/master.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d86848cfe0.js"></script>
  <style media="screen">
    .active1 {
      border-bottom: 2px solid #4d90cc !important;
      color: #4d90cc !important;
    }
  </style>
</head>

<body class="bg-page">
  <section>
    <header class="bg-oschool">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-brand" href="#">
          <i class="fas fa-bars hamburger text-white"></i>
          <a href="#">
            <img class="logo img-fluid" src="../assets/images/logo-oschool-noir.png" alt="">
          </a>
        </div>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mx-md-auto align-items-md-center">
            <li class="nav-item px-md-4 active">
              <a class="nav-link font-weight-bold text-white" href="#">Nos écoles<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-md-4 active">
              <a class="nav-link font-weight-bold text-white" href="#">Business</a>
            </li>
            <li class="nav-item px-md-4 active">
              <a class="nav-link font-weight-bold text-white" href="#">Tous les cours</a>
            </li>
          </ul>
          <div class="dropdown">
            <a class="dropdown-toggle" href="#" id="navbardr" data-toggle="dropdown">
              <img class="rounded-circle img-fluid user-avatar" src="https://oschoolelearning.com/images/users/default/1578057364.png" alt="User" width="50" height="50">
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Tableau de bord</a>
              <a class="dropdown-item" href="#"> Déconnexion</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </section>

  <section class="bg-main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3 d-none side-menu d-md-block p-0">
          <div class="bg-white p-3">
            <div>
              <ul class="list-group align-items-center">
                <li class="list-group-item border list-group-item p-1 rounded-circle">
                  <img class="rounded-circle img-fluid user-avatar" src="https://oschoolelearning.com/images/users/default/1578057364.png" alt="User" width="100" height="100">
                </li>
                <li class="list-group-item border-0 py-1">Arsene Kouassi aouman</li>
                <li class="list-group-item border-0 py-1">Arsene@gmail.com</li>
              </ul>
            </div>

            <div class="my-md-5">
              <div>
                <ul class="list-group menu">
                  <li class="list-group-item border-0 px-2 py-md-3 py-md-3">
                    <a href="#" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                      </span>
                      TABLEAU DE BORD ADMIN
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="dashboard.html" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3"><i class="far fa-building"></i></span>
                      MES ÉCOLES
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="create.html" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                          <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                      </span>
                      CRÉER UNE NOUVELLE ÉCOLE / CLASSE
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="messessions.html" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3">
                        <i class="fas fa-award"></i>
                      </span>
                      MES SESSIONS
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="notification.html" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3"><i class="far fa-bell"></i></span>
                      MES NOTIFICATIONS
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="parametre.html" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                          <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                        </svg>
                      </span>
                      MES PARAMÈTRES
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="facturation.html" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3"><i class="fas fa-funnel-dollar"></i></span>
                      FACTURATION
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="#" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M14.43 10.772l-2.788-1.115a4.015 4.015 0 0 1-1.985 1.985l1.115 2.788a7.025 7.025 0 0 0 3.658-3.658zM5.228 14.43l1.115-2.788a4.015 4.015 0 0 1-1.985-1.985L1.57 10.772a7.025 7.025 0 0 0 3.658 3.658zm9.202-9.202a7.025 7.025 0 0 0-3.658-3.658L9.657 4.358a4.015 4.015 0 0 1 1.985 1.985l2.788-1.115zm-8.087-.87L5.228 1.57A7.025 7.025 0 0 0 1.57 5.228l2.788 1.115a4.015 4.015 0 0 1 1.985-1.985zM8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-5a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                      </span>
                      AIDEZ-MOI
                    </a>
                  </li>
                  <li class="list-group-item border-0 px-2 py-md-3">
                    <a href="#" class="text-decoration-none align-items-center justify-content-between">
                      <span class="pr-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                      </span>
                      SE DÉCONNECTER
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        @yield('content')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script>
          $('.hamburger').click(function() {
            if ($(window).width() < 600) {
              $('.side-menu').toggleClass('col-3');
              $('.side-menu').toggleClass('d-none');
              $('.side-menu').toggleClass('col-12');
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
        <script type="text/javascript">
          const currentLocation =location.href;
          const menuItem = document.querySelectorAll('a');
          const menuLength = menuItem.length
          for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
              menuItem[i].className = "activation"
            }
          }
        </script>
      </body>

      </html>
