@extends('layouts.menu-school')
@section('title', 'Historique des paiements')

@section('content')

<style media="screen">

/*! CSS Used from: https://home.mindvalley.com/assets/darkui-4558cb3c34b34b80e42befe8a8a15be26e7ddb11a5a44679cd0f1f90179af548.css ; media=all */
@media all{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
table{border-collapse:collapse;border-spacing:0;}
td,th{padding:0;}
@media print{
*,*:before,*:after{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
tr,img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#4D90CC;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
.col-sm-9{position:relative;min-height:1px;padding-left:15px;padding-right:15px;}
@media (min-width: 768px){
.col-sm-9{float:left;}
.col-sm-9{
    width:100%;

}
}
table{background-color:transparent;}
th{text-align:left;}
}
/*! CSS Used from: https://home.mindvalley.com/packs/app-c7d9f990427b05dbc9d6ddcf5ac45b3c.css ; media=screen */
@media screen{
a[data-v-669dc8b3]{margin-top: 15px;cursor:pointer;display:inline-block;min-height:42px;padding:10px 30px;font-size:15px;color:#fff;text-decoration:none;text-align:center;font-family:Gilroy-Semibold,sans-serif;background-color:#4D90CC;border-radius:35px;vertical-align:middle;}
a[data-v-669dc8b3]:hover{background-color:#66afe9;}
a[data-v-669dc8b3]{cursor:pointer;display:inline-block;min-height:42px;padding:10px 30px;font-size:15px;color:#fff;text-decoration:none;text-align:center;font-family:Gilroy-Semibold,sans-serif;background-color:#4D90CC;border-radius:35px;vertical-align:middle;}
a[data-v-669dc8b3]:hover{background-color:#4e9ff8;}
@media (max-width:768px){
a[data-v-669dc8b3]{padding-left:30px;padding-right:30px;}
}
@media (max-width:480px){
a[data-v-669dc8b3]{padding-left:20px;padding-right:20px;}
}
img[data-v-285a3986]{height:27px;width:auto;}
td[data-v-3e7bb260]{font-family:Gilroy-Regular,sans-serif;font-size:14px;color:#2c313b;}
td.status[data-v-3e7bb260]{font-family:Gilroy-Semibold,sans-serif;text-transform:capitalize;max-width:110px;}
td.status .green[data-v-3e7bb260]{color:#18bb9c;}
@media (max-width:700px){
td.status[data-v-3e7bb260]{max-width:none;padding-bottom:20px!important;}
}
td.order[data-v-3e7bb260]{color:#4D90CC;min-width:110px;}
@media (max-width:700px){
td.order[data-v-3e7bb260]{padding-top:20px!important;}
}
td.order a[data-v-3e7bb260]:hover{color:#4D90CC;text-decoration:none;}
td.order img[data-v-3e7bb260]{display:inline-block;margin-left:10px;width:11px;height:auto;}
.table-wrapper{padding:20px 0 0;}
.table-wrapper table{width:100%;}
.table-wrapper table tr{border-bottom:1px solid #dfdfdf;}
.table-wrapper table tr:last-child{border-bottom:none;}
.table-wrapper table tr.header{border-bottom:4px solid #dfdfdf;}
.table-wrapper table tr th{font-family:'TeachableSans-Regular';font-size:14px;color:#62686e;padding:10px 5px;}
@media (max-width:700px){
.table-wrapper table tr th{display:none;}
}
.table-wrapper table tr td{padding:10px 5px;}
@media (max-width:700px){
.table-wrapper table tr td{display:block;}
}
.empty p[data-v-bd11ec86]{font-family:'TeachableSans-Regular';font-size:14px;font-weight:500;line-height:18px;color:#2c313b;}
.empty img[data-v-bd11ec86]{margin:8px 0 22px;}
@media (max-width:500px){
.empty img[data-v-bd11ec86]{width:100%;}
}
h4[data-v-bd11ec86]{margin-top:0;font-family:'TeachableSans-Regular';font-size:20px;letter-spacing:.2px;color:#333;}
.inner-content[data-v-bd11ec86]{padding:40px;padding-bottom:20px;background-color:#fff;border-radius:4px;margin-bottom:30px;}
@media (max-width:767px){
.inner-content[data-v-bd11ec86]{padding:20px;}
}
}

</style>




<style media="screen">

/*! CSS Used from: https://www.codecademy.com/webpack/252.332e4eb85b77bff782aa.chunk.css */
.headingOverflow__UFZQ2dgsxI9wLTOZBpj5l{height:7.5rem;overflow:hidden;position:relative;width:100%;}
.heading__19kuxLfU5IL99jrtWG9oR6{background-color:#f6f5fa;height:100%;margin-left:-5%;position:relative;width:110%;}
</style>


<style media="screen">
/*! CSS Used from: https://www.codecademy.com/webpack/116.5a38711ce87647cf476a.chunk.css */
.btn__2v-TLC9Odx5KkacwG29i-V{display:-webkit-inline-flex;display:inline-flex;-webkit-justify-content:center;justify-content:center;font-weight:700;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;border:1px solid transparent;border-radius:2px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:.375rem .200rem;font-size:1rem;line-height:1.5;min-width:8rem;transition:all .1s ease-in-out;}
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
.contentContainer__2hNipbbqs3wX_aJ0xS9qxf{/*height:100%*/;padding-left:1rem;padding-right:1rem;max-width:calc(1440px + 12rem);margin-left:auto;margin-right:auto;}
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
.full-width .navbar-fedora .navbar-header-collapse {
    float: right;
    padding-right: 0px !important;
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
              data-btn="true" href="/users/settings_business">
                  Modifier
              </a>
            <div class="section__2v9mQhyESDhguULKoR_J7P">
                <h2 class="sectionTitle__3Cht9NEhb0XxciVgKArgPR">Menu</h2>
                <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/users/billings_business">
                    <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                        <p>Facturation</p>
                        <!-- <p>83</p> -->
                    </div>
                </a>
                <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/users/contact_business">
                    <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                        <p>Contact</p>
                        <!-- <p>83</p> -->
                    </div>
                </a>
                @if($school->user_id == Auth::user()->id)
                <a style="color: #4d90cc;" class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="{{ route('website.subdomain', ['school' => $school->id, 'subdomain' => $school->slug]) }}">
                    <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                        <p style="font-weight: bold;">Tableau d'adminstration de l'école</p>
                        <!-- <p>83</p> -->
                    </div>
                </a>
                @endif

            </div>
        </div>
        <div class="completionsContainer__2IYN9k4PNi5y8XGTuQdIeG">

            <div data-v-27efbf01="" class="col-sm-9">
    <!---->
    <!---->
    <div data-v-bd11ec86="" data-v-27efbf01="">
        <div data-v-bd11ec86="" class="inner-content empty">
            <h4 data-v-bd11ec86="">Vos achats en cours</h4> <img data-v-bd11ec86="" src="https://s35.mindvalley.us/mindvalleyacademy/media/images/empty_icon.png">
            @if(!Auth::user()->purchases->where('status', 'Validé'))
            <p data-v-bd11ec86="">Vous n'avez pas de souscriptions actives pour le moment</p>
            @else

            <div data-v-bd11ec86="" class="payment-history">
                    <div class="table-wrapper">
                        <table>
                            <tr class="header">
                                <th>Cours associé</th>
                                <th>Type de la formule</th>
                                <th>Prochaine date de paiement</th>
                                <th>Montant à payer</th>
                                <th>Méthode de paiement</th>
                                <th>Action</th>
                            </tr>
                            @foreach(Auth::user()->courses->where('school_id', $school->id) as $course)
                            @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                            @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type == 'Abonnement')

                            <tr data-v-3e7bb260="">
                                <td data-v-3e7bb260="" class="order"><a target="_blank" href="/{{$course->type == 'course' ? 'course' : 'path'}}/{{$course->slug}}">
                                        {{ucfirst($course->name)}}
                                </td>
                                <td data-v-3e7bb260="">{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type}}</td>

                                <td data-v-3e7bb260="">{{Carbon\Carbon::parse($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->last()->date)->addDays(30)}}</td>
                                <td data-v-3e7bb260="">{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->price}} FCFA</td>
                                <td data-v-3e7bb260="">Mobile money</td>
                                <td data-v-3e7bb260="">
                                    <a data-v-669dc8b3="" data-v-bd11ec86="" href="/course/{{$course->slug}}/checkout/{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->id}}" class="centered-button">
                                        Se réabonner
                                    </a>
                                </td>

                            </tr>
                            @endif
                            @endif
                            @endforeach

                            <!--si on a affaire a un plan de paiement-->
                            @foreach(Auth::user()->courses->where('school_id', $school->id) as $course)
                            @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                            @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type == 'Plan de paiement')

                            <tr data-v-3e7bb260="">
                                <td data-v-3e7bb260="" class="order"><a target="_blank" href="/{{$course->type == 'course' ? 'course' : 'path'}}/{{$course->slug}}">
                                        {{ucfirst($course->name)}}
                                </td>
                                <td data-v-3e7bb260="">{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type}}</td>
                                <td data-v-3e7bb260="">{{Carbon\Carbon::parse($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->last()->date)->addDays(30)}}</td>
                                <td data-v-3e7bb260="">
                                    @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->times - count($course->purchases->where('user_id', Auth::user()->id)->where('status','Validé')) == 0)
                                    Il ne reste plus rien à payer
                                    @else
                                    {{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->price}} FCFA
                                    @endif
                                </td>
                                <td data-v-3e7bb260="">Mobile money</td>
                                <td data-v-3e7bb260="">
                                    <a data-v-669dc8b3="" data-v-bd11ec86="" href="/course/{{$course->slug}}/checkout/{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->id}}" class="centered-button">
                                        Se réabonner
                                    </a>
                                </td>

                            </tr>
                            @endif
                            @endif
                            @endforeach
                        </table>
                    </div>
                </div>

                @endif




        </div>
        <!---->
        <div data-v-bd11ec86="" class="inner-content">
            <h4 data-v-bd11ec86="">Historique de paiements</h4>
            <div data-v-bd11ec86="" class="payment-history">
                <div class="table-wrapper">
                    <table>
                        <tr class="header">
                            <th>Id de transaction</th>
                            <th>Cours associé</th>
                            <th>Date</th>
                            <th>Type de la formule</th>
                            <th>Montant payé</th>
                            <th>Methode de paiement</th>
                            <th>Statut</th>
                        </tr>
                        @foreach(Auth::user()->courses->where('school_id', $school->id) as $course)
                        @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                        @foreach($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé') as $purchase)
                        @if($purchase->pricing)
                        <tr data-v-3e7bb260="">
                            <td data-v-3e7bb260="" class="order"><a data-v-3e7bb260="">
                                    {{$purchase->trans_id}}
                                    <img data-v-3e7bb260="" src="https://s92.mindvalley.us/mindvalley/media/images/ico-pdf.svg" alt="Invoice"></a></td>
                            <td>{{$course->name}}</td>
                            <td data-v-3e7bb260="">{{$purchase->date}}</td>
                            <td data-v-3e7bb260="">{{$purchase->pricing->type}}</td>
                            <td data-v-3e7bb260="">{{$purchase->pricing->price}} FCFA</td>
                            <td data-v-3e7bb260="">
                                Mobile money
                            </td>
                            <td data-v-3e7bb260="" class="status">
                                <div data-v-3e7bb260="" class="{isPaymentSuccessful ? green : red}">
                                    {{$purchase->status}}
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <!---->
    <!---->
</div>

        </div>
    </main>

</div>






@endsection
