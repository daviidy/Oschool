@extends('layouts.menu-course-curriculum')

@section('content')

<div class="course-sidebar">
  <!-- Image & Title -->
<img class="course-image" src="/images/courses/logos/{{$course->logo}}">
  <h2>{{$course->name}}</h2>
  <!-- Course Progress -->
  <div class="course-progress">
    <div class="progressbar">
      <div class="progressbar-fill" style="min-width: 97%;"></div>
    </div>
    <div class="small course-progress">
      <span class="percentage">
        97%
      </span>
      COMPLETE
    </div>
  </div>
  <ul class="sidebar-nav">
    <!-- Sidebar Nav -->

    <li class="selected">
      <a href="/courses/532534" class="sidebar-nav-link">
        <span class="lecture-sidebar-icon">
          <i class="fa fa-list-alt"></i>
        </span>
        Programme de cours
      </a>
    </li>


    <li class="">
      <a href="/courses/532534/author_bio" class="sidebar-nav-link">
        <span class="lecture-sidebar-icon">
          <i class="fa fa-user"></i>
        </span>
        Votre instructeur : {{$course->author->full_name}}
      </a>
    </li>

  </ul>
</div>


<div class="course-mainbar" style="display: block;">

  <!-- Meta tag for tracking lecture progress -->
  <meta id="lecture-completion-data" data-last-lecture-id="10371330" data-last-lecture-url="/courses/532534/lectures/10371330">

  <h2 class="section-title">
    Programme de cours
  </h2>
  <div class="next-lecture-wrapper">
    <a class="btn btn-primary start-next-lecture" data-no-turbolink="true" href="/courses/532534/lectures/10371330">Commencez le prochain chapitre&nbsp;&nbsp;<span aria-hidden="true">›</span></a>
    <span class="next-lecture-name hidden-sm">
      Minute de lecture
      (84:23)


    </span>
  </div>

  <!-- Lecture list on courses page (enrolled user) -->

  {{-- <div class="row">
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        Introduction ***Start Here***
        <div class="section-days-to-drip">
          <div class="section-days-logged-in">
            Available in
            <span class="section-days-to-drip-number"></span>
            days
          </div>
          <div class="section-days-logged-out">
            <span class="section-days-to-drip-number"></span>
            days
            after you enroll
          </div>
        </div>
      </div>
      <ul class="section-list">

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371838">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371838">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Welcome To The Course!

                (1:15)


              </span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div> --}}
  @if($course->sections)
  @foreach($course->sections->sortBy('position') as $section)
    
  <div class="row">
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        {{$section->title}}
        <div class="section-days-to-drip">
          <div class="section-days-logged-in">
            Available in
            <span class="section-days-to-drip-number"></span>
            days
          </div>
          <div class="section-days-logged-out">
            <span class="section-days-to-drip-number"></span>
            days
            after you enroll
          </div>
        </div>
      </div>
      <ul class="section-list">

        @if($section->lessons)
        @foreach($section->lessons->sortBy('position') as $lesson)
        @if(Auth::user()->lessons->contains($lesson->id))
        <li class="section-item completed unlocked-lecture" data-lecture-id="10371330">
            <a class="item" data-no-turbolink="true" href="/course/{{{$course->slug}}}/lessons/{{$lesson->slug}}/">
              <span class="status-container">
                <span class="status-icon">
                  &nbsp;
                </span>
              </span>
              <div class="title-container">
                <div class="btn-primary btn-sm pull-right">
                  Start
                </div>
                {{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}
              </div>
            </a>
          </li>
        @else
        <li class="section-item incomplete next-lecture" data-lecture-id="10371330">
          <a class="item" data-no-turbolink="true" href="/course/{{{$course->slug}}}/lessons/{{$lesson->slug}}/">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              {{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}
            </div>
          </a>
        </li>
        @endif
        @endforeach
        @endif


      </ul>
    </div>
  </div>
  @endforeach
  @endif


  <br>



</div>

@endsection
