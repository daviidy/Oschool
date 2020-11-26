@extends('layouts.menu-school')
@section('title', 'Tous les cours')
@section('content')

<!-- Courses -->

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
          @foreach($school->courses->where('type', 'mooc')->where('state', 'active') as $course)
          @if($course->state == 'active')
        <div class="col-md-3 py-3">
          <div class="p-0 shadow course-border">
            <a href="{{ route('course.slug', $course->slug) }}" class="text-decoration-none">
              <div class="rounded-lg p-2 bg-img-course">
                <img src="/images/courses/logos/{{$course->logo}}" alt=""
                  class="img-fluid w-100">
                <!-- <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">25000 Fcfa</span> -->
                @auth
                @if(Auth::user()->courses->contains($course->id))
                <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">0%</span>
                @endif
                @endauth

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
          @foreach($school->courses->where('type', 'path')->where('state', 'active') as $course)
          @if($course->state == 'active')
        <div class="col-md-3 py-3">
          <div class="p-0 shadow course-border">
            <a href="/path/{{$course->slug}}" class="text-decoration-none">
              <div class="rounded-lg p-2 bg-img-course">
                <img src="/images/courses/logos/{{$course->logo}}" alt=""
                  class="img-fluid w-100">
                <!-- <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">25000 Fcfa</span> -->
                @auth
                @if(Auth::user()->courses->contains($course->id))
                <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">0%</span>
                @endif
                @endauth

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

    </div>
  </div>
</section>
@endif

@endsection
