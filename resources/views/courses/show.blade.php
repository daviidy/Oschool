@extends('layouts.menu-course')
@section('image', '/images/courses/logos/'.$course->logo)
@section('title', $course->name)
@section('description', $course->subtitle)

@section('content')

@include('includes.branding')
<style media="screen">
    .status {
        margin-top: 4rem;
    }

    .course-curriculum h4, a {
        color: #000 !important;
    }
</style>

    <main class="container">
        @include('includes.status')
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
              <p><i class="fas fa-medal text-dark mr-3"></i>Certificat de formation reconnu</h1>
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
                <span class="font-weight-bold"><i class="fas fa-clock text-dark"></i></span><br>
                <span>A votre rythme</span>
              </div>
              <div class="text-center mt-3 mt-md-0">
                <span class="font-weight-bold"><i class="fas fa-cog text-dark"></i></span><br>
                <span>100% pratique</span>
              </div>
              <div class="text-center mt-3 mt-md-0">
                <span class="font-weight-bold"><i class="fas fa-hands-helping text-dark"></i></span><br>
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
            @include('includes.cta_course')
          </div>
          @auth
          @if(Auth::user()->courses->contains($course->id))
          <div class="row mt-3 d-md-none">
            <div class="col-12">
              <div class="p-2 bg-light border rounded text-center w-100">
                <a href="#" class="text-decoration-none">
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
              @if($course->sections)
              @foreach($course->sections->sortBy('position') as $section)
            <div class="row mt-3">
              <div class="col-12">
                <h4>{{$section->title}}</h4>
              </div>
              @if($section->lessons)
              @foreach($section->lessons->sortBy('position') as $lesson)
              @if($lesson->status == 'active')
              <div class="col-12 mt-4 border-bottom pb-4">
                @auth
                <a {{Auth::user()->courses->contains($course->id) ? "href=/course/".$lesson->section->course->slug."/lessons/".$lesson->slug : ''}}><i class="{{Auth::user()->lessons->contains($lesson) ? 'fas fa-circle' : 'far fa-circle'}} green mr-3"></i>{{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}</a>
                @endauth
                @guest
                <a><i class="far fa-circle green mr-3"></i>{{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}</a>
                @endguest
              </div>
              @endif
              @endforeach
              @endif
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
              @include('includes.cta_course')
            </div>
            @auth
            @if(Auth::user()->courses->contains($course->id))
            <div class="row mt-3">
              <div class="col-12">
                <div class="p-2 bg-light border rounded text-center w-100">
                  <a href="#" class="text-decoration-none">
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

@endsection
