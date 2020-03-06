    @extends('layouts.menu-school')

    @section('content')

    <style media="screen">
    /*! CSS Used from: Embedded */
article,header,section{display:block;}
h1{font-size:2em;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
div,h1,h2,a,article,header,section{margin-top:0;}
*,*:before,*:after{box-sizing:inherit;}
a{-webkit-transition:all 200ms ease;-moz-transition:all 200ms ease;transition:all 200ms ease;color:#4a90e2;}
a:active,a:hover,a:focus{-webkit-transition:all 200ms ease;-moz-transition:all 200ms ease;transition:all 200ms ease;outline:none;color:#4a90e2;}
.button{-webkit-transition:all 200ms ease,font-size 200ms ease;-moz-transition:all 200ms ease,font-size 200ms ease;transition:all 200ms ease,font-size 200ms ease;display:inline-block;padding:0.5rem 1rem;border:2px solid transparent;border-radius:100px;font-family:"Montserrat",Sans-Serif;font-size:1em;font-weight:500;line-height:normal;text-align:center;text-decoration:none;}
.button:active,.button:focus,.button:hover{-webkit-transition:all 300ms ease,box-shadow 400ms ease;-moz-transition:all 300ms ease,box-shadow 400ms ease;transition:all 300ms ease,box-shadow 400ms ease;box-shadow:0 4px 8px 0 rgba(0,0,0,0.15);}
.button-primary{border:2px solid #4a90e2;background-color:#4a90e2;color:#fff;border-radius:0px;}
.button-primary:active,.button-primary:focus,.button-primary:hover{border-color:#4a90e2;background-color:#4a90e2;color:#fff;}
:focus{outline:1px solid #969696;outline-offset:-1px;outline-style:solid;}
::-webkit-input-placeholder{color:#9c9c9c;}
::-moz-placeholder{color:#9c9c9c;}
:-ms-input-placeholder{color:#9c9c9c;}
:-moz-placeholder{color:#9c9c9c;}
::placeholder{color:#9c9c9c;}
h1,h2{margin:0 0 1rem;font-family:"Montserrat",sans-serif;line-height:1.2;}
h1{font-size:3.36698rem;}
h2{font-size:2.52587rem;}
@media all and (min-width: 768px){
h1{font-size:3.78785rem;}
h2{font-size:2.8416rem;}
}
@media all and (min-width: 992px){
h1{font-size:4.20873em;}
h2{font-size:3.15733em;}
}
h1[class*="__heading"]{margin-bottom:1rem;font-size:2.5rem;text-align:center;}
@media all and (min-width: 768px){
h1[class*="__heading"]{font-size:3rem;text-align:left;}
}
.section__headings{margin:0 0 2rem;}
.section__heading{margin:0;font-family:"Montserrat",sans-serif;font-weight:400;line-height:1.2;margin-bottom:0.5rem;color:#191919;font-size:1.8rem;}
@media all and (min-width: 480px){
.section__heading{font-size:2.2rem;}
}
.section__subheading{font-family:"Montserrat",sans-serif;font-weight:400;line-height:1.2;color:#191919;font-size:1.5rem;}
.section-height__large>[class*="__container"]{padding-top:7.5rem;padding-bottom:7.5rem;}
@media all and (max-width: 767px){
.banner{min-height:100vh;}
}
@media all and (min-width: 992px){
.banner{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;}
}
.banner .section__button-group{padding-top:2rem;}
@media all and (min-width: 768px) and (max-width: 992px){
.banner.section--has-free-trial .section__content{position:relative;width:100%;flex:0 0 100%;max-width:100%;}
}
.banner .section__content{position:relative;width:100%;padding-right:1rem;padding-left:1rem;flex:0 0 100%;max-width:100%;}
@media all and (min-width: 768px){
.banner .section__content{position:relative;width:100%;padding-right:1rem;padding-left:1rem;flex:0 0 66.66667%;max-width:66.66667%;}
}
@media all and (min-width: 992px){
.banner .section__content{position:relative;width:100%;padding-right:1rem;padding-left:1rem;flex:0 0 50%;max-width:50%;}
}
@media all and (min-width: 992px){
.banner .section__headings{margin:0;}
}
.banner .section__heading{font-family:"Roboto",sans-serif;font-size:3.15733em;font-weight:700;}
.banner .section__subheading{font-family:"Montserrat",sans-serif;font-size:1em;}
.banner .section__button-group{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-lines:multiple;-moz-box-lines:multiple;box-lines:multiple;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:start;-moz-box-align:start;box-align:start;-webkit-align-items:flex-start;-moz-align-items:flex-start;-ms-align-items:flex-start;-o-align-items:flex-start;align-items:flex-start;-ms-flex-align:start;margin-bottom:2rem;}
.banner .section__button-group:after,.banner .section__button-group:before{-webkit-flex-basis:0;-moz-flex-basis:0;flex-basis:0;-ms-flex-preferred-size:0;order:1;}
.banner .section__button-group .button{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-align-self:center;-moz-align-self:center;align-self:center;-ms-flex-item-align:center;-webkit-flex-basis:auto;-moz-flex-basis:auto;flex-basis:auto;-ms-flex-preferred-size:auto;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-ordinal-group:2;-moz-box-ordinal-group:2;box-ordinal-group:2;-webkit-order:2;-moz-order:2;order:2;-ms-flex-order:2;}
@media all and (max-width: 479px){
.banner .section__button-group .button{width:100%;}
}
@media all and (min-width: 480px){
.banner .section__button-group .button{margin-right:1rem;}
}
.banner .section__button-group .button-primary{-webkit-box-ordinal-group:1;-moz-box-ordinal-group:1;box-ordinal-group:1;-webkit-order:1;-moz-order:1;order:1;-ms-flex-order:1;}
@media all and (min-width: 1200px){
.banner .section__button-group{-webkit-box-lines:single;-moz-box-lines:single;box-lines:single;-webkit-flex-wrap:nowrap;-moz-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;}
}
.banner .section__button-group .button{padding:0.5rem 1.5rem;}
@media all and (max-width: 479px){
.banner .section__button-group .button{margin-bottom:1rem;}
}
.banner__container{position:relative;width:100%;max-height:100%;margin:0 auto;padding-right:1rem;padding-left:1rem;}
@media all and (min-width: 768px){
.banner__container{max-width:768px;}
}
@media all and (min-width: 992px){
.banner__container{max-width:992px;}
}
@media all and (min-width: 1200px){
.banner__container{max-width:1200px;}
}
.banner__wrapper{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-lines:multiple;-moz-box-lines:multiple;box-lines:multiple;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-1rem;margin-left:-1rem;padding-right:0;padding-left:0;}
.banner__wrapper:after,.banner__wrapper:before{-webkit-flex-basis:0;-moz-flex-basis:0;flex-basis:0;-ms-flex-preferred-size:0;order:1;}
.button-primary{border:2px solid #4a90e2;background-color:#4a90e2;color:#fff;border-radius:0px!important;}
.button-primary:active,.button-primary:focus,.button-primary:hover{border-color:#4a90e2;background-color:#4a90e2;color:#fff;}
.banner___ce384{background:linear-gradient(rgba(0,0,0,0.66), rgba(0,0,0,0.66)),url(https://s3.amazonaws.com/thinkific-import/88925/tvgNqW7SMk0slAfUZ9zw_academy-thumb.png);position:relative;background-repeat:no-repeat;background-size:cover;background-position:left;}
.banner___ce384 .section__heading___ce384{color:#ffffff;}
.banner___ce384 .section__subheading___ce384{color:#ffffff;}
.banner___ce384 .section__heading___ce384{text-align:left;}
.banner___ce384 .section__subheading___ce384{text-align:left;}
.banner___ce384 .section__content___ce384{text-align:left;}
@media all and (min-width: 768px){
.banner___ce384 .section__heading___ce384{font-size:3rem;}
}

    </style>



    <div role="main" class="view-school">



        <div style="padding-top: 0px;" class="view-directory course-directory signed-in-directory">

            <section class="banner section-background section-background-overlay section__content-alignment--left section-height__large section--has-additional-prices section--has-free-trial banner___ce384" data-preview-item="banner">
                <div class="banner__container">
                    <div class="banner__wrapper">
                        <article class="section__content section__content___ce384">

                            <header class="section__headings">

                                <h1 class="section__heading section__heading___ce384">{{$school->name}}</h1>


                                <h2 class="section__subheading section__subheading___ce384">{{$school->heading}}</h2>

                            </header>


                            <section class="section__button-group">

                                <a class="button button-primary" href="/cart/add_product/614643?price_id=650383">Enroll Now</a>


                            </section>

                        </article>
                    </div>
                </div>
            </section>

            <div class="container">
                <!--
                <h2 style="text-align: center;">{{$school->name}}</h2>
            -->
                <!--pour le slider-->
                <!--
                <div class="css-gl013y">
                    <div class="css-1ncomx8">
                        <h2 class="css-1ac5tn2">{{$school->heading}}</h2>
                        <div class="css-1npclfr">
                            <p>{!!$school->description!!}</p>
                            <p><strong><a>{{$school->city}} {{$school->state}} {{$school->street}}</a></strong></p>
                        </div>
                    </div>
                    <div class="css-3cg4xb"><img src="/images/schools/backgrounds/{{$school->background}}" alt="filesharing mobile + security badge" class="css-9whsf3"></div>
                </div>
            -->

                <h2 style="text-align: center;">Les cours de {{$school->name}}</h2>
                <div class="row course-list list">

                    <!-- Course Listing -->
                    @foreach($school->courses->take(3) as $course)
                    @if($course->state == 'active')
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div data-course-id="474431" data-course-url="/p/full" ,="" class="course-listing">
                            <div class="row">
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
                                        <div class="col-xs-12" aria-hidden="false">
                                            <div class="progressbar">
                                                <div class="progressbar-fill" role="progressbar" aria-labelledby="percent-complete-628848" style="min-width: 0%;" aria-valuenow="0%"></div>
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
                    @endif
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center>
                          <a class="btn btn-md btn-primary" href="/schools/{{$school->id}}/courses">View All Courses</a>
                        </center>
                    </div>
                </div>
                <br>

                <div class="css-gl013y">
                    <div class="css-1ncomx8">
                        <h2 class="css-1ac5tn2">{{$school->heading}}</h2>
                        <div class="css-1npclfr">
                            <p>{!!$school->description!!}</p>
                            <p><strong><a>{{$school->city}} {{$school->state}} {{$school->street}}</a></strong></p>
                        </div>
                    </div>
                    <div class="css-3cg4xb"><img src="/images/schools/backgrounds/{{$school->background}}" alt="filesharing mobile + security badge" class="css-9whsf3"></div>
                </div>
            </div>


        </div>





    </div>


    @endsection
