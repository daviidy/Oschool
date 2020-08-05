@extends('layouts.admin_views.menu-school-icon')
@section('title', 'A propos de '.$user->name)

@section('content')

<!--for user infos-->

<style media="screen">

/*! CSS Used from: https://openclassrooms.com/bundles/common/css/master-0c0987a7.css ; media=all */
@media all{
h1{color:rgba(0,0,0,.92);margin:10px 0;font-weight:700;}
h1{font-size:1.625rem;line-height:2.25rem;}
p{font-size:.875rem;line-height:1.5rem;color:rgba(0,0,0,.92);}
@media only screen and (min-width:992px){
p{font-size:1rem;line-height:1.625rem;}
}
p{margin:0;}
.oc-body div:not([class^=mce-]),.oc-body p,.oc-body span{box-sizing:border-box;}
.oc-body img{border:none;}
p{margin:0;}
}
/*! CSS Used from: Embedded */
.MuiPaper-root{color:rgba(0, 0, 0, 0.92);transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;background-color:#fff;}
.MuiPaper-elevation0{box-shadow:none;}
/*! CSS Used from: Embedded */
.MuiPaper-root{color:rgba(0, 0, 0, 0.92);transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;background-color:#fff;}
.MuiPaper-elevation0{box-shadow:none;}
/*! CSS Used from: Embedded */
.MuiPaper-root{color:rgba(0, 0, 0, 0.92);transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;background-color:#fff;}
.MuiPaper-elevation0{box-shadow:none;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body2{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
@media (max-width:767.95px){
.MuiTypography-body2{font-size:0.75rem;font-family:Montserrat;font-weight:400;line-height:1.375rem;}
}
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:2rem;font-family:Montserrat;font-weight:700;line-height:2.625rem;letter-spacing:0;}
@media (max-width:767.95px){
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:1.5rem;font-family:Montserrat;font-weight:700;line-height:2.125rem;letter-spacing:0;}
}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body2{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
@media (max-width:767.95px){
.MuiTypography-body2{font-size:0.75rem;font-family:Montserrat;font-weight:400;line-height:1.375rem;}
}
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:2rem;font-family:Montserrat;font-weight:700;line-height:2.625rem;letter-spacing:0;}
@media (max-width:767.95px){
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:1.5rem;font-family:Montserrat;font-weight:700;line-height:2.125rem;letter-spacing:0;}
}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body2{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
@media (max-width:767.95px){
.MuiTypography-body2{font-size:0.75rem;font-family:Montserrat;font-weight:400;line-height:1.375rem;}
}
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:2rem;font-family:Montserrat;font-weight:700;line-height:2.625rem;letter-spacing:0;}
@media (max-width:767.95px){
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:1.5rem;font-family:Montserrat;font-weight:700;line-height:2.125rem;letter-spacing:0;}
}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body2{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
@media (max-width:767.95px){
.MuiTypography-body2{font-size:0.75rem;font-family:Montserrat;font-weight:400;line-height:1.375rem;}
}
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:2rem;font-family:Montserrat;font-weight:700;line-height:2.625rem;letter-spacing:0;}
@media (max-width:767.95px){
.MuiTypography-h2{color:rgba(0, 0, 0, 0.92);font-size:1.5rem;font-family:Montserrat;font-weight:700;line-height:2.125rem;letter-spacing:0;}
}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.jss343{position:relative;box-sizing:border-box;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;}
@media (min-width:768px){
.jss343{max-width:768px;padding-left:16px;padding-right:16px;}
}
@media (min-width:992px){
.jss343{max-width:968px;}
}
@media (min-width:1280px){
.jss343{max-width:1200px;}
}
/*! CSS Used from: Embedded */
.MuiAvatar-root{width:40px;height:40px;display:flex;overflow:hidden;position:relative;font-size:1.25rem;align-items:center;flex-shrink:0;font-family:Montserrat;user-select:none;border-radius:50%;justify-content:center;}
.MuiAvatar-img{width:100%;height:100%;object-fit:cover;text-align:center;}
/*! CSS Used from: Embedded */
.MuiAvatar-root{width:40px;height:40px;display:flex;overflow:hidden;position:relative;font-size:1.25rem;align-items:center;flex-shrink:0;font-family:Montserrat;user-select:none;border-radius:50%;justify-content:center;}
.MuiAvatar-img{width:100%;height:100%;object-fit:cover;text-align:center;}
/*! CSS Used from: Embedded */
.jss346{color:#fff;font-size:14px;box-shadow:inset 0 0 0 1px rgba(0,0,0,0.1);text-transform:uppercase;}
.jss347-large{width:60px;height:60px;}
/*! CSS Used from: Embedded */
.jss305{padding:72px 0px 48px 0px;position:relative;background-color:#fff;}
.jss307{display:flex;align-items:start;flex-direction:column;}
@media (min-width:480px){
.jss307{align-items:center;flex-direction:row;}
}
.jss308{width:80px;height:80px;flex-shrink:0;margin-bottom:8px;}
@media (min-width:480px){
.jss308{width:104px;height:104px;font-size:1.5rem;margin-right:16px;}
}
.jss309{top:0;left:0;right:0;width:100%;bottom:0;height:100%;opacity:0.08;z-index:0;position:absolute;}

@media (min-width: 768px){


#STUDENT-DASHBOARD-REACT {
    width: 95%;
    padding-left: 23rem;
    padding-top: 0rem;
}

}

</style>


<!--for user courses-->

<style media="screen">

/*! CSS Used from: https://openclassrooms.com/bundles/common/css/master-0c0987a7.css ; media=all */
@media all{
.text-left{text-align:left!important;}
body a{color:rgba(0,0,0,.92);text-decoration:underline;}
body a:hover{color:#4D90CC;}
h2{color:rgba(0,0,0,.92);margin:10px 0;font-weight:700;}
h2{font-size:2.125rem;line-height:1.75rem;}
p{font-size:.875rem;line-height:1.5rem;color:rgba(0,0,0,.92);}
@media only screen and (min-width:992px){
p{font-size:1rem;line-height:1.625rem;}
}
p{margin:0;}
.ui-front{z-index:100;}
.ui-autocomplete{position:absolute;top:0;left:0;cursor:default;}
.ui-menu{list-style:none;padding:2px;margin:0;display:block;outline:0;}
.ui-widget{font-family:Verdana,Arial,sans-serif;font-size:1.1em;}
.ui-widget-content{border:1px solid #aaa;background:#fff 50% 50% repeat-x;color:#222;}
.ui-widget{font-family:Montserrat,sans-serif;font-size:1.1em;}
.ui-widget-content{border:1px solid #bebebe;background:#ececec;}
.ui-menu{padding:0;}
ul.ui-autocomplete{box-shadow:-2px 2px 4px 0 rgba(0,0,0,.15);position:absolute;max-height:300px;overflow-y:auto;overflow-x:hidden;}
input:not([type=checkbox]):not([type=radio]):focus,textarea:focus{outline:0;}
input[type=text]::-ms-clear{display:none;}
.oc-form{font-size:.875rem;position:relative;color:rgba(0,0,0,.92);}
.oc-form iframe{width:100%;background:#fff!important;}
.oc-form input[type=text],.oc-form select,.oc-form textarea{transition:background .2s;border-radius:0;box-sizing:border-box;box-shadow:none;border:1px solid #bebebe;background:#fff;font-family:Montserrat,sans-serif;}
.oc-form input[type=text]:focus,.oc-form select:focus,.oc-form textarea:focus{border:1px solid #7451eb;background:#fff;box-shadow:0 0 8px 3px rgba(116,81,235,.3);}
.oc-form input[type=text]:disabled,.oc-form select:disabled,.oc-form textarea:disabled{background:#e5e5e5;border:1px solid #d2d2d2;}
.oc-form input[type=text],.oc-form select{outline:0;height:30px;line-height:24px;font-size:.875rem;padding:0 6px;}
.oc-form textarea{outline:0;display:block;width:100%;min-height:75px;font-size:.875rem;line-height:1.5rem;padding:10px;box-sizing:border-box!important;}
.oc-form select{line-height:1;border:1px solid #bebebe;border-radius:0;font-size:.875rem;padding:6px 5px 6px 0;}
.oc-form__actions{margin-top:20px;}
.oc-form__actions:after,.oc-form__actions:before{content:" ";display:table;}
.oc-form__actions:after{clear:both;}
.oc-form__actions:after,.oc-form__actions:before{content:" ";display:table;}
.oc-form__actions:after{clear:both;}
.oc-form__widget{display:block;}
.oc-form__group{position:relative;}
.oc-form__group:after,.oc-form__group:before{content:" ";display:table;}
.oc-form__group:after{clear:both;}
.oc-form__group:after,.oc-form__group:before{content:" ";display:table;}
.oc-form__group:after{clear:both;}
.oc-form [class*=oc-]{box-sizing:initial;}
.oc-form [class*=oc-]>*{box-sizing:initial;}
section{padding-top:20px;padding-bottom:20px;}
figure{margin:0;position:relative;display:inline-block;overflow:hidden;width:100%;}
.wysiwyg{position:relative;}
.wysiwyg .wysiwyg__toolbar{display:block;height:auto;width:100%;z-index:999;}
.wysiwyg__spinner.wysiwyg__spinner{font-family:ocfont;position:absolute;font-size:24px;color:rgba(0,0,0,.3);top:6px;right:5px;line-height:23px;opacity:0;tranpsition:opacity .2s;}
.autocomplete{position:relative;display:block;}
.autocomplete select{display:none;}
.autocomplete__selectedItems{margin:0;padding:0;margin-top:10px;padding-right:5px;}
.autocomplete__field{width:100%;}
.autocomplete__loader{opacity:0;position:absolute;top:7px;right:7px;}
.oc-body a,.oc-body div:not([class^=mce-]),.oc-body p,.oc-body section,.oc-body span,.oc-body ul{box-sizing:border-box;}
.oc-body section{clear:both;}
.space-bottom{margin-bottom:20px!important;}
.spacer{margin-top:20px!important;margin-bottom:20px!important;}
.icon-badge:before{content:"\f107";}
.icon-check:before{content:"\f119";}
.icon-spinner:before{content:"\f17f";}
.icon-test:before{content:"\f184";}
[class*=" icon-"],[class^=icon-]{font-family:ocfont;line-height:1;font-weight:400;font-style:normal;speak:none;text-decoration:inherit;text-transform:none;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
[class*=" icon-"]:before,[class^=icon-]:before{font-family:ocfont;}
.icon-spin{display:inline-block;animation:spin 2s infinite linear;margin:0 8px;}
.formWidget{position:relative;}
.searchField{position:relative;display:table;width:100%;}
.searchField__wrapperInput{display:table-cell;vertical-align:middle;width:250px;}
.searchField__input{width:100%;}
.searchField__button{display:table-cell;margin-left:10px;}
.secondTitle{color:rgba(0,0,0,.92);font-size:.125rem;line-height:2.125rem;font-weight:700;border-bottom:1px solid #d2d2d2;margin-bottom:20px;}
.dashboardTable{color:rgba(0,0,0,.92);border-collapse:collapse;text-align:center;width:100%;font-size:14px;box-shadow:0 0 8px #9b9b9b;}
.dashboardTable .dashboardTable__link{color:rgba(0,0,0,.92);text-decoration:none;}
.dashboardTable__infoSecondary{display:none;}
.dashboardTable td,.dashboardTable th{padding:10px;}
.dashboardTable td{border:1px solid #bebebe;}
.dashboardTable .dashboardTable__progressBar{padding:0;vertical-align:bottom;}
.dashboardTable th{background:#4d90cc;color:#fff;font-weight:400;position:relative;}
.dashboardTable th+th::before{content:' ';width:0;display:inline-block;vertical-align:middle;position:absolute;left:0;top:9px;bottom:9px;border-left:1px solid rgba(0,0,0,.3);border-right:1px solid rgba(255,255,255,.1);}
.dashboardTable tr{height:55px;}
.dashboardTable tr:nth-child(odd){background:#f6f6f6;}
.dashboardTable .dashboardTable__header.dashboardTable__header{background-color:#4d90cc;border:1px solid #4d90cc;}
.dashboardTable__projectWorkInProgress .response{display:inline-block;border:1px solid #ececec;border-radius:3px;color:#fff;background-color:#7451eb;font-size:.875rem;padding:3px 10px;}
@media only screen and (min-width:768px){
.dashboardTable__infoSecondary{display:table-cell;}
.dashboardTable .dashboardTable__progressBar{width:200px;padding:0;}
.dashboardTable td,.dashboardTable th{width:auto;}
}
.progressbar{text-align:center;}
.progressbar__rate{background-color:#2e7e32;display:inline-block;min-width:45px;margin-bottom:8px;border-radius:12px;padding:5px;color:#fff;position:relative;}
.progressbar__rate::after{content:" ";display:inline-block;height:0;width:0;border:1px solid transparent;border-top-color:#2e7e32;border-width:7px 5px 0 5px;position:absolute;bottom:-7px;left:20px;}
.progressbar__barWrapper{background:rgba(0,0,0,.15);}
.progressbar__bar{height:7px;background:#2e7e32;}
.certificate__icon{font-size:1.375rem;}
.certificate--completed{color:#2e7e32;}
.certificate--notCompleted{color:#9b9b9b;}
.mentorEditForm__internalSaveButtonContainer{text-align:center;}
@media only screen and (min-width:768px){
.mentorEditForm__internalSaveButtonContainer{text-align:left;}
}
.button--primary,.button--secondary,.button--alternative{font-family:"Montserrat";font-size:.875rem;font-weight:700;text-align:center;line-height:1.5rem;}
.button--alternative{font-family:"Montserrat";font-size:.875rem;font-weight:700;text-align:center;line-height:1.5rem;}
.button--primary{border-radius:4px;border-width:1px;border-style:solid;outline:none;padding:8px 16px;text-transform:uppercase;-webkit-transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;position:relative;overflow:hidden;color:#fff;background-color:#7451eb;border-color:#7451eb;-webkit-box-shadow:0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px 0 rgba(0,0,0,0.2);box-shadow:0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px 0 rgba(0,0,0,0.2);}
.button--primary:hover,.button--primary:focus{color:#fff;background-color:#4d90cc;border-color:#4d90cc;-webkit-box-shadow:0 6px 6px 0 rgba(0,0,0,0.26),0 10px 20px 0 rgba(0,0,0,0.19);box-shadow:0 6px 6px 0 rgba(0,0,0,0.26),0 10px 20px 0 rgba(0,0,0,0.19);}
.button--primary:active{color:#fff;background-color:#7451eb;border-color:#7451eb;-webkit-box-shadow:none;box-shadow:none;}
.button--primary:disabled{pointer-events:none;}
.button--primary:after{content:'';position:absolute;top:50%;left:50%;width:5px;height:5px;background:#fff;opacity:0;border-radius:100%;-webkit-transform:scale(1, 1) translate(-50%);transform:scale(1, 1) translate(-50%);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;}
.button--primary:disabled{color:#545454;background-color:#d2d2d2;border-color:#d2d2d2;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary{border-radius:4px;border-width:1px;border-style:solid;outline:none;padding:8px 16px;text-transform:uppercase;-webkit-transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;position:relative;overflow:hidden;color:#DC4F2F;background-color:#fff;border-color:#DC4F2F;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:hover,.button--secondary:focus{color:#DC4F2F;background-color:rgba(220, 79, 47, 0.1);border-color:#DC4F2F;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:active{color:#DC4F2F;background-color:#fff;border-color:#4d90cc;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:disabled{pointer-events:none;}
.button--secondary:after{content:'';position:absolute;top:50%;left:50%;width:5px;height:5px;background:#7451eb;opacity:0;border-radius:100%;-webkit-transform:scale(1, 1) translate(-50%);transform:scale(1, 1) translate(-50%);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;}
.button--secondary:disabled{color:#4d90cc;background-color:#d2d2d2;border-color:#4d90cc;-webkit-box-shadow:none;box-shadow:none;}
.button--alternative{border-radius:4px;border-width:1px;border-style:solid;outline:none;padding:8px 16px;text-transform:uppercase;-webkit-transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;position:relative;overflow:hidden;color:#7451eb;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0);-webkit-box-shadow:none;box-shadow:none;border-radius:2px;}
.button--alternative:hover,.button--alternative:focus{color:#7451eb;background-color:rgba(116,81,235,0.24);border-color:rgba(0,0,0,0);-webkit-box-shadow:none;box-shadow:none;}
.button--alternative:active{color:#7451eb;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0);-webkit-box-shadow:none;box-shadow:none;}
.button--alternative:disabled{pointer-events:none;}
.button--alternative:after{content:'';position:absolute;top:50%;left:50%;width:5px;height:5px;background:#7451eb;opacity:0;border-radius:100%;-webkit-transform:scale(1, 1) translate(-50%);transform:scale(1, 1) translate(-50%);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;}
.button--alternative:hover{cursor:pointer;}
.button--alternative:disabled{color:#545454;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0);-webkit-box-shadow:none;box-shadow:none;}
.oc-typography-body1{font-size:1rem;font-family:Montserrat;font-weight:400;line-height:1.625rem;}
.oc-typography-body2{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
@media (max-width: 767.95px){
.oc-typography-body1{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
.oc-typography-body2{font-size:0.75rem;font-family:Montserrat;font-weight:400;line-height:1.375rem;}
}
.grid-wrapper{position:relative;}
@media (max-width: 767px){
.grid-wrapper{margin:auto;max-width:100%;width:100%;}
.grid-inner{margin:0 8px;max-width:100%;}
}
@media (min-width: 768px){
.grid-wrapper{margin:auto;max-width:768px;width:100%;}
.grid-inner{margin:0 16px;}
}
@media (min-width: 992px){
.grid-wrapper{margin:auto;max-width:992px;width:100%;}
.grid-inner{margin:auto;max-width:936px;}
}
@media (min-width: 1280px){
.grid-wrapper{margin:auto;max-width:1280px;width:100%;}
.grid-inner{margin:auto;max-width:1168px;}
}
[class^="icon-"],[class*=" icon-"]{font-family:"ocfont";line-height:1;font-weight:normal;font-style:normal;speak:none;text-decoration:inherit;text-transform:none;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.icon-badge:before{content:"\f107";}
.icon-check:before{content:"\f119";}
.icon-spinner:before{content:"\f17f";}
.icon-test:before{content:"\f184";}
[class^="icon-"],[class*=" icon-"]{font-family:"ocfont";}
.icon-spin{display:inline-block;-webkit-animation:spin 2s infinite linear;animation:spin 2s infinite linear;margin:0 8px;}
a{color:rgba(0,0,0,0.92);}
a:hover{color:#7451eb;}
p{margin:0;}
input:not([type=checkbox]):not([type=radio]):focus,textarea:focus{outline:none;}
.button{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-decoration:none;cursor:pointer;font-weight:700;}
.button i{line-height:0;vertical-align:middle;position:relative;font-size:1rem;margin-right:16px;}
.button--primary{-webkit-transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;}
.button:disabled{color:#545454;border-color:#d2d2d2;background:#d2d2d2;}
.button:disabled{pointer-events:none;}
.crud-list{width:100%;margin:20px 0;border-collapse:collapse;-webkit-box-shadow:0 0 8px rgba(115,115,115,0.3);box-shadow:0 0 8px rgba(115,115,115,0.3);}
.crud-list thead{background:#003668;color:#fff;text-align:left;}
.crud-list thead tr{background:transparent;}
.crud-list thead td+td:not(.no-separator)::before{content:' ';width:0;display:inline-block;vertical-align:middle;position:absolute;left:0;top:9px;bottom:9px;border-left:1px solid rgba(0,0,0,0.3);border-right:1px solid rgba(255,255,255,0.1);}
.crud-list td{padding:16px 8px;text-align:left;position:relative;font-weight:normal;}
.crud-list tr{background-color:#fff;}
.crud-list tr:hover{outline:1px solid rgba(0,0,0,0.15);}
.crud-list tr+tr{border-top:1px solid #d2d2d2;}
.mentorshipStudent__headWrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin:32px 0;}
.mentorshipStudent__studentContainer,.mentorshipStudent__mentorContainer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:5px 10px;border:1px solid #f6f6f6;border-radius:5px;-webkit-box-shadow:rgba(121,121,121,0.35) 1px 2px 6px;box-shadow:rgba(121,121,121,0.35) 1px 2px 6px;width:100%;max-width:580px;}
.mentorshipStudent__mentorContainer{margin-top:32px;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;}
.mentorshipStudent__mentorContainer .button{width:220px;}
.mentorshipStudent__studentContainer{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;}
.mentorshipStudent__studentContainer .button{margin-left:auto;-ms-flex-negative:0;flex-shrink:0;}
.mentorshipStudent__details{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;margin-top:16px;}
.mentorshipStudent__mentorNameWrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:-16px;}
.mentorshipStudent__mentorNameWrapper>*{margin-top:16px;}
.mentorshipStudent__nameDetails{overflow:hidden;}
.mentorshipStudent__nameDetails>*{overflow:hidden;text-overflow:ellipsis;}
.mentorshipStudent__name{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-weight:bold;margin-right:auto;}
.mentorshipStudent__name--mentor{text-align:center;}
.mentorshipStudent__name--student{width:100%;}
.mentorshipStudent__name .avatar{vertical-align:middle;margin-right:16px;}
.mentorshipStudent__studentEmail{font-weight:normal;margin-top:4px;}
.mentorshipStudent__avatarLink{text-decoration:none;}
.mentorshipStudent__addMentor .searchField{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:-16px;}
.mentorshipStudent__addMentor .searchField>*{margin-top:16px;}
.mentorshipStudent__addMentor .searchField__wrapperInput{margin-right:8px;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;}
.mentorshipStudent__addMentor .searchField__input input{min-height:42px;min-width:200px;border-radius:4px;-webkit-box-shadow:0px 3px 13px rgba(0,0,0,0.1);box-shadow:0px 3px 13px rgba(0,0,0,0.1);border-color:transparent;padding-left:40px;}
.mentorshipStudent__addMentor .searchField__input input:focus{border-color:transparent;}
.mentorshipStudent__addMentor .searchField__input input:focus ~ .searchField__icon{fill:#7451eb;}
.mentorshipStudent__addMentor .searchField__icon{height:32px;position:absolute;top:4px;left:4px;}
.mentorshipStudent__addMentor .searchField .autocomplete__loader{top:14px;}
.mentorshipStudent__addMentor .searchField .button{-ms-flex-negative:0;flex-shrink:0;margin-left:0;}
@media (min-width: 768px){
.mentorshipStudent__headWrapper{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;}
.mentorshipStudent__studentContainer,.mentorshipStudent__mentorContainer{max-width:initial;}
.mentorshipStudent__mentorContainer{margin-top:0;margin-left:24px;}
}
.avatar{border-radius:50%;display:inline-block;position:relative;background-size:cover;background-position:center center;background-color:transparent;-webkit-box-shadow:inset 0 0 0 1px rgba(0,0,0,0.1);box-shadow:inset 0 0 0 1px rgba(0,0,0,0.1);}
}
/*! CSS Used from: https://openclassrooms.com/bundles/crud/css/main-28286c21.css ; media=all */
@media all{
.text-left{text-align:left!important;}
}
/*! CSS Used from: Embedded */
.MuiPaper-root{color:rgba(0, 0, 0, 0.92);transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;background-color:#fff;}
.MuiPaper-rounded{border-radius:4px;}
.MuiPaper-elevation1{box-shadow:0px 1px 3px 0px rgba(0,0,0,0.2),0px 1px 1px 0px rgba(0,0,0,0.14),0px 2px 1px -1px rgba(0,0,0,0.12);}
/*! CSS Used from: Embedded */
.MuiPaper-root{color:rgba(0, 0, 0, 0.92);transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;background-color:#fff;}
.MuiPaper-rounded{border-radius:4px;}
.MuiPaper-elevation1{box-shadow:0px 1px 3px 0px rgba(0,0,0,0.2),0px 1px 1px 0px rgba(0,0,0,0.14),0px 2px 1px -1px rgba(0,0,0,0.12);}
/*! CSS Used from: Embedded */
.MuiPaper-root{color:rgba(0, 0, 0, 0.92);transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;background-color:#fff;}
.MuiPaper-rounded{border-radius:4px;}
.MuiPaper-elevation1{box-shadow:0px 1px 3px 0px rgba(0,0,0,0.2),0px 1px 1px 0px rgba(0,0,0,0.14),0px 2px 1px -1px rgba(0,0,0,0.12);}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body1{font-size:1rem;font-family:Montserrat;font-weight:400;line-height:1.625rem;}
@media (max-width:767.95px){
.MuiTypography-body1{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
}
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.25rem;font-family:Montserrat;font-weight:700;line-height:1.875rem;}
@media (max-width:767.95px){
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.125rem;font-family:Montserrat;font-weight:700;line-height:1.75rem;}
}
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;text-transform:uppercase;}
@media (max-width:767.95px){
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;}
}
.MuiTypography-displayInline{display:inline;}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body1{font-size:1rem;font-family:Montserrat;font-weight:400;line-height:1.625rem;}
@media (max-width:767.95px){
.MuiTypography-body1{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
}
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.25rem;font-family:Montserrat;font-weight:700;line-height:1.875rem;}
@media (max-width:767.95px){
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.125rem;font-family:Montserrat;font-weight:700;line-height:1.75rem;}
}
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;text-transform:uppercase;}
@media (max-width:767.95px){
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;}
}
.MuiTypography-displayInline{display:inline;}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body1{font-size:1rem;font-family:Montserrat;font-weight:400;line-height:1.625rem;}
@media (max-width:767.95px){
.MuiTypography-body1{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
}
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.25rem;font-family:Montserrat;font-weight:700;line-height:1.875rem;}
@media (max-width:767.95px){
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.125rem;font-family:Montserrat;font-weight:700;line-height:1.75rem;}
}
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;text-transform:uppercase;}
@media (max-width:767.95px){
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;}
}
.MuiTypography-displayInline{display:inline;}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-body1{font-size:1rem;font-family:Montserrat;font-weight:400;line-height:1.625rem;}
@media (max-width:767.95px){
.MuiTypography-body1{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
}
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.25rem;font-family:Montserrat;font-weight:700;line-height:1.875rem;}
@media (max-width:767.95px){
.MuiTypography-h4{color:rgba(0, 0, 0, 0.92);font-size:1.125rem;font-family:Montserrat;font-weight:700;line-height:1.75rem;}
}
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;text-transform:uppercase;}
@media (max-width:767.95px){
.MuiTypography-overline{font-size:0.75rem;font-family:Montserrat;font-weight:500;line-height:1.375rem;}
}
.MuiTypography-displayInline{display:inline;}
.MuiTypography-displayBlock{display:block;}
/*! CSS Used from: Embedded */
.MuiCard-root{overflow:hidden;}
/*! CSS Used from: Embedded */
.MuiCardContent-root{padding:16px;}
.MuiCardContent-root:last-child{padding-bottom:24px;}
/*! CSS Used from: Embedded */
.jss457{font-size:1rem;font-family:Montserrat;font-weight:400;line-height:1.625rem;}
@media (max-width:767.95px){
.jss457{font-size:0.875rem;font-family:Montserrat;font-weight:400;line-height:1.5rem;}
}
.jss457:last-child{padding-bottom:16px;}
.jss457 > *{margin:0;}
/*! CSS Used from: Embedded */
.jss473{width:100%;height:auto;margin:0;display:block;padding:0;padding-bottom:56.25%;background-size:cover;background-color:#d2d2d2;background-position:center;}
/*! CSS Used from: Embedded */
.jss459{display:block;text-decoration:none;}
.jss460{color:inherit;}
@media (max-width:479.95px){
.jss460{display:none;}
}
.jss461{display:flex;padding:16px 0;align-items:flex-start;flex-direction:row;text-decoration:none;}
.jss463{color:inherit;text-transform:uppercase;}
@media (max-width:479.95px){
.jss463{margin-bottom:0;}
}
.jss464{color:inherit;margin-bottom:8px;}
.jss465{color:inherit;margin-bottom:8px;}
.jss466{width:40%;position:relative;max-width:270px;align-self:flex-start;flex-shrink:0;}
.jss467{color:#737373;width:100%;margin:0 32px;flex-grow:1;}
@media (max-width:479.95px){
.jss467{margin:0 16px;}
}
/*! CSS Used from: Embedded */
.jss471{padding-bottom:46.15%;background-size:contain;background-color:rgba(255, 255, 255, .68);background-repeat:no-repeat;background-position:center bottom;}
/*! CSS Used from: Embedded */
@media (min-width:480px){
.jss409{display:inherit;}
}
@media (min-width:320px){
.jss409{display:inherit;margin-right:16px;}
}
.jss412{display:flex;flex-direction:column;}
@media (min-width:768px){
.jss412{flex-direction:row;}
}
.jss414{padding-bottom:52%;}
@media (max-width:479.95px){
.jss415{width:100%;max-width:none;margin-bottom:16px;}
}
.jss417{padding:0;}
.jss417:last-child{padding-bottom:0;}
.jss418{padding-top:32px;}
@media (max-width:991.95px){
.jss418{padding-top:16px;}
}
@media (max-width:479.95px){
.jss418{margin:0;padding-top:0;}
}
.jss419{flex:1;}
.jss420{padding:0;}
.jss420 .jss418{color:rgba(0, 0, 0, 0.92);width:auto;margin:0px 16px;}
@media (max-width:479.95px){
.jss420{flex-direction:column;}
}
/*! CSS Used from: Embedded */
.jss383{margin-top:40px;margin-bottom:16px;}
/*! CSS Used from: https://openclassrooms.com/tinymce/skins/oc-lightgray/skin.min.css */
.mce-container,.mce-container *,.mce-widget,.mce-widget *{margin:0;padding:0;border:0;outline:0;vertical-align:top;background:transparent;text-decoration:none;color:#333;font-family:"Montserrat",sans-serif;font-size:14px;text-shadow:none;float:none;position:static;width:auto;height:auto;white-space:nowrap;cursor:inherit;-webkit-tap-highlight-color:transparent;line-height:normal;font-weight:normal;text-align:left;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;direction:ltr;max-width:none;}
.mce-widget button{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}
.mce-tinymce{visibility:inherit!important;position:relative;}
.mce-tinymce{display:block;}
div.mce-edit-area{background:#fff;filter:none;}
.mce-toolbar-grp{padding:2px 0;}
.mce-toolbar-grp .mce-flow-layout-item{margin-bottom:0;}
.mce-container,.mce-container-body{display:block;}
.mce-panel{border:0 solid #cacaca;border:0 solid rgba(0,0,0,0.2);background-color:#f0f0f0;}
.mce-btn{border:1px solid #b1b1b1;border-color:transparent transparent transparent transparent;position:relative;text-shadow:0 1px 1px rgba(255,255,255,0.75);display:inline-block;*display:inline;*zoom:1;background-color:#f0f0f0;}
.mce-btn:hover,.mce-btn:focus{color:#333;background-color:#e3e3e3;border-color:#ccc;}
.mce-btn:active{background-color:#e0e0e0;border-color:#ccc;}
.mce-btn button{padding:4px 8px;font-size:14px;line-height:20px;*line-height:16px;cursor:pointer;color:#333;text-align:center;overflow:visible;-webkit-appearance:none;}
.mce-btn button::-moz-focus-inner{border:0;padding:0;}
.mce-btn i{text-shadow:1px 1px none;}
.mce-btn-group .mce-btn{border-width:1px;margin:0;margin-left:2px;}
.mce-btn-group:not(:first-child){border-left:1px solid #d9d9d9;padding-left:3px;margin-left:3px;}
.mce-btn-group .mce-first{margin-left:0;}
.mce-flow-layout-item{display:inline-block;*display:inline;*zoom:1;}
.mce-flow-layout-item{margin:2px 0 2px 2px;}
.mce-flow-layout-item.mce-last{margin-right:2px;}
.mce-flow-layout{white-space:normal;}
.mce-stack-layout-item{display:block;}
.mce-ico{font-family:'tinymce',Arial;font-style:normal;font-weight:normal;font-variant:normal;font-size:16px;line-height:16px;speak:none;vertical-align:text-top;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;display:inline-block;background:transparent center center;background-size:cover;width:16px;height:16px;color:#333;}
.mce-i-bullist:before{content:"\e00a";}
.mce-i-numlist:before{content:"\e00b";}
.mce-i-link:before{content:"\e011";}
.mce-i-bold:before{content:"\e02a";}
.mce-i-italic:before{content:"\e02b";}


@media (min-width: 768px){


#userCourses {
    width: 95%;
    padding-left: 24rem;
    padding-top: 0rem;
}

}

.card-body{
    width: 59%;
    margin: auto;
}

</style>

@include('includes.status')

<div id="STUDENT-DASHBOARD-REACT">
    <div class="MuiPaper-root MuiPaper-elevation0 jss305 jss312"><svg class="jss309 jss313" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="50,100 100,100 100,0"></polygon>
        </svg>
        <div class="jss343 jss307"><span class="MuiAvatar-root jss346 jss308 jss347-large" data-testid="avatar-root"><img src="/images/users/default/{{$user->image}}"
                  class="MuiAvatar-img"></span>
            <div>
                <h1 class="MuiTypography-root MuiTypography-h2 MuiTypography-displayBlock">{{$user->name}}</h1>
                <p class="MuiTypography-root MuiTypography-body2 MuiTypography-displayBlock">{{$user->email}}</p>
            </div>
        </div>
    </div>
</div>


<section id="userCourses" class="mentorshipStudent">
    <div class="grid-wrapper">
        <div class="grid-inner">
            <div class="mentorshipStudent__headWrapper">
                <div class="mentorshipStudent__studentContainer">
                    <h2>
                        Détails de l'étudiant
                    </h2>
                    <div class="mentorshipStudent__name mentorshipStudent__name--student">
                        <a href="/fr/membres/adib-legastelois" class="mentorshipStudent__avatarLink">
                            <i class="  avatar"
                              style="background-image: url(&quot;/images/users/default/{{$user->image}}&quot;);"></i><br>
                        </a>
                        <div style="font-size: 16px;" class="mentorshipStudent__nameDetails">
                            <a>
                                {{$user->name}}
                            </a>
                            <br>
                            <p style="font-size: 16px;" class="mentorshipStudent__studentEmail oc-typography-body2">{{$user->email}}</p>
                        </div>
                    </div>
                    @if(Auth::user()->isAdmin())
                    <div class="mentorshipStudent__details oc-typography-body1">
                        <form action="{{ route('users.destroy', $user) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button style="font-size: 12px;" class="button button--secondary button--compact searchField__button" type="submit" data-open-on-change="false" data-cancel-button="true" data-text-button="Retirer ce mentor"
                              data-message="Attention, retirer l'attribution de ce mentor va entraîner la suppression des éventuelles futures sessions de mentorat déjà programmées avec l'étudiant." data-force-width="480">
                                Supprimer cet utilisateur
                            </button>
                        </form>

                    </div>
                    @endif

                    @if(Auth::user()->isOwner() || Auth::user()->isAdmin() && Auth::user()->createSchools->contains($school->id) && !$user->isOwner())
                    <div class="mentorshipStudent__details oc-typography-body1">
                        <form action="/nameSchoolAdmin" method="post">
                            {{ csrf_field() }}
                            <input hidden type="text" name="school_id" value="{{$school->id}}">
                            <input hidden type="text" name="user_id" value="{{$user->id}}">
                            <button style="font-size: 12px;" class="button button--secondary button--compact searchField__button" type="submit" data-open-on-change="false" data-cancel-button="true" data-text-button="Retirer ce mentor"
                              data-message="Attention, retirer l'attribution de ce mentor va entraîner la suppression des éventuelles futures sessions de mentorat déjà programmées avec l'étudiant." data-force-width="480">
                                Nommer cet utilisateur admin de votre école
                            </button>
                        </form>

                    </div>
                    @endif

                    @if(Auth::user()->isOwner() || Auth::user()->isAdmin() && Auth::user()->createSchools->contains($school->id) && $user->isOwner())
                    <div class="mentorshipStudent__details oc-typography-body1">
                        <form action="/revokeSchoolAdmin" method="post">
                            {{ csrf_field() }}
                            <input hidden type="text" name="school_id" value="{{$school->id}}">
                            <input hidden type="text" name="user_id" value="{{$user->id}}">
                            <button style="font-size: 12px;" class="button button--secondary button--compact searchField__button" type="submit" data-open-on-change="false" data-cancel-button="true" data-text-button="Retirer ce mentor"
                              data-message="Attention, retirer l'attribution de ce mentor va entraîner la suppression des éventuelles futures sessions de mentorat déjà programmées avec l'étudiant." data-force-width="480">
                                Révoquer les droits d'administrateur de cet utilisateur
                            </button>
                        </form>

                    </div>
                    @endif
                </div>

            </div>

            <h2 class="secondTitle">
                Parcours
            </h2>
            @foreach($user->courses as $course)
                @if($course->type == "path" || $course->type == "bootcamp")
            <div id="user-path-48">
                <div class="MuiPaper-root MuiPaper-elevation1 MuiCard-root jss383 jss428 MuiPaper-rounded">
                    <div class="MuiCardContent-root jss457 jss427 jss417">
                        <div class="jss412">
                            <div class="jss419 jss459">
                                <div class="jss461 jss420 ">
                                    <div class="jss466 jss415" style="background-color: #fff;">
                                        <figure class="jss473 jss471 jss414  " style="background-image: url(&quot;/images/courses/logos/{{$course->logo}}&quot;);"></figure>
                                    </div>
                                    <div class="jss467 jss418"><span class="MuiTypography-root jss463 MuiTypography-overline MuiTypography-displayBlock" style="color: rgb(0, 131, 143);">{{$course->category->name}}</span>
                                        <a
                                          class="MuiTypography-root jss465 MuiTypography-h4 MuiTypography-displayInline" href="/path/{{$course->slug}}">{{$course->name}}</a>
                                        <div class="jss464"></div>
                                        <p class="MuiTypography-root jss460 jss409 MuiTypography-body1 MuiTypography-displayBlock"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="dashboardTable space-bottom" id="list-path-followed">
                <thead>
                    <tr class="dashboardTable__header">
                        <th>
                            #
                        </th>
                        <th class="text-left">
                            Projets
                        </th>

                        <th>
                            Statut
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($course->projects as $project)
                    <tr class="dashboardTable__projectWorkInProgress">
                        <td class="">
                            {{$loop->index + 1}}
                        </td>
                        <td class="text-left ">
                            <a>{{$project->title}}</a>
                        </td>

                        <td class="">
                            @if(count($user->deliverables->where('user_id', Auth::user()->id)->where('project_id', $project->id)) > 0)
                            @if($user->deliverables->where('project_id', $project->id)->first()->status == '0')
                            <span style="background-color: #DC4F2F;" class="response">
                                A retravailler
                            </span>
                            @elseif($user->deliverables->where('project_id', $project->id)->first()->status == '1')
                            <span style="background-color: green;" class="response">
                                Validé
                            </span>
                            @else
                            Aucune note pour le moment
                            @endif
                            @else
                            Aucune note pour le moment
                            @endif
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
            @endif
            @endforeach
            <h2 class="secondTitle">
                Cours
            </h2>
            <table class="dashboardTable space-bottom" id="list-course-followed">
                <thead>
                    <tr class="dashboardTable__header">
                        <th class="text-left">
                            Cours
                        </th>
                        <th class="dashboardTable__infoSecondary">
                            Inscription
                        </th>
                        <th class="dashboardTable__headProgress">
                            Progression
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($user->courses as $course)
                        @if($course->type == "mooc")
                        @if(count($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id))> 0)
                    <tr>
                        <td class="text-left">
                            <a class="dashboardTable__link">
                                {{$course->name}}
                            </a>
                        </td>
                        <td class="dashboardTable__infoSecondary">
                            {{Carbon\Carbon::parse($user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->first()->date)}}
                        </td>
                        <td class="dashboardTable__progressBar">
                            <div class="progressbar ">
                                <div class="progressbar__rate">
                                    {{number_format((count($user->lessons->where('course_id', $course->id)) / count($course->lessons)) * 100)}}%
                                </div>
                                <div class="progressbar__barWrapper">
                                    <div class="progressbar__bar" style="width: {{number_format((count($user->lessons->where('course_id', $course->id)) / count($course->lessons)) * 100)}}%"></div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    @endif
                    @endif
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>
</section>


@endsection
