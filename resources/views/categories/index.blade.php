@extends('layouts.menu-school')
@section('image', '/images/schools/logos/'.$school->logo)
@section('title', $category->name)
@section('description', $school->description)

@section('content')

@include('includes.branding')

    <!--==========Course catégories================-->
    <div class="row" style="margin-top: 7rem;">
        <div class="col-12">
            <h3 class="h3 font-weight-bold text-center">Cours et parcours dans la catégorie {{$category->name}}</h3>
        </div>
    </div>

    <!-- Paths -->
    @if(count($category->courses->where('type', 'path')->where('state', 'active')) > 0)
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
              @foreach($category->courses->where('type', 'path')->where('state', 'active')->take(8) as $course)
            <div class="col-md-3 py-3">
              <div class="p-0 shadow course-border">
                <a href="/path/{{$course->slug}}" class="text-decoration-none">
                  <div class=" p-2">
                    <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('/images/courses/logos/{{$course->logo}}')">
                      <!--img src="/images/courses/logos/{{$course->logo}}" alt=""
                        class="img-fluid w-100"-->
                      <!-- <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">25000 Fcfa</span> -->

                    </div>
                  </div>
                  <div class="">
                    <h5 class="p-4 font-weight-bold h6">{{$course->name}}</h5>
                  </div>
                </a>
              </div>
            </div>
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
    @if(count($category->courses->where('type', 'mooc')->where('state', 'active')) > 0)
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
              @foreach($category->courses->where('type', 'mooc')->where('state', 'active')->take(8) as $course)
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
                      <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">{{number_format((count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)->where('state', 'active')) * 100)}}%</span>
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
            @endforeach

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
    </section>
    @endif

@endsection
