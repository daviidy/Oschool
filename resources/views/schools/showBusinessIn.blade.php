@extends('layouts.menu-school')
@section('title', 'Tous les cours')
@section('content')

    <div role="main" class="view-school">



        <div class="view-directory course-directory signed-in-directory">
            <div class="container">
                <div class="row search">

                    <!-- Filter: Category -->
                    <div class="pull-left course-filter">
                        <div class="filter-label">
                            Types de formation:
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default btn-lg btn-course-filter dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                @if($type == 'mooc')
                                MOOC
                                @elseif($type == 'path')
                                Spécialisations
                                @elseif($type == 'bootcamp')
                                Formations en salle
                                @else
                                Tous
                                @endif
                                <span class="caret"></span>

                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/schools/{{$school->id}}/courses">Tous</a></li>
                                <li><a href="/schools/{{$school->id}}/courses/filter/mooc">MOOC</a></li>
                                <li><a href="/schools/{{$school->id}}/courses/filter/path">Spécialisations</a></li>
                                <li><a href="/schools/{{$school->id}}/courses/filter/bootcamp">Formations en salle</a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Filter: Category
                    <div class="pull-left course-filter">
                        <div class="filter-label">
                            Catégories:
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default btn-lg btn-course-filter dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">

                                Tous <span class="caret"></span>

                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/schools/{{$school->id}}/courses/filter/all">Tous</a></li>
                                <li><a href="/schools/{{$school->id}}/courses/filter/mooc">MOOC</a></li>
                                <li><a href="/schools/{{$school->id}}/courses/filter/path">Spécialisations</a></li>
                                <li><a href="/schools/{{$school->id}}/courses/filter/bootcamp">Formations en salle</a></li>

                            </ul>
                        </div>
                    </div>
                -->

                    <!-- Search Box -->
                    <div class="col-lg-4 col-md-4 col-xs-12 pull-right">
                        <form role="search" method="get" action="/search">
                            @csrf
                            <div class="input-group">
                                <label for="search-courses" class="sr-only">Trouver un cours</label>
                                <input class="form-control search input-lg" data-list=".list" id="search-courses" name="query" placeholder="Trouvez un cours" type="text">
                                <!--
                                <span class="input-group-btn">
                                    <button aria-label="Search Courses" id="search-course-button" class="btn search btn-default btn-lg" type="submit"><i class="fa fa-search" title="Search"></i></button>
                                </span>
                            -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Filter Title & Description-->


                <div class="row course-list list">
                    <!-- Course Listing -->
                    @foreach($courses as $course)
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
                                                <div class="progressbar-fill" role="progressbar" aria-labelledby="percent-complete-628848" style="min-width: {{number_format((count(Auth::user()->lessons->where('course_id', $lesson->course_id)) / count($lesson->course->lessons)) * 100)}}%;" aria-valuenow="0%"></div>
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
