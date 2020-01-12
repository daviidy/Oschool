@extends('layouts.menu-project')
@section('title', $project->title.' - '.$project->course->name)
@section('image', $project->image)
@section('content')

<style media="screen">
/*! CSS Used from: http://localhost:8000/css/course_single.css */
@media screen{
a{background:0 0;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
a{color:#428bca;text-decoration:none;}
a:hover,a:focus{color:#2a6496;text-decoration:underline;}
a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
p{margin:0 0 10px;}
}
a{color:#4D90CC;}
a:hover,a:active{color:#1d3a50;}
a,a:active,a:hover,a:focus{text-decoration:none;}
p{font-size:18px;font-weight:200;line-height:28px;}
/*! CSS Used from: http://localhost:8000/css/fedora-course.css ; media=screen */
@media screen{
a{background:0 0;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
a{color:#428bca;text-decoration:none;}
a:hover,a:focus{color:#2a6496;text-decoration:underline;}
a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h4{font-family:'TeachableSans-Regular';font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
p{margin:0 0 10px;}
}
/*! CSS Used from: http://localhost:8000/css/theme-course.css */
a{color:#39719a;}
a:hover,a:active{color:#1d3a50;}
a,a:active,a:hover,a:focus{text-decoration:none;}
p{font-size:18px;font-weight:200;line-height:28px;}
h4{color:#2b3636;}
/*! CSS Used from: Embedded */
@media all{
p{font-size:16px;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h4{font-family:'TeachableSans-Regular';font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
p{margin:0 0 10px;}
*:focus{outline:none;}
a,a:hover{color:inherit;text-decoration:inherit;}
a:focus{color:inherit;text-decoration:none;}
h4{margin:0;font-weight:normal;}
img{-webkit-user-drag:none;}
p{margin:0;}
}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
img{border-style:none;}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
@media print{
*,:after,:before{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:focus{outline:none;}
*,::after,::before{box-sizing:inherit;}
img{border-style:none;}
*,::after,::before{box-sizing:inherit;}
*,::after,::before{box-sizing:inherit;}
img{border-style:none;}
*,::after,::before{box-sizing:inherit;}
img{border-style:none;}
*,::after,::before{box-sizing:inherit;}
img{border:0;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
*,:after,:before{box-sizing:border-box;}
img{vertical-align:middle;}
@media screen{
div{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
body *{box-sizing:border-box;}
}
@media screen{
div{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
body *{box-sizing:border-box;}
}
@media all{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
h4{font-family:'TeachableSans-Regular';font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
p{margin:0 0 10px;}
*:focus{outline:none;}
a,a:hover{color:inherit;text-decoration:inherit;}
a:focus{color:inherit;text-decoration:none;}
h4{margin:0;font-weight:normal;}
img{-webkit-user-drag:none;}
p{margin:0;}
}
/*! CSS Used from: Embedded */
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
body *{box-sizing:border-box;}
}
@media screen{
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
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{

.material-icons{position:relative;width:1em;height:1em;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;-moz-osx-font-smoothing:grayscale;font-feature-settings:"liga";}
.material-icons:before{position:absolute;top:0;left:0;}
.module-progress-card{transition:transform .25s ease,box-shadow .25s ease;display:block;border-radius:6px;box-shadow:0 0 12px 0 #f1f3f4;background:#fff;border:1px solid #e8eaed;padding:20px 24px;margin:0 0 8px;display:flex;flex-wrap:nowrap;align-items:center;justify-content:space-between;}
@media (max-width:1440px){
.module-progress-card{padding:20px;margin:0 0 16px;}
}
@media (max-width:599px){
.module-progress-card{position:relative;padding:24px;flex-direction:column;justify-content:flex-start;align-items:left;}
}
@media (min-width:600px){
.module-progress-card:hover{transform:scale(1.03);box-shadow:0 1px 25px 0 rgba(0,0,0,.05);z-index:2;}
}
@media (min-width:600px){
.module-progress-card>*{margin:0 12px;}
.module-progress-card>:first-child{margin-left:0;margin-right:12px;}
.module-progress-card>:last-child{margin-left:12px;margin-right:0;}
}
@media (max-width:599px){
.module-progress-card>*{margin:0;}
}
.module-progress-card__icon{width:60px;height:60px;background:#f1f3f4;padding:5px;border-radius:50%;flex:0 0 60px;}
@media (max-width:599px){
.module-progress-card__icon{margin-bottom:12px;}
}
.module-progress-card__icon img{display:block;width:100%;height:100%;}
.module-progress-card h4.module-progress-card__title{margin:0;color:#3c4043;font-weight:500;flex:1 1 50%;}
@media (max-width:599px){
.module-progress-card h4.module-progress-card__title{flex:0;width:100%;margin-bottom:16px;}
}
.module-progress-card p.module-progress-card__duration{text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:'TeachableSans-Regular';font-size:14px;font-weight:400;font-style:normal;font-stretch:normal;line-height:1.29;opacity:.9;letter-spacing:normal;color:#80868b;display:flex;align-items:center;flex:0 1 13%;min-width:80px;}
@media (max-width:599px){
.module-progress-card p.module-progress-card__duration{flex:0;width:100%;margin-bottom:16px;}
}
.module-progress-card p.module-progress-card__duration i{font-size:22px;color:#f9ab00;margin-right:3px;margin-left:0;}
.module-progress-card__progress{display:flex;align-items:center;flex:0 0 133px;}
@media (max-width:599px){
.module-progress-card__progress{flex:0;width:133px;}
}
.module-progress-card__progress--completed{animation-name:fade;animation-duration:.25s;animation-delay:.5s;animation-timing-function:ease;animation-iteration-count:1;animation-direction:normal;animation-fill-mode:both;will-change:opacity;}
.module-progress-card__progress i{color:#34a853;font-size:22px;margin-right:3px;margin-left:0;}
.module-progress-card__progress__completed{text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:'TeachableSans-Regular';font-size:14px;font-weight:400;font-style:normal;font-stretch:normal;line-height:1.29;letter-spacing:normal;font-weight:500;color:#34a853;}
.module-progress-card__cta{flex:1 0 24px;display:flex;justify-content:flex-end;align-items:center;text-align:right;}
@media (max-width:599px){
.module-progress-card__cta{position:absolute;bottom:24px;right:24px;left:auto;}
}
.module-progress-card__cta i{color:#1a73e8;}

}
@media screen{
.material-icons{font-family:'Material Icons';font-weight:normal;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;}
}
@media screen{
.material-icons{font-family:'Material Icons';font-weight:normal;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;}
}
}


.sectionWrapper--video iframe{
    width: 50% !important;
    height: 100% !important;
}

</style>

<style>
    /*! CSS Used from: https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css */
    *,::after,::before{box-sizing:border-box;}
    .alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem;}
    .alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb;}
    @media print{
        *,::after,::before{text-shadow:none!important;box-shadow:none!important;}
    }
    /*! CSS Used from: https://getbootstrap.com/docs/4.0/assets/css/docs.min.css */
    .bd-example>.alert+.alert{margin-top:1rem;}
</style>

<style media="screen">
/*! CSS Used from: Embedded */
button:focus,button:active,button:hover{outline:0px!important;-webkit-appearance:none;}
h2{font-weight:normal;}
h2{font-weight:normal;}
button:focus{outline:none;}
/*! CSS Used from: Embedded */
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
._1f67b618{width:100%;text-align:center;margin-bottom:32px;}
._342054f3{cursor:pointer;border-radius:4px;border:0px;background-color:#62d76b;color:#ffffff;height:48px;font-size:16px;letter-spacing:1px;font-family:'TeachableSans-Regular';width:100%;}
._342054f3:hover{background-color:#32b964;}
._35af145{display:flex;flex-direction:row;justify-content:center;}
._7c686bce{color:#ffd011;}
._7ca935a0{width:100%;text-align:center;font-size:24px;}
._e3fbcfb{background-color:#4D90CC;border-radius:8px;box-shadow:0px 2px 12px 0px rgba(0, 0, 0, 0.1);padding:40px 40px 40px 40px;color:#ffffff;margin-bottom:30px;font-size:16px;}

</style>

<main class="container">
  <div class="xl:px-3">
    <div class="xl:px-5">
      <div>
        <div id="overlay-sendWorks" class="overlay"></div>
        <div class="modalWrapper" style="left: 453px;">

          {{-- Submit doc Beginning --}}

        <form method="POST" action="{{route('deliverables.store')}}" >
            @csrf

          <div id="modal" class="modal rounded-t-lg ">
            <div class="modal-cover rounded-t-lg ">
              <div class="coverWrapper rounded-t-lg rounded-b-none">
                <div class="cover rounded-t-lg rounded-b-none" style="background-image: url(&quot;/images/divers/project.jpg&quot;);"></div>
              </div>
              <div class="modal-coverButton">
                <div class="button button--round"><i class="icon icon-window-close" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="modal-contents">
              <div class="modal-headline">
                {{-- <div class="logo" style="background-image: url(&quot;/images/divers/project.jpg&quot;);"></div> --}}
                <h3 class="text-2xl ml-2 mt-1">Soumission de projet</h3>
              </div>
              <div class="modal-input"><span class="mb-2">Veuillez copier les liens de votre projet</span>
                <div class="relative">
                  <input name="link" type="text" placeholder="https://exemple.drive.com" class="input input--withButton text-center">
                <input type="hidden" name="project_id" value="{{$project->id}}">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <input type="hidden" name="course_id" value="{{$project->course->id}}">
                  <div class="button button--input"><i class="icon icon-copy" aria-hidden="true"></i></div>
                </div>
              </div>
                    <button type="submit" class="modal-button button button--primary w-full">Soumettre mon projet</button>
            </div>
          </div>
    </form>
      </div>

{{--          Au cas ou l'etudiant devra resoumettre son travail--}}
          <div class="modalWrapperagain" style="left: 453px;">

              {{-- Submit doc Beginning --}}

              <form method="POST" action="/resubmitDeliverable" >
                  @csrf

                  <div id="modal" class="modal rounded-t-lg ">
                      <div class="modal-cover rounded-t-lg ">
                          <div class="coverWrapper rounded-t-lg rounded-b-none">
                              <div class="cover rounded-t-lg rounded-b-none" style="background-image: url(&quot;/images/divers/project.jpg&quot;);"></div>
                          </div>
                          <div class="modal-coverButton">
                              <div class="button button--round again"><i class="icon icon-window-close" aria-hidden="true"></i></div>
                          </div>
                      </div>
                      <div class="modal-contents">
                          <div class="modal-headline">
                              {{-- <div class="logo" style="background-image: url(&quot;/images/divers/project.jpg&quot;);"></div> --}}
                              <h3 class="text-2xl ml-2 mt-1">Re-soumission de projet</h3>
                          </div>
{{--                          <div class="modal-input"><span class="mb-2">Veuillez copier les liens de votre projet</span>--}}
                              <div class="relative">
                                  {{-- <input type="hidden" name="link" value="{{$deliverable->link}}" class="input input--withButton text-center"> --}}
                                  <input type="hidden" name="project_id" value="{{$project->id}}">
                                  <input type="hidden" name="user_id" value="null">
                                  {{-- <div class="button button--input"><i class="icon icon-copy" aria-hidden="true"></i></div> --}}
                              </div>
                          </div>
                          <button type="submit" class="modal-button button button--primary w-full">Oui</button>
                      </div>
                  </div>
              </form>
          </div>


      </div>


        {{-- Submit doc end --}}
      <div class="navbar">
        <div class="navbar-container">
          <div class="navbar-leftNavigation">
              <a href="/{{$course->type == 'course' ? 'course' : 'path'}}/{{$course->slug}}" class="navbar-link"><ion-icon name="arrow-back" size="small"></ion-icon><span class="navbar-linkText">Retour au parcours</span></a>
          </div>
          <div class="navbar-title">
            Jour 22
          </div>
          <div class="navbar-rightNavigation"> <a href="https://discordapp.com/invite/hhbzcHE" target="_blank"><button class="navbar-button"><img src="https://img.icons8.com/material-rounded/24/000000/conference-background-selected.png"> <span>Aller à la communauté</span></button></a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="p-0 md:px-5">
      <div class="bg-white md:rounded-lg p-3 pt-16 md:p-8 md:pt-24 min-h-screen">
        <div class="sectionWrapper sectionWrapper--noTopPadding">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
{{--                    <button type="button" class="close" data-dismiss="alert">×</button>--}}
                    <strong>{{ $message }}</strong>
                </div>
            @endif
                @if(count(Auth::user()->deliverables->where('project_id', $project->id)) > 0)


                    <a target="_blank" href="{{Auth::user()->deliverables->where('project_id', $project->id)->first()->link}}" class="module-progress-card" data-gtm-tag="module-card module-link">
                      <div class="module-progress-card__icon">
                          <img src="/images/divers/resource_icon.png" alt="Les opportunités qu'offre Internet">
                      </div>
                      <h4 class="module-progress-card__title">Le lien de votre projet</h4>
                    </a>




              @endif

          <section class="section section--header">
            <h2 class="section-header">{{$project->title}}</h2>
          </section>
        </div>
        <div>
          <section style="text-align: center;" class="sectionWrapper sectionWrapper--video has-markers is-first">
            {!!$project->video!!}
          </section>
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <div>
          <!---->
          <div class="sectionWrapper">
            <div class="section section--text">
              {!!$project->description!!}
            </div>
          </div>
          <!---->
          <!---->
          <!---->
        </div>
        <div>
          <!---->
          <!---->
          <section class="sectionWrapper sectionWrapper--audio">
              <h3>De l'aide pour réaliser ce projet</h3><br>
              @foreach($project->resources->sortBy('position') as $resource)
              <a target="_blank" href="{{$resource->link}}" class="module-progress-card" data-gtm-tag="module-card module-link">
                  <div class="module-progress-card__icon">
                      <img src="/images/divers/resource_icon.png" alt="Les opportunités qu'offre Internet">
                  </div>
                  <h4 class="module-progress-card__title">{{$resource->title}}</h4>

              </a>
              @endforeach
          </section>
          <!---->
          <!---->
        </div>

        @if(count(Auth::user()->deliverables->where('project_id', $project->id)) > 0)
        @if(Auth::user()->deliverables->where('project_id', $project->id)->first()->comment)
        <div style="width: 60%; margin: auto;" class="_e3fbcfb">
            <div class="_35af145"><img width="200" src="https://oschoolelearning.com/images/divers/feature1.png"></div>
            <h2 class="_7ca935a0"><span>Commentaire sur votre travail</span></h2>
            <p class="_1f67b618">{!!Auth::user()->deliverables->where('project_id', $project->id)->first()->comment!!}</p>
        </div>
        @endif
        @endif




        <section class="sectionWrapper sectionWrapper--tasks">
          <div class="section section--tasks">
            <div class="tasks">
              <header class="tasks-header">
                {{Auth::user()->tasks->where('project_id', $project->id)->count()}}/{{$project->tasks->count()}} tâches terminées
              </header>
              <div class="tasks-body">
                @foreach($project->tasks as $task)
                <div class="taskWrapper">
                  <div class="task">
                    <div class="task-content">
                      <div class="task-cover">
                        <div class="coverWrapper--tasks">
                          <div class="cover cover--tasks" style="background-image: url(&quot;/images/divers/user.jpg&quot;);"></div>
                        </div>
                      </div>

                      <div class="task-description {{Auth::user()->tasks->contains($task->id) ? 'task-description--completed' : ''}}">
                        <div class="sign {{Auth::user()->tasks->contains($task->id) ? 'sign--completed' : ''}}"><ion-icon name="checkmark-circle-outline"></ion-icon></div>
                        <div class="task-name">{{$task->heading}}</div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>


@endsection
