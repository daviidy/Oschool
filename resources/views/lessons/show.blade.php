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
.RLTEg{margin:0px 0px 0px 0px;}
.ieGesu img{width: 100%!important}
}
@media only screen and (min-device-width : 414px) and (max-device-width : 736px){
  .RLTEg{margin:0px;}
  .ieGesu img{width: 100%!important}
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){
    .RLTEg{margin:0px;}
    .ieGesu img{width: 100%!important}
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


@if($lesson->webinar_meeting !== null)

<style media="screen">
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-h4{margin:4px;font-size:1.5625rem;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.235;letter-spacing:0.00735em;}
@media (min-width:600px){
.MuiTypography-h4{font-size:1.8219rem;}
}
@media (min-width:800px){
.MuiTypography-h4{font-size:2.0243rem;}
}
@media (min-width:1025px){
.MuiTypography-h4{font-size:2.0243rem;}
}
.MuiTypography-alignCenter{text-align:center;}
/*! CSS Used from: https://www.educative.io/static/css/94.3705e7dd.chunk.css */
a{background-color:initial;}
a:active,a:hover{outline:0;}
svg:not(:root){overflow:hidden;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*,:after,:before{box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.hqqZXZ{display:flex;width:100%;height:58%;}
.fUQatb{display:flex;flex:1 1 0%;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;flex-direction:column;height:180px;margin:10px;border-radius:4px;box-shadow:rgba(0, 0, 0, 0.1) 0px 0px 7px;transition:all 0.4s ease 0s;cursor:pointer;}
.fUQatb:hover{box-shadow:rgba(0, 0, 0, 0.1) 1px 2px 12px;border-bottom:none;transform:translateY(-5px);}
@media (max-width: 480px){
.fUQatb{margin:5px;}
}
.eBqjAL{font-weight:600;margin:0px 16px;}
.fjEdZT{width:90px;height:90px;overflow:visible;}
.fjEdZT > svg{height:90px;width:90px;overflow:visible;}

</style>

@endif


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
    <img width="50" src="/images/lessons/{{$lesson->image}}" alt="">
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

    @if($lesson->webinar_meeting !== null)

    <div class="styles__CategoryButtons-vgii8s-3 hqqZXZ">

    <a target="_blank" class="styles__CategoryButton-vgii8s-4 fUQatb" href="{{$lesson->zoom_url}}">
        <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT"><svg width="162" height="145" viewBox="0 0 162 145" fill="none">
                <path d="M21 21L25.5 9L38.5 2H115L127 7L135.5 19V138L106 116H39.5L27 110.5L21 96.5V21Z" fill="#F8F8FF"></path>
                <path
                  d="M137.496 144.317L104.976 118.133H42.912C29.822 118.12 19.213 107.526 19.2 94.453V23.68C19.213 10.607 29.822 0.013 42.912 0H113.784C126.874 0.013 137.483 10.607 137.496 23.68V144.317V144.317ZM42.912 4.074C32.075 4.088 23.293 12.857 23.28 23.679V94.454C23.293 105.276 32.075 114.045 42.912 114.059H106.416L133.416 135.797V23.679C133.403 12.857 124.621 4.088 113.784 4.074H42.912V4.074Z"
                  fill="#455A7F"></path>
                <path
                  d="M69.216 28.437H47.016C46.6812 28.4041 46.3706 28.2478 46.1447 27.9986C45.9187 27.7493 45.7936 27.4249 45.7936 27.0885C45.7936 26.7521 45.9187 26.4277 46.1447 26.1784C46.3706 25.9292 46.6812 25.7729 47.016 25.74H69.216C69.4028 25.7239 69.5909 25.7468 69.7683 25.8072C69.9458 25.8676 70.1088 25.9643 70.2469 26.091C70.3851 26.2178 70.4954 26.3719 70.5708 26.5435C70.6463 26.7151 70.6852 26.9005 70.6852 27.088C70.6852 27.2755 70.6463 27.4609 70.5708 27.6325C70.4954 27.8041 70.3851 27.9582 70.2469 28.085C70.1088 28.2117 69.9458 28.3084 69.7683 28.3688C69.5909 28.4292 69.4028 28.4521 69.216 28.436V28.437ZM91.416 41.583H47.016C46.6812 41.5501 46.3706 41.3938 46.1447 41.1446C45.9187 40.8953 45.7936 40.5709 45.7936 40.2345C45.7936 39.8981 45.9187 39.5737 46.1447 39.3244C46.3706 39.0752 46.6812 38.9189 47.016 38.886H91.416C91.6028 38.8699 91.7909 38.8928 91.9683 38.9532C92.1458 39.0136 92.3088 39.1103 92.4469 39.237C92.5851 39.3638 92.6954 39.5179 92.7708 39.6895C92.8463 39.8611 92.8852 40.0465 92.8852 40.234C92.8852 40.4215 92.8463 40.6069 92.7708 40.7785C92.6954 40.9501 92.5851 41.1042 92.4469 41.231C92.3088 41.3577 92.1458 41.4544 91.9683 41.5148C91.7909 41.5752 91.6028 41.5981 91.416 41.582V41.583ZM108.072 28.437H85.86C85.5252 28.4041 85.2146 28.2478 84.9887 27.9986C84.7627 27.7493 84.6376 27.4249 84.6376 27.0885C84.6376 26.7521 84.7627 26.4277 84.9887 26.1784C85.2146 25.9292 85.5252 25.7729 85.86 25.74H108.072C108.407 25.7729 108.717 25.9292 108.943 26.1784C109.169 26.4277 109.294 26.7521 109.294 27.0885C109.294 27.4249 109.169 27.7493 108.943 27.9986C108.717 28.2478 108.407 28.4041 108.072 28.437V28.437ZM69.216 96.311H47.016C46.8354 96.318 46.6553 96.2884 46.4864 96.2241C46.3175 96.1598 46.1633 96.0621 46.033 95.9368C45.9028 95.8115 45.7992 95.6612 45.7284 95.4949C45.6577 95.3286 45.6212 95.1497 45.6212 94.969C45.6212 94.7883 45.6577 94.6094 45.7284 94.4431C45.7992 94.2768 45.9028 94.1265 46.033 94.0012C46.1633 93.8759 46.3175 93.7782 46.4864 93.7139C46.6553 93.6496 46.8354 93.62 47.016 93.627H69.216C69.3966 93.62 69.5767 93.6496 69.7456 93.7139C69.9145 93.7782 70.0687 93.8759 70.199 94.0012C70.3292 94.1265 70.4328 94.2768 70.5036 94.4431C70.5743 94.6094 70.6108 94.7883 70.6108 94.969C70.6108 95.1497 70.5743 95.3286 70.5036 95.4949C70.4328 95.6612 70.3292 95.8115 70.199 95.9368C70.0687 96.0621 69.9145 96.1598 69.7456 96.2241C69.5767 96.2884 69.3966 96.318 69.216 96.311V96.311ZM108.072 96.311H85.86C85.6794 96.318 85.4993 96.2884 85.3304 96.2241C85.1615 96.1598 85.0073 96.0621 84.877 95.9368C84.7468 95.8115 84.6432 95.6612 84.5724 95.4949C84.5017 95.3286 84.4652 95.1497 84.4652 94.969C84.4652 94.7883 84.5017 94.6094 84.5724 94.4431C84.6432 94.2768 84.7468 94.1265 84.877 94.0012C85.0073 93.8759 85.1615 93.7782 85.3304 93.7139C85.4993 93.6496 85.6794 93.62 85.86 93.627H108.072C108.253 93.62 108.433 93.6496 108.602 93.7139C108.771 93.7782 108.925 93.8759 109.055 94.0012C109.185 94.1265 109.289 94.2768 109.36 94.4431C109.43 94.6094 109.467 94.7883 109.467 94.969C109.467 95.1497 109.43 95.3286 109.36 95.4949C109.289 95.6612 109.185 95.8115 109.055 95.9368C108.925 96.0621 108.771 96.1598 108.602 96.2241C108.433 96.2884 108.253 96.318 108.072 96.311V96.311ZM108.072 41.583H100.092C99.7572 41.5501 99.4466 41.3938 99.2207 41.1446C98.9947 40.8953 98.8696 40.5709 98.8696 40.2345C98.8696 39.8981 98.9947 39.5737 99.2207 39.3244C99.4466 39.0752 99.7572 38.9189 100.092 38.886H108.072C108.407 38.9189 108.717 39.0752 108.943 39.3244C109.169 39.5737 109.294 39.8981 109.294 40.2345C109.294 40.5709 109.169 40.8953 108.943 41.1446C108.717 41.3938 108.407 41.5501 108.072 41.583V41.583ZM91.416 81.488H47.016C46.7804 81.4878 46.5489 81.4257 46.3449 81.3078C46.1408 81.19 45.9714 81.0205 45.8535 80.8165C45.7356 80.6125 45.6734 80.3811 45.6731 80.1455C45.6728 79.9098 45.7345 79.6783 45.852 79.474C46.092 79.059 46.536 78.804 47.016 78.804H91.416C91.6515 78.8043 91.8828 78.8665 92.0867 78.9843C92.2906 79.1021 92.46 79.2714 92.5778 79.4752C92.6957 79.6791 92.758 79.9103 92.7583 80.1458C92.7587 80.3813 92.6972 80.6128 92.58 80.817C92.34 81.232 91.896 81.487 91.416 81.487V81.488ZM108.072 81.488H100.092C99.9126 81.4929 99.7341 81.4618 99.5669 81.3965C99.3998 81.3313 99.2474 81.2332 99.1188 81.108C98.9902 80.9829 98.8879 80.8332 98.8181 80.6679C98.7483 80.5026 98.7124 80.3249 98.7124 80.1455C98.7124 79.9661 98.7483 79.7884 98.8181 79.6231C98.8879 79.4578 98.9902 79.3081 99.1188 79.183C99.2474 79.0578 99.3998 78.9597 99.5669 78.8945C99.7341 78.8292 99.9126 78.7981 100.092 78.803H108.072C108.308 78.8032 108.539 78.8653 108.743 78.9832C108.947 79.101 109.117 79.2705 109.235 79.4745C109.352 79.6785 109.415 79.9099 109.415 80.1455C109.415 80.3812 109.353 80.6127 109.236 80.817C108.996 81.232 108.552 81.487 108.072 81.487V81.488ZM108.072 54.729H85.86C85.5252 54.6961 85.2146 54.5398 84.9887 54.2906C84.7627 54.0413 84.6376 53.7169 84.6376 53.3805C84.6376 53.0441 84.7627 52.7197 84.9887 52.4704C85.2146 52.2212 85.5252 52.0649 85.86 52.032H108.072C108.407 52.0649 108.717 52.2212 108.943 52.4704C109.169 52.7197 109.294 53.0441 109.294 53.3805C109.294 53.7169 109.169 54.0413 108.943 54.2906C108.717 54.5398 108.407 54.6961 108.072 54.729V54.729ZM108.072 67.862H63.672C63.4914 67.869 63.3113 67.8394 63.1424 67.7751C62.9735 67.7108 62.8193 67.6131 62.689 67.4878C62.5588 67.3625 62.4552 67.2122 62.3844 67.0459C62.3137 66.8796 62.2772 66.7007 62.2772 66.52C62.2772 66.3393 62.3137 66.1604 62.3844 65.9941C62.4552 65.8278 62.5588 65.6775 62.689 65.5522C62.8193 65.4269 62.9735 65.3292 63.1424 65.2649C63.3113 65.2006 63.4914 65.171 63.672 65.178H108.072C108.253 65.171 108.433 65.2006 108.602 65.2649C108.771 65.3292 108.925 65.4269 109.055 65.5522C109.185 65.6775 109.289 65.8278 109.36 65.9941C109.43 66.1604 109.467 66.3393 109.467 66.52C109.467 66.7007 109.43 66.8796 109.36 67.0459C109.289 67.2122 109.185 67.3625 109.055 67.4878C108.925 67.6131 108.771 67.7108 108.602 67.7751C108.433 67.8394 108.253 67.869 108.072 67.862V67.862ZM69.216 54.729H47.016C46.6812 54.6961 46.3706 54.5398 46.1447 54.2906C45.9187 54.0413 45.7936 53.7169 45.7936 53.3805C45.7936 53.0441 45.9187 52.7197 46.1447 52.4704C46.3706 52.2212 46.6812 52.0649 47.016 52.032H69.216C69.4028 52.0159 69.5909 52.0388 69.7683 52.0992C69.9458 52.1596 70.1088 52.2563 70.2469 52.383C70.3851 52.5098 70.4954 52.6639 70.5708 52.8355C70.6463 53.0071 70.6852 53.1925 70.6852 53.38C70.6852 53.5675 70.6463 53.7529 70.5708 53.9245C70.4954 54.0961 70.3851 54.2502 70.2469 54.377C70.1088 54.5037 69.9458 54.6004 69.7683 54.6608C69.5909 54.7212 69.4028 54.7441 69.216 54.728V54.729ZM54.996 67.862H47.016C46.8354 67.869 46.6553 67.8394 46.4864 67.7751C46.3175 67.7108 46.1633 67.6131 46.033 67.4878C45.9028 67.3625 45.7992 67.2122 45.7284 67.0459C45.6577 66.8796 45.6212 66.7007 45.6212 66.52C45.6212 66.3393 45.6577 66.1604 45.7284 65.9941C45.7992 65.8278 45.9028 65.6775 46.033 65.5522C46.1633 65.4269 46.3175 65.3292 46.4864 65.2649C46.6553 65.2006 46.8354 65.171 47.016 65.178H54.996C55.1766 65.171 55.3567 65.2006 55.5256 65.2649C55.6945 65.3292 55.8487 65.4269 55.979 65.5522C56.1092 65.6775 56.2128 65.8278 56.2836 65.9941C56.3543 66.1604 56.3908 66.3393 56.3908 66.52C56.3908 66.7007 56.3543 66.8796 56.2836 67.0459C56.2128 67.2122 56.1092 67.3625 55.979 67.4878C55.8487 67.6131 55.6945 67.7108 55.5256 67.7751C55.3567 67.8394 55.1766 67.869 54.996 67.862V67.862Z"
                  fill="#21B1B9"></path>
            </svg></div>
        <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Une formation en téléprésentiel a été prévue pour cette leçon. Cliquez ici pour y participer</h4>
    </a></div>

    @endif


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
