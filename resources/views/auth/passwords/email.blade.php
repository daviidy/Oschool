@extends('layouts.auth')

@section('content')

<section class="sign-up-form account-form">

    <div class="form-aligner">
      <div class="inner-box">
        <div class="top-box">
          <div class="top-box-text">
            <h1>Mot de passe oublié</h1>
            <ol class="signup-step-anchor">
              <li class="selected">Mot de passe oublié</li>
            </ol>
          </div>
        </div>
        <div class="left-box">
          <h1>Mot de passe oublié</h1>
          <img src="">
          <ol class="signup-step-anchor">
            <li class="selected">Mot de passe oublié</li>
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

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form method="POST" action="{{ route('password.email') }}" class="new_teachable_account" id="new_teachable_account" accept-charset="UTF-8">
                    @csrf

                  <div class="group">
                    <label class="control-label" for="email">Adresse email</label>
                    <div class="control-input">
                      <input required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" id="modal_email_field">
                      {{-- <input required id="email" type="email" class="form-control input-hg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus> --}}
                    
                      
                    </div>
                </div>
                
            </div>
            
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
            
            <div></div>
            <br>

                  <div class="account-form-button" style="margin: 0 auto;width: 290px;">
                    <br>
                    <button autocomplete="off" type="submit" name="commit" id="signup_final" class="orange-button btn">Envoyez moi le lien</button>
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}