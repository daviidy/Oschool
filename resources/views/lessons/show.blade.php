@extends('layouts.menu-course-lecture')

@section('content')

<style media="screen">
.delete-blue-box{
    display: none;
}

.rm-mg {
    margin: 0 !important;
}
</style>


<main class="container-fluid">
    @include('includes.status')
<div class="row">
  <!--progression-->
  <div class="col-3 bg-light d-none side-menu d-md-block">
    <div class="back-home p-2 border-bottom">
      <h6>
        <a class="" href="/course/{{$lesson->course->slug}}">
            <i class="fas fa-arrow-left mr-3"></i>
            Retour à l'accueil du cours
        </a>
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
         @foreach($section->lessons->where('status', 'active')->sortBy('position') as $section_lesson)
        <div class="lessons d-flex pt-0 pb-0">
            @if($loop->first)
          <i class="{{Auth::user()->lessons->contains($section_lesson->id) ? 'fas' : 'far'}} fa-circle mr-2 {{Auth::user()->lessons->contains($section_lesson->id) ? 'green' : 'bg-light'}} position-absolute first"></i>
            @elseif($loop->last)
          <i class="{{Auth::user()->lessons->contains($section_lesson->id) ? 'fas' : 'far'}} fa-circle mr-2 {{Auth::user()->lessons->contains($section_lesson->id) ? 'green' : 'bg-light'}} position-absolute last"></i>
            @else
          <i class="{{Auth::user()->lessons->contains($section_lesson->id) ? 'fas' : 'far'}} fa-circle mr-2 {{Auth::user()->lessons->contains($section_lesson->id) ? 'green' : 'bg-light'}} position-absolute other"></i>
            @endif
          <div class="single-lesson pl-4 {{$loop->first ? '' : 'pt-3'}}">
            <a href="/course/{{$lesson->course->slug}}/lessons/{{$section_lesson->slug}}">{{$section_lesson->title ? $section_lesson->title : 'Nouvelle leçon'}}</a>
          </div>
        </div>
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

    @auth
    @if(!$lesson->section->drip && $status !== '0' && Auth::user()->courses->contains($lesson->section->course->id) && !Auth::user()->isOwner())
    <div class="lecture-actions row mt-5">
      <div class="col-6">
        <a href="/course/{{$lesson->course->slug}}/lessons/{{$previous_lesson->slug}}" class="border p-2 font-weight-bold rounded">
          <i class="fas fa-arrow-left mr-4"></i>
          Chapitre précédent
        </a>
        <div class="previous">
          <span>{{$previous_lesson->title}}</span>
        </div>
      </div>
      @if(Auth::user()->lessons->contains($lesson->id))
      <div class="col-6 text-right">
        <a href="/course/{{$lesson->course->slug}}/lessons/{{$next_lesson->slug}}" class="border p-2 font-weight-bold next-link rounded">
          Chapitre suivant
          <i class="fas fa-arrow-right ml-4"></i>
        </a>
        <div class="next ml-auto">
          <span>{{$next_lesson->title}}</span>
        </div>
      </div>
      @else
      <div class="col-6 text-right">
        <form action="/completeLesson" method="post">
            <button type="submit" class="btn green"role="button" id="lecture_complete_button">
                  @csrf
                  <input type="hidden" name="id" value="{{$lesson->id}}">
                  <span class="nav-text">Marquer ce chapitre comme terminé</span>
                  &nbsp;
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>
        </form>
      </div>
      @endif

    </div>
    @endif
    @endauth

    <div class="progression row mt-5 mb-5">
      <div class="col-8">
        <span class="">
          {{(count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100}}% achevés
        </span>
        <div class="progress blue-oschool mt-3" style="height:10px">
          <div class="progress-bar bg-oschool" style="width:{{(count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100}}%;height:10px"></div>
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
@endsection
