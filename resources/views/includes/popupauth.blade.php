<style type="text/css">

  .modal-footer a{
    color: #4d90cc;
    font-weight: 500;
  }
  .modal .modal-dialog .modal-header {
    padding-top: 40px;
    padding-bottom: 22px;
}
.modal .modal-dialog .modal-header, .modal .modal-dialog .modal-body {
    border: 0;
    padding: 40px;
}
.modal-header {
    border-bottom: 0px;
    z-index: 1300 !important;
}
.modal-header {
    min-height: 16.43px;
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
}

.modal .modal-dialog .modal-header .modal-title {
    font-weight: 600;
    font-size: 22px;
    color: #2b3636;
    padding-left: 10px;
}

.modal .modal-dialog .modal-header .close {
    opacity: 1;
    font-weight: 100;
    font-size: 40px;
    margin-right: 30px;
    margin-top: 30px;
}
.modal .modal-header .close {
    position: absolute;
    top: 0px;
    right: 0px;
    color: #cadae9;
}

.modal .modal-dialog .modal-body {
    padding-top: 0px;
    padding-bottom: 10px;
    padding-left: 50px;
    padding-right: 50px;
    text-align: left!important;
}

input.form-control {
    padding: 5px 10px;
    height: 40px;
    font-weight: 200;
    margin-bottom: 14px;
    transition: all 0.3s ease;
    box-shadow: none;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.modal .modal-dialog .modal-footer {
    background: none;
    border: 0;
    padding-top: 5px;
    padding-bottom: 50px;
}

.modal .modal-dialog .modal-footer .btn {
    margin-right: 10px;
    font-weight: 600;
}
.btn-deep-orange {
    color: #fff;
    background-color: #4d90cc !important;
    padding: 10px 24px!important;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.justify-content-center {
    text-align: center !important;
}
</style>

@foreach($course->pricings as $pricing)
    @if($pricing->status == "1")
    <div class="modal fade" id="modalLogin{{$pricing->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Se connecter</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="" action="/customLogin" method="post">
              @csrf

              <div class="modal-body mx-3">

                <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                  <input type="email" name="email" id="orangeForm-email" class="form-control validate">
                  <input hidden type="text" name="slug" value="{{$pricing->course->slug}}">
                  <input hidden type="text" name="pricing" value="{{$pricing->id}}">
                </div>

                <div class="md-form mb-4">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Mot de passe</label>
                  <input type="password" name="password" id="orangeForm-pass" class="form-control validate">
                </div>

                <div class="md-form mb-4 text-center">
                  <label class="checkbox-label">
                    <input {{ old('remember') ? 'checked' : '' }} id="remember" default="default" type="checkbox" name="remember" class="terms-of-service-checkbox">Se souvenir de moi</input> <br><br>


                    @if (Route::has('password.request'))
                                  <a style="margin-bottom: 0px;" class="text-decoration-none " href="{{ route('password.request') }}">
                                      {{ __('Mot de passe oublié?') }}
                                  </a>
                  @endif

                  </label>




                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">Se connecter</button>
              </div>
          </form>
          <div class="modal-footer d-flex justify-content-center">
            <p>Pas de compte ?
              <a href="#" class="log text-decoration-none" data-toggle="modal" data-target="#modalRegisterForm{{$pricing->id}}" data-dismiss="modal" aria-label="Close">S'INSCRIRE</a>
            </p>
          </div>
        </div>
      </div>
    </div>

                      <!--===== END LOGIN FORM   =======-->

                      <!--===== REGISTER FORM   =======-->

    <div class="modal fade" id="modalRegisterForm{{$pricing->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">S'inscrire</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="" action="/customRegister" method="post">
              @csrf
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-name">Nom et Prénoms</label>
                  <input name="name" type="text" id="orangeForm-name" class="form-control validate">
                </div>
                <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                  <input name="email" type="email" id="orangeForm-email" class="form-control validate">
                  <input hidden type="text" name="slug" value="{{$pricing->course->slug}}">
                  <input hidden type="text" name="pricing" value="{{$pricing->id}}">
                </div>

                <div class="md-form mb-4">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Mot de passe </label>
                  <input name="password" type="password" id="orangeForm-pass" class="form-control validate">
                </div>

                <div class="md-form mb-4">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Confirmez votre mot de passe </label>
                  <input type="password" name="password_confirmation" id="orangeForm-pass" class="form-control validate">
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">S'inscrire</button>
              </div>
          </form>
          <div class="modal-footer d-flex justify-content-center">
            <p>Avez-vous un compte ?
              <a href="#" class="log " data-toggle="modal" data-target="#modalLogin{{$pricing->id}}" data-dismiss="modal" aria-label="Close">CONNECTEZ-VOUS!</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    @endif
    @endforeach

                        <!--===== END REGISTER FORM   =======-->
