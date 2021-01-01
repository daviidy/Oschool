@extends('layouts.menuDashboard-users')
@section('image', '/images/users/default/'.Auth::user()->image)
@section('title', 'Créer une école')
@section('description', 'Mes écoles et cours')
@section('content')

<div class="col-md-9 bg-page main-content">
  <div class="bg-white my-5 shadow" id="btnActive">
    <ul class="border-0 list-group list-group-horizontal-md nav-tabs align-items-center" id="myTab" role="tablist">
      <li class="border-0 list-group-item nav-item py-1">
        <a class="pb-3 px-0 border-0 h3 font-weight-bold active1 nav-link active">
          CRÉER UNE NOUVELLE ÉCOLE / CLASSE
        </a>
      </li>
    </ul>
  </div>
  <div class="p-md-4">
    <div class="p-md-4">
      <div class="card mx-auto border-0 bg-page">
        <div class="card-body p-md-5">
          <form enctype="multipart/form-data" action="{{route('schools.storeBusiness')}}" accept-charset="UTF-8" method="post" class="text-center shadow-sm mx-auto bg-white p-md-5 p-3 shadow-sm">
              @csrf
            <div class="form-group text-left">
              <label for="school_name">Nommez votre école</label>
              <input id="school_name" type="text" class="form-control" maxlength="100" required name="name" placeholder="eg. Ecole des développeurs">
            </div>
            <div class="form-group text-left">
              <label for="school_domain">Domaine personnalisé(facultatif) </label>
              <input placeholder="Mettez une URL si vous voulez lier un domaine à votre école" id="school_domain" type="text" class="form-control" maxlength="100" name="domain">
            </div>
            <input hidden value="{{Auth::user()->id}}" class="form-control" type="text" name="user_id">
            <button type="submit" class="btn p-md-3 shadow bg-oschool rounded-pill w-auto text-white">Créer une nouvelle école</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>


@endsection
