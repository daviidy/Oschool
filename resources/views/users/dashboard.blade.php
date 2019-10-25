@extends('layouts.menu-dashboard-user')
@section('title', 'Mon compte')

@section('content')

<div class="main my-teachable-dashboard">

    @if(Auth::user()->isAdmin() || Auth::user()->isOwner())
    @foreach(Auth::user()->createSchools as $school)
    @if($loop->first)
    <h1>Les écoles que je possède</h1>
    @endif
    @endforeach


    <div class="schools-list ">
        @foreach(Auth::user()->createSchools as $school)
        <a href="{{url('schoolAdmin', $school)}}" class="school-card school-has-default-thumbnail"
          style="background-image: url(/images/schools/backgrounds/img-school.svg);" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="/images/schools/backgrounds/flavicon-school.svg">
                <p class="school-name">{{$school->name}}</p>
                <p class="school-url">oschool2.teachable.com</p>

                <label class="label label-user-type label-free">free</label>
            </div>
        </a>
        @endforeach

    </div>

    @endif

    @if(Auth::user()->schools)
    <h1>Les écoles dans lesquelles je suis inscrit</h1>
    <div class="schools-list ">
        @foreach(Auth::user()->schools as $school)
        <a href="{{url('schools', $school)}}" class="school-card school-has-default-thumbnail"
          style="background-image: url('/images/schools/logos/{{$school->logo}}');" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="/images/schools/backgrounds/flavicon-school.svg">
                <p class="school-name">Oschool</p>
                <p class="school-url">oschool2.teachable.com</p>
                <label class="label label-user-type label-free">free</label>
            </div>
        </a>
        @endforeach
    </div>
    @endif
</div>

@endsection
