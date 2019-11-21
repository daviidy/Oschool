@extends('layouts.auth')

@section('content')


  <style>
    /*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css */
a{background-color:transparent;}
a:active,a:hover{outline:0;}
b{font-weight:700;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:focus,.btn:hover{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125);}
.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4;}
.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40;}
.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74;}
.btn-primary:active{color:#fff;background-color:#286090;border-color:#204d74;}
.btn-primary:active:focus,.btn-primary:active:hover{color:#fff;background-color:#204d74;border-color:#122b40;}
.btn-primary:active{background-image:none;}
.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px;}
.btn-block{display:block;width:100%;}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-facebook:before{content:"\f09a";}
/*! CSS Used from: Embedded */
.btn{border-radius:50px;outline:none!important;}
.login-form .btn{font-size:18px;line-height:26px;font-weight:bold;text-align:center;}
.social-btn .btn{color:#fff;margin:10px 0;font-size:15px;border-radius:50px;text-indent:10px;font-weight:normal;border:none;text-align:center;}
.social-btn .btn:hover{opacity:0.9;}
.social-btn .btn-primary{background:#507cc0;}
.social-btn .btn i{margin-right:9px;font-size:20px;min-width:25px;position:relative;top:2px;}
.login-form a{color:#5cb85c;}
/*! CSS Used fontfaces */
@font-face{font-family:'FontAwesome';src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?v=4.7.0');src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal;}




  </style>


<style>

/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css */
a{background-color:transparent;}
a:active,a:hover{outline:0;}
b{font-weight:700;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn-g:focus,.btn-g:hover{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125);}
.btn-danger-g{color:#fff;background-color:#d9534f;border-color:#d43f3a;}
.btn-danger-g:focus{color:#fff;background-color:#c9302c;border-color:#761c19;}
.btn-danger-g:hover{color:#fff;background-color:#c9302c;border-color:#ac2925;}
.btn-danger-g:active{color:#fff;background-color:#c9302c;border-color:#ac2925;}
.btn-danger-g:active:focus,.btn-danger:active:hover{color:#fff;background-color:#ac2925;border-color:#761c19;}
.btn-danger-g:active{background-image:none;}
.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px;}
.btn-block{display:block;width:100%;}
.btn-block+.btn-block{margin-top:5px;}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-google:before{content:"\f1a0";}
/*! CSS Used from: Embedded */
.btn{border-radius:50px;outline:none!important;}
.login-form .btn{font-size:18px;line-height:26px;font-weight:bold;text-align:center;}
.social-btn .btn{color:#fff;margin:10px 0;font-size:15px;border-radius:50px;text-indent:10px;font-weight:normal;border:none;text-align:center;}
.social-btn .btn:hover{opacity:0.9;}
.social-btn .btn-danger{background:#df4930;}
.social-btn .btn i{margin-right:9px;font-size:20px;min-width:25px;position:relative;top:2px;}
.login-form a{color:#5cb85c;}
/*! CSS Used fontfaces */
@font-face{font-family:'FontAwesome';src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?v=4.7.0');src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal;}
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





                  <div class="account-form-button-container">
                    <br>
                    <input autocomplete="off" type="submit" name="commit" value="Se connecter" id="signup_final" class="orange-button btn">
                  </div>
                </form>


                <p style="text-align: center;"> <span>Ou</span></p>

                  <div style="text-align: center;">

                    <br>

                    {{-- <button class="loginBtn loginBtn--facebook">
                      <a class="btn btn-link" href="{{ url('login/facebook') }}">
                      <span class="_8jan">{{ __('Connexion avec facebook') }}</span>
                    </a>
                    </button> --}}

                    {{-- <button class="loginBtn loginBtn--google">
                      <a class="btn btn-link" href="{{ url('login/gmail') }}">
                      <span class="_8jan">{{ __('Connexion avec gmail') }}</span>
                    </a> --}}

                    <a href="{{ url('login/facebook') }}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> {{ __('Connexion avec ') }}<b>Facebook</b></a>
                    <a href="{{ url('login/gmail') }}" class="btn btn-danger-g btn-lg btn-block btn-g"><i class="fa fa-google"></i> {{__('Connexion avec ') }} <b>Google</b></a>
                    <a href="{{ url('login/linkedin') }}" class="btn btn-danger-g btn-lg btn-block btn-g"><i class="fa fa-linkedin"></i> {{__('Connexion avec ') }} <b>Linkedin</b></a>
                    <a href="{{ url('login/github') }}" class="btn btn-danger-g btn-lg btn-block btn-g"><i class="fa fa-github"></i> {{__('Connexion avec ') }} <b>Github</b></a>
                  </div>

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
