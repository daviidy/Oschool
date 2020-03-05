    @extends('layouts.menu-school')

    @section('content')
    <div role="main" class="view-school">



        <div class="view-directory course-directory signed-in-directory">
            <div class="container">

                <h2 style="text-align: center;">{{$school->name}}</h2>

                <!--pour le slider-->
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
            </div>


        </div>





    </div>


    @endsection
