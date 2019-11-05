@extends('layouts.auth')

@section('content')
<section class="sign-up-form account-form">

        <div class="form-aligner">
          <div class="inner-box">
            <div class="top-box">
              <div class="top-box-text">
                <h1>Confirmer votre addresse email</h1>
                <ol class="signup-step-anchor">
                  <li class="selected"> Confirmation d'email</li>
                </ol>
              </div>
            </div>
            <div class="left-box">
              <h1>Confirmer votre addresse email</h1>
              <img src="">
              <ol class="signup-step-anchor">
                <li class="selected">Confirmation d'email</li>
              </ol>
            </div>
            <div class="right-box">
              <br>
              <div class="fields">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
    





                        <div class="card">
                                <div class="card-header"><h3>{{ __('Vérifier votre adresse email') }}</h3></div>
                
                                <div class="card-body">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            <strong style="color:red;">{{ __('Un nouveau lien a ete envoyer.') }}</strong>
                                            <br>
                                        </div>
                                    @endif
                
                                    {{ __('Avant de continuer, veuillez consulter votre adresse email pour les liens de confimation') }}
                                    {{ __("Si vous n'avez pas reçu d'email") }}, <strong> <em><a href="{{ route('verification.resend') }}">{{ __('cliquer ici pour renvoyer un nouveau') }}</a></em></strong>.
                                </div>
                            </div>










                    <div id="right-box-spinner" class="right-box-spinner create-form-spinner hidden"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
@endsection




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div> --}}