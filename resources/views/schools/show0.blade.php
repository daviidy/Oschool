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
<div class="hero-div" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/vNCMiPpT6qrvVvHcJUwQ);">
<div class="container hero-container">
  <div class="row">
    <div class="col-xs-12 vertically-align-contents-except-xs">
      <div class="hero-text hero-text-center">
          @if($school->heading)
          <h1>{{$school->heading}}</h1>
          @else
          <h1>The best creators in the world build their online courses on Teachable</h1>
          @endif

          <h2>Les meilleures écoles et universités d'Afrique enseignent sur Oschool</h2>
        <div class="input-container center">
          <div class="hidden redirect">https://teachable.com/create-account?src=examples-form</div>
          <div class="hidden iterable-event"></div>
          <div class="hidden iterable-campaign"></div>
          <input id="email-input" type="email" autofocus="autofocus" placeholder="Email address">
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
<div class="border-bottom">
<ul class="nav-container nav-container_1570">
  <li id="creators-tab" class="nav-item nav-link nav-link-1 active">
    <a>A propos</a>
  </li>
  <li id="youtubers-tab" class="nav-item nav-link nav-link-2">
    <a>Formateurs</a>
  </li>
  <li id="niche-experts-tab" class="nav-item nav-link nav-link-3">
    <a>Niche Experts</a>
  </li>
  <li id="authors-tab" class="nav-item nav-link nav-link-4">
    <a>Authors</a>
  </li>
  <li id="marketplaces-tab" class="nav-item nav-link nav-link-5">
    <a>Marketplaces</a>
  </li>
  <li id="businesses-tab" class="nav-item nav-link nav-link-6">
    <a>Businesses</a>
  </li>
</ul>
</div>
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
        <h1 class="default-header">A propos de {{$school->name}}</h1>
        <p>{!!$school->description!!}</p>
        <p class="default-paragraph">Create a lifestyle business doing what you love, be it scrapbooking, photography, animation and design, or anything else you can dream up.</p>

      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://jessicasprague.teachable.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/u9ifiSUyTIOJBWXuCbjm_examples-scrapbooking.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Digital Scrapbooking</h1>
              <p class="default-paragraph">Turn your memories into beautifully designed digital scrapbooks with Photoshop</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/6Owd2hlXSIuRnIvjZ6Ft">
              <p class="default-paragraph">Jessica Sprague</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://learn.vrdev.school?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/K4qivEkAR5udrnzPOCR0_examples-vr.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>VR Dev School</h1>
              <p class="default-paragraph">Create amazing virtual reality games for Oculus Rift, HTC Vive, Gear VR &amp; more</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/2eudRNA0RvagaLi2IkOg">
              <p class="default-paragraph">Lee Wasilenko</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://courses.every-tuesday.com/p/brush-lettering-with-watercolor?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/lsfYuKBpSFOdaK4QQ3n2_homepage-featured-everytuesday.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Every Tuesday</h1>
              <p class="default-paragraph">Discover your unique style and create beautiful brush lettering with watercolor</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jRczQFwrTHGEeyIgTWJG">
              <p class="default-paragraph">Teela Cunningham</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://courses.sketchmaster.com/?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/HodQVq0YS7qSVCtXSNHK_homepage-featured-sketchmaster.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Sketch Master</h1>
              <p class="default-paragraph">Training courses to master the most popular screen-based design tool: Sketch</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jT5L8vR1qWrKfiUg3gCQ">
              <p class="default-paragraph">Peter Nowell</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://learn.make-fabulous-cakes.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/4zWj3kdOQhimHgdCYsPb_examples-cakes.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Make Fabulous Cakes</h1>
              <p class="default-paragraph">Learn how to pipe delicate buttercream flowers that look good &amp; taste exquisite</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/2wEzpNMzSU6g5mgoUyGe">
              <p class="default-paragraph">Darlene Abarquez</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="/create-account">
          <div class="create-course-card vertically-align-contents">
            <div>
              <div class="plus">
                +
              </div>
              <div class="orange-text">
                Create your course today
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    @include('includes.default.school_page.advantages')
    <div class="row logos">
      <div class="col-xs-12">
        <p class="default-paragraph">Market leaders use Teachable to enrich their brand &amp; business.</p>
        <div class="clearfix company-logos">
          <img src="https://teachable.com/assets/showcase/logo1-492edcd6564167cc91a0162d028da0669ae87f2959ccf683b78b4a176e9338c4.png">
          <img src="https://teachable.com/assets/showcase/logo2-d60d37fa3443fe00a9e47bc2c42a43799a0faf2f1f1d81b9f9441bcb77d17e60.png">
          <img src="https://teachable.com/assets/showcase/logo3-459469bb472753db1c99486b03df57852e15959cc830efe60d984db56f171f9c.png">
          <img src="https://teachable.com/assets/showcase/logo-pearson-42979f87ef26b43c43d1696ea250245731ebc4fecf738c3b0442bdec64a2475f.svg">
          <img src="https://teachable.com/assets/showcase/logo5-522181dfddb7bfe3ab06b9b76d635dbb46fd77748a9b14a850a1cc6b0290bc60.png">
        </div>

      </div>
    </div>
  </div>
</section>

</div>
<div class="nav-partial nav-partial-2" style="display: none;">
<section class="example-schools _1572">
  <style>
    ._1572 {
      margin-bottom: 0px;
    }

    @media (max-width: 991px) {
      ._1572 {
        margin-bottom: 0px;
      }
    }

    @media (max-width: 767px) {
      ._1572 {
        margin-bottom: 0px;
      }
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="default-header">YouTubers</h1>
        <p class="default-paragraph">Transform your videos into a profitable online course and delight your community with premium content.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://learn.angelafehr.com/p/creativewatercolour?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/k2PxrGtTTSGXBsGAkE32_examples-watercolor.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Creative Watercolor</h1>
              <p class="default-paragraph">Angela introduced her 42k+ subscribers to courses on techniques &amp; applications for watercolor painting</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/wb7zB8cjRECP2Ma4GF4b">
              <p class="default-paragraph">Angela Fehr</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://courses.52kards.com/p/the-foundations-of-card-magic?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/kZdZh8tRNaxdFDg4eQM4);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>52Kards</h1>
              <p class="default-paragraph">The largest YouTube channel on card magic created a complete lesson plan for learning the foundation of this craft</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/OIXa6YDxQ26g0HUz5XYw">
              <p class="default-paragraph">Asad Chaudhry</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://course.minutephysics.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/dfvrANPYQPOlrTVgHniH);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Minute Physics</h1>
              <p class="default-paragraph">With 3.6M+ subscribers, Henry Reich created an online course that distills how the world works into 60 bite-size lessons</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/EiWV0hHeTjSDG1nN8zZy">
              <p class="default-paragraph">Henry Reich</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://my.kinobody.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/odVBva1MT4SPbRIwBFlF_examples-kinobody.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Kinobody</h1>
              <p class="default-paragraph">Community of over 280k with 7 different programs on fitness and weight loss</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/PjL5PWM1Rx68hKytowxz">
              <p class="default-paragraph">Greg O'Gallagher</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://fmbs.biz?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/8AGC5Fc0SGGOIPlJViwk);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>FMBS</h1>
              <p class="default-paragraph">Ryan teaches you how to make 10x more money being an indie musician</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/MK5gcRrhSliLXNzopBYq">
              <p class="default-paragraph">Ryan Leslie</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="/create-account">
          <div class="create-course-card vertically-align-contents">
            <div>
              <div class="plus">
                +
              </div>
              <div class="orange-text">
                Create your course today
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row logos">
      <div class="col-xs-12">
        <p class="default-paragraph">Market leaders use Teachable to enrich their brand &amp; business.</p>
        <div class="clearfix company-logos">
          <img src="https://teachable.com/assets/showcase/logo1-492edcd6564167cc91a0162d028da0669ae87f2959ccf683b78b4a176e9338c4.png">
          <img src="https://teachable.com/assets/showcase/logo2-d60d37fa3443fe00a9e47bc2c42a43799a0faf2f1f1d81b9f9441bcb77d17e60.png">
          <img src="https://teachable.com/assets/showcase/logo3-459469bb472753db1c99486b03df57852e15959cc830efe60d984db56f171f9c.png">
          <img src="https://teachable.com/assets/showcase/logo-pearson-42979f87ef26b43c43d1696ea250245731ebc4fecf738c3b0442bdec64a2475f.svg">
          <img src="https://teachable.com/assets/showcase/logo5-522181dfddb7bfe3ab06b9b76d635dbb46fd77748a9b14a850a1cc6b0290bc60.png">
        </div>

      </div>
    </div>
  </div>
</section>

</div>
<div class="nav-partial nav-partial-3" style="display: none;">
<section class="example-schools _1573">
  <style>
    ._1573 {
      margin-bottom: 0px;
    }

    @media (max-width: 991px) {
      ._1573 {
        margin-bottom: 0px;
      }
    }

    @media (max-width: 767px) {
      ._1573 {
        margin-bottom: 0px;
      }
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="default-header">Niche Experts</h1>
        <p class="default-paragraph">Showcase and monetize your expertise on any field. Some of our most successful instructors teach courses on niche topics.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://beginblacksmithing.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/fopLM2zMRhuzdk53owQj_examples-blacksmithing.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Alec Steele Blacksmith</h1>
              <p class="default-paragraph">Everything you need to know about blacksmithing: from setting up your first forge to making your own tools</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/dhCNdF4dQPeH9FtDREcn">
              <p class="default-paragraph">Alec Steele</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://learn.uavcoach.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/242NY3nTmCWsBFIDNojg_examples-drone.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>UAV Coach</h1>
              <p class="default-paragraph">A community of 40k+ drone pilots that offers online training in drone flight, cinematography &amp; more</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/7xttxlETVOIUtnNtDWC5">
              <p class="default-paragraph">Alan Perlman</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://howtofreedive.com/p/the-10-meter-freediver?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/DUdPhZgdRMKlvyWgF9Wn);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>How to Freedive</h1>
              <p class="default-paragraph">Learn how to freedive to depths of up to 10 meters on just a single breath of air</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/5YCOTacSAKT0FhOJCbPs">
              <p class="default-paragraph">Pete Ryder</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://annapurna-living.teachable.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/Z3QPdrLTGmmSeeYPH4BG);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Annapurna Living</h1>
              <p class="default-paragraph">Actress Carrie-Anne Moss created classes on yoga, meditation, motherhood &amp; conscious living</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/feb8L5uhQUuXe8fni2b9">
              <p class="default-paragraph">Carrie-Anne Moss</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href=" https://www.clickminded.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/ka9dEigUSBW0stDDtCRy);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>ClickMinded</h1>
              <p class="default-paragraph">How to drive more customers to your site with search engine optimization</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/73rmjlfLQjqIU0rMo3Y7">
              <p class="default-paragraph">Tommy Griffith</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="/create-account">
          <div class="create-course-card vertically-align-contents">
            <div>
              <div class="plus">
                +
              </div>
              <div class="orange-text">
                Create your course today
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row logos">
      <div class="col-xs-12">
        <p class="default-paragraph">Market leaders use Teachable to enrich their brand &amp; business.</p>
        <div class="clearfix company-logos">
          <img src="https://teachable.com/assets/showcase/logo1-492edcd6564167cc91a0162d028da0669ae87f2959ccf683b78b4a176e9338c4.png">
          <img src="https://teachable.com/assets/showcase/logo2-d60d37fa3443fe00a9e47bc2c42a43799a0faf2f1f1d81b9f9441bcb77d17e60.png">
          <img src="https://teachable.com/assets/showcase/logo3-459469bb472753db1c99486b03df57852e15959cc830efe60d984db56f171f9c.png">
          <img src="https://teachable.com/assets/showcase/logo-pearson-42979f87ef26b43c43d1696ea250245731ebc4fecf738c3b0442bdec64a2475f.svg">
          <img src="https://teachable.com/assets/showcase/logo5-522181dfddb7bfe3ab06b9b76d635dbb46fd77748a9b14a850a1cc6b0290bc60.png">
        </div>

      </div>
    </div>
  </div>
</section>

</div>
<div class="nav-partial nav-partial-4" style="display: none;">
<section class="example-schools _1574">
  <style>
    ._1574 {
      margin-bottom: 0px;
    }

    @media (max-width: 991px) {
      ._1574 {
        margin-bottom: 0px;
      }
    }

    @media (max-width: 767px) {
      ._1574 {
        margin-bottom: 0px;
      }
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="default-header">Authors</h1>
        <p class="default-paragraph">Turn your words, insights, and industry experience into a highly marketable online product that’s easy to create.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://learn.ryanholiday.net?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/OeAQ62nOQqgwkbnVFfLq_examples-ryanholiday.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Growth Hacker Marketing</h1>
              <p class="default-paragraph">Based on a best-selling book. A primer on the Future of PR, Marketing, and Advertising</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/BoFef6zMRcunsGeulnr5">
              <p class="default-paragraph">Ryan Holiday</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://creative-penn-courses.teachable.com/p/how-to-write-a-novel?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/GUFkl6eRQnmWm4Dqjg8j_examples-joannapenn.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>How to Write a Novel</h1>
              <p class="default-paragraph">Understand story structure and the elements of a novel to write &amp; edit your manuscript</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/hhsOqKtT1Wf4O4JLlf6L">
              <p class="default-paragraph">Joanna Penn</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://learn.selfpublishingformula.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/zorIvhLjTWybdLZbHNQ7);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Facebook Ads for Authors</h1>
              <p class="default-paragraph">Revenue generating online marketing skills and tools for self-published authors</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/O64rIlAHQq1uojlNUUdi">
              <p class="default-paragraph">Mark Dawson</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="https://courses.creativindie.com/p/guerrilla-publishing-bonuses?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/yULVYdDQrOnHOgbuAD6G_examples-creativindie.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Guerrilla Publishing</h1>
              <p class="default-paragraph">From zero platform to bestselling author: a revolutionary new system to write and publish books that sell themselves</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/SEs3RQHvRfO4xHOP9sCh">
              <p class="default-paragraph">Derek Murphy</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://rpg.usefedora.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/PWAfIcWpTzOuAlU3AoHg_examples-charliehoehn.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Get a Job Offer in 30 Days</h1>
              <p class="default-paragraph">Learn how to find a job you love, market yourself, and get hired fast - even without experience</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/Xe8wvNQLSbiWqybLGLyC">
              <p class="default-paragraph">Charlie Hoehn</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="/create-account">
          <div class="create-course-card vertically-align-contents">
            <div>
              <div class="plus">
                +
              </div>
              <div class="orange-text">
                Create your course today
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row logos">
      <div class="col-xs-12">
        <p class="default-paragraph">Market leaders use Teachable to enrich their brand &amp; business.</p>
        <div class="clearfix company-logos">
          <img src="https://teachable.com/assets/showcase/logo1-492edcd6564167cc91a0162d028da0669ae87f2959ccf683b78b4a176e9338c4.png">
          <img src="https://teachable.com/assets/showcase/logo2-d60d37fa3443fe00a9e47bc2c42a43799a0faf2f1f1d81b9f9441bcb77d17e60.png">
          <img src="https://teachable.com/assets/showcase/logo3-459469bb472753db1c99486b03df57852e15959cc830efe60d984db56f171f9c.png">
          <img src="https://teachable.com/assets/showcase/logo-pearson-42979f87ef26b43c43d1696ea250245731ebc4fecf738c3b0442bdec64a2475f.svg">
          <img src="https://teachable.com/assets/showcase/logo5-522181dfddb7bfe3ab06b9b76d635dbb46fd77748a9b14a850a1cc6b0290bc60.png">
        </div>

      </div>
    </div>
  </div>
</section>

</div>
<div class="nav-partial nav-partial-5" style="display: none;">
<section class="example-schools _1575">
  <style>
    ._1575 {
      margin-bottom: 0px;
    }

    @media (max-width: 991px) {
      ._1575 {
        margin-bottom: 0px;
      }
    }

    @media (max-width: 767px) {
      ._1575 {
        margin-bottom: 0px;
      }
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="default-header">Marketplaces</h1>
        <p class="default-paragraph">Create your own course marketplace. Bring teachers together and automatically pay them a revenue share on their courses.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="https://academyhacker.com/?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/IUy5DsDpTYmectTx4zBf_examples-academyhacker.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Academy Hacker</h1>
              <p class="default-paragraph">An elearning course marketplace for hackers, developers, cyber security pros, and tech nerds</p>
              <img src="https://s3.amazonaws.com/cms-uploaded-images/qA0O7gBfSp2cdqKMSCvQ_AcademyHacker-Logo01.jpg">
              <p class="default-paragraph">Academy Hacker</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="https://stackskills.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/B307jr6iTQ6Kfza9JWYp);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>StackSkills</h1>
              <p class="default-paragraph">Backed by 500Startups &amp; Tim Draper, StackSkills distributes over 475 courses to 100k+ students</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/lSdcDa26ToCJXIEz0l5A">
              <p class="default-paragraph">Stackskills</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://market.saleshacker.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/U7wVR2twQTOwiR2HJteY);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Sales Hacker</h1>
              <p class="default-paragraph">Innovative and up to date sales tactics, strategies, and hacks</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/C38gCdclTS2WvabrcNJV">
              <p class="default-paragraph">Sales Hacker</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="https://integrity.training/?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/YBkUPLCTZmA2F0gEB6cP);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Integrity Training</h1>
              <p class="default-paragraph">Online staff training and development courses from Microsoft certifications to web design training. </p>
              <img src="https://s3.amazonaws.com/cms-uploaded-images/bS1F9a8uQhS0t3YgVMsw_Integrity_Training_2B-White.png">
              <p class="default-paragraph">Integrity Training</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://edurila.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/qSKRu2dQ1mVj4XsRDKeE_examples-edurilanew.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Edurila</h1>
              <p class="default-paragraph">Over 100 courses covering everything from programming to design to making money</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/c6tvnzovShyiA6VCOkVy">
              <p class="default-paragraph">Edurila</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="/create-account">
          <div class="create-course-card vertically-align-contents">
            <div>
              <div class="plus">
                +
              </div>
              <div class="orange-text">
                Create your course today
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row logos">
      <div class="col-xs-12">
        <p class="default-paragraph">Market leaders use Teachable to enrich their brand &amp; business.</p>
        <div class="clearfix company-logos">
          <img src="https://teachable.com/assets/showcase/logo1-492edcd6564167cc91a0162d028da0669ae87f2959ccf683b78b4a176e9338c4.png">
          <img src="https://teachable.com/assets/showcase/logo2-d60d37fa3443fe00a9e47bc2c42a43799a0faf2f1f1d81b9f9441bcb77d17e60.png">
          <img src="https://teachable.com/assets/showcase/logo3-459469bb472753db1c99486b03df57852e15959cc830efe60d984db56f171f9c.png">
          <img src="https://teachable.com/assets/showcase/logo-pearson-42979f87ef26b43c43d1696ea250245731ebc4fecf738c3b0442bdec64a2475f.svg">
          <img src="https://teachable.com/assets/showcase/logo5-522181dfddb7bfe3ab06b9b76d635dbb46fd77748a9b14a850a1cc6b0290bc60.png">
        </div>

      </div>
    </div>
  </div>
</section>

</div>
<div class="nav-partial nav-partial-6" style="display: none;">
<section class="example-schools _1640">
  <style>
    ._1640 {
      margin-bottom: 0px;
    }

    @media (max-width: 991px) {
      ._1640 {
        margin-bottom: 0px;
      }
    }

    @media (max-width: 767px) {
      ._1640 {
        margin-bottom: 0px;
      }
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="default-header">Businesses</h1>
        <p class="default-paragraph">Use Teachable within your organization to provide value to your customers, train employees, or sell courses to the general public.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://online.nytedu.com/p/how-to-tell-brand-stories-with-video?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/RyvHeVl5T96ajpoy3gXq);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>The New York Times</h1>
              <p class="default-paragraph">Offer courses to both pre-college and professional audiences, reflecting the scope of The Times</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/Fi9IhGSRl2pFWfPfMJyd">
              <p class="default-paragraph">The New York Times</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://www.fetchfind.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/3r13oM6uRQmbbZAO5IJ9_examples-fetchfind.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Grow Your Pet Care Business</h1>
              <p class="default-paragraph">Grow your pet care business with the world’s first and only pet‐centric online content marketplace</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/L6F4n7xRMJBTUYybcOFw">
              <p class="default-paragraph">FetchFind</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="https://11x-engineering.teachable.com/?src=teachable-examples?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/iYF9BlzS8iSl2D6t0k3b);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>Headspring</h1>
              <p class="default-paragraph">Enterprise software developer using Teachable for internal training as well as revenue &amp; lead generation</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/mOExpaJVRuij6zbYuwxQ">
              <p class="default-paragraph">Headspring</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="https://www.certification.getresponse.com/?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/GF7bttEoSVSFV4qZ977a_examples-getresponse.jpg);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>GetResponse</h1>
              <p class="default-paragraph">Email marketing company GetResponse uses Teachable to power their branded certification program worldwide</p>
              <img src="https://s3.amazonaws.com/cms-uploaded-images/BDDulXL2RqAfqG8UYrWA_getresponse-logo-square.png">
              <p class="default-paragraph">GetResponse</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <a href="http://academy.gns3.com?src=teachable-examples" target="_blank" rel="noopener noreferrer">
          <div class="school-card">
            <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IFZCBi5RTyO7djTOnvR0);"></div>
            <div class="bottom" data-mh="school-cards" style="height: 280px;">
              <h1>GNS3 Academy</h1>
              <p class="default-paragraph">Software for networking professionals with 2m+ downloads. By creating courses, GNS3 expanded its revenue streams</p>
              <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/gh7WR7KVQ2amSpxc6XUe">
              <p class="default-paragraph">GNS3</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="/create-account">
          <div class="create-course-card vertically-align-contents">
            <div>
              <div class="plus">
                +
              </div>
              <div class="orange-text">
                Create your course today
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row logos">
      <div class="col-xs-12">
        <p class="default-paragraph">Market leaders use Teachable to enrich their brand &amp; business.</p>
        <div class="clearfix company-logos">
          <img src="https://teachable.com/assets/showcase/logo1-492edcd6564167cc91a0162d028da0669ae87f2959ccf683b78b4a176e9338c4.png">
          <img src="https://teachable.com/assets/showcase/logo2-d60d37fa3443fe00a9e47bc2c42a43799a0faf2f1f1d81b9f9441bcb77d17e60.png">
          <img src="https://teachable.com/assets/showcase/logo3-459469bb472753db1c99486b03df57852e15959cc830efe60d984db56f171f9c.png">
          <img src="https://teachable.com/assets/showcase/logo-pearson-42979f87ef26b43c43d1696ea250245731ebc4fecf738c3b0442bdec64a2475f.svg">
          <img src="https://teachable.com/assets/showcase/logo5-522181dfddb7bfe3ab06b9b76d635dbb46fd77748a9b14a850a1cc6b0290bc60.png">
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
    <h1 class="small-uppercase-text">WHAT ARE YOU WAITING FOR?</h1>
    <h2 class="default-header" style="max-width: 750px">Start now and turn your knowledge into a profitable online course</h2>
    <a href="/create-account?utm_source=examples-bottom" class="orange-button">Get started for free</a>
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
