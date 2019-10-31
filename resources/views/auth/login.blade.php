@extends('layouts.auth')

@section('content')

  <section class="sign-up-form account-form">

    <div class="form-aligner">
      <div class="inner-box">
        <div class="top-box">
          <div class="top-box-text">
            <h1>Connectez-vous à Oschool</h1>
            <ol class="signup-step-anchor">
              <li class="selected"> Connectez-vous</li>
            </ol>
          </div>
        </div>
        <div class="left-box">
          <h1>Connectez-vous à Oschool</h1>
          <img src="">
          <ol class="signup-step-anchor">
            <li class="selected">Connectez-vous</li>
          </ol>
        </div>
        <div class="right-box">
          <br>
          <div class="fields">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">

                @error('email')
                <div class="error" id="error_email">Entrez un email valide svp</div>
                @enderror
                @error('password')
                <div class="error" id="error_pw">{{$message}}</div>
                @enderror

                <form method="POST" action="{{ route('login') }}" class="new_teachable_account" id="new_teachable_account" accept-charset="UTF-8">
                    @csrf

                  <div class="group">
                    <label class="control-label" for="email">Adresse email</label>
                    <div class="control-input">
                      <input required class="form-control input-hg" value="" type="email" name="email" id="modal_email_field">
                    </div>
                  </div>
                  <div class="row">
                    <div class="group col-md-6 col-sm-12">
                      <label class="control-label" for="password">Mot de passe</label>
                      <div class="control-input">
                        <input required autocomplete="off" class="form-control input-hg" autofocus="autofocus" value="" placeholder="" type="password" name="password" id="password">
                      </div>
                    </div>

                  </div>

                  <div class="agree-to-terms text-center">
                    <label class="checkbox-label">
                      <input {{ old('remember') ? 'checked' : '' }} id="remember" default="default" type="checkbox" name="remember" class="terms-of-service-checkbox">Se souvenir de moi</a>
                    </label>

                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                    @endif
                  </div>



                  <div class="account-form-button-container">
                    <br>
                    <input autocomplete="off" type="submit" name="commit" value="Se connecter" id="signup_final" class="orange-button btn">
                  </div>
                </form>
                <div id="right-box-spinner" class="right-box-spinner create-form-spinner hidden"></div>
              </div>
            </div>
          </div>
          <div></div>
          <div class="box-footer full-width-box">
            <h2>Vous n'avez pas de compte ?</h2>
            <a class="login-goto" href="{{route('register')}}">Inscrivez-vous</a>
          </div>
        </div>
      </div>
    </div>
  </section>




@endsection
