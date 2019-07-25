@extends('layouts.auth')

@section('content')

  <section class="sign-up-form account-form">

    <div class="form-aligner">
      <div class="inner-box">
        <div class="top-box">
          <div class="top-box-text">
            <h1>Démarrez avec Oschool</h1>
            <ol class="signup-step-anchor">
              <li class="selected"><span class="step-number">1</span> Inscrivez-vous</li>
            </ol>
          </div>
        </div>
        <div class="left-box">
          <h1>Démarrez avec Oschool</h1>
          <img src="https://s3-us-west-2.amazonaws.com/static-css-assets/bg/background-school-signup.svg">
          <ol class="signup-step-anchor">
            <li class="selected"><span class="step-number">1</span> Inscrivez-vous</li>
          </ol>
        </div>
        <div class="right-box">
          <br>
          <div class="fields">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                @error('full_name')
                <div class="error" id="error_username">Entrez un nom valide svp.</div>
                @enderror
                @error('email')
                <div class="error" id="error_email">Entrez un email valide svp</div>
                @enderror
                @error('password')
                <div class="error" id="error_pw">{{$message}}</div>
                @enderror

                <form method="POST" action="{{ route('register') }}" class="new_teachable_account" id="new_teachable_account" accept-charset="UTF-8">
                    @csrf
                  <div class="group">
                    <label class="control-label" for="name">Nom et prénoms</label>
                    <div class="control-input">
                      <input required autofocus="autofocus" class="form-control input-hg" value="" type="text" name="name" id="modal_name_field">
                    </div>
                  </div>
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
                        <input required autocomplete="off" class="form-control input-hg" autofocus="autofocus" value="" placeholder="" type="password" name="password" id="modal_password_field">
                      </div>
                    </div>
                    <div class="group col-md-6 col-sm-12">
                      <label class="control-label" for="password-confirm">Confirmez le mot de passe</label>
                      <div class="control-input">
                        <input required autocomplete="off" class="form-control input-hg" type="password" name="password_confirmation" id="modal_confirm_password_field">
                      </div>
                    </div>
                  </div>


                  <div class="account-form-button-container">
                    <br>
                    <input autocomplete="off" type="submit" name="commit" value="S'inscrire" id="signup_final" class="orange-button btn">
                  </div>
                </form>
                <div id="right-box-spinner" class="right-box-spinner create-form-spinner hidden"></div>
              </div>
            </div>
          </div>
          <div></div>
          <div class="box-footer full-width-box">
            <h2>Déjà un compte ?</h2>
            <a class="login-goto" href="{{route('login')}}">Connectez-vous</a>
          </div>
        </div>
      </div>
    </div>
  </section>




@endsection
