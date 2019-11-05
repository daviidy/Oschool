@extends('layouts.menu-dashboard-user')
@section('title', 'Mon compte')

@section('content')

<div class="main my-teachable-dashboard">

    @if(Auth::user()->isAdmin() || Auth::user()->isOwner())

    @if(count(Auth::user()->createSchools) > 0)
    <h1>Les écoles que je possède</h1>


    <div class="schools-list ">
        @foreach(Auth::user()->createSchools as $school)
        <a href="{{url('schoolAdmin', $school)}}" class="school-card school-has-default-thumbnail"
          style="background-image: url(/images/schools/backgrounds/img-school.svg);" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="/images/schools/backgrounds/flavicon-school.svg">
                <p class="school-name">{{$school->name}}</p>

            </div>
        </a>
        @endforeach

    </div>

    @endif
    @endif

    @if(count(Auth::user()->schools) > 0)
    <h1>Les écoles dans lesquelles je suis inscrit</h1>
    <div class="schools-list ">
        @foreach(Auth::user()->schools as $school)
        <a href="{{url('schools', $school)}}" class="school-card school-has-default-thumbnail"
          style="background-image: url('/images/schools/logos/{{$school->logo}}');" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="/images/schools/backgrounds/flavicon-school.svg">
                <p class="school-name">Oschool</p>
            </div>
        </a>
        @endforeach
    </div>
    @endif

    @if(count(Auth::user()->courses) > 0)
    <h1>Mes cours</h1>
    <div class="schools-list ">
        @foreach(Auth::user()->courses as $course)
        <a href="/course/enrolled/{{$course->slug}}" class="school-card school-has-default-thumbnail"
          style="background-image: url('/images/courses/logos/{{$course->logo}}');" target="_blank">
            <div class="school-info">
                <p class="school-name">{{$course->name}}</p>
                <p class="school-url">{{$course->subtilte}}</p>
            </div>
        </a>
        @endforeach
    </div>
    @endif
</div>

@endsection
