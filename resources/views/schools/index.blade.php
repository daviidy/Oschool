@extends('layouts.menu-schools-oschool')
@section('title', 'Nos écoles')

@section('content')

<style media="screen">
/*! CSS Used from: https://www.educative.io/static/css/89.3705e7dd.chunk.css */
a{background-color:initial;}
a:active,a:hover{outline:0;}
img{border:0;}
svg:not(:root){overflow:hidden;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
*,:after,:before{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
svg:not(:root).svg-inline--fa{overflow:visible;}
.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-0.125em;}
.svg-inline--fa.fa-w-6{width:0.375em;}
img{max-width:100%;}
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.bhzjht{overflow:hidden;display:inline-block;border-radius:100%;transition:all 0.2s ease 0s;width:20px;height:23px;}
.bhzjht img{object-fit:cover;vertical-align:inherit;}
.bhzjht:hover{box-shadow:rgba(0, 0, 0, 0.2) 0px 0px 12px;}
.bhzjht img{width:20px;height:20px;}
.bhzjht:hover{box-shadow:none;}
.jYTzSj{display:flex;position:relative;overflow:hidden;flex-direction:row;width:100%;height:auto;}
.dvWMkL{position:absolute;pointer-events:none;width:100%;height:100%;z-index:1;background-image:linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgb(255, 255, 255));}
.fWefjR{display:flex;-webkit-box-pack:start;justify-content:flex-start;align-items:flex-start;width:100%;height:100%;overflow:auto;padding:0px 10px;flex-direction:row;}
.fWefjR::-webkit-scrollbar{display:none;}
.fWefjR a:nth-child(1){margin-left:0px;}
.fWefjR div:nth-child(1){margin-left:0px;}
@media screen and (max-width: 590px){
.fWefjR{-webkit-box-align:center;align-items:center;}
}
.yEqKS{font-size:30px;color:rgb(241, 241, 255);transition:all 0.2s ease 0s;}
.yEqKS:hover{cursor:pointer;color:rgb(85, 83, 255);}
.iIsjSf{font-size:30px;color:rgb(241, 241, 255);transition:all 0.2s ease 0s;}
.iIsjSf:hover{cursor:pointer;color:rgb(85, 83, 255);}
.kTgzct{display:flex;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;min-height:50px;width:auto;z-index:2;height:auto;min-width:50px;}
@media screen and (max-width: 590px){
.kTgzct{min-width:30px;}
}
.hoHWfD{color:rgb(0, 0, 0);margin-top:2px;font-size:12px;text-align:center;margin-left:5px;transition:all 0.2s ease 0s;}
.hoHWfD:hover{color:rgb(85, 83, 255);}
.feiHSd{border-radius:99px;color:#4d90cc;background-color:rgb(255, 255, 255);border:1px solid #4d90cc;font-size:14px;font-weight:900;text-align:center;padding:12px 33px 10px;transition:all 0.2s ease 0s;margin:15px 0px;width:195px;}
.feiHSd:hover,.feiHSd:focus{background:#4d90cc;color:rgb(255, 255, 255);outline:none;}
.feiHSd:hover,.feiHSd:focus{transform:scale(1.05);}
.fIjoWc{width:310px;min-width:310px;margin:24px 16px;border-radius:16px;transition:all 0.2s ease 0s;cursor:pointer;display:flex;box-shadow:rgb(229, 229, 229) 0px 4px 0.9em;background:rgb(255, 255, 255);-webkit-box-align:center;align-items:center;padding-bottom:15px;flex-direction:column;}
.fIjoWc:focus{text-decoration:none;color:rgb(0, 0, 0);}
.fIjoWc:hover{box-shadow:rgb(229, 229, 229) 0px 4px 1.8em;}
.eytTen{background:url(https://lh3.googleusercontent.com/i_OMyKYBHPbN7xg8e-lEYjO9r4MXclbETUQIJ7-7vxxoOb4mrzm7g1wN0f9w9zO2URyj_2rn_oshEz1D-l8tfer8e9oD9Po=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.jRnmqO{-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.cvhgkw{background:url(https://lh3.googleusercontent.com/SuvG74WQZgJeA4D2vaxnWzm3ToBpf73TARlz6obnlWSGBKpkOxj7NjNnuLWmus4QtEJOBJSDDSeIGc6keDYQD9VJnfxlLw=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.dWVIST{background:url(https://lh3.googleusercontent.com/ruaDSKYwAWyq-6WksXV_PdmnvCEb-JLj3l3yHs7efR4KxTyctZmLAnSgSn8bHtx8HgTSD56X3ZO7WpfbL7C_X7_lanuTkw=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.gZXdQD{background:url(https://lh3.googleusercontent.com/u1TVYSzDzgmwR3yk0PWskiBY5bEIBWFxBXDPGh5o7xuoHJy2Rs8Yf7sGlPAmlRKQMVdTi6RYipchJQGopxQ0zBJyoe2BoA=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.fcsdqg{background:url(https://lh3.googleusercontent.com/MrIWSn0TPBUZVN5PWdG8Bw4oZO6ea7217qA7ffzxJM6ODhQrf8XxoChKMSQ3X1uUCpervP-UHpB7BXnKFxWvw0ZmxQuz7XY=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.cYibiD{background:url(https://lh3.googleusercontent.com/A8Q679wdNxk8QXWe6EclzpYwqBlI_-NUpKaT79DzSeGyZfp0Ce4BxRl6v4oUgWDmS2G9va9jFjjcmq3cLdroxIXX2pka8Q=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.halYso{background:url(https://lh3.googleusercontent.com/CY2nyPkyEV8YdeWMl8njpWtZUc2Qb9Z5AXC4hCR21_aikeuiKLQA6qlgkXfcTGnD_oIUm-OhTum_4alkHauxYN_EQJqP8A=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.iBcGgu{background:url(https://lh3.googleusercontent.com/2NY0vGPU6GwMtBB1eR6WX220abb9EKZs28W8BbdZ6vRE7dCqJVX9VJLqfbIzc_q_PwfNsTdYtNZYrYbCKW89UMEIW5uM=s620) center center / cover no-repeat;-webkit-box-align:center;align-items:center;margin:0px 0px 10px;min-width:150px;display:inline-block;height:140px;width:100%;border-radius:16px 16px 0px 0px;text-align:right;}
.bAldwA{background-color:rgb(80, 204, 47);padding:4px 13px 2px;border-radius:99px;color:rgb(255, 255, 255);border:2px solid rgb(255, 255, 255);font-weight:900;font-size:18px;box-shadow:rgba(0, 0, 0, 0.2) 0px 2px 8px;margin-top:15px;margin-right:15px;}
.bAldwA:hover,.bAldwA:focus{outline:none;transform:scale(1.05);transition:all 0.2s ease 0s;}
.csuynr{font-size:18px;text-align:center;font-weight:900;overflow-wrap:break-word;width:70%;margin:10px 0px 0px;}
.hfoAcr{display:flex;flex-direction:row;-webkit-box-align:center;align-items:center;overflow-wrap:break-word;-webkit-box-pack:center;justify-content:center;margin:0px;}
@media (min-width: 780px){
.hfoAcr{order:initial;}
}
.iJUnuo{display:flex;font-size:12px;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;color:#4d90cc;text-transform:uppercase;width:max-content;margin-top:15px;padding:12px 20px;align-self:center;}
.iJUnuo svg{margin-right:5px;}
.jTmokI{display:flex;-webkit-box-align:center;align-items:center;margin:15px 0px 0px 10px;font-size:12px;-webkit-box-pack:start;justify-content:flex-start;color:rgb(85, 83, 255);text-transform:uppercase;width:max-content;padding:12px 20px;align-self:center;}
.jTmokI svg{margin-right:5px;}
.jTmokI svg{width:20px;}
.lbOwDv{text-decoration:line-through;font-size:14px;margin-right:7px;font-weight:400;}
.eeoPuI{display:flex;flex:0 1 auto;-webkit-box-align:center;align-items:center;flex-direction:row;min-height:150px;margin:24px 16px;box-shadow:rgb(229, 229, 229) 0px 4px 0.9em;border-radius:16px;position:relative;transition:all 0.2s ease 0s;cursor:pointer;}
.eeoPuI:focus{text-decoration:none;color:rgb(0, 0, 0);}
.eeoPuI:hover{box-shadow:rgb(229, 229, 229) 0px 4px 1.8em;}
@media (max-width: 480px){
.eeoPuI{min-height:180px;}
}
.hUQwWQ{height:150px;width:100px;flex:0 0 auto;border-top-left-radius:16px;border-bottom-left-radius:16px;background:url(https://www.educative.io/api/track/become-ml-engineer/image/4928816277356544ml-tracl-rectangle.png) center center / cover no-repeat;display:flex;-webkit-box-align:center;align-items:center;}
@media (max-width: 480px){
.hUQwWQ{width:60px;height:180px;}
}
.JzHwu{height:150px;width:100px;flex:0 0 auto;border-top-left-radius:16px;border-bottom-left-radius:16px;background:url(https://www.educative.io/udata/w6QqmrVq642/beginning_front_end_1.png) center center / cover no-repeat;display:flex;-webkit-box-align:center;align-items:center;}
@media (max-width: 480px){
.JzHwu{width:60px;height:180px;}
}
.edTKou{height:150px;width:100px;flex:0 0 auto;border-top-left-radius:16px;border-bottom-left-radius:16px;background:url(https://www.educative.io/udata/nWdOrbYG29Y/advanced_react_1.png) center center / cover no-repeat;display:flex;-webkit-box-align:center;align-items:center;}
@media (max-width: 480px){
.edTKou{width:60px;height:180px;}
}
.dxdJun{display:flex;flex-direction:column;width:210px;height:150px;}
@media (max-width: 480px){
.dxdJun{width:160px;height:180px;}
}
.hWBOVW{font-size:18px;font-weight:900;overflow-wrap:break-word;padding:15px 10px 0px 15px;display:-webkit-box;-webkit-box-pack:center;justify-content:center;overflow:hidden;-webkit-box-orient:vertical;-webkit-line-clamp:2;width:100%;}
@media (max-width: 480px){
.hWBOVW{width:100%;-webkit-line-clamp:3;}
}
.jxYMUV{display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;width:100%;height:50px;border-top:1px solid rgb(210, 210, 214);margin-top:auto;}
.dBWgdV{-webkit-box-pack:center;justify-content:center;margin-top:0px;}
.hztfNk{align-self:center;width:100%;max-width:1100px;margin:20px auto;}
.hztfNk .my-masonry-grid{display:flex;-webkit-box-pack:center;justify-content:center;}
.hztfNk .my-masonry-grid_column{width:auto!important;}
@media (max-width: 780px){
.hztfNk .my-masonry-grid_column{margin:auto;}
}
.lgEkUi{border-radius:99px;border:1px solid rgb(85, 83, 255);font-size:14px;font-weight:900;text-align:center;padding:12px 33px 10px;transition:all 0.2s ease 0s;background:rgb(85, 83, 255);color:rgb(255, 255, 255);display:block;flex:inherit;margin:0px auto 20px auto;}
.lgEkUi:hover,.lgEkUi:focus{background:rgb(85, 83, 255);color:rgb(255, 255, 255);outline:none;}
.lgEkUi:hover,.lgEkUi:focus{border-color:rgb(35, 32, 204);background:rgb(35, 32, 204);}
.lgEkUi:hover,.lgEkUi:focus{transform:scale(1.05);}
.eElMjg{display:flex;flex-flow:row wrap;flex:1 0 auto;-webkit-box-pack:start;justify-content:flex-start;padding:30px 75px;font-size:30px;color:rgb(91, 91, 106);}
.eElMjg svg{stroke-width:1.5px;margin-right:20px;width: 40px}
@media (max-width: 480px){
.eElMjg{-webkit-box-pack:center;justify-content:center;padding:20px 0px;}
}
.hvLLOk{display:flex;margin-left:auto;-webkit-box-align:center;align-items:center;font-size:14px;color:rgb(85, 83, 255);padding:0px 25px;transition:all 0.2s ease 0s;}
.hvLLOk:hover{color:rgb(35, 32, 204);zoom:101%;}
@media (max-width: 480px){
.hvLLOk{margin:20px auto 0px;}
}
.edxLBz{display:flex;font-size:1.5rem;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;margin-left:auto;width:20%;height:40px;}
@media (max-width: 480px){
.edxLBz{flex-basis:100%;margin-top:25px;}
}
.jfQMxJ{font-weight:900;text-align:center;transition:all 0.2s ease 0s;padding:8px 0px;font-size:12px;border:1px solid rgb(85, 83, 255);width:50%;height:40px;cursor:pointer;border-radius:99px 0px 0px 99px;color:rgb(241, 241, 255);background-color:rgb(85, 83, 255);}
.jfQMxJ:hover,.jfQMxJ:focus{background:rgb(85, 83, 255);color:rgb(255, 255, 255);outline:none;}
@media (max-width: 480px){
.jfQMxJ{width:25%;}
}
.dqIQNG{font-weight:900;text-align:center;transition:all 0.2s ease 0s;padding:8px 0px;font-size:12px;color:rgb(85, 83, 255);background-color:rgb(250, 250, 250);border:1px solid rgb(85, 83, 255);width:50%;height:40px;cursor:pointer;border-radius:0px 99px 99px 0px;}
.dqIQNG:hover,.dqIQNG:focus{background:rgb(85, 83, 255);color:rgb(255, 255, 255);outline:none;}
.dqIQNG:hover{background-color:rgb(241, 241, 255);color:rgb(85, 83, 255);}
@media (max-width: 480px){
.dqIQNG{width:25%;}
}

.navbar-fedora {
    background-color: black;
    top: 50px; for timer*/
}
.navbar-fixed-top {
    top: 30px!important;for timer*/
    border-width: 0 0 1px;
    position: relative!important;
    margin-bottom: 0px!important;
}
</style>

<!--pour style mindvalley-->
<style media="screen">
/*! CSS Used from: https://www.mindvalley.com/assets/mv-global.css */
a{background-color:transparent;}
*{box-sizing:border-box;}
::after,::before{box-sizing:inherit;}
::selection{background-color:#B3F3FF;}
::-moz-selection{background-color:#B3F3FF;}
[data-whatintent='mouse'] *:focus{outline:none;}
:focus{outline:thin solid #003FFF;outline-offset:.25rem;}
a{color:inherit;text-decoration:inherit;}
p{font-family:"Noto Sans",sans-serif;margin-top:0;margin-bottom:1.25rem;}
h4,p{font-family:inherit;font-weight:inherit;}
/*! CSS Used from: https://www.mindvalley.com/assets/home-june-2018.css */
.px-0-force{padding-right:0!important;padding-left:0!important;}
@media (max-width: 768px){
.container{padding-left:15px;padding-right:15px;}
}
@media (max-width: 992px){
.flex-to-scroll-container{display:flex;overflow-x:auto;-webkit-overflow-scrolling:touch;-webkit-scroll-snap-points-x:repeat(300px);-ms-scroll-snap-points-x:repeat(300px);scroll-snap-points-x:repeat(300px);-webkit-scroll-snap-type:mandatory;-ms-scroll-snap-type:mandatory;scroll-snap-type:mandatory;}
}
.flex-to-scroll-item{flex-shrink:0;scroll-behavior:smooth;}
.flex-to-scroll-container{-ms-overflow-style:none;overflow:-moz-scrollbars-none;}
.flex-to-scroll-container::-webkit-scrollbar{display:none;}
.transitions-100ms{-webkit-transition:all 100ms linear;-moz-transition:all 100ms linear;-o-transition:all 100ms linear;-ms-transition:all 100ms linear;transition:all 100ms linear;}
/*! CSS Used from: https://static.mindvalley.com/global/mv-style-min.css */
h4{font-weight:normal;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4,p{margin:0;}
*,*::before,*::after{border-width:0;border-style:solid;border-color:#f5f4f4;}
.container{width:100%;margin-right:auto;margin-left:auto;}
@media (min-width: 576px){
.container{max-width:576px;}
}
@media (min-width: 768px){
.container{max-width:768px;}
}
@media (min-width: 992px){
.container{max-width:992px;}
}
@media (min-width: 1200px){
.container{max-width:1200px;}
}
.bg-cover{background-size:cover;}
.rounded{border-radius:.625rem;}
.flex{display:-webkit-box;display:-ms-flexbox;display:flex;}
.items-end{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;}
.font-gilroy-regular{font-family:Gilroy-Regular;}
.font-gilroy-bold{font-family:Gilroy-Bold;}
.h-96{height:24rem;}
.leading-normal{line-height:1.5;}
.mx-auto{margin-left:auto;margin-right:auto;}
.ml-2{margin-left:.5rem;}
.mt-4{margin-top:1rem;}
.px-2{padding-left:.5rem;padding-right:.5rem;}
.px-6{padding-left:1.5rem;padding-right:1.5rem;}
.pb-4{padding-bottom:1rem;}
.pb-8{padding-bottom:2rem;}
.relative{position:relative;}
.text-left{text-align:left;}
.text-center{text-align:center;}
.text-white{color:#fff;}
.text-base{font-size:2rem;}
.text-2xl{font-size:1.5rem;}
.w-80{width:20rem;}
.w-full{width:100%;}
.mv-button-blue{font-family:Gilroy-Bold;background-color:#4D90CC;color:#fff;border-radius:9999px;display:inline-block;padding-left:3rem;padding-right:3rem;padding-top:.75rem;padding-bottom:.75rem;padding-top:1rem;margin-top:2rem;text-decoration:none;}
.mv-button-blue:hover{background-color:#1d519f;}
@media (min-width: 768px){
.md\:shadow-lg{-webkit-box-shadow:0 15px 30px 0 rgba(0,0,0,0.11),0 5px 15px 0 rgba(0,0,0,0.08);box-shadow:0 15px 30px 0 rgba(0,0,0,0.11),0 5px 15px 0 rgba(0,0,0,0.08);}
.md\:text-3xl{font-size:2.875rem;}
}
@media (min-width: 992px){
.lg\:flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap;}
.lg\:h-128{height:32rem;}
.lg\:-mx-4{margin-top: 4rem;margin-left:-1rem;margin-right:-1rem;}
.lg\:px-4{padding-left:1rem;padding-right:1rem;}
.lg\:px-8{padding-left:2rem;padding-right:2rem;}
.lg\:pb-8{padding-bottom:2rem;}
.lg\:w-1\/3{width:33.33333%;}
}
/*! CSS Used fontfaces */
@font-face{font-family:'Noto Sans';src:url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.eot");src:url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.eot#iefix") format("embedded-opentype"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.woff2") format("woff2"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.woff") format("woff"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.ttf") format("truetype"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.svg#svgFontName") format("svg");}
@font-face{font-family:'Gilroy-Regular';src:url(https://www.mindvalley.com/assets/webfonts/35707B_6_0.eot);src:url("https://www.mindvalley.com/assets/webfonts/35707B_6_0.eot#iefix") format("embedded-opentype"),url(https://www.mindvalley.com/assets/webfonts/35707B_6_0.woff2) format("woff2"),url(https://www.mindvalley.com/assets/webfonts/35707B_6_0.woff) format("woff"),url(https://www.mindvalley.com/assets/webfonts/35707B_6_0.ttf) format("truetype");}
@font-face{font-family:'Gilroy-Regular';src:url("https://static.mindvalley.com/global/webfonts/35707B_6_0.eot");src:url("https://static.mindvalley.com/global/webfonts/35707B_6_0.eot#iefix") format("embedded-opentype"),url("https://static.mindvalley.com/global/webfonts/35707B_6_0.woff2") format("woff2"),url("https://static.mindvalley.com/global/webfonts/35707B_6_0.woff") format("woff"),url("https://static.mindvalley.com/global/webfonts/35707B_6_0.ttf") format("truetype");}
@font-face{font-family:'Gilroy-Bold';src:url(https://www.mindvalley.com/assets/webfonts/35707B_11_0.eot);src:url("https://www.mindvalley.com/assets/webfonts/35707B_11_0.eot#iefix") format("embedded-opentype"),url(https://www.mindvalley.com/assets/webfonts/35707B_11_0.woff2) format("woff2"),url(https://www.mindvalley.com/assets/webfonts/35707B_11_0.woff) format("woff"),url(https://www.mindvalley.com/assets/webfonts/35707B_11_0.ttf) format("truetype");}
@font-face{font-family:'Gilroy-Bold';src:url("https://static.mindvalley.com/global/webfonts/35707B_11_0.eot");src:url("https://static.mindvalley.com/global/webfonts/35707B_11_0.eot#iefix") format("embedded-opentype"),url("https://static.mindvalley.com/global/webfonts/35707B_11_0.woff2") format("woff2"),url("https://static.mindvalley.com/global/webfonts/35707B_11_0.woff") format("woff"),url("https://static.mindvalley.com/global/webfonts/35707B_11_0.ttf") format("truetype");}


/*! CSS Used from: https://www.mindvalley.com/assets/mv-global.css */
*{box-sizing:border-box;}
::after,::before{box-sizing:inherit;}
::selection{background-color:#B3F3FF;}
::-moz-selection{background-color:#B3F3FF;}
[data-whatintent='mouse'] *:focus{outline:none;}
:focus{outline:thin solid #003FFF;outline-offset:.25rem;}
p{font-family:"Noto Sans",sans-serif;margin-top:0;margin-bottom:1.25rem;}
p:last-child{margin-bottom:0;}
p{font-family:inherit;font-weight:inherit;}
/*! CSS Used from: https://www.mindvalley.com/assets/home-june-2018.css */
.before-green-dot:before{content:" ";background:#3BDB71;border-radius:50%;width:.60rem;height:.60rem;display:inline-block;margin-right:10px;}
/*! CSS Used from: https://static.mindvalley.com/global/mv-style-min.css */
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
p{margin:0;}
*,*::before,*::after{border-width:0;border-style:solid;border-color:#f5f4f4;}
.bg-black{background-color:#000;}
.rounded{border-radius:.625rem;}
.font-gilroy-medium{font-family:Gilroy-Medium;}
.mt-4{margin-top:1rem;}
.mr-4{margin-right:1rem;}
.opacity-75{opacity:.75;}
.py-3{padding-top:.75rem;padding-bottom:.75rem;}
.px-4{padding-left:1rem;padding-right:1rem;}
.absolute{position:absolute;}
.pin-t{top:0;}
.pin-r{right:0;}
.text-white{color:#fff;}
.text-base{font-size:2rem;}
@media (min-width: 768px){
.md\:mt-6{margin-top:1.5rem;}
.md\:mr-6{margin-right:1.5rem;}
}
@media (min-width: 992px){
.lg\:mt-8{margin-top:2rem;}
.lg\:mr-8{margin-right:2rem;}
}
/*! CSS Used fontfaces */
@font-face{font-family:'Noto Sans';src:url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.eot");src:url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.eot#iefix") format("embedded-opentype"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.woff2") format("woff2"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.woff") format("woff"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.ttf") format("truetype"),url("https://www.mindvalley.com/assets/webfonts/Noto-Sans.svg#svgFontName") format("svg");}
@font-face{font-family:'Gilroy-Medium';src:url(https://www.mindvalley.com/assets/webfonts/35707B_9_0.eot);src:url("https://www.mindvalley.com/assets/webfonts/35707B_9_0.eot#iefix") format("embedded-opentype"),url(https://www.mindvalley.com/assets/webfonts/35707B_9_0.woff2) format("woff2"),url(https://www.mindvalley.com/assets/webfonts/35707B_9_0.woff) format("woff"),url(https://www.mindvalley.com/assets/webfonts/35707B_9_0.ttf) format("truetype");}
@font-face{font-family:'Gilroy-Medium';src:url("https://static.mindvalley.com/global/webfonts/35707B_9_0.eot");src:url("https://static.mindvalley.com/global/webfonts/35707B_9_0.eot#iefix") format("embedded-opentype"),url("https://static.mindvalley.com/global/webfonts/35707B_9_0.woff2") format("woff2"),url("https://static.mindvalley.com/global/webfonts/35707B_9_0.woff") format("woff"),url("https://static.mindvalley.com/global/webfonts/35707B_9_0.ttf") format("truetype");}

.filter{
    position: absolute;
    width: 100%;
    height: inherit;
    background-color: rgba(0, 0, 0, .3);
    border-radius: .625rem;
}

</style>

@include('includes.schoolcontent')
<div role="main" class="view-school">



    <div style="width: 100%;">
        <div id="featured" class="DashboardGrid-sc-72u9wt-0 hztfNk">


            <div class="DashboardGrid__BlockType-sc-72u9wt-3 eElMjg"><svg width="40px" height="40px" viewBox="0 0 25 25" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-194.000000, -781.000000)" stroke="#5B5B6A">
                            <g transform="translate(195.000000, 782.000000)">
                                <path
                                  d="M6.44650411,0.834509391 L19.5184532,0.834509391 C20.6230227,0.834509391 21.5184532,1.72993989 21.5184532,2.83450939 C21.5184532,3.01518473 21.493971,3.19502692 21.4456749,3.36912764 L16.6163664,20.7780879 C16.3211049,21.8424631 15.2189017,22.4659529 14.1545265,22.1706913 C14.0633879,22.1454092 13.9741575,22.1136939 13.8875071,22.0757844 L1.66779836,16.7296618 C0.722421453,16.3160594 0.246903478,15.2511175 0.570006905,14.2711131 L4.54707498,2.20827541 C4.81738074,1.38841153 5.58323012,0.834509391 6.44650411,0.834509391 Z"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M5.5,9.5 L16.5,11.5" id="Line-2" stroke-linecap="square" fill-rule="nonzero"></path>
                                <path d="M4.5,11.5 L15.5,13.5" id="Line-2" stroke-linecap="square" fill-rule="nonzero"></path>
                                <path d="M3.5,13.5 L14.5,15.5" id="Line-2" stroke-linecap="square" fill-rule="nonzero"></path>
                                <circle fill-rule="nonzero" cx="8" cy="5" r="1"></circle>
                            </g>
                        </g>
                    </g>
                </svg>
                Nos écoles
            </div>

            <div class="container mx-auto px-0-force">
                <div class="flex lg:flex-wrap flex-to-scroll-container ml-2 lg:-mx-4">
                    @foreach($schools as $school)
                    @if($school->status == 'active' && $school->user->isAdmin())
                    <!-- Item 1 -->
                    <div class="flex-to-scroll-item w-80 lg:w-1/3 px-2 lg:px-4 pb-4 lg:pb-8">
                        <div class="flex items-end text-center rounded lg:h-128 h-96 bg-cover retina-bg relative md:shadow-lg" srcset="https://static.mindvalley.com/public/assets/2018/07/C42I_bg-school.jpg"
                          style="background-image: url('/images/schools/logos/{{$school->logo}}')">
                            <div class="filter">

                            </div>
                            <div style="z-index: 999;" class="w-full px-6 lg:px-8 pb-8">
                                <h4 class="text-white font-gilroy-bold md:text-3xl text-2xl text-center pb-4">{{$school->name}}</h4>
                                <!--
                                <p class="text-base font-gilroy-regular text-white leading-normal text-left">
                                    {{$school->heading}}
                                </p>
                            -->

                                <div class="mt-4 mr-4 md:mt-6 md:mr-6 lg:mt-8 lg:mr-8 rounded px-4 py-3 bg-black opacity-75 absolute pin-t pin-r font-gilroy-medium">
                                    <p class="text-white text-base before-green-dot">{{count($school->courses)}} cours</p>
                                </div>

                                <div class="mx-auto">
                                    <a href="{{url('schools', $school)}}" class="mv-button-blue transitions-100ms text-center mx-auto mt-4">Voir l'école</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Item 1 -->
                    @endif
                    @endforeach




                </div>
            </div>
        </div>
        <!--
        <button class="Button-ktk5iw-0 DashboardGrid__MoreButton-sc-72u9wt-1 lgEkUi">SHOW MORE</button>
    -->
    </div>


</div>
@include('includes.schoolcontentFooter')

@endsection
