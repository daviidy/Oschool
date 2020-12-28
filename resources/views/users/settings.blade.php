@extends('layouts.menuDashboard-users')
@section('title', 'Paramètres du compte')
@section('content')

<div class="col-md-9 bg-page main-content">
  <div class="bg-white my-5 shadow" id="btnActive">
    <ul class="border-0 list-group list-group-horizontal-md nav-tabs align-items-center" id="myTab" role="tablist">
      <li class="border-0 list-group-item nav-item py-1">
        <a class="pb-3 px-0 border-0 h3 font-weight-bold active1 nav-link active">
          MES PARAMÈTRES
        </a>
      </li>
    </ul>
  </div>
  <div class="p-md-4">
    <div class="p-md-5">
      <div class="card bg-page border-0 m-auto w-75" id="setting">
        <div class="card-body m-auto p-2 w-100">
          <div class="bg-white rounded-lg p-3 shadow">
            <form class="p-md-4">
              <div class="form-group text-center">
                  <img class="rounded-circle img-fluid" src="https://oschoolelearning.com/images/users/default/1578057364.png" alt="" height="50" width="50"><br><br>
                <label for="exampleFormControlFile1">Changez votre image ci-dessous</label>
                <input type="file" class="form-control-file w-auto mx-auto" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <label >Nom complet</label>
                <input class="form-control" type="text" placeholder="Nom complet">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label class="input-size">Numéro de téléphone <strong>(+22589078025)</strong></label>
                <div class="control-input">
                    <input placeholder="" class="form-control rounded-pill border-top-0 shadow-sm" id="edit-user-tel" name="telephone" required="required" type="tel" value="{{Auth::user()->tel}}">
                    <span class="input-icon"></span>
                </div>
              </div>
              <a href="#" class="input-size">Changer de mot de passe</a>
              <div class="form-group mt-md-4 mt-3">
                <input type="submit" class="form-control text-white btn-bg rounded-pill w-auto m-auto" value="Enregistrer les modifications">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>


@endsection
