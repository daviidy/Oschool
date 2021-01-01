@extends('layouts.menuDashboard-users')
@section('image', '/images/users/default/'.Auth::user()->image)
@section('title', 'Mes sessions')
@section('description', 'Mes sessions')
@section('content')
<div class="col-md-9 bg-page main-content">
  <div class="bg-white my-5 shadow" id="btnActive">
    <ul class="border-0 list-group list-group-horizontal-md nav-tabs align-items-center" id="myTab" role="tablist">
      <li class="border-0 list-group-item nav-item py-1">
        <a class="pb-3 px-0 border-0 h3 font-weight-bold active1 nav-link active">
          MES SESSIONS
        </a>
      </li>
    </ul>
  </div>
  <div class="">
    <!--on vérifie si l'utilisateur est inscrit à au moins une école-->
        @if(count(Auth::user()->schools) > 0)
    <div class="card shadow box-session">
      <div class="card-header">
        <h4 class="font-weight-bold" style="font-size: 2rem">Mes appels hebdomadaires</h4>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Retrouvez ci-dessous la liste des anciens appels hebdomadaires.</p>
          @foreach(Auth::user()->schools as $school)
          @if(count($school->classrooms) > 0)
          @if($school->classrooms->where('statut', null) && !$school->classrooms->where('statut', null)->last()->users->contains(Auth::user()->id))
          <a style="font-size: 0.85rem;text-decoration: none;" class="btn btn-primary-inverted w-100 font-weight-bold" href="/classrooms/{{$school->classrooms->where('statut', null)->last()->id}}/subscribeToClassroom">
            Participer au prochain appel hebdomadaire pour le cours {{$school->classrooms->where('statut', null)->last()->courses->first()->name}} ({{ Carbon\Carbon::parse($school->classrooms->where('statut', null)->last()->date)->format('d-m-Y H:i') }})
          </a>
          @else
          <a style="font-size: 0.85rem;text-decoration: none;" class="btn btn-primary-inverted w-100 font-weight-bold" href="#">
            Votre prochain appel hebdomadaire a lieu ce {{ Carbon\Carbon::parse($school->classrooms->where('statut', null)->last()->date)->format('d-m-Y H:i') }}
          </a>
          @endif
          @endif
          @endforeach
        </blockquote>
      </div>
    </div>

    <div class="card shadow box-session">
      <div class="card-header">
        <h4 class="font-weight-bold" style="font-size: 1.3rem">Appels hebdomadaires</h4>
      </div>
      <div class="card-body" style="font-size: 0.9rem;">

        <p style="">
          Les appels hebdomadaires sont organisés dans le but de <strong>à réaliser les parcours de votre projet</strong>.<br>
          <br>
          Il s'agit d'un échange de <strong>questions / réponses</strong> avec vos mentors.<br>
          <br>
          Vous pouvez participer en posant vos questions ou simplement en écoutant passivement les conversations.<br><br>
        </p>
      </div>
    </div>

    @foreach(Auth::user()->schools as $school)
        <!--on parcourt chaque session de cette école-->
        @if(count($school->classrooms) > 0)
                  @foreach($school->classrooms as $classroom)
    <div class="card shadow border-0 my-3 box-session">
      <div class="card-body d-lg-flex flex-row align-items-center">
        <div class="d-flex">
          <h5 class="mb-0 mr-2 mr-lg-2 text-center text-success">
            <i class="fa fa-circle"></i>
          </h5>
          <h5 style="font-size: 1.25rem;" class="mb-0">
            {{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }}
          </h5>
        </div>
        @if(Carbon\Carbon::parse($classroom->date) < Carbon\Carbon::now() && $classroom->users->contains(Auth::user()->id))
        <a href="{{$classroom->link}}" target="_blank" style="font-size: 1.25rem;text-decoration: none;" class="btn btn-primary-inverted stretched-link mt-2 mt-lg-0 ml-auto font-weight-bold">
          Participer <i class="fa fa-arrow-right"></i>
        </a>
        @elseif($classroom->users->contains(Auth::user()->id))
        <a href="{{$classroom->link}}" target="_blank" style="font-size: 1.25rem;text-decoration: none;" class="btn btn-primary-inverted stretched-link mt-2 mt-lg-0 ml-auto font-weight-bold">
          A venir <i class="fa fa-chalkboard-teacher"></i>
          <i class="fa fa-arrow-right"></i>
        </a>
        @else
        <a href="/classrooms/{{$classroom->id}}/subscribeToClassroom" target="_blank" style="font-size: 1.25rem;text-decoration: none;" class="btn btn-primary-inverted stretched-link mt-2 mt-lg-0 ml-auto font-weight-bold">
          Participer <i class="fa fa-chalkboard-teacher"></i>
        </a>
        @endif
      </div>
    </div>
    @endforeach
    @endif
    @endforeach
    @endif
  </div>

</div>
</div>
</div>
</section>
@endsection
