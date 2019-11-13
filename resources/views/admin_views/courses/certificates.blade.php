@extends('layouts.menu-project')

@section('title', 'Certificat de réussite')

@section('content')


<style media="screen">
/*! CSS Used from: https://www.udacity.com/styles.628a8348dfb45baca667.css */
a{background-color:transparent;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
.white{color:#fff!important;}
.uppercase{text-transform:uppercase;}
*,*::after,*::before{box-sizing:inherit;}
.contain{max-width:73.75rem;margin-left:auto;margin-right:auto;padding-top:48px;padding-bottom:48px;padding-left:12px;padding-right:12px;}
.contain::after{clear:both;content:"";display:block;}
@media screen and (min-width: 48rem){
.contain{padding-top:96px;padding-bottom:96px;}
}
@media screen and (min-width: 30rem){
.contain{padding-left:15.84px;padding-right:15.84px;}
}
@media screen and (min-width: 48rem){
.contain{padding-left:24px;padding-right:24px;}
}
@media screen and (min-width: 73.75rem){
.contain{padding-left:0;padding-right:0;}
}
.contain--small{padding-top:48px;padding-bottom:48px;margin:0 auto;}
@media screen and (min-width: 48rem){
.contain--small{padding-top:72px;padding-bottom:72px;}
}
p{margin-top:0;margin-bottom:24px;font-size:0.875rem;line-height:24px;color:#525c65;font-weight:400;}
@media screen and (min-width: 48rem){
p{margin-bottom:24px;}
}
@media screen and (min-width: 48rem){
p{font-size:1rem;line-height:28px;}
}
a{border-bottom:none;text-decoration:none;color:#525c65;transition:color 0.3s ease;}
a:active,a:focus,a:hover{color:#24292d;}
.button,.button--white{display:block;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-align:center;white-space:nowrap;vertical-align:top;text-decoration:none;vertical-align:middle;height:3rem;padding:0 0.5rem;text-transform:uppercase;font-size:16px;font-weight:600;font-size:0.813rem;line-height:2.625rem;-webkit-font-smoothing:antialiased;border-radius:0.25rem;letter-spacing:0.125rem;transition:all 0.3s ease;}
.button--white{box-shadow:8px 10px 20px 0px rgba(46, 61, 73, 0.15);}
.button--white:hover{box-shadow:2px 4px 8px 0px rgba(46, 61, 73, 0.2);}
.button--white{width:13.75rem;color:#02b3e4;background-color:#fff;border:0.125rem solid transparent;}
.button--white:focus,.button--white:hover{outline:none;color:#1cccfd;border-color:transparent;background-color:#f2f2f2;}
.button--white.sm{width:11.25rem;}
/*! CSS Used from: https://www.udacity.com/assets/styles/styles.shared.9338c427ca.css */
*[_ngcontent-sc24],[_ngcontent-sc24]::after,[_ngcontent-sc24]::before{box-sizing:inherit;}
.promo-banner[_ngcontent-sc24]{display:flex;flex-direction:column;border-radius:.5rem;background-color:#f3f8fe;}
.promo-banner__image[_ngcontent-sc24]{background-position:top center;background-size:cover;height:11.63rem;border-radius:.5rem .5rem 0 0;}
.promo-banner__image.desktop-image[_ngcontent-sc24]{display:none;}
@media screen and (min-width:48rem){
.promo-banner[_ngcontent-sc24]{flex-direction:row;}
.promo-banner__image[_ngcontent-sc24]{flex:11.63rem 0 0;background-position:center;height:auto;border-radius:.5rem 0 0 .5rem;}
}
.promo-banner__flag[_ngcontent-sc24]{display:inline-block;border-radius:.25rem;background-color:#a739c8;padding:0 .5rem;margin-bottom:.5rem;font-size:.8125rem;font-weight:600;line-height:1.5rem;letter-spacing:1.5px;}
.promo-banner__content[_ngcontent-sc24]{display:flex;flex-direction:column;align-items:flex-start;margin:2rem 1.5rem 1.25rem;}
@media screen and (min-width:48rem){
.promo-banner__content[_ngcontent-sc24]{margin:2.5rem;}
}
.promo-banner__title[_ngcontent-sc24]{font-size:1.5rem;line-height:2.5rem;font-weight:300;margin-bottom:.5rem;}
.promo-banner__subtitle[_ngcontent-sc24]{margin-bottom:.5rem;}
.promo-banner__cta[_ngcontent-sc24]{display:flex;margin:0 auto 1.25rem;}
.promo-banner__cta[_ngcontent-sc24]   .button[_ngcontent-sc24]{letter-spacing:.094rem;line-height:2.875rem;width:15rem;}
.promo-banner__cta[_ngcontent-sc24]   .button.button--white[_ngcontent-sc24]{border:1px solid #02b3e4;}
@media screen and (min-width:30rem){
.promo-banner__image.desktop-image[_ngcontent-sc24]{display:block;}
.promo-banner__image.mobile-image[_ngcontent-sc24]{display:none;}
.promo-banner__cta[_ngcontent-sc24]{margin-left:1.5rem;}
}
@media screen and (min-width:48rem){
.promo-banner__cta[_ngcontent-sc24]{flex-direction:row;align-items:center;margin:0 4rem 0 auto;}
.promo-banner__cta[_ngcontent-sc24]   .button[_ngcontent-sc24]{width:10.13rem;}
}
</style>

<main class="container">
  <div class="xl:px-3">
    <div class="xl:px-5">
      <div>
        <div class="overlay"></div>
        <div class="modalWrapper" style="left: 453px;">
          <div id="modal" class="modal rounded-t-lg ">
            <div class="modal-cover rounded-t-lg ">
              <div class="coverWrapper rounded-t-lg rounded-b-none">
                <div class="cover rounded-t-lg rounded-b-none" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/82215914-053d-4123-ad79-ab8d36589712.jpg&quot;);"></div>
              </div>
              <div class="modal-coverButton">
                <div class="button button--round"><i class="icon icon-window-close" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="modal-contents">
              <div class="modal-headline">
                <div class="logo" style="background-image: url(&quot;http://platform.mindvalley.com/images/facebook-logo-fcffd6148ae561d4eaba1bf6dfb9430a.png?vsn=d&quot;);"></div>
                <h3 class="text-2xl ml-2 mt-1">Supercerveau</h3>
              </div>
              <div class="modal-input"><span class="mb-2">Passphrase for first time login.</span>
                <div class="relative"><input type="text" class="input input--withButton text-center">
                  <div class="button button--input"><i class="icon icon-copy" aria-hidden="true"></i></div>
                </div>
              </div>
              <div class="modal-button"><a href="https://www.facebook.com/groups/mindvalley.supercerveau/" class="button button--primary w-full">Go To Community</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar">
        <div class="navbar-container">
          <div class="navbar-leftNavigation"><a href="http://platform.mindvalley.com/quests/supercerveau" class="navbar-link"><ion-icon name="arrow-back" size="small"></ion-icon> <span class="navbar-linkText">Retour au cours</span></a>
          </div>
          <div class="navbar-title">
            Certificat pour le cours {{$course->name}}
          </div>
          <div class="navbar-rightNavigation"><button class="navbar-button"><ion-icon name="call" size="small"></ion-icon><span>Contactez-nous</span></button></div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="p-0 md:px-5">
      <div class="bg-white md:rounded-lg p-3 pt-16 md:p-8 md:pt-24 min-h-screen">
        <div class="sectionWrapper sectionWrapper--noTopPadding">
          <section class="section section--header">
            <h2 class="section-header">Vous avez fait {{number_format((count(Auth::user()->lessons->where('course_id', $course->id)) / count($course->lessons)) * 100,2,",",".")}}% de la formation</h2>
          </section>
        </div>

        <div _ngcontent-sc24="" class="contain contain--small ng-star-inserted">
            <div _ngcontent-sc24="" class="promo-banner">
                <div _ngcontent-sc24="" class="promo-banner__image desktop-image"
                  style="background-image:url(//images.ctfassets.net/2y9b3o528xhq/1ZS3OPXIw5zDis6UAxkk2s/178a00db8c5a5eeec66eca016e1e3a97/smiling_man_wearing_headset.jpg);background-position:right;"></div>
                <div _ngcontent-sc24="" class="promo-banner__image mobile-image"
                  style="background-image:url(//images.ctfassets.net/2y9b3o528xhq/1jcJQeEKO3e2XrXoSwdB23/f73309ca736a06be43a1c529ed3c7eef/smiling_man_wearing_headset__mobile.jpg);background-position:right;"></div>
                  @if(count(Auth::user()->lessons->where('course_id', $course->id)) == count($course->lessons))
                <div _ngcontent-sc24="" class="promo-banner__content">
                    <div _ngcontent-sc24="" class="promo-banner__flag uppercase white"></div>
                    <div _ngcontent-sc24="" class="promo-banner__title">
                        Félicitations, vous avez obtenu votre certification !
                    </div>
                    <p _ngcontent-sc24="" class="promo-banner__subtitle">
                        Téléchargez votre certificat au format PDF ou ajoutez-le à votre profil LinkedIn
                    </p>
                </div>
                @else
                <div _ngcontent-sc24="" class="promo-banner__content">
                    <div _ngcontent-sc24="" class="promo-banner__flag uppercase white"></div>
                    <div _ngcontent-sc24="" class="promo-banner__title">
                        Allez, encore un effort et vous aurez votre certification !
                    </div>
                    <p _ngcontent-sc24="" class="promo-banner__subtitle">
                        Vous pourrez ainsi télécharger le certificat au format PDF ou l'ajouter-le à votre profil LinkedIn
                    </p>
                </div>
                @endif
                <div _ngcontent-sc24="" class="promo-banner__cta">
                    @if(count(Auth::user()->lessons->where('course_id', $course->id)) == count($course->lessons))
                    <a href="/getCertificate/{{$course->id}}" _ngcontent-sc24="" class="button btn sm button--white">
                          Télécharger
                      </a>
                      @else
                      <a href="#" _ngcontent-sc24="" class="button btn sm button--white">
                          Revenir au cours
                      </a>
                      @endif

                 </div>
            </div>
        </div>

          <!---->

          <!---->
          <!---->
          <!---->
        </div>


      </div>
    </div>
  </div>
</main>


@endsection
