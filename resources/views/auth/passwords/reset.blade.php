@extends('layouts.auth')

@section('content')
<section class="sign-up-form account-form">

    <div class="form-aligner">
      <div class="inner-box">
        <div class="top-box">
          <div class="top-box-text">
            <h1>Modifier votre mot de passe</h1>
            <ol class="signup-step-anchor">
              <li class="selected">Modifier votre mot de passe</li>
            </ol>
          </div>
        </div>
        <div class="left-box">
          <h1>Modifier votre mot de passe</h1>
          <img src="">
          <ol class="signup-step-anchor">
            <li class="selected">Modifier votre mot de passe</li>
          </ol>
        </div>
        <div class="right-box">
          <br>
          <div class="fields">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">

                {{-- @error('email')
                <div class="error" id="error_email">Entrez un email valide svp</div>
                @enderror
                @error('password')
                <div class="error" id="error_pw">{{$message}}</div>
                @enderror --}}

                <form method="POST" action="{{ route('password.update') }}" class="new_teachable_account" id="new_teachable_account" accept-charset="UTF-8">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                  <div class="group">
                    <label class="control-label" for="email">Votre adresse email</label>
                    <div class="control-input">
                      {{-- <input required class="form-control input-hg" value="" type="email" name="email" id="modal_email_field"> --}}
                      <input id="email" type="email" class="form-control input-hg @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="group col-md-6 col-sm-12">
                      <label class="control-label" for="password">Nouveau mot de passe</label>
                      <div class="control-input">
                        {{-- <input required autocomplete="off" class="form-control input-hg" autofocus="autofocus" value="" placeholder="" type="password" name="password" id="password"> --}}
                        <input id="password" type="password" class="form-control input-hg @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                        
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    
                    </div>
                    </div>
                    <div class="group col-md-6 col-sm-12">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le nouveau mot de passe') }}</label>

                        <div class="control-input" >
                            <input id="password-confirm" type="password" class="form-control input-hg" name="password_confirmation" required autocomplete="off">
                        </div>
                    </div>

                  </div>




                  <div class="account-form-button-container">
                    <br>
                    <input autocomplete="off" type="submit" name="commit" value="Modifié le mot de passe" id="signup_final" class="orange-button btn">
                  </div>
                </form>
                <div id="right-box-spinner" class="right-box-spinner create-form-spinner hidden"></div>
              </div>
            </div>
          </div>
          <div></div>
        </div>
      </div>
    </div>
  </section>

@endsection







{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}