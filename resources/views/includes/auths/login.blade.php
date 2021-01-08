<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d86848cfe0.js"></script>
    <style media="screen">
      i{
        font-size: 15px;
      }
    </style>
  </head>
  <body class="">
    <!-- Modal -->
    <div class="modal fade bg-light" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <span class="float-right position-absolute rounded-circle svg-delete close" data-dismiss="modal" aria-label="Close"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg></span>
      <div class="modal-dialog modal-dialog-centered rounded-lg border-0 ">
        <div class="modal-content border-0 shadow px-0">
          <div class="position-relative text-center p-3" style="bottom:30px">
            <div class="mx-auto">
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8" alt="" class="img-fluid rounded-circle avatar-login-img" style="width: 120px; height:120px;">
            </div>
              <div class="">
                <p class="w-75 mx-auto mb-0 text-center h4 pt-3">Bienvenue! Connectez-vous</p>
              </div>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="card border-0">
                    <div class="card-body p-0">
                      @error('email')
                      <div class="alert alert-danger">
                      {{$message}}
                      </div>
                      @enderror
                      @error('password')
                      <div class="alert alert-danger">
                      {{$message}}
                      </div>
                      @enderror
                      <form method="POST" action="{{ route('login') }}" class="new_teachable_account" id="new_teachable_account" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Adresse email</label>
                          <input required type="email" class="form-control border-primary form-control-lg border-left-0 border-top-0 border-right-0 bg-light" name="email" id="modal_email_field" aria-describedby="emailHelp">
                          <!--small id="emailHelp" class="form-text text-muted">Ces informations d'identification ne correspondent pas à nos enregistrements.</small-->
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mot de passe</label>
                          <input type="password" required autocomplete="off" autofocus="autofocus" class="form-control border-primary form-control-lg border-left-0 border-top-0 border-right-0 bg-light" name="password" id="password">
                        </div>
                        <div class="form-group form-check text-center">
                          <input {{ old('remember') ? 'checked' : '' }} type="checkbox" class="form-check-input" id="remember" default="default">
                          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                          <p class="text-center">
                            @if (Route::has('password.request'))
                                            <a style="margin-bottom: 20px;" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié?') }}
                                            </a>
                            @endif
                          </p>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-lg rounded-pill px-md-4" name="commit" id="signup_final">Se connecter</button>
                        </div>
                      </form>
                      <br>
                      <div class="container">
                        <p class="font-weight-lighter text-center ">Connectez-vous avec <span><i class="fas fa-arrow-down text-dark"></i></span> </p>
                        <div class="py-md-4 d-flex justify-content-center align-items-center">
                          <div class="">
                            <div class="p-2">
                              <a href="{{ url('login/facebook') }}" class="text-decoration-none ">
                                <i class="fab fa-facebook-f bg-light p-3 border border-primary rounded-circle text-center text-primary"></i>
                              </a>
                            </div>
                          </div>
                          <div class="">
                            <div class="p-2">
                              <a href="{{ url('login/gmail') }}" class="text-decoration-none ">
                                <i class="fab fa-google bg-light p-3 border border-danger text-danger rounded-circle text-center"></i>
                              </a>
                            </div>
                          </div>
                          <div class="">
                            <div class="p-2">
                              <a href="{{ url('login/github') }}" class="text-decoration-none ">
                                <i class="fab fa-github p-3 border border-dark text-dark rounded-circle text-center"></i>
                              </a>
                            </div>
                          </div>
                          <div class="">
                            <div class="p-2">
                              <a href="{{ url('login/linkedin') }}">
                                <i class="fab fa-linkedin-in p-3 border border-primary text-primary rounded-circle text-center"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <p class="text-center">Vous n'avez pas de compte ? <a href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#registerModal">Inscrivez-vous</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div-->
        </div>
      </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
