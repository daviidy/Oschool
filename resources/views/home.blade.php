@extends('layouts.menu')
@section('title', 'Apprenez auprès des meilleures universités et entreprises d\'Afrique')
@section('image', '/images/divers/slider_home3.png')
@section('content')

<style media="screen">
/*! CSS Used from: https://static.teamtreehouse.com/assets/marketing-5800f55ee6fbb02559651e6e0c07640fce7006279c7d949cefa4c63eb55d964c.css ; media=screen */
@media screen{

@media screen{
.text-1-xs{font-size:2.25rem!important;}
.text-2-xs{font-size:1.75rem!important;}
.text-4-xs{font-size:1.125rem!important;}
.text-6-xs{font-size:0.875rem!important;}
}
@media screen and (min-width: 960px){
.text-1-lg{font-size:2.25rem!important;}
}
.regular{font-weight:normal!important;}
@media screen{
.text-center-xs{text-align:center!important;}
}
.bg-gray-light{background-color:#edeff0!important;}
.text-color-dark{color:#40484a!important;}
.text-color-white{color:#fff!important;}
.button{-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;-o-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border-radius:4px;border:solid 2px #5fcf80;color:#5fcf80;cursor:pointer;display:inline-block;font-family:TeachableSans-Regular;font-size:1rem;font-weight:500;height:40px;line-height:36px;padding:0 15px;position:relative;margin:0 10px 0 0;text-align:center;text-decoration:none;transition:color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease, width 0.3s ease, opacity 0.3s ease;vertical-align:baseline;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.button:hover,.button:active,.button:focus{color:#34ad58;border-color:#34ad58;}
.button:hover svg,.button:active svg,.button:focus svg{fill:#34ad58;}
.button:last-child{margin-right:0;}
.button svg{fill:#5fcf80;}
.button--primary-blue{background-color:#4D90CC!important;border-color:#4D90CC!important;color:#fff!important;}
.button--primary-blue svg{fill:#fff!important;}
.button--primary-blue:hover,.button--primary-blue:active,.button--primary-blue:focus{background-color:#2a5d81!important;border-color:#2a5d81!important;color:#fff!important;}
.col{float:left!important;width:100%!important;}
.col-gutters{margin:0 -15px;}
.col-gutters>.col{padding:0 15px;}
.col-container:before,.col-container:after{content:" ";display:table;}
.col-container:after{clear:both;}
.col-max{max-width:1260px!important;margin:0 auto!important;}
@media screen{
.col-max{padding:0;}
}
@media screen and (min-width: 680px){
.col-max{padding:0 5px;}
}
@media screen and (min-width: 960px){
.col-max{padding:0 15px;}
}
.col-form{margin:0 -6px!important;}
.col-form>.col{padding:0 6px;}
@media screen{
.col-100-xs{width:100%!important;}
}
@media screen and (min-width: 680px){
.col-50-md{width:50%!important;}
}
@media screen and (min-width: 960px){
.col-50-lg{width:50%!important;}
}
@media screen{
.m-t-0-xs{margin-top:0rem!important;}
.m-t-2-xs{margin-top:1.5rem!important;}
.m-t-5-xs{margin-top:4rem!important;}
.m-b-0-xs{margin-bottom:0rem!important;}
.m-b-1-xs{margin-bottom:1rem!important;}
.m-b-2-xs{margin-bottom:1.5rem!important;}
.m-lr-2-xs{margin-left:1.5rem!important;margin-right:1.5rem!important;}
}
@media screen and (min-width: 680px){
.m-b-0-md{margin-bottom:0rem!important;}
}
@media screen and (min-width: 960px){
.m-t-0-lg{margin-top:0rem!important;}
}
@media screen{
.p-t-4-xs{padding-top:3rem!important;}
.p-t-6-xs{padding-top:5rem!important;}
.p-b-1-xs{padding-bottom:1rem!important;}
.p-b-3-xs{padding-bottom:2rem!important;}
.p-lr-2-xs{padding-left:1.5rem!important;padding-right:1.5rem!important;}
}
@media screen and (min-width: 960px){
.p-t-2-lg{padding-top:1.5rem!important;}
.p-t-6-lg{padding-top:5rem!important;}
}
@media screen and (min-width: 1140px){
.p-lr-0-xl{padding-left:0rem!important;padding-right:0rem!important;}
}
@media screen{
.w-full-xs{width:100%!important;}
}
.form-label{display:block;}
.form-label{color:#40484a;font-weight:500;margin-bottom:.5rem;line-height:1.3;}
.form-text-input{background-color:#f9fafa;border-color:#d4d9dd;transition:.2s;margin:0;font-size:1rem;padding:.75rem 1rem;outline:none;border:2px solid #d4d9dd;border-radius:4px;box-shadow:0;box-sizing:border-box;color:#40484a;}
.form-text-input::-webkit-input-placeholder{color:#4b5658;}
.form-text-input:-moz-placeholder{color:#4b5658;}
.form-text-input::-moz-placeholder{color:#4b5658;}
.form-text-input:-ms-input-placeholder{color:#4b5658;}
.form-text-input:focus{background-color:#fff;border-color:#8c9aa6;}
.form-text-input:hover{border-color:#8c9aa6;}
.form-checkbox{width:0.1px;height:0.1px;opacity:0;overflow:hidden;position:absolute;z-index:-1;}
.form-checkbox+.form-label{display:block;font-weight:normal;color:#4b5658;padding:.25rem 0;margin-left:25px!important;}
.form-checkbox+.form-label:before{content:'';display:inline-block;width:1rem;height:1rem;position:relative;bottom:-2px;margin-right:.5rem;}
.form-checkbox:checked+.form-label{color:#40484a;}
.form-checkbox:focus+.form-label{color:#40484a;}
.form-checkbox:focus+.form-label:before{border:2px solid #8c9aa6;}
.form-checkbox:hover+.form-label{cursor:pointer;}
.form-checkbox:hover+.form-label:before{border:2px solid #8c9aa6;cursor:pointer;}
.form-checkbox+.form-label:before{content:'';display:inline-block;width:1rem;height:1rem;border-radius:4px;border:2px solid #d4d9dd;margin-left:-25px!important;}
.form-checkbox:checked+.form-label:before{border:none;background-color:#3f8abf;background-image:url("data:image/svg+xml,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%2016%2016%27%3E%0D%0A%09%3Cpath%20fill%3D%27%23FFFFFF%27%20d%3D%27M7%2C11c-0.3%2C0-0.5-0.1-0.7-0.3l-3-3c-0.4-0.4-0.4-1%2C0-1.4s1-0.4%2C1.4%2C0l2.2%2C2.2l4.3-5.2%0D%0A%09%09c0.4-0.4%2C1-0.5%2C1.4-0.1c0.4%2C0.4%2C0.5%2C1%2C0.1%2C1.4l-5%2C6C7.6%2C10.9%2C7.3%2C11%2C7%2C11C7%2C11%2C7%2C11%2C7%2C11z%27%2F%3E%0D%0A%3C%2Fsvg%3E");background-repeat:none;background-position:center 1px;}
@media screen{
.flex-block-xs{display:flex!important;}
.flex-wrap-xs{flex-wrap:wrap!important;}
.flex-justify-center-xs{justify-content:center!important;}
}
@media screen and (min-width: 960px){
.flex-block-lg{display:flex!important;}
.flex-item-center-lg{align-items:center!important;}
}
div,span,h1,h2,p,fieldset,form,label,header,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
header,section{display:block;}
input{vertical-align:middle;}
svg{overflow:visible;display:inline-block;width:100%;height:100%;transform-origin:center center;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:fill 300ms 0s ease, stroke 300ms 0s ease, transform 300ms 0s ease, opacity 300ms 0s ease;}
.play-icon{width:24px;height:26px;}
.col{float:left;width:100%;}
@media screen and (min-width: 960px){
.col{padding:0 15px;}
}
@media screen and (min-width: 680px) and (max-width: 959px){
.col{padding:0 10px;}
}
@media screen and (max-width: 679px){
.col{padding:0 7.5px;}
}
.col-container:before,.col-container:after{content:" ";display:table;}
.col-container:after{clear:both;}
@media screen and (min-width: 960px){
.col-container{margin:0 -15px;}
}
@media screen and (min-width: 680px) and (max-width: 959px){
.col-container{margin:0 -10px;}
}
@media screen and (max-width: 679px){
.col-container{margin:0 -7.5px;}
}
.hero-title{margin:0 0 10px;line-height:1.5;}
@media screen and (min-width: 960px){
.hero-title{font-size:34px;}
}
@media screen and (max-width: 959px){
.hero-title{font-size:26px;}
}
.button{-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;-o-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;transition:color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease, width 0.3s ease, opacity 0.3s ease;border-radius:4px;cursor:pointer;display:inline-block;font-family:TeachableSans-Regular;font-weight:500;position:relative;margin:0;outline:none;text-align:center;text-decoration:none;vertical-align:baseline;white-space:nowrap;background-color:transparent;border:solid 2px 5fcf80;}
.button{font-size:16px;height:52px;line-height:48px;padding:0 32px;}
.button:not(.has-topic-color){color:#5fcf80;}
.button svg:not(.has-topic-fill){fill:#5fcf80;}
.button:hover:not(.disabled),.button:focus{border-color:#34ad58;}
.button:hover:not(.disabled):not(.has-topic-color),.button:focus:not(.has-topic-color){color:#34ad58;}
.button:hover:not(.disabled) svg:not(.has-topic-fill),.button:focus svg:not(.has-topic-fill){fill:#34ad58;}
.button:last-child{margin-right:0;}
.button svg{transition:fill 200ms ease-in-out;}
.button.primary{background-color:#5fcf80;border:solid 2px #5fcf80;}
.button.primary:not(.has-topic-color){color:#fff;}
.button.primary svg:not(.has-topic-fill){fill:#fff;}
.button.primary:hover:not(.disabled),.button.primary:focus{border-color:#3ac162;background-color:#3ac162;}
.button.primary:hover:not(.disabled):not(.has-topic-color),.button.primary:focus:not(.has-topic-color){color:#fff;}
.button.primary:hover:not(.disabled) svg:not(.has-topic-fill),.button.primary:focus svg:not(.has-topic-fill){fill:#fff;}
.button svg{vertical-align:middle;position:relative;top:-1px;}
.marketing-layout input[type='email']{padding:12px 15px;}
.marketing-layout fieldset{border:none;}
.green-hero-form{margin-top:0;padding-bottom:0;background-image:none;background-color:#5fcf80;color:white;margin-bottom:0;text-align:left;}
.green-hero-form .form-card{padding:30px;border-radius:5px;background:white;text-align:left;box-shadow:0px 2px 0px rgba(0,0,0,0.15);margin-bottom:80px;}
.green-hero-form .form-card .trial-banner{background-color:#637a91;border-radius:5px 5px 0 0;text-align:center;font-weight:500;padding:20px;margin:-30px -30px 30px;color:#fff;}
.green-hero-form .form-card fieldset{border:none;border-bottom:1px solid #edeff0;}
.green-hero-form .form-card .play-icon{width:10px;height:13px;position:relative;top:.1px;margin-left:10px;fill:#fff;}
.homepage2018-course-catalog{background-image:linear-gradient(to bottom, rgba(48,56,83,0) 40%, #303853 60%, #303853 100%),url(https://static.teamtreehouse.com/assets/views/marketing/home/homepage-hero-86e988fc10618a6d2b743327d67eeca3b0396f9720d94c35bbff8cd217de96d1.jpg);background-position-x:100%, 100%;background-position-y:0px, -200px;background-size:100%, 100%;background-repeat:no-repeat, no-repeat;background-color:#303853;background-attachment:fixed, fixed;filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00303853', endColorstr='#303853',GradientType=0 );}
@media screen and (max-width: 751px){
.homepage2018-course-catalog{background-attachment:scroll, scroll!important;background-position-x:100%, 100%!important;background-position-y:100%, -10px!important;}
}
}
/*! CSS Used from: Embedded ; media=print */
@media print{
header,svg{display:none;}
}
</style>


    <section class="hero-partial _2">
        <style>

            {

            }
            ._2 {
                margin-bottom: 50px;
            }

            @media (max-width: 991px) {
                ._2 {
                    margin-bottom: 105px;
                }
            }

            @media (max-width: 767px) {
                ._2 {
                    margin-bottom: 105px;
                }
            }

            ._2 h1 {
                max-width: none;
            }

            ._2 h2 {
                max-width: none;
                font-size: 22px;
                line-height: 33px;
            }

            @media (max-width: 767px) {
                ._2 .hero-div {
                    min-height: 600px;
                }
            }

            @media (min-width: 768px) {

                ._2 .hero-div,
                ._2 .container,
                ._2 .row,
                ._2 .col-xs-12 {
                    min-height: 765px;
                }

                ._2 .container {
                    padding-top: 85px;
                }
            }
        </style>
        <div id="segment-event" type="hidden" value="Submit Home Page Hero Form"></div>
        <!--
        <div class="hero-div" style="background-image: url(/images/divers/slider_home3.png);">
            <div class="container hero-container">
                <div class="row">
                    <div class="col-xs-12 vertically-align-contents-except-xs">
                        <div class="hero-text hero-text-left">
                            <h1>Il est encore temps pour atteindre vos objectifs de formation avant la fin de cette année</h1>
                            <h2>Tous nos parcours de formation sont à seulement 15.000 FCFA les 3 premiers mois !</h2>
                            <div class="input-container left">

                                <a href="{{url('schools')}}"> <button id="email-submit-button" class="orange-button">Profitez de l'offre</button></a>

                                <div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->

        <header class="section-header green-hero-form homepage2018-course-catalog p-b-3-xs p-t-4-xs p-t-6-lg p-lr-2-xs p-lr-0-xl  hero-loaded" data-layout-element="hero">
            <section class="p-t-6-xs p-t-2-lg">
                <div class="col-container col-max col-gutters flex-block-lg flex-item-center-lg">
                    <div class="col col-50-lg">
                        <div class="hero-title">
                            <h1 class="text-color-white text-1-lg m-t-0-xs">
                                Explorez nos écoles et trouvez le parfait programme pour votre carrière
                            </h1>
                            <h2 class="text-color-white text-2-xs m-b-0-xs regular">
                                A Oschool, apprenez les compétences le splus
                                recherchées par les entreprises, construisez des projets incroyables
                                et donnez vie à votre métier de rêve.
                            </h2>
                        </div>
                    </div>
                    <div class="col col-50-lg m-t-2-xs m-t-0-lg">


                        <div style="text-align: center;" class="form-card m-b-0-xs homepage2018">
                            <p class="trial-banner bg-gray-light text-color-dark">
                                Commencez dès maintenant <span class="regular">et sans engagement</span>
                            </p>
                            <img style="border-radius: 8px;/*box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);*/width:63%;" src="/images/divers/courses.png" alt="">
                            <!--
                            <form class="new_account_signup" id="signupForm" data-featurette="Treehouse.SimpleSignupForm" action="/subscribe/register_free_trial" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"
                                  class="placeholder-processed"><input type="hidden" name="authenticity_token" value="6/X13Mh0nk1E+2Xscuq2IhcwJKqhoKgnQS7cfvJrrUwWyNHIzUawYe432n3ljIQzP6hWDrQK9+RAYVO1EvC3Ww==" class="placeholder-processed">
                                <fieldset>
                                    <div class="col-container col-gutters col-form">
                                        <input type="hidden" name="trial" id="trial" value="yes" class="input-hidden placeholder-processed">
                                        <input value="/" class="input-hidden placeholder-processed" type="hidden" name="account_signup[form_name]" id="account_signup_form_name">
                                        <div class="col col-50-md">
                                            <label class="form-label" for="account_signup_first_name">First name</label>
                                            <input autocomplete="given-name" class="form-text-input input-text form-text-input m-b-2-xs w-full-xs placeholder-processed" type="text" name="account_signup[first_name]" id="account_signup_first_name">
                                        </div>
                                        <div class="col col-50-md">
                                            <label class="form-label" for="account_signup_last_name">Last name</label>
                                            <input autocomplete="family-name" class="form-text-input input-text form-text-input m-b-2-xs w-full-xs placeholder-processed" type="text" name="account_signup[last_name]" id="account_signup_last_name">
                                        </div>
                                    </div>

                                    <div class="col-container col-gutters col-form">
                                        <div class="col-50-md col">
                                            <label class="form-label" for="account_signup_email">Email address</label>
                                            <input autocomplete="email" class="form-text-input input-text form-text-input m-b-2-xs w-full-xs placeholder-processed" type="email" name="account_signup[email]" id="account_signup_email">
                                        </div>
                                        <div class="col col-50-md">
                                            <label class="form-label" for="account_signup_password">Password</label>
                                            <input class="form-text-input input-text form-text-input m-b-2-xs w-full-xs placeholder-processed" type="password" name="account_signup[password]" id="account_signup_password">
                                        </div>
                                    </div>

                                    <div class="col-container col-gutters col-form">
                                        <div class="col col-100-xs p-b-1-xs">
                                            <input name="account_signup[email_consent]" type="hidden" value="0" class="placeholder-processed"><input class="input-checkbox form-checkbox placeholder-processed" type="checkbox" value="1"
                                              name="account_signup[email_consent]" id="account_signup_email_consent">
                                            <label class="form-label text-6-xs" for="account_signup_email_consent">I want to hear from Treehouse about products and services.</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="form-footer">
                                    <button name="button" type="submit" class="button button primary button--primary-blue m-t-2-xs w-full-xs">
                                        <span>Claim Your Free Trial</span>
                                        <svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 11 12" class="play-icon">
                                            <use xlink:href="/assets/icons-9bdb8530f3f097b4a47774ce4686c3b94b482eb486b20b5cbf252e7b0cb5860b.svg#play-icon"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        -->
                        <div class="form-footer">
                            <a href="/schools">
                            <button name="button" type="submit" class="button button primary button--primary-blue m-t-2-xs w-full-xs">
                                <span>Commencez dans l'une de nos écoles</span>
                                <svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 11 12" class="play-icon">
                                    <use xlink:href="/assets/icons-9bdb8530f3f097b4a47774ce4686c3b94b482eb486b20b5cbf252e7b0cb5860b.svg#play-icon"></use>
                                </svg>
                            </button>
                            </a>
                        </div>
                        </div>

                    </div>
                </div>
                <div class="col-container col-max flex-block-xs flex-justify-center-xs flex-wrap-xs m-t-5-xs">
                    <div class="m-lr-2-xs m-b-1-xs m-b-0-md text-center-xs">
                        <span class="text-1-xs">50+</span> <span class="text-4-xs">cours</span>
                    </div>
                    <div class="m-lr-2-xs m-b-1-xs m-b-0-md text-center-xs">
                        <span class="text-1-xs">5</span> <span class="text-4-xs">ateliers</span>
                    </div>
                    <div class="m-lr-2-xs m-b-1-xs m-b-0-md text-center-xs">
                        <span class="text-1-xs">7</span> <span class="text-4-xs">sujets</span>
                    </div>
                    <div class="m-lr-2-xs m-b-1-xs m-b-0-md text-center-xs">
                        <span class="text-1-xs">100+</span> <span class="text-4-xs">étudiants actifs</span>
                    </div>
                </div>
            </section>
        </header>


    </section>

    <section class="green-numbers-four _3">
        <style>
            ._3 {
                margin-bottom: 115px;
            }

            @media (max-width: 991px) {
                ._3 {
                    margin-bottom: 115px;
                }
            }

            @media (max-width: 767px) {
                ._3 {
                    margin-bottom: 115px;
                }
            }
        </style>
        <div class="container cno">
            <div class="row rn">
                <div class="col-xs-12">
                    <h1 class="default-header">Commencez gratuitement</h1>
                    <h1>
                    </h1>
                    <h2 class="default-paragraph">Nous voyons un avenir brillant où tout le monde, partout peuvent poursuivre leur plein potentiel académique.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="image-text-column-wide _2520">
        <style>
            ._2520 {
                margin-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._2520 {
                    margin-bottom: 75px;
                }
            }

            @media (max-width: 767px) {
                ._2520 {
                    margin-bottom: 75px;
                }
            }

            .video-open._2520 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                .video-open._2520 {
                    margin-bottom: 75px;
                }
            }

            @media (max-width: 767px) {
                .video-open._2520 {
                    margin-bottom: 75px;
                }
            }

            ._2520 {
                background-color: #FFFFFF;
            }

            @media (min-width: 992px) {
                ._2520 .inner-text {
                    padding-top: 200px;
                    padding-bottom: 200px;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-5 image-column match-height" style="background-image: url(/images/divers/oschool-4.png); height: 688px;">
                    <img src="https://s3.amazonaws.com/cms-uploaded-images/kyK2e0BxSTSDMOUDlvlf_homepage-intro-image.jpg">
                </div>
                <div class="col-md-1 hidden-sm hidden-xs"></div>
                <div class="col-xs-12 col-md-5 text-column vertically-align-contents match-height" style="height: 688px;">
                    <div class="inner-text">
                        <h1 class="default-header ">Suivez des formations 100% en ligne auprès des meilleurs universités et entreprises d'Afrique</h1>
                        <p class="default-paragraph">Oschool vous offre la possibilité de poursuivre des diplômes et certificats 100% en ligne, auprès des meilleures universités d’Afrique.</p>
                        <!--div class="button-container">
                            <svg class="play-button" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 141 141" style="enable-background:new 0 0 141 141;"
                              xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #FF7F45;
                                    }

                                    .st1 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <circle class="st0" cx="70.5" cy="70.5" r="70"></circle>
                                <path class="st1" d="M62.5,58.4v24.2l19-12.1L62.5,58.4z"></path>
                            </svg>
                            <a class="default-paragraph orange hidden-xs hidden-sm">Watch our short demo video</a>
                        </div-->
                        <p class="default-paragraph">Profitez de l’expertise de Oschool dans le domaine et de son offre de formation à distance complète et variée pour décrocher un diplôme universitaire</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="top-of-video" data-wistiaid="qgdtbummf6"></div>

    </section>

    <section class="green-quote _5">
        <style>
            ._5 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                ._5 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._5 {
                    margin-bottom: 100px;
                }
            }

            ._5 .left-column {
                background-color: #f3f9fa
            }

            ._5 .color {
                background-color: #F4FAFA
            }
        </style>

        <div class="color">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="default-green-header ">Cours interactifs</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Les cours Oschool sont des cours où les participantes et participants peuvent intervenir immédiatement.
                                Dans ces cours, la formatrice ou le formateur est directement présent avec les participantes et participants.</p>
                        </div>
                        <h1 class="default-green-header ">Aide et assistance </h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Oschool associe un mentor dans le domaine de votre formation pour mieux suivre vos progrès.</p>
                        </div>
                        <h1 class="default-green-header ">Certificats et diplômes</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Suivez vos cours sur Oschool à votre rythme, tout en obtenant un diplôme reconnu par l'Etat et les entreprises partenaires, ou pour améliorer votre performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 left-column match-height" style="height: 724px;">
                    <div class="text">
                        <h1 class="default-green-header">Cours interactifs</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Les cours Oschool sont des cours où les participantes et participants peuvent intervenir immédiatement.
                                Dans ces cours, la formatrice ou le formateur est directement présent avec les participantes et participants.</p>
                        </div>
                        <h1 class="default-green-header">Aide et assistance </h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Oschool associe un mentor dans le domaine de votre formation pour mieux suivre vos progrès.</p>
                        </div>
                        <h1 class="default-green-header">Certificats et diplômes</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Suivez vos cours sur Oschool à votre rythme, tout en obtenant un diplôme reconnu par l'Etat et les entreprises partenaires, ou pour améliorer votre performance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-5 right-column match-height clearfix" style="height: 724px;">
                    <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8);"></div>
                    <div class="quote">
                        <img class="orange-circle" src="/images/divers/disc.svg">
                        <blockquote>“La mission d'Oschool est de vous aider à combler le gap entre
                            ce que l'école vous a appris et la réalité en entreprise”</blockquote>
                        <cite>
                            David YAO, <a href="http://david-yao.com" target="_blank" rel="noopener noreferrer">david-yao.com</a>
                        </cite>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="five-simple-steps _6">
        <style>
            ._6 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                ._6 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._6 {
                    margin-bottom: 75px;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="default-header">Pourquoi choisir Oschool?</h1>
                    <ul class="steps-nav">
                        <div class="line"></div>
                        <li class="steps active" data-step="1">
                            <a href="#step1" data-scroll="false">
                                <h2>1</h2>
                                <p>Projets de la vie réelle conçus par des experts de l'industrie</p>
                            </a>
                        </li>
                        <li class="steps" data-step="2">
                            <a href="#step2" data-scroll="false">
                                <h2>2</h2>
                                <p>Mentorat</p>
                            </a>
                        </li>
                        <li class="steps" data-step="3">
                            <a href="#step3" data-scroll="false">
                                <h2>3</h2>
                                <p>Programme d'apprentissage flexible</p>
                            </a>
                        </li>
                        <li class="steps" data-step="4">
                            <a href="#step4" data-scroll="false">
                                <h2>4</h2>
                                <p>Accompagnement à l'emploi</p>
                            </a>
                        </li>
                        <li class="steps" data-step="5">
                            <a href="#step5" data-scroll="false">
                                <h2>5</h2>
                                <p>Parcours diplômants et certifiants</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row second-row active" data-step="1" id="step1">
                <div class="col-md-7 image-column">
                    <img src="/images/divers/step-1.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Projets de la vie réelle conçus par des experts de l'industrie</h1>
                    <p class="default-paragraph">Avec des projets du monde réel construits en partenariat avec des experts du secteur, vous serez en mesure de constituer un portefeuille prêt à l'emploi, et directement utilisable par les entreprises.</p>
                    <!--a class="next-step green-button">Suivant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a-->
                </div>
            </div>
            <div class="row second-row" data-step="2" id="step2">
                <div class="col-md-7 image-column">
                    <img src="/images/divers/step-2.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Mentorat</h1>
                    <p class="default-paragraph">Obtenez un mentor compétent qui oriente votre apprentissage et qui se concentre sur les réponses à vos questions, vous motive et vous garde sur la bonne voie.</p>
                    <!--a class="next-step green-button">Suivant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a-->
                </div>
            </div>
            <div class="row second-row" data-step="3" id="step3">
                <div class="col-md-7 image-column">
                    <img src="/images/divers/step-3.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Programme d'apprentissage flexible</h1>
                    <p class="default-paragraph">Obtenez un plan d'apprentissage personnalisé sur mesure pour votre vie bien remplie. Avec des paiements mensuels faciles, vous pouvez apprendre à votre rythme et atteindre vos objectifs personnels.</p>
                    <!--a class="next-step green-button">Suivant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a-->
                </div>
            </div>
            <div class="row second-row" data-step="4" id="step4">
                <div class="col-md-7 image-column">
                    <img src="/images/divers/step-4.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Accompagnement à l'emploi</h1>
                    <p class="default-paragraph">Vous aurez accès à des sessions de coaching en carrière, à des conseils de préparation aux entretiens, à des résumés de CV et à des critiques de profils professionnels en ligne pour vous aider à progresser dans votre carrière.</p>
                    <!--a class="next-step green-button" style="background: #FF6D2C;">Commencez&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a-->
                </div>
            </div>
            <div class="row second-row" data-step="5" id="step5">
                <div class="col-md-7 image-column">
                    <img src="/images/divers/step-5.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Parcours diplômants et certifiants</h1>
                    <p class="default-paragraph">Ces parcours constitués de projets professionnalisants, vous aident à être tout de suite opérationnels pour les entreprises</p>
                    <a href="{{url('schools')}}" class="next-step green-button" style="background: #4D90CC;">Commencez&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
    $('.steps-nav a').on('click', function (event) {
        event.preventDefault();

        $('.active').removeClass('active');
        $(this).parent().addClass('active');
        $('.second-row').hide();
        $($(this).attr('href')).show();
    });

    $('.steps-nav a:first .next-step').trigger('click'); // Default

    </script>
    <section class="showcase _7">
        <style>

        .slick-active + .slick-center{

            img{
                opacity: 1;
                width: 100%;
                margin: 0 auto;
                display: block;
                margin-left: -105%;
                transition: all 0.5s ease;
                }
            }

            .slick-active{
                img{
                    opacity: .8;
                    transition: all 0.5s ease;
                    width: 200px;
                    margin: 150px 0px 0px 88px;

                }
            }





            ._7 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                ._7 {
                    margin-bottom: 75px;
                }
            }

            @media (max-width: 767px) {
                ._7 {
                    margin-bottom: 85px;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <h1 class="default-header">Nos partenaires exclusifs</h1>
                <p class="default-paragraph subheader">Si notre école en est là aujourd’hui, c’est aussi grâce aux coups de main précieux et à la confiance que nous ont accordés nos partenaires !</p>
            </div>
            <div class="slider-parent">
                <div class="homepage-slider">
                            <div class="item">
                                <img class="big-image" src="/images/divers/dave_slider.jpg">

                            </div>
                            <div class="item">
                                <img class="big-image" src="/images/divers/feature1.png">

                            </div>
                            <div class="item">
                                <img class="big-image" src="/images/divers/feature2.png">

                            </div>
                            <div class="item">
                                <img class="big-image" src="/images/divers/os-2.png">

                            </div>
                            <div class="item">
                                <img class="big-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IC5in4HlQB23O5MEj7nu">

                            </div>


                            {{-- <div class="item">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/xry5vzxQSuaMySPNhaug_Nicole%20Walters%20Headshot.png">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://s3.amazonaws.com/cms-uploaded-images/3RWSdMQlinGJY7diShFw_nicole-walters.jpg">
                                    <p class="default-paragraph">Nicole Walters, $1k in 1 Day Academy</p>
                                </div>
                            </div> --}}



                </div>
            </div>
            <div class="small-text">
                <div class="text active">
                    <img class="person-image" src="/images/divers/dave_slider.jpg">
                    <p class="default-paragraph">David YAO, Entrepreneur et codeur</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://s3.amazonaws.com/cms-uploaded-images/3RWSdMQlinGJY7diShFw_nicole-walters.jpg">
                    <p class="default-paragraph">Nicole Walters, $1k in 1 Day Academy</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jRczQFwrTHGEeyIgTWJG">
                    <p class="default-paragraph">Teela Cunningham, Every Tuesday</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IgamM6IzTySKfgHAeNUV">
                    <p class="default-paragraph">Melyssa Griffin, melyssagriffin.com</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jT5L8vR1qWrKfiUg3gCQ">
                    <p class="default-paragraph">Peter Nowell, Sketch Master</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/js/index.js"></script>

        <div class="container container-beneath-slider">
            <div class="row">
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">Partagez vos certificats sur LinkedIn</h1>
                    <p class="default-paragraph">
                        Tous nos certificats sont partageables sur LinkedIn.
                        Vous pourrez ainsi faire valoir facilement
                        vos compétences auprès de potentiels recruteurs.
                    </p>
                </div>
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">Mentorat</h1>
                    <p class="default-paragraph">Chaque semaine, un expert de votre domaine professionnel suit vos progrès</p>
                </div>
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">Accompagnement à l'emploi</h1>
                    <p class="default-paragraph">Vous aurez accès à des sessions de coaching de carrière, à des conseils de préparation aux entretiens, à des résumés de CV et à des critiques de profils professionnels en ligne pour vous aider à progresser dans votre carrière.</p>
                </div>
            </div>
            <div class="row last-row">
                <div class="col-xs-12">
                    <a href="{{url('schools')}}" class="dark-green-button">Commencez dès maintenant</a>
                    <!--p class="default-paragraph">En collaboration avec les leaders de l'industrie</p>
                    <div class="clearfix company-logos">
                        <img src="/images/divers/cinetpay.png">
                        <img src="/images/divers/Epistrophe.jpg">
                        <img src="/images/divers/bora.png">
                        <img src="/images/divers/final.png">
                        <img src="/images/divers/LogoM-1.png">
                        <img src="/images/divers/Logo-1.png">
                    </div-->

                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-cards _8">
        <style>
            ._8 {
                margin-bottom: 115px;
            }

            @media (max-width: 991px) {
                ._8 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._8 {
                    margin-bottom: 100px;
                }
            }
        </style>
        <div class="container">
            <div class="row header-row">
                <div class="col-xs-12">
                    <h1 class="default-header">Ils ont réussi avec Oschool</h1>
                    <p class="default-paragraph"></p>
                </div>
            </div>
            <div class="row cards-row">
                <div class="col-xs-12 col-md-4 card-column">
                    <div class="card-container">
                        <div class="card-front" style="background-image: url(/images/divers/oschool-5.jpeg);">
                            <div class="card-front-text">
                                <div class="name">
                                    Jean Philippe Touye Bi
                                </div>
                                <div class="course-name">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <p class="testimonial-text">“Mon passage à Oschool a été très sincèrement fructueux pour moi car cela m’a donné de l'assurance et une carrure de pro. J'ai également eu grâce à Oschool de la maturité dans le domaine du marketing sur les réseaux sociaux, tout cela par la qualité des enseignements.”</p>
                            <div class="card-bottom">
                                <img src="/images/divers/oschool-5.jpeg">
                                <div class="card-bottom-attribution">
                                    <div class="card-bottom-attribution-bottom ">
                                        <div class="name">Jean Philippe Touye Bi</div>
                                        <!--a href="http://cslakin.teachable.com" target="_blank" rel="noopener noreferrer">Voir le cours</a-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 card-column">
                    <div class="card-container middle">
                        <div class="card-front" style="background-image: none;">
                            <div class="card-front-text">
                                <div class="name">
                                    Zigoli Clement
                                </div>
                                <div class="course-name">
                                    <em>Etudiant/coach</em>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <p class="testimonial-text">“Les cours sur oschool sont tellement pratiques que je n’ai pas eu du mal à les approprier. Je vous les recommande vivement et je dis merci à Oschool car leurs cours en programmation sont très simplifiés pour permettre à tous de suivre les modules proposés.”</p>
                            <div class="card-bottom">
                                <img src="/images/divers/tem.jpg">
                                <div class="card-bottom-attribution">
                                    <div class="card-bottom-attribution-bottom ">
                                        <div class="name">Zigoli Clement</div>
                                        <!--a href="http://learn.uavcoach.com" target="_blank" rel="noopener noreferrer">Voir le cours</a-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 card-column">
                    <div class="card-container">
                        <div class="card-front" style="background-image: url(/images/divers/1258.jpg);background-size: cover;">
                            <div class="card-front-text">
                                <div class="name">
                                  Souleymane Coulibaly
                                </div>
                                <div class="course-name">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <p class="testimonial-text">“ Très bonne plateforme d'apprentissage pour les adultes…”</p>
                            <div class="card-bottom">
                                <img src="/images/divers/1258.jpg">
                                <div class="card-bottom-attribution">
                                    <div class="card-bottom-attribution-bottom ">
                                        <div class="name"> Souleymane Coulibaly</div>
                                        <!--a href="http://school.juliestoian.com" target="_blank" rel="noopener noreferrer">Voir le cours</a-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-partial _9">
        <style>
            ._9 {
                margin-bottom: 60px;
            }

            @media (max-width: 991px) {
                ._9 {
                    margin-bottom: 60px;
                }
            }

            @media (max-width: 767px) {
                ._9 {
                    margin-bottom: 60px;
                }
            }

            /*CUSTOM EXPID2 CODE*/
            ._9 {
                background-color: #FFFFFF
            }

            ._9 {
                padding-top: 0px;
            }

            @media (max-width: 991px) {
                ._9 {
                    padding-top: 0px;
                }
            }

            @media (max-width: 767px) {
                ._9 {
                    padding-top: 0px;
                }
            }

            ._9 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._9 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._9 {
                    padding-bottom: 0px;
                }
            }
        </style>
        <!--
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text">ET SI VOUS DEVENEZ UN MENTOR OSCHOOL?</h1>
                    <h2 class="default-header" style="max-width: 750px">Faites la difference en devenant mentor Oschool</h2>
                    <a href="/create-account?utm_source=home-testimonial" class="orange-button">Postuler pour devenir mentor.</a>
                </div>
            </div>
        </div>
    -->
    </section>

    <section class="webinar _10">
        <style>
            ._10 {
                margin-bottom: 140px;
            }

            @media (max-width: 991px) {
                ._10 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._10 {
                    margin-bottom: 80px;
                }
            }
        </style>
        <div class="url-string hidden">quickstart1</div>
        <!--
        <div class="background" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/97mKmvzDR5auFMsSHTFG);" onload="$(this).fadeIn();">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5 pull-right green-box">
                        <h2>Rejoignez le show oschool sur facebook</h2>
                        <div class="description">
                            <p>Chaque vendredi à 19h, oschool organise un show sur facebook sur des questions de l'entreprenariat, du Elearning ... Vous êtes invités!  </p>
                            <a href="https://www.facebook.com/Oschool.ci/" target="_blank" rel="noopener noreferrer">Rejoignez-nous!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
    </section>

    <section class="boxes-of-people remove-bottom-margin _11">
        <style>
            ._11 {
                margin-bottom: 80px;
            }

            @media (max-width: 991px) {
                ._11 {
                    margin-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                ._11 {
                    margin-bottom: 80px;
                }
            }
        </style>
        <div class="container">
            <h1 class="default-header">Avec Oschool, on ne va pas à l'école, on y est déjà</h1>
            <p class="default-paragraph"></p>
        </div>
        <div class="container-fluid">
            <div class="row pictures-grid">
                <div class="hidden-xs hidden-sm col-md-3 column">
                    <img src=" /images/divers/os2.jpeg" alt=""><img src="/images/divers/oschool_4.png"
                      alt="">
                    <img src="/images/divers/os-1.png" alt="">
                    <img src="/images/divers/os-2.png" alt=""><img
                      src="/images/divers/os-3.png" alt="">
                </div>
                <div class="hidden-xs col-sm-4 col-md-3 column">
                    <img src="/images/divers/oschool_5.png" alt="">
                    <img src="/images/divers/oschool-4.png" alt=""><img src="/images/divers/os_4.png"
                      alt="">
                </div>
                <div class="col-sm-8 col-md-6 column">
                    <div class="row-1 clearfix">
                        <img src="/images/divers/os5.jpeg" class="ankur" alt="">
                        <div class="row-1-col-2">
                            <div class="row-1-col-2-row-1">
                                <img src="/images/divers/tem.jpg" class="leaves" alt=""><img
                                  src="https://teachable.com/assets/boxes-of-people/computer-1a3879cbabc1783a1c514b5c4f94c736c3310bff3d761029d74779cd0e305d70.jpg" class="computer" alt="">
                            </div>
                            <div class="row-1-col-2-row-2">
                                <img src="https://teachable.com/assets/boxes-of-people/laurence-e0a574262c9055f0cbaf617d8bfd1c604af0fa9b27c9c72b4c013d0eb9f2d6f1.jpg" class="laurence" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row-2 clearfix">
                        <img src="https://teachable.com/assets/boxes-of-people/writer-86733135fcc6a86d2826eaa17e1648a1cc03aed3577d8228118f1c77cb7dda5e.jpg" class="writer"><img
                          src="/images/divers/os3.jpeg" class="don"><img src="/images/divers/os_5.jpg"
                          class="hat">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-partial _12">
        <style>
            ._12 {
                margin-bottom: 85px;
            }

            @media (max-width: 991px) {
                ._12 {
                    margin-bottom: 85px;
                }
            }

            @media (max-width: 767px) {
                ._12 {
                    margin-bottom: 85px;
                }
            }

            /*CUSTOM EXPID2 CODE*/
            ._12 {
                background-color: #FFFFFF
            }

            ._12 {
                padding-top: 0px;
            }

            @media (max-width: 991px) {
                ._12 {
                    padding-top: 0px;
                }
            }

            @media (max-width: 767px) {
                ._12 {
                    padding-top: 0px;
                }
            }

            ._12 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._12 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._12 {
                    padding-bottom: 0px;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text">CHOISISSEZ OSCHOOL POUR VOTRE FORMATION</h1>
                    <h2 class="default-header" style="max-width: 750px">Commencez dès maintenant et démarrez une carrière enrichissante dans le domaine qui vous passionne</h2>
                    <a href="{{url('schools')}}" class="orange-button">Commencez maintenant</a>
                </div>
            </div>
        </div>
    </section>



@endsection
