@extends('layouts.menuDashboard-users')
@section('title', 'Paramètres du compte')
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
          <form class="text-center shadow-sm mx-auto bg-white p-md-5 p-3 shadow-sm">
            <div class="form-group text-left">
              <label for="exampleInputEmail1">Nommez votre école</label>
              <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group text-left">
              <label for="exampleInputPassword1">Domaine personnalisé</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
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
