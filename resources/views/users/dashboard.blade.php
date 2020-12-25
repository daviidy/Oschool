@extends('layouts.menuDashboard-users')
@section('title', 'Historique des paiements')

@section('content')
<div class="col-md-9 bg-page main-content">
  <div class="bg-white my-5 shadow" id="btnActive">
    <ul class="border-0 list-group list-group-horizontal-md nav-tabs align-items-center" id="myTab" role="tablist">
      <li class="border-0 list-group-item nav-item py-1" role="presentation">
        <a class="pb-3 px-0 border-0 h3 font-weight-bold active1 nav-link active" id="noscours-tab" data-toggle="tab" href="#noscours" role="tab" aria-controls="noscours" aria-selected="true">
          Mes cours
        </a>
      </li>
      <li class="border-0 list-group-item nav-item py-1" role="presentation">
        <a class="nav-link pb-3 px-0 border-0 h3 font-weight-bold " id="nosparcours-tab" data-toggle="tab" href="#nosparcours" role="tab" aria-controls="nosparcours" aria-selected="false">Mes parcours</a>
      </li>
      <!--si user possede ecole-->
      <li class="border-0 list-group-item nav-item py-1">
        <a class="nav-link pb-3 px-0 border-0 h3 font-weight-bold " id="mySchool-tab" data-toggle="tab" href="#mySchool" role="tab" aria-controls="mySchool" aria-selected="false">Mes écoles</a>
      </li>
      <!--end user possede ecole-->
    </ul>
  </div>
  <!-- Tab panes -->

  <div class="tab-content" id="myTabContent">
    <!-- Courses -->
    <div class="tab-pane fade show active" id="noscours" role="tabpanel" aria-labelledby="noscours-tab">
      <div class="row">
      <div class="col-md-4 py-3 filter">
        <div class="p-0 shadow course-border bg-white">
          <a href="#" class="text-decoration-none">
            <div class=" p-2">
              <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('https://oschoolelearning.com/images/courses/logos/1574951217.png')">
              </div>
            </div>
            <div class="">
              <h5 class="p-4 font-weight-bold h6">Marketing</h5>
            </div>
          </a>
        </div>
      </div>

      </div>
    </div>

    <!-- Paths -->
    <div class="tab-pane fade" id="nosparcours" role="tabpanel" aria-labelledby="nosparcours-tab">
      <div class="row">
      <div class="col-md-4 py-3 filter">
        <div class="p-0 bg-white shadow course-border">
          <a href="#" class="text-decoration-none">
            <div class=" p-2">
              <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('https://oschoolelearning.com/images/courses/logos/1574951567.png')">
              </div>
            </div>
            <div class="">
              <h5 class="p-4 font-weight-bold h6">Marketing2</h5>
            </div>
          </a>
        </div>
      </div>
      </div>
    </div>
    <!-- Mes écoles -->
    <div class="tab-pane fade" id="mySchool" role="tabpanel" aria-labelledby="mySchool-tab">
      <div class="row">
      <div class="col-md-4 py-3 filter">
        <div class="p-0 shadow course-border bg-white">
          <a href="#" class="text-decoration-none">
            <div class=" p-2">
              <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('https://oschoolelearning.com/images/courses/logos/1574951217.png')">
              </div>
            </div>
            <div class="">
              <h5 class="p-4 font-weight-bold h6">Marketing</h5>
              <p class="p-4">Comment prendre en main votre plateforme de formation avec Oschool ?</p>
            </div>
          </a>
        </div>
      </div>

      </div>
    </div>
  </div>

</div>
</div>
</div>
</section>
@endsection
