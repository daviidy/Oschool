@extends('layouts.menu-school')
@section('image', '/images/schools/logos/'.$school->logo)
@section('title', $school->name)
@section('description', $school->description)

@section('content')

@include('includes.branding')

    <section class="container-fluid">
      <div class="row">
        <div class="col-md-12 px-0">
          <div class="" style="background: url('/images/schools/backgrounds/{{$school->background}}') center no-repeat; background-size: cover; height: 500px;">
            <!-- <img src="/assets/images/oschool-slide2.jpg" alt="" class="w-100 d-block d-md-none" width="1340" height="300">
            <img src="/assets/images/oschool-slide.png" alt="" class="w-100 d-none d-md-block" width="1340" height="500"> -->
          </div>
          <div class="p-4 d-flex position-absolute bg-white flex-column shadow-sm box-slide">
            <h1 class="mb-4 h1 font-weight-bold">Bienvenue à {{$school->name}}</h1>
            <p>{{$school->subtitle}}</p>
            <!-- <form class="mt-5" action="index.html" method="post">
              <div class="form-group mb-2 w-100 border d-flex p-2 rounded">
                <input class="form-control mr-sm-2 border-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0 border-0 px-3" type="submit">
                  <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                  </svg>
                </button>
              </div>
            </form> -->
          </div>
        </div>
        <div class="col-md-7"></div>
      </div>
    </section>
    <!--END SLIDE SECTION-->
    <!--==========Course catégories================-->
    @if(count($school->categories) > 0)
    <section class="container-fluid">
      <div class="row py-5 my-4">
        <div class="col-md-12">
          <div class="row pl-md-5">
            <div class="col-md-10">
              <h3 class="h3 font-weight-bold">
                  @if($school->section1)
                  {{$school->section1}}
                  @else
                  Catégories de cours
                  @endif
              </h3>
              <div class="border border-primary w-25 mt-4"></div>
            </div>
          </div>
          <div class="row p-5">
              @foreach($school->categories as $category)
              @if(count($category->courses) > 0)
            <div class="col-md-3 py-3">
              <div class=" border p-0 shadow-sm">
                <a href="#" class="text-decoration-none">
                  <img src="https://s.udemycdn.com/home/top-categories/lohp-category-design.jpg" alt="" class="img-fluid w-100">
                  <p class="p-4 font-weight-bold h5">{{$category->name}}</p>
                </a>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        <div class="col-md-12 text-center">
          <button class="btn bg-oschool rounded-pill font-weight-bold p-2" data-toggle="modal" data-target="#category">
            <span class="px-3 py-3 text-white">
              Toutes nos catégories
            </span>
            <span class="rounded-circle btn-view-all">
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-short rounded-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
              </svg>
            </span>
          </button>
        </div>
      </div>
    </section>
    @endif

    <!-- Paths -->
    @if(count($school->courses->where('type', 'path')->where('state', 'active')) > 0)
    <section class="container-fluid">
      <div class="row py-5 my-4">
        <div class="col-md-12">
          <div class="row pl-md-5">
            <div class="col-md-10">
              <h3 class="h3 font-weight-bold">
                  Parcours
              </h3>
              <div class="border border-primary w-25 mt-4"></div>
            </div>
          </div>
          <div class="row p-5">
              @foreach($school->courses->where('type', 'path')->where('state', 'active')->take(8) as $course)
              @if($course->state == 'active')
            <div class="col-md-3 py-3">
              <div class="p-0 shadow course-border">
                <a href="/path/{{$course->slug}}" class="text-decoration-none">
                  <div class=" p-2">
                    <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('/images/courses/logos/{{$course->logo}}')">
                      <!--img src="/images/courses/logos/{{$course->logo}}" alt=""
                        class="img-fluid w-100"-->
                      <!-- <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">25000 Fcfa</span> -->
                      @auth
                      @if(Auth::user()->courses->contains($course->id))
                      <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">0%</span>
                      @endif
                      @endauth

                    </div>
                  </div>
                  <div class="">
                    <h5 class="p-4 font-weight-bold h6">{{$course->name}}</h5>
                  </div>
                </a>
              </div>
            </div>
            @endif
            @endforeach

          </div>
          <div class="col-md-12 text-center">
             <a href="/schools/{{$school->id}}/courses">
                <button class="btn bg-oschool rounded-pill font-weight-bold p-2">
                  <span class="px-3 py-3 text-white">
                    Tous nos parcours
                  </span>
                  <span class="rounded-circle btn-view-all">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-short rounded-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </span>
                </button>
            </a>
          </div>
        </div>
      </div>
    </section>
    @endif

    <!--========== latest courses================-->
    @if(count($school->courses->where('type', 'mooc')->where('state', 'active')) > 0)
    <section class="container-fluid">
      <div class="row py-5 my-4">
        <div class="col-md-12">
          <div class="row pl-md-5">
            <div class="col-md-10">
              <h3 class="h3 font-weight-bold">
                  @if($school->section2)
                  {{$school->section2}}
                  @else
                  Nos cours
                  @endif
              </h3>
              <div class="border border-primary w-25 mt-4"></div>
            </div>
          </div>
          <div class="row p-5">
              @foreach($school->courses->where('type', 'mooc')->where('state', 'active')->take(8) as $course)
              @if($course->state == 'active')
            <div class="col-md-3 py-3">
              <div class="p-0 shadow course-border">
                <a href="{{ route('course.slug', $course->slug) }}" class="text-decoration-none">
                  <div class=" p-2">
                    <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('/images/courses/logos/{{$course->logo}}')">
                      <!--img src="/images/courses/logos/{{$course->logo}}" alt=""
                        class="img-fluid w-100"-->
                      <!-- <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">25000 Fcfa</span> -->
                      @auth
                      @if(Auth::user()->courses->contains($course->id))
                      <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">0%</span>
                      @endif
                      @endauth

                    </div>
                  </div>
                  <div class="">
                    <h5 class="p-4 font-weight-bold h6">{{$course->name}}</h5>
                  </div>
                </a>
              </div>
            </div>
            @endif
            @endforeach

          </div>
          <div class="col-md-12 text-center">
            <button class="btn bg-oschool rounded-pill font-weight-bold p-2">
              <span class="px-3 py-3 text-white">
                Tous nos cours
              </span>
              <span class="rounded-circle btn-view-all">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-short rounded-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </section>
    @endif
    @if(!$school->user->isAdmin())
    <!--============Description de l'école================-->
    <section class="container-fluid">
      <div class="row">
          <div class="col-md-6">
            <div class="p-4 h4">
                <h2 class="font-weight-bold">{{$school->heading}}</h2><br><br>
                <p>{!!$school->description!!}</p><br><br>
                <p>
                    <strong>
                        <a style="color: #{{$school->color->buttons_links}};">
                            {{$school->city}}
                            {{$school->state}}
                            {{$school->street}}
                        </a>
                    </strong>
                </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4">
              <img src="/images/schools/backgrounds/{{$school->background}}" alt="" class="img-fluid">
            </div>
          </div>
      </div>
    </section>
    @endif
    <!--============END Description de l'école================-->

    <!--========== EVENEMENTS================-->
    <!-- <section class="container-fluid">
      <div class="row py-5 my-4">
        <div class="col-md-12">
          <div class="row pl-md-5">
            <div class="col-md-10">
              <h3 class="h3 font-weight-bold">
                Nos événements
              </h3>
              <div class="border border-primary w-25 mt-4"></div>
            </div>
          </div>
          <div class="row p-5">
            <div class=" col-md-2 d-md-block d-none"></div>
            <div class=" col-md-8">
              <div class="row bg-light p-4 rounded-lg shadow mt-3">
                <div class="col-md-3 text-center p-0">
                  <div class="h1 font-weight-bold bg-oschool text-white rounded-circle event-date-rounded mb-2 mx-auto">
                    05
                  </div>
                  <p class="mb-2 h-2 font-weight-bold">Sept</p>
                  <p class="mb-2 h-2 font-weight-bold">2020</p>
                </div>
                <div class="col-md-3 p-0">
                  <div class="p-0 h-100">
                    <img src="https://img-a.udemycdn.com/course/240x135/1620090_0efb_4.jpg?XrxbI3RuSLUQuFaTbPuE-PoAbiKjWoAI23_IiUfy-LGSOhSD3ZSlmNd41uBc39sMO9X9oahV5PmS2bAbFsSHSrzrCvL_cwQ-3_CemUZd957SOlPqLjllrgcZaa9cLKyg" alt=""
                      class="img-fluid rounded-lg h-100 w-100">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-4">
                    <p class="pl-md-4 pb-md-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                        <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                      </svg> <span>Vendredi</span> 16 <span>pm</span> à 18 <span>pm</span>
                    </p>
                    <h2 class="pl-md-4 pb-md-2 font-weight-bold text-truncate h3">L'utilité du e-learning pour vous et pour les utilisateurs</h2>
                    <p class="pl-md-4 pb-md-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                        <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                      </svg> <span>Vendredi</span> 16 <span>pm</span> à 18 <span>pm</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class=" col-md-2 d-md-block d-none"></div>
          </div>
          <div class="col-md-12 text-center">
              <a href="/schools/{{$school->id}}/courses">
                 <button class="btn bg-oschool rounded-pill font-weight-bold p-2">
                   <span class="px-3 py-3 text-white">
                     Tous nos cours
                   </span>
                   <span class="rounded-circle btn-view-all">
                     <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-short rounded-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                     </svg>
                   </span>
                 </button>
             </a>
          </div>
        </div>
      </div>
    </section> -->
@include('includes.categoriePopup')
@endsection
