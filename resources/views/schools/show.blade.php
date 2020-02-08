@extends('layouts.menu')
@section('title', $school->name)
@section('image', '/images/divers/slider_school.png')
@section('description', $school->heading)
@section('content')

<!--pour le bouton "tous les cours"-->
<style media="screen">



/*! CSS Used from: http://localhost:8000/css/school_homepage.css */
@media all{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
*:focus{outline:none;}
a,a:hover{color:inherit;text-decoration:inherit;}
a:focus{color:inherit;text-decoration:none;}
body.body-public :hover{-webkit-transition:all 0.2s ease-in-out;-moz-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
@media print{
*,:after,:before{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:focus{outline:none;}
*,::after,::before{box-sizing:inherit;}
*,::after,::before{box-sizing:inherit;}
*,::after,::before{box-sizing:inherit;}
*,::after,::before{box-sizing:inherit;}
*,::after,::before{box-sizing:inherit;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
}
*,:after,:before{box-sizing:border-box;}
@media screen{
span{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
body *{box-sizing:border-box;}
}
@media screen{
span{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
body *{box-sizing:border-box;}
}
@media all{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
*:focus{outline:none;}
a,a:hover{color:inherit;text-decoration:inherit;}
a:focus{color:inherit;text-decoration:none;}
body.body-public :hover{-webkit-transition:all 0.2s ease-in-out;-moz-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
.elementor-animation-grow{transition-duration:.3s;transition-property:transform;}
.elementor-animation-grow:active,.elementor-animation-grow:focus,.elementor-animation-grow:hover{transform:scale(1.1);}
}
@media all{
.elementor-align-center .elementor-button{width:auto;}
.elementor-button{display:inline-block;line-height:1;background-color:#818a91;color:#fff;fill:#fff;text-align:center;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s;}
.elementor-button:focus,.elementor-button:hover,.elementor-button:visited{color:#fff;}
.elementor-button-content-wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;}
.elementor-button-icon{-webkit-box-flex:0;-webkit-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-webkit-box-ordinal-group:6;-webkit-order:5;-ms-flex-order:5;order:5;}
.elementor-button-text{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;-webkit-box-ordinal-group:11;-webkit-order:10;-ms-flex-order:10;order:10;display:inline-block;}
.elementor-button.elementor-size-sm{font-size:15px;padding:12px 24px;-webkit-border-radius:3px;border-radius:3px;}
.elementor-button .elementor-align-icon-left{margin-right:5px;-webkit-box-ordinal-group:6;-webkit-order:5;-ms-flex-order:5;order:5;}
.elementor-button span{text-decoration:inherit;}
.elementor-element.elementor-button-info .elementor-button{background-color:#4D90CC;}
}
@media all{
.elementor-widget-button a.elementor-button,.elementor-widget-button .elementor-button{font-weight:500;background-color:#61ce70;}
}
}

</style>

<section class="hero-partial _1569">
<style>
._1569 {
  margin-bottom: 0px;
}

@media (max-width: 991px) {
  ._1569 {
    margin-bottom: 0px;
  }
}

@media (max-width: 767px) {
  ._1569 {
    margin-bottom: 0px;
  }
}

._1569 h1 {
  max-width: 770px;
}

._1569 h2 {
  max-width: 600px;
  font-size: 16px;
  line-height: 28px;
}

@media (max-width: 767px) {
  ._1569 .hero-div {
    min-height: 550px;
  }
}

@media (min-width: 768px) {

  ._1569 .hero-div,
  ._1569 .container,
  ._1569 .row,
  ._1569 .col-xs-12 {
    min-height: 465px;
  }

  ._1569 .container {
    padding-top: 85px;
  }
}
</style>
<div id="segment-event" type="hidden" value=""></div>
<div class="hero-div" style="background-image: url(/images/divers/slider_school.png);">
<div class="container hero-container">
  <div class="row">
    <div class="col-xs-12 vertically-align-contents-except-xs">
      <div class="hero-text hero-text-center">
          @if($school->heading)
          <h1>{{$school->name}}: {{lcfirst($school->heading)}}</h1>
          @else
          <h1>Les meilleurs formateurs et Université d'afrique construisent leurs cours en ligne sur Oschool</h1>
          @endif

          <h2>Les meilleures écoles et universités d'Afrique enseignent sur Oschool</h2>
        <div class="input-container center">
          <div class="hidden redirect">https://teachable.com/create-account?src=examples-form</div>
          <div class="hidden iterable-event"></div>
          <div class="hidden iterable-campaign"></div>
          <input style="width: 100%;" id="email-input" type="email" autofocus="autofocus" placeholder="Cherchez un cours">
          <!--
          <button id="email-submit-button" class="orange-button">Inscrivez-vous</button>
      -->
          <div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<section class="sub-nav-menu-toggle-visibility _1570">
<style>
._1570 {
  margin-bottom: 0px;
}

@media (max-width: 991px) {
  ._1570 {
    margin-bottom: 0px;
  }
}

@media (max-width: 767px) {
  ._1570 {
    margin-bottom: 0px;
  }
}
</style>

<div id="tabs" class="border-bottom">
    <ul class="nav-container nav-container_1570">
        <li class="nav-item nav-link nav-link-1">
          <a id="tab1">MOOC</a>
        </li>
        <li class="nav-item nav-link nav-link-2">
          <a id="tab2">Spécialisations</a>
        </li>

        <li class="nav-item nav-link nav-link-2">
          <a id="tab3">Formations en salle</a>
        </li>

        <li class="nav-item nav-link nav-link-2">
          <a id="tab4">A propos de cette école</a>
        </li>

    </ul>
  </div>

<div id="tab1C" class="nav-partial nav-partial-1 active" style="display: block;">
    <section class="example-schools _1571">
      <style>
        ._1571 {
          margin-bottom: 0px;
        }

        @media (max-width: 991px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }

        @media (max-width: 767px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }
      </style>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 style="margin-top: 2rem;" class="default-header">Les MOOC de {{$school->name}}</h1>
            <p class="default-paragraph">Toutes ces formations sont professionnalisantes et font partie des meilleures sur le marché</p>

          </div>
        </div>
        <div class="row">
          @if(count($school->courses) > 0)
            @foreach($school->courses->take(7) as $course)
                @if($course->type == 'mooc' && $course->state == 'active')
          <div class="col-xs-12 col-sm-6 col-md-4 ">
            <a href="{{ route('course.slug', $course->slug) }}" target="_blank" rel="noopener noreferrer">
              <div class="school-card">
                <div class="image" style="background-image: url(/images/courses/logos/{{$course->logo}});"></div>
                <div class="bottom" data-mh="school-cards" style="height: 280px;">
                  <h1>{{$course->name}}</h1>
                  <p class="default-paragraph">{{ str_limit($course->subtitle, $limit = 100, $end = '...') }}</p>
                  <img src="/images/users/authors/{{$course->author->image}}">
                  <p class="default-paragraph">{{$course->author->full_name}}</p>
                </div>
              </div>
            </a>
          </div>
            @endif

          @endforeach
          @else
          <div class="row">
            <div style="text-align: center;" class="col-xs-12">
              <h1 style="margin-top: 2rem;" class="default-header">Aucun cours pour le moment pour cette école</h1>
              <img style="margin: auto" width="300" src="/images/divers/rocket.png" alt="">
              <p>Si vous avez des souhaits concernant un cours donné, n'hésitez pas à cliquer sur l'icone de messagerie en bas à droite de votre écran, et nous en parler</p>
            </div>
          </div>
          @endif

          @include('includes.all_courses')

        </div>

        {{--
        @include('includes.default.school_page.advantages')
        --}}
        <div class="row logos">
          <div class="col-xs-12">
            <p class="default-paragraph">Les leaders du marché utilisent Oschool pour la formation du personnel.</p>
            <div class="clearfix company-logos">
              <img src="/images/divers/cinetpay.png">
              <img src="/images/divers/Epistrophe.jpg">
              <img src="/images/divers/bora.png">
              <img src="/images/divers/final.png">
              <img src="/images/divers/LogoM-1.png">
              <!--img src="/images/divers/Logo-1.png"-->
            </div>

          </div>
        </div>
      </div>
    </section>

</div>

<div id="tab2C" class="nav-partial nav-partial-2" style="display: none;">
    <section class="example-schools _1571">
      <style>
        ._1571 {
          margin-bottom: 0px;
        }

        @media (max-width: 991px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }

        @media (max-width: 767px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }
      </style>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 style="margin-top: 2rem;" class="default-header">Les Spécialisations de {{$school->name}}</h1>
            <p class="default-paragraph">Toutes ces formations sont professionnalisantes et font partie des meilleures sur le marché</p>

          </div>
        </div>
        <div class="row">
          @if(count($school->courses) > 0)
            @foreach($school->courses as $course)
                @if($course->type == 'path' && $course->state == 'active')
          <div class="col-xs-12 col-sm-6 col-md-4 ">
            <a href="{{ route('path.slug', $course->slug) }}" target="_blank" rel="noopener noreferrer">
              <div class="school-card">
                <div class="image" style="background-image: url(/images/courses/logos/{{$course->logo}});"></div>
                <div class="bottom" data-mh="school-cards" style="height: 280px;">
                  <h1>{{$course->name}}</h1>
                  <p class="default-paragraph">{{ str_limit($course->subtitle, $limit = 100, $end = '...') }}</p>
                  <img src="/images/users/authors/{{$course->author->image}}">
                  <p class="default-paragraph">{{$course->author->full_name}}</p>
                </div>
              </div>
            </a>
          </div>
            @endif

          @endforeach
          @else
          <div class="row">
            <div style="text-align: center;" class="col-xs-12">
              <h1 style="margin-top: 2rem;" class="default-header">Aucun cours pour le moment pour cette école</h1>
              <img style="margin: auto" width="300" src="/images/divers/rocket.png" alt="">
              <p>Si vous avez des souhaits concernant un cours donné, n'hésitez pas à cliquer sur l'icone de messagerie en bas à droite de votre écran, et nous en parler</p>
            </div>
          </div>
          @endif
          @include('includes.all_courses')

        </div>


        {{--
        @include('includes.default.school_page.advantages')
        --}}
        <div class="row logos">
          <div class="col-xs-12">
            <p class="default-paragraph">Les leaders du marché utilisent Oschool pour la formation du personnel.</p>
            <div class="clearfix company-logos">
              <img src="/images/divers/cinetpay.png">
              <img src="/images/divers/Epistrophe.jpg">
              <img src="/images/divers/bora.png">
              <img src="/images/divers/final.png">
              <img src="/images/divers/LogoM-1.png">
              <img src="/images/divers/Logo-1.png">
            </div>

          </div>
        </div>
      </div>
    </section>

</div>

<div id="tab3C" class="nav-partial nav-partial-3" style="display: none;">
    <section class="example-schools _1571">
      <style>
        ._1571 {
          margin-bottom: 0px;
        }

        @media (max-width: 991px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }

        @media (max-width: 767px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }
      </style>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 style="margin-top: 2rem;" class="default-header">Les formations en salle de {{$school->name}}</h1>
            <p class="default-paragraph">Toutes ces formations sont professionnalisantes et font partie des meilleures sur le marché</p>

          </div>
        </div>
        <div class="row">
          @if(count($school->courses) > 0)
            @foreach($school->courses as $course)
                @if($course->type == 'bootcamp' && $course->state == 'active')
          <div class="col-xs-12 col-sm-6 col-md-4 ">
            <a href="{{ route('path.slug', $course->slug) }}" target="_blank" rel="noopener noreferrer">
              <div class="school-card">
                <div class="image" style="background-image: url(/images/courses/logos/{{$course->logo}});"></div>
                <div class="bottom" data-mh="school-cards" style="height: 280px;">
                  <h1>{{$course->name}}</h1>
                  <p class="default-paragraph">{{ str_limit($course->subtitle, $limit = 100, $end = '...') }}</p>
                  <img src="/images/users/authors/{{$course->author->image}}">
                  <p class="default-paragraph">{{$course->author->full_name}}</p>
                </div>
              </div>
            </a>
          </div>
            @endif

          @endforeach
          @else
          <div class="row">
            <div style="text-align: center;" class="col-xs-12">
              <h1 style="margin-top: 2rem;" class="default-header">Aucun cours pour le moment pour cette école</h1>
              <img style="margin: auto" width="300" src="/images/divers/rocket.png" alt="">
              <p>Si vous avez des souhaits concernant un cours donné, n'hésitez pas à cliquer sur l'icone de messagerie en bas à droite de votre écran, et nous en parler</p>
            </div>
          </div>
          @endif
          @include('includes.all_courses')

        </div>


        {{--
        @include('includes.default.school_page.advantages')
        --}}
        <div class="row logos">
          <div class="col-xs-12">
            <p class="default-paragraph">Les leaders du marché utilisent Oschool pour la formation du personnel.</p>
            <div class="clearfix company-logos">
              <img src="/images/divers/cinetpay.png">
              <img src="/images/divers/Epistrophe.jpg">
              <img src="/images/divers/bora.png">
              <img src="/images/divers/final.png">
              <img src="/images/divers/LogoM-1.png">
              <img src="/images/divers/Logo-1.png">
            </div>

          </div>
        </div>
      </div>
    </section>

</div>

<div id="tab4C" class="nav-partial nav-partial-3" style="display: none;">
    <section class="example-schools _1571">
      <style>
        ._1571 {
          margin-bottom: 0px;
        }

        @media (max-width: 991px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }

        @media (max-width: 767px) {
          ._1571 {
            margin-bottom: 0px;
          }
        }
      </style>
      <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h1 style="margin-top: 2rem;" class="default-header">A propos de {{$school->name}}</h1>
              <p>{!!$school->description!!}</p>
            </div>
          </div>



        {{--
        @include('includes.default.school_page.advantages')
        --}}
        <div class="row logos">
          <div class="col-xs-12">
            <p class="default-paragraph">Les leaders du marché utilisent Oschool pour la formation du personnel.</p>
            <div class="clearfix company-logos">
              <img src="/images/divers/cinetpay.png">
              <img src="/images/divers/Epistrophe.jpg">
              <img src="/images/divers/bora.png">
              <img src="/images/divers/final.png">
              <img src="/images/divers/LogoM-1.png">
              <img src="/images/divers/Logo-1.png">
            </div>

          </div>
        </div>
      </div>
    </section>

</div>

</section>

<section class="horizontal-line _1577">
<style>
._1577 {
  margin-bottom: 80px;
}

@media (max-width: 991px) {
  ._1577 {
    margin-bottom: 125px;
  }
}

@media (max-width: 767px) {
  ._1577 {
    margin-bottom: 75px;
  }
}
</style>
<hr>
</section>

<section class="cta-partial _1578">
<style>
._1578 {
  margin-bottom: 50px;
}

@media (max-width: 991px) {
  ._1578 {
    margin-bottom: 100px;
  }
}

@media (max-width: 767px) {
  ._1578 {
    margin-bottom: 50px;
  }
}

/*CUSTOM EXPID2 CODE*/
._1578 {
  background-color: #FFFFFF
}

._1578 {
  padding-top: 0px;
}

@media (max-width: 991px) {
  ._1578 {
    padding-top: 0px;
  }
}

@media (max-width: 767px) {
  ._1578 {
    padding-top: 0px;
  }
}

._1578 {
  padding-bottom: 0px;
}

@media (max-width: 991px) {
  ._1578 {
    padding-bottom: 0px;
  }
}

@media (max-width: 767px) {
  ._1578 {
    padding-bottom: 0px;
  }
}
</style>
<div class="container">
<div class="row">
  <div class="col-xs-12">
    <h1 class="small-uppercase-text">QU'EST CE QUE VOUS ATTENDEZ ?</h1>
    <h2 class="default-header" style="max-width: 750px">Commencez dès maintenant et transformez votre rêve en réalité</h2>
    <a href="/create-account?utm_source=examples-bottom" class="orange-button">Commencez gratuitement</a>
  </div>
</div>
</div>
</section>


@endsection
