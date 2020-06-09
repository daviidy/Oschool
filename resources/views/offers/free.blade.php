@extends('layouts.menu-pricingPartners')
@section('title', $offer->name)


@section('content')




<div class="spc" data-checkout="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic#" data-initialized="true">


    <main id="sr-main-content" tab-index="-1" class="container spc__inner">
        <h1 class="sr-only">Commande</h1>
        <div class="col-sm-6">
            <section class="spc__section spc__section--review" data-checkout-main-order-summary="">
                <h2 class="section-hed">Résumé de la commande</h2>

                <section class="spc__box content-box">
                    <div class="row">
                        <div class="spc__box-inner col-xs-12">

                            <div class="spc__row">
                                <div class="spc__summary">
                                    <div class="spc__summary-item spc__course-image">
                                        <img src="https://oschoolelearning.com/images/schools/logos/oschool_2.png" style="max-width: 100%;">
                                    </div>

                                    <div class="spc__summary-item spc--text-light">
                                        {{$offer->name}}
                                    </div>

                                    <div class="spc__summary-item text-right mono">
                                        {{$offer->price}} FCFA
                                    </div>


                                </div>
                            </div>



                            <div data-checkout-price-modifiers="">

                                <div class="spc__row">
                                    <div class="spc__summary hidden" data-checkout-price-modifier-coupon="">
                                        <div class="spc__summary-item spc--text-light">
                                            Code Coupon
                                        </div>

                                        <div class="spc__summary-item text-right mono" data-checkout-price="coupon">- $0.00</div>
                                    </div>

                                    <div data-checkout-inline-form-coupon="">
                                        <div class="binary-toggle" data-binary-toggle="">


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="spc__row spc__row--total">
                                <div class="spc__summary">
                                    <div class="spc__summary-item">
                                        Total
                                    </div>

                                    <div class="spc__summary-item text-right">
                                        <span class="meta" data-checkout-currency="">
                                            FCFA
                                        </span>

                                        <span data-checkout-price="final">{{$offer->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>

            @guest

            <section class="spc__section spc__section--account">
                <h2 id="auth_title" class="section-hed">Créez un compte</h2>

                <div class="content-box spc__box">
                    <div data-checkout-device-message="" class="spc__new-device hidden">
                        <div class="spc__new-device-header">
                            <div class="spc__x">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="emails" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="SPC-unrecognizeddevice" transform="translate(-290.000000, -711.000000)" fill="#D4604B" fill-rule="nonzero">
                                            <g id="Acct-info" transform="translate(248.000000, 627.000000)">
                                                <g id="Group-6" transform="translate(42.000000, 84.000000)">
                                                    <g id="exclamation-circle">
                                                        <path
                                                          d="M18,9 C18,13.9716653 13.9702137,18 9,18 C4.02978629,18 0,13.9716653 0,9 C0,4.0312379 4.02978629,0 9,0 C13.9702137,0 18,4.0312379 18,9 Z M9,10.8145161 C8.07804435,10.8145161 7.33064516,11.5619153 7.33064516,12.483871 C7.33064516,13.4058266 8.07804435,14.1532258 9,14.1532258 C9.92195565,14.1532258 10.6693548,13.4058266 10.6693548,12.483871 C10.6693548,11.5619153 9.92195565,10.8145161 9,10.8145161 Z M7.41509274,4.81405645 L7.68429435,9.74954032 C7.6968871,9.98049194 7.88784677,10.1612903 8.119125,10.1612903 L9.880875,10.1612903 C10.1121532,10.1612903 10.3031129,9.98049194 10.3157056,9.74954032 L10.5849073,4.81405645 C10.5985161,4.56459677 10.3998992,4.35483871 10.1500766,4.35483871 L7.8498871,4.35483871 C7.60006452,4.35483871 7.40148387,4.56459677 7.41509274,4.81405645 Z"
                                                          id="Shape"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <h3 class="section-hed">We don't recognize this device.</h3>
                        </div>


                    </div>

                    <div data-checkout-authentication-message="" class="spc__authenticated hidden">
                        <p>
                        </p>
                        <div class="spc__check"></div>

                        You are logged in as <strong><span data-checkout-authentication-email=""></span></strong>.

                        <p></p>
                    </div>

                    <div class="spc__unauthenticated">
                        <form id="signup" class="form-inline spc__inline-form" data-checkout-inline-form="email" accept-charset="UTF-8" method="post">
                            @csrf
                            <label class="control-label" for="email">Adresse Email</label>

                            <div class="spc__inline-form-inner">
                                <input type="email" name="email" id="email" autofocus="autofocus" class="spc__inline-form-input" data-checkout-email="" data-checkout-inline-input="" placeholder="name@example.com" required="required">
                            </div>

                            <p class="spc__authentication-error meta" data-checkout-inline-error="" data-checkout-authentication-error="" data-authentication-error-default="The email you entered is invalid."
                              data-authentication-error-misspelled-gmail="Did you mean &quot;gmail&quot;?" data-authentication-error-misspelled-com="Did you mean &quot;.com&quot;?" ,=""
                              data-authentication-error-no-tld="Did you forget something? Most email addresses have a &quot;.&quot;, like in &quot;.com&quot;." data-authentication-error-dismiss="Dismiss"></p>

                            <label class="control-label" for="username">Nom d'utilisateur</label>

                            <div class="spc__inline-form-inner">
                                <input type="text" name="name" id="name" autofocus="autofocus" class="spc__inline-form-input" placeholder="John Doe" required="required">
                            </div>


                            <label class="control-label" for="username">Mot de passe</label>

                            <div class="spc__inline-form-inner">
                                <input type="password" name="password" id="password" autofocus="autofocus" class="spc__inline-form-input" placeholder="Mot de passe" required="required">
                            </div>

                            <div class="spc__inline-form-inner">
                                <input hidden type="text" name="school_id" value="{{$offer->course->school->id}}" id="school_id" autofocus="autofocus" class="spc__inline-form-input" placeholder="Mot de passe" required="required">
                            </div>

                            <div class="spc__primary-submit" data-checkout-enroll="">
                                <button id="confirm-register" type="submit" class="btn btn-primary spc__button">
                                    <div class="loader">
                                        <div class="loader-line"></div>
                                        <div class="loader-line"></div>
                                        <div class="loader-line"></div>
                                        <div class="loader-line"></div>
                                    </div>
                                    <span class="spc__button-text">Inscrivez-vous</span>
                                </button>
                            </div>
                        </form>

                        <form style="display: none;" id="login" class="form-inline spc__inline-form" data-checkout-inline-form="email" accept-charset="UTF-8" method="post">
                            @csrf
                            <label class="control-label" for="email">Adresse Email</label>

                            <div class="spc__inline-form-inner">
                                <input type="email" name="email" id="email" autofocus="autofocus" class="spc__inline-form-input" data-checkout-email="" data-checkout-inline-input="" placeholder="name@example.com" required="required">
                            </div>

                            <p class="spc__authentication-error meta" data-checkout-inline-error="" data-checkout-authentication-error="" data-authentication-error-default="The email you entered is invalid."
                              data-authentication-error-misspelled-gmail="Did you mean &quot;gmail&quot;?" data-authentication-error-misspelled-com="Did you mean &quot;.com&quot;?" ,=""
                              data-authentication-error-no-tld="Did you forget something? Most email addresses have a &quot;.&quot;, like in &quot;.com&quot;." data-authentication-error-dismiss="Dismiss"></p>


                            <label class="control-label" for="username">Mot de passe</label>

                            <div class="spc__inline-form-inner">
                                <input type="password" name="password" id="password" autofocus="autofocus" class="spc__inline-form-input" placeholder="Mot de passe" required="required">
                            </div>


                            <div class="spc__inline-form-inner">
                                <input type="checkbox" name="remember" id="remember" autofocus="autofocus" class="spc__inline-form-input" required="required">
                                Se souvenir de moi
                            </div>

                            <div class="spc__primary-submit" data-checkout-enroll="">
                                <button id="confirm-login" type="submit" class="btn btn-primary spc__button">
                                    <div class="loader">
                                        <div class="loader-line"></div>
                                        <div class="loader-line"></div>
                                        <div class="loader-line"></div>
                                        <div class="loader-line"></div>
                                    </div>
                                    <span class="spc__button-text">Connectez-vous</span>
                                </button>
                            </div>
                        </form>
                        <p>
                            <a id="login_link" style="cursor: pointer;">
                                Déjà un compte ? Connectez-vous
                            </a>
                        </p>
                        <p>
                            <a style="display: none; cursor: pointer;" id="register_link">
                                Pas encore de compte ? Inscrivez-vous
                            </a>
                        </p>

                        <div id="user-password-form">
                            <div class="spc__password alert alert-warning hidden" data-checkout-alert="school">

                                <p class="spc__password-subtitle">
                                    It looks like you already have a 52Kards account.
                                </p>

                                <form class="form-inline spc__inline-form" data-checkout-inline-form="login-school" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/login" accept-charset="UTF-8" method="post"><input name="utf8"
                                      type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">

                                    <div class="spc__inline-form-inner">
                                        <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                                        <input type="password" name="password" id="password_school" value="" autocomplete="off" class="spc__inline-form-input" data-checkout-inline-input="" required="required" placeholder="Enter password">

                                        <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                                            <button class="btn btn-primary">
                                                <div class="loader">
                                                    <div class="loader-line"></div>
                                                    <div class="loader-line"></div>
                                                    <div class="loader-line"></div>
                                                    <div class="loader-line"></div>
                                                </div>

                                                <div class="spc__inline-form-button-text">
                                                    Log In
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="spc__inline-form-error hidden" data-checkout-inline-error="" data-checkout-inline-error-locked="Your account has been locked due to an excessive number of unsuccessful sign in attempts.">
                                        Invalid email or password
                                    </div>

                                </form>
                                <p class="text-muted">If this is not you, please use a different email address.</p>
                                <p class="text-muted">If you forgot your password, <a href="https://sso.teachable.com/secure/6419/users/password/new">click here to reset it</a>.</p>

                            </div>

                        </div>

                        <div id="teachable-account-password-form">
                            <div class="spc__password alert alert-warning hidden" data-checkout-alert="myteachable">

                                <p class="spc__password-subtitle">
                                    It looks like you already have a myTeachable account.
                                </p>

                                <form class="form-inline spc__inline-form" data-checkout-inline-form="login-teachable" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/login" accept-charset="UTF-8" method="post"><input
                                      name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">

                                    <div class="spc__inline-form-inner">
                                        <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                                        <input type="password" name="password" id="password_myteachable" value="" autocomplete="off" class="spc__inline-form-input" data-checkout-inline-input="" required="required" placeholder="Enter password">

                                        <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                                            <button class="btn btn-primary">
                                                <div class="loader">
                                                    <div class="loader-line"></div>
                                                    <div class="loader-line"></div>
                                                    <div class="loader-line"></div>
                                                    <div class="loader-line"></div>
                                                </div>

                                                <div class="spc__inline-form-button-text">
                                                    Log In
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="spc__inline-form-error hidden" data-checkout-inline-error="" data-checkout-inline-error-locked="Your account has been locked due to an excessive number of unsuccessful sign in attempts.">
                                        Invalid email or password
                                    </div>

                                </form>
                                <p class="text-muted">If this is not you, please use a different email address.</p>
                                <p class="text-muted">If you forgot your password, <a href="https://sso.teachable.com/secure/teachable_accounts/password/new">click here to reset it</a>.</p>

                            </div>

                        </div>
                    </div>
                </div>

            </section>

            @endguest

            @auth

            <section class="spc__section spc__section--review" data-checkout-main-order-summary="">
                <h2 class="section-hed">Information du compte</h2>

                <section class="spc__box content-box">
                    <div class="row">
                        <div class="spc__box-inner col-xs-12">

                            <div class="spc__row">
                                <div class="spc__summary">
                                    <div class="spc__summary-item spc__course-image">
                                        <img src="https://oschoolelearning.com/images/schools/logos/oschool_2.png" style="max-width: 100%;">
                                    </div>

                                    <div class="spc__summary-item spc--text-light">
                                        Nom d'utilisateur: {{Auth::user()->name}}
                                    </div>

                                    <div class="spc__summary-item text-right mono">
                                        Email: <br>
                                        {{Auth::user()->email}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>

            @endauth




            @auth
            <div class="spc__primary-submit" data-checkout-enroll="">


                <form method="post" enctype="multipart/form-data" action="/subscribeForFree">
                    {{ csrf_field() }}

                    <div style="display: none;" class="">
                      <input type="text" name="purchase_id" value="{{$purchase->id}}">
                    </div>
                    <button id="confirm-cinetpay" type="submit" class="btn btn-primary spc__button">
                        Adhérer à l'offre gratuite
                    </button>

                </form>

            </div>

            @endauth

            <div class="spc__description hidden" data-checkout-price="description" data-checkout-price-string="for the first month then">
                {{$offer->price}} FCFA
            </div>

        </div>

    </main>
</div>


{{--
<script type="text/javascript">
$(document).ready(function(){
    $("#login_link").on('click', function(){
        $('#signup').css('display', 'none');
        $('#login').css('display', 'block');
        $('#register_link').css('display', 'block');
        $(this).css('display', 'none');
        $("#auth_title").text("Connectez-vous");
    });
    $("#register_link").on('click', function(){
        $('#signup').css('display', 'block');
        $('#login').css('display', 'none');
        $('#login_link').css('display', 'block');
        $(this).css('display', 'none');
        $("#auth_title").text("Créez un compte");
    });
});
        $("#confirm-login").on('click', function(event) {
            event.preventDefault();
            var token    = $("#login input[name=_token]").val();
            var email    = $("#login input[name=email]").val();
            var password = $("#login input[name=password]").val();
            var remember = $("#login input[name=remember]").val();
            var data = {
                _token:token,
                email:email,
                password:password,
                remember:remember
            };
            // Ajax Post
            $.ajax({
                type: "post",
                url: "/login/user",
                data: data,
                cache: false,
                success: function (data)
                {
                    $.amaran({'message':'Authentification réussie !'});
                    window.location = '/course/{{$offer->course->slug}}/checkout/{{$offer->id}}';
                },
                error: function (xhr, msg) {
                  console.log(msg + '\n' + xhr.responseText);
              }
            });
            return false;
        });
        $("#confirm-register").on('click', function(event) {
            event.preventDefault();
            // next code goes here...
            var token       = $("#signup input[name=_token]").val();
            var email       = $("#signup input[name=email]").val();
            var name       = $("#signup input[name=name]").val();
            var password    = $("#signup input[name=password]").val();
            var school_id    = $("#signup input[name=school_id]").val();
            // garnish the data
            var data = {
                _token: token,
                email: email,
                name: name,
                password: password,
                school_id: school_id
            };
            // ajax post
            $.ajax({
                type: "post",
                url: "/register/user",
                data: data,
                cache: false,
                success: function (data){
                    $.amaran({'message':'Votre compte a bien été crée avec succès ! Vous pouvez maintenant vous connecter'});
                    $("#signup")[0].reset(); // this reset the form to back to normal
                    $('#signup').css('display', 'none');
                    $('#login').css('display', 'block');
                    $('#register_link').css('display', 'block');
                    $(this).css('display', 'none');
                    $("#auth_title").text("Connectez-vous maintenant!");

                },
                error: function (xhr, msg) {
                  console.log(msg + '\n' + xhr.responseText);
              }
            });
            // this make sure the form doesn't load
            // a form pause
            return false;
        });
    </script>
    --}}




@endsection
