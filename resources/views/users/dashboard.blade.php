@extends('layouts.menu-dashboard-user')
@section('title', 'Mes écoles et cours')

@section('content')

<div class="main my-teachable-dashboard">



    @if(count(Auth::user()->createSchools) > 0)
    <h1>Les écoles que je possède</h1>

    @if(Auth::user()->isOwner())
    <div class="schools-list ">
        @foreach(Auth::user()->createSchools as $school)
        <a href="{{ route('website.subdomain', ['school' => $school->id, 'subdomain' => $school->slug]) }}" class="school-card school-has-default-thumbnail"
          style="background-image: url(/images/schools/logos/{{$school->logo}});;" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="/images/schools/backgrounds/flavicon-school.svg">
                <p class="school-name">{{$school->name}}</p>
            </div>
        </a>
        @endforeach

    </div>
    @endif
    @if(Auth::user()->isAdmin())
    <div class="schools-list ">
        @foreach(Auth::user()->createSchools as $school)
        <a href="{{url('schoolAdmin', $school)}}" class="school-card school-has-default-thumbnail"
          style="background-image: url(/images/schools/logos/{{$school->logo}});;" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="/images/schools/backgrounds/flavicon-school.svg">
                <p class="school-name">{{$school->name}}</p>
            </div>
        </a>
        @endforeach

    </div>
    @endif

    @endif
<!--on vérifie si l'utilisateur est inscrit à au moins une école-->
    @if(count(Auth::user()->schools) > 0)
       <!--si oui, pour chaque école dans laquelle il est inscrit-->
            @foreach(Auth::user()->schools as $school)
                <!--on parcourt chaque information de cette école-->
                @foreach($school->courses as $course)
                    @foreach($course->informations as $information)
                          <!--met ici le code HTML pour les infos-->
                          <div class="centered spacer">
                              <div class="alertMessage alertMessage--info">
                                  <span class="bullet bullet--small bullet--orange-alt alertMessage__icon"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                  <div class="alertMessage__text">
                                    {!!$information->text!!}
                                  </div>
                              </div>
                          </div>
                          <!--n'oublie pas de mettre le style css tout en haut-->
                    @endforeach
                @endforeach
            @endforeach
        @endif



    @if(count(Auth::user()->schools) > 0)
    <h1>Les écoles dans lesquelles je suis inscrit</h1>
    <div class="schools-list ">
        @foreach(Auth::user()->schools as $school)

        <a href="{{url('schools', $school)}}" class="school-card school-has-default-thumbnail"
          style="background-image: url('/images/schools/logos/{{$school->logo}}');" target="_blank">
            <div class="school-info">
                <img class="school-favicon" src="/images/schools/backgrounds/flavicon-school.svg">
                <p class="school-name">{{$school->name}}</p>
            </div>
        </a>
        @endforeach
    </div>
    @endif

    @if(count(Auth::user()->courses) > 0)
    <h1>Mes cours</h1>
    <div class="schools-list ">
        @foreach(Auth::user()->courses as $course)
        @if($course->type == 'mooc')
        <a href="/course/enrolled/{{$course->slug}}" class="school-card school-has-default-thumbnail"
          style="background-image: url('/images/courses/logos/{{$course->logo}}');" target="_blank">
            <div class="school-info">
                <p class="school-name">{{$course->name}}</p>
                <p class="school-url">{{$course->subtilte}}</p>
            </div>
        </a>
        @else
        <a href="/path/{{$course->slug}}" class="school-card school-has-default-thumbnail"
          style="background-image: url('/images/courses/logos/{{$course->logo}}');" target="_blank">
            <div class="school-info">
                <p class="school-name">{{$course->name}}</p>
                <p class="school-url">{{$course->subtilte}}</p>
            </div>
        </a>
        @endif
        @endforeach
    </div>
    @else

    <h1>Vous n'êtes inscrit à aucun cours pour le moment.</h1>
    <img style="width: 52%" src="/images/divers/no_course.png" alt="">
    <a href="{{route('schools.index')}}">
        <div class="button-group" style="margin-top: 2em;">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"><input type="submit" name="commit" value="Commencez à apprendre dès maintenant" id="foo-submit" class="btn btn-primary btn-md btn-orange btn-teachable-block"></font>
            </font>
        </div>
    </a>

    @endif
</div>

@endsection
