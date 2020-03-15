@extends('layouts.menu-school')
@section('title', 'Tableau de bord')

@section('content')

<style media="screen">

/*! CSS Used from: https://www.codecademy.com/webpack/252.332e4eb85b77bff782aa.chunk.css */
.headingOverflow__UFZQ2dgsxI9wLTOZBpj5l{height:7.5rem;overflow:hidden;position:relative;width:100%;}
.heading__19kuxLfU5IL99jrtWG9oR6{background-color:#f6f5fa;height:100%;margin-left:-5%;position:relative;width:110%;}
</style>


<style media="screen">
/*! CSS Used from: https://www.codecademy.com/webpack/116.5a38711ce87647cf476a.chunk.css */
.btn__2v-TLC9Odx5KkacwG29i-V{display:-webkit-inline-flex;display:inline-flex;-webkit-justify-content:center;justify-content:center;font-weight:700;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;border:1px solid transparent;border-radius:2px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:.375rem 1rem;font-size:1rem;line-height:1.5;min-width:8rem;transition:all .1s ease-in-out;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_{color:#fff;background-color:#141c3a;border-color:transparent;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:hover{box-shadow:0 2px 4px rgba(0,0,0,.3);}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #141c3a;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:focus,.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:hover{text-decoration:none;color:#fff;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:focus:active,.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:hover:active{box-shadow:0 2px 4px rgba(0,0,0,.3);}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:active{background-color:#10162e;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:disabled{background-color:#525252;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_:disabled:hover{box-shadow:none;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5{font-size:2rem;color:#141c3a;background-color:initial;border:1px solid #141c3a;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5:focus,.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5:hover{background-color:#141c3a;box-shadow:none;color:#fff;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5:focus:active,.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5:hover:active{background-color:#434961;box-shadow:none;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5:hover{box-shadow:0 2px 4px 0 rgba(0,0,0,.3);}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #141c3a;}
.btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_.outline__ew2jvSIM6pGG9P_gw6Bm5:disabled{border-color:#525252;color:#525252;background-color:initial;}
.block__2Zi7TViIIVUdz7kEnuWrCI{display:-webkit-flex;display:flex;width:100%;}
.basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_{display:inline-block;text-align:center;text-decoration:none;white-space:nowrap;vertical-align:middle;cursor:pointer;font-family:inherit;}
.basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_:active:focus,.basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_:focus{outline:none;}
.basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_:focus,.basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_:hover:focus{text-decoration:none;}
.basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_:active{background-image:none;outline:0;}
.basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_:disabled{cursor:not-allowed;opacity:.65;}
/*! CSS Used from: https://www.codecademy.com/webpack/161.7cccb66f8cc09f379705.chunk.css */
*,:after,:before{box-sizing:inherit;}
main{display:block;}
h1,h2,h3,p{margin-top:0;}
p{margin-bottom:1rem;}
a{color:#4b35ef;text-decoration:none;background-color:initial;-webkit-text-decoration-skip:objects;}
a:hover{text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
svg:not(:root){overflow:hidden;}
h1,h2,h3{margin-bottom:1rem;font-weight:700;line-height:1.1;color:#292929;}
h1{font-size:3rem;}
h1,h2{font-family:Regular Patch,Regular Bold,Nunito Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
h2{font-size:2.2rem;}
h3{font-size:1.6rem;}
/*! CSS Used from: https://www.codecademy.com/webpack/3.85a6bc776f3ac72fff82.chunk.css */
.contentContainer__2hNipbbqs3wX_aJ0xS9qxf{height:100%;padding-left:1rem;padding-right:1rem;max-width:calc(1440px + 12rem);margin-left:auto;margin-right:auto;}
@media only screen and (min-width:48rem){
.contentContainer__2hNipbbqs3wX_aJ0xS9qxf{padding-left:2rem;padding-right:2rem;}
}
@media only screen and (min-width:64rem){
.contentContainer__2hNipbbqs3wX_aJ0xS9qxf{padding-left:3rem;padding-right:3rem;}
}
@media only screen and (min-width:75rem){
.contentContainer__2hNipbbqs3wX_aJ0xS9qxf{padding-left:6rem;padding-right:6rem;}
}
/*! CSS Used from: https://www.codecademy.com/webpack/portal-scenes-Profile.85063e05f76b3ef885d1.chunk.css */
.container__25St-wPttEa00dbsIQGsRH{padding:1rem 0;width:100%;color:#000;border-bottom:1px solid #dddce0;display:grid;-webkit-align-items:center;align-items:center;grid-template-columns:3rem auto 1fr;}
.container__25St-wPttEa00dbsIQGsRH:focus,.container__25St-wPttEa00dbsIQGsRH:hover{text-decoration:none;opacity:1;}
.container__25St-wPttEa00dbsIQGsRH:focus .completedItemActionText__3pVene1PtZPiBdHWdsFkNI,.container__25St-wPttEa00dbsIQGsRH:hover .completedItemActionText__3pVene1PtZPiBdHWdsFkNI{opacity:1;}
.container__25St-wPttEa00dbsIQGsRH .completedItemAction__3lR3-Ea8ycEaHNmEorQkwU{padding:0;margin-left:auto;}
.container__25St-wPttEa00dbsIQGsRH .completedItemAction__3lR3-Ea8ycEaHNmEorQkwU:focus .completedItemActionText__3pVene1PtZPiBdHWdsFkNI,.container__25St-wPttEa00dbsIQGsRH .completedItemAction__3lR3-Ea8ycEaHNmEorQkwU:hover .completedItemActionText__3pVene1PtZPiBdHWdsFkNI{opacity:1;}
.container__25St-wPttEa00dbsIQGsRH .completedItemActionText__3pVene1PtZPiBdHWdsFkNI{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:#6400e4;display:none;font-size:2rem;font-weight:700;opacity:0;transition:opacity .2s;margin-right:1rem;}
.container__25St-wPttEa00dbsIQGsRH .completedItemActionText__3pVene1PtZPiBdHWdsFkNI:focus,.container__25St-wPttEa00dbsIQGsRH .completedItemActionText__3pVene1PtZPiBdHWdsFkNI:hover{opacity:1;}
@media only screen and (min-width:48rem){
.container__25St-wPttEa00dbsIQGsRH .completedItemActionText__3pVene1PtZPiBdHWdsFkNI{display:block;}
}
.contentContainer__2XpraB__ZsFvtgeXy-hiqA{margin-left:1rem;}
.title__YKjOCEmg015vuLRonUC5l{font-size:2rem;margin-bottom:0;font-family:Regular Patch,Regular Bold,Nunito Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;}
.icon__3QtI7CVFmElvsok-AOAylb{justify-self:center;color:#141e3b;height:3rem;}
.icon__3QtI7CVFmElvsok-AOAylb>svg{height:100%;width:100%;}
.description__3LED2LwLhklkpJ5MtcAQxn{margin-bottom:0;}
.checkmarkContainer__3dnfL_MfYE1XU6TAon23UH,.displayHorizontal__1BPiAmdwij91rwcegVMI2f{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;}
.checkmarkContainer__3dnfL_MfYE1XU6TAon23UH{background-color:#ffc740;border-radius:4rem;margin-right:.5rem;height:1.5rem;width:1.5rem;-webkit-justify-content:center;justify-content:center;}
.contentSection__CjgKQE1eGe6XewpT-OS6X{margin-bottom:4rem;}
.contentSection__CjgKQE1eGe6XewpT-OS6X .content__2DN9BFszqr0gflo9T6mSHU{display:-webkit-flex;display:flex;-webkit-flex-wrap:wrap;flex-wrap:wrap;}
@media screen and (max-width:48rem){
.contentSection__CjgKQE1eGe6XewpT-OS6X .content__2DN9BFszqr0gflo9T6mSHU{margin-top:2rem;}
}
.sectionTitle__1mdYH5tkx9LiyHvrrmE6aW{font-size:2.125rem;text-transform:uppercase;}
.container__3TWtjj2MEnV9meZq0ZjTTC{grid-column:1/3;position:relative;top:-3rem;width:100%;}
@media screen and (max-width:48rem){
.container__3TWtjj2MEnV9meZq0ZjTTC{grid-column:1/-1;}
}
.avatar__2tJZ_OU8usiTvOekfHdMza{border-radius:99rem;border:4px solid #fff;display:block;height:10rem;width:10rem;margin-bottom:2rem;}
.handle__sEzDhz5n_Lipz8sfgqzma{overflow:hidden;text-overflow:ellipsis;font-family:Regular Patch,Regular Bold,Nunito Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:2.6rem;white-space:nowrap;}
.label__2YO_cDf1Lu9PDDsn62kz6L{color:#4b4b4d;font-size:2rem;}
.editButton__2nNpny-WbdD9O6JrG1F92A{margin-top:1rem;}
.section__2v9mQhyESDhguULKoR_J7P{margin-top:2rem;padding-top:1.5rem;border-top:1px solid #dddce0;color:#000;}
.sectionTitle__3Cht9NEhb0XxciVgKArgPR{font-size:2.125rem;text-transform:none;}
.statContainer__3vkcPCpgY9KLbdlgaArthp{-webkit-justify-content:space-between;justify-content:space-between;}
.statContainer__3vkcPCpgY9KLbdlgaArthp{display:-webkit-flex;display:flex;}
.achievementsLink__jD_YGGUP5QvyO0nWE_LOb{color:#000;}
.achievementsLink__jD_YGGUP5QvyO0nWE_LOb:hover{text-decoration:none;color:#6400e4;}
.contentContainer__1jAAu1zndUT3xNQdVbprTL{display:grid;grid-template-columns:repeat(12,1fr);margin-bottom:8rem;}
.completionsContainer__2IYN9k4PNi5y8XGTuQdIeG{grid-column:4/-1;padding-top:5.25rem;}
@media screen and (max-width:48rem){
.completionsContainer__2IYN9k4PNi5y8XGTuQdIeG{grid-column:1/-1;padding-top:0;}
}

</style>

<div style="margin-top: 45px;" role="main" class="view-school">


    <div class="headingOverflow__UFZQ2dgsxI9wLTOZBpj5l" role="presentation">
        <div class="heading__19kuxLfU5IL99jrtWG9oR6" style="background-color:#f6f5fa;color:blue"></div>
    </div>

    <main class="contentContainer__2hNipbbqs3wX_aJ0xS9qxf contentContainer__1jAAu1zndUT3xNQdVbprTL">
        <div class="container__3TWtjj2MEnV9meZq0ZjTTC">
            <h1 class="handle__sEzDhz5n_Lipz8sfgqzma"><img src="/images/users/default/{{Auth::user()->image}}" class="avatar__2tJZ_OU8usiTvOekfHdMza" alt="David's avatar">{{ucfirst(Auth::user()->name)}}</h1>
            <!--
            <p class="label__2YO_cDf1Lu9PDDsn62kz6L">/
                betaNinja94590</p>
            <p class="label__2YO_cDf1Lu9PDDsn62kz6L"><span>Last coded
                    14 days ago</span><br>Joined
                Oct 24, 2017</p>
            -->
                <a class="basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_ btn__2v-TLC9Odx5KkacwG29i-V btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_ block__2Zi7TViIIVUdz7kEnuWrCI outline__ew2jvSIM6pGG9P_gw6Bm5 editButton__2nNpny-WbdD9O6JrG1F92A"
              data-btn="true" href="/account">
                  Modifier
              </a>
            <div class="section__2v9mQhyESDhguULKoR_J7P">
                <h2 class="sectionTitle__3Cht9NEhb0XxciVgKArgPR">Menu</h2>
                <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/users/betaNinja94590/achievements">
                    <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                        <p>Facturation</p>
                        <!-- <p>83</p> -->
                    </div>
                </a>
                <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/users/betaNinja94590/achievements">
                    <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                        <p>Contact</p>
                        <!-- <p>83</p> -->
                    </div>
                </a>
                @if($school->user_id == Auth::user()->id)
                <a style="color: #EA5252;" class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="{{ route('website.subdomain', ['school' => $school->id, 'subdomain' => $school->slug]) }}">
                    <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                        <p style="font-weight: bold;">Tableau d'adminstration de l'école</p>
                        <!-- <p>83</p> -->
                    </div>
                </a>
                @endif

            </div>
        </div>
        <div class="completionsContainer__2IYN9k4PNi5y8XGTuQdIeG">
            <div class="contentSection__CjgKQE1eGe6XewpT-OS6X">
                <h2 class="sectionTitle__1mdYH5tkx9LiyHvrrmE6aW">Mes cours</h2>
                <div class="content__2DN9BFszqr0gflo9T6mSHU">
                    @if(count(Auth::user()->courses->where('school_id', $school->id)) > 0)
                    @foreach(Auth::user()->courses->where('school_id', $school->id) as $course)
                    <a data-testid="completion-view-button" href="/course/enrolled/{{$course->slug}}" class="container__25St-wPttEa00dbsIQGsRH">
                        <div class="icon__3QtI7CVFmElvsok-AOAylb">
                            <img src="/images/courses/logos/{{$course->logo}}" alt="">
                        </div>
                        <div class="contentContainer__2XpraB__ZsFvtgeXy-hiqA">
                            <h3 class="title__YKjOCEmg015vuLRonUC5l">{{$course->name}}</h3>
                            <div class="displayHorizontal__1BPiAmdwij91rwcegVMI2f">
                                <div class="checkmarkContainer__3dnfL_MfYE1XU6TAon23UH">
                                    <svg width="16" fill="currentColor" height="24" version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Checkmark Icon</title>
                                        <path d="m18 2-12 12-5.5-5.5 1.41-1.41 4.09 4.08 10.59-10.58z" transform="translate(3 5)"></path>
                                    </svg>
                                </div>
                                <span class="description__3LED2LwLhklkpJ5MtcAQxn">{{number_format((count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100)}}%</span>
                            </div>
                        </div>
                        <div class="completedItemAction__3lR3-Ea8ycEaHNmEorQkwU"><span class="completedItemActionText__3pVene1PtZPiBdHWdsFkNI">Voir</span></div>
                    </a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </main>

</div>

@endsection
