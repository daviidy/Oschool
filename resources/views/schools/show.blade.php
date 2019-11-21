@extends('layouts.menu')
@section('title', $school->name)
@section('description', $school->heading)
@section('content')

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
          <h1>{{$school->name}}: {{$school->heading}}</h1>
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

<div class="nav-partial nav-partial-1 active" style="display: block;">
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

        <h1 style="margin-top: 2rem;" class="default-header">Les formations diplômantes de {{$school->name}}</h1>
        <p class="default-paragraph">Toutes ces formations sont professionnalisantes et font partie des meilleures sur le marché</p>

      </div>
    </div>
    <div class="row">
      @if($school->courses)
        @foreach($school->courses as $course)
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="{{ route('course.slug', $course->slug) }}" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(/images/courses/logos/{{$course->logo}});"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>{{$course->name}}</h1>
              <p class="default-paragraph">{{$course->subtitle}}</p>
              <img src="/images/authors/{{$course->author->image}}">
              <p class="default-paragraph">{{$course->author->full_name}}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
      @else
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://jessicasprague.teachable.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/u9ifiSUyTIOJBWXuCbjm_examples-scrapbooking.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Aucun cours</h1>
              <p class="default-paragraph">Turn your memories into beautifully designed digital scrapbooks with Photoshop</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/6Owd2hlXSIuRnIvjZ6Ft">
              <p class="default-paragraph">Jessica Sprague</p>
            </div>
          </div>
        </a>
      </div>
      @endif

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
