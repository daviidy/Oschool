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


.btn-blue-g{color:#fff;background-color:#0086B6;border-color:#0086B6;}
.btn-blue-g:focus{color:#fff;background-color:#0086B6;border-color:#761c19;}
.btn-blue-g:hover{color:#fff;background-color:#0a568c;border-color:#0a568c;}
.btn-blue-g:active{color:#fff;background-color:#c9302c;border-color:#ac2925;}
.btn-blue-g:active:focus,.btn-danger:active:hover{color:#fff;background-color:#ac2925;border-color:#761c19;}
.btn-blue-g:active{background-image:none;}

.btn-black-g{color:#fff;background-color:#545454;border-color:#545454;}
.btn-black-g:focus{color:#fff;background-color:#545454;border-color:#545454;}
.btn-black-g:hover{color:#fff;background-color:#2B2B2B;border-color:#2B2B2B;}
.btn-black-g:active{color:#fff;background-color:#c9302c;border-color:#ac2925;}
.btn-black-g:active:focus,.btn-danger:active:hover{color:#fff;background-color:#ac2925;border-color:#761c19;}
.btn-black-g:active{background-image:none;}




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

<style>
 .stretch-card>.card {
     width: 100%;
     min-width: 100%
 }

 body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 3rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #3da5f;
     border-radius: 0
 }

 .card .card-body {
     padding: 1.25rem 1.75rem
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 .btn.btn-social-icon {
     width: 50px;
     height: 50px;
     padding: 0
 }

 .template-demo>.btn {
     margin-right: 0.5rem !important
 }

 .template-demo {
     margin-top: 0.5rem !important
 }

 .btn.btn-rounded {
     border-radius: 50px
 }

 .btn-outline-facebook {
     border: 1px solid #3b579d;
     color: #3b579d
 }

 .btn-outline-facebook:hover {
     background: #3b579d;
     color: #ffffff
 }

 .btn-outline-youtube {
     border: 1px solid #e52d27;
     color: #e52d27
 }

 .btn-outline-github {
     border: 1px solid #2B2B2B;
     color: #545454
 }

 .btn-outline-dribbble {
     border: 1px solid #ea4c89;
     color: #ea4c89
 }

 .btn-outline-linkedin {
     border: 1px solid #0177b5;
     color: #0177b5
 }

 .btn-outline-instagram {
     border: 1px solid #dc4a38;
     color: #dc4a38
 }

 .btn-outline-github:hover {
     background: #2B2B2B;
     color: #ffffff
 }

 .btn-outline-linkedin:hover {
     background: #0177b5;
     color: #ffffff
 }

 .btn-outline-youtube:hover {
     background: #e52d27;
     color: #ffffff
 }

 .btn-outline-instagram:hover {
     background: #e52d27;
     color: #ffffff
 }

 .btn-facebook {
     background: #3b579d;
     color: #ffffff
 }

 .btn-youtube {
     background: #e52d27;
     color: #ffffff
 }

 .btn-github {
     background: #2B2B2B;
     color: #ffffff
 }

 .btn-dribbble {
     background: #ea4c89;
     color: #ffffff
 }

 .btn-linkedin {
     background: #0177b5;
     color: #ffffff
 }

 .btn-instagram {
     background: #dc4a38;
     color: #ffffff
 }

 .btn-facebook:hover,
 .btn-facebook:focus {
     background: #2d4278;
     color: #ffffff
 }

 .btn-youtube:hover,
 .btn-youtube:focus {
     background: #c21d17;
     color: #ffffff
 }

 .btn-github:hover,
 .btn-github:focus {
     background: #2B2B2B;
     color: #ffffff
 }

 .btn-dribbble:hover,
 .btn-dribbble:focus {
     background: #e51e6b;
     color: #ffffff
 }

 .btn-linkedin:hover,
 .btn-linkedin:focus {
     background: #015682;
     color: #ffffff
 }

 .btn-instagram:hover,
 .btn-instagram:focus {
     background: #bf3322;
     color: #ffffff
 }
</style>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




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
                
                <br>

                <p style="text-align: center;"> <span>Contenez-vous avec <i class="fa fa-arrow-down"></i> </span></p>

                  <div style="text-align: center;">

                    <br>
                    <div class="card-body">
                      <div class="template-demo"> 
                       <a style="text-decoration:none;" href="{{ url('login/facebook') }}"> <button type="button" class="btn btn-social-icon btn-outline-facebook">
                          <i class="fa fa-facebook"></i>
                        </button> </a>

                       <a style="text-decoration:none;" href="{{ url('login/gmail') }}"> <button type="button" class="btn btn-social-icon btn-outline-youtube">
                          <i class="fa fa-google"></i>
                        </button></a>
                        
                       <a style="text-decoration:none;" href="{{ url('login/github') }}"> <button type="button" class="btn btn-social-icon btn-outline-github">
                          <i class="fa fa-github"></i>
                        </button> </a>

                        
                       <a style="text-decoration:none;" href="{{ url('login/linkedin') }}"> <button type="button" class="btn btn-social-icon btn-outline-linkedin">
                          <i class="fa fa-linkedin"></i>
                        </button></a>
                        
                      
                      </div>
                      {{-- <div class="template-demo"> <button type="button" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button> <button type="button" class="btn btn-social-icon btn-youtube"><i class="fa fa-youtube"></i></button> <button type="button" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button> <button type="button" class="btn btn-social-icon btn-dribbble"><i class="fa fa-dribbble"></i></button> <button type="button" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></button> <button type="button" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button> </div> --}}
                      {{-- <div class="template-demo"> <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="fa fa-facebook"></i></button> <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="fa fa-youtube"></i></button> <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="fa fa-twitter"></i></button> <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i class="fa fa-dribbble"></i></button> <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i class="fa fa-linkedin"></i></button> <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i class="fa fa-instagram"></i></button> </div> --}}
                  </div>


                    {{-- <a href="{{ url('login/facebook') }}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> {{ __('Connexion avec ') }}<b>Facebook</b></a>
                    <a href="{{ url('login/gmail') }}" class="btn btn-danger-g btn-lg btn-block btn-g"><i class="fa fa-google"></i> {{__('Connexion avec ') }} <b>Google</b></a>
                    <a href="{{ url('login/linkedin') }}" class="btn btn-blue-g btn-lg btn-block btn-g"><i class="fa fa-linkedin"></i> {{__('Connexion avec ') }} <b>Linkedin</b></a>
                    <a href="{{ url('login/github') }}" class="btn btn-black-g btn-lg btn-block btn-g"><i class="fa fa-github"></i> {{__('Connexion avec ') }} <b>Github</b></a> --}}
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
