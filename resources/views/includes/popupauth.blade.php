

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
                    <input {{ old('remember') ? 'checked' : '' }} id="remember" default="default" type="checkbox" name="remember" class="terms-of-service-checkbox">Se souvenir de moi</a>
                  </label>

                  @if (Route::has('password.request'))
                                  <a style="margin-bottom: 20px;" class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Mot de passe oublié?') }}
                                  </a>
                  @endif


                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">Se connecter</button>
              </div>
          </form>
          <div class="modal-footer d-flex justify-content-center">
            <p>Pas de compte ?
              <a href="#" class="log" data-toggle="modal" data-target="#modalRegisterForm{{$pricing->id}}" data-dismiss="modal" aria-label="Close">s'inscrire</a>
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
        </div>
      </div>
    </div>

    @endif
    @endforeach

                        <!--===== END REGISTER FORM   =======-->
