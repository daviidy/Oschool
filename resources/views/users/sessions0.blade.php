@extends('layouts.menu-dashboard-user')
@section('title', 'Mes sessions')

@section('content')

<!--for user infos-->

<style media="screen">
.link_ a{
      text-decoration: none !important;
    }
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
    width: 100%;
    padding-left: 27rem;
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
    width: 100%;
    padding-left: 28rem;
    padding-top: 0rem;
}

}

</style>

<!--pour le popup preview-->

    <style media="screen">
    /*! CSS Used from: http://localhost:8000/css/admin/menu-school.css */
    @media screen{
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
    .tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
    .tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
    .tch-btn-header-primary:active{background-image:none;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .text-center{text-align:center;}
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
    .tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
    .tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
    .tch-btn-header-primary:active{background-image:block;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
    .tch-btn-header-primary{color:white;background-color:#ff7f45;border:1px solid #ff7f45;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
    .tch-btn-header-primary:focus{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:hover{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active{color:white;background-color:#ff6621;border-color:#ff5f17;}
    .tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#ff5103;border-color:#f84d00;}
    .tch-btn-header-primary:active{background-image:none;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .modal.fade .modal-dialog{-webkit-transform:translate(0, -25%);transform:translate(0, -25%);-webkit-transition:-webkit-transform 0.3s ease-out;transition:-webkit-transform 0.3s ease-out;transition:transform 0.3s ease-out;transition:transform 0.3s ease-out, -webkit-transform 0.3s ease-out;}
    .modal.in .modal-dialog{-webkit-transform:translate(0, 0);transform:translate(0, 0);}
    .modal-dialog{position:relative;width:auto;margin:10px;}
    .modal-content{position:relative;background-color:#f7f7f7;background-clip:padding-box;border:1px solid #999;border:1px solid #e9e9ea;border-radius:6px;-webkit-box-shadow:0 3px 9px rgba(0, 0, 0, .5);box-shadow:0 3px 9px rgba(0, 0, 0, .5);outline:0;}
    .modal-body{position:relative;padding:15px;}
    .modal-footer{padding:15px;text-align:right;border-top:1px solid #e9e9ea;}
    .modal-footer:before,.modal-footer:after{display:table;content:" ";}
    .modal-footer:after{clear:both;}
    @media (min-width: 768px){
    .modal-dialog{width:624px;margin:30px auto;}
    .modal-content{-webkit-box-shadow:0 5px 15px rgba(0, 0, 0, .5);box-shadow:0 5px 15px rgba(0, 0, 0, .5);}
    }
    .tch-btn-header-primary{color:white;background-color:#4D90CC;border:1px solid #4D90CC;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
    .tch-btn-header-primary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active{background-image:none;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .modal-dialog{display:inline-block;text-align:left;vertical-align:middle;-webkit-animation:fadeIn 0.2s ease-out;animation:fadeIn 0.2s ease-out;-webkit-perspective:1000;perspective:1000;}
    .modal .tch-btn-header-primary{font-size:13px;}
    .modal-content{border-radius:7px;background-color:#fff!important;background-clip:padding-box;-webkit-box-shadow:0px 0px 10px -2px #2a2a2a;box-shadow:0px 0px 10px -2px #2a2a2a;border-radius:4px;padding:50px 50px;}
    .modal-body{padding:20px 45px 0px 45px;background:#fff;border-radius:5px;}
    .modal-footer{padding:20px 0px 40px;margin-top:0;background-color:#fff;border-top:none;border-radius:0 0 7px 7px;text-align:center;}
    .modal-footer .tch-btn-header-primary{margin:0px 5px;}
    @media (min-width: 768px){
    .modal-dialog{width:624px;margin:30px auto;}
    .modal-content{-webkit-box-shadow:0px 0px 10px -2px #2a2a2a;box-shadow:0px 0px 10px -2px #2a2a2a;}
    }
    @media (min-width: 0px) and (max-width: 767px){
    .modal-dialog{width:90%!important;}
    }
    .text-center{text-align:center;}
    .row{margin-right:-15px;margin-left:-15px;}
    .row:before,.row:after{display:table;content:" ";}
    .row:after{clear:both;}
    .col-xs-5,.col-sm-5,.col-md-5{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
    .col-xs-5{float:left;}
    .col-xs-5{width:41.66667%;}
    @media (min-width: 768px){
    .col-sm-5{float:left;}
    .col-sm-5{width:41.66667%;}
    }
    @media (min-width: 992px){
    .col-md-5{float:left;}
    .col-md-5{width:41.66667%;}
    }
    .tch-btn-header-primary{color:white;background-color:#6aace6;border:1px solid #6aace6;padding:10px 16px!important;font-size:17px;line-height:1.33333;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;min-width:140px;padding-left:30px!important;padding-right:30px!important;max-width:570px;padding:8px 20px 7px 20px!important;font-size:12px;line-height:1.72222;border-radius:3px;font-weight:600!important;display:inline-block;cursor:pointer;font-weight:600;border-radius:30px!important;text-align:center;}
    .tch-btn-header-primary:focus{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:hover{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active{color:white;background-color:#4D90CC;border-color:#4D90CC;}
    .tch-btn-header-primary:active:hover,.tch-btn-header-primary:active:focus{color:white;background-color:#6aace6;border-color:#6aace6;}
    .tch-btn-header-primary:active{background-image:none;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    .tch-btn-header-primary:focus{outline:0!important;}
    p{margin:0 0 11px;font-size:13px;letter-spacing:0.4px;}
    .text-center{text-align:center;}
    .tch-thumbnail-link-wrapper{margin-right:20px;max-width:220px;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link{display:block;line-height:16px;color:#47505e;font-size:12px;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link strong{font-weight:600;letter-spacing:0.8px;color:#4D90CC;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link i.fa{font-size:20px;left:75%;opacity:0;position:absolute;top:12%;background:#fff;padding:0px 3px;border-radius:3px;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link:hover{color:#6aace6;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link:hover strong{color:#4D90CC;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link:hover i.fa{opacity:1;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link img{margin-bottom:15px;width:100%;}
    .tch-thumbnail-link-wrapper .tch-thumbnail-link .muted{color:#ababab;font-size:12px;line-height:24px;font-family:"TeachableSans";}
    }
    }
    </style>


<!--new appel design-->
<style media="screen">
/*! CSS Used from: https://joincodingnow.com/assets/application-5b430a7741d2abe8e61fd8bc38a0fb79f930d21794567d8ede896891363d6b70.css ; media=all */
@media all{
.fas,.far{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
.fa-circle:before{content:"\f111";}
.fa-long-arrow-right:before{content:"\f178";}
.far{font-family:'Font Awesome 5 Pro';font-weight:400;}
.fas{font-family:'Font Awesome 5 Pro';font-weight:900;}
*,*::before,*::after{box-sizing:border-box;}
h5{margin-top:0;margin-bottom:0.5rem;}
a{color:#BF9000;text-decoration:none;background-color:transparent;}
a:hover{color:#735600;text-decoration:underline;}
h5{margin-bottom:0.5rem;font-weight:500;line-height:1.2;}
h5{font-size:1.25rem;}
.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;border-radius:0.25rem;-webkit-transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.btn{-webkit-transition:none;transition:none;}
}
.btn:hover{color:#212529;text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 0.2rem rgba(191,144,0,0.25);}
.btn:disabled{opacity:0.65;}
.card{position:relative;display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,0.125);border-radius:0.4rem;}
.card-body{-webkit-box-flex:1;flex:1 1 auto;padding:1.25rem;}
.border-0{border:0!important;}
@media (min-width: 992px){
.d-lg-flex{display:-webkit-box!important;display:flex!important;}
}
.flex-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;flex-direction:row!important;}
.align-items-center{-webkit-box-align:center!important;align-items:center!important;}
.shadow{box-shadow:0 0.5rem 1rem rgba(0,0,0,0.15)!important;}
.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;pointer-events:auto;content:"";background-color:rgba(0,0,0,0);}
.mr-0{margin-right:0!important;}
.mb-0{margin-bottom:0!important;}
.mt-2{margin-top:0.5rem!important;}
.my-3{margin-top:1rem!important;}
.my-3{margin-bottom:1rem!important;}
.ml-auto{margin-left:auto!important;}
@media (min-width: 992px){
.mt-lg-0{margin-top:0!important;}
.mr-lg-2{margin-right:0.5rem!important;}
}
.text-center{text-align:center!important;}
.text-success{color:#28a745!important;}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
}
.btn-primary-inverted{color:#BF9000;background-color:#f2e9cc;border-color:transparent;}
.btn-primary-inverted:hover{color:#BF9000;background-color:#eadcae;border-color:transparent;}
.btn-primary-inverted:focus{box-shadow:0 0 0 0.2rem rgba(167,128,6,0.5);}
.btn-primary-inverted:disabled{color:#BF9000;background-color:#f2e9cc;border-color:transparent;}
*{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
a{-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
@media (prefers-reduced-motion: reduce){
a{-webkit-transition:none;transition:none;}
}
h5{font-family:"Montserrat", sans-serif;-webkit-hyphens:none;-ms-hyphens:none;hyphens:none;font-weight:600;}
.btn{font-family:"Montserrat", sans-serif;font-weight:600;}
::-moz-selection{background:#BF9000;color:#fff;}
::selection{background:#BF9000;color:#fff;}
}

</style>


<!--style header appel-->
<style media="screen">
/*! CSS Used from: https://joincodingnow.com/assets/application-5b430a7741d2abe8e61fd8bc38a0fb79f930d21794567d8ede896891363d6b70.css ; media=all */
@media all{
*,*::before,*::after{box-sizing:border-box;}
h4{margin-top:0;margin-bottom:0.5rem;}
p{margin-top:0;margin-bottom:1rem;}
a{color:#BF9000;text-decoration:none;background-color:transparent;}
a:hover{color:#735600;text-decoration:underline;}
h4{margin-bottom:0.5rem;font-weight:500;line-height:1.2;}
h4{font-size:1.5rem;}
@media (max-width: 1200px){
h4{font-size:calc(1.275rem + 0.3vw);}
}
.row{display:-webkit-box;display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-12{position:relative;width:100%;padding-right:15px;padding-left:15px;}
.col-12{-webkit-box-flex:0;flex:0 0 100%;max-width:100%;}
.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;border-radius:0.25rem;-webkit-transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.btn{-webkit-transition:none;transition:none;}
}
.btn:hover{color:#212529;text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 0.2rem rgba(191,144,0,0.25);}
.btn:disabled{opacity:0.65;}
.card{position:relative;display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,0.125);border-radius:0.4rem;}
.card-body{-webkit-box-flex:1;flex:1 1 auto;padding:1.25rem;}
.card-header{padding:0.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,0.03);border-bottom:1px solid rgba(0,0,0,0.125);}
.card-header:first-child{border-radius:calc(0.4rem - 1px) calc(0.4rem - 1px) 0 0;}
.bg-light{background-color:#f8f9fa!important;}
.border-0{border:0!important;}
.shadow{box-shadow:0 0.5rem 1rem rgba(0,0,0,0.15)!important;}
.mb-0{margin-bottom:0!important;}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
p{orphans:3;widows:3;}
}
.btn-primary-inverted{color:#BF9000;background-color:#f2e9cc;border-color:transparent;}
.btn-primary-inverted:hover{color:#BF9000;background-color:#eadcae;border-color:transparent;}
.btn-primary-inverted:focus{box-shadow:0 0 0 0.2rem rgba(167,128,6,0.5);}
.btn-primary-inverted:disabled{color:#BF9000;background-color:#f2e9cc;border-color:transparent;}
*{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
a{-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
@media (prefers-reduced-motion: reduce){
a{-webkit-transition:none;transition:none;}
}
h4{font-family:"Montserrat", sans-serif;-webkit-hyphens:none;-ms-hyphens:none;hyphens:none;font-weight:600;}
.btn{font-family:"Montserrat", sans-serif;font-weight:600;}
::-moz-selection{background:#BF9000;color:#fff;}
::selection{background:#BF9000;color:#fff;}
}

</style>



<!--on vérifie si l'utilisateur est inscrit à au moins une école-->
    @if(count(Auth::user()->schools) > 0)




<section id="userCourses" class="mentorshipStudent">



  {{--

      <h1>Mes Sessions</h1>
            <div class="grid-wrapper">
                <div class="grid-inner">

                    <table class="dashboardTable space-bottom" id="list-path-followed">
                        <thead>
                            <tr class="dashboardTable__header">
                                <th>
                                    #
                                </th>
                                <th class="text-left">
                                    Date et Heure
                                </th>

                                <th class="text-center">
                                    Lien de la session
                                </th>
                                <th class="text-center">
                                    Animateur
                                </th>
                                <th class="text-center">
                                    Commentaire
                                </th>
                                <th class="text-center">
                                	Statut
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                        	<!--si oui, pour chaque école dans laquelle il est inscrit-->
            @foreach(Auth::user()->schools as $school)
                <!--on parcourt chaque session de cette école-->
                @if(count($school->classrooms) > 0)
                          @foreach($school->classrooms as $classroom)
                          <!--On affiche la session programé-->

                          <!--met ici le code HTML pour les infos-->

                            <tr class="dashboardTable__projectWorkInProgress">
                                <td class="">
                                    {{$loop->index + 1}}
                                </td>
                                <td class="text-left ">
                                    {{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }}
                                </td>

                                <td class="link_">
                                  <a href="{{$classroom->link}}">Clique et suit la session</a>

                                </td>

                                <td class="">
                                    {{$classroom->teacher->name}}
                                </td>

                                <td class="link_">
                                  @if($classroom->comment)
                                    <a href="#ex{{$classroom->id}}" rel="modal:open">
                                            Voir le commentaire du professeur
                                    </a>
                                    @endif

                                </td>
                                @if($classroom->statut =="Annulée")
                                <td style="color: #ff00003b; font-weight: bold;">
                                	Annulée
                                </td>
                                @elseif($classroom->statut =="Réalisée")
                                <td style="color: #4fcc4d3b; font-weight: bold;">
                                	Réalisée
                                </td>
                                @else
                                <td style="font-weight: bold;">
                                	Planifiée
                                </td>
                                @endif
                            </tr>


                            @endforeach
                            @endif
                    		@endforeach

                        </tbody>
                    </table>


                </div>
            </div>

            --}}


            <div style="width: 80%;margin: auto;margin-top: 2rem;" class="card shadow border-0">
              <div class="card-header bg-light border-0">
                  <h4 style="font-size: 3rem" class="mb-0">Mes appels hebdomadaires</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-12">
                          <p style="font-size: 1.5rem;">
                              Retrouvez ci-dessous la liste des anciens appels hebdomadaires.
                          </p>
                          @if(count(Auth::user()->classrooms) < 6)
                          @foreach(Auth::user()->schools as $school)
                          @if(count($school->classrooms) > 0)
                          @if($school->classrooms->where('statut', null) && !$school->classrooms->where('statut', null)->last()->users->contains(Auth::user()->id))
                          <a style="font-size: 1.5rem;text-decoration: none;" class="btn btn-primary-inverted" href="/classrooms/{{$school->classrooms->where('statut', null)->last()->id}}/subscribeToClassroom">Participer au prochain appel hebdomadaire pour le cours {{$school->classrooms->where('statut', null)->last()->courses->first()->name}} ({{ Carbon\Carbon::parse($school->classrooms->where('statut', null)->last()->date)->format('d-m-Y H:i') }})</a>
                          @else
                          <a style="font-size: 1.5rem;text-decoration: none;" class="btn btn-primary-inverted">Votre prochain appel hebdomadaire a lieu ce {{ Carbon\Carbon::parse($school->classrooms->where('statut', null)->last()->date)->format('d-m-Y H:i') }}</a>
                          @endif
                          @endif
                          @endforeach
                          @endif
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-12">
            <div style="margin: 4rem auto;width: 80%;" class="card shadow border-0 mb-3">
                <div class="card-header bg-light border-0">
                    <h4 style="font-size: 2rem;" class="mb-0">Appels hebdomadaires</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <p style="font-size: 1.5rem;">
                                Les appels hebdomadaires sont organisés dans le but de <strong>à réaliser les parcours de votre projet</strong>.<br>
                                <br>
                                Il s'agit d'un échange de <strong>questions / réponses</strong> avec vos mentors.<br>
                                <br>
                                Vous pouvez participer en posant vos questions ou simplement en écoutant passivement les conversations.<br><br>
                                Vous avez <strong>6 appels</strong> pour chacun des parcours dans lesquels vous êtes inscrits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            @foreach(Auth::user()->schools as $school)
                <!--on parcourt chaque session de cette école-->
                @if(count($school->classrooms) > 0)
                          @foreach($school->classrooms as $classroom)

            <div style="width: 80%;margin: auto;" class="card shadow border-0 my-3">
              <div class="card-body d-lg-flex flex-row align-items-center">
                  <h5 class="mb-0 mr-0 mr-lg-2 text-center text-success">
                      <i class="fa fa-circle"></i>
                  </h5>
                  <h5 style="font-size: 2.25rem;" class="mb-0">
                      {{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }}
                  </h5>
                  @if(Carbon\Carbon::parse($classroom->date) < Carbon\Carbon::now() && $classroom->users->contains(Auth::user()->id))
                  <!--
                  <a style="font-size: 2rem;text-decoration: none;" href="#ex{{$classroom->id}}" rel="modal:open" class="btn btn-primary-inverted stretched-link mt-2 mt-lg-0 ml-auto">
                      Participer <i class="fa fa-arrow-right"></i>
                  </a>
              -->
              <a style="font-size: 2rem;text-decoration: none;" href="{{$classroom->link}}" target="_blank" class="btn btn-primary-inverted stretched-link mt-2 mt-lg-0 ml-auto">
                  Participer <i class="fa fa-arrow-right"></i>
              </a>
                  @elseif($classroom->users->contains(Auth::user()->id))
                  <a style="font-size: 2rem;text-decoration: none;" class="btn btn-primary-inverted stretched-link mt-2 mt-lg-0 ml-auto">
                      A venir <i class="fa fa-arrow-right"></i>
                  </a>
                  @else
                  <a href="/classrooms/{{$classroom->id}}/subscribeToClassroom" style="font-size: 2rem;text-decoration: none;" class="btn btn-primary-inverted stretched-link mt-2 mt-lg-0 ml-auto">
                      Participer <i class="fa fa-chalkboard-teacher"></i>
                  </a>
                  @endif
              </div>
          </div>

          @endforeach
          @endif
          @endforeach




              <!-- Modal HTML embedded directly into document -->
               @foreach($school->classrooms as $classroom)
              <div id="ex{{$classroom->id}}" class="modal">
                <h2 style="text-align: center; color: #4d90cc">Voir les commentaires du professeur</h2>
                <br><br>
                {!!$classroom->comment!!}
                <!--a href="#" rel="modal:close">Close</a-->
              </div>
              @endforeach






{{--
              <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/yaodavidarmel/rendez-vous-oschool-university" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->
--}}


</section>
@endif

@endsection
