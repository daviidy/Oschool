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
.feiHSd{border-radius:99px;color:rgb(85, 83, 255);background-color:rgb(255, 255, 255);border:1px solid rgb(85, 83, 255);font-size:14px;font-weight:900;text-align:center;padding:12px 33px 10px;transition:all 0.2s ease 0s;margin:15px 0px;width:195px;}
.feiHSd:hover,.feiHSd:focus{background:rgb(85, 83, 255);color:rgb(255, 255, 255);outline:none;}
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
.iJUnuo{display:flex;font-size:12px;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;color:rgb(85, 83, 255);text-transform:uppercase;width:max-content;margin-top:15px;padding:12px 20px;align-self:center;}
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
.lgEkUi{border-radius:99px;border:1px solid rgb(85, 83, 255);font-size:14px;font-weight:900;text-align:center;padding:12px 33px 10px;transition:all 0.2s ease 0s;background:rgb(85, 83, 255);color:rgb(255, 255, 255);display:block;flex:inherit;margin:0px auto;}
.lgEkUi:hover,.lgEkUi:focus{background:rgb(85, 83, 255);color:rgb(255, 255, 255);outline:none;}
.lgEkUi:hover,.lgEkUi:focus{border-color:rgb(35, 32, 204);background:rgb(35, 32, 204);}
.lgEkUi:hover,.lgEkUi:focus{transform:scale(1.05);}
.eElMjg{display:flex;flex-flow:row wrap;flex:1 0 auto;-webkit-box-pack:start;justify-content:flex-start;padding:30px 75px;font-size:30px;color:rgb(91, 91, 106);}
.eElMjg svg{stroke-width:1.5px;margin-right:20px;}
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
</style>

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
            <div class="my-masonry-grid">
                @php
                $counter = 1;
                @endphp
                @foreach($schools as $school)
                @if($counter % 3 == 1)
                <div class="my-masonry-grid_column" style="width: 33.3333%;">
                @endif
                    <a class="WorkTile__ResponsiveTile-sc-7ava27-0 fIjoWc" href="{{url('schools', $school)}}">
                        <div style="background:url(/images/schools/logos/{{$school->logo}}) center center / cover no-repeat;" class="WorkTile__CoverImg-sc-7ava27-1 jRnmqO">
                            <!--
                            <button class="Price-ucxtf-0 WorkTile__Price-sc-7ava27-2 bAldwA">
                                $49
                            </button>
                        -->
                        </div>
                        <div class="AuthorWrapper-sc-1x5lkup-0 WorkTile__AuthorWrapper-sc-7ava27-6 hfoAcr">
                            <!--
                            <div size="20" class="UserPic-iyi4aa-0 bhzjht" overflow="hidden">
                                <div class=" sb-avatar sb-avatar--src" style="display: inline-block; vertical-align: middle; width: 20px; height: 20px; border-radius: 100%; font-family: Helvetica, Arial, sans-serif;"><img class=" sb-avatar__image"
                                      width="20px" height="20px" src="https://lh3.googleusercontent.com/1-n5n_sp4WcrkExvFWQ7krTVCbf9_bLQxWpyqClWvOEMyHPVMvldmdKJVfZDkeTOQNhJd1lRRCML1oj4O8vdl68DB5Ua=s100" alt="Dmytro Danylyk" title="Dmytro Danylyk"
                                      style="max-width: 100%; width: 20px; height: 20px; border-radius: 100%;"></div>
                            </div>

                            <div class="AuthorName-njytr8-0 hoHWfD">
                                Dmytro Danylyk
                            </div>
                        -->
                        </div>
                        <div class="Title-lm7kt8-0 WorkTile__WorkTitle-sc-7ava27-5 csuynr">{{$school->name}}</div>
                        <div class="LessonCountWrapper-sc-17cuvu8-0 WorkTile__LessonCountWrapper-sc-7ava27-12 iJUnuo"><svg width="17px" height="19px" viewBox="0 0 17 19" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-716.000000, -1031.000000)">
                                        <g transform="translate(629.000000, 761.000000)">
                                            <g transform="translate(87.000000, 270.000000)">
                                                <rect fill="#C8C7FF" opacity="0.404129464" x="6" y="4" width="11" height="15" rx="2"></rect>
                                                <rect fill="#C8C7FF" x="3" y="2" width="11" height="15" rx="2"></rect>
                                                <rect fill="#4B49FF" x="0" y="0" width="11" height="15" rx="2"></rect>
                                                <polyline stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" points="4 5 7 7.27517236 4 10"></polyline>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>{{count($school->courses)}} Cours</div><button class="Button-ktk5iw-0 Button-sc-1rispbr-0 feiHSd">VOIR L'ECOLE</button>
                    </a>
                @if($counter % 3 == 0)
                </div>
                @endif
                @php
                $counter++;
                @endphp
                @endforeach

            </div>
        </div>
        <!--
        <button class="Button-ktk5iw-0 DashboardGrid__MoreButton-sc-72u9wt-1 lgEkUi">SHOW MORE</button>
    -->
    </div>


</div>


@endsection
