@extends('layouts.menuDashboard-users')
@section('image', '/images/users/default/'.Auth::user()->image)
@section('title', 'Messages et notifications')
@section('description', 'Messages et notifications')
@section('content')


        <div class="col-md-9 bg-page main-content">
          <div class="bg-white my-5 shadow" id="btnActive">
            <ul class="border-0 list-group list-group-horizontal-md nav-tabs align-items-center" id="myTab" role="tablist">
              <li class="border-0 list-group-item nav-item py-1">
                <a class="pb-3 px-0 border-0 h3 font-weight-bold active1 nav-link active">
                  MES NOTIFICATIONS
                </a>
              </li>
            </ul>
          </div>
          <!--on vérifie si l'utilisateur est inscrit à au moins une école-->
              @if(count(Auth::user()->schools) > 0)
                 <!--si oui, pour chaque école dans laquelle il est inscrit-->
                      @foreach(Auth::user()->schools as $school)
                          <!--on parcourt chaque information de cette école-->
                          @foreach($school->courses as $course)
                              @foreach($course->informations->sortByDesc('created_at') as $information)
          <div class="p-md-4">
            <div class="bg-white d-md-flex align-items-md-start p-4 mb-3">
              <div class="d-flex align-items-center pt-md-3 py-3">
                <a target="_blank" href="{{$course->type == 'mooc' ? '/course/enrolled/'.$course->slug : '/path/'.$course->slug}}">
                  <img class="img-fluid" src="/images/courses/logos/{{$course->logo}}" alt="{{$course->name}}" width="150" height="150">
                </a>
                <a target="_blank" href="{{$course->type == 'mooc' ? '/course/enrolled/'.$course->slug : '/path/'.$course->slug}}" class="d-md-none d-block">
                  {{$course->name}}
                </a>
              </div>
              <div class="w-100 p-md-4">
                <div class="d-md-block d-none pb-md-4">
                  <a href="#">{{$course->name}}</a>
                  <span><strong>{{$information->created_at}}</strong> </span>
                </div>
                <div class="p-3 bg-notif rounded-lg">
                  <p style="line-height:2;">
                      {!!$information->text!!}
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endforeach
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </section>

@endsection
