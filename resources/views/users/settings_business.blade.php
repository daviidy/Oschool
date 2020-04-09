@extends('layouts.menu-school')
@section('title', 'Paramètres du compte')

@section('content')

<style media="screen">

/*! CSS Used from: https://fedora.teachablecdn.com/assets/application-aa8dc0145a8a7d04833d5281d89b670f7c2edba76463da65bd2551df18cc31ec.css ; media=all */
@media all{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
hr{box-sizing:content-box;height:0;}
input{color:inherit;font:inherit;margin:0;}
input[type="submit"]{-webkit-appearance:button;cursor:pointer;}
input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
a{background:0 0;}
a:active,a:hover{outline:0;}
img{border:0;}
hr{height:0;box-sizing:content-box;}
input{margin:0;font:inherit;color:inherit;}
input[type=submit]{-webkit-appearance:button;cursor:pointer;}
input::-moz-focus-inner{padding:0;border:0;}
input{line-height:normal;}
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
input{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#428bca;text-decoration:none;}
a:hover,a:focus{color:#2a6496;text-decoration:underline;}
a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
.img-circle{border-radius:50%; width: 75px; height: 75px;}
hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee;}
p{margin:0 0 10px;}
.text-center{text-align:center;}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
.form-control:focus{border-color:#66afe9;outline:0;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6);}
.form-control::-moz-placeholder{color:#777;opacity:1;}
.form-control:-ms-input-placeholder{color:#777;}
.form-control::-webkit-input-placeholder{color:#777;}
.form-group{margin-bottom:15px;}
.has-error .form-control{border-color:#a94442;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);}
.has-error .form-control:focus{border-color:#843534;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483;}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
.btn:focus,.btn:active:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);}
.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd;}
.btn-primary:hover,.btn-primary:focus,.btn-primary:active{color:#fff;background-color:#3071a9;border-color:#285e8e;}
.btn-primary:active{background-image:none;}
.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px;}
.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6;}
.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1;}
.hidden{display:none!important;visibility:hidden!important;}
.btn-primary,.btn-primary:active,.btn-primary:focus{background:#1ea69a!important;border:1px solid #1ea69a!important;font-weight:600!important;outline:none!important;color:#fff;border-radius:20px;padding:3px 18px!important;}
.btn-primary:hover,.btn-primary:active:hover,.btn-primary:focus:hover{outline:none!important;text-decoration:none;background:#1a9086!important;border:1px solid #1a9086!important;color:#fff;}
@media screen and (max-width: 767px){
.btn-primary,.btn-primary:active,.btn-primary:focus{font-size:15px;}
}
.btn-md,.btn-md:active,.btn-md:focus{display:inline-block;border-radius:50px!important;font-size:13px!important;letter-spacing:0.49px;padding-top:16px!important;padding-bottom:16px!important;padding-left:30px!important;padding-right:30px!important;}
.btn-orange,.btn-orange:hover,.btn-orange:active,.btn-orange:focus{border-color:#4d90cc!important;background-color:#4d90cc!important;}
.btn-orange:hover,.btn-orange:active,.btn-orange:focus,.btn-orange:hover:hover,.btn-orange:hover:active,.btn-orange:hover:focus,.btn-orange:active:hover,.btn-orange:active:active,.btn-orange:active:focus,.btn-orange:focus:hover,.btn-orange:focus:active,.btn-orange:focus:focus{border-color:#66afe9!important;background-color:#66afe9!important;}
input.form-control{padding:5px 10px;height:40px;font-weight:200;margin-bottom:14px;-webkit-transition:all 0.3s ease;transition:all 0.3s ease;box-shadow:none;}
input.form-control:focus{border-color:#4bdfd2;outline:0;box-shadow:none;}
input.form-control::-webkit-input-placeholder{opacity:0.7;}
.alert{font-weight:600;}
.alert-danger{color:#a56b6a;}
a{color:#1ea69a;}
a:hover,a:active{color:#0e504a;}
a,a:active,a:hover,a:focus{text-decoration:none;}
p{font-size:18px;font-weight:200;line-height:28px;}
.content-box{background:#fff;border-radius:6px;box-shadow:0 10px 21px #e7eeef;padding-left:0px;padding:30px 45px;position:relative;text-align:left;width:100%;margin-bottom:70px;}
.content-box .button-group{margin-top:45px;display:block;}
.content-box .control-input{font-size:13px;line-height:21px;}
.content-box .form-group{margin-bottom:20px;}
.content-box p{display:block;line-height:21px;font-size:12px;color:#909090;letter-spacing:0.45px;padding-bottom:12px;}
.content-box .form-control{background-color:#f4f9fb;border:0;box-shadow:0px 1px 1px 0px #e6e9ec;}
.content-box .form-control:focus{background-color:rgba(102,175,233,0.6);color:#333;box-shadow:0px 1px 1px 0px #4d90cc;border:0;}
.content-box .alert{font-size:13px;font-weight:600;border-radius:4px;letter-spacing:0.1px;margin-bottom:30px;border:0px;padding-bottom:13px;}
.content-box .alert.alert-danger{color:#c74a47;background-color:#fbe2e2;}
.content-box label{color:#47505e;font-size:13px;font-weight:500;line-height:29px;letter-spacing:0.61px;}
.my-teachable-layout .content-box{padding-top:40px;padding-bottom:40px;}
@media screen and (max-width: 767px){
.content-box{border:0;border-radius:0;box-shadow:none;width:calc(100% + 40px);margin:0 0 0 -20px;}
}
.my-teachable-layout .my-teachable-dashboard{padding:20px;min-height:100%;position:relative;width:100%;}
.my-teachable-layout .my-teachable-dashboard .sticky-center-container{margin-left:137px;}
@media screen and (max-width: 767px){
.my-teachable-layout .my-teachable-dashboard .sticky-center-container{margin-left:0px;}
}
@media screen and (min-width: 768px) and (max-width: 930px){
.my-teachable-layout .my-teachable-dashboard .sticky-center-container{margin-top:0px;width:calc(100% - 275px);}
}
@media screen and (min-width: 768px){
.my-teachable-layout .my-teachable-dashboard{position:absolute;padding-right:50px;padding-top:28px;padding-left:325px;}
}
.my-teachable-layout .sticky-center-container{position:absolute;top:50%;width:550px;left:50%;}
.my-teachable-layout .sticky-center-container .settings-form-wrapper a{text-decoration:underline;cursor:pointer;}
.my-teachable-layout .sticky-center-container .content-box{border:0!important;width:100%;margin-bottom:0;}
.my-teachable-layout .sticky-center-container .content-box p.center-explanation{font-size:14px;max-width:400px;font-weight:500;line-height:22px;margin-bottom:10px;color:#a0a0a0;}
.my-teachable-layout .sticky-center-container .content-box .button-group{margin-top:45px;display:block;}
@media screen and (max-width: 767px){
.my-teachable-layout .sticky-center-container{width:100%;border-radius:0px;-webkit-transform:none;transform:none;top:0px;left:0px;margin-top:-20px;border-top:1px solid #f1f1f1;margin-bottom:0px;}
.my-teachable-layout .sticky-center-container.pinned{-webkit-transform:none;transform:none;margin-top:-1px;position:absolute;top:5%;left:0%;}
.my-teachable-layout .sticky-center-container .content-box{box-shadow:none;border-radius:0px;min-height:100%;margin-left:0px;}
}
@media screen and (min-width: 768px) and (max-width: 930px){
.my-teachable-layout .sticky-center-container.pinned{-webkit-transform:translate(-50%, 0%);transform:translate(-50%, 0%);top:5%;}
}
@media screen and (min-width: 768px){
.my-teachable-layout .sticky-center-container{width:550px;-webkit-transform:translate(-50%, -50%);transform:translate(-50%, -50%);}
.my-teachable-layout .sticky-center-container.pinned{-webkit-transform:translate(-50%, 0%);transform:translate(-50%, 0%);top:5%;}
}
.form-control::-moz-placeholder{color:#b2bcc5;opacity:1;}
}

/*pour la longueur de l'input telephone*/
.iti--allow-dropdown input, .iti--allow-dropdown input[type=text], .iti--allow-dropdown input[type=tel], .iti--separate-dial-code input, .iti--separate-dial-code input[type=text], .iti--separate-dial-code input[type=tel] {

    width: 100%;
    color: #8492a6;
    background: #fff;
    height: 47px;
    padding: 6px 135px !important;
    margin-bottom: 1.2rem;
    border-radius: 26px;
    border-color: #dfe3ee;
}

</style>


<!--CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/css/intlTelInput.css">
<style>
    .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/img/flags.png") !important;}

    @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
    .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/img/flags@2x.png") !important;}
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


                    <div class="main my-teachable-dashboard">
    <div class="sticky-center-container pinned">
        <div class="content-box form-wrapper settings-form-wrapper">
            <form enctype="multipart/form-data" id="profile-form" action="{{url('users', Auth::user())}}" accept-charset="UTF-8" method="post">
                @csrf
                {{method_field('patch')}}
                @if(session('status'))
                <div id="form-success" class="alert alert-success" role="alert">Votre profil a été mis à jour.</div>
                @endif
                <div id="form-success" class="alert alert-success hidden" role="alert">You have successfully confirmed your email address.</div>
                <div id="form-confirmation" class="alert alert-success hidden" role="alert">
                    A confirmation email has been sent to: <span id="unconfirmed_email"></span>. Please confirm your email address.
                </div>

                <div id="form-errors" class="alert alert-danger hidden" role="alert">
                    Please fix the errors below.
                    <div id="input-errors"></div>
                </div>
                <div class="form-group">
                    <center>
                        <img width="70" class="img-circle" src="/images/users/default/{{Auth::user()->image}}" alt="davidyfreelance@gmail.com">
                        <br><br>
                        <p class="center-explanation">
                            Changez votre image ci-dessous
                        </p>
                        <input type="file" name="image" value="">
                    </center>
                </div>

                <div class="form-group">
                    <label class="control-label" for="edit-user-name">
                        Nom complet
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="edit-user-name" maxlength="100" name="name" placeholder="Full Name" required="required" type="text" value="{{Auth::user()->name}}">
                        <span class="input-icon"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="edit-user-email">
                        Adresse email
                    </label>
                    <div class="control-input">
                        <input disabled class="form-control" id="edit-user-email" maxlength="100" name="email" required="required" type="email" value="{{Auth::user()->email}}">
                        <span class="input-icon"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="edit-user-tel">
                        Numéro de téléphone
                        @if(Auth::user()->telephone)
                        <strong>
                        ({{Auth::user()->telephone}})
                        </strong>
                        @endif
                    </label>
                    <div class="control-input">
                        <input placeholder="" class="form-control" id="edit-user-tel" name="telephone" required="required" type="tel" value="{{Auth::user()->tel}}">
                        <span class="input-icon"></span>
                    </div>
                </div>
                <!--
                <a id="change-pw-btn">Change Password</a>
                <div class="form-group hidden" id="change-pw-form-group">
                    <label class="control-label" for="edit-user-password">
                        New password
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="edit-user-password" name="password" type="password" autocomplete="off">
                        <span class="input-icon"></span>
                    </div>
                    <label class="control-label" for="edit-user-password">
                        Confirm Password
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="edit-user-confirm-password" name="password_confirmation" type="password" autocomplete="off">
                        <span class="input-icon"></span>
                    </div>
                </div>
            -->
                <br>
                <a href="{{url('user/settings/changePassword')}}">Changer de mot de passe</a>
                <hr>


                <div class="button-group text-center">
                    <input type="submit" name="commit" value="Enregistrer les modifications" class="btn btn-primary btn-md signup-button btn-orange">
                </div>
            </form>

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



<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput.js"></script>

<script>
    var input = document.querySelector("#edit-user-tel");
    window.intlTelInput(input, {

    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js",
    preferredCountries: ["ci", "sn", "cm", "ml"],
    autoPlaceholder: "polite",
    hiddenInput: "full",

  });
  </script>
  <script class="iti-load-utils" async="" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js"></script>

@endsection
