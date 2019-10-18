@extends('layouts.menu')

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
{{-- https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/vNCMiPpT6qrvVvHcJUwQ --}}
<div class="hero-div" style=" background-image: url(/images/schools/backgrounds/bckg.png">
<div class="container hero-container">
  <div class="row">
    <div class="col-xs-12 vertically-align-contents-except-xs">
      <div class="hero-text hero-text-center">

          <h1>Les meilleures écoles et université d'afrique sont en ligne sur Oschool</h1>


          <h2>Parcourez la liste de nos écoles et découvrez ce qu'elles ont à vous offrir</h2>
        <div class="input-container center">
          <div class="hidden redirect">https://teachable.com/create-account?src=examples-form</div>
          <div class="hidden iterable-event"></div>
          <div class="hidden iterable-campaign"></div>
          <input id="email-input" type="email" autofocus="autofocus" placeholder="Votre adresse email">
          <button id="email-submit-button" class="orange-button">Inscrivez-vous</button>
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
      <div class="col-xs-12" style="margin: 60px 0 50px 0;">
        <h1 class="default-header">Nos Écoles</h1>
        <p class="default-paragraph" style="text-align:center;">Vous avez ici la liste de toutes les écoles qui est chez oschool, chez qui vous pouvez prendre les cours </p>
      </div>
    </div>

    <div class="row">
        @foreach($schools as $school)
      <div class="col-xs-12 col-sm-6 col-md-4 ">
{{-- <<<<<<< HEAD --}}
        <a href="{{url('schools', $school)}}" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(/images/schools/logos/{{$school->logo}});"></div>
            <div class="bottom" data-mh="school-cards" style="height: 230px;">
{{-- =======
        <a href="{{url('schools', $school)}}" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(/images/schools/logos/{{$school->logo}});"></div>
            <div class="bottom" data-mh="school-cards"">
>>>>>>> 28b5954ead173e3c23b57244026798314aa8b5d6 --}}
              <h1>{{$school->name}}</h1>
              <p class="default-paragraph">{{$school->heading}}</p>
              <!--
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/6Owd2hlXSIuRnIvjZ6Ft">
          -->
              <p class="default-paragraph">{{$school->country}}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach


    </div>
    <div class="row logos">
      <div class="col-xs-12">
        <strong><h3 class="default-paragraph" style="margin-bottom: 30px;font-weight: bolder;">Les leaders du marché utilisent Oschool pour la formation du personnel.</h3></strong>
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

<section class="big-image _1579">
<style>
._1579 {
  margin-bottom: 0px;
}

@media (max-width: 991px) {
  ._1579 {
    margin-bottom: 0px;
  }
}

@media (max-width: 767px) {
  ._1579 {
    margin-bottom: 0px;
  }
}
</style>
<img src="https://s3.amazonaws.com/cms-uploaded-images/ZmSsuyfrRGGVTrLm8ZQq_people.jpg">
<div class="big-image-div" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/ZmSsuyfrRGGVTrLm8ZQq_people.jpg); min-height: 375px;"></div>
</section>

@endsection
