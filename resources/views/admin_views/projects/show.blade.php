@extends('layouts.menu-project')

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
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
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
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
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
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
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
.module-progress-card p.module-progress-card__duration{text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:Google Sans,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;font-stretch:normal;line-height:1.29;opacity:.9;letter-spacing:normal;color:#80868b;display:flex;align-items:center;flex:0 1 13%;min-width:80px;}
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
.module-progress-card__progress__completed{text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:Google Sans,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;font-stretch:normal;line-height:1.29;letter-spacing:normal;font-weight:500;color:#34a853;}
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
                <div class="cover rounded-t-lg rounded-b-none" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/82215914-053d-4123-ad79-ab8d36589712.jpg&quot;);"></div>
              </div>
              <div class="modal-coverButton">
                <div class="button button--round"><i class="icon icon-window-close" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="modal-contents">
              <div class="modal-headline">
                {{-- <div class="logo" style="background-image: url(&quot;http://platform.mindvalley.com/images/facebook-logo-fcffd6148ae561d4eaba1bf6dfb9430a.png?vsn=d&quot;);"></div> --}}
                <h3 class="text-2xl ml-2 mt-1">Soumission de projet</h3>
              </div>
              <div class="modal-input"><span class="mb-2">Veuillez copier les liens de votre projet</span>
                <div class="relative">
                  <input name="link" type="text" placeholder="https://exemple.drive.com" class="input input--withButton text-center">
                <input type="hidden" name="project_id" value="{{$project->id}}">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <div class="button button--input"><i class="icon icon-copy" aria-hidden="true"></i></div>
                </div>
              </div>
                    <button type="submit" class="modal-button button button--primary w-full">Soumettre mon projet</button>
            </div>
          </div>
    </form>
      </div>

{{--          Au case ou l'etudiant devra resoumettre son travail--}}
          <div class="modalWrapperagain" style="left: 453px;">

              {{-- Submit doc Beginning --}}

              <form method="POST" action="/resubmitDeliverable" >
                  @csrf

                  <div id="modal" class="modal rounded-t-lg ">
                      <div class="modal-cover rounded-t-lg ">
                          <div class="coverWrapper rounded-t-lg rounded-b-none">
                              <div class="cover rounded-t-lg rounded-b-none" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/82215914-053d-4123-ad79-ab8d36589712.jpg&quot;);"></div>
                          </div>
                          <div class="modal-coverButton">
                              <div class="button button--round again"><i class="icon icon-window-close" aria-hidden="true"></i></div>
                          </div>
                      </div>
                      <div class="modal-contents">
                          <div class="modal-headline">
                              {{-- <div class="logo" style="background-image: url(&quot;http://platform.mindvalley.com/images/facebook-logo-fcffd6148ae561d4eaba1bf6dfb9430a.png?vsn=d&quot;);"></div> --}}
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
          <div class="navbar-leftNavigation"><a href="http://platform.mindvalley.com/quests/supercerveau" class="navbar-link"><ion-icon name="arrow-back" size="small"></ion-icon><span class="navbar-linkText">Retour aux jours</span></a>
          </div>
          <div class="navbar-title">
            Jour 22
          </div>
          <div class="navbar-rightNavigation"><button class="navbar-button"><img src="https://img.icons8.com/color/48/000000/discord-new-logo.png"> <span>Aller à la communauté</span></button></div>
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
                @if(Auth::user()->deliverables)

                  @foreach(Auth::user()->deliverables as $deliverable)

                    <a target="_blank" href="{{$deliverable->link}}" class="module-progress-card" data-gtm-tag="module-card module-link">
                      <div class="module-progress-card__icon">
                          <img src="https://lh3.googleusercontent.com/7nId5qqZMpCWyJRM7Ug8wiVAOaWOPlkIjnzHXHOdwZG2DA7jQ9ze8Mv4PnPiOCWYiZnKS6qwGffTR0gJuZlZb6_39ZExnkz7AAZfmL8" alt="Les opportunités qu'offre Internet">
                      </div>
                      <h4 class="module-progress-card__title">Le lien de votre projet</h4>
                    </a>

                  @endforeach



              @endif

          <section class="section section--header">
            <h2 class="section-header">{{$project->title}}</h2>
          </section>
        </div>
        <div>
          <section class="sectionWrapper sectionWrapper--video has-markers is-first">
            <div class="coverContainer coverContainer--video overflow-x-hidden">
              <div id="video_section_10865" data-quest-id="81" data-content-id="2972" data-asset-id="19909" data-asset-overmind-id="" class="video">
                <div class="video-js videoJs vjs-big-play-centered w-3/5 rounded-tl-lg vjs-paused vjs-fluid video_10865-dimensions vjs-controls-enabled vjs-workinghover vjs-v7 vjs-user-active"
                  poster="https://assets.mindvalley.com/api/v1/assets/41bb5927-7382-41e3-9158-7daa77e12957.jpg" id="video_10865"
                  data-setup="{ &quot;preload&quot;: &quot;auto&quot;, &quot;playbackRates&quot;: [0.5, 1, 1.25, 1.5, 2], &quot;fluid&quot;: true }" crossorigin="anonymous" lang="en" role="region" aria-label="Video Player"><video
                    crossorigin="anonymous" data-setup="{ &quot;preload&quot;: &quot;auto&quot;, &quot;playbackRates&quot;: [0.5, 1, 1.25, 1.5, 2], &quot;fluid&quot;: true }" id="video_10865_html5_api"
                    poster="https://assets.mindvalley.com/api/v1/assets/41bb5927-7382-41e3-9158-7daa77e12957.jpg" class="vjs-tech" tabindex="-1" preload="auto" src="blob:https://platform.mindvalley.com/15995660-2481-4012-880e-a86179eb215b"
                    __idm_id__="885493761">
                    <source src="https://assets.mindvalley.com/api/v1/assets/633f3610-dd8f-4cb5-b7c9-ad58086b8e07.m3u8" type="application/x-mpegURL">
                    <source src="https://assets.mindvalley.com/api/v1/assets/d807ade2-2d9f-46d4-b163-ad08bcb8fd6a.mp4" type="video/mp4"></video>
                  <div class="vjs-poster" tabindex="-1" aria-disabled="false" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/41bb5927-7382-41e3-9158-7daa77e12957.jpg&quot;);"></div>
                  <div class="vjs-text-track-display" aria-live="off" aria-atomic="true"></div>
                  <div class="vjs-loading-spinner" dir="ltr"><span class="vjs-control-text">Video Player is loading.</span></div>

                  <button class="vjs-big-play-button" type="button" title="Play Video" aria-disabled="false">
                    <ion-icon name="play"></ion-icon>
                    <!--span aria-hidden="true" class="vjs-icon-placeholder"></span-->
                      <span class="vjs-control-text" aria-live="polite">Play Video</span>
                    </button>

                  <div class="vjs-control-bar" dir="ltr"><button class="vjs-play-control vjs-control vjs-button" type="button" title="Play" aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                        class="vjs-control-text" aria-live="polite">Play</span></button>
                    <div class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal"><button class="vjs-mute-control vjs-control vjs-button vjs-vol-3" type="button" title="Mute" aria-disabled="false"><span aria-hidden="true"
                          class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Mute</span></button>
                      <div class="vjs-volume-control vjs-control vjs-volume-horizontal">
                        <div tabindex="0" class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal" role="slider" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-label="Volume Level" aria-live="polite"
                          aria-valuetext="100%">
                          <div class="vjs-volume-level"><span class="vjs-control-text"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="vjs-current-time vjs-time-control vjs-control"><span class="vjs-control-text">Current Time&nbsp;</span><span class="vjs-current-time-display" aria-live="off">0:00</span></div>
                    <div class="vjs-time-control vjs-time-divider">
                      <div><span>/</span></div>
                    </div>
                    <div class="vjs-duration vjs-time-control vjs-control"><span class="vjs-control-text">Duration&nbsp;</span><span class="vjs-duration-display" aria-live="off">20:21</span></div>
                    <div class="vjs-progress-control vjs-control">
                      <div tabindex="0" class="vjs-progress-holder vjs-slider vjs-slider-horizontal" role="slider" aria-valuenow="0.00" aria-valuemin="0" aria-valuemax="100" aria-label="Progress Bar" aria-valuetext="0:00 of -:-">
                        <div class="vjs-load-progress" style="width: 0.328474%;"><span class="vjs-control-text"><span>Loaded</span>: 0%</span>
                          <div style="left: 1.99468%; width: 98.0053%;"></div>
                        </div>
                        <div class="vjs-mouse-display">
                          <div class="vjs-time-tooltip"></div>
                        </div>
                        <div class="vjs-play-progress vjs-slider-bar" style="width: 0%;">
                          <div class="vjs-time-tooltip">0:00</div><span class="vjs-control-text"><span>Progress</span>: 0%</span>
                        </div>
                      </div>
                    </div>
                    <div class="vjs-live-control vjs-control vjs-hidden">
                      <div class="vjs-live-display" aria-live="off"><span class="vjs-control-text">Stream Type&nbsp;</span>LIVE</div>
                    </div>
                    <div class="vjs-remaining-time vjs-time-control vjs-control"><span class="vjs-control-text">Remaining Time&nbsp;</span><span class="vjs-remaining-time-display" aria-live="off">-20:21</span></div>
                    <div class="vjs-custom-control-spacer vjs-spacer ">&nbsp;</div>
                    <div class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button"><button class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button" type="button" aria-disabled="false"
                        title="Playback Rate" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Playback Rate</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">2x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">1.5x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">1.25x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">1x</span><span class="vjs-control-text" aria-live="polite">,
                              selected</span></li>
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">0.5x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                        </ul>
                      </div>
                      <div class="vjs-playback-rate-value">1x</div>
                    </div>
                    <div class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                        aria-disabled="false" title="Chapters" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Chapters</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                        </ul>
                      </div>
                    </div>
                    <div class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                        aria-disabled="false" title="Descriptions" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                          aria-live="polite">Descriptions</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">descriptions off</span><span class="vjs-control-text"
                              aria-live="polite">, selected</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                        aria-disabled="false" title="Captions" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Captions</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item vjs-texttrack-settings" tabindex="-1" role="menuitem" aria-disabled="false"><span class="vjs-menu-item-text">captions settings</span><span class="vjs-control-text" aria-live="polite">, opens
                              captions settings dialog</span></li>
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">captions off</span><span class="vjs-control-text"
                              aria-live="polite">, selected</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button" aria-disabled="false"
                        title="Audio Track" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Audio Track</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">aac_160</span><span class="vjs-control-text"
                              aria-live="polite">, selected</span></li>
                        </ul>
                      </div>
                    </div><button class="vjs-fullscreen-control vjs-control vjs-button" type="button" title="Fullscreen" aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                        aria-live="polite">Fullscreen</span></button><button class="vjs-control vjs-button vjs-markers-button" type="button" aria-disabled="false"><span class="vjs-markers-label">Jump To</span></button>
                  </div>
                  <div class="vjs-error-display vjs-modal-dialog vjs-hidden " tabindex="-1" aria-describedby="video_10865_component_405_description" aria-hidden="true" aria-label="Modal Window" role="dialog">
                    <p class="vjs-modal-dialog-description vjs-control-text" id="video_10865_component_405_description">This is a modal window.</p>
                    <div class="vjs-modal-dialog-content" role="document"></div>
                  </div>
                  <div class="vjs-modal-dialog vjs-hidden  vjs-text-track-settings" tabindex="-1" aria-describedby="video_10865_component_411_description" aria-hidden="true" aria-label="Caption Settings Dialog" role="dialog">
                    <p class="vjs-modal-dialog-description vjs-control-text" id="video_10865_component_411_description">Beginning of dialog window. Escape will cancel and close the window.</p>
                    <div class="vjs-modal-dialog-content" role="document">
                      <div class="vjs-track-settings-colors">
                        <fieldset class="vjs-fg-color vjs-track-setting">
                          <legend id="captions-text-legend-video_10865_component_411">Text</legend><label id="captions-foreground-color-video_10865_component_411" class="vjs-label">Color</label><select
                            aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411">
                            <option id="captions-foreground-color-video_10865_component_411-White" value="#FFF"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-White">White</option>
                            <option id="captions-foreground-color-video_10865_component_411-Black" value="#000"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Black">Black</option>
                            <option id="captions-foreground-color-video_10865_component_411-Red" value="#F00"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Red">Red</option>
                            <option id="captions-foreground-color-video_10865_component_411-Green" value="#0F0"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Green">Green</option>
                            <option id="captions-foreground-color-video_10865_component_411-Blue" value="#00F"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Blue">Blue</option>
                            <option id="captions-foreground-color-video_10865_component_411-Yellow" value="#FF0"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Yellow">Yellow</option>
                            <option id="captions-foreground-color-video_10865_component_411-Magenta" value="#F0F"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Magenta">Magenta</option>
                            <option id="captions-foreground-color-video_10865_component_411-Cyan" value="#0FF"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Cyan">Cyan</option>
                          </select><span class="vjs-text-opacity vjs-opacity"><label id="captions-foreground-opacity-video_10865_component_411" class="vjs-label">Transparency</label><select
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-opacity-video_10865_component_411">
                              <option id="captions-foreground-opacity-video_10865_component_411-Opaque" value="1"
                                aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-opacity-video_10865_component_411 captions-foreground-opacity-video_10865_component_411-Opaque">Opaque</option>
                              <option id="captions-foreground-opacity-video_10865_component_411-SemiTransparent" value="0.5"
                                aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-opacity-video_10865_component_411 captions-foreground-opacity-video_10865_component_411-SemiTransparent">Semi-Transparent
                              </option>
                            </select></span>
                        </fieldset>
                        <fieldset class="vjs-bg-color vjs-track-setting">
                          <legend id="captions-background-video_10865_component_411">Background</legend><label id="captions-background-color-video_10865_component_411" class="vjs-label">Color</label><select
                            aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411">
                            <option id="captions-background-color-video_10865_component_411-Black" value="#000"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Black">Black</option>
                            <option id="captions-background-color-video_10865_component_411-White" value="#FFF"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-White">White</option>
                            <option id="captions-background-color-video_10865_component_411-Red" value="#F00"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Red">Red</option>
                            <option id="captions-background-color-video_10865_component_411-Green" value="#0F0"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Green">Green</option>
                            <option id="captions-background-color-video_10865_component_411-Blue" value="#00F"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Blue">Blue</option>
                            <option id="captions-background-color-video_10865_component_411-Yellow" value="#FF0"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Yellow">Yellow</option>
                            <option id="captions-background-color-video_10865_component_411-Magenta" value="#F0F"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Magenta">Magenta</option>
                            <option id="captions-background-color-video_10865_component_411-Cyan" value="#0FF"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Cyan">Cyan</option>
                          </select><span class="vjs-bg-opacity vjs-opacity"><label id="captions-background-opacity-video_10865_component_411" class="vjs-label">Transparency</label><select
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411">
                              <option id="captions-background-opacity-video_10865_component_411-Opaque" value="1"
                                aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411 captions-background-opacity-video_10865_component_411-Opaque">Opaque</option>
                              <option id="captions-background-opacity-video_10865_component_411-SemiTransparent" value="0.5"
                                aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411 captions-background-opacity-video_10865_component_411-SemiTransparent">Semi-Transparent
                              </option>
                              <option id="captions-background-opacity-video_10865_component_411-Transparent" value="0"
                                aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411 captions-background-opacity-video_10865_component_411-Transparent">Transparent</option>
                            </select></span>
                        </fieldset>
                        <fieldset class="vjs-window-color vjs-track-setting">
                          <legend id="captions-window-video_10865_component_411">Window</legend><label id="captions-window-color-video_10865_component_411" class="vjs-label">Color</label><select
                            aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411">
                            <option id="captions-window-color-video_10865_component_411-Black" value="#000"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Black">Black</option>
                            <option id="captions-window-color-video_10865_component_411-White" value="#FFF"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-White">White</option>
                            <option id="captions-window-color-video_10865_component_411-Red" value="#F00"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Red">Red</option>
                            <option id="captions-window-color-video_10865_component_411-Green" value="#0F0"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Green">Green</option>
                            <option id="captions-window-color-video_10865_component_411-Blue" value="#00F"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Blue">Blue</option>
                            <option id="captions-window-color-video_10865_component_411-Yellow" value="#FF0"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Yellow">Yellow</option>
                            <option id="captions-window-color-video_10865_component_411-Magenta" value="#F0F"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Magenta">Magenta</option>
                            <option id="captions-window-color-video_10865_component_411-Cyan" value="#0FF"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Cyan">Cyan</option>
                          </select><span class="vjs-window-opacity vjs-opacity"><label id="captions-window-opacity-video_10865_component_411" class="vjs-label">Transparency</label><select
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411">
                              <option id="captions-window-opacity-video_10865_component_411-Transparent" value="0"
                                aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411 captions-window-opacity-video_10865_component_411-Transparent">Transparent</option>
                              <option id="captions-window-opacity-video_10865_component_411-SemiTransparent" value="0.5"
                                aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411 captions-window-opacity-video_10865_component_411-SemiTransparent">Semi-Transparent</option>
                              <option id="captions-window-opacity-video_10865_component_411-Opaque" value="1"
                                aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411 captions-window-opacity-video_10865_component_411-Opaque">Opaque</option>
                            </select></span>
                        </fieldset>
                      </div>
                      <div class="vjs-track-settings-font">
                        <fieldset class="vjs-font-percent vjs-track-setting">
                          <legend id="captions-font-size-video_10865_component_411" class="">Font Size</legend><select aria-labelledby="captions-font-size-video_10865_component_411">
                            <option id="captions-font-size-video_10865_component_411-50" value="0.50" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-50">50%</option>
                            <option id="captions-font-size-video_10865_component_411-75" value="0.75" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-75">75%</option>
                            <option id="captions-font-size-video_10865_component_411-100" value="1.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-100">100%</option>
                            <option id="captions-font-size-video_10865_component_411-125" value="1.25" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-125">125%</option>
                            <option id="captions-font-size-video_10865_component_411-150" value="1.50" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-150">150%</option>
                            <option id="captions-font-size-video_10865_component_411-175" value="1.75" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-175">175%</option>
                            <option id="captions-font-size-video_10865_component_411-200" value="2.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-200">200%</option>
                            <option id="captions-font-size-video_10865_component_411-300" value="3.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-300">300%</option>
                            <option id="captions-font-size-video_10865_component_411-400" value="4.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-400">400%</option>
                          </select>
                        </fieldset>
                        <fieldset class="vjs-edge-style vjs-track-setting">
                          <legend id="video_10865_component_411" class="">Text Edge Style</legend><select aria-labelledby="video_10865_component_411">
                            <option id="video_10865_component_411-None" value="none" aria-labelledby="video_10865_component_411 video_10865_component_411-None">None</option>
                            <option id="video_10865_component_411-Raised" value="raised" aria-labelledby="video_10865_component_411 video_10865_component_411-Raised">Raised</option>
                            <option id="video_10865_component_411-Depressed" value="depressed" aria-labelledby="video_10865_component_411 video_10865_component_411-Depressed">Depressed</option>
                            <option id="video_10865_component_411-Uniform" value="uniform" aria-labelledby="video_10865_component_411 video_10865_component_411-Uniform">Uniform</option>
                            <option id="video_10865_component_411-Dropshadow" value="dropshadow" aria-labelledby="video_10865_component_411 video_10865_component_411-Dropshadow">Dropshadow</option>
                          </select>
                        </fieldset>
                        <fieldset class="vjs-font-family vjs-track-setting">
                          <legend id="captions-font-family-video_10865_component_411" class="">Font Family</legend><select aria-labelledby="captions-font-family-video_10865_component_411">
                            <option id="captions-font-family-video_10865_component_411-ProportionalSansSerif" value="proportionalSansSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-ProportionalSansSerif">Proportional Sans-Serif</option>
                            <option id="captions-font-family-video_10865_component_411-MonospaceSansSerif" value="monospaceSansSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-MonospaceSansSerif">Monospace Sans-Serif</option>
                            <option id="captions-font-family-video_10865_component_411-ProportionalSerif" value="proportionalSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-ProportionalSerif">Proportional Serif</option>
                            <option id="captions-font-family-video_10865_component_411-MonospaceSerif" value="monospaceSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-MonospaceSerif">Monospace Serif</option>
                            <option id="captions-font-family-video_10865_component_411-Casual" value="casual" aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-Casual">Casual
                            </option>
                            <option id="captions-font-family-video_10865_component_411-Script" value="script" aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-Script">Script
                            </option>
                            <option id="captions-font-family-video_10865_component_411-SmallCaps" value="small-caps" aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-SmallCaps">
                              Small Caps</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="vjs-track-settings-controls"><button class="vjs-default-button" title="restore all settings to the default values">Reset<span class="vjs-control-text"> restore all settings to the default
                            values</span></button><button class="vjs-done-button">Done</button></div>
                    </div><button class="vjs-close-button vjs-control vjs-button" type="button" aria-disabled="false" title="Close Modal Dialog"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                        aria-live="polite">Close Modal Dialog</span></button>
                    <p class="vjs-control-text">End of dialog window.</p>
                  </div>
                </div>
                <div id="videoMarkers_10865_html5_api" class="js-videoMarkersContainer videoMarkersContainer">
                  <ul class="js-markersMenu videoMarkers">
                    <li class="videoMarkers-item"><span class="videoMarkers-itemHeader">Jump to</span> <button href="#" class="js-closeMarkersButton videoMarkers-closeButton"><i class="icon icon-times-btm" aria-hidden="true"></i></button>
                    </li>
                    <li data-duration="70" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        01:10
                      </span> <span title="La méthode d’emplacement" class="videoMarkers-itemText">
                        La méthode d’emplacement
                      </span></li>
                    <li data-duration="382" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        06:22
                      </span> <span title="Système de classement " class="videoMarkers-itemText">
                        Système de classement
                      </span></li>
                    <li data-duration="472" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        07:52
                      </span> <span title="Mise en pratique de la méthode d’emplacement" class="videoMarkers-itemText">
                        Mise en pratique de la méthode d’emplacement
                      </span></li>
                    <li data-duration="945" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        15:45
                      </span> <span title="Révision de la méthode d’emplacement" class="videoMarkers-itemText">
                        Révision de la méthode d’emplacement
                      </span></li>
                    <li data-duration="1055" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        17:35
                      </span> <span title="  Étapes d’action et points d’apprentissage" class="videoMarkers-itemText">
                        Étapes d’action et points d’apprentissage
                      </span></li>
                  </ul>
                </div>
              </div>
            </div>
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
              @foreach($project->resources as $resource)
              <a target="_blank" href="{{$resource->link}}" class="module-progress-card" data-gtm-tag="module-card module-link">
                  <div class="module-progress-card__icon">
                      <img src="https://lh3.googleusercontent.com/7nId5qqZMpCWyJRM7Ug8wiVAOaWOPlkIjnzHXHOdwZG2DA7jQ9ze8Mv4PnPiOCWYiZnKS6qwGffTR0gJuZlZb6_39ZExnkz7AAZfmL8" alt="Les opportunités qu'offre Internet">
                  </div>
                  <h4 class="module-progress-card__title">{{$resource->title}}</h4>

              </a>
              @endforeach
          </section>
          <!---->
          <!---->
        </div>
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
                          <div class="cover cover--tasks" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/84331628-af90-47df-9a46-eacdc460fc85.jpg&quot;);"></div>
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
