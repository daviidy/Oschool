@extends('layouts.auth')

@section('content')
 
<style>

  /* Shared */
  .loginBtn {
    box-sizing: border-box;
    position: relative;
    /* width: 13em;  - apply for fixed size  okk*/
    margin: 0.3em;
    padding: 10px 30px 10px 46px;
    border: none;
    text-align: left;
    line-height: 34px;
    white-space: nowrap;
    border-radius: 0.2em;
    font-size: 16px;
    color: #FFF;
  }
  .loginBtn:before {
    content: "";
    box-sizing: border-box;
    position: absolute;
    top: 0;
    left: 0;
    width: 34px;
    height: 100%;
  }
  .loginBtn:focus {
    outline: none;
  }
  .loginBtn:active {
    box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
  }
  
  
  /* Facebook */
  .loginBtn--facebook {
    background-color: #4C69BA;
    background-image: linear-gradient(#4C69BA, #3B55A0);
    /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
    text-shadow: 0 -1px 0 #354C8C;
  }
  .loginBtn--facebook:before {
    border-right: #364e92 1px solid;
    background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
  }
  .loginBtn--facebook:hover,
  .loginBtn--facebook:focus {
    background-color: #5B7BD5;
    background-image: linear-gradient(#5B7BD5, #4864B1);
  }
  
  
  /* Google */
  .loginBtn--google {
    /*font-family: "Roboto", Roboto, arial, sans-serif;*/
    background: #DD4B39;
  }
  .loginBtn--google:before {
    border-right: #BB3F30 1px solid;
    background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
  }
  .loginBtn--google:hover,
  .loginBtn--google:focus {
    background: #E74B37;
  }
  </style>
  

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
                                    <a style="margin-bottom: 20px;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                    @endif
                     
                    
                  </div>

                  <p style="text-align: center;"> <span>Ou</span></p>

                  <div style="text-align: center;">
                  
                    <br>
  
                    <button class="loginBtn loginBtn--facebook">
                      <a class="btn btn-link" href="{{ url('login/facebook') }}">
                      <span class="_8jan">{{ __('Connexion avec facebook') }}</span>
                    </a>
                    </button>
  
                    <button class="loginBtn loginBtn--google">
                      <a class="btn btn-link" href="{{ url('login/gmail') }}">
                      <span class="_8jan">{{ __('Connexion avec gmail') }}</span>
                    </a>
                    </button>
                  
                  
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
