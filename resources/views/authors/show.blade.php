@extends('layouts.menu-school')
@section('title', 'test')
@section('content')


<style media="screen">
/*! CSS Used from: https://www.educative.io/static/css/94.3705e7dd.chunk.css */
@media print{
img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
img{vertical-align:middle;}
/*! CSS Used from: Embedded */
img{max-width:100%;}
.iWGKgF{overflow:hidden;display:inline-block;border-radius:100%;transition:all 0.2s ease 0s;width:125px;height:125px;}
.iWGKgF img{object-fit:cover;vertical-align:inherit;}
.iWGKgF img{width:125px;height:125px;}
.hcbXTw{padding-bottom:10px;margin-top:100px;}
.dtMxWm{box-shadow:rgba(0, 0, 0, 0.4) 0px 0px 10px;margin:-65px auto 0px;display:flex;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;position:relative;}
</style>

<style media="screen">
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-h1{margin:16px;font-size:3.1875rem;text-align:center;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.167;letter-spacing:-0.01562em;}
@media (min-width:600px){
.MuiTypography-h1{font-size:4.4987rem;}
}
@media (min-width:800px){
.MuiTypography-h1{font-size:4.9272rem;}
}
@media (min-width:1025px){
.MuiTypography-h1{font-size:5.3556rem;}
}
/*! CSS Used from: https://www.educative.io/static/css/94.3705e7dd.chunk.css */
a{background-color:initial;}
a:active,a:hover{outline:0;}
h1{font-size:2em;margin:.67em 0;}
svg:not(:root){overflow:hidden;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
p{orphans:3;widows:3;}
}
*,:after,:before{box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h1{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h1{margin-top:20px;margin-bottom:10px;}
h1{font-size:36px;}
p{margin:0 0 10px;}
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.gvNPBR{font-weight:600;}
.iZATpM{display:flex;flex-direction:column;-webkit-box-align:center;align-items:center;text-align:center;margin-top:25px;flex:inherit;}
.gsPmAZ{text-align:center;margin-bottom:20px;}
.gsPmAZ a{display:inline-block;margin:0px 8px;}
.gsPmAZ svg{fill:rgb(0, 0, 0);height:18px;}
.gsPmAZ svg:hover{opacity:0.7;}
.koUUVY{font-size:20px;font-style:italic;max-width:850px;margin-bottom:40px;padding:0px 100px;text-align:left;}
.cnhNSd{width:100%;border-top:1px solid rgb(210, 210, 214);}
.blEAKO{font-size:16px;margin:40px auto 25px;padding:0px 20px;max-width:850px;text-align:left;}

</style>


    <div role="main" class="view-school">



        <div class="view-directory course-directory signed-in-directory">
            <div class="container">
                <div class="row search">

                    <div class="styles__ProfilePictureStyled-sdwfxm-0 hcbXTw">
                        <div size="125" class="styles__ProfileUserPic-sdwfxm-1 dtMxWm UserPic-iyi4aa-0 iWGKgF" overflow="hidden">
                            <div class=" sb-avatar sb-avatar--src" style="display: inline-block; vertical-align: middle; width: 125px; height: 125px; border-radius: 100%; font-family: Helvetica, Arial, sans-serif;"><img class=" sb-avatar__image" width="125px"
                                  height="125px" src="/images/users/authors/{{$author->image}}" alt="Educative" title="Educative"
                                  style="max-width: 100%; width: 125px; height: 125px; border-radius: 100%;"></div>
                        </div>
                    </div>

                    <div class="styles__ProfileViewStyled-sc-1dkvqrk-0 iZATpM">
                        <h1 class="MuiTypography-root Typography-ngwq8z-0 gvNPBR MuiTypography-h1">{{ucfirst($author->full_name)}}</h1>

                        <p class="styles__ShortBio-sc-1dkvqrk-2 koUUVY">
                            {{$author->headline}}
                        </p>
                        <div class="styles__Border-sc-1dkvqrk-3 cnhNSd"></div>
                        <div class="styles__FullBio-sc-1dkvqrk-4 blEAKO">
                            {!! $author->bio !!}
                        </div>
                    </div>

                    <h2 style="padding-top: 2rem; text-align: center;">Tous les cours de {{ucfirst($author->full_name)}}</h2>


                <div class="row course-list list">
                    <!-- Course Listing -->
                    @foreach($author->courses as $course)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div data-course-id="474431" data-course-url="/p/full" ,="" class="course-listing">
                            <div style="width: 100%;" class="row">
                                <a href="{{ route('course.slug', $course->slug) }}" data-role="course-box-link">
                                    <div class="col-lg-12">
                                        <!-- Course Image, Name & Subtitle (everyone) -->
                                        <div class="course-box-image-container">
                                            <img class="course-box-image" src="/images/courses/logos/{{$course->logo}}" role="presentation">
                                        </div>
                                        <div class="course-listing-title" role="heading" aria-level="2" title="The MissionFX Full Program">
                                            {{$course->name}}
                                        </div>
                                        <!-- Progress bar (enrolled users) -->
                                        @auth
                                        @if(Auth::user()->courses->contains($course->id))
                                        <div style="width: 95%;" class="col-xs-12" aria-hidden="false">
                                            <div class="progressbar">
                                                @if($course->type == 'mooc')
                                                @if(count($course->lessons) > 0)
                                                <div class="progressbar-fill" role="progressbar" aria-labelledby="percent-complete-628848" style="min-width:
                                                {{number_format((count(Auth::user()->lessons->where('course_id', $course->id)) / count($course->lessons)) * 100)}}%;" aria-valuenow="0%"></div>
                                                @endif
                                                @else
                                                @if(count($course->projects) > 0)
                                                <div class="progressbar-fill" role="progressbar" aria-labelledby="percent-complete-628848" style="min-width:
                                                {{number_format((count(Auth::user()->deliverables->where('course_id', $course->id)->where('status', '1')) / count($course->projects)) * 100)}}%;" aria-valuenow="0%"></div>
                                                @endif
                                                @endif

                                            </div>
                                        </div>
                                        @endif
                                        @endauth

                                        @guest
                                        <!-- Subtitle (unenrolled users) -->
                                        <div class="course-listing-subtitle" title="Trading made simple" role="heading" aria-level="3">
                                            {{ str_limit($course->subtitle, $limit = 100, $end = '...') }}
                                        </div>
                                        @endguest
                                        @auth
                                        @if(!Auth::user()->courses->contains($course->id))
                                        <!-- Subtitle (unenrolled users) -->
                                        <div class="course-listing-subtitle" title="Trading made simple" role="heading" aria-level="3">
                                            {{ str_limit($course->subtitle, $limit = 100, $end = '...') }}
                                        </div>
                                        @endif
                                        @endauth

                                    </div>
                                </a>
                            </div>
                            <div class="course-listing-extra-info col-xs-12">
                                <div class="pull-left">
                                    <!-- Bundle Info (everyone) -->

                                    <!-- Author Image and Name (everyone) -->
                                    <img align="left" class="img-circle" src="/images/users/authors/{{$course->author->image}}" alt="{{$course->author->full_name}}">
                                    <div class="small course-author-name">
                                        {{$course->author->full_name}}
                                    </div>

                                </div>
                                <!-- Progress percentage (enrolled users) -->
                                <div class="pull-right hidden" aria-hidden="true">
                                    <div class="small course-progress">
                                        <span class="percentage" id="percent-complete-474431" data-course-id="474431">
                                            %
                                        </span>
                                        <br>
                                        COMPLETE
                                    </div>
                                </div>
                                <!-- Price (unenrolled users) -->
                                <div class="pull-right">
                                    <div class="small course-price" id="course-box-price-product-1461563">
                                        $1,497
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center>


                        </center>
                    </div>
                </div>
                <br>
            </div>
        </div>



    </div>


    @endsection
