@extends('layouts.menu-dashboard-user')
@section('title', 'Mon compte')

@section('content')

<div class="main my-teachable-dashboard">

    @if(Auth::user()->isAdmin() || Auth::user()->isOwner)
    <h1>Les écoles que je possède</h1>


    <div class="schools-list ">
        @foreach(Auth::user()->createSchools as $school)
        <a href="{{url('schoolAdmin', $school)}}" class="school-card school-has-default-thumbnail"
          style="background-image: url('https://assets.teachablecdn.com/icons/default-thumbnail-school.svg');" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="https://assets.teachablecdn.com/icons/default-favicon-school.svg">
                <p class="school-name">{{$school->name}}</p>
                <p class="school-url">oschool2.teachable.com</p>

                <label class="label label-user-type label-free">free</label>
            </div>
        </a>
        @endforeach

    </div>

    @endif
    <h1>Les écoles dans lesquelles je suis inscrit</h1>
    <div class="schools-list ">
        <a href="https://oschool2.teachable.com?redirect=admin&amp;sa=582ce3f8-f1d7-40ea-898b-f905a22569c6" class="school-card school-has-default-thumbnail"
          style="background-image: url('https://assets.teachablecdn.com/icons/default-thumbnail-school.svg');" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="https://assets.teachablecdn.com/icons/default-favicon-school.svg">
                <p class="school-name">Oschool</p>
                <p class="school-url">oschool2.teachable.com</p>
                <label class="label label-user-type label-free">free</label>
            </div>
        </a>

        <a href="https://tradeacademyportal.com?sa=a3229258-d599-41d1-87b4-1519739c814f" class="school-card " style="background-image: url('https://www.filepicker.io/api/file/U4pfmJMDQ9mzsRTQHFQ2');" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="https://assets.teachablecdn.com/icons/default-favicon-school.svg">
                <p class="school-name">The Trade Academy</p>
                <p class="school-url">tradeacademyportal.com</p>
            </div>
        </a>

    </div>
</div>

@endsection
