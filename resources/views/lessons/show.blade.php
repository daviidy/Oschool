@extends('layouts.menu-course-lecture')
@section('image', '/images/lessons/images/image.png')
@section('content')


<style>

iframe{
  width: 100%;
  margin: 0 auto;
}
#video p {
  text-align: center;
}
</style>

<style media="screen">
/*! CSS Used from: https://fedora.teachablecdn.com/assets/bootstrap-31ff648fd5e6158c77c31e785844877b6666554feab422e57ca5a96aa5587b9e.css ; media=screen */
@media screen{
article{display:block;}
button{margin:0;font:inherit;color:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{padding:0;border:0;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
.btn:focus,.btn:active:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);}
.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd;}
.btn-primary:hover,.btn-primary:focus,.btn-primary:active{color:#fff;background-color:#3071a9;border-color:#285e8e;}
.btn-primary:active{background-image:none;}
.pull-right{float:right!important;}
.pull-left{float:left!important;}
}
/*! CSS Used from: https://themes2.teachablecdn.com/themecss/production/base.css?_=2cf98e3f62fe&logged_out_homepage_background_image_overlay=0.0 */
.btn-primary,.btn-primary:active,.btn-primary:focus{background:#1ea69a!important;border:1px solid #1ea69a!important;font-weight:600!important;outline:none!important;color:#fff;border-radius:20px;padding:3px 18px!important;}
.btn-primary:hover,.btn-primary:active:hover,.btn-primary:focus:hover{outline:none!important;text-decoration:none;background:#1a9086!important;border:1px solid #1a9086!important;color:#fff;}
@media screen and (max-width: 767px){
.btn-primary,.btn-primary:active,.btn-primary:focus{font-size:15px;}
}
.Quiz{position:relative;}
.Quiz-item{left:0;position:absolute;top:0;transition:opacity 300ms ease,transform 300ms ease;width:100%;will-change:opacity, transform;}
.Quiz .quiz-question-outer{transition:height 300ms ease;}
.quiz-wrapper .quiz{max-width:480px;margin:0 auto;}
.quiz-wrapper .quiz .quiz-progress{text-align:center;margin-bottom:20px;font-size:20px;color:#ccc;}
.quiz-wrapper .quiz .quiz-question{text-align:center;margin:0 -50px 30px;font-size:24px;}
.quiz-wrapper .quiz .quiz-question-outer{position:relative;}
.quiz-wrapper .quiz .quiz-answer-container .quiz-answer{border:1px solid #eee;padding:10px 20px;margin-bottom:10px;border-radius:5px;cursor:pointer;transition:0.1s ease-in-out all;-webkit-transition:0.1s ease-in-out all;color:#818181;}
.quiz-wrapper .quiz .quiz-answer-container .quiz-answer:hover{background:#f7f7f7;color:#000;border:1px solid #d7dada;}
.quiz-wrapper .quiz .quiz-answer-container .quiz-answer-icon i{line-height:40px;color:green;float:right;margin-top:-50px;margin-right:-30px;display:none;}
.quiz-wrapper .quiz .quiz-answer-container .quiz-answer-icon i.quiz-answer-icon-correct{color:#2ecc71;}
.quiz-wrapper .quiz .quiz-answer-container .quiz-answer-icon i.quiz-answer-icon-incorrect{color:#e74c3c;}
.quiz-controls{margin-top:30px;position:relative;}
.quiz-controls button{opacity:0;position:absolute;pointer-events:none;}
.quiz-controls button.pull-right{right:0;}
@media screen and (max-width: 992px){
.quiz-wrapper .quiz .quiz-question{margin:20px 0px;}
}
.lecture-content .lecture-attachment{margin-bottom:20px;margin-top:30px;}
.lecture-content .lecture-attachment .attachment-block-wrapper{border:1px solid #d7dada;border-radius:5px;}
.lecture-content .lecture-attachment .attachment-block-wrapper .attachment-block-label{background:#2b3636;color:#fff;display:block;height:27px;line-height:28px;border-radius:3px;text-align:center;margin-top:-35px;margin-left:-35px;font-weight:bold;font-size:15px;float:left;padding:0px 15px;}
.lecture-content .lecture-attachment .attachment-block-wrapper.quiz-wrapper{padding:35px 35px 80px 35px;}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css */
.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.pull-left{float:left;}
.fa-check:before{content:"\f00c";}
.fa-times:before{content:"\f00d";}
.fa-circle-o:before{content:"\f10c";}

/*! CSS Used from: https://fedora.teachablecdn.com/assets/bootstrap-31ff648fd5e6158c77c31e785844877b6666554feab422e57ca5a96aa5587b9e.css ; media=screen */
@media screen{
button{margin:0;font:inherit;color:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{padding:0;border:0;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
.btn:focus,.btn:active:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);}
.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd;}
.btn-primary:hover,.btn-primary:focus,.btn-primary:active{color:#fff;background-color:#3071a9;border-color:#285e8e;}
.btn-primary:active{background-image:none;}
}
/*! CSS Used from: https://themes2.teachablecdn.com/themecss/production/base.css?_=a3fb33ed7622&logged_out_homepage_background_image_overlay=0.0 */
.btn-primary,.btn-primary:active,.btn-primary:focus{background:#1ea69a!important;border:1px solid #1ea69a!important;font-weight:600!important;outline:none!important;color:#fff;border-radius:20px;padding:3px 18px!important;}
.btn-primary:hover,.btn-primary:active:hover,.btn-primary:focus:hover{outline:none!important;text-decoration:none;background:#1a9086!important;border:1px solid #1a9086!important;color:#fff;}
@media screen and (max-width: 767px){
.btn-primary,.btn-primary:active,.btn-primary:focus{font-size:15px;}
}
.Quiz{position:relative;}
.Quiz-complete{-webkit-animation:fadeIn 750ms ease forwards;animation:fadeIn 750ms ease forwards;will-change:opacity;}
.quiz-wrapper .quiz{max-width:480px;margin:0 auto;}
.quiz-finished{margin-top:32px;text-align:center;}
.quiz-finished i{font-size:90px;margin-bottom:20px;}
.quiz-finished i.success{color:#2ecc71;}
.quiz-finished .quiz-finished-text{font-size:22px;font-stretch:normal;font-style:normal;font-weight:normal;line-height:2.05;text-align:center;}
.quiz-finished .btn-primary{font-size:13px;font-stretch:normal;font-style:normal;font-weight:bold;line-height:0.67;margin-top:40px;min-width:215px;padding:14px 18px!important;text-align:center;}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css */
.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-check:before{content:"\f00c";}




/*! CSS Used fontfaces */
@font-face{font-family:'FontAwesome';src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.eot?v=4.1.0');src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.eot#iefix&v=4.1.0') format('embedded-opentype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.woff?v=4.1.0') format('woff'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.ttf?v=4.1.0') format('truetype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/fonts/fontawesome-webfont.svg?v=4.1.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal;}
</style>


<!--pour les fichiers telechargeables-->
<style media="screen">
/*! CSS Used from: https://platform.mindvalley.com/quests-b802371a1b4d00452c37a4f69743503a.css?vsn=d */
section{display:block;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
*,:after,:before{box-sizing:inherit;}
*,:after,:before{border:0 solid #95989d;}
.button{display:inline-block;background-color:#3c434e;border-radius:9999px;text-decoration:none;text-align:center;color:#c1c1c1;padding:1rem 2rem;font-size:1rem;font-weight:600;line-height:1;}
.button:hover{cursor:pointer;background-color:#62686e;}
.button--primary{background-color:#4D90CC;border-width:1px;border-color:#4D90CC;color:#fff;}
.button--primary:hover{background-color:#6cb2eb;}
.coverWrapper{position:relative;padding-top:56.25%;}
.cover{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;background-size:cover;background-color:#62686e;background-position:50%;}
.bg-grey-darker{background-color:#2c313b;}
.rounded{border-radius:.25rem;}
.rounded-lg{border-radius:.5rem;}
.hidden{display:none;}
.flex{display:-ms-flexbox;display:flex;}
.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap;}
.items-center{-ms-flex-align:center;align-items:center;}
.flex-initial{-ms-flex:initial;flex:initial;}
.flex-grow{-ms-flex-positive:1;flex-grow:1;}
.font-bold{font-weight:700;}
.my-2{margin-top:.5rem;margin-bottom:.5rem;}
.mt-0{margin-top:0;}
.mb-6{margin-bottom:1.5rem;}
.p-2{padding:.5rem;}
.p-3{padding:.75rem;}
.text-grey-light{color:#95989d;}
.text-white{color:#fff;}
.text-base{font-size:1rem;}
.uppercase{text-transform:uppercase;}
.w-32{width:8rem;}
.w-full{width:100%;}
@media (min-width:768px){
.md\:rounded-lg{border-radius:.5rem;}
.md\:block{display:block;}
.md\:flex-no-wrap{-ms-flex-wrap:nowrap;flex-wrap:nowrap;}
.md\:my-6{margin-top:1.5rem;margin-bottom:1.5rem;}
.md\:p-3{padding:.75rem;}
.md\:text-2xl{font-size:1.5rem;}
.md\:w-48{width:12rem;}
.md\:w-auto{width:auto;}
}
</style>

<style media="screen">
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-h1{margin:16px;font-size:3.1875rem;text-align:center;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.167;letter-spacing:-0.01562em;}
@media (min-width:600px){
.MuiTypography-h1{font-size:4.4987rem;}
}
@media (min-width:800px){
.MuiTypography-h1{font-size:4.9272rem;}
}
@media (min-width:1025px){
.MuiTypography-h1{font-size:5.3556rem;}
}
.MuiTypography-alignLeft{text-align:left;}
/*! CSS Used from: https://www.educative.io/static/css/92.3705e7dd.chunk.css */
h1{font-size:2em;margin:.67em 0;}
svg:not(:root){overflow:hidden;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
}
*,:after,:before{box-sizing:border-box;}
h1{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h1{margin-top:20px;margin-bottom:10px;}
h1{font-size:36px;}
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
.RLTEg{flex:0 1 700px;display:flex;flex-direction:column;justify-content:space-evenly;height:auto;z-index:1;}
@media screen and (max-width: 480px){
.RLTEg{margin:0px -118px 0px -21px;}
}
@media only screen and (min-width: 1024px){
.RLTEg{flex:1 1 0%;flex-direction:row;-webkit-box-pack:justify;justify-content:space-between;max-width:850px;text-align:left;margin-bottom:70px;}
}
.ghvulQ{font-weight:600;margin-left:0px;}
.kuacRj{font-weight:400;font-size:20px;color:rgb(0, 0, 0);letter-spacing:0px;margin:15px 35px 0px 0px;}
@media only screen and (max-width: 480px){
.kuacRj{padding-left:17px;width:300px;font-size:16px;}
}
@media only screen and (max-width: 780px) and (orientation: landscape){
.kuacRj{width:550px;font-size:16px;}
}
@media only screen and (max-width: 480px){
.fAJiCk .main-img{width:220px;margin-top:-30px;}
}
.ieGesu{margin-top:20px;}
.dwPCQe{display:flex;flex-direction:column;}
@media only screen and (max-width: 780px){
.dwPCQe{-webkit-box-align:center;align-items:center;}
}

</style>


<div class="course-sidebar lecture-page navbar-collapse navbar-sidebar-collapse collapse" id="courseSidebar" aria-expanded="false" style="height: 31px;">
  <h2 style="padding-bottom: 0px">Programme du cours</h2>
  <!-- Course Progress -->

  <div class="course-progress lecture-page is-at-top">
    <div class="progressbar">
      <div class="progressbar-fill" style="min-width: {{(count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100}}%;"></div>
    </div>
    <div class="small course-progress-percentage">
      <span class="percentage">
        {{number_format((count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100)}}%
      </span>
      TERMINÉ
    </div>
    <div class="small1">
      <p style="padding-bottom: 0px;text-transform: uppercase;font-size: 15px; color: #000; font: menu;">
          <a href="https://discordapp.com/invite/hhbzcHE" target="_blank">
          <strong>Avez-vous des questions ? Posez-les dans la communauté</strong>
          </a>
      </p>

      <p style="padding-bottom: 0px;text-transform: uppercase;font-size: 15px; color: #000; font: menu;">
          <a href="/certificate/{{$lesson->course_id}}">
          <strong>Certificat de réussite</strong>
          </a>
      </p>
    </div>
  </div>

  <!-- Lecture list on courses page (enrolled user) -->

  <div class="row lecture-sidebar">


    @if($lesson->course->sections)
    @foreach($lesson->course->sections->sortBy('position') as $section)
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        {{$section->title}}
      </div>
      <ul class="section-list">
        @if($section->lessons)
        @foreach($section->lessons->sortBy('position') as $section_lesson)
        @if($section_lesson->status == 'active')
        @if(Auth::user()->lessons->contains($section_lesson->id))
        <li class="section-item completed unlocked-lecture">
            <a class="item" data-no-turbolink="true" href="/course/{{$lesson->course->slug}}/lessons/{{$section_lesson->slug}}" id="sidebar_link_10371330">
              <span class="status-container">
                <span class="status-icon">
                  &nbsp;
                </span>
              </span>
              <div class="title-container">
                <span class="lecture-icon">
                  <img width="30" src="https://ophi.org.uk/wp-content/uploads/Play-icon-transparent.png">
                </span>
                <span class="lecture-name">
                  {{$section_lesson->title ? $section_lesson->title : 'Nouvelle leçon'}}
                </span>
              </div>
            </a>
          </li>
        @else
        <li class="section-item incomplete">
          <a class="item" data-no-turbolink="true" href="/course/{{$lesson->course->slug}}/lessons/{{$section_lesson->slug}}" id="sidebar_link_10371330">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <span class="lecture-icon">
                <img width="30" src="https://ophi.org.uk/wp-content/uploads/Play-icon-transparent.png">
              </span>
              <span class="lecture-name">
                {{$section_lesson->title ? $section_lesson->title : 'Nouvelle leçon'}}
              </span>
            </div>
          </a>
        </li>
        @endif
        @endif

        @endforeach


        @endif
      </ul>
    </div>
    @endforeach
    @endif
  </div>
</div>

<a href="https://icons8.com/icon/19318/play-button">Play Button icon by Icons8</a>
<!-- Lecture Content -->
<div class="course-mainbar lecture-content">
  <!-- Meta tag for tracking lecture progress -->
  <meta id="lecture-completion-data" data-last-lecture-id="10371330" data-last-lecture-url="/courses/532534/lectures/10371330" data-is-completed="true" data-can-access-lecture="true" data-compliance-enabled="false" data-valid-for-completion="true">
  <h2 id="lecture_heading" class="section-title" data-lecture-id="10371838" data-next-lecture-id="10385724" data-lecture-url="/courses/532534/lectures/10371838" data-next-lecture-url="/courses/532534/lectures/10385724" ,=""
    data-previous-lecture-url="" data-previous-lecture-id="">
    <img width="50" src="https://ophi.org.uk/wp-content/uploads/Play-icon-transparent.png" alt="">
    &nbsp;
    {{$lesson->title}}
  </h2>

  @if($lesson->section->drip && $status == '0')



  <div class="Title-m6u0oe-0 RLTEg">
    <div class="LandingPageFeature__TitleText-sc-19d35qp-3 dwPCQe">
        <h1 class="MuiTypography-root Typography-ngwq8z-0 Heading-sc-1jljnqo-0 ghvulQ MuiTypography-h1 MuiTypography-alignLeft" ml="0">
            @if($lesson->section->drip->date)
            Ce cours sera disponible le {{Carbon\Carbon::parse($lesson->section->drip->date)->format('d-m-Y')}}
            @elseif($lesson->section->drip->days)
            Ce cours sera disponible dans {{$days}} jours
            @endif
        </h1>
        <div class="Tagline-sc-1p09yld-0 kuacRj">Un peu de patience ;)</div>
    </div>
    <div class="LandingPageFeature__MainImg-sc-19d35qp-2 ieGesu">
            <img width="400" src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="">
    </div>
</div>



  @elseif($lesson->free_lesson == 'no' && !Auth::user()->courses->contains($lesson->section->course->id) && !$lesson->section->course->school->user->isOwner())
  <div class="Title-m6u0oe-0 RLTEg">
    <div class="LandingPageFeature__TitleText-sc-19d35qp-3 dwPCQe">
        <h1 class="MuiTypography-root Typography-ngwq8z-0 Heading-sc-1jljnqo-0 ghvulQ MuiTypography-h1 MuiTypography-alignLeft" ml="0">
            Veullez vous inscrire à ce cours pour suivre
            cette leçon
        </h1>
        <div class="Tagline-sc-1p09yld-0 kuacRj">Un peu de patience ;)</div>
    </div>
    <div class="LandingPageFeature__MainImg-sc-19d35qp-2 ieGesu">
            <img width="400" src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="">
    </div>
</div>

@else

  <!-- Attachment Blocks -->

    <div id="video">
        {!!$lesson->video!!}
    </div>


    @if(count($lesson->medias) > 0)
    <h2>Ressources à télécharger</h2>
    @foreach($lesson->medias as $media)
    <section class="flex flex-wrap md:flex-no-wrap items-center bg-grey-darker text-white rounded-lg p-2 md:p-3 mt-0 mb-6 md:my-6">
        <div class="flex-initial w-32 md:w-48 p-3 rounded md:rounded-lg">
            <div class="coverWrapper rounded md:rounded-lg">
                <div class="cover rounded md:rounded-lg" style="background-image: url(&quot;/images/divers/resource_icon.png&quot;);"></div>
            </div>
        </div>
        <div class="flex-grow p-3">

            <div class="text-base md:text-2xl font-bold my-2">
                {{$media->name}}
            </div>
        </div>
        <div class="flex-initial p-3 w-full md:w-auto"><a download target="_blank" href="/images/lessons/resources/{{$media->name}}" class="button button--primary w-full" style="width: max-content;">Téléchargez</a></div>
    </section>
    @endforeach
    @endif

  <div class="lecture-attachment lecture-attachment-type-text" id="lecture-attachment-21119459">
    <div class="attachment-data"></div>

    <div class="attachment-data"></div>

    <div class="lecture-text-container">
      <p></p>
      <p>{!!$lesson->full_text!!}</p>
      <p></p>
    </div>


  </div>


  @if($lesson->quizzes)
  @include('includes.default.lessons_page.quiz')
  @endif

  @endif

  <!-- Comments -->



  <div id="empty_box"></div>
  <!-- Scroll to current lecture link position in sidebar -->

</div>



@endsection
