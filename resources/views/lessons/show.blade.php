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
                  <img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADbElEQVRoge2YTWhUVxTHf+fla2bMpDOogWknEcXQioJCA5G6sK6KliAuGpq2Qm0Rt9JNF6UQtAguXEjFgiJ2o5sWigq2ddOgCz8aXAhCFsHWZBKrVmcSk8lMJnnHRRI6efcleeObmUZ4Pxi479x7zz3/e9+de96FgICAgICA1xjx2nDfqdurC3ZdkmlttSx7na1Wi2XpW6rEQeMgMSAGhOa6hIvKOWCyqJxWJCNoBvQ5SEpVUiiD1MpgYTo39PtX7z33JaCnR62+2N0vBe0GOoCIV7FlIgvcRrl45fC75xBRt0auAj7quV+fj01eVvigoiF6Rn5NhHXvmUPtBWeN5dY8F5s8tnKCB9DdI1n5zq3GWIH3z/8Rio5F/0F5o/KBlcQYYRJXDrVni43GCjRmGrevwOABmiRHh9NoCLBgQ3XiKR1bZaPTZu4BkfVVieZVUJYXoD5X4Oi+NlpXh/24WBQR28MKoEk/g2xtbeLkJ5s4uLOFSEONH1cGghiT6yJAon4HqrGEzm3NnP18C53bmhHP5/3SKKx12gwBIqwqz3AQDdVycGcLJz7exDuJxnK4XIvqgukw94CWT8A8G5sjHO96m6/3bGBNtN6Pq/rd3w8scOB2EpddAMyemDva4pzev5nu7W9SV/Oq79WzhuKnqgmYJ1Rn0d2R4NRnm9nRFi+9fz4cKn52zYWqgQJT03bJ/aZWyYKErtalzQSzeX1FyBVsfrn7mJ//fERhxjVDXgqNrOkfKzZUTYACvf3P+PHGMOmskRV7Zfynrq6ZYoMhQIQJLXlilmbgSZYzvUP0Pxr35Udg1GkzBKgy4WuUItLZAhdvjnDt/r+UY1IUMk6byyukL0r4VHZlxlau3nvKhZsjZKdmlu/gneVXACTlZ4S+v0c5dz3FcDrnx81iPHQazD0AD/ys9pFLAz56L43AA6fNPAdU/6pYBH5xic0QYLuoXCm4xWYIGI+N30LMzbICGJOI3HEaDQG9B3blsDlbnZhK4gfnjQQskguFRsPfgP5W+Zg8czUR5lu3isX/8FWl82TfFyCf8v9dLd4S1QuXD7efL+lq0Y0PT9+L1+amkrYl61Q0KUgSm1YsOyZIbPaSlyZg/pO0gf9EZ4H8XPnF3C8NZEAzKjIkSgpkUGAwb+dTXi93AwICAgICXmteAqwlCST6n6m2AAAAAElFTkSuQmCC">
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
                <img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADbElEQVRoge2YTWhUVxTHf+fla2bMpDOogWknEcXQioJCA5G6sK6KliAuGpq2Qm0Rt9JNF6UQtAguXEjFgiJ2o5sWigq2ddOgCz8aXAhCFsHWZBKrVmcSk8lMJnnHRRI6efcleeObmUZ4Pxi479x7zz3/e9+de96FgICAgICA1xjx2nDfqdurC3ZdkmlttSx7na1Wi2XpW6rEQeMgMSAGhOa6hIvKOWCyqJxWJCNoBvQ5SEpVUiiD1MpgYTo39PtX7z33JaCnR62+2N0vBe0GOoCIV7FlIgvcRrl45fC75xBRt0auAj7quV+fj01eVvigoiF6Rn5NhHXvmUPtBWeN5dY8F5s8tnKCB9DdI1n5zq3GWIH3z/8Rio5F/0F5o/KBlcQYYRJXDrVni43GCjRmGrevwOABmiRHh9NoCLBgQ3XiKR1bZaPTZu4BkfVVieZVUJYXoD5X4Oi+NlpXh/24WBQR28MKoEk/g2xtbeLkJ5s4uLOFSEONH1cGghiT6yJAon4HqrGEzm3NnP18C53bmhHP5/3SKKx12gwBIqwqz3AQDdVycGcLJz7exDuJxnK4XIvqgukw94CWT8A8G5sjHO96m6/3bGBNtN6Pq/rd3w8scOB2EpddAMyemDva4pzev5nu7W9SV/Oq79WzhuKnqgmYJ1Rn0d2R4NRnm9nRFi+9fz4cKn52zYWqgQJT03bJ/aZWyYKErtalzQSzeX1FyBVsfrn7mJ//fERhxjVDXgqNrOkfKzZUTYACvf3P+PHGMOmskRV7Zfynrq6ZYoMhQIQJLXlilmbgSZYzvUP0Pxr35Udg1GkzBKgy4WuUItLZAhdvjnDt/r+UY1IUMk6byyukL0r4VHZlxlau3nvKhZsjZKdmlu/gneVXACTlZ4S+v0c5dz3FcDrnx81iPHQazD0AD/ys9pFLAz56L43AA6fNPAdU/6pYBH5xic0QYLuoXCm4xWYIGI+N30LMzbICGJOI3HEaDQG9B3blsDlbnZhK4gfnjQQskguFRsPfgP5W+Zg8czUR5lu3isX/8FWl82TfFyCf8v9dLd4S1QuXD7efL+lq0Y0PT9+L1+amkrYl61Q0KUgSm1YsOyZIbPaSlyZg/pO0gf9EZ4H8XPnF3C8NZEAzKjIkSgpkUGAwb+dTXi93AwICAgICXmteAqwlCST6n6m2AAAAAElFTkSuQmCC">
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
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#4d90cc"><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667zM71.66667,118.25v-64.5l43,32.25z"></path></g></g></svg>
    &nbsp;
    {{$lesson->title}}
  </h2>

  <!-- Attachment Blocks -->

    <div id="video">
        {!!$lesson->video!!}
    </div>

    <h2>Ressources à télécharger</h2>
    @if($lesson->medias)
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
    {{-- <div class="lecture-text-container">
      <p></p>
      <p>Most traders have their attention on one thing. When to enter and exit a trade, which is very important.</p>
      <p>More important is each strategy individually and mastering each strategy. As you go through this course put your attention on each strategy individually and make sure you can apply it! </p>
      <p>When you have <strong style="color: rgb(37, 129, 53);">COMPLETED</strong> the course, I want to give you the opportunity to get a <strong>FREE 1-on-1 WEBINAR training</strong> with myself or one of my top coaches. This will be a screen
        sharing session where we focus directly on you and your progress. These&nbsp;visual hands on&nbsp;trainings have helped many students 10x their rate of learning and really boosted their confidence on the charts! </p>
      <p>To enter to win this webinar you <strong>MUST BE 100% completed with the course</strong> and receive your certificate of completion.&nbsp;</p>
      <p>Remember to <strong>click the blue “Complete and continue” button&nbsp;</strong>(below is a reference photo) as you complete each lecture so that when you are 100% done you get your certificate!</p>
      <p><img data-imageloader="" data-imageloader-src="https://www.filepicker.io/api/file/xiYAGEoSqSqp9P7ogYFm" style="max-width: 100%;"
          src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:1000/https://www.filepicker.io/api/file/xiYAGEoSqSqp9P7ogYFm" data-imageloader-current-size="1000" class="is-loaded"></p>
      <p><strong style="color: rgb(185, 57, 54);">Here are the rules / instructions to enter: </strong></p>
      <p>1. You have to be 100% complete with the course and receive your completion certificate!</p>
      <p>2. You will need to fill out this form:</p>
      <p><a href="https://thetradeacademy.wufoo.com/forms/win-a-free-1on1-webinar" target="_blank">https://thetradeacademy.wufoo.com/forms/win-a-free-1on1-webinar</a></p>
      <p>3. You will need a laptop. Since this is a webinar training, we need to be able to share screens with you.</p>
      <p>The winner will be notified via email or phone call weekly.</p>
      <p>Best of luck to you!</p>
      <p>Once you have read this lecture, go ahead and <strong>click the blue “Complete and continue” button </strong>and continue through the course!</p>
      <p class="ql-align-center"><strong>CUSTOMER SUPPORT INFORMATION</strong></p>
      <p>IF YOU HAVE ANY QUESTIONS ABOUT YOUR ACCOUNT PLEASE REACH OUT TO US.</p>
      <p>For technical questions relating to trading email Leo at <a href="mailto:leo@thetradeacademy.com" target="_blank">leo@thetradeacademy.com</a></p>
      <p>For account questions email our support team: happy@thetradeacademy.com</p>
      <p></p>
    </div> --}}
    <div class="lecture-text-container">
      <p></p>
      <p>{!!$lesson->full_text!!}</p>
      <p></p>
    </div>


  </div>


  @if($lesson->quizzes)
  @include('includes.default.lessons_page.quiz')
  @endif


  <!-- Comments -->



  <div id="empty_box"></div>
  <!-- Scroll to current lecture link position in sidebar -->

</div>



@endsection
